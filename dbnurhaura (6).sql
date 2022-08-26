-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 04:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnurhaura`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_form`
--

CREATE TABLE `register_form` (
  `id` int(12) NOT NULL,
  `namaMurid` varchar(255) NOT NULL,
  `icMurid` varchar(255) NOT NULL,
  `gbrqrcode` varchar(255) NOT NULL,
  `noSijilMurid` varchar(255) NOT NULL,
  `TarikhLMurid` varchar(255) NOT NULL,
  `uMurid` varchar(255) NOT NULL,
  `jantinaMurid` varchar(255) NOT NULL,
  `agamaMurid` varchar(255) NOT NULL,
  `bangsaMurid` varchar(255) NOT NULL,
  `wargaMurid` varchar(255) NOT NULL,
  `alamatMurid` varchar(255) NOT NULL,
  `penyakitMurid` varchar(255) NOT NULL,
  `masalahMurid` varchar(255) NOT NULL,
  `namaBapa` varchar(255) NOT NULL,
  `icBapa` varchar(255) NOT NULL,
  `tarikhLBapa` varchar(255) NOT NULL,
  `uBapa` varchar(255) NOT NULL,
  `agamaBapa` varchar(255) NOT NULL,
  `bangsaBapa` varchar(255) NOT NULL,
  `wargaBapa` varchar(255) NOT NULL,
  `tarafPBapa` varchar(255) NOT NULL,
  `noRumahBapa` varchar(255) NOT NULL,
  `noBimBapa` varchar(255) NOT NULL,
  `noPejBapa` varchar(255) NOT NULL,
  `NAmajikanBapa` varchar(255) NOT NULL,
  `namaEmak` varchar(255) NOT NULL,
  `icEmak` varchar(255) NOT NULL,
  `tarikhLEmak` varchar(255) NOT NULL,
  `uEmak` varchar(255) NOT NULL,
  `agamaEmak` varchar(255) NOT NULL,
  `bangsaEmak` varchar(255) NOT NULL,
  `wargaEmak` varchar(255) NOT NULL,
  `tarafPEmak` varchar(255) NOT NULL,
  `noRumahEmak` varchar(255) NOT NULL,
  `noBimEmak` varchar(255) NOT NULL,
  `noPejEmak` varchar(255) NOT NULL,
  `NAmajikanEmak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_form`
--

INSERT INTO `register_form` (`id`, `namaMurid`, `icMurid`, `gbrqrcode`, `noSijilMurid`, `TarikhLMurid`, `uMurid`, `jantinaMurid`, `agamaMurid`, `bangsaMurid`, `wargaMurid`, `alamatMurid`, `penyakitMurid`, `masalahMurid`, `namaBapa`, `icBapa`, `tarikhLBapa`, `uBapa`, `agamaBapa`, `bangsaBapa`, `wargaBapa`, `tarafPBapa`, `noRumahBapa`, `noBimBapa`, `noPejBapa`, `NAmajikanBapa`, `namaEmak`, `icEmak`, `tarikhLEmak`, `uEmak`, `agamaEmak`, `bangsaEmak`, `wargaEmak`, `tarafPEmak`, `noRumahEmak`, `noBimEmak`, `noPejEmak`, `NAmajikanEmak`) VALUES
(1, ' Nurul Qistina Arina binti Amri ', '190708-10-1222', '190708-10-1222 .png', '528874DK', '2019-07-08', '3 Tahun', 'Perempuan', 'Islam', 'Melayu', 'MALAYSIA', 'No 12, Lorong 3, Taman Sri Bayan , 11000 Bayan Lepas, Pulau Pinang', 'Tiada', 'Tiada', 'Amri bin Amirul Hasan', '630205-07-4113', '1963-02-05', '59 TAHUN', 'Islam', 'Melayu', 'MALAYSIA', 'Berkahwin', 'TIADA', '017-4880819', '04-3958745', 'Osram Opto Semiconductors, Penang, 11900 Bayan Lepas.', 'Zuriani binti Karim', '631205-02-0622', '1963-02-05', '59 TAHUN', 'Islam', 'Melayu', 'MALAYSIA', 'Berkahwin', 'TIADA', '017-4213061', '04-9654121', 'Sekolah Kebangsaan Bayan Baru,11000 Bayan Lepas.'),
(3, ' Dania Batrisia binti Abdul', '191212-07-1937', '191212-07-1937 .png', '872323AB', '20119-12-12', '3 Tahun', 'Perempuan', 'Islam', 'Melayu', 'MALAYSIA', 'Taman Sri Relau, Bayan Lepas', 'Tiada', '', 'Abdul bin Muhammad', '561102-07-8545', '1956-11-12', '66 Tahun', 'Islam', 'Melayu', 'MALAYSIA', 'Berkahwin', 'TIADA', '017-4880819', '04-3958454', 'Lam Research, Batu Kawan', 'Kamelia Noh binti Arifin', '660502-07-9688', '1966-05-02', '56 Tahun', 'Islam', 'Melayu', 'Malaysia', 'Berkahwin', '-', '013-8754521', '04-9872212', 'Dufu Technologies. Bayan Lepas'),
(4, ' Nurul Nabila Binti Mohd Rizal', '170708-10-3032', '170708-10-3032 .png', 'AWQQEW', '2022-07-17', '5 Tahun', 'Perempuan', 'Islam', 'Melayu', 'MALAYSIA', 'Apartment Prima View, Lebuh Nipah 2, Kampung Sungai Nibong, 11900 Bayan Lepas, Pulau Pinang', 'Tiada', 'Tiada', 'Mohd Rizal Bin Hisham', '230375-07-0054', '1975-03-23', '47 Tahun', 'Islam', 'Melayu', 'MALAYSIA', 'Berkahwin', 'TIADA', '017-4054845', '-', 'Osram Opto Semiconductors, Penang, 11900 Bayan Lepas.', 'Norita Binti Hassan', '150578-07-0054', '1978-05-15', '44  Tahun', 'Islam', 'Melayu', 'Malaysia', 'Berkahwin', '-', '017-4880819', '-', '-'),
(5, ' Muhammad Aqil Bin Hussein', '190423-07-2283', '190423-07-2283 .png', 'AWQQEW', '2019-04-23', '3 Tahun', 'Lelaki', 'Islam', 'Melayu', 'MALAYSIA', 'Apartment Prima View, Lebuh Nipah 2, Kampung Sungai Nibong, 11900 Bayan Lepas, Pulau Pinang', 'Tiada', 'Tiada', 'Hussein Bin Zaidi', '750205-07-1515', '1975-02-05', '47 Tahun', 'Islam', 'Melayu', 'MALAYSIA', 'Berkahwin', 'TIADA', '012-7845210', '-', 'Lam Research, Batu Kawan', 'Zura Binti Mahmud', '750205-07-1515', '1975-02-05', '47 Tahun', 'Islam', 'Melayu', 'Malaysia', 'Berkahwin', '-', '011-23169665', '-', '-'),
(6, ' Nurul Hidayah Binti Azmi', '180113-07-2284', '180113-07-2284 .png', 'PSDQ123', '2022-08-09', '3 Tahun', 'Perempuan', 'Islam', 'Melayu', 'MALAYSIA', '-', 'Tiada', 'Tiada', 'Zali Bin Zulhelmi', '560205-07-1515', '2022-08-25', '43', 'Islam', 'Melayu', 'MALAYSIA', 'Berkahwin', '-', '0174054845', '0124578454', '-', 'Rosnah Arshad', '990218-08-3232', '2022-08-18', '44', 'Islam', 'Melayu', 'Malaysia', 'Berkahwin', '-', '01254612122', '-', '-'),
(7, ' Muhd Ikmal bin Radzi', '190802-05-0022', '190802-05-0022 .png', '454212SD', '2019-08-02', '3 Tahun', 'Lelaki', 'Islam', 'Melayu', 'MALAYSIA', 'I-Santorini, Georgetown', 'Tiada', 'Tiada', 'Radzi bin Ahmad Daud', '560205-07-1515', '1956-02-05', '66 TAHUN', 'Islam', 'Melayu', 'MALAYSIA', 'Berkahwin', 'TIADA', '017-4054845', '012-4524519', 'Gimmedia Sdn Bhd, Bukit Mertajam', 'Hasmah Binti Akmal', '630218-08-3232', '1963-02-18', '67 TAHUN', 'Islam', 'Melayu', 'Malaysia', 'Berkahwin', 'TIADA', '012-54612163', '04-3985451', 'Dufu Technologies, Bayan Lepas'),
(8, ' Nurul Amelia Binti Mazlan', '190523-07-7834', '190523-07-7834 .png', 'AWQQEW', '2019-05-12', '3 Tahun', 'Perempuan', 'Islam', 'Melayu', 'MALAYSIA', '-', 'Lelah', 'Tiada', 'Hassan Bin Ali', '980205-07-1515', '1998-05-19', '24 Tahun', 'Islam', 'Melayu', 'MALAYSIA', 'Berkahwin', '-', '017-6344606', '-', '-', 'Rozalna Bin Rosli', '981113-07-1515', '1998-11-13', '24 Tahun', 'Islam', 'Melayu', 'Malaysia', 'Berkahwin', '-', '019-2132121', '-', '-'),
(10, ' Muhammad Emir bin Hamirul', '190805-07-5213', '190805-07-5213 .png', '576757EE', '2019-08-05', '3 Tahun', 'Lelaki', 'Islam', 'Melayu', 'MALAYSIA', '1533 Permatang Ara, 13500 Permatang Pauh Pulau Pinang.', '', '', 'Hamirul bin Omar', '560705-07-0833', '1956-07-05', '66 TAHUN', 'Islam', 'Melayu', 'MALAYSIA', 'Berkahwin', 'TIADA', '013-78454541', '03-8745210', 'Inari, Bayan Lepas', 'Nur Iliya binti Kamal', '980708-07-0270', '1998-08-02', '23 Tahun', 'Islam', 'Melayu', 'Malaysia', 'Berkahwin', 'TIADA', '018-4987045', '04-3698541', 'Plexus Riverside, Bayan Lepas');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(255) NOT NULL,
  `masaJadual` varchar(255) NOT NULL,
  `RutinHarian` varchar(255) NOT NULL,
  `maklumatRutin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `masaJadual`, `RutinHarian`, `maklumatRutin`) VALUES
(1, '08:00', 'Kehadiran Pelajar ', 'Mengambil Kehadiran Pelajar menggunakan pengimbas QR kod '),
(3, '08:30', 'Sarapan Pagi ', 'Koko crunch, roti jem ,buah-buahan dan susu'),
(4, '09:00', 'Menyanyi  ', 'Menyanyi lagu negaraku dan lagu tadika'),
(5, '09:15', 'Sesi ejaan dan menulis ', 'Membaca dan menulis bahasa melayu dan english'),
(6, '10:30', 'Makanan ringan ', 'Berehat dan memakan makanan ringan'),
(7, '10:50', 'Sesi mengira ', 'Membuat kuiz matematik '),
(8, '11:45', 'Mewarna ', 'Mengadakan pertandingan mewarna'),
(9, '12:00', 'Balik', 'Ibu bapa mengambil anak masing-masing');

-- --------------------------------------------------------

--
-- Table structure for table `table_attendance`
--

CREATE TABLE `table_attendance` (
  `id` int(20) NOT NULL,
  `studentic` varchar(30) NOT NULL,
  `timein` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_attendance`
--

INSERT INTO `table_attendance` (`id`, `studentic`, `timein`) VALUES
(1, '180419-02-0023', '2021-01-01 07:55:12'),
(2, '180419-02-0023', '2021-01-02 07:55:12'),
(3, '180419-02-0023', '2021-01-03 07:55:12'),
(4, '180419-02-0023', '2021-01-04 07:55:12'),
(5, '180419-02-0023', '2021-01-05 07:55:12'),
(6, '180419-02-0023', '2021-01-06 07:55:12'),
(7, '180419-02-0023', '2021-01-07 07:55:12'),
(8, '180419-02-0023', '2021-01-08 07:55:12'),
(9, '180419-02-0023', '2021-01-09 07:55:12'),
(10, '180419-02-0023', '2021-01-10 07:55:12'),
(11, '180419-02-0023', '2021-01-11 07:55:12'),
(12, '180419-02-0023', '2021-01-12 07:55:12'),
(13, '180419-02-0023', '2021-01-13 07:55:12'),
(14, '190708-10-1222', '2021-01-14 07:55:12'),
(15, '190708-10-1222', '2021-01-15 07:55:12'),
(16, '190708-10-1222', '2021-01-16 07:55:12'),
(17, '190708-10-1222', '2021-01-17 07:55:12'),
(18, '190708-10-1222', '2021-01-18 07:55:12'),
(19, '190708-10-1222', '2021-01-19 07:55:12'),
(20, '190708-10-1222', '2021-01-20 07:55:12'),
(21, '190708-10-1222', '2021-01-21 07:55:12'),
(22, '190708-10-1222', '2021-01-22 07:55:12'),
(23, '190708-10-1222', '2021-01-23 07:55:12'),
(24, '190708-10-1222', '2021-01-24 07:55:12'),
(25, '190708-10-1222', '2021-01-25 07:55:12'),
(26, '190708-10-1222', '2021-01-26 07:55:12'),
(27, '190708-10-1222', '2021-01-27 07:55:12'),
(28, '190708-10-1222', '2021-01-28 07:55:12'),
(29, '190708-10-1222', '2021-01-29 07:55:12'),
(30, '190708-10-1222', '2021-01-30 07:55:12'),
(31, '190708-10-1222', '2021-01-31 07:55:12'),
(32, '190708-10-1222', '2021-02-01 07:55:12'),
(33, '191212-07-1937', '2021-02-02 07:55:12'),
(34, '191212-07-1937', '2021-02-03 07:55:12'),
(35, '191212-07-1937', '2021-02-04 07:55:12'),
(36, '191212-07-1937', '2021-02-05 07:55:12'),
(37, '191212-07-1937', '2021-02-06 07:55:12'),
(38, '191212-07-1937', '2021-02-07 07:55:12'),
(39, '191212-07-1937', '2021-02-08 07:55:12'),
(40, '191212-07-1937', '2021-02-09 07:55:12'),
(41, '191212-07-1937', '2021-02-10 07:55:12'),
(42, '191212-07-1937', '2021-02-11 07:55:12'),
(43, '191212-07-1937', '2021-02-12 07:55:12'),
(44, '191212-07-1937', '2021-02-13 07:55:12'),
(45, '191212-07-1937', '2021-02-14 07:55:12'),
(46, '180419-02-0023', '2021-02-15 07:55:12'),
(47, '180419-02-0023', '2021-02-16 07:55:12'),
(48, '180419-02-0023', '2021-02-17 07:55:12'),
(49, '180419-02-0023', '2021-02-18 07:55:12'),
(50, '180419-02-0023', '2021-02-19 07:55:12'),
(51, '180419-02-0023', '2021-02-20 07:55:12'),
(52, '180419-02-0023', '2021-05-01 07:25:59'),
(53, '180419-02-0023', '2021-05-02 07:25:59'),
(54, '180419-02-0023', '2021-05-03 07:25:59'),
(55, '180419-02-0023', '2021-05-04 07:25:59'),
(56, '180419-02-0023', '2021-05-05 07:25:59'),
(57, '180419-02-0023', '2021-05-06 07:25:59'),
(58, '180419-02-0023', '2021-05-07 07:25:59'),
(59, '190708-10-1222', '2021-05-08 07:25:59'),
(60, '190708-10-1222', '2021-05-09 07:25:59'),
(61, '190708-10-1222', '2021-05-10 07:25:59'),
(62, '190708-10-1222', '2021-05-11 07:25:59'),
(63, '190708-10-1222', '2021-05-12 07:25:59'),
(64, '190708-10-1222', '2021-05-13 07:25:59'),
(65, '190708-10-1222', '2022-02-01 07:46:17'),
(66, '190708-10-1222', '2022-02-02 07:46:17'),
(67, '190708-10-1222', '2022-02-03 07:46:17'),
(68, '190708-10-1222', '2022-02-04 07:46:17'),
(69, '190708-10-1222', '2022-02-05 07:46:17'),
(70, '190708-10-1222', '2022-02-06 07:46:17'),
(71, '190708-10-1222', '2022-02-07 07:46:17'),
(72, '190708-10-1222', '2022-02-08 07:46:17'),
(73, '191212-07-1937', '2022-02-09 07:46:17'),
(74, '191212-07-1937', '2022-02-10 07:46:17'),
(75, '191212-07-1937', '2022-02-11 07:46:17'),
(76, '191212-07-1937', '2022-02-12 07:46:17'),
(77, '191212-07-1937', '2022-02-13 07:46:17'),
(78, '191212-07-1937', '2022-05-07 08:01:12'),
(79, '191212-07-1937', '2022-05-08 08:01:12'),
(80, '191212-07-1937', '2022-05-09 08:01:12'),
(81, '191212-07-1937', '2022-05-10 08:01:12'),
(82, '191212-07-1937', '2022-05-11 08:01:12'),
(83, '191212-07-1937', '2022-05-12 08:01:12'),
(84, '191212-07-1937', '2022-05-13 08:01:12'),
(85, '191212-07-1937', '2022-05-14 08:01:12'),
(86, '191212-07-1937', '2022-05-15 08:01:12'),
(87, '191212-07-1937', '2022-05-16 08:01:12'),
(88, '180419-02-0023', '2022-05-17 08:01:12'),
(89, '180419-02-0023', '2022-05-18 08:01:12'),
(90, '180419-02-0023', '2022-05-19 08:01:12'),
(91, '180419-02-0023', '2022-05-20 08:01:12'),
(92, '180419-02-0023', '2022-05-21 08:01:12'),
(93, '180419-02-0023', '2022-05-22 08:01:12'),
(94, '180419-02-0023', '2022-05-23 08:01:12'),
(95, '180419-02-0023', '2022-05-24 08:01:12'),
(96, '180419-02-0023', '2022-07-18 08:00:00'),
(97, '180419-02-0023', '2022-07-19 08:00:00'),
(98, '180419-02-0023', '2022-07-20 08:00:00'),
(99, '180419-02-0023', '2022-07-21 08:00:00'),
(100, '180419-02-0023', '2022-07-22 08:00:00'),
(101, '180419-02-0023', '2022-07-23 08:00:00'),
(102, '191212-07-1937', '2022-07-24 08:00:00'),
(103, '191212-07-1937', '2022-07-25 08:00:00'),
(104, '191212-07-1937', '2022-07-26 08:00:00'),
(105, '191212-07-1937', '2022-07-27 08:00:00'),
(106, '191212-07-1937', '2022-07-28 08:00:00'),
(107, '191212-07-1937', '2022-07-29 08:00:00'),
(108, '191212-07-1937', '2022-07-30 08:00:00'),
(109, '191212-07-1937', '2022-07-31 08:00:00'),
(110, '191212-07-1937', '2022-08-01 08:00:00'),
(111, '191212-07-1937', '2022-08-02 08:00:00'),
(112, '191212-07-1937', '2022-08-03 08:00:00'),
(113, '191212-07-1937', '2022-08-04 08:00:00'),
(114, '180419-02-0023', '2022-08-05 08:00:00'),
(115, '180419-02-0023', '2022-08-06 08:00:00'),
(116, '180419-02-0023', '2022-08-07 08:00:00'),
(117, '180419-02-0023', '2022-08-08 08:00:00'),
(118, '180419-02-0023', '2022-08-09 08:00:00'),
(119, '180419-02-0023', '2022-08-10 08:00:00'),
(120, '190708-10-1222', '2022-08-25 16:00:50'),
(121, '190523-07-7834', '2022-08-26 15:08:29'),
(122, '190802-05-0022', '2022-08-26 15:57:19'),
(123, '190126-07-8888', '2022-08-26 17:00:36'),
(124, '190708-10-1222', '2022-08-26 22:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `noMyKad` varchar(14) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `noMyKad`, `phone`, `gender`, `email`, `password`, `user_type`) VALUES
(1, 'NorHayati Binti Ali', '780315-07-7806', '017-4667878', 'Perempuan', 'hayati12@gmail.com', '363dbacdf2b6df15de55564b62df5eb403504406', 'Guru'),
(2, 'Siti Yasmin Binti Hafidz', '950718-07-2776', '017-4941765', 'Perempuan', 'sitiyasmin@gmail.com', 'ba21909ed9f94e64ba6dac194e6f6de2957104e7', 'Guru'),
(3, 'Nurul Qistina Arina binti Amri', '190708-10-1222', '0174880819', 'Perempuan', 'sara@gmail.com', '48f6dd310f936f5d4157d21216414164c33e8f4f', 'Pelajar'),
(4, 'Dania Batrisia binti Abdul', '191212-07-1937', '0174880819', 'Perempuan', 'sitibaiduri@gmail.com', 'c469566b278ad9d76410f5dbc0f592a37c579faf', 'Pelajar'),
(5, 'Muhammad Mustaqim bin Md Naim', '1804119-02-002', '0174880819', 'Lelaki', 'syifa@gmail.com', '3ab2b64291d07e85214db17d1670dadb81359350', 'Pelajar'),
(6, 'Nurul Nabila Binti Mohd Rizal', '170708-10-3032', '017-4880819', 'Perempuan', 'nabila@gmail.com', '98cdb9731c2bfa675e26969957ad370a131a3d2f', 'Pelajar'),
(7, 'Muhammad Aqil Bin Hussein', '190423-07-2283', '01123159665', 'Lelaki', 'izzati@gmail.com', 'f2ac47e240fca594e09acf3697b3334ff7e9aeae', 'Pelajar'),
(8, 'Nurul Hidayah Binti Azmi', '180113-07-2284', '017-4880819', 'Perempuan', 'intan@gmail.com', '45f58e7b38606de5063d17b0426b09d579a6dc5a', 'Pelajar'),
(9, 'Muhd Ikmal bin Radzi', '190802-05-0022', '0174880819', 'Lelaki', 'radzi@gmail.com', 'befe25f20597e4ad74dcd26cbc798208c0f59d5c', 'Pelajar'),
(10, 'Nurul Amelia Binti Mazlan', '190523-07-7834', '0174880819', 'Perempuan', 'amelia@gmail.com', 'b01adc75409298197beef7fdb9a3e6d02c733f96', 'Pelajar'),
(11, 'Ameliya Natasya', '190708-02-0898', '0174880819', 'Perempuan', 'hunhun@gmail.com', '997488491af707aa1363fefd8512750df7e5a67d', 'Pelajar'),
(12, 'aqil@gmail.com', '000126-07-0063', '017-4880819', 'Perempuan', 'amelia@gmail.com', 'a00669cd6c005ae1c7bfb64838905d404099a018', 'Guru'),
(13, 'Nurul Natasya Binti Faizal Chee', '190126-07-8888', '0174880819', 'Perempuan', 'natasya@gmail.com', '419bd9f202ba25a5013647ef11de57608ac25fdd', 'Pelajar'),
(14, 'Muhammad Syamil bin Hasan', '020112-07-0093', '017-4581212', 'Lelaki', 'syamil@gmail.com', 'c869663f4ccabf513a764412838cdcd1158c8744', 'Guru'),
(15, 'Muhammad Emir bin Hamirul', '190805-07-5213', '012-5932838', 'Lelaki', 'hamirul123@gmail.com', '197c7a0b492dad8cc3f74a9896c49e15d80c2608', 'Pelajar'),
(16, 'Nurul Adiba Hanim Binti Badrul', '780615-07-2206', '017-4587653', 'Perempuan', 'dibanim@gmail.com', '0c83461a29aeff2498736f658adf85cbacf811ae', 'Guru'),
(17, 'Nurul Nadia Binti Mohd Rizal', '190718-07-2272', '017-4880819', 'Perempuan', 'suzana@gmail.com', '5c9bdf75eeedcf83b5683769d6687f1063459802', 'Pelajar'),
(18, 'Muhammad Firdaus bin Danial', '190805-07-0521', '017-4880819', 'Perempuan', 'sarahj@gmail.com', 'f85e420b785eb0ccc544192f9cefde0dfc803998', 'Pelajar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_form`
--
ALTER TABLE `register_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_attendance`
--
ALTER TABLE `table_attendance`
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
-- AUTO_INCREMENT for table `register_form`
--
ALTER TABLE `register_form`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table_attendance`
--
ALTER TABLE `table_attendance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
