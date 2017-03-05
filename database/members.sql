-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: genealogy
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
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` varchar(255) DEFAULT NULL,
  `individualid` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dateadded` datetime DEFAULT NULL,
  `validated` char(1) DEFAULT NULL,
  `administrator` char(1) DEFAULT NULL,
  `lastchanged` datetime DEFAULT NULL,
  `familystart` datetime DEFAULT NULL,
  `familyduration` varchar(255) DEFAULT NULL,
  KEY `members_id_idx` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES ('7-Karolyn Lee','7-Karolyn Lee','Karolyn','Leith','Karolyn','fancypatch@cableone.net','Karolyn','2006-05-03 07:06:24','0','1','2006-05-03 07:07:09','0000-00-00 00:00:00',''),('41-John Leith','41-John Leith','John','Leith','John','fancypatch@cableone.net','John','2006-05-03 07:16:07','0','1','2006-05-03 07:17:20','0000-00-00 00:00:00',''),('1265510976656','1265510976656','Johnathon','Winters','jonw','russelllee@cableone.net','jw','2010-02-04 17:04:37','0','1','2010-02-04 17:04:37',NULL,NULL),('1160016222468','1160016222468','Dolores','Alvarado','ojara525','oj5252000@yahoo.com','lolalola','2006-10-04 20:43:42','1','0','2006-10-04 20:43:42','0000-00-00 00:00:00',''),('-1','','','','guest','','','2004-03-01 20:44:19','0','0','0000-00-00 00:00:00','0000-00-00 00:00:00',''),('10-Julie Lee','10-Julie Lee','Julianne','Lee','Julzlee','julianne.lee@wamu.net','Confused1','2005-05-06 09:09:43','0','1','2005-05-06 09:09:43','0000-00-00 00:00:00',''),('1142638090475','1142638090475','Linda','Gruenberg','greeneyesinidaho','greeneyes41@cableone.net','whisper','2006-03-17 17:01:09','0','0','2006-03-17 17:01:09','0000-00-00 00:00:00',''),('17-Jaime Lauren Lee','17-Jaime Lauren Lee','jaime','lee','leejai88','leejai88@hotmail.com','asdfg','2005-04-10 18:04:46','1','1','2005-04-10 18:04:46','0000-00-00 00:00:00',''),('2-Shirley Laureen Hastings','2-Shirley Laureen Hastings','Shirley','Lee','Parl','Parlshirl@aol.com','reha99','2005-05-02 20:52:49','1','1','2005-05-02 20:52:49','0000-00-00 00:00:00',''),('46-Jim Hastings','1115386794718','James','Hastings','rebarcat','rebarcat@yahoo.com','12345678','2005-05-06 08:01:22','1','1','2005-05-06 08:01:22','0000-00-00 00:00:00',''),('6-Russell Bert Lee','6-Russell Bert Lee','Russell Bert','Lee','rus','russelllee@cableone.net','rus','2004-11-16 14:44:17','1','1','2006-03-18 19:24:30','2005-09-12 19:25:06','7'),('8-Kristy Lee','8-Kristy Lee','Kristine','Wilson','kristy6','kristee6@yahoo.com','dweller','2005-05-06 09:43:56','0','1','2005-05-08 14:59:47','0000-00-00 00:00:00',''),('189-Steve Carter','189-Steve Carter','Stephan','Carter','Steve1952','skc2005@earthlink.net','saekm5254','2006-04-10 19:22:26','1','1','2006-04-10 19:22:26','0000-00-00 00:00:00',''),('19-William Guerrmo Penagos','19-William Guerrmo Penagos','William','Penagos','wp','wpenagos@msn.com','wp','2006-04-27 10:52:17','0','1','2006-04-27 00:00:00','0000-00-00 00:00:00',''),('1-Parley Lewis Lee','1-Parley Lewis Lee','Parley Lewis','Lee','pll','Parlshirl@aol.com','pll','2006-04-27 11:31:37','1','1','2006-04-27 00:00:00','0000-00-00 00:00:00',''),('33-Ken Burnham','33-Ken Burnham','Ken','Burnham','Ken','2mnykds8@gobigwest.com','ken1962','2006-04-27 11:46:15','1','1','2006-04-27 00:00:00','0000-00-00 00:00:00',''),('11-Jodee Lee','11-Jodee Lee','Jodee','Burnham','Jodee','2mnykds8@gobigwest.com','Jodee1966','2006-04-27 11:56:51','1','1','2006-04-27 00:00:00','0000-00-00 00:00:00',''),('1075786146016','1075786146016','Greg','Wilson','Greg','kristee6@yahoo.com','Greg1967','2006-04-27 12:04:22','0','1','0000-00-00 00:00:00','0000-00-00 00:00:00',''),('12-David Parley Lee','12-David Parley Lee','David Parley','Lee','David','Daveandtrishlee@aol.com','David1970','2006-04-27 12:21:48','0','1','0000-00-00 00:00:00','0000-00-00 00:00:00',''),('44-Trish','44-Trish','Trish','Lee','Trish','Daveandtrishlee@aol.com','Trish','2006-04-27 12:57:42','0','1','0000-00-00 00:00:00','0000-00-00 00:00:00',''),('4-Kathy Lee','4-Kathy Lee','Kathy','Adams','Kathy','katherann_1@yahoo.com','Kathy1954','2006-04-27 13:01:39','0','1','0000-00-00 00:00:00','0000-00-00 00:00:00',''),('34-George Adams','34-George Adams','George','Adams','George','katherann_1@yahoo.com','George','2006-04-27 13:16:54','0','1','0000-00-00 00:00:00','0000-00-00 00:00:00',''),('9-Karen Lee','9-Karen Lee','Karen','Woods','Karen','Karen.Woods@cendant-trg.com','Karen','2006-04-27 13:18:29','0','1','0000-00-00 00:00:00','0000-00-00 00:00:00',''),('42-Edgar Woods','42-Edgar Woods','Edgar','Woods','Edgar','Karen.Woods@cendant-trg.com','Edgar','2006-04-27 13:34:14','0','1','0000-00-00 00:00:00','0000-00-00 00:00:00',''),('3-Richard Allan Lee','3-Richard Allan Lee','Rick','Lee','Rick','RLee@rahco.com','Rick1952','2006-04-27 13:41:35','0','1','0000-00-00 00:00:00','0000-00-00 00:00:00',''),('39-Neca','39-Neca','Neca','Lee','Neca','RLee@rahco.com','Neca','2006-04-27 13:52:48','0','1','0000-00-00 00:00:00','0000-00-00 00:00:00',''),('5-Ronald Lewis Lee','5-Ronald Lewis Lee','Ronald Lewis','Lee','Ron','Ronald.Lee@inl.gov','ron1956','2006-05-03 06:57:45','0','1','0000-00-00 00:00:00','0000-00-00 00:00:00',''),('40-Alice','40-Alice','Alice','Lee','Alice','Ronald.Lee@inl.gov','Alice','2006-05-03 07:03:11','0','1','2006-05-03 07:06:24','0000-00-00 00:00:00',''),('1258561278113','1258561278113','Dawn','Murray','dawnm72174','dawnm72174@gmail.com','dm828317','2009-11-13 20:38:01','0','1','2009-11-13 20:38:01',NULL,NULL),('1257352997288','1257352997288','Michael','Helmantoler','mhelmantoler','mhelmantoler@yahoo.com','xmas1225','2009-10-29 15:34:08','0','1','2009-10-29 15:34:08',NULL,NULL),('1255286768906','1255286768906','ghesquiere','carmen','GHESQUIERE CARMEN','laikora@gmail.com','gerardus','2009-10-06 09:46:43','0','1','2009-10-06 09:46:43',NULL,NULL),('','','Joyce L','Perez','joyceperez2004','joyceperez2004@yahoo.com','jpshoney','2010-10-27 01:44:44','1','1','2010-10-27 01:44:44',NULL,NULL),('','','Joyce L','Perez','joyceperez2004','joyceperez2004@yahoo.com','jpshoney','2010-10-27 01:45:44','1','1','2010-10-27 01:45:44',NULL,NULL),('1297908113541','1297908113541','Megan','Bush','MegBush','dharmameg@yahoo.com','JustinBush504','2011-02-15 22:59:18','0','1','2011-02-15 22:59:18',NULL,NULL),('','','','','','','','2011-02-20 12:17:11','1','1','2011-02-20 12:17:11',NULL,NULL),('8-Kristy Lee','8-Kristy Lee','Kristine','Wilson','kristy6','kristee6@yahoo.com','dweller','2011-02-21 00:53:40','0','1','2011-02-21 00:53:40',NULL,NULL),('1300626273014','1300626273014','Flynn','Diffner','fd','russelllee@cableone.net','fd','2011-03-19 18:26:02','0','1','2011-03-19 18:26:02',NULL,NULL),('1305612775102','1305612775102','Pamela','Carreras','pjcarreras79','pjcarreras79@gmail.com','55055505','2011-05-16 20:21:47','0','1','2011-05-16 20:21:47',NULL,NULL),('1308417936961','1308417936961','Charles','Ruth','bandikoi','chuckkoi@hotmail.com','guitar6','2011-06-16 17:18:59','0','1','2011-06-16 17:18:59',NULL,NULL),('1310261558600','1310261558600','Parrish','Purdy','ppstrike','ppstrike@aol.com','strike','2011-07-08 12:47:50','0','1','2011-07-08 12:47:50',NULL,NULL),('1310755532482','1310755532482','kenneth','jones','ken3569','ken3569@hotmail.com','megan1','2011-07-08 20:40:22','0','1','2011-07-08 20:40:22',NULL,NULL),('1310755532482','1310755532482','kenneth','jones','ken3569','ken3569@hotmail.com','megan1','2011-07-08 20:41:08','0','1','2011-07-08 20:41:08',NULL,NULL),('1310755532482','1310755532482','kenneth','jones','ken3569','ken3569@hotmail.com','megan1','2011-07-08 20:42:20','0','1','2011-07-08 20:42:20',NULL,NULL),('1310755532482','1310755532482','kenneth','jones','ken3569','ken3569@hotmail.com','megan1','2011-07-08 20:43:39','0','1','2011-07-08 20:43:39',NULL,NULL),('','','','','','','','2011-07-08 20:44:26','0','1','2011-07-08 20:44:26',NULL,NULL),('10-Julie Lee','10-Julie Lee','Julianne','Lee','Julzlee','juliannel@hotmail.com','em0temoC','2011-07-19 21:25:20','0','1','2011-07-19 21:25:20',NULL,NULL),('1316412505343','1316412505343','Pamela','Frost','spellbound63','spellbound63@hotmail.com','sara24','2011-09-17 13:10:00','0','1','2011-09-17 13:10:00',NULL,NULL),('1326105198442','1326105198442','Miji','Cherian','mijicherian','miji.cherian@nuware.com','soumya','2012-01-08 11:17:53','0','1','2012-01-08 11:17:53',NULL,NULL),('1326105198442','1326105198442','Miji','Cherian','mijicherian','miji.cherian@nuware.com','soumya','2012-01-08 11:20:02','0','1','2012-01-08 11:20:02',NULL,NULL),('','','','','','','','2012-05-18 17:26:22','0','1','2012-05-18 17:26:22',NULL,NULL);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-14 21:06:59
