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
-- Table structure for table `mywebdocs`
--

DROP TABLE IF EXISTS `mywebdocs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mywebdocs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Title` varchar(25) NOT NULL,
  `Header1` varchar(25) DEFAULT NULL,
  `Text1` varchar(225) DEFAULT NULL,
  `ParentPage` int DEFAULT '0',
  `SortOrder` int DEFAULT '2',
  `isActive` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mywebdocs`
--

LOCK TABLES `mywebdocs` WRITE;
/*!40000 ALTER TABLE `mywebdocs` DISABLE KEYS */;
INSERT INTO `mywebdocs` VALUES (1,'Home','Welcome','This website is a Honkai Star Rail Companion Application that provides Character information and Team Building tools to players.',0,0,1),(2,'Characters','Characters','This is the Characters Page, where we will display the Characters from the Database. (Characters not implemented)',0,2,1),(3,'Admin','Administration','This is the Admin Page that will only be accessable to users that are logged in as Admin',0,3,1),(4,'Teams','TeamBuilder','This is the TeamBuilder Page, where players will be able to use the characters from the Characters page in a proposed team for the purposes of planning.',0,4,1),(5,'Home 1','Sub Header number 1','My text, asfaf af af af a sag asf saf',1,3,1),(6,'Home 2','Sub Header number 2','My text, asfaf af af af a sag asf saf',1,4,1),(7,'Something 1','Sub Header number 1','My text, asfaf af af af a sag asf saf',2,3,1),(8,'Something 2','Sub Header number 2','My text, asfaf af af af a sag asf saf',2,4,1);
/*!40000 ALTER TABLE `mywebdocs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-02  8:37:58
