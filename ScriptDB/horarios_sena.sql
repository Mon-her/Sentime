-- MariaDB dump 10.17  Distrib 10.4.6-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: horarios_sena
-- ------------------------------------------------------
-- Server version	10.4.6-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aula`
--

DROP TABLE IF EXISTS `aula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aula` (
  `id_aula` int(5) NOT NULL,
  `id_descripcion` int(11) NOT NULL,
  `sedeid_sede` int(4) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_aula`),
  KEY `fk_sede_aula` (`sedeid_sede`),
  KEY `fk_descripcion_aula_aula_idx` (`id_descripcion`),
  CONSTRAINT `fk_descripcion_aula_aula` FOREIGN KEY (`id_descripcion`) REFERENCES `descripcion_aula` (`id_descripcion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_sede_aula` FOREIGN KEY (`sedeid_sede`) REFERENCES `sede` (`id_sede`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aula`
--

LOCK TABLES `aula` WRITE;
/*!40000 ALTER TABLE `aula` DISABLE KEYS */;
INSERT INTO `aula` VALUES (48,1,1,0),(102,1,1,0),(302,8,1,0),(401,9,1,0),(507,8,1,0);
/*!40000 ALTER TABLE `aula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bloque`
--

DROP TABLE IF EXISTS `bloque`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bloque` (
  `dia` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `trimestre` tinyint(1) NOT NULL,
  `rango_horas` enum('06:00-07:40','08:00-09:40','10:00-11:40','12:00-13:40','14:20-16:00','16:20-18:00','18:15-19:45','20:00-21:40') COLLATE utf8_unicode_ci NOT NULL,
  `persona_documento` int(11) NOT NULL,
  `fichanumero_ficha` int(11) NOT NULL,
  `aulaid_aula` int(5) NOT NULL,
  `anio` year(4) NOT NULL,
  PRIMARY KEY (`dia`,`trimestre`,`rango_horas`,`aulaid_aula`,`anio`),
  KEY `fk_persona_bloque` (`persona_documento`),
  KEY `fk_ficha_bloque` (`fichanumero_ficha`),
  KEY `fk_aula_bloque` (`aulaid_aula`),
  CONSTRAINT `fk_aula_bloque` FOREIGN KEY (`aulaid_aula`) REFERENCES `aula` (`id_aula`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_ficha_bloque` FOREIGN KEY (`fichanumero_ficha`) REFERENCES `ficha` (`numero_ficha`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_persona_bloque` FOREIGN KEY (`persona_documento`) REFERENCES `persona` (`documento`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bloque`
--

LOCK TABLES `bloque` WRITE;
/*!40000 ALTER TABLE `bloque` DISABLE KEYS */;
INSERT INTO `bloque` VALUES ('Lunes',1,'06:00-07:40',1335,2000649,102,2020),('Martes',1,'10:00-11:40',1335,2000649,507,2020);
/*!40000 ALTER TABLE `bloque` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `centro`
--

DROP TABLE IF EXISTS `centro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `centro` (
  `id_centro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_centro` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_centro`),
  UNIQUE KEY `nombre_centro` (`nombre_centro`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `centro`
--

LOCK TABLES `centro` WRITE;
/*!40000 ALTER TABLE `centro` DISABLE KEYS */;
INSERT INTO `centro` VALUES (10,'CENIGRAF',0),(11,'Hoteleria',0),(18,'metrologia',0),(21,'SENA grande',0),(22,'Sena pequeño',0),(23,'casas blancas',0);
/*!40000 ALTER TABLE `centro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificacion`
--

DROP TABLE IF EXISTS `certificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `certificacion` (
  `id_certificacion` int(11) NOT NULL AUTO_INCREMENT,
  `denominacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_certificacion`),
  UNIQUE KEY `denominacion` (`denominacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificacion`
--

LOCK TABLES `certificacion` WRITE;
/*!40000 ALTER TABLE `certificacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `certificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificacion_persona`
--

DROP TABLE IF EXISTS `certificacion_persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `certificacion_persona` (
  `persona_documento` int(11) NOT NULL,
  `id_certificacion` int(11) NOT NULL,
  PRIMARY KEY (`persona_documento`,`id_certificacion`),
  KEY `fk_certificacion_certificacion_persona` (`id_certificacion`),
  KEY `fk_persona_certificacion` (`persona_documento`),
  CONSTRAINT `fk_certificacion_certificacion_persona` FOREIGN KEY (`id_certificacion`) REFERENCES `certificacion` (`id_certificacion`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_persona_certificacion` FOREIGN KEY (`persona_documento`) REFERENCES `persona` (`documento`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificacion_persona`
--

LOCK TABLES `certificacion_persona` WRITE;
/*!40000 ALTER TABLE `certificacion_persona` DISABLE KEYS */;
/*!40000 ALTER TABLE `certificacion_persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `competencia`
--

DROP TABLE IF EXISTS `competencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `competencia` (
  `id_competencia` int(11) NOT NULL AUTO_INCREMENT,
  `denominacion` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `duracion` int(11) NOT NULL,
  PRIMARY KEY (`id_competencia`),
  UNIQUE KEY `denominacion` (`denominacion`)
) ENGINE=InnoDB AUTO_INCREMENT=240201504 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `competencia`
--

LOCK TABLES `competencia` WRITE;
/*!40000 ALTER TABLE `competencia` DISABLE KEYS */;
INSERT INTO `competencia` VALUES (220501006,'ESPECIFICAR LOS REQUISITOS NECESARIOS PARA DESARROLLAR EL SISTEMA DE',120),(220501007,'CONSTRUIR EL SISTEMA QUE CUMPLA CON LOS REQUISITOS DE LA SOLUCIÓN',600),(220501009,'PARTICIPAR EN EL PROCESO DE NEGOCIACIÓN DE TECNOLOGÍA INFORMÁTICA PARA',140),(220501032,'ANALIZAR LOS REQUISITOS DEL CLIENTE PARA CONSTRUIR EL SISTEMA DE INFORMACION',400),(220501033,'DISEÑAR EL SISTEMA DE ACUERDO CON LOS REQUISITOS DEL CLIENTE',350),(220501034,'IMPLANTAR LA SOLUCIÓN QUE CUMPLA CON LOS REQUISITOS PARA SU OPERACIÓN.',360),(220501035,'APLICAR BUENAS PRÁCTICAS DE CALIDAD EN EL PROCESO DE DESARROLLO DE SOFTWARE,',200),(240201500,'PROMOVER LA INTERACCIÓN IDÓNEA CONSIGO MISMO, CON LOS DEMÁS Y CON LA',0),(240201501,'COMPRENDER TEXTOS EN INGLÉS EN FORMA ESCRITA Y AUDITIVA',180),(240201502,'PRODUCIR TEXTOS EN INGLÉS EN FORMA ESCRITA Y ORAL.',180),(240201503,'APLICAR EN LA RESOLUCIÓN DE PROBLEMAS REALES DEL SECTOR PRODUCTIVO',0);
/*!40000 ALTER TABLE `competencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descripcion_aula`
--

DROP TABLE IF EXISTS `descripcion_aula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `descripcion_aula` (
  `id_descripcion` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_descripcion`),
  UNIQUE KEY `descripcion` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descripcion_aula`
--

LOCK TABLES `descripcion_aula` WRITE;
/*!40000 ALTER TABLE `descripcion_aula` DISABLE KEYS */;
INSERT INTO `descripcion_aula` VALUES (1,'sala de computo, con 40 computadores, etc',0),(2,'salon empresarial 1',0),(3,'salon empresarial 2',0),(4,'salon empresarial 3',0),(7,'Salon mac',0),(8,'Aula de Taller ADSI',0),(9,'Transversal',0);
/*!40000 ALTER TABLE `descripcion_aula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `duracion`
--

DROP TABLE IF EXISTS `duracion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `duracion` (
  `id_duracion` int(11) NOT NULL AUTO_INCREMENT,
  `meses_lectiva` int(11) NOT NULL,
  `meses_productiva` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_duracion`),
  UNIQUE KEY `meses_lectiva` (`meses_lectiva`,`meses_productiva`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `duracion`
--

LOCK TABLES `duracion` WRITE;
/*!40000 ALTER TABLE `duracion` DISABLE KEYS */;
INSERT INTO `duracion` VALUES (13,6,6,0),(14,18,6,0),(16,6,0,0),(17,3,3,0),(19,0,0,0),(22,1,1,0);
/*!40000 ALTER TABLE `duracion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ficha`
--

DROP TABLE IF EXISTS `ficha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ficha` (
  `numero_ficha` int(11) NOT NULL,
  `ingreso` date NOT NULL,
  `salida` date NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`numero_ficha`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ficha`
--

LOCK TABLES `ficha` WRITE;
/*!40000 ALTER TABLE `ficha` DISABLE KEYS */;
INSERT INTO `ficha` VALUES (1818975,'2020-03-03','2020-04-16',0),(1828914,'2020-03-03','2020-03-17',0),(1828917,'2020-03-09','2020-03-17',0),(1828918,'2019-02-02','2021-01-21',0),(2000649,'2020-03-01','2021-01-21',0);
/*!40000 ALTER TABLE `ficha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instructor_ficha`
--

DROP TABLE IF EXISTS `instructor_ficha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instructor_ficha` (
  `fichanumero_ficha` int(11) NOT NULL,
  `persona_documento` int(11) NOT NULL,
  PRIMARY KEY (`fichanumero_ficha`,`persona_documento`),
  KEY `fk_ficha_instructorficha` (`fichanumero_ficha`),
  KEY `fk_persona_instructorficha` (`persona_documento`),
  CONSTRAINT `fk_ficha_instructorficha` FOREIGN KEY (`fichanumero_ficha`) REFERENCES `ficha` (`numero_ficha`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_persona_instructorficha` FOREIGN KEY (`persona_documento`) REFERENCES `persona` (`documento`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instructor_ficha`
--

LOCK TABLES `instructor_ficha` WRITE;
/*!40000 ALTER TABLE `instructor_ficha` DISABLE KEYS */;
INSERT INTO `instructor_ficha` VALUES (1818975,1335);
/*!40000 ALTER TABLE `instructor_ficha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nivel_formacion`
--

DROP TABLE IF EXISTS `nivel_formacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nivel_formacion` (
  `id_nivel` int(11) NOT NULL AUTO_INCREMENT,
  `denominacion_nivel` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_nivel`),
  UNIQUE KEY `denominacion` (`denominacion_nivel`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nivel_formacion`
--

LOCK TABLES `nivel_formacion` WRITE;
/*!40000 ALTER TABLE `nivel_formacion` DISABLE KEYS */;
INSERT INTO `nivel_formacion` VALUES (1,'tecnologo',0),(2,'tecnico',0),(5,'Especializacion',0),(7,'Auxiliar',0),(8,'Curso corto',0);
/*!40000 ALTER TABLE `nivel_formacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `documento` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rol_documento` int(11) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`documento`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_rol_persona` (`rol_documento`),
  CONSTRAINT `fk_rol_persona` FOREIGN KEY (`rol_documento`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (1,'Administrador','hernandez','admin1828917@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,NULL),(2,'John','Moreno','jhon@gmail.com','e10adc3949ba59abbe56e057f20f883e',2,NULL),(3,'Jhon','Moreno','jhonw@gmail.com','e10adc3949ba59abbe56e057f20f883e',3,NULL),(1335,'Juan','Valdez','juan@gmail.com','e10adc3949ba59abbe56e057f20f883e',3,NULL);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona_resultado`
--

DROP TABLE IF EXISTS `persona_resultado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona_resultado` (
  `documento_persona` int(11) NOT NULL,
  `id_resultado` int(11) NOT NULL,
  PRIMARY KEY (`documento_persona`,`id_resultado`),
  KEY `fk_resultado_persona_resultado_idx` (`id_resultado`),
  CONSTRAINT `fk_persona_persona_resultado` FOREIGN KEY (`documento_persona`) REFERENCES `persona` (`documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resultado_persona_resultado` FOREIGN KEY (`id_resultado`) REFERENCES `resultado` (`id_resultado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona_resultado`
--

LOCK TABLES `persona_resultado` WRITE;
/*!40000 ALTER TABLE `persona_resultado` DISABLE KEYS */;
INSERT INTO `persona_resultado` VALUES (3,9),(1335,1);
/*!40000 ALTER TABLE `persona_resultado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona_titulo`
--

DROP TABLE IF EXISTS `persona_titulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona_titulo` (
  `persona_documento` int(11) NOT NULL,
  `id_titulo` int(11) NOT NULL,
  PRIMARY KEY (`persona_documento`,`id_titulo`),
  KEY `fk_titulo_persona_titulo` (`id_titulo`),
  KEY `fk_persona_personatitulo` (`persona_documento`),
  CONSTRAINT `fk_persona_personatitulo` FOREIGN KEY (`persona_documento`) REFERENCES `persona` (`documento`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_titulo_persona_titulo` FOREIGN KEY (`id_titulo`) REFERENCES `titulo` (`id_titulo`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona_titulo`
--

LOCK TABLES `persona_titulo` WRITE;
/*!40000 ALTER TABLE `persona_titulo` DISABLE KEYS */;
INSERT INTO `persona_titulo` VALUES (1335,1);
/*!40000 ALTER TABLE `persona_titulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programa`
--

DROP TABLE IF EXISTS `programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa` (
  `id_programa` int(11) NOT NULL AUTO_INCREMENT,
  `denominacion` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `id_duracion` int(11) NOT NULL,
  `id_formacion` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_programa`),
  UNIQUE KEY `denominacion` (`denominacion`,`id_tipo`),
  UNIQUE KEY `denominacion_UNIQUE` (`denominacion`),
  KEY `fk_duracion_programa` (`id_duracion`),
  KEY `fk_nivel_formacion_programa` (`id_formacion`),
  KEY `fk_tipo_programa` (`id_tipo`),
  CONSTRAINT `fk_duracion_programa` FOREIGN KEY (`id_duracion`) REFERENCES `duracion` (`id_duracion`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_nivel_formacion_programa` FOREIGN KEY (`id_formacion`) REFERENCES `nivel_formacion` (`id_nivel`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_tipo_programa` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_tipo`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=228107 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa`
--

LOCK TABLES `programa` WRITE;
/*!40000 ALTER TABLE `programa` DISABLE KEYS */;
INSERT INTO `programa` VALUES (9,'Multimedia',13,2,3,0),(228106,'Analisis y desarrollo de sistemas de informacion',13,1,2,0);
/*!40000 ALTER TABLE `programa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programa_competencia`
--

DROP TABLE IF EXISTS `programa_competencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa_competencia` (
  `id_programa` int(11) NOT NULL,
  `id_competencia` int(11) NOT NULL,
  PRIMARY KEY (`id_programa`,`id_competencia`),
  KEY `fk_programa_programa_competencia` (`id_programa`),
  KEY `fk_competencia_programa_competencia` (`id_competencia`),
  CONSTRAINT `fk_programa_competencia` FOREIGN KEY (`id_competencia`) REFERENCES `competencia` (`id_competencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_programa_programa_competencia` FOREIGN KEY (`id_programa`) REFERENCES `programa` (`id_programa`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa_competencia`
--

LOCK TABLES `programa_competencia` WRITE;
/*!40000 ALTER TABLE `programa_competencia` DISABLE KEYS */;
INSERT INTO `programa_competencia` VALUES (228106,220501006),(228106,220501007),(228106,220501009),(228106,220501032),(228106,220501033),(228106,220501034),(228106,220501035),(228106,240201500),(228106,240201501),(228106,240201502),(228106,240201503);
/*!40000 ALTER TABLE `programa_competencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programa_ficha`
--

DROP TABLE IF EXISTS `programa_ficha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa_ficha` (
  `id_programa` int(11) NOT NULL,
  `fichanumero_ficha` int(11) NOT NULL,
  PRIMARY KEY (`id_programa`,`fichanumero_ficha`),
  KEY `fk_programa_programaficha` (`id_programa`),
  KEY `fk_ficha_programaficha` (`fichanumero_ficha`),
  CONSTRAINT `fk_ficha_programaficha` FOREIGN KEY (`fichanumero_ficha`) REFERENCES `ficha` (`numero_ficha`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_programa_programaficha` FOREIGN KEY (`id_programa`) REFERENCES `programa` (`id_programa`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa_ficha`
--

LOCK TABLES `programa_ficha` WRITE;
/*!40000 ALTER TABLE `programa_ficha` DISABLE KEYS */;
INSERT INTO `programa_ficha` VALUES (9,1828914),(9,1828918),(228106,1818975),(228106,1828917),(228106,2000649);
/*!40000 ALTER TABLE `programa_ficha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resultado`
--

DROP TABLE IF EXISTS `resultado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resultado` (
  `id_resultado` int(11) NOT NULL AUTO_INCREMENT,
  `denominacion_resultado` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `id_competencia` int(11) NOT NULL,
  PRIMARY KEY (`id_resultado`),
  UNIQUE KEY `denominacion` (`denominacion_resultado`),
  KEY `fk_competencia_resultado` (`id_competencia`),
  CONSTRAINT `Fk_resultado_competencia` FOREIGN KEY (`id_competencia`) REFERENCES `competencia` (`id_competencia`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resultado`
--

LOCK TABLES `resultado` WRITE;
/*!40000 ALTER TABLE `resultado` DISABLE KEYS */;
INSERT INTO `resultado` VALUES (1,'RECONOCER EL ROL DE LOS PARTICIPANTES EN EL PROCESO FORMATIVO, EL PAPEL DE LOS AMBIENTES DE',240201500),(2,'DESARROLLAR PROCESOS COMUNICATIVOS EFICACES Y ASERTIVOS DENTRO DE CRITERIOS DE',240201500),(3,'INTERACTUAR EN LOS CONTEXTOS PRODUCTIVOS Y SOCIALES EN FUNCIÓN DE LOS PRINCIPIOS Y VALORES',240201500),(4,'GENERAR HÁBITOS SALUDABLES EN SU ESTILO DE VIDA PARA GARANTIZAR LA PREVENCIÓN DE RIESGOS',240201500),(5,'DESARROLLAR PERMANENTEMENTE LAS HABILIDADES PSICOMOTRICES Y DE PENSAMIENTO EN LA',240201500),(6,'IDENTIFICAR LAS OPORTUNIDADES QUE EL SENA OFRECE EN EL MARCO DE LA FORMACIÓN PROFESIONAL',240201500),(7,'CONCERTAR ALTERNATIVAS Y ACCIONES DE FORMACIÓN PARA EL DESARROLLO DE LAS COMPETENCIAS DEL',240201500),(8,'ASUMIR LOS DEBERES Y DERECHOS CON BASE EN LAS LEYES Y LA NORMATIVA INSTITUCIONAL EN EL',240201500),(9,'APLICAR TÉCNICAS DE CULTURA FÍSICA PARA EL MEJORAMIENTO DE SU EXPRESIÓN CORPORAL,',240201500),(10,'GESTIONAR LA INFORMACIÓN DE ACUERDO CON LOS PROCEDIMIENTOS ESTABLECIDOS Y CON LAS',240201500),(11,'ASUMIR RESPONSABLEMENTE LOS CRITERIOS DE PRESERVACIÓN Y CONSERVACIÓN DEL MEDIO AMBIENTE Y',240201500),(12,'REDIMENSIONAR PERMANENTEMENTE SU PROYECTO DE VIDA DE ACUERDO CON LAS CIRCUNSTANCIAS DEL',240201500),(13,'GENERAR PROCESOS AUTÓNOMOS Y DE TRABAJO COLABORATIVO PERMANENTES, FORTALECIENDO EL',240201500),(14,'ASUMIR ACTITUDES CRÍTICAS , ARGUMENTATIVAS Y PROPOSITIVAS EN FUNCIÓN DE LA RESOLUCIÓN DE',240201500);
/*!40000 ALTER TABLE `resultado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (1,'Administrador'),(2,'Coordinador'),(3,'Instructor');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sede`
--

DROP TABLE IF EXISTS `sede`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sede` (
  `id_sede` int(4) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(130) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(130) COLLATE utf8_unicode_ci NOT NULL,
  `centroid_centro` int(11) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_sede`),
  UNIQUE KEY `nombre` (`nombre`),
  KEY `fk_centro_sede` (`centroid_centro`),
  CONSTRAINT `fk_centro_sede` FOREIGN KEY (`centroid_centro`) REFERENCES `centro` (`id_centro`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sede`
--

LOCK TABLES `sede` WRITE;
/*!40000 ALTER TABLE `sede` DISABLE KEYS */;
INSERT INTO `sede` VALUES (1,'cll 69 sur','UniHorizontes',23,0),(6,'call 136 A sur','Paloquemao',10,0),(7,'cll 69 a 136','paloeste',18,0),(10,'cll 69','porqueno',23,0);
/*!40000 ALTER TABLE `sede` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo`
--

DROP TABLE IF EXISTS `tipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_tipo`),
  UNIQUE KEY `tipo` (`tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo`
--

LOCK TABLES `tipo` WRITE;
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
INSERT INTO `tipo` VALUES (2,'presencial',0),(3,'virtual',0),(11,'semivirtual',0),(13,'Complementaria',0);
/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `titulo`
--

DROP TABLE IF EXISTS `titulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `titulo` (
  `id_titulo` int(11) NOT NULL AUTO_INCREMENT,
  `certificacion` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_titulo`),
  UNIQUE KEY `certificacion` (`certificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `titulo`
--

LOCK TABLES `titulo` WRITE;
/*!40000 ALTER TABLE `titulo` DISABLE KEYS */;
INSERT INTO `titulo` VALUES (2,'Cultura Física'),(1,'Ingeniero de sistemas');
/*!40000 ALTER TABLE `titulo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-10 15:51:17
