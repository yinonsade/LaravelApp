-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 26, 2019 at 01:54 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e22`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `carticale` longtext NOT NULL,
  `cimage` varchar(255) NOT NULL,
  `curl` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ctitle`, `carticale`, `cimage`, `curl`, `updated_at`, `created_at`) VALUES
(11, 'mens', 'mens fashion by E22', 'mens-cat.jpg', 'i', '2019-02-15 23:56:43', '2019-01-21 23:59:00'),
(12, 'womens', 'womens fashion by E22', 'womens-cat.jpg', 'womensWear', '2019-01-21 11:00:00', '2019-01-21 23:00:00'),
(13, 'uni-sex', 'uni-sex fashion by E22', 'uni-cat.jpg', 'unisexWear', '2019-01-21 00:00:00', '2019-01-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` longtext NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `title`, `article`, `updated_at`, `created_at`) VALUES
(1, 13, 'About e2.1.8', '<p>&nbsp; &nbsp; soon...<br></p>', '2019-02-23 12:38:17', '2019-02-23 12:38:17');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `url`, `title`, `updated_at`, `created_at`) VALUES
(12, 'contact', 'contact', 'Contact us', '2019-02-13 16:08:55', '2019-02-13 16:08:55'),
(13, 'about', 'about', 'about us', '2019-02-23 12:37:38', '2019-02-23 12:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` decimal(8,0) NOT NULL,
  `data` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `data`, `updated_at`, `created_at`) VALUES
(83, 8, '299', 'a:1:{i:24;a:6:{s:2:\"id\";s:2:\"24\";s:4:\"name\";s:17:\"mens black jacket\";s:5:\"price\";d:299;s:8:\"quantity\";i:1;s:10:\"attributes\";a:3:{s:5:\"image\";s:30:\"12.02.2019.13.23.33-men-25.jpg\";s:4:\"size\";s:1:\"M\";s:5:\"color\";s:8:\"As image\";}s:10:\"conditions\";a:0:{}}}', '2019-02-25 18:14:30', '2019-02-25 18:14:30'),
(84, 8, '189', 'a:2:{i:38;a:6:{s:2:\"id\";s:2:\"38\";s:4:\"name\";s:25:\"women black and white top\";s:5:\"price\";d:89;s:8:\"quantity\";i:1;s:10:\"attributes\";a:3:{s:5:\"image\";s:32:\"12.02.2019.13.48.21-women-21.jpg\";s:4:\"size\";s:1:\"m\";s:5:\"color\";s:8:\"As image\";}s:10:\"conditions\";a:0:{}}i:15;a:6:{s:2:\"id\";s:2:\"15\";s:4:\"name\";s:17:\"button nice shirt\";s:5:\"price\";d:50;s:8:\"quantity\";i:2;s:10:\"attributes\";a:3:{s:5:\"image\";s:29:\"12.02.2019.12.07.22-men-1.jpg\";s:4:\"size\";s:13:\"one-size-only\";s:5:\"color\";s:4:\"blue\";}s:10:\"conditions\";a:0:{}}}', '2019-02-25 19:49:08', '2019-02-25 19:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `particle` longtext NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `pimage2` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `purl` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `ptitle`, `particle`, `pimage`, `pimage2`, `price`, `purl`, `size`, `color`, `updated_at`, `created_at`) VALUES
(15, 11, 'button nice shirt', '<p>black button shirt with blue collar&nbsp;</p>', '12.02.2019.12.07.22-men-1.jpg', 'default.jpg', '50.00', 'button-nice-shirt', 'one-size-only', 'blue green black pink', '2019-02-25 19:37:48', '2019-02-12 12:07:11'),
(16, 11, 'mens button shirt brown', '<p>brown mens button shirt</p>', '12.02.2019.12.17.49-men-3.jpg', 'default.jpg', '55.00', 'mens-button-shirt-brown', 'large small xl', 'N/A', '2019-02-23 12:37:02', '2019-02-12 12:17:49'),
(17, 11, 'mens button shirt black', '<p>&nbsp; &nbsp; black mens button shirt<br></p>', '12.02.2019.12.39.48-men-5.jpg', '22.02.2019.19.33.00-men-6.jpg', '45.00', 'mens-button-shirt-black', 'N/A', 'N/A', '2019-02-22 19:33:01', '2019-02-12 12:39:48'),
(18, 11, 'mens button shirt dotted', '<p>&nbsp; &nbsp; &nbsp; &nbsp; mens shirt with red ships pattern</p>', '12.02.2019.12.42.18-men-7.jpg', '22.02.2019.19.33.24-men-10.jpg', '70.00', 'mens-button-shirt-dotted', 'N/A', 'N/A', '2019-02-22 19:33:24', '2019-02-12 12:42:07'),
(19, 11, 'mens white shirt patten', '<p>pattern white mens shirt</p>', '12.02.2019.12.43.45-men-9.jpg', '', '70.00', 'mens-white-shirt-patten', '', '', '2019-02-12 12:43:45', '2019-02-12 12:43:35'),
(20, 11, 'mens black pattern shirt', '<p>&nbsp; &nbsp; mens black shirt with white patterns<br></p>', '12.02.2019.12.44.31-men-11.jpg', '22.02.2019.19.33.40-men-12.jpg', '70.00', 'mens-black-pattern-shirt', 'N/A', 'N/A', '2019-02-22 19:33:40', '2019-02-12 12:44:31'),
(21, 11, 'mens shirt milk draw', '<p>&nbsp; &nbsp; mens shirt milk patern<br></p>', '12.02.2019.13.20.21-men-13.jpg', '22.02.2019.19.33.54-men-14.jpg', '189.00', 'mens-shirt-milk-draw', 'N/A', 'N/A', '2019-02-22 19:33:55', '2019-02-12 13:20:21'),
(22, 11, 'mens shirt roster draw', '<p>&nbsp; &nbsp; mens shirt roster and flowers draw<br></p>', '12.02.2019.13.21.31-men-15.jpg', '22.02.2019.19.34.08-men-16.jpg', '189.00', 'mens-shirt-roster-draw', 'N/A', 'N/A', '2019-02-22 19:34:09', '2019-02-12 13:21:20'),
(23, 11, 'mens brown jacket', '<p>&nbsp; &nbsp; mens brown long jacket<br></p>', '12.02.2019.13.22.33-men-21.jpg', '22.02.2019.19.41.47-men-22.jpg', '299.00', 'mens-brown-jacket', 'N/A', 'N/A', '2019-02-22 19:41:48', '2019-02-12 13:22:34'),
(24, 11, 'mens black jacket', '<p>mens long jacket black</p>', '12.02.2019.13.23.33-men-25.jpg', '22.02.2019.19.42.00-men-26.jpg', '299.00', 'mens-black-jacket', 'N/A', 'N/A', '2019-02-22 19:42:00', '2019-02-12 13:23:34'),
(25, 13, 'uni-sex long black and white jacket', '<p>&nbsp; &nbsp; uni-sex long black and white jacket</p><p>for women and men&nbsp;</p>', '12.02.2019.13.26.30-men-31.jpg', '22.02.2019.19.42.26-men-32.jpg', '400.00', 'uni-sex-long-black-and-white-jacket', 'N/A', 'N/A', '2019-02-22 19:42:27', '2019-02-12 13:26:14'),
(26, 13, 'uni-sex white pocket jacket', '<p>&nbsp; &nbsp; white pocket jacket with red pattern</p><p>for women and men&nbsp; &nbsp;&nbsp;<br></p>', '12.02.2019.13.27.24-men-33.jpg', '22.02.2019.19.42.40-men-34.jpg', '450.00', 'uni-sex-white-pocket-jacket', 'N/A', 'N/A', '2019-02-22 19:42:41', '2019-02-12 13:27:24'),
(27, 11, 'mens long shirt color', '<p>mens long shirt with color patterns</p>', '12.02.2019.13.28.49-men-35.jpg', '', '312.00', 'mens-long-shirt-color', '', '', '2019-02-12 13:28:49', '2019-02-12 13:28:49'),
(28, 11, 'mens long shirt color-2', '<p>mens long shirt with colors&nbsp;</p>', '12.02.2019.13.32.43-men-37.jpg', '', '450.00', 'mens-long-shirt-color-2', '', '', '2019-02-12 13:32:43', '2019-02-12 13:32:43'),
(29, 12, 'women black coat', '<p>&nbsp; &nbsp; women black winter coat<br></p>', '12.02.2019.13.33.36-women-1.jpg', '', '240.00', 'women-black-coat', '', '', '2019-02-12 13:33:36', '2019-02-12 13:33:36'),
(30, 12, 'women white coat', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; women white winter coat<br></p>', '12.02.2019.13.34.47-women-3.jpg', '', '350.00', 'women-white-coat', '', '', '2019-02-12 13:34:47', '2019-02-12 13:34:31'),
(31, 12, 'women color skirt', '<p>&nbsp; &nbsp; women long color skirt<br></p>', '12.02.2019.13.35.42-women-5.jpg', '', '270.00', 'women-color-skirt', '', '', '2019-02-12 13:35:42', '2019-02-12 13:35:42'),
(32, 12, 'women black and white skirt', '<p>&nbsp; &nbsp;&nbsp;women long black and white skirt<br></p>', '12.02.2019.13.36.25-women-6.jpg', '', '270.00', 'women-black-and-white-skirt', '', '', '2019-02-12 13:36:25', '2019-02-12 13:36:25'),
(33, 12, 'women black skirt', '<p>&nbsp; &nbsp; women long black skirt<br></p>', '12.02.2019.13.38.50-women-9.jpg', '', '210.00', 'women-black-skirt', '', '', '2019-02-12 13:38:50', '2019-02-12 13:38:50'),
(34, 12, 'women short pants', '<p>&nbsp; &nbsp; women short color pants<br></p>', '12.02.2019.13.39.58-women-11.jpg', '', '77.00', 'women-short-pants', '', '', '2019-02-12 13:39:59', '2019-02-12 13:39:45'),
(35, 12, 'womens dark pants', '<p>&nbsp; &nbsp; women dark color pants<span style=\"font-size: 0px;\">v</span><br></p>', '12.02.2019.13.41.15-women-13.jpg', '', '77.00', 'womens-dark-pants', '', '', '2019-02-12 13:41:15', '2019-02-12 13:41:15'),
(36, 12, 'womens black pants', '<p>&nbsp; &nbsp; womens black short pants&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br></p>', '12.02.2019.13.42.11-women-16.jpg', '', '77.00', 'womens-black-pants', '', '', '2019-02-12 13:42:11', '2019-02-12 13:42:01'),
(37, 12, 'womens white top', '<p>&nbsp; &nbsp; womens white and red top<br></p>', '12.02.2019.13.47.12-women-17.jpg', '', '89.00', 'womens-white-top', '', '', '2019-02-12 13:47:13', '2019-02-12 13:46:59'),
(38, 12, 'women black and white top', '<p>women black and white top</p>', '12.02.2019.13.48.21-women-21.jpg', '', '89.00', 'women-black-and-white-top', '', '', '2019-02-12 13:48:21', '2019-02-12 13:48:21'),
(39, 12, 'women black and white dress', '<p>&nbsp; &nbsp; women black and white dress<br></p>', '12.02.2019.13.49.03-women-23.jpg', '', '344.00', 'women-black-and-white-dress', '', '', '2019-02-12 13:49:04', '2019-02-12 13:49:04'),
(40, 12, 'women white dress', '<p>&nbsp; &nbsp; women white dress black pattern<br></p>', '12.02.2019.13.50.05-women-25.jpg', '', '299.00', 'women-white-dress', '', '', '2019-02-12 13:50:05', '2019-02-12 13:50:05'),
(41, 12, 'women black long dress', '<p>&nbsp; &nbsp; women black long dress<br></p>', '12.02.2019.13.50.51-women-27.jpg', '', '500.00', 'women-black-long-dress', '', '', '2019-02-12 13:50:51', '2019-02-12 13:50:51'),
(42, 12, 'women black dotted skirt', '<p>&nbsp; &nbsp; women black dotted skirt<br></p>', '12.02.2019.13.52.50-women-31.jpg', '', '311.00', 'women-black-dotted-skirt', '', '', '2019-02-12 13:52:50', '2019-02-12 13:52:37'),
(43, 12, 'women black evning dress', '<p>&nbsp; &nbsp; women black long evning dress<br></p>', '12.02.2019.13.53.52-women-35.jpg', '', '611.00', 'women-black-evning-dress', '', '', '2019-02-12 13:53:52', '2019-02-12 13:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `aname` text NOT NULL,
  `aline1` text NOT NULL,
  `aline2` text NOT NULL,
  `acity` text NOT NULL,
  `aregion` text NOT NULL,
  `apostalcode` text NOT NULL,
  `acountry` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `aname`, `aline1`, `aline2`, `acity`, `aregion`, `apostalcode`, `acountry`, `updated_at`, `created_at`) VALUES
(3, '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '2019-02-25 00:00:00', '2019-02-25 00:00:00'),
(4, '---', '---', '---', '---', '---', '---', '---', '---', '---', '---', '---', '2019-02-25 00:00:00', '2019-02-25 00:00:00'),
(7, 'admin', 'admin@gmail.com', '$2y$10$MCNwW08/J14sMtKLZF5KHe77WdCyktq9R6XeMTZhHXsdefoX8LENO', '123456', 'test', 'test', 'test', 'test', 'test', '444', 'AL', '2019-02-25 17:46:12', '2019-02-25 17:46:12'),
(8, 'manger', 'manger@gmail.com', '$2y$10$MCNwW08/J14sMtKLZF5KHe77WdCyktq9R6XeMTZhHXsdefoX8LENO', '1111', 'manger of the site', 'test blv', 'test blv', 'test city', 'test disct', '5555', 'IL', '2019-02-25 17:49:05', '2019-02-25 17:49:05'),
(9, 'yinon', 'yinon@gmail.com', '$2y$10$G8ghbae0jOLkTqCnddGt6OHK9Utus1hNZAA1v6XYH.t/Vyu.a4RDm', '0585281129', 'yinon sade', 'balai ahmalka', '25 a app 1', 'tel aviv', 'center', '5544', 'IL', '2019-02-25 18:16:45', '2019-02-25 18:16:45'),
(10, 'or', 'or@gmail.com', '$2y$10$1isI63PgNm.IQarw59Vwi.s2/del0gZjfEhx2yzB/.w6xFaxppqQC', '05756584946', 'or', 'edilman', 'haifa', 'tel aviv', 'center', '45454554', 'IL', '2019-02-25 19:58:01', '2019-02-25 19:58:01'),
(11, 'yinon', 'yinon@hotmail.com', '$2y$10$xVOgdGizwuduBtYNgPZyr.6wSDzu14E8/bvqbUqLOwBqnKXBS/oTa', '0585281129', 'yinon sade', 'kibutz evron', 'd.n.g.m', 'evron', 'north', '22808', 'IL', '2019-02-25 20:42:55', '2019-02-25 20:42:55');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `uid` int(11) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`uid`, `rid`) VALUES
(5, 6),
(7, 7),
(8, 6),
(9, 7),
(10, 7),
(11, 7),
(47, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `curl` (`curl`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `link` (`link`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `purl` (`purl`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uid_2` (`uid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `uid_3` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
