-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: mytestdb
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `myimages`
--

DROP TABLE IF EXISTS `myimages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `myimages` (
  `imageId` int NOT NULL AUTO_INCREMENT,
  `imagePath` varchar(255) NOT NULL,
  `isActive` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`imageId`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `myimages`
--

LOCK TABLES `myimages` WRITE;
/*!40000 ALTER TABLE `myimages` DISABLE KEYS */;
INSERT INTO `myimages` VALUES (1,'/img/PNG_Type_Fire.png',1),(2,'/img/PNG_Type_Ice.png',1),(3,'/img/PNG_Type_Imaginary.png',1),(4,'/img/PNG_Type_Lightning.png',1),(5,'/img/PNG_Type_Physical.png',1),(6,'/img/PNG_Type_Quantum.png',1),(7,'/img/PNG_Type_Wind.png',1),(8,'/img/PNG_Path_Abundance.png',1),(9,'/img/PNG_Path_Destruction.png',1),(10,'/img/PNG_Path_Erudition.png',1),(11,'/img/PNG_Path_Harmony.png',1),(12,'/img/PNG_Path_Hunt.png',1),(13,'/img/PNG_Path_Nihility.png',1),(14,'/img/PNG_Path_Preservation.png',1),(15,'/img/Kafka_Splash.png',1),(16,'/img/Kakfa_Profile_Full.png',1),(17,'/img/Kafka_Profile_Small.png',1),(18,'/img/SilverWolf_Splash.png',1),(19,'/img/SilverWolf_Profile_Full.png',1),(20,'/img/SilverWolf_Profile_Small.png',1),(21,'/img/TrailblazerP_Splash.png',1),(22,'/img/TrailblazerP_Profile_Full.png',1),(23,'/img/TrailblazerP_Profile_Small.png',1),(24,'/img/MarchSeventh_Splash.png',1),(25,'/img/MarchSeventh_Profile_Full.png',1),(26,'/img/MarchSeventh_Profile_Small.png',1),(27,'/img/DanHung_Splash.png',1),(28,'/img/DanHung_Profile_Full.png',1),(29,'/img/DanHung_Profile_Small.png',1),(30,'/img/Arlan_Splash.png',1),(31,'/img/Arlan_Profile_Full.png',1),(32,'/img/Arlan_Profile_Small.png',1),(33,'/img/Himeko_Splash.png',1),(34,'/img/Himeko_Profile_Full.png',1),(35,'/img/Himeko_Profile_Small.png',1),(36,'/img/Asta_Splash.png',1),(37,'/img/Asta_Profile_Full.png',1),(38,'/img/Asta_Profile_Small.png',1),(39,'/img/Welt_Splash.png',1),(40,'/img/Welt_Profile_Full.png',1),(41,'/img/Welt_Profile_Small.png',1),(42,'/img/Herta_Splash.png',1),(43,'/img/Herta_Profile_Full.png',1),(44,'/img/Herta_Profile_Small.png',1),(45,'/img/Sampo_Splash.png',1),(46,'/img/Sampo_Profile_Full.png',1),(47,'/img/Sampo_Profile_Small.png',1),(48,'/img/Gepard_Splash.png',1),(49,'/img/Gepard_Profile_Full.png',1),(50,'/img/Gepard_Profile_Small.png',1),(51,'/img/Bronya_Splash.png',1),(52,'/img/Bronya_Profile_Full.png',1),(53,'/img/Bronya_Profile_Small.png',1),(54,'/img/Serval_Splash.png',1),(55,'/img/Serval_Profile_Full.png',1),(56,'/img/Serval_Profile_Small.png',1),(57,'/img/Pela_Splash.png',1),(58,'/img/Pela_Profile_Full.png',1),(59,'/img/Pela_Profile_Small.png',1),(60,'/img/Natasha_Splash.png',1),(61,'/img/Natasha_Profile_Full.png',1),(62,'/img/Natasha_Profile_Small.png',1),(63,'/img/Hook_Splash.png',1),(64,'/img/Hook_Profile_Full.png',1),(65,'/img/Hook_Profile_Small.png',1),(66,'/img/Seele_Splash.png',1),(67,'/img/Seele_Profile_Full.png',1),(68,'/img/Seele_Profile_Small.png',1),(69,'/img/Clara_Splash.png',1),(70,'/img/Clara_Profile_Full.png',1),(71,'/img/Clara_Profile_Small.png',1),(72,'/img/TrailblazerF_Splash.png',1),(73,'/img/TrailblazerF_Profile_Full.png',1),(74,'/img/TrailblazerF_Profile_Small.png',1),(75,'/img/Tingyun_Splash.png',1),(76,'/img/Tingyun_Profile_Full.png',1),(77,'/img/Tingyun_Profile_Small.png',1),(78,'/img/Yukong_Splash.png',1),(79,'/img/Yukong_Profile_Full.png',1),(80,'/img/Yukong_Profile_Small.png',1),(81,'/img/JingYuan_Splash.png',1),(82,'/img/JingYuan_Profile_Full.png',1),(83,'/img/JingYuan_Profile_Small.png',1),(84,'/img/Sushang_Splash.png',1),(85,'/img/Sushang_Profile_Full.png',1),(86,'/img/Sushang_Profile_Small.png',1),(87,'/img/Luocha_Splash.png',1),(88,'/img/Luocha_Profile_Full.png',1),(89,'/img/Luocha_Profile_Small.png',1),(90,'/img/FuXuan_Splash.png',1),(91,'/img/FuXuan_Splash.png',1),(92,'/img/FuXuan_Profile_Small.png',1),(93,'/img/Blade_Splash.png',1),(94,'/img/Blade_Profile_Full.png',1),(95,'/img/Blade_Profile_Small.png',1),(96,'/img/Yanqing_Splash.png',1),(97,'/img/Yanqing_Profile_Full.png',1),(98,'/img/Yanqing_Profile_Small.png',1),(99,'/img/ImbibitorLunae_Splash',1),(100,'/img/ImbibitorLunae_Splash',1),(101,'/img/ImbibitorLunae_Profile_Small.png',1);
/*!40000 ALTER TABLE `myimages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-25 21:50:04
