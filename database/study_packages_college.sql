-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-12 14:08:42
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
-- 資料表結構 `study_packages_college`
--

CREATE TABLE `study_packages_college` (
  `college_id` int(11) NOT NULL,
  `college_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `study_packages_college`
--

INSERT INTO `study_packages_college` (`college_id`, `college_name`) VALUES
(1, 'Fu Jen Global Academy (BPIS)'),
(2, 'College of Liberal Art'),
(3, 'College of Art'),
(4, 'College of Communication'),
(5, 'College of Education and Sports Health'),
(6, 'College of Medicine'),
(7, 'College of Science & Engineering'),
(8, 'College of Foreign Languages'),
(9, 'College of Human Ecology'),
(10, 'College of Law'),
(11, 'College of Social Science'),
(12, 'College of Management'),
(13, 'College of Fashion & Textiles');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `study_packages_college`
--
ALTER TABLE `study_packages_college`
  ADD PRIMARY KEY (`college_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `study_packages_college`
--
ALTER TABLE `study_packages_college`
  MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
