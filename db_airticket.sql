-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 05:04 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jonflight`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('l','p','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `phone`, `email`, `gender`) VALUES
(243, 'arek', 'surabaya', '08997', 'b@gmail.com', 'l'),
(244, 'Reza', 'Arsyad', '08589', 'r@gmail.com', 'l'),
(245, 'Akang', 'Rajab', '08212', 'a@gmail.com', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `reservation_id` int(10) DEFAULT NULL,
  `seat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`id`, `customer_id`, `reservation_id`, `seat`) VALUES
(98, NULL, 103, 1),
(99, NULL, 104, 15),
(100, NULL, 105, 2),
(101, NULL, 106, 6),
(102, NULL, 107, 14),
(103, NULL, 108, 5),
(104, 243, 108, 10),
(105, 244, 109, 2),
(106, 245, 110, 7);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(10) NOT NULL,
  `reservation_code` varchar(8) NOT NULL,
  `reservation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(10) DEFAULT NULL,
  `rute_id` int(10) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `proof_of_payment` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `reservation_code`, `reservation_date`, `user_id`, `rute_id`, `status`, `proof_of_payment`) VALUES
(103, 'JO80986', '2018-02-28 06:31:38', NULL, 8, 1, '552d62985d2f84f2bb6f19ce42901ce4b1fb6b52870604c6bfdf35c72b1a0bdc.jpg'),
(104, 'JO68240', '2018-02-28 07:24:41', NULL, 8, 1, 'd657007d4b7652bc6238369ba0d81929cafb3cc566c2b322e94f32e71723ef5c.jpg'),
(105, 'JO58561', '2018-02-28 07:31:34', NULL, 8, 1, '60c3a6db927857fb494d26088122a27323b590f3a0ccabba4f9619ce7ad7609a.jpg'),
(106, 'JO63049', '2018-02-28 08:16:20', NULL, 8, 1, 'f2c2e73bdc17eb15388fc19571a839f2e7dddc4f3c0abd7b01c9a15964b50b7a.jpg'),
(107, 'JO77617', '2018-02-28 08:21:52', NULL, 8, 1, '283dbe13f08eeb3d77794bfb3609b46785440f7b3786dcca030db248e3b06fe8.jpg'),
(108, 'JO53214', '2018-02-28 10:52:19', 37, 8, 1, '664bdd3314db1f5ab8332f020a060b9c34a31874196f2a71f9f14e2375b6ee8d.png'),
(109, 'JO22414', '2018-03-01 03:34:05', 37, NULL, 1, '21c0e89179dca8de4b640553de3dcd727ec7365bc1235e3ec4d12bd368327482.png'),
(110, 'JO35123', '2018-03-01 03:39:49', 37, 13, 1, '903c1cd6db8be9ace12380cc76d93d716d88e1340076707baead5cc3212b4fa4.png');

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id` int(10) NOT NULL,
  `depart` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `arrive` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rute_from` varchar(50) NOT NULL,
  `rute_to` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `class` enum('First','Economy') NOT NULL,
  `transportation_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id`, `depart`, `arrive`, `rute_from`, `rute_to`, `price`, `class`, `transportation_id`) VALUES
(8, '2018-01-02 01:45:00', '2018-01-01 02:30:00', 'Purwokerto', 'Jakarta', 899999, 'First', 3),
(10, '2018-01-01 02:10:00', '2018-01-01 04:30:53', 'Padang', 'Purwokerto', 980000, 'First', 3),
(11, '2018-01-01 05:05:00', '2018-01-01 07:30:00', 'Jakarta', 'Jepara', 700000, 'First', 6),
(13, '2018-01-01 03:37:15', '2018-01-01 06:37:21', 'Jambi', 'Bali', 970000, 'First', 3);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(100) NOT NULL,
  `banner_description` varchar(100) NOT NULL,
  `banner_other` varchar(100) NOT NULL,
  `banner_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `banner_title`, `banner_description`, `banner_other`, `banner_img`) VALUES
(1, 'JONFLIGHT', 'Everything will be ''SANS', 'Fast and easy :D', 'c9c86e8910a6122714088d3321bafd5f3c09170bdcefe1af39deeb5d0d6563f0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `id` int(10) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `seat_qty` varchar(10) NOT NULL,
  `transportation_typeid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`id`, `code`, `description`, `seat_qty`, `transportation_typeid`) VALUES
(3, 'Garuda Indonesia', 'Maskapai penerbangan nomor 1. di Indonesia', '15', 1),
(6, 'Lion Air', 'Maskapai penerbangan berorientasi objek', '27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transportation_type`
--

CREATE TABLE `transportation_type` (
  `id` int(10) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportation_type`
--

INSERT INTO `transportation_type` (`id`, `description`) VALUES
(1, 'Plane');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', '$2y$10$S5O6PUXn9gzdlrw.gLfw1ejqSWZXYE4kZXk3BKZfyS52x.81jZ3fK', 2),
(37, 'akuadalah', 'aku', '$2y$10$b56HqYthrx28tl7IVbVlw.C7kZhivfERtxKi2xqbdbq7G0HtN0D9K', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `passengers_ibfk_2` (`reservation_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rute_id` (`rute_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportation_id` (`transportation_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportation_ibfk_1` (`transportation_typeid`);

--
-- Indexes for table `transportation_type`
--
ALTER TABLE `transportation_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;
--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transportation_type`
--
ALTER TABLE `transportation_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `passengers`
--
ALTER TABLE `passengers`
  ADD CONSTRAINT `passengers_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `passengers_ibfk_2` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`rute_id`) REFERENCES `rute` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`transportation_id`) REFERENCES `transportation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `transportation`
--
ALTER TABLE `transportation`
  ADD CONSTRAINT `transportation_ibfk_1` FOREIGN KEY (`transportation_typeid`) REFERENCES `transportation_type` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
