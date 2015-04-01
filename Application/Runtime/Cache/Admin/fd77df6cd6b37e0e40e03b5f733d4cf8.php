<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

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
            <li><a href="#">文件</a></li>
            <li><a href="#">帮助</a></li>
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
            <li class="active"><a href="<?php echo ('Index/index');?>">后台主页 <span class="sr-only">(current)</span></a></li>
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
				<li><a href="#">会员列表</a></li>
			   </ol>
			</li>
			<li>   <a data-toggle="collapse" href="#3" aria-expanded="false" aria-controls="3">商品管理</a>
				   <ol class="collapse" id="3">
					<li><a href="<?php echo U('Goods/lists');?>">商品列表</a></li>
					<li><a href="<?php echo U('Goods/add');?>">添加商品</a></li>
					<li><a href="<?php echo U('Goods/cat');?>">商品分类</a></li>
				   </ol>
			</li>
          </ul>
         
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
          <ul class="breadcrumb main">
          
	<li>
		<a href="#">主页</a> <span class="divider"></span>
	</li>
	<li class="active">
		商品分类
	</li>

			</ul>


<div class="pama">
			<h2>分类列表</h2>

			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>
							编号
						</th>
						<th>
							分类名称
						</th>
						<th>
							排序
						</th>
						<th>
							属性
						</th>
						<th>
							操作
						</th>
					</tr>
				</thead>
				<tbody>
				<?php if(is_array($cats)): foreach($cats as $key=>$cat): ?><tr>
						<td>
							<?php echo ($cat["id"]); ?>
						</td>
						<td>
							<?php echo ($cat["cat_name"]); ?>
						</td>
						<td>
							<?php echo ($cat["sort"]); ?>
						</td>
						<td>
							<?php if($cat['is_show'] == 1): ?>可见<?php endif; ?>
                            <?php if($cat['is_show'] == 0): ?>不可见<?php endif; ?>
						</td>
						<td>
						暂时没有
						</td>
					</tr><?php endforeach; endif; ?>           
				</tbody>
			</table>
</div>

        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/tkphp/Public/static/js/bootstrap.js"></script>
  </body>
</html>