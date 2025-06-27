-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 27 juin 2025 à 16:42
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
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID_admin` int(11) NOT NULL,
  `Num_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID_admin`, `Num_admin`) VALUES
(1, '0767499574');

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`) VALUES
(3),
(6);

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id`) VALUES
(3),
(9),
(21);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `date_comment` datetime NOT NULL,
  `commentaire` varchar(500) DEFAULT NULL,
  `reaction` int(11) NOT NULL,
  `idM` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `concerne`
--

CREATE TABLE `concerne` (
  `idM` int(11) NOT NULL,
  `idR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `concerne`
--

INSERT INTO `concerne` (`idM`, `idR`) VALUES
(1, 27),
(1, 32),
(1, 48),
(2, 33),
(3, 45),
(5, 29),
(7, 46),
(7, 47),
(8, 28);

-- --------------------------------------------------------

--
-- Structure de la table `concerne_salle`
--

CREATE TABLE `concerne_salle` (
  `idS` int(11) NOT NULL,
  `idR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `concerne_salle`
--

INSERT INTO `concerne_salle` (`idS`, `idR`) VALUES
(1, 26),
(1, 43),
(2, 25);

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id`) VALUES
(2),
(3),
(22);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `numeroEtudiant` varchar(50) DEFAULT NULL,
  `grpTP_TD_Promo` varchar(50) DEFAULT NULL,
  `promotion` varchar(50) NOT NULL,
  `td` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `numeroEtudiant`, `grpTP_TD_Promo`, `promotion`, `td`) VALUES
(1, '729321', NULL, 'MMI - 1', 'TD - 2'),
(2, 'E20251002', NULL, 'MMI - 1', 'TD - 1'),
(7, NULL, NULL, 'MMI - 1', 'TD - 2'),
(8, NULL, NULL, 'MMI - 2', 'TD - 1'),
(10, NULL, NULL, 'MMI - 2', 'TD - 1'),
(11, NULL, NULL, 'MMI - 3', 'TD - 2'),
(20, NULL, NULL, 'MMI - 3', 'TD - 1');

-- --------------------------------------------------------

--
-- Structure de la table `favori_materiel`
--

CREATE TABLE `favori_materiel` (
  `id` int(11) NOT NULL,
  `idM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `favori_materiel`
--

INSERT INTO `favori_materiel` (`id`, `idM`) VALUES
(1, 1),
(3, 1),
(20, 7);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `date_naissance` date NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `prenom`, `nom`, `role`, `pseudo`, `telephone`, `date_naissance`, `mot_de_passe`, `email`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '', '2025-06-11', '$2y$10$KG6bdzCeZrFZjWIzQQHLB.btdFVap7bKtUBp0tkcUEhPfdS08ikSG', 'nchupin06@gmail.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE `materiel` (
  `idM` int(11) NOT NULL,
  `refernceM` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `typeM` varchar(50) DEFAULT NULL,
  `dateAchat` date DEFAULT NULL,
  `etat` varchar(50) DEFAULT NULL,
  `quantité` int(11) DEFAULT NULL,
  `descriptif` varchar(200) DEFAULT NULL,
  `lien_demo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `materiel`
--

INSERT INTO `materiel` (`idM`, `refernceM`, `designation`, `photo`, `typeM`, `dateAchat`, `etat`, `quantité`, `descriptif`, `lien_demo`) VALUES
(1, 'REF001', 'Trépied Benro Kit', '20230505_110146.jpg', 'Accessoire', '0000-00-00', 'Bon état', 1, 'Trépied léger et stable pour prises de vue pro.', 'rien'),
(2, 'REF002', 'Caméra 360° Ricoh Theta M15', 'P1018481.JPG', 'Vidéo', '2023-02-01', 'Bon état', 2, 'Caméra 360° compacte pour vidéo immersive.', NULL),
(3, 'REF003', 'Casque SteelSeries Arctis Pro', 'P1018474.JPG', 'Audio', '2023-03-05', 'Très bon état', 4, 'Casque gaming de haute qualité.', NULL),
(4, 'REF004', 'Drone DJI Tello', 'P1018445.JPG', 'Drone', '2023-03-15', 'Très bon état', 2, 'Mini drone idéal pour débutants.', NULL),
(5, 'REF005', 'GoPro Max', '20230505_105927.jpg', 'Vidéo', '2023-04-01', 'Très bon état', 1, 'Caméra 360° GoPro pour captations immersives.', NULL),
(6, 'REF006', 'HTC Vive Focus 3 - Casque + Manettes', 'P1018553.JPG', 'VR', '2023-04-20', 'Excellent état', 2, 'Casque VR pro avec manettes incluses.', NULL),
(7, 'REF007', 'Webcam Logitech BRIO 4K', 'P1018493.JPG', 'Vidéo', '2023-05-01', 'Très bon état', 3, 'Webcam 4K pour streaming ou visio.', NULL),
(8, 'REF008', 'Manette MSI Force GC30 V2', 'P1018509.JPG', 'Accessoire', '2023-05-10', 'Bon état', 5, 'Manette sans fil pour gaming.', NULL),
(9, 'REF009', 'Meta Quest 2 - Casque + Manettes + Câble', 'IMG_0007.JPG', 'Accessoire', '2025-06-06', 'Bon état', 2, 'Pack VR complet avec casque, manettes et câble Link.', 'rien'),
(10, 'REF010', 'Micro HyperX QuadCast', '20230505_100306.jpg', 'Audio', '2023-05-17', 'Très bon état', 3, 'Micro USB de qualité studio avec support intégré.', NULL),
(11, 'REF011', 'Microsoft Hololens 2', 'P1018521.JPG', 'AR/VR', '2023-05-20', 'Très bon état', 1, 'Casque de réalité mixte autonome.', NULL),
(12, 'REF012', 'Samsung Galaxy Tab A', 'P1018472.JPG', 'Tablette', '2023-05-22', 'Bon état', 3, 'Tablette polyvalente pour navigation et app.', NULL),
(13, 'REF013', 'Support Tablette', 'P1018485.JPG', 'Accessoire', '2023-05-23', 'Bon état', 4, 'Support ajustable compatible avec toutes tablettes.', NULL),
(14, 'REF014', 'Tablette Graphique Wacom One', 'P1018499.JPG', 'Graphisme', '2023-05-23', 'Très bon état', 2, 'Tablette graphique avec stylet pour illustration.', NULL),
(15, 'REF015', 'Trépied Mantona SG-350', 'P1018449.JPG', 'Accessoire', '2023-05-24', 'Très bon état', 2, 'Trépied robuste pour photo/vidéo.', NULL),
(16, 'REF016', 'Vidéoprojecteur EPSON EMP 6110 - XGA', '20230505_104109.jpg', 'Vidéo', '2023-05-25', 'Bon état', 1, 'Vidéoprojecteur XGA performant pour présentations.', NULL),
(17, 'REF017', 'Câble Vive Pro Link', 'P1018496.JPG', 'Accessoire', '2023-05-25', 'Très bon état', 2, 'Câble officiel pour casque Vive Pro.', NULL),
(22, 'REF000022', 'Unknown', '20230505_105442.jpg', 'Accessoire', '2025-06-13', 'Très bon état', 3, 'si ça marche cest bien sinon bah', 'rien');

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `notif` int(11) NOT NULL,
  `idR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`notif`, `idR`) VALUES
(1, 48);

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
  `auteurs` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `promo` varchar(50) DEFAULT NULL,
  `drive` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `nom`, `categorie`, `image`, `description`, `date`, `auteurs`, `video`, `promo`, `drive`) VALUES
(98, 'test infographie', 'infographie', './uploads/3a4f748b50393dd7d8d7d57b9596fa47.jpg', 'ceci est un test pour l\'infographie', '2023', 'Benzema ', 'https://www.youtube.com/watch?v=FYXJ1pBgkhY', 'MM1', 'https://docs.google.com/document/d/1KrGDEZpjS7K8feG5hY9X_5suNgJkPqO2jLpi8DCteEI/edit?usp=sharing'),
(99, 'un projet en herbe', 'Communication numérique', './uploads/8efadae0af4f389f4db23fc3c84b43b8.jpg', 'ceci de', '2024', 'skibidi', 'https://www.youtube.com/watch?v=FYXJ1pBgkhY', 'MMI3', 'https://docs.google.com/document/d/1KrGDEZpjS7K8feG5hY9X_5suNgJkPqO2jLpi8DCteEI/edit?usp=sharing');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `idR` int(11) NOT NULL,
  `quantite` int(11) NOT NULL DEFAULT 1,
  `date_demande` datetime NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `valide` int(11) DEFAULT NULL,
  `motif` varchar(100) DEFAULT NULL,
  `commentaires` varchar(50) DEFAULT NULL,
  `signatureElectronique` varchar(50) DEFAULT NULL,
  `documentAdministrateur` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`idR`, `quantite`, `date_demande`, `date_debut`, `date_fin`, `valide`, `motif`, `commentaires`, `signatureElectronique`, `documentAdministrateur`) VALUES
(25, 1, '2025-06-08 14:00:00', '2025-06-22 14:00:00', '2025-06-22 16:00:00', 3, 'essaie de sale212', 'rien', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAnYA', 'rien'),
(26, 1, '2025-06-09 14:01:00', '2025-07-05 14:00:00', '2025-07-05 16:00:00', 3, 'essaie maison', 'rien', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAnYA', 'rien'),
(27, 1, '2025-06-09 18:30:00', '2025-06-25 14:00:00', '2025-06-25 16:00:00', 3, ' sfsfddf', 'rien', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAnYA', 'rien'),
(28, 1, '2025-06-10 20:06:00', '2025-06-25 16:00:00', '2025-06-25 18:00:00', 3, 'manette pour une partie de FC pendant pause', 'rien', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAnYA', 'rien'),
(29, 1, '2025-06-12 20:07:00', '2025-08-15 16:00:00', '2025-08-15 18:00:00', 3, 'admin', 'rien', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAnYA', 'rien'),
(32, 1, '2025-06-12 21:46:00', '2025-06-03 12:00:00', '2025-06-03 14:00:00', 3, 'oùpùù', 'rien', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAnYA', 'rien'),
(33, 1, '2025-06-15 18:07:00', '2025-06-06 12:00:00', '2025-06-06 14:00:00', 3, 'diaba', 'rien', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAnYA', 'rien'),
(43, 1, '2025-06-23 13:36:00', '2025-06-13 08:00:00', '2025-06-13 09:00:00', 3, 'ha ha ha', 'rien', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAf4A', 'rien'),
(45, 1, '2025-06-23 10:00:00', '2025-06-18 08:00:00', '2025-06-18 09:00:00', 3, 'MAIL TEST', 'Tu peux récupérer dans la salle 138', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwA', 'rien'),
(46, 1, '2025-06-23 14:00:00', '2025-06-27 08:00:00', '2025-06-27 09:00:00', 1, 'blocage', '', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwA', 'rien'),
(47, 1, '2025-06-24 15:00:00', '2025-06-27 14:00:00', '2025-06-27 15:00:00', 2, 'blocbloc', '', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwA', 'rien'),
(48, 1, '0000-00-00 00:00:00', '2025-06-26 10:00:00', '2025-06-26 12:00:00', 0, '(ryyy', 'rien', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwA', 'rien');

-- --------------------------------------------------------

--
-- Structure de la table `reservation_users`
--

CREATE TABLE `reservation_users` (
  `id` int(11) NOT NULL,
  `idR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation_users`
--

INSERT INTO `reservation_users` (`id`, `idR`) VALUES
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(2, 28),
(2, 29),
(2, 32),
(2, 33),
(3, 25),
(3, 48),
(7, 28),
(8, 27),
(8, 43),
(10, 29),
(11, 25),
(11, 27),
(11, 28),
(11, 29),
(20, 27),
(20, 28),
(20, 45),
(20, 46),
(20, 47);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `idS` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `capacite` int(11) DEFAULT NULL,
  `nb_pc` int(11) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `etat` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`idS`, `nom`, `type`, `capacite`, `nb_pc`, `photo`, `etat`, `description`) VALUES
(1, 'Salle 138', 'Projets - Jeux', 6, 2, 'Salle138.JPG', 'Disponible', 'Salle réservable pour des projets ou des séance de gaming. Utilisée en fin d\'année scolaire par les stagiaires.'),
(2, 'Salle 212', 'VR - Jeux', 16, 8, 'Salle212.jpg', 'Disponible', 'Salle réservable pour des projets de réalité virtuelle ou des séance de gaming');

-- --------------------------------------------------------

--
-- Structure de la table `user_`
--

CREATE TABLE `user_` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pseudo` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `Date_de_naissance` date DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `mot_de_passe` varchar(100) DEFAULT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  `date_inscription` date DEFAULT current_timestamp(),
  `valable` tinyint(1) DEFAULT 0,
  `telephone` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user_`
--

INSERT INTO `user_` (`id`, `email`, `pseudo`, `nom`, `prenom`, `Date_de_naissance`, `adresse`, `mot_de_passe`, `avatar`, `date_inscription`, `valable`, `telephone`) VALUES
(1, 'alice@gmail.com', 'alice123', 'Durand', 'Alice', '2002-04-21', '10 rue des Lilas', '$2y$10$bISacBmroN12XLHhWX3UDuxVImF1Mq/vUSCYfnAoHkwn40mbc3qRG', '../uploads/avatars/1.png', '2025-04-26', 1, 123456788),
(2, 'bob@gmail.com', 'bobby', 'Martin', 'Bob', '2001-09-15', '25 avenue Victor Hugo', '$2y$10$F6u4vWUFWO.K2Ocw8CbRAO9WS7vluMC2MGe6VHLgEBpYBuzChbUYO', '../uploads/avatars/2.jpg', '2025-04-26', 1, 123456789),
(3, 'clara@gmail.com', 'clarou', 'Lemoines', 'Clara', '2003-01-30', '3 place de la République', '$2y$10$F6u4vWUFWO.K2Ocw8CbRAO9WS7vluMC2MGe6VHLgEBpYBuzChbUYO', '../uploads/avatars/3.jpg', '2025-04-26', 1, 123456789),
(6, 'janviercharly@gmail.com', 'charly.janvier', 'janvier', 'charly', NULL, NULL, '$2y$10$F6u4vWUFWO.K2Ocw8CbRAO9WS7vluMC2MGe6VHLgEBpYBuzChbUYO', NULL, '2025-05-15', 1, NULL),
(7, 'emma.tesla@gmail.com', 'emmat', 'Tesla', 'Emma', '2000-07-10', '42 boulevard Voltaire', '$2y$10$F6u4vWUFWO.K2Ocw8CbRAO9WS7vluMC2MGe6VHLgEBpYBuzChbUYO', NULL, '2025-05-22', 1, 612345678),
(8, 'leo.dupont@yahoo.fr', 'leoleo', 'Dupont', 'Léo', '1999-02-20', '15 rue Lafayette', '$2y$10$F6u4vWUFWO.K2Ocw8CbRAO9WS7vluMC2MGe6VHLgEBpYBuzChbUYO', NULL, '2025-05-22', 1, 698765432),
(9, 'jade.martin@outlook.fr', 'jadem', 'Martin', 'Jade', '2002-12-03', '8 chemin des Vignes', '$2y$10$F6u4vWUFWO.K2Ocw8CbRAO9WS7vluMC2MGe6VHLgEBpYBuzChbUYO', NULL, '2025-05-22', 1, 678432198),
(10, 'samuel.khan@protonmail.com', 'samk', 'Khan', 'Samuel', '2001-05-17', '29 rue du Commerce', '$2y$10$F6u4vWUFWO.K2Ocw8CbRAO9WS7vluMC2MGe6VHLgEBpYBuzChbUYO', NULL, '2025-05-22', 1, 654321897),
(11, 'lina.rossi@gmail.com', 'lina_r', 'Rossi', 'Lina', '2004-09-09', '77 rue des Écoles', '$2y$10$F6u4vWUFWO.K2Ocw8CbRAO9WS7vluMC2MGe6VHLgEBpYBuzChbUYO', NULL, '2025-05-22', 1, 623456789),
(15, 'ssdfsdf@gmail.com', 'sdfsdf.sdfqsdf', 'sdfqsdf', 'sdfsdf', '2025-05-10', '2, Allée de la Marne', '$2y$10$F6u4vWUFWO.K2Ocw8CbRAO9WS7vluMC2MGe6VHLgEBpYBuzChbUYO', NULL, '2025-05-24', 0, NULL),
(16, 'janviercharlyAZEAZE@gmail.com', 'azeaze.azeaze', 'AZEAZE', 'AZEAZE', '2025-05-25', '2, Allée de la Marne', '$2y$10$KFwvK9AK91Z5s.7b2PkRoO7GHEKgdSStGiOyI/KksdcV8SAl50mw.', NULL, '2025-05-25', 0, NULL),
(17, 'TEST@test.test', 'test.test', 'TEST', 'TEST', '2025-05-25', '', '$2y$10$GH0H1vsxF0GPxxKzjOgpD.vOnoF6yHQTgwJ9bO3WcQv7yi/Nava3W', NULL, '2025-05-25', 0, NULL),
(18, 'diabasamoura@gmail.cm', 'marta.stewart', 'Stewart', 'Marta', '2009-06-05', 'ggrr', '$2y$10$IZfJCgd9mjtb8YZT2MwJWeAa2yHiJrnM2ByFdDvwza19t/sHxjrT2', NULL, '2025-06-05', 0, NULL),
(20, 'diabasamoura@gmail.com', 'diaba.samoura', 'Samoura', 'Diaba', '2009-06-04', 'ggrr', '$2y$10$X61Qjul2osAACQPdSdLbAeZ07IlyU3Fn3Jvb8sqOtWO4kvTClz0aG', NULL, '2025-06-05', 1, NULL),
(21, 'agent@mail.com', 'agent.agent', 'Agent', 'agent', '1985-02-14', '1 rue du puit', '$2y$10$IKKYOdZW/Tx7859V4km.D.zJ8YxtOZkel8Wn6jHw0q29b3fnZ0Ury', NULL, '2025-06-16', 1, NULL),
(22, 'diaba.samoura@hotmail.com', 'melodie.Stewart', 'Stewart', 'melodie', NULL, NULL, 'blablabla', NULL, '2025-06-18', 1, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_admin`);

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idM` (`idM`);

--
-- Index pour la table `concerne`
--
ALTER TABLE `concerne`
  ADD PRIMARY KEY (`idM`,`idR`),
  ADD KEY `idR` (`idR`);

--
-- Index pour la table `concerne_salle`
--
ALTER TABLE `concerne_salle`
  ADD PRIMARY KEY (`idS`,`idR`),
  ADD KEY `idR` (`idR`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `favori_materiel`
--
ALTER TABLE `favori_materiel`
  ADD PRIMARY KEY (`id`,`idM`),
  ADD KEY `idM` (`idM`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- Index pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD PRIMARY KEY (`idM`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notif`,`idR`),
  ADD KEY `idR` (`idR`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`idR`);

--
-- Index pour la table `reservation_users`
--
ALTER TABLE `reservation_users`
  ADD PRIMARY KEY (`id`,`idR`),
  ADD KEY `idR` (`idR`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`idS`);

--
-- Index pour la table `user_`
--
ALTER TABLE `user_`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `materiel`
--
ALTER TABLE `materiel`
  MODIFY `idM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `idR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `idS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user_`
--
ALTER TABLE `user_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD CONSTRAINT `administrateur_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `agent_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `concerne`
--
ALTER TABLE `concerne`
  ADD CONSTRAINT `concerne_ibfk_1` FOREIGN KEY (`idM`) REFERENCES `materiel` (`idM`) ON DELETE CASCADE,
  ADD CONSTRAINT `concerne_ibfk_2` FOREIGN KEY (`idR`) REFERENCES `reservations` (`idR`) ON DELETE CASCADE;

--
-- Contraintes pour la table `concerne_salle`
--
ALTER TABLE `concerne_salle`
  ADD CONSTRAINT `concerne_salle_ibfk_1` FOREIGN KEY (`idS`) REFERENCES `salle` (`idS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `concerne_salle_ibfk_2` FOREIGN KEY (`idR`) REFERENCES `reservations` (`idR`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `enseignant_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `favori_materiel`
--
ALTER TABLE `favori_materiel`
  ADD CONSTRAINT `favori_materiel_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_` (`id`),
  ADD CONSTRAINT `favori_materiel_ibfk_2` FOREIGN KEY (`idM`) REFERENCES `materiel` (`idM`);

--
-- Contraintes pour la table `reservation_users`
--
ALTER TABLE `reservation_users`
  ADD CONSTRAINT `reservation_users_ibfk_2` FOREIGN KEY (`idR`) REFERENCES `reservations` (`idR`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
