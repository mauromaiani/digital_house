-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: congreso
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.10.1

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
-- Table structure for table `Participantes`
--

DROP TABLE IF EXISTS `Participantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Participantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` int(8) DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genero` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pais_id` int(11) DEFAULT NULL,
  `nivel_academico_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_Participantes_paises_id_idx` (`pais_id`),
  KEY `fk_Participantes_nivel_academico_id_idx` (`nivel_academico_id`),
  CONSTRAINT `fk_Participantes_niveles_academicos_id` FOREIGN KEY (`nivel_academico_id`) REFERENCES `niveles_academicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Participantes_paises_id` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Participantes`
--

LOCK TABLES `Participantes` WRITE;
/*!40000 ALTER TABLE `Participantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `Participantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conferencias`
--

DROP TABLE IF EXISTS `conferencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conferencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ponente_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_conferencias_ponentes_idx` (`ponente_id`),
  CONSTRAINT `fk_conferencias_ponentes_id` FOREIGN KEY (`ponente_id`) REFERENCES `ponente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conferencias`
--

LOCK TABLES `conferencias` WRITE;
/*!40000 ALTER TABLE `conferencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `conferencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `niveles_academicos`
--

DROP TABLE IF EXISTS `niveles_academicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `niveles_academicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `niveles_academicos`
--

LOCK TABLES `niveles_academicos` WRITE;
/*!40000 ALTER TABLE `niveles_academicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `niveles_academicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paises`
--

DROP TABLE IF EXISTS `paises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paises`
--

LOCK TABLES `paises` WRITE;
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participantes_conferencias`
--

DROP TABLE IF EXISTS `participantes_conferencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participantes_conferencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `participante_id` int(11) DEFAULT NULL,
  `conferencia_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_participantes_conferencias_participantes_id_idx` (`participante_id`),
  KEY `fk_participantes_conferencias_coferencias_id_idx` (`conferencia_id`),
  CONSTRAINT `fk_participantes_conferencias_coferencias_id` FOREIGN KEY (`conferencia_id`) REFERENCES `conferencias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_participantes_conferencias_participantes_id` FOREIGN KEY (`participante_id`) REFERENCES `Participantes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participantes_conferencias`
--

LOCK TABLES `participantes_conferencias` WRITE;
/*!40000 ALTER TABLE `participantes_conferencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `participantes_conferencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ponente`
--

DROP TABLE IF EXISTS `ponente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ponente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ponente`
--

LOCK TABLES `ponente` WRITE;
/*!40000 ALTER TABLE `ponente` DISABLE KEYS */;
/*!40000 ALTER TABLE `ponente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-15 16:53:13
