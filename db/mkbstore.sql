-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2022 pada 14.33
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamestore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_admin`
--

CREATE TABLE `ms_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_admin`
--

INSERT INTO `ms_admin` (`id`, `username`, `password`) VALUES
(1, 'fadly', 'fadly123'),
(2, 'admin', 'admin123'),
(15, 'admin', 'admin123'),
(16, 'alvin', 'alvin123'),
(17, 'admin', 'admin123'),
(18, 'alvin', 'alvin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_games`
--

CREATE TABLE `tb_games` (
  `id_games` int(11) NOT NULL,
  `nama_game` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_games`
--

INSERT INTO `tb_games` (`id_games`, `nama_game`) VALUES
(1, 'mobilelegend'),
(2, 'valorant'),
(3, 'pubg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(11) NOT NULL,
  `jumlah_dm` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `id_games` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `jumlah_dm`, `harga`, `id_games`) VALUES
(9, '86', 'Rp.20.000', 1),
(10, '172', 'Rp.40.500', 1),
(11, '257', 'Rp.60.500', 1),
(12, '344', 'Rp.60.500', 1),
(15, '429', 'Rp.101.500', 1),
(16, '514', 'Rp.121.500', 1),
(17, '706', 'Rp.162.000', 1),
(18, '878', 'Rp.203.000', 1),
(19, '1050', 'Rp.245.000', 1),
(20, '1412', 'Rp.324.000', 1),
(21, '2195', 'Rp.482.500', 1),
(22, '3072', 'Rp.675.000', 1),
(23, '52', 'Rp.10.000', 3),
(24, '105', 'Rp.19.000', 3),
(25, '157', 'Rp.29.000', 3),
(28, '315', 'Rp.55.000', 3),
(29, '400', 'Rp.70.000', 3),
(30, '635', 'Rp.110.000', 3),
(31, '125', 'Rp.15.500', 2),
(32, '420', 'Rp.49.000', 2),
(33, '700', 'Rp.78.000', 2),
(36, '1375', 'Rp.145.000', 2),
(37, '2400', 'Rp.242.000', 2),
(38, '4000', 'Rp.385.000', 2),
(39, '8150', 'Rp.770.000', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `Id` int(11) NOT NULL,
  `id_akun` varchar(255) DEFAULT NULL,
  `id_server` varchar(255) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `jenis_pembayaran` varchar(255) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`Id`, `id_akun`, `id_server`, `id_product`, `jenis_pembayaran`, `bukti_pembayaran`, `no_hp`) VALUES
(51, '132322832', '2665', 9, 'TRANSFER BANK BCA - 5211706512', NULL, '081289975343');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ms_admin`
--
ALTER TABLE `ms_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_games`
--
ALTER TABLE `tb_games`
  ADD PRIMARY KEY (`id_games`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_games` (`id_games`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_product` (`id_product`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ms_admin`
--
ALTER TABLE `ms_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_games`
--
ALTER TABLE `tb_games`
  MODIFY `id_games` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `tb_product_ibfk_1` FOREIGN KEY (`id_games`) REFERENCES `tb_games` (`id_games`);

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `tb_product` (`id_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
