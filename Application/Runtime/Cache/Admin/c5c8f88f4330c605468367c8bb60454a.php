<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<title>后台管理系统</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="/tkphp/Public/static/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/tkphp/Public/css/admin.css" />
<script src="/tkphp/Public/static/jquery-2.1.3.min.js"></script>
<script src="/tkphp/Public/static/bootstrap/js/bootstrap.js"></script>
</head>
<body>

<div class="container-fluid head">  
	<div class="row">
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Tkphp</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">会员 <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo U('Goods/lists');?>">商品</a></li>
        <li><a href="#">广告</a></li>
         <li><a href="#">设置</a></li>
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">后台管理系统</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">管理员 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	</div>
</div>


<div class="container-fluid">
	<div class="row">
		
		<div class="pull-left col-md-2 left">
			
<div class="row-fluid">
		<div class="span12">
			<ul class="nav nav-list well ">
				<li class="nav-header">
					会员管理
				</li>
				<li >
					<a href="#">会员列表</a>
				</li>
				<li>
					<a href="#">新增会员</a>
				</li>
				<li class="active">
					<a href="#">应用</a>
				</li>
				<li class="nav-header">
					分组管理
				</li>
				<li>
					<a href="#">分组列表</a>
				</li>
				<li>
					<a href="#">新增分组</a>
				</li>
				<li class="divider">
				</li>
				<li>
					<a href="#">帮助</a>
				</li>
			</ul>
		</div>
	</div>

		</div>

		<div class="pull-right col-md-10 right">
		
<form id="login_form" action="<?php echo U('User/edit', array('id'=>$user_info['id']));?>" method="post">
<fieldset>
<legend>修改密码</legend>
<div>
<label for="username">&nbsp;&nbsp;用户名:</label>
<input id="username" name="username" type="text" value="<?php echo ($user_info["username"]); ?>" required aria-required="true" autofocus>
</div>
<div>
<label for="upwd">登录密码:</label>
<input id="upwd" name="upwd" placeholder="请输入密码" type="password" required>
</div>

<input id="btn" type="submit" name="btn" value="提交">
</fieldset>
</form>

		</div>
		
	</div>
</div>



<div class="container-fluid foot">
	<div class="row">
		底部
	</div>
</div>

</body>
</html>