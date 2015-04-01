<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

    <head>
        
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title -->
        <title>TKPHP</title>
        
		<!-- Fonts -->
		<link href='http://fonts.useso.com/css?family=Roboto:400,300,300italic,400italic,500,700,900,700italic,500italic' rel='stylesheet' type='text/css'>
		
        <!-- Stylesheets -->
        <link rel="stylesheet" href="/tkphp/Public/homeshop/css/bootstrap.min.css">
		<link rel="stylesheet" href="/tkphp/Public/homeshop/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="/tkphp/Public/homeshop/css/style.css">
        <link rel="stylesheet" href="/tkphp/Public/homeshop/css/flexslider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="/tkphp/Public/homeshop/css/fontello.css">
		<link rel="stylesheet" type="text/css" href="/tkphp/Public/homeshop/css/settings.css" media="screen" />
   		<link rel="stylesheet" href="/tkphp/Public/homeshop/css/animation.css">
		<link rel="stylesheet" href="/tkphp/Public/homeshop/css/owl.carousel.css">
		<link rel="stylesheet" href="/tkphp/Public/homeshop/css/owl.theme.css">
		<link rel="stylesheet" href="/tkphp/Public/homeshop/css/chosen.css">
        <script src="/tkphp/Public/static/jquery-2.1.3.min.js"></script>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link rel="stylesheet" href="css/ie.css">
        <![endif]-->
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
		<![endif]-->
        
    </head>
    
    
    <body>
		
		<!-- Container -->
		<div class="container">
			
			<!-- Header -->
			<header class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<!-- Top Header -->
					<div id="top-header">
						
						<div class="row">
							
							<nav id="top-navigation" class="col-lg-7 col-md-7 col-sm-7">
								<ul class="pull-left">
								    <li><a href="<?php echo U('');?>">收藏本站</a></li>
									<li><a href="<?php echo U('Home/User/register');?>">我的账户</a></li>
									<li><a href="<?php echo U('Home/Bill/lists');?>">订单信息</a></li>
									<li><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>
									<li><a href="<?php echo U('Home/Index/contact');?>">联系我们</a></li>
								</ul>
							</nav>
							
							<nav class="col-lg-5 col-md-5 col-sm-5">
								<ul class="pull-right">
									
									<?php if($_SESSION['user']['is_Login'] == 1 ): echo ($_SESSION['user']['username']); ?> 你好!
									<a href="<?php echo U('Home/User/logout');?>">注销</a>
									<?php else: ?> 
									<li class="purple"><a href="<?php echo U('Home/User/login');?>"><i class="icons icon-user-3"></i> 登录</a>
										<!-- <ul id="login-dropdown" class="box-dropdown">
											<li>
                                            	<div class="box-wrapper">
                                            	<form id="login_form" action="<?php echo U('Home/User/login');?>" method="post">
                                                    <h4>登录</h4>
                                                    <div class="iconic-input">
                                                        <input name="username" type="text" placeholder="用户名">
                                                        <i class="icons icon-user-3"></i>
                                                    </div>
                                                    <div class="iconic-input">
                                                        <input name="upwd" type="password" placeholder="密码">
                                                        <i class="icons icon-lock"></i>
                                                    </div>
                                                    <input type="checkbox" id="loginremember"> <label for="loginremember">记住我</label>
                                                    <label id="notice" class="pull-right"></label>
                                                    <br>
                                                    <br>
                                                    <div class="pull-left">
                                                        <input id="loginbtn" type="submit" class="orange" value="登录">
                                                    </div>
                                                    <div class="pull-right">
                                                        <a href="#">忘记密码?</a>
                                                        <br>
                                                        <a href="#">忘记用户名?</a>
														<br>
                                                    </div>
                                                    <br class="clearfix">
                                                </form>
                                                </div>
												<div class="footer">
													<h4 class="pull-left">新用户?</h4>
													<a class="button pull-right" href="<?php echo U('Home/User/register');?>">注册用户</a>
												</div>
											</li>
										</ul> -->
									</li>
									<li><a href="<?php echo U('Home/User/register');?>"><i class="icons icon-lock"></i> 注册</a></li><?php endif; ?>
								</ul>
							</nav>
							
						</div>
						
					</div>
					<!-- /Top Header -->
					
					
					
					<!-- Main Header -->
					<div id="main-header">
						
						<div class="row">
							
							<div id="logo" class="col-lg-4 col-md-4 col-sm-4">
								<a href="<?php echo U('Home/Index/index');?>"><img src="/tkphp/Public/homeshop/img/logo.png" alt="Logo"></a>
							</div>
							
							<nav id="middle-navigation" class="col-lg-8 col-md-8 col-sm-8">
								<ul class="pull-right">
									<li class="blue">
										<a href="compare_products.html"><i class="icons icon-docs"></i>对比</a>
                                    </li>
									<li class="red">
										<a href="wishlist.html"><i class="icons icon-heart-empty"></i>收藏</a>
                                    </li>
									<li class="orange"><a href="order_info.html"><i class="icons icon-basket-2"></i>购物车</a>
                                    	<ul id="cart-dropdown" class="box-dropdown parent-arrow">
											<li>
                                            	<div class="box-wrapper parent-border">
                                                    <p>Recently added item(s)</p>
                                                    
                                                    <table class="cart-table">
                                                    	<tr>
                                                    		<td><img src="/tkphp/Public/homeshop/img/products/sample1.jpg" alt="product"></td>
                                                            <td>
                                                                <h6>Lorem ipsum dolor</h6>
                                                                <p>Product code PSBJ3</p>
                                                            </td>
                                                            <td>
                                                            	<span class="quantity"><span class="light">1 x</span> $79.00</span>
                                                                <a href="#" class="parent-color">Remove</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                    		<td><img src="/tkphp/Public/homeshop/img/products/sample1.jpg" alt="product"></td>
                                                            <td>
                                                                <h6>Lorem ipsum dolor</h6>
                                                                <p>Product code PSBJ3</p>
                                                            </td>
                                                            <td>
                                                            	<span class="quantity"><span class="light">1 x</span> $79.00</span>
                                                                <a href="#" class="parent-color">Remove</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                    		<td><img src="/tkphp/Public/homeshop/img/products/sample1.jpg" alt="product"></td>
                                                            <td>
                                                                <h6>Lorem ipsum dolor</h6>
                                                                <p>Product code PSBJ3</p>
                                                            </td>
                                                            <td>
                                                            	<span class="quantity"><span class="light">1 x</span> $79.00</span>
                                                                <a href="#" class="parent-color">Remove</a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    
                                                    <br class="clearfix">
                                                </div>
                                                
												<div class="footer">
													<table class="checkout-table pull-right">
                                                    	<tr>
                                                        	<td class="align-right">Tax:</td>
                                                            <td>$0.00</td>
                                                        </tr>
                                                        <tr>
                                                        	<td class="align-right">Discount:</td>
                                                            <td>$37.00</td>
                                                        </tr>
                                                        <tr>
                                                        	<td class="align-right"><strong>Total:</strong></td>
                                                            <td><strong class="parent-color">$999.00</strong></td>
                                                        </tr>
                                                    </table>
												</div>
                                                
                                                <div class="box-wrapper no-border">
                                                	<a class="button pull-right parent-background" href="#">Checkout</a>
													<a class="button pull-right" href="order_info.html">View Cart</a>
                                                </div>
											</li>
										</ul>
                                    </li>
									<!--  	
									<li><a class="flag" href="#"><span class="english-flag"></span>English</a>
                                    	<ul class="box-dropdown parent-arrow">
											<li>
                                            	<div class="box-wrapper no-padding parent-border">
                                                    <table class="language-table">
                                                    	<tr>
                                                        	<td class="flag"><span class="english-flag"></span></td>
                                                            <td class="country"><a href="#">English</a></td>
                                                        </tr>
                                                        <tr>
                                                        	<td class="flag"><span class="german-flag"></span></td>
                                                            <td class="country"><a href="#">German</a></td>
                                                        </tr>
                                                        <tr>
                                                        	<td class="flag"><span class="french-flag"></span></td>
                                                            <td class="country"><a href="#">French</a></td>
                                                        </tr>
                                                        <tr>
                                                        	<td class="flag"><span class="italian-flag"></span></td>
                                                            <td class="country"><a href="#">Italian</a></td>
                                                        </tr>
                                                        <tr>
                                                        	<td class="flag"><span class="spanish-flag"></span></td>
                                                            <td class="country"><a href="#">Spanish</a></td>
                                                        </tr>
                                                    </table>
                                                </div>
											</li>
										</ul>
                                    	
                                    </li>
									<li><a href="#"><i class="icons icon-dollar"></i>US Dollar</a>
                                    	<ul class="box-dropdown parent-arrow">
											<li>
                                            	<div class="box-wrapper no-padding parent-border">
                                                    <table class="currency-table">
                                                    	<tr>
                                                        	<td><a href="#">$ US Dollar</a></td>
                                                        </tr>
                                                        <tr>
                                                        	<td><a href="#">€ Euro</a></td>
                                                        </tr>
                                                        <tr>
                                                        	<td><a href="#">£ Pound</a></td>
                                                        </tr>
                                                    </table>
                                                </div>
											</li>
										</ul>
                                    </li>
                                    -->
								</ul>
							</nav>
							
						</div>
						
					</div>
					<!-- /Main Header -->
					
					
					<!-- Main Navigation -->
					<nav id="main-navigation" class="style3">
						<ul>
							
							<li class="home-green current-item">
								<a href="<?php echo U('Home/Index/index');?>">
									<!-- <i class="icons icon-shop-1"></i> -->
									<span class="nav-caption">首页</span>
								<!-- 	<span class="nav-description">Variety of Layouts</span> -->
								</a>
								
								<!-- <ul class="normal-dropdown normalAnimation">
									<li><a href="#">Layouts <i class="icons icon-right-dir"></i></a>
										<ul class="normalAnimation">
											<li><a href="home_v1.html">Layout 1</a></li>
											<li><a href="home_v2.html">Layout 2</a></li>
											<li><a href="home_v3.html">Layout 3</a></li>
										</ul>
									</li>
									<li><a href="#">Headers <i class="icons icon-right-dir"></i></a>
										<ul class="normalAnimation">
											<li><a href="home_v1.html">Header 1</a></li>
											<li><a href="home_v2.html">Header 2</a></li>
											<li><a href="home_v3.html">Header 3</a></li>
											<li><a href="category_v1.html">Header 4</a></li>
											<li><a href="category_v2.html">Header 5</a></li>
											<li><a href="products_page_v1.html">Header 6</a></li>
										</ul>
									</li>
									<li><a href="#">Footers <i class="icons icon-right-dir"></i></a>
										<ul class="normalAnimation">
											<li><a href="home_v1.html#footer">Footer 1</a></li>
											<li><a href="home_v2.html#footer">Footer 2</a></li>
											<li><a href="home_v3.html#footer">Footer 3</a></li>
											<li><a href="category_v1.html#footer">Footer 4</a></li>
											<li><a href="category_v2.htm#footer">Footer 5</a></li>
											<li><a href="products_page_v1.html#footer">Footer 6</a></li>
										</ul>
									</li>
									<li><a href="#">Sliders <i class="icons icon-right-dir"></i></a>
										<ul class="normalAnimation">
											<li><a href="home_v1.html">Revolution Slider</a></li>
											<li><a href="home_v2.html">IOS Slider</a></li>
											<li><a href="home_v3.html">Flex Slider</a></li>
										</ul>
									</li>
								</ul> -->
							</li>
							
							<li class="red">
								<a href="<?php echo U('Home/Product/category');?>">
									<!-- <i class="icons icon-camera-7"></i> -->
									<span class="nav-caption">相机</span>
									<!-- <span class="nav-description">Photo & Video</span> -->
								</a>
								
								<!-- <ul class="wide-dropdown normalAniamtion">
									<li>
										<ul>
											<li><span class="nav-caption">Digital Cameras</span></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Digital SLR</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Point &amp; Shoot</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Spy, Miniature</a></li>
										</ul>
									</li>
									<li>
										<ul>
											<li><span class="nav-caption">Digital Cameras</span></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Background Material</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Continuous Lighting</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Flash Lighting</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Light Meters</a></li>
										</ul>
									</li>
									<li>
										<ul>
											<li><span class="nav-caption">Digital Cameras</span></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Batteries</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Cables &amp; Adapters</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Camcorder Tapes &amp; Discs</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Cases, Bags &amp; Covers</a></li>
										</ul>
									</li>
								</ul> -->
								
							</li>
							
							<li class="blue">
								<a href="<?php echo U('Home/Product/category');?>">
									<!-- <i class="icons icon-desktop-3"></i> -->
									<span class="nav-caption">电脑</span>
								<!-- 	<span class="nav-description">Laptops & Tablets</span> -->
								</a>
							</li>
							
							<li class="orange">
								<a href="<?php echo U('Home/Product/category');?>">
									<!-- <i class="icons icon-mobile-6"></i> -->
									<span class="nav-caption">手机</span>
								<!-- 	<span class="nav-description">Phones & Accessories</span> -->
								</a>
							</li>
							
							<li class="green">
								<a href="<?php echo U('Home/Blog/index');?>">
								<!-- 	<i class="icons icon-pencil-7"></i> -->
									<span class="nav-caption">博客</span>
								<!-- 	<span class="nav-description">News & Reviews</span> -->
								</a>
							</li>
							
							<li class="purple">
								<a href="<?php echo U('Home/Index/contact');?>">
								<!-- 	<i class="icons icon-location-7"></i> -->
									<span class="nav-caption">联系我们</span>
								<!-- 	<span class="nav-description">Store Locations</span> -->
								</a>
							</li>
							
							<li class="nav-search">
                                	<i class="icons icon-search-1"></i>
							</li>
							
						</ul>
						
						<div id="search-bar">
							
							<div class="col-lg-12 col-md-12 col-sm-12" style="margin:0;">
                            	<table id="search-bar-table">
                                    <tr>
                                    	<td class="search-column-1">
                                            <p><span class="grey">热门搜索:</span> <a href="#">小米</a>, <a href="#">电脑</a>, <a href="#">相机</a>, <a href="#">手机</a>, <a href="#">内存卡</a>, <a href="#">更多</a></p>
                                            <input type="text" placeholder="搜索您需要的商品">
                                        </td>
                                        <td class="search-column-2">
                                        	<p class="align-right"><a href="#">高级搜索</a></p>
                                        	<select class="chosen-select-search">
                                                <option>手机</option>
                                                <option>电脑</option>
                                                <option>相机</option>
                                                <option>高级搜索</option>
                                                <option>高级搜索</option>
                                            </select>
                                		</td>
                                    </tr>
                                </table>
							</div>
							<div id="search-button">
								<input type="submit" value="">
								<i class="icons icon-search-1"></i>
							</div>
						</div>
						
					</nav>
					<!-- /Main Navigation -->
					
				</div>
				
			</header>
			<!-- /Header -->
			
<script>
/* $(function(){
	$('#loginbtn').click(function(){
		var $formval=$('#login_form').serialize();
		var $action = $('#login_form').attr('action');
		$.post($action, $formval, function(data){
			$('#notice').html(data.info);
			//$('#notice').html(data.status);
		});
		
	})
}) */
</script>
<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
					
					
                    <div id="product-single">
					
						<!-- Product -->
						<div class="product-single">
							
							<div class="row">
								
								<!-- Product Images Carousel -->
								<div class="col-lg-5 col-md-5 col-sm-5 product-single-image">
									
									<div id="product-slider">
										<ul class="slides">
											<li>
												<img class="cloud-zoom" src="/tkphp/Public/homeshop/img/products/single1.jpg" data-large="/tkphp/Public/img/products/sample1.jpg" alt="" />
												<a class="fullscreen-button" href="/tkphp/Public/img/products/single1.jpg">
													<div class="product-fullscreen">
														<i class="icons icon-resize-full-1"></i>
													</div>
												</a>
											</li>
										</ul>
									</div>
									<div id="product-carousel">
										<ul class="slides">
											<li>
												<a class="fancybox" rel="product-images" href="/tkphp/Public/homeshop/img/products/single1.jpg"></a>
												<img src="/tkphp/Public/homeshop/img/products/single1.jpg" data-large="/tkphp/Public/homeshop/img/products/single1.jpg" alt="">
											</li>
											<li>
												<a class="fancybox" rel="product-images" href="/tkphp/Public/homeshop/img/products/single2.jpg"></a>
												<img src="/tkphp/Public/homeshop/img/products/single2.jpg" data-large="/tkphp/Public/homeshop/img/products/single2.jpg" alt="" />
											</li>
											<li>
												<a class="fancybox" rel="product-images" href="/tkphp/Public/homeshop/img/products/single3.jpg"></a>
												<img src="/tkphp/Public/homeshop/img/products/single3.jpg" data-large="/tkphp/Public/homeshop/img/products/single3.jpg" alt="" />
											</li>
											<li>
												<a class="fancybox" rel="product-images" href="/tkphp/Public/homeshop/img/products/single4.jpg"></a>
												<img src="/tkphp/Public/homeshop/img/products/single4.jpg" data-large="/tkphp/Public/homeshop/img/products/single4.jpg" alt="" />
											</li>
											<li>
												<a class="fancybox" rel="product-images" href="/tkphp/Public/homeshop/img/products/single5.jpg"></a>
												<img src="/tkphp/Public/homeshop/img/products/single5.jpg" data-large="/tkphp/Public/homeshop/img/products/single5.jpg" alt="" />
											</li>
										</ul>
										<div class="product-arrows">
											<div class="left-arrow">
												<i class="icons icon-left-dir"></i>
											</div>
											<div class="right-arrow">
												<i class="icons icon-right-dir"></i>
											</div>
										</div>
									</div>
								</div>
								<!-- /Product Images Carousel -->
								
								
								<div class="col-lg-7 col-md-7 col-sm-7 product-single-info">
									
									<h2>Lorem ipsum dolor sit amet</h2>
									<div class="rating-box">
										<div class="rating readonly-rating" data-score="4"></div>
										<span>3 Review(s)</span>
									</div>
									<table>
										<tr>
											<td>Manufacturer</td>
											<td><a href="#">Manufacturer 1</a></td>
										</tr>
										<tr>
											<td>Availability</td>
											<td><span class="green">in stock</span> 20 items</td>
										</tr>
										<tr>
											<td>Product code</td>
											<td>PBS173</td>
										</tr>
									</table>
									
									<strong>Product Dimensions</strong>
									<table>
										<tr>
											<td>Product Width</td>
											<td>10.00000M</td>
										</tr>
										<tr>
											<td>Product Length</td>
											<td>10.00000M</td>
										</tr>
									</table>
									
									<span class="price"><del>$381.00</del> $281.00</span>
									
									<table class="product-actions-single">
										<tr>
											<td>Color:</td>
											<td>
												<select class="chosen-select">
													<option>Red +$25.00</option>
													<option>Red +$25.00</option>
													<option>Red +$25.00</option>
													<option>Red +$25.00</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Quantity:</td>
											<td>
												<div class="numeric-input">
													<input type="text" value="1">
													<span class="arrow-up"><i class="icons icon-up-dir"></i></span>
													<span class="arrow-down"><i class="icons icon-down-dir"></i></span>
												</div>
												<a href="#">
													<span class="add-to-cart">
														<span class="action-wrapper">
															<i class="icons icon-basket-2"></i>
															<span class="action-name">Add to cart</span>
														</span >
													</span>
												</a>
											</td>
										</tr>
									</table> 
									
									<div class="product-actions">
										<span class="add-to-favorites">
											<span class="action-wrapper">
												<i class="icons icon-heart-empty"></i>
												<span class="action-name">Add to wishlist</span>
											</span>
										</span>
										<span class="add-to-compare">
											<span class="action-wrapper">
												<i class="icons icon-docs"></i>
												<span class="action-name">Add to compare</span>
											</span>
										</span>
										<span class="green product-action">
											<span class="action-wrapper">
												<i class="icons icon-info"></i>
												<span class="action-name">Ask a question</span>
											</span>
										</span>
									</div>
									
									<div class="social-share">
											<!-- <iframe src="/www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21" style="border:none; overflow:hidden; height:21px; width:100px;"></iframe>
											
											<iframe 
			src="https://platform.twitter.com/widgets/tweet_button.html"
			style="width:100px; height:20px;"></iframe> -->
			
											<!-- Place this tag where you want the +1 button to render. -->
											<div class="g-plusone" data-size="medium"></div>
											
											<!-- Place this tag after the last +1 button tag. -->
											<!-- <script type="text/javascript">
											  (function() {
												var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
												po.src = 'https://apis.google.com/js/platform.js';
												var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
											  })();
											</script> -->
											
											
											<!-- <a href="/www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.flickr.com%2Fphotos%2Fkentbrew%2F6851755809%2F&media=http%3A%2F%2Ftest.ratkosolar.com%2Fhomeshop%2F15-blog_post.html&description=Next%20stop%3A%20Pinterest" data-pin-do="buttonPin" data-pin-config="beside" class="pinterest"><img src="/assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a> -->
											<!-- Please call pinit.js only once per page -->
											<script type="text/javascript" async src="/tkphp/Public/homeshop/assets.pinterest.com/js/pinit.js"></script>
											
										</div>
									
								</div>
								
							</div>
							
						</div>
						<!-- /Product -->
						
						
						<!-- Product Tabs -->
						<div class="row">
							
							<div class="col-lg-12 col-md-12 col-sm-12">
								
								<div class="tabs">
								
									<div class="tab-heading">
										<a href="#tab1" class="button big">Description</a>
										<a href="#tab2" class="button big">Reviews</a>
										<a href="#tab3" class="button big">Comments</a>
									</div>
									
									<div class="page-content tab-content">
										
										<div id="tab1">
											<p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. </p>
											
											<p><strong>Specifications:</strong></p>
											<ul>
												<li><i class="icons icon-right-dir"></i> Speaker type: Hi-Definition MicroSpeaker</li>
												<li><i class="icons icon-right-dir"></i> Frequency range: 25Hz-18.5kHz</li>
												<li><i class="icons icon-right-dir"></i> Impedance (1kHz): 26 Ohms</li>
												<li><i class="icons icon-right-dir"></i> Sensitivity (1mW): 114 dB SPL/mW</li>
												<li><i class="icons icon-right-dir"></i> Cable length (with extension): 18.0 in./45.0 cm (54.0 in./137.1 cm)</li>
											</ul>
											
											<p>Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. <br><br>
	Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. </p>
											<p class="tags home-green"><strong>Tags:</strong> <a href="#" class="tag-item">digital camera</a>
											<a href="#" class="tag-item">lorem</a>
											<a href="#" class="tag-item">gps</a></p>
										</div>
										
										<div id="tab2">
											
											<div class="row">
												
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="category-results">
														<p>Results 1-6 of 6</p>
													</div>
												</div>
												
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="pagination">
														<a href="#"><div class="previous"><i class="icons icon-left-dir"></i></div></a>
														<a href="#"><div class="page-button">1</div></a>
														<a href="#"><div class="page-button">2</div></a>
														<a href="#"><div class="page-button">3</div></a>
														<a href="#"><div class="next"><i class="icons icon-right-dir"></i></div></a>
													</div>
												</div>
											
											</div>
											
											<ul class="comments">
												<li>
													<p><strong><a href="#">Anna Doe</a></strong></p>
													<span class="date">2013-10-09 09:23</span>
													<i class="icons green icon-thumbs-up-alt"></i>
													<i class="icons sum no-pointer green-sum">1</i>
													<i class="icons red icon-thumbs-down-alt"></i>
													<i class="icons icon-reply"></i>
													<div class="rating-box">
														<div class="rating readonly-rating" data-score="4"></div>
													</div>
													<br>
													<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
													
												</li>
												<li>
													<p><strong><a href="#">Anna Doe</a></strong></p>
													<span class="date">2013-10-09 09:23</span>
													<i class="icons green icon-thumbs-up-alt"></i>
													<i class="icons sum no-pointer">0</i>
													<i class="icons red icon-thumbs-down-alt"></i>
													<i class="icons icon-reply"></i>
													<div class="rating-box">
														<div class="rating readonly-rating" data-score="4"></div>
													</div>
													<br>
													<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
													
													<ul>
														<li>
															<p><strong><a href="#">Anna Doe</a></strong></p>
															<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
														</li>
													</ul>
												</li>
												<li>
													<p><strong><a href="#">Anna Doe</a></strong></p>
													<span class="date">2013-10-09 09:23</span>
													<i class="icons green icon-thumbs-up-alt"></i>
													<i class="icons sum no-pointer red-sum">-2</i>
													<i class="icons red icon-thumbs-down-alt"></i>
													<i class="icons icon-reply"></i>
													<div class="rating-box">
														<div class="rating readonly-rating" data-score="4"></div>
													</div>
													<br>
													<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
													
												</li>
											</ul>
											
											<h3>WRITE A REVIEW</h3>
											<p>Now please write a (short) review....(min. 200, max. 2000 characters)</p>
											<textarea id="review-textarea"></textarea>
											<p>First: Rate the product. Please select a rating between 0 (poorest) and 5 stars (best)</p>
											<div class="rating-box">
												Rating: 
												<div class="rating rate" data-score="3"></div>
											</div>
											<div class="char-counter">
												<label>Characters written</label>
												<input data-target="#review-textarea" type="text">
											</div>
											<br>
											<input type="submit" class="dark-blue big" value="Submit a review">
											
											
										</div>
										
										<div id="tab3">
											<ul class="comments">
												<li>
													<p><strong><a href="#">Anna Doe</a></strong></p>
													<span class="date">2013-10-09 09:23</span>
													<i class="icons icon-reply"></i>
													<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
													
												</li>
												<li>
													<p><strong><a href="#">Anna Doe</a></strong></p>
													<span class="date">2013-10-09 09:23</span>
													<i class="icons icon-reply"></i>
													<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
													
													<ul>
														<li>
															<p><strong><a href="#">Anna Doe</a></strong></p>
															<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
														</li>
													</ul>
												</li>
												<li>
													<p><strong><a href="#">Anna Doe</a></strong></p>
													<span class="date">2013-10-09 09:23</span>
													<i class="icons icon-reply"></i>
													<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
												</li>
											</ul>
											<a href="#" class="button home-green"><i class="icons icon-spinner"></i> Refresh comments list</a>
											<a href="#" class="button orange"><i class="icons icon-rss"></i> RSS feed for comments to this post</a>
											<br/><br/>
											<div class="row">
												
												<div class="col-lg-6 col-md-6 col-sm-8">
													<h3>ADD A COMMENT</h3>
													<label>Name (required)</label>
													<input type="text">
													<br><br>
													<label>E-mail (required, but will not display)</label>
													<input type="text">
													<br><br>
													<label>Website (required)</label>
													<input type="text">
													<br><br>
													<label>Comment (required)</label>
													<textarea></textarea>
													<br><br>
													<input id="comments-checkbox" type="checkbox"><label for="comments-checkbox">Notify me of follow-up comments</label>
													<br><br>
													<img src="img/captcha.jpg" alt="">
													<br><br>
													<div class="row">
														
														<div class="col-lg-6 col-md-6 col-sm-6">
															<label><a href="#">Refresh</a></label>
															<input type="text">
														</div>
														
													</div>
													<br>
													<input type="submit" value="Submit comment" class="dark-blue big">
													
												</div>
												
											</div>
											
										</div>
										
									</div>
									
								</div>
								
							</div>
							
						</div>
						<!-- /Product Tabs -->
					
					</div>
                    
                    
					<!-- New Collection -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>Related Products</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="3">
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample1.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<span class="product-tag">Sale</span>
												<img src="img/products/sample2.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample3.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample1.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample2.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample3.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
							</div>
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /New Collection -->
					



					
					<!-- Recently Viewed Products -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>Recently Viewed Products</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="3">
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample4.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<p class="product-categories"><a href="#">Computers &amp; Tablets</a></p>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample5.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<p class="product-categories"><a href="#">Computers &amp; Tablets</a></p>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample6.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<p class="product-categories"><a href="#">Computers &amp; Tablets</a></p>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample7.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<p class="product-categories"><a href="#">Computers &amp; Tablets</a></p>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample8.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<p class="product-categories"><a href="#">Computers &amp; Tablets</a></p>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample9.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<p class="product-categories"><a href="#">Computers &amp; Tablets</a></p>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
							</div>
						</div>
						<!-- /Carousel -->
						
						
					</div>
					<!-- /Recently Viewed Products -->
					
					
					
					<!-- Product Buttons -->
					<div class="row button-row">
						
						<div class="col-lg-5 col-md-5 col-sm-5">
							<a class="button grey regular" href="#"><i class="icons icon-reply"></i> BACK TO: Computers &amp; Tablets</a>
						</div>
						
						<div class="col-lg-7 col-md-7 col-sm-7 align-right">
							<a class="button grey regular" href="#"><i class="icons icon-left-dir"></i> PREVIOUS PRODUCT</a>
							<a class="button grey regular right-icon" href="#">NEXT PRODUCT <i class="icons icon-right-dir"></i></a>
						</div>
					
					</div>
					<!-- /Product Buttons -->
					
					
				</section>
				<!-- /Main Content -->
				
				
				
				
				<!-- Sidebar -->
				<aside class="sidebar right-sidebar col-lg-3 col-md-3 col-sm-3">
					
					<!-- Categories -->
					<div class="row sidebar-box purple">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
								<i class="icons icon-basket-2"></i>
								<h4>Categories</h4>
							</div>
							
							<div class="sidebar-box-content">
								<ul>
									<li><a href="#">Cameras &amp; Photography <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">Computers &amp; Tablets <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">Cell Phones &amp; Accessories <i class="icons icon-right-dir"></i></a>
                                    	<ul class="sidebar-dropdown">
                                        	<li>
                                            	<ul>
                                                	<li><a href="#">Cell phones &amp; Smartphone</a></li>
                                                    <li><a href="#">Cell Phone Accessories</a></li>
                                                    <li><a href="#">Headsets</a></li>
                                                    <li><a href="#">Cases, Covers & Skins</a></li>
                                                    <li><a href="#">Screen Protectors</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                            	<ul>
                                                	<li><a href="#">Chargers & Cradles</a></li>
                                                    <li><a href="#">Batteries</a></li>
                                                    <li><a href="#">Cables & Adapters</a></li>
                                                    <li><a href="#">All About Smartphones</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
									<li><a href="#">TV, Audio &amp; Surveillance <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">Video Games &amp; Consoles <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">Car Audio, Video &amp; GPS <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">Best Sellers <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">Shop by Brands <i class="icons icon-right-dir"></i></a></li>
									<li><a class="purple" href="#">All Categories</a></li>
								</ul>
							</div>
							
						</div>
							
					</div>
					<!-- /Categories -->
					
					
					<!-- Compare Products -->
					<div class="row sidebar-box blue">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
                            	<i class="icons icon-docs"></i>
								<h4>Compare Products</h4>
							</div>
							<div class="sidebar-box-content">
                                <table class="compare-table">
                                    
                                    <tr>
                                        <td class="product-thumbnail"><img src="img/products/sample1.jpg" alt="Product1"></td>
                                        <td class="product-info">
                                            <p><a href="#">Lorem ipsum dolor sit amet</a></p>
                                            <a href="#" class="remove">Remove</a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="product-thumbnail"><img src="img/products/sample2.jpg" alt="Product1"></td>
                                        <td class="product-info">
                                            <p><a href="#">Lorem ipsum dolor sit amet</a></p>
                                            <a href="#" class="remove">Remove</a>
                                        </td>
                                    </tr>
                                    
                                </table>
                                <div class="padding-box">
                                	<a class="button grey">Go to compare</a>
                                </div>
							</div>
						</div>
						
					</div>
					<!-- /Compare Products -->
					
					
					<!-- Carousel -->
					<div class="row sidebar-box">
						
						<div class="col-lg-12 col-md-12 col-sm-12 sidebar-carousel">
							
							<!-- Slider -->
							<section class="sidebar-slider">
								<div class="sidebar-flexslider">
									<ul class="slides">
										<li>
											<a href="#"><img src="img/sidebar-slide1.jpg" alt="Slide1"></a>
										</li>
										<li>
											<a href="#"><img src="img/sidebar-slide2.jpg" alt="Slide1"></a>
										</li>
										<li>
											<a href="#"><img src="img/sidebar-slide3.jpg" alt="Slide1"></a>
										</li>
									</ul>
								</div>
								<div class="slider-nav"></div>
							</section>
							<!-- /Slider -->
                            
						</div>
						
					</div>
					<!-- /Carousel -->
					
					
					<!-- Bestsellers -->
					<div class="row sidebar-box red">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
                            <i class="icons icon-award-2"></i>
								<h4>Bestsellers</h4>
							</div>
							
							<div class="sidebar-box-content">
								<table class="bestsellers-table">
									
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="img/products/sample1.jpg" alt="Product1"></a></td>
										<td class="product-info">
											<p><a href="#">Lorem ipsum dolor sit amet</a></p>
											<span class="price">$550.00</span>
										</td>
									</tr>
									
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="img/products/sample2.jpg" alt="Product1"></a></td>
										<td class="product-info">
											<p><a href="#">Lorem ipsum dolor sit amet</a></p>
											<span class="price">$550.00</span>
										</td>
									</tr>
									
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="img/products/sample3.jpg" alt="Product1"></a></td>
										<td class="product-info">
											<p><a href="#">Lorem ipsum dolor sit amet</a></p>
                                            <div class="rating readonly-rating" data-score="4"></div>
											<span class="price"><del>$650.00</del> $550.00</span>
										</td>
									</tr>
									
								</table>
							</div>
							
						</div>
						
					</div>
					<!-- /Bestsellers -->
					
					
					<!-- Tag Cloud -->
					<div class="row sidebar-box green">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
                            	<i class="icons icon-tag-6"></i>
								<h4>Tags Cloud</h4>
							</div>
							
							<div class="sidebar-box-content sidebar-padding-box">
								<a href="#" class="tag-item">digital camera</a>
								<a href="#" class="tag-item">lorem</a>
								<a href="#" class="tag-item">gps</a>
								<a href="#" class="tag-item">headphones</a>
								<a href="#" class="tag-item">ipsum</a>
								<a href="#" class="tag-item">laptop</a>
								<a href="#" class="tag-item">smartphone</a>
								<a href="#" class="tag-item">tv</a>
							</div>
								
						</div>
						
					</div>
					<!-- /Tag Cloud -->
					
					
					<!-- Specials -->
					<div class="row products-row sidebar-box orange">
						 
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<!-- Carousel Heading -->
							<div class="carousel-heading no-margin">
								
								<h4><i class="icons icon-magic"></i> Specials</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
								
							</div>
							<!-- /Carousel Heading -->
							
						</div>
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="1">
									
								<!-- Slide -->
								<div>
									<!-- Carousel Item -->
									<div class="product">
										
										<div class="product-image">
											<img src="img/products/sample1.jpg" alt="Product1">
											<a href="products_page_v1.html" class="product-hover">
												<i class="icons icon-eye-1"></i> Quick View
											</a>
										</div>
										
										<div class="product-info">
											<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
											<span class="price">$281.00</span>
											<div class="rating readonly-rating" data-score="4"></div>
										</div>
										
										<div class="product-actions">
											<span class="add-to-cart">
												<span class="action-wrapper">
													<i class="icons icon-basket-2"></i>
													<span class="action-name">Add to cart</span>
												</span >
											</span>
											<span class="add-to-favorites">
												<span class="action-wrapper">
													<i class="icons icon-heart-empty"></i>
													<span class="action-name">Add to wishlist</span>
												</span>
											</span>
											<span class="add-to-compare">
												<span class="action-wrapper">
													<i class="icons icon-docs"></i>
													<span class="action-name">Add to Compare</span>
												</span>
											</span>
										</div>
										
									</div>
									<!-- /Carousel Item -->
								</div>
								<!-- /Slide -->
								
								
								<!-- Slide -->
								<div>
									<!-- Carousel Item -->
									<div class="product">
										
										<div class="product-image">
											<img src="img/products/sample2.jpg" alt="Product1">
											<a href="products_page_v1.html" class="product-hover">
												<i class="icons icon-eye-1"></i> Quick View
											</a>
										</div>
										
										<div class="product-info">
											<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
											<span class="price">$281.00</span>
											<div class="rating readonly-rating" data-score="4"></div>
										</div>
										
										<div class="product-actions">
											<span class="add-to-cart">
												<span class="action-wrapper">
													<i class="icons icon-basket-2"></i>
													<span class="action-name">Add to cart</span>
												</span >
											</span>
											<span class="add-to-favorites">
												<span class="action-wrapper">
													<i class="icons icon-heart-empty"></i>
													<span class="action-name">Add to wishlist</span>
												</span>
											</span>
											<span class="add-to-compare">
												<span class="action-wrapper">
													<i class="icons icon-docs"></i>
													<span class="action-name">Add to Compare</span>
												</span>
											</span>
										</div>
										
									</div>
									<!-- /Carousel Item -->
								</div>
								<!-- /Slide -->
								
							</div>
						
						</div>
						<!-- / Carousel -->
						
						
					</div>
					<!-- /Specials -->
					
					
				</aside>
				<!-- /Sidebar -->
 ﻿<!-- Banner -->
			<section class="banner">
				
				<div class="left-side-banner banner-item icon-on-right gray">
					<h4>0379-65518814</h4>
					<p>周一 - 周六: 8am - 5pm </p>
					<i class="icons icon-phone-outline"></i>
				</div>
				
				<a href="#">
				<div class="middle-banner banner-item icon-on-left light-blue">
					<h4>免邮</h4>
					<p>订单满99元</p>
                    <span class="button">了解更多</span>
					<i class="icons icon-truck-1"></i>
				</div>
				</a>
				
				<a href="#">
				<div class="right-side-banner banner-item orange">
					<h4>疯狂抢购!</h4>
					<p>全网最低价</p>
                    <span class="button">现在购买</span>
				</div>
				</a>
				
			</section>
			<!-- /Banner -->

			
			<!-- Footer -->
			<footer id="footer" class="row">
				
				<!-- Upper Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="upper-footer">
					
						<div class="row">
							
							<!-- Newsletter -->
							<div class="col-lg-7 col-md-7 col-sm-7">
								<form id="newsletter" action="php/newsletter.php">
									<h2>关注我们</h2>
									
								</form>
							</div>
							<!-- /Newsletter -->
							
							
							<!-- Social Media -->
							<div class="col-lg-5 col-md-5 col-sm-5 social-media">
							</div>
							<!-- /Social Media -->
							
						</div>
					
					</div>
					
				</div>
				<!-- /Upper Footer -->
				
				
				
				<!-- Main Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="main-footer">
					
						<div class="row">
							
							<!-- The Service -->
							<div class="col-lg-3 col-md-3 col-sm-6">
								<h4>关于我们</h4>
								<ul>
									<li><a href="#"><i class="icons icon-right-dir"></i> 关于tkphp</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 新闻中心</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 加入我们</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 法律声明</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 星空之约</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 联系我们</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 友情链接</a></li>
								</ul>
							</div>
							<!-- /The Service -->
							
							
							<!-- Like us on Facebook -->
							<div class="col-lg-3 col-md-3 col-sm-6">
								<h4>产品</h4>
								<ul>
									<li><a href="#"><i class="icons icon-right-dir"></i>平板系列</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i>手记系列</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i>相机系列</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i>配件</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i>新产品</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i>概念产品</a></li>
								</ul>
							</div>
							<!-- /Like us on Facebook -->
							
							
							<!-- Information -->
							<div class="col-lg-3 col-md-3 col-sm-6">
								<h4>服务中心</h4>
								<ul>
									<li><a href="#"><i class="icons icon-right-dir"></i> 体验店</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 售后服务</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 官服中心</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 帮助中心</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 软件下载</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 固件升级</a></li>
								</ul>
							</div>
							<!-- /Information -->
							
							
							<!-- Contact Us -->
							<div class="col-lg-3 col-md-3 col-sm-6 contact-footer-info">
								<h4>联系我们</h4>
								<ul>
									<li><i class="icons icon-location"></i>龙门大道71号,<br>洛阳师范学院, 信息技术学院.</li>
                                    <li><i class="icons icon-phone"></i> +182-3882-7991</li>
									<li><i class="icons icon-mail-alt"></i><a href="mailto:web_zhaobei@163.com"> web_zhaobei@163.com</a></li>
									<li><i class="icons icon-skype"></i> tkphp</li>
								</ul>
							</div>
							<!-- /Contact Us -->
							
						</div>
						
					</div>
					
				</div>
				<!-- /Main Footer -->
				
				
				
				<!-- Lower Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="lower-footer">
					
						<div class="row">
							
							<div class="col-lg-6 col-md-6 col-sm-6">
								<p class="copyright">Copyright 2015 <a href="#">TKPHP</a>. All Rights Reserved.</p>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-6">
								<ul class="payment-list">
									
								</ul>
							</div>
							
						</div>
						
					</div>
					
				</div>
				<!-- /Lower Footer -->
				
			</footer>
			<!-- Footer -->
			
            
            <div id="back-to-top">
            	<i class="icon-up-dir"></i>
            </div>
            
		</div>
    	<!-- Container -->
		
		
		
		<!-- JavaScript -->
		<script src="/tkphp/Public/homeshop/js/modernizr.min.js"></script>
		<script src="/tkphp/Public/homeshop/js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="/tkphp/Public/homeshop/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/tkphp/Public/homeshop/js/jquery.raty.min.js"></script>
		
		<!-- Scroll Bar -->
		<script src="/tkphp/Public/homeshop/js/perfect-scrollbar.min.js"></script>
		
		<!-- Cloud Zoom -->
		<script src="/tkphp/Public/homeshop/js/zoomsl-3.0.min.js"></script>
		
		<!-- FancyBox -->
		<script src="/tkphp/Public/homeshop/js/jquery.fancybox.pack.js"></script>
		
		<!-- jQuery REVOLUTION Slider  -->
		<script type="text/javascript" src="/tkphp/Public/homeshop/js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="/tkphp/Public/homeshop/js/jquery.themepunch.revolution.min.js"></script>

		<!-- FlexSlider -->
		<script defer src="/tkphp/Public/homeshop/js/flexslider.min.js"></script>
		
		<!-- IOS Slider -->
		<script src = "/tkphp/Public/homeshop/js/jquery.iosslider.min.js"></script>
		
		<!-- noUi Slider -->
		<script src="/tkphp/Public/homeshop/js/jquery.nouislider.min.js"></script>
		
		<!-- Owl Carousel -->
		<script src="/tkphp/Public/homeshop/js/owl.carousel.min.js"></script>
		
		<!-- Cloud Zoom -->
		<script src="/tkphp/Public/homeshop/js/zoomsl-3.0.min.js"></script>
		
		<!-- SelectJS -->
        <script src="/tkphp/Public/homeshop/js/chosen.jquery.min.js" type="text/javascript"></script>
        
        <!-- Main JS -->
        <script defer src="/tkphp/Public/homeshop/js/bootstrap.min.js"></script>
        <script src="/tkphp/Public/homeshop/js/main-script.js"></script>
        

		
    </body>
    
</html>