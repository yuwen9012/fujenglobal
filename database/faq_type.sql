-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-30 05:14:02
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `fujenglobal`
--

-- --------------------------------------------------------

--
-- 資料表結構 `faq_type`
--

CREATE TABLE `faq_type` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `num_order` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `faq_type`
--

INSERT INTO `faq_type` (`id`, `type`, `num_order`, `status`, `update_user`, `update_time`) VALUES
(1, 'Choose your units', 1, '使用中', '郭政億', '2024-09-30 10:08:58'),
(2, 'Application', 2, '使用中', '郭政億', '2024-09-30 10:08:58'),
(3, 'Before Enter Taiwan', 3, '使用中', '郭政億', '2024-09-30 10:40:45'),
(4, 'Live in Taiwan', 4, '使用中', '郭政億', '2024-09-30 10:46:08'),
(5, 'Contact us', 5, '使用中', '郭政億', '2024-09-30 10:46:08');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `faq_type`
--
ALTER TABLE `faq_type`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `faq_type`
--
ALTER TABLE `faq_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
