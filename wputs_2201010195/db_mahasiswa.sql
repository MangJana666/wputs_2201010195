/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_mahasiswa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_mahasiswa` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_mahasiswa`;

/*Table structure for table `tbmhs` */

DROP TABLE IF EXISTS `tbmhs`;

CREATE TABLE `tbmhs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `nim` varchar(50) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(255) DEFAULT NULL,
  `id_mhs` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbmhs` */

insert  into `tbmhs`(`id`,`nama`,`nim`,`prodi`,`tgl_lahir`,`jk`,`id_mhs`) values 
(7,'I Nyoman Jana Priya','2201010195','TI - Manajemen Data & Informasi','2004-01-21','Laki-laki','43ce6e40d9b5de4c1c7a076d2d195fd9');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `passkey` varchar(255) DEFAULT NULL,
  `iduser` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id`,`nama`,`email`,`username`,`passkey`,`iduser`) values 
(1,'adnya14','adnya14@gmail.com','Adnya01','12345678','0bb1697ec6dfe0b8c00e9a8fa6901114'),
(2,'Wiro16','wirongado16@gmail.com','Wiro212','11111111','bdb026996eb118b98bdb744972675c45'),
(3,'','','','','d41d8cd98f00b204e9800998ecf8427e'),
(4,'dewa112','dewa@gmail.com','dewa114','12345678','912f9b549cc8a413e83bade017e09c75'),
(5,'yanto212','yanto21@gmail.com','yanto212','00000000','2e0363644d5bad6282d1bc674d13469a');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
