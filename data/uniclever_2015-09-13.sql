# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.24)
# Database: uniclever
# Generation Time: 2015-09-12 23:27:35 +0000
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

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;

INSERT INTO `customer` (`cust_id`, `cust_name`)
VALUES
	(1,'Matt Family');

/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table order
# ------------------------------------------------------------

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `order_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `cust_id` int(11) NOT NULL,
  `delivery_date` date DEFAULT NULL,
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
  `prod_name_short` varchar(20) NOT NULL DEFAULT '',
  `prod_name_long` varchar(45) NOT NULL DEFAULT '',
  `department` varchar(20) DEFAULT NULL,
  `category1` varchar(20) DEFAULT NULL,
  `brand` varchar(30) DEFAULT NULL,
  `pack_size` varchar(1) DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT NULL,
  `barcode` varchar(20) DEFAULT NULL,
  `qr_code` int(11) DEFAULT NULL,
  `category2` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;

INSERT INTO `product` (`product_id`, `prod_name_short`, `prod_name_long`, `department`, `category1`, `brand`, `pack_size`, `unit_price`, `barcode`, `qr_code`, `category2`)
VALUES
	(1,'Domestos M','Domestos Original Bleach 750ML','Bathroom','Bleach','Domestos','M',1.10,NULL,NULL,NULL),
	(2,'Andrex M','Andrex Puppies On A Roll 12 Pack','Bathroom','Toilet Roll','Andrex','M',6.00,NULL,NULL,NULL),
	(3,'Cif Floor C M','Cif Express Direct To Floor Lemon 750ML','Kitchen','Floor Cleaner','Cif','M',2.00,NULL,NULL,NULL),
	(4,'Surf Caps S','Surf Lavender Washing Capsules 10 Wash 263G','Laundry','Washing Detergent','Surf','S',3.00,NULL,NULL,NULL),
	(5,'Surf Caps M','Surf Sunshine Lemons 18 Wash 579G','Laundry','Washing Detergent','Surf','M',5.00,NULL,NULL,NULL),
	(6,'Surf Caps L','Surf Caps Tropical Oasis Doy 33 Washes','Laundry','Washing Detergent','Surf','L',8.00,NULL,NULL,NULL),
	(7,'Persil Powder S','Persil Non Biological Washing Powder 10 Wash ','Laundry','Washing Detergent','Persil','S',3.50,NULL,NULL,NULL),
	(8,'Persil Powder M','Persil Non Biological Washing Powder 10 Wash ','Laundry','Washing Detergent','Persil','M',7.00,NULL,NULL,NULL),
	(9,'Persil Powder L','Persil Non Biological Washing Powder 10 Wash ','Laundry','Washing Detergent','Persil','L',11.00,NULL,NULL,NULL),
	(10,'Comfort Conditioner ','Comfort Creations Fabric Conditioner Bluebell','Laundry','Fabric Softener','Comfort','M',3.00,NULL,NULL,NULL),
	(11,'Cif Cream M','Cif Original Cream 500ML','Kitchen','Cleaning Fluid','Cif','M',2.50,NULL,NULL,NULL),
	(12,'Cif Spray M','Cif Actifizz multi Purpose Ocean Spray 700ML','Kitchen','Surface Spray','Cif','M',2.75,NULL,NULL,NULL),
	(13,'Bin Bags M','Drawstring Refuse Sacks 15PK 80L','Kitchen','Bin Bags','N/A','M',2.00,NULL,NULL,NULL),
	(14,'Mr Sheen Spray M','Mr Sheen Original Polish 300 ML','Kitchen','Furniture Spray','Mr Sheen','M',1.30,NULL,NULL,NULL),
	(15,'Fairy Tabs M','Fairy Platinum Lemon Dishwasher Tablets 20 Pa','kitchen','Dishwasher Tablets','Fairy','M',10.00,NULL,NULL,NULL);

/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table template_box
# ------------------------------------------------------------

DROP TABLE IF EXISTS `template_box`;

CREATE TABLE `template_box` (
  `template_box_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `template_box_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`template_box_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `template_box` WRITE;
/*!40000 ALTER TABLE `template_box` DISABLE KEYS */;

INSERT INTO `template_box` (`template_box_id`, `template_box_name`)
VALUES
	(1,'Single'),
	(2,'Couple'),
	(3,'Family');

/*!40000 ALTER TABLE `template_box` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table template_box_item
# ------------------------------------------------------------

DROP TABLE IF EXISTS `template_box_item`;

CREATE TABLE `template_box_item` (
  `template_box_item_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `template_box_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`template_box_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `template_box_item` WRITE;
/*!40000 ALTER TABLE `template_box_item` DISABLE KEYS */;

INSERT INTO `template_box_item` (`template_box_item_id`, `template_box_id`, `product_id`, `qty`)
VALUES
	(1,3,1,1),
	(2,3,2,1),
	(3,3,3,1),
	(8,3,8,1),
	(10,3,10,1),
	(11,3,11,1),
	(12,3,12,1),
	(13,3,13,1),
	(14,3,14,1),
	(15,3,15,1);

/*!40000 ALTER TABLE `template_box_item` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
