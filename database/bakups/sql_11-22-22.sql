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


-- Dumping database structure for itcglobal
CREATE DATABASE IF NOT EXISTS `itcglobal` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `itcglobal`;

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table itcglobal.pages: ~5 rows (approximately)
INSERT INTO `pages` (`id`, `name`, `slug`, `view`, `layout`, `description`, `is_active`, `has_custom_view`, `display_to_menu`, `is_delete`, `created_at`, `updated_at`, `is_home_page`) VALUES
	(1, 'Home', 'home', 'indexv1', 'layoutv1', NULL, 1, 1, 1, 0, '2022-11-20 08:48:06', '2022-11-20 08:48:06', 1),
	(2, 'About Us', 'about-us', 'about-us', 'layoutv1', NULL, 1, 1, 1, 0, '2022-11-20 08:52:35', '2022-11-20 08:52:35', 0),
	(4, 'Contact Us', 'contact-us', 'contact-us', 'layoutv1', NULL, 1, 1, 1, 0, '2022-11-20 08:59:50', '2022-11-20 08:59:50', 0),
	(5, 'Services', 'services', 'services', 'layoutv1', NULL, 1, 1, 1, 0, '2022-11-20 09:05:40', '2022-11-20 09:05:40', 0),
	(6, 'Get A Quote', 'get-a-quote', 'get-a-quote', 'layoutv1', NULL, 1, 1, 0, 0, '2022-11-20 09:08:11', '2022-11-20 09:08:11', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
