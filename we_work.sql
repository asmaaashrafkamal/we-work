-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 04:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `we_work`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_project2`
--

CREATE TABLE `add_project2` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(60) DEFAULT NULL,
  `home_img` text NOT NULL,
  `home_position` text NOT NULL,
  `client_name` text DEFAULT NULL,
  `project_date` text NOT NULL,
  `project_url` text DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `subcat_name1` text NOT NULL,
  `subcat_name2` text NOT NULL,
  `subcat_name3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_project2`
--

INSERT INTO `add_project2` (`project_id`, `project_name`, `home_img`, `home_position`, `client_name`, `project_date`, `project_url`, `description`, `created_at`, `subcat_name1`, `subcat_name2`, `subcat_name3`) VALUES
(3, 'SLSStream', 'SLSapp 1.png', 'category/SLSapp 1.png', '', '2021-06-12', 'SLSStream', 'SLSStream social-media , livestream and e-commerce all in one app for both customers and sellers customers can purchasing products from sellers live , and using the power of social media like chatting , follow up the sellers , keep up with their new activities ,add new ideas and share them. sellers can show and sell their products to the customers using live stream or just adding it to their timeline and managing the business from in-app Dashboard', '2021-09-27 09:53:52', 'Programming', 'Mobile Apps', ' '),
(4, 'Chef Khalil', 'cheif.jpg', 'category/cheif.jpg', '', '2021-06-25', 'www.chefkhalil.com', 'Achieving the best culinary arts education platform in the Arab Kingdom.', '2021-09-27 10:29:03', 'Programming', 'Web Development', ' '),
(5, 'Ramakeen ', 'ramakeen.jpg', 'category/ramakeen.jpg', 'Ramakeen Office', '2021-05-25', 'www.Ramakeen.com', 'team of lawyers,providing solid legal services.', '2021-09-27 11:20:14', 'Programming', 'Web Development', ' '),
(6, 'The Magic Style', 'magic.jpg', 'category/magic.jpg', '', '2021-03-25', ' www.themagicstyle.com', 'Your best way to choose your outfit Be attractive Be amazing.', '2021-09-27 11:48:49', 'Programming', 'Web Development', ' '),
(7, 'Wander Guide', 'wegather.jpg', 'category/wegather.jpg', '', '2021-04-25', 'www.wanderguide.net', 'Wander Guide is an international platform for live experiences that provide organizers with manage, advertise and online ticket selling services', '2021-09-27 11:53:06', 'Programming', 'Web Development', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `add_project_file2`
--

CREATE TABLE `add_project_file2` (
  `id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `position` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_project_file2`
--

INSERT INTO `add_project_file2` (`id`, `name`, `position`) VALUES
(3, 'slss.jpg', 'category/slss.jpg'),
(3, 'slss2.jpg', 'category/slss2.jpg'),
(4, 'ch1.jpg', 'category/ch1.jpg'),
(4, 'ch2.jpg', 'category/ch2.jpg'),
(4, 'ch3.jpg', 'category/ch3.jpg'),
(4, 'ch4.jpg', 'category/ch4.jpg'),
(4, 'ch5.jpg', 'category/ch5.jpg'),
(5, 'web2.jpg', 'category/web2.jpg'),
(5, 'web3.jpg', 'category/web3.jpg'),
(5, 'web4.jpg', 'category/web4.jpg'),
(6, 'magic1.jpg', 'category/magic1.jpg'),
(6, 'magic2.jpg', 'category/magic2.jpg'),
(6, 'magic3.jpg', 'category/magic3.jpg'),
(6, 'magic4.jpg', 'category/magic4.jpg'),
(7, 'weg1.jpg', 'category/weg1.jpg'),
(7, 'weg2.jpg', 'category/weg2.jpg'),
(7, 'weg3.jpg', 'category/weg3.jpg'),
(7, 'weg4.jpg', 'category/weg4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_team`
--

CREATE TABLE `add_team` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `job_title` text NOT NULL,
  `job_description` text NOT NULL,
  `image_name` text NOT NULL,
  `image_position` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_team`
--

INSERT INTO `add_team` (`id`, `name`, `job_title`, `job_description`, `image_name`, `image_position`, `created_at`) VALUES
(2, 'Osama Halawani', 'C.E.O', 'managing the overall operations and resources of a company.', 'ceo 1.jpg', 'category/ceo 1.jpg', '2021-09-26 03:55:10'),
(3, 'Dina Mohamed', 'GENERAL MANAGER', 'Develop strategic plans for optimized productivity.', 'dina.jpg', 'category/dina.jpg', '2021-09-26 03:56:02'),
(4, 'Reham Owais', 'DESIGNER', 'Interior & Exterior Designer', 'reham.jpg', 'category/reham.jpg', '2021-09-26 03:56:57'),
(5, 'Asmaa Ashraf', 'DEVELOPER', 'Back-End Developer', 'asmaa.jpg', 'category/asmaa.jpg', '2021-09-26 03:57:28'),
(6, 'Amira Hitham', 'GRAPHIC DESIGNER', 'Head of Marketing & Graphic Team', 'amira 1.jpg', 'category/amira 1.jpg', '2021-09-26 03:58:20'),
(7, 'Dalal Elsayed', 'DEVELOPER', 'Front-End Developer & UI/UX Designer', 'dalola.jpg', 'category/dalola.jpg', '2021-09-26 03:59:05'),
(8, 'Yara mohamed', 'DEVELOPER', 'Flutter Developer', 'yaraf.jpg', 'category/yaraf.jpg', '2021-09-26 04:00:36'),
(9, 'Mohamed Elredeny', 'DEVELOPER', 'Back-End Developer', 'mohamed.jpg', 'category/mohamed.jpg', '2021-09-26 04:01:51'),
(10, 'Martina Girgis', 'DEVELOPER', 'Back-End Developer', 'martina.jpg', 'category/martina.jpg', '2021-09-26 04:02:39'),
(11, 'Rana Saied', 'SALES', 'Sales Representative', 'r.jpg', 'category/r.jpg', '2021-09-26 04:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `category_name`
--

CREATE TABLE `category_name` (
  `cat_id` int(11) NOT NULL,
  `cat_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_name`
--

INSERT INTO `category_name` (`cat_id`, `cat_name`) VALUES
(8, 'Programming'),
(9, 'Decoration'),
(10, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `position` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `position`) VALUES
(1, 'client/c5.png'),
(2, 'client/c2.png'),
(3, 'client/c3.png'),
(4, 'client/c4.png'),
(5, 'client/c1.png'),
(6, 'client/c6.png'),
(7, 'client/c7.png'),
(8, 'client/c8.png'),
(9, 'client/c9.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `messege` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `home_category`
--

CREATE TABLE `home_category` (
  `id` int(11) NOT NULL,
  `cat` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_category`
--

INSERT INTO `home_category` (`id`, `cat`, `description`) VALUES
(1, 'Programming', 'We don\'t just sell websites, we create websites that SELL.'),
(2, 'Marketing', 'Integrated marketing offers opportunities to break through to consumers in new markets.'),
(3, 'Design', 'Design creates culture. Culture shapes values. Values determine the future.'),
(4, 'Business Development', 'Growth is never by mere chance; it is the result of forces working together.');

-- --------------------------------------------------------

--
-- Table structure for table `home_header`
--

CREATE TABLE `home_header` (
  `id` int(11) NOT NULL,
  `home_position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_header`
--

INSERT INTO `home_header` (`id`, `home_position`) VALUES
(1, 'home/h2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

CREATE TABLE `home_services` (
  `id` int(11) NOT NULL,
  `cat` text NOT NULL,
  `description` text NOT NULL,
  `home_position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_services`
--

INSERT INTO `home_services` (`id`, `cat`, `description`, `home_position`) VALUES
(1, 'Programming', 'New & Trendy Website and Mobile App for a smooth experience with We Programming \"Software Services\"', 'home/progwe.png'),
(2, 'Design', 'Design creates culture. Culture shapes values. Values determine the future.', 'home/design 2.jpg'),
(3, 'Marketing', 'Rock up your business with We Marketing \"Marketing & Graphic services .', 'home/marketing 1.jpg'),
(4, 'Business Development', 'Growth is never by mere chance; it is the result of forces working together', 'home/business 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_services2`
--

CREATE TABLE `home_services2` (
  `id` int(11) NOT NULL,
  `point` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_services2`
--

INSERT INTO `home_services2` (`id`, `point`) VALUES
(2, ' Interior and Exterior Designs'),
(2, ' Graphic Design.'),
(2, ' Motion Graphic.'),
(3, ' Defining and Managing your Brand.'),
(3, ' Conducting Campaign Management for Marketing Initiatives.'),
(3, ' Creating Content Providing.'),
(4, ' Improving Department Performance.'),
(4, ' Identifying New Market Segments.'),
(4, ' Countering Competitive Strategies.'),
(4, ' Determining Best Training Methods.'),
(1, ' Websites.'),
(1, ' Mobile applications.');

-- --------------------------------------------------------

--
-- Table structure for table `home_whyus`
--

CREATE TABLE `home_whyus` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `home_position` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_whyus`
--

INSERT INTO `home_whyus` (`id`, `description`, `home_position`, `link`) VALUES
(1, 'We-work group is an organization that aims to deliver an outstanding experience for our clients services will satisfy all that you need in one place with high quality', 'home/why.jpg', 'https://youtu.be/gPvcFzdO_l0');

-- --------------------------------------------------------

--
-- Table structure for table `join1`
--

CREATE TABLE `join1` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `job_title` text NOT NULL,
  `job_description` text NOT NULL,
  `image_position` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'dina_mohamed@gmail.com', 'dinamohamed', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `sub_id` int(11) NOT NULL,
  `cat_name` varchar(60) DEFAULT NULL,
  `subcat1_name` varchar(60) DEFAULT NULL,
  `subcat1_img` text NOT NULL,
  `subcat1_position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`sub_id`, `cat_name`, `subcat1_name`, `subcat1_img`, `subcat1_position`) VALUES
(8, 'Programming', 'Mobile Apps', 'mobile.jpg', 'category/mobile.jpg'),
(8, 'Programming', 'Web Development', 'web.jpg', 'category/web.jpg'),
(9, 'Decoration', 'Interior Design', 'interior.jpg', 'category/interior.jpg'),
(9, 'Decoration', 'Exterior Design', 'exterior.jpg', 'category/exterior.jpg'),
(10, 'Marketing', 'Social Media', 'social media.jpg', 'category/social media.jpg'),
(10, 'Marketing', 'Digital Marketing', 'marketing.jpg', 'category/marketing.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_cat`
--

CREATE TABLE `sub_sub_cat` (
  `sub_sub_id` int(11) NOT NULL,
  `cat_name` text DEFAULT NULL,
  `subcat_name` text DEFAULT NULL,
  `subcat1_name` text DEFAULT NULL,
  `subcat1_img` text NOT NULL,
  `subcat1_position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_sub_cat`
--

INSERT INTO `sub_sub_cat` (`sub_sub_id`, `cat_name`, `subcat_name`, `subcat1_name`, `subcat1_img`, `subcat1_position`) VALUES
(9, 'Decoration', 'Interior Design', 'Classic', 'classic.jpg', 'category/classic.jpg'),
(9, 'Decoration', 'Interior Design', 'Modern', 'modern.jpg', 'category/modern.jpg'),
(9, 'Decoration', 'Interior Design', 'Neo Classic', 'neoclassic.jpg', 'category/neoclassic.jpg'),
(9, 'Decoration', 'Exterior Design', 'Classic Exterior', 'classic ex.jpg', 'category/classic ex.jpg'),
(9, 'Decoration', 'Exterior Design', 'Modern Exterior', 'modern ex.jpg', 'category/modern ex.jpg'),
(10, 'Marketing', 'Digital Marketing', 'Art and Illustration', 'illustration.png', 'category/illustration.png'),
(10, 'Marketing', 'Digital Marketing', 'Advertising Graphic Design', 'advertising.png', 'category/advertising.png'),
(10, 'Marketing', 'Digital Marketing', 'Motion Graphic design', 'motion graphic design-01.png', 'category/motion graphic design-01.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_project2`
--
ALTER TABLE `add_project2`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `add_project_file2`
--
ALTER TABLE `add_project_file2`
  ADD KEY `id` (`id`);

--
-- Indexes for table `add_team`
--
ALTER TABLE `add_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_name`
--
ALTER TABLE `category_name`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_category`
--
ALTER TABLE `home_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_header`
--
ALTER TABLE `home_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_services`
--
ALTER TABLE `home_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_whyus`
--
ALTER TABLE `home_whyus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join1`
--
ALTER TABLE `join1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD KEY `sub_id` (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_project2`
--
ALTER TABLE `add_project2`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `add_team`
--
ALTER TABLE `add_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category_name`
--
ALTER TABLE `category_name`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home_category`
--
ALTER TABLE `home_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_header`
--
ALTER TABLE `home_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_services`
--
ALTER TABLE `home_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_whyus`
--
ALTER TABLE `home_whyus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `join1`
--
ALTER TABLE `join1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_project_file2`
--
ALTER TABLE `add_project_file2`
  ADD CONSTRAINT `add_project_file2_ibfk_1` FOREIGN KEY (`id`) REFERENCES `add_project2` (`project_id`);

--
-- Constraints for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD CONSTRAINT `sub_cat_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `category_name` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
