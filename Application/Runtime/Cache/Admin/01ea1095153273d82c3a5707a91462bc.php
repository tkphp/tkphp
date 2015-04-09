<?php if (!defined('THINK_PATH')) exit();?>ï»¿<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ä¸Šè¿°3ä¸ªmetaæ ‡ç­¾*å¿…é¡»*æ”¾åœ¨æœ€å‰é¢ï¼Œä»»ä½•å…¶ä»–å†…å®¹éƒ½*å¿…é¡»*è·Ÿéšå…¶åï¼ -->
    <title>TKPHPç®¡ç†</title>

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
            <li><a href="#">é¢æ¿</a></li>
            <li><a href="#">è®¾ç½®</a></li>
            <li><a href="#">å¸®åŠ©</a></li>
            <li><a href="<?php echo U('Home/Index/index');?>">å‰å°é¦–é¡µ</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
			<li>
			<a href=""><?php echo ($_SESSION['username']); ?> ä½ å¥½!</a>
			</li>
			<li>
			<a href="<?php echo U('Admin/Login/logout');?>">æ³¨é”€</a>
			</li>
          </ul>
        </div>
      </div>
    </nav>

 <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">åå°ä¸»é¡µ <span class="sr-only">(current)</span></a></li>
            <li>   <a data-toggle="collapse" href="#1" aria-expanded="false" aria-controls="1">ç³»ç»Ÿç®¡ç†</a>
				   <ol class="collapse" id="1">
					<li><a href="#">ç½‘ç«™é…ç½®</a></li>
					<li><a href="#">ç³»ç»Ÿç®¡ç†å‘˜</a></li>
					<li><a href="#">é‚®ä»¶é…ç½®</a></li>
					<li><a href="#">çŸ­ä¿¡é…ç½®</a></li>
					<li><a href="#">æ”¯ä»˜ç®¡ç†</a></li>
				   </ol>
			</li>
			<li>   <a data-toggle="collapse" href="#2" aria-expanded="false" aria-controls="2">ç”¨æˆ·ç®¡ç†</a>
			   <ol class="collapse" id="2">
				<li><a href="<?php echo U('User/lists');?>">ä¼šå‘˜åˆ—è¡¨</a></li>
				<li><a href="<?php echo U('User/contact');?>">ç”¨æˆ·ç•™è¨€</a></li>
			   </ol>
			</li>
			<li>   <a data-toggle="collapse" href="#3" aria-expanded="false" aria-controls="3">å•†å“ç®¡ç†</a>
				   <ol class="collapse" id="3">
					<li><a href="<?php echo U('Goods/lists');?>">å•†å“åˆ—è¡¨</a></li>
					<li><a href="<?php echo U('Goods/add');?>">æ·»åŠ å•†å“</a></li>
					<li><a href="<?php echo U('Cat/index');?>">å•†å“åˆ†ç±»</a></li>
				   </ol>
			</li>
          </ul>
         
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
          <ul class="breadcrumb main">
           
	<li>
		<a href="<?php echo U('Admin/Index/index');?>">Ö÷Ò³</a> <span class="divider"></span>
	</li>
	<li class="active">
		ÉÌÆ·ÁĞ±í
	</li>

			</ul>


<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8">
	  <form class="form-inline">
	  <div class="form-group">
	    <select class="form-control">
		  <option>²éÕÒÈ«²¿</option>
		  <option>ÖÇÄÜÊÖ»ú</option>
		  <option>Æ½°åµçÄÔ</option>
		  <option>¸ßÇåµçÊÓ</option>
		  <option>ÈË¹¤ÖÇÄÜ</option>
		</select>
	  </div>
	  <div class="form-group">
	     <select class="form-control">
		  <option>²éÕÒÈ«²¿</option>
		  <option>ÖÇÄÜÊÖ»ú</option>
		  <option>Æ½°åµçÄÔ</option>
		  <option>¸ßÇåµçÊÓ</option>
		  <option>ÈË¹¤ÖÇÄÜ</option>
		 </select>
	  </div>
	  <button type="submit" class="btn btn-default">Ìá½»</button>
	 </form>
  </div>
  <div class="col-xs-6 col-md-4 ">
   <a href="<?php echo U('Goods/add');?>"><button class="btn  btn-large pull-right">Ìí¼ÓÉÌÆ·</button></a>
  </div>
</div>
<hr>

<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>
						<input type="checkbox">È«Ñ¡
						</th>
						<th>
							±àºÅ
						</th>
						<th>
							ÉÌÆ·Ãû³Æ
						</th>
						<th>
							»õºÅ
						</th>
						<th>
							ÊÛ¼Û
						</th>
						<th>
							ÉÏ¼Ü
						</th>
						<th>
							ÉÏ¼ÜÊ±¼ä
						</th>
						<th>
							»õ´æ
						</th>
						<th>
							²Ù×÷
						</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($goods)): foreach($goods as $key=>$good): ?><tr>
						<td>
							<input type="checkbox">
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
							<?php if($good["is_on_sale"] == 1): ?>¡Ì<?php endif; ?>
							<?php if($good["is_on_sale"] == 0): ?>X<?php endif; ?>
						</td>
						<td>
							<?php echo (date("Y-m-d",$good["add_time"])); ?>
						</td>
						<td>
							<?php echo ($good["stock_num"]); ?>
						</td>
						<td>
							 <a href="<?php echo U('Goods/edit',array('id'=>$good[id]));?>">±à¼­</a>&nbsp;&nbsp;&nbsp;&nbsp;
							 <a href="<?php echo U('Goods/delete',array('id'=>$good[id]));?>">É¾³ı</a>
						
						</td>
					</tr><?php endforeach; endif; ?>
				</tbody>
				<tfoot>
				
					<th colspan="9" ><a href="#">É¾³ı</a></th>
				</tfoot>
			</table>
			<?php echo ($page); ?>


        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/tkphp/Public/static/js/bootstrap.js"></script>
  </body>
</html>