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
	    <link rel="stylesheet" type="text/css" href="/tkphp/Public/static/jquery.js />
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
ol li{
	border-bottom:1px solid #ccc;
}
ol li a{
	line-height:40px;
	padding-right:40px;
	display:block;
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
            <li class="dropdown">
				 <a class="dropdown-toggle" href="#" data-toggle="dropdown">系统管理<strong class="caret"></strong></a>
				 <ul class="dropdown-menu">
					<li><a href="#">网站配置</a></li>
					<li><a href="#">系统管理员</a></li>
					<li><a href="#">邮件配置</a></li>
					<li><a href="#">短信配置</a></li>
					<li><a href="#">支付管理</a></li>
				</ul>
			</li>
			 <li class="dropdown">
				 <a class="dropdown-toggle" href="#" data-toggle="dropdown">用户管理<strong class="caret"></strong></a>
				 <ul class="dropdown-menu">
					<li><a href="<?php echo U('User/lists');?>">会员列表</a></li>
					<li><a href="<?php echo U('User/contact');?>">用户留言</a></li>
				</ul>
			</li>
			 <li class="dropdown">
				 <a class="dropdown-toggle" href="#" data-toggle="dropdown">商品管理<strong class="caret"></strong></a>
				 <ul class="dropdown-menu">
					<li><a href="<?php echo U('Goods/lists');?>">商品列表</a></li>
					<li><a href="<?php echo U('Goods/add');?>">添加商品</a></li>
					<li><a href="<?php echo U('Cat/index');?>">商品分类</a></li>
				</ul>
			</li>
            
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
            <li>   <a  class="menu">系统管理</a>
				   <ol>
					<li><a href="#">网站配置</a></li>
					<li><a href="#">系统管理员</a></li>
					<li><a href="#">邮件配置</a></li>
					<li><a href="#">短信配置</a></li>
					<li><a href="#">支付管理</a></li>
				   </ol>
			</li>
		 	<li>   <a class="menu">用户管理</a>
			   <ol>
				<li><a href="<?php echo U('User/lists');?>">会员列表</a></li>
				<li><a href="<?php echo U('User/contact');?>">用户留言</a></li>
			   </ol>
			</li>
			<li>   <a class="menu">商品管理</a>
				   <ol>
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
		商品列表
	</li>

			</ul>


<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8">
	  <form action="<?php echo U('Goods/lists');?>" post="get" class="form-inline">
	  <div class="form-group">
	    <!-- <select class="form-control">
		  <option>查找全部</option>
		  <option>智能手机</option>
		  <option>平板电脑</option>
		  <option>高清电视</option>
		  <option>人工智能</option>
		</select> -->
		<?php echo ($cats); ?>
	  </div>
	  <div class="form-group">
	     <select name="is_on_sale" class="form-control">
		  <option value="1">上架</option>
		  <option value="0">下架</option>
		 </select>
	  </div>
	  <!-- <div class="form-group">
	  	<input type="text" class="form-control" name="keyword" >
	  </div> -->
	  <button type="submit" class="btn btn-default">提交</button>
	 </form>
  </div>
  <div class="col-xs-6 col-md-4 ">
   <a href="<?php echo U('Goods/add');?>"><button class="btn  btn-large pull-right">添加商品</button></a>
  </div>
</div>
<hr>

<table class="table table-bordered table-hover">
<form action="<?php echo U('Goods/delete');?>" method="post"  onsubmit="return confirm('你确定要删除这些商品吗？')">
				<thead>
					<tr>
						<th>
						<input type="checkbox" name="chk_all" id="chk_all" />全选
						</th>
						<th>
							编号
						</th>
						<th>
							商品名称
						</th>
						<th>
							货号
						</th>
						<th>
							售价
						</th>
						<th>
							上架
						</th>
						<th>
							上架时间
						</th>
						<th>
							货存
						</th>
						<th>
							操作
						</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($goods)): foreach($goods as $key=>$good): ?><tr>
						<td>
							<input type="checkbox" name="id" id="<?php echo ($good["id"]); ?>" value="<?php echo ($good["id"]); ?>" >
						</td>
						<td>
							<?php echo ($good["id"]); ?>
						</td>
						<td>
							<?php echo ($good["pro_name"]); ?>
						</td>
						<td>
							<?php echo ($good["pro_sn"]); ?>
						</td>
						<td>
							<?php echo ($good["market_price"]); ?>
						</td>
						<td>
							<?php if($good["is_on_sale"] == 1): ?>√<?php endif; ?>
							<?php if($good["is_on_sale"] == 0): ?>X<?php endif; ?>
						</td>
						<td>
							<?php echo (date("Y-m-d",$good["add_time"])); ?>
						</td>
						<td>
							<?php echo ($good["stock_num"]); ?>
						</td>
						<td>
							 <a href="<?php echo U('Goods/edit',array('id'=>$good[id]));?>">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;
							 <a onclick="return confirm('你确定要删除商品<?php echo ($good["pro_name"]); ?>吗?')" href="<?php echo U('Goods/delete',array('id'=>$good[id]));?>">删除</a>
						
						</td>
					</tr><?php endforeach; endif; ?>
				</tbody>
				<tfoot>
				
					<th colspan="9" ><input type="submit" name="del" value="删除"></th>
				</tfoot>
</form>
			</table>
			<?php echo ($page); ?>
<script>
$("#chk_all").click(function(){
    $("input[name='id']").attr("checked",$(this).attr("checked"));
});
</script>

        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/tkphp/Public/static/js/bootstrap.js"></script>
	

<script type="text/javascript">
$(function(){
	$("ol").hide();
	$(".menu").click(function(){
		$(".menu").css({"background-color":"#ddd"})
		$(this).css({"background-color": "#eee"});
		$(this).parent().find('ol').removeClass("menu_chioce");
		$(".menu_chioce").slideUp(); 
		$(this).parent().find('ol').slideToggle();
		$(this).parent().find('ol').addClass("menu_chioce");
	});
})
</script>


  </body>
</html>