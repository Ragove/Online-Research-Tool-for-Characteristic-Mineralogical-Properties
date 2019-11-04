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

-- Dumping structure for table mineral.audittable1
CREATE TABLE IF NOT EXISTS `audittable1` (
  `Mineral_id` int(11) DEFAULT NULL,
  `mname` char(50) DEFAULT NULL,
  `DATETIMEp` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.audittable1: ~0 rows (approximately)
/*!40000 ALTER TABLE `audittable1` DISABLE KEYS */;
INSERT INTO `audittable1` (`Mineral_id`, `mname`, `DATETIMEp`) VALUES
	(1, 'Quartz', '10/12/2222');
/*!40000 ALTER TABLE `audittable1` ENABLE KEYS */;

-- Dumping structure for table mineral.audittable2
CREATE TABLE IF NOT EXISTS `audittable2` (
  `user` int(11) DEFAULT NULL,
  `DATETIMEp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.audittable2: ~0 rows (approximately)
/*!40000 ALTER TABLE `audittable2` DISABLE KEYS */;
/*!40000 ALTER TABLE `audittable2` ENABLE KEYS */;

-- Dumping structure for table mineral.chemical
CREATE TABLE IF NOT EXISTS `chemical` (
  `Mineral_id` int(11) DEFAULT NULL,
  `Formula` char(50) DEFAULT NULL,
  `HCL` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.chemical: ~2 rows (approximately)
/*!40000 ALTER TABLE `chemical` DISABLE KEYS */;
INSERT INTO `chemical` (`Mineral_id`, `Formula`, `HCL`) VALUES
	(1, 'SiO4', 'No'),
	(2, 'Si02', 'No');
/*!40000 ALTER TABLE `chemical` ENABLE KEYS */;

-- Dumping structure for table mineral.crystal
CREATE TABLE IF NOT EXISTS `crystal` (
  `Mineral_id` int(11) DEFAULT NULL,
  `Sys` char(50) DEFAULT NULL,
  `Twin` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.crystal: ~2 rows (approximately)
/*!40000 ALTER TABLE `crystal` DISABLE KEYS */;
INSERT INTO `crystal` (`Mineral_id`, `Sys`, `Twin`) VALUES
	(1, 'Hexagonal', 'Yes'),
	(2, 'Hexagonal', 'No');
/*!40000 ALTER TABLE `crystal` ENABLE KEYS */;

-- Dumping structure for table mineral.mineralhome
CREATE TABLE IF NOT EXISTS `mineralhome` (
  `Mineral_id` int(11) DEFAULT NULL,
  `mname` char(50) DEFAULT NULL,
  `des` char(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.mineralhome: ~3 rows (approximately)
/*!40000 ALTER TABLE `mineralhome` DISABLE KEYS */;
INSERT INTO `mineralhome` (`Mineral_id`, `mname`, `des`) VALUES
	(1, 'Quartz', 'A Silicon Dioxide, it is the third most common Mineral on Earth.'),
	(2, 'Amethyst', 'A variety of Vitreous Quartz, know for its violet color.'),
	(19, 'nice name', '22'),
	(20, 'nice name', '22');
/*!40000 ALTER TABLE `mineralhome` ENABLE KEYS */;

-- Dumping structure for table mineral.optical
CREATE TABLE IF NOT EXISTS `optical` (
  `Mineral_id` int(11) DEFAULT NULL,
  `Type` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.optical: ~2 rows (approximately)
/*!40000 ALTER TABLE `optical` DISABLE KEYS */;
INSERT INTO `optical` (`Mineral_id`, `Type`) VALUES
	(1, 'Transparent'),
	(2, 'Opaque');
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

-- Dumping data for table mineral.physical: ~2 rows (approximately)
/*!40000 ALTER TABLE `physical` DISABLE KEYS */;
INSERT INTO `physical` (`Mineral_id`, `Luster`, `Streak`, `Hardness`, `Color`, `Tenacity`, `Cleavage`, `Fracture`, `Density`) VALUES
	(1, 'Vitreous', 'White', '7', 'Colorless', 'Brittle', 'None', 'Conchoidal', '2.7'),
	(2, 'Vitreous', 'White', '7', 'Violet', 'Brittle', 'None', 'Conchoidal', '2.7');
/*!40000 ALTER TABLE `physical` ENABLE KEYS */;

-- Dumping structure for table mineral.quiz
CREATE TABLE IF NOT EXISTS `quiz` (
  `qnum` int(11) DEFAULT NULL,
  `question` text,
  `answera` text,
  `answerb` text,
  `answerc` text,
  `answerd` text,
  `correct` text,
  `picturename` char(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.quiz: ~10 rows (approximately)
/*!40000 ALTER TABLE `quiz` DISABLE KEYS */;
INSERT INTO `quiz` (`qnum`, `question`, `answera`, `answerb`, `answerc`, `answerd`, `correct`, `picturename`) VALUES
	(1, 'Quartz', 'Hardness of 7', 'Most Abundant Mineral in Earth\'s Crust', 'Vitreous Luster', 'White Streak', 'Quartz', 'Quartz'),
	(2, 'Sulfur', 'Distinctive Yellow Color', 'White Streak', 'Distinctive Odor', 'Hardness of 2', 'Sulfur', 'Sulfur'),
	(3, 'Pentlandite', 'Hardness of 4', 'Metallic Luster', 'Color is Bronze-Yellow', 'It is a Sulfide', 'Pentlandite', 'Pentlandite'),
	(4, 'Galena', 'Cubic Crystal System', 'Metallic Luster', 'Lead Grey Streak', 'Hardness of 2.5', 'Galena', 'Galena'),
	(5, 'Agate', 'Variety of Colors', 'Hardness of 7', 'Chonchoidal Fracturing', 'White Streak', 'Agate', 'Agate'),
	(6, 'Opal', 'Silicate', 'Hardness of 6-7', 'Variety of Colors', 'Vitreous Luster', 'Opal', 'Opal'),
	(7, 'Aquamarine', 'A form of Beryl', 'Blue Color', 'Hardness of 8', 'Transparent', 'Aquamarine', 'Aquamarine'),
	(8, 'Labradorite', 'Blue/Grey/White', 'Perfect Cleavage', 'Vitreous Luster', 'Triclinic Crystal System', 'Labradorite', 'Labradorite'),
	(9, 'Citrine', 'yellow to yellow-brown', 'Hardness of 7', 'Translucent', 'No Streak', 'Citrine', 'Citrine'),
	(10, 'Amethyst', 'Violet', 'Hardness of 7', 'White Streak', ' Pyramidal Terminations', 'Amethyst', 'Amethyst');
/*!40000 ALTER TABLE `quiz` ENABLE KEYS */;

-- Dumping structure for table mineral.quiz2
CREATE TABLE IF NOT EXISTS `quiz2` (
  `id` int(11) DEFAULT NULL,
  `que` text,
  `option 1` text,
  `option 2` text,
  `option 3` text,
  `option 4` text,
  `ans` text,
  `userans` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.quiz2: ~0 rows (approximately)
/*!40000 ALTER TABLE `quiz2` DISABLE KEYS */;
INSERT INTO `quiz2` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
	(1, 'Which of the following minerals, when in the form of sand, can be used to manufacture glass?', 'Quartz', 'Diamond', 'Calcite', 'Gypsum', 'Quartz', 'Gypsum'),
	(2, 'Which mineral is easily identified by smell?', 'Quartz', 'Sulfur', 'Galena', 'Pyrite', 'Sulfur', 'Pyrite'),
	(3, 'Which of the following minerals is more commonly known as "Fool\'s Gold"?', 'Limonite', 'Galena', 'Pyrite', 'Hematite', 'Pyrite', 'Hematite'),
	(4, 'Hydrochloric acid fizzes when it is dropped on what mineral?', 'Limestone', 'Sandstone', 'Iron', 'Calcite', 'Calcite', 'Calcite'),
	(5, 'Which property is shared by many gemstones, such as diamonds, rubies, sapphires, emeralds and topaz?', 'Ductility', 'Carbon as the primary element', 'High Specific Gravity', 'Extreme Hardness', 'Extreme Hardness', 'Extreme Hardness'),
	(6, 'Which of these mineral properties cannot be used to identify a mineral?', 'Hardness', 'Streak', 'Mass', 'Luster', 'Mass', 'Luster'),
	(7, 'Which of the follwing properties refers to the colored power resulting from rubbing a mineral against a harder surface?', 'Hardness', 'Luster', 'Cleavage', 'Streak', 'Streak', 'Streak'),
	(8, 'What mineral property would you be trying to determine if you had water, a balance, and a mineral?', 'Crystal Arrangement', 'Hardness', 'Specific Gravity or Density', 'Brittleness', 'Specific Gravity or Density', 'Brittleness'),
	(9, 'Which of the following Minerals is the softest on Moh\'s Hardness Scale?', 'Talc', 'Flourite', 'Quartz', 'Diamond', 'Talc', 'Diamond'),
	(10, 'What is an ore?', 'An ore is a type of igneous rock with many large inclusions or different minerals', 'An ore is a rock containing gemstones', 'An ore is a mineral or combination of minerals from which useful substances can be removed', 'Ore is another name for gold, silver, or other precious minerals', 'An ore is a mineral or combination of minerals from which useful substances can be removed', 'Ore is another name for gold, silver, or other precious minerals');
/*!40000 ALTER TABLE `quiz2` ENABLE KEYS */;

-- Dumping structure for table mineral.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
	(2, 'Alex2', '$2y$10$u77LLnKfb7/UBy2I7dHeReMxWF69hK9Xp90fcWW51Al4ccC/fkMxK', 'admin'),
	(4, 'Alex', '$2y$10$mZDPkRG2Lo2Kp6fZg4ISlu1fblA4lDxwbuByjppq6UHGJFqnob3.O', 'user'),
	(6, 'Captain', '$2y$10$p.ljURXy520vDFio2Q3aceK9ECG6ktk6mrajnDB9fFPzFrzL2dgiu', 'user'),
	(7, 'Thanhosan', '$2y$10$A3GDUjkHZHcjXfiyGCbV3.WCTzCOX.PWdSiPh6AYYh7wWG0WspLVq', 'admin'),
	(8, 'drlee', '$2y$10$B/csdpidWxpKtAH3H7o4yeTIdsOZB6mr9Dp96n7mYw3tGMH4AKs6i', 'admin'),
	(9, 'Kimberly', '$2y$10$pzSHotGY.Clp7aXiMm.YcuzbrlyoiHJuHScN1CfRXpMa8Kg8yzu2i', 'user');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for trigger mineral.mineralhome_before_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `mineralhome_before_insert` BEFORE INSERT ON `mineralhome` FOR EACH ROW BEGIN
   INSERT INTO audittable1
   ( Mineral_id,
     mname,
     DATETIMEp)
   VALUES
   ( NEW.mineral_id,
     NEW.mname,
     SYSDATE() );
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger mineral.quiz2_before_update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `quiz2_before_update` BEFORE INSERT ON `quiz2` FOR EACH ROW BEGIN
  INSERT INTO audittable2
   ( 
     user,
     DATETIMEp)
   VALUES
   ( user,
     SYSDATE() );
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
