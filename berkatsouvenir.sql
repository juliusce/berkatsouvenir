-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: berkatsouvenir
-- ------------------------------------------------------
-- Server version	5.7.10-log

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
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `judul_article` varchar(150) NOT NULL,
  `description` text,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `date_created` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'Article 1','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula accumsan nulla, sit amet rutrum risus pretium vel. Nullam eleifend arcu sollicitudin bibendum imperdiet. Vestibulum id gravida metus. Suspendisse faucibus rhoncus nunc, at cursus ex feugiat at. Suspendisse potenti. Pellentesque placerat ut arcu quis semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus libero nec dolor pretium, non molestie lorem dignissim. Etiam egestas arcu ut rutrum posuere.</p><p>Pellentesque sed sapien ornare quam euismod sollicitudin. Donec hendrerit quam in tellus euismod, ut gravida purus suscipit. Etiam sed metus at quam vehicula sodales at et augue. Suspendisse iaculis, lorem sed rutrum consectetur, enim elit convallis libero, sit amet semper nisi est eget magna. Suspendisse eget orci ac arcu porttitor maximus vel sed augue. Nullam vitae malesuada orci. Maecenas non convallis ligula. Vestibulum condimentum facilisis nisl ac ornare. Morbi dictum sodales neque in tincidunt. Praesent ut blandit dolor. Praesent in turpis eget ligula cursus congue. Curabitur tincidunt interdum hendrerit. Curabitur enim turpis, egestas at congue eu, eleifend eget dui. Aenean arcu justo, volutpat vel sapien eget, cursus ullamcorper nulla.</p>',0,'2016-02-16');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `nama_category` varchar(100) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Gelas',1),(2,'Gantungan Kunci',0),(3,'Piring',0),(4,'Payung',0),(5,'Mug',0);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('3981899f05c574a2c70c9d13c8bc57cf1e00f886','::1',1455618889,'__ci_last_regenerate|i:1455618640;user_data|a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nama\";s:14:\"Julius Cesario\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:24:\"lixus.julius17@gmail.com\";s:7:\"no_telp\";s:12:\"081288540387\";}breadcrumb|s:17:\"manajemen_product\";main_sub_breadcrumb|s:14:\"tambah_product\";'),('76a87e6913cc1fb53172e80a0aab5ca2e4baf658','::1',1455619073,'__ci_last_regenerate|i:1455619045;user_data|a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nama\";s:14:\"Julius Cesario\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:24:\"lixus.julius17@gmail.com\";s:7:\"no_telp\";s:12:\"081288540387\";}breadcrumb|s:17:\"manajemen_product\";main_sub_breadcrumb|s:14:\"tambah_product\";'),('7ab3cbcdebf8747baba3dcebfdae4e841758647f','::1',1455629793,'__ci_last_regenerate|i:1455629516;user_data|a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nama\";s:14:\"Julius Cesario\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:24:\"lixus.julius17@gmail.com\";s:7:\"no_telp\";s:12:\"081288540387\";}breadcrumb|s:17:\"manajemen_product\";main_sub_breadcrumb|s:16:\"perbarui_product\";'),('a174d9d1816fb75732501c156a654cae3ead7cb4','::1',1455629959,'__ci_last_regenerate|i:1455629900;user_data|a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nama\";s:14:\"Julius Cesario\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:24:\"lixus.julius17@gmail.com\";s:7:\"no_telp\";s:12:\"081288540387\";}breadcrumb|s:7:\"article\";main_sub_breadcrumb|s:14:\"daftar_article\";'),('8aefa0b803cb6d223eed5039db19bda9b60e6e59','::1',1455630785,'__ci_last_regenerate|i:1455630557;user_data|a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nama\";s:14:\"Julius Cesario\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:24:\"lixus.julius17@gmail.com\";s:7:\"no_telp\";s:12:\"081288540387\";}breadcrumb|s:7:\"article\";main_sub_breadcrumb|s:14:\"tambah_article\";'),('45d9299124c52813a24a4b82a5e32331c0b44da2','::1',1455631178,'__ci_last_regenerate|i:1455630911;user_data|a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nama\";s:14:\"Julius Cesario\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:24:\"lixus.julius17@gmail.com\";s:7:\"no_telp\";s:12:\"081288540387\";}breadcrumb|s:7:\"article\";main_sub_breadcrumb|s:14:\"daftar_article\";'),('576fc19de6373255d0ee0890910614e9b541e5e1','::1',1455631553,'__ci_last_regenerate|i:1455631256;user_data|a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nama\";s:14:\"Julius Cesario\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:24:\"lixus.julius17@gmail.com\";s:7:\"no_telp\";s:12:\"081288540387\";}breadcrumb|s:11:\"testimonial\";main_sub_breadcrumb|s:18:\"daftar_testimonial\";'),('4a42ab603fa1d29e02de94e56f6b3f0494cddd88','::1',1455631871,'__ci_last_regenerate|i:1455631633;user_data|a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nama\";s:14:\"Julius Cesario\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:24:\"lixus.julius17@gmail.com\";s:7:\"no_telp\";s:12:\"081288540387\";}breadcrumb|s:11:\"testimonial\";main_sub_breadcrumb|s:18:\"daftar_testimonial\";'),('ec01758134577da7c41b8c99f7f68ffb865d4533','::1',1455632279,'__ci_last_regenerate|i:1455632072;user_data|a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nama\";s:14:\"Julius Cesario\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:24:\"lixus.julius17@gmail.com\";s:7:\"no_telp\";s:12:\"081288540387\";}breadcrumb|s:11:\"testimonial\";main_sub_breadcrumb|s:18:\"daftar_testimonial\";'),('afb466b456f8598e529c76fae7cfdb1ce7ab9c51','::1',1455632443,'__ci_last_regenerate|i:1455632408;user_data|a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nama\";s:14:\"Julius Cesario\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:24:\"lixus.julius17@gmail.com\";s:7:\"no_telp\";s:12:\"081288540387\";}breadcrumb|s:11:\"testimonial\";main_sub_breadcrumb|s:18:\"daftar_testimonial\";'),('f2a43fedfe91e9072ce23a8bfadad5856f197863','::1',1455779935,'__ci_last_regenerate|i:1455779935;'),('d081962f160257c05e0ecb1c500a0bb7698241a3','::1',1455787995,'__ci_last_regenerate|i:1455787749;user_data|a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nama\";s:14:\"Julius Cesario\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:24:\"lixus.julius17@gmail.com\";s:7:\"no_telp\";s:12:\"081288540387\";}breadcrumb|s:17:\"manajemen_product\";main_sub_breadcrumb|s:16:\"perbarui_product\";'),('0f85475b430331019364410dd560cb7d67457b5d','::1',1455788147,'__ci_last_regenerate|i:1455788144;user_data|a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nama\";s:14:\"Julius Cesario\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:24:\"lixus.julius17@gmail.com\";s:7:\"no_telp\";s:12:\"081288540387\";}breadcrumb|s:17:\"manajemen_product\";main_sub_breadcrumb|s:16:\"perbarui_product\";'),('dde4dba2c654b9c1c9b461aa102d4a015a25d012','::1',1455792499,'__ci_last_regenerate|i:1455792224;user_data|a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nama\";s:14:\"Julius Cesario\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:24:\"lixus.julius17@gmail.com\";s:7:\"no_telp\";s:12:\"081288540387\";}breadcrumb|s:17:\"manajemen_product\";main_sub_breadcrumb|s:16:\"perbarui_product\";'),('f1cb05f23fbc3336ef764bcfc0a029d50ebd6c83','::1',1455802261,'__ci_last_regenerate|i:1455801986;'),('35638bc148538b748fa6e1f49c043fc72aadf753','::1',1455802417,'__ci_last_regenerate|i:1455802417;'),('e58919a3c6540ea79a7dcdc238e3d88c4f0f9005','::1',1455802953,'__ci_last_regenerate|i:1455802952;'),('2de85e9b6321fa620f0a506d07ce304e5f93b9a1','::1',1455803238,'__ci_last_regenerate|i:1455802954;'),('30f8909aba2caa6aede96644f0efa331b89c8575','::1',1455803569,'__ci_last_regenerate|i:1455803382;'),('6164e5dcdc9dd6a98ace2fb5e1161c50adbfc6f9','::1',1455804039,'__ci_last_regenerate|i:1455803762;user_data|a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nama\";s:14:\"Julius Cesario\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:24:\"lixus.julius17@gmail.com\";s:7:\"no_telp\";s:12:\"081288540387\";}breadcrumb|s:8:\"category\";main_sub_breadcrumb|s:15:\"daftar_category\";'),('e50ab82e46ab8634fbbe2c37e9a66afbb656b1c8','::1',1455804243,'__ci_last_regenerate|i:1455804071;user_data|a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nama\";s:14:\"Julius Cesario\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"21232f297a57a5a743894a0e4a801fc3\";s:5:\"email\";s:24:\"lixus.julius17@gmail.com\";s:7:\"no_telp\";s:12:\"081288540387\";}breadcrumb|s:8:\"category\";main_sub_breadcrumb|s:15:\"daftar_category\";'),('ac2aeaad7dccce5654613f2160341962d176d458','::1',1455865844,'__ci_last_regenerate|i:1455865844;'),('5a9f6a4a1d1b3ae2dc9e83905a0afd3f8d8e9610','::1',1455865844,'__ci_last_regenerate|i:1455865844;'),('d1db1293ed177b194eb6a29f1d7c1a3a313c95a6','::1',1455869585,'__ci_last_regenerate|i:1455869585;'),('f6b6cad63d896f3a083d6bb384655f2c01d2930c','::1',1456059728,'__ci_last_regenerate|i:1456059588;'),('1afc21c8f0d3e2de066329e1b11697de4392100e','::1',1456060032,'__ci_last_regenerate|i:1456059985;'),('10f594cc65d081e4c93745be09e038eafe3cca1b','::1',1456061474,'__ci_last_regenerate|i:1456061219;'),('bba8687326bf97db14e7e0931d36c98ad5e52820','::1',1456061823,'__ci_last_regenerate|i:1456061573;'),('02b28f0e85976110622669d72bcce39e34022372','::1',1456062172,'__ci_last_regenerate|i:1456061906;'),('22669c951583a0c6d4e389c7516217e6151b8afc','::1',1456062452,'__ci_last_regenerate|i:1456062213;'),('490714306b09867615243b80f5ce1a1368e65486','::1',1456063048,'__ci_last_regenerate|i:1456062753;'),('e2cd9c5f3cc388b3269aa85e1efa59a78fa90fd2','::1',1456063325,'__ci_last_regenerate|i:1456063075;'),('a001789e4ee03729c44413b32bd96e94346be0c3','::1',1456063674,'__ci_last_regenerate|i:1456063460;'),('5423511fcf5efe3b50ed12ab84343eb6bfdff108','::1',1456126974,'__ci_last_regenerate|i:1456126697;');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `nama_product` varchar(150) NOT NULL,
  `nama_category` varchar(150) NOT NULL,
  `product_image` text,
  `product_image2` text,
  `description` text,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `promo` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Gelas A1','Gelas','includes/assets/gelas_a1.jpg','includes/assets/gelas_a1image2.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula accumsan nulla, sit amet rutrum risus pretium vel. Nullam eleifend arcu sollicitudin bibendum imperdiet. Vestibulum id gravida metus. Suspendisse faucibus rhoncus nunc, at cursus ex feugiat at. Suspendisse potenti. Pellentesque placerat ut arcu quis semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus libero nec dolor pretium, non molestie lorem dignissim. Etiam egestas arcu ut rutrum posuere.</p>',0,1),(2,'Gelas a9','Gelas','includes/assets/gelas_a9.jpg','includes/assets/gelas_a9image2.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse commodo semper maximus. Nulla vestibulum nisl a luctus rutrum. Sed et fermentum est. Nam pellentesque consectetur turp Sed sodales eget lacus at faucibus. Fusce quis porttitor metus.</p><ol><li>ASD</li><li>Ini Coba</li></ol><p>Aliquam at mi lacus. Nulla luctus nisi consequat nisi dictum, vel lacinia velit volutpat. Cras pulvinar nibh eget libero laoreet cursus. Donec rutrum sed nisl at mattis. Etiam tincidunt odio eu ante bibendum tempus.<strong> Duis molestie est ac urna tincidunt, in luctus nunc tristique. Proin dui justo, finibus sed augue ac, congue tempor nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer ut fermentum orci.</strong></p>',0,1);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seo`
--

DROP TABLE IF EXISTS `seo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seo` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `seo_title` varchar(150) NOT NULL,
  `seo_keywords` varchar(150) NOT NULL,
  `seo_description` varchar(150) NOT NULL,
  `seo_author` varchar(150) NOT NULL,
  `seo_page` tinyint(4) NOT NULL,
  `id_seo_page` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seo`
--

LOCK TABLES `seo` WRITE;
/*!40000 ALTER TABLE `seo` DISABLE KEYS */;
INSERT INTO `seo` VALUES (1,'Gelas A1','Gelas, Berkat','Gelas A1','Julius',1,1),(2,'','','','',2,1),(3,'','','','',3,1),(4,'','','','',3,2),(5,'Gelas a9','Gelas, Berkat, Murah, Pernikahan','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse commodo semper maximus. Nulla vestibulum nisl a luctus rutrum. Sed et fermentum e','Vina',1,2);
/*!40000 ALTER TABLE `seo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonial` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `judul_testimonial` varchar(150) NOT NULL,
  `testimonial_image` text,
  `description` text,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `date_created` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonial`
--

LOCK TABLES `testimonial` WRITE;
/*!40000 ALTER TABLE `testimonial` DISABLE KEYS */;
INSERT INTO `testimonial` VALUES (1,'Testi Wedding a & B','includes/assets/testimonial/testi_wedding_a__b.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula accumsan nulla, sit amet rutrum risus pretium vel. Nullam eleifend arcu sollicitudin bibendum imperdiet. Vestibulum id gravida metus. Suspendisse faucibus rhoncus nunc, at cursus ex feugiat at. Suspendisse potenti. Pellentesque placerat ut arcu quis semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus libero nec dolor pretium, non molestie lorem dignissim. Etiam egestas arcu ut rutrum posuere.</p><p>Pellentesque sed sapien ornare quam euismod sollicitudin. Donec hendrerit quam in tellus euismod, ut gravida purus suscipit. Etiam sed metus at quam vehicula sodales at et augue. Suspendisse iaculis, lorem sed rutrum consectetur, enim elit convallis libero, sit amet semper nisi est eget magna. Suspendisse eget orci ac arcu porttitor maximus vel sed augue. Nullam vitae malesuada orci. Maecenas non convallis ligula. Vestibulum condimentum facilisis nisl ac ornare. Morbi dictum sodales neque in tincidunt. Praesent ut blandit dolor. Praesent in turpis eget ligula cursus congue. <strong>Curabitur tincidunt interdum hendrerit.</strong> Curabitur enim turpis, egestas at congue eu, eleifend eget dui. Aenean arcu justo, volutpat vel sapien eget, cursus ullamcorper nulla.</p>',0,'2016-02-16'),(2,'Testi Wedding C & D','includes/assets/testimonial/testi_wedding_c__d.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula accumsan nulla, sit amet rutrum risus pretium vel. Nullam eleifend arcu sollicitudin bibendum imperdiet. Vestibulum id gravida metus. Suspendisse faucibus rhoncus nunc, at cursus ex feugiat at. Suspendisse potenti. Pellentesque placerat ut arcu quis semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus libero nec dolor pretium, non molestie lorem dignissim. Etiam egestas arcu ut rutrum posuere.</p><p>Pellentesque sed sapien ornare quam euismod sollicitudin. Donec hendrerit quam in tellus euismod, ut gravida purus suscipit. Etiam sed metus at quam vehicula sodales at et augue. Suspendisse iaculis, lorem sed rutrum consectetur, enim elit convallis libero, sit amet semper nisi est eget magna. Suspendisse eget orci ac arcu porttitor maximus vel sed augue. Nullam vitae malesuada orci. Maecenas non convallis ligula. Vestibulum condimentum facilisis nisl ac ornare. Morbi dictum sodales neque in tincidunt. Praesent ut blandit dolor. Praesent in turpis eget ligula cursus congue. Curabitur tincidunt interdum hendrerit. Curabitur enim turpis, egestas at congue eu, eleifend eget dui. Aenean arcu justo, volutpat vel sapien eget, cursus ullamcorper nulla.</p>',0,'2016-02-16');
/*!40000 ALTER TABLE `testimonial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Julius Cesario','admin','21232f297a57a5a743894a0e4a801fc3','lixus.julius17@gmail.com','081288540387');
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

-- Dump completed on 2016-02-23 12:44:49
