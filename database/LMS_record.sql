-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: MYLMS
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

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
-- Table structure for table `record`
--

-- DROP TABLE IF EXISTS `record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `record` (
  `RollNo` varchar(50) NOT NULL,
  `BookId` int(10) NOT NULL,
  `Date_of_Issue` date DEFAULT NULL,
  `Due_Date` date DEFAULT NULL,
  `Date_of_Return` date DEFAULT NULL,
  `Dues` int(10) DEFAULT NULL,
  `Renewals_left` int(10) DEFAULT NULL,
  `Time` time DEFAULT NULL,
  PRIMARY KEY (`RollNo`,`BookId`),
  KEY `BookId` (`BookId`),
  CONSTRAINT `record_ibfk_1` FOREIGN KEY (`RollNo`) REFERENCES `user` (`RollNo`),
  CONSTRAINT `record_ibfk_2` FOREIGN KEY (`BookId`) REFERENCES `book` (`BookId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `record`
--

LOCK TABLES `record` WRITE;
/*!40000 ALTER TABLE `record` DISABLE KEYS */;
INSERT INTO `record` VALUES ('b160001cs',3,NULL,NULL,NULL,NULL,NULL,'13:18:12'),('b160001cs',9,'2018-10-25','2018-12-24',NULL,NULL,1,'13:14:20'),('b160001cs',11,'2018-10-25','2018-12-24',NULL,NULL,1,'13:14:20'),('b160001cs',12,NULL,NULL,NULL,NULL,NULL,'13:14:20'),('b160003ch',9,'2018-10-25','2018-12-24',NULL,NULL,1,'13:14:20'),('b160003ch',14,NULL,NULL,NULL,NULL,NULL,'13:14:20'),('b160011ch',10,'2018-10-25','2018-12-24',NULL,NULL,1,'13:14:20'),('b160011ch',17,'2018-10-25','2018-12-24',NULL,NULL,1,'13:14:20'),('b160111cs',1,'2018-10-15','2018-12-14',NULL,NULL,1,'13:14:20'),('B160158CS',1,'2018-10-15','2020-04-12',NULL,NULL,0,'13:14:20'),('B160158CS',2,'2018-10-16','2018-12-15',NULL,NULL,1,'13:14:20'),('b160158cs',3,NULL,NULL,NULL,NULL,NULL,'13:14:20'),('b160158cs',4,NULL,NULL,NULL,NULL,NULL,'13:14:20'),('b160158cs',7,NULL,NULL,NULL,NULL,NULL,'13:14:20'),('b160158cs',9,'2018-10-25','2018-12-24',NULL,NULL,1,'13:14:20'),('b160158cs',17,NULL,NULL,NULL,NULL,NULL,'13:14:20'),('b160158cs',18,'2018-10-25','2018-12-24',NULL,NULL,1,'13:14:20'),('b160511cs',2,'2018-10-16','2018-12-15','2018-10-16',-60,1,'13:14:20'),('b160511cs',6,'2018-10-16','2018-12-15','2018-10-16',-60,1,'13:14:20'),('b160511cs',7,NULL,NULL,NULL,NULL,NULL,'13:14:20'),('b160511cs',10,'2018-10-25','2018-12-24',NULL,NULL,1,'13:14:20'),('b160511cs',11,'2018-10-25','2018-12-24',NULL,NULL,1,'13:14:20'),('b160511cs',13,'2018-10-25','2018-12-24',NULL,NULL,1,'13:14:20'),('b160511cs',17,NULL,NULL,NULL,NULL,NULL,'13:14:20'),('b160511cs',18,NULL,NULL,NULL,NULL,NULL,'13:14:20'),('b160632cs',3,'2018-07-16','2018-11-14','2018-10-25',-20,0,'13:14:20'),('B160632CS',15,'2018-10-25','2018-12-24',NULL,NULL,1,'13:14:20'),('B160632CS',17,NULL,NULL,NULL,NULL,NULL,'13:17:31'),('b160854cs',6,'2018-10-16','2019-04-14',NULL,NULL,1,'13:14:20');
/*!40000 ALTER TABLE `record` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-27 13:20:27