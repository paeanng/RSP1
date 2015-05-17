-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2015 at 03:31 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `team18`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `empno` int(8) NOT NULL,
  `email` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `pwd` varchar(40) NOT NULL,
  PRIMARY KEY (`empno`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`empno`, `email`, `fname`, `lname`, `pwd`) VALUES
(2001100, 'F.Christmas@murdoch.edu.au', 'Father', 'Christmas', 'password'),
(2001101, 'D.Duck@murdoch.edu.au', 'Donald', 'Duck', 'password'),
(2001102, 'Da.Duck@murdoch.edu.au', 'Dafff', 'Duck', 'password'),
(2001669, 'L.Langford@murdoch.edu.au', 'Lauren', 'langford', 'password'),
(20001001, 'T.Abbott@murdoch.edu.au', 'Tony', 'Abbott', 'password'),
(20001002, 'J.Langford@murdoch.edu.au', 'Jorge', 'Langford', 'password'),
(20001003, 'T.Jones@murdoch.edu.au', 'Tom', 'Jones', 'passwprd'),
(20001091, 'S.Jones@murdoch.edu.au', 'Susan', 'Jones', 'password'),
(20001508, 'D.Smith@murdoch.edu.au', 'David', 'Smith', 'password'),
(20001666, 'L.Hill@murdoch.edu.au', 'Lauryn', 'Hill', 'password'),
(20001667, 'J.Dilla@murdoch.edu.au', 'Jay', 'Mascis', 'password'),
(20001668, 'P.Ng@murdoch.edu.au', 'Paean', 'Ng', 'password'),
(20001700, 'P.Collins@murdoch.edu.au', 'Phil', 'Collins', 'password'),
(20001918, 'D.Bowie@murdoch.edu.au', 'David', 'Bowie', 'password'),
(20001946, 'J.Brown@murdoch.edu.au', 'Jo', 'Brown', 'password');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
