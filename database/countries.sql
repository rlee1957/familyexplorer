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
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `continentid` char(2) DEFAULT NULL,
  `id` char(3) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `abreviation` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES ('6','1','Taiwan','TW'),('4','2','Tanzania','TZ'),('5','3','Ukraine','UA'),('4','4','Uganda','UG'),('5','5','United Kingdom','UK'),('0','6','US Minor Outlying Islands','UM'),('1','7','United States','US'),('2','8','Uruguay','UY'),('6','9','Uzbekistan','UZ'),('5','10','Vatican City State (Holy See)','VA'),('0','11','Saint Vincent _ the Grenadines','VC'),('2','12','Venezuela','VE'),('0','13','Virgin Islands (British)','VG'),('0','14','Virgin Islands (U.S.)','VI'),('6','15','Viet Nam','VN'),('0','16','Vanuatu','VU'),('0','17','Wallis and Futuna Islands','WF'),('0','18','Samoa','WS'),('6','19','Yemen','YE'),('0','20','Mayotte','YT'),('0','21','Yugoslavia','YU'),('4','22','South Africa','ZA'),('4','23','Zambia','ZM'),('0','24','Zaire','ZR'),('4','25','Zimbabwe','ZW'),('5','26','Andorra','AD'),('6','27','United Arab Emirates','AE'),('6','28','Afghanistan','AF'),('1','29','Antigua and Barbuda','AG'),('0','30','Anguilla','AI'),('5','31','Albania','AL'),('6','32','Armenia','AM'),('0','33','Netherlands Antilles','AN'),('4','34','Angola','AO'),('0','35','Antarctica','AQ'),('2','36','Argentina','AR'),('0','37','American Samoa','AS'),('5','38','Austria','AT'),('7','39','Australia','AU'),('0','40','Anguila','AV'),('0','41','Aruba','AW'),('6','42','Azerbaijan','AZ'),('5','43','Bosnia and Herzegovina','BA'),('1','44','Barbados','BB'),('6','45','Bangladesh','BD'),('5','46','Belgium','BE'),('4','47','Burkina Faso','BF'),('5','48','Bulgaria','BG'),('6','49','Bahrain','BH'),('4','50','Burundi','BI'),('4','51','Benin','BJ'),('0','52','Bermuda','BM'),('6','53','Brunei Darussalam','BN'),('2','54','Bolivia','BO'),('2','55','Brazil','BR'),('0','56','Bahamas','BS'),('6','57','Bhutan','BT'),('0','58','Bouvet Island','BV'),('4','59','Botswana','BW'),('5','60','Belarus','BY'),('1','61','Belize','BZ'),('1','62','Canada','CA'),('0','63','Cocos (Keeling) Islands','CC'),('4','64','Congo, Democratic Republic','CD'),('4','65','Central African Republic','CF'),('4','66','Congo','CG'),('5','67','Switzerland','CH'),('4','68','Cote DIvoire (Ivory Coast)','CI'),('0','69','Cook Islands','CK'),('2','70','Chile','CL'),('4','71','Cameroon','CM'),('6','72','China','CN'),('2','73','Colombia','CO'),('1','74','Costa Rica','CR'),('5','75','Czechoslovakia (former)','CS'),('1','76','Cuba','CU'),('4','77','Cape Verde','CV'),('0','78','Christmas Island','CX'),('5','79','Cyprus','CY'),('5','80','Czech Republic','CZ'),('5','81','Germany','DE'),('4','82','Djibouti','DJ'),('5','83','Denmark','DK'),('1','84','Dominica','DM'),('1','85','Dominican Republic','DO'),('4','86','Algeria','DZ'),('2','87','Ecuador','EC'),('5','88','Estonia','EE'),('4','89','Egypt','EG'),('0','90','Western Sahara','EH'),('4','91','Eritrea','ER'),('5','92','Spain','ES'),('4','93','Ethiopia','ET'),('5','94','Finland','FI'),('0','95','Fiji','FJ'),('0','96','Falkland Islands (Malvinas)','FK'),('0','97','Micronesia','FM'),('0','98','Faroe Islands','FO'),('5','99','France','FR'),('0','100','France, Metropolitan','FX'),('4','101','Gabon','GA'),('0','102','Great Britain (UK)','GB'),('0','103','Grenada','GD'),('6','104','Georgia','GE'),('2','105','French Guiana','GF'),('4','106','Ghana','GH'),('0','107','Gibraltar','GI'),('0','108','Greenland','GL'),('4','109','Gambia','GM'),('4','110','Guinea','GN'),('0','111','Guadeloupe','GP'),('4','112','Equatorial Guinea','GQ'),('5','113','Greece','GR'),('0','114','S. Georgia and S. Sandwich Isls.','GS'),('1','115','Guatemala','GT'),('0','116','Guam','GU'),('4','117','Guinea','GW'),('2','118','Guyana','GY'),('6','119','Hong Kong','HK'),('0','120','Heard and McDonald Islands','HM'),('1','121','Honduras','HN'),('5','122','Croatia (Hrvatska)','HR'),('1','123','Haiti','HT'),('5','124','Hungary','HU'),('6','125','Indonesia','ID'),('5','126','Ireland','IE'),('6','127','Israel','IL'),('6','128','India','IN'),('0','129','British Indian Ocean Territory','IO'),('6','130','Iraq','IQ'),('6','131','Iran','IR'),('5','132','Iceland','IS'),('5','133','Italy','IT'),('1','134','Jamaica','JM'),('6','135','Jordan','JO'),('6','136','Japan','JP'),('4','137','Kenya','KE'),('6','138','Kyrgyzstan','KG'),('6','139','Cambodia','KH'),('0','140','Kiribati','KI'),('4','141','Comoros','KM'),('0','142','Saint Kitts and Nevis','KN'),('6','143','Korea (North)','KP'),('6','144','Korea (South)','KR'),('6','145','Kuwait','KW'),('0','146','Cayman Islands','KY'),('6','147','Kazakhstan','KZ'),('6','148','Laos','LA'),('6','149','Lebanon','LB'),('0','150','Saint Lucia','LC'),('5','151','Liechtenstein','LI'),('6','152','Sri Lanka','LK'),('4','153','Liberia','LR'),('4','154','Lesotho','LS'),('5','155','Lithuania','LT'),('5','156','Luxembourg','LU'),('5','157','Latvia','LV'),('4','158','Libya','LY'),('4','159','Morocco','MA'),('5','160','Monaco','MC'),('5','161','Moldova','MD'),('4','162','Madagascar','MG'),('0','163','Marshall Islands','MH'),('0','164','F.Y.R.O.M. (Macedonia)','MK'),('4','165','Mali','ML'),('6','166','Burma (Myanmar)','MM'),('6','167','Mongolia','MN'),('0','168','Macau','MO'),('0','169','Northern Mariana Islands','MP'),('0','170','Martinique','MQ'),('4','171','Mauritania','MR'),('0','172','Montserrat','MS'),('5','173','Malta','MT'),('4','174','Mauritius','MU'),('6','175','Maldives','MV'),('4','176','Malawi','MW'),('1','177','Mexico','MX'),('6','178','Malaysia','MY'),('4','179','Mozambique','MZ'),('4','180','Namibia','NA'),('0','181','New Caledonia','NC'),('4','182','Niger','NE'),('0','183','Norfolk Island','NF'),('4','184','Nigeria','NG'),('1','185','Nicaragua','NI'),('5','186','Netherlands','NL'),('5','187','Norway','NO'),('6','188','Nepal','NP'),('0','189','Nauru','NR'),('0','190','Neutral Zone','NT'),('0','191','Niue','NU'),('0','192','New Zealand (Aotearoa)','NZ'),('6','193','Oman','OM'),('1','194','Panama','PA'),('2','195','Peru','PE'),('0','196','French Polynesia','PF'),('0','197','Papua New Guinea','PG'),('6','198','Philippines','PH'),('6','199','Pakistan','PK'),('5','200','Poland','PL'),('0','201','St. Pierre and Miquelon','PM'),('0','202','Pitcairn','PN'),('0','203','Puerto Rico','PR'),('5','204','Portugal','PT'),('0','205','Palau','PW'),('2','206','Paraguay','PY'),('6','207','Qatar','QA'),('0','208','Reunion','RE'),('5','209','Romania','RO'),('5','210','Russian Federation','RU'),('4','211','Rwanda','RW'),('6','212','Saudi Arabia','SA'),('0','213','Solomon Islands','SB'),('4','214','Seychelles','SC'),('4','215','Sudan','SD'),('5','216','Sweden','SE'),('6','217','Singapore','SG'),('0','218','St. Helena','SH'),('5','219','Slovenia','SI'),('0','220','Svalbard _ Jan Mayen Islands','SJ'),('5','221','Slovak Republic','SK'),('4','222','Sierra Leone','SL'),('5','223','San Marino','SM'),('4','224','Senegal','SN'),('4','225','Somalia','SO'),('2','226','Suriname','SR'),('4','227','Sao Tome and Principe','ST'),('0','228','USSR (former)','SU'),('0','229','El Salvador','SV'),('6','230','Syria','SY'),('4','231','Swaziland','SZ'),('0','232','Turks and Caicos Islands','TC'),('4','233','Chad','TD'),('0','234','French Southern Territories','TF'),('4','235','Togo','TG'),('0','236','Thailand','TH'),('6','237','Tajikistan','TJ'),('0','238','Tokelau','TK'),('6','239','Turkmenistan','TM'),('4','240','Tunisia','TN'),('0','241','Tonga','TO'),('0','242','East Timor','TP'),('5','243','Turkey','TR'),('0','244','Trinidad and Tobago','TT'),('0','245','Tuvalu','TV'),('1','246','The Bahamas',''),('1','247','El Salvador',''),('1','248','Greenland (Kalaallit Nunaat)',''),('1','249','Grenada',''),('1','250','Saint Kitts and Nevis',''),('1','251','Saint Lucia',''),('1','252','Saint Vincent and the Grenadines',''),('1','253','Trinidad and Tobago',''),('5','254','Macedonia',''),('5','255','Serbia and Montenegro','');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-14 19:23:35
