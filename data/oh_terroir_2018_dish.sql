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
-- Table structure for table `dish`
--

DROP TABLE IF EXISTS `dish`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dish` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(125) NOT NULL,
  `price` float NOT NULL,
  `composition` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL,
  `dishSubcategoryId` int(11) NOT NULL,
  PRIMARY KEY (`id`,`dishSubcategoryId`),
  KEY `fk_dish_dishSubcategory1_idx` (`dishSubcategoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dish`
--

LOCK TABLES `dish` WRITE;
/*!40000 ALTER TABLE `dish` DISABLE KEYS */;
INSERT INTO `dish` VALUES (4,'BBQ',13.9,'Sauce barbecue, oignons confits au miel du gâtinais local',1,1),(5,'Béarnais',13.9,'Sauce Béarnaise, tartare de tomates séchées',1,1),(6,'Roquefort',13.9,'Sauce roquefort AOP, oignons confits au miel du gâtinais local',1,1),(7,'Basque',13.9,'Sauce ketchup au piment d\'espelette et chorizo basque',1,1),(8,'Miel Moutarde',13.9,'Sauce au miel et à la moutarde, ventreche basque',1,1),(9,'Carbonara',9.9,'Crème bio et petits lardons fumés',1,3),(10,'Poumo d\'Amour',8.9,'Tomate, oignons, ail, gingembre',1,3),(11,'Provenço',9.9,'Tomate, oignons, ail, gingembre, achard de légumes',1,3),(12,'Basquaise',10.6,'Tomate, oignons, ail, gingembre, chorizo basque',1,3),(13,'Tourangelle',10.6,'Crème bio, champignons et cèpes avec jambon blanc artisanal du Jura',1,3),(14,'Tourangelle Végétarienne',8.9,'Crème bio, champignons et cèpes avec achard de légumes',1,3),(15,'Orléanaise',10.6,'Crème bio, moutarde Orléans avec jambon blanc artisanal du Jura',1,3),(16,'Orléanaise Végétarienne',8.9,'Crème bio, moutarde Orléans avec achard de légumes',1,3),(17,'Douce Curry Jaune',10.6,'Sans lactose : lait de coco avec blanc de poulet local',1,3),(18,'Douce Curry Jaune Végétarienne',8.9,'Sans lactose : lait de coco avec achard de légumes',1,3),(19,'Caesar',11.9,'Sauce caesar, salade, croutons, poulet de la ferme, fromage Gran Leo, oeuf bio mollet',1,4),(20,'Route des Indes',12.9,'Sauce maison et sauce curry, tomates confites, achards de légumes, raisins sec, poulet de la ferme',1,4),(21,'Luberon',12.9,'Sauce maison, jambon fumé, melon, concombre, tomate, feta doc, oignons émincés',1,4),(22,'Tzatziki',12.9,'Sauce tzatziki maison, concombre, tomate, feta doc, oignons émincés',1,4),(23,'Freschezza',11.9,'Sauce maison, tomates, mozzarella doc, olives, pesto au basilic',1,4),(24,'Des Îles',11.9,'Sauce maison et rougail, tomates, concombre, achards de légumes',1,4),(25,'Basque',12.9,'Sauce maison et rougail, tomates, courgettes, achards de légumes, chorizo et oeuf bio',1,4),(26,'Quiche - Flan',11.9,'Chaud, sans gluten, avec légumes de saison et salade (sur demande portion de frites bio ou 25cl de soupe bio)',1,4),(27,'Gaspacho Maison',6.9,'Maxi bol',1,4),(28,'Pizzi',10.9,'Tartines accompagnées d\'une salade, avec viande ou sans viande',1,4),(29,'Faisselle bio fraise',2.5,'',1,5),(30,'Crème vanille bio sans lactose',2.5,'',1,5),(31,'Riz au lait de Camargue',2.5,'',1,5),(32,'Faisselle bio aux pralines mazet de Montargis',2.5,'',1,5),(33,'Panier crumble fruits rouge',3.5,'',1,5),(34,'Verrine mousse au chocolat sans gluten',3.5,'',1,5),(35,'Pot de glace',4.5,'',1,5),(36,'Crème praliné bio sans lactose',2.5,'',1,5),(37,'Crème chocolat bio sans lactose',2.5,'',1,5),(38,'Cheesecake spéculoos',3.9,'',1,5),(39,'Fondant chocolat sans gluten',3.5,'',1,5);
/*!40000 ALTER TABLE `dish` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-06  9:46:54
