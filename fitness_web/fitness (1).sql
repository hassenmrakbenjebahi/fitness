-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 26 nov. 2021 à 18:01
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fitness`
--

-- --------------------------------------------------------

--
-- Structure de la table `ask`
--

DROP TABLE IF EXISTS `ask`;
CREATE TABLE IF NOT EXISTS `ask` (
  `id_ask` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(20) COLLATE utf8_bin NOT NULL,
  `message` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_ask`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `ask`
--

INSERT INTO `ask` (`id_ask`, `name`, `email`, `message`) VALUES
(1, 'vfcxbfd', 'hassen@hgfd.com', 'dddcxw'),
(2, 'vfcxbfd', 'hassen@hgfd.com', 'dddcxw'),
(3, 'vfcxbfd', 'hassen@hgfd.com', 'dddcxw'),
(4, 'vfcxbfd', 'hassen@hgfd.com', 'dddcxw'),
(5, 'vfcxbfd', 'hassen@hgfd.com', 'dddcxw'),
(6, 'vfcxbfd', 'hassen@hgfd.com', 'dddcxw');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `id_cl` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `description` varchar(100) COLLATE utf8_bin NOT NULL,
  `price` int(11) NOT NULL,
  `picture_cl` varchar(25) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_cl`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`id_cl`, `name`, `description`, `price`, `picture_cl`) VALUES
(1, 'yoga', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 50, 'yoga-class.jpg'),
(2, 'areobic', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 66, 'crossfit-class.jpg'),
(3, 'cardio', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 75, 'cardio-class.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `gym`
--

DROP TABLE IF EXISTS `gym`;
CREATE TABLE IF NOT EXISTS `gym` (
  `id_gym` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `description1` varchar(100) COLLATE utf8_bin NOT NULL,
  `description2` varchar(100) COLLATE utf8_bin NOT NULL,
  `adress` varchar(70) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `facebook` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `instagram` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `twitter` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `tel` varchar(12) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_gym`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `gym`
--

INSERT INTO `gym` (`id_gym`, `name`, `description1`, `description2`, `adress`, `email`, `facebook`, `instagram`, `twitter`, `tel`) VALUES
(1, 'Gymso Fitness', 'UPGRADE YOUR BODY AT GYMSO FITNESS', 'You are NOT allowed to redistribute this HTML template downloadable ZIP file on any template collect', ' 120-240 Rio de Janeiro - State of Rio de Janeiro, Brazil', ' hello@company.co', 'tooplate', '', '', ' 010-020-084');

-- --------------------------------------------------------

--
-- Structure de la table `membership`
--

DROP TABLE IF EXISTS `membership`;
CREATE TABLE IF NOT EXISTS `membership` (
  `id_mb` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `tel` varchar(20) COLLATE utf8_bin NOT NULL,
  `message` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_mb`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `membership`
--

INSERT INTO `membership` (`id_mb`, `name`, `email`, `tel`, `message`) VALUES
(1, 'vfcxbfd', 'hassen@hgfd.com', '123-123-1234', '0'),
(2, 'vfcxbfd', 'hassen@hgfd.com', '123-123-1234', 'ddddd');

-- --------------------------------------------------------

--
-- Structure de la table `schedules`
--

DROP TABLE IF EXISTS `schedules`;
CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(50) COLLATE utf8_bin NOT NULL,
  `s1` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `s2` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `s3` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `s4` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `schedules`
--

INSERT INTO `schedules` (`id`, `day`, `s1`, `s2`, `s3`, `s4`) VALUES
(1, 'MON', 'Cardio', NULL, NULL, 'Boxing'),
(2, 'TUE', 'Power fitness', NULL, 'Boxing', 'Power lifting'),
(3, 'WED', NULL, 'Boxing', 'Areobic', NULL),
(4, 'THU', NULL, 'Areobic', NULL, 'Cardio'),
(5, 'FRI', 'Yoga Section', NULL, 'Body Work', NULL),
(6, 'SAT', NULL, 'Cardio', NULL, 'Crossfit');

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id_tm` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(20) COLLATE utf8_bin NOT NULL,
  `picture` varchar(20) COLLATE utf8_bin NOT NULL,
  `facebook` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `instagram` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `id_class` int(11) NOT NULL,
  PRIMARY KEY (`id_tm`),
  KEY `id_class` (`id_class`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `team`
--

INSERT INTO `team` (`id_tm`, `firstname`, `lastname`, `picture`, `facebook`, `instagram`, `id_class`) VALUES
(1, 'mary', 'yan', 'team-image.jpg', NULL, NULL, 1),
(2, 'catherina', '', 'team-image01.jpg', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `working_hours`
--

DROP TABLE IF EXISTS `working_hours`;
CREATE TABLE IF NOT EXISTS `working_hours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(20) COLLATE utf8_bin NOT NULL,
  `opening_time` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `closing_time` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `close` tinyint(1) NOT NULL,
  `special_time` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `working_hours`
--

INSERT INTO `working_hours` (`id`, `day`, `opening_time`, `closing_time`, `close`, `special_time`) VALUES
(1, 'monday', '7:00 AM', '10:00 PM', 0, 0),
(2, 'tuesday', '7:00 AM', '10:00 PM', 0, 0),
(3, 'wednesday', '7:00 AM', '10:00 PM', 0, 0),
(4, 'Thursday', '7:00 AM', '10:00 PM', 0, 0),
(5, 'friday', '7:00 AM', '10:00 PM', 0, 0),
(6, 'saturday', '6:00 AM', '4:00 PM', 0, 1),
(7, 'sunday', '', '', 1, 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`id_class`) REFERENCES `classe` (`id_cl`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
