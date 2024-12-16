-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 12:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitals`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categoryId` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parentId` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryId`, `name`, `parentId`) VALUES
(1, 8757011, 'Software & Tools', ''),
(2, 4774247, 'Productivity Software', '8757011'),
(3, 4681665, 'Development Tools', '8757011'),
(4, 6302136, 'Graphic Design Tools', '8757011'),
(5, 2800584, 'Utility Software', '8757011'),
(6, 9606688, 'eBooks & Guides', ''),
(7, 5315890, 'Fiction', '9606688'),
(8, 5570896, 'Non-fiction', '9606688'),
(9, 6011609, 'Technical Manuals', '9606688'),
(10, 7458607, 'DIY & How-to Guides', '9606688'),
(11, 4265811, 'Online Courses & Tutorials', ''),
(12, 4236881, 'Business & Marketing', '4265811'),
(13, 3871318, 'Personal Development', '4265811'),
(14, 3990677, 'Programming & Tech Skills', '4265811'),
(15, 9510223, 'Creative Skills', '4265811'),
(16, 8224101, 'Audio Products', ''),
(17, 7288589, 'Music', '8224101'),
(18, 6505202, 'Podcasts & Audiobooks', '8224101'),
(19, 3106270, 'Sound Effects & Loops', '8224101'),
(20, 9813881, 'Graphics & Design', ''),
(21, 9298938, 'Stock Photos & Videos', '9813881'),
(22, 8427511, 'Logos & Icons', '9813881'),
(23, 4456860, 'Templates', '9813881'),
(24, 8523195, 'Fonts & Typography', '9813881'),
(25, 7095172, 'Video Content', ''),
(26, 2900380, 'Stock Videos', '7095172'),
(27, 4563311, 'Video Tutorials', '7095172'),
(28, 3486514, 'Animation & Motion Graphics', '7095172'),
(29, 6500310, 'Games & Entertainment', ''),
(30, 7911837, 'Game Assets', '6500310'),
(31, 1599559, 'Pre-built Games & Source Code', '6500310'),
(32, 8309944, 'Gaming Add-ons', '6500310'),
(33, 2117853, 'Website Themes & Plugins', ''),
(34, 8244421, 'CMS Themes', '2117853'),
(35, 3825148, 'Plugins & Extensions', '2117853'),
(36, 9261453, 'HTML Templates', '2117853'),
(37, 3129852, 'Subscriptions & Memberships', ''),
(38, 2934747, 'Premium Content Access', '3129852'),
(39, 8631515, 'SaaS Tools', '3129852'),
(40, 8471310, 'Learning Platforms', '3129852'),
(41, 4159955, 'Digital Art & Illustrations', ''),
(42, 3382523, 'Printable Art', '4159955'),
(43, 3310208, 'Customizable Illustrations', '4159955'),
(44, 5584584, 'Comics & Storyboards', '4159955'),
(45, 7305086, 'Licenses & Digital Assets', ''),
(46, 4729316, 'Software Licenses', '7305086'),
(47, 9908563, 'Media Licenses', '7305086'),
(48, 4738894, 'Coding Resources', ''),
(49, 6771178, 'Scripts', '4738894'),
(50, 7637032, 'Code Snippets', '4738894'),
(51, 5822261, 'APIs', '4738894');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productId` bigint(20) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `shortDescription` varchar(100) NOT NULL,
  `productTags` varchar(100) NOT NULL,
  `mainCategory` bigint(20) NOT NULL,
  `subCategory` bigint(20) NOT NULL,
  `fileType` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` tinyint(4) DEFAULT 0,
  `fileUrl` varchar(255) DEFAULT NULL,
  `fileUrl_external` varchar(100) DEFAULT NULL,
  `fileSize` decimal(10,2) DEFAULT NULL,
  `licenseKey` varchar(255) DEFAULT NULL,
  `deliveryMethod` enum('email','direct download') DEFAULT 'direct download',
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('active','inactive','pending') DEFAULT 'active',
  `numberOfDownloads` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productId`, `thumbnail`, `name`, `slug`, `description`, `shortDescription`, `productTags`, `mainCategory`, `subCategory`, `fileType`, `price`, `discount`, `fileUrl`, `fileUrl_external`, `fileSize`, `licenseKey`, `deliveryMethod`, `createdAt`, `status`, `numberOfDownloads`) VALUES
(1, 7976379, 'C:\\xampp\\htdocs\\digital\\admin/uploads/thumbnails/thumb_6759f0eb530c94.16158626.png', 'black head', '', 'massively massive full description', 'just a little', 'hello, oge, bella', 4774247, 0, 'mp4', 300.00, 10, 'C:\\xampp\\htdocs\\digital\\admin/uploads/videos/black_head_7976379.mp4', NULL, 5502243.00, 'yrcytguhjbk', 'email', '2024-12-11 20:07:07', 'active', 0),
(2, 7364710, 'C:\\xampp\\htdocs\\digital\\admin/uploads/thumbnails/thumb_6759f68c5cb2a1.68367237.png', 'white head', '', 'full description for programming and tech', 'short description for tech', 'hello, oge, bella', 3990677, 0, 'mp4', 1000.00, 10, 'C:\\xampp\\htdocs\\digital\\admin/uploads/videos/white_head_7364710.mp4', NULL, 17075463.00, 'yrcytguhjbk', 'email', '2024-12-11 20:31:08', 'active', 0),
(3, 7510219, 'C:\\xampp\\htdocs\\digital\\admin/uploads/thumbnails/thumb_675aff5b67b028.42073698.png', '48 laws of POWER', '48-laws-of-power', '<p>Dive into a revolutionary exploration of power dynamics that has captivated readers worldwide. \"The 48 Laws of Power\" offers a profound and provocative analysis of human behavior, strategic maneuvering, and the subtle art of gaining and maintaining personal power.</p><p>&nbsp;</p><p>Written by renowned author Robert Greene, this book draws from historical examples spanning centuries, revealing universal principles of power that apply to politics, business, relationships, and personal development. Each law is meticulously researched and illustrated with compelling stories from historical figures, providing readers with insights into how power truly operates.</p><p>&nbsp;</p><p>Key benefits of this book include:</p><ol><li>Gaining strategic insights into human psychology</li><li>Understanding complex social dynamics</li><li>Developing more effective interpersonal skills</li><li>Learning to navigate competitive environments</li><li>Recognizing and countering manipulative tactics</li></ol><p>Perfect for:</p><ol><li>Entrepreneurs and business professionals</li><li>Students of psychology and sociology</li><li>Anyone interested in personal development</li><li>Leaders seeking to understand influence</li><li>Individuals looking to improve their strategic thinking</li></ol>', 'Discover the ultimate guide to understanding power dynamics, strategic thinking, and personal influe', 'Self-help, psychology, power', 5570896, 0, 'pdf', 7.00, 10, 'C:\\xampp\\htdocs\\digital\\admin/uploads/note/48_laws_of_POWER_7510219.pdf', NULL, 3160674.00, '', 'email', '2024-12-12 15:20:59', 'active', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
