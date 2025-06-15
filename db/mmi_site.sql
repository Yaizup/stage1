-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 15 juin 2025 à 17:41
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mmi_site`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `fichier` varchar(255) DEFAULT NULL,
  `fichier_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `nom`, `categorie`, `image`, `description`, `date`, `fichier`, `fichier_type`) VALUES
(29, 'kaka', 'Développement Web & Mobile', './uploads/746aebc2bd7cd6068b71b72649a97310.jpg', 'zcacazec', '2024', './uploads/fichiers/1751dfe8f962601e0ba95c7ccea54a7b.pptx', NULL),
(30, 'bzuieczc', 'Création numérique', './uploads/994c976272d498c59ecaa72917ac1365.jpg', 'il est beaeghzaodpbduizadfbezicedcezczcezczececezczczeceeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeededcecle,celc,elc,el,cel,celc,elc,ecl,ecl,ezc,ezlc', '2025', './uploads/fichiers/edb7016bd5fa62119cc59c37a214e084.zip', NULL),
(31, 'edez', 'Développement Web & Mobile', './uploads/b993b7a6f691e4c8a05aeb1e8ee782ee.jpg', 'ded', '2021', './uploads/fichiers/9acd783aba077e2cb4d5395bbf1c432b.pdf', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
