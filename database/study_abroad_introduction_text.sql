-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-23 07:49:10
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
-- 資料表結構 `study_abroad_introduction_text`
--

CREATE TABLE `study_abroad_introduction_text` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `study_abroad_introduction_text`
--

INSERT INTO `study_abroad_introduction_text` (`id`, `title`, `content`, `update_user`, `update_time`) VALUES
(1, 'Program Introduction', 'Fu Jen Catholic University (FJCU) is the leading private university in Taiwan and is featured in the THE Impact Rankings for Sustainable Development Goals (SDGs), committed to enhancing social inclusion and environmental conservation. While studying at FJCU, you can immerse yourself in the richness of traditional Chinese culture, gain a profound understanding of Taiwan\'s advanced technology sector, appreciate the beauty of Taiwan\'s scenery, and engage in international volunteer activities.', '郭政億', '2024-09-23 11:15:33');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `study_abroad_introduction_text`
--
ALTER TABLE `study_abroad_introduction_text`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `study_abroad_introduction_text`
--
ALTER TABLE `study_abroad_introduction_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
