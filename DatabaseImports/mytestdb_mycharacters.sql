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
-- Table structure for table `mycharacters`
--

DROP TABLE IF EXISTS `mycharacters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mycharacters` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `rarity` varchar(45) NOT NULL,
  `element` varchar(45) NOT NULL,
  `path` varchar(45) NOT NULL,
  `affiliation` varchar(45) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mycharacters`
--

LOCK TABLES `mycharacters` WRITE;
/*!40000 ALTER TABLE `mycharacters` DISABLE KEYS */;
INSERT INTO `mycharacters` VALUES (1,'Kafka','5','Lightning','Nihility','Stellaron Hunters',1),(2,'Silver Wolf','5','Quantum','Nihility','Stellaron Hunters',1),(3,'Trailblazer(Physical)','5','Physical','Destruction','Astral Express',1),(4,'March 7th','4','Ice','Preservation','Astral Express',1),(5,'Dan Hung','4','Wind','Hunt','Astral Express',1),(6,'Arlan','4','Lightning','Destruction','Herta Space Station',1),(7,'Himeko','5','Fire','Erudition','Astral Express',1),(8,'Asta','4','Fire','Harmony','Herta Space Station',1),(9,'Welt','5','Imaginary','Nihility','Astral Express',1),(10,'Herta','4','Ice','Erudition','Herta Space Station',1),(11,'Sampo','4','Wind','Nihility','Belobog',1),(12,'Gepard','5','Ice','Preservation','Belobog',1),(13,'Bronya','5','Wind','Harmony','Belobog',1),(14,'Serval','4','Lightning','Erudition','Belobog',1),(15,'Pela','4','Ice','Nihility','Belobog',1),(16,'Natasha','4','Physical','Abundance','Belobog',1),(17,'Hook','4','Fire','Destruction','Belobog',1),(18,'Seele','5','Quantum','Hunt','Belobog',1),(19,'Clara','5','Physical','Destruction','Belobog',1),(20,'Trailblazer(Fire)','5','Fire','Preservation','Astral Express',1),(21,'Tingyun','4','Lightning','Harmony','Xianzhou Luofu',1),(22,'Yukong','4','Imaginary','Harmony','Xianzhou Luofu',1),(23,'Jing Yuan','5','Lightning','Erudition','Xianzhou Luofu',1),(24,'Sushang','4','Physical','Hunt','Xianzhou Luofu',1),(25,'Luocha','5','Imaginary','Abundance','Xianzhou Luofu',1),(26,'Fu Xuan','5','Lightning','Preservation','Xianzhou Luofu',1),(27,'Bailu','5','Lightning','Abundance','Xianzhou Luofu',1),(28,'Qingque','4','Quantum','Erudition','Xianzhou Luofu',1),(29,'Blade','5','Wind','Destruction','Stellaron Hunters',1),(30,'Yanqing','5','Ice','Hunt','Xianzhou Luofu',1),(31,'Imbibitor Lunae','5','Imaginary','Destruction','Astral Express',1),(33,'Testing','2','Null','None','Void',0),(34,'Lynx','4','Quantum','Abundance','Xianzhou Luofu',0),(35,'LynxX','5','Imaginary','Abundance','Xianzhou Luofu',0);
/*!40000 ALTER TABLE `mycharacters` ENABLE KEYS */;
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
