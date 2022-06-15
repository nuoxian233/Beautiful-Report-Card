-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2022-06-15 20:31:17
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
  `number` bigint(20) NOT NULL COMMENT '考生号',
  `id` bigint(20) NOT NULL COMMENT '身份证号后六位',
  `name` varchar(14) NOT NULL COMMENT '姓名',
  `remarks` text NOT NULL COMMENT '老师批语或备注',
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

INSERT INTO `result` (`number`, `id`, `name`, `remarks`, `custom_text1`, `custom_text2`, `custom_text3`, `custom_text4`, `custom_text5`, `custom_text6`, `custom_text7`, `custom_text8`, `custom_text9`) VALUES
(202101, 233333, '小明', '你有很多优点，不必在意其他，做好自己，保持谦虚的做人风格', '100', '100', '100', '100', '100', '100', '100', '100', '100'),
(202102, 233333, '小红', '在生活中得到经验，会对你有很大的帮助', '100', '100', '0', '0', '100', '100', '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`number`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
