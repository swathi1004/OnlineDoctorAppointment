-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2025 at 07:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `p_name` varchar(20) NOT NULL,
  `p_mobileno` varchar(10) NOT NULL,
  `hospital_name` varchar(20) NOT NULL,
  `doctor_name` varchar(20) NOT NULL,
  `slot` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`p_name`, `p_mobileno`, `hospital_name`, `doctor_name`, `slot`) VALUES
('Swathi', '8186965376', 'NIMS Hospital', 'Dr. priya', '9:00 AM'),
('Madhavi', '8186965376', 'Ramesh Hospital', 'Dr. Anupam yadav', '9:30 AM'),
('vineela', '1234567899', 'Ramesh Hospital', 'Dr. Ankur Loda', '10:00 AM'),
('sita', '1234567899', 'Amrita Hospital', 'Dr.Duraga Naidu', '4:00 PM'),
('sita', '1234567899', 'Apolo Hospital', 'Dr. David Johnson', '9:30 AM'),
('dev', '1231241231', 'NIMS Hospital', 'Dr. John Doe', '9:00 AM'),
('Balu', '8186965376', 'Ramesh Hospital', 'Dr. Apurva', '11:00 AM');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Rating` text NOT NULL,
  `Comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `Email`, `Rating`, `Comments`) VALUES
('swathi', 'swathi_karnati@srmap', '4', 'lerkjgldfngmdtiu4w3tkdfsngmsmnvbzxnbuweyruasjnd'),
('ramesh', 'ramesh_kari@srmap.ed', '3', 'khguytuytiu'),
('heman', 'check@gmail.com', '4', 'Good'),
('vineela', 'vinnela_karnati@srma', '3', 'nice'),
('sita', 'sita_karnati@srmap.e', '3', 'dfsgs'),
('indu', 'indu@gmail.com', '3', 'asfasf'),
('Balu', 'balu_karnati@srmap.e', '5', 'good treatment');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`fname`, `lname`, `mail`, `pass`) VALUES
('swathi', 'karnati', 'swathi_karnati@srmap.edu.in', '123456'),
('swathi ', 'karnati', 'swathi_karnati@srmap.edu.in', '123456'),
('sudha', 'p', 'sudha_p@srmap.edu.in', '123456'),
('Ram', 'Krishna', 'krishna@gmail', 'krishna'),
('balu', 'karnati', 'balu0203@gmail.com', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
