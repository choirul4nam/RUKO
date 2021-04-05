/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.1.37-MariaDB : Database - rako
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rako` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `rako`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(60) NOT NULL,
  `deskripsi` varchar(100) NOT NULL COMMENT 'book title',
  `harga` varchar(60) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_kategori` varchar(60) NOT NULL,
  PRIMARY KEY (`id_barang`),
  UNIQUE KEY `id_barang` (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `barang` */

insert  into `barang`(`id_barang`,`nama_barang`,`deskripsi`,`harga`,`stok`,`id_kategori`) values 
(1,'Kertas','--','100000',10,'Minuman'),
(3,'Buku','--','20000',5,'Minuman');

/*Table structure for table `kasir` */

DROP TABLE IF EXISTS `kasir`;

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `peran` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kasir`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `kasir` */

insert  into `kasir`(`id_kasir`,`email`,`username`,`passwd`,`peran`) values 
(1,'anam@anam.com','choirul anamm','admin','admin');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`nama_kategori`) values 
(1,'Makanan'),
(2,'Minumann'),
(3,'Embo');

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) DEFAULT NULL,
  `kasir` varchar(100) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `kembalian` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id`,`code`,`kasir`,`total`,`bayar`,`kembalian`) values 
(3,'TRX0002','',540000,640000,100000),
(4,'TRX0003','',540000,640000,100000),
(5,'TRX0004','',540000,640000,100000),
(6,'TRX0005','',540000,640000,100000),
(7,'TRX0006','',540000,640000,100000),
(8,'TRX0007','',540000,640000,100000),
(9,'TRX0008','',540000,640000,100000);

/*Table structure for table `transaksi_detail` */

DROP TABLE IF EXISTS `transaksi_detail`;

CREATE TABLE `transaksi_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tarnsaksi` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `transaksi_detail` */

insert  into `transaksi_detail`(`id`,`id_tarnsaksi`,`id_barang`,`jumlah`,`total`) values 
(1,8,1,5,500000),
(2,8,3,2,40000),
(3,9,1,5,500000),
(4,9,3,2,40000);

/*Table structure for table `transaksi_dummy` */

DROP TABLE IF EXISTS `transaksi_dummy`;

CREATE TABLE `transaksi_dummy` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(200) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi_dummy` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
