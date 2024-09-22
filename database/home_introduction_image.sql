-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-22 19:02:19
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
-- 資料表結構 `home_introduction_image`
--

CREATE TABLE `home_introduction_image` (
  `id` int(11) NOT NULL,
  `position` varchar(10) NOT NULL,
  `image` varchar(300) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `home_introduction_image`
--

INSERT INTO `home_introduction_image` (`id`, `position`, `image`, `update_user`, `update_time`) VALUES
(1, '左上', '1 首頁-四格照-左上.jpg', '郭政億', '2024-09-22 19:01:20'),
(2, '右上', '1 首頁-四格照-右上.jpg', '郭政億', '2024-09-22 19:01:20'),
(3, '左下', '1 首頁-四格照-左下.jpg', '郭政億', '2024-09-22 19:01:20'),
(4, '右下', '1 首頁-四格照-右下.jpg', '郭政億', '2024-09-22 19:01:20');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `home_introduction_image`
--
ALTER TABLE `home_introduction_image`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `home_introduction_image`
--
ALTER TABLE `home_introduction_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
