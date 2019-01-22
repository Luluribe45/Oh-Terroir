-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: oh_terroir_2018
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

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
-- Table structure for table `opinionTripAdvisor`
--

DROP TABLE IF EXISTS `opinionTripAdvisor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opinionTripAdvisor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(45) NOT NULL,
  `title` varchar(50) NOT NULL,
  `comment` varchar(800) NOT NULL,
  `dateOpinion` date NOT NULL,
  `note` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opinionTripAdvisor`
--

LOCK TABLES `opinionTripAdvisor` WRITE;
/*!40000 ALTER TABLE `opinionTripAdvisor` DISABLE KEYS */;
INSERT INTO `opinionTripAdvisor` VALUES (1,'JFSO','Concept sympa/cuisine délicieuse ','Concept très sympa. Enfin un lieu où l’on peut manger rapidement de la cuisine de qualité avec des producteurs locaux. A quand une ouverture en banlieue parisienne ?','2018-10-16','5'),(2,'VBAMS','Très bien','Nous avons découvert ce restaurant avec un concept très simple et très sympa. On y mange bien et rapidement pour un prix tout a fait convenable.','2018-05-20','4'),(3,'martial m','Excellent','Je recommande +++++,tout est bio et local ,très très bon de la boisson au dessert !concept extra! Dommage qu\'il n\'y en ai pas un par chez nous ...','2018-10-15','5'),(4,'alexlapelle','Humm','Super resto-fast-food-pas comme les autres. Les plats sont super bon, allez ici plutôt que les autres géants du fast-food. Le proprio privilégie les circuits courts !','2018-09-29','5'),(5,'Damien R','Repas du soir sur le pouce de qualité ','Produits locaux, frais, préparés rapidement. Il y a un large choix. Un rapport qualité / prix excellent. Idéal pour un repas qualitatif rapide. Le décor est agréable et en harmonie avec le cadre extérieur','2018-09-18','4');
/*!40000 ALTER TABLE `opinionTripAdvisor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'oh_terroir_2018'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-19 14:46:24
