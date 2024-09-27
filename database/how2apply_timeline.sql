-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-27 08:10:08
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
-- 資料表結構 `how2apply_timeline`
--

CREATE TABLE `how2apply_timeline` (
  `id` int(11) NOT NULL,
  `item` varchar(300) NOT NULL,
  `hidden` varchar(10) NOT NULL,
  `num_order` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `how2apply_timeline`
--

INSERT INTO `how2apply_timeline` (`id`, `item`, `hidden`, `num_order`, `status`, `update_user`, `update_time`) VALUES
(1, 'Submit Application Documents: Before 30th October', 'N', 1, '使用中', '郭政億', '2024-09-27 09:52:41'),
(2, 'Review of Applications: November', 'N', 2, '使用中', '郭政億', '2024-09-27 09:52:41'),
(3, 'Notification of Review Results: December', 'N', 3, '使用中', '郭政億', '2024-09-27 09:52:41'),
(4, 'Submit Enrollment Documents: December', 'N', 4, '使用中', '郭政億', '2024-09-27 09:52:41'),
(5, 'Issuance of Admission', 'N', 5, '使用中', '郭政億', '2024-09-27 09:52:41'),
(6, 'Arrange the Travel to Taiwan (visa, tickets, accommodation, etc.)', 'N', 6, '使用中', '郭政億', '2024-09-27 09:52:41'),
(7, 'Notifies the Dormitory Room Numbers: January', 'N', 7, '使用中', '郭政億', '2024-09-27 09:52:41'),
(8, 'Program Period: February; Flexible Learning Weeks: 9th June – 21th June', 'N', 8, '使用中', '郭政億', '2024-09-27 09:52:41'),
(9, 'Sends Transcripts to Student(via email): End of August', 'N', 9, '使用中', '郭政億', '2024-09-27 09:52:41');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `how2apply_timeline`
--
ALTER TABLE `how2apply_timeline`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `how2apply_timeline`
--
ALTER TABLE `how2apply_timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
