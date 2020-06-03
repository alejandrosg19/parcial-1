-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 10:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbvivienda`
--

-- --------------------------------------------------------

--
-- Table structure for table `vivienda`
--

CREATE TABLE `vivienda` (
  `idvivienda` int(11) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `barrio` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vivienda`
--

INSERT INTO `vivienda` (`idvivienda`, `direccion`, `telefono`, `barrio`) VALUES
(1, 'calle 5', 31383033, 'tintal'),
(2, 'calle 6', 3145879, 'tabaku'),
(3, 'calle 7', 987456, 'patio bonito'),
(4, 'calle 8', 12345, 'maria paz'),
(5, 'calle 10', 65487, 'kennedy'),
(6, 'calle 11', 852147, 'portal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vivienda`
--
ALTER TABLE `vivienda`
  ADD PRIMARY KEY (`idvivienda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vivienda`
--
ALTER TABLE `vivienda`
  MODIFY `idvivienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
