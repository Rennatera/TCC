-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 192.168.99.100    Database: sist_solidario
-- ------------------------------------------------------
-- Server version	5.7.18

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
-- Table structure for table `cad_doacao`
--

DROP TABLE IF EXISTS `cad_doacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cad_doacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voluntario_id` int(11) DEFAULT NULL,
  `instituicao_id` int(11) DEFAULT NULL,
  `valor` varchar(50) DEFAULT NULL,
  `data_doacao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cad_doacao`
--

LOCK TABLES `cad_doacao` WRITE;
/*!40000 ALTER TABLE `cad_doacao` DISABLE KEYS */;
INSERT INTO `cad_doacao` VALUES (1,1,1,'100,00','2017-05-28 12:05:37'),(2,1,1,'3.000,00','2017-05-28 12:05:01'),(3,1,1,'2.000,00','2017-05-28 17:05:51');
/*!40000 ALTER TABLE `cad_doacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cad_evento`
--

DROP TABLE IF EXISTS `cad_evento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cad_evento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `chamada` varchar(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  `data_cadastro` datetime DEFAULT CURRENT_TIMESTAMP,
  `ativo` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cad_evento`
--

LOCK TABLES `cad_evento` WRITE;
/*!40000 ALTER TABLE `cad_evento` DISABLE KEYS */;
/*!40000 ALTER TABLE `cad_evento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cad_instituicao`
--

DROP TABLE IF EXISTS `cad_instituicao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cad_instituicao` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `cnpj` varchar(60) NOT NULL COMMENT 'cpf',
  `telefone` varchar(60) NOT NULL COMMENT 'Numerotelefone',
  `rua` varchar(60) NOT NULL COMMENT 'Endereco:RUA',
  `numeroCasa` varchar(60) NOT NULL COMMENT 'numero residencial',
  `bairro` varchar(60) NOT NULL COMMENT 'endereco bairro',
  `cidade` varchar(60) NOT NULL COMMENT 'endereco:cidade',
  `cep` varchar(60) NOT NULL COMMENT 'cep',
  `estado` varchar(60) NOT NULL COMMENT 'Endereco:Estado',
  `ramotrab` varchar(60) NOT NULL COMMENT 'cep',
  `outros` varchar(60) NOT NULL,
  `data_fund` varchar(60) NOT NULL,
  `ativo` int(1) DEFAULT '1',
  `data_cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cad_instituicao`
--

LOCK TABLES `cad_instituicao` WRITE;
/*!40000 ALTER TABLE `cad_instituicao` DISABLE KEYS */;
INSERT INTO `cad_instituicao` VALUES (0000000001,'teste','teste@teste.com','$2y$10$BA4p2eINzacF7f/raz1KH.K6rJ0nzxH7U5Qj6e51NfKvN1IOQiVXS','11.111.111/1111 - 11','(11) 11111 - 1111','rua','01','bairro','cidade','11111 - 111','Acre','Asilo','outros','2017-05-26',1,'2017-05-24 22:05:33'),(0000000002,'APAE','apae@teste.com','$2y$10$JUqxms6GIuSWehnUfEIqAupedYFfwHKXf2DM53YK3VlfQ.l8QZrrm','1111111111111111111','(11) 11111 - 1111','rua','01','bairro','cidade','11111 - 111','Paraíba','casa de repouso','outros','2017-05-04',1,'2017-05-27 19:05:55');
/*!40000 ALTER TABLE `cad_instituicao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cad_notifica`
--

DROP TABLE IF EXISTS `cad_notifica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cad_notifica` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `nome_inst` varchar(20) NOT NULL COMMENT 'nome Instituição',
  `cnpj` char(45) NOT NULL COMMENT 'CNPJ',
  `ag` char(20) NOT NULL COMMENT 'AGencia',
  `cc` char(20) NOT NULL COMMENT 'Conta corrente',
  `rua` varchar(70) NOT NULL COMMENT 'end rua do local de rec',
  `bairro` varchar(60) NOT NULL COMMENT 'local de rec doaçoes',
  `notcidade` varchar(35) NOT NULL COMMENT 'local de rec doaçoes',
  `notcep` char(18) NOT NULL COMMENT 'local de rec doaçoes',
  `notestado` varchar(60) NOT NULL COMMENT 'local de rec doaçoes',
  `nottitulo` varchar(85) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Titulo notificaçao',
  `notdescricao` varchar(350) NOT NULL COMMENT 'descrição notificação',
  `notfone` varchar(20) NOT NULL COMMENT 'fone de rec doaçoes',
  `notcel` varchar(35) NOT NULL COMMENT 'cell de rec doaçoes',
  `notemail` varchar(50) NOT NULL COMMENT 'email de rec doaçoes',
  `banco` varchar(45) CHARACTER SET utf8mb4 NOT NULL COMMENT 'banco',
  `numero` int(10) NOT NULL COMMENT 'numero residencia',
  `img_arq` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Notificaoes urgentes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cad_notifica`
--

LOCK TABLES `cad_notifica` WRITE;
/*!40000 ALTER TABLE `cad_notifica` DISABLE KEYS */;
/*!40000 ALTER TABLE `cad_notifica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cad_voluntario`
--

DROP TABLE IF EXISTS `cad_voluntario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cad_voluntario` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `rg` char(18) NOT NULL,
  `cpf` char(18) NOT NULL COMMENT 'cpf',
  `telefone` varchar(25) NOT NULL COMMENT 'Numerotelefone',
  `sexo` varchar(20) NOT NULL,
  `data_nasc` varchar(70) NOT NULL,
  `rua` varchar(70) NOT NULL COMMENT 'Endereco:RUA',
  `numeroCasa` int(20) NOT NULL COMMENT 'numero residencial',
  `bairro` varchar(60) NOT NULL COMMENT 'endereco bairro',
  `complemento` varchar(60) NOT NULL COMMENT 'Endereco:Complemento',
  `estado` varchar(60) CHARACTER SET latin1 NOT NULL COMMENT 'Endereco:Estado',
  `cidade` varchar(60) NOT NULL COMMENT 'endereco:cidade',
  `cep` varchar(18) NOT NULL COMMENT 'cep',
  `data_cadastro` datetime DEFAULT NULL,
  `ativo` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cad_voluntario`
--

LOCK TABLES `cad_voluntario` WRITE;
/*!40000 ALTER TABLE `cad_voluntario` DISABLE KEYS */;
INSERT INTO `cad_voluntario` VALUES (0000000001,'nome','sobrenome','email@emai.com','$2y$10$jJtTqbW17vP6JujDsdXmf.kLFe2CsQ3JULp/RjE5BuZI.8WSkn9ee','11.111.111 - 1','111.111.111 - 11','(11) 11111 - 1111','Masculino','11/11/1111','rua',1,'bairro','complemento','Acre','cidade','11111 - 111','2017-05-01 15:05:27',0),(0000000002,'fffffffff','fffffffffff','fffffffffff@gmail.com','$2y$10$BlHBf3Mc/w7XE0E4Mh/p1ubR6EqPZ92kn/0NBRy1VVOknXN2i/YoW','33.333.333 - 3','111.111.111 - 11','(11) 11111 - 1111','Masculino','11/11/1111','fffffffffffff',1111,'fffffffffffff','','Acre','ffffffffffffffff','11111 - 111','2017-05-11 23:05:31',0),(0000000003,'oxfor','osford','ox@gmail.com','$2y$10$VR5/CYpHB0EOfwKVYzHxiu/caG2CEFlYErHGxO5SsnwbS1wopkT0W','31.231.231 - 2','123.123.123 - 12','(12) 31231 - 2312','Masculino','12/31/2012','testesteste',3123,'brocolis','','Acre','anubi','12312 - 312','2017-05-15 23:05:28',0);
/*!40000 ALTER TABLE `cad_voluntario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-28 18:24:35
