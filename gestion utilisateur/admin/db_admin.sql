-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 13 déc. 2021 à 21:29
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

--
-- Déchargement des données de la table `pwdreset`
--

INSERT INTO `pwdreset` (`pwdResetId`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`) VALUES
(3, 'benfraj@gmail.com', 'ceea7932a8f87380', '$2y$10$1AI5SVUJglkKff7/4K9Jouwv1M5wZ6JOE1Mnj4Lz6JdhxM7vDTJ5u', '1639427077'),
(6, 'test2@gmail.com', '70f57ac3d237fc57', '$2y$10$TsekN6BpyFkt0euVYCoMbuKamsAHU/BOlA00UVQzn9UchOPy74VJW', '1639427774');

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
(35, 'anas', 'anas1', 'anas@esprit.tn', '4569507cb714fa064ec71a04fcd27e3ddf7c0f7a', '78945612', 1, 0, '2021-12-13 12:07:14', '2021-12-13 12:07:14'),
(36, 'tas', 'tas', 'test@gmail.com', '075dbe98305bf48b779f054517a03d34c1ae98bf', '4444444444', 3, 0, '2021-12-13 18:31:58', '2021-12-13 18:31:58'),
(37, 'tt', 'tss', 'test1@gmail.com', '075dbe98305bf48b779f054517a03d34c1ae98bf', '12232323', 3, 0, '2021-12-13 18:35:27', '2021-12-13 18:35:27'),
(38, 'tasa', 'ssasa', 'test2@gmail.com', '075dbe98305bf48b779f054517a03d34c1ae98bf', '233232323', 1, 0, '2021-12-13 18:37:59', '2021-12-13 18:37:59'),
(39, 'aaaa', 'alaa', 'benfraj@gmail.com', '$2y$10$kUpPWvbfDfNeh/DSHO3o7elth9x0weOuCrCSPIRxKMCfPG8E7AFHe', NULL, NULL, 0, '2021-12-13 19:25:54', '2021-12-13 19:25:54'),
(40, 'alaa', 'alaa11', 'alaa11@gmail.com', '$2y$10$ZpMgi2zE.K0G.LauNYg4MO2M02HW1.N.85xo96bmSr23gTxaq7NVa', NULL, 3, 0, '2021-12-13 19:32:08', '2021-12-13 19:32:08'),
(41, 'laroussii', 'am123', 'am@esprit.tn', '$2y$10$U3NQQ1C8KvoNKmh68v4zIOG0lZfOgiq0NbKQzzYob1/ljDEuLcOxm', NULL, 3, 0, '2021-12-13 20:16:06', '2021-12-13 20:16:06'),
(42, 'aaaa', 'aaaa', 'aaa@esprit.tn', 'c9056e0d21d35b7985a5f0a8b92ef9bd6f19303e', '1234567', 1, 0, '2021-12-13 20:19:07', '2021-12-13 20:19:07'),
(43, 'firas', 'ali', 'firas@gmail.com', '7fef2c5a2ab6a10d03735dfea1e0c581233e9ff4', '12345678', 1, 0, '2021-12-13 20:20:25', '2021-12-13 20:20:25');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(0, 'amir', 'amirlaroussi11@gmail.com', 'laroussi01', '$2y$10$1mp6ySrVjBAlwom.d2GaheWleU.GJO2VXxN98AmAUVSckiosa9ufW'),
(0, 'test', 'test22@gmail.com', 'aaa95', '$2y$10$FRvYqhk0AYsQER.1G3pTlu.azBxWIhPpfnfDFbSNgPh3D5cAeuk3a'),
(0, 'sasa', 'ooo@gmail.com', 'asasas', '$2y$10$b0TuvsecyWnQVcO4xvc.jedrOUAN/DybeMAIs6uqa.d6WzP42GWfK');

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
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'role_id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
