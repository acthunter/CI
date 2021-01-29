-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2019 pada 16.03
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekspedisi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', ''),
(2, 'admin2', 'e10adc3949ba59abbe56e057f20f883e', 'df');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `country` varchar(225) NOT NULL,
  `provinsi` varchar(225) NOT NULL,
  `kota` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `email` varchar(225) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `mountain` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `country`, `provinsi`, `kota`, `alamat`, `kode_pos`, `email`, `no_hp`, `mountain`) VALUES
(9, 'ARI RIZKI RAMANDA', 'Batusangkar', '1996-04-18', 'Indonesia', '34', 'Padang', 'Padang', '21333', 'aririzkiramanda@rocketmail.com', '08124543545', '3'),
(11, 'AKBAR ASHIDIQI', 'JAMBI', '1995-05-06', 'INDONESIA', '13', 'MUARO BUNGO', 'JAKARTA', '12314', 'akbarcordova@gmail.com', '0812432434', '3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
