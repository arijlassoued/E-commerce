-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 27 jan. 2021 à 23:26
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mon_boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id_admin`, `adminname`, `email`, `mdp`) VALUES
(5, 'amal', 'amal.mosbah@enis.tn', '$2y$10$2r63NkZ1WYlvjk3Xdt1kb.Bg4brFhodBBToZk2iWcCpwkIi91/9m.'),
(8, 'brahim', 'brahim.medhioub@enis.tn', '$2y$10$hmQ1xubtrobNfHIR6LrJSODJH4nXjr2orT0OTEPWr3tZ.ZMTxFLN2'),
(7, 'arij', 'arij.lassoued@enis.tn', '$2y$10$tG53MHnOuSJr18IbU6/V0et9ffI8x1gGTfgGmHJOf833cXpXjxcQO');

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ck_item_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `qte`) VALUES
(26, 13, 12),
(29, 23, 2);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`code`, `nom`) VALUES
(1, 'consoleDeJeux'),
(2, 'tablette'),
(3, 'gaminPc');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `pseudo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prnom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adr` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`pseudo`, `name`, `prnom`, `email`, `phone`, `adr`, `genre`, `password`) VALUES
('arouj', 'lassoued', 'arij', 'arij.lassoued@enis.tn', '56150508', 'Rue x', 'f', 'Arij1998*');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `nom` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pseudo` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `mdp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`nom`, `prenom`, `pseudo`, `email`, `adresse`, `tel`, `mdp`, `genre`, `id`) VALUES
('Lassoued', 'Arij', 'arouj', 'arijlassoued776@gmail.com', 'Soukra km 4 - 3038 sfax', 99000409, '$2y$10$fCyQ.LvMae0mR4Ix1DXeMeNcOdjKt2XPx2enFpa45aToN4rg7GdbK', '2', 1),
('nour', 'nour', 'nour', 'nour@enis.tn', 'rr', 222222, '$2y$10$0K7uR5JvKv5m2gxXxqtgW.Y0kaU8q.wL8jR8DPplkcin1XFFATYT6', '2', 10),
('zeineb', 'ali', 'zeineb', 'arij@hj.com', 'aaaaaaa', 222222, '$2y$10$2TZs5NSwhmMF8oedJMSii./GC8oiLfG7J6dxJ9GqUY2Da55svjXFS', '2', 8),
('LASSOUED', 'ARIJ', 'arij', 'arij@enis.tn', 'ghggfds', 25369258, '$2y$10$Mh5T8ei9LNVGVBZRTjVF9upUtFYr3C371cW4BSJmQvosUuR3UrifK', '2', 11);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `numcde` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datecde` date NOT NULL,
  `numclient` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etatLiv` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modePaiement` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`numcde`),
  KEY `commande client` (`numclient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lignecommande`
--

DROP TABLE IF EXISTS `lignecommande`;
CREATE TABLE IF NOT EXISTS `lignecommande` (
  `numcde` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numproduit` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantité` int(100) NOT NULL,
  PRIMARY KEY (`numcde`,`numproduit`),
  KEY `commandeclient` (`numproduit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qte` int(11) NOT NULL,
  `prix` float NOT NULL,
  `photo` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(555) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`code`, `designation`, `qte`, `prix`, `photo`, `promo`, `categorie`, `description`) VALUES
('1', 'GAMEBOY Sup 400 Avec 400 Jeux Jaune', 20, 40, 'http://localhost/test/public/img/consoleJeux/c1.jpg', '20', 'consoleDeJeux', 'GAMEBOY Sup 400 - Nombre de jeux : 400 Jeux - Système de jeu numérique lcd super large de 3,0 pouces - Batterie en lithium: 600 mAh - Durée d\'utilisation: 3 à 4 Heures - Applicable au système de télévision grâce a son câble AV adapté, elle vous permet facilement de profiter de jeux vivants et excitants sur un grand écran - Design mince - Compact et élégant - Couleur: Jaune'),
('10', 'Console De Jeux Microsoft XBOX Séries S', 50, 150, 'http://localhost/test/public/img/consoleJeux/c9.jpg', '20', 'consoleDeJeux', 'Console De Jeux Microsoft XBOX Séries S - Processeur: 8 cœurs à 3,6 GHz (3,4 GHz avec SMT) - Mémoire. 10 Go GDDR6, bus de 128 bits - Stockage: 512 Go - Résolution pour les jeux: 1440p - Objectif de performance: Jusqu’à 120 FPS - Dolby Digital 5.1 - Interface: 1 port HDMI 2.1; 3 ports USB 3.1 Gen 1; Ethernet - Dimensions: 6,5 x 15,1 x 27,5 cm - Couleur: Blanc - Garantie: 1 an '),
('11', 'PC de Bureau Gaming ADVANCE Dual Core G5600 8Go 120 Go SSD (ADVANCE-G5600)', 20, 4000, 'http://localhost/test/public/img/gaminPc/p1.jpg', '40', 'gaminPc', 'Processeur: Intel Pentium G5600 (3.9 GHz, 4 Mo de mémoire cache, Dual-Core) - Systéme d\'exploitation: FreeDos - Mémoire RAM: 8Go DDR4 - Disque Dur: 120 Go SSD SATA III - Carte Graphique: Nvidia GeForce GTX 1050 TI GAMING X  (2 Go de mémoire dédiée) - Garantie: 1 an'),
('12', 'Pc de Bureau Gamer ANTEC i5 10è Gén 8Go 240Go SSD (MYTEK-NJOY-I5)', 30, 4600, 'http://localhost/test/public/img/gaminPc/p2.jpg', '40', 'gaminPc', 'Processeur: Intel Core i5-10400F (2.9 GHz up to 4.30 GHz, 12 Mo de mémoire cache, Hexa-core) - FreeDos - Mémoire RAM: 8G 3000MHZ CL16 - Disque Dur: 240Go SSD - Carte mère: B460M-A PRO - Carte graphique: Nvidia GeForce GTX 1650 (4Go de Mémoire Dédiée) - Boitier NJOY N TITAN+ 500W 80+ BRONZE - Garantie: 1 an'),
('13', 'Pc de Bureau Gamer CASE-B-02 i5 9è Gén 8Go 240 SSD\r\n', 80, 3600, 'http://localhost/test/public/img/gaminPc/p3.jpg', '60', 'gaminPc', 'Processeur: Intel Core I5-9400F 9ème Génération (2.9 GHz up to 4.1 GHz, 9 MB de mémoire cache, Hexa-core) - Système D\'exploitation: FreeDos - Mémoire RAM: 8 Go - Disque Dur: 1To + 240 SSD - Carte graphique: Nvidia GeForce GTX1650 Super (4Go de mémoire dédiée) - Garantie: 1 an'),
('14', 'Pc de Bureau Gamer ADVANCE i5 9è Gén 16Go 1To + 256Go SSD (MYTEK-ADVANCE-I5)', 70, 5000, 'http://localhost/test/public/img/gaminPc/p4.jpg', '40', 'gaminPc', 'Processeur: Intel Core i5-9400F (2.9 GHz up to 4.10 GHz, 9 Mo de mémoire cache, Hexa-core) - Système D\'exploitation: FreeDos - Mémoire RAM: 16 Go DDR4 2666 MHz - Disque Dur: 1To + 256Go SSD - Carte graphique: Nvidia GeForce GTX 1650 super (4Go de Mémoire Dédiée) - Garantie: 1 an'),
('15', 'Pc de Bureau HP Pavilion Gamer TG01-1015nk i5 10è Gén 16Go 1To + 128 Go SSD + Micro Casque', 20, 1600, 'http://localhost/test/public/img/gaminPc/p5.jpg', '40', 'gaminPc', 'Processeur: Intel Core i5-10400 10ème Génération (2,90 GHz, Up To 4,30 GHz, 12Mo de Mémoire Cache, Hexa-Core) - Systéme d\'exploitation: Windows 10 - Mémoire RAM: 16 Go SDRAM DDR4-2666 - Disque Dur: 1 To + 128 Go SSD, 7200 tr/min - Carte Graphique: NVIDIA® GeForce® GTX 1650 (4 Go de mémoire GDDR5 dédiée) avec Lecteur de cartes multimédia HP 3-en-1, USB 2.0 et HDMI - Dimensions: 15,54 x 30,7 x 33,74 cm - Poids: 5,96 kg - Garantie: 1 an'),
('16', 'Pc de Bureau Gamer CASE-B-02 i5 9è Gén 16Go 240 SSD', 50, 6000, 'http://localhost/test/public/img/gaminPc/p6.jpg', '40', 'gaminPc', 'Processeur: Intel Core I5-9400F 9ème Génération (2.9 GHz up to 4.1 GHz, 9 MB de mémoire cache, Hexa-core) - Système D\'exploitation: FreeDos - Mémoire RAM: 16 Go - Disque Dur: 1To + 240 SSD - Carte graphique: Nvidia GeForce GTX1660 (6Go de mémoire dédiée) - Garantie: 1 an'),
('17', 'Pc Portable Gamer LENOVO L340 i5 9é Gén 16Go 2To - Noir (81LK01KTFG)', 50, 2000, 'http://localhost/test/public/img/gaminPc/p7.jpg', '40', 'gaminPc', 'Ecran 15.6\" FULL HD - Processeur: Intel Core i5-9300H (2.4 GHz up to 4.1 GHz, 8 Mo de mémoire cache, Quad-Core) - FreeDos - Mémoire RAM: 16 Go DDR4 - Disque dur: 2 To - Carte graphique: NVIDIA GeForce GTX 1650 avec (4 Go  de mémoire dédiée) avec Wi-Fi et Bluetooth - Clavier rétroéclairé - Garantie: 2 ans'),
('18', 'Pc de Bureau Gamer LENOVO G5 i5 10è Gén 8Go 512 Go SSD', 50, 1800, 'http://localhost/test/public/img/gaminPc/p8.jpg', '20', 'gaminPc', 'Processeur: Intel Core i5-10400T 10ème Génération (2,0 GHz, jusqu’à 3,6 GHz, 12 Mo L3 de mémoire cache, Hexa-Core) - FreeDos - Mémoire RAM: 8 Go DDR4 - Disque Dur: 512 Go SSD - Carte Graphique: Nvidia GeForce GTX 1650 Super (4 Go de mémoire DDR6 dédiée) Wifi, Bluetooth, USB - Couleur: Noir - Garantie: 1 an'),
('19', 'Pc Portable ASUS TUF705DD AMD Ryzen 8Go 1To - Noir', 10, 2500, 'http://localhost/test/public/img/gaminPc/p9.jpg', '40', 'gaminPc', 'Ecran 17.3\" Full HD (1920 x1080 px) - Processeur: AMD RYZEN R7-3750H (2.3 Ghz up to 4.0 Ghz, 4 Mo de mémoire cache, Quad-Core) - Système d\'exploitation: Windows 10 Home - Mémoire RAM: 8 Go DDR4 - Disque Dur: 1 To - Carte Graphique: NVIDIA GeForce GTX 1050 (3Go GDDR5 de mémoire dédiée ) avec WiFi, Bluetooth - Clavier rétroéclairé - Garantie: 2 ans '),
('20', 'PC Portable Gamer MSI GF63 i5 10è Gén 8Go 512 Go SSD (GF63-10SCXR-1089XFR)', 50, 3000, 'http://localhost/test/public/img/gaminPc/p11.jpg', '50', 'gaminPc', 'Ecran 15.6\" FULL HD - Processeur: Intel Core i5-10300H (2.5 GHz up to 4.5 GHz, 8 Mo de mémoire cache, Quad-Core) - FreeDos - Mémoire RAM: 8 Go DDR4 - Disque dur: 512 Go SSD - Carte graphique: NVIDIA GeForce GTX 1650 (Max-Q) avec (4 Go de mémoire dédiée GDDR5) - Clavier Rétroéclairé LED Rouge - Garantie: 2 ans'),
('21', 'Tablette LOGICOM La Tab 74 - Noir\r\n', 80, 600, 'http://localhost/test/public/img/tablette/t1.jpg', '70', 'tablette', 'Ecran 7.0\" (1024 x 600) - Systéme d\'exploitation: Android 8.1 Oreo (Go Edition) - Processeur: Quad Core 1.3 GHz - Mémoire RAM: 1 Go - Stockage: 16 Go extensible jusqu\'à 32 Go - Appareil photo Arriere: 2.0 MégaPixel et Avant 0.3 MégaPixel - Capacité de Batterie: 2500 mAh avec Bluetooth et Wifi - Couleur: Noir - Garantie: 1 an'),
('22', 'Tablette CLEVER CK1 Kids 7\" Rose Clair', 50, 150, 'http://localhost/test/public/img/tablette/t2.jpg', '50', 'tablette', 'Ecran 7\" Tactile (1024 x 600) - Systéme d\'exploitation: Android 6.0 - Processeur: Quad core RK3126 - Mémoire RAM: 1 Go - Stockage: 8 Go - Appareil photo Arriere: 2.0 MégaPixel ; Avant: 0.3 MégaPixel avec wifi - Couleur: Rose Clair - Garantie: 1 an'),
('23', 'Tablette CLEVER CK1 Kids 7\" Vert', 50, 150, 'http://localhost/test/public/img/tablette/t3.jpg', '50', 'tablette', 'Ecran 7\" Tactile (1024 x 600) - Systéme d\'exploitation: Android 6.0 - Processeur: Quad core RK3126 - Mémoire RAM: 1 Go - Stockage: 8 Go - Appareil photo Arriere: 2.0 MégaPixel ; Avant: 0.3 MégaPixel avec wifi - Couleur: Vert - Garantie: 1 an'),
('24', 'Tablette CLEVER CK1 Kids 7\" Noir', 50, 200, 'http://localhost/test/public/img/tablette/t4.jpg', '40', 'tablette', 'Ecran 7\" Tactile (1024 x 600) - Systéme d\'exploitation: Android 6.0 - Processeur: Quad core RK3126 - Mémoire RAM: 1 Go - Stockage: 8 Go - Appareil photo Arriere: 2.0 MégaPixel ; Avant: 0.3 MégaPixel avec wifi - Couleur: Noir - Garantie: 1 an'),
('25', 'Tablette IKU TMAX 7\" WIFI - Rouge', 80, 150, 'http://localhost/test/public/img/tablette/t5.jpg', '50', 'tablette', 'Ecran: 7\" LCD IPS Tactile (1024 x 600) - Système d\'exploitation: Android 8.0 Oreo (Go Edition) - Processeur: Quad-core 1,3 GHz - Mémoire RAM: 1 Go - Stockage: 16 Go - Appareil photo Arriere: 2.0 MégaPixels et Avant: 0.3 MégaPixel - Conncectivité: WiFi - Batterie: Li-Ion 2100 mAh - Couleur: Rouge - Garantie: 1 an'),
('26', 'Tablette SUPER TAB S7G 7\" 3G - Purple (S7G-PURPLE)', 20, 150, 'http://localhost/test/public/img/tablette/t7.jpg', '40', 'tablette', 'Ecran 7\" - Résolution: 1024 x 600 pixels - Systéme d\'exploitation: Android 5.1- Processeur: SC7731, Quad-Core - Mémoire RAM: 1Go - Stockage: 16Go - Appareil photo Arriere: 2.0 MégaPixel et Avant: 0.3 MégaPixel avec 3G - Couleur: Purple - Garantie: 1 an'),
('27', 'TABLETTE VERSUS V730 7\" 3G GOLD', 80, 400, '	\r\nhttp://localhost/test/public/img/tablette/t9.jpg', '60', 'tablette', 'Ecran 7.0\"  tactile capacitif (600x1024 pixels), Systéme d\'exploitation: Android 6.0, Processeur: MTK 8321, Quad-Core 1,3 GHz, Mémoire: RAM 1Go , Stockage: 16 Go, Appareil photo Arriere: 5.0 MégaPixel et Avant 2.0 MégaPixel, Capacité de Batterie: 2500 mAh avec 3G, Bluetooth et Wifi, Couleur: Gris, Doré - Garantie 1 an'),
('28', 'TABLETTE TECNO P703 7\" WIFI - NOIR', 50, 600, '	\r\nhttp://localhost/test/public/img/tablette/t10.jpg', '20', 'tablette', 'Ecran 7\" WSVGA IPS Tactile (1024 x 600) - Système d\'exploitation: Android 8.1 (Go Edition) - Processeur: Quad-core 1,3 GHz - Mémoire RAM: 1 Go - Stockage: 16 Go - Appareil photo Arriere: 5.0 MégaPixels et Avant: 2.0 MégaPixel - Conncectivité: WiFi, 3G, GPS - Batterie: 4000 mAh - Couleur: Noir - Garantie: 1 an'),
('3', 'GAMEBOY Sup 400 Avec 400 Jeux Blanc', 50, 150, 'http://localhost/test/public/img/consoleJeux/c2.jpg', '20', 'consoleDeJeux', 'GAMEBOY Sup 400 - Nombre de jeux : 400 Jeux - Système de jeu numérique lcd super large de 3,0 pouces - Batterie en lithium: 600 mAh - Durée d\'utilisation: 3 à 4 Heures - Applicable au système de télévision grâce a son câble AV adapté, elle vous permet facilement de profiter de jeux vivants et excitants sur un grand écran - Design mince - Compact et élégant - Couleur: Blanc'),
('4', 'GAMEBOY Sup 400 Avec 400 Jeux Rouge', 50, 150, 'http://localhost/test/public/img/consoleJeux/c3.jpg', '20', 'consoleDeJeux', 'GAMEBOY Sup 400 - Nombre de jeux : 400 Jeux - Système de jeu numérique lcd super large de 3,0 pouces - Batterie en lithium: 600 mAh - Durée d\'utilisation: 3 à 4 Heures - Applicable au système de télévision grâce a son câble AV adapté, elle vous permet facilement de profiter de jeux vivants et excitants sur un grand écran - Design mince - Compact et élégant - Couleur: Rouge'),
('5', 'GAMEBOY Sup 400 Avec 400 Jeux Bleu', 50, 150, 'http://localhost/test/public/img/consoleJeux/c4.jpg', '20', 'consoleDeJeux', 'GAMEBOY Sup 400 - Nombre de jeux : 400 Jeux - Système de jeu numérique lcd super large de 3,0 pouces - Batterie en lithium: 600 mAh - Durée d\'utilisation: 3 à 4 Heures - Applicable au système de télévision grâce a son câble AV adapté, elle vous permet facilement de profiter de jeux vivants et excitants sur un grand écran - Design mince - Compact et élégant - Couleur: Bleu\r\n\r\n'),
('6', 'GAMEBOY Sup 400 Avec 400 Jeux - Noir (GAMEBOY-SUP400)', 50, 150, 'http://localhost/test/public/img/consoleJeux/c5.jpg', '20', 'consoleDeJeux', 'GAMEBOY Sup 400 - Nombre de jeux : 400 Jeux - Système de jeu numérique lcd super large de 3,0 pouces - Batterie en lithium: 600 mAh - Durée d\'utilisation: 3 à 4 Heures - Applicable au système de télévision grâce a son câble AV adapté, elle vous permet facilement de profiter de jeux vivants et excitants sur un grand écran - Design mince - Compact et élégant - Couleur: Noir'),
('7', 'Jeu FIFA 2021 Pour Console XBOX', 50, 150, 'http://localhost/test/public/img/consoleJeux/c6.jpg', '20', 'consoleDeJeux', 'Jeu FIFA 2021 Pour Console XBOX - Genre: Sport - Public légal: 3+ - Créer plus d\' occasions de marquer que jamais avec tous les nouveaux systèmes attaquant dynamique du gameplay FIFA la plus intelligente à ce jour - Dribble agile - Pistes créatives - Courses dirigée - Directed Pass and Go - Verrouillage du joueur - Mode Compétiteur - Avec FIFA 21, l’intelligence des joueurs et leurs prises de décisions progressent à des niveaux encore jamais atteints, à la fois avec et sans le ballon'),
('8', 'Console de Jeux NINTENDO SWITCH Spécial Edition', 50, 150, 'http://localhost/test/public/img/consoleJeux/c7.jpg', '20', 'consoleDeJeux', 'Console de Jeux NINTENDO SWITCH Spécial Edition -  Ecran: LCD 6,2 pouces (environ 15,75 cm) - Résolution de l\'écran: 1280 x 720 pixels - Modèle de processeur: PSP CPU - Fréquence du processeur: 768 MHz  - Mémoire flash Intégrée: 32 Go - Technologie de contrôle des jeux: Analogique/Numérique - Couleur: Noir, Bleu & Vert - Garantie: 1 an'),
('80', 'ddas', 66, 10, 'http://localhost/adminarij/public/img/', '10', 'ddd', 'aaa'),
('9', 'Console de Jeux NINTENDO SWITCH Avec Manette Joy-Con Rouge & Bleu + Cadeaux', 50, 150, 'http://localhost/test/public/img/consoleJeux/c9.jpg', '20', 'consoleDeJeux', 'Console de Jeux NINTENDO SWITCH : Ecran: 6,2 pouces (environ 15,75 cm) tactile capacitif multitouches; peut afficher des images d’une résolution de 1280 x 720 - Mémoire interne: 32 Go de mémoire interne NAND - Autonomie de la batterie: 6 heures maximum en fonction du jeu - Garantie: 1 an');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande client` FOREIGN KEY (`numclient`) REFERENCES `client` (`pseudo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `lignecommande`
--
ALTER TABLE `lignecommande`
  ADD CONSTRAINT `commandeclient` FOREIGN KEY (`numproduit`) REFERENCES `produits` (`code`) ON DELETE CASCADE,
  ADD CONSTRAINT `prodcomm` FOREIGN KEY (`numcde`) REFERENCES `commande` (`numcde`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
