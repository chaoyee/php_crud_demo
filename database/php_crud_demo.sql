# Host: 127.0.0.1 (MySQL 5.7.23)
# Database: demo
# Generation Time: 2018-09-23 03:52:31 +0000
# ************************************************************

# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `prod_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '產品編號',
  `prod_name` varchar(255) DEFAULT NULL COMMENT '產品名稱',
  `prod_desc` text COMMENT '產品說明',
  `prod_price` mediumint(9) DEFAULT NULL COMMENT '產品價格',
  `prod_counter` smallint(6) DEFAULT NULL COMMENT '閱覽點擊數',
  `prod_start_date` datetime DEFAULT NULL COMMENT '上架日期',
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

LOCK TABLES `products` WRITE;

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_desc`, `prod_price`, `prod_counter`, `prod_start_date`)
VALUES
	(1,'登山車 18001','<p>26\"x17\" Mountain Lion black/white</p>',8710,1,'2018-09-20 15:58:07'),
	(2,'登山車 18002','<p>26\"x19\" Mountain Lion green/gray</p>',8700,4,'2018-09-23 03:45:46'),
	(3,'登山車 18003','<p>26\"x15\" Mountain Lion Red/Gray&nbsp;<br>超輕量、限量版<strong>鈦合金車架</strong></p>',18320,84,'2018-09-21 01:32:56'),
	(4,'登山車 18004','<p>26\"x13\" Mountain Lion Blue</p>',8001,26,'2018-08-21 03:51:12'),
	(5,'登山車 18005','<p>26\"x21\" Mountain Lion BIG Red</p>',8910,77,'2018-08-23 15:13:37'),
	(6,'登山車 18006','<p>26\"x14\" MTB 21-speed Silver/Black&nbsp;</p>',23100,0,'2018-09-21 07:54:45'),
	(7,'城市車 20120','<p>700Cx23 city bike white</p>',12100,0,'2018-09-22 07:16:30'),
	(8,'童車 1000','<p>16\" Boy Steel Blue</p>',3510,0,'2018-09-21 07:36:02'),
	(9,'童車 1101','<p>16\" Girl Steel Pink/white</p>',3520,1,'2018-09-22 07:23:12');

UNLOCK TABLES;

