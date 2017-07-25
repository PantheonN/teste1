-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.2.3-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for base1
DROP DATABASE IF EXISTS `base1`;
CREATE DATABASE IF NOT EXISTS `base1` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `base1`;

-- Dumping structure for table base1.farmacia
DROP TABLE IF EXISTS `farmacia`;
CREATE TABLE IF NOT EXISTS `farmacia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  `quantidade` smallint(5) NOT NULL DEFAULT 0,
  `farmaceutica` varchar(50) NOT NULL DEFAULT '0',
  `custo` double NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table base1.farmacia: ~1 rows (approximately)
/*!40000 ALTER TABLE `farmacia` DISABLE KEYS */;
INSERT INTO `farmacia` (`id`, `nome`, `quantidade`, `farmaceutica`, `custo`) VALUES
	(1, 'med1', 53, 'windows', 2.99);
/*!40000 ALTER TABLE `farmacia` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
