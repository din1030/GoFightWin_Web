-- phpMyAdmin SQL Dump
-- version 4.0.10.15
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 建立日期: 2016 年 05 月 08 日 14:40
-- 伺服器版本: 5.5.46
-- PHP 版本: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `gofightwin`
--
CREATE DATABASE IF NOT EXISTS `gofightwin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gofightwin`;

-- --------------------------------------------------------

--
-- 資料表結構 `blood_pressure`
--

CREATE TABLE IF NOT EXISTS `blood_pressure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `systolic` int(11) NOT NULL,
  `diastolic` int(11) NOT NULL,
  `heartbeat` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `blood_pressure`
--

INSERT INTO `blood_pressure` (`id`, `systolic`, `diastolic`, `heartbeat`, `date`, `time`) VALUES
(1, 142, 84, 87, '2016-05-01', '17:50:00');

-- --------------------------------------------------------

--
-- 資料表結構 `defecation`
--

CREATE TABLE IF NOT EXISTS `defecation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 資料表的匯出資料 `defecation`
--

INSERT INTO `defecation` (`id`, `date`, `time`) VALUES
(1, '2016-04-03', '01:00:00'),
(2, '2016-04-03', '12:10:00');

-- --------------------------------------------------------

--
-- 資料表結構 `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=364 ;

--
-- 資料表的匯出資料 `food`
--

INSERT INTO `food` (`id`, `food`, `quantity`, `date`, `time`) VALUES
(1, '小白菜', '一小碗', '2016-03-31', '12:30:00'),
(2, '豬血糕、地瓜葉、嘴邊肉、麵線', '各幾口', '2016-03-31', '18:30:00'),
(3, '蘿蔔糕', '一大片', '2016-04-01', '13:15:00'),
(4, '菠菜玉米烏龍麵', '一碗', '2016-04-01', '12:30:00'),
(5, '蘿蔔糕', '四小塊', '2016-04-01', '06:00:00'),
(6, '豆皮壽司', '兩個', '2016-04-01', '08:00:00'),
(7, '豆漿', '半杯', '2016-04-01', '06:30:00'),
(8, '牛排', '3小片', '2016-04-01', '17:35:00'),
(9, '蔬菜肉片湯', '一小碗', '2016-04-01', '21:35:00'),
(10, '蔬菜肉片湯', '一小碗', '2016-04-01', '19:30:00'),
(11, '水梨', '半碗', '2016-04-01', '22:00:00'),
(12, '綠豆湯', '2/3碗', '2016-04-01', '22:45:00'),
(13, '蕃茄起司肉片三明治', '半片', '2016-04-02', '10:00:00'),
(14, '糙米茶', '一杯', '2016-04-02', '11:30:00'),
(15, '稀飯配滷肉', '一碗', '2016-04-02', '06:30:00'),
(16, '白飯', '半碗', '2016-04-02', '12:00:00'),
(17, '滷肉、菠菜、肉絲炒香菇', '幾口', '2016-04-02', '00:00:00'),
(18, '迷你蕉', '一支', '2016-04-02', '13:30:00'),
(19, '蜆精半斤', '3/4碗', '2016-04-02', '14:30:00'),
(20, '松子', '1/4 小碗', '2016-04-03', '14:20:00'),
(21, '倍速', '半罐', '2016-04-03', '14:00:00'),
(22, '蘋果', '一個', '2016-04-03', '17:00:00'),
(23, '牛肉捲餅', '半捲', '2016-04-04', '11:30:00'),
(24, '叉燒、雞肉、鴨肉', '各一塊', '2016-04-04', '12:00:00'),
(25, '青菜', '半碗', '2016-04-04', '12:00:00'),
(26, '香蕉', '一根', '2016-04-04', '12:30:00'),
(27, '倍力素', '1/3罐', '2016-04-04', '14:00:00'),
(28, '松子n蔓越梅', '50克', '2016-04-04', '15:00:00'),
(29, '明日葉', '一杯', '2016-04-04', '09:30:00'),
(30, '燕麥粥+豆干', '一碗', '2016-04-04', '05:30:00'),
(31, '南瓜地瓜饅頭', '半顆', '2016-04-04', '16:45:00'),
(32, '山蘇、波菜、南瓜、滷味拼盤、飯', '各一些', '2016-04-04', '18:30:00'),
(33, '鮭魚味增湯', '半碗', '2016-04-04', '19:00:00'),
(34, '倍力素+豆漿', '3/4杯', '2016-04-04', '19:15:00'),
(35, '木瓜', '100克', '2016-04-04', '19:45:00'),
(36, '小芭蕉', '1根', '2016-04-05', '15:30:00'),
(37, '蔓越梅', '1小把', '2016-04-05', '15:45:00'),
(38, '麥片粥', 'ㄧ大碗', '2016-04-05', '05:30:00'),
(39, '明日葉', '一杯', '2016-04-05', '11:00:00'),
(40, '素食便當', '一份', '2016-04-05', '12:00:00'),
(41, '奇異果', '半顆', '2016-04-05', '20:00:00'),
(42, '蝦仁蛋、魚、蒼蠅頭、豆腐、飯', '幾口', '2016-04-05', '18:30:00'),
(43, '味增湯', '一碗', '2016-04-05', '17:45:00'),
(44, '豬里肌', '一片', '2016-04-05', '18:00:00'),
(45, '倍力素', '1/3罐', '2016-04-05', '09:00:00'),
(46, '栗子', '2粒', '2016-04-05', '19:00:00'),
(47, '香蕉牛奶', '1杯', '2016-04-05', '20:30:00'),
(48, '烤松子', '一把', '2016-04-05', '21:00:00'),
(49, '里肌肉片、杏鮑菇', '各幾片', '2016-04-05', '22:30:00'),
(50, '九層塔蛋、炒A菜、洋蔥炒肉、蘆筍菇', '各幾口', '2016-04-06', '18:30:00'),
(51, '安素', '一罐', '2016-04-06', '00:00:00'),
(52, '芭蕉', '一根', '2016-04-06', '21:15:00'),
(53, '金補體素', '一杯', '2016-04-06', '22:00:00'),
(54, '雞精', '一杯', '2016-04-06', '23:00:00'),
(55, '牛肉三明治', '半個', '2016-04-06', '14:00:00'),
(56, '蔥抓餅', '2/3 個', '2016-04-06', '12:00:00'),
(57, '炒年糕', '一盤', '2016-04-06', '11:00:00'),
(58, '傻瓜乾麵', '一碗', '2016-04-07', '11:55:00'),
(59, '味增湯', 'ㄧ小碗', '2016-04-07', '12:30:00'),
(60, '海苔壽司', '一個', '2016-04-07', '12:45:00'),
(61, '紅蘿蔔土司', '半片', '2016-04-07', '14:50:00'),
(62, '蘋果磅蛋糕', '一口', '2016-04-07', '14:50:00'),
(63, '水餃', '6個', '2016-04-07', '06:00:00'),
(64, '飯糰', '1個', '2016-04-07', '09:00:00'),
(65, '豆皮壽司', '3個', '2016-04-07', '12:30:00'),
(66, '地瓜稀飯', '2碗', '2016-04-07', '19:00:00'),
(67, '巧克力安素', '1杯', '2016-04-07', '21:00:00'),
(68, '葡萄汁', '1罐', '2016-04-07', '19:00:00'),
(69, '蚵仔麵線', '一碗', '2016-04-07', '22:00:00'),
(70, '水梨', '幾片', '2016-04-07', '23:50:00'),
(71, '番茄牛肉湯', '一碗', '2016-04-08', '07:00:00'),
(74, '蘿蔔糕', '幾塊', '2016-04-08', '11:30:00'),
(76, '菠蘿麵包', '半個', '2016-04-08', '08:30:00'),
(77, '巧克力安素＋牛奶', '半杯', '2016-04-08', '08:30:00'),
(78, '橘子', '兩片', '2016-04-08', '08:30:00'),
(79, '牛肉、青菜（石二鍋）', '一碗', '2016-04-08', '13:00:00'),
(80, '白飯', '半碗', '2016-04-08', '13:00:00'),
(81, '巧克力安素＋牛奶', '半杯', '2016-04-08', '13:30:00'),
(82, '牛肉', '2片', '2016-04-08', '19:30:00'),
(83, '橘子', '兩片', '2016-04-08', '20:30:00'),
(84, '布丁', '1個', '2016-04-08', '21:30:00'),
(85, '肉片', '一片', '2016-04-09', '17:00:00'),
(86, '木瓜', '半個', '2016-04-09', '17:15:00'),
(87, '蜂蜜蛋糕', '一片', '2016-04-09', '18:00:00'),
(88, '白菜、皇帝豆、牛蒡、鮭魚', '各幾口', '2016-04-09', '19:30:00'),
(89, '牛肉捲餅', '1片', '2016-04-09', '19:30:00'),
(90, '貓耳朵', '半碗', '2016-04-09', '19:30:00'),
(91, '蘋果汁', '1杯', '2016-04-09', '20:30:00'),
(92, '白菜、牛肉捲餅', '幾口', '2016-04-10', '05:30:00'),
(93, '味噌湯', '半碗', '2016-04-10', '12:30:00'),
(94, '地瓜葉', '幾口', '2016-04-10', '12:30:00'),
(95, '水餃', '四顆', '2016-04-10', '21:40:00'),
(96, '蜂蜜蛋糕', '半片', '2016-04-10', '13:30:00'),
(97, '倍力速', '3/4 罐', '2016-04-10', '20:30:00'),
(98, '速養療', '一杯', '2016-04-10', '18:30:00'),
(99, '稀飯', '幾口', '2016-04-10', '18:30:00'),
(100, '蘿蔔糕', '四小塊', '2016-04-11', '13:30:00'),
(101, '安素＋牛奶', '1/3 罐', '2016-04-11', '13:45:00'),
(102, '嘴邊肉', '五片', '2016-04-11', '17:30:00'),
(103, '羅宋湯', '一碗', '2016-04-11', '17:00:00'),
(104, '綠豆米苔目', '一碗', '2016-04-11', '20:00:00'),
(105, '香吉士', '3/4顆', '2016-04-11', '19:00:00'),
(106, '蛤仔湯', '1口', '2016-04-11', '19:00:00'),
(107, '臭豆腐', '一小塊', '2016-04-11', '22:30:00'),
(108, '馬鈴薯', '兩片', '2016-04-11', '22:30:00'),
(109, '速養療', '一杯', '2016-04-11', '22:45:00'),
(110, '嘴邊肉', '4片', '2016-04-11', '21:30:00'),
(111, '紅棗銀耳湯', '一碗', '2016-04-11', '23:00:00'),
(112, '銀耳湯', '1.5 碗', '2016-04-12', '03:00:00'),
(113, '雞精', '一杯', '2016-04-12', '13:00:00'),
(114, '里肌年糕湯', '一碗', '2016-04-12', '18:25:00'),
(115, '香菇瘦肉粥', '一碗', '2016-04-12', '18:00:00'),
(116, '安素+牛奶', '1/2 杯', '2016-04-12', '15:30:00'),
(117, '椰子水', '一杯', '2016-04-12', '19:00:00'),
(118, '山蘇、蛋、鮭魚', '各一口', '2016-04-12', '19:15:00'),
(119, '酪梨牛奶', '半杯', '2016-04-12', '19:30:00'),
(120, '綠豆米苔目', '一碗', '2016-04-12', '21:00:00'),
(121, '年糕三塊、木耳一片', '一碗', '2016-04-12', '21:30:00'),
(122, '速養療', '5g', '2016-04-12', '21:30:00'),
(123, '必達定', '15cc', '2016-04-12', '21:30:00'),
(124, '銀耳湯', '一碗', '2016-04-13', '08:30:00'),
(125, '水餃', '三顆', '2016-04-13', '14:00:00'),
(126, '蔥抓餅', 'ㄧ小片', '2016-04-12', '23:00:00'),
(127, '銀耳湯', '半碗', '2016-04-12', '23:30:00'),
(128, '椰子水', '一杯', '2016-04-13', '13:00:00'),
(129, '安素+牛奶', '一杯', '2016-04-13', '13:30:00'),
(130, '必達定', '10ml', '2016-04-13', '12:00:00'),
(131, '香菇瘦肉粥', '一碗', '2016-04-13', '05:00:00'),
(132, '油豆腐、雞肉、青菜、黑豆', '幾口', '2016-04-13', '12:10:00'),
(133, '年糕湯', '一碗', '2016-04-13', '05:10:00'),
(134, '牛肉湯麵線', '一碗', '2016-04-13', '18:30:00'),
(135, '豆腐、鱈魚、青菜', '幾口', '2016-04-13', '19:00:00'),
(136, '年糕湯', '一碗', '2016-04-13', '22:20:00'),
(137, '荷包蛋', '一個', '2016-04-14', '00:15:00'),
(138, '膜安', '一包', '2016-04-14', '01:00:00'),
(139, '銀耳湯', '一碗', '2016-04-13', '23:00:00'),
(140, '蜂蜜蛋糕', '一小口', '2016-04-14', '01:00:00'),
(141, '虱目魚粥', '一碗', '2016-04-14', '17:40:00'),
(142, '蚵仔煎', '兩口', '2016-04-14', '14:40:00'),
(143, '肉羹油麵', '一碗', '2016-04-14', '14:40:00'),
(144, '大腸麵線', '一碗', '2016-04-14', '23:00:00'),
(145, '司目魚粥', '半碗', '2016-04-14', '22:00:00'),
(146, '菠蘿麵包', '一個', '2016-04-14', '20:00:00'),
(147, '倍速', '半罐', '2016-04-14', '23:30:00'),
(148, '番茄牛肉、雙色蘿蔔、鱈魚、花椰菜（奇力愛）', '各幾口', '2016-04-15', '12:10:00'),
(149, '虱目魚粥', '一碗', '2016-04-15', '06:00:00'),
(150, '銀耳湯', '一碗', '2016-04-15', '05:30:00'),
(151, '綠豆湯', '一碗', '2016-04-15', '04:30:00'),
(152, '肉末粥、野菇牛腩、松坂碎肉（奇力愛）', '各幾口', '2016-04-15', '17:30:00'),
(153, '肉末粥、野菇牛腩、松坂碎肉（奇力愛）', '各幾口', '2016-04-15', '20:30:00'),
(154, '雞湯', '一碗', '2016-04-15', '15:30:00'),
(155, '香蕉鬆餅', '1/4 片', '2016-04-15', '21:10:00'),
(156, '檸檬水', '一杯', '2016-04-15', '12:10:00'),
(157, '花生豆花', '半碗', '2016-04-16', '14:30:00'),
(158, '綠豆薏仁蒟蒻', '一碗', '2016-04-16', '15:00:00'),
(159, '雞蛋糕', '2個', '2016-04-16', '15:00:00'),
(160, '烏龍麵', '一碗', '2016-04-16', '12:30:00'),
(161, '豆皮壽司', '2個', '2016-04-16', '17:30:00'),
(162, '石鍋拌飯', '半碗', '2016-04-16', '19:30:00'),
(163, '豬排、烤肉、龍鬚菜、黑豆', '各幾口', '2016-04-16', '19:30:00'),
(164, '魯肉', '一塊', '2016-04-17', '16:30:00'),
(165, '蟹粥', '半碗', '2016-04-17', '17:00:00'),
(166, '綠豆薏仁湯', '半碗', '2016-04-17', '18:00:00'),
(167, '海鮮烏龍麵', '半碗', '2016-04-17', '19:00:00'),
(168, '九層塔蛋', '一口', '2016-04-17', '19:00:00'),
(169, '煎干貝', '2個', '2016-04-17', '19:30:00'),
(170, '奇異果', '半個', '2016-04-17', '20:00:00'),
(171, '蚵仔麵線', '半碗', '2016-04-17', '10:30:00'),
(172, '菠蘿麵包', '半個', '2016-04-17', '05:30:00'),
(173, '油飯', '半碗', '2016-04-17', '11:30:00'),
(174, '焢肉', '兩塊', '2016-04-17', '13:30:00'),
(175, '檸檬磅蛋糕', '一小口', '2016-04-17', '13:00:00'),
(176, '蘋果磅蛋糕', '一小口', '2016-04-17', '21:30:00'),
(177, '香蕉', '一根', '2016-04-17', '13:00:00'),
(178, '倍速', '2/3 罐', '2016-04-17', '21:40:00'),
(179, '雞蛋糕', '1.5 個', '2016-04-16', '21:00:00'),
(180, '豬排蛋土司', '1/3 個', '2016-04-17', '23:30:00'),
(181, '蟹殼黃', '一個', '2016-04-17', '22:30:00'),
(182, '蒟篛綠豆薏仁湯', '一碗', '2016-04-17', '22:40:00'),
(183, '肉包', '一個', '2016-04-18', '06:00:00'),
(184, '倍速', '1/3 罐', '2016-04-18', '06:00:00'),
(185, '海鮮湯', '一碗', '2016-04-18', '11:00:00'),
(186, '港式干貝蘿蔔糕', '一大片', '2016-04-18', '01:25:00'),
(187, '蟹殼黃', '一個', '2016-04-18', '12:45:00'),
(188, '銀耳湯', '一碗', '2016-04-18', '13:30:00'),
(189, '銀耳蓮子湯', '1/3碗', '2016-04-18', '21:10:00'),
(190, '香吉士', '一顆', '2016-04-18', '20:30:00'),
(191, '輕乳酪蛋糕', '一塊', '2016-04-18', '20:45:00'),
(192, '空心菜、魯肉、九層塔蛋', '幾口', '2016-04-18', '18:30:00'),
(193, '佛跳牆', '一碗', '2016-04-18', '18:30:00'),
(194, '燒仙草', '半碗', '2016-04-18', '10:30:00'),
(195, '倍力素加牛奶', '半杯', '2016-04-18', '22:30:00'),
(196, '速養遼', '5g', '2016-04-18', '23:00:00'),
(197, '蔥餅', '一塊', '2016-04-18', '23:30:00'),
(198, '桂圓饅頭', '3/4 個', '2016-04-19', '05:30:00'),
(199, '蛋堡', '1/3 個', '2016-04-19', '00:00:00'),
(200, '嘴邊肉', '五片', '2016-04-19', '22:20:00'),
(201, '切仔麵', '半碗', '2016-04-19', '22:20:00'),
(202, '蔥抓餅', '半張', '2016-04-19', '23:25:00'),
(203, '綠豆蒟篛湯', '一碗', '2016-04-19', '22:40:00'),
(204, '白菜湯', '半碗', '2016-04-19', '11:00:00'),
(205, '蘿蔔糕', '一大片', '2016-04-19', '11:50:00'),
(206, '綠豆湯', '1.5 碗', '2016-04-19', '16:30:00'),
(207, '豆腐、菠菜、魚、豆干', '各幾口', '2016-04-19', '18:30:00'),
(208, '香蕉', '一根', '2016-04-19', '12:30:00'),
(209, '倍力素', '半罐', '2016-04-19', '12:30:00'),
(210, '香蕉鬆餅', '1/4 片', '2016-04-20', '06:30:00'),
(211, '明日葉', '一杯', '2016-04-20', '09:00:00'),
(212, '橘子', '半個', '2016-04-20', '09:30:00'),
(213, '白斬雞腿', '2/3 隻', '2016-04-20', '13:00:00'),
(214, '冬瓜雞肉湯', '半碗', '2016-04-20', '16:45:00'),
(215, '馬鈴薯燉肉、鯖魚、白飯', '各幾口', '2016-04-20', '18:30:00'),
(216, '速養療', '一杯', '2016-04-20', '18:00:00'),
(217, '倍速', '一罐', '2016-04-20', '23:00:00'),
(218, '甜不辣', '半碗', '2016-04-20', '22:30:00'),
(219, '里肌起司三明治', '一個三角形', '2016-04-22', '07:00:00'),
(220, '銀耳湯', '一碗', '2016-04-22', '07:00:00'),
(221, '夏威夷果塔', '一小個', '2016-04-22', '09:00:00'),
(222, 'A菜、雞肉粉條、腰果、冬瓜、飯', '各幾口', '2016-04-22', '11:45:00'),
(223, '檸檬水', '一杯', '2016-04-22', '00:00:00'),
(224, '去皮小番茄', '四個', '2016-04-22', '12:10:00'),
(225, '檸檬陳皮開胃飲', '一杯', '2016-04-22', '12:10:00'),
(226, '檸檬陳皮開胃飲', '一杯', '2016-04-22', '12:45:00'),
(227, '咖哩飯', '一大碗', '2016-04-22', '14:20:00'),
(228, '銀耳湯', '一碗', '2016-04-22', '14:45:00'),
(229, '香吉士', '一個', '2016-04-22', '18:20:00'),
(230, '鳳梨蘋果汁', '一杯', '2016-04-22', '20:45:00'),
(231, '速養療', '一杯', '2016-04-22', '21:25:00'),
(232, '開心果蛋糕', '半片', '2016-04-22', '23:50:00'),
(233, '花生豆花', '半碗', '2016-04-22', '22:30:00'),
(234, '柯仔煎', '半個', '2016-04-22', '22:20:00'),
(235, '甜不辣', '半碗', '2016-04-22', '22:20:00'),
(236, '麥格斯', '一杯', '2016-04-22', '23:50:00'),
(237, '番茄牛肉湯', '半碗', '2016-04-23', '00:15:00'),
(238, '金補體素', '一杯', '2016-04-23', '07:00:00'),
(239, '桂圓芝麻饅頭', '半個', '2016-04-23', '07:00:00'),
(240, '豆皮壽司', '2個', '2016-04-23', '12:30:00'),
(241, '香吉士', '一個', '2016-04-23', '14:15:00'),
(242, '倍速', '半瓶', '2016-04-23', '16:30:00'),
(243, '牛肉湯烏龍麵', '一碗', '2016-04-23', '17:15:00'),
(244, '酸辣湯', '一碗', '2016-04-23', '18:30:00'),
(245, '番茄牛肉湯(沒肉)', '一碗', '2016-04-23', '23:00:00'),
(246, '烤吐司', '1/3 片', '2016-04-23', '23:00:00'),
(247, '布丁', '半個', '2016-04-24', '20:30:00'),
(248, '水梨', '4口', '2016-04-24', '20:15:00'),
(249, '炒河粉', '一大碗', '2016-04-24', '16:00:00'),
(250, '飯、地瓜葉、地瓜、筍干', '幾口', '2016-04-24', '18:30:00'),
(251, '鍋貼', '3個', '2016-04-24', '16:30:00'),
(252, '肉羹湯', '半碗', '2016-04-24', '17:00:00'),
(253, '蔓越梅', '幾顆', '2016-04-24', '21:00:00'),
(254, '銀耳湯', 'ㄧ碗', '2016-04-24', '23:40:00'),
(255, '銀耳湯', '一碗', '2016-04-24', '23:30:00'),
(256, '魚肉、牛肉、白飯', '幾口', '2016-04-29', '12:05:00'),
(257, '有機綠茶', '半杯', '2016-04-29', '11:30:00'),
(258, '蜂蜜蛋糕', '一小片', '2016-04-29', '12:30:00'),
(259, '去皮番茄', '四顆', '2016-04-29', '12:10:00'),
(260, '香蕉鬆餅', '1/4 片', '2016-04-29', '06:30:00'),
(261, '水梨', '幾小塊', '2016-04-29', '10:30:00'),
(262, '麻醬麵', '一碗', '2016-04-29', '15:30:00'),
(263, '檸檬水', '一杯', '2016-04-29', '16:00:00'),
(264, '芭樂', '三小塊', '2016-04-29', '00:00:00'),
(265, '里肌肉三明治', '一個三角形', '2016-04-29', '18:00:00'),
(266, '黑醋炸雞、桔醋烤雞', '共4塊', '2016-04-30', '16:00:00'),
(267, '白飯', '半碗', '2016-04-30', '16:00:00'),
(268, '茄子、蓮藕、馬鈴薯、蘿蔔', '各2-3塊', '2016-04-30', '16:00:00'),
(269, '牛奶冰淇淋', '半個', '2016-04-30', '17:00:00'),
(270, '蜆精', '半碗', '2016-04-30', '19:00:00'),
(271, '竹蔘雞湯', '一小碗', '2016-04-30', '06:20:00'),
(272, '桂圓饅頭', '半個', '2016-04-30', '10:20:00'),
(273, '魚、冬粉、油豆腐、娃娃菜、白飯', '幾口', '2016-04-30', '12:20:00'),
(274, '香蕉', '半根', '2016-04-30', '13:00:00'),
(275, '蜂蜜蛋糕', '半塊', '2016-04-30', '14:00:00'),
(276, '綠茶', '半杯', '2016-04-30', '13:30:00'),
(277, '倍力素', '半罐', '2016-04-30', '15:00:00'),
(278, '牛肉湯泡飯', '半碗', '2016-04-30', '19:20:00'),
(279, '香蕉', '一根', '2016-04-30', '21:00:00'),
(280, 'Amo 千層蛋糕', '一片', '2016-04-30', '21:25:00'),
(281, '水梨', '三片', '2016-04-30', '12:30:00'),
(282, '麻醬麵', '半碗', '2016-05-01', '15:30:00'),
(283, '油豆腐', '一塊', '2016-05-01', '15:40:00'),
(284, '麻吉（花生、芝麻）', '各一個', '2016-05-01', '15:50:00'),
(285, '黃金奇異果', '一顆', '2016-05-01', '17:00:00'),
(286, '蝦仁炒蛋、草魚', '各幾口', '2016-05-01', '18:00:00'),
(287, '味增湯', '半碗', '2016-05-01', '18:00:00'),
(288, '綠豆湯', '半碗', '2016-05-01', '20:30:00'),
(289, '蜆精', '半碗', '2016-05-01', '21:00:00'),
(290, '柯仔煎', '半個', '2016-05-02', '16:00:00'),
(291, '嘴邊肉', '2塊', '2016-05-02', '16:20:00'),
(292, '湯意麵', '一碗', '2016-05-02', '16:40:00'),
(293, '綠豆薏仁蒟蒻', '一碗', '2016-05-02', '17:00:00'),
(294, '乾米粉', '一碗', '2016-05-02', '21:00:00'),
(295, '客家粄條', '半碗', '2016-05-03', '21:30:00'),
(296, '豬肝、蘿蔔', '各幾口', '2016-05-03', '21:30:00'),
(297, '香蕉鬆餅', '一塊', '2016-05-04', '06:35:00'),
(298, '黃金奇異果', '一顆', '2016-05-03', '22:00:00'),
(299, '雞精', '一小杯', '2016-05-04', '06:55:00'),
(300, '蛋糕', '一塊', '2016-05-03', '23:30:00'),
(301, '蓮霧', '一個', '2016-05-04', '09:55:00'),
(302, '牛肉捲', '半個', '2016-05-04', '11:00:00'),
(303, '牛奶', '一杯', '2016-05-04', '11:00:00'),
(304, '咖啡', '一小杯', '2016-05-04', '10:00:00'),
(305, '蛤蠣濃湯', '一碗', '2016-05-04', '13:00:00'),
(306, '桂圓銀耳湯', '一碗', '2016-05-04', '15:20:00'),
(307, '牛排、羊排', '五塊', '2016-05-04', '15:00:00'),
(308, '白帶魚', '六大塊', '2016-05-04', '18:40:00'),
(309, '晚餐：鹹蛋苦瓜、青椒、韭菜豆干、白飯', '各幾口', '2016-05-04', '00:00:00'),
(310, '香吉士', '兩顆', '2016-05-04', '21:40:00'),
(311, 'homemade 咖啡蛋糕', '兩小片', '2016-05-04', '21:00:00'),
(312, '牛肉湯', '一大碗', '2016-05-05', '05:00:00'),
(313, '牛肉捲', '1/4 個', '2016-05-05', '08:00:00'),
(314, '咖啡蛋糕', '一小片', '2016-05-05', '05:00:00'),
(315, '白帶魚', '兩片', '2016-05-05', '08:00:00'),
(316, '魚肉', '兩片', '2016-05-05', '13:00:00'),
(317, '桂圓銀耳湯', '一碗', '2016-05-05', '13:10:00'),
(318, '咖啡蛋糕', '兩小片', '2016-05-05', '13:20:00'),
(319, '牛肉炒飯', '一碗', '2016-05-05', '14:20:00'),
(320, '咖啡蛋糕', '一塊', '2016-05-05', '20:45:00'),
(321, '蓮霧', '一顆', '2016-05-05', '20:20:00'),
(322, '鯖魚、波菜、豆干、豬肉、牛肉', '各幾口', '2016-05-05', '18:45:00'),
(323, '綠豆湯', '一碗', '2016-05-05', '23:00:00'),
(324, '牛肉湯', '一碗公', '2016-05-06', '06:00:00'),
(325, '咖啡蛋糕', '一小片', '2016-05-06', '06:00:00'),
(326, '蔥花大餅', '一大塊', '2016-05-06', '06:00:00'),
(327, '奇力愛午餐：醉雞、A菜、肉丸、白飯', '幾口', '2016-05-06', '12:00:00'),
(328, '去皮小番茄', '四顆', '2016-05-06', '12:00:00'),
(329, '油飯', '一碗', '2016-05-06', '17:00:00'),
(330, 'Amo 蛋糕、堅果', '一小塊、一點', '2016-05-06', '16:40:00'),
(331, '蘋果、蓮霧', '幾塊', '2016-05-06', '16:30:00'),
(332, '綠豆湯', '一碗', '2016-05-06', '13:00:00'),
(333, '白帶魚', '四塊', '2016-05-06', '18:30:00'),
(334, '豬肉、荇菜', '各幾口', '2016-05-06', '18:30:00'),
(335, '布丁冰淇淋', '一杯', '2016-05-06', '20:00:00'),
(336, '炒米粉', '一大盤', '2016-05-07', '19:00:00'),
(337, '布朗尼', '一塊', '2016-05-07', '18:20:00'),
(338, '蓮霧', '一顆', '2016-05-07', '16:00:00'),
(339, '五紅湯', '半碗', '2016-05-07', '20:30:00'),
(340, '飯糰', '3/4 個', '2016-05-07', '07:30:00'),
(341, '牛肉湯', '半碗', '2016-05-07', '06:30:00'),
(342, '豆漿', '1/4 杯', '2016-05-07', '07:30:00'),
(343, '牛奶', '半杯', '2016-05-07', '07:30:00'),
(344, '油飯', '一碗', '2016-05-07', '12:30:00'),
(345, 'Amo 蛋糕', '一小塊', '2016-05-07', '12:30:00'),
(346, '香蕉', '半根', '2016-05-07', '07:50:00'),
(347, '蓮霧', '三個', '2016-05-07', '23:55:00'),
(348, '五紅湯', '一碗', '2016-05-07', '23:00:00'),
(349, '竹笙湯', '一碗', '2016-05-07', '22:30:00'),
(350, '布朗尼', '一小塊', '2016-05-07', '21:00:00'),
(351, '京都排骨', '2塊', '2016-05-08', '22:15:00'),
(352, '提拉米蘇', '2塊', '2016-05-08', '21:00:00'),
(353, '飯、排骨、蝦球、地瓜葉、酸菜粉絲', '各一些', '2016-05-08', '19:00:00'),
(354, '牛肉捲餅', '1.5塊', '2016-05-08', '18:30:00'),
(355, '雞湯', '1碗', '2016-05-08', '19:00:00'),
(356, '油飯', '半碗', '2016-05-08', '16:00:00'),
(357, '牛肉湯', '一碗', '2016-05-08', '07:00:00'),
(358, '炒米粉', '一碗', '2016-05-08', '07:00:00'),
(359, '五紅湯', '一碗', '2016-05-08', '08:30:00'),
(360, '五紅湯', '一碗', '2016-05-08', '14:30:00'),
(361, '炒米粉', '一碗', '2016-05-08', '12:30:00'),
(362, '蓮霧', '三顆', '2016-05-08', '14:30:00'),
(363, '蔓越莓、腰果', '一些', '2016-05-08', '15:30:00');

-- --------------------------------------------------------

--
-- 資料表結構 `memo`
--

CREATE TABLE IF NOT EXISTS `memo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memo` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- 資料表的匯出資料 `memo`
--

INSERT INTO `memo` (`id`, `memo`, `date`, `time`) VALUES
(1, '有打嗝、覺得精神好、覺得掉髮', '2016-04-01', '21:00:00'),
(2, '肚子痛2hr', '2016-04-03', '15:00:00'),
(3, '今天都不痛，早上有上廁所，精神好，寫書法有流汗', '2016-04-04', '20:45:00'),
(4, '下午肚子痛約兩小時、便秘', '2016-04-03', '15:00:00'),
(5, '約住院時間，需約15/16號', '2016-04-07', '09:50:00'),
(6, '薑黃素/綠藻可吃嗎？可泡溫泉或全身按摩嗎？', '2016-04-07', '00:00:00'),
(7, '覺得累、覺得熱', '2016-04-05', '18:25:00'),
(8, '覺得熱', '2016-04-04', '18:00:00'),
(9, '覺得喉嚨痛', '2016-04-06', '16:45:00'),
(10, '喉嚨痛檢查？副作用或發炎感染？', '2016-04-07', '09:45:00'),
(11, '嘴破請醫生開口內膏', '2016-04-14', '13:25:00'),
(12, '嘴巴破雖然會餓但不想吃，念珠球菌有點復發', '2016-04-10', '23:35:00'),
(13, '一個月瘦了3-4公斤，住院時可打營養針嗎？', '2016-04-14', '13:30:00'),
(14, '上週四完副作用滿嚴重：嘴破嚴重、味覺變淡、食慾較低、念珠菌復發', '2016-04-14', '00:00:00'),
(15, '開安眠藥', '2016-04-14', '00:00:00'),
(16, '有推薦轉介中醫科調養身體嗎', '2016-04-14', '13:30:00'),
(17, '嘴巴破、可開口內膠嗎？加打自費營養針', '2016-04-14', '15:40:00'),
(18, '嘴破很嚴重、吃奇異果、香吉士都很痛，小落淚，但精神體力好', '2016-04-12', '22:20:00'),
(19, '個管師或專屬護理師？', '2016-04-14', '14:00:00'),
(20, '建議每次化療時間可隔多久？7-10天是否ok?六日有門診化療嗎？', '2016-04-14', '15:35:00'),
(21, '中午去北醫住院打藥', '2016-04-16', '11:40:00'),
(22, '中午出院回到家', '2016-04-17', '11:00:00'),
(23, '可以泡溫泉嗎', '2016-04-21', '00:00:00'),
(24, '標靶藥物漲價了？', '2016-04-21', '10:15:00'),
(25, '喉嚨痛跟累', '2016-04-20', '15:00:00'),
(26, '拉肚子兩次；打嗝嚴重；有點反胃；晚上1900左右很累', '2016-04-23', '19:00:00'),
(27, '胃痛、狂打嗝', '2016-04-23', '21:00:00'),
(28, '胃痛減輕但還是沒什麼食慾、洗頭掉蠻多頭髮', '2016-04-23', '23:00:00'),
(29, '反胃；打嗝；吃不下；無食慾', '2016-04-24', '23:25:00'),
(30, '中午胸悶、呼吸不順、手發抖，去北醫急診，疑似腸胃出血。等住院及排照胃鏡', '2016-04-25', '12:20:00'),
(31, '阿斯匹靈需不需要換；有急性出血', '2016-04-28', '09:15:00'),
(32, '會喘、呼吸比較不順暢', '2016-05-01', '18:05:00'),
(33, '便秘，試了幾次無法，昨沒吃軟便藥', '2016-05-01', '18:00:00'),
(34, '下午覺得胸悶，但還不到很不舒服，吃完東西之後好多了', '2016-05-06', '16:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `sport`
--

CREATE TABLE IF NOT EXISTS `sport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 資料表的匯出資料 `sport`
--

INSERT INTO `sport` (`id`, `type`, `amount`, `date`, `time`) VALUES
(1, '逛菜市場', '一小時', '2016-03-31', '19:30:00'),
(2, '逛菜市場', '30分鐘', '2016-04-02', '11:00:00'),
(3, '逛頂好', '二十分鐘', '2016-04-03', '11:50:00'),
(4, '買掃墓用品', '十五分鐘', '2016-04-03', '12:40:00'),
(5, '寫書法有流汗', '半小時', '2016-04-04', '16:30:00'),
(6, '瑜伽伸展', '一小時', '2016-04-06', '20:00:00'),
(7, 'Yoga', '1hr', '2016-04-06', '20:00:00'),
(8, '瑜伽', '一小時', '2016-04-13', '20:00:00'),
(9, '逛市場', '半小時', '2016-04-16', '09:00:00'),
(10, '散步去洗衣店n爬樓梯1-4樓', '20分鐘', '2016-04-18', '21:00:00'),
(11, '散步', '十分鐘', '2016-04-19', '15:10:00'),
(12, '瑜珈', '一小時', '2016-04-20', '20:00:00'),
(13, '氣功', '15分鐘', '2016-04-23', '00:00:00'),
(14, '公園散步', '30分鐘', '2016-04-23', '17:00:00'),
(15, '逛街', '一小時', '2016-04-30', '17:00:00'),
(16, 'costco買東西', '一小時', '2016-05-04', '09:45:00'),
(17, '玉成公園拉筋操', '半小時', '2016-05-06', '06:30:00'),
(18, '菜市場買菜', '半小時', '2016-05-06', '07:30:00'),
(19, '公園拉筋操', '40分鐘', '2016-05-07', '07:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `temperature`
--

CREATE TABLE IF NOT EXISTS `temperature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `temperature` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 資料表的匯出資料 `temperature`
--

INSERT INTO `temperature` (`id`, `temperature`, `date`, `time`) VALUES
(1, '35.50', '2016-04-03', '00:50:00'),
(2, '35.20', '2016-04-05', '18:20:00'),
(3, '34.90', '2016-05-06', '16:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `weight`
--

CREATE TABLE IF NOT EXISTS `weight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weight` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 資料表的匯出資料 `weight`
--

INSERT INTO `weight` (`id`, `weight`, `date`, `time`) VALUES
(2, '45.80', '2016-04-03', '00:50:00'),
(3, '45.10', '2016-04-03', '13:40:00'),
(4, '45.10', '2016-04-03', '20:05:00'),
(5, '45.00', '2016-04-05', '18:00:00'),
(6, '44.90', '2016-04-06', '00:00:00'),
(7, '45.20', '2016-04-06', '23:00:00'),
(8, '44.00', '2016-04-12', '12:30:00'),
(9, '44.90', '2016-04-12', '22:00:00'),
(10, '44.50', '2016-04-13', '22:45:00'),
(11, '46.10', '2016-04-17', '11:45:00'),
(12, '45.80', '2016-04-18', '13:05:00'),
(13, '45.80', '2016-04-18', '22:40:00'),
(14, '45.40', '2016-04-19', '23:00:00'),
(15, '44.80', '2016-04-20', '23:25:00'),
(16, '46.30', '2016-04-22', '14:55:00'),
(17, '45.60', '2016-04-22', '21:20:00'),
(18, '44.30', '2016-04-24', '20:20:00'),
(19, '44.20', '2016-04-30', '21:20:00'),
(20, '44.20', '2016-05-01', '21:00:00'),
(21, '44.90', '2016-05-03', '23:05:00'),
(22, '45.70', '2016-05-04', '21:45:00'),
(23, '44.90', '2016-05-05', '18:25:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
