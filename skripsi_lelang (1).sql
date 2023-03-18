-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Mar 2023 pada 18.59
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi_lelang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(99) DEFAULT NULL,
  `username` varchar(99) DEFAULT NULL,
  `password` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(99) DEFAULT NULL,
  `kategori` varchar(99) DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `tgltutup` date DEFAULT NULL,
  `hargabuka` varchar(99) DEFAULT NULL,
  `foto` varchar(99) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `idmember` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `kategori`, `ket`, `tgltutup`, `hargabuka`, `foto`, `date`, `idmember`, `views`) VALUES
(3, 'Mobil toy', 'Umum', '  Culpa dolore velit sit quis deserunt consectetur ipsum laboris anim et. Ullamco laboris enim amet id Lorem est culpa officia. Sint ex sint duis in non non Lorem mollit officia.\r\n', '2023-01-23', '15000', '2b83ba988de305a2a4c938c8380e4542.jpg', '2023-01-23', 3, 0),
(4, 'Toy kids', 'Umum', 'Aute in quis cillum sunt consectetur adipisicing cillum eu irure consectetur esse. Quis exercitation cupidatat adipisicing ullamco deserunt mollit cupidatat enim mollit laborum. Sint nulla aliqua occaecat nostrud consequat aliqua do. Nostrud laborum eu ipsum in ipsum voluptate sint eu sunt enim labore labore.\r\n', '2023-01-23', '50000', 'a09c70418d824c752c1c0ab5e151dace.jpg', '2023-01-23', 3, 1),
(5, 'Mainan anak', 'Umum', 'Aute in quis cillum sunt consectetur adipisicing cillum eu irure consectetur esse. Quis exercitation cupidatat adipisicing ullamco deserunt mollit cupidatat enim mollit laborum. Sint nulla aliqua occaecat nostrud consequat aliqua do. Nostrud laborum eu ipsum in ipsum voluptate sint eu sunt enim labore labore.\r\n', '2023-01-23', '450000', 'd3e7ef347fb00311eb95ffa006e782d2.jpg', '2023-01-23', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kat` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kat`) VALUES
(4, 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(99) DEFAULT NULL,
  `telp` varchar(99) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `username` varchar(99) DEFAULT NULL,
  `password` varchar(99) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `nama`, `telp`, `alamat`, `username`, `password`, `date`, `status`) VALUES
(3, 'PEOPLE', '081295916567', 'Jambi', 'test', '202cb962ac59075b964b07152d234b70', '2023-01-23', 'Dikonfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nama` varchar(99) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `tarif` varchar(99) DEFAULT NULL,
  `idbarang` int(11) DEFAULT NULL,
  `status` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
