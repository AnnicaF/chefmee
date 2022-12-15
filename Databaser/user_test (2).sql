-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Vært: localhost:8889
-- Genereringstid: 15. 12 2022 kl. 18:18:41
-- Serverversion: 5.7.34
-- PHP-version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `user_test`
--

CREATE TABLE `user_test` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `token` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal` int(4) NOT NULL,
  `phone` int(10) NOT NULL,
  `gender` enum('f','m','o') NOT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `user_test`
--

INSERT INTO `user_test` (`id`, `email`, `token`, `password`, `firstName`, `lastName`, `address`, `postal`, `phone`, `gender`, `dob`) VALUES
(71, 'Doe@yahoo.com', 'b0af67a6656312aaac58c6d454ffc97d046e49317418b37fa521a4ffbfec0f004cb06cccb0516a4b38f89c03c6ca15667923', '$2y$10$DBlo2GcWEhK3ohJDOK62LO1kx9RXKLz7Ox.mMEjyUbd7JEw7knh.G', 'John', 'Doe', 'Cortex park vest 13', 5230, 26564523, 'm', '1978-05-08'),
(72, 'pia78@gmail.com', '1d24ce7d1ab09bb0b693052f3ba8be01257f4d77ac49959b93f51196a9daf89e2e113f4710e97ae24ce9c10bea4df4793900', '$2y$10$DOlMuxVT8A94Bu2buFxzsuiqMKcVxXqfDt9DMsinbTMMqToJnt7xK', 'Pia', 'Nielsen', 'Lykkevej 3', 4700, 45637363, 'f', '1998-06-12'),
(73, 'lauhansen@gmail.com', 'c566da9c2e04aeb728da60d79daffd7ace9651c0d63f184457f89f7774e7b43e7df1bdcf43ef3b1a5b2ced437ff31f5f5d1f', '$2y$10$PbxTI8TEv0RhhqUKilJgxOoRIQuENJ2iYGmeHORwJFUOs2wYslGEK', 'Laura', 'Hansen', 'Batmandvænget 456', 7600, 87676543, 'f', '1978-03-23'),
(74, 'martin@gmail.com', 'c4b5ae163905cb2c7847cd112a3642c24836ecb4f3cbda6436ce6fb73fb79ada7d451b89417f92f15c326408f960c0acfe00', '$2y$10$nDgqIWPj3UWvLyodpMwaK.cnZNXMr6xZqamDcc3GDeV1PRbelZ4mC', 'Martin', 'Jensen Lykkeberg', 'Granitvej 56', 4684, 34567856, 'm', '1984-07-04'),
(75, 'laur34@outlook.com', '380ca5e0484efe18855abbbc317799a333fcec72358ad2f3473e0525b421aca866e6fb227724dd29e5b38b20e760126ade3f', '$2y$10$VNXT0R.gurgL12PwnmlC7ONkLzwBRdXOwagIaC3QVFsU1d2ZR2AVG', 'Kristina', 'Lauersen', 'Dystedvej 4', 5230, 45647465, 'o', '1984-07-26'),
(76, 'Henri@privat.dk', 'd217b9e1889c8b7094af8dc7b93ae7adc5be9a247db0232c654b5677d22658cde0b93ae7c140536aacd4aed36b77efa00998', '$2y$10$H99PN31d/OYEbi4kCGlkEeYY8SrqTAuH01JMNpFj.GsuaVVN5AzSO', 'Henriette', 'Olsen', 'Parkvej 67', 5230, 76564543, 'f', '1988-10-13'),
(77, 'jacob@yahoo.dk', '96b4704a0e9be5bce33c6bec2d7ce2150deea35f8e5c9aacfd567088a4b44b616fa8360fb97bdd5d42ecf3fa095a9ced9da5', '$2y$10$qiGYaL.KzxNA8495aLsGNeDGtjfnfW3Qeps8lH9AvTQxj5yOQpRaG', 'Jacob', 'Petersen', 'Frederiksvej 78', 5000, 67453424, 'm', '1999-06-17'),
(78, 'henrikpert@yahoo.dk', '96ce4fe05f4c27c3337ba7e5bafb28f5f1e1cc8f87d71252887a32782b6abba1c0af5aca3eb50be4f0d3dab17c093737daa1', '$2y$10$.i/FEd6YvraqM9l9NK1ZPO/mi5qhn9RXC1l8P1Tlf97WWBNElmNUy', 'Henrik', 'Pert', 'Dalagøta', 100, 12345678, 'm', '1989-10-20'),
(79, 'rikke@gmail.com', '20b4c8a41e798e2cef3f59a983a90bccee299f158cb06f4e92728e1c5cd1a7d9bc6ae2cc288bac6085df12f01ab47053c7d3', '$2y$10$BTU127u83Z.vgxg1haxJpeJK5saUly9rAZ2tAnLsQq4BR4wkkm8zG', 'Rikke', 'Johansen', 'Ertebjergvej 4', 7620, 89765435, 'f', '1999-06-17');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `user_test`
--
ALTER TABLE `user_test`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `user_test`
--
ALTER TABLE `user_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
