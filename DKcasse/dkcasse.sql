-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 12 juil. 2023 à 14:07
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dkcasse`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `IdCategorie` int NOT NULL AUTO_INCREMENT,
  `NomCategorie` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`IdCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`IdCategorie`, `NomCategorie`) VALUES
(1, 'mecanique'),
(2, 'electrique'),
(3, 'carroserie');

-- --------------------------------------------------------

--
-- Structure de la table `correspondre`
--

DROP TABLE IF EXISTS `correspondre`;
CREATE TABLE IF NOT EXISTS `correspondre` (
  `IdTypePiece` int NOT NULL AUTO_INCREMENT,
  `IdModele` int NOT NULL,
  PRIMARY KEY (`IdTypePiece`,`IdModele`),
  KEY `FK_Correspondre_IdModele` (`IdModele`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `correspondre`
--

INSERT INTO `correspondre` (`IdTypePiece`, `IdModele`) VALUES
(1, 1),
(2, 1),
(3, 1),
(1, 2),
(2, 2),
(3, 2),
(1, 3),
(2, 3),
(3, 3),
(1, 4),
(2, 4),
(3, 4),
(1, 5),
(2, 5),
(3, 5),
(1, 6),
(2, 6),
(3, 6),
(1, 7),
(2, 7),
(3, 7),
(1, 8),
(2, 8),
(3, 8),
(1, 9),
(2, 9),
(3, 9),
(1, 10),
(2, 10),
(3, 10);

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

DROP TABLE IF EXISTS `marques`;
CREATE TABLE IF NOT EXISTS `marques` (
  `IdMarque` int NOT NULL AUTO_INCREMENT,
  `NomMarque` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `IdModele` int NOT NULL,
  PRIMARY KEY (`IdMarque`),
  KEY `FK_Marques_IdModele` (`IdModele`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `marques`
--

INSERT INTO `marques` (`IdMarque`, `NomMarque`, `IdModele`) VALUES
(1, 'audi', 1),
(2, 'bmw', 2),
(3, 'chevrolet', 3),
(4, 'ford', 4),
(5, 'honda', 5),
(6, 'hyundai', 6),
(7, 'mercedes-benz', 7),
(8, 'nissan', 8),
(9, 'toyota', 9),
(10, 'volkswagen', 10);

-- --------------------------------------------------------

--
-- Structure de la table `modeles`
--

DROP TABLE IF EXISTS `modeles`;
CREATE TABLE IF NOT EXISTS `modeles` (
  `IdModele` int NOT NULL AUTO_INCREMENT,
  `NomModele` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Annee` year DEFAULT NULL,
  PRIMARY KEY (`IdModele`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `modeles`
--

INSERT INTO `modeles` (`IdModele`, `NomModele`, `Annee`) VALUES
(1, 'A4', 2016),
(2, 'X5', 2019),
(3, 'camaro', 2009),
(4, 'focus', 2022),
(5, 'civic', 2019),
(6, 'kona', 2023),
(7, 'A 180', 2022),
(8, 'qashqai', 2022),
(9, 'corolla', 2022),
(10, 'golf', 2023);

-- --------------------------------------------------------

--
-- Structure de la table `pieces`
--

DROP TABLE IF EXISTS `pieces`;
CREATE TABLE IF NOT EXISTS `pieces` (
  `IdPiece` int NOT NULL AUTO_INCREMENT,
  `NomPiece` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Prix` int NOT NULL,
  `Stock` int NOT NULL,
  `IdTypePiece` int NOT NULL,
  PRIMARY KEY (`IdPiece`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pieces`
--

INSERT INTO `pieces` (`IdPiece`, `NomPiece`, `Prix`, `Stock`, `IdTypePiece`) VALUES
(2, 'capot', 100, 41, 1),
(3, 'hayon', 50, 5, 3),
(4, 'pare-brise', 20, 10, 1),
(5, 'pare-choc', 30, 60, 1),
(6, 'porte', 15, 10, 3),
(7, 'retrovisseur', 5, 45, 1),
(8, 'toit', 60, 10, 3),
(9, 'trappe a carburant', 20, 5, 3),
(11, 'vitre avant', 65, 56, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typepiece`
--

DROP TABLE IF EXISTS `typepiece`;
CREATE TABLE IF NOT EXISTS `typepiece` (
  `IdTypePiece` int NOT NULL AUTO_INCREMENT,
  `Referencepiece` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `IdCategorie` int DEFAULT NULL,
  PRIMARY KEY (`IdTypePiece`),
  KEY `FK_typePiece_IdCategorie` (`IdCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `typepiece`
--

INSERT INTO `typepiece` (`IdTypePiece`, `Referencepiece`, `IdCategorie`) VALUES
(1, 'carroserie-avant', 3),
(2, 'carroserie-arriere', 3),
(3, 'carroserie-autre', 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IdUtilisateur` int NOT NULL AUTO_INCREMENT,
  `Grade` tinyint(1) DEFAULT NULL,
  `NomUtilisateur` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `PrenomUtilisateur` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `EmailUtilisateur` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `MotDePasse` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`IdUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IdUtilisateur`, `Grade`, `NomUtilisateur`, `PrenomUtilisateur`, `EmailUtilisateur`, `MotDePasse`) VALUES
(1, 1, 'dekindt', 'lucas', 'lucas.dekindt@yahoo.fr', 'azertyuiop789'),
(2, 0, 'liblanc', 'kevin', 'kevin.liblanc@hotmail.com', 'azertyuiop');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `correspondre`
--
ALTER TABLE `correspondre`
  ADD CONSTRAINT `FK_Correspondre_IdModele` FOREIGN KEY (`IdModele`) REFERENCES `modeles` (`IdModele`),
  ADD CONSTRAINT `FK_Correspondre_IdTypePiece` FOREIGN KEY (`IdTypePiece`) REFERENCES `typepiece` (`IdTypePiece`);

--
-- Contraintes pour la table `marques`
--
ALTER TABLE `marques`
  ADD CONSTRAINT `FK_Marques_IdModele` FOREIGN KEY (`IdModele`) REFERENCES `modeles` (`IdModele`);

--
-- Contraintes pour la table `typepiece`
--
ALTER TABLE `typepiece`
  ADD CONSTRAINT `FK_typePiece_IdCategorie` FOREIGN KEY (`IdCategorie`) REFERENCES `categorie` (`IdCategorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
