-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 02:08 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vehicle_tracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `user_id`, `photo`, `remark`, `date`, `status`) VALUES
(9, 1, 'complaints.jpg', 'customer complaints', '2022-04-28 09:14:55', 'Pending'),
(10, 5, 'tata-nexon.jpg', 'car lost', '2023-04-01 05:07:06', 'Approved'),
(11, 0, 'PHOTO-2022-07-20-17-36-30.jpg', 'fake', '2023-05-04 11:26:10', 'Pending'),
(12, 4, 'PHOTO-2022-07-20-17-36-31 (2).jpg', 'hjk', '2023-05-04 11:27:58', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE IF NOT EXISTS `user_registration` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `name`, `address`, `email`, `mobile`, `password`) VALUES
(1, 'Arshad', 'kjkjklkl', 'arshad@gmail.com', '987654321', '123'),
(2, 'John Doe', 'Kochi', 'john@gmail.com', '9847982345', ''),
(3, 'roshan', 'ssdww', 'rj@gmail.com', '', ''),
(4, 'Joel', 'qwertyu', 'rj@gmail.com', '9847982345', '123'),
(5, 'fayis', 'qwertyu', 'francis@gmail.com', '9847982345', '123');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `no_plate` varchar(50) NOT NULL,
  `time` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `name`, `model`, `color`, `image`, `no_plate`, `time`) VALUES
(1, 'Maruti ', 'Brezza', 'red', 'front-left-side-47.png', 'kl623456', ''),
(2, 'tata ', 'nexon', '', 'tata-nexon.jpg', 'green', ''),
(3, 'tata ', 'harrier', 'blue', 'harrier-exterior-right-front-three-quarter-2.jpeg', 'KL456789', ''),
(4, '', 'baleno', '', '', 'TS07HB7159', '1683200357.0750666');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
