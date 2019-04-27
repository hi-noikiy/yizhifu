-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 08 月 01 日 04:22
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `panel_log`
--

CREATE TABLE IF NOT EXISTS `panel_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `date` datetime NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `panel_log`
--

INSERT INTO `panel_log` (`id`, `uid`, `type`, `date`, `city`, `data`) VALUES
(1, 1001, '登录用户中心', '2018-07-31 10:32:23', '', '127.0.0.1');

-- --------------------------------------------------------

--
-- 表的结构 `panel_user`
--

CREATE TABLE IF NOT EXISTS `panel_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(32) NOT NULL,
  `user` varchar(32) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `regtime` datetime DEFAULT NULL,
  `logtime` datetime DEFAULT NULL,
  `level` int(1) NOT NULL DEFAULT '1',
  `type` int(1) NOT NULL DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `pay_order`
--

CREATE TABLE IF NOT EXISTS `pay_order` (
  `trade_no` varchar(64) NOT NULL,
  `out_trade_no` varchar(64) NOT NULL,
  `notify_url` varchar(64) DEFAULT NULL,
  `return_url` varchar(64) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `buyer` varchar(30) DEFAULT NULL,
  `pid` int(11) NOT NULL,
  `addtime` datetime DEFAULT NULL,
  `endtime` datetime DEFAULT NULL,
  `name` varchar(64) NOT NULL,
  `money` varchar(32) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`trade_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `pay_settle`
--

CREATE TABLE IF NOT EXISTS `pay_settle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `account` varchar(32) NOT NULL,
  `money` decimal(10,2) NOT NULL,
  `fee` decimal(10,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `pay_user`
--

CREATE TABLE IF NOT EXISTS `pay_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `key` varchar(32) NOT NULL,
  `account` varchar(32) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `alipay_uid` varchar(32) DEFAULT NULL,
  `money` decimal(10,2) NOT NULL,
  `url` varchar(64) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `apply` int(1) NOT NULL DEFAULT '0',
  `level` int(1) NOT NULL DEFAULT '1',
  `type` int(1) NOT NULL DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1002 ;

--
-- 转存表中的数据 `pay_user`
--

INSERT INTO `pay_user` (`id`, `uid`, `key`, `account`, `username`, `alipay_uid`, `money`, `url`, `addtime`, `apply`, `level`, `type`, `active`) VALUES
(1000, NULL, 'mRXMwwN9M68Yy8VVnWV88rUp3rlL8Nzr', '8@mingmiwang.com', '小财迷', NULL, '0.00', '', '2018-07-31 10:22:13', 0, 1, 1, 1),
(1001, NULL, '2l7Aqe881h626zY71NuUu0lh6ure881h', '8@mingmiwang.com', '小财', '支付宝', '0.00', '', '2018-07-31 10:31:37', 0, 1, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
