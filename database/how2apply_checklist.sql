-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-27 08:10:02
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
-- 資料表結構 `how2apply_checklist`
--

CREATE TABLE `how2apply_checklist` (
  `id` int(11) NOT NULL,
  `item` varchar(300) NOT NULL,
  `hidden` varchar(10) NOT NULL,
  `num_order` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `how2apply_checklist`
--

INSERT INTO `how2apply_checklist` (`id`, `item`, `hidden`, `num_order`, `status`, `update_user`, `update_time`) VALUES
(1, 'Application Form', 'N', 1, '使用中', '郭政億', '2024-09-27 09:52:41'),
(2, 'Complete academic transcripts', 'N', 2, '使用中', '郭政億', '2024-09-27 09:52:41'),
(3, 'Recommendation letter from an instructor', 'N', 3, '使用中', '郭政億', '2024-09-27 09:52:41'),
(4, 'Certificate of Enrollment (at your home university)', 'N', 4, '使用中', '郭政億', '2024-09-27 09:52:41'),
(5, 'Information page from your passport', 'N', 5, '使用中', '郭政億', '2024-09-27 09:52:41'),
(6, 'Proof of language proficiency (exemption: English native speaker)', 'N', 6, '使用中', '郭政億', '2024-09-27 09:52:41'),
(7, 'Passport photo', 'N', 7, '使用中', '郭政億', '2024-09-27 09:52:41');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `how2apply_checklist`
--
ALTER TABLE `how2apply_checklist`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `how2apply_checklist`
--
ALTER TABLE `how2apply_checklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
