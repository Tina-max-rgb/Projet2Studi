-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: hypnos
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cataloguedesetablissements`
--

DROP TABLE IF EXISTS `cataloguedesetablissements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cataloguedesetablissements` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(150) DEFAULT NULL,
  `etablissementsDuGroupe` varchar(550) DEFAULT NULL,
  `listeSuitesEtablissement` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `cataloguedesetablissements_ibfk_1` FOREIGN KEY (`id`) REFERENCES `etablissements` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cataloguedesetablissements`
--

LOCK TABLES `cataloguedesetablissements` WRITE;
/*!40000 ALTER TABLE `cataloguedesetablissements` DISABLE KEYS */;
INSERT INTO `cataloguedesetablissements` VALUES (1,'visiteur','Le mercure','Suite luxueuse du Mercure, seconde suite de Mercure, troisiéme suite luxueuse de mercure');
/*!40000 ALTER TABLE `cataloguedesetablissements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etablissements`
--

DROP TABLE IF EXISTS `etablissements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `etablissements` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `ville` varchar(150) DEFAULT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `description` varchar(550) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etablissements`
--

LOCK TABLES `etablissements` WRITE;
/*!40000 ALTER TABLE `etablissements` DISABLE KEYS */;
INSERT INTO `etablissements` VALUES (1,'Le mercure','paris','121 avenue du général de gaulle 75001 Paris','Le mercure est le premier établissement dhypnos qui a été fondé, il posséde trois suites luxueuses qui se situent au centre de la capitale française'),(2,'Louis 4','bordeaux','1 avenue de la bourse 33063 Bordeaux','Louis 4 est le deuxiéme établissement dhypnos qui a été crée en 2008 par François pinault dans le but dacceuillir les touristes étrangers, situé à la place de la bourse, il comporte 4 suites luxueuses'),(3,'François Mitterand','paris','19 rue de Tolbiac 75002 Paris','François Mitterand est un établissement dhypnos qui se situe au centre de la capitale française, létablissement a ouvert ses portes en 2009, il comporte 2 suites luxueuse, et une salle de cinéma'),(5,'Park-Hyatt','Nice','5 rue de la paix 06000 Nice','cet établissement dhypnos luxueux qui se situe en face de la promenade des anglais, est classé parmi les hotels les plus chics de leurope, il comporte 4 suite, et un salon de coiffure et un centre de fitness'),(6,'Costes Castiglione','rennes','45 rue Saint honoré 35000 Rennes','cet établissement a ouvert ses portes en 2009 et se situe en face du musée de la bretagne, il comporte 3 suite, et une piscine'),(7,'Burgundy','Paris','8 rue duphot 75001 paris','cet établissement dhypnos est connu pour sa décoration qui est inspiré de la période dart Deco, il abrite 3 suites et une piscine et un jardin nommé le jardin dhiver'),(16,'C','ti','tina','h'),(17,'qq','','qq',''),(18,'qq','','qq',''),(19,'qq','','qq','');
/*!40000 ALTER TABLE `etablissements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formulaire`
--

DROP TABLE IF EXISTS `formulaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `formulaire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(100) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `categorie` varchar(300) DEFAULT NULL,
  `reception` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formulaire`
--

LOCK TABLES `formulaire` WRITE;
/*!40000 ALTER TABLE `formulaire` DISABLE KEYS */;
INSERT INTO `formulaire` VALUES (1,'client','Lebon','Michel','michel.lebon@hypnos.fr','je souhaite poser une réclamation, je souhaite commander un service supplémentaire, je souhaite en savoir plus sur une suite, jai un souçis avec cette application','admins@hypnos.com'),(2,'visiteur','Lebon','Emma','emma.lebon@hypnos.fr','je souhaite poser une réclamation, je souhaite commander un service supplémentaire, je souhaite en savoir plus sur une suite, jai un souçis avec cette application','admins@hypnos.com'),(3,'administrateur','Maillard','Martin','admins@hypnos.fr','je souhaite poser une réclamation, je souhaite commander un service supplémentaire, je souhaite en savoir plus sur une suite, jai un souçis avec cette application','admins@hypnos.com'),(4,NULL,NULL,NULL,NULL,NULL,NULL),(5,'Thinhinane','BOUNOUA','mlkmk','ttona457@gmail.com','reclamation',NULL),(6,'kjnkl','mùlùm','m;ùm','ttona457@gmail.com','reclamation','ttona457@gmail.com');
/*!40000 ALTER TABLE `formulaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gérants`
--

DROP TABLE IF EXISTS `gérants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gérants` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `passeword` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gérants`
--

LOCK TABLES `gérants` WRITE;
/*!40000 ALTER TABLE `gérants` DISABLE KEYS */;
INSERT INTO `gérants` VALUES (1,'Lebon','Michel','michel.lebon@hypnos.fr','cdbhvdh-èy'),(2,'Rigimbeau','Gérard','gerard.rigem@hypnos.fr','nfjegbje'),(3,'Maillard','Martin','Martin.M@hypnos.fr','nfjegbje'),(5,'hhhhh','mmmm','mmmmmm','l');
/*!40000 ALTER TABLE `gérants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `params`
--

DROP TABLE IF EXISTS `params`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `params` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `params`
--

LOCK TABLES `params` WRITE;
/*!40000 ALTER TABLE `params` DISABLE KEYS */;
/*!40000 ALTER TABLE `params` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reserverunesuite`
--

DROP TABLE IF EXISTS `reserverunesuite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reserverunesuite` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(250) DEFAULT NULL,
  `choixEtablissement` varchar(150) DEFAULT NULL,
  `choixSuite` varchar(250) DEFAULT NULL,
  `dateDeDebut` varchar(250) DEFAULT NULL,
  `dateDeFin` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `reserverunesuite_ibfk_1` FOREIGN KEY (`id`) REFERENCES `suites` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reserverunesuite`
--

LOCK TABLES `reserverunesuite` WRITE;
/*!40000 ALTER TABLE `reserverunesuite` DISABLE KEYS */;
INSERT INTO `reserverunesuite` VALUES (1,'visiteur','Le mercure','Suite luxueuse du Mercure','2022-04-20','2022-04-24'),(2,'client','Le mercure','Seconde suite de Mercure','2022-04-20','2022-04-24'),(4,'client','Louis 4','seconde suite de Louis4','2022-04-20','2022-05-24'),(5,'visiteur','Louis 4','seconde suite de Louis4','2022-04-20','2022-04-04'),(7,'client','Shangri-La','quatriéme suite de Shangri-La','2022-04-20','2022-04-04'),(8,'client','Park-Hyatt','troisiéme suite de Park-Hyatt','2022-04-20','2022-04-04'),(9,'visiteur','François Mitterand','troisiéme suite de françois Mitterand','2022-04-20','2022-04-04'),(13,NULL,'lsqknclksc','sss','12/05/2022','13/05/2022'),(14,NULL,'ko,ol','KKK','11/05/2022','11/09/2022');
/*!40000 ALTER TABLE `reserverunesuite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suites`
--

DROP TABLE IF EXISTS `suites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `suites` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titreSuite` varchar(100) DEFAULT NULL,
  `image` varchar(450) DEFAULT NULL,
  `textDescriptif` varchar(550) DEFAULT NULL,
  `prix` varchar(150) DEFAULT NULL,
  `galerieImages` varchar(700) DEFAULT NULL,
  `lienReservation` varchar(450) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suites`
--

LOCK TABLES `suites` WRITE;
/*!40000 ALTER TABLE `suites` DISABLE KEYS */;
INSERT INTO `suites` VALUES (1,'Suite luxueuse du Mercure','img1.jpg','Cette suite luxueuse comporte deux chambres à coucher et un dressing et une salle de bain et une piéce pour manger','1000?','img2.jpg, img3.jpg','https://www.booking.com/'),(2,'Seconde suite de mercure','img4.jpg','Cette suite  comporte 1 chambres à coucher romantique idéale pour un couple et une salle de bain avec une magnifique vue','800?','img5.jpg, img6.jpg, img9.jpg','https://www.booking.com/'),(4,'premiére suite Louis4','img13.jpg','Cette suite comporte 1 chambre à coucher romantique idéale pour un couple et une salle de bain et un dressing et une salle de jeu','1200?','img8.jpg, img7.jpg','https://www.booking.com/'),(5,'seconde suite Louis4','img14.jpg','Cette suite comporte 1 chambre à coucher romantique idéale pour un couple et une salle de bain et une salle pour manger','1000?','img15.jpg, img16.jpg','https://www.booking.com/'),(6,'troisiéme suite Louis4','img17.jpg','Cette suite se situe au coeur de lhotel et elle est idéale pour un séjour familiale','1400?','img18.jpg, img19.jpg, simg20','https://www.booking.com/'),(7,'quatriéme suite Louis4','img21.jpg','Cette suite abrite une grande chambre à coucher, elle est idéale pour passer un séjour entre amoureux','900?','img22.jpg, img23.jpg','https://www.booking.com/'),(8,'premiére suite de letablissement françois mitterand','img24.jpg','Cette suite abrite deux grandes chambres à coucher, et une salle de bain, le room service est proposé pour cette suite, elle est idéale pour deux couples qui passent un séjour ensemble','1400?','img25.jpg, img26.jpg, img27','https://www.booking.com/'),(9,'lautre suite de françois mitterand','img28.jpg','Cette suite abrite une grande chambre à coucher, et une chambre pour enfant, elle est idéale pour passer un séjour familial','1200?','img29.jpg, img30.jpg','https://www.booking.com/'),(10,'premiére suite SHANGRI-LA','img31.jpg','Cette suite abrite deux chambres, et une salle pour manger, elle est idéale pour se reposer et passer de bons moments','900?','img32.jpg, img33.jpg','https://www.booking.com/'),(11,'seconde suite SHANGRI-LA','img34.jpg','Cette suite abrite une chambre romantique, et une salle de bain, elle est idéale pour des jeunes mariés','1100?','img35.jpg, img36.jpg','https://www.booking.com/'),(12,'troisiéme suite SHANGRI-LA','img37.jpg','Cette suite abrite une chambre à coucher, et un salon et une salle de bain, et une piscine, elle est idéale pour passer des vacances dété','1600?','img38.jpg, img39.jpg','https://www.booking.com/'),(13,'quatriéme suite SHANGRI-LA','img40.jpg','Cette suite abrite une chambre à coucher, et une chambre pour enfants, et un salon et une salle de bain, et une salle de jeu, elle est idéale pour passer un séjour familier','1900?','img41.jpg, img42.jpg','https://www.booking.com/'),(14,'premiére suite Park-Hyatt','img43.jpg','Cette suite abrite une chambre à coucher, et une salle de bain, et une salle de sport','1500?','img44.jpg, img45.jpg','https://www.booking.com/'),(15,'deuxiéme suite Park-Hyatt','img46.jpg','Cette suite abrite deux chambres à coucher, et une salle de bain, et un jardin','1800?','img47.jpg, img48.jpg, img49','https://www.booking.com/'),(16,'troisiéme suite Park-Hyatt','img50.jpg','Cette suite abrite deux chambres à coucher, et une salle de bain, et un jardin, et une pscine','1800?','img51.jpg, img52.jpg, img53','https://www.booking.com/'),(17,'quatriéme suite Park-Hyatt','img54.jpg','Cette suite abrite une chambre à coucher, et une salle de bain, et un jardin','1400?','img55.jpg, img56.jpg','https://www.booking.com/'),(18,'premiére suite Costes Castiglione','img57.jpg','Cette suite abrite deux chambresà coucher, et une salle de bain, et une piscine extérieure','1900?','img58.jpg, img59.jpg, img60.jpg','https://www.booking.com/'),(19,'deuxiéme suite Costes Castiglione','img61.jpg','Cette suite abrite deux chambresà coucher, et une salle de bain','1400?','img62.jpg, img63.jpg, img64.jpg','https://www.booking.com/'),(20,'troisiéme suite Costes Castiglione','img65.jpg','Cette suite abrite une chambre à coucher, et une salle de bain et un jardin','1500?','img66.jpg, img67.jpg, img68.jpg','https://www.booking.com/'),(21,'premiére suite Burgundy','img69.jpg','Cette suite abrite une chambre à coucher, et une salle de bain et un espace pour se distraire','1700?','img70.jpg, img71.jpg, img72.jpg','https://www.booking.com/'),(22,'premiére suite Burgundy','img73.jpg','Cette suite abrite deux chambres à coucher, et une salle de bain et un jardin','1900?','img74.jpg, img75.jpg, img76.jpg','https://www.booking.com/'),(23,'troisiéme suite Burgundy','img77.jpg','Cette suite abrite une chambre à coucher, et une chambre pour enfant, et une salle de bain et un espace de lecture','1700?','img78.jpg, img79.jpg, img80.jpg','https://www.booking.com/'),(24,'ml:m','','','','','');
/*!40000 ALTER TABLE `suites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prénom` varchar(150) DEFAULT NULL,
  `role` varchar(150) DEFAULT NULL,
  `pseudo` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `passeword` varchar(550) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `utilisateurs_ibfk_1` FOREIGN KEY (`id`) REFERENCES `suites` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateurs`
--

LOCK TABLES `utilisateurs` WRITE;
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
INSERT INTO `utilisateurs` VALUES (1,'Maillard','Martin','Administrateur','Marti','Admins1@hypnos.com','Dghzfdfde@124'),(2,'Mercier','Marion','Administrateur','Marion','Admins2@hypnos.com','Dghzfghe@125'),(4,'Lecadet','Daniel','Gérant','Dany','GérantLouis4@hypnos.com','hjscdeg5@gcf'),(5,'Blanchard','Manon','Gérant','Manon','GérantFrançoisMitterand@hypnos.com','jhgscdeg5@g456'),(6,'Denis','Sébastien','Gérant','Séba','GérantShangri-la@hypnos.com','mpkhscdeg5@j895'),(7,'Gonzalez','Maria','Gérant','Maria','GérantPark-hyatt@hypnos.com','koszipcdeg5@j32'),(8,'Boyer','Nicola','Gérant','Nico','GérantCostes-Castiglione@hypnos.com','huhszdeg5@l98'),(9,'Soutil','Léa','Gérant','Léa','GérantBurgundy@hypnos.com','lpmhyig5@l20s'),(10,'Bendarin','Michelle','Client','Michelle','MichelleB@gmail.com','client15@l20s'),(11,'Bendarin','Cedric','Client','Cedric','CedricB@gmail.com','client25@l20s'),(12,'Bendarin','Marie','Visiteur','MarieB','VisiteurB@gmail.com','Visiteur25@l20s'),(14,'g','k',NULL,'k','bounoua.thinhinane@gmail.com','t'),(16,'ttt','jjj',NULL,'ti','tt@gmail.com','t'),(17,'xkl,xqlsk','cqsCsq',NULL,'sqcsq','c@gmail.com','t'),(18,'t','t',NULL,'t','ttona45@gmail.com','t'),(19,'t','t',NULL,'ti','tto@gmail.com','t');
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voirsesreservations`
--

DROP TABLE IF EXISTS `voirsesreservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `voirsesreservations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(250) DEFAULT NULL,
  `historiqueReservation` varchar(1000) DEFAULT NULL,
  `annulerReservation` varchar(400) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `passeword` varchar(550) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voirsesreservations`
--

LOCK TABLES `voirsesreservations` WRITE;
/*!40000 ALTER TABLE `voirsesreservations` DISABLE KEYS */;
INSERT INTO `voirsesreservations` VALUES (1,'client','2022-04-06, suite luxueuse du mercure','attention vous pouvez annuler votre réservation actuelle seulement trois jours avant la date dinscription','emelyclient@yahoo.fr','ghcgctgtdy'),(2,'client','2022-04-04, seconde suite de mercure','attention vous pouvez annuler votre réservation actuelle seulement trois jours avant la date dinscription','hypnosclient@gmail.com','g578TY7CG'),(4,'client','2022-04-00, seconde suite de Louis4','attention vous pouvez annuler votre réservation actuelle seulement trois jours avant la date dinscription','cedric@hotmail.fr','jlmpùkkk');
/*!40000 ALTER TABLE `voirsesreservations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-21 22:50:14
