-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2022-02-04 13:01:15
-- 服务器版本： 5.6.50-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cf`
--

-- --------------------------------------------------------

--
-- 表的结构 `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `stuid` bigint(20) NOT NULL COMMENT '考生号/准考证号',
  `id` bigint(20) NOT NULL COMMENT '身份证号后四位',
  `name` varchar(14) NOT NULL COMMENT '姓名',
  `custom_text1` varchar(14) NOT NULL COMMENT '对应配置文件custom_text3',
  `custom_text2` varchar(14) NOT NULL COMMENT '对应配置文件custom_text4',
  `custom_text3` varchar(14) NOT NULL COMMENT '对应配置文件custom_text5',
  `custom_text4` varchar(14) NOT NULL COMMENT '对应配置文件custom_text6',
  `custom_text5` varchar(14) NOT NULL COMMENT '对应配置文件custom_text7',
  `custom_text6` varchar(14) NOT NULL COMMENT '对应配置文件custom_text8',
  `custom_text7` varchar(14) NOT NULL COMMENT '对应配置文件custom_text9',
  `custom_text8` varchar(14) NOT NULL COMMENT '对应配置custom_text10',
  `custom_text9` varchar(14) NOT NULL COMMENT '对应配置文件custom_text11'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `result`
--

INSERT INTO `result` (`stuid`, `id`, `name`, `custom_text1`, `custom_text2`, `custom_text3`, `custom_text4`, `custom_text5`, `custom_text6`, `custom_text7`, `custom_text8`, `custom_text9`) VALUES
(202101, 2333, '小明', '100', '100', '100', '100', '100', '100', '100', '100', '100'),
(202102, 2333, '小红', '100', '100', '0', '0', '100', '100', '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`stuid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
