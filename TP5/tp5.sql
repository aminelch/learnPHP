-- Créer la base de données
CREATE DATABASE `biblio`;

-- Creation de table Etudiant 
CREATE TABLE `Etudiant` (
  `CodeEtudiant` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` char(255) NOT NULL,
  `classe` varchar(255) NOT NULL
);

-- Creation de table Emprunter
CREATE TABLE `Emprunter` (
  `DateEmprunt` datetime NOT NULL
);

-- Creation de table Livre
CREATE TABLE `Livre` (
  `CodeLivre` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Titre` varchar(255) NOT NULL,
  `Auteur` varchar(255) NOT NULL,
  `DateEdition` date NOT NULL
);