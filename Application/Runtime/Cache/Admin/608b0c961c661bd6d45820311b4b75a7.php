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
					商品管理
				</li>
				<li class="active">
					<a href="#">商品列表</a>
				</li>
				<li>
					<a href="<?php echo U('Goods/add');?>">新增商品</a>
				</li>
				<li>
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
		
<form  action="<?php echo U('Goods/edit',array('id'=>$good[id]));?>" method="post">
<fieldset>
<legend>编辑商品</legend>
<div>
<label for="title">&nbsp;&nbsp;商品名称:</label>
<input id="title" name="title" type="text" value="<?php echo ($good["title"]); ?>" >
</div>
<div>
<label for="price">&nbsp;&nbsp;商品价格:</label>
<input id="price" name="price" type="text" value="<?php echo ($good["price"]); ?>">
</div>
<div>
<label for="creat_time">&nbsp;&nbsp;创建时间:</label>
<input id="create_time" name="create_time" type="text" value="<?php echo (date("Y-m-d",$good["create_time"])); ?>">
</div>
<div>
<label for="update_time">&nbsp;&nbsp;更新时间:</label>
<input id="update_time" name="update_time" type="text" value="<?php echo (date("Y-m-d",$good["update_time"])); ?>" >
</div>
<div>
<label for="status">&nbsp;&nbsp;商品状态:</label>
<input id="status" name="status" type="text" value="<?php echo ($good["status"]); ?>" >
</div>

<input id="btn" type="submit" name="btn" value="保存">
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