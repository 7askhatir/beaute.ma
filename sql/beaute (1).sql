-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 01 sep. 2020 à 13:08
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `beaute`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `categoryDesc` varchar(500) DEFAULT NULL,
  `categoryKey` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`categoryId`, `categoryName`, `categoryDesc`, `categoryKey`) VALUES
(1, 'Coiffeur', 'Vous désirez une nouvelle coupe de cheveux pour sublimer votre visage ou une coiffure tendance pour sortir ? Que ce soit pour des cheveux longs, courts ou mi-longs, l’art du coiffage doit être laissé aux professionnels. Pour chaque objectif relooking, il y a une méthode précise que seuls les coiffeurs aguerris peuvent mettre en œuvre. Nous avons sélectionné pour vous des coiffeurs à Rabat, à Casablanca, à Tanger ou encore à Marrakech.', 'Coiffeur cheveux visage'),
(2, 'institut de beauté', 'Comme son nom l’indique, l’institut de beauté est l’endroit idéal pour recevoir différents types de soins : soin du visage soin corporel beauté des pieds  et beauté des mains ou encore l’épilation . Pour ceux qui aspirent à la détente et au bien-être, c’est le paradis du massage  en tout genre.', ' l’institut de beauté soin du visage mains épilation'),
(3, 'barbier', 'L’entretien de la barbe est une affaire sérieuse qui ne doit pas être prise à la légère. On ne procède pas n’importe comment voilà pourquoi il peut se révéler très judicieux de laisser un professionnel le faire.Les modèles de barbe tendance sont nombreux qu’il peut se révéler difficile de choisir. Pour vous aider, laissez votre barbier professionnel choisir pour vous.', 'barbier '),
(4, 'SPA', 'Un spa ou centre d\'hydrothérapie est un établissement de soins esthétiques ou de remise en forme à l\'aide de l\'hydrothérapie. Les méthodes utilisées peuvent comprendre le bain et la douche d\'hydromassage, le bain de boue, le bain de vapeur, le sauna.', 'spa  soins esthétiques');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productDes` varchar(300) DEFAULT NULL,
  `productVille` varchar(50) DEFAULT NULL,
  `productAdress` varchar(300) DEFAULT NULL,
  `productTELE` int(10) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `prix` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`productId`, `productName`, `productDes`, `productVille`, `productAdress`, `productTELE`, `categoryId`, `image`, `Email`, `prix`) VALUES
(5, 'CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC', 'vvvvvvvvvvvvvvvvvvvvvvvvvvv', 'Casablanca', 'bbbbbbbbbbbbbbbbb', 656565656, 3, '5D4C65FD-08FF-4F12-8C61-448BC1F2E32C.jpg', 'askhatir7@gmail.com', NULL),
(6, 'khalid', 'vvvvvvvvvvvvvvvvvvvvvvvvvvv', 'Casablanca', 'nnnnnnnnnnnnnnnnnnnnnnnnnnnnn', 786788888, 2, '2093E019-10A0-4A44-8F61-F0EDAB78E5BB.jpg', 'wac-52@live.fr', NULL),
(8, 'bbbbbbbbb', 'vvvvvvvvvvvvvvvvvvvvvvvvvvv', 'Rabat', 'bbbbbbbbbbbbbbbbb', 656565656, 3, '5D4C65FD-08FF-4F12-8C61-448BC1F2E32C.jpg', 'askhatir7@gmail.com', 40),
(11, 'institus de beaute 1', 'Chez AbsolutR Paris, vous ferez la connaissance de Cyril, François et Barbara, un trio de choc au service de vos cheveux et de vos envies capillaires du moment. Simple brushing pour être toujours élégante, carré wavy, frange pour changer de tête, coloration ton sur ton pour estomper quelques cheveux', 'Casablanca', 'Chez AbsolutR Paris, vous ferez la connaissance de Cyril, François et Barbara, un trio de choc au service de vos cheveux et de vos envies capillaires du moment. Simple brushing pour être toujours élégante, carré wavy, frange pour changer de tête, coloration ton sur ton pour estomper quelques cheveux', 656565656, 2, 'salon.jpg', 'askhatir7@gmail.ma', NULL),
(12, 'institus de beaute 1', 'Chez AbsolutR Paris, vous ferez la connaissance de Cyril, François et Barbara, un trio de choc au service de vos cheveux et de vos envies capillaires du moment. Simple brushing pour être toujours élégante, carré wavy, frange pour changer de tête, coloration ton sur ton pour estomper quelques cheveux', 'Casablanca', 'lot 8 22 atlas ma', 656565656, 2, 'salon.jpg', 'askhatir7@gmail.ma', NULL),
(25, 'khalid beute and spa', 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', 'Casablanca', 'nnnnnnnnnnnnnnnnnnnnnnnnnnnnn', 786788888, 2, 'salon.jpg', 'askhatir99@gmail.com', 250),
(26, 'beute 2 barber', 'Chez AbsolutR Paris, vous ferez la connaissance de Cyril, François et Barbara, un trio de choc au service de vos cheveux et de vos envies capillaires du moment. Simple brushing pour être toujours élégante, carré wavy, frange pour changer de tête, coloration ton sur ton pour estomper quelques cheveux', 'Casablanca', 'lot 822 atlas rue nahda', 656565656, 2, 'salon.jpg', 'askhatir7@ma.ma', 120);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `Id_res` int(10) NOT NULL,
  `Email_client` varchar(50) DEFAULT NULL,
  `Email_etabl` varchar(50) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `hour` varchar(100) DEFAULT NULL,
  `Prix_toutal` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`Id_res`, `Email_client`, `Email_etabl`, `date`, `hour`, `Prix_toutal`) VALUES
(28, 'vv', 'bb', 'nn', 'nnn', 12),
(29, 'vv', 'bb', 'bb', 'bb', 12),
(30, 'askhatir7@gmail.como', NULL, '2020-08-05', '9-11', 0),
(31, 'askhatir7@gmail.como', 'askhatir7@gmail.m', '2020-08-12', '11-13', NULL),
(32, 'askhatir7@gmail.como', 'askhatir7@gmail.m', '2020-08-12', '9-11', NULL),
(33, 'askhatir7@gmail.como', 'askhatir7@gmail.m', '2020-08-06', '9-11', NULL),
(38, 'askhatir7@gmail.como', NULL, '1998-12-25', '11-13', NULL),
(39, 'askhatir7@gmail.m', NULL, '2020-08-27', '15-17', NULL),
(40, 'askhatir7@gmail.m', NULL, '', '9-11', NULL),
(42, 'askhatir7@gmail.m', NULL, '', '9-11', NULL),
(56, 'askhatir7@gmail.m', 'askhatir7@gmail.m', '2020-09-10', '9-11', NULL),
(58, 'askhatir7@ma.ma', 'askhatir99@gmail.com', '', '9-11', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `userId` int(10) NOT NULL,
  `userEmail` varchar(50) DEFAULT NULL,
  `userName` varchar(30) DEFAULT NULL,
  `userPassword` varchar(100) DEFAULT NULL,
  `exist` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`userId`, `userEmail`, `userName`, `userPassword`, `exist`) VALUES
(4, 'askhatir99@gmail.com', 'askhatir', 'khalid', 'exist'),
(5, 'askhatir7@gmail.com', 'askhatir9@gmail.com', 'khalid', 'exist'),
(6, 'askhatir7@gmail.ma', 'askhatir7@gmail.ma', '12345', 'exist'),
(7, 'askhatir7@gmail.m', 'khalid', 'mamama', 'exist'),
(8, 'askhatir7@gmail.como', 'asla', 'wacwac', 'exist'),
(9, 'askhatir7@ma.ma', 'askhatir', '123456', 'exist');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `fk_category` (`categoryId`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Id_res`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id_res` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`categoryId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
