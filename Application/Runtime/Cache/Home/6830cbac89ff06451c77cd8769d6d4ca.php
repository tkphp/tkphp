<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="/tkphp/Public/static/jquery-2.1.3.min.js"></script>
<title>登陆界面</title>
</head>
<body>
<div id="notice"></div>
<form id="login_form" action="<?php echo U('Home/User/login');?>" method="post">
<hgroup>
<h1>登录表单</h1>
<h2>欢迎您来到登录表单的世界</h2>
</hgroup>
<fieldset>
<legend>关于购物网站的登录</legend>
<div>
<label for="username">&nbsp;&nbsp;用户名:</label>
<input id="username" name="username" type="text" placeholder="请输入用户名" required aria-required="true" autofocus>
<span class="status1">*用户名应该为3-20位之间</span>
</div>
<div>
<label for="upwd">登录密码:</label>
<input id="upwd" name="upwd" placeholder="请输入密码" type="password" required>
<span class="status1">*用户密码应该为6-20位之间</span>
</div>
<input type="checkbox" id="check" name="check" checked>
<label for="check">自动登录</label>
<input id="btn" type="button" name="btn" value="登录">
</fieldset>
</form>
<script>
$(function(){
	$('#btn').click(function(){
		var $formval=$('#login_form').serialize();
		var $action = $('#login_form').attr('action');
		$.post($action, $formval, function(data){
			$('#notice').html(data.info);
			//$('#notice').html(data.status);
		});
		
	})
})
	
	
</script>
</body>
</html>