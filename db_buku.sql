/*
Navicat MySQL Data Transfer

Source Server         : koneksi_anjanuar
Source Server Version : 50733
Source Host           : localhost:3306
Source Database       : db_buku

Target Server Type    : MYSQL
Target Server Version : 50733
File Encoding         : 65001

Date: 2023-01-09 22:05:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_buku
-- ----------------------------
DROP TABLE IF EXISTS `tb_buku`;
CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(255) DEFAULT NULL,
  `penerbit_buku` varchar(255) DEFAULT NULL,
  `genre_buku` varchar(255) DEFAULT NULL,
  `harga_buku` double(255,0) DEFAULT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_buku
-- ----------------------------
INSERT INTO `tb_buku` VALUES ('3', 'Hujan', 'Gramedia Pustaka', 'Science Fiction', '98000');
INSERT INTO `tb_buku` VALUES ('11', 'Laut Bercerita', 'Gramedia Pustaka', 'Historical Fiction', '98000');
INSERT INTO `tb_buku` VALUES ('12', 'Dikta & Hukum', 'Asoka Aksara X Loveable', 'Roman Melodrama', '98000');
INSERT INTO `tb_buku` VALUES ('13', 'Sagaras', 'Sabakgrip', 'Science Fiction', '95000');
INSERT INTO `tb_buku` VALUES ('14', 'Berdebah di Ujung Tanduk', 'Sabakgrip', 'Action and Mafia Ekonomi', '97000');
INSERT INTO `tb_buku` VALUES ('16', '00.00', 'Loveable', 'Fiksi Romantis', '97000');
INSERT INTO `tb_buku` VALUES ('17', 'Negeri 5 Menara', 'Gramedia Pustaka', 'Edukasi, Religi, Roman', '95000');
INSERT INTO `tb_buku` VALUES ('18', 'Bumi Manusia', 'Hasta Mitra', 'Drama History', '95000');
SET FOREIGN_KEY_CHECKS=1;
