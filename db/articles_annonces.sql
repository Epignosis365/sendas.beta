-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 26 Février 2018 à 03:07
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
-- Structure de la table `articles_annonces`
--
    var numeroDeRue = $("#numeroDeRue").val();
    var nomDeRue = $("#nomDeRue").val();
    var villeDeAppartement = $("#villeDeAppartement").val(); 

    var provinces = $('input[name="provinces"]:checked').val();
    var typeDeMaison = $('input[name="typeDeMaison"]:checked').val();
    var salleDeBain = $('input[name="salleDeBain"]:checked').val();
    var meubler = $('input[name="meubler"]:checked').val();
    var animaux = $('input[name="animaux"]:checked').val();

CREATE TABLE `articles_annonce_services` (
  `id` int(11) NOT NULL,
  `id_crypt` text NOT NULL,
  `id_annonce` varchar(128) NOT NULL,
  `id_annonceur` varchar(128) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `titre_annonce` varchar(255) NOT NULL,
  `adresse_annonceur` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type_annonce` varchar(124) NOT NULL,
  `prix_apartement` varchar(32) NOT NULL,
  `type_annonceur` varchar(64) NOT NULL,

  `numeroAppartement` varchar(9) NOT NULL,
  `nomDeRue` varchar(128) NOT NULL,
  `province` varchar(128) NOT NULL,
  `villeAppartement` varchar(128) NOT NULL,
  `typeDeMaison` varchar(32) NOT NULL,
  `views` varchar(32) NOT NULL,

  `codePostal` varchar(32) NOT NULL,
  `adress_marchanise` varchar(232) NOT NULL,
  `numero_telephone` varchar(32) NOT NULL,
  `photos_array` varchar(255) NOT NULL,
  `date_annoncee` varchar(32) NOT NULL,
  `time_stamp` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles_annonces`
--

INSERT INTO `articles_annonces` (`id`, `id_crypt`, `id_annonce`, `categories`, `titre_annonce`, `adresse_annonceur`, `description`, `type_annonce`, `prix_marchandise`, `type_annonceur`, `marque`, `modele`, `chambres`, `sallons`, `salleDeBains`, `codePostal`, `adress_marchanise`, `numero_telephone`, `photos_array`, `date_annoncee`, `time_stamp`) VALUES
(20, 'GD2784F443S5291D126', 'GR9906F638S1155D787', '', 'Chambre au centre ville', 'Ville de Montréal', 'Belle chambre meublée spacieuse lumineuse propre tranquille pour femmes seulement.\r\n\r\nLibre maintenant tout inclus mais pas chère située dans un beau quartier à rivière des prairies au prix de 350$ proche de perras . \r\n\r\nAutobus 48. venez visiter et vous serez contentes de cette aubaine. contactez 5148177413. merci', 'Offre', '450', 'Particulier', 'Appartement', '', '2', '3', '1', 'G8R 3C9', '12429 Avenue Pierre-Blanchet, Montréal, QC H1E, Canada', '5149684523', 'E6429186_55B09A5E_791D60CC4F.jpg,7863713C_1868356B_F0AAEDAB6C.jpg,07AC1223_1B817C52_652B22AE80.jpg,2E990A18_61CF6740_53A5DF8B01.jpg,C3B2E0C0_DD2C24D6_68689FC82B.jpg,2CAB8498_128465BC_E5578E1735.jpg,18CECDC0_C4F9BD4E_0825B17700.jpg,33E9419A_CADD22A8_202C72', '23-02-2018', 1519396621),
(24, 'GD9052F854S4171D869', 'GR9706F997S5798D581', 'Acheter et vendre &gt; Appareils eléctroniques', 'gfh', '', 'hgfh', 'undefined', '350', 'undefined', '', '', '', '', '', '', '', '9875', '29D31055_790C35D1_E17AB40DA4.jpg,A2E4FBA4_9920D573_DE00847B53.jpg,B6BF79B0_F7713AFA_05C1003A7B.jpg,50A3B3DE_BBDE5A94_B534A88D5F.jpg', '23-02-2018', 1519398211),
(25, 'GD5041F698S1260D606', 'GR7866F845S2498D923', 'Acheter et vendre &gt; Appareils eléctroniques', 'gfh', '', 'hgfh', 'undefined', 'Gratuit', 'undefined', '', '', '', '', '', '', '', '9875', 'F376180B_D20B5B7E_2D70BD257F.jpg,3E309D66_07F1C02D_413840B3DD.jpg,A67E0A85_5779FA79_1BBAC0E197.jpg,FAE2965B_674EAF13_5612A69E1F.jpg', '23-02-2018', 1519398232),
(26, 'GD2636F751S2639D205', 'GR7075F955S7604D154', 'Acheter et vendre &gt; Appareils eléctroniques', 'jhgfd', '', 'tyuio', 'Offre', '450', 'Particulier', '', '', '', '', '', '', '', '9898', '1C5A64A1_CFA26F4A_A34404722E.jpg,D3F56F3D_6178FE9E_43699CF8BA.jpg,4DBA04E4_566B1FB5_41FF1511D5.jpg', '23-02-2018', 1519398426),
(27, 'GD8481F609S8339D751', 'GR9166F570S8413D875', 'Acheter et vendre &gt; Appareils eléctroniques', 'jhgfd', '', 'tyuio', 'Offre', '450', 'Particulier', '', '', '', '', '', '', '', '9898', '2B2E4393_F2BA699F_743243812B.jpg', '23-02-2018', 1519398594),
(28, 'GD1691F139S8148D127', 'GR6147F812S9108D324', 'Acheter et vendre &gt; Appareils eléctroniques', 'Francisco', '', 'Teste de decriçao', 'Offre', '', 'Particulier', '', '', 'undef', 'undef', 'undef', '', '', '514896856', '638849F5_70A1F9C7_21D6892588.jpg,07B3DFCA_605D3B05_CC78CB9517.jpg,217110F9_A24F640E_F122627545.jpg,74ACF03C_EF15AD90_A832E4E40E.jpg,8F25D265_6D91819C_5A6BF87684.jpg', '25-02-2018', 1519552458);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles_annonces`
--
ALTER TABLE `articles_annonces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles_annonces`
--
ALTER TABLE `articles_annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
