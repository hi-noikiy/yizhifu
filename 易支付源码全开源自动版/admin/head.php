<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?=$title?></title>
  <meta name="keywords" content="源码地带,支付接口,免签约API支付接口,自动发卡平台,自动发卡系统,自动发卡网,卡密寄售平台"/>
  <meta name="description" content="支付接口,免签约API支付接口,自动发卡平台,自动发卡系统,自动发卡网,卡密寄售平台"/>
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link href="//lib.fakajun.com/css/font-awesome.min.css" rel="stylesheet">
	<link href="//lib.fakajun.com/css/app.css" rel="stylesheet">  
  <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>  	
  <!--[if lt IE 9]>
    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://libs.useso.com/js/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">导航按钮</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">玖富圈易支付</a>
      </div><!-- /.navbar-header -->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="./"><span class="glyphicon glyphicon-home"></span> 平台首页</a>
          </li>
      <li><a href="./order.php"><span class="glyphicon glyphicon-shopping-cart"></span> 订单管理</a></li>
      <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cloud"></span> 结算管理<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="./settle.php">结算操作</a></li>
        <li><a href="./slist.php">结算记录</a><li>
            </ul>
          </li>
      <li><a href="./ulist.php"><span class="glyphicon glyphicon-user"></span> 商户管理</a></li>
          <li><a href="./login.php?logout"><span class="glyphicon glyphicon-log-out"></span> 退出登陆</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav><!-- /.navbar -->  