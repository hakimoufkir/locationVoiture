-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 27 mai 2022 à 18:55
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `locationvoiture`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `id_user` int(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `marque` varchar(50) NOT NULL,
  `modele` varchar(50) NOT NULL,
  `annee` int(20) NOT NULL,
  `ville_depart` varchar(50) NOT NULL,
  `ville_arrivee` varchar(50) NOT NULL,
  `date_depart` date NOT NULL,
  `date_arrivee` date NOT NULL,
  `photo` varchar(50) NOT NULL,
  `temps` int(50) NOT NULL,
  `prixph` int(20) NOT NULL,
  `prixpj` int(20) NOT NULL,
  `prixpm` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `id_user`, `titre`, `description`, `marque`, `modele`, `annee`, `ville_depart`, `ville_arrivee`, `date_depart`, `date_arrivee`, `photo`, `temps`, `prixph`, `prixpj`, `prixpm`) VALUES
(1, 5, 'wqewqewqdsadw', 'wqdsadwqewqdd', '0', '0', 0, '', '', '2022-05-25', '0000-00-00', '_1653669487_car-1.jpg', 1, 21321321, 2147483647, 2147483647),
(2, 5, 'ASDFGHJKL;\'', 'DSFGGHG DSFGGHG DSFGGHG DSFGGHG DSFGGHG DSFGGHG DS', 'Dacia', '52S', 2020, '', '', '2022-05-18', '2022-05-17', '_1653062405_car-3.jpg', 0, 10, 1000, 10000),
(3, 6, 'hakim ', '', 'Dacia', '6L', 2017, '', '', '2022-05-09', '2022-05-10', '_1653062647_car-5.jpg', 1, 0, 0, 0),
(4, 7, '', 'dhsoahdksahdsajkdhskahdk sjkahdksahkdsahkjdhsjkadh', 'Dacia', 'larache', 2020, '', '', '2022-08-10', '2022-05-18', '_1653062866_car-3.jpg', 5, 123, 12313213, 7846564),
(6, 5, 'ASDFGHJKL;\'', 'DSFGGHG DSFGGHG DSFGGHG DSFGGHG DSFGGHG DSFGGHG DS', 'Dacia', '52S', 2020, '', '', '2022-05-18', '2022-05-17', '_1653062405_car-3.jpg', 0, 10, 1000, 10000),
(7, 5, 'dsadsadsadsa', 'dsadsadwqdsqdsadsa', 'Dacia', '52S', 2019, '', '', '2022-05-18', '2022-05-25', '_1653062340_car-1.jpg', 1, 123, 12313213, 7846564),
(8, 5, 'ASDFGHJKL;\'', 'DSFGGHG DSFGGHG DSFGGHG DSFGGHG DSFGGHG DSFGGHG DS', 'Dacia', '52S', 2020, '', '', '2022-05-18', '2022-05-17', '_1653062405_car-3.jpg', 0, 10, 1000, 10000),
(9, 6, 'hakim ', '', 'Dacia', '6L', 2017, '', '', '2022-05-09', '2022-05-10', '_1653062647_car-5.jpg', 1, 0, 0, 0),
(10, 7, '', 'dhsoahdksahdsajkdhskahdk sjkahdksahkdsahkjdhsjkadh', 'Dacia', 'larache', 2020, '', '', '2022-08-10', '2022-05-18', '_1653062866_car-3.jpg', 5, 123, 12313213, 7846564),
(11, 5, 'dsadsadsadsa', 'dsadsadwqdsqdsadsa', 'Dacia', '52S', 2019, '', '', '2022-05-18', '2022-05-25', '_1653062340_car-1.jpg', 1, 123, 12313213, 7846564),
(12, 5, 'ASDFGHJKL;\'', 'DSFGGHG DSFGGHG DSFGGHG DSFGGHG DSFGGHG DSFGGHG DS', 'Dacia', '52S', 2020, '', '', '2022-05-18', '2022-05-17', '_1653062405_car-3.jpg', 0, 10, 1000, 10000),
(13, 5, 'dsadsadsadsa', 'dsadsadwqdsqdsadsa', 'Dacia', '52S', 2019, '', '', '2022-05-18', '2022-05-25', '_1653062340_car-1.jpg', 1, 123, 12313213, 7846564),
(14, 5, 'ASDFGHJKL;\'', 'DSFGGHG DSFGGHG DSFGGHG DSFGGHG DSFGGHG DSFGGHG DS', 'Dacia', '52S', 2020, '', '', '2022-05-18', '2022-05-17', '_1653062405_car-3.jpg', 0, 10, 1000, 10000),
(15, 6, 'hakim ', '', 'Dacia', '6L', 2017, '', '', '2022-05-09', '2022-05-10', '_1653062647_car-5.jpg', 1, 0, 0, 0),
(16, 7, '', 'dhsoahdksahdsajkdhskahdk sjkahdksahkdsahkjdhsjkadh', 'Dacia', 'larache', 2020, '', '', '2022-08-10', '2022-05-18', '_1653062866_car-3.jpg', 5, 123, 12313213, 7846564),
(17, 5, 'dsadsadsadsa', 'dsadsadwqdsqdsadsa', 'Dacia', '52S', 2019, '', '', '2022-05-18', '2022-05-25', '_1653062340_car-1.jpg', 1, 123, 12313213, 7846564),
(18, 5, 'ASDFGHJKL;\'', 'DSFGGHG DSFGGHG DSFGGHG DSFGGHG DSFGGHG DSFGGHG DS', 'Dacia', '52S', 2020, '', '', '2022-05-18', '2022-05-17', '_1653062405_car-3.jpg', 0, 10, 1000, 10000),
(19, 5, 'dsadsadsadsa', 'dsadsadwqdsqdsadsa', 'Dacia', '52S', 2019, '', '', '2022-05-18', '2022-05-25', '_1653062340_car-1.jpg', 1, 123, 12313213, 7846564),
(20, 5, 'ASDFGHJKL;\'', 'DSFGGHG DSFGGHG DSFGGHG DSFGGHG DSFGGHG DSFGGHG DS', 'Dacia', '52S', 2020, '', '', '2022-05-18', '2022-05-17', '_1653062405_car-3.jpg', 0, 10, 1000, 10000),
(21, 6, 'hakim ', '', 'Dacia', '6L', 2017, '', '', '2022-05-09', '2022-05-10', '_1653062647_car-5.jpg', 1, 0, 0, 0),
(22, 7, '', 'dhsoahdksahdsajkdhskahdk sjkahdksahkdsahkjdhsjkadh', 'Dacia', 'larache', 2020, '', '', '2022-08-10', '2022-05-18', '_1653062866_car-3.jpg', 5, 123, 12313213, 7846564),
(23, 5, 'dsadsadsadsa', 'dsadsadwqdsqdsadsa', 'Dacia', '52S', 2019, '', '', '2022-05-18', '2022-05-25', '_1653062340_car-1.jpg', 1, 123, 12313213, 7846564),
(24, 5, 'ASDFGHJKL;\'', 'DSFGGHG DSFGGHG DSFGGHG DSFGGHG DSFGGHG DSFGGHG DS', 'Dacia', '52S', 2020, '', '', '2022-05-18', '2022-05-17', '_1653062405_car-3.jpg', 0, 10, 1000, 10000),
(25, 5, 'dsadsadsadsa', 'dsadsadwqdsqdsadsa', 'Renaut', '52S', 2019, '', '', '2022-05-18', '2022-05-25', '_1653062340_car-1.jpg', 1, 123, 12313213, 7846564),
(26, 5, 'dsadsadsadsa', 'dsadsadwqdsqdsadsa', 'Renaut', '52S', 2019, '', '', '2022-05-18', '2022-05-25', '_1653062340_car-1.jpg', 1, 123, 12313213, 7846564);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `tele` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `mdp`, `photo`, `tele`) VALUES
(5, 'dsadsadsa', 'test2', 'dsada@dsadsa', 'dsadsad', '_1653061903_2dCharacter.jpg', 0),
(6, 'bouhadioui', 'mahdi', 'mahdi@mahdi.com', '123', '_1653062464_about.jpg', 2147483647),
(7, 'ziad', 'elkaddari', 'ziad@ziad.com', '123', '_1653062744_person_2.jpg', 648896431);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
