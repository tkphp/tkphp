<?php if (!defined('THINK_PATH')) exit();?>Ôªø<!DOCTYPE html>

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
								    <li><a href="<?php echo U('');?>">Êî∂ËóèÊú¨Á´ô</a></li>
									<li><a href="<?php echo U('Home/User/register');?>">ÊàëÁöÑË¥¶Êà∑</a></li>
									<li><a href="<?php echo U('Home/Bill/lists');?>">ËÆ¢Âçï‰ø°ÊÅØ</a></li>
									<li><a href="<?php echo U('Home/Index/about');?>">ÂÖ≥‰∫éÊàë‰ª¨</a></li>
									<li><a href="<?php echo U('Home/Index/contact');?>">ËÅîÁ≥ªÊàë‰ª¨</a></li>
								</ul>
							</nav>
							
							<nav class="col-lg-5 col-md-5 col-sm-5">
								<ul class="pull-right">
									
									<?php if($_SESSION['user']['is_Login'] == 1 ): echo ($_SESSION['user']['username']); ?> ‰Ω†Â•Ω!
									<a href="<?php echo U('Home/User/logout');?>">Ê≥®ÈîÄ</a>
									<?php else: ?> 
									<li class="purple"><a href="<?php echo U('Home/User/login');?>"><i class="icons icon-user-3"></i> ÁôªÂΩï</a>
										<!-- <ul id="login-dropdown" class="box-dropdown">
											<li>
                                            	<div class="box-wrapper">
                                            	<form id="login_form" action="<?php echo U('Home/User/login');?>" method="post">
                                                    <h4>ÁôªÂΩï</h4>
                                                    <div class="iconic-input">
                                                        <input name="username" type="text" placeholder="Áî®Êà∑Âêç">
                                                        <i class="icons icon-user-3"></i>
                                                    </div>
                                                    <div class="iconic-input">
                                                        <input name="upwd" type="password" placeholder="ÂØÜÁ†Å">
                                                        <i class="icons icon-lock"></i>
                                                    </div>
                                                    <input type="checkbox" id="loginremember"> <label for="loginremember">ËÆ∞‰ΩèÊàë</label>
                                                    <label id="notice" class="pull-right"></label>
                                                    <br>
                                                    <br>
                                                    <div class="pull-left">
                                                        <input id="loginbtn" type="submit" class="orange" value="ÁôªÂΩï">
                                                    </div>
                                                    <div class="pull-right">
                                                        <a href="#">ÂøòËÆ∞ÂØÜÁ†Å?</a>
                                                        <br>
                                                        <a href="#">ÂøòËÆ∞Áî®Êà∑Âêç?</a>
														<br>
                                                    </div>
                                                    <br class="clearfix">
                                                </form>
                                                </div>
												<div class="footer">
													<h4 class="pull-left">Êñ∞Áî®Êà∑?</h4>
													<a class="button pull-right" href="<?php echo U('Home/User/register');?>">Ê≥®ÂÜåÁî®Êà∑</a>
												</div>
											</li>
										</ul> -->
									</li>
									<li><a href="<?php echo U('Home/User/register');?>"><i class="icons icon-lock"></i> Ê≥®ÂÜå</a></li><?php endif; ?>
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
										<a href="compare_products.html"><i class="icons icon-docs"></i>ÂØπÊØî</a>
                                    </li>
									<li class="red">
										<a href="wishlist.html"><i class="icons icon-heart-empty"></i>Êî∂Ëóè</a>
                                    </li>
									<li class="orange"><a href="order_info.html"><i class="icons icon-basket-2"></i>Ë¥≠Áâ©ËΩ¶</a>
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
                                                        	<td><a href="#">‚Ç¨ Euro</a></td>
                                                        </tr>
                                                        <tr>
                                                        	<td><a href="#">¬£ Pound</a></td>
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
									<span class="nav-caption">È¶ñÈ°µ</span>
								<!-- 	<span class="nav-description">Variety of Layouts</span> -->
								</a>
								
								<ul class="normal-dropdown normalAnimation">
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
								</ul>
							</li>
							
							<li class="red">
								<a href="<?php echo U('Home/Product/category');?>">
									<!-- <i class="icons icon-camera-7"></i> -->
									<span class="nav-caption">Áõ∏Êú∫</span>
									<!-- <span class="nav-description">Photo & Video</span> -->
								</a>
								
								<ul class="wide-dropdown normalAniamtion">
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
								</ul>
								
							</li>
							
							<li class="blue">
								<a href="<?php echo U('Home/Product/category');?>">
									<!-- <i class="icons icon-desktop-3"></i> -->
									<span class="nav-caption">ÁîµËÑë</span>
								<!-- 	<span class="nav-description">Laptops & Tablets</span> -->
								</a>
							</li>
							
							<li class="orange">
								<a href="<?php echo U('Home/Product/category');?>">
									<!-- <i class="icons icon-mobile-6"></i> -->
									<span class="nav-caption">ÊâãÊú∫</span>
								<!-- 	<span class="nav-description">Phones & Accessories</span> -->
								</a>
							</li>
							
							<li class="green">
								<a href="<?php echo U('Home/Blog/index');?>">
								<!-- 	<i class="icons icon-pencil-7"></i> -->
									<span class="nav-caption">ÂçöÂÆ¢</span>
								<!-- 	<span class="nav-description">News & Reviews</span> -->
								</a>
							</li>
							
							<li class="purple">
								<a href="<?php echo U('Home/Index/contact');?>">
								<!-- 	<i class="icons icon-location-7"></i> -->
									<span class="nav-caption">ËÅîÁ≥ªÊàë‰ª¨</span>
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
                                            <p><span class="grey">ÁÉ≠Èó®ÊêúÁ¥¢:</span> <a href="#">Â∞èÁ±≥</a>, <a href="#">ÁîµËÑë</a>, <a href="#">Áõ∏Êú∫</a>, <a href="#">ÊâãÊú∫</a>, <a href="#">ÂÜÖÂ≠òÂç°</a>, <a href="#">Êõ¥Â§ö</a></p>
                                            <input type="text" placeholder="ÊêúÁ¥¢ÊÇ®ÈúÄË¶ÅÁöÑÂïÜÂìÅ">
                                        </td>
                                        <td class="search-column-2">
                                        	<p class="align-right"><a href="#">È´òÁ∫ßÊêúÁ¥¢</a></p>
                                        	<select class="chosen-select-search">
                                                <option>ÊâãÊú∫</option>
                                                <option>ÁîµËÑë</option>
                                                <option>Áõ∏Êú∫</option>
                                                <option>È´òÁ∫ßÊêúÁ¥¢</option>
                                                <option>È´òÁ∫ßÊêúÁ¥¢</option>
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
<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="#">È¶ñÈ°µ</a> <i class="icons icon-right-dir"></i> Áî®Êà∑ÁôªÂΩï</p>
                    </div>
                </div>
                
                
             
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
                    
                    
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>ÁôªÂΩï</h4>
                            </div>
                            
                            <div class="page-content">

                            	<form action="<?php echo U('Home/User/doLogin');?>" method="post" name="login-form">
                            	  <input type="hidden" name="cart" value="<<?php echo ($types); ?>>">
                                <div class="row">
                               		 <div class="col-lg-1 col-md-1 col-sm-1">
                               		 </div>
                                	<div class="col-lg-2 col-md-2 col-sm-2">
                                		<p>Áî®Êà∑Âêç*</p>
                                	</div>
                                	<div class="col-lg-4 col-md-4 col-sm-4">
                                    	<div class="iconic-input">
                                           <!--  <input name="username" type="text" placeholder="ÈÇÆÁÆ±/ÊâãÊú∫Âè∑" data-trigger="focus"  id="username" data-toggle="tooltip" data-placement="right" title="ËØ∑ËæìÂÖ•ÈÇÆÁÆ±ÂêçÊàñÊâãÊú∫Âè∑"> -->
                                            <input type="text"  data-trigger="focus"  name="username" id="username" data-toggle="tooltip" placeholder="ÈÇÆÁÆ±/ÊâãÊú∫Âè∑" data-placement="right" title="ËØ∑ËæìÂÖ•ÈÇÆÁÆ±ÂêçÊàñÊâãÊú∫Âè∑"/>
                                           <span></span>
                                            <i class="icons icon-user-3"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5">
                                		<p>*ËØ∑ËæìÂÖ•ÈÇÆÁÆ±ÂêçÊàñÊâãÊú∫Âè∑</p>
                                	</div>
                                    
                                </div>
                                <div class="row">
                                	 <div class="col-lg-1 col-md-1 col-sm-1">
                               		 </div>
                                	<div class="col-lg-2 col-md-2 col-sm-2">
                                	<p>ÂØÜÁ†Å*</p>
                                	</div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<div class="iconic-input">
                                           <!--  <input name="password" type="password" placeholder="ÂØÜÁ†Å"> -->
                                            <input type="password"  data-trigger="focus" name="password" id="password" placeholder="Áî®Êà∑ÂØÜÁ†Å"  data-toggle="tooltip" data-placement="right" title="ËØ∑ÂÜô8Âà∞16‰ΩçÁöÑÁî®Êà∑ÂØÜÁ†Å" />
                                            <span></span>
                                            <i class="icons icon-lock"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5">
                                		<p>*ËØ∑ÂÜô8Âà∞16‰ΩçÁöÑÁî®Êà∑ÂØÜÁ†Å</p>
                                	</div>
                                </div>
                                   <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1">
                               		 </div>
                                	<div class="col-lg-2 col-md-2 col-sm-2">
                                	<p>È™åËØÅÁ†Å*</p>
                                	</div>
                                  <div class="col-lg-2 col-md-2 col-sm-2">
                                  	<!-- <input name="code" type="text" placeholder="ÁÇπÂáªÂà∑Êñ∞"> -->
                                  	<input type="text" name="code" id="code"  style="width:120px" placeholder="ÁÇπÂáªÂà∑Êñ∞" />
                                    <span></span>
                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2">
                                  	<img src="<?php echo U('Home/User/code');?>"  onclick="this.src=this.src + '?' + Math.random()" alt="">
                                  </div>	
                                </div>
                              
                                <div class="row">
	                                <div class="col-lg-3 col-md-3 col-sm-3">
	                               		</div>
                                	<div class="col-lg-2 col-md-2 col-sm-2 align-left">
                                    	<input type="submit" class="orange" value="ÁôªÂΩï">
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                     <small>
											<a class="align-right" href="#">ÂøòËÆ∞ÂØÜÁ†Å?</a>
											<br>
											<a class="align-right" href="#">ÂøòËÆ∞Áî®Êà∑Âêç?</a>
											<br>
									</small>
	                               	</div>
                                </div>
                               </form>
                            </div>
                            
                    	</div>
                          
                    </div>
                    
				</section>
				<!-- /Main Content -->
                
                  <!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3 right-sidebar">
					
					<!-- Categories -->
							<!-- Categories -->
					<div class="row sidebar-box purple">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
								<i class="icons icon-folder-open-empty"></i>
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
					<!-- /Categories -->
                   
					
                    
				</aside>
                <!-- /Sidebar -->
                
                
                
			</div>
			<!-- /Content -->
		
<script>
    

    $('#username').blur(function () {
        checkUserName(this);
    })

    $('#password').blur(function () {
        checkPassword(this);
    });

    $('#code').blur(function () {
        checkCaptcha(this);
    });

    $('form[name="login-form"]').submit(function (){
        var uNameValue = $('#username')[0];
        var uPassword  = $('#password')[0];
        var uCaptcha   = $('#code')[0];

        if (checkUserName(uNameValue) &&  checkPassword(uPassword) && checkCaptcha(uCaptcha))
        {
            return true;
        }
        return false;
    });

    // È™åËØÅÁ†ÅÂà§Êñ≠
    function checkCaptcha(obj)
    {
        var v = $(obj).val();
        var oSpan = $(obj).next('div');
        if (v.length < 4 || v.length > 5)
        {
            oSpan.html('È™åËØÅÁ†ÅÈïøÂ∫¶‰∏çÂêàÊ≥ï').css({'font-size':'12px', 'color':'red'});
            return false;
        }
        else
        {
            oSpan.html('È™åËØÅÁ†ÅÂêàÊ≥ï').css({'font-size':'12px', 'color':'green'});
            return true;
        }
    }

    // È™åËØÅÂØÜÁ†Å
    function checkPassword (obj)
    {
        var v = $(obj).val();
        var oSpan = $(obj).next('span');
        if (v.length < 8)
        {
            oSpan.html('ÂØÜÁ†ÅÈïøÂ∫¶‰∏çÂ§ü').css({'font-size':'12px', 'color':'red'});
            return false;
        }
        else 
        {
            oSpan.html('ÂØÜÁ†ÅÂèØÁî®').css({'font-size':'12px', 'color':'green'});
            return true;
        }
    }

    // È™åËØÅÁî®Êà∑Ë¥¶Êà∑
    function checkUserName(obj) 
    {
        var v = $(obj).val();
        var oSpan = $(obj).next('span');
        var bool = false;
        if (v.length == 0)
        {
            oSpan.html('Áî®Êà∑Ë¥¶Êà∑‰∏çËÉΩ‰∏∫Á©∫').css({'font-size':'12px', 'color':'red'});
        }
        else
        {
            if (v.match(/^1{1}[3578]{1}\w{9}$/) || v.match(/^[1-9a-zA-Z]+\w+@[\w-]+\.[0-9a-zA-Z]+$/i))
            {
                oSpan.html('Ë¥¶Âè∑ÂèØÁî®').css({'font-size':'12px', 'color':'green'});
                bool = true; 
            }
            else 
            {
                oSpan.html('Ë¥¶Âè∑‰∏çÂêàÊ≥ï').css({'font-size':'12px', 'color':'red'});
            }
        }
        return bool;
    }
</script>	
<!-- Banner -->
			<section class="banner">
				
				<div class="left-side-banner banner-item icon-on-right gray">
					<h4>0379-65518814</h4>
					<p>÷‹“ª - ÷‹¡˘: 8am - 5pm </p>
					<i class="icons icon-phone-outline"></i>
				</div>
				
				<a href="#">
				<div class="middle-banner banner-item icon-on-left light-blue">
					<h4>√‚” </h4>
					<p>∂©µ•¬˙99‘™</p>
                    <span class="button">¡ÀΩ‚∏¸∂‡</span>
					<i class="icons icon-truck-1"></i>
				</div>
				</a>
				
				<a href="#">
				<div class="right-side-banner banner-item orange">
					<h4>∑ËøÒ«¿π∫!</h4>
					<p>…Ã∆∑¡–±Ì</p>
                    <span class="button">œ÷‘⁄π∫¬Ú</span>
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
									<h2>πÿ◊¢Œ“√«</h2>
									
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
								<h4>πÿ”⁄Œ“√«</h4>
								<ul>
									<li><a href="#"><i class="icons icon-right-dir"></i> πÿ”⁄tkphp</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> –¬Œ≈÷––ƒ</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> º”»ÎŒ“√«</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> ∑®¬……˘√˜</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> –«ø’÷Æ‘º</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> ¡™œµŒ“√«</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> ”—«È¡¥Ω”</a></li>
								</ul>
							</div>
							<!-- /The Service -->
							
							
							<!-- Like us on Facebook -->
							<div class="col-lg-3 col-md-3 col-sm-6">
								<h4>≤˙∆∑</h4>
								<ul>
									<li><a href="#"><i class="icons icon-right-dir"></i>∆Ω∞Âœµ¡–</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> ÷º«œµ¡–</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i>œ‡ª˙œµ¡–</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i>≈‰º˛</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i>–¬≤˙∆∑</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i>∏≈ƒÓ≤˙∆∑</a></li>
								</ul>
							</div>
							<!-- /Like us on Facebook -->
							
							
							<!-- Information -->
							<div class="col-lg-3 col-md-3 col-sm-6">
								<h4>∑˛ŒÒ÷––ƒ</h4>
								<ul>
									<li><a href="#"><i class="icons icon-right-dir"></i> ÃÂ—ÈµÍ</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i>  €∫Û∑˛ŒÒ</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> πŸ∑˛÷––ƒ</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> ∞Ô÷˙÷––ƒ</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> »Ìº˛œ¬‘ÿ</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> πÃº˛…˝º∂</a></li>
								</ul>
							</div>
							<!-- /Information -->
							
							
							<!-- Contact Us -->
							<div class="col-lg-3 col-md-3 col-sm-6 contact-footer-info">
								<h4>¡™œµŒ“√«</h4>
								<ul>
									<li><i class="icons icon-location"></i>¡˙√≈¥Ûµ¿71∫≈,<br>¬Â—Ù ¶∑∂—ß‘∫, –≈œ¢ºº ı—ß‘∫.</li>
                                    <li><i class="icons icon-phone"></i> +182-3882-7991</li>
									<li><i class="icons icon-mail-alt"></i><a href="mailto:web_zhaobei@163.com"> web_zhaobei@163.com</a></li>
									<li><i class="icons icon-skype"></i> homeshop</li>
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
								<p class="copyright">Copyright 2015 <a href="#">ShopZhao</a>. All Rights Reserved.</p>
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