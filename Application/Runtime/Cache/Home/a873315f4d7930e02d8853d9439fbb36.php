<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>

<html>

    <head>
        
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title -->
        <title>HomeShop - HTML Template</title>
        
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
									<li><a href="<?php echo U('Home/User/register');?>">我的账户</a></li>
									<li><a href="<?php echo U('Home/Bill/lists');?>">订单信息</a></li>
									<li><a href="<?php echo U('Home/Bill/info');?>">订单信息</a></li>
									<li><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>
									<li><a href="<?php echo U('Home/Index/contact');?>">联系我们</a></li>
								</ul>
							</nav>
							
							<nav class="col-lg-5 col-md-5 col-sm-5">
								<ul class="pull-right">
									<?php if($_COOKIE['username'] != '' ): endif; ?>
									<?php if($_SESSION['is_Login'] == 1 ): echo ($_SESSION['username']); ?> 你好!
									<a href="<?php echo U('Home/User/logout');?>">注销</a>
									<?php else: ?> 
									<li class="purple"><a href="<?php echo U('Home/User/register');?>"><i class="icons icon-user-3"></i> 登录</a>
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
									<span class="nav-caption">相机</span>
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
	<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="index.html">首页</a> <i class="icons icon-right-dir"></i> 联系我们</p>
                    </div>
                </div>
                
				<!-- Main Content -->
				<section class="main-content col-lg-12 col-md-12 col-sm-12">
                    
                    
                    <div class="row">
                    	
                        <div class="col-lg-7 col-md-7 col-sm-7">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>联系信息</h4>
                            </div>
                            
                            <div class="page-content contact-info">
                            	
                                <iframe width="425" height="350" src="https://maps.google.rs/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=marmora+road&amp;sll=44.210767,20.922416&amp;sspn=4.606139,10.821533&amp;ie=UTF8&amp;hq=&amp;hnear=Marmora+Rd,+London+SE22+0RX,+United+Kingdom&amp;t=m&amp;z=14&amp;ll=51.451955,-0.055755&amp;output=embed"></iframe>
								<div class="row">
                                	
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<div class="contact-item green">
                                            <i class="icons icon-location-3"></i>
                                            <p>龙门大道71号,<br>
                                            
洛阳师范学院.</p>
										</div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<div class="contact-item blue">
                                            <i class="icons icon-mail"></i>
                                            <p><a href="#">web_zhaobei@163.com</a><br>
<a href="#">web_zhaobei@163.com</a>
</p>
										</div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<div class="contact-item orange">
                                            <i class="icons icon-phone"></i>
                                            <p>182-3882-7991<br>
182-3882-7991
</p>
										</div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    	<div class="contact-item purple">
                                            <i class="icons icon-clock"></i>
                                            <p>周一 ——周五: 08.00-20.00<br>
周六: 09.00-15.00<br>
周日: 不营业</p>
										</div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                    	</div>
                        
                        
                        
                        
                        <div class="col-lg-5 col-md-5 col-sm-5">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>联系表</h4>
                            </div>
                            
                            <div class="page-content contact-form">
                            	
								<form id="contact-form" action="php/contact.php">
								
									<label>姓名(必填)</label>
									<input name="contact-name" type="text">
									
									<label>邮箱(必填)</label>
									<input name="contact-email" type="text">
									
									<label>主题</label>
									<input name="contact-subject" type="text">
									
									<label>信息</label>
									<textarea name="contact-message"></textarea>
									
									<input class="big" type="submit" value="发送信息">
									
                                </form>
								
                            </div>
                            
                    	</div>
                        
                        
                  	</div>
                    
				</section>
				<!-- /Main Content -->
                
                
			</div>
			<!-- /Content -->
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
					<p>商品列表</p>
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
									<h4>邮箱登记</h4>
									<input type="text" name="newsletter-email" placeholder="输入您的邮箱">
									<input type="submit" name="newsletter-submit" value="提交">
								</form>
							</div>
							<!-- /Newsletter -->
							
							
							<!-- Social Media -->
							<div class="col-lg-5 col-md-5 col-sm-5 social-media">
								<h4>保持联系</h4>
								<ul>
									<li class="social-googleplus tooltip-hover" data-toggle="tooltip" data-placement="top" title="Google+"><a href="#"></a></li>
									<li class="social-facebook tooltip-hover" data-toggle="tooltip" data-placement="top" title="Facebook"><a href="#"></a></li>
									<li class="social-pinterest tooltip-hover" data-toggle="tooltip" data-placement="top" title="Pinterest"><a href="#"></a></li>
									<li class="social-twitter tooltip-hover" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="#"></a></li>
									<li class="social-youtube tooltip-hover" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="#"></a></li>
								</ul>
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
								<h4>服务</h4>
								<ul>
									<li><a href="#"><i class="icons icon-right-dir"></i> 我的账户</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 历史纪录</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 保持联系</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 购物页</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 商品目录</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 搜索结果</a></li>
								</ul>
							</div>
							<!-- /The Service -->
							
							
							<!-- Like us on Facebook -->
							<div class="col-lg-3 col-md-3 col-sm-6">
								<h4>服务</h4>
								<ul>
									<li><a href="#"><i class="icons icon-right-dir"></i> 我的账户</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 历史纪录</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 保持联系</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 购物页</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 商品目录</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 搜索结果</a></li>
								</ul>
							</div>
							<!-- /Like us on Facebook -->
							
							
							<!-- Information -->
							<div class="col-lg-3 col-md-3 col-sm-6">
								<h4>网站信息</h4>
								<ul>
									<li><a href="#"><i class="icons icon-right-dir"></i> 关于我们</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 关于我们</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 关于我们</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 关于我们</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 关于我们</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> 关于我们</a></li>
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
									<li class="payment1"></li>
									<li class="payment2"></li>
									<li class="payment3"></li>
									<li class="payment4"></li>
									<li class="payment5"></li>
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