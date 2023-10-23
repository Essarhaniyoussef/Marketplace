-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 05:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE mini-market;

USE mini-market;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini-market`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `IdCategorie` int(11) NOT NULL,
  `NomCategorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`IdCategorie`, `NomCategorie`) VALUES
(1, 'T-Shirts'),
(2, 'Sneakers'),
(3, 'Jeux Vidéo'),
(4, 'Phone Cases');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `IdProduit` int(11) NOT NULL,
  `IdCategorie` int(11) NOT NULL,
  `NomProduit` varchar(250) NOT NULL,
  `ImageProduit` varchar(1000) NOT NULL,
  `PrixProduit` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`IdProduit`, `IdCategorie`, `NomProduit`, `ImageProduit`, `PrixProduit`) VALUES
(1, 1, 'Future High Off Life Classic T-Shirt', 'img/tshirts/tshirt1.jpg', '25.00'),
(2, 1, 'Enderman Classic T-Shirt', 'img/tshirts/tshirt2.jpg', '25.00'),
(3, 1, 'Goosebumps Vintage T-Shirt', 'img/tshirts/tshirt3.jpg', '25.00'),
(4, 1, 'Goosebumps T-Shirt', 'img/tshirts/tshirt4.jpg', '25.00'),
(5, 1, 'Let It Be Classic T-Shirt', 'img/tshirts/tshirt5.jpg', '25.00'),
(6, 1, 'Travis Scott Goosebumps Lyrics T-Shirt', 'img/tshirts/tshirt6.jpg', '25.00'),
(7, 1, 'Travis Scott Cactus Jack T-Shirt', 'img/tshirts/tshirt7.jpg', '25.00'),
(8, 1, 'Berserk: Egg of the King T-Shirt', 'img/tshirts/tshirt8.jpg', '25.00'),
(9, 2, 'Nike Air Jordan 1 Retro High Off-White Chicago Sample', 'img/sneakers/sneaker1.jfif', '18000.00'),
(10, 2, 'Nike Air Jordan 1 Retro High Off-White University Blue', 'img/sneakers/sneaker2.jfif', '4750.00'),
(11, 2, 'Nike Air Jordan 1 Retro High Off-White NRG', 'img/sneakers/sneaker3.jfif', '20000.00'),
(12, 2, 'Nike Air Jordan 1 Retro High Turbo Green', 'img/sneakers/sneaker4.jfif', '550.00'),
(13, 2, 'Nike Air Jordan 1 High Dior', 'img/sneakers/sneaker5.jfif', '24000.00'),
(14, 2, 'Nike Air Jordan 1 High Travis Scott', 'img/sneakers/sneaker6.jfif', '2500.00'),
(15, 2, 'Nike Air Jordan 1 High Patent Bred', 'img/sneakers/sneaker7.jfif', '425.00'),
(16, 2, 'Nike Air Jordan 4 Off-White Sail', 'img/sneakers/sneaker8.jfif', '1950.00'),
(17, 3, 'Elden Ring - Standard Edition, PS5', 'img/games/game1.png', '59.99'),
(18, 3, 'God of War: Ragnarök, PS5', 'img/games/game2.png', '79.99'),
(19, 3, 'Marvel\'s Spider-Man: Miles Morales, PS5', 'img/games/game3.png', '59.99'),
(20, 3, 'The Last of Us Part I, PS5', 'img/games/game4.png', '79.99'),
(21, 3, 'Call of Duty: Modern Warfare II, PS5', 'img/games/game5.png', '69.99'),
(22, 3, 'Gran Turismo 7, PS5', 'img/games/game6.png', '59.99'),
(23, 3, 'Horizon Forbidden West, PS5', 'img/games/game7.png', '69.99'),
(24, 3, 'Stray, PS5', 'img/games/game8.png', '29.99'),
(25, 4, 'Cute Monsters Pattern iPhone Case', 'img/phonecase/phonecase1.jpg', '33.34'),
(26, 4, 'Travis Scott - Highest in the Room iPhone Case', 'img/phonecase/phonecase2.jpg', '37.51'),
(27, 4, 'Travis Scott iPhone Tough Case', 'img/phonecase/phonecase3.jpg', '47.23'),
(28, 4, 'Katana iPhone Tough Case', 'img/phonecase/phonecase4.jpg', '33.34'),
(29, 4, 'Life is Strange Butterfly iPhone Case', 'img/phonecase/phonecase5.jpg', '31.81'),
(30, 4, 'Consequences (Life Is Strange: Before The Storm) iPhone Case', 'img/phonecase/phonecase6.jpg', '37.50'),
(31, 4, 'Life is Strange Stickers iPhone Case', 'img/phonecase/phonecase7.jpg', '41.95'),
(32, 4, 'Chloe Price - Misfit Skull (Life is Strange) iPhone Case', 'img/phonecase/phonecase8.jpg', '31.95'),
(33, 4, 'BUTTERFLY EFFECT iPhone Case', 'img/phonecase/phonecase9.jpg', '33.34'),
(34, 4, 'Wish You Were Here iPhone Case', 'img/phonecase/phonecase10.jpg', '38.89'),
(35, 4, 'Wish You Were Here: The Wavy Edition iPhone Case', 'img/phonecase/phonecase11.jpg', '40.89'),
(36, 4, 'Travis Scott Cactus Jack iPhone Case', 'img/phonecase/phonecase12.jpg', '47.23'),
(37, 4, 'Horror Poster iPhone Case', 'img/phonecase/phonecase13.jpg', '33.34'),
(38, 4, 'Butterfly Effect (Life Is Strange) iPhone Case', 'img/phonecase/phonecase14.jpg', '29.97'),
(39, 4, '\"Rewind\" Life Is Strange iPhone Case', 'img/phonecase/phonecase15.jpg', '31.21'),
(40, 4, 'Consequences (Life Is Strange) iPhone Case', 'img/phonecase/phonecase16.jpg', '29.97');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IdUser` int(11) NOT NULL,
  `NomUser` varchar(255) NOT NULL,
  `EmailUser` varchar(255) NOT NULL,
  `TelephoneUser` varchar(15) NOT NULL,
  `AdresseUser` varchar(1000) NOT NULL,
  `RegisterDate` date NOT NULL DEFAULT current_timestamp(),
  `PasswordUser` varchar(255) NOT NULL,
  `isAdmin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IdUser`, `NomUser`, `EmailUser`, `TelephoneUser`, `AdresseUser`, `RegisterDate`, `PasswordUser`, `isAdmin`) VALUES
(1, 'Abdelali', 'abdelali@gmail.com', '0600000000', 'XXX Tanger, Maroc', '2023-01-27', '7090902856b75046fe7d861e0ea4cc64', 0),
(2, 'admin', 'admin@admin', '0666666666', '123XXX', '2023-01-28', '0192023a7bbd73250516f069df18b500', 1),
(3, 'Ahmed', 'ahmed@gmail.com', '0611112222', '123 Tanger, Maroc', '2023-01-29', '32aa2fd87338e241978c48ab319641bc', 0),
(5, 'Imad', 'imad123@gmail.com', '0612345678', 'xxx , xxx Maroc', '2023-01-30', '65dd235d35b28fd48832023d7fa985fe', 0),
(6, 'Youssef', '123456@gmail.com', '0770191655', 'espagne ', '2023-01-30', '8e34cd6bedab9f18eb47b6772d16dc95', 0),
(7, 'user1', 'user@gmail.com', '0677777777', 'Ancienne Route de l’Aéroport, Km 10, Ziaten', '2023-01-30', '6ad14ba9986e3615423dfca256d04e3f', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`IdCategorie`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`IdProduit`),
  ADD KEY `IdCategorie` (`IdCategorie`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `IdCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `IdProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`IdCategorie`) REFERENCES `categorie` (`IdCategorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
