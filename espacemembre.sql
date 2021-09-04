-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 24 juil. 2021 à 22:20
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `espacemembre`
--

-- --------------------------------------------------------

--
-- Structure de la table `cotisation`
--

CREATE TABLE `cotisation` (
  `numCotis` int(11) NOT NULL,
  `datecotis` date NOT NULL,
  `mois` varchar(20) NOT NULL,
  `motif` text NOT NULL,
  `montant` int(11) NOT NULL,
  `matricule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cotisation`
--

INSERT INTO `cotisation` (`numCotis`, `datecotis`, `mois`, `motif`, `montant`, `matricule`) VALUES
(3, '2021-07-03', 'Janvier', 'motif', 7, 1),
(5, '2021-07-15', 'Aout', 'mofif1', 60000, 2),
(7, '2021-07-09', 'Janvier', 'motif2', 88585, 1),
(8, '2021-07-09', 'Avril', 'mofif1', 44, 3),
(9, '2020-07-29', 'Janvier', 'motif', 40000, 5);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `matricule` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`matricule`, `nom`, `prenom`, `adresse`, `tel`) VALUES
(1, 'diouf', 'moussa', '', 76689933),
(2, 'diouf', 'moussa', 'khar yalla', 765012444),
(3, 'fall', 'fallou', 'liberte 4', 76383939),
(4, 'diallo', 'paul', 'colobane', 777009044),
(5, 'fall', 'gallass', 'ref', 789038594);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cotisation`
--
ALTER TABLE `cotisation`
  ADD PRIMARY KEY (`numCotis`),
  ADD KEY `matricule` (`matricule`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`matricule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cotisation`
--
ALTER TABLE `cotisation`
  MODIFY `numCotis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `matricule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cotisation`
--
ALTER TABLE `cotisation`
  ADD CONSTRAINT `cotisation_ibfk_1` FOREIGN KEY (`matricule`) REFERENCES `membre` (`matricule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
