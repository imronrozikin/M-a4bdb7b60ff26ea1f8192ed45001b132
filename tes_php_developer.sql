-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Sep 2020 pada 12.12
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes_php_developer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_akses`
--

CREATE TABLE `riwayat_akses` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `waktu_akses` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat_akses`
--

INSERT INTO `riwayat_akses` (`id`, `username`, `waktu_akses`, `status`) VALUES
(11, 'user', '16-09-2020 07:52:30', 'logout'),
(12, 'user', '16-09-2020 07:52:59', 'logout'),
(13, 'user', '16-09-2020 07:53:32', 'logout'),
(14, 'user', '16-09-2020 07:54:26', 'logout'),
(15, 'user', '16-09-2020 07:54:58', 'logout'),
(16, 'user', '16-09-2020 08:04:13', 'logout'),
(17, 'user', '16-09-2020 09:22:50', 'logout'),
(18, 'user', '16-09-2020 12:06:31', 'logout'),
(19, 'user', '16-09-2020 12:06:59', 'login');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `riwayat_akses`
--
ALTER TABLE `riwayat_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `riwayat_akses`
--
ALTER TABLE `riwayat_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
