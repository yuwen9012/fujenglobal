-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-12 14:08:54
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
-- 資料表結構 `study_packages_title`
--

CREATE TABLE `study_packages_title` (
  `title_id` int(11) NOT NULL,
  `title_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `study_packages_title`
--

INSERT INTO `study_packages_title` (`title_id`, `title_name`) VALUES
(1, 'Introduction'),
(2, 'Features'),
(3, 'Academic Module & Study Package'),
(4, 'Course Structure & Description'),
(5, 'Learning Outcomes'),
(6, 'Faculty Information'),
(7, 'Resources & Facilities'),
(8, 'Office Website'),
(9, 'Contact Information');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `study_packages_title`
--
ALTER TABLE `study_packages_title`
  ADD PRIMARY KEY (`title_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `study_packages_title`
--
ALTER TABLE `study_packages_title`
  MODIFY `title_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
