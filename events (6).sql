-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 28 jan. 2019 à 15:54
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
-- Base de données :  `bdewebsite`
--

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`idEvents`, `owner`, `title`, `date`, `description`, `validated`, `imageLink`, `like`, `vote`, `recurent`, `payable`, `created_at`, `updated_at`) VALUES
(61, 'remipapin6@gmail.com', 'Grand Paintball', '2019-02-15', 'Partie de plaisir dans la forêt', 0, 'uploads/Ol8igmbn8h.jpg', 0, 0, 'mensuel', 5, '2019-01-28 15:09:09', '2019-01-28 15:09:09'),
(62, 'remipapin6@gmail.com', 'Karting', '2019-01-11', 'Une course endiablée', 1, 'uploads/uaopWXnR4q.jpg', 1, 0, 'annuel', 50, '2019-01-28 15:11:47', '2019-01-28 15:17:17'),
(63, 'remipapin6@gmail.com', 'Balade en Forêt', '2019-02-20', 'Découvrez le massif Armoricain', 1, 'uploads/L0lG0pbynj.jpg', 0, 0, 'annuel', 0, '2019-01-28 15:14:38', '2019-01-28 15:14:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
