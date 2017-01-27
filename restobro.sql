-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2017 at 11:58 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restobro`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahan` int(10) UNSIGNED NOT NULL,
  `nama_bahan` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `id_pegawai` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahan`, `nama_bahan`, `stok`, `tgl_masuk`, `tgl_kadaluarsa`, `id_pegawai`) VALUES
(1, 'Roti Tawar', 140, '2017-01-26', '2017-02-02', 3),
(2, 'Daging Sapi', 250, '2017-01-26', '2017-01-30', 3),
(3, 'Keju', 98, '2017-01-26', '2017-02-28', 3),
(4, 'Apel Merah', 100, '2017-01-26', '2017-01-29', 3),
(5, 'Tepung Tapioka', 2000, '2017-01-26', '2017-04-29', 3),
(6, 'Mie', 118, '2017-01-26', '2017-02-17', 3),
(7, 'Garam', 600, '2017-01-26', '2017-06-30', 3),
(8, 'Gula', 900, '2017-01-26', '2017-07-27', 3),
(9, 'Susu Murni', 280, '2017-01-26', '2017-01-28', 3);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(10) UNSIGNED NOT NULL,
  `no_pesanan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_menu` int(10) UNSIGNED NOT NULL,
  `no_meja` int(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` int(100) NOT NULL,
  `id_pegawai` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `no_pesanan`, `id_menu`, `no_meja`, `jumlah`, `subtotal`, `id_pegawai`) VALUES
(5, '126120171210', 2, 1, 2, 150000, 6),
(6, '126120171210', 3, 1, 2, 18000, 6),
(7, '126120171210', 4, 1, 1, 10000, 6),
(8, '326120171420', 2, 3, 1, 75000, 6),
(9, '326120171420', 5, 3, 1, 3500, 6),
(10, '226120171843', 2, 2, 2, 150000, 6),
(11, '42612017192', 4, 4, 2, 20000, 6),
(12, '42612017192', 5, 4, 1, 3500, 6),
(13, '32712017653', 5, 3, 1, 3500, 6),
(14, '122712017824', 6, 12, 5, 100000, 6),
(15, '122712017824', 5, 12, 5, 17500, 6);

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id_kuesioner` int(10) UNSIGNED NOT NULL,
  `jawaban_satu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `jawaban_dua` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `jawaban_tiga` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kritik_saran` text COLLATE utf8_unicode_ci NOT NULL,
  `tgl_kuesioner` date NOT NULL,
  `id_pegawai` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`id_kuesioner`, `jawaban_satu`, `jawaban_dua`, `jawaban_tiga`, `kritik_saran`, `tgl_kuesioner`, `id_pegawai`) VALUES
(1, '2', '3', '3', 'No Comment', '2017-01-27', 7);

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `no_meja` int(10) UNSIGNED NOT NULL,
  `status` enum('Terisi','Kosong','Selesai') COLLATE utf8_unicode_ci NOT NULL,
  `no_transaksi` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`no_meja`, `status`, `no_transaksi`) VALUES
(1, 'Kosong', '12712017822'),
(2, 'Selesai', '226120171843'),
(3, 'Kosong', '0'),
(4, 'Selesai', '42612017192'),
(5, 'Kosong', ''),
(6, 'Kosong', ''),
(7, 'Kosong', ''),
(8, 'Kosong', ''),
(9, 'Kosong', ''),
(10, 'Kosong', ''),
(11, 'Kosong', ''),
(12, 'Terisi', '122712017824'),
(13, 'Kosong', ''),
(14, 'Kosong', ''),
(15, 'Kosong', ''),
(16, 'Kosong', ''),
(17, 'Kosong', ''),
(18, 'Kosong', ''),
(19, 'Kosong', ''),
(20, 'Kosong', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(10) UNSIGNED NOT NULL,
  `nama_menu` varchar(51) COLLATE utf8_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` enum('Pembuka','Penutup','Minuman') COLLATE utf8_unicode_ci NOT NULL,
  `id_pegawai` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga`, `kategori`, `id_pegawai`) VALUES
(2, 'Pizza Daging Keju', 75000, 'Pembuka', 5),
(3, 'Jus Apel', 9000, 'Minuman', 5),
(4, 'Pudding', 10000, 'Penutup', 5),
(5, 'Teh Manis', 3500, 'Minuman', 5),
(6, 'Sandwich', 20000, 'Pembuka', 5),
(7, 'Steak Sambalado', 30000, 'Pembuka', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `no_pesanan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_pesanan` date NOT NULL,
  `total` int(100) NOT NULL,
  `id_pegawai` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`no_pesanan`, `tgl_pesanan`, `total`, `id_pegawai`) VALUES
('122712017824', '2017-01-27', 117500, 6),
('126120171210', '2017-01-26', 178000, 6),
('12712017822', '2017-01-27', 0, 6),
('226120171843', '2017-01-26', 150000, 6),
('326120171420', '2017-01-26', 78500, 6),
('32712017653', '2017-01-27', 3500, 6),
('42612017192', '2017-01-26', 23500, 6);

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(20) NOT NULL,
  `id_menu` int(10) UNSIGNED NOT NULL,
  `id_bahan` int(10) UNSIGNED NOT NULL,
  `jumlah` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `id_menu`, `id_bahan`, `jumlah`) VALUES
(1, 2, 6, 1),
(2, 2, 7, 200),
(3, 2, 8, 20),
(4, 2, 3, 1),
(5, 3, 4, 1),
(6, 4, 8, 20),
(7, 4, 9, 20),
(8, 5, 8, 20),
(9, 6, 1, 2),
(10, 6, 3, 20),
(11, 7, 2, 2),
(12, 7, 7, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(31) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(101) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(21) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(31) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('Admin','Kasir','Koki','Pelayan','Pantry','CS') COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `alamat`, `tempat_lahir`, `tgl_lahir`, `jk`, `no_telp`, `username`, `role`, `password`, `remember_token`) VALUES
(1, 'Admin Resto Bro', '', '', '0000-00-00', 'Laki-laki', '', 'admin@restobroto.com', 'Admin', '$2y$10$cmE.W89wUHpfjm6baSOgwOBvNVBtfDmHDUWOjfxyaXmVDT/3U8Hqy', ''),
(2, 'Rizal Yogi Pratama', 'Bandung', 'Bandung', '2017-01-23', 'Laki-laki', '081809673574', 'admin123', 'Admin', '$2y$10$uy8UzZPA.86h164eJvrwJu0DruBrNMPpAdxiq2tq13wkLe0Hlgj.i', 'SSq8qm2rdITTywIh1hSRWjAVbUuhkEGXSdo3GiI4xSDzAUiaS6mz2bkLCaMz'),
(3, 'Faisal Isman', 'Rancaengkek', 'Bandung', '2016-12-06', 'Laki-laki', '0898091345', 'pantry01', 'Pantry', '$2y$10$Djxzg056kyyL5GipuG4W7ekTn/6S2rnTHxHNTZ/207pA/B4mM07tG', 'iOh1oqGhV0ClOsjuDRJTYCBjTNHWpE6YbJIuE7gkbd1HFYbOzfxQ9c47RNu9'),
(4, 'Evan Giman', 'Cileunyi', 'Bandung', '2016-09-08', 'Laki-laki', '08122090010', 'kasir01', 'Kasir', '$2y$10$PNvUmWuGhCQ1sntHHttHdOdi.Ee/uxcycTbL9XToZLtQmihNy6ZpG', 'z1KohtzFpU12TrVa0a4kKGOdTzI8DzgMD0prvCqWJSxxWMzKz2wr2kAOAUHh'),
(5, 'Rio Samsudin', 'Sukabumi', 'Sukabumi', '1993-01-23', 'Laki-laki', '081809673574', 'rio_koki', 'Koki', '$2y$10$D8rIdrt3HysQW5DNwL2H9OXPNqUu.3k3qEx/IWMrK6Wh/pRGxAcjW', 'kT1g8V5fyggFcuTM6JQVXC7EtAWN7O5tGdVYL1bqDwGjgHhIuTa1yZsdQZgb'),
(6, 'Imam Mahmudin', 'Bandung ', 'Bandung', '1995-11-12', 'Laki-laki', '081809673574', 'pelayan', 'Pelayan', '$2y$10$BleHV9LhIrpyDIB0UzHwC.dkfUTmVEoBc.pjb9b.XI6rzo71xzBU2', 'lME6MVRqqnXa6I0E4uWOgoMmi3OYYFTgZ7JM1BLXN5sy0UyuOeccF06ECOQt'),
(7, 'Salwanda Amalia', 'Bandung', 'Bandung', '1996-01-12', 'Perempuan', '081234879112', 'customer', 'CS', '$2y$10$CZ8zGOn0yDaUoJft/kYM..Zdbl4BiLE6aoet.MLuMqnuBrqWvfKoS', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahan`),
  ADD KEY `bahan_baku_id_pegawai_foreign` (`id_pegawai`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `detail_transaksi_no_pesanan_foreign` (`no_pesanan`),
  ADD KEY `detail_transaksi_id_menu_foreign` (`id_menu`),
  ADD KEY `detail_transaksi_id_pegawai_foreign` (`id_pegawai`);

--
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id_kuesioner`),
  ADD KEY `kuesioner_id_pegawai_foreign` (`id_pegawai`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`no_meja`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `menu_id_pegawai_foreign` (`id_pegawai`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`no_pesanan`),
  ADD KEY `pesanan_id_pegawai_foreign` (`id_pegawai`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `resep_id_menu_foreign` (`id_menu`),
  ADD KEY `resep_id_bahan_foreign` (`id_bahan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id_bahan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id_kuesioner` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `no_meja` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD CONSTRAINT `bahan_baku_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `users` (`id`);

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_id_menu_foreign` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `detail_transaksi_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `users` (`id`);

--
-- Constraints for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD CONSTRAINT `kuesioner_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `users` (`id`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `users` (`id`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `users` (`id`);

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `resep_id_bahan_foreign` FOREIGN KEY (`id_bahan`) REFERENCES `bahan_baku` (`id_bahan`),
  ADD CONSTRAINT `resep_id_menu_foreign` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
