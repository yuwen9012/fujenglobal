-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-12 14:08:50
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
-- 資料表結構 `study_packages_content`
--

CREATE TABLE `study_packages_content` (
  `id` int(11) NOT NULL,
  `college_id` int(11) DEFAULT NULL,
  `title_id` int(11) DEFAULT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `study_packages_content`
--

INSERT INTO `study_packages_content` (`id`, `college_id`, `title_id`, `content`, `created_at`) VALUES
(1, 1, 1, '<div class=\"row align-items-start\">\r\n            <div class=\"col-md-6\">\r\n                <h3 class=\"my-3 fw-semibold\">Introduction</h3>\r\n                <div class=\"justify-text\">\r\n                    <span>The Bachelor’s Program in Interdisciplinary Studies (BPIS) allows students to explore multiple areas of study such as business management, global studies, and sustainability. Throughout this dynamic program, students can tailor their coursework to fit their academic and career goals with real-world learning opportunities. To explore various areas of interest in depth, students will engage in project-based learning through faculty-supervised projects and work closely with supervisory committee members from various academic units. Students will possess both theoretical knowledge and practical skills that will help them solve global challenges. </span>\r\n                </div>    \r\n            </div>\r\n            \r\n            <div class=\"col-md-6\">\r\n                <img src=\"images/study-package/bpis/bpis1.jpg\" class=\"container-fluid\">\r\n            </div>\r\n            \r\n        </div>', '2024-09-12 05:58:24'),
(2, 1, 2, ' <div class=\"row align-items-start\">\r\n            \r\n            <div class=\"col-md-6 order-2 order-md-1\">\r\n                <img src=\"images/study-package/bpis/bpis2.jpg\" class=\"container-fluid\">\r\n            </div>\r\n            \r\n            <div class=\"col-md-6 order-1 order-md-2\">\r\n                <h3 class=\"my-3 fw-semibold\">Features</h3>\r\n                <div class=\"justify-text\">\r\n                    <p class=\"my-3 fw-semibold\">International Experience</p>\r\n                    <p class=\"my-3\">Fostering a global mindset is essential among students. With a diverse cohort of students spanning over 15 countries, students can broaden their cross-functional knowledge, master global leadership and intercultural communication skills in a collaborative learning environment.</p>\r\n                    <div class=\"collapse\" id=\"collapseBpisFeatu\">\r\n                        <p class=\"mt-3 fw-semibold\">Industry-Academia Collaboration</p>\r\n                        <p class=\"my-3\">To prepare students toward a successful career, students will benefit from experiential learning opportunities like engaging in industry-based projects and international cultural exchanges.</p>\r\n                        <p class=\"mt-3 fw-semibold\">Innovation and Creativity</p>\r\n                        <p class=\"my-3\">Through the lens of innovation and creativity, students can approach challenges from multiple angles to generate more comprehensive solutions to address global issues such as climate change.</p>\r\n                    </div>\r\n                    <a id=\"read-more-link-bpis-featu\" data-bs-toggle=\"collapse\" href=\"#collapseBpisFeatu\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseBpisFeatu\">Read more...</a>\r\n                </div>    \r\n            </div>\r\n        </div>', '2024-09-12 06:01:41'),
(3, 1, 3, '<div class=\"row align-items-start\">\r\n            <div class=\"col-md-12\">\r\n                <h3 class=\"my-3 fw-semibold\">Academic Module & Study Package</h3>\r\n                <div class=\"justify-text\">\r\n                    <p class=\"my-3\">There are three tracks that students can choose from:</p>\r\n                    <ul class=\"decimal-list\">\r\n                        <li>\r\n                            Global Management & Global Studies\r\n                        </li>\r\n                        <li>\r\n                            Global Management & Global Sustainability\r\n                        </li>\r\n                        <li>\r\n                            Global Management & Global Sustainability\r\n                        </li>\r\n                    </ul>\r\n                </div>\r\n            </div>\r\n            <!--\r\n            <div class=\"col-md-6\">\r\n                <img src=\"images/study-package/bpis/.jpg\" class=\"container-fluid\">\r\n            </div>\r\n            -->\r\n        </div>', '2024-09-12 06:01:41'),
(4, 1, 4, ' <div class=\"row align-items-start\">\r\n            <!--\r\n            <div class=\"col-md-6 order-2 order-md-1\">\r\n                <img src=\"images/study-package/bpis-art/.jpg\" class=\"container-fluid\">\r\n            </div>-->\r\n            <div class=\"col-md-12 order-1 order-md-2\">\r\n                <h3 class=\"my-3 fw-semibold\">Course Structure & Description</h3>\r\n                <div class=\"justify-text\">\r\n                    <p class=\"my-3\">Core courses:</p>\r\n                    <p class=\"my-3 fw-semibold\">Global Creative Industry</p>\r\n                    <span>This course offers an introduction to the creative industries and the conditions that shape creative industries. The factors that shape the contemporary creative industry landscape include policy frameworks, socio-cultural, economic, and technological factors. </span>\r\n                    <div class=\"collapse\" id=\"collapseBpisCsd\">\r\n                        <span>In addition, how creative projects and products are created, funded, and circulated will be examined. Topics investigated include but are not limited to: creative entrepreneurship, creative economy, creative marketing, and cultural production system. Students will develop critical skills in assessing the contemporary operations of creative industries.</span>\r\n                        <p class=\"mt-3 fw-semibold\">International Relations</p>      \r\n                        <p class=\"my-3\">The goal of class:</p>\r\n                        <ul class=\"decimal-list\">\r\n                            <li>\r\n                                Analyze and understand the major themes of international relations and global politics\r\n                            </li>\r\n                            <li>\r\n                                Develop an appreciation of theory and its utility in the study and practice of International Relations\r\n                            </li>\r\n                            <li>\r\n                                 Improve critical thinking and writing skills\r\n                            </li>\r\n                            <li>\r\n                                Demonstrate the ability to describe the social, political, and economic forces that influence social behavior and the global system\r\n                                Use knowledge of international affairs in a practical problem-solving way to address issues of immediate international concern.\r\n                            </li>\r\n                        </ul>\r\n                        <p class=\"mt-3 fw-semibold\">Global Business Case Analysis</p>\r\n                        <p class=\"my-3\">This course will allow students to learn the fundamental theories and concepts of case study analysis and methods. In addition to the application of theoretical concepts, students will thoroughly assess the most appropriate action of the given situation and understand the ramifications of their decisions. Both international and local business cases of a particular business or management issue will be discussed. The categories of the case studies include: entrepreneurship, leadership, ethics, strategy, and sustainability case studies.</p>\r\n                    </div>\r\n                    <a id=\"read-more-link-bpis-csd\" data-bs-toggle=\"collapse\" href=\"#collapseBpisCsd\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseBpisCsd\">Read more...</a>\r\n                </div>\r\n            </div>\r\n        </div>', '2024-09-12 06:01:41'),
(5, 1, 5, '<div class=\"row align-items-start\">\r\n            <div class=\"col-md-12\">\r\n                <h3 class=\"my-3 fw-semibold\">Learning Outcomes</h3>\r\n                <div class=\"justify-text\">\r\n                    <p class=\"my-3\">BPIS equips students with the skills and knowledge needed to address global challenges by fostering critical thinking, adaptability, creativity, and a holistic approach to problem- solving. Graduates of BPIS are well-equipped to enter various industries and pursue diverse career paths. </p>\r\n                    <p class=\"my-3\">While gaining a practical understanding of business management, students learn to be global citizens, leaders, innovators, and entrepreneurs.</p>\r\n                </div>    \r\n            </div>\r\n            <!--\r\n            <div class=\"col-md-6\">\r\n                <img src=\"images/study-package/bpis/.jpg\" class=\"container-fluid\">\r\n            </div>-->\r\n        </div>', '2024-09-12 06:01:41'),
(6, 1, 6, '<div class=\"row align-items-start\">\r\n            <!--\r\n            <div class=\"col-md-6 order-2 order-md-1\">\r\n                <img src=\"images/study-package/bpis/.jpg\" class=\"container-fluid\">\r\n            </div>-->\r\n            <div class=\"col-md-12 order-1 order-md-2\">\r\n                <h3 class=\"my-3 fw-semibold\">Faculty Information</h3>\r\n                <div class=\"justify-text\">\r\n                    <p class=\"mt-3 fw-semibold\">Dr. Ariana Chang </p>\r\n                    <span>Having spent her formative years in Vancouver and San Francisco, Ariana Chang is currently based in Taipei. She has been a faculty member in the Business Administration Department at Fu Jen Catholic University. Her research interests include corporate social responsibility (CSR), sustainable development, and responsible leadership. Given her multidisciplinary approach to her studies, she is regularly invited for talks on CSR and sustainability. She is a monthly columnist for CSR @ CommonWealth (leading CSR platform in Taiwan). Previously, she was a lecturer for New Taipei City’s Social Enterprise Development Center.</span>\r\n                    <div class=\"collapse\" id=\"collapseBpisFi\">\r\n                        <span>Ariana obtained her Ph.D. in Business Administration from Fu Jen Catholic University with a Phi Tau Phi honors. She also obtained M.Mus. and B.Mus. degrees from the University of British Columbia. In her spare time, she enjoys music, reading, fashion, and art history.</span>\r\n                        <p class=\"mt-3 fw-semibold\">Dr. Adolfo Wu </p>\r\n                        <p class=\"my-3\">Dr. Yin Shi Wu was a part-time Lecturer at University of Al Azhar Indonesia (UAI), Jakarta. He finished the Erasmus Mundus Master Program and obtained Ph.D. Degree at University Complutense of Madrid. His research interests include International Political Economy, International Organizations, China – Latin America, Europe, and Latin American Integration. In the past, he was assistant professor for International Business and International Relations courses in the English-taught program at other universities in Taiwan.</p>\r\n                        <p class=\"mt-3 fw-semibold\">Dr. Raymond Yen </p>\r\n                        <p class=\"my-3\">Research Interests: General management, business policy</p>\r\n                    </div>\r\n                    <a id=\"read-more-link-Bpis-fi\" data-bs-toggle=\"collapse\" href=\"#collapseBpisFi\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseBpisFi\">Read more...</a>\r\n                </div>\r\n            </div>\r\n        </div>', '2024-09-12 06:01:41'),
(7, 1, 7, '<div class=\"row align-items-start\">\r\n            <div class=\"col-12\">\r\n                <h3 class=\"my-3 fw-semibold\">Resources & Facilities</h3>\r\n                <div class=\"justify-text\">\r\n                    <p class=\"my-3\">Students will have the opportunity to access career support services through industry networking activities, coaching, mentorship, company information sessions, and many more. At BPIS, students will not only work with faculty but industry professionals as well. </p>\r\n                </div>    \r\n            </div>\r\n        </div>', '2024-09-12 06:01:41'),
(8, 1, 8, '<h3 class=\"my-3 fw-semibold\">Office Website</h3>\r\n        <a href=\"https://bpis.fju.edu.tw/\" target=\"_blank\">https://bpis.fju.edu.tw/</a>', '2024-09-12 06:01:41'),
(9, 1, 9, '<h3 class=\"my-3 fw-semibold\">Contact Information</h3>\r\n        <p class=\"mt-3 fw-semibold\">Chair</p>\r\n        <p class=\"my-3\">Associate Professor, Ariana Chang</p>\r\n        <p class=\"my-3\">Tel: 886-2-2905-3099</p>\r\n        <p class=\"my-3\">Email: 140517@mail.fju.edu.tw</p>\r\n        <p class=\"mt-3 fw-semibold\">Secretary</p>\r\n        <p class=\"my-3\">Melody</p>\r\n        <p class=\"my-3\">Tel: 886-2-2905-6315</p>\r\n        <p class=\"my-3\">Email: bpis@mail.fju.edu.tw</p>', '2024-09-12 06:01:41');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `study_packages_content`
--
ALTER TABLE `study_packages_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `college_id` (`college_id`),
  ADD KEY `title_id` (`title_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `study_packages_content`
--
ALTER TABLE `study_packages_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `study_packages_content`
--
ALTER TABLE `study_packages_content`
  ADD CONSTRAINT `study_packages_content_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `study_packages_college` (`college_id`),
  ADD CONSTRAINT `study_packages_content_ibfk_2` FOREIGN KEY (`title_id`) REFERENCES `study_packages_title` (`title_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
