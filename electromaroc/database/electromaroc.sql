

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `admin` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `categore` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom_categore` varchar(255) NOT NULL,
  `description_categore` varchar(255) NOT NULL,
  `photo_catigorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `clients` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `commendes` (
    `id_clien` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `ddt_de_cea` date NOT NULL,
  `ddt_denvoi` date NOT NULL,
  `ddt_levraiso` date NOT NULL,
  `produit_comp` int(11) NOT NULL,
  `quan_produit` int(11) NOT NULL,
  `prix_tot_pro` int(11) NOT NULL,
  `prix_de_commend` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `products` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `référence` varchar(255) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `code_bar` varchar(255) NOT NULL,
  `prix_d'achat` int(11) NOT NULL,
  `prix_final` int(11) NOT NULL,
  `prix offer` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

