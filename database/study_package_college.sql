-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-10-04 09:55:00
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
-- 資料表結構 `study_package_college`
--

CREATE TABLE `study_package_college` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ch` varchar(255) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `hidden` varchar(10) NOT NULL,
  `num_order` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `study_package_college`
--

INSERT INTO `study_package_college` (`id`, `name_en`, `name_ch`, `subtitle`, `hidden`, `num_order`, `status`, `update_user`, `update_time`) VALUES
(1, 'Fu Jen Global Academy (BPIS)', '國際學院', '1,2,3,4,5,6,7,8,9', 'N', 1, '使用中', '郭政億', '2024-10-04 10:56:46'),
(2, 'College of Liberal Art', '文學院', '1,2,3,4,5,6,7,8,9', 'N', 2, '使用中', '郭政億', '2024-10-04 10:56:46'),
(3, 'College of Art', '藝術學院', '3,5,8,9', 'N', 3, '使用中', '郭政億', '2024-10-04 15:54:43'),
(4, 'College of Communication', '傳播學院', '1,2,3,4,5,6,7,8,9', 'N', 4, '使用中', '郭政億', '2024-10-04 10:56:46'),
(5, 'College of Education and Sports Health', '教育與運動健康學院', '1,2,3,4,5,6,7,8,9', 'N', 5, '使用中', '郭政億', '2024-10-04 10:56:46'),
(6, 'College of Medicine', '醫學院', '1,2,3,4,5,6,7,8,9', 'N', 6, '使用中', '郭政億', '2024-10-04 10:56:46'),
(7, 'College of Science & Engineering', '理工學院', '1,2,3,4,5,6,7,8,9', 'N', 7, '使用中', '郭政億', '2024-10-04 10:56:46'),
(8, 'College of Foreign Languages', '外國語文學院', '1,2,3,4,5,6,7,8,9', 'N', 8, '使用中', '郭政億', '2024-10-04 10:56:46'),
(9, 'College of Human Ecology', '民生學院', '1,2,3,4,5,6,7,8,9', 'N', 9, '使用中', '郭政億', '2024-10-04 10:56:46'),
(10, 'College of Law', '法律學院', '1,2,3,4,5,6,7,8,9', 'N', 10, '使用中', '郭政億', '2024-10-04 10:56:46'),
(11, 'College of Social Science', '社會科學院', '1,2,3,4,5,6,7,8,9', 'N', 11, '使用中', '郭政億', '2024-10-04 10:56:46'),
(12, 'College of Management', '管理學院', '1,2,3,4,5,6,7,8,9', 'N', 12, '使用中', '郭政億', '2024-10-04 10:56:46'),
(13, 'College of Fashion & Textiles', '織品服裝學院', '1,2,3,4,5,6,7,8,9', 'N', 13, '使用中', '郭政億', '2024-10-04 12:00:22');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `study_package_college`
--
ALTER TABLE `study_package_college`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `study_package_college`
--
ALTER TABLE `study_package_college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
