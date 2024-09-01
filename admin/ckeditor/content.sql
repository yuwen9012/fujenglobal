-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-01 20:39:04
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
-- 資料庫： `ckeditor_demo`
--

-- --------------------------------------------------------

--
-- 資料表結構 `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `content`
--

INSERT INTO `content` (`id`, `content`, `image_path`) VALUES
(1, '<p><img class=\"image-style-align-right\" style=\"aspect-ratio:290/120;\" src=\"uploads/img_66d41d5c24bc80.32110473.png\" width=\"290\" height=\"120\"></p><p>When Fu Jen Catholic University (FJCU) was reestablished in Taiwan in 1963, the College of Law was also established and later transformed into a School of Law. At present the School of Law is composed of three departments: Department of Law, Department of Financial and Economic Law, and Graduate Department of Law. It also has a Legal Service Center and publishes Fu Jen Law Review. It is a high-quality professional law college with a most complete learning system and community integration.</p>', ''),
(2, '<p>&nbsp;</p><p>The School of Law of Fu Jen Catholic University is a pivotal center of law in Taiwan. In addition to cu</p><p>ltivating students\' legal knowledge, it also cultivates legal talents with equal emphasis on both knowledge and specialty. Also emphasized are the development of moral and academic qualities through various educational methods such as holistic education, legal ethics, service learning, and cooperation betwe<img class=\"image_resized image-style-align-right\" style=\"aspect-ratio:565/372;width:29.99%;\" src=\"uploads/img_66d4482f152735.45847986.png\" width=\"565\" height=\"372\">en industry and university. At the same time, the School emphasizes the promotion of foreign language ability, broadens the macro-international vision, promotes a plan of fostering elites, and contributes to the country by combining theory and practice. Under the leadership of teachers with academic and practical experience, students have performed very well in recent years in the intercollegiate debates of the “Lee and Li Foundation Cup,” the “Philip C. Jessup International Law Moot Court Competition (JESSUP),” and the “PwC Tax Moot Court Competition.” In addition, our School has implemented the intensive national examination program, and its departments have fully assisted students in preparing for participation in the national examinations, organized lectures and supplementary courses, and rewarded students who have outstanding achievements. In order to train legal talents in the new era, our School will continue to develop professionalization, humanization, integration, and internationalization.</p>', 'path/to/image.jpg');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
