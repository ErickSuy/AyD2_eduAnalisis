-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: ayd2_eduanalisis
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `MAESTRO`
--

DROP TABLE IF EXISTS `MAESTRO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MAESTRO` (
  `id_MAESTRO` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre1` varchar(45) NOT NULL,
  `Nombre2` varchar(45) DEFAULT NULL,
  `Nombre3` varchar(45) DEFAULT NULL,
  `Apellido1` varchar(45) NOT NULL,
  `Apellido2` varchar(45) DEFAULT NULL,
  `Ciudad` varchar(45) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Telefono1` varchar(8) NOT NULL,
  `Telefono2` varchar(8) DEFAULT NULL COMMENT '	',
  `Salario` double NOT NULL,
  `DPI` varchar(20) NOT NULL,
  `Estado` int(11) NOT NULL COMMENT 'Tabla que contiene a los maestros ingresados en el sistema\nPara eliminar solo se modifica el campo estado de 1 a 0',
  PRIMARY KEY (`id_MAESTRO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MAESTRO`
--

LOCK TABLES `MAESTRO` WRITE;
/*!40000 ALTER TABLE `MAESTRO` DISABLE KEYS */;
INSERT INTO `MAESTRO` VALUES (1,'Daniel','Alexander','','Cos','Pirir','Guatemala','11 Av. 10-71','51321356','',1205.5,'2165684321',1);
/*!40000 ALTER TABLE `MAESTRO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(60) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (1,'Maestro','Imparte clases jornada matutina y vespertina');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Telefono` int(8) NOT NULL,
  `Direccion` varchar(60) NOT NULL,
  `Contrasena` varchar(200) NOT NULL,
  `Rol` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Rol` (`Rol`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Rol`) REFERENCES `rol` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Erick Brayan','suy',12345678,'Usac 123','68053af2923e00204c3ca7c6a3150cf7',1),(3,'Daniel','dani',12345678,'11 av','4d186321c1a7f0f354b297e8914ab240',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-08  1:30:55
