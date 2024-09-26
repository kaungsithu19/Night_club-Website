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
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event` (
  `event_id` int NOT NULL,
  `event_name` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `start_time` varchar(45) NOT NULL,
  `end_time` varchar(45) NOT NULL,
  `category` char(10) NOT NULL,
  `fee` int NOT NULL,
  `max_capacity` int NOT NULL,
  `performance_detail` varchar(100) NOT NULL,
  `artist_id` char(5) NOT NULL,
  PRIMARY KEY (`event_id`,`date`,`start_time`,`end_time`),
  UNIQUE KEY `event_id_UNIQUE` (`event_id`),
  KEY `for_artist_id` (`artist_id`),
  CONSTRAINT `for_artist_id` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES (1,'Acoustic Evening','2023-08-20','19:00','22:00','Music',12000,150,'An intimate night of acoustic melodies by Sophia Nguyen on the piano.','S010'),(2,'Comedy Night','2023-08-15','20:00','22:00','Comedy',8000,100,'A hilarious stand-up comedy show featuring Daniel Kim.','S012'),(3,'Poetry Jam','2023-08-10','18:30','21:00','Poetry',6000,80,'A captivating evening of spoken word and poetry readings.','S006'),(4,'Rock Fusion','2023-08-25','21:30','00:30','Music',15000,200,'An electrifying rock fusion concert featuring Jane Doe and her band.','B001'),(5,'Jazz Night','2023-08-18','20:00','23:00','Music',11000,120,'An enchanting jazz performance by Carlos Sanchez on the trumpet.','S008'),(6,'Soulful Serenade','2023-08-22','19:30','22:00','Music',13000,160,'A soulful evening of music with Michael Lee showcasing his heartfelt vocals.','S009'),(7,'Indie Vibes','2023-08-14','19:30','22:30','Music',10500,140,'An indie music showcase featuring Alex Martinez and his band.','B003'),(8,'Comedy Showcase','2023-08-12','20:30','23:00','Comedy',7500,90,'A night of laughter with Emily Anderson delivering her unique comedy style.','S005'),(9,'Classical Soiree','2023-08-19','18:00','21:00','Music',14000,180,'A sophisticated classical music performance by David Brown on the piano.','S003'),(10,'Folk Tales','2023-08-24','19:00','21:30','Music',11500,130,'A cozy evening of folk music with Mike Johnson strumming his heartfelt tunes.','S002'),(11,'Poetry Night','2023-08-26','20:00','22:00','Poetry',5000,70,'An expressive evening of poetry readings and spoken word.','S011'),(12,'Hip-Hop Extravaganza','2023-08-17','21:00','00:00','Music',17000,220,'A high-energy hip-hop show with Chris Garcia bringing his unique rap style.','S004'),(13,'Sunset Serenade','2023-08-31','18:30','20:30','Music',12500,150,'A serene evening of music with Laura Rodriguez showcasing her flamenco-inspired guitar skills.','S006'),(14,'Laugh Factory','2023-09-02','20:00','22:00','Comedy',8500,100,'A night of laughter with Olivia White delivering her unique comedy style.','S011'),(15,'Urban Beats','2023-09-05','21:00','23:30','Music',13500,160,'An urban music extravaganza with Benjamin Green and his funk and soul band.','B006'),(16,'Spoken Word Delights','2023-09-08','19:30','21:30','Poetry',5500,80,'An evening of expressive poetry readings and spoken word performances.','S013'),(17,'Piano Magic','2023-09-12','18:00','20:00','Music',14500,180,'An enchanting piano performance by Sophia Nguyen, exploring classical and contemporary pieces.','S010'),(18,'Comedy Rendezvous','2023-09-15','20:30','22:30','Comedy',7800,90,'A hilarious stand-up comedy show featuring Daniel Kim.','S012'),(19,'Soulful Evening','2023-09-18','19:30','22:00','Music',13000,160,'A soulful music experience with Michael Lee and his captivating vocals.','S009'),(20,'Indie Harmony','2023-09-20','19:00','21:30','Music',10500,140,'An indie music showcase featuring Isabella Martinez and her acoustic duo.','B007'),(21,'Lyrical Wonders','2023-09-23','20:00','22:00','Poetry',6000,70,'A night of lyrical wonders with Emily Anderson sharing her poetic creations.','S005'),(22,'Guitar Soirée','2023-09-26','18:30','21:00','Music',11000,130,'An evening of melodic guitar tunes with Nathan Adams showcasing his instrumental prowess.','S013'),(23,'Euphonious Vibes','2023-09-29','21:00','00:00','Music',16000,200,'A fusion of euphonious sounds with Mark Thompson and his high-energy country group.','B004'),(24,'Jazz Fusion Night','2023-10-03','20:00','23:00','Music',12000,150,'An innovative jazz fusion performance by Chris Garcia on the saxophone.','S004'),(25,'Rhythmic Verse','2023-10-06','19:30','21:30','Poetry',5500,80,'An exploration of rhythmic verse and spoken word with David Brown.','S003'),(26,'Vocal Enchantment','2023-10-09','18:00','20:30','Music',14000,180,'An enchanting vocal performance by Amy Chen, accompanied by her violin.','S007'),(27,'Folk & Beyond','2023-10-12','19:00','22:00','Music',11500,130,'An evening of folk music with Mike Johnson and his heartfelt tunes.','S002'),(28,'Dramatic Laughter','2023-10-15','20:30','22:30','Comedy',7500,90,'A night of comedy with Olivia White bringing her dramatic and hilarious style.','S011');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
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
