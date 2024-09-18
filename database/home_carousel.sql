-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-18 08:50:58
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
-- 資料表結構 `home_carousel`
--

CREATE TABLE `home_carousel` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `hidden` varchar(10) NOT NULL,
  `num_order` int(11) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `home_carousel`
--

INSERT INTO `home_carousel` (`id`, `name`, `image`, `hidden`, `num_order`, `update_user`, `update_time`) VALUES
(1, '第一張', '1 首頁-1coin.jpg', 'N', 1, '郭政億', '2024-09-18 09:49:15'),
(2, '第二張', '1 首頁-2coin.jpg', 'N', 2, '郭政億', '2024-09-18 09:49:15'),
(3, '第三張', '1 首頁-3coin.jpg', 'N', 3, '郭政億', '2024-09-18 09:49:15'),
(4, '第四張', '1 首頁-4coin.jpg', 'N', 4, '郭政億', '2024-09-18 09:49:15'),
(5, '第五張', '1 首頁-5coin.jpg', 'N', 5, '郭政億', '2024-09-18 09:49:15');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `home_carousel`
--
ALTER TABLE `home_carousel`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `home_carousel`
--
ALTER TABLE `home_carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
