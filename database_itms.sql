-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 10:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_itms`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `npk` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `nope` varchar(50) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `tmt_kerja` date NOT NULL,
  `alamat` varchar(125) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `npk`, `nama`, `jabatan`, `unit`, `pendidikan`, `gender`, `nope`, `agama`, `hobi`, `tmt_kerja`, `alamat`, `create_date`, `update_date`) VALUES
(9, '123123222', 'SGPT', 'Teknisi', 'IT', 'SMA', 'L', '231123', 'Kristen', 'Futsal', '2023-04-12', 'qwe', '2023-04-12 14:51:33', '2023-05-04 05:56:14'),
(21, '123123', 'SGOT', 'IT', 'Sarpras', 'Associate', 'P', '123123', 'Islam', 'Futsal', '2023-04-19', 'asasd', '2023-04-19 14:50:01', '2023-05-04 07:17:55'),
(22, '1231232222', 'Albumin', 'IT', 'IT', 'Associate', 'P', '12313123', 'Hindu', 'Futsal', '2023-04-18', 'dasdasd', '2023-04-19 14:52:01', '2023-04-29 05:24:30'),
(23, '726222', 'Hedi', 'Teknisi', 'Sarpras', 'SMA', 'L', '222222', 'Islam', 'bola', '2022-02-02', 'juahsdh', '2023-05-04 07:17:35', '2023-05-04 07:17:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `fullname` varchar(125) NOT NULL,
  `user_akses` int(11) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `fullname`, `user_akses`, `user_status`) VALUES
(2, 'admin', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 'Metalix', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
