-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 26 jan. 2023 à 16:54
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ma_collection_jeux`
--

-- --------------------------------------------------------

--
-- Structure de la table `consoles`
--

CREATE TABLE `consoles` (
  `id` int(11) NOT NULL,
  `nom_console` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `consoles`
--

INSERT INTO `consoles` (`id`, `nom_console`) VALUES
(1, 'xbox'),
(2, 'N.E.S'),
(3, 'PS4'),
(4, 'switch'),
(5, 'Amiga'),
(6, 'PSP');

-- --------------------------------------------------------

--
-- Structure de la table `mes_jeux`
--

CREATE TABLE `mes_jeux` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `console_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mes_jeux`
--

INSERT INTO `mes_jeux` (`id`, `nom`, `console_id`) VALUES
(2, 'Halo', 3),
(3, 'Horizon Forbidden West', 1),
(4, 'Forza horizon 5', 1),
(9, 'Skyrim ', 1),
(10, 'Zelda', 3),
(11, 'Space Invaders', 4),
(14, 'Labyrinth', 5),
(16, 'Legend', 1),
(18, ' babar ', 4),
(20, ' babar aux seychelles ', 1),
(21, ' Animal Crossing ', 4),
(22, ' Zelda Breathe Of The Wild ', 4),
(23, 'GTA', 6),
(24, 'King Kong', 2),
(25, 'Reine des Glaces', 6),
(26, 'Street Fighter II', 5),
(27, 'garou', 6),
(30, 'rabbit', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `consoles`
--
ALTER TABLE `consoles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mes_jeux`
--
ALTER TABLE `mes_jeux`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`),
  ADD KEY `console_id` (`console_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `consoles`
--
ALTER TABLE `consoles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `mes_jeux`
--
ALTER TABLE `mes_jeux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `mes_jeux`
--
ALTER TABLE `mes_jeux`
  ADD CONSTRAINT `mes_jeux_ibfk_1` FOREIGN KEY (`console_id`) REFERENCES `consoles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
