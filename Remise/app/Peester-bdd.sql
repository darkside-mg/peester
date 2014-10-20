-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 19 Octobre 2014 à 14:06
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `thsking`
--

-- --------------------------------------------------------

--
-- Structure de la table `probleme`
--

CREATE TABLE IF NOT EXISTS `probleme` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Element` varchar(50) NOT NULL,
  `Conseil` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `probleme`
--

INSERT INTO `probleme` (`ID`, `Element`, `Conseil`) VALUES
(1, 'proteine', 'Votre taux de prot&eacute;ines est trop &eacute;lev&eacute;.\r\n\r\nNe consommez pas trop de viande et de poisson.\r\n\r\nPrivil&eacute;giez les fruits et l&eacute;gumes.'),
(2, 'calcium', 'Votre taux de calcium est trop &eacute;lev&eacute;.\r\n\r\nAtt&eacute;nuez votre consommation de produits laitiers.'),
(3, 'glucose', 'Votre taux de glucose est insusant.\r\n\r\nIl est conseill&eacute; de prendre un bon petit d&eacute;jeuner\r\n\r\nriche en sucres lents ( c&eacute;r&eacute;ales, pain ... ) an de maintenir\r\n\r\nle taux de sucre dans le sang.'),
(4, 'sodium', 'Taux de sodium trop &eacute;lev&eacute;.\r\n\r\n&Eacute;vitez les plats trop sal&eacute;s. Privil&eacute;giez les fruits\r\n\r\net l&eacute;gumes. Un exc&egrave;s de sodium peut provoquer \r\n\r\nde l&rsquo;hypertension art&eacute;rielle.'),
(5, 'potassium', 'Taux de potassium trop &eacute;lev&eacute;.\r\n\r\nCela peut &ecirc;tre d&ucirc; &agrave; une insusance r&eacute;nale.\r\n\r\nIl est conseill&eacute; de consulter votre m&eacute;decin.'),
(6, 'hematies', 'Une pr&eacute;sence de sang a &eacute;t&eacute; d&eacute;tect&eacute;e dans vos urines.\r\n\r\nIl est conseill&eacute; de consulter votre m&eacute;decin.'),
(7, 'uree', 'Votre taux d&rsquo;ur&eacute;e indique des valeurs anormales.\r\n\r\nIl pourrait indiquer une insusance r&eacute;nale.\r\n\r\nN&rsquo;h&eacute;sitez pas &agrave; consulter votre m&eacute;decin.'),
(8, 'creatine', 'Votre taux de cr&eacute;atine est trop faible.\r\n\r\nCela pourrait &ecirc;tre d&ucirc; &agrave; un probl&egrave;me au niveau des reins.\r\n\r\nN&rsquo;h&eacute;sitez pas &agrave; consulter votre m&eacute;decin.'),
(9, 'ethanol', 'Votre taux d&rsquo;&eacute;thanol est anormalement &eacute;lev&eacute;.\r\n\r\nUne consommation excessive d&rsquo;alcool peut &ecirc;tre \r\n\r\ndangerause pour la sant&eacute;. N&rsquo;h&eacute;sitez pas &agrave; consulter \r\n\r\nvotre m&eacute;decin'),
(10, 'albumine', 'Votre taux d&rsquo;albumine est trop faible.\r\n\r\nCela peut &ecirc;tre une des cons&eacute;quences de la malnutrition.\r\n\r\nPrivil&eacute;giez une alimentation &eacute;quilibr&eacute;e et n&rsquo;h&eacute;sitez pas &agrave; consulter \r\n\r\nvotre m&eacute;decin si le probl&egrave;me persiste.');

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

CREATE TABLE IF NOT EXISTS `rapport` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Timestamp` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `IP` varchar(50) NOT NULL,
  `Resume` text NOT NULL,
  `Conseil` text NOT NULL,
  `Lieu` varchar(100) NOT NULL,
  `Proteine` varchar(25) NOT NULL,
  `Calcium` varchar(25) NOT NULL,
  `Glucose` varchar(25) NOT NULL,
  `Sodium` varchar(25) NOT NULL,
  `Potassium` varchar(25) NOT NULL,
  `Hematies` varchar(25) NOT NULL,
  `Uree` varchar(25) NOT NULL,
  `Creatine` varchar(25) NOT NULL,
  `Ethanol` varchar(25) NOT NULL,
  `Albumine` varchar(25) NOT NULL,
  `HCG` varchar(25) NOT NULL,
  `Vu` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `rapport`
--

INSERT INTO `rapport` (`ID`, `Timestamp`, `User`, `IP`, `Resume`, `Conseil`, `Lieu`, `Proteine`, `Calcium`, `Glucose`, `Sodium`, `Potassium`, `Hematies`, `Uree`, `Creatine`, `Ethanol`, `Albumine`, `HCG`, `Vu`) VALUES
(22, 1413373433, 'Guest', '127.0.0.1', 'uree', 'uree', 'Mars', '0.43', '260', '0.8', '4', '3', '8275', '37', '1.4', '1.3', '4.8', '11', 0),
(23, 1413373455, 'Guest', '127.0.0.1', 'calcium', 'calcium', 'Mars', '0.12', '327', '0.9', '2', '2', '9851', '8', '1.3', '1.2', '3.9', '9', 0),
(24, 1413373638, 'Guest', '127.0.0.1', 'potassium', 'potassium', 'Mars', '0.33', '131', '0.8', '3', '5', '10433', '15', '1', '1.5', '5.1', '8', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
