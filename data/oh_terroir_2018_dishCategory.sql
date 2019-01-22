CREATE DATABASE  IF NOT EXISTS `oh_terroir_2018` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `oh_terroir_2018`;
-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: oh_terroir_2018
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
-- Table structure for table `dishCategory`
--

DROP TABLE IF EXISTS `dishCategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dishCategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namePageHome` varchar(45) NOT NULL,
  `namePageDish` varchar(125) NOT NULL,
  `description` text,
  `complementaryInformation` text,
  `urlPictureForPageHome` varchar(255) NOT NULL,
  `urlPictureForPageDish` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dishCategory`
--

LOCK TABLES `dishCategory` WRITE;
/*!40000 ALTER TABLE `dishCategory` DISABLE KEYS */;
INSERT INTO `dishCategory` VALUES (1,'BURGERS','Nos Burgers','Pain Bio, Fromage Cantal AOP, Salade de Roquette, Sauces fabriquées par un chef étoilé, Frites à base de pommes de terre Bio locales.','Nos viandes de boeuf locales et bio, de race Aberdeen Angus. Nos pommes de terre à frites sont locales et bio. Toutes nos sauces à burgers sont confectionnées par un chef étoilé.','/assets/images/categories/1.jpg','/assets/images/categories/fullsize/1-fs.jpg',1),(2,'PLATS CHAUDS','Nos plats chauds','Pâtes fermières locales, petit épeautre bio local en risotto, Quinoa bio, Lentilles bio locales...','Pâtes fabriquées à base de crème fraîche bio, Sauce tomate fabriquée au coeur de la provence etc...','/assets/images/categories/2.jpg','/assets/images/categories/fullsize/2-fs.jpg',1),(3,'SALADES','Nos salades maison','Salades fraîches maison','Nos salades composées sont préparées uniquement au moment de la commande devant vous.','/assets/images/categories/3.jpg','/assets/images/categories/fullsize/3-fs.jpg',1),(4,'DESSERTS','Nos desserts','Faisselle bio, riz au lait, pot de glace ...','La compote bio fabriquée à Amilly, ou encore la faiselle bio de la Ferme des Grands Champs à Lorris , et bien d’autres desserts','/assets/images/categories/4.jpg','/assets/images/categories/fullsize/4-fs.jpg',1);
/*!40000 ALTER TABLE `dishCategory` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-29 11:40:07
