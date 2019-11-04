-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.17 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for mineral
CREATE DATABASE IF NOT EXISTS `mineral` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mineral`;

-- Dumping structure for table mineral.audittable1
CREATE TABLE IF NOT EXISTS `audittable1` (
  `Mineral_id` int(11) DEFAULT NULL,
  `mname` char(50) DEFAULT NULL,
  `DATETIMEp` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.audittable1: ~1 rows (approximately)
/*!40000 ALTER TABLE `audittable1` DISABLE KEYS */;
INSERT INTO `audittable1` (`Mineral_id`, `mname`, `DATETIMEp`) VALUES
	(1, 'Quartz', '10/12/2222');
/*!40000 ALTER TABLE `audittable1` ENABLE KEYS */;

-- Dumping structure for table mineral.chemical
CREATE TABLE IF NOT EXISTS `chemical` (
  `Mineral_id` int(11) DEFAULT NULL,
  `Formula` char(50) DEFAULT NULL,
  `HCL` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.chemical: ~0 rows (approximately)
/*!40000 ALTER TABLE `chemical` DISABLE KEYS */;
INSERT INTO `chemical` (`Mineral_id`, `Formula`, `HCL`) VALUES
	(1, 'SiO4', 'No');
/*!40000 ALTER TABLE `chemical` ENABLE KEYS */;

-- Dumping structure for table mineral.crystal
CREATE TABLE IF NOT EXISTS `crystal` (
  `Mineral_id` int(11) DEFAULT NULL,
  `Sys` char(50) DEFAULT NULL,
  `Twin` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.crystal: ~0 rows (approximately)
/*!40000 ALTER TABLE `crystal` DISABLE KEYS */;
INSERT INTO `crystal` (`Mineral_id`, `Sys`, `Twin`) VALUES
	(1, 'Hexagonal', 'Yes');
/*!40000 ALTER TABLE `crystal` ENABLE KEYS */;

-- Dumping structure for table mineral.mineralhome
CREATE TABLE IF NOT EXISTS `mineralhome` (
  `Mineral_id` int(11) DEFAULT NULL,
  `mname` char(50) DEFAULT NULL,
  `des` char(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.mineralhome: ~0 rows (approximately)
/*!40000 ALTER TABLE `mineralhome` DISABLE KEYS */;
INSERT INTO `mineralhome` (`Mineral_id`, `mname`, `des`) VALUES
	(1, 'Quartz', 'A Silicon Dioxide, it is the third most common Mineral on Earth.');
/*!40000 ALTER TABLE `mineralhome` ENABLE KEYS */;

-- Dumping structure for table mineral.optical
CREATE TABLE IF NOT EXISTS `optical` (
  `Mineral_id` int(11) DEFAULT NULL,
  `Type` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.optical: ~0 rows (approximately)
/*!40000 ALTER TABLE `optical` DISABLE KEYS */;
INSERT INTO `optical` (`Mineral_id`, `Type`) VALUES
	(1, 'Transparent');
/*!40000 ALTER TABLE `optical` ENABLE KEYS */;

-- Dumping structure for table mineral.physical
CREATE TABLE IF NOT EXISTS `physical` (
  `Mineral_id` int(11) DEFAULT NULL,
  `Luster` char(50) DEFAULT NULL,
  `Streak` char(50) DEFAULT NULL,
  `Hardness` char(50) DEFAULT NULL,
  `Color` char(50) DEFAULT NULL,
  `Tenacity` char(50) DEFAULT NULL,
  `Cleavage` char(50) DEFAULT NULL,
  `Fracture` char(50) DEFAULT NULL,
  `Density` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.physical: ~0 rows (approximately)
/*!40000 ALTER TABLE `physical` DISABLE KEYS */;
INSERT INTO `physical` (`Mineral_id`, `Luster`, `Streak`, `Hardness`, `Color`, `Tenacity`, `Cleavage`, `Fracture`, `Density`) VALUES
	(1, 'Vitreous', 'White', '7', 'Colorless', 'Brittle', 'None', 'Conchoidal', '2.7');
/*!40000 ALTER TABLE `physical` ENABLE KEYS */;

-- Dumping structure for table mineral.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
	(2, 'Alex2', '$2y$10$u77LLnKfb7/UBy2I7dHeReMxWF69hK9Xp90fcWW51Al4ccC/fkMxK', 'admin'),
	(4, 'Alex', '$2y$10$mZDPkRG2Lo2Kp6fZg4ISlu1fblA4lDxwbuByjppq6UHGJFqnob3.O', 'user'),
	(6, 'Captain', '$2y$10$p.ljURXy520vDFio2Q3aceK9ECG6ktk6mrajnDB9fFPzFrzL2dgiu', 'user'),
	(7, 'Thanhosan', '$2y$10$A3GDUjkHZHcjXfiyGCbV3.WCTzCOX.PWdSiPh6AYYh7wWG0WspLVq', 'admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
