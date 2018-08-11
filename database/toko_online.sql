-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2018 at 06:47 AM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(5) NOT NULL,
  `judul` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `judul`, `deskripsi`) VALUES
(2, 'About', 'Kami selalu siap melayani anda,dan jangan lupa untuk memberikan masukan kepada kita jika ada masalah ataupun keluh kesah dalam membeli barang di toko kami');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(5) NOT NULL,
  `id_customer` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `total_harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(5) NOT NULL,
  `id_order` int(5) NOT NULL,
  `id_customer` int(5) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `total_harga` int(8) NOT NULL,
  `pil_bayar` varchar(10) NOT NULL,
  `negara` varchar(10) NOT NULL,
  `provinsi` varchar(15) NOT NULL,
  `kabupaten` varchar(15) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `alamat_lengkap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(5) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `nama_rek` varchar(20) NOT NULL,
  `no_rek` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_lengkap`, `email`, `password`, `tgl_lahir`, `no_telp`, `nama_rek`, `no_rek`, `alamat`) VALUES
(6, 'Rava prasetyo', 'prasetyo@gmail.com', 'prasetyo', '1989-07-29', '089989234861', 'prasetyorava', '123426859493', 'Jl karanglo kotagede yk'),
(7, 'yoga maruf ramadan', 'ramadan@gmail.com', 'ramadan', '2000-07-29', '086980123876', 'yoga ramadan', '2740284756478', 'kasongan bangunjiwo kasihan bantul');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id_footer` int(5) NOT NULL,
  `isi1` varchar(25) NOT NULL,
  `isi2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id_footer`, `isi1`, `isi2`) VALUES
(1, 'Copyright © 2013', 'bootstrap ecommerce shopping template');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id_hal` int(5) NOT NULL,
  `menu` varchar(15) NOT NULL,
  `judul1` varchar(25) NOT NULL,
  `judul2` varchar(25) NOT NULL,
  `judul3` varchar(20) NOT NULL,
  `judul4` varchar(25) NOT NULL,
  `deskripsi_hal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id_hal`, `menu`, `judul1`, `judul2`, `judul3`, `judul4`, `deskripsi_hal`) VALUES
(1, 'Home', 'New products', 'Featured products', 'popular products', 'best selling products', ''),
(2, 'my account', '', '', '', '', ''),
(3, 'free register', 'registration', 'your personal details', '', '', ''),
(4, 'contact us', 'visit us', 'email us', '', '', 'Contact Details\r\n2601 Mission St.\r\nSan Francisco, CA 94110\r\n\r\ninfo@mysite.com\r\n?Tel 123-456-6780\r\nFax 123-456-5679\r\nweb:wwwmysitedomain.com'),
(5, 'item(s)-', 'checkout', 'item are in the cart', 'total amount', '', ''),
(6, 'logout', '', '', '', '', ''),
(7, 'list view', '', '', '', '', ''),
(8, 'grid view', 'our products', '', '', '', ''),
(9, 'three column', 'Three Column Product view', '', '', '', ''),
(10, 'four column', 'Four Column Product view', '', '', '', ''),
(11, 'rekonfirmasi', 'penitipan', '', '', '', ''),
(12, 'login', '', '', '', '', '');

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
-- Table structure for table `konfigurasi_web`
--

CREATE TABLE `konfigurasi_web` (
  `id_web` int(5) NOT NULL,
  `nama_web` varchar(15) NOT NULL,
  `email_web` varchar(25) NOT NULL,
  `telp_web` varchar(12) NOT NULL,
  `deskripsi` text NOT NULL,
  `share1` varchar(20) NOT NULL,
  `share2` varchar(20) NOT NULL,
  `share3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi_web`
--

INSERT INTO `konfigurasi_web` (`id_web`, `nama_web`, `email_web`, `telp_web`, `deskripsi`, `share1`, `share2`, `share3`) VALUES
(4, 'Shop Cart', 'shopcart@gmail.com', '085860078909', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'www.twitter.com', 'www.facebook.com', 'www.instagram.com');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id` int(11) NOT NULL,
  `title1` varchar(20) NOT NULL,
  `title2` varchar(20) NOT NULL,
  `title3` varchar(20) NOT NULL,
  `title4` varchar(20) NOT NULL,
  `title5` varchar(20) NOT NULL,
  `title6` varchar(20) NOT NULL,
  `title7` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `title1`, `title2`, `title3`, `title4`, `title5`, `title6`, `title7`) VALUES
(1, 'your account', 'your account', 'personal', 'information', 'addresses', 'discount', 'order history'),
(2, 'information', 'contact', 'sitemap', 'legal notice', 'terms and', 'conditions', 'about us'),
(3, 'our offer', 'new products', 'top sellers', 'specials', 'manufacturers', 'suppliers', 'manufactures');

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
  `nama_lengkap` varchar(25) NOT NULL,
  `total_bayar` int(5) NOT NULL,
  `tgl_order` datetime NOT NULL,
  `keterangan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` varchar(5) NOT NULL,
  `id_merk` varchar(5) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `bahan` varchar(20) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(15) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `id_merk`, `nama_produk`, `bahan`, `warna`, `deskripsi`, `harga`, `foto`) VALUES
(21, '10', '50', 'jam tangan', 'stainless steel', 'emas', 'tahan karat dan elegan ', 990000, 'a1.jpg'),
(23, '11', '51', 'gelang', 'karet', 'hitam', 'lentur', 20000, 'c1.jpg'),
(25, '12', '50', 'Cincin', 'emas', 'abu abu', 'mantab jiwa', 400000, 'j1.jpg'),
(26, '13', '50', 'kalung', 'emas', 'keemasan', 'well ', 500000, 'shop-cart1.PNG'),
(27, '14', '50', 'cincin nikah', 'emas', 'emas', 'mantab buat cincin nikah sob!', 400000, 'e1.jpg'),
(28, '15', '50', 'Cincin HEYu jewelry', 'logam', 'emas', 'kondisi oke', 400000, 'g1.jpg'),
(31, '18', '50', 'gelang', 'emas', 'emas', 'nyaman dipakai', 100000, 'b1.jpg'),
(32, '10', '52', 'Sepatu-olahraga-pria', 'kulit', 'hitam-puti', 'nyaman dipakai', 250000, 'sepatu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`) VALUES
(4, 'admin', 'admin', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

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
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id_hal`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi_web`
--
ALTER TABLE `konfigurasi_web`
  ADD PRIMARY KEY (`id_web`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id_footer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id_hal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `konfigurasi_web`
--
ALTER TABLE `konfigurasi_web`
  MODIFY `id_web` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
