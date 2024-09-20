-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-20 07:53:17
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
  `link` varchar(300) DEFAULT NULL,
  `target` varchar(10) DEFAULT NULL,
  `hidden` varchar(10) NOT NULL,
  `num_order` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `home_carousel`
--

INSERT INTO `home_carousel` (`id`, `name`, `image`, `link`, `target`, `hidden`, `num_order`, `status`, `update_user`, `update_time`) VALUES
(1, '第一張', '1 首頁-1coin.jpg', NULL, NULL, 'N', 2, '使用中', '郭政億', '2024-09-20 13:51:20'),
(2, '測試第二張', '1 首頁-2coin.jpg', NULL, NULL, 'N', 1, '使用中', '郭政億', '2024-09-20 13:51:20'),
(3, '第三張', '1 首頁-3coin.jpg', NULL, NULL, 'Y', 3, '使用中', '郭政億', '2024-09-20 13:51:20'),
(4, '第四張', '1 首頁-4coin.jpg', NULL, NULL, 'N', 4, '使用中', '郭政億', '2024-09-20 13:51:20'),
(5, '第五張', '1 首頁-5coin.jpg', 'https://www.google.com/', 'blank', 'N', 5, '使用中', '郭政億', '2024-09-20 13:51:20');

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
