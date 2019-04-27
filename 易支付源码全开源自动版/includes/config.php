<?php
/*数据库配置*/
$dbconfig=array(
	'host' => 'localhost', //数据库服务器
	'port' => 3306, //数据库端口
	'user' => 'root', //数据库用户名
	'pwd' => 'root', //数据库密码
	'dbname' => 'test' //数据库名
);

/*网站配置*/
$conf=array(
	'admin_user' => 'admin', //管理员用户名
	'admin_pwd' => 'admin', //管理员密码
	'pay_email' => 'moannuo@qq.com', //付款人email
	'pay_name' => '玖富圈', //账户名称
	'settle_money' => 500, //每天满多少元自动结算
	'settle_fee' => 0.5,  //手动结算手续费
	'money_rate' => 95, //分润比例（百分数）
	'web_name' => '玖富圈易支付', //网站名称
	'web_qq' => '583922989', //客服QQ
);
?>