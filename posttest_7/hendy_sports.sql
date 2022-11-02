-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 02 Nov 2022 pada 11.46
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hendy_sports`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `goods`
--

CREATE TABLE `goods` (
  `id_barang` int(5) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jenis_barang` varchar(30) NOT NULL,
  `stok_barang` int(5) NOT NULL,
  `status_barang` enum('ready','tidak') DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `goods`
--

INSERT INTO `goods` (`id_barang`, `nama_barang`, `jenis_barang`, `stok_barang`, `status_barang`, `gambar`, `tanggal`) VALUES
(101, 'bola basket', 'atribut bola basket', 100, 'ready', 'bola_basket.jpeg', '2022-10-27 15:15:21'),
(102, 'tali tambang', 'atribut lompat tali', 20, 'tidak', 'skiping.jpeg', '2022-10-27 15:17:57'),
(103, 'raket tenis', 'atribut tenis lapangan', 50, 'ready', 'tenis.jpeg', '2022-10-27 15:21:14'),
(104, 'sepatu bola', 'atribut sepak bola', 100, 'ready', 'sepatu_bola.jpeg', '2022-10-27 15:22:09'),
(105, 'sarung boxing', 'atribute tinju', 34, 'ready', 'sepatu.jpg', '2022-11-02 18:19:23'),
(134, 'buku', 'dsfsdf', 59, 'tidak', 'tongkat_golf.jpeg', '2022-11-01 15:35:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`) VALUES
(3, 'april', '$2y$10$eFvwSdxXQoQl7YQQz6doaOOp3HclK0BlT.mXinn5vRPhLbXrPN8FK'),
(4, 'alex', '$2y$10$v4WM0hu75K66UXAfRXZxwu.lKd9lCsYYnESn9U3T6.2PMbSmgbTli'),
(5, 'budianto', '$2y$10$vfdJpAGiiy3rPq1QvVpC5uJqYSE.XvHHHmYNxbukZamFSUVV.Fjee'),
(6, 'alif', '$2y$10$itOFFYVDq..hMERDlXsgY.Hvk/qnhdMijltSsc6KQDu9DP4WMa4Jm'),
(7, 'said', '$2y$10$2huHBPCtPSRv13cPsg6IWOCkeiBh0TdlQbchitrKLn6tkmgN5yCJC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
