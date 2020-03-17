-- MySQL dump 10.13  Distrib 8.0.17, for osx10.14 (x86_64)
--
-- Host: localhost    Database: mydb2
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ke_areas`
--

DROP TABLE IF EXISTS `ke_areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ke_areas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prefecture_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ke_areas`
--

LOCK TABLES `ke_areas` WRITE;
/*!40000 ALTER TABLE `ke_areas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ke_areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ke_categories`
--

DROP TABLE IF EXISTS `ke_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ke_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `affiliate_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `affiliate_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ranking` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ke_categories`
--

LOCK TABLES `ke_categories` WRITE;
/*!40000 ALTER TABLE `ke_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `ke_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ke_comments`
--

DROP TABLE IF EXISTS `ke_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ke_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) NOT NULL,
  `cookie_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thread_count` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spam` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ke_comments`
--

LOCK TABLES `ke_comments` WRITE;
/*!40000 ALTER TABLE `ke_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `ke_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ke_contacts`
--

DROP TABLE IF EXISTS `ke_contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ke_contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ke_contacts`
--

LOCK TABLES `ke_contacts` WRITE;
/*!40000 ALTER TABLE `ke_contacts` DISABLE KEYS */;
INSERT INTO `ke_contacts` VALUES (1,'ゴリラ','admin@gmail.com','d','2020-03-04 14:39:39','2020-03-04 14:39:39'),(2,'d','admin@gmail.com','f','2020-03-04 14:43:03','2020-03-04 14:43:03'),(3,'ゴリラ','admin@gmail.com','うほ','2020-03-04 14:58:39','2020-03-04 14:58:39');
/*!40000 ALTER TABLE `ke_contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ke_metas`
--

DROP TABLE IF EXISTS `ke_metas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ke_metas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ke_metas`
--

LOCK TABLES `ke_metas` WRITE;
/*!40000 ALTER TABLE `ke_metas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ke_metas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ke_migrations`
--

DROP TABLE IF EXISTS `ke_migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ke_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ke_migrations`
--

LOCK TABLES `ke_migrations` WRITE;
/*!40000 ALTER TABLE `ke_migrations` DISABLE KEYS */;
INSERT INTO `ke_migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_01_09_042107_create_category_table',1),(4,'2019_01_09_042115_create_meta_table',1),(5,'2019_01_09_042121_create_thread_table',1),(6,'2019_01_09_042128_create_comment_table',1),(7,'2019_01_09_182921_create_sessions_table',1),(8,'2019_01_09_184212_create_spams_table',1),(9,'2019_10_13_194019_create_areas_table',1),(10,'2019_10_13_200341_create_people_table',1),(11,'2019_10_13_200501_create_prefectures_table',1),(12,'2019_10_13_200527_create_places_table',1),(13,'2020_03_04_001331_create_studios_table',1),(14,'2020_03_04_225042_create_contacts_table',2);
/*!40000 ALTER TABLE `ke_migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ke_password_resets`
--

DROP TABLE IF EXISTS `ke_password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ke_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ke_password_resets`
--

LOCK TABLES `ke_password_resets` WRITE;
/*!40000 ALTER TABLE `ke_password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `ke_password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ke_people`
--

DROP TABLE IF EXISTS `ke_people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ke_people` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `time` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ke_people`
--

LOCK TABLES `ke_people` WRITE;
/*!40000 ALTER TABLE `ke_people` DISABLE KEYS */;
/*!40000 ALTER TABLE `ke_people` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ke_places`
--

DROP TABLE IF EXISTS `ke_places`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ke_places` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `area_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ke_places`
--

LOCK TABLES `ke_places` WRITE;
/*!40000 ALTER TABLE `ke_places` DISABLE KEYS */;
/*!40000 ALTER TABLE `ke_places` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ke_prefectures`
--

DROP TABLE IF EXISTS `ke_prefectures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ke_prefectures` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ke_prefectures`
--

LOCK TABLES `ke_prefectures` WRITE;
/*!40000 ALTER TABLE `ke_prefectures` DISABLE KEYS */;
/*!40000 ALTER TABLE `ke_prefectures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ke_sessions`
--

DROP TABLE IF EXISTS `ke_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ke_sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ke_sessions`
--

LOCK TABLES `ke_sessions` WRITE;
/*!40000 ALTER TABLE `ke_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ke_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ke_spams`
--

DROP TABLE IF EXISTS `ke_spams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ke_spams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) NOT NULL,
  `cookie_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ke_spams`
--

LOCK TABLES `ke_spams` WRITE;
/*!40000 ALTER TABLE `ke_spams` DISABLE KEYS */;
/*!40000 ALTER TABLE `ke_spams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ke_studios`
--

DROP TABLE IF EXISTS `ke_studios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ke_studios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` double(15,10) NOT NULL,
  `lng` double(15,10) NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ke_studios`
--

LOCK TABLES `ke_studios` WRITE;
/*!40000 ALTER TABLE `ke_studios` DISABLE KEYS */;
INSERT INTO `ke_studios` VALUES (2,'STUDIO BUZZ 池袋',35.7327451000,139.6995164000,'http://buzz-st.com/ikebukuro/','2020-03-04 08:11:50','2020-03-04 08:11:50'),(5,'STUDIO BUZZ 池袋西口校',35.7334073000,139.7059323000,'http://buzz-st.com/sp/ikebukuro2/','2020-03-04 09:45:09','2020-03-04 09:45:09'),(6,'studio BUZZ 西日暮里',35.7323824000,139.7326861000,'http://buzz-st.com/nishinippori/','2020-03-04 09:53:29','2020-03-04 09:53:29'),(8,'STUDIO BUZZ 渋谷',35.6625501000,139.6954624000,'http://buzz-st.com/shibuya/','2020-03-04 09:57:09','2020-03-04 09:57:09'),(10,'STUDIO BUZZ 池袋西口タワー',35.7337752000,139.7075444000,'http://buzz-st.com/ikebukuro3/','2020-03-04 12:09:03','2020-03-04 12:09:03'),(12,'STUDIO BUZZ 新宿',35.6959487000,139.6951510000,'http://buzz-st.com/shinjuku/','2020-03-04 12:30:25','2020-03-04 12:30:25'),(13,'STUDIO BUZZ 表参道',35.6671790000,139.7113477000,'http://buzz-st.com/omotesando/','2020-03-04 12:32:48','2020-03-04 12:32:48'),(14,'STUDIO BUZZ 上野',35.7222371000,139.7778558000,'http://buzz-st.com/ueno2/','2020-03-04 12:35:09','2020-03-04 12:35:09'),(15,'STUDIO BUZZ 日暮里',35.7281578000,139.7684527000,'http://buzz-st.com/nippori/','2020-03-05 11:47:16','2020-03-05 11:47:16'),(16,'STUDIO BUZZ 国分寺',35.6983959000,139.4757469000,'http://buzz-st.com/kokubunji/','2020-03-05 11:48:31','2020-03-05 11:48:31'),(17,'STUDIO BUZZ 羽村',35.7579178000,139.3159668000,'http://buzz-st.com/hamura/','2020-03-05 11:49:19','2020-03-05 11:49:19'),(18,'STUDIO BUZZ 新横浜',35.5084182000,139.6068402000,'http://buzz-st.com/shinyokohama/','2020-03-05 11:50:53','2020-03-05 11:50:53'),(19,'STUDIO BUZZ 相模原',35.5722165000,139.3561736000,'http://buzz-st.com/sagamihara/','2020-03-05 11:51:44','2020-03-05 11:51:44'),(20,'STUDIO BUZZ 久喜',36.0698079000,139.6663418000,'http://buzz-st.com/kuki/','2020-03-05 11:53:28','2020-03-05 11:53:28'),(21,'NOAH STUDIO 学芸大スタジオ',35.6235478000,139.6773430000,'https://www.noahstudio.jp/shop/gakugeidai/','2020-03-05 11:59:26','2020-03-05 11:59:26'),(22,'NOAH STUDIO 新宿スタジオ',35.6933355000,139.6960939000,'https://www.noahstudio.jp/shop/shinjuku/','2020-03-05 12:01:16','2020-03-05 12:01:16'),(23,'NOAH STUDIO 代々木スタジオ',35.6809751000,139.7041720000,'https://www.noahstudio.jp/shop/yoyogi/','2020-03-05 12:02:36','2020-03-05 12:02:36'),(25,'スタジオよもだ鶯谷',35.7246250000,139.7757543000,'https://www.studioyomoda.com/','2020-03-05 12:06:15','2020-03-05 12:06:15'),(26,'新宿村スタジオ',35.6971040000,139.6867433000,'https://www.shinjukumura.co.jp/','2020-03-05 12:08:49','2020-03-05 12:08:49'),(27,'新宿村スタジオWEST',35.6971040000,139.6867433000,'https://www.shinjukumura.co.jp/','2020-03-05 12:09:47','2020-03-05 12:09:47'),(28,'ソニズ渋谷スタジオ',35.6576884000,139.7056611000,'https://sonysdance.com/studio/shibu','2020-03-05 12:12:06','2020-03-05 12:12:06'),(29,'ソニズ東高円寺スタジオ',35.6986693000,139.6565536000,'https://sonysdance.com/studio/h-g','2020-03-05 12:16:10','2020-03-05 12:16:10'),(30,'ソニズ新宿スタジオ',35.6970560000,139.6944098000,'https://sonysdance.com/studio/j-a','2020-03-05 12:18:01','2020-03-05 12:18:01'),(31,'ソニズ新中野鍋横スタジオ',35.6978306000,139.6689386000,'https://sonysdance.com/studio/n-n','2020-03-05 12:19:58','2020-03-05 12:19:58'),(32,'ソニズ高円寺環七スタジオ',35.7062781000,139.6526158000,'https://sonysdance.com/studio/k-k','2020-03-05 12:21:26','2020-03-05 12:21:26'),(33,'ソニズ南阿佐ヶ谷スタジオ',35.6996982000,139.6321616000,'https://sonysdance.com/studio/m-m','2020-03-05 12:22:47','2020-03-05 12:22:47'),(34,'ソニズ方南町スタジオ',35.6828706000,139.6543846000,'https://sonysdance.com/studio/hounan-a','2020-03-05 12:24:02','2020-03-05 12:24:02'),(35,'NOAH STUDIO 都立大スタジオ',35.6176643000,139.6725388000,'https://www.noahstudio.jp/shop/toritsudai/','2020-03-05 12:28:32','2020-03-05 12:28:32'),(36,'NOAH STUDIO 銀座スタジオ',35.6719337000,139.7659291000,'https://www.noahstudio.jp/shop/ginza/','2020-03-05 12:30:55','2020-03-05 12:30:55'),(37,'NOAH STUDIO 秋葉原スタジオ',35.7035015000,139.7693333000,'https://www.noahstudio.jp/shop/akihabara/','2020-03-05 12:37:35','2020-03-05 12:37:35'),(38,'NOAH STUDIO 駒沢スタジオ',35.6345203000,139.6607003000,'https://www.noahstudio.jp/shop/komazawa/','2020-03-05 12:40:18','2020-03-05 12:40:18'),(39,'渋谷店 レンタルダンススタジオ ROOTS',35.6548406000,139.7058654000,'https://dancestudioroots.com/shibuya1/','2020-03-05 12:50:33','2020-03-05 12:50:33'),(40,'駒澤大学店 レンタルダンススタジオ ROOTS',35.6312380000,139.6540063000,'https://dancestudioroots.com/komazawadaigaku/','2020-03-05 12:51:48','2020-03-05 12:51:48'),(41,'中目黒店 レンタルダンススタジオ ROOTS',35.6446700000,139.6982176000,'https://dancestudioroots.com/nakameguro/','2020-03-05 12:52:47','2020-03-05 12:52:47'),(42,'BAMBINI STUDIO',35.6426024000,139.6962934000,'http://studio-workout.jp/','2020-03-05 12:59:35','2020-03-05 12:59:35'),(43,'STUDIO FLAP',35.6221953000,139.6803706000,'http://dance-flap.com/','2020-03-05 13:01:55','2020-03-05 13:01:55'),(44,'渋谷 Rスタジオ',35.6547574000,139.6897483000,'https://shibuya-r-studio.com/','2020-03-05 13:04:55','2020-03-05 13:04:55'),(45,'Dance Studio Cielo',35.6286835000,139.6824680000,'https://dancestudiocielo.com/studio-rental.html','2020-03-05 13:07:28','2020-03-05 13:07:28'),(47,'STUDIO MAJOR',35.6429709000,139.6949117000,'https://studiomajor.jp/','2020-03-05 13:10:08','2020-03-05 13:10:08'),(48,'Eye Candy Pole Dance/Aerial Silk STUDIO',35.6989663000,139.7659944000,'https://akbstudio.jimdofree.com/','2020-03-05 13:20:09','2020-03-05 13:20:09'),(49,'シーバンス ホール',35.6497917000,139.7543573000,'http://www.seavanshall.jp/main.html?20170310','2020-03-05 13:23:30','2020-03-05 13:23:30'),(50,'ETCダンススクール池袋校',35.7352151000,139.7067568000,'http://www.rental.e-t-c.net/','2020-03-05 13:32:15','2020-03-05 13:32:15'),(51,'ETCダンススクール金町校',35.7705707000,139.8695977000,'http://www.rental.e-t-c.net/','2020-03-05 13:33:37','2020-03-05 13:33:37'),(52,'ETCダンススクール 町田校',35.5434455000,139.4414355000,'http://www.rental.e-t-c.net/','2020-03-05 13:34:58','2020-03-05 13:34:58'),(53,'ETCダンススクール川崎校',35.5282481000,139.6959919000,'http://www.rental.e-t-c.net/','2020-03-05 13:35:47','2020-03-05 13:35:47'),(54,'ETCダンススクール横須賀校',35.2784019000,139.6677681000,'http://www.rental.e-t-c.net/','2020-03-05 13:37:08','2020-03-05 13:37:08'),(55,'ETCダンススクール上大岡校',35.4067037000,139.5914175000,'http://www.rental.e-t-c.net/','2020-03-05 13:37:59','2020-03-05 13:37:59'),(56,'ETCダンススクールセンター北校',35.5532794000,139.5759576000,'http://www.rental.e-t-c.net/','2020-03-05 13:39:12','2020-03-05 13:39:12'),(57,'ETCダンススクール本八幡校',35.7195919000,139.9247015000,'http://www.rental.e-t-c.net','2020-03-05 13:40:12','2020-03-05 13:40:12'),(58,'ETCダンススクール藤沢校',35.3360269000,139.4893724000,'http://www.rental.e-t-c.net','2020-03-05 13:41:11','2020-03-05 13:41:11'),(59,'ETCダンススクール南越谷校',35.8750133000,139.7909790000,'http://www.rental.e-t-c.net','2020-03-05 13:42:07','2020-03-05 13:42:07'),(60,'BiTS柏校',35.8620130000,139.9639203000,'http://bits.moo.jp/studio/index.php','2020-03-05 13:49:33','2020-03-05 13:49:33'),(61,'BiTS取手校',35.8996620000,140.0525762000,'https://www.bits-llc.net/取手校/','2020-03-05 13:51:42','2020-03-05 13:51:42');
/*!40000 ALTER TABLE `ke_studios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ke_threads`
--

DROP TABLE IF EXISTS `ke_threads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ke_threads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ke_threads`
--

LOCK TABLES `ke_threads` WRITE;
/*!40000 ALTER TABLE `ke_threads` DISABLE KEYS */;
/*!40000 ALTER TABLE `ke_threads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ke_users`
--

DROP TABLE IF EXISTS `ke_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ke_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ke_users`
--

LOCK TABLES `ke_users` WRITE;
/*!40000 ALTER TABLE `ke_users` DISABLE KEYS */;
INSERT INTO `ke_users` VALUES (1,'もしもドックス','kurosujun124_0709@yahoo.co.jp','$2y$10$rv5DakYV8pAtYChw6FBfquuw7bf.p.AFIQAJUqzaPIkm8uGk8rOTC','yUUc1XCffhaEX8AW40Ro1y64ryCnaNPj0dD2L56WHlclpgf4fjSntlaktHoF','2020-03-04 13:09:19','2020-03-04 13:09:19');
/*!40000 ALTER TABLE `ke_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-06 23:22:31
