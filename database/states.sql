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
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `countryid` char(3) DEFAULT NULL,
  `id` varchar(6) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `abreviation` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` VALUES ('7','1','Alabama','AL'),('7','2','Alaska','AK'),('7','3','Arizona','AZ'),('7','4','Arkansas','AR'),('7','5','California','CA'),('7','6','Colorado','CO'),('7','7','Connecticut','CT'),('7','8','Delaware','DE'),('7','9','Florida','FL'),('7','10','Georgia','GA'),('7','11','Hawaii','HI'),('7','12','Idaho','ID'),('7','13','Illinois','IL'),('7','14','Indiana','IN'),('7','15','Iowa','IA'),('7','16','Kansas','KS'),('7','17','Kentucky','KY'),('7','18','Louisiana','LA'),('7','19','Maine','ME'),('7','20','Maryland','MD'),('7','21','Massachusetts','MA'),('7','22','Michigan','MI'),('7','23','Minnesota','MN'),('7','24','Mississippi','MS'),('7','25','Missouri','MO'),('7','26','Montana','MT'),('7','27','Nebraska','NE'),('7','28','Nevada','NV'),('7','29','New Hampshire','NH'),('7','30','New Jersey','NJ'),('7','31','New Mexico','NM'),('7','32','New York','NY'),('7','33','North Carolina','NC'),('7','34','North Dakota','ND'),('7','35','Ohio','OH'),('7','36','Oklahoma','OK'),('7','37','Oregon','OR'),('7','38','Pennsylvania','PA'),('7','39','Rhode Island','RI'),('7','40','South Carolina','SC'),('7','41','South Dakota','SD'),('7','42','Tennessee','TN'),('7','43','Texas','TX'),('7','44','Utah','UT'),('7','45','Vermont','VT'),('7','46','Virginia','VA'),('7','47','Washington','WA'),('7','48','West Virginia','WV'),('7','49','Wisconsin','WI'),('7','50','Wyoming','WY'),('62','51','British Columbia',''),('62','52','Alberta',''),('62','53','Saskatchewan',''),('62','54','Manitoba',''),('62','55','Ontario',''),('62','56','Quebec',''),('62','57','New Brunswick',''),('62','58','Nova Scotia',''),('62','59','Prince Edward Island',''),('62','60','Newfoundland',''),('62','61','Yukon Territory',''),('62','62','Northwest Territories',''),('62','63','Nunavut',''),('177','64','Aguascalientes',''),('177','65','Baja California',''),('177','66','Baja California Sur',''),('177','67','Campeche',''),('177','68','Chiapas',''),('177','69','Chihuahua',''),('177','70','Coahuila',''),('177','71','Colima',''),('177','72','Durango',''),('177','73','Guanajuato',''),('177','74','Guerrero',''),('177','75','Hidalgo',''),('177','76','Jalisco',''),('177','77','Mexico',''),('177','78','Michoacan',''),('177','79','Morelos',''),('177','80','Nayarit',''),('177','81','Nuevo León',''),('177','82','Oaxaca',''),('177','83','Puebla',''),('177','84','Queretaro',''),('177','85','Quintana Roo',''),('177','86','San Luis Potosi',''),('177','87','Sinaloa',''),('177','88','Sonora',''),('177','89','Tabasco',''),('177','90','Tamaulipas',''),('177','91','Tlaxcala',''),('177','92','Veracruz',''),('177','93','Yucatan',''),('177','94','Zacatecas',''),('177','95','Federal District',''),('128','96','Andaman and Nicobar Islands',''),('128','97','Andhra Pradesh',''),('128','98','Arunachal Pradesh',''),('128','99','Assam',''),('128','100','Bihar',''),('128','101','Chandigarh',''),('128','102','Chhattisgarh',''),('128','103','Dadra and Nagar Haveli',''),('128','104','Daman and Diu',''),('128','105','Delhi',''),('128','106','Goa',''),('128','107','Gujarat',''),('128','108','Haryana',''),('128','109','Himachal Pradesh',''),('128','110','Jammu and Kashmir',''),('128','111','Jharkhand',''),('128','112','Karnataka',''),('128','113','Kerala',''),('128','114','Lakshadweep',''),('128','115','Madhya Pradesh',''),('128','116','Maharashtra',''),('128','117','Manipur',''),('128','118','Meghalaya',''),('128','119','Mizoram',''),('128','120','Nagaland',''),('128','121','Orissa',''),('128','122','Pondicherry',''),('128','123','Punjab',''),('128','124','Rajasthan',''),('128','125','Sikkim',''),('128','126','Tamil Nadu',''),('128','127','Tripura',''),('128','128','Uttaranchal',''),('128','129','Uttar Pradesh',''),('128','130','West Bengal',''),('55','131','Acre',''),('55','132','Alagoas',''),('55','133','Amapa',''),('55','134','Amazonas',''),('55','135','Bahia',''),('55','136','Ceara',''),('55','137','Distrito Federal',''),('55','138','Espirito Santo',''),('55','139','Goias',''),('55','140','Maranhao',''),('55','141','Mato Grosso',''),('55','142','Mato Grosso do Sul',''),('55','143','Minas Gerais',''),('55','144','Para',''),('55','145','Paraiba',''),('55','146','Parana',''),('55','147','Pernambuco',''),('55','148','Piaui',''),('55','149','Rio de Janeiro',''),('55','150','Rio Grande do Norte',''),('55','151','Rio Grande do Sul',''),('55','152','Rondonia',''),('55','153','Roraima',''),('55','154','Santa Catarina',''),('55','155','Sao Paulo',''),('55','156','Sergipe',''),('55','157','Tocantins',''),('12','158','Amazonas',''),('12','159','Anzoategui',''),('12','160','Apure',''),('12','161','Aragua',''),('12','162','Barinas',''),('12','163','Bolivar',''),('12','164','Carabobo',''),('12','165','Cojedes',''),('12','166','Delta Amacuro',''),('12','167','Falcon',''),('12','168','Guarico',''),('12','169','Lara',''),('12','170','Merida',''),('12','171','Miranda',''),('12','172','Monagas',''),('12','173','Nueva Esparta',''),('12','174','Portuguesa',''),('12','175','Sucre',''),('12','176','Tachira',''),('12','177','Trujillo',''),('12','178','Vargas',''),('12','179','Yaracuy',''),('12','180','Zulia',''),('12','181','Islas Los Monjes',''),('12','182','Isla La Tortuga',''),('12','183','Islas Los Frailes',''),('12','184','Isla La Sola',''),('12','185','Islas Los Testigos',''),('12','186','Islas Las Aves',''),('12','187','Islas Los Roques',''),('12','188','Isla La Orchila',''),('12','189','Isla Blanquilla',''),('12','190','Islas Los Hermanos',''),('12','191','Isla de Patos',''),('12','192','Isla Aves',''),('12','193','Capital District (Caracas)',''),('39','194','Australia',''),('39','195','Australian Capital Territory',''),('39','196','New South Wales',''),('39','197','Victoria',''),('39','198','Queensland',''),('39','199','South Australia',''),('39','200','Western Australia',''),('39','201','Tasmania',''),('39','202','Northern Territory {The Australian Outback}','');
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-14 19:23:36
