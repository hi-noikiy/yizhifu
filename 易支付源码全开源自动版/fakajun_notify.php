<?php
/**
 * 玖富圈API支付接口和云端发卡
 * www.fakajun.com
 * 异步通知文件
 */
require_once("./includes/common.php");
require_once("./includes/fakajun/fakajun.config.php");
require_once("./includes/fakajun/lib/fakajun_submit.php");
$sign = Fakajun::sign($_POST, $fakajun_config['key']);
if ($sign == $_POST['sign']) {
	if ($app_id == $_POST['app_id']) {
		$out_trade_no = $_POST['out_trade_no'];
		$trade_no = $_POST['trade_no'];
		$trade_status = $_POST['trade_status'];
		$srow = $DB->query("SELECT * FROM pay_order WHERE trade_no='{$out_trade_no}' limit 1")->fetch();
		if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
			$DB->query("update `pay_order` set `status` ='1',`endtime` ='$date',`buyer` ='$buyer_email' where `trade_no`='$out_trade_no'");
			$addmoney=round($srow['money']*$conf['money_rate']/100,2);
			$DB->query("update pay_user set money=money+{$addmoney} where id='{$srow['pid']}'");
			$url=creat_callback($srow);
			curl_get($url['notify']);
			proxy_get($url['notify']);
		}
		echo 'success';
	}
}