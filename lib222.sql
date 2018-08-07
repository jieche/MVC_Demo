-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-16 12:42:04
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lib2`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `id` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) DEFAULT NULL,
  `admin_pass` varchar(48) NOT NULL,
  `login_times` int(11) DEFAULT '0' COMMENT '登录次数',
  `last_login_time` datetime DEFAULT NULL COMMENT '最后登录时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_name` (`admin_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `admin_user`
--

INSERT INTO `admin_user` (`id`, `admin_name`, `admin_pass`, `login_times`, `last_login_time`) VALUES
(001, 'admin1', '123', 2, '2017-05-16 18:33:01'),
(002, 'a2', '123', 0, '2017-05-04 00:00:00'),
(003, 'a3', '123', 0, NULL),
(004, 'a4', '123', 0, NULL),
(005, 'a5', '123', 0, NULL),
(006, 'a6', '123', 0, NULL),
(007, 'a7', '123', 0, NULL),
(008, 'a8', '123', 0, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `TSBH` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '图书编号',
  `TSTXM` varchar(14) DEFAULT '12345678' COMMENT '图书条形码',
  `ZBT` varchar(180) NOT NULL COMMENT '正标题',
  `BLBT` varchar(180) DEFAULT '并列标题' COMMENT '并列标题',
  `FBT` varchar(180) DEFAULT '副标题' COMMENT '副标题',
  `JSGJZ` varchar(60) DEFAULT '检索关键字' COMMENT '检索关键字',
  `CBH` varchar(30) DEFAULT '出版号' COMMENT '出版号',
  `DYZZ` varchar(30) DEFAULT '第一作者' COMMENT '第一作者',
  `QTZZ` varchar(90) DEFAULT '其他作者' COMMENT '其他作者',
  `JG` decimal(10,2) DEFAULT '0.00' COMMENT '价格',
  `WXLXM` varchar(2) DEFAULT '00' COMMENT '文献类型码',
  `ZDM` varchar(1) DEFAULT '0' COMMENT '装订码',
  `FLH` varchar(20) DEFAULT '分类号' COMMENT '分类号',
  `ZGYZM` varchar(3) DEFAULT '000' COMMENT '中国语种码',
  `YZM` varchar(2) DEFAULT '00' COMMENT '语种码',
  `KB` varchar(30) DEFAULT '开本' COMMENT '开本',
  `YS` varchar(8) DEFAULT '页数' COMMENT '页数',
  `BC` varchar(30) DEFAULT '版次' COMMENT '版次',
  `FJMC` varchar(180) DEFAULT '附件名称' COMMENT '附件名称',
  `CSMC` varchar(180) DEFAULT '丛书名称' COMMENT '丛书名称',
  `CSBZ` varchar(180) DEFAULT '丛书编者' COMMENT '丛书编者',
  `CBS` varchar(180) DEFAULT '图灵出版社' COMMENT '出版社',
  `CBSJBM` varchar(1) DEFAULT '0' COMMENT '出版社级别码',
  `CBD` varchar(60) DEFAULT '出版地' COMMENT '出版地',
  `CBRQ` varchar(60) DEFAULT '1970.1' COMMENT '出版日期',
  `FXDW` varchar(60) DEFAULT '发行单位' COMMENT '发行单位',
  `TSZTM` varchar(1) DEFAULT '0' COMMENT '图书状态码',
  `BZ` text COMMENT '备注',
  PRIMARY KEY (`TSBH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `books`
--

INSERT INTO `books` (`TSBH`, `TSTXM`, `ZBT`, `BLBT`, `FBT`, `JSGJZ`, `CBH`, `DYZZ`, `QTZZ`, `JG`, `WXLXM`, `ZDM`, `FLH`, `ZGYZM`, `YZM`, `KB`, `YS`, `BC`, `FJMC`, `CSMC`, `CSBZ`, `CBS`, `CBSJBM`, `CBD`, `CBRQ`, `FXDW`, `TSZTM`, `BZ`) VALUES
(00000001, '12345678', 'C++语言的设计与演化', '并列标题', '副标题', '检索关键字', '出版号', '第一作者', '其他作者', '0.00', '00', '0', '分类号', '000', '00', '开本', '页数', '版次', '附件名称', '丛书名称', '丛书编者', '图灵出版社', '0', '出版地', '1970.1', '发行单位', '0', NULL),
(00000002, '12345678', '深度探索C++模型', '并列标题', '副标题', '检索关键字', '出版号', '第一作者', '其他作者', '0.00', '00', '0', '分类号', '000', '00', '开本', '页数', '版次', '附件名称', '丛书名称', '丛书编者', '图灵出版社', '0', '出版地', '1970.1', '发行单位', '0', NULL),
(00000003, '12345678', 'C++ 标准程序库', '并列标题', '副标题', '检索关键字', '出版号', '第一作者', '其他作者', '0.00', '00', '0', '分类号', '000', '00', '开本', '页数', '版次', '附件名称', '丛书名称', '丛书编者', '图灵出版社', '0', '出版地', '1970.1', '发行单位', '0', NULL),
(00000004, '12345678', 'STL源码剖析', '并列标题', '副标题', '检索关键字', '出版号', '第一作者', '其他作者', '0.00', '00', '0', '分类号', '000', '00', '开本', '页数', '版次', '附件名称', '丛书名称', '丛书编者', '图灵出版社', '0', '出版地', '1970.1', '发行单位', '0', NULL),
(00000005, '12345678', '泛型编程与STL', '并列标题', '副标题', '检索关键字', '出版号', '第一作者', '其他作者', '0.00', '00', '0', '分类号', '000', '00', '开本', '页数', '版次', '附件名称', '丛书名称', '丛书编者', '图灵出版社', '0', '出版地', '1970.1', '发行单位', '0', NULL),
(00000006, '12345678', '深入浅出mfc', '并列标题', '副标题', '检索关键字', '出版号', '第一作者', '其他作者', '0.00', '00', '0', '分类号', '000', '00', '开本', '页数', '版次', '附件名称', '丛书名称', '丛书编者', '图灵出版社', '0', '出版地', '1970.1', '发行单位', '0', NULL),
(00000007, '12345678', 'c++沉思录', '并列标题', '副标题', '检索关键字', '出版号', '第一作者', '其他作者', '0.00', '00', '0', '分类号', '000', '00', '开本', '页数', '版次', '附件名称', '丛书名称', '丛书编者', '图灵出版社', '0', '出版地', '1970.1', '发行单位', '0', NULL),
(00000008, '12345678', 'c++沉思录', '并列标题', '副标题', '检索关键字', '出版号', '第一作者', '其他作者', '0.00', '00', '0', '分类号', '000', '00', '开本', '页数', '版次', '附件名称', '丛书名称', '丛书编者', '图灵出版社', '0', '出版地', '1970.1', '发行单位', '0', NULL),
(00000009, '12345678', '三国演义', '并列标题', '副标题', '检索关键字', '出版号', '第一作者', '其他作者', '0.00', '00', '0', '分类号', '000', '00', '开本', '页数', '版次', '附件名称', '丛书名称', '丛书编者', '图灵出版社', '0', '出版地', '1970.1', '发行单位', '0', NULL),
(00000010, '12345678', '水浒传', '并列标题', '副标题', '检索关键字', '出版号', '第一作者', '其他作者', '0.00', '00', '0', '分类号', '000', '00', '开本', '页数', '版次', '附件名称', '丛书名称', '丛书编者', '图灵出版社', '0', '出版地', '1970.1', '发行单位', '0', NULL),
(00000011, '12345678', '红楼梦', '并列标题', '副标题', '检索关键字', '出版号', '第一作者', '其他作者', '0.00', '00', '0', '分类号', '000', '00', '开本', '页数', '版次', '附件名称', '丛书名称', '丛书编者', '图灵出版社', '0', '出版地', '1970.1', '发行单位', '0', NULL),
(00000012, '12345678', '腾讯传', '并列标题', '副标题', '检索关键字', '出版号', '第一作者', '其他作者', '0.00', '00', '0', '分类号', '000', '00', '开本', '页数', '版次', '附件名称', '丛书名称', '丛书编者', '图灵出版社', '0', '出版地', '1970.1', '发行单位', '0', NULL),
(00000013, '12345678', '妈妈别哭', '并列标题', '副标题', '检索关键字', '出版号', '第一作者', '其他作者', '0.00', '00', '0', '分类号', '000', '00', '开本', '页数', '版次', '附件名称', '丛书名称', '丛书编者', '图灵出版社', '0', '出版地', '1970.1', '发行单位', '0', NULL),
(00000014, '12345678', '人淡如菊', '并列标题', '副标题', '检索关键字', '出版号', '第一作者', '其他作者', '0.00', '00', '0', '分类号', '000', '00', '开本', '页数', '版次', '附件名称', '丛书名称', '丛书编者', '图灵出版社', '0', '出版地', '1970.1', '发行单位', '0', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `book_bm`
--

CREATE TABLE IF NOT EXISTS `book_bm` (
  `bm_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '编目id号',
  `dh_id` int(8) unsigned zerofill NOT NULL COMMENT '到货id号',
  `PJH` varchar(10) DEFAULT '排架号' COMMENT '排架号',
  `JCH` varchar(10) DEFAULT '卷次号' COMMENT '卷次号',
  `BMRQ` varchar(60) DEFAULT '1970.1.1' COMMENT '编目日期',
  `GCD` varchar(60) DEFAULT '馆藏地' COMMENT '馆藏地',
  PRIMARY KEY (`bm_id`),
  KEY `bm_dh_id` (`dh_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `book_bm`
--

INSERT INTO `book_bm` (`bm_id`, `dh_id`, `PJH`, `JCH`, `BMRQ`, `GCD`) VALUES
(00000001, 00000001, '排架号', '卷次号', '1970.1.1', '馆藏地'),
(00000002, 00000002, '排架号', '卷次号', '1970.1.1', '馆藏地'),
(00000003, 00000003, '排架号', '卷次号', '1970.1.1', '馆藏地'),
(00000004, 00000004, '排架号', '卷次号', '1970.1.1', '馆藏地'),
(00000005, 00000005, '排架号', '卷次号', '1970.1.1', '馆藏地'),
(00000006, 00000006, '排架号', '卷次号', '1970.1.1', '馆藏地'),
(00000007, 00000007, '排架号', '卷次号', '1970.1.1', '馆藏地'),
(00000008, 00000008, '排架号', '卷次号', '1970.1.1', '馆藏地');

-- --------------------------------------------------------

--
-- 表的结构 `book_dg`
--

CREATE TABLE IF NOT EXISTS `book_dg` (
  `DGH` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '订购号',
  `TSBH` int(8) unsigned zerofill NOT NULL COMMENT '预定图书编号',
  `YDJG` decimal(10,2) DEFAULT '0.00' COMMENT '预订价格',
  `YDCS` tinyint(3) unsigned DEFAULT '0' COMMENT '预订册数',
  `YDRQ` varchar(60) DEFAULT '2017.5.1' COMMENT '预订日期',
  `HDFSM` varchar(14) DEFAULT '获得方式码' COMMENT '获得方式码',
  `id` int(3) unsigned zerofill NOT NULL COMMENT '征订人职工号',
  `BZ` text COMMENT '备注',
  PRIMARY KEY (`DGH`),
  KEY `dg_id` (`id`),
  KEY `dg_TSBH` (`TSBH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `book_dg`
--

INSERT INTO `book_dg` (`DGH`, `TSBH`, `YDJG`, `YDCS`, `YDRQ`, `HDFSM`, `id`, `BZ`) VALUES
(00000001, 00000001, '0.00', 0, '2017.5.1', '获得方式码', 001, ''),
(00000002, 00000002, '0.00', 0, '2017.5.1', '获得方式码', 001, NULL),
(00000003, 00000003, '0.00', 0, '2017.5.1', '获得方式码', 001, NULL),
(00000004, 00000004, '0.00', 0, '2017.5.1', '获得方式码', 004, NULL),
(00000005, 00000005, '0.00', 0, '2017.5.1', '获得方式码', 002, NULL),
(00000006, 00000006, '0.00', 0, '2017.5.1', '获得方式码', 002, NULL),
(00000007, 00000007, '0.00', 0, '2017.5.1', '获得方式码', 002, NULL),
(00000008, 00000008, '0.00', 0, '2017.5.1', '获得方式码', 002, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `book_dh`
--

CREATE TABLE IF NOT EXISTS `book_dh` (
  `dh_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '到货id号',
  `DGH` int(8) unsigned zerofill NOT NULL COMMENT '订购号',
  `SDJG` decimal(10,2) DEFAULT '0.00' COMMENT '实到价格',
  `SDCS` tinyint(3) unsigned DEFAULT '0' COMMENT '实到册数',
  `DHRQ` varchar(60) DEFAULT '2017.5.1' COMMENT '到货日期',
  `JSRZGH` int(3) unsigned zerofill NOT NULL COMMENT '经手人职工号',
  `BZ` text COMMENT '备注',
  PRIMARY KEY (`dh_id`),
  KEY `dh_DGH` (`DGH`),
  KEY `dh_id` (`JSRZGH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `book_dh`
--

INSERT INTO `book_dh` (`dh_id`, `DGH`, `SDJG`, `SDCS`, `DHRQ`, `JSRZGH`, `BZ`) VALUES
(00000001, 00000001, '0.00', 0, '2017.5.1', 001, NULL),
(00000002, 00000002, '0.00', 0, '2017.5.1', 001, ''),
(00000003, 00000001, '0.00', 0, '2017.5.1', 001, NULL),
(00000004, 00000001, '0.00', 0, '2017.5.1', 001, NULL),
(00000005, 00000001, '0.00', 0, '2017.5.1', 001, NULL),
(00000006, 00000006, '0.00', 0, '2017.5.1', 002, NULL),
(00000007, 00000007, '0.00', 0, '2017.5.1', 002, NULL),
(00000008, 00000008, '0.00', 0, '2017.5.1', 002, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `book_js`
--

CREATE TABLE IF NOT EXISTS `book_js` (
  `js_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '减少id号',
  `dh_id` int(8) unsigned zerofill NOT NULL COMMENT '到货id号',
  `JSRQ` varchar(60) DEFAULT '2017.5.1' COMMENT '减少日期',
  `JSYY` varchar(60) DEFAULT '减少原因' COMMENT '减少原因',
  `JSJG` int(3) DEFAULT '0' COMMENT '减少结果',
  `JSRZGH` int(3) unsigned zerofill NOT NULL COMMENT '经手人职工号',
  PRIMARY KEY (`js_id`),
  KEY `js_dh_id` (`dh_id`),
  KEY `js_admin_id` (`JSRZGH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `book_js`
--

INSERT INTO `book_js` (`js_id`, `dh_id`, `JSRQ`, `JSYY`, `JSJG`, `JSRZGH`) VALUES
(00000001, 00000001, '2017.5.1', '减少原因', 0, 001),
(00000002, 00000002, '2017.5.1', '减少原因', 0, 001),
(00000003, 00000003, '2017.5.1', '减少原因', 0, 001),
(00000004, 00000002, '2017.5.1', '减少原因', 0, 001),
(00000005, 00000005, '2017.5.1', '减少原因', 0, 001),
(00000006, 00000006, '2017.5.1', '减少原因', 0, 002),
(00000007, 00000007, '2017.5.1', '减少原因', 0, 002),
(00000008, 00000008, '2017.5.1', '减少原因', 0, 001);

-- --------------------------------------------------------

--
-- 表的结构 `book_jy`
--

CREATE TABLE IF NOT EXISTS `book_jy` (
  `jy_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '借阅id号',
  `dh_id` int(8) unsigned zerofill NOT NULL COMMENT '到货id号',
  `JYRQ` char(60) DEFAULT '2017.05.01' COMMENT '借阅日期',
  `JYR_id` int(6) unsigned zerofill NOT NULL COMMENT '借阅人id',
  `GHRQ` varchar(60) DEFAULT '2017.5.1' COMMENT '归还日期',
  `BZ` text COMMENT '备注',
  PRIMARY KEY (`jy_id`),
  KEY `jy_dh_id` (`dh_id`),
  KEY `jy_user_id` (`JYR_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `book_jy`
--

INSERT INTO `book_jy` (`jy_id`, `dh_id`, `JYRQ`, `JYR_id`, `GHRQ`, `BZ`) VALUES
(00000001, 00000001, '2017.05.01', 000001, '2017.5.1', NULL),
(00000002, 00000002, '2017.05.01', 000002, '2017.5.1', NULL),
(00000003, 00000003, '2017.05.01', 000003, '2017.5.1', NULL),
(00000004, 00000004, '2017.05.01', 000004, '2017.5.1', NULL),
(00000005, 00000005, '2017.05.01', 000005, '2017.5.1', NULL),
(00000006, 00000006, '2017.05.01', 000006, '2017.5.1', NULL),
(00000007, 00000007, '2017.05.01', 000007, '2017.5.1', NULL),
(00000008, 00000008, '2017.05.01', 000008, '2017.5.1', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `periodical`
--

CREATE TABLE IF NOT EXISTS `periodical` (
  `QKBH` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '期刊编号',
  `QKTXM` varchar(14) DEFAULT '12345678' COMMENT '期刊条形码',
  `QKZWMC` varchar(180) NOT NULL COMMENT '期刊中文名称',
  `QKYWMC` varchar(180) DEFAULT '期刊英文名称' COMMENT '期刊英文名称',
  `CBH` varchar(30) DEFAULT '出版号' COMMENT '出版号',
  `BJB` varchar(30) DEFAULT '编辑部' COMMENT '编辑部',
  `ZB` varchar(90) DEFAULT '总编' COMMENT '总编',
  `DJ` decimal(10,2) DEFAULT '0.00' COMMENT '单价',
  `CKNY` varchar(20) DEFAULT '1970.1' COMMENT '创刊年月',
  `NH` varchar(20) DEFAULT '1970' COMMENT '年号',
  `JH` varchar(20) DEFAULT '卷号' COMMENT '卷号',
  `QH` varchar(3) DEFAULT '000' COMMENT '期号',
  `ZQH` varchar(20) DEFAULT '总期号' COMMENT '总期号',
  `FLH` varchar(30) DEFAULT '分类号' COMMENT '分类号',
  `ZGYZM` varchar(60) DEFAULT '中国语种码' COMMENT '中国语种码',
  `YZM` varchar(30) DEFAULT '语种码' COMMENT '语种码',
  `QKLBM` varchar(18) DEFAULT '期刊类别码' COMMENT '期刊类别码',
  `QKZTM` varchar(18) DEFAULT '期刊状态码' COMMENT '期刊状态码',
  PRIMARY KEY (`QKBH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `periodical`
--

INSERT INTO `periodical` (`QKBH`, `QKTXM`, `QKZWMC`, `QKYWMC`, `CBH`, `BJB`, `ZB`, `DJ`, `CKNY`, `NH`, `JH`, `QH`, `ZQH`, `FLH`, `ZGYZM`, `YZM`, `QKLBM`, `QKZTM`) VALUES
(00000001, '12345678', '程序员', '期刊英文名称', '出版号', '编辑部', '总编', '0.00', '1970.1', '1970', '卷号', '000', '总期号', '分类号', '中国语种码', '语种码', '期刊类别码', '期刊状态码'),
(00000002, '12345678', '剪纸', '期刊英文名称', '出版号', '编辑部', '总编', '0.00', '1970.1', '1970', '卷号', '000', '总期号', '分类号', '中国语种码', '语种码', '期刊类别码', '期刊状态码'),
(00000003, '12345678', '造诣', '期刊英文名称', '出版号', '编辑部', '总编', '0.00', '1970.1', '1970', '卷号', '000', '总期号', '分类号', '中国语种码', '语种码', '期刊类别码', '期刊状态码'),
(00000004, '12345678', '天堂', '期刊英文名称', '出版号', '编辑部', '总编', '0.00', '1970.1', '1970', '卷号', '000', '总期号', '分类号', '中国语种码', '语种码', '期刊类别码', '期刊状态码'),
(00000005, '12345678', '制药', '期刊英文名称', '出版号', '编辑部', '总编', '0.00', '1970.1', '1970', '卷号', '000', '总期号', '分类号', '中国语种码', '语种码', '期刊类别码', '期刊状态码'),
(00000006, '12345678', '古都', '期刊英文名称', '出版号', '编辑部', '总编', '0.00', '1970.1', '1970', '卷号', '000', '总期号', '分类号', '中国语种码', '语种码', '期刊类别码', '期刊状态码'),
(00000007, '12345678', '汇编', '期刊英文名称', '出版号', '编辑部', '总编', '0.00', '1970.1', '1970', '卷号', '000', '总期号', '分类号', '中国语种码', '语种码', '期刊类别码', '期刊状态码'),
(00000008, '12345678', '画好', '期刊英文名称', '出版号', '编辑部', '总编', '0.00', '1970.1', '1970', '卷号', '000', '总期号', '分类号', '中国语种码', '语种码', '期刊类别码', '期刊状态码'),
(00000009, '12345678', '天气', '期刊英文名称', '出版号', '编辑部', '总编', '0.00', '1970.1', '1970', '卷号', '000', '总期号', '分类号', '中国语种码', '语种码', '期刊类别码', '期刊状态码'),
(00000010, '12345678', '兽类', '期刊英文名称', '出版号', '编辑部', '总编', '0.00', '1970.1', '1970', '卷号', '000', '总期号', '分类号', '中国语种码', '语种码', '期刊类别码', '期刊状态码'),
(00000011, '12345678', '飞鱼', '期刊英文名称', '出版号', '编辑部', '总编', '0.00', '1970.1', '1970', '卷号', '000', '总期号', '分类号', '中国语种码', '语种码', '期刊类别码', '期刊状态码'),
(00000012, '12345678', '海豚', '期刊英文名称', '出版号', '编辑部', '总编', '0.00', '1970.1', '1970', '卷号', '000', '总期号', '分类号', '中国语种码', '语种码', '期刊类别码', '期刊状态码');

-- --------------------------------------------------------

--
-- 表的结构 `periodical_hd`
--

CREATE TABLE IF NOT EXISTS `periodical_hd` (
  `hd_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '合订id号',
  `QKDGH` int(8) unsigned zerofill NOT NULL COMMENT '期刊订购号',
  `HDQK` varchar(10) DEFAULT '1' COMMENT '合订情况1是，0否',
  `BMRQ` varchar(60) DEFAULT '1970.1.1' COMMENT '编目日期',
  `GCD` varchar(60) DEFAULT '馆藏地' COMMENT '馆藏地',
  PRIMARY KEY (`hd_id`),
  KEY `hd_QKDGH` (`QKDGH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `periodical_hd`
--

INSERT INTO `periodical_hd` (`hd_id`, `QKDGH`, `HDQK`, `BMRQ`, `GCD`) VALUES
(00000001, 00000001, '1', '1970.1.1', '馆藏地'),
(00000002, 00000002, '1', '1970.1.1', '馆藏地'),
(00000003, 00000003, '1', '1970.1.1', '馆藏地'),
(00000004, 00000004, '1', '1970.1.1', '馆藏地'),
(00000005, 00000005, '1', '1970.1.1', '馆藏地'),
(00000006, 00000006, '1', '1970.1.1', '馆藏地'),
(00000007, 00000007, '1', '1970.1.1', '馆藏地'),
(00000008, 00000008, '1', '1970.1.1', '馆藏地');

-- --------------------------------------------------------

--
-- 表的结构 `periodical_js`
--

CREATE TABLE IF NOT EXISTS `periodical_js` (
  `js_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '减少id号',
  `QKDGH` int(8) unsigned zerofill NOT NULL COMMENT '期刊订购号',
  `JSRQ` varchar(60) DEFAULT '2017.5.1' COMMENT '减少日期',
  `JSYY` varchar(60) DEFAULT '减少原因' COMMENT '减少原因',
  `JSJG` int(3) DEFAULT '0' COMMENT '减少结果',
  `JSRZGH` int(3) unsigned zerofill NOT NULL COMMENT '经手人职工号',
  PRIMARY KEY (`js_id`),
  KEY `js_QKDGH` (`QKDGH`),
  KEY `js_ad_id` (`JSRZGH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `periodical_js`
--

INSERT INTO `periodical_js` (`js_id`, `QKDGH`, `JSRQ`, `JSYY`, `JSJG`, `JSRZGH`) VALUES
(00000001, 00000001, '2017.5.1', '减少原因', 0, 001),
(00000002, 00000002, '2017.5.1', '减少原因', 0, 001),
(00000003, 00000003, '2017.5.1', '减少原因', 0, 001),
(00000004, 00000004, '2017.5.1', '减少原因', 0, 004),
(00000005, 00000005, '2017.5.1', '减少原因', 0, 005),
(00000006, 00000006, '2017.5.1', '减少原因', 0, 001),
(00000007, 00000007, '2017.5.1', '减少原因', 0, 001),
(00000008, 00000008, '2017.5.1', '减少原因', 0, 002);

-- --------------------------------------------------------

--
-- 表的结构 `periodical_jy`
--

CREATE TABLE IF NOT EXISTS `periodical_jy` (
  `jy_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '借阅id号',
  `QKDGH` int(8) unsigned zerofill NOT NULL COMMENT '期刊订购号',
  `JYRQ` varchar(60) DEFAULT '2017.5.1' COMMENT '借阅日期',
  `JYR_id` int(6) unsigned zerofill DEFAULT NULL COMMENT '借阅人id',
  `GHRQ` varchar(60) DEFAULT '2020.5.1' COMMENT '归还日期',
  `BZ` text COMMENT '备注',
  PRIMARY KEY (`jy_id`),
  KEY `jy_QKDGH` (`QKDGH`),
  KEY `jy_jyr_id` (`JYR_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `periodical_jy`
--

INSERT INTO `periodical_jy` (`jy_id`, `QKDGH`, `JYRQ`, `JYR_id`, `GHRQ`, `BZ`) VALUES
(00000001, 00000001, '2017.5.1', 000001, '2020.5.1', NULL),
(00000002, 00000002, '2017.5.1', 000001, '2020.5.1', NULL),
(00000003, 00000003, '2017.5.1', 000002, '2020.5.1', NULL),
(00000004, 00000004, '2017.5.1', 000002, '2020.5.1', NULL),
(00000005, 00000005, '2017.5.1', 000001, '2020.5.1', NULL),
(00000006, 00000006, '2017.5.1', 000001, '2020.5.1', NULL),
(00000007, 00000007, '2017.5.1', 000001, '2020.5.1', NULL),
(00000008, 00000008, '2017.5.1', 000001, '2020.5.1', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `periodical_zd`
--

CREATE TABLE IF NOT EXISTS `periodical_zd` (
  `QKDGH` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '期刊订购号',
  `QKBH` int(8) unsigned zerofill NOT NULL COMMENT '期刊编号',
  `YDJG` decimal(10,2) DEFAULT '0.00' COMMENT '预订价格',
  `YDCS` tinyint(3) unsigned DEFAULT '0' COMMENT '预订册数',
  `YDND` varchar(14) DEFAULT '2017' COMMENT '预订年度',
  `HDFSM` varchar(14) DEFAULT '获得方式码' COMMENT '获得方式码',
  `ZDRZGH` int(3) unsigned zerofill DEFAULT NULL COMMENT '征订人职工号',
  `BZ` text COMMENT '备注',
  PRIMARY KEY (`QKDGH`),
  KEY `zd_QKBH` (`QKBH`),
  KEY `zd_admin_id` (`ZDRZGH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `periodical_zd`
--

INSERT INTO `periodical_zd` (`QKDGH`, `QKBH`, `YDJG`, `YDCS`, `YDND`, `HDFSM`, `ZDRZGH`, `BZ`) VALUES
(00000001, 00000001, '0.00', 0, '2017', '获得方式码', 001, NULL),
(00000002, 00000002, '0.00', 0, '2017', '获得方式码', 001, NULL),
(00000003, 00000003, '0.00', 0, '2017', '获得方式码', 002, NULL),
(00000004, 00000004, '0.00', 0, '2017', '获得方式码', 002, NULL),
(00000005, 00000005, '0.00', 0, '2017', '获得方式码', 001, NULL),
(00000006, 00000006, '0.00', 0, '2017', '获得方式码', 002, NULL),
(00000007, 00000007, '0.00', 0, '2017', '获得方式码', 002, NULL),
(00000008, 00000008, '0.00', 0, '2017', '获得方式码', 001, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user_list`
--

CREATE TABLE IF NOT EXISTS `user_list` (
  `user_id` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `user_name` varchar(10) DEFAULT NULL,
  `user_pass` char(32) DEFAULT NULL,
  `age` tinyint(3) unsigned DEFAULT NULL,
  `edu` enum('小学','中学','大学','硕士','博士') DEFAULT NULL,
  `xingqu` set('排球','篮球','足球','中国足球','地球') DEFAULT NULL,
  `from` enum('东北','华北','西北','华东','华南','华西') DEFAULT NULL,
  `reg_time` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `user_list`
--

INSERT INTO `user_list` (`user_id`, `user_name`, `user_pass`, `age`, `edu`, `xingqu`, `from`, `reg_time`) VALUES
(000001, '小赵', '123456', 7, '大学', '足球', '西北', '2017-05-02 00:00:00'),
(000002, '小明', '123', 0, '大学', '足球', '西北', '2017-05-04 00:00:00'),
(000003, '小3', '202cb962ac59075b964b07152d234b70', 12, '中学', '排球', '东北', '2017-05-15 14:41:19'),
(000004, '小4', '202cb962ac59075b964b07152d234b70', 14, '中学', '篮球', '东北', '2017-05-15 14:41:55'),
(000005, '小5', '202cb962ac59075b964b07152d234b70', 15, '中学', '足球', '西北', '2017-05-15 14:42:10'),
(000006, '小6', '202cb962ac59075b964b07152d234b70', 16, '大学', '排球', '华北', '2017-05-15 14:42:39'),
(000007, '小7', '202cb962ac59075b964b07152d234b70', 17, '中学', '地球', '华西', '2017-05-15 14:43:13'),
(000008, '小8', '202cb962ac59075b964b07152d234b70', 18, '大学', '排球', '华东', '2017-05-15 14:43:29');

--
-- 限制导出的表
--

--
-- 限制表 `book_bm`
--
ALTER TABLE `book_bm`
  ADD CONSTRAINT `bm_dh_id` FOREIGN KEY (`dh_id`) REFERENCES `book_dh` (`dh_id`);

--
-- 限制表 `book_dg`
--
ALTER TABLE `book_dg`
  ADD CONSTRAINT `dg_id` FOREIGN KEY (`id`) REFERENCES `admin_user` (`id`),
  ADD CONSTRAINT `dg_TSBH` FOREIGN KEY (`TSBH`) REFERENCES `books` (`TSBH`);

--
-- 限制表 `book_dh`
--
ALTER TABLE `book_dh`
  ADD CONSTRAINT `dh_DGH` FOREIGN KEY (`DGH`) REFERENCES `book_dg` (`DGH`),
  ADD CONSTRAINT `dh_id` FOREIGN KEY (`JSRZGH`) REFERENCES `admin_user` (`id`);

--
-- 限制表 `book_js`
--
ALTER TABLE `book_js`
  ADD CONSTRAINT `js_admin_id` FOREIGN KEY (`JSRZGH`) REFERENCES `admin_user` (`id`),
  ADD CONSTRAINT `js_dh_id` FOREIGN KEY (`dh_id`) REFERENCES `book_dh` (`dh_id`);

--
-- 限制表 `book_jy`
--
ALTER TABLE `book_jy`
  ADD CONSTRAINT `jy_dh_id` FOREIGN KEY (`dh_id`) REFERENCES `book_dh` (`dh_id`),
  ADD CONSTRAINT `jy_user_id` FOREIGN KEY (`JYR_id`) REFERENCES `user_list` (`user_id`);

--
-- 限制表 `periodical_hd`
--
ALTER TABLE `periodical_hd`
  ADD CONSTRAINT `hd_QKDGH` FOREIGN KEY (`QKDGH`) REFERENCES `periodical_zd` (`QKDGH`);

--
-- 限制表 `periodical_js`
--
ALTER TABLE `periodical_js`
  ADD CONSTRAINT `js_ad_id` FOREIGN KEY (`JSRZGH`) REFERENCES `admin_user` (`id`),
  ADD CONSTRAINT `js_QKDGH` FOREIGN KEY (`QKDGH`) REFERENCES `periodical_zd` (`QKDGH`);

--
-- 限制表 `periodical_jy`
--
ALTER TABLE `periodical_jy`
  ADD CONSTRAINT `jy_jyr_id` FOREIGN KEY (`JYR_id`) REFERENCES `admin_user` (`id`),
  ADD CONSTRAINT `jy_QKDGH` FOREIGN KEY (`QKDGH`) REFERENCES `periodical_zd` (`QKDGH`);

--
-- 限制表 `periodical_zd`
--
ALTER TABLE `periodical_zd`
  ADD CONSTRAINT `zd_admin_id` FOREIGN KEY (`ZDRZGH`) REFERENCES `admin_user` (`id`),
  ADD CONSTRAINT `zd_QKBH` FOREIGN KEY (`QKBH`) REFERENCES `periodical` (`QKBH`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
