-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_spfc
CREATE DATABASE IF NOT EXISTS `db_spfc` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_spfc`;

-- Dumping structure for table db_spfc.basis_aturan
CREATE TABLE IF NOT EXISTS `basis_aturan` (
  `idaturan` int NOT NULL AUTO_INCREMENT,
  `idpenyakit` int DEFAULT NULL,
  PRIMARY KEY (`idaturan`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_spfc.basis_aturan: ~0 rows (approximately)
DELETE FROM `basis_aturan`;
INSERT INTO `basis_aturan` (`idaturan`, `idpenyakit`) VALUES
	(4, 3);

-- Dumping structure for table db_spfc.detail_basis_aturan
CREATE TABLE IF NOT EXISTS `detail_basis_aturan` (
  `idaturan` int DEFAULT NULL,
  `idgejala` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_spfc.detail_basis_aturan: ~0 rows (approximately)
DELETE FROM `detail_basis_aturan`;

-- Dumping structure for table db_spfc.detail_konsultasi
CREATE TABLE IF NOT EXISTS `detail_konsultasi` (
  `idkonsultasi` int DEFAULT NULL,
  `idgejala` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_spfc.detail_konsultasi: ~0 rows (approximately)
DELETE FROM `detail_konsultasi`;

-- Dumping structure for table db_spfc.detail_penyakit
CREATE TABLE IF NOT EXISTS `detail_penyakit` (
  `idkonsultasi` int DEFAULT NULL,
  `idpenyakit` int DEFAULT NULL,
  `persentase` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_spfc.detail_penyakit: ~0 rows (approximately)
DELETE FROM `detail_penyakit`;

-- Dumping structure for table db_spfc.gejala
CREATE TABLE IF NOT EXISTS `gejala` (
  `idgejala` int NOT NULL AUTO_INCREMENT,
  `nmgejala` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`idgejala`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_spfc.gejala: ~7 rows (approximately)
DELETE FROM `gejala`;
INSERT INTO `gejala` (`idgejala`, `nmgejala`) VALUES
	(2, 'Bercak daun berwarna merah atau cokelat.'),
	(3, ' Bagian bawah daun yang berubah warna menjadi kuning'),
	(4, 'Batang tanaman kopi layu mendadak'),
	(5, ' Daun terlihat kuning hingga rontok'),
	(6, ' Daun berubah menjadi kuning hingga akhirnya layu'),
	(7, ' Akar yang berubah warna menjadi putih atau hitam'),
	(8, ' Bagian pucuk tanaman kopi yang mati'),
	(9, 'batang tanaman kopi terlihat membengkak');

-- Dumping structure for table db_spfc.konsultasi
CREATE TABLE IF NOT EXISTS `konsultasi` (
  `idkonsultasi` int NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`idkonsultasi`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_spfc.konsultasi: ~0 rows (approximately)
DELETE FROM `konsultasi`;

-- Dumping structure for table db_spfc.penyakit
CREATE TABLE IF NOT EXISTS `penyakit` (
  `idpenyakit` int NOT NULL AUTO_INCREMENT,
  `nmpenyakit` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `solusi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`idpenyakit`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_spfc.penyakit: ~3 rows (approximately)
DELETE FROM `penyakit`;
INSERT INTO `penyakit` (`idpenyakit`, `nmpenyakit`, `keterangan`, `solusi`) VALUES
	(1, 'Nematoda', '-', '-'),
	(3, 'Karat Daun', '-', '-'),
	(4, 'Bercak Daun', '-', '-');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
