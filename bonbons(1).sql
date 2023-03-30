-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 04 mars 2020 à 13:29
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bonbons`
--

create database bonbonsdav ;
use bonbonsdav ;


--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE latin1_bin NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `photo` varchar(30) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `photo`) VALUES
(1, 'bananes', '0.48', 'bananes.jpg'),
(2, 'chamallow', '0.48', 'chamallow.jpg'),
(3, 'coca', '0.48', 'coca.jpg'),
(4, 'colorado', '0.48', 'colorado.jpg'),
(6, 'dragolo', '0.48', 'dragolo.jpg'),
(7, 'world', '0.48', 'world.jpg'),
(8, 'happy', '0.48', 'happy.jpg'),
(9, 'melange', '0.48', 'melange.jpg'),
(10, 'miami', '0.48', 'miami.jpg'),
(11, 'nounours', '0.48', 'nounours.jpg'),
(12, 'oeufs', '0.48', 'oeufs.jpg'),
(13, 'rainbow', '0.48', 'rainbow.jpg'),
(14, 'shtroumpf', '0.48', 'shtroumpf.jpg'),
(15, 'frites', '0.45', 'frites.jpg');
COMMIT;
--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `mdp`) VALUES
(1, 'root', '63a9f0ea7bb98050796b649e85481845');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
