-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 11:21 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie project`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `countryId` int(10) NOT NULL,
  `countryName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countryId`, `countryName`) VALUES
(2201, 'Germany'),
(2202, 'France'),
(2203, 'Turkey'),
(2204, 'United Kingdom'),
(2205, 'Australia'),
(2206, 'China'),
(2207, 'India'),
(2208, 'Spain'),
(2209, 'Brazil'),
(2210, 'USA'),
(2211, 'Bangladesh'),
(2212, 'Korean'),
(2213, 'Ireland');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `directorId` int(10) NOT NULL,
  `Director_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`directorId`, `Director_name`) VALUES
(100, 'Guillermo del Toro'),
(102, 'Fernando Meirelles'),
(103, 'FlorianHenckelvon Donnersmarck'),
(104, 'Yann Samuel'),
(105, 'Mahsun Kırmızıgl'),
(106, 'Jonathan Newman'),
(107, 'George Miller'),
(108, 'Wilson Yip'),
(109, 'Madhu C.Narayanan'),
(110, 'Tauquir Ahmed'),
(111, 'Anthony  joe Russo'),
(112, 'Paul Thomas Anderson'),
(113, 'Jee-woon Kim'),
(114, 'Martin Brest'),
(115, 'Hwan-kyung Lee'),
(116, 'Robert Zemeckis'),
(117, 'Rob Reiner'),
(118, 'Mostofa Sarwar Farooki'),
(119, 'Anand Tucker'),
(120, 'Wes Anderson'),
(121, 'Quentin Tarantino'),
(122, 'Anjali Menon'),
(123, 'Karan Johar');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movieId` int(10) NOT NULL,
  `countryId` int(10) DEFAULT NULL,
  `directorId` int(10) DEFAULT NULL,
  `budget` varchar(60) DEFAULT NULL,
  `year` int(10) DEFAULT NULL,
  `IMDBrating` int(10) DEFAULT NULL,
  `runtime` varchar(50) DEFAULT NULL,
  `title` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movieId`, `countryId`, `directorId`, `budget`, `year`, `IMDBrating`, `runtime`, `title`) VALUES
(1, 2208, 100, '$19 million', 2006, 8, '119minutes', 'Pans Labyrinth'),
(2, 2209, 102, '$3.3 million', 2002, 9, '130 minutes', 'City Of God'),
(3, 2201, 103, '$2 million', 2006, 8, '137 minutes', 'The Lives of Others'),
(4, 2202, 104, '$6.1 million', 2003, 8, '92 minutes', 'Love Me If You Dare'),
(5, 2203, 105, 'Did not mentioned', 2015, 8, '136 minutes', 'Muicize'),
(6, 2204, 106, 'Did not mentioned', 2011, 7, '90 minutes', 'Foster'),
(7, 2205, 107, '$150–185 million', 2015, 8, '120 minutes', 'Mad Max: Fury Road'),
(8, 2206, 108, '$11715578', 2008, 8, '108 minutes', 'Ip Man'),
(9, 2207, 109, '₹6.5 crore', 2019, 9, '135 minutes', 'Kumbalangi Nights'),
(10, 2211, 110, 'Did not mentioned', 2016, 9, '100 minutes', 'Oggatonama'),
(11, 2210, 111, '$356 million', 2019, 8, '181 minutes', 'Avengers:Endgame'),
(12, 2210, 112, '$25,000,000', 2007, 8, '2h 38min', 'There Will Be Blood'),
(13, 2212, 113, 'Did not mentioned', 2010, 8, '2h 24min', 'I Saw the Devil'),
(14, 2210, 114, '$31,000,000', 1993, 8, '2h 36min', 'Scent of a Woman'),
(15, 2212, 115, '$31,000,000', 2013, 8, '2h 07min', 'Miracle in Cell No. 7'),
(16, 2210, 116, '$55,000,000', 1994, 9, '144 minutes', 'Forrest Gump'),
(17, 2210, 117, '$14,000,000', 2010, 8, '90 minutes', 'Flipped'),
(18, 2210, 117, '$16,000,000', 1989, 8, '95 minutes', 'When Harry Met Sally...'),
(19, 2210, 117, '$45,000,000', 2007, 7, '97 minutes', 'The Bucket List'),
(20, 2210, 117, '$8,000,000', 1986, 8, '89 minutes', 'Stand by Me'),
(21, 2211, 110, 'Did not mentioned', 2006, 7, '100 minutes', 'Rupkothar Golpo'),
(22, 2211, 110, 'Did not mentioned', 2017, 8, '143 minutes', 'Haldaa'),
(23, 2211, 110, 'Did not mentioned', 2007, 8, '128 minutes', 'Daruchini Dwip'),
(24, 2210, 100, '$19 million', 2017, 7, '123minutes', 'The Shape of Water'),
(25, 2211, 118, 'Did not mentioned', 2017, 6, '105 minutes', 'No Bed of Roses'),
(26, 2211, 118, 'Did not mentioned', 2012, 8, '106 minutes', 'Television'),
(27, 2211, 118, 'Did not mentioned', 2007, 8, '106 minutes', 'Made in Bangladesh'),
(28, 2211, 118, 'Did not mentioned', 2004, 8, '148 minutes', 'Bachelor'),
(29, 2211, 118, 'Did not mentioned', 2009, 7, '123 minutes', 'Third Person Singular Number'),
(30, 2210, 100, '$60–66 million', 2004, 7, '122minutes', 'Hellboy'),
(31, 2213, 119, '$19 million', 2010, 7, '100minutes', 'Leap Year'),
(32, 2210, 120, '$16 million', 2012, 8, '94minutes', 'Moonrise Kingdom'),
(33, 2201, 120, '$16 million', 2018, 8, '101minutes', 'Isle of Dogs'),
(34, 2204, 120, '$40 million', 2009, 8, '88minutes', 'Isle of Dogs'),
(35, 2205, 107, '$100 million', 2006, 6, '108 minutes', 'Happy Feet'),
(36, 2212, 113, '$10 million', 2008, 7, '139 minutes', 'The Good, the Bad, the Weird'),
(37, 2212, 113, '$10 million', 2005, 8, '120 minutes', 'A Bittersweet Life'),
(38, 2210, 121, '$30 million', 2003, 8, '111 minutes', 'Kill Bill: Volume 1'),
(39, 2210, 121, '$70 million', 2009, 8, '153 minutes', 'Inglourious Basterds'),
(40, 2210, 121, '$2 million', 1992, 8, '99 minutes', 'Reservoir Dogs'),
(41, 2210, 121, '$100 million', 2012, 8, '165 minutes', 'Django Unchained'),
(42, 2207, 122, '₹10 crore', 2014, 8, '175 minutes', 'Bangalore Days'),
(43, 2207, 122, '₹20 crore', 2018, 8, '175 minutes', 'Koode'),
(44, 2207, 123, '₹40 crore', 2001, 7, '210 minutes', 'Kabhi Khushi Kabhie Gham...'),
(45, 2207, 123, '₹14 crore', 1998, 8, '185 minutes', 'Kuch Kuch Hota Hai'),
(46, 2207, 123, '₹40 crore', 2010, 8, '165 minutes', 'My Name Is Khan'),
(47, 2207, 123, '₹50 crore', 2006, 6, '192 minutes', 'Kabhi Alvida Naa Kehna'),
(48, 2210, 112, '$13 millions', 1999, 8, '188 minutes', 'Magnolia'),
(49, 2210, 112, '$15 millions', 1997, 8, '155 minutes', 'Boogie Nights'),
(50, 2210, 112, '$35 millions', 2017, 8, '130 minutes', 'Phantom Thread');

-- --------------------------------------------------------

--
-- Table structure for table `moviecast`
--

CREATE TABLE `moviecast` (
  `moviecastId` int(15) NOT NULL,
  `movieId` int(10) DEFAULT NULL,
  `Castname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moviecast`
--

INSERT INTO `moviecast` (`moviecastId`, `movieId`, `Castname`) VALUES
(1, 1, 'Sergi Lopez'),
(2, 2, 'Alexandre Rodrigues'),
(3, 2, 'Leandro Firmino da Hora'),
(4, 3, 'Sebastian Koch'),
(5, 3, 'Martina Gedeck'),
(6, 4, 'Marion Cotillard'),
(7, 4, 'Guillaume Canet'),
(8, 5, 'Mahsun Kırmızıgl'),
(9, 6, 'Ioan Gruffudd'),
(10, 6, 'Toni Collette'),
(11, 7, 'Tom Hardy'),
(12, 7, 'Charlize Theron'),
(13, 8, 'Donnie Yen'),
(14, 9, 'Fahad Faasil'),
(15, 10, 'Shahiduzzaman Selim'),
(16, 10, 'Fazlur Rahman Babu'),
(17, 11, 'Chris Evans'),
(18, 11, 'Scarlet Johanson'),
(19, 11, 'Robert Downey Jr.'),
(20, 12, 'Daniel Day-Lewis'),
(21, 13, 'Byung-hun Lee'),
(22, 14, 'Al Pacino'),
(23, 15, 'Seung-ryong Ryu'),
(24, 16, 'Tom Hanks'),
(25, 17, 'Madeline Carroll'),
(26, 18, 'Meg Ryan'),
(27, 19, 'Jack Nicholson'),
(28, 19, 'Morgan Freeman'),
(29, 20, 'Wil Wheaton'),
(30, 21, 'Tauquir Ahmed'),
(31, 21, 'Chanchal Chowdhury'),
(32, 22, 'Zahid Hasan'),
(33, 22, 'Mosharaf Karim'),
(34, 23, 'Mosharaf Karim'),
(35, 23, 'Riaz'),
(36, 24, 'Sally Hawkins'),
(37, 25, 'Irrfan Khan'),
(38, 25, 'Nusrat Imrose Tisha'),
(39, 26, 'Nusrat Imrose Tisha'),
(40, 26, 'Chanchal Chowdhury'),
(41, 27, 'Zahid Hasan'),
(42, 28, 'Jaya Ahsan'),
(43, 29, 'Nusrat Imrose Tisha'),
(44, 29, 'Mosharaf Karim'),
(45, 30, 'Ron Perlman'),
(46, 31, 'Amy Adams'),
(47, 32, 'Edward Norton'),
(48, 33, 'Scarlet Johanson'),
(49, 34, 'Bill Murray'),
(50, 35, 'Hugh Jackman'),
(51, 36, 'Lee Byung‑hun'),
(52, 37, 'Lee Byung‑hun'),
(53, 38, 'Uma Thurman'),
(54, 39, 'Brad Pitt'),
(55, 40, 'Chris Penn'),
(56, 41, 'Jamie Foxx'),
(57, 42, 'Fahad Faasil'),
(58, 42, 'Nazriya Nazim'),
(59, 43, 'Nazriya Nazim'),
(60, 44, 'Kajol'),
(61, 44, 'Shahrukh Khan'),
(62, 45, 'Kajol'),
(63, 45, 'Shahrukh Khan'),
(64, 46, 'Kajol'),
(65, 46, 'Shahrukh Khan'),
(66, 47, 'Shahrukh Khan'),
(67, 48, 'Tom Cruise'),
(68, 49, 'Mark Wahlberg');

-- --------------------------------------------------------

--
-- Table structure for table `moviegenre`
--

CREATE TABLE `moviegenre` (
  `movieId` int(10) NOT NULL,
  `genreName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moviegenre`
--

INSERT INTO `moviegenre` (`movieId`, `genreName`) VALUES
(1, 'fantasy drama'),
(2, 'Crime film'),
(3, 'Drama film'),
(4, 'Romantic comedy'),
(5, 'Family Drama'),
(6, 'Family Drama'),
(7, 'Action Film'),
(8, 'Action Film'),
(9, 'Family Drama'),
(10, 'Family Drama'),
(11, 'FamilyDramaAction'),
(12, 'Drama'),
(13, 'ActionThriller'),
(14, 'Drama'),
(15, 'Comedy Drama'),
(16, 'Romance Drama'),
(17, 'Romance Drama'),
(18, 'Romance Drama'),
(19, 'Comedy Drama'),
(20, 'Adventure Drama'),
(21, 'Drama'),
(22, 'Drama'),
(23, 'Drama Romance'),
(24, 'Drama Fantasy'),
(25, 'Drama'),
(26, 'Drama'),
(27, 'Comedy Drama'),
(28, 'Drama'),
(29, 'Drama'),
(30, 'Action Film'),
(31, 'Romance Drama'),
(32, 'Romance Drama'),
(33, 'Animated Film'),
(34, 'Animated Film'),
(35, 'Animated Film'),
(36, 'Action Film'),
(37, 'Action Film'),
(38, 'Action Film'),
(39, 'Action Film'),
(40, 'Action Film'),
(41, 'Action Film'),
(42, 'Drama Romance'),
(43, 'Drama Romance'),
(44, 'Drama Romance'),
(45, 'Drama Romance'),
(46, 'Drama Romance'),
(47, 'Drama Romance'),
(48, 'Drama Romance'),
(49, 'Drama'),
(50, 'Drama');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(2, 'Meraz', '$2y$10$cq86SNa0Unn46UL7oUnOp.xj34ghFM9E6silo9Oh118d9s87Egtqy', '2021-07-30 20:10:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`countryId`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`directorId`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movieId`),
  ADD KEY `countryId` (`countryId`),
  ADD KEY `directorId` (`directorId`);

--
-- Indexes for table `moviecast`
--
ALTER TABLE `moviecast`
  ADD PRIMARY KEY (`moviecastId`),
  ADD KEY `movieId` (`movieId`);

--
-- Indexes for table `moviegenre`
--
ALTER TABLE `moviegenre`
  ADD PRIMARY KEY (`movieId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`countryId`) REFERENCES `country` (`countryId`),
  ADD CONSTRAINT `movie_ibfk_2` FOREIGN KEY (`directorId`) REFERENCES `director` (`directorId`);

--
-- Constraints for table `moviecast`
--
ALTER TABLE `moviecast`
  ADD CONSTRAINT `moviecast_ibfk_1` FOREIGN KEY (`movieId`) REFERENCES `movie` (`movieId`);

--
-- Constraints for table `moviegenre`
--
ALTER TABLE `moviegenre`
  ADD CONSTRAINT `moviegenre_ibfk_1` FOREIGN KEY (`movieId`) REFERENCES `movie` (`movieId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
