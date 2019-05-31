CREATE DATABASE  IF NOT EXISTS `db_anatomia` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_anatomia`;
-- MySQL dump 10.13  Distrib 5.7.26, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_anatomia
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.31-MariaDB

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
-- Table structure for table `tbdaluno`
--

DROP TABLE IF EXISTS `tbdaluno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbdaluno` (
  `idAluno` int(11) NOT NULL AUTO_INCREMENT,
  `raAluno` int(11) NOT NULL,
  `nomeAluno` varchar(45) NOT NULL,
  `senhaAluno` varchar(32) NOT NULL,
  PRIMARY KEY (`idAluno`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbdaluno`
--

LOCK TABLES `tbdaluno` WRITE;
/*!40000 ALTER TABLE `tbdaluno` DISABLE KEYS */;
INSERT INTO `tbdaluno` VALUES (7,92951,'Igor Pegoraro Armelin','4a94b060138f5f4b86216db37126453e'),(8,95164,'Matheus Migliato','316e528a162c567de446f3cb5de3ad71'),(9,95281,'Gustavo Longo','6e11873b9d9d94a44058bef5747735ce');
/*!40000 ALTER TABLE `tbdaluno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbdcategoria`
--

DROP TABLE IF EXISTS `tbdcategoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbdcategoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `dscCategoria` varchar(45) NOT NULL,
  `idImagem` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`),
  KEY `fk_categoria_imagem` (`idImagem`),
  CONSTRAINT `fk_categoria_imagem` FOREIGN KEY (`idImagem`) REFERENCES `tbdimagem` (`idImagem`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbdcategoria`
--

LOCK TABLES `tbdcategoria` WRITE;
/*!40000 ALTER TABLE `tbdcategoria` DISABLE KEYS */;
INSERT INTO `tbdcategoria` VALUES (1,'Sistema Nervoso',NULL),(2,'Sistema Cardiovascular',NULL),(3,'Sistema Articular',NULL),(4,'Sistema EsquelÃ©tico',NULL),(5,'Coluna vertebral',NULL),(6,'Sistema urinÃ¡rio',NULL),(7,'Sistema RespiratÃ³rio',NULL);
/*!40000 ALTER TABLE `tbdcategoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbdimagem`
--

DROP TABLE IF EXISTS `tbdimagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbdimagem` (
  `idImagem` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` longblob NOT NULL,
  `idCategoria` int(11) NOT NULL,
  PRIMARY KEY (`idImagem`),
  KEY `fk_CatImg` (`idCategoria`),
  CONSTRAINT `fk_CatImg` FOREIGN KEY (`idCategoria`) REFERENCES `tbdcategoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbdimagem`
--

LOCK TABLES `tbdimagem` WRITE;
/*!40000 ALTER TABLE `tbdimagem` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbdimagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbdmarcacao`
--

DROP TABLE IF EXISTS `tbdmarcacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbdmarcacao` (
  `idMarcacao` int(11) NOT NULL AUTO_INCREMENT,
  `dscMarcacao` varchar(50) NOT NULL,
  `idImagem` int(11) NOT NULL,
  PRIMARY KEY (`idMarcacao`),
  KEY `fk_ImgMarc` (`idImagem`),
  CONSTRAINT `fk_ImgMarc` FOREIGN KEY (`idImagem`) REFERENCES `tbdimagem` (`idImagem`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbdmarcacao`
--

LOCK TABLES `tbdmarcacao` WRITE;
/*!40000 ALTER TABLE `tbdmarcacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbdmarcacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbdprofessor`
--

DROP TABLE IF EXISTS `tbdprofessor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbdprofessor` (
  `idProfessor` int(11) NOT NULL AUTO_INCREMENT,
  `dscProfessor` varchar(15) NOT NULL,
  `senhaProfessor` varchar(15) NOT NULL,
  PRIMARY KEY (`idProfessor`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbdprofessor`
--

LOCK TABLES `tbdprofessor` WRITE;
/*!40000 ALTER TABLE `tbdprofessor` DISABLE KEYS */;
INSERT INTO `tbdprofessor` VALUES (6,'admin','admin');
/*!40000 ALTER TABLE `tbdprofessor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbdquestionario`
--

DROP TABLE IF EXISTS `tbdquestionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbdquestionario` (
  `idQuest` int(11) NOT NULL AUTO_INCREMENT,
  `idImagem` int(11) NOT NULL,
  PRIMARY KEY (`idQuest`),
  KEY `fk_ImgQuest` (`idImagem`),
  CONSTRAINT `fk_ImgQuest` FOREIGN KEY (`idImagem`) REFERENCES `tbdimagem` (`idImagem`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbdquestionario`
--

LOCK TABLES `tbdquestionario` WRITE;
/*!40000 ALTER TABLE `tbdquestionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbdquestionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbdsubcategoria`
--

DROP TABLE IF EXISTS `tbdsubcategoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbdsubcategoria` (
  `idSubcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `dscSubcategoria` varchar(50) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  PRIMARY KEY (`idSubcategoria`),
  KEY `fk_CatSub` (`idCategoria`),
  CONSTRAINT `fk_CatSub` FOREIGN KEY (`idCategoria`) REFERENCES `tbdcategoria` (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbdsubcategoria`
--

LOCK TABLES `tbdsubcategoria` WRITE;
/*!40000 ALTER TABLE `tbdsubcategoria` DISABLE KEYS */;
INSERT INTO `tbdsubcategoria` VALUES (1,'PulmÃ£o',7),(2,'Bexiga',6),(3,'CÃ©rebro',1);
/*!40000 ALTER TABLE `tbdsubcategoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_anatomia'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-31 10:29:59
