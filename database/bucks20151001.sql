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

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` varchar(255) DEFAULT NULL,
  `sponsor1` varchar(255) DEFAULT NULL,
  `sponsor2` varchar(255) DEFAULT NULL,
  `sponsor3` varchar(255) DEFAULT NULL,
  `sponsor4` varchar(255) DEFAULT NULL,
  `pay1_verify` int(1) DEFAULT NULL,
  `pay2_verify` int(1) DEFAULT NULL,
  `pay3_verify` int(1) DEFAULT NULL,
  `pay4_verify` int(1) DEFAULT NULL,
  `receipt1_verify` int(1) DEFAULT NULL,
  `receipt2_verify` int(1) DEFAULT NULL,
  `receipt3_verify` int(1) DEFAULT NULL,
  `receipt4_verify` int(1) DEFAULT NULL,
  `pay1_date` varchar(10) DEFAULT NULL,
  `pay2_date` varchar(10) DEFAULT NULL,
  `pay3_date` varchar(10) DEFAULT NULL,
  `pay4_date` varchar(10) DEFAULT NULL,
  `receipt1_date` varchar(10) DEFAULT NULL,
  `receipt2_date` varchar(10) DEFAULT NULL,
  `receipt3_date` varchar(10) DEFAULT NULL,
  `receipt4_date` varchar(10) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `address1_number` varchar(10) DEFAULT NULL,
  `address1_street_name` varchar(100) DEFAULT NULL,
  `address1_street_direction` varchar(20) DEFAULT NULL,
  `address1_street_type` varchar(25) DEFAULT NULL,
  `address1_space_type` varchar(25) DEFAULT NULL,
  `address1_space_number` varchar(25) DEFAULT NULL,
  `address2` varchar(200) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zip` varchar(15) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `verified` int(1) DEFAULT NULL,
  `level` int(4) DEFAULT NULL,
  `created` varchar(10) DEFAULT NULL,
  `level_date` varchar(10) DEFAULT NULL,
  UNIQUE KEY `idx_members_id` (`id`),
  KEY `idx_members_sponsor1_id` (`sponsor1`),
  KEY `idx_members_sponsor2_id` (`sponsor2`),
  KEY `idx_members_sponsor3_id` (`sponsor3`),
  KEY `idx_members_sponsor4_id` (`sponsor3`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES ('0','0','0','0','0',1,1,1,1,1,1,1,1,'2000/01/01','2000/01/01','2000/01/01','2000/01/01','2000/01/01','2000/01/01','2000/01/01','2000/01/01','start','start@start.com','First','BUCKS','Record','0000','E','First','St','Apt.','0','Care of no one','No Where','Idaho','00000-0000','start',1,9999,'2000/01/01','2000/01/01'),('1306383864201','0','0','0','0',1,1,1,1,0,0,0,1,'2011-05-29','2011-05-29','2011-05-29','2011-05-29','','','','2011-06-04','bp','russelllee@cableone.net','Becky','','Penagos','1166','Alameda','E','','','','','Pocatello','ID','83201','bp',0,0,'2011/05/25','2011/05/25'),('1306384108034','1306383864201','0','0','0',1,1,1,1,1,0,0,1,'2011-05-29','2011-05-29','2011-05-29','2011-05-29','2011-06-04','','','2011-06-04','bk','russelllee@cableone.net','Brisa','M.','Kendall','1713','Bergesen','E','','','','','Boise','ID','83706','bk',0,0,'2011/05/25','2011/05/25'),('1306624190149','1306384108034','1306383864201','0','0',1,1,1,1,1,1,0,1,'2011-05-28','2011-05-28','2011-05-28','2011-05-28','2011-06-04','2011-06-04','','2011-06-04','sab','russelllee@cableone.net','Sage','Abigail','Burnham','','','','','','','494 East 400 South','Jerome','ID','83338','sab',0,0,'2011/05/28','2011/05/28'),('1306624822403','1306624190149','1306384108034','1306383864201','0',1,1,1,1,1,1,1,1,'2011-05-29','2011-05-29','2011-05-29','2011-05-29','2011-06-27','2011-06-04','2011-06-04','2011-06-04','rus','russelllee@cableone.net','Russell','Bert','Lee','1402','Oaklawn','S','Dr.','','','','Boise','ID','83709-1841','Jaime1988',0,0,'2011/05/28','2011/05/28'),('1306709788240','1306624822403','1306624190149','1306384108034','1306383864201',1,1,1,1,0,0,0,0,'2011-07-11','2011-07-11','2011-07-11','2011-07-11','','','','','chanthaminavong','souk_is@yahoo.com','Souk','','Chanthaminavong','8030','Boulder','','Dr.','','','','Boise','ID','83709','elliemutt',0,0,'2011/05/29','2011/05/29'),('1306859946677','1306709788240','1306624822403','1306624190149','1306384108034',1,1,1,1,0,0,0,0,'2011-07-11','2011-07-11','2011-07-11','2011-07-11','','','','','Chanthaminavong2','souk_is@yahoo.com','Baxter','','Hines','8030','Boulder','','Dr.','','','','Boise','ID','83709','elliemutt',0,0,'2011/05/31','2011/05/31'),('1306860851532','1306709788240','1306624822403','1306624190149','1306384108034',0,0,0,0,0,0,0,0,'','','','','','','','','chanthaminavong4','souk_is@yahoo.com','Anysa','','Chanthaminavong','8030','Boulder','','Dr.','','','','Boise','ID','83709','elliemutt',0,0,'2011/05/31','2011/05/31'),('1306861005409','1306709788240','1306624822403','1306624190149','1306384108034',0,0,0,0,0,0,0,0,'','','','','','','','','chanthaminavong3','souk_is@yahoo.com','Sounally','','Chanthaminavong','8030','Boulder','','Dr.','','','','Boise','ID','83709','elliemutt',0,0,'2011/05/31','2011/05/31'),('1307207238057','1306859946677','1306709788240','1306624822403','1306624190149',1,1,1,1,0,0,0,0,'2011-07-11','2011-07-11','2011-07-11','2011-07-11','','','','','sounallychanthaminavong','souk_is@yahoo.com','Bey','','Minavong','1780','Blake','N','St.','','','','Twin Falls','ID','83301','elliemutt',0,0,'2011/06/04','2011/06/04'),('1307207571874','1307207238057','1306859946677','1306709788240','1306624822403',1,1,1,1,0,0,0,0,'2011-07-10','2011-07-10','2011-07-10','2011-07-10','','','','','anysachanthaminavong','souk_is@yahoo.com','Vanh','','Chanthaminavong','1780','Blake','N','St.','','','','Twin Falls','ID','83301','elliemutt',0,0,'2011/06/04','2011/06/04'),('1307281330244','1306624822403','1306624190149','1306384108034','1306383864201',1,1,1,1,1,1,1,1,'2011-06-06','2011-06-06','2011-06-06','2011-06-06','2011-06-10','2011-06-27','2011-06-07','2011-06-07','karewoo','karewoo@yahoo.com','Karen','Lee','Woods','2907','118th DR NE','','','','','','Lake Stevens','WA','98258','spike002',0,0,'2011/06/05','2011/06/05'),('1307644261961','1306624822403','1306624190149','1306384108034','1306383864201',1,1,1,1,1,0,0,0,'2011-07-10','2011-07-10','2011-07-10','2011-07-10','2011-06-12','','','','2mnykds','toomnykds@hotmail.com','Jodee','Lee','Burnham','','','','','','','494 E. 400 S.','Jerome','ID','83338','pfckylee2',0,0,'2011/06/09','2011/06/09'),('1307817968374','1306624822403','1306624190149','1306384108034','1306383864201',1,1,1,1,1,0,0,0,'2011-07-04','2011-07-04','2011-07-04','2011-07-04','2011-07-06','','','','Perma30','reedershar@gmail.com','Sharla','L.','Reeder','336','Grant','','St.','','','','American Falls','ID','83211','Golflinks',0,0,'2011/06/11','2011/06/11'),('1307900250333','1307644261961','1306624822403','1306624190149','1306384108034',1,1,1,1,1,1,1,0,'2011-06-25','2011-06-25','2011-06-25','2011-06-25','2011-07-10','2011-07-06','2011-06-27','','korry','trombone50@gmail.com','Korry','Maurice','Burnham','','','','','','','494 E. 400 S.','Jerome','ID','83338','boneskob1',0,0,'2011/06/12','2011/06/12'),('1307900675146','1307644261961','1306624822403','1306624190149','1306384108034',1,1,1,1,1,1,0,0,'2011-06-12','2011-06-12','2011-06-12','2011-06-12','2011-07-10','2011-06-14','','','KennyBee','kennburnham@gmail.com','Kenn','','Burnham','','','','','','','494 East  400 South','Jerome','ID','83338','queenalla$',0,0,'2011/06/12','2011/06/12'),('1307987446556','1306624822403','1306624190149','1306384108034','1306383864201',1,1,1,1,1,1,1,1,'2011-06-27','2011-06-27','2011-06-27','2011-06-27','2011-07-01','2011-07-01','2011-07-03','2011-07-03','jgmoss','jgmoss@verizon.net','James','A','Moss','4511','36th','S','St.','','','','Arlington','VA','22206','ace444',0,0,'2011/06/13','2011/06/13'),('1308167207311','1306624822403','1306624190149','1306384108034','1306383864201',1,1,1,1,1,1,0,0,'2011-06-27','2011-06-27','2011-06-27','2011-06-27','2011-06-27','2011-06-27','','','Clara','ruth.hummel@yahoo.com','Ruth','S','Hummel','970','Valley Parkway','W','','','','','','','','Tumbl2w22d',0,0,'',''),('1309029084447','1306624822403','1306624190149','1306384108034','1306383864201',0,0,0,0,0,0,0,0,'','','','','','','','','robin','ruth.hummel65@yahoo.com','Ruth','S','Hummel','','','','','','','2166 Shadetree Lane','EScondido','CA','92029','ace444',0,0,'2011/06/25','2011/06/25'),('1309699932462','1307207571874','1307207238057','1306859946677','1306709788240',0,0,0,0,0,0,0,0,'','','','','','','','','mightykwin','quinn.fowler@gmail.com','Quinn','O','Fowler','','','','','','','PO Box 1084','Meridian','ID','83680','bolivia',0,0,'2011/07/03','2011/07/03'),('1310665088299','1306624822403','1306624190149','1306384108034','1306383864201',0,0,0,0,0,0,0,0,'','','','','','','','','Old Spice Man','ericashley1221@yahoo.com','Eric','Von','Ashley','13280','Berwick','','St.','','','','Saratoga','CA','95070','1timothy610',0,0,'2011/07/14','2011/07/14');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participants`
--

DROP TABLE IF EXISTS `participants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participants` (
  `idx` varchar(100) NOT NULL DEFAULT '',
  `personal_key` varchar(100) DEFAULT NULL,
  `sponsor_key` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `street_number` varchar(25) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `direction` varchar(20) DEFAULT NULL,
  `street_type` varchar(25) DEFAULT NULL,
  `space_type` varchar(25) DEFAULT NULL,
  `space_number` varchar(100) DEFAULT NULL,
  `address` text,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `date_created` varchar(25) DEFAULT NULL,
  `date_last_changed` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idx`),
  KEY `personalkey` (`personal_key`),
  KEY `sponsorkey` (`sponsor_key`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participants`
--

LOCK TABLES `participants` WRITE;
/*!40000 ALTER TABLE `participants` DISABLE KEYS */;
INSERT INTO `participants` VALUES ('0','0','0','start','start','start@start.com','First','BUCKS','Record','0000','E','First','St','Apt.','0','Care of no one','No Where','Idaho','00000-0000','2000/01/01','2000/01/01'),('1306383864201','1306383864201','0','bp','bp','russelllee@cableone.net','Becky','','Penagos','1166','Alameda','E','','','','','Pocatello','ID','83201','2011/05/25','2011/05/25'),('1306384108034','1306384108034','1306383864201','bk','bk','russelllee@cableone.net','Brisa','M.','Kendall','1713','Bergesen','E','','','','','Boise','ID','83706','2011/05/25','2011/05/25'),('1306624190149','1306624190149','1306384108034','sab','sab','russelllee@cableone.net','Sage','Abigail','Burnham','','','','','','','494 East 400 South','Jerome','ID','83338','2011/05/28','2011/05/28'),('1306624822403','1306624822403','1306624190149','rus','Jaime1988','russelllee@cableone.net','Russell','Bert','Lee','1402','Oaklawn','S','Dr.','','','','Boise','ID','83709-1841','2011/05/28','2011/05/28'),('1306709788240','1306709788240','1306624822403','chanthaminavong','elliemutt','souk_is@yahoo.com','Souk','','Chanthaminavong','8030','Boulder','','Dr.','','','','Boise','ID','83709','2011/05/29','2011/05/29'),('1306859946677','1306859946677','1306709788240','Chanthaminavong2','elliemutt','souk_is@yahoo.com','Baxter','','Hines','8030','Boulder','','Dr.','','','','Boise','ID','83709','2011/05/31','2011/05/31'),('1306860851532','1306860851532','1306709788240','chanthaminavong4','elliemutt','souk_is@yahoo.com','Anysa','','Chanthaminavong','8030','Boulder','','Dr.','','','','Boise','ID','83709','2011/05/31','2011/05/31'),('1306861005409','1306861005409','1306709788240','chanthaminavong3','elliemutt','souk_is@yahoo.com','Sounally','','Chanthaminavong','8030','Boulder','','Dr.','','','','Boise','ID','83709','2011/05/31','2011/05/31'),('1307207238057','1307207238057','1306859946677','sounallychanthaminavong','elliemutt','souk_is@yahoo.com','Bey','','Minavong','1780','Blake','N','St.','','','','Twin Falls','ID','83301','2011/06/04','2011/06/04'),('1307207571874','1307207571874','1307207238057','anysachanthaminavong','elliemutt','souk_is@yahoo.com','Vanh','','Chanthaminavong','1780','Blake','N','St.','','','','Twin Falls','ID','83301','2011/06/04','2011/06/04'),('1307281330244','1307281330244','1306624822403','karewoo','spike002','karewoo@yahoo.com','Karen','Lee','Woods','2907','118th DR NE','','','','','','Lake Stevens','WA','98258','2011/06/05','2011/06/05'),('1307644261961','1307644261961','1306624822403','2mnykds','pfckylee2','toomnykds@hotmail.com','Jodee','Lee','Burnham','','','','','','','494 E. 400 S.','Jerome','ID','83338','2011/06/09','2011/06/09'),('1307817968374','1307817968374','1306624822403','Perma30','Golflinks','reedershar@gmail.com','Sharla','L.','Reeder','336','Grant','','St.','','','','American Falls','ID','83211','2011/06/11','2011/06/11'),('1307900250333','1307900250333','1307644261961','korry','boneskob1','trombone50@gmail.com','Korry','Maurice','Burnham','','','','','','','494 E. 400 S.','Jerome','ID','83338','2011/06/12','2011/06/12'),('1307900675146','1307900675146','1307644261961','KennyBee','queenalla$','kennburnham@gmail.com','Kenn','','Burnham','','','','','','','494 East  400 South','Jerome','ID','83338','2011/06/12','2011/06/12'),('1307987446556','1307987446556','1306624822403','jgmoss','ace444','jgmoss@verizon.net','James','A','Moss','4511','36th','S','St.','','','','Arlington','VA','22206','2011/06/13','2011/06/13'),('1308167207311','1308167207311','1306624822403','Clara','Tumbl2w22d','ruth.hummel@yahoo.com','Ruth','S','Hummel','970','Valley Parkway','W','','','','','','','','',''),('1309029084447','1309029084447','1306624822403','robin','ace444','ruth.hummel65@yahoo.com','Ruth','S','Hummel','','','','','','','2166 Shadetree Lane','EScondido','CA','92029','2011/06/25','2011/06/25'),('1309699932462','1309699932462','1307207571874','mightykwin','bolivia','quinn.fowler@gmail.com','Quinn','O','Fowler','','','','','','','PO Box 1084','Meridian','ID','83680','2011/07/03','2011/07/03'),('1310665088299','1310665088299','1306624822403','Old Spice Man','1timothy610','ericashley1221@yahoo.com','Eric','Von','Ashley','13280','Berwick','','St.','','','','Saratoga','CA','95070','2011/07/14','2011/07/14');
/*!40000 ALTER TABLE `participants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patrons`
--

DROP TABLE IF EXISTS `patrons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patrons` (
  `idx` varchar(100) NOT NULL DEFAULT '',
  `personal_key` varchar(100) DEFAULT NULL,
  `team_code` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `team_rank` varchar(9) DEFAULT NULL,
  `level` varchar(4) DEFAULT NULL,
  `date_created` varchar(25) DEFAULT NULL,
  `date_last_changed` varchar(25) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  PRIMARY KEY (`idx`),
  KEY `personalkey` (`personal_key`),
  KEY `sponsorkey` (`team_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patrons`
--

LOCK TABLES `patrons` WRITE;
/*!40000 ALTER TABLE `patrons` DISABLE KEYS */;
INSERT INTO `patrons` VALUES ('0','root','0','start','start','start@start.com','First','BUCKS','Record','0000 E. First St. Apt. 0','Care of no one','No Where','Idaho','00000-0000','Parent','-1',NULL,'2000/01/01','2000/01/01',1),('1306383864201','Proxy0','root','bp','bp','rlee.sn@gmail.com','Becky','','Penagos','1166 East Alameda','','Pocatello','Idaho','83201','Proxy','9999','9999','2011/05/25','2011/05/25',1),('1306384108034','Proxy1','proxy0','bk','bk','rlee.sn@gmail.com','Brisa','M','Kendall','1713 East Bergesen','','Boise','Idaho','83706','Proxy','9999','9999','2011/05/25','2011/05/25',1),('1306624190149','Proxy2','proxy1','sab','sab','rlee.sn@gmail.com','Sage','Abigail','Burnham','494 East 400 South','','Jerome','Idaho','83338','Proxy','9999','9999','2011/05/28','2011/05/28',1),('1306624822403','GET$0','Proxy2','rus','Jaime1988','russelllee@cableone.net','Russell','Bert','Lee','1402 Oaklawn S Dr.','','Boise','ID','83709-1841','Patron','1','1','2011/05/28','2011/05/28',1),('1306709788240','GET$1','GET$0','chanthaminavong','elliemutt','souk_is@yahoo.com','Souk','','Chanthaminavong','8030 Boulder Dr.','8030 Boulder Dr.','Boise','ID','83709','Patron','1','1','2011/05/29','2011/05/29',1),('1306859946677','GET$2','GET$1','Chanthaminavong2','elliemutt','souk_is@yahoo.com','Baxter','','Hines','8030 Boulder Dr.','8030 Boulder Dr.','Boise','ID','83709','Patron','3','1','2011/05/31','2011/05/31',1),('1306860851532','GET$3','GET$1','chanthaminavong4','elliemutt','souk_is@yahoo.com','Anysa','','Chanthaminavong','8030 Boulder Dr.','8030 Boulder Dr.','Boise','ID','83709','Patron','2','1','2011/05/31','2011/05/31',1),('1306861005409','GET$4','GET$1','chanthaminavong3','elliemutt','souk_is@yahoo.com','Sounally','','Chanthaminavong','8030 Boulder Dr.','8030 Boulder Dr.','Boise','ID','83709','Patron','1','1','2011/05/31','2011/05/31',1),('1307207238057','GET$5','GET$2','sounallychanthaminavong','elliemutt','souk_is@yahoo.com','Bey','','Minavong','1780 Blake N St.','1780 Blake N St.','Twin Falls','ID','83301','Patron','1','1','2011/06/04','2011/06/04',1),('1307207571874','GET$6','GET$5','anysachanthaminavong','elliemutt','souk_is@yahoo.com','Vanh','','Chanthaminavong','1780 Blake N St.','1780 Blake N St.','Twin Falls','ID','83301','Patron','1','1','2011/06/04','2011/06/04',1),('1307281330244','GET$7','GET$0','karewoo','spike002','karewoo@yahoo.com','Karen','Lee','Woods','2907 118th DR NE','2907 118th DR NE','Lake Stevens','WA','98258','Patron','2','1','2011/06/05','2011/06/05',1),('1307644261961','GET$8','GET$0','2mnykds','pfckylee2','toomnykds@hotmail.com','Jodee','Lee','Burnham','494 E. 400 S.','494 E. 400 S.','Jerome','ID','83338','Patron','3','1','2011/06/09','2011/06/09',1),('1307817968374','GET$9','GET$0','Perma30','Golflinks','reedershar@gmail.com','Sharla','L.','Reeder','336 Grant St.','336 Grant St.','American Falls','ID','83211','Patron','4','1','2011/06/11','2011/06/11',1),('1307900250333','GET$10','GET$8','korry','boneskob1','trombone50@gmail.com','Korry','Maurice','Burnham','494 E. 400 S.','494 E. 400 S.','Jerome','ID','83338','Patron','1','1','2011/06/12','2011/06/12',1),('1307900675146','GET$11','GET$8','KennyBee','queenalla$','kennburnham@gmail.com','Kenn','','Burnham','494 East 400 South','494 East 400 South','Jerome','ID','83338','Patron','2','1','2011/06/12','2011/06/12',1),('1307987446556','GET$12','GET$0','jgmoss','ace444','jgmoss@verizon.net','James','A','Moss','4511 36th S St.','4511 36th S St.','Arlington','VA','22206','Patron','5','1','2011/06/13','2011/06/13',1),('1308167207311','GET$13','GET$0','Clara','Tumbl2w22d','ruth.hummel@yahoo.com','Ruth','S','Hummel','970 Valley Parkway W','970 Valley Parkway W','','','','Patron','6','1','','',1),('1309029084447','GET$14','GET$0','robin','ace444','ruth.hummel65@yahoo.com','Ruth','S','Hummel','2166 Shadetree Lane','2166 Shadetree Lane','EScondido','CA','92029','Patron','7','1','2011/06/25','2011/06/25',1),('1309699932462','GET$15','GET$6','mightykwin','bolivia','quinn.fowler@gmail.com','Quinn','O','Fowler','PO Box 1084','PO Box 1084','Meridian','ID','83680','Patron','1','1','2011/07/03','2011/07/03',1),('1310665088299','GET$16','GET$0','Old Spice Man','1timothy610','ericashley1221@yahoo.com','Eric','Von','Ashley','13280 Berwick St.','13280 Berwick St.','Saratoga','CA','95070','Patron','8','1','2011/07/14','2011/07/14',1),('1440825776404',NULL,'get$0','rbl','rbl','rlee.sn@gmail.com','r','b','l','1402 S Oaklawn Dr.','','Boise','ID','83709','Patron','9','0','2015-08-28 23:24:50','2015-08-28 23:24:50',1);
/*!40000 ALTER TABLE `patrons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relationships`
--

DROP TABLE IF EXISTS `relationships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relationships` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `payer_id` varchar(100) DEFAULT NULL,
  `payee_id` varchar(100) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `relationship_type` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idx`),
  KEY `payeeid` (`payee_id`),
  KEY `payerid` (`payer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relationships`
--

LOCK TABLES `relationships` WRITE;
/*!40000 ALTER TABLE `relationships` DISABLE KEYS */;
INSERT INTO `relationships` VALUES (1,'0','0',1,'normal'),(2,'1306383864201','0',1,'normal'),(3,'1306384108034','1306383864201',1,'normal'),(4,'1306624190149','1306384108034',1,'normal'),(5,'1306624822403','1306624190149',1,'normal'),(6,'1306709788240','1306624822403',1,'normal'),(7,'1306859946677','1306709788240',1,'normal'),(8,'1306860851532','1306709788240',1,'normal'),(9,'1306861005409','1306709788240',1,'normal'),(10,'1307207238057','1306859946677',1,'normal'),(11,'1307207571874','1307207238057',1,'normal'),(12,'1307281330244','1306624822403',1,'normal'),(13,'1307644261961','1306624822403',1,'normal'),(14,'1307817968374','1306624822403',1,'normal'),(15,'1307900250333','1307644261961',1,'normal'),(16,'1307900675146','1307644261961',1,'normal'),(17,'1307987446556','1306624822403',1,'normal'),(18,'1308167207311','1306624822403',1,'normal'),(19,'1309029084447','1306624822403',1,'normal'),(20,'1309699932462','1307207571874',1,'normal'),(21,'1310665088299','1306624822403',1,'normal'),(22,'0','0',2,'normal'),(23,'1306383864201','0',2,'normal'),(24,'1306384108034','0',2,'normal'),(25,'1306624190149','1306383864201',2,'normal'),(26,'1306624822403','1306384108034',2,'normal'),(27,'1306709788240','1306624190149',2,'normal'),(28,'1306859946677','1306624822403',2,'normal'),(29,'1306860851532','1306624822403',2,'normal'),(30,'1306861005409','1306624822403',2,'normal'),(31,'1307207238057','1306709788240',2,'normal'),(32,'1307207571874','1306859946677',2,'normal'),(33,'1307281330244','1306624190149',2,'normal'),(34,'1307644261961','1306624190149',2,'normal'),(35,'1307817968374','1306624190149',2,'normal'),(36,'1307900250333','1306624822403',2,'normal'),(37,'1307900675146','1306624822403',2,'normal'),(38,'1307987446556','1306624190149',2,'normal'),(39,'1308167207311','1306624190149',2,'normal'),(40,'1309029084447','1306624190149',2,'normal'),(41,'1309699932462','1307207238057',2,'normal'),(42,'1310665088299','1306624190149',2,'normal'),(43,'0','0',3,'normal'),(44,'1306383864201','0',3,'normal'),(45,'1306384108034','0',3,'normal'),(46,'1306624190149','0',3,'normal'),(47,'1306624822403','1306383864201',3,'normal'),(48,'1306709788240','1306384108034',3,'normal'),(49,'1306859946677','1306624190149',3,'normal'),(50,'1306860851532','1306624190149',3,'normal'),(51,'1306861005409','1306624190149',3,'normal'),(52,'1307207238057','1306624822403',3,'normal'),(53,'1307207571874','1306709788240',3,'normal'),(54,'1307281330244','1306384108034',3,'normal'),(55,'1307644261961','1306384108034',3,'normal'),(56,'1307817968374','1306384108034',3,'normal'),(57,'1307900250333','1306624190149',3,'normal'),(58,'1307900675146','1306624190149',3,'normal'),(59,'1307987446556','1306384108034',3,'normal'),(60,'1308167207311','1306384108034',3,'normal'),(61,'1309029084447','1306384108034',3,'normal'),(62,'1309699932462','1306859946677',3,'normal'),(63,'1310665088299','1306384108034',3,'normal'),(64,'0','0',4,'normal'),(65,'1306383864201','0',4,'normal'),(66,'1306384108034','0',4,'normal'),(67,'1306624190149','0',4,'normal'),(68,'1306624822403','0',4,'normal'),(69,'1306709788240','1306383864201',4,'normal'),(70,'1306859946677','1306384108034',4,'normal'),(71,'1306860851532','1306384108034',4,'normal'),(72,'1306861005409','1306384108034',4,'normal'),(73,'1307207238057','1306624190149',4,'normal'),(74,'1307207571874','1306624822403',4,'normal'),(75,'1307281330244','1306383864201',4,'normal'),(76,'1307644261961','1306383864201',4,'normal'),(77,'1307817968374','1306383864201',4,'normal'),(78,'1307900250333','1306384108034',4,'normal'),(79,'1307900675146','1306384108034',4,'normal'),(80,'1307987446556','1306383864201',4,'normal'),(81,'1308167207311','1306383864201',4,'normal'),(82,'1309029084447','1306383864201',4,'normal'),(83,'1309699932462','1306709788240',4,'normal'),(84,'1310665088299','1306383864201',4,'normal');
/*!40000 ALTER TABLE `relationships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verification`
--

DROP TABLE IF EXISTS `verification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verification` (
  `idx` bigint(20) NOT NULL AUTO_INCREMENT,
  `patron_idx` varchar(100) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `specification` varchar(255) DEFAULT NULL,
  `date_verified` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verification`
--

LOCK TABLES `verification` WRITE;
/*!40000 ALTER TABLE `verification` DISABLE KEYS */;
INSERT INTO `verification` VALUES (7,'1306624822403','postal_address_verified',NULL,'2015-09-06 19:51:07');
/*!40000 ALTER TABLE `verification` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-01 20:41:12
