-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 13 déc. 2021 à 17:19
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
-- Base de données : `db_admin`
--

-- --------------------------------------------------------

--
-- Structure de la table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `Name` varchar(50) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL COMMENT 'role_id',
  `role` varchar(255) DEFAULT NULL COMMENT 'role_text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Editor'),
(3, 'User');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `roleid` int(4) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `email`, `password`, `mobile`, `roleid`, `isActive`, `created_at`, `updated_at`) VALUES
(29, 'laroussi', 'amir-laroussi', 'amir.laroussi@esprit.tn', 'aa2b4aea4c30f92aa69d40ce2945ae8e6b330de2', '50355838', 1, 0, '2021-11-13 14:40:04', '2021-11-13 14:40:04'),
(30, 'laroussi', 'ali', 'amirlaroussi2020@gmail.com', '23302e5431f0da02e97b5173a67dacd17cb7a024', '12354687', 3, 1, '2021-11-17 08:58:06', '2021-11-17 08:58:06'),
(32, 'aziz', 'khalsi', 'aziz@esprit.tn', 'f908b571494aa8bf1b9429644534a234172e9471', '50355474', 3, 0, '2021-12-01 10:18:31', '2021-12-01 10:18:31'),
(33, 'firas', 'laroussi', 'firas.laroussi@esprit.tn', '0425e43a87d83ec9de11f2ce944eaefc980d0cf0', '12354687', 3, 0, '2021-12-07 13:04:07', '2021-12-07 13:04:07'),
(34, 'fadi', 'akrout', 'fadiakrout@esprit.tn', 'a55cdfcc1cdb45a066194f9239cd4e0737ecbffa', '21355848', 1, 0, '2021-12-12 19:38:57', '2021-12-12 19:38:57'),
(35, 'anas', 'anas1', 'anas@esprit.tn', '4569507cb714fa064ec71a04fcd27e3ddf7c0f7a', '78945612', 1, 0, '2021-12-13 12:07:14', '2021-12-13 12:07:14');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Index pour la table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_roleid` (`roleid`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'role_id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `fk_roleid` FOREIGN KEY (`roleid`) REFERENCES `tbl_roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
