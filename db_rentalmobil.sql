/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.16-MariaDB : Database - db_rentalmobil
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_rentalmobil` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_rentalmobil`;

/*Table structure for table `auth_activation_attempts` */

DROP TABLE IF EXISTS `auth_activation_attempts`;

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_activation_attempts` */

/*Table structure for table `auth_groups` */

DROP TABLE IF EXISTS `auth_groups`;

CREATE TABLE `auth_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `auth_groups` */

insert  into `auth_groups`(`id`,`name`,`description`) values 
(1,'super-admin','Wow'),
(2,'user','Hello World'),
(3,'admin','Site Administrator');

/*Table structure for table `auth_groups_permissions` */

DROP TABLE IF EXISTS `auth_groups_permissions`;

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) unsigned NOT NULL DEFAULT 0,
  `permission_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  KEY `group_id_permission_id` (`group_id`,`permission_id`),
  CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_groups_permissions` */

insert  into `auth_groups_permissions`(`group_id`,`permission_id`) values 
(1,1);

/*Table structure for table `auth_groups_users` */

DROP TABLE IF EXISTS `auth_groups_users`;

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) unsigned NOT NULL DEFAULT 0,
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_groups_users_user_id_foreign` (`user_id`),
  KEY `group_id_user_id` (`group_id`,`user_id`),
  CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_groups_users` */

insert  into `auth_groups_users`(`group_id`,`user_id`) values 
(3,3);

/*Table structure for table `auth_logins` */

DROP TABLE IF EXISTS `auth_logins`;

CREATE TABLE `auth_logins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

/*Data for the table `auth_logins` */

insert  into `auth_logins`(`id`,`ip_address`,`email`,`user_id`,`date`,`success`) values 
(1,'::1','emailbantu0101@gmail.com',1,'2021-01-10 17:02:47',1),
(2,'::1','emailbantu0101@gmail.com',NULL,'2021-01-10 17:25:10',0),
(3,'::1','emailbantu0101@gmail.com',1,'2021-01-10 17:25:23',1),
(4,'::1','cobacoba@gmail.com',2,'2021-01-10 17:34:47',1),
(5,'::1','emailbantu0101@gmail.com',1,'2021-01-10 19:37:41',1),
(6,'::1','emailbantu0101@gmail.com',1,'2021-01-10 19:53:31',1),
(7,'::1','cobacoba@gmail.com',2,'2021-01-10 19:56:36',1),
(8,'::1','emailbantu0101@gmail.com',1,'2021-01-10 21:40:11',1),
(9,'::1','cobacoba@gmail.com',2,'2021-01-10 21:47:03',1),
(10,'::1','cobacoba@gmail.com',2,'2021-01-11 00:03:36',1),
(11,'::1','emailbantu0101@gmail.com',1,'2021-01-11 00:04:40',1),
(12,'::1','cobacoba@gmail.com',2,'2021-01-11 00:34:33',1),
(13,'::1','cobacoba@gmail.com',2,'2021-01-11 02:29:19',1),
(14,'::1','cobacoba@gmail.com',2,'2021-01-11 16:40:58',1),
(15,'::1','cobacoba@gmail.com',2,'2021-01-11 19:43:36',1),
(16,'::1','emailbantu0101@gmail.com',NULL,'2021-01-12 03:01:34',0),
(17,'::1','emailbantu0101@gmail.com',1,'2021-01-12 03:01:48',1),
(18,'::1','cobacoba@gmail.com',2,'2021-01-12 03:03:40',1),
(19,'::1','emailbantu0101@gmail.com',1,'2021-01-12 22:05:40',1),
(20,'::1','emailbantu0101@gmail.com',1,'2021-01-13 04:11:48',1),
(21,'::1','emailbantu0101@gmail.com',1,'2021-01-20 09:12:17',1),
(22,'::1','emailbantu0101@gmail.com',1,'2021-01-20 11:38:58',1),
(23,'::1','emailbantu0101@gmail.com',1,'2021-01-25 05:13:08',1),
(24,'::1','emailbantu0101@gmail.com',NULL,'2021-01-25 10:00:49',0),
(25,'::1','emailbantu0101@gmail.com',1,'2021-01-25 10:01:08',1),
(26,'::1','emailbantu0101@gmail.com',1,'2021-01-25 12:47:48',1),
(27,'::1','emailbantu0101@gmail.com',1,'2021-01-26 09:21:44',1),
(28,'::1','emailbantu0101@gmail.com',1,'2021-01-27 03:14:31',1),
(29,'::1','emaibantu0101@gmail.com',NULL,'2021-01-27 08:15:42',0),
(30,'::1','emailbantu0101@gmail.com',1,'2021-01-27 08:25:26',1),
(31,'::1','emailbantu0101@gmail.com',1,'2021-01-27 09:31:56',1),
(32,'::1','emailbantu0101@gmail.com',1,'2021-01-27 19:22:21',1),
(33,'::1','emailbantu0101@gmail.com',1,'2021-01-28 00:14:44',1),
(34,'::1','emailbantu0101@gmail.com',1,'2021-01-28 05:22:14',1),
(35,'::1','emailbantu0101@gmail.com',1,'2021-01-28 09:30:16',1),
(36,'::1','emailbantu0101@gmail.com',1,'2021-01-28 16:49:37',1),
(37,'::1','emailbantu0101@gmail.com',3,'2021-01-28 21:18:42',1),
(38,'::1','emailbantu0101@gmail.com',NULL,'2021-01-28 21:20:11',0),
(39,'::1','emailbantu0101@gmail.com',3,'2021-01-28 21:20:27',1),
(40,'::1','emailbantu0101@gmail.com',3,'2021-01-28 21:31:58',1),
(41,'::1','emailbantu0101@gmail.com',3,'2021-01-28 22:14:21',1);

/*Table structure for table `auth_permissions` */

DROP TABLE IF EXISTS `auth_permissions`;

CREATE TABLE `auth_permissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `auth_permissions` */

insert  into `auth_permissions`(`id`,`name`,`description`) values 
(1,'manage-user','Site Super Administrator');

/*Table structure for table `auth_reset_attempts` */

DROP TABLE IF EXISTS `auth_reset_attempts`;

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_reset_attempts` */

/*Table structure for table `auth_tokens` */

DROP TABLE IF EXISTS `auth_tokens`;

CREATE TABLE `auth_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auth_tokens_user_id_foreign` (`user_id`),
  KEY `selector` (`selector`),
  CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_tokens` */

/*Table structure for table `auth_users_permissions` */

DROP TABLE IF EXISTS `auth_users_permissions`;

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  `permission_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  KEY `user_id_permission_id` (`user_id`,`permission_id`),
  CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `auth_users_permissions` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`version`,`class`,`group`,`namespace`,`time`,`batch`) values 
(1,'2017-11-20-223112','Myth\\Auth\\Database\\Migrations\\CreateAuthTables','default','Myth\\Auth',1610295623,1);

/*Table structure for table `tabel_driver` */

DROP TABLE IF EXISTS `tabel_driver`;

CREATE TABLE `tabel_driver` (
  `driver_id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_nama` varchar(100) DEFAULT NULL,
  `driver_jenis_kelamin` varchar(6) DEFAULT NULL,
  `driver_alamat` varchar(100) DEFAULT NULL,
  `driver_nohp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tabel_driver` */

insert  into `tabel_driver`(`driver_id`,`driver_nama`,`driver_jenis_kelamin`,`driver_alamat`,`driver_nohp`) values 
(1,'Ayyub Zikri','Male','Lubuk Buaya Padang','089539583985'),
(2,'Rahman Deswanda','Male','Ujung Gurun Padang','098080064694'),
(3,'Muhammad Asnur','Male','Belakang Azkia Padang','089593859358');

/*Table structure for table `tabel_jenis` */

DROP TABLE IF EXISTS `tabel_jenis`;

CREATE TABLE `tabel_jenis` (
  `jenis_id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_nama` varchar(100) DEFAULT NULL,
  `jenis_create` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`jenis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tabel_jenis` */

insert  into `tabel_jenis`(`jenis_id`,`jenis_nama`,`jenis_create`) values 
(1,'Sedan','2021-01-03 21:29:53'),
(2,'Sport','2021-01-05 13:20:58'),
(6,'Convertible','2021-01-26 03:17:37'),
(7,'Coupe','2021-01-26 03:18:03'),
(8,'MPV','2021-01-26 03:18:21'),
(9,'Off Road','2021-01-26 03:18:47'),
(10,'Coba','2021-01-29 11:17:04');

/*Table structure for table `tabel_merk` */

DROP TABLE IF EXISTS `tabel_merk`;

CREATE TABLE `tabel_merk` (
  `merk_id` int(11) NOT NULL AUTO_INCREMENT,
  `merk_nama` varchar(100) DEFAULT NULL,
  `merk_create` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`merk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tabel_merk` */

insert  into `tabel_merk`(`merk_id`,`merk_nama`,`merk_create`) values 
(1,'Toyota','2021-01-03 13:19:13'),
(2,'Avanza','2021-01-03 14:58:39'),
(3,'Xenia','2021-01-21 02:40:53'),
(4,'Daihatsu','2021-01-26 03:13:10'),
(5,'Honda','2021-01-26 03:13:23'),
(6,'Mitsubishi','2021-01-26 03:13:38'),
(7,'Suzuki','2021-01-26 03:13:49'),
(8,'Nissan','2021-01-26 03:14:20'),
(9,'Jeep','2021-01-26 03:15:01'),
(10,'Mercedez Benz','2021-01-26 03:15:37');

/*Table structure for table `tabel_mobil` */

DROP TABLE IF EXISTS `tabel_mobil`;

CREATE TABLE `tabel_mobil` (
  `mobil_id` int(11) NOT NULL AUTO_INCREMENT,
  `mobil_no_polisi` char(10) DEFAULT NULL,
  `mobil_id_merk` int(11) DEFAULT NULL,
  `mobil_id_jenis` int(11) DEFAULT NULL,
  `mobil_tahun` varchar(5) DEFAULT NULL,
  `mobil_harga_sewa` int(11) DEFAULT NULL,
  `mobil_kapasitas` int(11) DEFAULT NULL,
  `mobil_gambar` varchar(100) DEFAULT 'default.png',
  PRIMARY KEY (`mobil_id`),
  KEY `mobil_id_merk` (`mobil_id_merk`),
  KEY `mobil_id_jenis` (`mobil_id_jenis`),
  CONSTRAINT `tabel_mobil_ibfk_1` FOREIGN KEY (`mobil_id_merk`) REFERENCES `tabel_merk` (`merk_id`) ON UPDATE CASCADE,
  CONSTRAINT `tabel_mobil_ibfk_2` FOREIGN KEY (`mobil_id_jenis`) REFERENCES `tabel_jenis` (`jenis_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tabel_mobil` */

insert  into `tabel_mobil`(`mobil_id`,`mobil_no_polisi`,`mobil_id_merk`,`mobil_id_jenis`,`mobil_tahun`,`mobil_harga_sewa`,`mobil_kapasitas`,`mobil_gambar`) values 
(1,'BA 1818 AC',2,1,'2000',100000,4,'default.png'),
(3,'BA 1818 AF',2,1,'2014',200000,6,'default.png'),
(4,'BA 8888 AD',3,1,'2012',525252,6,'default.png'),
(6,'BA 1234 CT',10,6,'2020',300000,4,'default.png'),
(7,'BA 4231 RR',4,7,'2019',250000,4,'default.png');

/*Table structure for table `tabel_penyewa` */

DROP TABLE IF EXISTS `tabel_penyewa`;

CREATE TABLE `tabel_penyewa` (
  `penyewa_id` int(11) NOT NULL AUTO_INCREMENT,
  `penyewa_nama` varchar(50) DEFAULT NULL,
  `penyewa_email` varchar(100) DEFAULT NULL,
  `penyewa_password` varchar(100) DEFAULT NULL,
  `penyewa_alamat` varchar(100) DEFAULT NULL,
  `penyewa_no_telp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`penyewa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tabel_penyewa` */

insert  into `tabel_penyewa`(`penyewa_id`,`penyewa_nama`,`penyewa_email`,`penyewa_password`,`penyewa_alamat`,`penyewa_no_telp`) values 
(1,'Alwan Aditia Duha','alwanaditia3101@gmail.com','Male','Siteba Padang','089832989842'),
(2,'Puan Maharani','puangokil0101@gmail.com','Female','Jakarta Pusat','089892844242'),
(3,'Adil Saputra Duha','adilsaputra0101@gmail.com','Male','Padang','0849894298424');

/*Table structure for table `tabel_sewa` */

DROP TABLE IF EXISTS `tabel_sewa`;

CREATE TABLE `tabel_sewa` (
  `sewa_no_nota` int(11) NOT NULL AUTO_INCREMENT,
  `sewa_tgl` date DEFAULT NULL,
  `sewa_tglkembali` date DEFAULT NULL,
  `sewa_id_penyewa` int(11) DEFAULT NULL,
  `sewa_id_mobil` int(11) DEFAULT NULL,
  `sewa_lama` int(11) DEFAULT NULL,
  `sewa_total` int(11) DEFAULT NULL,
  PRIMARY KEY (`sewa_no_nota`),
  KEY `sewa_id_mobil` (`sewa_id_mobil`),
  KEY `sewa_id_penyewa` (`sewa_id_penyewa`),
  CONSTRAINT `tabel_sewa_ibfk_1` FOREIGN KEY (`sewa_id_mobil`) REFERENCES `tabel_mobil` (`mobil_id`),
  CONSTRAINT `tabel_sewa_ibfk_2` FOREIGN KEY (`sewa_id_penyewa`) REFERENCES `tabel_penyewa` (`penyewa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tabel_sewa` */

insert  into `tabel_sewa`(`sewa_no_nota`,`sewa_tgl`,`sewa_tglkembali`,`sewa_id_penyewa`,`sewa_id_mobil`,`sewa_lama`,`sewa_total`) values 
(6,'2021-01-01',NULL,3,6,1,300000),
(7,'2021-01-30',NULL,2,1,2,200000),
(8,'2021-01-30',NULL,1,7,2,500000);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT 'default.jpg',
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`username`,`fullname`,`password_hash`,`image`,`reset_hash`,`reset_at`,`reset_expires`,`activate_hash`,`status`,`status_message`,`active`,`force_pass_reset`,`created_at`,`updated_at`,`deleted_at`) values 
(3,'emailbantu0101@gmail.com','1810005',NULL,'$2y$10$08y54UEJieAbY/iiSgpBr.at.zkULwYBi6GAi9Fbzkrka/MK4gOg.','default.jpg',NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2021-01-28 21:10:35','2021-01-28 21:10:35',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
