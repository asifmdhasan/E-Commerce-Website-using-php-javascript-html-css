-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 06:48 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpan`
--

CREATE TABLE `adminpan` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `catgory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `contact`, `email`) VALUES
(1, 'asif', 'dhaka', '01925272409', 'asifmdhasan@gmail.com'),
(3, 'admin', 'dhaka', '01925272409', 'asifmdhasan@gmail.com'),
(5, 'lol', 'dhaka', '01925272409', 'bossasif1@gmail.com'),
(6, 'esa', 'dhaka', '065684', 'asifmdhasan@gmail.com'),
(7, 'jsdnjbnii', 'juhiucfuhaous', '65262', 'wqdhbdwkjb');

-- --------------------------------------------------------

--
-- Table structure for table `lol`
--

CREATE TABLE `lol` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `catgory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lol`
--

INSERT INTO `lol` (`id`, `name`, `price`, `description`, `catgory`) VALUES
(13, 'oioihfowihfwef', '200', 'uoiiygduucoifhfiew', 'shoe'),
(14, 'jbjfuiawf', '200', 'blue', 'pant');

-- --------------------------------------------------------

--
-- Table structure for table `productentry`
--

CREATE TABLE `productentry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `catgory` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productentry`
--

INSERT INTO `productentry` (`id`, `name`, `price`, `description`, `catgory`, `file`) VALUES
(58, 'Black T-shirt', '500', 'Stylish Black T-shirt', 'shirt', 'upload/lol.jpg'),
(59, 'Original Black', '500', 'Original Black T-shirt', 'shirt', 'upload/blackfront.jpg'),
(61, 'Shoe black  good ', '2000  ', 'Very Charming Shoe  ', 'shoe', 'upload/blackshoe.jpg'),
(62, 'Very Black     ', '6000     ', 'Black oxford shoe     ', 'shoe', 'upload/full.jpg'),
(63, 'Brown Shoe', '5000', 'Brown Shoe very charming', 'shoe', 'upload/brownshoe.jpg'),
(64, 'Convers shoe', '3000', 'Light Convers shoe', 'shoe', 'upload/conversshoe.jpg'),
(65, 'Black and White', '2500', 'Black and White conversse', 'shoe', 'upload/conversshoe2.jpg'),
(66, 'Formal Shoe', '8000', 'Formal Csual Shoe', 'shoe', 'upload/formalshoe2.jpg'),
(67, 'Green T-Shirt', '500', 'Charming Green T-Shirt', 'shirt', 'upload/greentshirt.jpg'),
(68, 'Dark Green T-Shirt', '500', 'Dark Green T-Shirt', 'shirt', 'upload/greentshirt2.jpg'),
(69, 'Half Slevee', '1000', 'Half Slevee shirt', 'shirt', 'upload/halfsleeve1.jpg'),
(70, 'Sleeve Shirt', '1000', 'Sleeve half Shirt', 'shirt', 'upload/halfsleeve2.jpg'),
(71, 'Half Shirt', '1000', 'Beautiful Half Shirt', 'shirt', 'upload/imagesjeanshalfshirt2.jpg'),
(72, 'Ash & Black Shirt', '1000', 'Shirt Ash & Black', 'shirt', 'upload/ISplittesttshirt.jpg'),
(73, 'Jeans Dark', '1500', 'Jeans Dark very stylish', 'pant', 'upload/jeans1.jpg'),
(74, 'Blue Jeans', '1500', 'Blue Jeans Pant', 'pant', 'upload/jeans2.jpg'),
(75, 'Black Jeans', '1500', 'Black Jeans Pnat For Man', 'pant', 'upload/jeans3.jpg'),
(76, 'Crave Jeans', '1500', 'Crave Jeans Blue Pant', 'pant', 'upload/jeans4.jpg'),
(77, 'Blue Jeans', '1500', 'Blue Jeans Pant For Very Stylish Man', 'pant', 'upload/jeans6.jpg'),
(78, 'Very Crave Jeans', '1500', 'Very Crave Jeans for stylish Men', 'pant', 'upload/jeans9.jpg'),
(79, 'Shade Jeans', '1500', 'Shade Jeans Pant For Man', 'pant', 'upload/jeans10.jpg'),
(80, 'Leather Shoe', '3000', 'Good Quality Leather Shoe ', 'shoe', 'upload/leathershoe.jpg'),
(81, 'Orange T-Shirt', '500', 'Orange T-Shirt For Men', 'shirt', 'upload/orangetshirt.jpg'),
(82, 'Player Shoe', '2500', 'Player Shoe For Men', 'shoe', 'upload/playershoe.jpg'),
(83, 'Printed Shirt', '1000', 'Printed Shirt Very Charming & Stylish', 'shirt', 'upload/printedhalfshirt2.jpg'),
(84, 'Printed Half Shirt', '1000', 'Printed Half Shirt For Men', 'shirt', 'upload/printedhalfshirts1.jpg'),
(86, 'Black & Red Shoe', '2500', 'Black & Red Border Shoe', 'shoe', 'upload/redshoe.jpg'),
(87, 'Red Car T-shirt  ', '500  ', 'Red Car T-shirt for Men  ', 'shirt', 'upload/redtshirt2.png'),
(89, 'Stripe Shirt', '2000', 'Stripe Red Shirt', 'shirt', 'upload/stripedshirt2.jpg'),
(90, 'White Shoe', '2500', 'White Shoe Very Cool Looking', 'shoe', 'upload/whiteshoe.jpg'),
(91, 'Yellow Shoe', '2500', 'Yellow Shoe Thats Very Good', 'shoe', 'upload/yellowshoe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dd` varchar(100) NOT NULL,
  `mm` varchar(100) NOT NULL,
  `yyyy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `username`, `password`, `confirmpassword`, `email`, `gender`, `dd`, `mm`, `yyyy`) VALUES
(8, '111111', '111111', '111111', 'There has no (@)', 'You are Male', '25', '08', '1996'),
(17, '222222', '222222', 'your password did not match', 'asifmdhasan', 'You are Male', '25', '08', '1996'),
(20, 'aa', '123456', '123456', 'bossasif1@gmail.com', 'You are Male', '25', '08', '1996'),
(21, 'aa', '123456', '123456', 'bossasif1@gmail.com', 'You are Male', '25', '08', '1996'),
(22, 'asif', '123456', '123456', 'bossasif1@gmail.com', 'You are Male', '25', '08', '1996'),
(23, 'emon', '123456', '123456', 'emon74653@gmail.com', 'You are Male', '10', '07', '1996'),
(24, 'asif', '111', '111', 'asifmdhasan@gmail.com', 'male', '25', '08', '1996'),
(25, 'asif', '123', '123', 'asifmdhasan@gmail.com', 'male', '25', '08', '1996'),
(26, 'll', '123', '123', 'asifmdhasan@gmail.com', 'male', '25', '08', '1996'),
(27, 'shuchi', '123', '123', 'asifmdhasan@gmail.com', 'female', '25', '08', '1996'),
(28, 'farheen', '0123456', '0123456', 'farheen@gmail.com', 'female', '25', '11', '1996'),
(29, 'lol', 'llllll', 'llllll', 'asifmdhasan@gmail.com', 'female', '25', '08', '1996'),
(30, 'sneha', '789', '789', 'asifmdhasan@gmail.com', 'female', '25', '11', '1996'),
(31, 'esa', '147', '147', 'asifmdhasan@gmail.com', 'male', '25', '08', '1996'),
(32, 'esa', '147', '147', 'asifmdhasan@gmail.com', 'male', '25', '08', '1996'),
(33, 'sojib', '777', '777', 'asifmdhasan@gmail.com', 'male', '25', '08', '1996'),
(34, 'adib', '111', '111', 'asifmdhasan@gmail.com', 'male', '25', '08', '1996'),
(35, 'soikoth', '123456', '123456', 'bossasif1@gmail.com', 'male', '25', '08', '1996'),
(36, 'tanisha', '111', '111', 'asifmdhasan@gmail.com', 'male', '17', '12', '2000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lol`
--
ALTER TABLE `lol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productentry`
--
ALTER TABLE `productentry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `lol`
--
ALTER TABLE `lol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `productentry`
--
ALTER TABLE `productentry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
