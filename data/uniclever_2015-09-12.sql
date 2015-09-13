# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.24)
# Database: uniclever
# Generation Time: 2015-09-12 19:22:16 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table box
# ------------------------------------------------------------

DROP TABLE IF EXISTS `box`;

CREATE TABLE `box` (
  `box_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL,
  `delivery_cycle_w` int(11) NOT NULL,
  PRIMARY KEY (`box_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table box_item
# ------------------------------------------------------------

DROP TABLE IF EXISTS `box_item`;

CREATE TABLE `box_item` (
  `box_item_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `box_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `replacement_cycle_w` int(11) DEFAULT NULL,
  `consumption_w` int(11) DEFAULT NULL,
  PRIMARY KEY (`box_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table customer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `cust_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table order
# ------------------------------------------------------------

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `order_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `cust_id` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table order_item
# ------------------------------------------------------------

DROP TABLE IF EXISTS `order_item`;

CREATE TABLE `order_item` (
  `order_item_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `unit_price` decimal(10,2) DEFAULT NULL,
  `discount_price` decimal(10,2) DEFAULT NULL,
  `line_total` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table product
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `product_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `prod_name_short` varchar(10) NOT NULL DEFAULT '',
  `prod_name_long` varchar(25) NOT NULL DEFAULT '',
  `department` int(11) DEFAULT NULL,
  `category1` varchar(20) DEFAULT NULL,
  `category2` varchar(20) DEFAULT NULL,
  `pack_size` varchar(1) DEFAULT NULL,
  `barcode` varchar(20) DEFAULT NULL,
  `qr_code` int(11) DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table template_box
# ------------------------------------------------------------

DROP TABLE IF EXISTS `template_box`;

CREATE TABLE `template_box` (
  `template_box_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `template_box_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`template_box_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table template_box_item
# ------------------------------------------------------------

DROP TABLE IF EXISTS `template_box_item`;

CREATE TABLE `template_box_item` (
  `template_box_item_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `template_box_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`template_box_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
