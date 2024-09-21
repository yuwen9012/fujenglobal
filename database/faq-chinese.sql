-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-21 18:15:35
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

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
-- 資料表結構 `faq-chinese`
--

CREATE TABLE `faq-chinese` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `reply` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `faq-chinese`
--

INSERT INTO `faq-chinese` (`id`, `type`, `question`, `reply`) VALUES
(1, 'Application', 'How long does it take before my application is accepted?', 'The application screening process needs 3-5 working days (if all the required documents have been collected). The acceptance certificate will be issued, at the earliest, three months before the semester if the application is accepted.'),
(2, 'Application', 'How early can I submit my application?', 'The application opens six months before the semester.'),
(3, 'Application', 'When is the application deadline?', 'The application deadline is 45 days before the semester, namely July 15 (the deadline for the fall term), October 15 (the deadline for the winter term), January 15 (the deadline for the spring term), and April 15 (the deadline for the summer term).'),
(4, 'Application', 'Will the school send me the original acceptance certificate (physical copy)?', 'We will email you to ask whether you want the certificate to be mailed by post. Please reply to the email and provide the mailing address. We only provide the electronic file for those who do not need to apply for a visitor visa for studying Chinese purpose.'),
(5, 'Application', 'Can I apply for the center if the deadline has passed?', 'We will put you on the waiting list if your application comes after the deadline. However, we cannot promise that your application will be successful.'),
(6, 'Application', 'When should I pay the tuition?', 'If you are applying for a visa for studying Chinese purpose, we will provide the tuition bill after receiving a copy of the visa; for those who do not need to apply for the visa (for studying Chinese purpose), we will provide the tuition bill after the placement test.'),
(7, 'Chinese course', 'When do I know my class schedule?', 'The class schedule is set to be released the day before the semester opening. We will inform you if the schedule is to be released on a different day. Please check your email box regularly.'),
(8, 'Chinese course', 'Can I choose the time of the class?', 'The time of the class is decided by the school.'),
(9, 'Chinese course', 'Can I choose the class level?', 'Your class level is decided according to your placement test result or the TOCFL score report.'),
(10, 'Chinese course', 'Must I take the placement test?', 'We will email you to ask whether you want to participate in the placement test. You can skip the test if you are an absolute Chinese language beginner or want the school to arrange your class based on your TOCFL scores (a copy of the score report is required). Whatever your decision is, please reply to this email.'),
(11, 'Chinese course', 'Can my class hours be converted to credit(s)?', 'The CCLC of FJCU provides the attendance record on which the number of attendance hours is presented. Whether the hours can be converted to credit(s) is solely decided by the student’s home institution.'),
(12, 'Chinese course', 'Will I receive the transcript and certificate after the class?', 'You can apply for the transcript from the office every semester. You can apply for the corresponding certificate if you pass the final exams of the following levels: elementary-high, intermediate-high, and advanced-low (or above).'),
(13, 'Dormitory', 'Can I apply for the dormitory?', 'Please check the box “on campus” on the application form if you want to apply for the dormitory.'),
(14, 'Dormitory', 'Can I choose which dormitory to book?', 'No, non-degree Mandarin students at the FJCU can only book the Kewu male and Yimei female dormitories. The dormitory reservation must be made by the CCLC but not by the students.'),
(15, 'Dormitory', 'Can I choose the room type?', 'Only two room types are available for the non-degree Mandarin students at FJCU: twin rooms for the Kewu male dormitory and quadruple rooms for the Yimei female dormitory.'),
(16, 'Dormitory', 'What do the rooms look like?', 'Please refer to the dormitory websites.<br><a href=\"https://reurl.cc/ZV4E4a\" target=\"_blank\">Kewu Dormitory</a><br><a href=\"https://reurl.cc/WN0y0y\" target=\"_blank\">Yimei Dormitory</a>'),
(17, 'Dormitory', 'When do I know whether my dormitory reservation is successful?', 'We will inform you approximately one month before the semester.'),
(18, 'Dormitory', 'When can I check in/check out?', 'The dormitory stay periods are slightly different each term. Generally, you can check in to the dormitory two days (inclusive) before the semester and must check out the dormitory two days (inclusive) after the final exam.'),
(19, 'Dormitory', 'Do I need to move out of the dormitory during term break (if I register for more than one term)?', 'You do not need to move out during term break as long as you are still a registered student of the CCLC.'),
(20, 'Dormitory', 'Will the school find accommodation off campus for me if I fail to book the dormitory?', 'We can provide information on the apartments for rent near the campus if requested. However, students must arrange their own accommodation off campus.');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `faq-chinese`
--
ALTER TABLE `faq-chinese`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `faq-chinese`
--
ALTER TABLE `faq-chinese`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
