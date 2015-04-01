<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

<meta charset="utf-8">
<title>TKPHP</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- CSS -->

<link rel="stylesheet" href="/tkphp/Public/login/css/supersized.css">
<link rel="stylesheet" href="/tkphp/Public/login/css/login.css">
<link href="/tkphp/Public/login/css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<script src="/tkphp/Public/login/js/html5.js"></script>
<![endif]-->
<script src="/tkphp/Public/login/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/tkphp/Public/login/js/jquery.form.js"></script>
<script type="text/javascript" src="/tkphp/Public/login/js/tooltips.js"></script>
<script type="text/javascript" src="/tkphp/Public/login/js/login.js"></script>
</head>

<body>

<div class="page-container">
	<div class="main_box">
		<div class="login_box">
			<div class="login_logo">
				<!--<img src="images/logo.png" >-->
				<h1>TKPHP后台登录</h1>
			</div>
		
			<div class="login_form">
				<form action="<?php echo U('Admin/Login/checkLogin');?>" id="login_form" method="post">
					<div class="form-group">
						<label for="j_username" class="t">邮　箱：</label> 
						<input id="email" value="" name="username" type="text" class="form-control x319 in" 
						autocomplete="off">
					</div>
					<div class="form-group">
						<label for="j_password" class="t">密　码：</label> 
						<input id="password" value="" name="password" type="password" 
						class="password form-control x319 in">
					</div>
					<div class="form-group">
						<label for="j_captcha" class="t">验证码：</label>
						 <input id="j_captcha" name="code" type="text" class="form-control x164 in">
						<img id="captcha_img" alt="点击更换" title="点击更换" src="<?php echo U('Home/User/code');?>" onclick="this.src=this.src + '?' + Math.random()" class="m">
						
					</div>
					<div class="form-group">
						<label class="t"></label>
						<label for="j_remember" class="m">
						<input id="j_remember" name="remember" type="checkbox" value="1">&nbsp;记住登陆账号!</label>
					</div>
					<div class="form-group space">
						<label class="t"></label>　　　
						<input type="submit" value="&nbsp;登&nbsp;录&nbsp;" id="submit_btn" class="btn btn-primary btn-lg">
						<input type="reset" value="&nbsp;重&nbsp;置&nbsp;" class="btn btn-default btn-lg">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Javascript -->

<script src="/tkphp/Public/login/js/supersized.3.2.7.min.js"></script>
<script src="/tkphp/Public/login/js/supersized-init.js"></script>
<script src="/tkphp/Public/login/js/scripts.js"></script>
</body>
</html>