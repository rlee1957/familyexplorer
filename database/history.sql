-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: bucks
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history` (
  `relationship_idx` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `sent_date` varchar(25) DEFAULT NULL,
  `received_date` varchar(25) DEFAULT NULL,
  `amount` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` VALUES (1,'Advancement to level 1','2000/01/01','2000/01/01',1),(22,'Advancement to level 1','2000/01/01','2000/01/01',1),(43,'Advancement to level 1','2000/01/01','2000/01/01',1),(64,'Advancement to level 1','2000/01/01','2000/01/01',10),(2,'Advancement to level 1','2011-05-29','',1),(23,'Advancement to level 1','2011-05-29','',1),(44,'Advancement to level 1','2011-05-29','',1),(65,'Advancement to level 1','2011-05-29','',10),(3,'Advancement to level 1','2011-05-29','2011-06-04',1),(4,'Advancement to level 1','2011-05-28','2011-06-04',1),(5,'Advancement to level 1','2011-05-29','2011-06-27',1),(6,'Advancement to level 1','2011-07-11','',1),(7,'Advancement to level 1','2011-07-11','',1),(10,'Advancement to level 1','2011-07-11','',1),(11,'Advancement to level 1','2011-07-10','',1),(12,'Advancement to level 1','2011-06-06','2011-06-10',1),(13,'Advancement to level 1','2011-07-10','2011-06-12',1),(14,'Advancement to level 1','2011-07-04','2011-07-06',1),(15,'Advancement to level 1','2011-06-25','2011-07-10',1),(16,'Advancement to level 1','2011-06-12','2011-07-10',1),(17,'Advancement to level 1','2011-06-27','2011-07-01',1),(18,'Advancement to level 1','2011-06-27','2011-06-27',1),(1,'Advancement to level 1','2000/01/01','2000/01/01',1),(22,'Advancement to level 1','2000/01/01','2000/01/01',1),(43,'Advancement to level 1','2000/01/01','2000/01/01',1),(64,'Advancement to level 1','2000/01/01','2000/01/01',10),(2,'Advancement to level 1','2011-05-29','',1),(23,'Advancement to level 1','2011-05-29','',1),(44,'Advancement to level 1','2011-05-29','',1),(65,'Advancement to level 1','2011-05-29','',10),(24,'Advancement to level 1','2011-05-29','',1),(45,'Advancement to level 1','2011-05-29','',1),(66,'Advancement to level 1','2011-05-29','',10),(25,'Advancement to level 1','2011-05-28','2011-06-04',1),(26,'Advancement to level 1','2011-05-29','2011-06-04',1),(27,'Advancement to level 1','2011-07-11','',1),(28,'Advancement to level 1','2011-07-11','',1),(31,'Advancement to level 1','2011-07-11','',1),(32,'Advancement to level 1','2011-07-10','',1),(33,'Advancement to level 1','2011-06-06','2011-06-27',1),(34,'Advancement to level 1','2011-07-10','',1),(35,'Advancement to level 1','2011-07-04','',1),(36,'Advancement to level 1','2011-06-25','2011-07-06',1),(37,'Advancement to level 1','2011-06-12','2011-06-14',1),(38,'Advancement to level 1','2011-06-27','2011-07-01',1),(39,'Advancement to level 1','2011-06-27','2011-06-27',1),(1,'Advancement to level 1','2000/01/01','2000/01/01',1),(22,'Advancement to level 1','2000/01/01','2000/01/01',1),(43,'Advancement to level 1','2000/01/01','2000/01/01',1),(64,'Advancement to level 1','2000/01/01','2000/01/01',10),(2,'Advancement to level 1','2011-05-29','',1),(23,'Advancement to level 1','2011-05-29','',1),(44,'Advancement to level 1','2011-05-29','',1),(65,'Advancement to level 1','2011-05-29','',10),(24,'Advancement to level 1','2011-05-29','',1),(45,'Advancement to level 1','2011-05-29','',1),(66,'Advancement to level 1','2011-05-29','',10),(46,'Advancement to level 1','2011-05-28','',1),(67,'Advancement to level 1','2011-05-28','',10),(47,'Advancement to level 1','2011-05-29','2011-06-04',1),(48,'Advancement to level 1','2011-07-11','',1),(49,'Advancement to level 1','2011-07-11','',1),(52,'Advancement to level 1','2011-07-11','',1),(53,'Advancement to level 1','2011-07-10','',1),(54,'Advancement to level 1','2011-06-06','2011-06-07',1),(55,'Advancement to level 1','2011-07-10','',1),(56,'Advancement to level 1','2011-07-04','',1),(57,'Advancement to level 1','2011-06-25','2011-06-27',1),(58,'Advancement to level 1','2011-06-12','',1),(59,'Advancement to level 1','2011-06-27','2011-07-03',1),(60,'Advancement to level 1','2011-06-27','',1),(1,'Advancement to level 1','2000/01/01','2000/01/01',1),(22,'Advancement to level 1','2000/01/01','2000/01/01',1),(43,'Advancement to level 1','2000/01/01','2000/01/01',1),(64,'Advancement to level 1','2000/01/01','2000/01/01',10),(2,'Advancement to level 1','2011-05-29','2011-06-04',1),(23,'Advancement to level 1','2011-05-29','2011-06-04',1),(44,'Advancement to level 1','2011-05-29','2011-06-04',1),(65,'Advancement to level 1','2011-05-29','2011-06-04',10),(24,'Advancement to level 1','2011-05-29','2011-06-04',1),(45,'Advancement to level 1','2011-05-29','2011-06-04',1),(66,'Advancement to level 1','2011-05-29','2011-06-04',10),(46,'Advancement to level 1','2011-05-28','2011-06-04',1),(67,'Advancement to level 1','2011-05-28','2011-06-04',10),(68,'Advancement to level 1','2011-05-29','2011-06-04',10),(69,'Advancement to level 1','2011-07-11','',10),(70,'Advancement to level 1','2011-07-11','',10),(73,'Advancement to level 1','2011-07-11','',10),(74,'Advancement to level 1','2011-07-10','',10),(75,'Advancement to level 1','2011-06-06','2011-06-07',10),(76,'Advancement to level 1','2011-07-10','',10),(77,'Advancement to level 1','2011-07-04','',10),(78,'Advancement to level 1','2011-06-25','',10),(79,'Advancement to level 1','2011-06-12','',10),(80,'Advancement to level 1','2011-06-27','2011-07-03',10),(81,'Advancement to level 1','2011-06-27','',10);
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-17 20:45:30
