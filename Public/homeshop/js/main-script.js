// jquery.tweet.js - See http://tweet.seaofclouds.com/ or https://github.com/seaofclouds/tweet for more info
// Copyright (c) 2008-2012 Todd Matthews & Steve Purcell
// Modified by Stan Scates for https://github.com/StanScates/Tweet.js-Mod

(function (factory) {
	if (typeof define === 'function' && define.amd)
	define(['jquery'], factory); // AMD support for RequireJS etc.
	else
	factory(jQuery);
}(function ($) {
	$.fn.tweet = function(o){
		var s = $.extend({
			modpath: "twitter/",                     // [string]   relative URL to Tweet.js mod (see https://github.com/StanScates/Tweet.js-Mod)
			username: "fanfbmltemplate",                           // [string or array] required unless using the 'query' option; one or more twitter screen names (use 'list' option for multiple names, where possible)
			list_id: null,                            // [integer]  ID of list to fetch when using list functionality
			list: null,                               // [string]   optional slug of list belonging to username
			favorites: false,                         // [boolean]  display the user's favorites instead of his tweets
			query: null,                              // [string]   optional search query (see also: http://search.twitter.com/operators)
			avatar_size: null,                        // [integer]  height and width of avatar if displayed (48px max)
			count: 3,                                 // [integer]  how many tweets to display?
			fetch: null,                              // [integer]  how many tweets to fetch via the API (set this higher than 'count' if using the 'filter' option)
			page: 1,                                  // [integer]  which page of results to fetch (if count != fetch, you'll get unexpected results)
			retweets: true,                           // [boolean]  whether to fetch (official) retweets (not supported in all display modes)
			intro_text: null,                         // [string]   do you want text BEFORE your your tweets?
			outro_text: null,                         // [string]   do you want text AFTER your tweets?
			join_text:  null,                         // [string]   optional text in between date and tweet, try setting to "auto"
			auto_join_text_default: "i said,",        // [string]   auto text for non verb: "i said" bullocks
			auto_join_text_ed: "i",                   // [string]   auto text for past tense: "i" surfed
			auto_join_text_ing: "i am",               // [string]   auto tense for present tense: "i was" surfing
			auto_join_text_reply: "i replied to",     // [string]   auto tense for replies: "i replied to" @someone "with"
			auto_join_text_url: "i was looking at",   // [string]   auto tense for urls: "i was looking at" http:...
			loading_text: null,                       // [string]   optional loading text, displayed while tweets load
			refresh_interval: null ,                  // [integer]  optional number of seconds after which to reload tweets
			twitter_url: "twitter.com",               // [string]   custom twitter url, if any (apigee, etc.)
			twitter_api_url: "api.twitter.com",       // [string]   custom twitter api url, if any (apigee, etc.)
			twitter_search_url: "api.twitter.com", // [string]   custom twitter search url, if any (apigee, etc.)
			template: "{avatar}{time}{join}{text}",   // [string or function] template used to construct each tweet <li> - see code for available vars
			comparator: function(tweet1, tweet2) {    // [function] comparator used to sort tweets (see Array.sort)
				return tweet2["tweet_time"] - tweet1["tweet_time"];
			},
			filter: function(tweet) {                 // [function] whether or not to include a particular tweet (be sure to also set 'fetch')
				return true;
			}
		// You can attach callbacks to the following events using jQuery's standard .bind() mechanism:
		//   "loaded" -- triggered when tweets have been fetched and rendered
		}, o);

		// See http://daringfireball.net/2010/07/improved_regex_for_matching_urls
		var url_regexp = /\b((?:[a-z][\w-]+:(?:\/{1,3}|[a-z0-9%])|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'".,<>?«»“”‘’]))/gi;

		// Expand values inside simple string templates with {placeholders}
		function t(template, info) {
			if (typeof template === "string") {
				var result = template;
				for(var key in info) {
					var val = info[key];
					result = result.replace(new RegExp('{'+key+'}','g'), val === null ? '' : val);
				}
				return result;
			} else return template(info);
		}
		// Export the t function for use when passing a function as the 'template' option
		$.extend({tweet: {t: t}});

		function replacer (regex, replacement) {
			return function() {
				var returning = [];
				this.each(function() {
					returning.push(this.replace(regex, replacement));
				});
				return $(returning);
			};
		}

		function escapeHTML(s) {
			return s.replace(/</g,"&lt;").replace(/>/g,"^&gt;");
		}

		$.fn.extend({
			linkUser: replacer(/(^|[\W])@(\w+)/gi, "$1<span class=\"at\">@</span><a href=\"http://"+s.twitter_url+"/$2\">$2</a>"),
			// Support various latin1 (\u00**) and arabic (\u06**) alphanumeric chars
			linkHash: replacer(/(?:^| )[\#]+([\w\u00c0-\u00d6\u00d8-\u00f6\u00f8-\u00ff\u0600-\u06ff]+)/gi,
				' <a href="https://twitter.com/search?q=%23$1'+((s.username && s.username.length == 1 && !s.list) ? '&from='+s.username.join("%2BOR%2B") : '')+'" class="tweet_hashtag">#$1</a>'),
			makeHeart: replacer(/(&lt;)+[3]/gi, "<tt class='heart'>&#x2665;</tt>")
		});

		function linkURLs(text, entities) {
			return text.replace(url_regexp, function(match) {
				var url = (/^[a-z]+:/i).test(match) ? match : "http://"+match;
				var text = match;
				for(var i = 0; i < entities.length; ++i) {
					var entity = entities[i];
					if (entity.url == url && entity.expanded_url) {
						url = entity.expanded_url;
						text = entity.display_url;
						break;
					}
				}
				return "<a href=\""+escapeHTML(url)+"\">"+escapeHTML(text)+"</a>";
			});
		}

		function parse_date(date_str) {
			// The non-search twitter APIs return inconsistently-formatted dates, which Date.parse
			// cannot handle in IE. We therefore perform the following transformation:
			// "Wed Apr 29 08:53:31 +0000 2009" => "Wed, Apr 29 2009 08:53:31 +0000"
			return Date.parse(date_str.replace(/^([a-z]{3})( [a-z]{3} \d\d?)(.*)( \d{4})$/i, '$1,$2$4$3'));
		}

		function relative_time(date) {
			var relative_to = (arguments.length > 1) ? arguments[1] : new Date();
			var delta = parseInt((relative_to.getTime() - date) / 1000, 10);
			var r = '';
			if (delta < 1) {
				r = 'just now';
			} else if (delta < 60) {
				r = delta + ' seconds ago';
			} else if(delta < 120) {
				r = 'about a minute ago';
			} else if(delta < (45*60)) {
				r = 'about ' + (parseInt(delta / 60, 10)).toString() + ' minutes ago';
			} else if(delta < (2*60*60)) {
				r = 'about an hour ago';
			} else if(delta < (24*60*60)) {
				r = 'about ' + (parseInt(delta / 3600, 10)).toString() + ' hours ago';
			} else if(delta < (48*60*60)) {
				r = 'about a day ago';
			} else {
				r = 'about ' + (parseInt(delta / 86400, 10)).toString() + ' days ago';
			}
			return r;
		}

		function build_auto_join_text(text) {
			if (text.match(/^(@([A-Za-z0-9-_]+)) .*/i)) {
				return s.auto_join_text_reply;
			} else if (text.match(url_regexp)) {
				return s.auto_join_text_url;
			} else if (text.match(/^((\w+ed)|just) .*/im)) {
				return s.auto_join_text_ed;
			} else if (text.match(/^(\w*ing) .*/i)) {
				return s.auto_join_text_ing;
			} else {
				return s.auto_join_text_default;
			}
		}

		function build_api_request() {
			var modpath = s.modpath,
				count = (s.fetch === null) ? s.count : s.fetch,
				defaults = {
					include_entities: 1
				};

			if (s.list) {
				return {
					host: s.twitter_api_url,
					url: "/1.1/lists/statuses.json",
					parameters: $.extend({}, defaults, {
						list_id: s.list_id,
						slug: s.list,
						owner_screen_name: s.username,
						page: s.page,
						count: count,
						include_rts: (s.retweets ? 1 : 0)
					})
				};
			} else if (s.favorites) {
				return {
					host: s.twitter_api_url,
					url: "/1.1/favorites/list.json",
					parameters: $.extend({}, defaults, {
						list_id: s.list_id,
						screen_name: s.username,
						page: s.page,
						count: count
					})
				};
			} else if (s.query === null && s.username.length === 1) {
				return {
					host: s.twitter_api_url,
					url: "/1.1/statuses/user_timeline.json",
					parameters: $.extend({}, defaults, {
						screen_name: s.username,
						page: s.page,
						count: count,
						include_rts: (s.retweets ? 1 : 0)
					})
				};
			} else {
				var query = (s.query || 'from:'+s.username.join(' OR from:'));
				return {
					host: s.twitter_search_url,
					url: "/1.1/search/tweets.json",
					parameters: $.extend({}, defaults, {
						q: query,
						count: count
					})
				};
			}
		}

		function extract_avatar_url(item, secure) {
			if (secure) {
				return ('user' in item) ?
					item.user.profile_image_url_https :
					extract_avatar_url(item, false).
					replace(/^http:\/\/[a-z0-9]{1,3}\.twimg\.com\//, "https://s3.amazonaws.com/twitter_production/");
			} else {
				return item.profile_image_url || item.user.profile_image_url;
			}
		}

		// Convert twitter API objects into data available for
		// constructing each tweet <li> using a template
		function extract_template_data(item) {
			var o = {};
			o.item = item;
			o.source = item.source;
			// The actual user name is not returned by all Twitter APIs, so please do not file an issue if it is empty.
			o.name = item.from_user_name || item.user.name;
			o.screen_name = item.from_user || item.user.screen_name;
			o.avatar_size = s.avatar_size;
			o.avatar_url = extract_avatar_url(item, (document.location.protocol === 'https:'));
			o.retweet = typeof(item.retweeted_status) != 'undefined';
			o.tweet_time = parse_date(item.created_at);
			o.join_text = s.join_text == "auto" ? build_auto_join_text(item.text) : s.join_text;
			o.tweet_id = item.id_str;
			o.twitter_base = "http://"+s.twitter_url+"/";
			o.user_url = o.twitter_base+o.screen_name;
			o.tweet_url = o.user_url+"/status/"+o.tweet_id;
			o.reply_url = o.twitter_base+"intent/tweet?in_reply_to="+o.tweet_id;
			o.retweet_url = o.twitter_base+"intent/retweet?tweet_id="+o.tweet_id;
			o.favorite_url = o.twitter_base+"intent/favorite?tweet_id="+o.tweet_id;
			o.retweeted_screen_name = o.retweet && item.retweeted_status.user.screen_name;
			o.tweet_relative_time = relative_time(o.tweet_time);
			o.entities = item.entities ? (item.entities.urls || []).concat(item.entities.media || []) : [];
			o.tweet_raw_text = o.retweet ? ('RT @'+o.retweeted_screen_name+' '+item.retweeted_status.text) : item.text; // avoid '...' in long retweets
			o.tweet_text = $([linkURLs(o.tweet_raw_text, o.entities)]).linkUser().linkHash()[0];
			o.tweet_text_fancy = $([o.tweet_text]).makeHeart()[0];

			// Default spans, and pre-formatted blocks for common layouts
			o.user = t('<a class="tweet_user" href="{user_url}">{screen_name}</a>', o);
			o.join = s.join_text ? t(' <span class="tweet_join">{join_text}</span> ', o) : ' ';
			o.avatar = o.avatar_size ?
				t('<a class="tweet_avatar" href="{user_url}"><img src="{avatar_url}" height="{avatar_size}" width="{avatar_size}" alt="{screen_name}\'s avatar" title="{screen_name}\'s avatar" border="0"/></a>', o) : '';
			o.time = t('<span class="tweet_time"><a href="{tweet_url}" title="view tweet on twitter">{tweet_relative_time}</a></span>', o);
			o.text = t('<span class="tweet_text">{tweet_text_fancy}</span>', o);
			o.reply_action = t('<a class="tweet_action tweet_reply" href="{reply_url}">reply</a>', o);
			o.retweet_action = t('<a class="tweet_action tweet_retweet" href="{retweet_url}">retweet</a>', o);
			o.favorite_action = t('<a class="tweet_action tweet_favorite" href="{favorite_url}">favorite</a>', o);
			return o;
		}

		return this.each(function(i, widget){
			var list = $('<ul class="tweet_list">');
			var intro = '<p class="tweet_intro">'+s.intro_text+'</p>';
			var outro = '<p class="tweet_outro">'+s.outro_text+'</p>';
			var loading = $('<p class="loading">'+s.loading_text+'</p>');

			if(s.username && typeof(s.username) == "string"){
				s.username = [s.username];
			}

			$(widget).unbind("tweet:load").bind("tweet:load", function(){
				if (s.loading_text) $(widget).empty().append(loading);

				$.ajax({
					dataType: "json",
					type: "post",
					async: false,
					url: s.modpath || "/twitter/",
					data: { request: build_api_request() },
					success: function(data, status) {

						if(data.message) {
							console.log(data.message);
						}

						var response = data.response;
						$(widget).empty().append(list);
						if (s.intro_text) list.before(intro);
						list.empty();

						if(response.statuses !== undefined) {
							resp = response.statuses;
						} else if(response.results !== undefined) {
							resp = response.results;
						} else {
							resp = response;
						}

						var tweets = $.map(resp, extract_template_data);
							tweets = $.grep(tweets, s.filter).sort(s.comparator).slice(0, s.count);

						list.append($.map(tweets, function(o) { return "<li>" + t(s.template, o) + "</li>"; }).join('')).
							children('li:first').addClass('tweet_first').end().
							children('li:odd').addClass('tweet_even').end().
							children('li:even').addClass('tweet_odd');

						if (s.outro_text) list.after(outro);
						$(widget).trigger("loaded").trigger((tweets ? "empty" : "full"));
						if (s.refresh_interval) {
							window.setTimeout(function() { $(widget).trigger("tweet:load"); }, 1000 * s.refresh_interval);
						}
					}
				});
			}).trigger("tweet:load");
		});
	};
}));
//
//
//
/*! http://tinynav.viljamis.com v1.2 by @viljamis */
(function(a,k,g){a.fn.tinyNav=function(l){var c=a.extend({active:"selected",header:"",indent:"- ",label:""},l);return this.each(function(){g++;var h=a(this),b="tinynav"+g,f=".l_"+b,e=a("<select/>").attr("id",b).addClass("tinynav "+b);if(h.is("ul,ol")){""!==c.header&&e.append(a("<option/>").text(c.header));var d="";h.addClass("l_"+b).find("a").each(function(){d+='<option value="'+a(this).attr("href")+'">';var b;for(b=0;b<a(this).parents("ul, ol").length-1;b++)d+=c.indent;d+=a(this).text()+"</option>"});
e.append(d);c.header||e.find(":eq("+a(f+" li").index(a(f+" li."+c.active))+")").attr("selected",!0);e.change(function(){k.location.href=a(this).val()});a(f).after(e);c.label&&e.before(a("<label/>").attr("for",b).addClass("tinynav_label "+b+"_label").append(c.label))}})}})(jQuery,this,0);
//----Include-Function----
function include(url){ 
	"use strict";
	document.write('<script src="'+ url + '" type="text/javascript"></script>'); 
}


include('twitter/jquery.tweet.js'); // Twitter widget */
include('js/tinynav.min.js'); // Tiny nav



$(document).ready(function(){
	"use strict";
	
	
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
	
	
	
	/* Quick View */
	quickViewModal($('a.product-hover'));
	
	
	
	/* Functions */
	dropdownsNavigation(); // DropDowns
	
	searchBar(); // Search Bar
	
	selectBox(); // Select Boxes (Chosen plugin)
	
	backToTop(); // Back to top arrow
	
	backToTopEvent(); // Initialize back to top event
	
	tabsOn(); // Turn Tabs On
	
	accordionsOn(); // Turn Accordions On
	
	fixNavigation(); // Fix Main Navigation
	
	fixGridView(); // Fix Category Grid View
	
	installCarousels(); // Install Owl Carousels
	
	installNoUiSlider(); // Installs noUi Slider
	
	singleProduct(); // Cloud Zoom
	
	
	
	
	
	
	/* Window Scroll */
	$(window).scroll(function(){
		
		backToTop(); // Back to top
				
	});
	
	
	
	/* Window Resize */
	$(window).resize(function(){
	
		// Set the new Window Width and Height
		windowWidth = $(window).width();
		windowHeight = $(window).height();
		
		
		fixNavigation(); // Fix Main Navigation
		
		fixGridView(); // Fix Category Grid View
		
		fixRevolutionArrows(); // Fix Revolution Sliders Arrows
		
		
	});
	
	
	
	
	/* Twitter WIdget */
	$('#twitter-widget').tweet({
		modpath: 'twitter/',
		count: 2,
		loading_text: 'loading twitter feed...',
	});
	
	
	
	
	/* Tooltips */
	$('.tooltip-hover').tooltip();
	
	
	
	
	// TinyNav.js 1
	$('#main-navigation>ul').tinyNav({
		active: 'current-item',
		header: 'Navigation',
		indent: '→',
		label: 'Menu'
	});
	
	
	
	
	
	/* Revolutions Slider */
	jQuery('.tp-banner').revolution({
		delay:9000,
		startwidth:1170,
		startheight:500,
		hideThumbs:10,
		navigationType:"none"
	});
	
	
	
	
	/* IOS Slider */
	$('.iosSlider').iosSlider({
		scrollbar: true,
		snapToChildren: true,
		desktopClickDrag: true,
		scrollbarMargin: '5px 40px 0 40px',
		scrollbarBorderRadius: 0,
		scrollbarHeight: '2px',
		navPrevSelector: $('.prevButton'),
		navNextSelector: $('.nextButton')
	});
	
	
	
	
	
	/* FlexSlider */
	$('.flexslider').flexslider({
		animation: "slide",
		controlNav: false,
		prevText: "",           
		nextText: "",
		start: function(slider){
			$('body').removeClass('loading');
			}
	});
	
	/* Sidebar Flexslider */
	$('.sidebar-flexslider').flexslider({
		animation: "slide",
		controlNav: true,
		directionNav: false,
		prevText: "",           
		nextText: "",
		start: function(slider){
			$('body').removeClass('loading');
			}
	});
	
	
	
	
	
	/* Rating */
	
	// Read Only
	$('.rating.readonly-rating').raty({ 
		readOnly: true,
		path:'/tkphp/Public/homeshop/js/img',
		score: function() {
			return $(this).attr('data-score');
		}
	 });
	 
	// Rate
	$('.rating.rate').raty({ 
		path:'/tkphp/Public/homeshop/js/img',
		score: function() {
			return $(this).attr('data-score');
		}
	});
	
	
	
	
	/* Fix Revolution Slider Arrows */
	function fixRevolutionArrows() {
		
		$('.tp-banner').each(function(){
			
			setTimeout(function(){
			
				var arrow_l = $('.tp-banner').find('.tp-leftarrow');
				var arrow_r = $('.tp-banner').find('.tp-rightarrow');
				
				var tp_height = $('.tp-banner').height();
				var arrow_height = $(arrow_l).height();
				var arrow_top = (tp_height/2)-(arrow_height/2);
				
				
				$(arrow_l).css('top', arrow_top);
				$(arrow_r).css('top', arrow_top);
				
			},1000);
			
		});
	
	}
	
	
	
	
	/* Navigation Height Fix */
	function fixNavigation(){
		
		var nav = $('#main-navigation>ul>li');
		$(nav).find('>a').attr('style', '');
		var nav_height = $(nav).height();
		
		$(nav).each(function(){
		
			$(this).find('>a').innerHeight(nav_height);
			
		});
	
	}
	
	
	
	
	
	
	/* Product Grid View */
	function fixGridView(){
		
		if($('.grid-view').length>0){
			
			$('.grid-view.product .product-content').attr('style', '');
			
			var product_height = $('.grid-view.product img').height();
			var previous_height = $('.grid-view.product .product-content').innerHeight();
			
			if(previous_height < product_height){
				$('.grid-view.product .product-content').innerHeight(product_height);
			}
		}
		
	}
	
	
	
	
	
	
	/* Single Product Page */
	function singleProduct(){
	
		
		/* Product Images Carousel */
		$('#product-carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			directionNav: false,
			slideshow: false,
			itemWidth: 80,
			itemMargin: 0,
			start: function(slider){
			
				setActive($('#product-carousel li:first-child img'));
				slider.find('.right-arrow').click(function(){
					slider.flexAnimate(slider.getTarget("next"));
				});
				
				slider.find('.left-arrow').click(function(){
					slider.flexAnimate(slider.getTarget("prev"));
				});
				
				slider.find('img').click(function(){
					var large = $(this).attr('data-large');
					setActive($(this));
					$('#product-slider img').fadeOut(300, changeImg(large, $('#product-slider img')));
					$('#product-slider a.fullscreen-button').attr('href', large);
				});
				
				function changeImg(large, element){
					var element = element;
					var large = large;
					setTimeout(function(){ startF()},300);
					function startF(){
						element.attr('src', large)
						element.attr('data-large', large)
						element.fadeIn(300);
					}
					
				}
				
				function setActive(el){
					var element = el;
					$('#product-carousel img').removeClass('active-item');
					element.addClass('active-item');
				}
				
			}
			
		});
			
			
		
		/* FullScreen Button */
		$('a.fullscreen-button').click(function(e){
			e.preventDefault();
			var target = $(this).attr('href');
			$('#product-carousel a.fancybox[href="'+target+'"]').trigger('click');
		});
		
		
		/* Cloud Zoom */
		$(".cloud-zoom").imagezoomsl({
			zoomrange: [3, 3]
		});
		
		
		/* FancyBox */
		$(".fancybox").fancybox();
		
		
	}
	
	
	
	
	
	
	
	/* Set Carousels */
	function installCarousels(){
		
		$('.owl-carousel').each(function(){
		
			/* Max items counting */
			var max_items = $(this).attr('data-max-items');
			var tablet_items = max_items;
			if(max_items > 1){
				tablet_items = max_items - 1;
			}
			var mobile_items = 1;
			
			
			/* Install Owl Carousel */
			$(this).owlCarousel({
				
				items:max_items,
				pagination : false,
				itemsDesktop : [1199,max_items],
				itemsDesktopSmall : [1000,max_items],
				itemsTablet: [920,tablet_items],
				itemsMobile: [560,mobile_items],
			});
		
			
			var owl = $(this).data('owlCarousel');
			
			/* Arrow next */
			$(this).parent().parent().find('.icon-left-dir').click(function(e){
				owl.prev();
			});
			
			/* Arrow previous */
			$(this).parent().parent().find('.icon-right-dir').click(function(e){
				owl.next(); 
			});
			
		});
		
	}
	
	
	
	
	
	/* No UI Slider */
	function installNoUiSlider(){
		
		if($('.noUiSlider').length > 0){
		
			var min_val = $('.noUiSlider').attr('data-min-value');
			var max_val = $('.noUiSlider').attr('data-max-value');
			var min_range = $('.noUiSlider').attr('data-min-range');
			var max_range = $('.noUiSlider').attr('data-max-range');
			
			$('.noUiSlider').noUiSlider({
				 range: [min_range,max_range]
				,start: [min_val,max_val]
				,connect: true
				,slide: function(){
					var noui_val = $('.noUiSlider').val();
					$('.price-range-min').text('$'+noui_val[0]);
					$('.price-range-max').text('$'+noui_val[1]);
				}
			});
			
			var noui_val = $('.noUiSlider').val();
			$('.price-range-min').text('$'+noui_val[0]);
			$('.price-range-max').text('$'+noui_val[1]);
		
		}
		
	}	
	
	
	
	
	
	
	/* Product Actions Accordion */
	var productButtons = $('.product-actions').not('.full-width');
	productButtons.find('>span:first-child').addClass('current');
	
	productButtons.find('>span').hover(function(){
		
		$(this).parent().find('>span').removeClass('current');
		$(this).addClass('current');
		
	}, function(){
		
		$(this).removeClass('current');
		
	});
	
	productButtons.hover(function(){
		
	}, function(){
		$(this).find('>span:first-child').addClass('current');
	});
	
	
	
	
	
	/* NAVIGATION DROPDOWN EFFECTS */
	function dropdownsNavigation(){
		
		var mainNav = $('#main-navigation');
		var mainNavItems = $('#main-navigation>ul>li');
		var sideNavItems = $('.sidebar-box-content>ul>li');
		
		
		mainNav.find('ul.normalAnimation').removeClass('normalAnimation');
		
		
		/* Navigation FadeIn Dropdown Effect */
		mainNavItems.hover(function(){
			
			var dropdown = $(this).find('>ul');
			if(!dropdown.hasClass('animating') && windowWidth>767){
				
				dropdown.css('opacity',0).css('top','150%').show().animate({opacity:1, top:100+'%'},300);
				
			}
			
		}, function(){
			
			var dropdown = $(this).find('>ul');
			if(!dropdown.hasClass('animating')){
				
				dropdown.addClass('animating').animate({opacity:0, top:150+'%'},300, function(){
					$(this).hide().removeClass('animating');;	
				});
				
			}
			
		});
		
		
		
		
		
		
		
		/* Navigation SlideDown Dropdown Effect */
		sideNavItems.hover(function(){
			
			var dropdown = $(this).find('>ul');
			if(!dropdown.hasClass('animating') && windowWidth>767){
				
				dropdown.hide().fadeIn(200);
			}
			
		}, function(){
			
			var dropdown = $(this).find('>ul');
			if(!dropdown.hasClass('animating')){
				$(this).find('>ul').addClass('animating').show().fadeOut(100, function(){
					$(this).removeClass('animating');	
				});
			}
			
		});
		
		
		
		
		
		
		/* Navigation Fadein Dropdown Effect 2 */
		mainNav.find('ul.normal-dropdown>li').hover(function(){
			
			var dropdown = $(this).find('>ul');
			if(!dropdown.hasClass('animating') && windowWidth>767){
				
				dropdown.hide().fadeIn(200);
			}
			
		}, function(){
			
			var dropdown = $(this).find('>ul');
			if(!dropdown.hasClass('animating')){
				$(this).find('>ul').addClass('animating').show().fadeOut(100, function(){
					$(this).removeClass('animating');	
				});
			}
			
		});	
		
		
	}
	
	
	
	
	
	
	
	/* Search BAR */
	function searchBar(){
		
		
		/* SearchBar Fadein Effect */
		var searchButton, searchBar;
		
		searchButton = $('.nav-search');
		searchBar = $('#search-bar');
		
		searchButton.click(function(){
			
			if(searchBar.hasClass('searchbar-visible')){
				searchButton.removeClass('searchbar-visible');
				searchBar.animate({opacity:0, left:-200, right:200},200, function(){
					$(this).removeClass('searchbar-visible').hide();
				});
			}else{
				searchButton.addClass('searchbar-visible');
				searchBar.css('opacity', 0).css('left', -200).css('right',200).show().animate({opacity:1, left:0, right:1},300, function(){
					$(this).addClass('searchbar-visible');
					var config = {
						'.chosen-select-search' : {disable_search_threshold:10, width:'100%'}
					}
					for (var selector in config) {
					  $(selector).chosen(config[selector]);
					}
				});
			}
			
		});
		
		
		
	}
	
	
	
	
	
	
	/* Back to top button */
	function backToTop(){
		
		var button = $('#back-to-top');
		var w_scroll = $(window).scrollTop();
		
		if(w_scroll > 150  && windowWidth>767){
			button.fadeIn(400);	
		}else{
			button.fadeOut(400);	
		}
		
	}
	
	
	/* Back to top button event */
	function backToTopEvent(){
		
		var button = $('#back-to-top');
		
		button.click(function(){
			
			$('html,body').animate({scrollTop:0}, 600);
			
		});
		
	}
	
	
	
	
	
	
	
	
	/* Tabs */
	function tabsOn(){
		
		$('.tabs').each(function(){
			
			var tab = $(this);
			tab.find('.tab-content > div').hide();
			tab.find('.tab-heading>a:first-child').addClass('active');
			tab.find('.tab-content > div:first-child').show();
			
			var tabMenuItems = tab.find('.tab-heading>a');
			tabMenuItems.click(function(e){
				
				e.preventDefault();
				
				var target = $(this).attr('href');
				
				tab.find('.tab-content > div').hide();
				tab.find('.tab-heading>a').removeClass('active');
				
				$(this).addClass('active');
				tab.find(target).show();
				
			});
			
		});
			
	}
	
	
	
	
	
	
	
	
	/* Accordions */
	function accordionsOn(){
		
		$('.accordion').each(function(){
			
			var accordion = $(this);
			accordion.find('.accordion-content').hide();
			accordion.find('>ul>li:first-child').addClass('accordion-active').find('.accordion-content').show();
			accordion.find('.accordion-header').click(function(){
				
				if($(this).parent().hasClass('accordion-active')){
					$(this).parent().removeClass('accordion-active');
					$(this).parent().find('.accordion-content').slideUp(300);
				}else{
					$(this).parent().parent().find('li.accordion-active').removeClass('accordion-active').find('.accordion-content').slideUp(300);
					$(this).parent().addClass('accordion-active').find('.accordion-content').slideDown(300)
				}
				
			});
			
		});
		
	}
	
	
	
	
	
	
	
	/* Select Box Styles */
	function selectBox(){
	
		var config = {
		  '.chosen-select'           : {disable_search_threshold:10},
		  '.chosen-select-full-width'           : {disable_search_threshold:10, width:'100%'},
		  '.chosen-select-search' : {disable_search_threshold:10, width:'100%'}
		}
		for (var selector in config) {
		  $(selector).chosen(config[selector]);
		}
		
	}
	
	
	
	
	
	
	
	
	/* Wuick View */
	function quickViewModal(el){
		
		$('body').append('<div id="quick-view-modal"><div id="quick-view-content"><div id="quick-view-close"></div><div class="quick-view-content"><div class="quick-view-container col-lg-12 col-md-12 col-sm-12"></div></div></div></div>');
		$('#quick-view-modal').hide();
		
		$('#quick-view-close').click(function(){
			
			$('#quick-view-modal').fadeOut(300);
			
		});
		
		/* Scroll Bar */
		$('.quick-view-content').perfectScrollbar({wheelSpeed: 40, suppressScrollX:true});
		
		var elements = el;
		elements.click(function(e){
		
			e.preventDefault();
			var target = $(this).attr('href');
			
			$('#quick-view-content .quick-view-container').load(target+' #product-single', function(){
				
				
				/* Rating Box */
				$('#quick-view-modal .rating.readonly-rating').raty({ readOnly: true, path:'/tkphp/Public/homeshop/js/img',score: function() {
					return $(this).attr('data-score');
				}});
				$('#quick-view-modal .rating.rate').raty({ path:'/tkphp/Public/homeshop/js/img',score: function() {
					return $(this).attr('data-score');
				}});
				
				
				/* Accordions */
				var productButtons = $('#quick-view-content .product-actions').not('.full-width');
				productButtons.find('>span:first-child').addClass('current');
				
				productButtons.find('>span').hover(function(){
					
					$(this).parent().find('>span').removeClass('current');
					$(this).addClass('current');
					
				}, function(){
					
					$(this).removeClass('current');
					
				});
				
				productButtons.hover(function(){
					
				}, function(){
					$(this).find('>span:first-child').addClass('current');
				});
				
				
				/* Tabs */
				tabsOn();
				
				/* Numeric Input */
				$('#quick-view-modal .numeric-input').each(function(){
		
					var el = $(this);
					numericInput(el);
					
				});
				
				/* Char Counter */
				$('#quick-view-modal .char-counter').each(function(){
					
					var el = $(this);
					charCounter(el);
					
				});
				
				
				var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				po.src = 'https://apis.google.com/js/platform.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				
				
				/* Product Carousel */
				$('#quick-view-modal #product-carousel').flexslider({
					animation: "slide",
					controlNav: false,
					animationLoop: false,
					directionNav: false,
					slideshow: false,
					itemWidth: 80,
					itemMargin: 0,
					start: function(slider){
							setActive($('#product-carousel li:first-child img'));
							slider.find('.right-arrow').click(function(){
								slider.flexAnimate(slider.getTarget("next"));
							});
							slider.find('.left-arrow').click(function(){
								slider.flexAnimate(slider.getTarget("prev"));
							});
							slider.find('img').click(function(){
								var large = $(this).attr('data-large');
								setActive($(this));
								$('#product-slider img').fadeOut(300, changeImg(large, $('#product-slider img')));
							});
							function changeImg(large, element){
								var element = element;
								var large = large;
								setTimeout(function(){ startF()},300);
								function startF(){
									element.attr('src', large)
									element.attr('data-large', large)
									element.fadeIn(300);
								}
								
							}
							function setActive(el){
								var element = el;
								$('#product-carousel img').removeClass('active-item');
								element.addClass('active-item');
							}
						}
				});
				
				$('#quick-view-modal').fadeIn(300);
				
				
				/* Positioning */
				var q_width = $('#quick-view-content').width();
				var q_height = $('#quick-view-content').height();
				var q_margin = ($(window).height() - q_height)/2;
				
				$('#quick-view-content').css('margin-top',q_margin+'px');
				
				
				/* Cloud Zoom */
				$("#quick-view-modal .cloud-zoom").imagezoomsl({
					 zoomrange: [3, 3]
				  });
				
				$('.quick-view-content').perfectScrollbar('update');
				$('.quick-view-content').css('overflow','hidden');
				
				$('.quick-view-content').click(function(){
					$(this).perfectScrollbar('update');
				});
				
				/* Select Box */
				var config = {
					'#quick-view-content .chosen-select' : {disable_search_threshold:10}
				}
				for (var selector in config) {
				  $(selector).chosen(config[selector]);
				}
				
			});
			
		});
		
	}
	
	
	
	
	/* AJAX FORMS */
	
	/* Newsletter */
	
	$('#newsletter').submit(function(e){
		
		e.preventDefault();
		
		var url = $(this).attr('action');
		
		if($(this).find('input[type="text"]').val() == ''){
			
			if($(this).find('span.error').length==0){
				$(this).append('<span class="error">Please, fill in your email address</span>');
			}else{
				$(this).find('span.error').text('Please, fill in your email address');
			}
			
		}else{
			
			$(this).find('span.error').hide();
			
			$.ajax({
				type: "POST",
				url: url,
				data: $('#newsletter').serialize(), 
				success: function(data){
				   $('#newsletter').find('>*').slideUp(300);
				   $('#newsletter').append('<span>'+data+'</span>');
				}
			});
		}
		
	});
	
	
	/* Contact Form */
	
	$('#contact-form').submit(function(e){
		
		e.preventDefault();
		
		var url = $(this).attr('action');
		var error = false;
		
		if($(this).find('input[name="contact-name"]').val()==''){
			error = true;
		}
		
		if($(this).find('input[name="contact-email"]').val()==''){
			error = true;
		}
		
		if($(this).find('textarea[name="contact-message"]').val()==''){
			error = true;
		}
		
		if(error == true){
			
			if($(this).find('span.error').length==0){
				$(this).append('<span class="error">Please, fill in all the fields</span>');
			}else{
				$(this).find('span.error').text('Please, fill in all the fields');
			}
			
		}
		
		if(error == false){	
			$(this).find('span.error').hide();
			
			$.ajax({
				type: "POST",
				url: url,
				data: $('#contact-form').serialize(), 
				success: function(data){
				   $('#contact-form').find('>*').slideUp(300);
				   $('#contact-form').append('<span>'+data+'</span>');
				}
			});
		}
		
	});
	
	
	
	
	
	
	/* Numeric Input */
	$('.numeric-input').each(function(){
		
		var el = $(this);
		numericInput(el);
		
	});
	
	
	/* Numeric Input */
	function numericInput(el){
		
		var element = el;
		var input = $(element).find('input');
		
		$(element).find('.arrow-up').click(function(){
			var value = parseInt(input.val());
			input.val(value+1);
		});
		
		$(element).find('.arrow-down').click(function(){
			var value = parseInt(input.val());
			input.val(value-1);
		});
		
		input.keypress(function(e){
			
			var value = parseInt(String.fromCharCode(e.which));
			if(isNaN(value)){
				e.preventDefault();
			}
			
		});
		
	}
	
	
	
	
	
	
	/* Char Counter */
	$('.char-counter').each(function(){
		
		var el = $(this);
		charCounter(el);
		
	});
	
	
	function charCounter(el){
		
		var element = el;
		var counter = $(element).find('input');
		var target = $(counter).attr('data-target');
		
		$(target).bind("change paste keyup",function(){
			
			var value = $(this).val();
			var length = value.length;
			
			counter.val(length);
			
		});
		
	}
	
	
});