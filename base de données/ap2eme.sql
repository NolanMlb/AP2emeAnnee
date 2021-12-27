-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 13 déc. 2021 à 14:39
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
  `idAgence` int(10) NOT NULL AUTO_INCREMENT,
  `nomAgence` varchar(20) DEFAULT NULL,
  `adresseAgence` varchar(100) DEFAULT NULL,
  `telAgence` char(10) DEFAULT NULL,
  PRIMARY KEY (`idAgence`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agence`
--

INSERT INTO `agence` (`idAgence`, `nomAgence`, `adresseAgence`, `telAgence`) VALUES
(1, 'Tourcoing', '45 rue du dronckard\r\n59200 Tourcoing', '0301020304'),
(2, 'Roncq', '566 rue de Tourcoing\r\n59175 Roncq', '0396857445');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(10) NOT NULL AUTO_INCREMENT,
  `numClient` int(10) DEFAULT NULL,
  `raisonSocialeClient` varchar(50) DEFAULT NULL,
  `sirenClient` char(9) DEFAULT NULL,
  `codeApeClient` char(5) DEFAULT NULL,
  `telClient` char(10) DEFAULT NULL,
  `adresseClient` varchar(100) DEFAULT NULL,
  `mailClient` varchar(100) DEFAULT NULL,
  `dureeDeplacementClient` time DEFAULT NULL,
  `distanceKmClient` int(10) DEFAULT NULL,
  `contratmaintenance` int(10) DEFAULT NULL,
  `idAgence` int(10) DEFAULT NULL,
  PRIMARY KEY (`idClient`),
  KEY `FK_client_contratmaintenance_idcontrat_contratmaintenance` (`contratmaintenance`),
  KEY `FK_client_idAgence_agence` (`idAgence`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `numClient`, `raisonSocialeClient`, `sirenClient`, `codeApeClient`, `telClient`, `adresseClient`, `mailClient`, `dureeDeplacementClient`, `distanceKmClient`, `contratmaintenance`, `idAgence`) VALUES
(1, 1, 'Marié', 'AM231', '5252', '0601020304', '219 rue du l\'ombrer\r\n59200 Tourcoing', 'Alerbermarand@gastonberger.fr', '00:14:00', 10, 1, 1),
(2, 2, 'Celibataire', 'EL36', '4564', '0352659684', '12 rue du falanpin\r\n59175 Roncq.', 'Eliotrolain@gastonberger.fr', '00:20:00', 25, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `contratmaintenance`
--

DROP TABLE IF EXISTS `contratmaintenance`;
CREATE TABLE IF NOT EXISTS `contratmaintenance` (
  `idContrat` int(10) NOT NULL AUTO_INCREMENT,
  `numContrat` int(10) DEFAULT NULL,
  `dateSignatureContrat` date DEFAULT NULL,
  `dateEcheanceContrat` date DEFAULT NULL,
  `numClient` int(10) DEFAULT NULL,
  `refContrat` varchar(10) DEFAULT NULL,
  `idContrat_typeContrat` int(10) DEFAULT NULL,
  `client_idclient` int(10) DEFAULT NULL,
  PRIMARY KEY (`idContrat`),
  KEY `FK_contratMaintenance_idContrat_typeContrat` (`idContrat_typeContrat`),
  KEY `FK_contratMaintenance_client_idclient_client` (`client_idclient`),
  KEY `numClient` (`numClient`),
  KEY `refContrat` (`refContrat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contratmaintenance`
--

INSERT INTO `contratmaintenance` (`idContrat`, `numContrat`, `dateSignatureContrat`, `dateEcheanceContrat`, `numClient`, `refContrat`, `idContrat_typeContrat`, `client_idclient`) VALUES
(1, 1, '2021-12-01', '2021-12-12', 1, 'TR3654', 1, 1),
(2, 2, '2021-11-01', '2021-12-18', 2, 'RQ3989', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `controler`
--

DROP TABLE IF EXISTS `controler`;
CREATE TABLE IF NOT EXISTS `controler` (
  `idMateriel` int(10) NOT NULL AUTO_INCREMENT,
  `idIntervention` int(10) NOT NULL,
  `idControler` int(10) DEFAULT NULL,
  `numSerie` varchar(15) DEFAULT NULL,
  `tempsPasse` time DEFAULT NULL,
  `commentaire` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idMateriel`,`idIntervention`),
  KEY `FK_controler_idIntervention_intervention` (`idIntervention`),
  KEY `idMateriel` (`idMateriel`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `controler`
--

INSERT INTO `controler` (`idMateriel`, `idIntervention`, `idControler`, `numSerie`, `tempsPasse`, `commentaire`) VALUES
(1, 1, 1, '2356', '00:33:37', 'Bien fait!');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `idEmploye` int(10) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(20) DEFAULT NULL,
  `nomEmploye` varchar(20) DEFAULT NULL,
  `prenomEmploye` varchar(20) DEFAULT NULL,
  `adresseEmploye` varchar(100) DEFAULT NULL,
  `dateEmbaucheEmploye` date DEFAULT NULL,
  `idtechnicien` int(10) DEFAULT NULL,
  PRIMARY KEY (`idEmploye`),
  KEY `FK_employe_technicien_idtechnicien_technicien` (`idtechnicien`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`idEmploye`, `matricule`, `nomEmploye`, `prenomEmploye`, `adresseEmploye`, `dateEmbaucheEmploye`, `idtechnicien`) VALUES
(1, '1', 'Ribeiro', 'Thomas', '219 rue Georges Pompidou\r\n59200 Tourcoing', '2021-12-12', 1),
(2, '2', 'De Bruycker', 'Nicolas', '35 rue saranguins\r\n59200 Tourcoing', '2021-07-04', 2);

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

DROP TABLE IF EXISTS `intervention`;
CREATE TABLE IF NOT EXISTS `intervention` (
  `idIntervention` int(10) NOT NULL AUTO_INCREMENT,
  `dateVisite` date DEFAULT NULL,
  `heureVisite` time DEFAULT NULL,
  `idClient` int(10) DEFAULT NULL,
  `idTechnicien` int(10) DEFAULT NULL,
  PRIMARY KEY (`idIntervention`),
  KEY `FK_intervention_idClient_client` (`idClient`),
  KEY `FK_intervention_idTechnicien_technicien` (`idTechnicien`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `intervention`
--

INSERT INTO `intervention` (`idIntervention`, `dateVisite`, `heureVisite`, `idClient`, `idTechnicien`) VALUES
(1, '2021-12-12', '12:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

DROP TABLE IF EXISTS `materiel`;
CREATE TABLE IF NOT EXISTS `materiel` (
  `idMateriel` int(10) NOT NULL AUTO_INCREMENT,
  `numSerie` varchar(15) DEFAULT NULL,
  `dateVente` date DEFAULT NULL,
  `dateInstall` date DEFAULT NULL,
  `prixVente` float DEFAULT NULL,
  `emplacement` varchar(15) DEFAULT NULL,
  `ref` varchar(10) DEFAULT NULL,
  `numClient` int(10) DEFAULT NULL,
  `contratmaintenance` int(10) DEFAULT NULL,
  `idMateriel_typeMateriel` int(10) DEFAULT NULL,
  `idClient` int(10) DEFAULT NULL,
  PRIMARY KEY (`idMateriel`),
  KEY `FK_materiel_contratmaintenance_idcontrat_contratmaintenance` (`contratmaintenance`),
  KEY `FK_materiel_idMateriel_typeMateriel` (`idMateriel_typeMateriel`),
  KEY `FK_materiel_idClient_client` (`idClient`),
  KEY `numClient` (`numClient`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `materiel`
--

INSERT INTO `materiel` (`idMateriel`, `numSerie`, `dateVente`, `dateInstall`, `prixVente`, `emplacement`, `ref`, `numClient`, `contratmaintenance`, `idMateriel_typeMateriel`, `idClient`) VALUES
(1, '123456789', '2021-12-05', '2021-12-09', 12, 'E4', 'E235641', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

DROP TABLE IF EXISTS `technicien`;
CREATE TABLE IF NOT EXISTS `technicien` (
  `idTechnicien` int(10) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(20) DEFAULT NULL,
  `telTechnicien` char(10) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `dateObtention` date DEFAULT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `dateEmbauche` date DEFAULT NULL,
  `idemploye` int(10) DEFAULT NULL,
  `idAgence` int(10) DEFAULT NULL,
  PRIMARY KEY (`idTechnicien`),
  KEY `FK_technicien_employe_idemploye_employe` (`idemploye`),
  KEY `FK_technicien_idAgence_agence` (`idAgence`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `technicien`
--

INSERT INTO `technicien` (`idTechnicien`, `matricule`, `telTechnicien`, `qualification`, `dateObtention`, `nom`, `prenom`, `adresse`, `dateEmbauche`, `idemploye`, `idAgence`) VALUES
(1, 'RT1', '0601020304', 'Expert en construction', '2021-07-04', 'Ribeiro', 'Thomas', '219 rue des saranguines\r\n59200 Tourcoing', '2021-10-03', 1, 1),
(2, 'DN1', '0601020304', 'Expert en montage mécanique', '2021-08-01', 'De Bruycker', 'Nicolas', '35 rue des saranguins\r\n59200 Tourcoing', '2021-09-25', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `typecontrat`
--

DROP TABLE IF EXISTS `typecontrat`;
CREATE TABLE IF NOT EXISTS `typecontrat` (
  `idContrat` int(10) NOT NULL AUTO_INCREMENT,
  `delaiIntervention` date DEFAULT NULL,
  `tauxApplicable` float DEFAULT NULL,
  PRIMARY KEY (`idContrat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typecontrat`
--

INSERT INTO `typecontrat` (`idContrat`, `delaiIntervention`, `tauxApplicable`) VALUES
(1, '2021-12-11', 0.2),
(2, '2021-11-07', 0.2);

-- --------------------------------------------------------

--
-- Structure de la table `typemateriel`
--

DROP TABLE IF EXISTS `typemateriel`;
CREATE TABLE IF NOT EXISTS `typemateriel` (
  `idMateriel` int(10) NOT NULL AUTO_INCREMENT,
  `libelleMateriel` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idMateriel`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typemateriel`
--

INSERT INTO `typemateriel` (`idMateriel`, `libelleMateriel`) VALUES
(1, 'BAPON'),
(2, 'Cristiano');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `nomUtilisateur` varchar(50) NOT NULL,
  `mdpUtilisateur` varchar(50) DEFAULT NULL,
  `roleUtilisateur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nomUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`nomUtilisateur`, `mdpUtilisateur`, `roleUtilisateur`) VALUES
('DeBruycker', 'DeBruycker', 'Gestionnaire'),
('Malherbe', 'Malherbe', 'Technicien'),
('toma', 'libelo', 'technicien');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_client_contratmaintenance_idcontrat_contratmaintenance` FOREIGN KEY (`contratmaintenance`) REFERENCES `contratmaintenance` (`idContrat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_client_idAgence_agence` FOREIGN KEY (`idAgence`) REFERENCES `agence` (`idAgence`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `contratmaintenance`
--
ALTER TABLE `contratmaintenance`
  ADD CONSTRAINT `FK_contratMaintenance_client_idclient_client` FOREIGN KEY (`client_idclient`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_contratMaintenance_idContrat_typeContrat` FOREIGN KEY (`idContrat_typeContrat`) REFERENCES `typecontrat` (`idContrat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `controler`
--
ALTER TABLE `controler`
  ADD CONSTRAINT `FK_controler_idIntervention_intervention` FOREIGN KEY (`idIntervention`) REFERENCES `intervention` (`idIntervention`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_controler_idMateriel_materiel` FOREIGN KEY (`idMateriel`) REFERENCES `materiel` (`idMateriel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `FK_employe_technicien_idtechnicien_technicien` FOREIGN KEY (`idtechnicien`) REFERENCES `technicien` (`idTechnicien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `intervention`
--
ALTER TABLE `intervention`
  ADD CONSTRAINT `FK_intervention_idClient_client` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_intervention_idTechnicien_technicien` FOREIGN KEY (`idTechnicien`) REFERENCES `technicien` (`idTechnicien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD CONSTRAINT `FK_materiel_contratmaintenance_idcontrat_contratmaintenance` FOREIGN KEY (`contratmaintenance`) REFERENCES `contratmaintenance` (`idContrat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_materiel_idClient_client` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_materiel_idMateriel_typeMateriel` FOREIGN KEY (`idMateriel_typeMateriel`) REFERENCES `typemateriel` (`idMateriel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `technicien`
--
ALTER TABLE `technicien`
  ADD CONSTRAINT `FK_technicien_employe_idemploye_employe` FOREIGN KEY (`idemploye`) REFERENCES `employe` (`idEmploye`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_technicien_idAgence_agence` FOREIGN KEY (`idAgence`) REFERENCES `agence` (`idAgence`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
