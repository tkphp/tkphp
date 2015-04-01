<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>

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
<!-- Content -->
			<div class="row content">
				
                <div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="breadcrumbs">
                    	<p><a href="<?php echo U('Home/Index/index');?>">首页</a> <i class="icons icon-right-dir"></i> 用户注册</p>
                    </div>
                </div>
                
                
           
                
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">

                    
                    <div class="row">
                    	
                        <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                        	
                            <div class="carousel-heading no-margin">
                                <h4>邮箱注册</h4>
                            </div>
                            
                            <div class="page-content">
                            	<div class="row">
                                	<div class="col-lg-1 col-md-1 col-sm-1 ">
                                	</div>
                                    <div class="col-lg-11 col-md-11 col-sm-11 ">
                                    	<p><strong><a href="<?php echo U('Home/User/login');?>">已有Tkphp账号</a></strong></p>
                                    </div>
                                    
                                </div>
                                
                                <form action="<?php echo U('Home/User/checkEmail');?>" method="post" name="regist-by-email">
                                <div class="row">
                                      	<div class="col-lg-1 col-md-1 col-sm-1 ">
                                	</div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                    	<p>邮箱地址*</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<input type="text"  data-trigger="focus" data-container="body" name="email" id="email" placeholder="邮箱地址" data-toggle="popover" data-placement="right" title="提示信息" data-content="请输入常用邮箱地址" />
										<span></span>
                                    </div>	
                                    <div class="col-lg-5 col-md-5 col-sm-5 ">
                                    	<p>*请输入常用邮箱地址</p>
                                	</div>
                                    
                                </div>
                                
                                
                               
                                <div class="row">
                                      	<div class="col-lg-1 col-md-1 col-sm-1 ">
                                	</div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                    	<p>密&nbsp;&nbsp;&nbsp;&nbsp;码*</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<input type="password"  data-trigger="focus" data-container="body" name="password" id="email-pwd" placeholder="密　　码" data-toggle="popover" data-placement="right" title="提示信息" data-content="长度为8到16个字符，至少包含两种类型" />
										<span></span>
                                    </div>	
                                     <div class="col-lg-5 col-md-5 col-sm-5 ">
                                    	<p>*长度为8到16个字符，至少包含两种类型</p>
                                	</div>
                                </div>
                                
                                <div class="row">
                                     	<div class="col-lg-1 col-md-1 col-sm-1 ">
                                	</div>
                                   <div class="col-lg-2 col-md-2 col-sm-2">
                                   	<p>确认密码*</p>
                                   </div>
                                   <div class="col-lg-4 col-md-4 col-sm-4">
                                   <input type="password" name="repassword"  data-trigger="focus" data-container="body" id="email-repwd" placeholder="重复密码" data-toggle="popover" data-placement="right" title="提示信息" data-content="长度为8到16个字符，至少包含两种类型" />
								   <span></span>
                                   </div>	
                                    <div class="col-lg-5 col-md-5 col-sm-5 ">
                                    	<p>*长度为8到16个字符，至少包含两种类型</p>
                                	</div>
                               </div>
                       
                       		   <div class="row">
                                    	<div class="col-lg-1 col-md-1 col-sm-1 ">
                                	</div>
                                  <div class="col-lg-2 col-md-2 col-sm-2">
                                  	<p>验证码*</p>
                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2">
                                  <input type="text" name="code" id="code"  placeholder="点击刷新" />
									<div></div>

                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2">
                                  	<img src="<?php echo U('Home/User/code');?>"  onclick="this.src=this.src + '?' + Math.random()" alt="">
                                  </div>	
                                   
                               </div>
                                  <div class="row">
                                   
                                    <div class="col-lg-3 col-md-3 col-sm-3 ">
                                	</div>
                                	
                                   <div class="col-lg-6 col-md-6 col-sm-6">
                                   	 <input type="checkbox" checked name="agreement" value="1" /> 我已阅读并接受 <a href="###">《服务协议条款》</a> 

                                   </div>	
                                   
                               </div>
                                <div class="row">
                                     <div class="col-lg-3 col-md-3 col-sm-3">
                                     </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    	<input class="big" type="submit" value="注册">
                                        <input class="big" type="reset" value="取消">
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
						﻿		   <div class="row sidebar-box purple" style="margin-top:0;">
						
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

					<!-- /Categories -->
                    
                    
                    
                  
                    
				</aside>
                <!-- /Sidebar -->
                
			</div>
			<!-- /Content -->
<script>


$(function (){
    // 登录注册切换
    $('#by-phone').click(function (){
        $(this).addClass('active');
        $('#by-email').removeClass('active');
        $('form[name="regist-by-mobile"]').show();
        $('form[name="regist-by-email"]').hide();
    });

    $('#by-email').click(function (){
        $(this).addClass('active');
        $('#by-phone').removeClass('active');
        $('form[name="regist-by-mobile"]').hide();
        $('form[name="regist-by-email"]').show();
    });


    // ========================== 手机注册 表单验证================================
    // 检测手机号是否存在
    $('#mobile-num').blur(function () {
        checkMobile();
    });

    // 检测密码是否合法
    $('#mobile-pwd').blur(function (){
        checkPassword(this);
    });

    // 检测重复密码
    $('#mobile-repwd').blur(function (){
        checkRePassword(this, $('#mobile-pwd'));
    });

    // 检查手机号
    function checkMobile ()
    {
        // 获取号码
        var obj    = $('#mobile-num');
        var oBtn   = $('#verify-btn');
        var number = $('#mobile-num').val();
        var oTxt   = $('#mobile-num').next('span');
        if (number.length == 0)
        {
            oTxt.css({
                'font-size':'12px',
                'color':'red'
            }).html('对不起，手机号不能为空');
            obj.attr('mobile-exists', '0');
            oBtn.attr('disabled', 'disabled');
            return false;
        }

        // 检测号码是否合法
        if ( ! number.match(/^[1][3578]{1}\d{9}$/))
        {
            oTxt.css({
                'font-size':'12px', 
                'color': 'red',
            }).html('对不起，手机号码不合法');
            obj.attr('mobile-exists', '0');
            oBtn.attr('disabled', 'disabled');
            return false;
        }
        else
        {
            // 验证手机号码是否存在
            $.ajax({
                'url': url + '/checkMobileExists',
                'type': 'GET',
                'data':{
                    'number':number
                },
                'dataType':'json',
                'success': function (d){
                    if (d == 1)
                    {
                        // 可用
                        obj.attr('mobile-exists', '1');
                        oBtn.removeAttr('disabled');
                        oTxt.css({
                            'font-size': '12px',
                            'color': 'green'
                        }).html('手机号码可用');
                    }
                    else
                    {
                        // 不可用
                        obj.attr('mobile-exists', '0');
                        oBtn.attr('disabled', 'disabled');
                        oTxt.css({
                            'font-size': '12px',
                            'color':'red',
                        }).html('该手机号已被占用');
                    }
                }
            });
        }
    }

    // Ajax去验证手机验证码
    $('#verify-btn').click(function ()
    {
        var data = $('#mobile-num').val();
        $.post(url + '/checkBySms', {'phone_number': data}, function (d){
            if (d != null)
            {
                $('#verify-btn').attr('disabled', 'disabled');
                var time = 120;
                var timer = null;
                timer = setInterval(function (){
                    var str = '计时' + time + '秒';
                    $('#verify-btn').html(str);
                    time--;
                    if (time == 0) 
                    {
                        $('#verify-btn').removeAttr('disabled');
                        clearInterval(timer);
                        $('#verify-btn').html('获取验证码');
                    }
                }, 1000);
            }
        });
        return false;
    });

    $('#regist-by-mobile').submit(function (){
        checkMobile();
        var checkP = checkPassword($('#mobile-pwd'));
        var checkRP = checkRePassword($('#mobile-repwd'), $('#mobile-pwd'));
        // 去查找手机号
        var m = $('#mobile-num').attr('mobile-exists');
        if (m == 0)
        {
            return false;
        }
        // 检测验证码
        var v = $('#verify-num').val()
        if (v.length < 6)
        {
            alert('验证码不合法');
            return false;
        }
        // 协议是否勾选
        if ( ! $('#mobile-agreement')[0].checked)
        {
            alert('请先阅读并勾选用户注册协议');
            return false;
        }
        if (checkP && checkRP)
        {
            return true;
        }
        return false;
    });


    // ========================== 邮箱注册 表单验证================================
    // 验证邮箱
    // 验证邮箱没有返回值，是修改了其属性性
    $('#email').blur(function (){
        checkEmail(this);
    });

    // 验证密码
    var checkEmailP
    $('#email-pwd').blur(function (){
        checkEmailP = checkPassword(this);
    });

    // 验证重复密码
    var checkEmailReP
    $('#email-repwd').blur(function (){
        var orgObj = $('#email-pwd');
        checkEmailReP = checkRePassword(this, orgObj);
    });


    // 验证验证码
    var checkCaptate = false;
    $('#code').blur(function () {
        if ($(this).val().length != 0)
        {
            checkCaptate = true;
        }
        else
        {
            $(this).parent().addClass('has-error');
            $(this).next('div').html('验证码不能为空').css('color', 'red');
        }
    });

    // 提交表单
    $('form[name="regist-by-email"]').submit(function (){
        // alert('');
        if ($('#email').attr('email-available') == 0)
        {
            $('#email').parent().addClass('has-error');
            $('#email').next('span').html('邮箱账号不可用，请重新填写').css({'color':'red', 'font-size':'12px'});
            return false;
        }
        else
        {
            if ( ! $('#email-agreement')[0].checked)
            {
                return false;
            }
            else
            {
                if (checkEmailP && checkEmailReP && checkCaptate)
                {
                    return true;
                }
            }
            
        }
        return false;
    });


});

// 是否同意注册协议


// 验证重复密码
function checkRePassword (obj, orgObj)
{
    var bool = false;
    if ($(obj).val().length == 0)
    {
        $(obj).parent().addClass('has-error');
        $(obj).next('span').html('重复密码不能为空').css({'color':'red', 'font-size':'12px'});
    }
    else if ($(obj).val() != orgObj.val()) 
    {
        $(obj).parent().addClass('has-error');
        $(obj).next('span').html('两次密码不一致').css({'color':'red', 'font-size':'12px'});
    }
    else
    {
        $(obj).parent().removeClass('has-error');
        $(obj).next('span').html('密码合法').css({'color':'green', 'font-size':'12px'});
        bool = true;
    }
    return bool;
}

// 验证密码
function checkPassword (obj)
{
    var bool = false;
    var counts = 0;
    if ($(obj).val() == 0)
    {
        $(obj).parent().addClass('has-error');
        $(obj).next('span').html('不能为空').css({'color': 'red', 'font-size': '12px'});
    }
    else if ($(obj).val().length >16 || $(obj).val().length < 8)
    {
        $(obj).parent().addClass('has-error');
        $(obj).next('span').html('密码长度在8到16位之间').css({'color': 'red', 'font-size': '12px'});
    }
    else 
    {
        // 密码安全等级
        if ($(obj).val().match(/\d+/))
        {
            counts++;
        }

        if ($(obj).val().match(/[a-zA-Z]+/))
        {
            counts++;
        }
        if ($(obj).val().match(/[^\da-zA-Z]+/))
        {
            counts++;
        }
        
        if (counts < 2)
        {
            $(obj).parent().addClass('has-error');
            $(obj).next('span').html('密码至少包含两种字符').css({'color': 'red', 'font-size': '12px'});
        }
        else 
        {
            $(obj).parent().removeClass('has-error');
            $(obj).next('span').html('密码合法').css({'color': 'green', 'font-size': '12px'});
            bool = true;
        }
    }
    return bool;
}

// 验证手机号
function checkMobile(obj) 
{
    var bool = false;
    if ($(obj).val().length == 0)
    {
        $(obj).parent().addClass('has-error');
        $(obj).next('span').html('不能为空').css('color', 'red');
    }
    else if ( ! $(obj).val().match(/^1[3587]{1}\d{9}$/))
    {
        $(obj).parent().addClass('has-error');
        $(obj).next('span').html('非法号码').css('color', 'red');
    }
    else 
    {
        $(obj).parent().removeClass('has-error');
        $(obj).next('span').html('合法手机号码').css('color', 'green');
        bool = true;
    }
    return bool;
}

// 检测并用Ajax请求检测该邮箱是否已经注册
function checkEmail(obj)
{

    if ( ! $(obj).val().match(/^[a-zA-Z1-9]+\w+@[a-zA-Z0-9]+\.\w+[\da-zA-Z]$/))
    {
        $(obj).next('span').html('账号不能包含特殊字符，并且不能以下划线开头或结尾').css({'color':'red', 'font-size':'12px'});
    }
    else
    {
        // Ajax请求判断邮箱是否可用
        var emailValue = $('email').val();
        $.post(url + '/checkEmailAvailable', {'email':emailValue}, function (d){
            if (d == 'no')
            {
                $(obj).parent().addClass('has-error');
                $(obj).next('span').html('该邮箱已被注册').css({'color':'red', 'font-size':'12px'});
                // 由于在Ajax里面封装的方法不会返回值，因此这里修改input标签的属性，当提交表单的时候通过这个属性的值来判断
                $(obj).attr('email-available', '0');
            }
            else if (d == 'yes')
            {
                $(obj).next('span').html('该邮箱可用').css({'color':'green', 'font-size':'12px'});
                // 同上
                $(obj).attr('email-available', '1');
            }
        });
    }
}
</script>
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