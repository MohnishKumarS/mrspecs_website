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


-- Dumping database structure for mrspecs
CREATE DATABASE IF NOT EXISTS `mrspecs` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mrspecs`;

-- Dumping structure for table mrspecs.brands
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mrspecs.brands: ~8 rows (approximately)
INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(2, 'Rayban', '2024-01-09 03:40:28', '2024-01-09 03:40:28'),
	(4, 'Prada', '2024-01-09 09:32:01', NULL),
	(5, 'Gucci', '2024-01-09 09:32:02', NULL),
	(6, 'Calvin Klein', NULL, NULL),
	(7, 'Oakley', NULL, NULL),
	(8, 'Titan', NULL, NULL),
	(9, 'Vincent chase', NULL, NULL);

-- Dumping structure for table mrspecs.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0=visible,1=hidden',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mrspecs.categories: ~4 rows (approximately)
INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Sunglasses', 'sunglasses', '1703683653.webp', 0, '2023-12-27 07:57:33', '2023-12-27 07:57:33'),
	(2, 'Powerglasses', 'powerglasses', '1703760161.jpg', 0, '2023-12-27 07:59:22', '2023-12-28 05:12:41'),
	(3, 'contact lenses', 'contact-lenses', '1703758169.jpg', 0, '2023-12-28 04:39:29', '2023-12-28 04:39:29'),
	(5, 'Reading glasses', 'reading-glasses', '1703844036.jpg', 0, '2023-12-29 04:30:36', '2023-12-29 04:30:36');

-- Dumping structure for table mrspecs.failed_jobs
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

-- Dumping data for table mrspecs.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table mrspecs.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mrspecs.migrations: ~7 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2023_12_27_104742_add_details_to_users_table', 1),
	(7, '2023_12_27_112027_create_categories_table', 2),
	(8, '2023_12_28_130121_create_products_table', 3),
	(9, '2024_01_08_131119_create_brands_table', 4);

-- Dumping structure for table mrspecs.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mrspecs.password_resets: ~0 rows (approximately)

-- Dumping structure for table mrspecs.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mrspecs.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table mrspecs.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mrspecs.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table mrspecs.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` int NOT NULL,
  `selling_price` int NOT NULL,
  `quantity` int NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shape` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trending` tinyint NOT NULL DEFAULT '0' COMMENT '0=hidden,1=visible',
  `popular` tinyint NOT NULL DEFAULT '0' COMMENT '0=hidden,1=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mrspecs.products: ~13 rows (approximately)
INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `image`, `original_price`, `selling_price`, `quantity`, `brand`, `shape`, `trending`, `popular`, `created_at`, `updated_at`) VALUES
	(1, 2, 'asdddddddddddd', 'asdasdadasd', '78098.jpg,28619.jpg,98025.webp', 234, 34, 34, 'Prada', 'Rectangle', 0, 0, '2023-12-29 02:11:57', '2024-01-09 04:18:44'),
	(2, 1, 'AISLIN Full-rim Frame Round Sunglasses For Men', 'buy-red-sunglasses-for-men-by-aislin', '60364.avif', 150, 100, 3, 'Gucci', '', 1, 0, '2023-12-29 02:33:50', '2023-12-29 02:33:50'),
	(3, 1, 'NFG Sunglasses | Stoic – Back Roads Apparel', 'nfg-sunglasses-stoic-back-roads-apparel', '23843.jpg,61742.jpg', 200, 150, 22, 'Others', '', 1, 0, '2023-12-29 02:35:43', '2023-12-29 02:35:43'),
	(4, 1, 'Colour Cooling Glass Goggles & Aviator Sunglasses', 'colour-cooling-glass-goggles-aviator-sunglasses', '70170.webp', 230, 111, 22, 'Gucci', 'Square', 0, 1, '2023-12-29 02:37:38', '2023-12-29 05:14:33'),
	(5, 1, 'phenomenal Aviator Boy\'s and Girl\'s Sunglasses', 'phenomenal-aviator-boys-and-girls-sunglasses', '34200.jpg', 133, 111, 22, 'Prada', '', 0, 1, '2023-12-29 02:40:38', '2023-12-29 02:40:38'),
	(6, 2, 'Black Blue Light Glasses for Men and Women Zero Power', 'black-blue-light-glasses-for-men-and-women-zero-power', '97900.webp,36766.webp', 300, 180, 4, 'Others', '', 1, 0, '2023-12-29 02:42:46', '2023-12-29 02:42:46'),
	(7, 2, 'Power Blue Cut & Anti glare Computer Eyeglasses', 'power-blue-cut-anti-glare-computer-eyeglasses', '58017.webp', 1500, 1000, 54, 'RayBan', 'Aviator', 1, 0, '2023-12-29 02:43:49', '2023-12-29 05:12:18'),
	(8, 2, 'SHOPPINGSEO Blueray Block Uv Protected Computer Glasses', 'shoppingseo-blueray-block-uv-protected-computer-glasses', '83592.webp', 1200, 999, 56, 'Others', 'Geometric', 0, 1, '2023-12-29 02:45:13', '2023-12-29 05:14:17'),
	(9, 2, 'Hard coated Lens,Use unisex', 'hard-coated-lensuse-unisex', '67911.jpg', 1222, 565, 32, 'Others', 'Rectangle', 1, 0, '2023-12-29 02:53:53', '2023-12-29 02:53:53'),
	(10, 3, 'Contact Lenses for Vision Correction', 'contact-lenses-for-vision-correction', '761.jpg', 211, 19, 12, 'Others', 'Round', 0, 1, '2023-12-29 02:55:53', '2023-12-29 04:48:21'),
	(11, 3, 'ColourVUE Glamour Grey Coloured Contact Lenses', 'colourvue-glamour-grey-coloured-contact-lenses', '51822.webp', 290, 120, 232, 'Others', 'Round', 1, 0, '2023-12-29 02:57:10', '2023-12-29 02:57:10'),
	(12, 3, 'Contact lens with built-in telescope to fight blindness', 'contact-lens-with-built-in-telescope-to-fight-blindness', '25843.webp', 345, 124, 12, 'Others', 'Round', 0, 1, '2023-12-29 02:58:20', '2023-12-29 02:58:20'),
	(13, 5, 'Shop Reading Eyeglasses Online at Best Prices', 'shop-reading-eyeglasses-online-at-best-price', '87159.webp', 2000, 1400, 23, 'Calvin Klein', 'Rectangle', 1, 0, '2023-12-29 04:31:14', '2024-01-09 04:17:50');

-- Dumping structure for table mrspecs.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` tinyint NOT NULL DEFAULT '0' COMMENT '0:user,1:admin',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mrspecs.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
	(1, 'moni', 'moni@gmai.com', NULL, '$2y$12$.7hivtEdZ5QO9iKA5Yl4gu0PDEj39vrc9s0GSy94UIJO4Fo2SKt1W', NULL, '2023-12-27 05:36:23', '2023-12-27 05:36:23', 0),
	(2, 'lee', 'lee@gmail.com', NULL, '$2y$12$PyAIVPzIKYJUjn1TRYYn/.Dx1hRFFEYKY.INzioIBzeqsTao2jJV2', NULL, '2023-12-27 05:39:08', '2023-12-27 05:39:08', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
