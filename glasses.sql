-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2018 at 08:00 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glasses`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `imageid` int(11) NOT NULL,
  `image1` varchar(1000) NOT NULL,
  `image2` varchar(1000) NOT NULL,
  `image3` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`imageid`, `image1`, `image2`, `image3`) VALUES
(1, 'imgs/gallery/axlredhavana.png', 'imgs/gallery/axlredhavana2.png', 'imgs/gallery/axlredhavana3.png'),
(2, 'imgs/gallery/axlsmoke.png', 'imgs/gallery/axlsmoke2.png', 'imgs/gallery/axlsmoke3.png'),
(3, 'imgs/gallery/damiancherryblossom.png', 'imgs/gallery/damiancherryblossom2.png', 'imgs/gallery/damiancherryblossom3.png'),
(4, 'imgs/gallery/damianmistymauve.png', 'imgs/gallery/damianmistymauve2.png', 'imgs/gallery/damianmistymauve3.png'),
(5, 'imgs/gallery/damiantigerwood.png', 'imgs/gallery/damiantigerwood2.png', 'imgs/gallery/damiantigerwood3.png'),
(6, 'imgs/gallery/mileschocolatechip.png', 'imgs/gallery/mileschocolatechip2.png', 'imgs/gallery/mileschocolatechip3.png'),
(7, 'imgs/gallery/milesrichmahogany.png', 'imgs/gallery/milesrichmahogany2.png', 'imgs/gallery/milesrichmahogany3.png'),
(8, 'imgs/gallery/milestaupetortoise.png', 'imgs/gallery/milestaupetortoise2.png', 'imgs/gallery/milestaupetortoise3.png'),
(9, 'imgs/gallery/pattigoldtitanium.png', 'imgs/gallery/pattigoldtitanium2.png', 'imgs/gallery/pattigoldtitanium3.png'),
(10, 'imgs/gallery/pattisilvertitanium.png', 'imgs/gallery/pattisilvertitanium2.png', 'imgs/gallery/pattisilvertitanium3.png'),
(11, 'imgs/gallery/phoebeblush.png', 'imgs/gallery/phoebeblush2.png', 'imgs/gallery/phoebeblush3.png'),
(12, 'imgs/gallery/phoebegolddust.png', 'imgs/gallery/phoebegolddust2.png', 'imgs/gallery/phoebegolddust3.png'),
(13, 'imgs/gallery/wilsonespressogradient.png', 'imgs/gallery/wilsonespressogradient2.png', 'imgs/gallery/wilsonespressogradient3.png'),
(14, 'imgs/gallery/wilsongreyhound.png', 'imgs/gallery/wilsongreyhound2.png', 'imgs/gallery/wilsongreyhound3.png'),
(15, 'imgs/gallery/wilsontigerwood.png', 'imgs/gallery/wilsontigerwood2.png', 'imgs/gallery/wilsontigerwood3.png');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `price_id` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`price_id`, `price`) VALUES
('ASC', 'Low to High'),
('DESC', 'High to Low');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image2` varchar(1000) NOT NULL,
  `top_product` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `summary`, `price`, `quantity`, `image`, `image2`, `top_product`) VALUES
(1, 'Axl Red Havana', 'A sturdy frame with an edge, Axl conveys effortless sophistication.', 98, '1', 'imgs/product/axlredhavana.png', 'imgs/product/axlredhavana3.png', 'yes'),
(2, 'Axl Smoke', 'A sturdy frame with an edge, Axl conveys effortless sophistication.', 98, '1', 'imgs/product/axlsmoke.png', 'imgs/product/axlsmoke3.png', 'no'),
(3, 'Damian Cherry Blossom ', 'Damien is a sophisticated frame with timeless style .', 110, '1', 'imgs/product/damiancherryblossom.png', 'imgs/product/damiancherryblossom3.png', 'no'),
(4, 'Damian Misty Mauve', 'Damien is a sophisticated frame with timeless style .', 110, '1', 'imgs/product/damianmistymauve.png', 'imgs/product/damianmistymauve3.png', 'no'),
(5, 'Damian Tiger Wood ', 'Damien is a sophisticated frame with timeless style .', 110, '1', 'imgs/product/damiantigerwood.png', 'imgs/product/damiantigerwood3.png', 'no'),
(6, 'Miles Chocolate Chip', 'Clean oval frames take inspiration from Terry\'s classic proportions.', 98, '1', 'imgs/product/mileschocolatechip.png', 'imgs/product/mileschocolatechip3.png', 'no'),
(7, 'Miles Rich Mahogany ', 'Clean oval frames take inspiration from Terry\'s classic proportions. .', 98, '1', 'imgs/product/milesrichmahogony.png', 'imgs/product/milesrichmahogony3.png', 'no'),
(8, 'Miles Taupe Tortoise ', 'Clean oval frames take inspiration from Terry\'s classic proportions. ', 98, '1', 'imgs/product/milestaupetortoise.png', 'imgs/product/milestaupetortoise3.png', 'no'),
(9, 'Patti Gold Titanium', 'The Patti, basic yet stylish.', 200, '1', 'imgs/product/pattigoldtitanium.png', 'imgs/product/pattigoldtitanium3.png', 'yes'),
(10, 'Patti Silver Titanium', 'The Patti, basic yet stylish.', 200, '1', 'imgs/product/pattisilvertitanium.png', 'imgs/product/pattisilvertitanium3.png', 'no'),
(11, 'Phoebe Blush', 'A sharp frame with poise, Phoebe is confident and creative.', 200, '1', 'imgs/product/phoebeblush.png', 'imgs/product/phoebeblush3.png', 'yes'),
(12, 'Phoebe Gold Dust ', 'A sharp frame with poise, Phoebe is confident and creative.', 200, '1', 'imgs/product/phoebegolddust.png', 'imgs/product/phoebegolddust3.png', 'no'),
(13, 'Wilson Espresso Gradient ', 'Alfred\'s little brother is featherweight and slimline. Rounded edges, squared up. ', 98, '1', 'imgs/product/wilsonespressogradient.png', 'imgs/product/wilsonespressogradient3.png', 'no'),
(14, 'Wilson Greyhound', 'Alfred\'s little brother is featherweight and slimline.  ', 98, '1', 'imgs/product/wilsongreyhoundgrey.png', 'imgs/product/wilsongreyhoundgrey3.png', 'no'),
(15, 'Wilson Tiger Wood', 'Alfred\'s little brother is featherweight and slimline.  ', 98, '1', 'imgs/product/wilsontigerwood.png', 'imgs/product/wilsontigerwood3.png', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE `shopping` (
  `id_user` int(2) NOT NULL,
  `id` int(11) NOT NULL,
  `amount_quantity` varchar(10) NOT NULL,
  `amount_price` double NOT NULL,
  `order_number` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `user_email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `name_user` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name_user`) VALUES
(1, 'Tedir Ghazali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`imageid`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping`
--
ALTER TABLE `shopping`
  ADD PRIMARY KEY (`id_user`,`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`imageid`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
