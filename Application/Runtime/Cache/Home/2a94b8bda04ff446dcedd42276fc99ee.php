<?php if (!defined('THINK_PATH')) exit();?>﻿﻿<!DOCTYPE html>

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
									<span class="nav-caption">新闻</span>
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

			
			<!-- Content -->
			<div class="row content">
				
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">
					
					<section class="slider">
						<div class="tp-banner-container">
							<div class="tp-banner" >
								<ul>
									<!-- SLIDE  -->
									<?php if(is_array($goods)): foreach($goods as $key=>$good): ?><li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
										<!-- MAIN IMAGE -->
										<img src="/tkphp/Uploads/<?php echo ($good["list_image"]); ?>"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
										<!-- LAYERS -->
										<div class="tp-caption skewfromrightshort fadeout"
											data-x="40"
											data-y="60"
											data-speed="500"
											data-start="1200"
											data-easing="Power4.easeOut"><h2><?php echo ($good["pro_name"]); ?> <strong></strong></h2>
										</div>
										<div class="tp-caption skewfromrightshort fadeout"
											data-x="40"
											data-y="140"
											data-speed="500"
											data-start="1200"
											data-easing="Power4.easeOut"><h3><?php echo ($good["pro_subname"]); ?></h3>
										</div>
										<div class="tp-caption skewfromrightshort fadeout"
											data-x="40"
											data-y="250"
											data-speed="500"
											data-start="1200"
											data-easing="Power4.easeOut"><span>售价 <span class="price">￥<?php echo ($good["promote_price"]); ?></span></span>
										</div>
										<div class="tp-caption skewfromrightshort fadeout"
											data-x="40"
											data-y="300"
											data-speed="500"
											data-start="1200"
											data-easing="Power4.easeOut"><a class="button big red" href="<?php echo U('Home/Product/index' ,array('id'=>$good[id]));?>">了解更多</a>
										</div>
									</li><?php endforeach; endif; ?>
								</ul>
							</div>
						</div>
				  	</section>
					
					
					
					<!-- Featured Products -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>电脑</h4>
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
									<?php if(is_array($products)): foreach($products as $key=>$good): ?><div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="/tkphp/Uploads/<?php echo ($good["list_image"]); ?>" alt="Product1">
												<a href="<?php echo U('Home/Product/index' ,array('id'=>$good[id]));?>" class="product-hover">
													<i class="icons icon-eye-1"></i> 快速查看
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="<?php echo U('Home/Product/index');?>">值得拥有</a></h5>
												<span class="price">￥<?php echo ($good["promote_price"]); ?></span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">加入购物车</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">加入收藏夹</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">加入对比</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div><?php endforeach; endif; ?>
									<!-- /Slide -->
									
									
									
									
									
							</div>
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /Featured Products -->
					
					
					
					
					<!-- New Collection -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>手机</h4>
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
									<?php if(is_array($products)): foreach($products as $key=>$good): ?><div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="/tkphp/Uploads/<?php echo ($good["list_image"]); ?>" alt="Product1">
												<a href="<?php echo U('Home/Product/index');?>" class="product-hover">
													<i class="icons icon-eye-1"></i> 快速查看
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="<?php echo U('Home/Product/index');?>">值得拥有</a></h5>
												<span class="price">￥<?php echo ($good["promote_price"]); ?></span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">加入购物车</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">加入收藏夹</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">加入对比</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div><?php endforeach; endif; ?>
									<!-- /Slide -->
									
							</div>
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /New Collection -->
					



					
					<!-- Random Products -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>相机</h4>
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
								<?php if(is_array($products)): foreach($products as $key=>$good): ?><div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="/tkphp/Uploads/<?php echo ($good["list_image"]); ?>" alt="Product1">
												<a href="<?php echo U('Home/Product/index');?>" class="product-hover">
													<i class="icons icon-eye-1"></i> 快速查看
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="<?php echo U('Home/Product/index');?>">值得拥有</a></h5>
												<span class="price">￥<?php echo ($good["promote_price"]); ?></span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">加入购物车</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">加入收藏夹</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">加入对比</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div><?php endforeach; endif; ?>
									<!-- /Slide -->
							</div>
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /Random Products -->
					
					


					<!-- Product Brands -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>配件</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="5">
									
									<!-- Slide -->
									<?php if(is_array($products)): foreach($products as $key=>$good): ?><div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="/tkphp/Uploads/<?php echo ($good["list_image"]); ?>" alt="Product1">
												<a href="<?php echo U('Home/Product/index');?>" class="product-hover">
													<i class="icons icon-eye-1"></i> 快速查看
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="<?php echo U('Home/Product/index');?>">值得拥有</a></h5>
												<span class="price">￥<?php echo ($good["promote_price"]); ?></span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
							
											
										</div>
										<!-- /Carousel Item -->
									</div><?php endforeach; endif; ?>
									<!-- /Slide -->
							
							</div>
							
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /Product Brands -->
					
						
				</section>
				<!-- /Main Content -->
				
				
				
				
				<!-- Sidebar -->
				<aside class="sidebar col-lg-3 col-md-3 col-sm-3  col-lg-pull-9 col-md-pull-9 col-sm-pull-9">
					
					<!-- Categories -->
				<!-- ﻿		   <div class="row sidebar-box purple" style="margin-top:0;">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
								<i class="icons icon-folder-open-empty"></i>
								<h4>商品分类</h4>
							</div>
							
							<div class="sidebar-box-content">
								<ul>
									<li><a href="#">智能手机 <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">平板电脑 <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">单反相机 <i class="icons icon-right-dir"></i></a>
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
									<li><a href="#">手机<i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">电脑 <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">相机 <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">配件 <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">服务 <i class="icons icon-right-dir"></i></a></li>
									<li><a class="purple" href="#">更多分类</a></li>
								</ul>
							</div>
							
						</div>
							
					</div>
 -->
						   <div class="row sidebar-box purple" style="margin-top:0;">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
								<i class="icons icon-folder-open-empty"></i>
								<h4>商品分类</h4>
							</div>
							
							<div class="sidebar-box-content">
								<ul>
									<li><a href="#">智能手机 <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">平板电脑 <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">单反相机 <i class="icons icon-right-dir"></i></a>
                                    	 <ul class="sidebar-dropdown">
                                        	<li>
                                            	<ul>
                                                	<li><a href="#">平板电脑&&笔记本&&超级本</a></li>
                                                    <li><a href="#">平板电脑&&笔记本&&超级本</a></li>
                                                    <li><a href="#">平板电脑&&笔记本&&超级本</a></li>
                                                    <li><a href="#">平板电脑&&笔记本&&超级本</a></li>
                                                    <li><a href="#">平板电脑&&笔记本&&超级本</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                            	<ul>
                                                	<li><a href="#">平板电脑&&笔记本&&超级本</a></li>
                                                    <li><a href="#">平板电脑&&笔记本&&超级本</a></li>
                                                    <li><a href="#">平板电脑&&笔记本&&超级本</a></li>
                                                    <li><a href="#">平板电脑&&笔记本&&超级本</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
									<li><a href="#">手机<i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">电脑 <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">相机 <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">配件 <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">服务 <i class="icons icon-right-dir"></i></a></li>
									<li><a class="purple" href="#">更多分类</a></li>
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
								<h4>商品对比</h4>
							</div>
							
							<div class="sidebar-box-content sidebar-padding-box">
								<p>您还没有商品对比</p>
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
											<a href="#"><img src="/tkphp/Public/homeshop/img/sidebar-slide1.jpg" alt="Slide1"></a>
										</li>
										<li>
											<a href="#"><img src="/tkphp/Public/homeshop/img/sidebar-slide2.jpg" alt="Slide1"></a>
										</li>
										<li>
											<a href="#"><img src="/tkphp/Public/homeshop/img/sidebar-slide3.jpg" alt="Slide1"></a>
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
								<h4>手机</h4>
							</div>
							
							<div class="sidebar-box-content">
								<table class="bestsellers-table">
									
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="/tkphp/Public/homeshop/img/products/sample1.jpg" alt="Product1"></a></td>
										<td class="product-info">
											<p><a href="#">值得拥有</a></p>
											<span class="price">￥550</span>
										</td>
									</tr>
									
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="/tkphp/Public/homeshop/img/products/sample2.jpg" alt="Product1"></a></td>
										<td class="product-info">
											<p><a href="#">值得拥有</a></p>
											<span class="price">￥550</span>
										</td>
									</tr>
									
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="/tkphp/Public/homeshop/img/products/sample3.jpg" alt="Product1"></a></td>
										<td class="product-info">
											<p><a href="#">值得拥有</a></p>
                                            <div class="rating readonly-rating" data-score="4"></div>
											<span class="price"><del>￥650</del> ￥550</span>
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
								<h4>标签</h4>
							</div>
							
							<div class="sidebar-box-content sidebar-padding-box">
								<a href="#" class="tag-item">手机</a>
								<a href="#" class="tag-item">相机</a>
								<a href="#" class="tag-item">电脑</a>
								<a href="#" class="tag-item">耳机</a>
								<a href="#" class="tag-item">笔记本</a>
								<a href="#" class="tag-item">台式机</a>
								<a href="#" class="tag-item">内存卡</a>
								<a href="#" class="tag-item">显示屏</a>
							</div>
								
						</div>
						
					</div>
					<!-- /Tag Cloud -->
					
					
					<!-- Specials -->
					<div class="row products-row sidebar-box orange">
						 
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<!-- Carousel Heading -->
							<div class="carousel-heading no-margin">
								
								<h4><i class="icons icon-magic"></i> 特别款</h4>
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
								<?php if(is_array($products)): foreach($products as $key=>$good): ?><div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="/tkphp/Uploads/<?php echo ($good["list_image"]); ?>" alt="Product1">
												<a href="<?php echo U('Home/Product/index');?>" class="product-hover">
													<i class="icons icon-eye-1"></i> 快速查看
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="<?php echo U('Home/Product/index');?>">值得拥有</a></h5>
												<span class="price">￥<?php echo ($good["promote_price"]); ?></span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">加入购物车</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">加入收藏夹</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">加入对比</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div><?php endforeach; endif; ?>
								<!-- /Slide -->
								
							</div>
						
						</div>
						<!-- / Carousel -->
						
						
					</div>
					<!-- /Specials -->
					
					
				</aside>
				<!-- /Sidebar -->
				
			</div>
			<!-- /Content -->
			
			
			


			<!-- News -->
			<div class="products-row row">
				
				<!-- Carousel Heading -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div class="carousel-heading">
						<h4>新闻</h4>
						<div class="carousel-arrows">
							<i class="icons icon-left-dir"></i>
							<i class="icons icon-right-dir"></i>
						</div>
					</div>
					
				</div>
				<!-- /Carousel Heading -->
				
				
				<!-- Carousel -->
				<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
					
					<div class="owl-carousel" data-max-items="2">
							
						<!-- Slide -->
						<div>
							<!-- Carousel Item -->
							<article class="news">
								
								<div class="news-background">
								
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 news-thumbnail">
											<a href="#"><img src="/tkphp/Public/homeshop/img/news/sample1.jpg" alt="News1"></a>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 news-content">
											<h5><a href="blog_post.html">Lorem Ipsum</a></h5>
											<span class="date"><i class="icons icon-clock-1"></i> 23 April, 2012</span>
											<p>Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh.</p>
										</div>
									</div>
									
								</div>
								
							</article>
							<!-- /Carousel Item -->
						</div>
						<!-- /Slide -->
						
						
						<!-- Slide -->
						<div>
							
							<!-- Carousel Item -->
							<article class="news">
								
								<div class="news-background">
								
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 news-thumbnail">
											<a href="#"><img src="/tkphp/Public/homeshop/img/news/sample2.jpg" alt="News1"></a>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 news-content">
											<h5><a href="blog_post.html">Lorem Ipsum</a></h5>
											<span class="date"><i class="icons icon-clock-1"></i> 23 April, 2012</span>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Suspendisse sollicitudin.</p>
										</div>
									</div>
								
								</div>
								
							</article>
							<!-- /Carousel Item -->
							
						</div>
						<!-- /Slide -->
						
						
						
						<!-- Slide -->
						<div>
							
							<!-- Carousel Item -->
							<article class="news">
								
								<div class="news-background">
								
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 news-thumbnail">
											<a href="#"><img src="/tkphp/Public/homeshop/img/news/sample2.jpg" alt="News1"></a>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 news-content">
											<h5><a href="blog_post.html">Lorem Ipsum</a></h5>
											<span class="date"><i class="icons icon-clock-1"></i> 23 April, 2012</span>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Suspendisse sollicitudin.</p>
										</div>
									</div>
								
								</div>
								
							</article>
							<!-- /Carousel Item -->
							
						</div>
						<!-- /Slide -->
						
						
						
						
						<!-- Slide -->
						<div>
							
							<!-- Carousel Item -->
							<article class="news">
								
								<div class="news-background">
								
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 news-thumbnail">
											<a href="#"><img src="/tkphp/Public/homeshop/img/news/sample2.jpg" alt="News1"></a>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 news-content">
											<h5><a href="blog_post.html">Lorem Ipsum</a></h5>
											<span class="date"><i class="icons icon-clock-1"></i> 23 April, 2012</span>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Suspendisse sollicitudin.</p>
										</div>
									</div>
								
								</div>
								
							</article>
							<!-- /Carousel Item -->
							
						</div>
						<!-- /Slide -->
						
						
						
						
						<!-- Slide -->
						<div>
							
							<!-- Carousel Item -->
							<article class="news">
								
								<div class="news-background">
								
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 news-thumbnail">
											<a href="#"><img src="/tkphp/Public/homeshop/img/news/sample2.jpg" alt="News1"></a>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 news-content">
											<h5><a href="blog_post.html">Lorem Ipsum</a></h5>
											<span class="date"><i class="icons icon-clock-1"></i> 23 April, 2012</span>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Suspendisse sollicitudin.</p>
										</div>
									</div>
								
								</div>
								
							</article>
							<!-- /Carousel Item -->
							
						</div>
						<!-- /Slide -->
						
						
					</div>
				
				</div>
				<!-- /Carousel -->
				
			</div>
			<!-- /News -->
			


			
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