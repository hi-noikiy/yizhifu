<?php
include("../includes/common.php");
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
$title='修改资料';
include './head.php';
?>
<?php

if(isset($_GET['act']) && $_GET['act']=='set'){
	$account=daddslashes(strip_tags($_POST['account']));
	$username=daddslashes(strip_tags($_POST['username']));
	if($account==NULL || $username==NULL){
		exit("<script language='javascript'>alert('保存错误,请确保每项都不为空!');history.go(-1);</script>");
	} elseif($userrow['type']!=2 && !empty($userrow['account']) && !empty($userrow['username']) && strlen($userrow['username'])>3 && $userrow['account']!=$account && (strpos($userrow['account'],'@') || strlen($userrow['account'])==11)){
		$msg='为保障您的资金安全，暂不支持直接修改结算账号信息，如需修改请联系QQ'.$conf['web_qq'];
	}else {
		$sqs=$DB->exec("update `pay_user` set `account` ='{$account}',`username` ='{$username}' where `id`='$pid'");
		exit("<script language='javascript'>alert('保存成功！');history.go(-1);</script>");
	}	
}


?>
 <div id="content" class="app-content" role="main">
    <div class="app-content-body ">

<div class="bg-light lter b-b wrapper-md hidden-print">
  <h1 class="m-n font-thin h3">修改资料</h1>
</div>
<div class="wrapper-md control">
<?php if(isset($msg)){?>
<div class="alert alert-info">
	<?php echo $msg?>
</div>
<?php }?>
	<div class="panel panel-default">
		<div class="panel-heading font-bold">
			基本资料
		</div>
		<div class="panel-body">
			<form class="form-horizontal devform" action="./userinfo.php?act=set" method="post">
				<h4>商户信息查看：</h4>
				<div class="form-group">
					<label class="col-sm-2 control-label">商户ID</label>
					<div class="col-sm-9">
						<input class="form-control" type="text" value="<?php echo $pid?>" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">商户密钥</label>
					<div class="col-sm-9">
						<input class="form-control" type="text" value="<?php echo $userrow['key']?>" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">商户余额</label>
					<div class="col-sm-9">
						<input class="form-control" type="text" value="￥<?php echo $userrow['money']?>" disabled>
					</div>
				</div>
				<div class="line line-dashed b-b line-lg pull-in"></div>
				<h4>收款账号设置：</h4>
				<div class="form-group">
					<label class="col-sm-2 control-label">支付宝/QQ钱包账号</label>
					<div class="col-sm-9">
						<input class="form-control" type="text" name="account" value="<?php echo $userrow['account']?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">支付宝/QQ钱包姓名</label>
					<div class="col-sm-9">
						<input class="form-control" type="text" name="username" value="<?php echo $userrow['username']?>">
					</div>
				</div>
				<div class="form-group">
				  <div class="col-sm-offset-2 col-sm-4"><input type="submit" name="submit" value="确定修改" class="btn btn-primary form-control"/><br/>
				 </div>
				<div class="line line-dashed b-b line-lg pull-in"></div>
				<div class="form-group">
					<label class="col-sm-2"></label>
					<div class="col-sm-6">
					<h4><span class="glyphicon glyphicon-info-sign"></span>注意事项</h4>
						1.支付宝/QQ钱包账户和支付宝/QQ钱包真实姓名请仔细核对，一旦错误将无法结算到账！（QQ姓名填写QQ昵称）<br/>2.每笔交易会有<?php echo (100-$conf['money_rate'])?>%的手续费，即用户支付100元，实际到账<?php echo $conf['money_rate']?>元。<br/>3.结算是通过支付宝进行结算，每天满<?php echo $conf['settle_money']?>元第二天自动结算<br/>4.如有问题请联系客服QQ<?php echo $conf['web_qq']?>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
    </div>
  </div>

<?php include 'foot.php';?>