-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 07 月 29 日 02:47
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mysql`
--

-- --------------------------------------------------------

--
-- 表的结构 `upclablist`
--

CREATE TABLE IF NOT EXISTS `upclablist` (
  `id` int(6) NOT NULL COMMENT '用户id',
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `upclablist`
--

INSERT INTO `upclablist` (`id`, `username`, `password`) VALUES
(1, '阿果', '961217'),
(0, 'guo', '9999'),
(2, 'hao', '8888');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
