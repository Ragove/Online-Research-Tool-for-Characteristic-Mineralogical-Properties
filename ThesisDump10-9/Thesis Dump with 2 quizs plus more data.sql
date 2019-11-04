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
  `Mineral_id` int(11) NOT NULL AUTO_INCREMENT,
  `mname` char(50) DEFAULT NULL,
  `DATETIMEp` char(50) DEFAULT NULL,
  KEY `Mineral_id` (`Mineral_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.audittable1: ~8 rows (approximately)
/*!40000 ALTER TABLE `audittable1` DISABLE KEYS */;
INSERT INTO `audittable1` (`Mineral_id`, `mname`, `DATETIMEp`) VALUES
	(2, 'Sulphur', '2019-10-19 15:43:49'),
	(4, 'Citrine', '2019-10-19 15:53:27'),
	(5, 'Hematite', '2019-10-19 16:06:58'),
	(6, 'Beryl', '2019-10-19 17:09:01'),
	(7, 'Kyanite', '2019-10-19 17:17:39'),
	(8, 'Rhodonite', '2019-10-19 17:48:25'),
	(9, 'Zircon', '2019-10-19 18:37:14'),
	(10, '', '2019-10-21 21:00:03'),
	(11, '', '2019-10-21 21:05:05');
/*!40000 ALTER TABLE `audittable1` ENABLE KEYS */;

-- Dumping structure for table mineral.audittable2
CREATE TABLE IF NOT EXISTS `audittable2` (
  `useraud` char(50) DEFAULT NULL,
  `DATETIMEp` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.audittable2: ~0 rows (approximately)
/*!40000 ALTER TABLE `audittable2` DISABLE KEYS */;
INSERT INTO `audittable2` (`useraud`, `DATETIMEp`) VALUES
	('Alex2', '2019-10-21 12:09:26'),
	('Alex2', '2019-10-21 12:13:53'),
	('Captain', '2019-10-21 12:15:01'),
	('Thanhosan', '2019-10-21 12:16:47'),
	('Thanhosan', '2019-10-21 12:21:44'),
	('Alex2', '2019-10-21 12:53:10'),
	('Alex', '2019-10-21 12:54:14'),
	('Alex', '2019-10-21 12:59:10'),
	('Alex2', '2019-10-21 12:59:35'),
	('Alex2', '2019-10-21 13:00:54'),
	('Alex2', '2019-10-21 13:01:44'),
	('Alex', '2019-10-21 13:02:32'),
	('Alex2', '2019-10-21 13:05:17'),
	('Alex2', '2019-10-21 13:10:44'),
	('Alex2', '2019-10-21 13:11:15'),
	('Alex2', '2019-10-21 13:13:50'),
	('Alex2', '2019-10-21 13:14:11'),
	('Alex', '2019-10-21 13:14:26'),
	('Alex', '2019-10-21 13:15:51'),
	('Alex2', '2019-10-21 13:16:54'),
	('Alex2', '2019-10-21 13:17:23'),
	('Alex2', '2019-10-21 13:18:31'),
	('Alex2', '2019-10-21 13:18:44'),
	('Alex2', '2019-10-21 13:40:06'),
	('Alex2', '2019-10-21 13:42:32'),
	('Alex2', '2019-10-21 13:43:37'),
	('Alex2', '2019-10-21 13:45:52'),
	('Alex2', '2019-10-21 13:48:28'),
	('Alex2', '2019-10-21 14:02:59'),
	('Alex2', '2019-10-21 14:04:20'),
	('Alex2', '2019-10-21 14:04:35'),
	('Alex', '2019-10-21 16:37:23'),
	('Alex2', '2019-10-21 16:37:35'),
	('Alex2', '2019-10-21 21:02:01'),
	('Alex2', '2019-10-21 21:02:30'),
	('Alex2', '2019-10-22 12:06:57'),
	('Alex2', '2019-10-22 12:30:20'),
	('Alex2', '2019-10-22 13:17:05'),
	('Alex2', '2019-10-22 13:25:04'),
	('Alex2', '2019-10-22 13:28:15');
/*!40000 ALTER TABLE `audittable2` ENABLE KEYS */;

-- Dumping structure for table mineral.chemical
CREATE TABLE IF NOT EXISTS `chemical` (
  `Mineral_id` int(11) DEFAULT NULL,
  `Formula` char(50) DEFAULT NULL,
  `HCL` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.chemical: ~9 rows (approximately)
/*!40000 ALTER TABLE `chemical` DISABLE KEYS */;
INSERT INTO `chemical` (`Mineral_id`, `Formula`, `HCL`) VALUES
	(1, 'SiO4', 'N'),
	(2, 'Si02', 'N'),
	(3, 'S8', 'N'),
	(4, 'SIO2', 'N'),
	(5, 'Fe2O3', 'N'),
	(6, 'Be3Al2(Si6O18)', 'N'),
	(7, 'Al2(SiO4)O', 'N'),
	(8, 'Mn2+SiO3', 'N'),
	(9, 'Zr(SiO4)', 'N');
/*!40000 ALTER TABLE `chemical` ENABLE KEYS */;

-- Dumping structure for table mineral.crystal
CREATE TABLE IF NOT EXISTS `crystal` (
  `Mineral_id` int(11) DEFAULT NULL,
  `Sys` char(50) DEFAULT NULL,
  `Twin` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.crystal: ~9 rows (approximately)
/*!40000 ALTER TABLE `crystal` DISABLE KEYS */;
INSERT INTO `crystal` (`Mineral_id`, `Sys`, `Twin`) VALUES
	(1, 'Hexagonal', 'Y'),
	(2, 'Hexagonal', 'N'),
	(3, 'Orthorhombic', 'N'),
	(4, 'Trigonal', 'Y'),
	(5, 'Trigonal', 'Y'),
	(6, 'Hexagonal', 'Y'),
	(7, 'Triclinic', 'Y'),
	(8, 'Triclinic', 'Y'),
	(9, 'Tetragonal', 'Y');
/*!40000 ALTER TABLE `crystal` ENABLE KEYS */;

-- Dumping structure for table mineral.mineralhome
CREATE TABLE IF NOT EXISTS `mineralhome` (
  `Mineral_id` int(11) NOT NULL AUTO_INCREMENT,
  `mname` char(50) DEFAULT NULL,
  `des` char(254) DEFAULT NULL,
  KEY `Mineral_id` (`Mineral_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.mineralhome: ~9 rows (approximately)
/*!40000 ALTER TABLE `mineralhome` DISABLE KEYS */;
INSERT INTO `mineralhome` (`Mineral_id`, `mname`, `des`) VALUES
	(1, 'Quartz', 'A Silicon Dioxide, it is the third most common Mineral on Earth.'),
	(2, 'Amethyst', 'A variety of Vitreous Quartz, know for its violet color.'),
	(3, 'Sulphur', 'Yellow crystals that are distinguishable by their strong odor.'),
	(4, 'Citrine', 'A yellow variety of Quartz'),
	(5, 'Hematite', 'Often used for pigmentation due to its colors'),
	(6, 'Beryl', 'A mineral with many sub varieties such as Ruby, Emerald, and Aquamarine'),
	(7, 'Kyanite', 'A common metamorphic silicate Mineral'),
	(8, 'Rhodonite', 'A low temperature polymorph of Pyronmangite'),
	(9, 'Zircon', 'Widely found in metamorphic rocks as small crystals or grains.'),
	(11, '', '');
/*!40000 ALTER TABLE `mineralhome` ENABLE KEYS */;

-- Dumping structure for table mineral.optical
CREATE TABLE IF NOT EXISTS `optical` (
  `Mineral_id` int(11) DEFAULT NULL,
  `Type` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.optical: ~9 rows (approximately)
/*!40000 ALTER TABLE `optical` DISABLE KEYS */;
INSERT INTO `optical` (`Mineral_id`, `Type`) VALUES
	(1, 'Transparent'),
	(2, 'Opaque'),
	(3, 'Translucent'),
	(4, 'Translucent'),
	(5, 'Opaque'),
	(6, 'Translucent'),
	(7, 'Transparent'),
	(8, 'Transparent'),
	(9, 'Translucent');
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

-- Dumping data for table mineral.physical: ~9 rows (approximately)
/*!40000 ALTER TABLE `physical` DISABLE KEYS */;
INSERT INTO `physical` (`Mineral_id`, `Luster`, `Streak`, `Hardness`, `Color`, `Tenacity`, `Cleavage`, `Fracture`, `Density`) VALUES
	(1, 'Vitreous', 'White', '7', 'Colorless', 'Brittle', 'None', 'Conchoidal', '2.7'),
	(2, 'Vitreous', 'White', '7', 'Violet', 'Brittle', 'None', 'Conchoidal', '2.7'),
	(3, 'Resinous', 'Colourless', '2', 'Yellow', 'Brittle', 'Imperfect', 'Conchoidal', '2.07'),
	(4, 'Vitreous', 'White', '7', 'Yellow', 'Brittle', 'None', 'Conchoidal', '2.7'),
	(5, 'Metallic', 'Red', '5', 'Grey', 'Brittle', 'None', 'Subcoinchoidal', '5.26'),
	(6, 'Vitreous', 'White', '8', 'Colorless', 'Brittle', 'Imperfect', 'Conchoidal', '2.7'),
	(7, 'Vitreous', 'Colorless', '6', 'Blue', 'Brittle', 'Perfect', 'Splintery', '3.6'),
	(8, 'Vitreous', 'White', '6', 'Red', 'Brittle', 'Perfect', 'Irregular', '3.6'),
	(9, 'Adamantine', 'White', '7', 'Colourless', 'Brittle', 'Indistinct', 'Conchoidal', '4.6');
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

-- Dumping data for table mineral.quiz: ~17 rows (approximately)
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
	(10, 'Amethyst', 'Violet', 'Hardness of 7', 'White Streak', ' Pyramidal Terminations', 'Amethyst', 'Amethyst'),
	(11, 'Diamond', 'Hardness of 10', 'Made from Carbon', 'yellow, brown, colorless', 'Luster is Adamantine(Highest Possible)', 'Diamond', 'Diamond'),
	(12, 'Hematite', 'Triagonal Crystal System', 'Metallic Luster', 'Indicitive Red Streak', 'Hardness of 6', 'Hematite', 'Hematite'),
	(13, 'Garnet', 'Colorless Streak', 'Hardness of 7', 'Typically red but can be a variety of Colors', 'Isometric Crystal System', 'Garnet', 'Garnet'),
	(14, 'Kyanite', 'Typically Blue', 'Vitreous to Pearly Luster', 'Two perfect Cleavage Angles', 'Twinning', 'Kyanite', 'Kyanite'),
	(15, 'Malachite', 'Monoclinic Crystal System', 'Green Color', 'Hardness of 4', 'A minor Ore of Copper', 'Malachite', 'Malachite'),
	(16, 'Zircon', 'It is a Silicate', 'Hardness of 7.5', 'Tetragonal Crystal System', 'Colorless Streak', 'Zircon', 'Zircon'),
	(17, 'Rhodonite', 'It is a Silicate', 'Two perfect cleavage angles at 90 Degrees', 'Hardness of 5.5 to 6.5', 'Triclinic Crystal System', 'Rhodonite', 'Rhodonite');
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

-- Dumping data for table mineral.quiz2: ~10 rows (approximately)
/*!40000 ALTER TABLE `quiz2` DISABLE KEYS */;
INSERT INTO `quiz2` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
	(1, 'Which of the following minerals, when in the form of sand, can be used to manufacture glass?', 'Quartz', 'Diamond', 'Calcite', 'Gypsum', 'Quartz', 'Calcite'),
	(2, 'Which mineral is easily identified by smell?', 'Quartz', 'Sulfur', 'Galena', 'Pyrite', 'Sulfur', 'Pyrite'),
	(3, 'Which of the following minerals is more commonly known as "Fool\'s Gold"?', 'Limonite', 'Galena', 'Pyrite', 'Hematite', 'Pyrite', 'Hematite'),
	(4, 'Hydrochloric acid fizzes when it is dropped on what mineral?', 'Limestone', 'Sandstone', 'Iron', 'Calcite', 'Calcite', 'Calcite'),
	(5, 'Which property is shared by many gemstones, such as diamonds, rubies, sapphires, emeralds and topaz?', 'Ductility', 'Carbon as the primary element', 'High Specific Gravity', 'Extreme Hardness', 'Extreme Hardness', 'Extreme Hardness'),
	(6, 'Which of these mineral properties cannot be used to identify a mineral?', 'Hardness', 'Streak', 'Mass', 'Luster', 'Mass', 'Luster'),
	(7, 'Which of the follwing properties refers to the colored power resulting from rubbing a mineral against a harder surface?', 'Hardness', 'Luster', 'Cleavage', 'Streak', 'Streak', 'Cleavage'),
	(8, 'What mineral property would you be trying to determine if you had water, a balance, and a mineral?', 'Crystal Arrangement', 'Hardness', 'Specific Gravity or Density', 'Brittleness', 'Specific Gravity or Density', 'Brittleness'),
	(9, 'Which of the following Minerals is the softest on Moh\'s Hardness Scale?', 'Talc', 'Flourite', 'Quartz', 'Diamond', 'Talc', 'Diamond'),
	(10, 'What is an ore?', 'An ore is a type of igneous rock with many large inclusions or different minerals', 'An ore is a rock containing gemstones', 'An ore is a mineral or combination of minerals from which useful substances can be removed', 'Ore is another name for gold, silver, or other precious minerals', 'An ore is a mineral or combination of minerals from which useful substances can be removed', 'An ore is a mineral or combination of minerals from which useful substances can be removed');
/*!40000 ALTER TABLE `quiz2` ENABLE KEYS */;

-- Dumping structure for table mineral.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `DATETIMEp` char(50) DEFAULT NULL,
  `quizhistory` int(11) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mineral.users: ~8 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `level`, `DATETIMEp`, `quizhistory`) VALUES
	(2, 'Alex2', '$2y$10$u77LLnKfb7/UBy2I7dHeReMxWF69hK9Xp90fcWW51Al4ccC/fkMxK', 'admin', '2019-10-22 01:28:15pm', 3),
	(4, 'Alex', '$2y$10$mZDPkRG2Lo2Kp6fZg4ISlu1fblA4lDxwbuByjppq6UHGJFqnob3.O', 'user', '2019-10-21 04:37:23pm', NULL),
	(8, 'drlee', '$2y$10$B/csdpidWxpKtAH3H7o4yeTIdsOZB6mr9Dp96n7mYw3tGMH4AKs6i', 'admin', NULL, NULL),
	(9, 'Kimberly', '$2y$10$pzSHotGY.Clp7aXiMm.YcuzbrlyoiHJuHScN1CfRXpMa8Kg8yzu2i', 'user', NULL, NULL),
	(10, 'drheo', '$2y$10$11RoaUz/UOE3HNTTlRc0sutgnzEE1DolWcLGPLUtX7udVC2xSPg9y', 'user', NULL, NULL),
	(11, 'Sam', '$2y$10$h6rYNLfXS4LaSNfO8zYCnu3SgFB32SOBFkUa83lmKB6cwh1sZgmxu', 'user', NULL, NULL);
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

-- Dumping structure for trigger mineral.users_before_update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `users_before_update` BEFORE UPDATE ON `users` FOR EACH ROW BEGIN
   INSERT INTO audittable2
   ( useraud,
     DATETIMEp)
   VALUES
   ( NEW.username,
     SYSDATE() );   
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
