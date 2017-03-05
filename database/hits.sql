
CREATE DATABASE /*!32312 IF NOT EXISTS*/ `hits` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hits`;

--
-- Table structure for table `pagehits`
--

DROP TABLE IF EXISTS `pagehits`;
CREATE TABLE `pagehits` (
  `page` varchar(255) default NULL,
  `hits` int(11) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Table structure for table `servicehits`
--

DROP TABLE IF EXISTS `servicehits`;
CREATE TABLE `servicehits` (
  `service` varchar(50) default NULL,
  `hits` int(11) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Table structure for table `systemhits`
--

DROP TABLE IF EXISTS `systemhits`;
CREATE TABLE `systemhits` (
  `service` varchar(50) default NULL,
  `system` text,
  `hits` int(11) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
