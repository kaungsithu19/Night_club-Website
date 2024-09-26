CREATE DATABASE  IF NOT EXISTS `lucia_club` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `lucia_club`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: lucia_club
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `artist`
--

DROP TABLE IF EXISTS `artist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artist` (
  `artist_id` char(5) NOT NULL,
  `artist_name` varchar(50) NOT NULL,
  `s_or_b` varchar(50) NOT NULL,
  `bio` varchar(80) NOT NULL,
  `uname_fb` varchar(50) NOT NULL,
  `uname_tw` varchar(50) NOT NULL,
  `uname_insta` varchar(50) NOT NULL,
  `pr_image` varchar(80) NOT NULL DEFAULT 'http://localhost/precw/img/solo1.png',
  PRIMARY KEY (`artist_id`,`artist_name`,`s_or_b`),
  UNIQUE KEY `artist_id_UNIQUE` (`artist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artist`
--

LOCK TABLES `artist` WRITE;
/*!40000 ALTER TABLE `artist` DISABLE KEYS */;
INSERT INTO `artist` VALUES ('B001','Jane Doe','Band','An energetic rock band known for their electrifying performances.','jane.doe.band','janedoe_rocks','janedoe_music','http://localhost/club/img/band1.png'),('B002','Sara Williams','Band','A dynamic pop group that creates catchy and uplifting tunes.','sara.williams.band','swilliams_pop','sara_w_music','http://localhost/club/img/band2.png'),('B003','Alex Martinez','Band','An indie rock band known for their dreamy and atmospheric sound.','alex.martinez.band','alex_indierock','alexmartinez_music','http://localhost/club/img/band3.png'),('B004','Mark Thompson','Band','A high-energy country group that keeps the crowd dancing.','mark.thompson.band','markcountry','mthompson_country','http://localhost/club/img/band4.png'),('B005','Hannah Wilson','Band','An alternative rock band that pushes boundaries with their sound.','hannah.wilson.band','hannah_altrock','hannah_wilson_music','http://localhost/club/img/band5.png'),('B006','Benjamin Green','Band','A funk and soul band that brings a party to every stage.','benjamin.green','bengreen_funk','benjamin_music','http://localhost/club/img/band6.png'),('B007','Isabella Martinez','Band','An acoustic duo delivering heartfelt harmonies and soulful melodies.','isabella.martinez.duo','isabelladuo','isabella_music','http://localhost/club/img/band7.png'),('S001','John Smith','Solo','A versatile musician with a passion for jazz and blues.','john.smith.music','jsmith_music','johnsmith_jazz','http://localhost/club/img/solo1.png'),('S002','Mike Johnson','Solo','A singer-songwriter crafting heartfelt folk melodies.','mike.johnson.music','mjohnson_folk','mikej_songs','http://localhost/club/img/solo2.png'),('S003','David Brown','Solo','A pianist with a deep appreciation for classical music.','david.brown.keys','dbrown_piano','david_keys','http://localhost/club/img/solo3.png'),('S004','Chris Garcia','Solo','An up-and-coming hip-hop artist with a unique lyrical style.','chris.garcia.rap','c_garcia_hiphop','chrisg_rapper','http://localhost/club/img/solo4.png'),('S005','Emily Anderson','Solo','A soulful vocalist who infuses jazz with modern R&B.','emily.anderson.singer','emily_rnb','emilyanderson_music','http://localhost/club/img/solo5.png'),('S006','Laura Rodriguez','Solo','A skilled guitarist blending flamenco and Latin influences.','laura.rodriguez.guitar','lrodriguez_flamenco','lauraguitar','http://localhost/club/img/solo6.png'),('S007','Amy Chen','Solo','A talented violinist known for her emotive and powerful performances.','amy.chen.violin','amychen_music','amy_violinist','http://localhost/club/img/solo7.png'),('S008','Carlos Sanchez','Solo','A trumpet player passionate about jazz improvisation.','carlos.sanchez.trumpet','csanchez_jazz','carlos_trumpet','http://localhost/club/img/solo8.png'),('S009','Michael Lee','Solo','A soul singer with a voice that can melt hearts.','michael.lee.soul','michael_soulmusic','michaelleemusic','http://localhost/club/img/solo9.png'),('S010','Sophia Nguyen','Solo','A pianist known for her delicate touch and expressive performances.','sophia.nguyen.keys','sophia_piano','sophiapianist','http://localhost/club/img/solo10.png'),('S011','Olivia White','Solo','A harpist who creates enchanting and ethereal musical experiences.','olivia.white.harp','oliviaharp','olivia_harpist','http://localhost/club/img/solo11.png'),('S012','Daniel Kim','Solo','A charismatic rapper who combines witty lyrics with infectious beats.','daniel.kim.rap','danielkim_rapper','dkim_music','http://localhost/club/img/solo11.png'),('S013','Nathan Adams','Solo','A guitarist exploring boundaries of instrumental music.','nathan.adams.guitar','nathan_guitarist','nathan_music','http://localhost/club/img/solo12.png'),('S020','Kaung Si THu','Solo',' An acoustic duo delivering heartfelt harmonies and soulful melodies.','kst','kst','kst','http://localhost/club/img/solo7.png');
/*!40000 ALTER TABLE `artist` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-01 14:10:57
