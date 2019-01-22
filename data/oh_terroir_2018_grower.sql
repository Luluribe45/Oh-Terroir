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
-- Table structure for table `grower`
--

DROP TABLE IF EXISTS `grower`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grower` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(125) NOT NULL,
  `description` varchar(100) NOT NULL,
  `localisation` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL,
  `siteInternet` varchar(200) DEFAULT NULL,
  `picture` varchar(200) NOT NULL DEFAULT 'https://i0.wp.com/hifadhiafrica.org/wp-content/uploads/2017/01/default-placeholder.png',
  `growerCategoriesId` int(11) NOT NULL,
  PRIMARY KEY (`id`,`growerCategoriesId`),
  KEY `fk_grower_growerCategories1_idx` (`growerCategoriesId`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grower`
--

LOCK TABLES `grower` WRITE;
/*!40000 ALTER TABLE `grower` DISABLE KEYS */;
INSERT INTO `grower` VALUES (1,'Maison Martin Pouret','Vinaigre et moutarde','Orléans - 45',1,'https://www.martin-pouret.com/','https://www.martin-pouret.com/images/martin-pouret.png',6),(2,'Yves de Rochefort','Quinoa','Patay - 45',1,NULL,'https://cdn-image.foodandwine.com/sites/default/files/styles/medium_2x/public/2014-r-xl-quinoa-salad-with-sumac-and-preserved-lemon-dressing.jpg?itok=yJtLbw2u',8),(3,'Ferme de Lutheau ','Poulets','Toury - 28 et Beaune la Rollande - 45',1,NULL,'https://www.metro.ca/userfiles/image/recipes/poitrines-poulet-yoghourt-moutarde-erable-7219.jpg',1),(4,'M. Leprince','Petit Epeautre','Greneville en beauce - 45',1,NULL,'https://www.palmiloire.fr/wp-content/uploads/2018/07/petit-epeautre.jpg',8),(5,'Ferme des grands champs','Faisselle et fromage frais','Lorris - 45',1,'http://gatinais.amapp.fr/spip.php?rubrique24','https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/18921871_440529912985873_7217771958355772930_n.png?_nc_cat=108&_nc_ht=scontent-cdt1-1.xx&oh=27a314d087635bb35f9c8ec85cee15b5&oe=5C415C4E',4),(6,'Jean Batiste Drouin, Ferme de la petite Brosse','Eleveur de Boeuf, Abeerden angnus','Girolles - 45',1,'http://chevrerieandcow.com/','https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/37377005_1726502357457972_3331182205350182912_n.jpg?_nc_cat=104&_nc_ht=scontent-cdt1-1.xx&oh=0b7df339a6929502f4bbcd342ae9c509&oe=5C76315E',1),(7,'Pizza Line & Big Terroir','Sauces maison','Montargis - 45',1,'http://www.ohterroir.com/','https://ugc.zenchef.com/3/4/5/0/5/0/1/0/0/5/2/1444732434_427/9c9d6e61ff09c4b34b5a2dd8bedb06ea.jpg',6),(8,'Confiserie de Luxe','Pralines Mazet ','Montargis - 45',1,'https://www.mazetconfiseur.com/','https://www.mazetconfiseur.com/timthumb/h=200&w=200&zc=2&LG=x&src=pralines-nouvelle-orleans-150g.pec150.png',7),(9,'Famille Rivière, Ferme des Fouets','Huiles de colza','Courtenay - 45',1,'http://www.huileriedesfouets.com/pages/des-huiles-artisanales-en-premiere-pression-a-froid-dans-le-loiret-45.html','http://www.huileriedesfouets.com/medias/images/bienvenue-a-la-ferme.jpg',6),(10,'Coopérative Ouvrière TPC','Compotes et confitures','Amilly - 45',1,NULL,'https://static.cuisineaz.com/240x192/i50514-confiture-de-framboises.jpg',7),(11,'Les jeunes pousses de Cortrat','Légumes','Cortrat - 45',1,NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXqupLmM8WzUDi7Gv04KNqCuQdtjO3NHHT7ucr-nvRVFl1KrJG',3),(12,'Olivier Chaloche Agriculteur','Pommes de terres spéciales frites','Cortrat - 45',1,NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_r1mrLflFSiurV1QubhTiQAOEk_0zoGtgMRaNrpgQWeNetfK9',3),(13,'Jean Michel Pingot','Lentilles','Oussoy en Gatinais - 45',1,'gatinais.amapp.fr/?-Oeufs','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZJEFZAgA0vUUvSCcFMPUNvWmLar-ODP1xFUnd3PF17P1oGqf9',3),(14,'Philippe Legrelle','Oeufs','Ouzouer sur Loire - 45',1,NULL,'https://www.atelierdeschefs.com/media/ingredient-e686-l-oeuf.jpg',4),(15,'Brasserie des Ecluses','Bière artisanale','St Hilaire St Mesmin - 45',1,NULL,'https://www.media12.fr/wp-content/uploads/2017/01/Media12-Bie%CC%80re.jpg',5),(16,'Famille Lonqueu ','Pates fermières locales','Mauves - 41',1,NULL,'https://www.mamanpourlavie.com/uploads/images/articles.cache/2013/01/15/file_main_image_7670_1_pates_sauces_7670_01_1500X1000_cache_640x360.jpg',8),(17,'Producteur/Récoltant, Famille Javoy','Vins d\'Orléans','Mezieres les Clery - 45',1,'https://locavor.fr/presentation/369-javoy-pere-et-fils','https://locavor.fr/data/produits/47647/square300/47647-aoc-orleans-clery-2015-rouge-vieilli-fut-de-chene-1.jpg',5),(18,'Isabelle Gallier, Boulangerie O Levain','Tartines et patiseries','Ouzouer les champs - 45',1,'http://olevain.fr/','https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/10647226_941247529235905_2601756659621230394_n.jpg?_nc_cat=102&_nc_ht=scontent-cdt1-1.xx&oh=0d659cef1bbc1ebcee6364e4893bfc5c&oe=5C7EBEC6',7),(19,'Etik&Bio','Legumes et fruits bio','Orléans - 45',1,'http://solembio.org/','http://solembio.org/wp-content/uploads/2012/04/jardins-logo-e1334847926337.gif',2),(20,'Gran Leo et Cantal AOP','Fromage de vache affiné','Lozère - 48',1,'http://www.aop-cantal.com/le-fromage-cantal','https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Wikicheese-XX_-_Cantal_entre-deux_-_20180601_-_002.jpg/1200px-Wikicheese-XX_-_Cantal_entre-deux_-_20180601_-_002.jpg',4),(21,'Maison Bioviver','Purées de fruits, pour les faisselles','Lot et Garonne',1,NULL,'https://leanature.com/wp-content/uploads/2016/08/LOGO-BIOVIVER-web.png',7),(22,'Bionatis','Buns Burger','Rhone',1,'http://www.bionatis.com/','http://www.bionatis.com/wp-content/uploads/2012/05/logo1.png',8),(23,'Maison Meneau - St Loubès','Sirops','Bordeaux',1,'http://www.meneau.com/','https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/22552716_1612743745448633_1791832873235371066_n.jpg?_nc_cat=101&_nc_ht=scontent-cdt1-1.xx&oh=c9b5556c019287ebbbd2b2337522e06a&oe=5C759361',5),(24,'Chef Roellinger','Epices pour les sauces','Cancale',1,NULL,'https://i0.wp.com/hifadhiafrica.org/wp-content/uploads/2017/01/default-placeholder.png',6),(25,'Chorizo et Ventreche','Charcuteries artisanales basque','Pierre Oteiza - aux Aldudes',1,'https://www.decreuse.com/','https://www.decreuse.com/img/prestashop-logo-1541086863.jpg',1),(26,'Brasserie de Vezelay','Bière sans gluten','Vezelay - 89',1,'http://brasseriedevezelay.fr/','http://brasseriedevezelay.fr/assets/img/prod/25clBlanche@2x.png',5);
/*!40000 ALTER TABLE `grower` ENABLE KEYS */;
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

-- Dump completed on 2018-11-05 16:17:44
