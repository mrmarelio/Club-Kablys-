-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 04:11 PM
-- Server version: 10.5.8-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kablys`
--

-- --------------------------------------------------------

--
-- Table structure for table `renginiai`
--

CREATE TABLE `renginiai` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(128) COLLATE utf8_bin NOT NULL,
  `reng_data` varchar(128) COLLATE utf8_bin NOT NULL,
  `kaina` int(11) NOT NULL,
  `renginio_pav` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `renginiai`
--

INSERT INTO `renginiai` (`id`, `pavadinimas`, `reng_data`, `kaina`, `renginio_pav`) VALUES
(3, 'In Gloom: L.F.T.', '2020 / 02 / 15', 5, '134498.jpg'),
(4, 'Black Wave: Milena Glowacka', '2020 / 02 / 22', 5, '970466.jpg'),
(5, 'Cape Kablys', '2020 / 08 / 07', 5, '469234.png'),
(6, 'Labirintas', '2020 / 11 / 13', 5, '597700.png'),
(7, 'Kablys 8', '2020 / 03 / 27', 5, '332705.jpg'),
(8, 'Intensia: Ayarcana', '2020 / 03 / 20', 5, '504428.jpg'),
(9, 'Darkroom: Helena Hauff', '2020 / 03 / 06', 5, '315755.jpg'),
(10, 'Knocturne: Under Black Helmet', '2020 / 03 / 10', 5, '895882.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) COLLATE utf8_bin NOT NULL,
  `usersEmail` varchar(128) COLLATE utf8_bin NOT NULL,
  `usersUid` varchar(128) COLLATE utf8_bin NOT NULL,
  `usersPwd` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'Marius', 'marius@gmail.com', 'Marius', '$2y$10$yWFvQfFzyO9GUZjhwljSkuCZpsFlAzL0G6kCWmwh3zOFJSS1EDGdy'),
(2, 'Lukasinas', 'lukas@gmail.com', 'Lukasinas', '$2y$10$lk2yijNKWIi.xTSgC2YhzeSDZ0TFRyWMR8JzN9W8n305SytLRiihS'),
(3, 'varius123', 'var@gmail.com', 'varius123', '$2y$10$uTyl9nRUrumvaqOeu.0y6.nvm8EluM1E2ro6.B/rCD7igCCpqsx4.'),
(4, 'kasparas', 'kasparas@gmail.com', 'kasparas', '$2y$10$LMvQ2O49RRQRAlLBQ4Lpe.Cy60nQV3svc1iQP28KMEO7ljC/LLIzq'),
(5, 'MMarius', 'MM@gmail.com', 'MMarius', '$2y$10$lGtNZPS2usaW.ORbpDBbu.pSk0uWjiYem4vpm3r5Cxcu.Q58MQ.NK');

-- --------------------------------------------------------

--
-- Table structure for table `uzsakymas`
--

CREATE TABLE `uzsakymas` (
  `ID` int(11) NOT NULL,
  `uzsakymoID` varchar(100) COLLATE utf8_bin NOT NULL,
  `renginioPavadinimas` varchar(255) COLLATE utf8_bin NOT NULL,
  `renginioData` varchar(100) COLLATE utf8_bin NOT NULL,
  `renginioKaina` varchar(100) COLLATE utf8_bin NOT NULL,
  `uzsakymoLaikas` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `uzsakymas`
--

INSERT INTO `uzsakymas` (`ID`, `uzsakymoID`, `renginioPavadinimas`, `renginioData`, `renginioKaina`, `uzsakymoLaikas`) VALUES
(1, '7', 'Kablys 8', '2020 / 03 / 27', '5', '2020-12-10 02:36:28pm'),
(2, '6', 'Labirintas', '2020 / 11 / 13', '5', '2020-12-10 02:36:47pm'),
(3, '4', 'Black Wave: Milena Glowacka', '2020 / 02 / 22', '5', '2020-12-11 01:11:00pm'),
(4, '4', 'Black Wave: Milena Glowacka', '2020 / 02 / 22', '5', '2020-12-11 01:18:50pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `renginiai`
--
ALTER TABLE `renginiai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `uzsakymas`
--
ALTER TABLE `uzsakymas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `renginiai`
--
ALTER TABLE `renginiai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uzsakymas`
--
ALTER TABLE `uzsakymas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
