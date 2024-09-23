-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2024 at 02:02 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_user` int NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` tinyint NOT NULL DEFAULT '0',
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_user`, `user`, `pass`, `email`, `phone`, `role`, `address`) VALUES
(5, 'Sơn Đình Nguyễn', '140925', 'nguyendinhson92005@gmail.com', '0975703816', 1, 'Tân Hội'),
(6, 'Sơn 1', '123456', 'sonnd14@gmail.com', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int NOT NULL,
  `cate_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`) VALUES
(2, 'Nước hoa'),
(4, 'Máy tính'),
(6, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `content` varchar(255) NOT NULL,
  `id_user` int NOT NULL,
  `idpro` int NOT NULL,
  `date` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `id_user`, `idpro`, `date`) VALUES
(1, 'hàng đẹp', 5, 5, '02:15:31pm 07/08/2024'),
(2, 'hàng tốt', 5, 5, '02:21:12pm 07/08/2024'),
(3, 'Dùng ổn', 6, 6, '02:36:39pm 07/08/2024'),
(4, 'Mùi thơm', 6, 1, '02:37:02pm 07/08/2024');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `pro_img` varchar(255) DEFAULT NULL,
  `detail` text,
  `view` int DEFAULT '0',
  `cate_id_pro` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pro_name`, `price`, `pro_img`, `detail`, `view`, `cate_id_pro`) VALUES
(1, 'Nước hoa Dior', 192763.00, '5b6e787c2e5ee052.png', 'Dior', 1, 2),
(3, 'Linh kiện máy tính', 43262.00, 'th (1).jpg', 'linh kiện', 100, 6),
(4, 'Máy tính bàn', 93764.00, 'dong-ho-G Shock-nhat-ban-1.png', 'ùeuwc', 31, 4),
(5, 'Laptop 12', 12345.00, '5b6e787c2e5ee052.png', 'dyevq', 34, 6),
(6, 'Điện thoại ip14', 37642.00, 'iphone14.jpg', 'điện thoại 14', 47, 6),
(7, 'Nước hoa nam', 38463.00, '10049764-tai-nghe-bluetooth-sony-wh-1000xm4-xanh-3.jpg', 'nước hoa', 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_product_category` (`cate_id_pro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `lk_product_category` FOREIGN KEY (`cate_id_pro`) REFERENCES `category` (`cate_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
