-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-12 14:08:46
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
-- 資料表結構 `study_packages_combine`
--

CREATE TABLE `study_packages_combine` (
  `college_id` int(11) NOT NULL,
  `title_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `study_packages_combine`
--

INSERT INTO `study_packages_combine` (`college_id`, `title_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `study_packages_combine`
--
ALTER TABLE `study_packages_combine`
  ADD PRIMARY KEY (`college_id`,`title_id`),
  ADD KEY `title_id` (`title_id`);

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `study_packages_combine`
--
ALTER TABLE `study_packages_combine`
  ADD CONSTRAINT `study_packages_combine_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `study_packages_college` (`college_id`),
  ADD CONSTRAINT `study_packages_combine_ibfk_2` FOREIGN KEY (`title_id`) REFERENCES `study_packages_title` (`title_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
