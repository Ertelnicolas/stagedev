-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 19 Août 2019 à 16:16
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mabase`
--

-- --------------------------------------------------------

--
-- Structure de la table `tabledate`
--

CREATE TABLE `tabledate` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `datenaissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tabledate`
--

INSERT INTO `tabledate` (`id`, `pseudo`, `datenaissance`) VALUES
(1, 'mouts', '2006-01-28'),
(2, 'antoinette', '2000-01-01'),
(3, 'mathilde', '1989-12-31'),
(4, 'jean', '1997-12-07'),
(5, 'pierrick', '1990-08-10'),
(6, 'john', '1974-07-06'),
(7, 'gorge', '1977-12-31'),
(8, 'gerard', '1946-05-04'),
(9, 'marc', '2019-05-20'),
(10, 'marc', '1976-02-21'),
(11, 'antoine', '1961-03-30'),
(12, 'sylvain', '1972-04-19'),
(13, 'half', '1960-03-23'),
(14, 'frank', '1962-07-28'),
(15, 'alphonse', '1990-03-23'),
(16, 'marina', '1984-09-19'),
(17, 'pierrot', '1928-06-27'),
(18, 'romain', '1986-06-20'),
(19, 'ingrid', '1970-11-27'),
(20, 'justinbridou', '1959-11-18');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tabledate`
--
ALTER TABLE `tabledate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tabledate`
--
ALTER TABLE `tabledate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
