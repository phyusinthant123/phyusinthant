-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 03, 2021 at 02:33 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foods`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `fe_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(20) NOT NULL,
  PRIMARY KEY (`fe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`fe_id`, `name`, `email`, `phone`, `message`) VALUES
(3, 'Main Main', 'main@gmail.com', '096365444', 'Delicious!'),
(4, 'dfdffd', 'dfffff', '0693663333', 'fiidd'),
(5, 'KO Lin', 'main@gmail.com', '0963655555', 'Excellent!');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_title` varchar(20) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`m_id`, `m_title`) VALUES
(1, 'Slice_Cake'),
(2, 'Bread'),
(3, 'Hotdogs'),
(4, 'Birhtday Cake'),
(5, 'Donuts World'),
(6, 'Weeding Cake');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ord_id` int(11) NOT NULL AUTO_INCREMENT,
  `ord_name` varchar(20) NOT NULL,
  `ord_price` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `adress` varchar(20) NOT NULL,
  `ord_no` varchar(20) NOT NULL,
  PRIMARY KEY (`ord_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_id`, `ord_name`, `ord_price`, `name`, `phone`, `adress`, `ord_no`) VALUES
(1, 'Milk_Bread', '600', 'lplll', '063639988', '87/88', 'ord314'),
(2, 'Chocolate_Bread', '600', 'hein oo', '09636363', '9822', 'ord161'),
(3, 'Berry_Cake', '1500kyats', 'Main Main', '0963654122', '9822', 'ord193'),
(4, 'Anni 40', '25000kyats', 'Main Main', '0963636363', '7877', 'ord270'),
(5, 'Love Cake', '15000kyats', 'Main Main', '0963636363', '9877 yangon', 'ord350');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int(100) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `p_img` varchar(20) NOT NULL,
  `p_menus` varchar(20) NOT NULL,
  `exp_date` varchar(20) NOT NULL,
  `desc` varchar(20) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `price`, `p_img`, `p_menus`, `exp_date`, `desc`) VALUES
(1, 'Milk_Bread', '600kyats', 'bread1.jpg', 'Bread', '12/12/2021', 'Milk only.'),
(2, 'Snow_pillow', '1200kyats', 'snow_pillow.jpg', 'Bread', '08/04/2021', 'bread'),
(3, 'Whole_wheat', '1000kyats', 'whole-wheat.jpg', 'Bread', '08/18/2021', 'milk'),
(4, 'Vegetable_bread', '1500kyats', 'vegetable.jpg', 'Bread', '07/31/2021', 'vegetable '),
(5, 'Black_Chocolate Cake', '22000kyats', 'blackcake.jpg', 'Birhtday Cake', '09/30/2021', 'Black chocolate & Mi'),
(6, 'Stawberry_cake', '20000kyats', 'Fruitcake.jpg', 'Birhtday Cake', '09/30/2021', 'stawberry  &milk'),
(7, 'pander_cake', '15000kyats', 'pander.jpg', 'Birhtday Cake', '09/30/2021', 'Milk & Cheese'),
(8, 'Love Cake', '15000kyats', 'Love ðŸ’Ÿ.jpg', 'Birhtday Cake', '09/30/2021', 'love'),
(9, 'Princess_Cake', '15000kyats', 'Princess Cakes.jpg', 'Birhtday Cake', '09/30/2021', 'Milk &Fruit'),
(10, 'Cream Cake', '9000kyats', 'cream.jpg', 'Birhtday Cake', '09/30/2021', 'Cream & Milk'),
(11, 'BLT Dogs', '15000kyats', 'BLT Dogs.jpg', 'Hotdogs', '09/30/2021', 'hotdogs'),
(12, 'LA_StyleDogs', '1800kyats', 'LA-StyleDogs.jpg', 'Hotdogs', '09/30/2021', 'hotdogs'),
(13, 'Selbst Hot Dogs', '2000kyats', 'Selbst Hot Dogs.jpg', 'Hotdogs', '09/30/2021', 'hotdogs'),
(14, 'Spicy_HotDogs', '1500Kyats', '5x Hotdogs .jpg', 'Hotdogs', '09/30/2021', 'hotdogs'),
(15, 'Steak_dog', '1800kyats', 'stead_dog.jpg', 'Hotdogs', '09/30/2021', 'hgff  & dod'),
(16, 'Summer_hotdogs', '1500kyats', 'summer_hotdogs.jpg', 'Hotdogs', '09/30/2021', 'hotdogs'),
(17, 'Berry_Cake', '1500kyats', 'slicecake1.jpg', 'Slice_Cake', '10/31/2021', 'berry & milk'),
(18, 'Rainbows Cake', '1500kyats', 'slicecake7.jpg', 'Slice_Cake', '10/31/2021', 'Fruit '),
(19, 'Choco mocha cake', '1500kyats', 'slicecake3.jpg', 'Slice_Cake', '10/31/2021', 'Chocolate'),
(20, 'Slice mini', '1300kyats', 'slicecake8.jpg', 'Slice_Cake', '09/30/2021', 'Fruit'),
(21, 'Milk Slice', '1200kyats', 'slicecake0.jpg', 'Slice_Cake', '10/31/2021', 'Milk'),
(22, 'Green tea ', '1500kyats', 'greentea cake.jpg', 'Slice_Cake', '09/30/2021', 'Green tea & Milk'),
(23, 'Rich Choco', '1500kyats', 'doublecake.jpg', 'Slice_Cake', '10/31/2021', 'chocolate'),
(24, 'Age cake', '20000kyats', 'eight.jpg', 'Birhtday Cake', '09/30/2021', 'Milk & Fruit'),
(25, 'Rabbit ', '15000kyats', 'rabbitcake.jpg', 'Birhtday Cake', '09/27/2021', 'Milk'),
(26, 'Cute couple', '15000kyats', 'wd7_.jpg', 'Weeding Cake', '10/31/2021', 'Cake'),
(27, 'Anni Cake', '12000Kyats', 'wd5.jpg', 'Weeding Cake', '09/30/2021', 'Cake'),
(28, 'Choco double', '25000kyats', 'wd8.jpg', 'Weeding Cake', '08/31/2021', 'choco'),
(29, 'Merry me', '25000kyats', 'wd4.jpg', 'Weeding Cake', '09/30/2021', 'Milk'),
(30, 'Anni 40', '25000kyats', 'wd3.jpg', 'Weeding Cake', '09/30/2021', 'milk & cheese'),
(31, 'Rose Love', '15000kyats', 'wd1.jpg', 'Weeding Cake', '09/30/2021', 'Chocolate milk'),
(32, 'Anni mini cake', '15000kyats', 'wd2.jpg', 'Weeding Cake', '10/31/2021', 'mini cake'),
(33, 'Donuts pink', '800kyats', 'dn2.jpg', 'Donuts World', '08/31/2021', 'donuts'),
(34, 'Choco nets', '900kyats', 'dn5.jpg', 'Donuts World', '09/30/2021', 'donuts'),
(35, 'Mocha nets', '1000kyats', 'dn3.jpg', 'Donuts World', '09/30/2021', 'donuts'),
(36, 'Donuts coco', '1000kyats', 'dn4.jpg', 'Donuts World', '09/30/2021', 'donuts'),
(37, 'Fruit Donuts', '1000kyats', 'dn6.jpg', 'Donuts World', '10/31/2021', 'donuts'),
(38, 'Chocolate Bread', '1000kyats', 'chocolate bread.jpg', 'Bread', '09/30/2021', 'chocolate');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `town` varchar(20) NOT NULL,
  `adress` varchar(20) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `name`, `email`, `password`, `phone`, `town`, `adress`) VALUES
(1, 'mainmain', 'main@gmail.com', '123123', '09363547888', 'lathar', '98/22street lathar y'),
(2, 'koko', 'koko@gmail.com', '123456', '0987456321', 'yangon', ''),
(3, 'koko', 'koko@gmail.com', '123456', '0987456321', 'yangon', ''),
(4, 'gingin', 'gin@gmail.com', '123123', '092356785', 'yangon', ''),
(5, 'chocho', 'cho@gmail.com', '23456', '0987456321', 'yangon', ''),
(6, 'kolin', 'kolin@gmail.com', '123123', '098745633', 'Yangon', '9822 lathar yangon'),
(7, 'Hein ko', 'hein@gmail.com', '123456', '0945632133', 'yangon', '9822 lathar yangon'),
(8, 'yarlat', 'yar@gmail.com', '123456', '0956523333', 'Yangon', '9822 lathar yangon'),
(9, 'ToeToe', 'toe@gmail.com', '000000', '0997888552', 'yangon', '9855 lathar yangon'),
(10, 'Yoe lay', 'Yoe@gmail.com', '123456', '0936547855', 'Yangon', 'Yangon'),
(11, 'Hla Hla', 'hla@gmail.com', '123123', '06969696696', 'Yangon', '9822'),
(12, 'Su Su', 'su@gmail.com', '123456', '0936364444', 'yangon', 'yangon'),
(13, 'Hein Oo', 'oo@gmail.com', '123456', '09972224440', 'Yangon', '9822 lathar yangon'),
(14, 'Moe lay', 'moelay@gmail.com', '123123', '096363636363', 'yangon', '98/22'),
(15, 'Main', 'OO', '123456', '096366363', 'Yangon', '87/88');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
