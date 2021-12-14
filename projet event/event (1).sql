-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 déc. 2021 à 16:42
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `event`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_event`
--

CREATE TABLE `commentaire_event` (
  `id_commentaire` int(50) NOT NULL,
  `contenu` varchar(1000) NOT NULL,
  `date_commentaire` date NOT NULL,
  `nom_event` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire_event`
--

INSERT INTO `commentaire_event` (`id_commentaire`, `contenu`, `date_commentaire`, `nom_event`) VALUES
(0, 'je sais pas trop de quoi je parle .................lkjvklwjxlmck', '2021-12-13', 'sais pas');

-- --------------------------------------------------------

--
-- Structure de la table `dislikes`
--

CREATE TABLE `dislikes` (
  `id` int(20) NOT NULL,
  `nom_event` varchar(50) NOT NULL,
  `id_user` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `dislikes`
--

INSERT INTO `dislikes` (`id`, `nom_event`, `id_user`) VALUES
(0, 'sais pas', 5);

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nom_event` varchar(50) NOT NULL,
  `date_debut_event` date NOT NULL,
  `date_fin_event` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id_event`, `nom_event`, `date_debut_event`, `date_fin_event`) VALUES
(1, 'sais pas', '2021-12-02', '2021-12-10'),
(5, ' n nj', '2021-12-03', '2021-12-10'),
(16, 'moutii', '5468-05-05', '6000-02-22');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id` int(50) NOT NULL,
  `nom_event` varchar(50) NOT NULL,
  `id_user` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire_event`
--
ALTER TABLE `commentaire_event`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD UNIQUE KEY `nom_event` (`nom_event`);

--
-- Index pour la table `dislikes`
--
ALTER TABLE `dislikes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD UNIQUE KEY `nom_event` (`nom_event`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire_event`
--
ALTER TABLE `commentaire_event`
  ADD CONSTRAINT `commentaire_event_ibfk_1` FOREIGN KEY (`nom_event`) REFERENCES `event` (`nom_event`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
