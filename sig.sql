-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2019 pada 20.26
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_user`, `nama`, `password`, `email`) VALUES
(1, 'akli ganteng :V', '1234', 'akli@gmail.com'),
(2, 'riki', '12345', 'riki@gmail.com'),
(3, 'dela', '123456', 'dela@gmail.com'),
(4, 'atan', '1234567', 'atan@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hewan`
--

CREATE TABLE `hewan` (
  `nama_hewan` varchar(20) NOT NULL,
  `id_hewan` int(3) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `jumlah_hewan` int(50) NOT NULL,
  `deskripsi_hewan` varchar(200) NOT NULL,
  `id_wilayah` varchar(100) NOT NULL,
  `foto_hewan` varchar(100) DEFAULT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hewan`
--

INSERT INTO `hewan` (`nama_hewan`, `id_hewan`, `kategori`, `jumlah_hewan`, `deskripsi_hewan`, `id_wilayah`, `foto_hewan`, `alamat`, `kota`, `latitude`, `longitude`) VALUES
('asuuuuu', 1, 'langka', 12, 'sdsdsddfsfsf', 'A09', '16112019101827foto.jpeg', 'kayangancccc', 'banjar masinnnnnn', '-7.7772232', '110.4134626'),
('aklibarutest', 5, 'langka', 123456, 'asddfghh', 'B05', '1611201919484414-hd-wallpapers-space-man-in-fields.jpg', 'kayangan', 'muara teweh', '-7.775131', '110.406448'),
('akle ganteng', 123, 'langka', 11, 'sdsdsdsd', 'B04', '16112019104046ae6c59f2-82cb-4633-a816-7c08fb51f8bb_169.jpg', 'adddddddddd', 'banjar masinnn', '-7.7782809', '110.373132'),
('wiliam', 1235, 'langka', 1134, 'sdsdd', 'A10', '16112019105543IMG-20180814-WA0057.jpg', 'suka hatimu', 'jogja', '-7.740555', ' 110.664614'),
('asemmmmm', 123477, 'langka', 2147483647, 'sdsdsds', 'B05', '16112019102434emas-grasberg.jpg', 'kayangancccc', 'banjar masinnn', '-7.8183805', '110.4317021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `jenis_hewan` varchar(30) NOT NULL,
  `habitat_hewan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`jenis_hewan`, `habitat_hewan`) VALUES
('mamalia', 'aer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`jenis_hewan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
