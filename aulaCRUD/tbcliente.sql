-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 09:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdaula1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcliente`
--

CREATE TABLE `tbcliente` (
  `codígo` int(11) NOT NULL,
  `nome` varchar(90) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbcliente`
--

INSERT INTO `tbcliente` (`codígo`, `nome`, `email`) VALUES
(1, 'anselmo', 'anselmo@gmail.com'),
(3, 'Luan Rodrigues Petruitis', 'luan@gmail.com'),
(4, 'Luan Rodrigues Petruitis', ''),
(5, 'Luan Rodrigues Petruitis', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`codígo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `codígo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
