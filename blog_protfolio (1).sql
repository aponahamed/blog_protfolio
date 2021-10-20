-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 06:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_protfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_banner_headding` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_banner_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_banner_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_banner_description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_banner_objectives` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_banner_declaration` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutBannerImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_banner_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_language_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_experience_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_traning_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_education_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_objectives_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_expertice_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_links_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_personal_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_declarations_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `user_id`, `about_banner_headding`, `about_banner_title`, `about_banner_subtitle`, `about_banner_description`, `about_banner_objectives`, `about_banner_declaration`, `aboutBannerImage`, `about_banner_status`, `about_language_status`, `about_experience_status`, `about_traning_status`, `about_education_status`, `about_objectives_status`, `about_expertice_status`, `about_links_status`, `about_personal_status`, `about_declarations_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'About Me', 'WebDeveloper', 'Dawan ICT', 'Thanks almighty. i am apon ahamed . a certified full stack web developer with 2 years of experience in a verity of exciting project. as a full stack web developer, i have specialized in web development and experienced with all stage of dynamic web project. i have made many website s using populer CMS called bootstrap. i am also experienced in Php, Jvascript, HTML5,Css3,Jquery, And Laraval', 'To obtain a position with opportunities to utilize my technical, branding and marketing experiences, skill, talent, creativity, sincerity and most honesty for the better achievement of the organization. I am responsible for my duty.To obtain a position with opportunities to utilize my technical, branding and marketing experiences, skill, talent, creativity, sincerity and most honesty for the better achievement of the organization. I am responsible for my duty.', 'To obtain a position with opportunities to utilize my technical, branding and marketing experiences, skill, talent, creativity, sincerity and most honesty for the better achievement of the organization. I am responsible for my duty.', '1634122209.JPG', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '2021-10-17 06:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `admin_blogs`
--

CREATE TABLE `admin_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `click` int(255) DEFAULT NULL,
  `rattings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `count_rattings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `featuredImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_blogs`
--

INSERT INTO `admin_blogs` (`id`, `user_id`, `post_slug`, `post_title`, `post_description`, `meta_title`, `meta_description`, `meta_keywords`, `create_date`, `category_title`, `post_tag`, `click`, `rattings`, `count_rattings`, `featuredImage`, `created_at`, `updated_at`) VALUES
(1, '123', 'laravel-54-specific-table-migration', 'Laravel 5.4 Specific Table Migration', 'Thanks for your answer, the for loop mistake was a copy paste error from the original file, where i have more then 1 table entry. and there lies the problem now: in your updated fiddle, e.value has the same value (value of the first tr) all the time, thus rendering this function useless.\r\nThanks for your answer, the for loop mistake was a copy paste error from the original file, where i have more then 1 table entry. and there lies the problem now: in your updated fiddle, e.value has the same value (value of the first tr) all the time, thus rendering this function useless.', 'A slug is a simplified version of a string, typically URL-friendly.', 'Thanks for your answer, the for loop mistake was a copy paste error from the original file, where i have more then 1 table entry. and there lies the problem now: in your updated fiddle, e.value has the same value (value of the first tr) all the time, thus rendering this function useless.', 'resulting ,string,simplified ,slug', '2021-10-05', 'PHP & MYSQL', 'Laravel,PHP,Javascript,Json,Dhaleshwari', 84, NULL, NULL, '1633470302.png', '2021-10-05 15:45:02', '2021-10-20 09:54:38'),
(2, '123', 'how-to-send-text-messages-with-php', 'How to Send Text Messages With PHP', 'Until 1969, Tangail was part of Greater Mymensingh. Tangail was made a separate district due to suppress Mymensingh District\'s dominion. Before partition of 6 Upazila incident Mymensingh District\'s economic growth was higher than the capital Dhaka. To suppress Mymensingh, Greater Mymensingh was separate from their 7 out of 6 Upazila Tangail, Sherpur, Jamalpur, Netrokona (presently known as District) History of Mymensingh#cite note-Iffat Ara 1989-16 from Mymensingh. And 6 sub-district were promoted to district status to avoid conflict with Dhaka.[citation needed] Thus Tangail district was born. The main rivers that cross the Tangail district are the Jamuna, Dhaleshwari, Jhenai, Bangshi, Louhajang, Langulia, Elongjani, Jugni, Pouli, Fotikjani and the Turag.', 'A slug is a simplified version of a string, typically URL-friendly.', 'Until 1969, Tangail was part of Greater Mymensingh. Tangail was made a separate district due to suppress Mymensingh District\'s', 'resulting ,string,simplified ,slug', '2021-10-05', 'Uncategories', 'web,Mymensingh ,Tangail ,separate ,suppress,Laravel', 32, NULL, NULL, '1633472557.jpg', '2021-10-05 16:22:37', '2021-10-11 10:49:37'),
(3, '123', 'special-title-treatment-for-blog-post', 'Special title treatment for blog Post?', 'Tangail district is flanked on the west by the Jamuna River, which is over 4 miles wide during the rainy season. The Dhaleswari, first an old channel of the Ganges and then of the Brahmaputra, cuts across the southwestern comer of the district on its powerful sweep to join the Meghna near Narayanganj. The old name of Dhaleswari was \"Gajghata\". It used to flow afterward by the Salimabad channel and then at last by Porabari channel.\r\n\r\nA part of the eastern boundary of the district runs close to the Banar river. The river Bangshi flows almost down the middle of the district, branching out from the old Brahmaputra to the north from near Jamalpur. Bangshi falls into Dhaleswari near Savar, in Dhaka district. The Bangshi forms a natural barrier to the Madhupur Jungle on the Tangail side, all the way from Madhupur to Mirzapur. It is only fordable at two or three places near Basail on its way to river Meghna. Dhaleswari itself, however, takes out from the Jamuna from inside Tangail district.', 'Tangail district is flanked on the west by the Jamuna River, which is over 4 miles wide during the rainy season.', 'Tangail district is flanked on the west by the Jamuna River, which is over 4 miles wide during the rainy season.', 'district ,Tangail ,season,during', '2021-10-05', 'PHP & MYSQL', 'district ,Tangail ,season,during,Laravel', 14, NULL, NULL, '1633473189.jpg', '2021-10-05 16:23:54', '2021-10-10 11:53:35'),
(4, '1', 'how-to-send-text-messages-with-php-on-hand', 'How to Send Text Messages With PHP on hand', 'Until 1969, Tangail was part of Greater Mymensingh. Tangail was made a separate district due to suppress Mymensingh District\'s dominion. Before partition of 6 Upazila incident Mymensingh District\'s economic growth was higher than the capital Dhaka. To suppress Mymensingh, Greater Mymensingh was separate from their 7 out of 6 Upazila Tangail, Sherpur, Jamalpur, Netrokona (presently known as District) History of Mymensingh#cite note-Iffat Ara 1989-16 from Mymensingh. And 6 sub-district were promoted to district status to avoid conflict with Dhaka.[citation needed] Thus Tangail district was born. The main rivers that cross the Tangail district are the Jamuna, Dhaleshwari, Jhenai, Bangshi, Louhajang, Langulia, Elongjani, Jugni, Pouli, Fotikjani and the Turag.', 'Jamuna, Dhaleshwari, Jhenai, Bangshi, Louhajang, Langulia, Elongjani, Jugni, Pouli,', 'Jamuna, Dhaleshwari, Jhenai, Bangshi, Louhajang, Langulia, Elongjani, Jugni, Pouli,', 'Jamuna, Dhaleshwari, Jhenai, Bangshi, Louhajang, Langulia, Elongjani, Jugni, Pouli,', '2021-10-09', 'WordPress', 'Jamuna, Dhaleshwari, Jhenai, Bangshi, Louhajang, Langulia, Elongjani, Jugni, Pouli,', 33, '5', '1', '1633800839.jpg', '2021-10-09 11:33:59', '2021-10-20 10:01:34'),
(5, '1', 'get-the-html-contents-of-the-first-summernote-in-the-set-of-matched-elements', 'Get the HTML contents of the first summernote in the set of matched elements.', '<h1><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><b style=\"background-color: rgb(0, 255, 0);\"><span style=\"font-family: Impact;\">I</span></b>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span></h1><p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"> as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose <a href=\"https://www.lipsum.com/\" target=\"_blank\">(injected humour and the like).</a></span><br></p>', 'A slug is a simplified version of a string, typically URL-friendly.', 'A slug is a simplified version of a string, typically URL-friendly.A slug is a simplified version of a string, typically URL-friendly.', 'A slug is a simplified version of a string, typically URL-friendly.', '2021-10-10', 'WordPress', 'simplified,version,string, friendly,Laravel', 25, '9', '2', '1633877956.jpg', '2021-10-10 08:59:16', '2021-10-17 08:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_title`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'PHP', '1', '2021-10-05 15:20:23', '2021-10-05 15:20:23'),
(5, 'WordPress', '1', '2021-10-08 04:03:03', '2021-10-08 04:03:03'),
(6, 'PHP & MYSQL', '1', '2021-10-09 07:05:16', '2021-10-09 07:05:16'),
(7, 'Uncategories', '1', '2021-10-09 10:03:54', '2021-10-09 10:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutCertificationImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`id`, `user_id`, `institute_title`, `subject_name`, `duration`, `from_date`, `to_date`, `description`, `aboutCertificationImage`, `created_at`, `updated_at`) VALUES
(1, '1', 'Bangladesh It Institute', 'Web-Design & Graphics Design', '2 years', '2020-01-01', '2021-10-14', 'This is my best experience of my hole life. at this time i realize that i alwayes want to back my school.This is my best experience of my hole life. at this time i realize that i alwayes want to back my school.This is my best experience of my hole life. at this time i realize that i alwayes want to back my school', '1634151631.png', '2021-10-13 12:12:49', '2021-10-13 13:00:31'),
(2, '1', 'Bangladesh-Korea Technical Training Center(BKTTC)', 'Web-Design & Development', '2 years', '2021-10-06', '2021-10-29', 'This is my best experience of my hole life. at this time i realize that i alwayes want to back my school.This is my best experience of my hole life. at this time i realize that i alwayes want to back my school.This is my best experience of my hole life. at this time i realize that i alwayes want to back my school', '1634471095.png', '2021-10-17 05:44:55', '2021-10-17 05:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactFeatureImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contacts_banner_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `banner_title`, `banner_sub_title`, `active_hours`, `time_duration`, `description`, `contactFeatureImage`, `contacts_banner_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Do What You Dream Of...', 'Webdeveloper', '14', '12.00 GMT - 2.00 GMT', 'Experience Sharing platform is the web based platform where we can meet an experiences persons and get value able knowledge.This platform is totally free so it is helpfull for all people who need solving problems or gain interested sides.\r\nSo,this is the thing Youthway is the platform that provide sharing experience and motivation.Here we have create profile system that anyone find out by search option and connect with them.\r\nFinally we can say if this platform will helps all of the people. It will help people to make right decision and also make self-confidence,that what does he need to do for his skill development.', '1634154652.jpg', '1', NULL, '2021-10-17 07:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutEducationImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_id`, `university_name`, `degree_title`, `duration`, `aboutEducationImage`, `created_at`, `updated_at`) VALUES
(1, '1', 'Daffodil International University', 'B.sc in Engineering', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora.', '1634131653.jpg', '2021-10-13 07:27:33', '2021-10-13 07:30:22'),
(3, '1', 'Sherpur Polytechnic', 'Diploma in Engineering', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.', '1634472100.jpg', '2021-10-13 12:14:47', '2021-10-17 06:01:40'),
(4, '1', 'Sholakuri High School', 'Secondary School Certificate', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.', '1634472150.jpg', '2021-10-13 12:19:46', '2021-10-17 06:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutExperienceImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `company_name`, `designition`, `duration`, `form_date`, `to_date`, `description`, `aboutExperienceImage`, `created_at`, `updated_at`) VALUES
(1, '1', 'Sparrowbd', 'Web Desiner', '2 years', '2019-01-01', '2021-10-07', 'This is my best experience of my hole life. at this time i realize that i alwayes want to back my school.This is my best experience of my hole life. at this time i realize that i alwayes want to back my s.school.This is my best experience of my hole life. at this time i realize that i alwayes want to back my school', '1634149501.png', '2021-10-13 12:25:01', '2021-10-13 12:59:46'),
(2, '1', 'Dawan ICT', 'Web Developer', '2 years', '2021-10-07', '2021-10-21', 'Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.', '1634457539.jpg', '2021-10-17 01:58:59', '2021-10-17 01:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `expertises`
--

CREATE TABLE `expertises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expertises`
--

INSERT INTO `expertises` (`id`, `user_id`, `exp_title`, `created_at`, `updated_at`) VALUES
(1, '1', 'PHP My-Admin', '2021-10-13 08:25:05', '2021-10-13 08:26:09'),
(3, '1', 'HTML5, CSS3 & SCSS', '2021-10-17 06:21:04', '2021-10-17 06:21:04'),
(4, '1', 'JavaScript & JQuery', '2021-10-17 06:21:13', '2021-10-17 06:21:13'),
(5, '1', 'Bootstrap', '2021-10-17 06:21:24', '2021-10-17 06:21:24'),
(6, '1', 'Photoshop & Illustration', '2021-10-17 06:21:35', '2021-10-17 06:21:35'),
(7, '1', 'Laravel', '2021-10-17 06:21:43', '2021-10-17 06:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generals`
--

CREATE TABLE `generals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_personal_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_personal_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favIcom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generals`
--

INSERT INTO `generals` (`id`, `user_id`, `footer_title`, `company_personal_name`, `company_personal_title`, `tagline`, `favIcom`, `company_logo`, `created_at`, `updated_at`) VALUES
(1, '1', '© Copyright Own Design Concept All Rights Our Team.', 'Mr Apon Ahamed', 'This platform is totally For Students', 'Experience Sharing platform is the web based platform where we can meet an experiences persons and get value able knowledge.', '1634715547.png', '1634118245.png', NULL, '2021-10-20 01:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `home_skills`
--

CREATE TABLE `home_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeSkillImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_skills`
--

INSERT INTO `home_skills` (`id`, `user_id`, `skill_title`, `skill_percentage`, `homeSkillImage`, `skill_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Graphics Design', '95', '1634111458.png', '1', NULL, '2021-10-16 23:46:53'),
(2, '1', 'WebDesign', '95', '1634112790.png', NULL, '2021-10-13 02:13:10', '2021-10-13 02:13:10'),
(4, '1', 'WebDevelopment', '75', '1634449100.png', NULL, '2021-10-16 23:38:20', '2021-10-16 23:38:20'),
(5, '1', 'Framework(laraval)', '85', '1634449130.png', NULL, '2021-10-16 23:38:50', '2021-10-16 23:38:50');

-- --------------------------------------------------------

--
-- Table structure for table `home_views`
--

CREATE TABLE `home_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_title_1st` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_title_2nd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeBannerImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivation_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivation_description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivation_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `works_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_views`
--

INSERT INTO `home_views` (`id`, `user_id`, `banner_title_1st`, `banner_title_2nd`, `banner_description`, `homeBannerImage`, `banner_status`, `motivation_title`, `motivation_description`, `motivation_status`, `skill_status`, `works_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Web', 'Developer', 'Experience Sharing platform is the web based platform where we can meet an experiences persons and get value able knowledge.This platform is totally free so it is helpfull for all people who need solving problems or gain interested sides.\r\nSo,this is the', '1634109981.png', '1', 'Motivation', 'Experience Sharing platform is the web based platform where we can meet an experiences persons and get value able knowledge.This platform is totally free so it is helpfull for all people who need solving problems or gain interested sides. So,this is the thing Youthway is the platform that provide sharing experience and motivation.Here we have create profile system that anyone find out by search option and connect with them.\r\nFinally we can say if this platform will helps all of the people. It will help people to make right decision and also make self-confidence,that what does he need to do for his skill development.', '1', '1', '1', NULL, '2021-10-20 09:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `home_works`
--

CREATE TABLE `home_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `works_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `works_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `works_rattings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeWorksImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `works_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_works`
--

INSERT INTO `home_works` (`id`, `user_id`, `works_title`, `works_sub_title`, `works_rattings`, `homeWorksImage`, `works_status`, `created_at`, `updated_at`) VALUES
(2, '1', 'Open Poster Moc Kup', 'Making banner Website', '3', '1634116040.png', NULL, '2021-10-13 03:07:20', '2021-10-13 03:07:20'),
(3, '1', 'Experience Sharing Platform', 'University Project', '3', '1634449685.png', NULL, '2021-10-16 23:48:05', '2021-10-16 23:48:05'),
(4, '1', 'Bootstrap Templete', 'Learning website', '3', '1634449750.png', NULL, '2021-10-16 23:48:29', '2021-10-16 23:49:10'),
(5, '1', 'PSD To Web-Code Project', 'Practical Html,Css & Bootstrap', '3', '1634449733.png', NULL, '2021-10-16 23:48:53', '2021-10-16 23:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `user_id`, `language_title`, `language_experience`, `language_class`, `language_percentage`, `created_at`, `updated_at`) VALUES
(1, '1', 'Bangla', 'High', 'Native', '100', '2021-10-13 05:46:20', '2021-10-17 01:42:11'),
(3, '1', 'English', 'High', 'Native', '100', '2021-10-17 01:42:03', '2021-10-17 01:42:03'),
(4, '1', 'Korean', 'Low', 'Forgion', '20', '2021-10-17 01:42:37', '2021-10-17 01:43:10'),
(5, '1', 'Hindi', 'Medium', 'Forgion', '50', '2021-10-17 01:43:02', '2021-10-17 01:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_28_183347_create_admin_blogs_table', 1),
(6, '2021_10_05_183908_create_categories_table', 2),
(7, '2021_10_05_213943_create_admin_blogs_table', 3),
(8, '2021_10_09_134357_create_post_views_table', 4),
(9, '2021_10_09_183325_create_postreviews_table', 5),
(10, '2021_10_10_063230_create_subscribers_table', 6),
(11, '2021_10_10_103101_create_tag_views_table', 7),
(12, '2021_10_12_124009_create_personals_table', 8),
(13, '2021_10_13_063748_create_home_views_table', 9),
(14, '2021_10_13_074250_create_home_skills_table', 10),
(15, '2021_10_13_085723_create_home_works_table', 11),
(16, '2021_10_13_092402_create_generals_table', 12),
(17, '2021_10_13_103609_create_abouts_table', 13),
(18, '2021_10_13_112717_create_languages_table', 14),
(19, '2021_10_13_124703_create_education_table', 15),
(20, '2021_10_13_133810_create_protfolio_links_table', 16),
(21, '2021_10_13_140709_create_expertises_table', 17),
(22, '2021_10_13_144603_create_certifications_table', 18),
(23, '2021_10_13_144659_create_experiences_table', 18),
(24, '2021_10_13_190509_create_contacts_table', 19),
(25, '2021_10_17_132901_create_protfolios_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personals`
--

CREATE TABLE `personals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Designition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maritial_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasport_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driving_licence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personals`
--

INSERT INTO `personals` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`, `Designition`, `fathers_name`, `mothers_name`, `date_of_birth`, `maritial_status`, `nationality`, `national_id_no`, `pasport_no`, `driving_licence`, `religion`, `present_address`, `permanent_address`, `tagline`, `personal_image`, `created_at`, `updated_at`) VALUES
(1, '1', 'Mr.', 'Shohag', 'Khan', '+8801521380178', 'aponahamedboua02@gmail.com', 'B.sc in CSE', 'Mr. Fajlul Haque', 'Siponara Begum', '1994-05-05', 'Married', 'Bangladeshi', '451245784541', 'BY-05321A', 'A1245784', 'Islam', 'Mirpur-1,Dhaka-1216', 'Mirpur-1,Dhaka-1216', 'I am Responsible For My Duty & I Respect All Of My Hounerable Person.', '1634105942.jpg', NULL, '2021-10-13 00:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postreviews`
--

CREATE TABLE `postreviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rattings` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postreviews`
--

INSERT INTO `postreviews` (`id`, `name`, `email`, `message`, `post_slug`, `rattings`, `created_at`, `updated_at`) VALUES
(1, 'kawser', 'aponahamed02@gmail.com', 'thus rendering this function useless.', 'laravel-54-specific-table-migration', '4', '2021-10-09 12:57:57', '2021-10-09 12:57:57'),
(2, 'shohag', 'admin@admin.com', 'best blog', 'laravel-54-specific-table-migration', '4', '2021-10-09 13:24:20', '2021-10-09 13:24:20'),
(3, 'Kamal Huddya', 'kabir@gmail.com', 'Thanks for your answer, the for loop mistake was a copy paste error from the original file, where i have more then 1 table entry.', 'special-title-treatment-for-blog-post', '4', '2021-10-09 14:51:12', '2021-10-09 14:51:12'),
(4, 'apon', 'kabir@gmail.com', 'This is good', 'get-the-html-contents-of-the-first-summernote-in-the-set-of-matched-elements', '4', '2021-10-11 00:03:29', '2021-10-11 00:03:29'),
(5, 'Mausumi Hamid', 'aponahamed02@gmail.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'get-the-html-contents-of-the-first-summernote-in-the-set-of-matched-elements', '5', '2021-10-11 00:04:36', '2021-10-11 00:04:36'),
(6, 'Shahinur Rahman', 'shahinurr480@gmail.com', 'Until 1969, Tangail was part of Greater Mymensingh. Tangail was made a separate district due to suppress Mymensingh District\'s dominion.', 'how-to-send-text-messages-with-php-on-hand', '5', '2021-10-11 00:37:08', '2021-10-11 00:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `protfolios`
--

CREATE TABLE `protfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `protfolio_banner_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protfolio_banner_description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protfolio_banner_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `protfolios`
--

INSERT INTO `protfolios` (`id`, `user_id`, `protfolio_banner_title`, `protfolio_banner_description`, `protfolio_banner_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Work Gallery', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, veniam, voluptate! Beatae magni, impedit distinctio.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, veniam, voluptate! Beatae magni, impedit distinctio.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, veniam, voluptate! Beatae magni, impedit distinctio.', '1', NULL, '2021-10-17 07:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `protfolio_links`
--

CREATE TABLE `protfolio_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `links` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `protfolio_links`
--

INSERT INTO `protfolio_links` (`id`, `user_id`, `link_title`, `links`, `created_at`, `updated_at`) VALUES
(1, '1', 'Github', 'www.github.com', '2021-10-13 07:57:22', '2021-10-13 07:57:22'),
(3, '1', 'Facebook', 'www.facebook.com/apon.ahamed.0', '2021-10-17 06:30:47', '2021-10-17 06:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `email`, `date`, `message`, `time`, `created_at`, `updated_at`) VALUES
(1, 'Shohag Khan', 'shohag@gmail.com', '2021-10-12', 'Hello, I\'m shohag Khan From America. I want to talk About My Personal Blog Website. \r\nPlease give me time for appointment.\r\nthank You', '17:30', '2021-10-10 02:32:14', '2021-10-10 02:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `tag_views`
--

CREATE TABLE `tag_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tag_views`
--

INSERT INTO `tag_views` (`id`, `user_id`, `tag_name`, `created_at`, `updated_at`) VALUES
(1, '1', 'Laravel', '2021-10-11 01:46:05', '2021-10-11 02:38:36'),
(3, '1', 'PHP & MYSQL', '2021-10-11 02:39:15', '2021-10-11 02:39:15'),
(4, '1', 'Wordpress', '2021-10-11 02:39:25', '2021-10-11 02:39:25'),
(5, '1', 'Python', '2021-10-11 02:39:46', '2021-10-11 02:39:46'),
(6, '1', 'Mobile Apps', '2021-10-11 02:39:54', '2021-10-11 02:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'apon', 'admin@admin.com', NULL, '$2y$10$nfJFkjDSF5v/CvrB5cVBMeqbJSSiXj10h.wh/S2LAWfdsz0h8dFYW', '6tC0IakMYMCAelDnFwhsfP6OymI82sgwGit0mBE48pvFmV34S5JaF1S77rkx', '2021-10-07 09:38:42', '2021-10-07 09:38:42', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_blogs`
--
ALTER TABLE `admin_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expertises`
--
ALTER TABLE `expertises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_skills`
--
ALTER TABLE `home_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_views`
--
ALTER TABLE `home_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_works`
--
ALTER TABLE `home_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personals`
--
ALTER TABLE `personals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `postreviews`
--
ALTER TABLE `postreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `protfolios`
--
ALTER TABLE `protfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `protfolio_links`
--
ALTER TABLE `protfolio_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_views`
--
ALTER TABLE `tag_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_blogs`
--
ALTER TABLE `admin_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expertises`
--
ALTER TABLE `expertises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generals`
--
ALTER TABLE `generals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_skills`
--
ALTER TABLE `home_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_views`
--
ALTER TABLE `home_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_works`
--
ALTER TABLE `home_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personals`
--
ALTER TABLE `personals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postreviews`
--
ALTER TABLE `postreviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `protfolios`
--
ALTER TABLE `protfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `protfolio_links`
--
ALTER TABLE `protfolio_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tag_views`
--
ALTER TABLE `tag_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
