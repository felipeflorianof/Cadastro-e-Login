CREATE DATABASE  IF NOT EXISTS `projeto_recifacil` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `projeto_recifacil`;
-- MariaDB dump 10.19  Distrib 10.4.25-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: projeto_recifacil
-- ------------------------------------------------------
-- Server version	10.4.25-MariaDB

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
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `endereco` (
  `cep` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES ('0000','PE','igarassu','recife','planalto','aurora','12',''),('324243224','AM','naosei','naosei','naosei','jghjg','423',''),('5357098','PE','Abreu e Lima','fsfsd','gfdgdf','fdgdfg','43','fdsgffdgdgddfgdfg'),('65789045','PE','Abreu e Linma','recife','planalto','Aracati','501','frsgf'),('90696746453','AM','jorge henrique','gdfdsg','fjhgdjhgd','hgfdhgdf','501','');
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `cpf` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int(20) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `nascimento` date NOT NULL,
  `fk_endereco` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cpf`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_endereco` (`fk_endereco`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`fk_endereco`) REFERENCES `endereco` (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('164564576','testando','121311234','teste@gmail.com',213123123,'masculino','2022-10-09',NULL),('412324242','fhusdyufsdhyfsdgfydsgTESTE','babu','fgfh@gmail.com',2147483647,'outro','2022-10-12','324243224'),('4323333333','blablu','11111122222','bla@gmail.com',999999,'outro','2022-10-30',NULL),('89999111','patricia floriano de arrruda','4567','paty@gmail.com',888999,'feminino','2022-10-17','65789045'),('9595959595','userlobo','1234','lobo@gmail.com',756756,'outro','2022-10-06','0000');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-08 23:46:01
