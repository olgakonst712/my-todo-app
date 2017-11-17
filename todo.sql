-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Ven 17 Novembre 2017 à 16:15
-- Version du serveur :  5.6.28
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `todo_app`
--

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `task_title` varchar(30) NOT NULL,
  `task_description` text NOT NULL,
  `task_start_timestamp` varchar(10) NOT NULL,
  `task_end_timestamp` varchar(10) NOT NULL,
  `task_ended_on_timestamp` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `task`
--

INSERT INTO `task` (`task_id`, `task_title`, `task_description`, `task_start_timestamp`, `task_end_timestamp`, `task_ended_on_timestamp`) VALUES
(1, 'Etudier Javascript', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. ', '12/10/2017', '13/10/2017', '13/10/2017'),
(3, 'Acheter le pain', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions.', '12/11/2017', '12/11/2007', ''),
(5, 'Base de PHP', 'Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là.', '25/10/2017', '27/10/2017', '29/10/2017'),
(6, 'Les cadeaux de Noel', 'Vadim, Adele, Poupa, Mouma, Samuel, Esther, Rosalie, Baptiste, Barnabé.', '16/11/2017', '24/12/2017', NULL),
(7, 'Les cadeaux de Noel', 'Vadim, Adele, Poupa, Mouma, Samuel, Esther, Rosalie, Baptiste, Barnabé.', '16/11/2017', '24/12/2017', NULL),
(8, 'Changer l\'adresse', 'lJMJFPEohgfghjklmlkjhgvhjklm\r\nfghjkljhghjklkjh\r\nfghjhgfghj', '14/11/2017', '14/11/2017', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;