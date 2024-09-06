-- MySQL dump 10.13  Distrib 9.0.1, for macos14 (arm64)
--
-- Host: localhost    Database: ntra
-- ------------------------------------------------------
-- Server version	9.0.1

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
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ads` (
                       `id` int NOT NULL AUTO_INCREMENT,
                       `title` varchar(255) DEFAULT NULL,
                       `user_id` int DEFAULT NULL,
                       `status_id` int DEFAULT NULL,
                       `branch_id` int DEFAULT NULL,
                       `address` varchar(255) DEFAULT NULL,
                       `price` float DEFAULT NULL,
                       `rooms` int DEFAULT NULL,
                       `square` float DEFAULT NULL,
                       `description` text,
                       `created_at` timestamp NULL DEFAULT NULL,
                       `updated_at` timestamp NULL DEFAULT NULL,
                       PRIMARY KEY (`id`),
                       KEY `ads_branch_id_fk` (`branch_id`),
                       KEY `ads_status_id_fk` (`status_id`),
                       KEY `ads_users_id_fk` (`user_id`),
                       CONSTRAINT `ads_branch_id_fk` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
                       CONSTRAINT `ads_status_id_fk` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
                       CONSTRAINT `ads_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ads`
--

LOCK TABLES `ads` WRITE;
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;
INSERT INTO `ads` VALUES (4,'3 xonali',1,1,1,'Toshkent sh., Sergeli t.',500,3,150,'qwerty','2024-08-28 15:21:48',NULL),(5,'5 xonali',2,1,2,'Toshkent sh., Sergeli t.',1000,5,300,'qwerty','2024-08-28 15:25:29',NULL),(6,'4 xonali',1,1,1,'Toshkent sh., Sergeli t.',500,4,200,'qwerty','2024-08-30 07:32:26',NULL);
/*!40000 ALTER TABLE `ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `branch` (
                          `id` int NOT NULL AUTO_INCREMENT,
                          `name` varchar(255) DEFAULT NULL,
                          `address` varchar(255) DEFAULT NULL,
                          `created_at` timestamp NULL DEFAULT NULL,
                          PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branch`
--

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
INSERT INTO `branch` VALUES (1,'Chilonzor','Tashkent city, Chilonzon district',NULL),(2,'Khadra','Tashkent city, Shaykhontohur district',NULL),(3,'Fargana','Fargona region, Fargona city',NULL),(4,'Khorezm','Khorezm region, Urganch city',NULL),(6,'Sergeli','Toshkent sh., Sergeli t.',NULL);
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
                          `id` int NOT NULL AUTO_INCREMENT,
                          `ads_id` int DEFAULT NULL,
                          `image_name` varchar(255) DEFAULT NULL,
                          PRIMARY KEY (`id`),
                          KEY `images_ads_id_fk` (`ads_id`),
                          CONSTRAINT `images_ads_id_fk` FOREIGN KEY (`ads_id`) REFERENCES `ads` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,4,'66cf408caa808___5.jpg'),(2,5,'66cf416965acc___10.jpg'),(3,6,'66d1758a6817e___1.jpg');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
                         `id` int NOT NULL AUTO_INCREMENT,
                         `role` varchar(255) DEFAULT NULL,
                         PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin'),(2,'user'),(3,'broker');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status` (
                          `id` int NOT NULL AUTO_INCREMENT,
                          `status` varchar(255) DEFAULT NULL,
                          PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'Active'),(2,'Deactive');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
                         `id` int NOT NULL AUTO_INCREMENT,
                         `username` varchar(255) DEFAULT NULL,
                         `position` varchar(255) DEFAULT NULL,
                         `gender` enum('male','female') DEFAULT NULL,
                         `phone` int DEFAULT NULL,
                         `password` varchar(255) DEFAULT NULL,
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL,
                         `deleted_at` timestamp NULL DEFAULT NULL,
                         PRIMARY KEY (`id`),
                         UNIQUE KEY `users_pk` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Bobur',NULL,'male',951880800,'$2y$10$7hjfs9vT.PR.Ckcu5XJmKeyYW/bjKRelxPJDRK.XHLvrU0u7AYIVe','2024-08-28 13:27:35',NULL,NULL),(2,'Bobur',NULL,'male',981880810,'$2y$10$TP2oqC5kOeZCcdAgrwMf.e3SH9gnnhdrb3EzYKDlgDQGB7UV/Am9y','2024-08-28 15:24:37',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_roles`
--

DROP TABLE IF EXISTS `users_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users_roles` (
                               `user_id` int DEFAULT NULL,
                               `role_id` int DEFAULT NULL,
                               KEY `users_roles_roles_id_fk` (`role_id`),
                               KEY `users_roles_users_id_fk` (`user_id`),
                               CONSTRAINT `users_roles_roles_id_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
                               CONSTRAINT `users_roles_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_roles`
--

LOCK TABLES `users_roles` WRITE;
/*!40000 ALTER TABLE `users_roles` DISABLE KEYS */;
INSERT INTO `users_roles` VALUES (1,1);
/*!40000 ALTER TABLE `users_roles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-05 21:15:24