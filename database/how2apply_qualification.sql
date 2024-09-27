-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-27 08:09:58
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
-- 資料表結構 `how2apply_qualification`
--

CREATE TABLE `how2apply_qualification` (
  `id` int(11) NOT NULL,
  `item` varchar(300) NOT NULL,
  `hidden` varchar(10) NOT NULL,
  `num_order` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `how2apply_qualification`
--

INSERT INTO `how2apply_qualification` (`id`, `item`, `hidden`, `num_order`, `status`, `update_user`, `update_time`) VALUES
(1, 'Have a minimum GPA (grade point average) of 2.5 on a 4-point scale, or equivalent', 'N', 1, '使用中', '郭政億', '2024-09-27 14:09:29'),
(2, 'You should be a full-time student at your home institution during the application and study period.', 'N', 2, '使用中', '郭政億', '2024-09-27 14:08:59'),
(3, 'Have completed at least one year of full-time study at your home university.', 'N', 3, '使用中', '郭政億', '2024-09-27 14:08:59'),
(4, 'Please refer to the program\'s individual Language Requirements.', 'N', 4, '使用中', '郭政億', '2024-09-27 14:08:59');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `how2apply_qualification`
--
ALTER TABLE `how2apply_qualification`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `how2apply_qualification`
--
ALTER TABLE `how2apply_qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
