-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-07-30 08:59:19
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
-- 資料表結構 `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `reply` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `faq`
--

INSERT INTO `faq` (`id`, `type`, `question`, `reply`) VALUES
(1, 'Choose your units', 'What is the “Study Package”?', 'Our Study Abroad Program provides limitless self-selection opportunity. Feel free to choose any course you want flexibly and learn whatever you like at FJCU for only half the average tuition fee.'),
(2, 'Choose your units', 'Which Study Package should I choose?', 'Please refer <a href=\"study-package.php\">Study Package</a>, find the package that suits you best.'),
(3, 'Application', 'What are the costs?', '<span class=\"fw-semibold my-1\">Registration fee</span> - USD 150<br><span class=\"fw-semibold my-1\">Program fee</span> - USD 3,500'),
(4, 'Application', 'How do I apply for the Study Abroad Program?', 'Please refer <a href=\"how-to-apply.php\">How to apply</a>.'),
(5, 'Application', 'What are the application deadlines?', 'Visit our deadlines and decisions page to learn more about our application deadlines.'),
(6, 'Application', 'What is the deadline of submitting documents?', 'Early Decision Deadline: November 1<br>Regular Decision Deadline: January 1<br>Visit our deadlines and decisions page to learn more about our application deadlines.'),
(7, 'Application', 'What documents should I submit for the application?', 'A detailed list of what is necessary, whether you are a high school, transfer, or international student, can be found on our application information page.'),
(8, 'Application', 'How do I know if my application is being processed?', 'Once you have applied to FJCU and your documents have been matched to your account, you will receive an email with your FJCU ID number and instructions on how to set up your Application Status Check account. Through the Application Status Check, you will be able to verify your personal information, view the required materials, and check on deadlines.'),
(9, 'Application', 'When will I receive my admission decision?', 'Your notification time will vary depending on how you applied:<br>Early Decision applicants will receive a decision online by January 1<br>Regular Decision applicants will receive a decision online by April 1'),
(10, 'Before Enter Taiwan', 'What are enrollment documents?', 'Pease submit the following documents after you\'ve been admitted. Save full-color scanned copies of the documents below in a single PDF file and send it to the following email addresses before the deadlines: XXX@mail.fju.edu.tw<br>FJCU will email the Acceptance Letter (soft copy) only after receiving documents 1 and 2 below.<p class=\"fw-semibold my-1\">Document 1 Health Certificate and Medical Reports (submission deadline of Fall 2024: 7/15. If unable to submit in time, please email us in advance to inform us of the expected submission date.)</p>1. FJCU uses the Health Certificate for Residence Application issued by the Ministry of Health and Welfare. Please make sure to use that form for your medical examination.<br>2. Please complete all sections of the form. Copies of all related medical reports must also be submitted.<p class=\"fw-semibold my-1\">Document 2 Emergency Authorization Form (submission deadline of Fall 2024: 7/15)</p>1. Download the Emergency Authorization Form.<p class=\"fw-semibold my-1\">Document 3 International accident and medical insurance (shall be submitted at least two weeks before your arrival)</p>1. Before leaving for Taiwan, you must purchase insurance from your country to cover your entire stay in Taiwan.<br>2. Insurance must cover the following:<br>◆Accidental death or disability<br>◆ Medical treatment for accidents and sickness (outpatient and inpatient treatment)<br>◆ Emergency repatriation and transport<br>The University does not provide insurance to exchange students. Please ensure that you purchase sufficient coverage. We strongly urge students purchase more than the bare minimum – better safe than sorry!'),
(11, 'Before Enter Taiwan', 'What are the visa and entry requirements?', '1. Exchange students who study for one semester must apply for a Visitor Visa. Please purchase your plane tickets after you have obtained the <a href=\"https://www.boca.gov.tw/np-147-2.html\" target=\"_blank\">visitor visa</a> so that you know what date you must depart Taiwan. Students enrolled for the fall semester must depart Taiwan in January; students enrolled for the spring semester must depart Taiwan in June.<br>2. Exchange students must not enter Taiwan on a landing visa. Exchange students are ineligible for the visa waiver program.<br><p class=\"fw-semibold my-1\">【African swine fever】</p>1. Help prevent the spread of African swine fever by following the regulations below:<br>◆ Do not purchase meat products abroad and bring them to Taiwan.<br>◆ Do not purchase meat products online from a source abroad.<br>◆ Do not visit livestock farms.<br>2. Travelers may be fined up to NT$1,000,000 for purchasing meat products while abroad and bringing them to Taiwan. (Vacuum-sealed meat products are likewise prohibited). The illegal shipping, online purchase, or smuggling of meat products into Taiwan could result in a jail sentence of up to seven years, plus an additional fine of up to NT$3,000,000.<br>3. Please click on the links below for more details:<br>◆ <a href=\"http://www.oie.int/en/animal-health-in-the-world/animal-diseases/african-swine-fever/\" target=\"_blank\">World Organisation for Animal Health (OIE)</a><br>◆ <a href=\"https://asf.baphiq.gov.tw/\" target=\"_blank\">Bureau of Animal and Plant Health Inspection and Quarantine</a> in Taiwan (in Chinese only)'),
(12, 'Live in Taiwan', 'What are the costs for Living?', '<p class=\"fw-semibold my-1\">Accommodation fee</p>On-campus dormitory: free；Off-campus: TBC<p class=\"fw-semibold my-1\">Living expenses</p><a href=\"https://www.numbeo.com/cost-of-living/compare_cities.jsp?country1=Taiwan&country2=Taiwan&city1=New+Taipei+City&city2=Taipei&tracking=getDispatchComparison\" target=\"_blank\">Comparison between New Taipei City and Taipei</a><p class=\"fw-semibold my-1\">Transportation fee</p>Taipei MRT: NT$ 20-65 per trip<br>Taoyuan MRT: NT$ 30-160 per trip<br>Bus fare in Taipei: NT$15 per trip'),
(13, 'Live in Taiwan', 'Can I withdraw cash in Taiwan?', 'If you would like to use your ATM or credit card to withdraw cash in Taiwan, please request your card provider to enable the international function on the card before departing your country.'),
(14, 'Live in Taiwan', 'Can I use my SIM card in Taiwan?', 'Please double check with your mobile service provider that your phone is compatible with SIM cards from Taiwan.'),
(15, 'Live in Taiwan', 'Can I work or have an internship in Taiwan?', 'No. All exchange students are not permitted to work or do internships. Students must not engage in activities inconsistent with the purpose of student exchange program and should abide by the relevant epidemic prevention regulations of the government.'),
(16, 'Live in Taiwan', 'Is there a buddy program?', '1. Every exchange student is assigned a buddy. Buddies are FJCU student volunteers who help you with matters related to daily life and studies (not including pick-up at the airport).<br>2. The International Student Center (ISC) will automatically assign you a buddy; there is no need to apply. ISC will email you their contact information one month before the semester begins.'),
(17, 'Live in Taiwan', 'Are there Mandarin courses?', '1. Courses are six hours a week for nine to twelve weeks. They are not for credit.<br>2. Courses are free. A deposit is required when making an application. The deposit will be returned if you miss fewer than twelve hours of the course over the semester.<br>3. Rules and important dates will be announced during orientation.'),
(18, 'Live in Taiwan', 'How do I get to campus?', '<p class=\"fw-semibold my-1\">Fu Jen</p>1. Address: 510 Zhongzheng Rd., Xinzhuang Dist., New Taipei City 242062, Taiwan (R.O.C.)<br>2. The University’s <a href=\"http://goo.gl/maps/wM7aaBSArnS2\" target=\"_blank\">main entrance</a> is located on Zhongzheng Road. The <a href=\"https://goo.gl/maps/NGHUMpijrr22\" target=\"_blank\">rear entrance</a> is located on Santai Road.<br>3. <a href=\"http://idsa.oie.docs.fju.edu.tw/Campus Map.jpg\" target=\"_blank\">Campus Map</a><p class=\"fw-semibold my-1\">From Taoyuan International Airport</p>1. By Taxi: The taxi ride usually takes 1 hour and costs approximately NT$1,300.<br>2. MRT: Take the Taoyuan MRT to A2 Sanchong Station, then transfer to the Taipei MRT orange line and get off at O19 Fu Jen University Station. The <a href=\"http://goo.gl/maps/wM7aaBSArnS2\" target=\"_blank\">main entrance</a> to the University is right outside Exit 1. The ride takes about 1~1.5 hours.<p class=\"fw-semibold my-1\">From Taipei Songshan Airport</p>1. MRT: Take the orange line to O19 Fu Jen University Station. The <a href=\"http://goo.gl/maps/wM7aaBSArnS2\" target=\"_blank\">main entrance</a> to the University is right outside Exit 1. The ride takes about 1 hour<p class=\"fw-semibold my-1\">Websites</p>1. <a href=\"http://www.taoyuan-airport.com/english/transportation\" target=\"_blank\">Taoyuan International Airport</a><br>2. <a href=\"http://www.tsa.gov.tw/tsa/en/page.aspx?id=1059\" target=\"_blank\">Songshan Airport</a><br>3. <a href=\"https://www.tymetro.com.tw/tymetro-new/en/index.php\" target=\"_blank\">Metro Taoyuan (MRT)</a><br>4. <a href=\"https://english.metro.taipei/Default.aspx\" target=\"_blank\">Metro Taipei (MRT)</a>'),
(19, 'Contact us', 'How do I get in touch with admission team?', 'FJCU’s admissions staff can be found at <a href=\"contact-us\">Contact us</a>. Please feel free to email (oiesa@mail.fju.edu.tw) with any questions.'),
(20, 'Contact us', 'How do I contact advisor of each college?', 'Please refer <a href=\"contact-us\">Contact us</a>.'),
(21, 'Contact us', 'How should I arrange my accommodation?', 'Please refer <a href=\"accommodation.php\">Accommodation</a>.'),
(22, 'Contact us', 'How can I receive more information?', 'You can fill out our Request Information Form and receive updates, advice, and information about FJCU.');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
