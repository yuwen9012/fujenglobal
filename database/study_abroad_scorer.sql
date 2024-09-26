-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-26 09:15:12
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
-- 資料表結構 `study_abroad_scorer`
--

CREATE TABLE `study_abroad_scorer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `hidden` varchar(10) NOT NULL,
  `num_order` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `study_abroad_scorer`
--

INSERT INTO `study_abroad_scorer` (`id`, `name`, `image`, `quantity`, `hidden`, `num_order`, `status`, `update_user`, `update_time`) VALUES
(1, 'Colleges', 'college.png', '12', 'N', 1, '使用中', '郭政億', '2024-09-25 17:12:26'),
(2, 'Bachelor\'s Degrees', 'degree.png', '53', 'N', 2, '使用中', '郭政億', '2024-09-25 17:12:26'),
(3, 'International Partners', 'school.png', '463', 'N', 3, '使用中', '郭政億', '2024-09-25 17:12:26'),
(4, 'Student Clubs', 'student.png', '83', 'N', 4, '使用中', '郭政億', '2024-09-25 17:12:26'),
(5, 'Asia Univeristy Ranking 2024', 'ranking.png', '301-350', 'N', 5, '使用中', '郭政億', '2024-09-26 14:14:26'),
(6, 'Alumni Association', 'association.png', '49', 'N', 6, '使用中', '郭政億', '2024-09-26 11:46:53');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `study_abroad_scorer`
--
ALTER TABLE `study_abroad_scorer`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `study_abroad_scorer`
--
ALTER TABLE `study_abroad_scorer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
