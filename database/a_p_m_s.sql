-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 08:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a.p.m.s`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accademic_year`
--

CREATE TABLE `tbl_accademic_year` (
  `id` int(11) NOT NULL,
  `Batch_id` varchar(255) NOT NULL,
  `Batch_number` varchar(255) NOT NULL,
  `Start_year` date NOT NULL,
  `End_year` date NOT NULL,
  `Batch_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_accademic_year`
--

INSERT INTO `tbl_accademic_year` (`id`, `Batch_id`, `Batch_number`, `Start_year`, `End_year`, `Batch_image`) VALUES
(1, 'UWU/BH/001', '1', '2020-01-15', '2024-01-22', 'batch_img9152.jpg'),
(2, 'UWU/BH/002', '2', '2021-12-07', '2025-11-05', 'batch_img8453.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `index_no` varchar(255) NOT NULL,
  `nic_no` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `DOB` date DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `tel_no` int(100) NOT NULL,
  `linkdin` varchar(255) NOT NULL,
  `git` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `password`, `role_id`, `name`, `bio`, `index_no`, `nic_no`, `gender`, `DOB`, `address`, `tel_no`, `linkdin`, `git`, `image`, `email`) VALUES
(1, 'admin', '1234', 1, 'first admin     ', 'test admin', 'uwu/lec/001', '20008101214', 'Male', '2014-11-05', 'kelinpara,attanagalla', 112345678, 'https://www.youtube.com/watch?v=XSJrvd5mvGs', 'https://www.youtube.com/watch?v=XSJrvd5mvGs', 'new_pic7681.jpeg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_degree`
--

CREATE TABLE `tbl_degree` (
  `degree_id` int(11) NOT NULL,
  `Degree_index_num` varchar(255) NOT NULL,
  `Degree_name` varchar(255) NOT NULL,
  `Lecturer_index` varchar(255) NOT NULL,
  `Lecturer_name` varchar(255) NOT NULL,
  `Degree_img` varchar(255) NOT NULL,
  `lecture_id` int(20) NOT NULL,
  `Batch_id` int(20) NOT NULL,
  `batch_index` varchar(255) NOT NULL,
  `batch_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_degree`
--

INSERT INTO `tbl_degree` (`degree_id`, `Degree_index_num`, `Degree_name`, `Lecturer_index`, `Lecturer_name`, `Degree_img`, `lecture_id`, `Batch_id`, `batch_index`, `batch_number`) VALUES
(1, 'UWU/DEG/001', 'engineering technology', 'uwu/lec/001', 'test lec ', 'Degree_img9693.jpg', 1, 1, 'UWU/BH/001', '1'),
(3, 'UWU/DEG/003', 'plt', 'UWU/LEC/002', 'sadtrrrrrrt', 'Degree_img8915.JPG', 2, 2, 'UWU/BH/002', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lecturer`
--

CREATE TABLE `tbl_lecturer` (
  `lec_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `index_no` varchar(100) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel_no` int(100) NOT NULL,
  `linkdin` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lecturer`
--

INSERT INTO `tbl_lecturer` (`lec_id`, `username`, `password`, `role_id`, `name`, `bio`, `index_no`, `nic`, `gender`, `DOB`, `address`, `tel_no`, `linkdin`, `github`, `gmail`, `image`) VALUES
(1, 'lec01', '1234', 3, 'test lec   ', 'test', 'uwu/lec/001', '46432326512', 'Male', '2013-11-06', 'pattala,kakakrinda', 12345678, 'https://www.youtube.com/adasdsd', 'https://www.youtube.com', 'dsadasdas', 'new_pic8442.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_results_sem1`
--

CREATE TABLE `tbl_results_sem1` (
  `result_id` int(11) NOT NULL,
  `enrollment_number` varchar(20) NOT NULL,
  `stu_index` varchar(100) NOT NULL,
  `Batch_id` int(20) NOT NULL,
  `grade_subject_1` varchar(2) NOT NULL,
  `grade_subject_2` varchar(2) NOT NULL,
  `grade_subject_3` varchar(2) NOT NULL,
  `grade_subject_4` varchar(2) NOT NULL,
  `grade_subject_5` varchar(2) NOT NULL,
  `grade_subject_6` varchar(2) NOT NULL,
  `grade_subject_7` varchar(2) NOT NULL,
  `grade_subject_8` varchar(2) NOT NULL,
  `grade_subject_9` varchar(2) NOT NULL,
  `current_gpa` decimal(3,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_results_sem1`
--

INSERT INTO `tbl_results_sem1` (`result_id`, `enrollment_number`, `stu_index`, `Batch_id`, `grade_subject_1`, `grade_subject_2`, `grade_subject_3`, `grade_subject_4`, `grade_subject_5`, `grade_subject_6`, `grade_subject_7`, `grade_subject_8`, `grade_subject_9`, `current_gpa`, `created_at`) VALUES
(21, '5', '', 1, 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 1.11, '2023-11-14 21:36:12'),
(22, '1', '', 1, 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 4.99, '2023-11-14 22:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_results_sem2`
--

CREATE TABLE `tbl_results_sem2` (
  `result_id` int(11) NOT NULL,
  `enrollment_number` varchar(100) NOT NULL,
  `Batch_id` int(20) NOT NULL,
  `grade_subject_1` varchar(2) NOT NULL,
  `grade_subject_2` varchar(2) NOT NULL,
  `grade_subject_3` varchar(2) NOT NULL,
  `grade_subject_4` varchar(2) NOT NULL,
  `grade_subject_5` varchar(2) NOT NULL,
  `grade_subject_6` varchar(2) NOT NULL,
  `grade_subject_7` varchar(2) NOT NULL,
  `grade_subject_8` varchar(2) NOT NULL,
  `grade_subject_9` varchar(2) NOT NULL,
  `current_gpa` decimal(3,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_results_sem2`
--

INSERT INTO `tbl_results_sem2` (`result_id`, `enrollment_number`, `Batch_id`, `grade_subject_1`, `grade_subject_2`, `grade_subject_3`, `grade_subject_4`, `grade_subject_5`, `grade_subject_6`, `grade_subject_7`, `grade_subject_8`, `grade_subject_9`, `current_gpa`, `created_at`) VALUES
(4, '1', 1, 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A', 2.05, '2023-11-14 21:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_results_sem3`
--

CREATE TABLE `tbl_results_sem3` (
  `result_id` int(11) NOT NULL,
  `enrollment_number` varchar(100) NOT NULL,
  `Batch_id` int(20) NOT NULL,
  `grade_subject_1` varchar(2) NOT NULL,
  `grade_subject_2` varchar(2) NOT NULL,
  `grade_subject_3` varchar(2) NOT NULL,
  `grade_subject_4` varchar(2) NOT NULL,
  `grade_subject_5` varchar(2) NOT NULL,
  `grade_subject_6` varchar(2) NOT NULL,
  `grade_subject_7` varchar(2) NOT NULL,
  `grade_subject_8` varchar(2) NOT NULL,
  `grade_subject_9` varchar(2) NOT NULL,
  `current_gpa` decimal(3,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_results_sem3`
--

INSERT INTO `tbl_results_sem3` (`result_id`, `enrollment_number`, `Batch_id`, `grade_subject_1`, `grade_subject_2`, `grade_subject_3`, `grade_subject_4`, `grade_subject_5`, `grade_subject_6`, `grade_subject_7`, `grade_subject_8`, `grade_subject_9`, `current_gpa`, `created_at`) VALUES
(3, '1', 1, 'D+', 'D+', 'D+', 'D+', 'D+', 'C', 'D+', 'D+', 'D+', 0.00, '2023-11-15 08:14:45'),
(4, '5', 1, 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 2.00, '2023-11-15 08:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_results_sem4`
--

CREATE TABLE `tbl_results_sem4` (
  `result_id` int(11) NOT NULL,
  `enrollment_number` varchar(100) NOT NULL,
  `Batch_id` int(20) NOT NULL,
  `grade_subject_1` varchar(2) NOT NULL,
  `grade_subject_2` varchar(2) NOT NULL,
  `grade_subject_3` varchar(2) NOT NULL,
  `grade_subject_4` varchar(2) NOT NULL,
  `grade_subject_5` varchar(2) NOT NULL,
  `grade_subject_6` varchar(2) NOT NULL,
  `grade_subject_7` varchar(2) NOT NULL,
  `grade_subject_8` varchar(2) NOT NULL,
  `grade_subject_9` varchar(2) NOT NULL,
  `current_gpa` decimal(3,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_results_sem4`
--

INSERT INTO `tbl_results_sem4` (`result_id`, `enrollment_number`, `Batch_id`, `grade_subject_1`, `grade_subject_2`, `grade_subject_3`, `grade_subject_4`, `grade_subject_5`, `grade_subject_6`, `grade_subject_7`, `grade_subject_8`, `grade_subject_9`, `current_gpa`, `created_at`) VALUES
(1, '5', 1, 'D+', 'D+', 'D+', 'D+', 'D+', 'D+', 'D+', 'D+', 'D+', 1.00, '2023-11-15 08:34:08'),
(2, '1', 1, 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 4.00, '2023-11-15 08:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_results_sem5`
--

CREATE TABLE `tbl_results_sem5` (
  `result_id` int(11) NOT NULL,
  `enrollment_number` varchar(100) NOT NULL,
  `Batch_id` int(20) NOT NULL,
  `grade_subject_1` varchar(2) NOT NULL,
  `grade_subject_2` varchar(2) NOT NULL,
  `grade_subject_3` varchar(2) NOT NULL,
  `grade_subject_4` varchar(2) NOT NULL,
  `grade_subject_5` varchar(2) NOT NULL,
  `grade_subject_6` varchar(2) NOT NULL,
  `grade_subject_7` varchar(2) NOT NULL,
  `grade_subject_8` varchar(2) NOT NULL,
  `grade_subject_9` varchar(2) NOT NULL,
  `current_gpa` decimal(3,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_results_sem5`
--

INSERT INTO `tbl_results_sem5` (`result_id`, `enrollment_number`, `Batch_id`, `grade_subject_1`, `grade_subject_2`, `grade_subject_3`, `grade_subject_4`, `grade_subject_5`, `grade_subject_6`, `grade_subject_7`, `grade_subject_8`, `grade_subject_9`, `current_gpa`, `created_at`) VALUES
(1, '1', 1, 'C-', 'C-', 'C-', 'C-', 'C-', 'C-', 'C-', 'C-', 'C-', 3.01, '2023-11-15 10:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_results_sem6`
--

CREATE TABLE `tbl_results_sem6` (
  `result_id` int(11) NOT NULL,
  `enrollment_number` varchar(100) NOT NULL,
  `Batch_id` int(20) NOT NULL,
  `grade_subject_1` varchar(2) NOT NULL,
  `grade_subject_2` varchar(2) NOT NULL,
  `grade_subject_3` varchar(2) NOT NULL,
  `grade_subject_4` varchar(2) NOT NULL,
  `grade_subject_5` varchar(2) NOT NULL,
  `grade_subject_6` varchar(2) NOT NULL,
  `grade_subject_7` varchar(2) NOT NULL,
  `grade_subject_8` varchar(2) NOT NULL,
  `grade_subject_9` varchar(2) NOT NULL,
  `current_gpa` decimal(3,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_results_sem6`
--

INSERT INTO `tbl_results_sem6` (`result_id`, `enrollment_number`, `Batch_id`, `grade_subject_1`, `grade_subject_2`, `grade_subject_3`, `grade_subject_4`, `grade_subject_5`, `grade_subject_6`, `grade_subject_7`, `grade_subject_8`, `grade_subject_9`, `current_gpa`, `created_at`) VALUES
(1, '1', 1, 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 0.00, '2023-11-15 10:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_results_sem7`
--

CREATE TABLE `tbl_results_sem7` (
  `result_id` int(11) NOT NULL,
  `enrollment_number` varchar(100) NOT NULL,
  `Batch_id` int(20) NOT NULL,
  `grade_subject_1` varchar(2) NOT NULL,
  `grade_subject_2` varchar(2) NOT NULL,
  `grade_subject_3` varchar(2) NOT NULL,
  `grade_subject_4` varchar(2) NOT NULL,
  `grade_subject_5` varchar(2) NOT NULL,
  `grade_subject_6` varchar(2) NOT NULL,
  `grade_subject_7` varchar(2) NOT NULL,
  `grade_subject_8` varchar(2) NOT NULL,
  `grade_subject_9` varchar(2) NOT NULL,
  `current_gpa` decimal(3,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_results_sem7`
--

INSERT INTO `tbl_results_sem7` (`result_id`, `enrollment_number`, `Batch_id`, `grade_subject_1`, `grade_subject_2`, `grade_subject_3`, `grade_subject_4`, `grade_subject_5`, `grade_subject_6`, `grade_subject_7`, `grade_subject_8`, `grade_subject_9`, `current_gpa`, `created_at`) VALUES
(1, '1', 1, 'B-', 'B-', 'B-', 'B-', 'B-', 'B-', 'B-', 'B-', 'B-', 2.36, '2023-11-15 10:17:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_results_sem8`
--

CREATE TABLE `tbl_results_sem8` (
  `result_id` int(11) NOT NULL,
  `enrollment_number` varchar(100) NOT NULL,
  `Batch_id` int(20) NOT NULL,
  `grade_subject_1` varchar(2) NOT NULL,
  `grade_subject_2` varchar(2) NOT NULL,
  `grade_subject_3` varchar(2) NOT NULL,
  `grade_subject_4` varchar(2) NOT NULL,
  `grade_subject_5` varchar(2) NOT NULL,
  `grade_subject_6` varchar(2) NOT NULL,
  `grade_subject_7` varchar(2) NOT NULL,
  `grade_subject_8` varchar(2) NOT NULL,
  `grade_subject_9` varchar(2) NOT NULL,
  `current_gpa` decimal(3,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `semester_id` int(20) NOT NULL,
  `degree_id` varchar(100) NOT NULL,
  `semester_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`semester_id`, `degree_id`, `semester_number`) VALUES
(2, '1', '1'),
(3, '1', '2'),
(4, '2', '1'),
(5, '2', '2'),
(6, '2', '3'),
(7, '1', '3'),
(8, '1', '4'),
(9, '1', '5'),
(10, '1', '6'),
(11, '1', '7'),
(12, '1', '8');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `stu_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(10) NOT NULL,
  `Degree_id` varchar(100) NOT NULL,
  `index_no` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel_no` int(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `linkdin` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `Batch_id` int(20) NOT NULL,
  `batch_index` varchar(100) NOT NULL,
  `Degree_index` varchar(100) NOT NULL,
  `Degree_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`stu_id`, `username`, `password`, `role_id`, `Degree_id`, `index_no`, `name`, `nic`, `DOB`, `gender`, `address`, `tel_no`, `image`, `gmail`, `linkdin`, `github`, `bio`, `Batch_id`, `batch_index`, `Degree_index`, `Degree_name`) VALUES
(1, 'nimeh12', '1234', 2, '1', 'UWU/ET/001', 'nimesh walikanna       ', '20008101241', '2000-08-15', 'Male', '1 st street,passara road , badulla', 715546921, 'new_pic8996.jpg', 'paduma@gmail.com', '', '', 'c', 1, 'UWU/BH/001', 'UWU/DEG/001', 'engineering technology'),
(2, 'hg', '1234', 2, '2', 'uwu/ict/75', 'jjjjjjjjjj', '44444444l', '2023-11-29', 'Male', 'ggggggggggggggggg', 12345, '', 'sehan@gmail.com', '', '', '', 2, 'UWU/BH/002', 'UWU/DEG/002', 'Information and Communications Technology'),
(3, 'kjk', '1234', 2, '3', 'UWU/plt/001', 'gfdgd', '2332', '2023-11-22', 'Male', 'hjhj', 213123, '', 'prabodpubudu@gmail.com', '', '', '', 2, 'UWU/BH/002', 'UWU/DEG/003', 'plt'),
(4, 'ds', '1234', 2, '2', 'dsdsa', 'dasdsas', '56456', '2023-11-05', 'Male', '564645', 56464, '', 'poorna@gmail.com', '', '', '', 1, 'UWU/BH/001', 'UWU/DEG/002', 'Information and Communications Technology');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subject_id` int(11) NOT NULL,
  `semester_id` int(20) NOT NULL,
  `degree_id` int(20) NOT NULL,
  `semester_number` int(10) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `credits` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subject_id`, `semester_id`, `degree_id`, `semester_number`, `subject_name`, `subject_code`, `credits`) VALUES
(10, 2, 1, 1, 'ethiscs', 'ICT200-1', '1'),
(11, 2, 1, 1, 'Effective English Usage', 'ICT202-2', '2'),
(12, 2, 1, 1, 'Numerical Methods', 'ICT200-3', '3'),
(13, 2, 1, 1, 'drowning', 'ICT202-4', '2'),
(14, 2, 1, 1, 'CSS', 'ICT200-8', '2'),
(15, 2, 1, 1, 'Mathematics', 'ICT202-6', '3'),
(16, 2, 1, 1, '', 'i', '0'),
(17, 2, 1, 1, '', '', '0'),
(18, 2, 1, 1, '', '', '0'),
(19, 3, 1, 2, 'Professional Ethics in Computing', 'ET204-1', '1'),
(20, 3, 1, 2, 'Project Management', 'ET204-2', '3'),
(21, 3, 1, 2, 'Independent Study Project I', 'ET204-3', '3'),
(22, 3, 1, 2, 'Object Oriented Programming', 'ET204-4', '1'),
(23, 3, 1, 2, 'Information Systems and Data Modeling', 'ET204-5', '2'),
(24, 3, 1, 2, 'Communication Theory', 'ET204-6', '2'),
(25, 3, 1, 2, 'Information Assurance', 'ET204-7', '3'),
(26, 3, 1, 2, 'Software Engineering', 'ET204-8', '1'),
(27, 3, 1, 2, 'Business Process Management', 'ET204-9', '2'),
(28, 4, 2, 1, 'sdadas', 'adas', '1'),
(29, 4, 2, 1, 'sdadsa', 'dsd', '1'),
(30, 4, 2, 1, 'dsadad', 'ssssd', '12'),
(31, 4, 2, 1, 'sadda', 'dddd', '2'),
(32, 4, 2, 1, 'sadasd', 'cccd', '2'),
(33, 4, 2, 1, 'sadasda', 'sd', '23'),
(34, 4, 2, 1, 'asdasdas', 'dsa', '3'),
(35, 4, 2, 1, 'dsadsa', 'asas', '3'),
(36, 4, 2, 1, 'adada', 'as', '3'),
(37, 5, 2, 2, 'sda', 'dasd', '4'),
(38, 5, 2, 2, 'sda', 'dsad', '5'),
(39, 5, 2, 2, 'sada', 'dsad', '56'),
(40, 5, 2, 2, 'sda', 'sad', '45'),
(41, 5, 2, 2, 'asd', 'dsad', '4'),
(42, 5, 2, 2, 'sda', 'asd', '5'),
(43, 5, 2, 2, 'sad', 'ads', '54'),
(44, 5, 2, 2, '', '', '54'),
(45, 5, 2, 2, '', '', '4'),
(46, 6, 2, 3, 'gf', 'gd', '1'),
(47, 6, 2, 3, 'gfd', 'f', '2'),
(48, 6, 2, 3, 'df', 'd', '3'),
(49, 6, 2, 3, 'fg', 'GFT 300-3', '3'),
(50, 6, 2, 3, 'fgd', 'fd', '1'),
(51, 6, 2, 3, 'fgd', 'd', '2'),
(52, 6, 2, 3, 'fgd', 'f', '3'),
(53, 6, 2, 3, 'dfg', 'd', '3'),
(54, 6, 2, 3, 'dfg', 'f', '5'),
(55, 7, 1, 3, 'dd', 'dd', '1'),
(56, 7, 1, 3, 'ddd', 'dsadsa', '2'),
(57, 7, 1, 3, 'dd', 'd', '1'),
(58, 7, 1, 3, 'dd', 'd', '2'),
(59, 7, 1, 3, 'dd', 'd', '3'),
(60, 7, 1, 3, 'dd', 'd', '1'),
(61, 7, 1, 3, 'dd', 'd', '2'),
(62, 7, 1, 3, 'dd', 'd', '3'),
(63, 7, 1, 3, '', '1', '1'),
(64, 8, 1, 4, 'gg', 'bc', '4'),
(65, 8, 1, 4, 'cvcv', 'vbc', '5'),
(66, 8, 1, 4, 'bc', 'vbc', '4'),
(67, 8, 1, 4, 'bcb', 'bvc', '1'),
(68, 8, 1, 4, 'bcc', 'bvc', '5'),
(69, 8, 1, 4, '', 'bvcb', '4'),
(70, 8, 1, 4, 'bc', 'bc', '1'),
(71, 8, 1, 4, 'bvc', 'bvc', '1'),
(72, 8, 1, 4, 'vb', 'bc', '2'),
(73, 9, 1, 5, 'Communication Skills II', 'ESD 311-1', '1'),
(74, 9, 1, 5, 'Independent Study Project II', 'ICT 321-2', '2'),
(75, 9, 1, 5, 'Advanced Database Management Systems', 'ICT 331-2', '2'),
(76, 9, 1, 5, 'Software Quality Assurance', 'ICT 332-3', '3'),
(77, 9, 1, 5, 'Algorithm Design and Optimization', 'ICT 341-2', '2'),
(78, 9, 1, 5, 'Cloud Computing', 'ICT 342-2', '2'),
(79, 9, 1, 5, 'Web Service Technologies', 'ICT 343-3', '3'),
(80, 9, 1, 5, 'Mobile Computing', 'ICT 351-2', '2'),
(81, 9, 1, 5, 'Rapid Application Development', 'ICT 352-2', '2'),
(82, 10, 1, 6, 'Capstone Project', 'ICT 481-6', '6'),
(83, 10, 1, 6, 'Object Oriented Design Patterns and Principals', 'ICT 431-2', '2'),
(84, 10, 1, 6, 'Scientific Writing and Research Methodology', 'ICT 441-2', '2'),
(85, 10, 1, 6, 'Emerging Technologies in ICT', 'ICT 442-2', '2'),
(86, 10, 1, 6, 'Multivariate Analysis', 'ICT 443-2', '2'),
(87, 10, 1, 6, 'Software Requirement Engineering', 'ICT 451-3', '3'),
(88, 10, 1, 6, 'Semantic Web Technologies', 'ICT 452-2', '2'),
(89, 10, 1, 6, 'Operational Research', 'ICT 361-3', '3'),
(90, 10, 1, 6, 'Sampling Techniques', 'ICT 362-1', '1'),
(91, 11, 1, 7, 'Capstone Project (Cont.)*', 'ICT 481-6', '2'),
(92, 11, 1, 7, 'Entrepreneurship and Business Development', 'ICT 411-2', '2'),
(93, 11, 1, 7, 'Safety and Risk Management', 'ICT 421-2', '2'),
(94, 11, 1, 7, 'Computer Systems Security', 'ICT 432-3', '3'),
(95, 11, 1, 7, 'Parallel and Distributed Computing', 'ICT 453-2', '2'),
(96, 11, 1, 7, 'IoT and Embedded Systems', 'ICT 454-3', '3'),
(97, 11, 1, 7, 'English Language', 'ESD 121-1', '1'),
(98, 11, 1, 7, 'Mathematics for ICT', 'ICT 101-2', '2'),
(99, 11, 1, 7, 'Electronics for ICT', 'ICT 141-3', '4'),
(100, 12, 1, 8, 'Communication Skills I', 'ESD 111-1', '1'),
(101, 12, 1, 8, 'Communicative English', 'ESD 122-1', '1'),
(102, 12, 1, 8, 'Calculus', 'ICT 102-2', '2'),
(103, 12, 1, 8, 'Introduction to Statistics', 'ICT 103-2', '2'),
(104, 12, 1, 8, 'Financial Management', 'ICT 111-2', '2'),
(105, 12, 1, 8, 'Database Management Systems', 'ICT 134-2', '2'),
(106, 12, 1, 8, 'Internet and Web Technologies', 'ICT 142-3', '3'),
(107, 12, 1, 8, 'Data Structures and Algorithms', 'ICT 143-2', '2'),
(108, 12, 1, 8, 'Computer Systems Organization', 'ICT 133-3', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accademic_year`
--
ALTER TABLE `tbl_accademic_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_degree`
--
ALTER TABLE `tbl_degree`
  ADD PRIMARY KEY (`degree_id`);

--
-- Indexes for table `tbl_lecturer`
--
ALTER TABLE `tbl_lecturer`
  ADD PRIMARY KEY (`lec_id`);

--
-- Indexes for table `tbl_results_sem1`
--
ALTER TABLE `tbl_results_sem1`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `tbl_results_sem2`
--
ALTER TABLE `tbl_results_sem2`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `tbl_results_sem3`
--
ALTER TABLE `tbl_results_sem3`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `tbl_results_sem4`
--
ALTER TABLE `tbl_results_sem4`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `tbl_results_sem5`
--
ALTER TABLE `tbl_results_sem5`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `tbl_results_sem6`
--
ALTER TABLE `tbl_results_sem6`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `tbl_results_sem7`
--
ALTER TABLE `tbl_results_sem7`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `tbl_results_sem8`
--
ALTER TABLE `tbl_results_sem8`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accademic_year`
--
ALTER TABLE `tbl_accademic_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_degree`
--
ALTER TABLE `tbl_degree`
  MODIFY `degree_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_lecturer`
--
ALTER TABLE `tbl_lecturer`
  MODIFY `lec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_results_sem1`
--
ALTER TABLE `tbl_results_sem1`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_results_sem2`
--
ALTER TABLE `tbl_results_sem2`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_results_sem3`
--
ALTER TABLE `tbl_results_sem3`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_results_sem4`
--
ALTER TABLE `tbl_results_sem4`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_results_sem5`
--
ALTER TABLE `tbl_results_sem5`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_results_sem6`
--
ALTER TABLE `tbl_results_sem6`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_results_sem7`
--
ALTER TABLE `tbl_results_sem7`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_results_sem8`
--
ALTER TABLE `tbl_results_sem8`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `semester_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
