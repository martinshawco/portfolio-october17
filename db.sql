-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: martinsh_msportfolio
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.17.10.1

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
-- Table structure for table `project_images`
--

DROP TABLE IF EXISTS `project_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `is_thumbnail` tinyint(1) DEFAULT NULL COMMENT 'Exclusive thumbnail for each project',
  `is_thumbnail_centercontained` tinyint(1) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_images`
--

LOCK TABLES `project_images` WRITE;
/*!40000 ALTER TABLE `project_images` DISABLE KEYS */;
INSERT INTO `project_images` VALUES (1,5,'/images/projects/qrcode/1.jpeg',1,1,'2017-11-01','2017-11-01'),(3,6,'/images/projects/carbondiaries/2.png',1,1,'2017-11-01','2017-11-01'),(5,7,'/images/projects/nazkebabhouse/nazkebabhouse.png',1,0,'2017-11-01','2017-11-01'),(7,8,'/images/projects/javainttrade/trade4.PNG',1,1,'2017-11-01','2017-11-01'),(8,9,'/images/projects/youtilities/1.png',1,0,'2017-11-01','2017-11-01'),(9,10,'/images/projects/adaptivemedia/1.png',1,1,'2017-11-01','2017-11-01'),(10,11,'/images/projects/empinformation/1.png',1,1,'2017-11-01','2017-11-01'),(11,12,'/images/projects/rochpioneerstrust/1.png',1,0,'2017-11-01','2017-11-01'),(12,6,'/images/projects/carbondiaries/3.png',0,1,NULL,NULL),(13,6,'/images/projects/carbondiaries/4.jpg',0,1,NULL,NULL);
/*!40000 ALTER TABLE `project_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` mediumtext,
  `url` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `tags` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (5,'Pebble QR Code Library','I purchased a Pebble smartwatch in an effort to begin learning how to develop applications and services which might be used on people\'s wearable devices.\r<br/>\r<br/>I considered a basic Pebble app which would allow myself as a user, to display contact information in the form of a scanable QR barcode, allowing me to distribute such information at considerable convenience.\r<br/>\r<br/>After only two days, with no previous knowledge of Pebble JS APIs, I was able to create a simple yet effective service which allows the user to store 5 dynamically generated QR codes which can be alternated and displayed with a mere button press.',NULL,'2017-04-04','2017-11-04','C,JSON'),(6,'Carbon Diary App','Mobile App which analyses and visualises the user’s carbon footprint (via automatic recording or manual input of daily transport, food and drink use). We hoped to create awareness of individuals’ global warming effect, by enticing users to compete for the lowest stats amongst their friends on social media.\r<br/>\r<br/>This project allowed me to significantly increase my knowledge of responsive mobile web development, making effective use of jQuery Mobile and Mapbox Javascript frameworks.\r<br/>\r<br/>This project was created during the Festival of Code, an annual week-long coding competition which invites young children and teenagers to gain experience in programming and hardware experimentation, as well as an opportunity to work in groups of like-minded people to create an innovative technology project using open data over the duration of the week.','https://twitter.com/Carbon_Diary','2017-04-04','2017-11-04','HTML,jQuery Mobile,CSS'),(7,'Naz Kebab House Website','During my second year at Hopwood Hall College, I was approached by a locally-owned fast food restaurant to create an appealing website which would bring more customers to the restaurant and inform customers of contact details, opening times and menu items.\r<br/>\r<br/>I used this project to increase my knowledge of professional web design and gain the ability to incorporate animated elements into web pages (such as dramatic steam rising from the background images of asian cuisine). It was also an opportunity to demonstrate my ability to organise, implement and conduct a client\'s business professionally and well within deadline.','http://nazkebabhouse.com','2017-04-04','2017-11-04','HTML,JS,CSS,PHP'),(8,'International Trading Data Assignment','I was tasked by my Algorithms tutor (as part of my Computer Science Degree at MMU) to create a complex C# desktop application which would allow the user to display, model and modify relational data representing various nations\' financial and trading figures and each nation\'s trade relations with each other.\r<br/>\r<br/>I made significant use of advanced relational data structures learned throughout the year and used the opportunity to develop my knowledge of the Windows Form UI platform to build a professional and reliable enterprise-style application.','https://github.com/martinshaw/InternationalTradingDataAssignment','2017-04-04','2017-11-04','C#,.Net'),(9,'Youtilities','An online mapping service which displays useful, curated and reputable utilities within the city which the user is currently located in (toilets, information centres, transport stations, disability facilities, etc...).\r<br/>\r<br/>I did this in an effort to develop my knowledge of server-side scripting (PHP) and databases (MySql), making frequent use of the opportunity to learn from experienced developers from industry, and kickstarting my interest in server-side web development which continues to this day.\r<br/>\r<br/>This project was created during the Festival of Code, an annual week-long coding competition which invites young children and teenagers to gain experience in programming and hardware experimentation, as well as an opportunity to work in groups of like-minded people to create an innovative technology project using open data over the duration of the week.',NULL,'2017-04-04','2017-11-04','HTML,CSS,JS,PHP'),(10,'Adaptive Media Assignment','I was tasked by my Professional Development tutor (as part of my CS Degree at MMU) to work as part of a team to create an experimental mobile platform for the British Broadcasting Corporation\'s Research and Development department.\r<br/>\r<br/>We were briefed to adapt the BBC R&D Department\'s existing rudimentary online platform into a mobile app based platform which allows the user to experience stories dynamically generated based on the device location, microphone audio levels, sensor readings, etc...\r<br/>\r<br/>My contribution to the project was to create modular functionality which monitors readings from any available luminousity and proximity sensors and formats this data into conversational sentences which can be substituted into the stories in real-time.\r<br/>\r<br/>This project taught me so much about development, modular integration and bug fixing for the extensive Android platform. It also taught me how to produce reliable code which can be reused and imported into any project for future applications.',NULL,'2017-04-04','2017-11-04','Java, Android'),(11,'Employee Information DB Assignment','I was tasked by my Java tutor (as part of my Computer Science Degree at MMU) to create a complex and fully featured employee information management system which would allow the user to view, edit and share employee information.\r<br/>\r<br/>This involved creating a centralised web server which stored the information in a database and made it available to a mobile Android app.\r<br/>\r<br/>This project vastly increased my knowledge of Java networking and server functionality, it also gave me the opportunity to further develop my capabilities in Android mobile app development from earlier app development projects. The resulting platform focused on high stability, reliablity and error-responsiveness by design.','https://github.com/martinshaw/EmployeeRecordSystem','2017-04-04','2017-11-04','Java,Android,HTML,CSS'),(12,'Rochdale Pioneers Trust File Sharing Site','During my second year at Hopwood Hall College, I was approached by the Rochdale Pioneers Trust (an organisation of the Rochdale Metropolitan Borough Council) whose mission statement is as follows: \'an co-operative venture set up to ensure that all young people across Rochdale Borough have access to high quality education\'.\r<br/>\r<br/>They commisioned me to build a bespoke, private and encrypted cloud file sharing service, for the purpose of allowing the borough\'s schools and colleges to co-operate on and share confidential files.\r<br/>\r<br/>This large and complex project required the implementation of advanced features, such as: file versioning, numerous file viewers (PDF, Word Document, HTML), fast and efficient search, and much more... A public-facing website was also required to communicate the Trust\'s activities to the public.\r<br/>\r<br/>In the short period of a few months using Laravel framework and PHP on a self-maintained Linux server, I single-handedly completed the project to the client\'s specification.','http://www.rochdalepioneerstrust.org/','2017-04-04','2017-11-04','PHP,MySql,HTML,CSS');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-11 13:11:52
