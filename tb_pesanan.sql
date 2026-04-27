-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2026 at 05:36 AM
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
-- Database: `db_jasaediting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `produk` varchar(50) DEFAULT NULL,
  `paket` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `file_dokumen` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `nama`, `produk`, `paket`, `harga`, `keterangan`, `file_dokumen`, `tanggal`, `no_hp`) VALUES
(1, 'ell', 'Logo', 'Fast', 500000, 'p ', '', '2026-04-22 03:02:38', ''),
(2, 'irna ', 'Foto', 'Normal', 35000, 's', '', '2026-04-26 07:52:47', ''),
(3, 'irna ', 'Foto', 'Normal', 35000, 's', '', '2026-04-26 07:52:57', ''),
(4, 'irna ', 'Foto', 'Normal', 35000, 's', '', '2026-04-26 07:53:04', ''),
(5, 'irna ', 'Foto', 'Normal', 35000, 's', '', '2026-04-26 07:54:28', ''),
(6, 'irna ', 'Foto', 'Normal', 35000, 's', '', '2026-04-26 07:55:02', ''),
(7, 'irna ', 'Foto', 'Normal', 35000, 's', '', '2026-04-26 07:55:05', ''),
(8, 'irna ', 'Foto', 'Normal', 35000, 's', '', '2026-04-26 07:55:24', ''),
(9, 'irna ', 'Foto', 'Normal', 35000, 's', '', '2026-04-26 07:56:31', ''),
(10, 'r', 'Foto', 'Express', 40000, 'r', '', '2026-04-26 15:03:22', ''),
(11, 'r', 'Foto', 'Express', 40000, 'r', '', '2026-04-26 15:07:48', ''),
(12, 'r', 'Foto', 'Express', 40000, 'r', '', '2026-04-26 15:24:11', ''),
(13, 's', 'Logo', 'Express', 160000, 's', '', '2026-04-26 15:35:38', ''),
(14, 'rrr', 'Foto', 'Normal', 35000, 'rr', '', '2026-04-26 15:36:46', ''),
(15, 'r', 'Foto', 'Express', 40000, 'r', '', '2026-04-26 15:58:25', ''),
(16, 'r', 'Foto', 'Express', 40000, 'r', '', '2026-04-26 15:59:31', ''),
(17, 'r', 'Foto', 'Express', 40000, 'r', '', '2026-04-26 15:59:35', ''),
(18, 'r', 'Foto', 'Express', 40000, 'r', '', '2026-04-26 16:00:28', ''),
(19, 'r', 'Foto', 'Express', 40000, 'r', '', '2026-04-26 16:01:46', ''),
(20, 'ell', 'Foto', 'Rush', 65000, 'nknj', '', '2026-04-27 02:11:47', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
