-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 25 déc. 2020 à 21:49
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `boutique`
--

CREATE TABLE `boutique` (
  `idboutique` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `coordx` double DEFAULT NULL,
  `coordy` double DEFAULT NULL,
  `idboutiquier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `boutique`
--

INSERT INTO `boutique` (`idboutique`, `nom`, `image`, `description`, `coordx`, `coordy`, `idboutiquier`) VALUES
(1, 'shop 1', '1929442311_1595766172.jpeg', 'boutique', 14.724858699999999, -17.4327429, 3),
(2, 'shop 2', '1364418689_1596729347.jpeg', 'telephone', 10, 10, 4);

-- --------------------------------------------------------

--
-- Structure de la table `boutiquier`
--

CREATE TABLE `boutiquier` (
  `idPers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `boutiquier`
--

INSERT INTO `boutiquier` (`idPers`) VALUES
(3),
(4),
(5),
(6);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idcategorie` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idcategorie`, `nom`) VALUES
(1, 'Telephone'),
(2, 'Accessoire'),
(3, 'Bijoux'),
(4, 'Meuble'),
(5, 'Automobile'),
(6, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `commander`
--

CREATE TABLE `commander` (
  `idcommande` int(11) NOT NULL,
  `idproduit` int(11) NOT NULL,
  `idVisiteur` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `idPers` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `sexe` enum('F','H') NOT NULL,
  `age` int(11) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `coordx` double DEFAULT NULL,
  `coordy` double DEFAULT NULL,
  `tel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`idPers`, `email`, `prenom`, `nom`, `sexe`, `age`, `mdp`, `coordx`, `coordy`, `tel`) VALUES
(3, 'amarmouhamed4@gmail.com', 'Mouhamed', 'Amar', 'H', 22, 'amar', 14, 17, '778637918'),
(4, 'fall@gmail.com', 'Ibrahima', 'Fall', 'H', 12, 'fall', 14, 17, '55'),
(5, 'sara@gmail.com', 'sara', 'sara', 'H', 23, 'sara', 14.724858699999999, -17.4327429, '777737437'),
(6, 'madiou@gmail.com', 'madiou', 'madiou', 'H', 15, 'madiou', 10, 10, '1'),
(7, 'tanou@gmail.com', 'tanou', 'diallo', 'H', 23, 'tanou', 14.724858699999999, -17.4327429, '1'),
(8, 'amina@gmail.com', 'amina', 'diallo', 'F', 25, 'amina', 10, 10, '772683985'),
(9, 'fatoumata@gmail.com', 'Fatoumata', 'Diallo', 'F', 4, 'fatoumata', 10, 10, '78'),
(10, 'nsjdjeje@keke.jdjd', 'Babacar', 'Ndong', 'H', 21, 'baba', 10, 10, '781401217'),
(11, 'fama@gmail.com', 'fama', 'dia', 'H', 21, 'fama', 14.724858699999999, -17.4327429, '772683985');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idproduit` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `etat` enum('e','v') DEFAULT 'e',
  `idboutique` int(11) NOT NULL,
  `idcategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idproduit`, `nom`, `image`, `description`, `quantite`, `prix`, `etat`, `idboutique`, `idcategorie`) VALUES
(1, 'Produit 1', 'img1.jpg', 'description du produit', 2, 5000, 'e', 1, 1),
(2, 'Produit 2', 'img2.jpg', 'description du produit', 2, 1000, 'e', 1, 1),
(3, 'Produit 3', 'img3.jpg', 'description du produit', 2, 400000, 'e', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE `visiteur` (
  `idPers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `visiteur`
--

INSERT INTO `visiteur` (`idPers`) VALUES
(3),
(4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `boutique`
--
ALTER TABLE `boutique`
  ADD PRIMARY KEY (`idboutique`),
  ADD KEY `idboutiquier` (`idboutiquier`);

--
-- Index pour la table `boutiquier`
--
ALTER TABLE `boutiquier`
  ADD PRIMARY KEY (`idPers`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcategorie`);

--
-- Index pour la table `commander`
--
ALTER TABLE `commander`
  ADD PRIMARY KEY (`idcommande`,`idproduit`,`idVisiteur`),
  ADD KEY `idproduit` (`idproduit`),
  ADD KEY `idVisiteur` (`idVisiteur`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`idPers`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idproduit`),
  ADD KEY `idboutique` (`idboutique`),
  ADD KEY `idcategorie` (`idcategorie`);

--
-- Index pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`idPers`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `boutique`
--
ALTER TABLE `boutique`
  MODIFY `idboutique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idcategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commander`
--
ALTER TABLE `commander`
  MODIFY `idcommande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `idPers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idproduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `boutique`
--
ALTER TABLE `boutique`
  ADD CONSTRAINT `boutique_ibfk_1` FOREIGN KEY (`idboutiquier`) REFERENCES `boutiquier` (`idPers`);

--
-- Contraintes pour la table `commander`
--
ALTER TABLE `commander`
  ADD CONSTRAINT `commander_ibfk_1` FOREIGN KEY (`idproduit`) REFERENCES `produit` (`idproduit`),
  ADD CONSTRAINT `commander_ibfk_2` FOREIGN KEY (`idVisiteur`) REFERENCES `visiteur` (`idPers`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`idboutique`) REFERENCES `boutique` (`idboutique`),
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`idcategorie`) REFERENCES `categorie` (`idcategorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
