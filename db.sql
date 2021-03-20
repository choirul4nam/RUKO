DROP DATABASE IF EXISTS `RAKO`;
CREATE DATABASE `RAKO`;
USE `RAKO`;

CREATE TABLE `barang` (
  `id_barang` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(60) NOT NULL,
  `deskripsi` varchar(100) NOT NULL COMMENT 'book title',
  `harga` varchar(60) NOT NULL,
  `stok` int NOT NULL,
  `id_kategori` varchar(60) NOT NULL,
  PRIMARY KEY (`id_barang`),
  UNIQUE KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARACTER SET 'utf8'
  COLLATE 'utf8_general_ci';

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARACTER SET 'utf8'
  COLLATE 'utf8_general_ci';

CREATE TABLE `kasir` (
  `id_kasir` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kasir`)
) ENGINE=InnoDB DEFAULT CHARACTER SET 'utf8'
  COLLATE 'utf8_general_ci';
