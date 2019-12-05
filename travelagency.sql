-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 06:18 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelagency`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `c_id` varchar(10) NOT NULL,
  `c_name` text NOT NULL,
  `c_address` varchar(20) NOT NULL,
  `c_phone` int(11) NOT NULL,
  `c_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `customer_info`
--

TRUNCATE TABLE `customer_info`;
--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`c_id`, `c_name`, `c_address`, `c_phone`, `c_email`) VALUES
('100', 'Ariful Islam', 'm 105/3 , west merul', 2147483647, 'arif@gmail.com'),
('101', 'Md. Jusef', 'm 105/3 , gulshan', 2147483647, 'mdjusef143@gmail.com'),
('101', 'Md. Jusef', 'm 105/3 , gulshan', 2147483647, 'mdjusef143@gmail.com'),
('', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `dest_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `destination`
--

TRUNCATE TABLE `destination`;
-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `Password` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `login`
--

TRUNCATE TABLE `login`;
--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `Password`) VALUES
('arif143', '123456'),
('lskdjfklsd', 'lsdjflksdj'),
('mdjusef134', 'sdfsdf@gmail.'),
('mdjusef143', 'saldkfjlskdjf'),
('wow143', 'slkajdflksjf');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `user_name` varchar(15) NOT NULL,
  `country_code` int(5) NOT NULL,
  `phone_no` int(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `sign_up`
--

TRUNCATE TABLE `sign_up`;
--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`user_name`, `country_code`, `phone_no`, `email`, `password`) VALUES
('Md. Jusef', 0, 1849965506, 'mdjusef143@gmail.com', 'asdfsdfsdffds'),
('Md. Jusef', 0, 1788006532, 'sdfsdf@gmail.com', 'sdfsdf@gmail.com'),
('md. jusef', 0, 1849965506, 'mdjusef143@gmail.com', 'sadfsdfsdfsdf'),
('md. jusef', 0, 1849965506, 'mdjusef143@gmail.com', 'sadfsdfsdfsdf'),
('md. jusef', 0, 1849965506, 'mdjusef143@gmail.com', 'sadfsdfsdfsdf'),
('md. jusef', 0, 1849965506, 'mdjusef143@gmail.com', 'sadfsdsf3'),
('md. jusef', 0, 1849965506, 'mdjusef143@gmail.com', 'dfgfdgdf343'),
('Md. Jusef', 91, 1849965506, 'sdfsdf@gmail.com', 'sdfsdf234234'),
('md. juse', 0, 1788006532, 'karim@gmail.com', 'qwertyusdf'),
('Md. Jusef', 0, 1849965506, 'mdjusef143@gmail.com', 'asddfsfgdg21321'),
('jusef', 966, 12345678, 'kdjfkd@gmail.com', 'lskjfkdsf23423'),
('pial Gosh', 966, 23483456, 'pialgosh@gmail.com', 'lskjfksd654564'),
('Sayem Md Fahim', 966, 1840207330, 'Sayem@gmail.com', 'sdfdsf654652456'),
('sayem', 966, 9384758, 'sldkf@gmail.com', 'lsdkfjklsd524'),
('Md. Jusef', 880, 1849965506, 'Sayem@gmail.com', 'sdfsdfsdff4324'),
('Md. Jusef', 1, 1849965506, 'mdjusef143@gmail.com', 'dgdsfgdg34534'),
('Md. Jusef', 1, 1849965506, 'mdjusef143@gmail.com', 'dfgdgdfg345435'),
('Md. Jusef', 880, 1849965506, 'mdjusef143@gmail.com', 'SDFSDFSDF325435'),
('Md. Jusef', 880, 1849965506, 'mdjusef143@gmail.com', ''),
('md. jusef', 880, 1849965506, 'mdjusef143@gmail.com', 'sdfsdfsdfsd34234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
