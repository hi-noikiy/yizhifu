<?php
include("../includes/common.php");
$title='玖富圈易支付管理后台';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>

<?php
$count1=$DB->query("SELECT * from pay_order")->rowCount();
$count2=$DB->query("SELECT * from pay_user")->rowCount();
$count3=file_get_contents(SYSTEM_ROOT.'all.txt');
$count4=file_get_contents(SYSTEM_ROOT.'settle.txt');
$mysqlversion=$DB->query("select VERSION()")->fetch();
?>	
	<div class="container" style="padding-top:70px;">	
	  <div class="alert alert-success">
	    <strong>亲爱的源码地带商户!</strong> 总计余额以及结算余额（每小时更新一次）<span class="label label-default"><?=$date?></span>
	  		</div>	
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="panel">
                            <div class="panel-body brand-danger" style="background:#F05033;">
                                <div class="text-center">
                                    <span class="img-circle"><i class="fa fa-briefcase fa-3x"></i></span>
                                </div>
                            </div>
                            <div class="panel-body"><h4 class="pull-left">订单总数</h4>
                                <h4 class="pull-right text-3"><?php echo $count1?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="panel">
                            <div class="panel-body brand-primary" style="background:#3498DB;">
                                <div class="text-center">
                                    <span class="img-circle"><i class="fa fa-rmb fa-3x"></i></span>
                                </div>
                            </div>
                            <div class="panel-body"><h4 class="pull-left">商户数量</h4>
                                <h4 class="pull-right text-2"><?php echo $count2?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="panel">
                            <div class="panel-body brand-info" style="background:#8E44AD;">
                                <div class="text-center">
                                    <span class="img-circle"><i class="fa fa-bar-chart fa-3x"></i></span>
                                </div>
                            </div>
                            <div class="panel-body"><h4 class="pull-left">总计余额</h4>
                                <h4 class="pull-right text-3"><?php echo $count3?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="panel">
                            <div class="panel-body brand-info" style="background:#1FA67A;">
                                <div class="text-center">
                                    <span class="img-circle"><i class="fa fa-diamond fa-3x"></i></span>
                                </div>
                            </div>
                            <div class="panel-body"><h4 class="pull-left">结算余额</h4>
                                <h4 class="pull-right text-5"><?php echo $count4?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">服务器信息</h3>
	</div>
	<ul class="list-group">
		<li class="list-group-item">
			<b>PHP 版本：</b><?php echo phpversion() ?>
			<?php if(ini_get('safe_mode')) { echo '线程安全'; } else { echo '非线程安全'; } ?>
		</li>
		<li class="list-group-item">
			<b>MySQL 版本：</b><?php echo $mysqlversion[0] ?>
		</li>
		<li class="list-group-item">
			<b>服务器软件：</b><?php echo $_SERVER['SERVER_SOFTWARE'] ?>
		</li>
		
		<li class="list-group-item">
			<b>程序最大运行时间：</b><?php echo ini_get('max_execution_time') ?>s
		</li>
		<li class="list-group-item">
			<b>POST许可：</b><?php echo ini_get('post_max_size'); ?>
		</li>
		<li class="list-group-item">
			<b>文件上传许可：</b><?php echo ini_get('upload_max_filesize'); ?>
		</li>
	</ul>
</div>
    </div>
  </div>