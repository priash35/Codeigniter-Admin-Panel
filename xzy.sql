-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2016 at 12:08 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xzy`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--

CREATE TABLE `about_me` (
  `id` bigint(20) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(800) NOT NULL,
  `cv` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_me`
--

INSERT INTO `about_me` (`id`, `description`, `image`, `cv`) VALUES
(1, '<h3>Shariq Hussain</h3>\r\n\r\n<p>Webdesigner &amp; Web Developer from Aptech Computer Education .</p>\r\n\r\n<p>A confident, multi-skilled applicant who is always searching for new mediums to make the &ldquo;next&rdquo; become &ldquo;now&rdquo; and make &ldquo;impossible&rdquo; become &ldquo;possible.&rdquo;.</p>\r\n\r\n<p>I am searching for a new challenge asbeing a part of your organizationin which I can gather experience.</p>\r\n\r\n<p>A culturally and religiously diverse person applicant who is looking forward to making friends in a work field.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '31072016101744shariq Hussain.jpg', '2808201600218Shariq Hussain.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `id` bigint(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `ad_map` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`id`, `address`, `mobile_no`, `email`, `website`, `ad_map`) VALUES
(1, 'Pakistan', '', 'shariq.mnm1@gmail.com', 'xyz.com', 'link');

-- --------------------------------------------------------

--
-- Table structure for table `customersupport`
--

CREATE TABLE `customersupport` (
  `id` bigint(1) DEFAULT NULL,
  `name` varchar(4) DEFAULT NULL,
  `email` varchar(21) DEFAULT NULL,
  `comment` text,
  `reason` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customersupport`
--

INSERT INTO `customersupport` (`id`, `name`, `email`, `comment`, `reason`) VALUES
(2, 'Zain', 'reza_zain@hotmail.com', 'test comments', 'General Question'),
(3, 'test', 'eatr@gamil.com', 'test', 'General Question'),
(4, 'test', 'info@gmail.com', 'test', 'General Question');

-- --------------------------------------------------------

--
-- Table structure for table `education_diploma`
--

CREATE TABLE `education_diploma` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `name_uni` varchar(200) NOT NULL,
  `description` varchar(800) NOT NULL,
  `end_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_diploma`
--

INSERT INTO `education_diploma` (`id`, `title`, `name_uni`, `description`, `end_date`) VALUES
(3, 'Master Degree of Design', 'University of Design', 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quom placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui faorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.', 'Mar,2010');

-- --------------------------------------------------------

--
-- Table structure for table `name_job_title`
--

CREATE TABLE `name_job_title` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `bg_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `name_job_title`
--

INSERT INTO `name_job_title` (`id`, `name`, `title`, `bg_image`) VALUES
(1, 'SHARIQ HUSSAIN', 'WEB DESIGNER AND DEVELOPER', '270720161953361.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `project_link` varchar(800) NOT NULL,
  `image` varchar(800) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `project_link`, `image`, `category`) VALUES
(4, 'Wordpress', 'link', '3107201605857vbn.png', 'wordpress'),
(5, 'Shariq Sheki', 'lonk', '3107201610608codeigniter.gif', 'Php Mvc'),
(6, 'shariq shei', 'lon nl', '310720161063153838917-fbfd-4a4c-aecc-7860d0d84e29.png', 'Web Design');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `short_description` varchar(400) NOT NULL,
  `skill_per` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `title`, `short_description`, `skill_per`) VALUES
(6, 'PHP / MySQL', 'Experience Professional', 90),
(7, 'HTML5 / CSS3', 'Experience Professional', 80),
(8, 'jQuery', 'Experience Intermediate', 60),
(11, 'Javascript', 'Experience Intermediate', 60),
(12, 'AJAX', 'Experience Professional', 80),
(13, 'CodeIgniter (PHP Framework)', 'Experience Professional', 90),
(14, 'Angular Js', 'Experience Intermediate', 60),
(15, 'Web Hosting', 'Experience Professional', 80),
(16, 'Photoshop', 'Experience Professional', 70);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) NOT NULL,
  `facebooklink` varchar(800) NOT NULL,
  `googlepluslink` varchar(800) NOT NULL,
  `linkedinlink` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `facebooklink`, `googlepluslink`, `linkedinlink`) VALUES
(1, 'sndklf', 'skdfj', 'sdkgfsk');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `work_experience` (
  `id` bigint(20) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `description` varchar(800) NOT NULL,
  `job_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`id`, `company_name`, `position`, `description`, `job_date`) VALUES
(3, 'UIzards', 'Senior UX Designer', 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quom placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui faorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.\r\n', 'Mar,2011 <br>  Present'),
(4, 'Lexind', 'Visual / UI Designer', 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quom placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui faorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.\r\n', 'Mar,2011 Present'),
(5, 'Matrix Media', 'Visual / UI Designer', 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quom placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui faorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.\r\n', 'Mar,2011 Present');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_diploma`
--
ALTER TABLE `education_diploma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `name_job_title`
--
ALTER TABLE `name_job_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_me`
--
ALTER TABLE `about_me`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `education_diploma`
--
ALTER TABLE `education_diploma`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `name_job_title`
--
ALTER TABLE `name_job_title`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `work_experience`
--
ALTER TABLE `work_experience`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
