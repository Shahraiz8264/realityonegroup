-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table itcglobal.contact_forms
CREATE TABLE IF NOT EXISTS `contact_forms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `property_id` int DEFAULT '0',
  `project` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` tinyint DEFAULT '0',
  `is_active` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.contact_forms: ~23 rows (approximately)
INSERT INTO `contact_forms` (`id`, `first_name`, `last_name`, `email`, `message`, `subject`, `created_at`, `updated_at`, `property_id`, `project`, `phone`, `city`, `is_delete`, `is_active`) VALUES
	(1, 'Ghazanfar', 'Ahsan', 'ghazanfar@gmail.com', 'ghazafnar', NULL, '2022-11-06 16:06:35', '2022-11-06 16:06:35', 0, NULL, NULL, NULL, 0, 1),
	(2, 'Ghazanfar', 'Ahsan', 'ghazanfar@gmail.com', 'ghazafnar', 'ghazanfar', '2022-11-06 16:23:53', '2022-11-06 16:23:53', 0, NULL, NULL, NULL, 0, 1),
	(3, 'Ghazanfar', 'Ahsan', 'ghazanfar@gmail.com', 'ghazafnar', 'ghazanfar', '2022-11-06 16:25:43', '2022-11-06 16:25:43', 0, NULL, NULL, NULL, 0, 1),
	(4, 'Ghazanfar', 'ghazanfar', 'ghazanfar@gmail.com', 'dfafasdfasdfasdfs', 'test', '2022-11-06 16:29:16', '2022-11-06 16:29:16', 0, NULL, NULL, NULL, 0, 1),
	(5, 'Ghazanfar', 'Ahsan', 'ghazanfar@gmail.com', 'sdafas fasdfasdfas f', 'test email', '2022-11-06 16:33:04', '2022-11-06 16:33:04', 0, NULL, NULL, NULL, 0, 1),
	(6, 'Ghazanfar', 'Ahsan', 'ghazanfar@gmail.com', 'sdafas fasdfasdfas f', 'test email', '2022-11-06 16:34:09', '2022-11-06 16:34:09', 0, NULL, NULL, NULL, 0, 1),
	(7, 'Ghazanfar', 'Ahsan', 'ghazanfar@gmail.com', 'sdfasdfasdfsdf', 'test email', '2022-11-06 16:39:49', '2022-11-06 16:39:49', 0, NULL, NULL, NULL, 0, 1),
	(8, 'Labore enim ut in al', 'Nisi pariatur Autem', 'fagajuk@mailinator.com', 'Officia consequatur', 'Velit sint dolor har', '2022-11-07 15:57:18', '2022-11-07 15:57:18', 0, NULL, NULL, NULL, 0, 1),
	(9, 'Quis expedita recusa', 'Illum corrupti aut', 'qavohy@mailinator.com', 'Minus error nulla vo', 'Asperiores fuga Iru', '2022-11-10 11:44:07', '2022-11-10 11:44:07', 0, NULL, NULL, NULL, 0, 1),
	(10, 'Anim veniam soluta', 'undefined', 'cojaqe@mailinator.com', 'Anim nulla ut quia s', 'Mollitia quae in vol', '2022-11-19 12:53:36', '2022-11-19 12:53:36', 0, NULL, NULL, NULL, 0, 1),
	(11, 'Facilis eveniet atq', 'undefined', 'navyti@mailinator.com', 'Et est tenetur quas', 'Corporis tempora inc', '2022-12-15 21:32:06', '2022-12-15 21:32:06', 0, NULL, NULL, NULL, 0, 1),
	(12, 'Quos sit similique a', NULL, 'puqykor@mailinator.com', 'Molestiae eu error a', NULL, '2023-02-04 01:35:26', '2023-02-04 01:35:26', 0, NULL, NULL, NULL, 0, 1),
	(13, 'Quos sit similique a', NULL, 'puqykor@mailinator.com', 'Molestiae eu error a', NULL, '2023-02-04 01:35:44', '2023-02-04 01:35:44', 0, NULL, NULL, NULL, 0, 1),
	(14, 'Quos sit similique a', NULL, 'puqykor@mailinator.com', 'Molestiae eu error a', NULL, '2023-02-04 01:36:41', '2023-02-04 01:36:41', 0, NULL, NULL, NULL, 0, 1),
	(15, 'A pariatur Officia', NULL, 'mixaq@mailinator.com', 'Non veniam aliquip', NULL, '2023-02-04 01:43:10', '2023-02-04 01:43:10', 23, NULL, '52457666548745', 'Cumque soluta et com', 0, 1),
	(16, 'Illum incidunt exp', NULL, 'pikobifihy@mailinator.com', 'Sunt quod vel culpa', NULL, '2023-02-04 01:49:28', '2023-02-04 01:49:28', 0, NULL, '86', 'Veritatis quae aut c', 0, 1),
	(17, 'Illum incidunt exp', NULL, 'pikobifihy@mailinator.com', 'Sunt quod vel culpa', NULL, '2023-02-04 01:49:58', '2023-02-04 01:49:58', 0, NULL, '86', 'Veritatis quae aut c', 0, 1),
	(18, 'Est adipisci adipisi', NULL, 'vute@mailinator.com', 'Veritatis tempor eaq', NULL, '2023-02-04 01:50:16', '2023-02-04 01:50:16', 0, NULL, '96', 'Officia harum natus', 0, 1),
	(19, 'Pariatur Nisi disti', NULL, 'rykeki@mailinator.com', 'Quis tempore ullam', NULL, '2023-02-04 01:50:28', '2023-02-04 01:50:28', 0, NULL, '88', 'Enim ullam minus sun', 0, 1),
	(20, 'Ghazanfar Ahsan', NULL, 'ghazanfar1507a@gmail.com', 'just want to know the price', NULL, '2023-02-11 01:39:46', '2023-02-11 01:39:46', 0, NULL, '31616205825', 'karachi', 0, 1),
	(21, 'Mollitia cillum anim', NULL, 'jukycuz@mailinator.com', 'Alias autem totam su', NULL, '2023-02-11 01:42:43', '2023-02-11 01:42:43', 0, 'Lahore Smart City', '374574222222451', 'Eaque sint porro vo', 0, 1),
	(22, 'Dolorem aut quis ali', NULL, 'vidapade@mailinator.com', 'Tempore modi quas e', NULL, '2023-02-11 01:43:32', '2023-02-11 01:43:32', 0, 'Capital Smart City', '85785426147', 'Recusandae Et labor', 0, 1),
	(23, 'Anwer Ali', NULL, 'anwer.ali@gmail.com', 'just to know th quotation', NULL, '2023-02-11 01:46:15', '2023-02-11 01:46:15', 0, 'Capital Smart City', '1245789654', 'karachi', 0, 1);

-- Dumping structure for table itcglobal.custom_forms
CREATE TABLE IF NOT EXISTS `custom_forms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_data` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.custom_forms: ~9 rows (approximately)
INSERT INTO `custom_forms` (`id`, `name`, `slug`, `form_data`, `created_at`, `updated_at`) VALUES
	(1, 'Get A Quote Form', 'get-a-quote', NULL, '2022-11-07 15:47:54', '2022-11-07 15:47:54'),
	(2, 'Get A Quote Form', 'get-a-quote', '[{"key": "path", "name": "Attachment", "value": "uploads/quotes/1667825389_اردو ادب میں خطوط غالب کی اہمیت.docx.docx"}]', '2022-11-07 15:49:49', '2022-11-07 15:49:49'),
	(3, 'Get A Quote Form', 'get-a-quote', '[{"key": "path", "name": "Attachment", "value": "uploads/quotes/1667825549_اردو ادب میں خطوط غالب کی اہمیت.docx.docx"}]', '2022-11-07 15:52:29', '2022-11-07 15:52:29'),
	(4, 'Get A Quote Form', 'get-a-quote', '[{"key": "path", "name": "Attachment", "value": "uploads/quotes/1667825602_اردو ادب میں خطوط غالب کی اہمیت.docx.docx"}]', '2022-11-07 15:53:23', '2022-11-07 15:53:23'),
	(5, 'Get A Quote Form', 'get-a-quote', '[{"key": "first_name", "name": "First Name", "value": "Heather"}, {"key": "last_name", "name": "Last Name", "value": "Pittman"}, {"key": "email", "name": "Email", "value": "vahory@mailinator.com"}, {"key": "phone_no", "name": "Phone No", "value": "55"}, {"key": "message", "name": "Message", "value": "Sint similique et es"}, {"key": "state", "name": "State", "value": "Accusantium tempora"}, {"key": "postal_code", "name": "Postal Code", "value": "81"}, {"key": "path", "name": "Attachment", "value": "uploads/quotes/1667825652_اردو ادب میں خطوط غالب کی اہمیت.docx.docx"}]', '2022-11-07 15:54:12', '2022-11-07 15:54:12'),
	(6, 'Get A Quote Form', 'get-a-quote', '[{"key": "first_name", "name": "First Name", "value": "Heather"}, {"key": "last_name", "name": "Last Name", "value": "Pittman"}, {"key": "email", "name": "Email", "value": "vahory@mailinator.com"}, {"key": "phone_no", "name": "Phone No", "value": "55"}, {"key": "message", "name": "Message", "value": "Sint similique et es"}, {"key": "state", "name": "State", "value": "Accusantium tempora"}, {"key": "postal_code", "name": "Postal Code", "value": "81"}, {"key": "path", "name": "Attachment", "value": "uploads/quotes/1667825724_اردو ادب میں خطوط غالب کی اہمیت.docx.docx"}]', '2022-11-07 15:55:24', '2022-11-07 15:55:24'),
	(7, 'Get A Quote Form', 'get-a-quote', '[{"key": "first_name", "name": "First Name", "value": "Heather"}, {"key": "last_name", "name": "Last Name", "value": "Pittman"}, {"key": "email", "name": "Email", "value": "vahory@mailinator.com"}, {"key": "phone_no", "name": "Phone No", "value": "55"}, {"key": "message", "name": "Message", "value": "Sint similique et es"}, {"key": "state", "name": "State", "value": "Accusantium tempora"}, {"key": "postal_code", "name": "Postal Code", "value": "81"}, {"key": "path", "name": "Attachment", "value": "uploads/quotes/1667825767.docx"}]', '2022-11-07 15:56:07', '2022-11-07 15:56:07'),
	(8, 'Get A Quote Form', 'get-a-quote', '[{"key": "first_name", "name": "First Name", "value": "Heather"}, {"key": "last_name", "name": "Last Name", "value": "Pittman"}, {"key": "email", "name": "Email", "value": "vahory@mailinator.com"}, {"key": "phone_no", "name": "Phone No", "value": "55"}, {"key": "message", "name": "Message", "value": "Sint similique et es"}, {"key": "state", "name": "State", "value": "Accusantium tempora"}, {"key": "postal_code", "name": "Postal Code", "value": "81"}, {"key": "path", "name": "Attachment", "value": "uploads/quotes/1667825802.docx"}]', '2022-11-07 15:56:43', '2022-11-07 15:56:43'),
	(9, 'Get A Quote Form', 'get-a-quote', '[{"key": "first_name", "name": "First Name", "value": "Ignacia"}, {"key": "email", "name": "Email", "value": "byda@mailinator.com"}, {"key": "phone_no", "name": "Phone No", "value": "80472222447555"}, {"key": "message", "name": "Message", "value": "Aut reprehenderit ne"}, {"key": "address", "name": "Address", "value": "Ducimus dolores seq"}, {"key": "file", "name": "File", "value": "undefined"}]', '2022-11-23 09:22:33', '2022-11-23 09:22:33');

-- Dumping structure for table itcglobal.developers
CREATE TABLE IF NOT EXISTS `developers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.developers: ~4 rows (approximately)
INSERT INTO `developers` (`id`, `name`, `slug`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
	(1, 'Reality One Group', 'reality-one-group', 1, 0, '2023-02-05 05:20:57', '2023-02-05 05:20:57'),
	(2, 'Saima Developers', 'saima-developers', 1, 0, '2023-02-05 05:23:56', '2023-02-05 05:23:56'),
	(3, 'Bhashani Developers', 'bhashani-developers', 1, 0, '2023-02-05 05:25:09', '2023-02-05 05:25:09'),
	(6, 'Jumani Developers', 'jumani-developers', 1, 0, '2023-02-05 05:40:25', '2023-02-05 05:40:25');

-- Dumping structure for table itcglobal.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table itcglobal.footers
CREATE TABLE IF NOT EXISTS `footers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.footers: ~1 rows (approximately)
INSERT INTO `footers` (`id`, `name`, `view`, `is_delete`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'Footerv1', 'footerv1', 0, 1, '2022-12-15 08:51:20', '2022-12-15 09:13:15');

-- Dumping structure for table itcglobal.headers
CREATE TABLE IF NOT EXISTS `headers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.headers: ~1 rows (approximately)
INSERT INTO `headers` (`id`, `name`, `view`, `is_delete`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'Headerv1', 'headerv1', 0, 1, '2022-12-15 06:57:48', '2022-12-15 07:45:44');

-- Dumping structure for table itcglobal.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_id` int NOT NULL DEFAULT '0',
  `image_url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.images: ~35 rows (approximately)
INSERT INTO `images` (`id`, `model`, `model_id`, `image_url`, `is_delete`, `created_at`, `updated_at`) VALUES
	(2, NULL, 0, 'http://itglobal.test/media/building.png', 0, '2023-02-01 02:19:27', '2023-02-01 02:19:27'),
	(3, 'App\\Models\\Property', 16, 'http://itglobal.test/media/building.png', 0, '2023-02-01 02:19:29', '2023-02-01 02:20:35'),
	(4, NULL, 0, 'http://itglobal.test/media/building.png', 0, '2023-02-01 02:30:17', '2023-02-01 02:30:17'),
	(5, NULL, 0, 'http://itglobal.test/media/building.png', 0, '2023-02-01 02:30:18', '2023-02-01 02:30:18'),
	(6, NULL, 0, 'http://itglobal.test/media/building.png', 0, '2023-02-01 02:30:20', '2023-02-01 02:30:20'),
	(7, NULL, 0, 'http://itglobal.test/media/building.png', 0, '2023-02-01 02:35:01', '2023-02-01 02:35:01'),
	(8, NULL, 0, 'http://itglobal.test/media/building.png', 0, '2023-02-01 02:35:01', '2023-02-01 02:35:01'),
	(9, NULL, 0, 'http://itglobal.test/media/building.png', 0, '2023-02-01 02:35:03', '2023-02-01 02:35:03'),
	(10, NULL, 0, 'http://itglobal.test/media/building.png', 0, '2023-02-01 02:39:27', '2023-02-01 02:39:27'),
	(11, NULL, 0, 'http://itglobal.test/media/building.png', 0, '2023-02-01 02:39:27', '2023-02-01 02:39:27'),
	(12, 'App\\Models\\Property', 17, 'http://itglobal.test/media/building.png', 0, '2023-02-01 02:42:15', '2023-02-01 02:43:12'),
	(13, 'App\\Models\\Property', 17, 'http://itglobal.test/media/building.png', 0, '2023-02-01 02:42:15', '2023-02-01 02:43:12'),
	(15, 'App\\Models\\Property', 19, 'http://itglobal.test/media/building.png', 0, '2023-02-01 05:11:11', '2023-02-01 05:11:47'),
	(16, NULL, 0, 'http://itglobal.test/media/building.png', 0, '2023-02-01 05:13:35', '2023-02-01 05:13:35'),
	(17, 'App\\Models\\Property', 20, 'http://itglobal.test/media/building.png', 0, '2023-02-01 05:14:08', '2023-02-01 05:14:37'),
	(18, NULL, 0, 'http://itglobal.test/media/building.png', 0, '2023-02-01 05:17:16', '2023-02-01 05:17:16'),
	(19, NULL, 0, 'http://itglobal.test/media/building.png', 0, '2023-02-01 05:19:18', '2023-02-01 05:19:18'),
	(20, 'App\\Models\\Property', 0, 'http://itglobal.test/media/building.png', 0, '2023-02-01 05:19:51', '2023-02-01 05:19:51'),
	(21, 'App\\Models\\Property', 21, 'http://itglobal.test/media/building.png', 0, '2023-02-01 05:20:52', '2023-02-01 05:21:24'),
	(22, 'App\\Models\\Property', 23, 'http://itglobal.test/media/building.png', 0, '2023-02-01 07:34:30', '2023-02-01 07:35:24'),
	(23, NULL, 0, 'http://itglobal.test/media/building.png', 0, '2023-02-01 07:36:52', '2023-02-01 07:36:52'),
	(24, NULL, 0, 'http://itglobal.test/media/building.png', 0, '2023-02-01 07:39:02', '2023-02-01 07:39:02'),
	(25, 'App\\Models\\Property', 24, 'http://itglobal.test/media/building.png', 0, '2023-02-01 07:59:23', '2023-02-01 08:01:46'),
	(26, 'App\\Models\\Property', 25, 'http://itglobal.test/media/bvc.png', 0, '2023-02-04 02:18:53', '2023-02-04 02:19:53'),
	(27, 'App\\Models\\Property', 25, 'http://itglobal.test/media/bvc.png', 0, '2023-02-04 02:19:00', '2023-02-04 02:19:53'),
	(28, 'App\\Models\\Property', 25, 'http://itglobal.test/media/building.png', 0, '2023-02-04 02:19:19', '2023-02-04 02:19:53'),
	(29, 'App\\Models\\Property', 26, 'http://itglobal.test/media/c2.png', 0, '2023-02-04 02:25:24', '2023-02-04 02:25:39'),
	(30, 'App\\Models\\Property', 26, 'http://itglobal.test/media/c1.png', 0, '2023-02-04 02:25:24', '2023-02-04 02:25:40'),
	(31, 'App\\Models\\Property', 26, 'http://itglobal.test/media/c4.png', 0, '2023-02-04 02:25:27', '2023-02-04 02:25:40'),
	(32, 'App\\Models\\Property', 26, 'http://itglobal.test/media/c3.png', 0, '2023-02-04 02:25:27', '2023-02-04 02:25:40'),
	(33, 'App\\Models\\Property', 26, 'http://itglobal.test/media/c5.png', 0, '2023-02-04 02:25:30', '2023-02-04 02:25:40'),
	(34, 'App\\Models\\Property', 27, 'http://itglobal.test/media/c3.png', 0, '2023-02-05 07:16:00', '2023-02-05 07:23:41'),
	(35, 'App\\Models\\Property', 27, 'http://itglobal.test/media/c2.png', 0, '2023-02-05 07:16:00', '2023-02-05 07:23:41'),
	(36, 'App\\Models\\Property', 27, 'http://itglobal.test/media/c5.png', 0, '2023-02-05 07:16:02', '2023-02-05 07:23:41'),
	(37, 'App\\Models\\Property', 27, 'http://itglobal.test/media/c4.png', 0, '2023-02-05 07:16:02', '2023-02-05 07:23:41');

-- Dumping structure for table itcglobal.layouts
CREATE TABLE IF NOT EXISTS `layouts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_id` int NOT NULL DEFAULT '0',
  `footer_id` int NOT NULL DEFAULT '0',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.layouts: ~0 rows (approximately)

-- Dumping structure for table itcglobal.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.migrations: ~18 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_05_03_000001_create_customer_columns', 1),
	(4, '2019_05_03_000002_create_subscriptions_table', 1),
	(5, '2019_05_03_000003_create_subscription_items_table', 1),
	(6, '2019_08_19_000000_create_failed_jobs_table', 1),
	(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(8, '2022_10_21_145030_create_newsletters_table', 1),
	(9, '2022_10_21_150416_create_contact_forms_table', 1),
	(10, '2022_11_07_044218_create_custom_forms_table', 2),
	(11, '2022_11_20_101937_create_pages_table', 3),
	(12, '2022_12_11_095022_create_layouts_table', 4),
	(13, '2022_12_11_095733_create_headers_table', 4),
	(14, '2022_12_11_100550_create_footers_table', 4),
	(15, '2022_12_11_122036_create_images_table', 5),
	(16, '2023_01_19_040302_create_properties_table', 5),
	(17, '2023_02_05_064031_create_developers_table', 6),
	(18, '2023_02_05_064513_create_property_types_table', 6);

-- Dumping structure for table itcglobal.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.model_has_roles: ~1 rows (approximately)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1);

-- Dumping structure for table itcglobal.months
CREATE TABLE IF NOT EXISTS `months` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `month` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.months: ~12 rows (approximately)
INSERT INTO `months` (`id`, `month`, `short_name`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
	(1, 'January', 'Jan', 1, 0, NULL, NULL),
	(2, 'February', 'Feb', 1, 0, NULL, NULL),
	(3, 'March', 'Mar', 1, 0, NULL, NULL),
	(4, 'April', 'Apr', 1, 0, NULL, NULL),
	(5, 'May', 'May', 1, 0, NULL, NULL),
	(6, 'June', 'Jun', 1, 0, NULL, NULL),
	(7, 'July', 'Jul', 1, 0, NULL, NULL),
	(8, 'August', 'Aug', 1, 0, NULL, NULL),
	(9, 'September', 'Sept', 1, 0, NULL, NULL),
	(10, 'October', 'Oct', 1, 0, NULL, NULL),
	(11, 'November', 'Nov', 1, 0, NULL, NULL),
	(12, 'December', 'Dec', 1, 0, NULL, NULL);

-- Dumping structure for table itcglobal.newsletters
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `newsletters_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.newsletters: ~1 rows (approximately)
INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
	(1, 'ghazanfar1507a@gmail.com', '2022-12-15 09:56:31', '2022-12-15 09:56:31');

-- Dumping structure for table itcglobal.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `has_custom_view` tinyint(1) NOT NULL DEFAULT '1',
  `display_to_menu` tinyint(1) NOT NULL DEFAULT '0',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_home_page` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.pages: ~8 rows (approximately)
INSERT INTO `pages` (`id`, `name`, `slug`, `view`, `layout`, `description`, `is_active`, `has_custom_view`, `display_to_menu`, `is_delete`, `created_at`, `updated_at`, `is_home_page`) VALUES
	(1, 'Home', 'home', 'indexv1', 'layoutv1', NULL, 1, 1, 1, 0, '2022-11-20 08:48:06', '2022-11-20 08:48:06', 1),
	(2, 'About Us', 'about-us', 'about-us', 'layoutv1', NULL, 1, 1, 1, 0, '2022-11-20 08:52:35', '2022-11-20 08:52:35', 0),
	(4, 'Contact Us', 'contact-us', 'contact-us', 'layoutv1', NULL, 1, 1, 1, 0, '2022-11-20 08:59:50', '2022-11-20 08:59:50', 0),
	(5, 'Web Design', 'web-design', 'web-design', 'layoutv1', '<p><strong>Holiday Sale ends Dec 15</strong>| Courses from $12.99. Use code GIFT15 to save an extra 15%.</p>', 1, 1, 1, 0, '2022-11-20 09:05:40', '2022-12-13 09:38:02', 0),
	(6, 'Seo', 'seo', 'seo', 'layoutv1', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</p>', 1, 1, 1, 0, '2022-11-20 09:08:11', '2022-12-13 09:26:20', 0),
	(8, 'Social Media', 'social-media', 'social-media', 'layoutv1', '<p><strong>Holiday Sale ends Dec 15</strong>| Courses from $12.99. Use code GIFT15 to save an extra 15%.</p>', 1, 1, 1, 0, '2022-12-13 09:28:33', '2022-12-13 09:43:55', 0),
	(9, 'Branding', 'branding', 'branding', 'layoutv1', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was pop</p>', 1, 1, 1, 0, '2022-12-13 09:36:07', '2022-12-13 09:36:07', 0),
	(10, 'Paid Advertisement', 'paid-advertisement', 'paid-advertisement', 'layoutv1', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was pop</p>', 1, 1, 1, 0, '2022-12-13 09:37:11', '2022-12-13 09:37:11', 0);

-- Dumping structure for table itcglobal.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.password_resets: ~0 rows (approximately)

-- Dumping structure for table itcglobal.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.permissions: ~0 rows (approximately)

-- Dumping structure for table itcglobal.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.personal_access_tokens: ~1 rows (approximately)
INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
	(27, 'App\\Models\\User', 1, 'API Token', 'b77f43d08c090447cea44d11d5f246cbb722aa44fbdb7481a3e9d64e0c833f8b', '["*"]', NULL, '2023-02-11 01:40:15', '2023-02-11 01:40:15');

-- Dumping structure for table itcglobal.properties
CREATE TABLE IF NOT EXISTS `properties` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `price` double DEFAULT '0',
  `area` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lognitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `developer` bigint DEFAULT NULL,
  `type` bigint NOT NULL DEFAULT '0',
  `category` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.properties: ~17 rows (approximately)
INSERT INTO `properties` (`id`, `name`, `slug`, `description`, `address`, `price`, `area`, `lognitude`, `latitude`, `developer`, `type`, `category`, `city`, `country`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
	(3, 'Aaron Dunlap', 'aaron-dunlap', '<p>dfdfdfdfsf</p>', 'Eligendi nostrum ame', 975, '150', NULL, NULL, 0, 0, 'Rent', 'Error qui unde neque', NULL, 1, 0, '2023-01-31 23:50:25', '2023-01-31 23:50:25'),
	(11, 'Portia Burris', 'portia-burris', '<p>fsadf asfasd fasd fasdfasd fasdfasdfsadf asfsda</p>', 'Laborum vel deleniti', 268, '150', NULL, NULL, 0, 0, 'Rent', 'Et rem dolore aut vo', NULL, 1, 0, '2023-02-01 01:21:34', '2023-02-01 01:21:34'),
	(12, 'Portia Burris', 'portia-burris', '<p>fsadf asfasd fasd fasdfasd fasdfasdfsadf asfsda</p>', 'Laborum vel deleniti', 268, '150', NULL, NULL, 0, 0, 'Rent', 'Et rem dolore aut vo', NULL, 1, 0, '2023-02-01 01:22:18', '2023-02-01 01:22:18'),
	(13, 'Portia Burris', 'portia-burris', '<p>fsadf asfasd fasd fasdfasd fasdfasdfsadf asfsda</p>', 'Laborum vel deleniti', 268, '150', NULL, NULL, 0, 0, 'Rent', 'Et rem dolore aut vo', NULL, 1, 0, '2023-02-01 01:23:09', '2023-02-01 01:23:09'),
	(14, 'Ashton Knowles', 'ashton-knowles', '<p>ffasd fasf aslfhasl afaslfasd fhlasfhasldhf laslfaslfh</p>', 'Doloribus sit natus', 988, '150', NULL, NULL, 0, 0, 'Rent', 'In aliquip ipsam eos', NULL, 1, 0, '2023-02-01 01:24:57', '2023-02-01 01:24:57'),
	(15, 'Branden Johnston', 'branden-johnston', '<p>sdaf dsafsd afdsa fsda fsdafsd afaf df asdfds</p>', 'Facere veniam dolor', 781, '150', NULL, NULL, 0, 0, 'Rent', 'Quo qui enim tempor', NULL, 1, 0, '2023-02-01 01:35:28', '2023-02-01 01:35:28'),
	(16, 'Yvette Greene', 'yvette-greene', '<p>lfasdlfhasd fasdlfhasd fhlasd fhlasdhflsda</p>', 'Aute aliquam sed ea', 767, '150', NULL, NULL, 0, 0, 'Rent', 'Earum harum nihil ad', NULL, 1, 0, '2023-02-01 02:20:35', '2023-02-01 02:20:35'),
	(17, 'Christen Dunlap', 'christen-dunlap', '<p>fasdfa fadfasd fadsfad</p>', 'Sapiente sint eum es', 796, '1540', NULL, NULL, 0, 0, 'Rent', 'Voluptatem quis alia', NULL, 1, 0, '2023-02-01 02:43:12', '2023-02-01 02:43:12'),
	(18, 'Nehru Macias', 'nehru-macias', '<p>dsfasd fafh asdfhask dfkasdhfkasdfkasdhfasgkfgaskdfhaksd gfasdfkasd fasfasdk fgksad</p>', 'Consequatur sint lau', 435, '780', NULL, NULL, 0, 0, 'Buy', 'Voluptatum debitis e', NULL, 1, 0, '2023-02-01 05:00:53', '2023-02-01 05:00:53'),
	(19, 'Lydia Mccoy', 'lydia-mccoy', '<p>asdfasd fasdfjasdl fhaslfhlasd hflasdhfs</p>', 'Autem et cum labore', 735, '457', NULL, NULL, 0, 0, 'Rent', 'Cupidatat ducimus d', NULL, 1, 0, '2023-02-01 05:11:47', '2023-02-01 05:11:47'),
	(20, 'Allegra Lloyd', 'allegra-lloyd', '<p>sadfasd fsadf jsladf lasdhflsadf lasflhsda fasldfhlsad hflsdahf</p>', 'Ut pariatur At aut', 131, '457', NULL, NULL, 0, 0, 'Rent', 'Unde qui vero ab qua', NULL, 1, 0, '2023-02-01 05:14:37', '2023-02-01 05:14:37'),
	(21, 'Carl Meyer', 'carl-meyer', '<p>asdfsda fsadfasdfasdfs fdas fasdfasd fasdfsafdas fsdaf</p>', 'Esse quasi et inven', 305, '458', NULL, NULL, 0, 0, 'Buy', 'Cumque tempor aut te', NULL, 1, 0, '2023-02-01 05:21:24', '2023-02-01 05:21:24'),
	(23, 'Aileen Harding', 'aileen-harding', '<p>sadfas fas fasdf asfa sdfasdfasdf asf as fsad fasfsd</p>', 'Provident sed irure', 590, '120', NULL, NULL, 0, 0, 'Buy', 'Nulla sunt sunt vol', NULL, 1, 0, '2023-02-01 07:35:24', '2023-02-01 07:35:24'),
	(24, 'Haley Bradford', 'haley-bradford', '<p>fsafsd fadf asdfasdfasd fsda fasfsdafsdf</p>', 'Eos omnis ipsum cor', 123, '457', NULL, NULL, 0, 0, 'Rent', 'Expedita adipisicing', NULL, 1, 0, '2023-02-01 07:59:39', '2023-02-01 08:01:46'),
	(25, 'Shahmir Residency', 'shahmir-residency', '<p>SHAHMIR RESIDENCY is an ideal community, complemented with exclusive &amp; essential facilities enhancing privacy, promoting aesthetics, ensuring security, and absorbing environmental and rejuvenating recreation making your dream a reality. Promoting the concept of a unique housing community wherein peace, privacy and pleasure would be guaranteed in a serene and peaceful ambiance. Park, walkways and a beautifully landscaped area are reserved for the kids and children of all ages to indulge in healthy activities.</p><p>The project also provides the facility of a community hall to enable the residents to enjoy their social gatherings in a friendly environment. A graceful mosque is also provided within the project. It is located in the peaceful environment of Scheme 33 on University Road. Shahmir residency offers following Facilities for the Convenience of its Residents:</p><ol><li>Masjid</li><li>School</li></ol><p>The ultimate notion behind the project is to create fully planned and technically designed Luxurious Housing scheme, having considered the social needs and values of its residents. All Bungalows have been designed with a provision of maximum natural light and fresh air, which makes our project attractive.</p><p>The project also provides the facility of a community hall to enable the residents to enjoy their social gatherings in a friendly environment. A graceful mosque is also provided within the project. It is located in the peaceful environment of Scheme 33 on University Road. Shahmir residency offers following Facilities for the Convenience of its Residents:</p><p>The ultimate notion behind the project is to create fully planned and technically designed Luxurious Housing scheme, having considered the social needs and values of its residents. All Bungalows have been designed with a provision of maximum natural light and fresh air, which makes our project attractive.&lt;</p>', 'University Road', 12500000, '1200', NULL, NULL, 0, 0, 'Buy', 'Karachi', NULL, 1, 0, '2023-02-04 02:19:53', '2023-02-04 02:19:53'),
	(26, 'Falak Residency', 'falak-residency', '<p>SHAHMIR RESIDENCY is an ideal community, complemented with exclusive &amp; essential facilities enhancing privacy, promoting aesthetics, ensuring security, and absorbing environmental and rejuvenating recreation making your dream a reality. Promoting the concept of a unique housing community wherein peace, privacy and pleasure would be guaranteed in a serene and peaceful ambiance. Park, walkways and a beautifully landscaped area are reserved for the kids and children of all ages to indulge in healthy activities.</p><p>SHAHMIR RESIDENCY is an ideal community, complemented with exclusive &amp; essential facilities enhancing privacy, promoting aesthetics, ensuring security, and absorbing environmental and rejuvenating recreation making your dream a reality. Promoting the concept of a unique housing community wherein peace, privacy and pleasure would be guaranteed in a serene and peaceful ambiance. Park, walkways and a beautifully landscaped area are reserved for the kids and children of all ages to indulge in healthy activities.</p><p>SHAHMIR RESIDENCY is an ideal community, complemented with exclusive &amp; essential facilities enhancing privacy, promoting aesthetics, ensuring security, and absorbing environmental and rejuvenating recreation making your dream a reality. Promoting the concept of a unique housing community wherein peace, privacy and pleasure would be guaranteed in a serene and peaceful ambiance. Park, walkways and a beautifully landscaped area are reserved for the kids and children of all ages to indulge in healthy activities.</p>', 'University Road Karachi', 400000000, '45600', NULL, NULL, 0, 0, 'Rent', 'Karachi', NULL, 1, 0, '2023-02-04 02:25:39', '2023-02-04 02:25:39'),
	(27, 'The Avenu Park Vie City', 'the-avenu-city', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Gulshan Iqbal Block 2', 120000000, '1000', NULL, NULL, 1, 2, 'Rent', 'Karachi', NULL, 1, 0, '2023-02-05 07:18:03', '2023-02-05 07:23:41');

-- Dumping structure for table itcglobal.property_types
CREATE TABLE IF NOT EXISTS `property_types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.property_types: ~1 rows (approximately)
INSERT INTO `property_types` (`id`, `name`, `slug`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
	(2, 'Flat', 'flat', 1, 0, '2023-02-05 06:11:32', '2023-02-05 06:11:32');

-- Dumping structure for table itcglobal.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.roles: ~1 rows (approximately)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin', NULL, NULL);

-- Dumping structure for table itcglobal.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.role_has_permissions: ~0 rows (approximately)

-- Dumping structure for table itcglobal.subscriptions
CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.subscriptions: ~0 rows (approximately)

-- Dumping structure for table itcglobal.subscription_items
CREATE TABLE IF NOT EXISTS `subscription_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subscription_id` bigint unsigned NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscription_items_subscription_id_stripe_price_unique` (`subscription_id`,`stripe_price`),
  UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.subscription_items: ~0 rows (approximately)

-- Dumping structure for table itcglobal.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_delete` tinyint NOT NULL DEFAULT '0',
  `login_at` timestamp NULL DEFAULT NULL,
  `logout_at` timestamp NULL DEFAULT NULL,
  `is_login` tinyint DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_delete`, `login_at`, `logout_at`, `is_login`) VALUES
	(1, 'Admin\r\n', 'admin@admin.com', NULL, '$2y$10$WbO5vW7epMgMutoA7iFBmes4VXQ8tQf2afN7YGJRDCD41hcAGPOX6', NULL, '2022-11-20 13:52:44', '2023-02-11 01:40:15', 0, '2023-02-11 01:40:15', '2023-02-06 08:18:12', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
