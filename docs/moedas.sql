-- MySQL dump 10.11
--
-- Host: localhost    Database: moedas
-- ------------------------------------------------------
-- Server version	5.0.51a-24+lenny4

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
-- Table structure for table `pagar`
--

DROP TABLE IF EXISTS `pagar`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `pagar` (
  `id` int(11) NOT NULL auto_increment,
  `liquidado` tinyint(1) NOT NULL,
  `descricao` text,
  `valor` double NOT NULL,
  `multa` double default NULL,
  `desconto` float default NULL,
  `vencimento` date NOT NULL,
  `pagamento` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `pagar`
--

LOCK TABLES `pagar` WRITE;
/*!40000 ALTER TABLE `pagar` DISABLE KEYS */;
INSERT INTO `pagar` VALUES (1,1,'Conta a pagar, teste - Atualizada!',80,0,0,'2010-05-25',NULL),(2,1,'Outra conta',100.5,NULL,NULL,'2010-05-30',NULL),(3,1,'Inclusão de conta à pagar',100,0,0,'2010-06-06',NULL),(4,1,'',0,0,0,'0000-00-00',NULL),(5,1,'',0,0,0,'0000-00-00',NULL),(6,1,'ds',0,0,0,'0000-00-00',NULL),(7,1,'d',0,0,0,'0000-00-00',NULL),(8,1,'s',0,0,0,'0000-00-00',NULL),(9,1,'d',0,0,0,'0000-00-00',NULL),(10,1,'Teste',0.5,0,0,'2010-07-22','2010-08-03'),(11,1,'Mais um teste de conta',100,5.25,0,'2010-07-22','2010-08-03'),(12,0,'Mais um',300,0,0,'2010-07-21',NULL),(13,1,'IPVA 2010',500,0,0,'2010-07-21',NULL),(14,0,'Teste para amanhã',500,0,0,'2010-08-04',NULL),(15,0,'Teste com valor quebrado',120,0,0,'2010-08-03',NULL),(16,1,'Teste com valor quebrado',150.5,0,0,'2010-08-03','2010-08-03');
/*!40000 ALTER TABLE `pagar` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-08-03 19:46:34
