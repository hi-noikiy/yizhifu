<?php
/* *
 * 配置文件
 */

//↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
//商户ID
$fakajun_config['partner']		= '201807242333064280';

//商户KEY
$fakajun_config['key']			= '5244db9562bcb766960fe0c2c77e90f86b4ab3cb';


//↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑

//签名方式 不需修改
$fakajun_config['sign_type']    = strtoupper('MD5');

//字符编码格式 目前支持 gbk 或 utf-8
$fakajun_config['input_charset']= strtolower('utf-8');

//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
$fakajun_config['transport']    = 'http';
?>