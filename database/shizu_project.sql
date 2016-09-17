-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-09-17 14:04:18
-- 服务器版本： 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shizu_project`
--

-- --------------------------------------------------------

--
-- 表的结构 `sz_privilege`
--

CREATE TABLE `sz_privilege` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL COMMENT '权限节点名称',
  `class_method` varchar(200) NOT NULL COMMENT '节点路径',
  `status` int(4) NOT NULL COMMENT '状态',
  `level` int(8) NOT NULL COMMENT '层级',
  `id_user` int(10) NOT NULL COMMENT '权限节点添加者',
  `add_time` int(10) NOT NULL COMMENT '权限节点添加时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='权限节点表';

-- --------------------------------------------------------

--
-- 表的结构 `sz_role`
--

CREATE TABLE `sz_role` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(4) NOT NULL,
  `add_time` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='角色表';

-- --------------------------------------------------------

--
-- 表的结构 `sz_role_privilege`
--

CREATE TABLE `sz_role_privilege` (
  `id_role` int(10) NOT NULL,
  `id_privilege` int(10) NOT NULL,
  `role_privilege_unique` varchar(20) NOT NULL COMMENT '权限角色hash，防止重复',
  `add_user` int(10) NOT NULL,
  `add_time` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='角色权限对应关系表';

-- --------------------------------------------------------

--
-- 表的结构 `sz_user`
--

CREATE TABLE `sz_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cn_name` varchar(200) NOT NULL,
  `halt` int(5) NOT NULL,
  `birth` datetime DEFAULT NULL,
  `last_login_time` int(10) NOT NULL COMMENT '最后登录时间',
  `add_time` int(10) NOT NULL COMMENT '添加时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户表';

--
-- 转存表中的数据 `sz_user`
--

INSERT INTO `sz_user` (`id`, `username`, `password`, `email`, `cn_name`, `halt`, `birth`, `last_login_time`, `add_time`) VALUES
(1, 'taozi32@yeah.net', '$2y$05$1P1Oal36u9Ujk1hwk5hFv.jhz3GAyBbjPDPP7ZaV9pFiI5OoIMidC', 'taozi32@yeah.net', '姜瑞桃', 1, '2016-09-22 00:00:00', 1474077664, 1474077664),
(2, 'jiang', '$2y$05$1P1Oal36u9Ujk1hwk5hFv.jhz3GAyBbjPDPP7ZaV9pFiI5OoIMidC', 'taozi32@yeah.net', '小帐号', 2, '2016-09-22 00:00:00', 1474077664, 1474077664);

-- --------------------------------------------------------

--
-- 表的结构 `sz_user_role`
--

CREATE TABLE `sz_user_role` (
  `id_user` int(10) NOT NULL,
  `id_role` int(10) NOT NULL,
  `user_role_hash` varchar(20) NOT NULL COMMENT '用户角色hash，用于防止数据重复',
  `add_user` int(10) NOT NULL,
  `add_time` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户角色关系对应表';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sz_privilege`
--
ALTER TABLE `sz_privilege`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sz_role`
--
ALTER TABLE `sz_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sz_role_privilege`
--
ALTER TABLE `sz_role_privilege`
  ADD UNIQUE KEY `role_pri_hash` (`role_privilege_unique`(10));

--
-- Indexes for table `sz_user`
--
ALTER TABLE `sz_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sz_user_role`
--
ALTER TABLE `sz_user_role`
  ADD UNIQUE KEY `user_role_hash` (`user_role_hash`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `sz_privilege`
--
ALTER TABLE `sz_privilege`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `sz_role`
--
ALTER TABLE `sz_role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `sz_user`
--
ALTER TABLE `sz_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
