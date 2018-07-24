-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 11:04 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(10) NOT NULL,
  `id_customer` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `total_harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_customer`, `id_produk`, `foto`, `nama_produk`, `harga`, `jumlah`, `total_harga`) VALUES
(33, 3, 31, 'b1.jpg', 'gelang', 100000, 2, 200000),
(34, 3, 29, 'unnamed.png', 'style antique bronze', 200000, 2, 400000),
(35, 4, 30, '57-59.jpg', 'pink diamond', 700000, 2, 1400000);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(5) NOT NULL,
  `id_order` int(5) NOT NULL,
  `id_customer` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `total_harga` int(8) NOT NULL,
  `pil_bayar` varchar(10) NOT NULL,
  `negara` varchar(10) NOT NULL,
  `provinsi` varchar(15) NOT NULL,
  `kabupaten` varchar(15) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `alamat_lengkap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `id_order`, `id_customer`, `id_produk`, `jumlah`, `total_harga`, `pil_bayar`, `negara`, `provinsi`, `kabupaten`, `kode_pos`, `alamat_lengkap`) VALUES
(18, 61, 3, 31, 2, 200000, 'Mandiri', 'indonesia', 'jawa timur', 'jombang', 78345, 'jl sunan muria no 89 jember'),
(19, 61, 3, 23, 2, 40000, 'Mandiri', 'indonesia', 'jawa timur', 'jombang', 78345, 'jl sunan muria no 89 jember'),
(20, 62, 3, 31, 2, 200000, 'Permata', 'indonesia', 'jawa tengah', 'bantul', 99087, 'jl pajangan sedayu km 1,5 bantul'),
(21, 62, 3, 29, 2, 400000, 'Permata', 'indonesia', 'jawa tengah', 'bantul', 99087, 'jl pajangan sedayu km 1,5 bantul'),
(22, 63, 4, 31, 1, 100000, 'ATM', 'indonesia', 'jawa timur', 'kudus', 78345, 'jl pahlawan no 45 surabaya'),
(23, 63, 4, 32, 1, 350000, 'ATM', 'indonesia', 'jawa timur', 'kudus', 78345, 'jl pahlawan no 45 surabaya'),
(25, 65, 4, 30, 2, 1400000, 'BCA', 'cina', 'malaka', 'semarang', 55761, 'jl sunan muria no 89 kudus');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_depan` varchar(10) NOT NULL,
  `nama_belakang` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telp` int(15) NOT NULL,
  `nama_rek` varchar(20) NOT NULL,
  `no_rek` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_depan`, `nama_belakang`, `email`, `password`, `tgl_lahir`, `no_telp`, `nama_rek`, `no_rek`, `alamat`) VALUES
(3, 'yoga', 'maruf', 'ramadan@gmail.com', 'ramadan', '1999-07-01', 2147483647, 'yogamaruf', '2740284756478', 'kasongan bangunjiwo kasihan bantul'),
(4, 'rava', 'prasetyo', 'prasetyo@gmail.com', 'prasetyo', '1999-07-01', 2147483647, 'prasetyo rava', '239475864993', 'Jl bugisan no 12 yk');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`) VALUES
(10, 'fashion'),
(11, 'watches'),
(12, 'Fine jewelry'),
(13, 'Fashion jewelry'),
(14, 'Engagement & wedding'),
(15, 'Men\'s jewelry'),
(16, 'Vintage & Antique'),
(17, 'Loose Diamonds'),
(18, 'Loose Beads'),
(19, 'See all jewelry & wa');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id_merk` int(11) NOT NULL,
  `nama_merk` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id_merk`, `nama_merk`, `gambar`) VALUES
(50, 'Casio', '11.png'),
(51, 'Vida', '21.png'),
(52, 'Sport', '31.png'),
(53, 'Rolex', '41.png'),
(54, 'Rado', '51.png'),
(55, 'Seiko', '61.png');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(5) NOT NULL,
  `id_customer` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `total_bayar` int(5) NOT NULL,
  `tgl_order` datetime NOT NULL,
  `keterangan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_customer`, `nama`, `total_bayar`, `tgl_order`, `keterangan`) VALUES
(61, 3, 'yoga maruf ramadan', 240000, '2018-07-24 10:11:37', 'sudah bayar'),
(62, 3, 'ramadan', 600000, '2018-07-24 16:24:02', 'bayar'),
(63, 4, 'Prasetyo ', 450000, '2018-07-24 16:38:28', 'Bayar'),
(65, 4, 'Prasetyo ', 1400000, '2018-07-24 17:12:12', 'bayar');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` varchar(15) NOT NULL,
  `id_merk` varchar(15) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `bahan` varchar(20) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(15) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `id_merk`, `nama_produk`, `bahan`, `warna`, `deskripsi`, `harga`, `foto`) VALUES
(21, '10', '50', 'jam tangan', 'stainless steel', 'emas', 'tahan karat dan elegan ', 990000, 'a1.jpg'),
(23, '11', '51', 'gelang', 'karet', 'hitam', 'lentur', 20000, 'c1.jpg'),
(24, '11', '51', 'AQ 230 GOLD CASIO VI', 'stainless steel', 'emas', 'tampilan yang mewah', 1700000, 'jam1.jpg'),
(25, '12', '50', 'Cincin', 'emas', 'abu abu', 'mantab jiwa', 400000, 'j1.jpg'),
(26, '13', '50', 'kalung', 'emas', 'keemasan', 'well ', 500000, 'shop-cart1.PNG'),
(27, '14', '50', 'cincin nikah', 'emas', 'emas', 'mantab buat cincin nikah sob!', 400000, 'e1.jpg'),
(28, '15', '50', 'HEYu jewelry', 'logam', 'emas', 'kondisi oke', 450000, 'bootstrap-ring1.png'),
(29, '16', '50', 'style antique bronze', 'logam', 'keemasan', 'menarik', 200000, 'unnamed.png'),
(30, '17', '50', 'pink diamond', 'batu kristal', 'merah muda', 'okeboleh', 700000, '57-59.jpg'),
(31, '18', '50', 'gelang', 'emas', 'emas', 'nyaman dipakai', 100000, 'b1.jpg'),
(32, '19', '54', 'watches lemino', 'stainless steel', 'hitam-puti', 'menarik', 350000, 'oke.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`) VALUES
(1, 'rava kusnaidi', 'rava ', 'rava@gmail.com', 'rava1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
