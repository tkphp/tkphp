<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>TKPHP管理</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/tkphp/Public/static/css/bootstrap.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
	/*
 * Base structure
 */

/* Move down content because we have a fixed navbar that is 50px tall */
body {
  padding-top: 50px;
}


/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

/*
 * Top navigation
 * Hide default border to remove 1px line.
 */
.navbar-fixed-top {
  border: 0;
}

/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 30px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #428bca;
}


/*
 * Main content
 */

.main {
  margin-left:-15px;
  margin-right:-15px;
  padding-bottom:12px;
}
/* @media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
} */
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}
	
</style>
  </head>


 <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TKPHP</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">面板</a></li>
            <li><a href="#">设置</a></li>
            <li><a href="#">帮助</a></li>
            <li><a href="<?php echo U('Home/Index/index');?>">前台首页</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
			<li>
			<a href=""><?php echo ($_SESSION['username']); ?> 你好!</a>
			</li>
			<li>
			<a href="<?php echo U('Admin/Login/logout');?>">注销</a>
			</li>
          </ul>
        </div>
      </div>
    </nav>

 <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">后台主页 <span class="sr-only">(current)</span></a></li>
            <li>   <a data-toggle="collapse" href="#1" aria-expanded="false" aria-controls="1">系统管理</a>
				   <ol class="collapse" id="1">
					<li><a href="#">网站配置</a></li>
					<li><a href="#">系统管理员</a></li>
					<li><a href="#">邮件配置</a></li>
					<li><a href="#">短信配置</a></li>
					<li><a href="#">支付管理</a></li>
				   </ol>
			</li>
			<li>   <a data-toggle="collapse" href="#2" aria-expanded="false" aria-controls="2">用户管理</a>
			   <ol class="collapse" id="2">
				<li><a href="<?php echo U('User/lists');?>">会员列表</a></li>
				<li><a href="<?php echo U('User/contact');?>">用户留言</a></li>
			   </ol>
			</li>
			<li>   <a data-toggle="collapse" href="#3" aria-expanded="false" aria-controls="3">商品管理</a>
				   <ol class="collapse" id="3">
					<li><a href="<?php echo U('Goods/lists');?>">商品列表</a></li>
					<li><a href="<?php echo U('Goods/add');?>">添加商品</a></li>
					<li><a href="<?php echo U('Cat/index');?>">商品分类</a></li>
				   </ol>
			</li>
          </ul>
         
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
          <ul class="breadcrumb main">
           
	<li>
		<a href="<?php echo U('Admin/Index/index');?>">主页</a> <span class="divider"></span>
	</li>
	<li class="active">
		添加商品
	</li>

			</ul>


  <h3 class="sub-header"><a href="<?php echo U('Goods/lists');?>">商品列表</a></h3>
  <form class="form-horizontal" action="<?php echo U('Goods/doAdd');?>" enctype="multipart/form-data" method="post">
  <div class="form-group">
    <label for="pro_name" class="col-sm-3 control-label">产品名称:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="pro_name" name="pro_name" placeholder="产品名称">
    </div>		
  </div>
   <div class="form-group">
      <label for="cat_id" class="col-sm-3 control-label">产品类别:</label>
      <div class="col-sm-5">
          <select name="cat_id" id="cat_id" class="form-control">
              <?php if(is_array($cats)): foreach($cats as $key=>$cats): ?><option value="<?php echo ($cats["id"]); ?>"><?php echo ($cats["cat_name"]); ?></option><?php endforeach; endif; ?>
          </select>
      </div>
  </div>
  <div class="form-group">
      <label for="pro_sn" class="col-sm-3 control-label">产品货号:</label>
      <div class="col-sm-5">
          <input type="text" id="pro_sn" name="pro_sn" class="form-control" placeholder="产品货号">
      </div>
  </div>
  <div class="form-group">
      <label for="pro_subname" class="col-sm-3 control-label">产品副标题:</label>
      <div class="col-sm-5">
          <input type="text" class="form-control" id="pro_subname" name="pro_subname" placeholder="产品副标题">
          <span class="help-block">显示的部分描述信息</span> 
      </div>
  </div>
  <div class="form-group">
      <label for="market_price" class="col-sm-3 control-label">市场售价:</label>
      <div class="col-sm-5">
          <input type="text" id="market_price" name="market_price" class="form-control" placeholder="0.00">
      </div>
  </div>
  <div class="form-group">
      <label for="promote_price" class="col-sm-3 control-label">本店价格:</label>
      <div class="col-sm-5">
          <input type="text" id="promote_price" name="promote_price" class="form-control" placeholder="0.00">
      </div>
  </div>
  <div class="form-group">
      <label for="stock_num" class="col-sm-3 control-label">库存数量:</label>
      <div class="col-sm-5">
          <input type="text" id="stock_num" name="stock_num" class="form-control" placeholder="库存数">
      </div>
  </div>
  <div class="form-group">
      <label for="keywords" class="col-sm-3 control-label">关键字:</label>
      <div class="col-sm-5">
          <input type="text" id="keywords" name="keywords" class="form-control"  placeholder="关键字">
      </div>
  </div>
   <div class="form-group">
       <label for="description" class="col-sm-3 control-label">描述:</label>
       <div class="col-sm-5">
           <textarea id="description" name="description" class="form-control" placeholder="产品相关描述"></textarea>
       </div>
   </div>
   <div class="form-group">
       <label for="photo" class="col-sm-3 control-label">上传缩略图:</label>
       <div class="col-sm-5">
           <input id="photo" type="file"  name="photo" />
       </div>
   </div>
   <div class="form-group">
       <label  class="col-sm-3 control-label">属性:</label>
       <div class="col-sm-5">
           <label><input type="checkbox" value="1" name="is_new" /> 新品</label>
           <label><input type="checkbox" value="1" name="is_promote" /> 促销</label>
           <label><input type="checkbox" value="1" name="is_on_sale" /> 下架</label>
       </div>
   </div>

  
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-5">
      <input type="submit" value="保存" class="btn btn-default">
    </div>
  </div>
</form>


        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/tkphp/Public/static/js/bootstrap.js"></script>
  </body>
</html>