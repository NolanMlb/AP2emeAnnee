-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 22 nov. 2021 à 14:02
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
-- Base de données : `ap2eme`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

DROP TABLE IF EXISTS `agence`;
CREATE TABLE IF NOT EXISTS `agence` (
  `idAgence` int(11) NOT NULL AUTO_INCREMENT,
  `nomAgence` varchar(20) NOT NULL,
  `adresseAgence` varchar(50) NOT NULL,
  `mailAgence` varchar(50) NOT NULL,
  `telAgence` varchar(10) NOT NULL,
  `idGerantTech` int(11) NOT NULL,
  PRIMARY KEY (`idAgence`),
  KEY `Agence_TechnicienGerant_FK` (`idGerantTech`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `charger`
--

DROP TABLE IF EXISTS `charger`;
CREATE TABLE IF NOT EXISTS `charger` (
  `idGerantTech` int(11) NOT NULL,
  `idFiche` int(11) NOT NULL,
  PRIMARY KEY (`idGerantTech`,`idFiche`),
  KEY `Charger_Fiche0_FK` (`idFiche`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `raisonSociale` varchar(20) NOT NULL,
  `numSiren` int(11) NOT NULL,
  `codeApe` char(5) NOT NULL,
  `numTel` varchar(10) NOT NULL,
  `adressePostale` varchar(50) NOT NULL,
  `eMail` varchar(50) NOT NULL,
  `numTelecopie` varchar(10) NOT NULL,
  `numContrat` varchar(20) NOT NULL,
  `idAgence` int(11) NOT NULL,
  `idSerie` int(11) NOT NULL,
  PRIMARY KEY (`idClient`),
  KEY `Client_Agence_FK` (`idAgence`),
  KEY `Client_Materiel0_FK` (`idSerie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contratmaintenance`
--

DROP TABLE IF EXISTS `contratmaintenance`;
CREATE TABLE IF NOT EXISTS `contratmaintenance` (
  `idContrat` int(11) NOT NULL AUTO_INCREMENT,
  `dateSignature` date NOT NULL,
  `dateEcheance` date NOT NULL,
  `idClient` int(11) NOT NULL,
  `idSerie` int(11) NOT NULL,
  PRIMARY KEY (`idContrat`),
  KEY `ContratMaintenance_Client_FK` (`idClient`),
  KEY `ContratMaintenance_Materiel0_FK` (`idSerie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fiche`
--

DROP TABLE IF EXISTS `fiche`;
CREATE TABLE IF NOT EXISTS `fiche` (
  `idFiche` int(11) NOT NULL AUTO_INCREMENT,
  `raisonSociale` varchar(20) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `dateHeureVisite` datetime NOT NULL,
  `commentaireIntervention` varchar(20) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idSerie` int(11) NOT NULL,
  PRIMARY KEY (`idFiche`),
  KEY `Fiche_Client_FK` (`idClient`),
  KEY `Fiche_Materiel0_FK` (`idSerie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

DROP TABLE IF EXISTS `materiel`;
CREATE TABLE IF NOT EXISTS `materiel` (
  `idSerie` int(11) NOT NULL AUTO_INCREMENT,
  `dateVente` date NOT NULL,
  `dateInstallation` date NOT NULL,
  `typeMateriel` varchar(20) NOT NULL,
  `emplacement` varchar(50) NOT NULL,
  `prixVente` double NOT NULL,
  `refMateriel` varchar(10) NOT NULL,
  `libelleType` varchar(10) NOT NULL,
  PRIMARY KEY (`idSerie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `techniciengerant`
--

DROP TABLE IF EXISTS `techniciengerant`;
CREATE TABLE IF NOT EXISTS `techniciengerant` (
  `idGerantTech` int(11) NOT NULL AUTO_INCREMENT,
  `nomGerant` varchar(50) NOT NULL,
  `prenomGerant` varchar(50) NOT NULL,
  `adresseGerant` varchar(50) NOT NULL,
  `telTechnicien` varchar(10) NOT NULL,
  `mailTechnicien` varchar(20) NOT NULL,
  `qualifTechnicien` varchar(50) NOT NULL,
  `dateEmbauche` date NOT NULL,
  `dateObtention` date NOT NULL,
  PRIMARY KEY (`idGerantTech`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `agence`
--
ALTER TABLE `agence`
  ADD CONSTRAINT `Agence_TechnicienGerant_FK` FOREIGN KEY (`idGerantTech`) REFERENCES `techniciengerant` (`idGerantTech`);

--
-- Contraintes pour la table `charger`
--
ALTER TABLE `charger`
  ADD CONSTRAINT `Charger_Fiche0_FK` FOREIGN KEY (`idFiche`) REFERENCES `fiche` (`idFiche`),
  ADD CONSTRAINT `Charger_TechnicienGerant_FK` FOREIGN KEY (`idGerantTech`) REFERENCES `techniciengerant` (`idGerantTech`);

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `Client_Agence_FK` FOREIGN KEY (`idAgence`) REFERENCES `agence` (`idAgence`),
  ADD CONSTRAINT `Client_Materiel0_FK` FOREIGN KEY (`idSerie`) REFERENCES `materiel` (`idSerie`);

--
-- Contraintes pour la table `contratmaintenance`
--
ALTER TABLE `contratmaintenance`
  ADD CONSTRAINT `ContratMaintenance_Client_FK` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`),
  ADD CONSTRAINT `ContratMaintenance_Materiel0_FK` FOREIGN KEY (`idSerie`) REFERENCES `materiel` (`idSerie`);

--
-- Contraintes pour la table `fiche`
--
ALTER TABLE `fiche`
  ADD CONSTRAINT `Fiche_Client_FK` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`),
  ADD CONSTRAINT `Fiche_Materiel0_FK` FOREIGN KEY (`idSerie`) REFERENCES `materiel` (`idSerie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
