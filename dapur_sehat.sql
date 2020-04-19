-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2020 at 05:52 AM
-- Server version: 8.0.18
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dapur_sehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Abon', 'Abon Salmon by Nafisa', 'Food', 20000, 8, 'abonsalmonnafisa.jpg'),
(2, 'Bebe Roll ', 'Bebe Roll Rasa Keju by Yummy Bites', 'Snack', 15000, 17, 'bb_keju.jpg'),
(3, 'Bebe Roll', 'Bebe Roll Rasa Strawberry by Yummy Bites', 'Snack', 15000, 20, 'bb_strawberry.jpg'),
(4, 'Bebe Roll', 'Bebe Roll Rasa Blueberry by Yummy BItes', 'Snack', 15000, 20, 'bb_blueberry.jpg'),
(5, 'Abon', 'Abon Ayam Kampung by Nafisa ', 'Food', 20000, 10, 'IMG-20200215-WA0022.jpg'),
(7, 'Sendok Garpu Sumpit Jerami ', 'Terbuat dari bahan plastik berkualitas (jerami gandum)-Warna yang tersedia : Pink,Biru,Hijau', 'Kitchen', 15000, 30, 'sendok.png'),
(8, 'Sendok Takar 1 Set ', 'Sendok ukur Set Cantik-1 pcs 1 ml / gr,2.5 ml / gr,5 ml / gr, 7.5 ml / gr,15 ml / gr', 'Kitchen', 10000, 20, 'sendokset.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(5, 'Kinanti', 'Jl. Kutilang', '2020-04-17 20:25:14', '2020-04-18 20:25:14'),
(6, 'Kinan', 'Jl 1', '2020-04-18 18:57:02', '2020-04-19 18:57:02'),
(7, 'Darin', 'Taman Bahagia No 21', '2020-04-18 19:48:06', '2020-04-19 19:48:06'),
(8, 'Damila', 'Bahagia Selalu no 12', '2020-04-18 19:51:58', '2020-04-19 19:51:58'),
(9, 'violet', 'Bandung no 56', '2020-04-18 19:53:26', '2020-04-19 19:53:26'),
(10, 'Kinan Darin Millan', 'jalan soekarno hatta no 10', '2020-04-19 09:48:05', '2020-04-20 09:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(4, 5, 1, 'Abon', 1, 20000, ''),
(5, 5, 2, 'Bebe Roll ', 1, 15000, ''),
(6, 6, 3, 'Bebe Roll', 1, 15000, ''),
(7, 7, 3, 'Bebe Roll', 1, 15000, ''),
(8, 8, 1, 'Abon', 1, 20000, ''),
(9, 9, 2, 'Bebe Roll ', 1, 15000, ''),
(10, 10, 1, 'Abon', 1, 20000, ''),
(11, 10, 2, 'Bebe Roll ', 2, 15000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(5, 'Kinanti', 'kinanpermata', 'kinan', 2),
(6, 'user', 'user', 'user', 2),
(7, 'Budi', 'budiman', '123', 2),
(8, 'kinan darin millan', 'karinlan', 'karinlan', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
