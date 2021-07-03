-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-07-04 06:06:44
-- 服务器版本： 5.6.50-log
-- PHP 版本： 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `cf_11na_cn`
--

-- --------------------------------------------------------

--
-- 表的结构 `result`
--

CREATE TABLE `result` (
  `stuid` bigint(20) NOT NULL COMMENT '考生号/准考证号',
  `id` bigint(20) NOT NULL COMMENT '身份证号后四位',
  `name` varchar(14) NOT NULL COMMENT '姓名',
  `chinese` varchar(14) NOT NULL COMMENT '语文',
  `mathematics` varchar(14) NOT NULL COMMENT '数学',
  `english` varchar(14) NOT NULL COMMENT '英语',
  `politics` varchar(14) NOT NULL COMMENT '政治',
  `history` varchar(14) NOT NULL COMMENT '历史',
  `geography` varchar(14) NOT NULL COMMENT '地理',
  `physics` varchar(14) NOT NULL COMMENT '物理',
  `chemistry` varchar(14) NOT NULL COMMENT '化学',
  `biology` varchar(14) NOT NULL COMMENT '生物'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `result`
--

INSERT INTO `result` (`stuid`, `id`, `name`, `chinese`, `mathematics`, `english`, `politics`, `history`, `geography`, `physics`, `chemistry`, `biology`) VALUES
(202101, 2333, '小明', '100', '100', '100', '100', '100', '100', '100', '100', '100'),
(202102, 2333, '小红', '100', '100', '0', '0', '100', '100', '0', '0', '0');

--
-- 转储表的索引
--

--
-- 表的索引 `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`stuid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
