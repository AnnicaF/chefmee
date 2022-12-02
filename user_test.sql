-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Vært: localhost:8889
-- Genereringstid: 02. 12 2022 kl. 13:08:55
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
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal` int(4) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `user_test`
--

INSERT INTO `user_test` (`id`, `username`, `email`, `verified`, `token`, `password`, `firstName`, `lastName`, `address`, `postal`, `phone`) VALUES
(1, 'annica', 'annif011098@gmail.com', 0, 'f6c97ba5398ac48b5e2d744fd052799590afec88ad628bbf0fe89e094536ddca75f0cf60e450b5091a13f31519230790cdde', '$2y$10$2cdwOnr7Be.WfXHZRCNDzOf34Pg.eoSshohN1g.oEKPF9CS3dg6mW', '', '', '', 0, 0),
(3, 'ladida', 'demo@demo.dk', 0, 'd752ac991c933da1233b7d55f588a4f75a330ea3d89fa40240f1fbdb46db894a1252d088d213326834e8aeb2fbef920a70f4', '$2y$10$UZE1WQQj1btQQISPQCsbQeuLoMVx0zQzbqUZ2Ko65pDidXX5TTZ.O', '', '', '', 0, 0),
(10, 'deeppink', 'test@tester.dk', 0, 'a0ad0fda64af8ad3ba66cadb69407ea085ab9ff0e89561d82eea31c70b9af6235e4c30d26dabf54966a8b865735462b0fddc', '$2y$10$dfNcsj4SJc/TnA84.KSbEOOcUom3BHDuDVfIyOM5N0rNPrDLk5VTG', '', '', '', 0, 0),
(11, 'Lars', 'test@123.dk', 0, '256b14627e050bb7635d8e1115177b5dc1ea4903afdb558ac16b03d9d82240d7a0e148fb6e5525eb207cca306c4020ead306', '$2y$10$mjzMGj0YCiuiVWJHBd0noeM8aCYrePDZvxJYLk9m1uQwLlZtjDQ8W', '', '', '', 0, 0),
(48, 'demo', 'demo2@demo.dk', 0, '93ec42ae7f3340e14c0a8e88776634c71bfb71a185f93175de7596a78a386285e5242ea8486cef4755950271bcddd57f3aa7', '$2y$10$rwjOjMQHsZ1cxYEg.nKiF.J4aoPkEeTRs66tY8AIFAgXQujLDP0FO', '', '', '', 0, 0),
(49, 'demo', 'demo3@demo.dk', 0, '9624e6eb4b34e8ff7e6b5694c9bba4ab6af9c2242333d64549ae4f0110c56d600c971f2693c44a5039b45cb7cf334cfcb003', '$2y$10$.J4hxBwFEbYYPEtHfQK4Y.W4Gh.CA4wks2E.Tc.Uo2zaqc4NTk5BG', '', '', '', 0, 0),
(50, 'demo', 'demo4@demo.dk', 0, '1a122737eeef5c4cb89db2e6ef7723f455fb8422914875ac8b4fc23c72438de555bc1b6f75d92b11fb15860842161348adc5', '$2y$10$xwaSd9qCvxrAK.crv/iRSuyouSXLHhfraxcvbRuavMc8CqSEkLGIi', '', '', '', 0, 0),
(51, 'test', 'Adam@test.dk', 0, '5f7ff0d7fcff90329f5058824664b42bbc14989e5c5763d6ca90afa3efa2efb707b26a9bf98d88b82e958b7512c42afdca2c', '$2y$10$HhOOa8GIE8TC9pEL2GKupOkNPJlIU/8WpXtlvZdP1iCmcY9xKNZdy', '', '', '', 0, 0),
(52, 'Annica', 'test@12.dk', 0, '0a2cab3949a029c0b0638cf88640f74d691ef32441152b1e88edbfad71c879753b3ddbd58e57769ea9a8f1c344c9be2471a4', '$2y$10$i5N9BnKAPs8bEl.qcUh/VOt4MzKfTMQHZgBDKXFRJeK5SiwW2/7vK', '', '', '', 0, 0),
(53, 'Jacob', 'jacob@12.dk', 0, 'cbaaf4723ebe8422fab675b60b4bcaa4341a445aade0fb251379c65690b6c69a041b3a4868aabc858ec800059f1a10ce8d4f', '$2y$10$PB9K7iZtjD9mFpXKzLYvTu0B0WXB31pqe3.aWruise48nCzkIfbGC', '', '', '', 0, 0),
(54, 'annica', 'annica@test.com', 0, 'fd9e9d685edc1f8a8c6ada86fd38034f75ebcea89469b98dc19763dd9d1ab27cb05d1169d95a706c057b96d5b00e6972a084', '$2y$10$L4.u21jYYRXD5OlWtmjwvOggaCPte5eF/MYuVOALdAEXWSlVOGub2', 'aninca', 'frederiksen', '', 0, 0),
(55, 'annica', 'anni@gmail.dk', 0, 'd125499bc44ae4496a03aa0535707f057882c82820516b2269eab3c647bbe524d41b68bcdccabf56b08cfbecbf34aa722601', '$2y$10$2yi0/zWqfCRawYTblACIhOZs0HLYy0sbkZ4hbFlgYwHyfry5A8lgi', 'lene', 'laresn', 'lukke vej ', 1234, 12345678);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
