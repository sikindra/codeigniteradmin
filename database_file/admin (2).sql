-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 07:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `level` longtext COLLATE utf8_unicode_ci NOT NULL,
  `login_status` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `phone`, `password`, `level`, `login_status`) VALUES
(1, 'sikindra', 'admin1@admin.com', '8109895993', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1', '1'),
(2, 'Administrator 2', 'admin2@gmail.com', '1234567890', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `school_id` int(11) NOT NULL,
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`school_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES
(0, '0o55lsviqm8i8evg7i1164p53mkp4vup', '127.0.0.1', 1576400835, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537363430303833353b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2238223b6c6f67696e5f757365725f69647c733a313a2238223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
(0, '5k29uj9otbufutr4sl6sm1sgqajns7q3', '127.0.0.1', 1576401225, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537363430313232353b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2238223b6c6f67696e5f757365725f69647c733a313a2238223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
(0, '6qlbqi95gm56km49cioacibnpl1d6qap', '127.0.0.1', 1575989622, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353938393632323b),
(0, '7k1ho15mjeg7u9lbsua6a6f0fl3okgf5', '127.0.0.1', 1575989675, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353938393637353b),
(0, '8esqiumpgo03rthcimbnehv3b2e9bc2p', '127.0.0.1', 1575989062, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353938393036323b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2238223b6c6f67696e5f757365725f69647c733a313a2238223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
(0, '8jqna3aip4clcmokgqd7t7ii1p75n1ah', '::1', 1631507565, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633313530373536353b),
(0, 'cgrdrp17ik11kvctgbd48p7u0jm293e1', '::1', 1631508210, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633313530383231303b),
(0, 'e1317bsol3p9oo25kn15ofrv30vopu52', '::1', 1631508210, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633313530383231303b),
(0, 'ea738lb5ik6v0kmm7dm2pbud27k02glr', '127.0.0.1', 1576397281, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537363339373238313b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2238223b6c6f67696e5f757365725f69647c733a313a2238223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
(0, 'fofehi7eaeqj2bk5eit5ekp41gd147hi', '127.0.0.1', 1576397948, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537363339373934383b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2238223b6c6f67696e5f757365725f69647c733a313a2238223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
(0, 'jjgc5umr0p2np4aneuua2t7tm89v1voj', '127.0.0.1', 1576239186, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537363233393138363b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2238223b6c6f67696e5f757365725f69647c733a313a2238223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
(0, 'l1e17mk7cdg71do9qouos1q5249fetn7', '127.0.0.1', 1576239187, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537363233393138373b),
(0, 'l46es3qrhtcgi7kcc8daopocsam1knfg', '127.0.0.1', 1576401563, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537363430313536333b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2238223b6c6f67696e5f757365725f69647c733a313a2238223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
(0, 'm9sj7su5id61c0rfj53c718pqrbt4hq6', '127.0.0.1', 1576396972, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537363339363937323b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2238223b6c6f67696e5f757365725f69647c733a313a2238223b6e616d657c733a31333a2241646d696e6973747261746f72223b666c6173685f6d6573736167657c733a31383a225375636365737366756c6c79204c6f67696e223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
(0, 'ndto2l4cv384prfveod69n5duullmo4o', '127.0.0.1', 1576401722, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537363430313732323b),
(0, 'o17nhfobqtlbds5444v2e07mmojb2if1', '::1', 1632982283, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633323938323230363b),
(0, 'pk4m8lpu6igmqgieqnm547i4q2h99gud', '127.0.0.1', 1575988659, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353938383635393b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2238223b6c6f67696e5f757365725f69647c733a313a2238223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
(0, 'qhcrmmb8gppl38vmtu8jd806a7l0oksa', '127.0.0.1', 1575989414, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353938393431343b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2238223b6c6f67696e5f757365725f69647c733a313a2238223b6e616d657c733a31333a2241646d696e6973747261746f72223b);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `school_id` int(11) NOT NULL,
  `phrase_id` int(11) NOT NULL,
  `phrase` longtext COLLATE utf8_unicode_ci NOT NULL,
  `english` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `arabic` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `french` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `korea` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tamil` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hindi` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`school_id`, `phrase_id`, `phrase`, `english`, `arabic`, `french`, `korea`, `Tamil`, `Hindi`) VALUES
(0, 1, 'Manage Language', 'Manage Language', 'إدارة اللغة', NULL, NULL, NULL, NULL),
(0, 2, 'active language', 'Active Language', 'اللغة النشطة', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `language_list`
--

CREATE TABLE `language_list` (
  `school_id` int(11) NOT NULL,
  `language_list_id` int(11) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `db_field` varchar(300) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language_list`
--

INSERT INTO `language_list` (`school_id`, `language_list_id`, `name`, `db_field`, `status`) VALUES
(0, 1, 'English', 'english', 'ok'),
(0, 2, 'Arabic', 'arabic', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int(11) NOT NULL,
  `school_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `school_admin_email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `location` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(200) NOT NULL,
  `school_email` varchar(200) NOT NULL,
  `language` varchar(100) NOT NULL,
  `text_align` varchar(100) NOT NULL,
  `session` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school_name`, `school_admin_email`, `password`, `location`, `phone`, `school_email`, `language`, `text_align`, `session`) VALUES
(101, 'GVS School', 'gvs@gamil.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Banglaore', '9787377862', 'gvs1@gamil.com', 'english', 'left-to-right', '2019-2020'),
(10001, 'Nava Vision', '', '', 'Bangalore', '9875631200', '', '', '', ''),
(10002, 'Akshaya Vidhya Mandhir', '', '', 'Trichy', '', '', '', '', ''),
(10003, 'Acts School', '', '', 'Andhra', '', '', '', '', ''),
(10004, 'Chennai School', '', '', 'Vellore', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `school_id` int(11) NOT NULL,
  `settings_id` int(11) NOT NULL,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`school_id`, `settings_id`, `type`, `description`) VALUES
(10001, 1, 'system_name', ''),
(10001, 2, 'system_title', ' Nava Vision'),
(10001, 3, 'address', '546787, Kertz shopping complext, Silicon Valley, United State of America, New York city.'),
(10001, 4, 'phone', '98123456745'),
(10001, 6, 'currency', 'INR'),
(10001, 7, 'system_email', 'blr@gmail.com'),
(10001, 8, 'language', 'english'),
(10001, 9, 'text_align', 'left-to-right'),
(10001, 10, 'skin_colour', 'default'),
(10001, 11, 'session', '2021-2022'),
(10001, 12, 'footer', 'Developed by Optimum Linkup Computers. All Right Reserved (2021)'),
(10001, 13, 'paypal_email', '#'),
(10001, 14, 'stripe_setting', '[{\"stripe_active\":\"1\",\"testmode\":\"off\",\"secret_key\":\"test secret key\",\"public_key\":\"test public key\",\"secret_live_key\":\"live secret key\",\"public_live_key\":\"live public key\"}]'),
(10001, 15, 'paypal_setting', '[{\"paypal_active\":\"1\",\"paypal_mode\":\"sandbox\",\"sandbox_client_id\":\"client id sandbox\",\"production_client_id\":\"client - production\"}]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`phrase_id`);

--
-- Indexes for table `language_list`
--
ALTER TABLE `language_list`
  ADD PRIMARY KEY (`language_list_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `phrase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40559;

--
-- AUTO_INCREMENT for table `language_list`
--
ALTER TABLE `language_list`
  MODIFY `language_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
