-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 10 juin 2021 à 15:02
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cfai`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `login` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `login`, `password`, `etat`) VALUES
(1, 'Assako', 'Christ', 'apc', '1234', 0);

-- --------------------------------------------------------

--
-- Structure de la table `apprenants`
--

CREATE TABLE `apprenants` (
  `id_app` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `date_naiss` date NOT NULL,
  `lieu_naiss` varchar(150) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `cni` varchar(50) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `tel` varchar(50) NOT NULL,
  `date_insc` date NOT NULL,
  `nom_pere` varchar(150) NOT NULL,
  `prenom_pere` varchar(150) NOT NULL,
  `adresse_pere` varchar(250) NOT NULL,
  `ville_pere` varchar(100) NOT NULL,
  `tel_pere` varchar(100) NOT NULL,
  `nom_mere` varchar(150) NOT NULL,
  `prenom_mere` varchar(150) NOT NULL,
  `adresse_mere` varchar(250) NOT NULL,
  `ville_mere` varchar(100) NOT NULL,
  `tel_mere` varchar(100) NOT NULL,
  `formation` varchar(150) NOT NULL,
  `etat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `apprenants`
--

INSERT INTO `apprenants` (`id_app`, `nom`, `prenom`, `date_naiss`, `lieu_naiss`, `sexe`, `adresse`, `cni`, `email`, `tel`, `date_insc`, `nom_pere`, `prenom_pere`, `adresse_pere`, `ville_pere`, `tel_pere`, `nom_mere`, `prenom_mere`, `adresse_mere`, `ville_mere`, `tel_mere`, `formation`, `etat`) VALUES
(1, '', 'Pr&amp;eacute;cieux', '2021-06-04', 'bzv', 'M', 'bzv', '12345', 'apc@gmail.com', '069897169', '2021-06-04', 'Koubonguissa', 'Guy', 'bzv', 'bzv', '055483008', 'Diaw', 'L&amp;eacute;onie', 'bzv', 'bzv', '050191655', 'Bureautique', 'trait&eacute;');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `identite` varchar(250) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `date_message` date NOT NULL,
  `mois_message` varchar(30) NOT NULL,
  `annee_message` varchar(30) NOT NULL,
  `heure_message` varchar(150) NOT NULL,
  `statut` varchar(20) NOT NULL DEFAULT 'Nouveau message'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id_img` int(11) NOT NULL,
  `photo` text NOT NULL,
  `libelle` text NOT NULL,
  `date_ajout` varchar(100) NOT NULL,
  `heure_ajout` varchar(100) NOT NULL,
  `type_img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id_img`, `photo`, `libelle`, `date_ajout`, `heure_ajout`, `type_img`) VALUES
(1, 'WhatsApp Image 2021-03-20 at 09.27.50.jpeg', 'affiche1', '2021-04-22', '11h 51m 10s', 'Prospectus'),
(12, 'DSC_0004.jpg', 'Archive1', '2021-05-03', '01h 06m 14s', 'Archive'),
(14, 'DSC_0024.jpg', 'machine1', '2021-05-04', '13h 11m 21s', 'Machines a vendre'),
(17, 'cfai3.jpeg', 'affiche2', '2021-05-08', '23h 39m 09s', 'Prospectus'),
(19, 'DSC_0105.jpg', 'machine2', '2021-05-09', '01h 46m 09s', 'Machines a vendre'),
(20, 'DSC_0101.jpg', 'Bienvenue &agrave; CFAI', '2021-05-11', '13h 37m 48s', 'Archive'),
(29, 'FB_IMG_16100021510533364.jpg', '...', '2021-06-07', '01h 03m 31s', 'Archive');

-- --------------------------------------------------------

--
-- Structure de la table `online`
--

CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `user_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `online`
--

INSERT INTO `online` (`id`, `time`, `user_ip`) VALUES
(2, 1623167413, '::1');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prenom_user` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(30) NOT NULL,
  `pseudo` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mpass` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `permis` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`, `sexe`, `tel`, `pseudo`, `mpass`, `permis`) VALUES
(1, 'Assako', 'Pr&eacute;cieux', 'M', '069897169', 'apc', '123456', 1);

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE `videos` (
  `id_video` int(11) NOT NULL,
  `video` text NOT NULL,
  `libelle` text NOT NULL,
  `date_ajout` varchar(50) NOT NULL,
  `heure_ajout` varchar(50) NOT NULL,
  `type_video` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`id_video`, `video`, `libelle`, `date_ajout`, `heure_ajout`, `type_video`) VALUES
(1, 'CFA_i_vid&eacute;o.mp4', 'video1', '2021-05-04', '02h 08m 45s', ''),
(4, 'CFA_i_vid&eacute;o.mp4', 'video', '2021-05-10', '20h 21m 30s', '');

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

CREATE TABLE `visite` (
  `id` int(11) NOT NULL,
  `user_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `visite`
--

INSERT INTO `visite` (`id`, `user_ip`) VALUES
(1, '127.0.0.1'),
(2, '127.0.0.1'),
(3, '127.0.0.1'),
(4, '127.0.0.1'),
(5, '127.0.0.1'),
(6, '127.0.0.1'),
(7, '127.0.0.1'),
(8, '127.0.0.1'),
(9, '127.0.0.1'),
(10, '127.0.0.1'),
(11, '127.0.0.1'),
(12, '127.0.0.1'),
(13, '127.0.0.1'),
(14, '::1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `apprenants`
--
ALTER TABLE `apprenants`
  ADD PRIMARY KEY (`id_app`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_img`);

--
-- Index pour la table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
-- Index pour la table `visite`
--
ALTER TABLE `visite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `apprenants`
--
ALTER TABLE `apprenants`
  MODIFY `id_app` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `visite`
--
ALTER TABLE `visite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
