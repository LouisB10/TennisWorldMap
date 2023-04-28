-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 27 avr. 2023 à 12:31
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tennisworldmap`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_profile`
--

DROP TABLE IF EXISTS `admin_profile`;
CREATE TABLE IF NOT EXISTS `admin_profile` (
  `admin_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admin_profile`
--
INSERT INTO `admin_profile` (`admin_id`, `admin_password`) VALUES
('louisb10', 'tennis10');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_envoi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type_message` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `nom`, `prenom`, `email`, `message`, `date_envoi`, `type_message`) VALUES
(11, 'zdzd', 'azefdadz', 'exzelfkz@mefoz.fr', 'azdadzadadaaeaeaezeaeaeaz', '2023-04-17 19:58:35', 2),
(8, 'exemple', 'exemple', 'adresse@exemple.fr', 'azdazddzaeae', '2023-04-12 14:18:35', 3),
(9, 'exemple', 'exemlpe', 'edxmele@mail.com', 'message supprimé', '2023-04-12 15:34:45', 3),
(1, 'Dupont', 'Jean', 'jean.dupont@email.com', 'Bonjour, je voulais savoir si vous aviez des offres promotionnelles en cours ?', '2023-04-12 15:15:40', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
