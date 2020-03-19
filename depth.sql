# Host: localhost  (Version 5.5.5-10.4.11-MariaDB)
# Date: 2020-03-09 22:33:08
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'admindepth','12a055bf01a31369fe81ac35d85c7bc1');

#
# Structure for table "banner"
#

DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "banner"
#

INSERT INTO `banner` VALUES (1,'52d7264fdb1b92108f8af68ea4e2f3b3.jpg'),(2,'b962aa8a194473305a839cc40e8fd0bf.jpg'),(3,'d773b98efcedbcbd1951b56be52e4f4f.jpg');

#
# Structure for table "conteudos"
#

DROP TABLE IF EXISTS `conteudos`;
CREATE TABLE `conteudos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto_conteudo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "conteudos"
#

INSERT INTO `conteudos` VALUES (1,'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum consectetur nam rerum praesentium dignissimos dolore sequi cum harum ut voluptate, eius aut similique eum illo omnis veniam consequuntur est ex!','447617e13da9f67046da1a35d80d0988.jpg'),(2,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, neque facilis libero asperiores ea voluptate quos fugit nisi minus impedit nemo itaque, veniam, ad alias beatae? Assumenda cumque deserunt commodi.','4ced95bd1b94b5339e234232744ed4de.jpg'),(3,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, neque facilis libero asperiores ea voluptate quos fugit nisi minus impedit nemo itaque, veniam, ad alias beatae? Assumenda cumque deserunt commodi.','2e5e719b575137bd347ea0694f4d0236.jpg');

#
# Structure for table "texto_banner"
#

DROP TABLE IF EXISTS `texto_banner`;
CREATE TABLE `texto_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "texto_banner"
#

INSERT INTO `texto_banner` VALUES (1,'Acima de tudo, porém, revistam-se do amor, que é o elo perfeito.\r\nColossenses 3:14');
