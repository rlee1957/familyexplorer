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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-17 20:33:57
