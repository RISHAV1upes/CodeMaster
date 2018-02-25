-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2017 at 11:06 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `year` int(1) NOT NULL,
  `password` varchar(20) NOT NULL,
  `count` int(1) NOT NULL,
  `q1` longtext NOT NULL,
  `q2` longtext NOT NULL,
  `q3` longtext NOT NULL,
  `q4` longtext NOT NULL,
  `q5` longtext NOT NULL,
  `q6` longtext NOT NULL,
  `q7` longtext NOT NULL,
  `q8` longtext NOT NULL,
  `q9` longtext NOT NULL,
  `q10` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`name`, `email`, `phone`, `branch`, `year`, `password`, `count`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES
('name', 'ma@mail.com', '8506866790', 'CSE-CCVT', 1, '123456', 1, '', 'as', 'sd', '', '', '0', '# include<stdio.h>\r\nvoid main()\r\n{\r\n     int i;\r\n     printf(\"First 10 natural numbers are\n\");\r\n     for(i=1;i<=10;i++)\r\n    {\r\n           printf(\"%d\",i);\r\n          printf(\"\n\");\r\n     }\r\n}', '# include<iostream>\r\nusing namespace std;\r\nint main()\r\n{\r\n     int i=10;\r\n     do\r\n     {\r\n           cout<<i;\r\n     }while(i>=1);\r\n}', '# include<iostream>\r\nusing namespace std;\r\nint main()\r\n{ \r\n    int i=10;\r\n    cout<<i;\r\n}', '12'),
('Rishav Ranjan', 'ris@gmail.com', '8506866790', 'CSE-G&G', 1, '123456', 1, '', '', '', '', '', '', '# include<stdio.h>\r\nvoid main()\r\n{\r\n   printf(\"aaa\");\r\n}', '', '', ''),
('RISHAV RANJAN', 'rishav2015ranjan@gmail.com', '8506866790', 'CSE-CCVT', 1, '123456', 1, '', '', '', '', '', '', '', '', '', ''),
('test', 'test@mail.com', '8540845825', 'CSE-CCVT', 3, '123456', 1, '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
