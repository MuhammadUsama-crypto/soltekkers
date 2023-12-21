-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 01:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soltekkers`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `title` varchar(29) NOT NULL,
  `category` int(11) NOT NULL,
  `instructor` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `duration` varchar(19) NOT NULL,
  `lectures` int(11) NOT NULL,
  `deadline` varchar(30) NOT NULL,
  `content` varchar(700) NOT NULL,
  `detail` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `category`, `instructor`, `image`, `price`, `discount`, `duration`, `lectures`, `deadline`, `content`, `detail`) VALUES
(12, 'Graphics Designing', 4, 7, 'graphic web design.jpg', 30000, 10, '3 months', 36, '', 'Adobe Photoshop,adobe Illustrator,Canva Pro', '<p>Are you passionate about creating visually stunning designs that captivate the world? 🌍 Do you dream of turning your creativity into a thriving career? Look no further! 🚀</p>\r\n<p><br>🖌 <strong>Why Choose Our Graphic Designing Course?</strong> 🖌<br>✅ <strong>Hands-On Projects: </strong>Put your skills to the test with real-world projects that challenge your creativity and problem-solving abilities. Build an impressive portfolio that showcases your talent to potential clients and employers.</p>\r\n<p>✅ <strong>Flexible Learning:</strong> Our course is designed to fit your busy schedule. Choose from flexible class timings and online resources, allowing you to learn at your own pace and convenience.</p>\r\n<p>✅ <strong>Career Support: </strong>Receive guidance and support from our career counselors who will help you explore job opportunities, internships, and freelance gigs. We\'re committed to helping you launch your graphic design career successfully.</p>\r\n<p>🌟 <strong>What You\'ll Learn: </strong>🌟</p>\r\n<p><strong>Graphic Design Fundamentals:</strong> Master the basics of design theory, color theory, typography, and composition.</p>\r\n<p><strong>Software Proficiency:</strong> Become proficient in industry-standard design software like Adobe Photoshop, and Illustrator.</p>\r\n<p><strong>Logo and Branding Design:</strong> Craft unique and memorable logos and branding materials for businesses.</p>\r\n<p><strong>Print and Digital Media:</strong> Learn to design for various mediums, including print materials, social media, and online platforms.<br>🚀 <em>Ready to Transform Your Passion into a Rewarding Career?</em> 🚀</p>\r\n<p>Don\'t miss this opportunity to kickstart your journey in the exciting world of graphic design! Whether you\'re a beginner or looking to enhance your skills, our course is tailored for you. Join us and let your creativity soar to new heights!</p>'),
(13, 'Web development', 1, 7, 'WhatsApp Image 2023-11-23 at 20.14.39_f9bc6192.jpg', 35, 20, '3 months', 36, '', 'Adobe Photoshop,Social Media Marketing', '<p>jhgjkhjh</p>');

-- --------------------------------------------------------

--
-- Table structure for table `coursecategory`
--

CREATE TABLE `coursecategory` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coursecategory`
--

INSERT INTO `coursecategory` (`id`, `category`) VALUES
(1, 'website development'),
(3, 'digital marketing'),
(4, 'graphics desgining');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `course` varchar(29) NOT NULL,
  `name` varchar(40) NOT NULL,
  `dob` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(19) NOT NULL,
  `gname` varchar(40) NOT NULL,
  `gnumber` int(19) NOT NULL,
  `address` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `cnic` varchar(19) NOT NULL,
  `lastDegree` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `course`, `name`, `dob`, `gender`, `email`, `phone`, `gname`, `gnumber`, `address`, `image`, `cnic`, `lastDegree`) VALUES
(2, 'Graphics Designing', 'Muhammad Usama', '2023-10-29', 'male', 'alviu027@gmail.com', '03213386966', 'aufiai', 2147483647, 'p-129 st#6 M. Ali park dhudiwala jalvi market fsd', 'FB_IMG_1698869700073.jpg', '32423423424', 'ICS'),
(4, 'Graphics Designing', 'Muhammad Usama', '2023-11-06', 'male', 'admin@rifah.pk', '03117549897', 'afuiad', 34324, 'P-129  St no. 6 Muhammad Ali park Jalvi Market Dhudiwala jaranwala Road Faisalabad, Pakistan', 'download.jpg', '23423', 'afad');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `expertise` text NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `name`, `expertise`, `img`) VALUES
(7, 'Sir Khalil', 'Senior Graphics Designer', 'FB_IMG_1698869700073.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(29) NOT NULL,
  `phone` varchar(29) NOT NULL,
  `email` varchar(35) NOT NULL,
  `service` varchar(50) NOT NULL,
  `query` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `email`, `service`, `query`) VALUES
(3, 'Muhammad Usama', '03213386966', 'alviu027@gmail.com', 'Website developmentt', 'dljhfadfasjkhdfahfasfuieyhjdkasuhf'),
(9, 'Muhammad Usama', '03117549897', 'admin@rifah.pk', 'Website developmentt', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(250) NOT NULL,
  `detail` varchar(700) NOT NULL,
  `price` varchar(9) NOT NULL,
  `discount` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `detail`, `price`, `discount`) VALUES
(1, 'Website developmentt', 'We are offering.png', 'we are offering website development in various languages and frameworks like: PHP, Laravel, React js, NextJs etc...', '3500033', '10%'),
(3, 'Digital Mrketing', 'c445153e8a56969ef74512482aec39d0.png', 'we are offering vast range of digital marketing services in which we are providing social media marketing, shopify store marketing etc', '35,000', '10%'),
(5, 'Cyber security', 'Untitled design (3).png', 'we are offering website development in various languages and frameworks like: PHP, Laravel, React js, NextJs etc...', '35,00', '10%'),
(6, 'Graphics Designing', 'graphic web service.jpg', '<p><strong>Welcome to our Graphic Designing Services!</strong><br><br>We are here to bring your vision to life through stunning visuals. Whether you need eye-catching logos, engaging social media graphics, or captivating brochures, our team of talented designers is dedicated to creating designs that leave a lasting impression. Let\'s transform your ideas into compelling visuals that speak volumes about <strong>your brand!</strong></p>', '35000', '10%');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(29) NOT NULL,
  `password` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'Soltekkers@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursecategory`
--
ALTER TABLE `coursecategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `coursecategory`
--
ALTER TABLE `coursecategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
