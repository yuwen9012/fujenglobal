-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-10-01 09:45:44
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
-- 資料表結構 `faq_qa`
--

CREATE TABLE `faq_qa` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `reply` varchar(2000) NOT NULL,
  `status` varchar(10) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `faq_qa`
--

INSERT INTO `faq_qa` (`id`, `tid`, `question`, `reply`, `status`, `update_user`, `update_time`) VALUES
(1, 1, 'What is the “Study Package”?', 'Our Study Abroad Program provides limitless self-selection opportunity. Feel free to choose any course you want flexibly and learn whatever you like at FJCU for only half the average tuition fee.', '使用中', '郭政億', '2024-09-30 11:58:24'),
(2, 1, 'Which Study Package should I choose?', 'Please refer <a href=\"study-package.php\">Study Package</a>, find the package that suits you best.', '使用中', '郭政億', '2024-09-30 11:58:24'),
(3, 2, 'What are the costs?', '<span class=\"fw-semibold my-1\">Registration fee</span> - USD 150<br><span class=\"fw-semibold my-1\">Program fee</span> - USD 3,500', '使用中', '郭政億', '2024-09-30 11:58:24'),
(4, 2, 'How do I apply for the Study Abroad Program?', 'Please refer <a href=\"how-to-apply.php\">How to apply</a>.', '使用中', '郭政億', '2024-09-30 11:58:24'),
(5, 2, 'What are the application deadlines?', 'Visit our deadlines and decisions page to learn more about our application deadlines.', '使用中', '郭政億', '2024-09-30 11:58:24'),
(6, 2, 'What is the deadline of submitting documents?', 'Early Decision Deadline: November 1<br>Regular Decision Deadline: January 1<br>Visit our deadlines and decisions page to learn more about our application deadlines.', '使用中', '郭政億', '2024-09-30 11:58:24'),
(7, 2, 'What documents should I submit for the application?', 'A detailed list of what is necessary, whether you are a high school, transfer, or international student, can be found on our application information page.', '使用中', '郭政億', '2024-09-30 11:58:24'),
(8, 2, 'How do I know if my application is being processed?', 'Once you have applied to FJCU and your documents have been matched to your account, you will receive an email with your FJCU ID number and instructions on how to set up your Application Status Check account. Through the Application Status Check, you will be able to verify your personal information, view the required materials, and check on deadlines.', '使用中', '郭政億', '2024-09-30 11:58:24'),
(9, 2, 'When will I receive my admission decision?', 'Your notification time will vary depending on how you applied:<br>Early Decision applicants will receive a decision online by January 1<br>Regular Decision applicants will receive a decision online by April 1', '使用中', '郭政億', '2024-09-30 11:58:24'),
(10, 3, 'What are enrollment documents?', 'Please submit the following documents after you\'ve been admitted. Save full-color scanned copies of the documents below in a single PDF file and send it to the following email addresses before the deadlines: oiesa@mail.fju.edu.tw<br>FJCU will email the Acceptance Letter (soft copy) only after receiving documents 1 and 2 below.<p class=\"fw-semibold my-1\">Document 1 Health Certificate and Medical Reports (submission deadline of Fall 2024: 7/15. If unable to submit in time, please email us in advance to inform us of the expected submission date.)</p>1. FJCU uses the <a href=\"http://idsa.oie.docs.fju.edu.tw/Admission%20Doc%201.pdf\" target=\"_blank\">Health Certificate for Residence Application</a> issued by the Ministry of Health and Welfare. Please make sure to use that form for your medical examination.<br>2. Please complete all sections of the form. Copies of all related medical reports must also be submitted.<p class=\"fw-semibold my-1\">Document 2 Emergency Authorization Form (submission deadline of Fall 2024: 7/15)</p>1. Download the <a href=\"http://idsa.oie.docs.fju.edu.tw/Admission%20Doc%202%20new.pdf\" target=\"_blank\">Emergency Authorization Form</a>.<p class=\"fw-semibold my-1\">Document 3 International accident and medical insurance (shall be submitted at least two weeks before your arrival)</p>1. Before leaving for Taiwan, you must purchase insurance from your country to cover your entire stay in Taiwan.<br>2. Insurance must cover the following:<br>◆ Accidental death or disability<br>◆ Medical treatment for accidents and sickness (outpatient and inpatient treatment)<br>◆ Emergency repatriation and transport<br>The University does not provide insurance to exchange students. Please ensure that you purchase sufficient coverage. We strongly urge students purchase more than the bare minimum – better safe than sorry!', '使用中', '郭政億', '2024-09-30 11:58:24'),
(11, 3, 'What are the visa and entry requirements?', '1. Exchange students who study for one semester must apply for a Visitor Visa. Please purchase your plane tickets after you have obtained the <a href=\"https://www.boca.gov.tw/np-147-2.html\" target=\"_blank\">visitor visa</a> so that you know what date you must depart Taiwan. Students enrolled for the fall semester must depart Taiwan in January; students enrolled for the spring semester must depart Taiwan in June.<br>2. Exchange students must not enter Taiwan on a landing visa. Exchange students are ineligible for the visa waiver program.<br><p class=\"fw-semibold my-1\">【African swine fever】</p>1. Help prevent the spread of African swine fever by following the regulations below:<br>◆ Do not purchase meat products abroad and bring them to Taiwan.<br>◆ Do not purchase meat products online from a source abroad.<br>◆ Do not visit livestock farms.<br>2. Travelers may be fined up to NT$1,000,000 for purchasing meat products while abroad and bringing them to Taiwan. (Vacuum-sealed meat products are likewise prohibited). The illegal shipping, online purchase, or smuggling of meat products into Taiwan could result in a jail sentence of up to seven years, plus an additional fine of up to NT$3,000,000.<br>3. Please click on the links below for more details:<br>◆ <a href=\"http://www.oie.int/en/animal-health-in-the-world/animal-diseases/african-swine-fever/\" target=\"_blank\">World Organisation for Animal Health (OIE)</a><br>◆ <a href=\"https://asf.aphia.gov.tw/\" target=\"_blank\">Bureau of Animal and Plant Health Inspection and Quarantine</a> in Taiwan (in Chinese only)', '使用中', '郭政億', '2024-09-30 11:58:24'),
(12, 4, 'What are the costs for Living?', '<p class=\"fw-semibold my-1\">Accommodation fee</p>On-campus dormitory: free；Off-campus: TBC<p class=\"fw-semibold my-1\">Living expenses</p><a href=\"https://www.numbeo.com/cost-of-living/compare_cities.jsp?country1=Taiwan&country2=Taiwan&city1=New+Taipei+City&city2=Taipei&tracking=getDispatchComparison\" target=\"_blank\">Comparison between New Taipei City and Taipei</a><p class=\"fw-semibold my-1\">Transportation fee</p>Taipei MRT: NT$ 20-65 per trip<br>Taoyuan MRT: NT$ 30-160 per trip<br>Bus fare in Taipei: NT$15 per trip', '使用中', '郭政億', '2024-09-30 11:58:24'),
(13, 4, 'Can I withdraw cash in Taiwan?', 'If you would like to use your ATM or credit card to withdraw cash in Taiwan, please request your card provider to enable the international function on the card before departing your country.', '使用中', '郭政億', '2024-09-30 11:58:24'),
(14, 4, 'Can I use my SIM card in Taiwan?', 'Please double check with your mobile service provider that your phone is compatible with SIM cards from Taiwan.', '使用中', '郭政億', '2024-09-30 11:58:24'),
(15, 4, 'Can I work or have an internship in Taiwan?', 'No. All exchange students are not permitted to work or do internships. Students must not engage in activities inconsistent with the purpose of student exchange program and should abide by the relevant epidemic prevention regulations of the government.', '使用中', '郭政億', '2024-09-30 11:58:24'),
(16, 4, 'Is there a buddy program?', '1. Every exchange student is assigned a buddy. Buddies are FJCU student volunteers who help you with matters related to daily life and studies (not including pick-up at the airport).<br>2. The International Student Center (ISC) will automatically assign you a buddy; there is no need to apply. ISC will email you their contact information one month before the semester begins.', '使用中', '郭政億', '2024-09-30 11:58:24'),
(17, 4, 'Are there Mandarin courses?', '1. Courses are six hours a week for nine to twelve weeks. They are not for credit.<br>2. Courses are free. A deposit is required when making an application. The deposit will be returned if you miss fewer than twelve hours of the course over the semester.<br>3. Rules and important dates will be announced during orientation.', '使用中', '郭政億', '2024-09-30 11:58:24'),
(18, 4, 'How do I get to campus?', '<p class=\"fw-semibold my-1\">Fu Jen</p>1. Address: 510 Zhongzheng Rd., Xinzhuang Dist., New Taipei City 242062, Taiwan (R.O.C.)<br>2. The University’s <a href=\"http://goo.gl/maps/wM7aaBSArnS2\" target=\"_blank\">main entrance</a> is located on Zhongzheng Road. The <a href=\"https://goo.gl/maps/NGHUMpijrr22\" target=\"_blank\">rear entrance</a> is located on Santai Road.<br>3. <a href=\"http://idsa.oie.docs.fju.edu.tw/Campus Map.jpg\" target=\"_blank\">Campus Map</a><p class=\"fw-semibold my-1\">From Taoyuan International Airport</p>1. By Taxi: The taxi ride usually takes 1 hour and costs approximately NT$1,300.<br>2. MRT: Take the Taoyuan MRT to A2 Sanchong Station, then transfer to the Taipei MRT orange line and get off at O19 Fu Jen University Station. The <a href=\"http://goo.gl/maps/wM7aaBSArnS2\" target=\"_blank\">main entrance</a> to the University is right outside Exit 1. The ride takes about 1~1.5 hours.<p class=\"fw-semibold my-1\">From Taipei Songshan Airport</p>1. MRT: Take the orange line to O19 Fu Jen University Station. The <a href=\"http://goo.gl/maps/wM7aaBSArnS2\" target=\"_blank\">main entrance</a> to the University is right outside Exit 1. The ride takes about 1 hour<p class=\"fw-semibold my-1\">Websites</p>1. <a href=\"http://www.taoyuan-airport.com/english/transportation\" target=\"_blank\">Taoyuan International Airport</a><br>2. <a href=\"http://www.tsa.gov.tw/tsa/en/page.aspx?id=1059\" target=\"_blank\">Songshan Airport</a><br>3. <a href=\"https://www.tymetro.com.tw/tymetro-new/en/index.php\" target=\"_blank\">Metro Taoyuan (MRT)</a><br>4. <a href=\"https://english.metro.taipei/Default.aspx\" target=\"_blank\">Metro Taipei (MRT)</a>', '使用中', '郭政億', '2024-09-30 11:58:24'),
(19, 5, 'How do I get in touch with admission team?', 'FJCU’s admissions staff can be found at <a href=\"contact-us\">Contact us</a>. Please feel free to email (oiesa@mail.fju.edu.tw) with any questions.', '使用中', '郭政億', '2024-09-30 11:58:24'),
(20, 5, 'How do I contact advisor of each college?', 'Please refer <a href=\"contact-us\">Contact us</a>.', '使用中', '郭政億', '2024-09-30 11:58:24'),
(21, 5, 'How should I arrange my accommodation?', 'Please refer <a href=\"accommodation.php\">Accommodation</a>.', '使用中', '郭政億', '2024-09-30 11:58:24'),
(22, 5, 'How can I receive more information?', 'You can fill out our Request Information Form and receive updates, advice, and information about FJCU.', '使用中', '郭政億', '2024-09-30 11:58:24');

-- --------------------------------------------------------

--
-- 資料表結構 `faq_type`
--

CREATE TABLE `faq_type` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `num_order` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `faq_type`
--

INSERT INTO `faq_type` (`id`, `type`, `num_order`, `status`, `update_user`, `update_time`) VALUES
(1, 'Choose your units', 1, '使用中', '郭政億', '2024-09-30 10:08:58'),
(2, 'Application', 2, '使用中', '郭政億', '2024-09-30 10:08:58'),
(3, 'Before Enter Taiwan', 3, '使用中', '郭政億', '2024-09-30 10:40:45'),
(4, 'Live in Taiwan', 4, '使用中', '郭政億', '2024-09-30 10:46:08'),
(5, 'Contact us', 5, '使用中', '郭政億', '2024-09-30 10:46:08');

-- --------------------------------------------------------

--
-- 資料表結構 `home_carousel`
--

CREATE TABLE `home_carousel` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `link` varchar(300) DEFAULT NULL,
  `target` varchar(10) DEFAULT NULL,
  `hidden` varchar(10) NOT NULL,
  `num_order` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `home_carousel`
--

INSERT INTO `home_carousel` (`id`, `name`, `image`, `link`, `target`, `hidden`, `num_order`, `status`, `update_user`, `update_time`) VALUES
(1, '第一張', '1 首頁-1coin.jpg', NULL, NULL, 'N', 1, '使用中', '郭政億', '2024-09-20 13:51:20'),
(2, '第二張', '1 首頁-2coin.jpg', NULL, NULL, 'N', 2, '使用中', '郭政億', '2024-09-20 13:51:20'),
(3, '第三張', '1 首頁-3coin.jpg', NULL, NULL, 'Y', 3, '使用中', '郭政億', '2024-09-20 13:51:20'),
(4, '第四張', '1 首頁-4coin.jpg', NULL, NULL, 'N', 4, '使用中', '郭政億', '2024-09-20 13:51:20'),
(5, '第五張', '1 首頁-5coin.jpg', NULL, NULL, 'N', 5, '使用中', '郭政億', '2024-09-20 13:51:20');

-- --------------------------------------------------------

--
-- 資料表結構 `home_introduction_image`
--

CREATE TABLE `home_introduction_image` (
  `id` int(11) NOT NULL,
  `position` varchar(10) NOT NULL,
  `image` varchar(300) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `home_introduction_image`
--

INSERT INTO `home_introduction_image` (`id`, `position`, `image`, `update_user`, `update_time`) VALUES
(1, '左上', '1 首頁-四格照-左上.jpg', '郭政億', '2024-09-22 19:01:20'),
(2, '右上', '1 首頁-四格照-右上.jpg', '郭政億', '2024-09-22 19:01:20'),
(3, '左下', '1 首頁-四格照-左下.jpg', '郭政億', '2024-09-22 19:01:20'),
(4, '右下', '1 首頁-四格照-右下.jpg', '郭政億', '2024-09-22 19:01:20');

-- --------------------------------------------------------

--
-- 資料表結構 `home_introduction_text`
--

CREATE TABLE `home_introduction_text` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `home_introduction_text`
--

INSERT INTO `home_introduction_text` (`id`, `title`, `content`, `update_user`, `update_time`) VALUES
(1, 'Fu Jen Catholic University', '(FJCU) is the top ranked private university in Taiwan, and is also on the THE Impact Rankings query of keywords for SDGs (Sustainable Development Goals), dedicating to improve social inclusion and environmental protection. FJCU is the only comprehensive university under the direct authority of the Holy See among Chinese-speaking countries with outstanding academic excellence.', '郭政億', '2024-09-22 18:35:26');

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

-- --------------------------------------------------------

--
-- 資料表結構 `program_introduction_image`
--

CREATE TABLE `program_introduction_image` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `hidden` varchar(10) NOT NULL,
  `num_order` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `program_introduction_image`
--

INSERT INTO `program_introduction_image` (`id`, `name`, `image`, `hidden`, `num_order`, `status`, `update_user`, `update_time`) VALUES
(1, '第一張', 'program1.jpg', 'N', 1, '使用中', '郭政億', '2024-09-28 23:38:38'),
(2, '第二張', 'program2.jpg', 'N', 2, '使用中', '郭政億', '2024-09-28 23:38:38');

-- --------------------------------------------------------

--
-- 資料表結構 `study_abroad_carousel`
--

CREATE TABLE `study_abroad_carousel` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `hidden` varchar(10) NOT NULL,
  `num_order` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `study_abroad_carousel`
--

INSERT INTO `study_abroad_carousel` (`id`, `name`, `image`, `hidden`, `num_order`, `status`, `update_user`, `update_time`) VALUES
(1, '第一張', 'SA黃色方塊1.jpg', 'N', 1, '使用中', '郭政億', '2024-09-20 13:58:37'),
(2, '第二張', 'SA黃色方塊2.jpg', 'N', 2, '使用中', '郭政億', '2024-09-20 13:58:38');

-- --------------------------------------------------------

--
-- 資料表結構 `study_abroad_introduction_text`
--

CREATE TABLE `study_abroad_introduction_text` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `update_user` varchar(10) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `study_abroad_introduction_text`
--

INSERT INTO `study_abroad_introduction_text` (`id`, `title`, `content`, `update_user`, `update_time`) VALUES
(1, 'Program Introduction', 'Fu Jen Catholic University (FJCU) is the leading private university in Taiwan and is featured in the THE Impact Rankings for Sustainable Development Goals (SDGs), committed to enhancing social inclusion and environmental conservation. While studying at FJCU, you can immerse yourself in the richness of traditional Chinese culture, gain a profound understanding of Taiwan\'s advanced technology sector, appreciate the beauty of Taiwan\'s scenery, and engage in international volunteer activities.', '郭政億', '2024-09-23 11:15:33');

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
-- 資料表索引 `faq_qa`
--
ALTER TABLE `faq_qa`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `faq_type`
--
ALTER TABLE `faq_type`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `home_carousel`
--
ALTER TABLE `home_carousel`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `home_introduction_image`
--
ALTER TABLE `home_introduction_image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `home_introduction_text`
--
ALTER TABLE `home_introduction_text`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `how2apply_checklist`
--
ALTER TABLE `how2apply_checklist`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `how2apply_qualification`
--
ALTER TABLE `how2apply_qualification`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `how2apply_timeline`
--
ALTER TABLE `how2apply_timeline`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `program_introduction_image`
--
ALTER TABLE `program_introduction_image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `study_abroad_carousel`
--
ALTER TABLE `study_abroad_carousel`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `study_abroad_introduction_text`
--
ALTER TABLE `study_abroad_introduction_text`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `study_abroad_scorer`
--
ALTER TABLE `study_abroad_scorer`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `faq_qa`
--
ALTER TABLE `faq_qa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `faq_type`
--
ALTER TABLE `faq_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `home_carousel`
--
ALTER TABLE `home_carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `home_introduction_image`
--
ALTER TABLE `home_introduction_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `home_introduction_text`
--
ALTER TABLE `home_introduction_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `how2apply_checklist`
--
ALTER TABLE `how2apply_checklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `how2apply_qualification`
--
ALTER TABLE `how2apply_qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `how2apply_timeline`
--
ALTER TABLE `how2apply_timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `program_introduction_image`
--
ALTER TABLE `program_introduction_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `study_abroad_carousel`
--
ALTER TABLE `study_abroad_carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `study_abroad_introduction_text`
--
ALTER TABLE `study_abroad_introduction_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `study_abroad_scorer`
--
ALTER TABLE `study_abroad_scorer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
