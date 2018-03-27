-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 02:30 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_s`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_no` text,
  `admin_name` text,
  `admin_password` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_no`, `admin_name`, `admin_password`) VALUES
('2', '111', '111'),
('1', 'abc', '123');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donors`
--

CREATE TABLE `blood_donors` (
  `blood_donor_no` text,
  `blood_donor_picture` text NOT NULL,
  `blood_donor_name` text,
  `blood_donor_password` text,
  `blood_donor_group` text,
  `blood_donor_city` text,
  `blood_donor_region` text,
  `blood_donor_rating` text,
  `rated_amount` text,
  `blood_donor_job` text,
  `blood_donor_phone` text,
  `blood_donor_email` text,
  `blood_donor_flag` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_donors`
--

INSERT INTO `blood_donors` (`blood_donor_no`, `blood_donor_picture`, `blood_donor_name`, `blood_donor_password`, `blood_donor_group`, `blood_donor_city`, `blood_donor_region`, `blood_donor_rating`, `rated_amount`, `blood_donor_job`, `blood_donor_phone`, `blood_donor_email`, `blood_donor_flag`) VALUES
('1', '', 'B abc', '123', 'O+', 'Rajshahi', 'Center', '4.03', '3', 'Student', '10111255556', 'what@the.hell', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_no` text,
  `catagory` text,
  `guest_email` text,
  `comment` text,
  `rating` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_no`, `catagory`, `guest_email`, `comment`, `rating`) VALUES
('1', 'doctor', 'anonomious@hell.com', 'Well, not bad at all.', '4');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_no` text,
  `doctor_picture` text NOT NULL,
  `doctor_name` text,
  `doctor_password` text,
  `doctor_sector` text,
  `doctor_city` text,
  `doctor_region` text,
  `doctor_rating` text,
  `rated_amount` text,
  `doctor_degree` text,
  `doctor_job` text,
  `doctor_phone` text,
  `doctor_email` text,
  `doctor_flag` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_no`, `doctor_picture`, `doctor_name`, `doctor_password`, `doctor_sector`, `doctor_city`, `doctor_region`, `doctor_rating`, `rated_amount`, `doctor_degree`, `doctor_job`, `doctor_phone`, `doctor_email`, `doctor_flag`) VALUES
('1', '', 'D abc', '123', 'Bone', 'Rajshahi', 'Center', '4', '4', 'MBBS', 'Rajshahi Medical College', '554864586238856566', 'doc@hell.die', 'no'),
('2', '835465.png', 'aaa', '123', 'Heart', 'Rajshahi', 'East', NULL, NULL, 'M.B.B.S.', 'RMC', '45645678211', 'aa@dsjfic.com', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `hospital_no` text,
  `hospital_picture` text NOT NULL,
  `hospital_name` text,
  `hospital_password` text,
  `hospital_city` text,
  `hospital_region` text,
  `hospital_rating` text,
  `rated_amount` text,
  `hospital_phone` text,
  `hospital_email` text,
  `hospital_flag` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospital_no`, `hospital_picture`, `hospital_name`, `hospital_password`, `hospital_city`, `hospital_region`, `hospital_rating`, `rated_amount`, `hospital_phone`, `hospital_email`, `hospital_flag`) VALUES
('1', '', 'H abc', '123', 'Rajshahi', 'Center', '3', '5', '2258996556566544', 'hospital@email.com', 'no');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
