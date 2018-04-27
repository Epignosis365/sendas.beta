-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 23 Février 2018 à 02:33
-- Version du serveur :  10.1.29-MariaDB-6
-- Version de PHP :  7.1.11-0ubuntu2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sendaDB_29_01_2017`
--

-- --------------------------------------------------------

--
-- Structure de la table `donnees_brutes`
--

CREATE TABLE `donnees_brutes` (
  `id` int(11) NOT NULL,
  `id_crypt` text NOT NULL,
  `nomFirst` varchar(128) NOT NULL,
  `prenomLast` varchar(128) NOT NULL,
  `mailAdr` varchar(255) NOT NULL,
  `modp` text NOT NULL,
  `nom_utilisateur` varchar(124) NOT NULL,
  `date_entree` varchar(32) NOT NULL,
  `time_stamp` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `articles_annonces` (
  `id` int(11) NOT NULL,
  `id_crypt` text NOT NULL,
  `id_annonce` varchar(128) NOT NULL,
  `titre_annonce` varchar(255) NOT NULL,
  `adresse_annonceur` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type_annonce` varchar(124) NOT NULL,
  `prix_marchandise` varchar(32) NOT NULL,
  `type_annonceur` varchar(64) NOT NULL,
  `marque` varchar(232) NOT NULL,
  `modele` varchar(232) NOT NULL,
  `chambres` varchar(5) NOT NULL,
  `sallons` varchar(5) NOT NULL,
  `salleDeBains` varchar(5) NOT NULL,
  `codePostal` varchar(32) NOT NULL,
  `adress_marchanise` varchar(232) NOT NULL,
  `numero_telephone` varchar(32) NOT NULL,
  `photos_array` text NOT NULL,
  `time_stamp` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `donnees_brutes`
--

INSERT INTO `donnees_brutes` (`id`, `id_crypt`, `nomFirst`, `prenomLast`, `mailAdr`, `modp`, `nom_utilisateur`, `date_entree`, `time_stamp`) VALUES
(15, 'ID9734H674A3632PH249$2y$07$zhwzN57Q3ES6YYUvhd/G5uj7I6tfAf7RgGetkrjhPc1rARUfUyehG', 'Franck', 'Edwards', 'meu@mail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Franck', '17-02-2018', 1518850803);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `donnees_brutes`
--
ALTER TABLE `donnees_brutes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `donnees_brutes`
--
ALTER TABLE `donnees_brutes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
