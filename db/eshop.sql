-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jul 2018 pada 00.53
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_admin`
--

CREATE TABLE IF NOT EXISTS `t_admin` (
`id_admin` tinyint(2) NOT NULL,
  `username` varchar(35) NOT NULL,
  `nama_admin` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reset` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `username`, `nama_admin`, `password`, `level`, `email`, `reset`) VALUES
(1, 'admin', 'verrell', '$2y$10$h.2rmSj059VCc3hNjvnbzOgTVprnmjgP1I9M570.RERGRkU1KbFBq', 1, 'sintaherena@gmail.com', ''),
(2, 'adminn', 'adminn', '9c1ad00a16a7c67e2727b471ac969e96', 1, 'admin@gmail.com', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_detail_order`
--

CREATE TABLE IF NOT EXISTS `t_detail_order` (
  `id_order` varchar(10) NOT NULL,
  `id_item` int(7) NOT NULL,
  `qty` smallint(4) NOT NULL,
  `biaya` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_items`
--

CREATE TABLE IF NOT EXISTS `t_items` (
`id_item` int(7) NOT NULL,
  `nama_item` varchar(255) NOT NULL,
  `harga` int(10) NOT NULL,
  `berat` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_items`
--

INSERT INTO `t_items` (`id_item`, `nama_item`, `harga`, `berat`, `status`, `gambar`, `deskripsi`) VALUES
(1, 'Tes1', 4000000, 500, 1, 'gambar1530513444.jpg', 'performa terbaik'),
(2, 'Sharp 24 inch LED AQUOS HD TV', 1289000, 3, 1, 'gambar1530515243.jpg', '- Ukuran 24 inchi\r\n- Kualitas HD\r\n- Port HDMI'),
(3, 'POLYTRON PLD32T7511 CINEMAX TV LED [32 inchi]', 2385000, 3, 1, 'gambar1530515614.jpg', '- Garansi 5 tahun\r\n\r\n'),
(4, 'Monitot LG 27', 1000000, 3, 1, 'gambar1530515894.jpg', '-Garansi 1 tahun\r\n'),
(5, 'LG 24 Inch LED TV [24TK452]', 1489000, 3, 1, 'gambar1530516042.jpg', '- Panel: 23.6” (TN/ HD)\r\n- Viewing Angel: 178/178\r\n- Interface: D-sub, HDMI, Composite, USB\r\n- Speakers: 5Wx2'),
(6, 'Samsung 32 inch LED HD TV - Hitam (Model UA32FH4003)', 2199000, 3, 1, 'gambar1530516257.jpg', '- 2 x HDMI , 1 x USB\r\n- Size : 32 inch, Non Smart, HD\r\n- Resolution : 1,366 x 768'),
(7, 'Lenovo yoga 520-0GID', 2150000, 2, 1, 'gambar1530518310.jpg', 'Prosesor : 7th Gen Intel Core i3-7100U\r\nMemori : 8 GB\r\nPenyimpanan : 1 TB SATA HDD\r\nSistem Operasi : Windows 10 Home (64-bit)\r\nLayar : 14.0 Inch HD IPS Multitouch'),
(8, 'HP 15-BW541AU - AMD E2-9000e - RAM 4GB - 500GB - 15.6', 3180000, 2, 1, 'gambar1530518529.jpg', ' Processor : AMD E2-9200e\r\nRAM : 4GB\r\nKapasitas Penyimpanan : 500GB\r\nProcessor : AMD E2-9200e\r\nRAM : 4GB\r\nKapasitas Penyimpanan : 500GB'),
(9, 'Asus X441BA-GA901T - AMD A9-9420 - RAM 4GB - 1TB - Radeon R5 - 14', 4699000, 2, 1, 'gambar1530518753.jpg', 'Processor : AMD A9-9420\r\nRAM : 4GB\r\nKapasitas Penyimpanan : 1024GB\r\nGraphics Card : Integrated\r\nSistem Operasi : Windows 10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kategori`
--

CREATE TABLE IF NOT EXISTS `t_kategori` (
`id_kategori` smallint(6) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `url` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kategori`
--

INSERT INTO `t_kategori` (`id_kategori`, `kategori`, `url`) VALUES
(1, 'Handphone', 'handphone'),
(2, 'Televisi', 'televisi'),
(4, 'Laptop', 'laptop');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_order`
--

CREATE TABLE IF NOT EXISTS `t_order` (
  `id_order` varchar(10) NOT NULL,
  `id_user` int(7) NOT NULL,
  `total` double NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `pos` int(5) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `kurir` varchar(5) NOT NULL,
  `service` varchar(50) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `bts_bayar` date NOT NULL,
  `status` enum('belum','proses') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_rkategori`
--

CREATE TABLE IF NOT EXISTS `t_rkategori` (
  `id_item` int(7) NOT NULL,
  `id_kategori` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_rkategori`
--

INSERT INTO `t_rkategori` (`id_item`, `id_kategori`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 4),
(8, 4),
(9, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_users`
--

CREATE TABLE IF NOT EXISTS `t_users` (
`id_user` int(7) NOT NULL,
  `username` varchar(35) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `reset` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_users`
--

INSERT INTO `t_users` (`id_user`, `username`, `nama_user`, `email`, `password`, `jk`, `telp`, `alamat`, `status`, `reset`) VALUES
(1, 'sinta', 'sinta herena', 'sintaherena@gmail.com', '$2y$10$nWgSVgiphSVD/UZ7YVrvyusGe3iHc38dAGQmtkU4Shv8bbHAE3blO', 'P', '089688880964', '0896888880964', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
 ADD PRIMARY KEY (`id_admin`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `t_detail_order`
--
ALTER TABLE `t_detail_order`
 ADD KEY `id_order` (`id_order`), ADD KEY `id_item` (`id_item`);

--
-- Indexes for table `t_items`
--
ALTER TABLE `t_items`
 ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `t_order`
--
ALTER TABLE `t_order`
 ADD PRIMARY KEY (`id_order`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `t_rkategori`
--
ALTER TABLE `t_rkategori`
 ADD KEY `id_item` (`id_item`), ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
MODIFY `id_admin` tinyint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_items`
--
ALTER TABLE `t_items`
MODIFY `id_item` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
MODIFY `id_kategori` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
MODIFY `id_user` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_detail_order`
--
ALTER TABLE `t_detail_order`
ADD CONSTRAINT `t_detail_order_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `t_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `t_detail_order_ibfk_2` FOREIGN KEY (`id_item`) REFERENCES `t_items` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_order`
--
ALTER TABLE `t_order`
ADD CONSTRAINT `t_order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `t_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_rkategori`
--
ALTER TABLE `t_rkategori`
ADD CONSTRAINT `t_rkategori_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `t_items` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `t_rkategori_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `t_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
