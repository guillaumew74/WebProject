-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 25 jan. 2019 à 09:32
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
(1, 'remi.papin@viacesi.fr', 'Sotie Bowling', '2019-01-01', 'Une sortie booling dans lyon, très conviviale avec tout le cesi.', 0, 'https://img.grouponcdn.com/deal/doH5AJw4FLmWgYhzaQp8/gG-1500x900/v1/c700x420.jpg', 0, 3, '0', 0, NULL, NULL),
(2, 'niels.boeckx@viacesi.fr', 'Sortie Ski', '2019-01-04', 'Une sortie ski organisé avec ski mania.', 0, 'https://www.serre-chevalier.com/wp-content/uploads/2011/10/lukaleroy-BD-9.jpg', 0, 2, '0', 0, NULL, NULL),
(3, 'zacharia.azzouziclausel@viacesi.fr', 'Sortie parc tête dor', '2019-01-20', 'Une sortie champètre dans le parc le plus cèlebre de lyon.', 1, 'https://www.parisinfo.com/var/otcp/sites/images/node_43/node_51/node_77884/node_77888/parc-montsouris-1-%7C-630x405-%7C-%C2%A9-otcp-marc-bertrand/16052899-1-fre-FR/Parc-Montsouris-1-%7C-630x405-%7C-%C2%A9-OTCP-Marc-Bertrand.jpg', 0, 1, '0', 0, NULL, NULL),
(4, 'remi.papin@viacesi.fr', 'Sotie Bowling', '2019-01-01', 'Une sortie booling dans lyon, très conviviale avec tout le cesi.', 0, 'https://img.grouponcdn.com/deal/doH5AJw4FLmWgYhzaQp8/gG-1500x900/v1/c700x420.jpg', 0, 3, '0', 0, NULL, NULL),
(5, 'niels.boeckx@viacesi.fr', 'Sortie Ski', '2019-01-04', 'Une sortie ski organisé avec ski mania.', 0, 'https://www.serre-chevalier.com/wp-content/uploads/2011/10/lukaleroy-BD-9.jpg', 0, 2, '0', 0, NULL, NULL),
(6, 'zacharia.azzouziclausel@viacesi.fr', 'Sortie parc tête dor', '2019-01-20', 'Une sortie champètre dans le parc le plus cèlebre de lyon.', 1, 'https://www.parisinfo.com/var/otcp/sites/images/node_43/node_51/node_77884/node_77888/parc-montsouris-1-%7C-630x405-%7C-%C2%A9-otcp-marc-bertrand/16052899-1-fre-FR/Parc-Montsouris-1-%7C-630x405-%7C-%C2%A9-OTCP-Marc-Bertrand.jpg', 0, 1, '0', 0, NULL, NULL),
(7, 'remi.papin@viacesi.fr', 'Sotie Bowling', '2019-01-01', 'Une sortie booling dans lyon, très conviviale avec tout le cesi.', 0, 'https://img.grouponcdn.com/deal/doH5AJw4FLmWgYhzaQp8/gG-1500x900/v1/c700x420.jpg', 0, 3, '0', 0, NULL, NULL),
(8, 'niels.boeckx@viacesi.fr', 'Sortie Ski', '2019-01-04', 'Une sortie ski organisé avec ski mania.', 0, 'https://www.serre-chevalier.com/wp-content/uploads/2011/10/lukaleroy-BD-9.jpg', 0, 2, '0', 0, NULL, NULL),
(9, 'zacharia.azzouziclausel@viacesi.fr', 'Sortie parc tête dor', '2019-01-20', 'Une sortie champètre dans le parc le plus cèlebre de lyon.', 0, 'https://www.parisinfo.com/var/otcp/sites/images/node_43/node_51/node_77884/node_77888/parc-montsouris-1-%7C-630x405-%7C-%C2%A9-otcp-marc-bertrand/16052899-1-fre-FR/Parc-Montsouris-1-%7C-630x405-%7C-%C2%A9-OTCP-Marc-Bertrand.jpg', 0, 1, '0', 0, NULL, NULL),
(10, 'guillaume.woreth@viacesi.fr', 'Soirée fondue', '2019-02-12', 'Soirée fromage et raclette dans un bouchon lyonnais très agrèable.', 1, 'uploads/test.png', 4, 10, '0', 0, NULL, '2019-01-22 13:18:14'),
(11, 'tblanc@cesi.fr', 'Sortie pédagogique', '2019-03-15', 'Sortie pédagogique a eurexpo au mondiale des metiers.', 1, 'https://www.digischool.fr/images/article/5-conseils-pour-reussir-un-changement-d-orientation-lg-4776.jpg', 1, 12, '0', 0, NULL, NULL),
(12, 'remi.papin@viacesi.fr', 'Soirée centrale', '2019-05-10', 'Soirée étudiante sur le campus avec tous les èleves de centrale etc...', 1, 'https://www.opitrip.com/blog/wp-content/uploads/fete-777x437.jpg', 3, 1, '0', 0, NULL, '2019-01-24 08:14:25'),
(13, 'niels.boeckx@viacesi.fr', 'Maks club', '2019-11-10', 'Soirée étudiante de folie au meilleur club de lyon, attention sortez vos plus beau soulier.', 0, 'https://www.opitrip.com/blog/wp-content/uploads/fete-777x437.jpg', 0, 22, '0', 0, NULL, '2019-01-22 15:16:22'),
(14, 'zacharia.azzouziclausel@viacesi.fr', 'Sortie java', '2019-03-04', 'Sortie sur les designes patternes les plus celebres et quelque implémentations dans des réalisations simples.', 1, 'https://upload.wikimedia.org/wikipedia/fr/thumb/2/2e/Java_Logo.svg/220px-Java_Logo.svg.png', 5, 30, '0', 0, NULL, '2019-01-22 15:16:45'),
(15, 'guillaume.woreth@viacesi.fr', 'Sortie PHP', '2019-04-04', 'Sortie sur la réalisation dun site web en php avec laravel, boostrap et jquerry.', 1, 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png', 0, 100, '0', 0, NULL, NULL),
(18, 'remipapin6@gmail.com', 'Sortie groupe', '2019-01-26', 'LA sortie du groupe', 0, 'uploads/SJdCCjfURw.png', 9, 0, '0', 0, '2019-01-22 08:50:27', '2019-01-22 13:06:13'),
(19, 'remipapin6@gmail.com', 'L\'event', '2019-01-04', 'of the year', 0, 'uploads/T0Lp9pdXJb.png', 0, 4, '0', 0, '2019-01-22 13:26:09', '2019-01-22 15:15:54'),
(20, 'remipapin6@gmail.com', 'Event de chloé', '2019-01-18', 'C\'est l\'event de chloé', 1, 'uploads/hVS0APBc4o.png', 4, 1, '0', 0, '2019-01-22 15:59:32', '2019-01-24 07:03:21'),
(28, 'remipapin6@gmail.com', 'ttfhtfhy', '2019-01-10', 'tfhtrhtrhyd', 0, 'uploads/fwemMYE1pR.png', 0, 0, 'mensuel', 2, '2019-01-25 06:37:26', '2019-01-25 06:37:26'),
(26, 'remipapin6@gmail.com', 'ddccdcd', '2019-01-11', 'cddcscsd', 0, 'uploads/MxUl7Zim3Z.png', 0, 0, 'mensuel', 0, '2019-01-24 16:33:35', '2019-01-24 16:33:35'),
(27, 'remipapin6@gmail.com', 'Rémi PAPIN', '2019-01-19', 'eeffsef', 0, 'uploads/ZsL09kohs7.png', 0, 0, 'quotidien', 55, '2019-01-24 16:40:33', '2019-01-24 16:40:33'),
(29, 'remipapin6@gmail.com', 'rgrzfrqezgf', '2019-01-12', 'rfqegreqegr', 0, 'uploads/xuWJHgSyW4.png', 0, 0, 'mensuel', 56, '2019-01-25 06:40:49', '2019-01-25 06:40:49'),
(30, 'remipapin6@gmail.com', 'fdfdfv', '2019-01-12', 'ffdvfvd', 0, 'uploads/ZCK3T71wQt.jpg', 0, 0, '0', 2, '2019-01-25 06:56:36', '2019-01-25 06:56:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
