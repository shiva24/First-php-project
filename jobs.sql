-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: jobs
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.12.04.1

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
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `salary` varchar(300) DEFAULT NULL,
  `jobdescription` varchar(300) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `qualifications` varchar(50) DEFAULT NULL,
  `employer` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89820 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES (89709,'hhh','2000','kkk','l','q','e','w'),(89710,'a','b','c','d','e','f','g'),(89711,'d','e','r','g','h','i','g'),(89712,'d','e','r','g','h','i','g'),(89713,'d','e','r','g','h','i','g'),(89714,'d','e','r','g','h','i','g'),(89715,'d','e','r','g','h','i','g'),(89716,'d','e','r','g','h','i','g'),(89717,'d','e','r','g','h','i','g'),(89718,'d','e','r','g','h','i','g'),(89719,'d','e','r','g','h','i','g'),(89720,'d','e','r','g','h','i','g'),(89721,'d','e','r','g','h','i','g'),(89722,'d','e','r','g','h','i','g'),(89723,'d','e','r','g','h','i','g'),(89724,'d','e','r','g','h','i','g'),(89725,'d','e','r','g','h','i','g'),(89726,'d','e','r','g','h','i','g'),(89727,'d','e','r','g','h','i','g'),(89728,'d','e','r','g','h','i','g'),(89729,'d','e','r','g','h','i','g'),(89730,'d','e','r','g','h','i','g'),(89731,'d','e','r','g','h','i','g'),(89732,'d','e','r','g','h','i','g'),(89733,'d','e','r','g','h','i','g'),(89734,'d','e','r','g','h','i','g'),(89735,'d','e','r','g','h','i','g'),(89736,'d','e','r','g','h','i','g'),(89737,'d','e','r','g','h','i','g'),(89738,'d','e','r','g','h','i','g'),(89739,'d','e','r','g','h','i','g'),(89740,'d','e','r','g','h','i','g'),(89741,'d','e','r','g','h','i','g'),(89742,'d','e','r','g','h','i','g'),(89743,'d','e','r','g','h','i','g'),(89744,'d','e','r','g','h','i','g'),(89745,'d','e','r','g','h','i','g'),(89746,'d','e','r','g','h','i','g'),(89747,'d','e','r','g','h','i','g'),(89748,'d','e','r','g','h','i','g'),(89749,'d','e','r','g','h','i','g'),(89750,'d','e','r','g','h','i','g'),(89751,'d','e','r','g','h','i','g'),(89752,'d','e','r','g','h','i','g'),(89753,'d','e','r','g','h','i','g'),(89754,'d','e','r','g','h','i','g'),(89755,'d','e','r','g','h','i','g'),(89756,'d','e','r','g','h','i','g'),(89757,'d','e','r','g','h','i','g'),(89758,'d','e','r','g','h','i','g'),(89759,'d','e','r','g','h','i','g'),(89760,'d','e','r','g','h','i','g'),(89761,'d','e','r','g','h','i','g'),(89762,'d','e','r','g','h','i','g'),(89763,'d','e','r','g','h','i','g'),(89764,'d','e','r','g','h','i','g'),(89765,'d','e','r','g','h','i','g'),(89766,'d','e','r','g','h','i','g'),(89767,'d','e','r','g','h','i','g'),(89768,'d','e','r','g','h','i','g'),(89769,'d','e','r','g','h','i','g'),(89770,'d','e','r','g','h','i','g'),(89771,'d','e','r','g','h','i','g'),(89772,'d','e','r','g','h','i','g'),(89773,'d','e','r','g','h','i','g'),(89774,'d','e','r','g','h','i','g'),(89775,'d','e','r','g','h','i','g'),(89776,'d','e','r','g','h','i','g'),(89777,'d','e','r','g','h','i','g'),(89778,'d','e','r','g','h','i','g'),(89779,'d','e','r','g','h','i','g'),(89780,'d','e','r','g','h','i','g'),(89781,'d','e','r','g','h','i','g'),(89782,'d','e','r','g','h','i','g'),(89783,'d','e','r','g','h','i','g'),(89784,'d','e','r','g','h','i','g'),(89785,'d','e','r','g','h','i','g'),(89786,'d','e','r','g','h','i','g'),(89787,'d','e','r','g','h','i','g'),(89788,'d','e','r','g','h','i','g'),(89789,'d','e','r','g','h','i','g'),(89790,'d','e','r','g','h','i','g'),(89791,'d','e','r','g','h','i','g'),(89792,'d','e','r','g','h','i','g'),(89793,'d','e','r','g','h','i','g'),(89794,'d','e','r','g','h','i','g'),(89795,'d','e','r','g','h','i','g'),(89796,'d','e','r','g','h','i','g'),(89797,'d','e','r','g','h','i','g'),(89798,'d','e','r','g','h','i','g'),(89799,'d','e','r','g','h','i','g'),(89800,'d','e','r','g','h','i','g'),(89801,'d','e','r','g','h','i','g'),(89802,'d','e','r','g','h','i','g'),(89803,'d','e','r','g','h','i','g'),(89804,'d','e','r','g','h','i','g'),(89805,'d','e','r','g','h','i','g'),(89806,'d','e','r','g','h','i','g'),(89807,'d','e','r','g','h','i','g'),(89808,'d','e','r','g','h','i','g'),(89809,'d','e','r','g','h','i','g'),(89810,'d','e','r','g','h','i','g'),(89811,'d','e','r','g','h','i','g'),(89812,'d','e','r','g','h','i','g'),(89813,'d','e','r','g','h','i','g'),(89814,'d','e','r','g','h','i','g'),(89815,'d','e','r','g','h','i','g'),(89816,'d','e','r','g','h','i','g'),(89817,'d','e','r','g','h','i','g'),(89818,'d','e','r','g','h','i','g'),(89819,'d','e','r','g','h','i','g');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('Shiva','123',1),('Freeman','jaaga',2),('Jaaga study','jaagajaaga',3),('Jaaga study','jaagajaaga',4);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-16 16:41:26
