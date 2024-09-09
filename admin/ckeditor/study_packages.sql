-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-09 14:46:40
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
-- 資料表結構 `study_packages`
--

CREATE TABLE `study_packages` (
  `id` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `study_packages`
--

INSERT INTO `study_packages` (`id`, `department`, `title`, `content`, `created_at`) VALUES
(1, 'law', 'Introduction', '<div class=\"justify-text\">\n                    <p class=\"my-3\" style=\"margin: 0; padding: 0; line-height: 1; display: inline;\">When Fu Jen Catholic University (FJCU) was reestablished in Taiwan in 1963, the College of Law was also established and later transformed into a School of Law. At present the School of Law is composed of three departments: Department of Law, Department of Financial and Economic Law, and Graduate Department of Law. It also has a Legal Service Center and publishes Fu Jen Law Review. It is a high-quality professional law college with a most complete learning system and community integration.</p>\n                </div>   ', '2024-09-09 05:25:53'),
(2, 'law', 'Introduction', '<div class=\"justify-text\"><p class=\"my-3\" style=\"display:inline;line-height:1;margin:0;padding:0;\">When Fu Jen Catholic University (FJCU) was reestablished in Taiwan in 1963, the College of Law was also established and later transformed into a School of Law. At present the School of Law is composed of three departments: Department of Law, Department of Financial and Economic Law, and Graduate Department of Law. It also has a Legal Service Center and publishes Fu Jen Law Review. It is a high-quality professional law college with a most complete learning system and community integration.</p></div>', '2024-09-09 05:47:14'),
(3, 'law', 'Introduction', '<img style=\"aspect-ratio:1239/1253;\" src=\"uploads/img_66de8bf2056e08.96013653.png\" width=\"1239\" height=\"1253\"><div class=\"justify-text\"><p class=\"my-3\" style=\"display:inline;line-height:1;margin:0;padding:0;\">When Fu Jen Catholic University (FJCU) was reestablished in Taiwan in 1963, the College of Law was also established and later transformed into a School of Law. At present the School of Law is composed of three departments: Department of Law, Department of Financial and Economic Law, and Graduate Department of Law. It also has a Legal Service Center and publishes Fu Jen Law Review. It is a high-quality professional law college with a most complete learning system and community integration.</p></div>', '2024-09-09 05:47:43'),
(4, 'law', 'Introduction', '<p><img style=\"aspect-ratio:1239/1253;\" src=\"uploads/img_66de8bf2056e08.96013653.png\" width=\"1239\" height=\"1253\"></p><div class=\"justify-text\"><p class=\"my-3\" style=\"display:inline;line-height:1;margin:0;padding:0;\">When Fu Jen Catholic University (FJCU) was reestablished in Taiwan in 1963, the College of Law was also established and later transformed into a School of Law. At present the School of Law is composed of three departments: Department of Law, Department of Financial and Economic Law, and Graduate Department of Law. It also has a Legal Service Center and publishes Fu Jen Law Review. It is a high-quality professional law college with a most complete learning system and community integration.</p></div>', '2024-09-09 05:47:47'),
(5, 'law', 'Introduction', '<p>&nbsp;</p><div class=\"justify-text\"><p class=\"my-3\" style=\"display:inline;line-height:1;margin:0;padding:0;\"><img class=\"image_resized\" style=\"aspect-ratio:1239/1253;width:18.71%;\" src=\"uploads/img_66de8bf2056e08.96013653.png\" width=\"1239\" height=\"1253\">When Fu Jen Catholic University (FJCU) was reestablished in Taiwan in 1963, the College of Law was also established and later transformed into a School of Law. At present the School of Law is composed of three departments: Department of Law, Department of Financial and Economic Law, and Graduate Department of Law. It also has a Legal Service Center and publishes Fu Jen Law Review. It is a high-quality professional law college with a most complete learning system and community integration.</p></div>', '2024-09-09 05:47:59'),
(6, 'law', 'Introduction', '<p>&nbsp;</p><div class=\"justify-text\"><p class=\"my-3\" style=\"display:inline;line-height:1;margin:0;padding:0;\"><img class=\"image_resized image-style-align-right\" style=\"aspect-ratio:1239/1253;width:18.71%;\" src=\"uploads/img_66de8bf2056e08.96013653.png\" width=\"1239\" height=\"1253\">When Fu Jen Catholic University (FJCU) was reestablished in Taiwan in 1963, the College of Law was also established and later transformed into a School of Law. At present the School of Law is composed of three departments: Department of Law, Department of Financial and Economic Law, and Graduate Department of Law. It also has a Legal Service Center and publishes Fu Jen Law Review. It is a high-quality professional law college with a most complete learning system and community integration.</p></div>', '2024-09-09 05:48:05'),
(7, 'law', 'Features', '<span class=\"my-3\">The School of Law of Fu Jen Catholic University is a pivotal center of law in Taiwan. In addition to cultivating students\' legal knowledge, it also cultivates legal talents with equal emphasis on both knowledge and specialty. Also emphasized are the development of moral and academic qualities through various educational methods such as holistic education, legal ethics, service learning, and cooperation between industry and university. At the same time, the School emphasizes the promotion of foreign language ability, broadens the macro-international vision, promotes a plan of fostering elites, and contributes to the country by combining theory and practice.</span>', '2024-09-09 05:50:56'),
(8, 'law', 'introduction', '<p>&nbsp;</p><div class=\"justify-text\"><p class=\"my-3\" style=\"display:inline;line-height:1;margin:0;padding:0;\"><img class=\"image_resized image-style-align-right\" style=\"aspect-ratio:1239/1253;width:18.71%;\" src=\"uploads/img_66de8bf2056e08.96013653.png\" width=\"1239\" height=\"1253\">When Fu Jen Catholic University (FJCU) was reestablished in Taiwan in 1963, the College of Law was also established and later transformed into a School of Law. At present the School of Law is composed of three departments: Department of Law, Department of Financial and Economic Law, and Graduate Department of Law. It also has a Legal Service Center and publishes Fu Jen Law Review. It is a high-quality professional law college with a most complete learning system and community integration.</p></div>', '2024-09-09 05:57:03'),
(9, 'law', 'introduction', '<p>&nbsp;</p><div class=\"justify-text\"><p class=\"my-3\" style=\"display:inline;line-height:1;margin:0;padding:0;\"><img class=\"image_resized image-style-align-right\" style=\"aspect-ratio:1239/1253;width:18.71%;\" src=\"uploads/img_66de8bf2056e08.96013653.png\" width=\"1239\" height=\"1253\">When Fu Jen Catholic University (FJCU) was reestablished in Taiwan in 1963, the College of Law was also established and later transformed into a School of Law. At present the School of Law is composed of three departments: Department of Law, Department of Financial and Economic Law, and Graduate Department of Law. It also has a Legal Service Center and publishes Fu Jen Law Review. It is a high-quality professional law college with a most complete learning system and community integration.</p></div>', '2024-09-09 06:03:20'),
(10, 'law', 'features', '<p><span class=\"my-3\">The School of Law of Fu Jen Catholic University is a pivotal center of law in Taiwan. In addition to cultivating students\' legal knowledge, it also cultivates legal talents with equal emphasis on both knowledge and specialty. Also emphasized are the development of moral and academic qualities through various educational methods such as holistic education, legal ethics, service learning, and cooperation between industry and university. At the same time, the School emphasizes the promotion of foreign language ability, broadens the macro-international vision, promotes a plan of fostering elites, and contributes to the country by combining theory and practice.</span></p>', '2024-09-09 06:04:19'),
(11, 'law', 'introduction', '<p>&nbsp;</p><div class=\"justify-text\"><p class=\"my-3\" style=\"display:inline;line-height:1;margin:0;padding:0;\"><img class=\"image_resized image-style-align-right\" style=\"aspect-ratio:1239/1253;width:18.71%;\" src=\"uploads/img_66de8bf2056e08.96013653.png\" width=\"1239\" height=\"1253\">When Fu Jen Catholic University (FJCU) was reestablished in Taiwan in 1963, the College of Law was also established and later transformed into a School of Law. At present the School of Law is composed of three departments: Department of Law, Department of Financial and Economic Law, and Graduate Department of Law. It also has a Legal Service Center and publishes Fu Jen Law Review. It is a high-quality professional law college with a most complete learning system and community integration.</p></div>', '2024-09-09 06:04:21'),
(12, 'law', 'introduction', '<p>&nbsp;</p><div class=\"justify-text\"><p class=\"my-3\" style=\"display:inline;line-height:1;margin:0;padding:0;\"><img class=\"image_resized image-style-align-right\" style=\"aspect-ratio:1239/1253;width:18.71%;\" src=\"uploads/img_66de8bf2056e08.96013653.png\" width=\"1239\" height=\"1253\">When Fu Jen Catholic University (FJCU) was reestablished in Taiwan in 1963, the College of Law was also established and later transformed into a School of Law. At present the School of Law is composed of three departments: Department of Law, Department of Financial and Economic Law, and Graduate Department of Law. It also has a Legal Service Center and publishes Fu Jen Law Review. It is a high-quality professional law college with a most complete learning system and community integration.</p></div>', '2024-09-09 06:04:45'),
(13, 'law', 'introduction', '<p>&nbsp;</p><div class=\"justify-text\"><p class=\"my-3\" style=\"display:inline;line-height:1;margin:0;padding:0;\">When Fu Jen Catholic University (FJCU) was reestablished in Taiwan in 1963, the College of Law was also established and later transformed into a School of Law. At present the School of Law is composed of three departments: Department of Law, Department of Financial and Economic Law, and Graduate Department of Law. It also has a Legal Service Center and publishes Fu Jen Law Review. It is a high-quality professional law college with a most complete learning system and community integration.</p></div>', '2024-09-09 06:39:24'),
(14, 'law', 'introduction', '<div class=\"justify-text\"><p class=\"my-3\" style=\"display:inline;line-height:1;margin:0;padding:0;\">When Fu Jen Catholic University (FJCU) was reestablished in Taiwan in 1963, the College of Law was also established and later transformed into a School of Law. At present the School of Law is composed of three departments: Department of Law, Department of Financial and Economic Law, and Graduate Department of Law. It also has a Legal Service Center and publishes Fu Jen Law Review. It is a high-quality professional law college with a most complete learning system and community integration.</p></div>', '2024-09-09 06:39:29');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `study_packages`
--
ALTER TABLE `study_packages`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `study_packages`
--
ALTER TABLE `study_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
