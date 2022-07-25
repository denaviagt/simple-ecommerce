-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2022 at 01:59 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokokita`
--

-- --------------------------------------------------------

--
-- Table structure for table `kesan`
--

CREATE TABLE `kesan` (
  `id_kesan` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Kesan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kesan`
--

INSERT INTO `kesan` (`id_kesan`, `Nama`, `Email`, `Subject`, `Kesan`) VALUES
(1, 'Anggita', 'anggita.via@gmail.com', 'Jasa Pengiriman', 'Pengiriman cepat dan kurir ramah. '),
(2, 'Rahmadita', 'rahma@gmail.com', 'Saran produk', 'Produk bagus-bagus, kalau bisa ditambahkan lagi variasinya.'),
(3, 'Eka', 'eka@mail.com', 'Pengiriman', 'Pengiriman Lama'),
(4, 'Anggita', 'admin@gmail.com', 'Saran produk', 'Pengiriman cepat dan kurir ramah. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `idAdmin` int(2) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`idAdmin`, `userName`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biaya_kirim`
--

CREATE TABLE `tbl_biaya_kirim` (
  `idBiayaKirim` int(5) NOT NULL,
  `idKurir` int(3) NOT NULL,
  `idKotaAsal` int(4) NOT NULL,
  `idKotaTujuan` int(4) NOT NULL,
  `biaya` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_biaya_kirim`
--

INSERT INTO `tbl_biaya_kirim` (`idBiayaKirim`, `idKurir`, `idKotaAsal`, `idKotaTujuan`, `biaya`) VALUES
(2, 3, 3, 4, 20000),
(3, 3, 2, 2, 3000),
(4, 3, 2, 2, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `idDetailOrder` int(10) NOT NULL,
  `idOrder` int(5) NOT NULL,
  `idProduk` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`idDetailOrder`, `idOrder`, `idProduk`, `jumlah`, `harga`) VALUES
(1, 1, 4, 3, 300000),
(2, 2, 4, 1, 100000),
(3, 2, 4, 1, 100000),
(4, 2, 3, 1, 2000),
(5, 3, 4, 1, 100000),
(6, 4, 4, 1, 100000),
(7, 5, 4, 1, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `idKat` int(5) NOT NULL,
  `namakat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`idKat`, `namakat`) VALUES
(1, 'Baju'),
(2, 'Celana');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konfirmasi`
--

CREATE TABLE `tbl_konfirmasi` (
  `idKonfirmasi` int(11) NOT NULL,
  `idOrder` int(11) NOT NULL,
  `buktiTransfer` varchar(100) NOT NULL,
  `validasi` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kota`
--

CREATE TABLE `tbl_kota` (
  `idKota` int(4) NOT NULL,
  `namaKota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kota`
--

INSERT INTO `tbl_kota` (`idKota`, `namaKota`) VALUES
(2, 'Bandung'),
(3, 'Bali'),
(4, 'NTT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurir`
--

CREATE TABLE `tbl_kurir` (
  `idKurir` int(2) NOT NULL,
  `namaKurir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kurir`
--

INSERT INTO `tbl_kurir` (`idKurir`, `namaKurir`) VALUES
(2, 'Pos Indonesia'),
(3, 'Tiki');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `idKonsumen` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `namaKonsumen` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `idKota` int(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tlpn` int(20) NOT NULL,
  `statusAktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`idKonsumen`, `username`, `password`, `namaKonsumen`, `alamat`, `idKota`, `email`, `tlpn`, `statusAktif`) VALUES
(1, 'tes', '123', 'tes', 'tes', 2, 'tes@gmail.com', 81, 'Y'),
(5, 'arin', '12345', 'Sabrina', 'Jawa Tengah', 3, 'arin@gmail.com', 2147483647, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `idOrder` int(5) NOT NULL,
  `idKonsumen` int(5) NOT NULL,
  `tglOrder` date NOT NULL,
  `statusOrder` enum('Belum Bayar','Dikemas','Dikirim','Diterima','Selesai','Dibatalkan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`idOrder`, `idKonsumen`, `tglOrder`, `statusOrder`) VALUES
(1, 1, '2022-07-25', 'Belum Bayar'),
(2, 1, '2022-07-25', 'Belum Bayar'),
(3, 1, '2022-07-25', 'Belum Bayar'),
(4, 1, '2022-07-25', 'Belum Bayar'),
(5, 1, '2022-07-25', 'Belum Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `idProduk` int(5) NOT NULL,
  `idKat` int(5) NOT NULL,
  `idToko` int(5) NOT NULL,
  `namaProduk` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(5) NOT NULL,
  `berat` int(5) NOT NULL,
  `deskripsiProduk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`idProduk`, `idKat`, `idToko`, `namaProduk`, `foto`, `harga`, `stok`, `berat`, `deskripsiProduk`) VALUES
(1, 2, 2, 'tes', 'tes.jpg', 2000, 2, 2, 'tes'),
(2, 2, 2, 'Celana Jeas', '1.jpeg', 222, 2, 2, 'sasa'),
(3, 2, 2, 'Celana JeaNS GODDDD', '2.jpeg', 2000, 2, 2, 'MUMETTT'),
(4, 2, 2, 'Celana Jeans SlimFit', 'images.jpeg', 100000, 100, 1, 'Celana Jeans Slim Fit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk_diskusi`
--

CREATE TABLE `tbl_produk_diskusi` (
  `id` int(11) NOT NULL,
  `idKonsumen` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idProduk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk_diskusi`
--

INSERT INTO `tbl_produk_diskusi` (`id`, `idKonsumen`, `comment`, `date`, `idProduk`) VALUES
(1, 5, 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '2022-07-25 13:13:16', 4),
(2, 5, 'Bootstrap 5 comments list with font awesome icons and toggle button', '2022-07-25 13:18:10', 4),
(3, 1, 'aaa', '2022-07-25 06:51:52', 4),
(4, 1, 'KOmentar BAru', '2022-07-25 06:52:40', 4),
(5, 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2022-07-25 14:01:34', 3),
(6, 1, 'halo', '2022-07-25 13:50:57', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saldo`
--

CREATE TABLE `tbl_saldo` (
  `idSaldo` int(5) NOT NULL,
  `idToko` int(5) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_toko`
--

CREATE TABLE `tbl_toko` (
  `idToko` int(5) NOT NULL,
  `idKonsumen` int(5) NOT NULL,
  `namaToko` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `statusAktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_toko`
--

INSERT INTO `tbl_toko` (`idToko`, `idKonsumen`, `namaToko`, `logo`, `deskripsi`, `statusAktif`) VALUES
(2, 1, 'Toko Suka Suka', '.jpg', 'Menjual barang tidak berguna', 'Y'),
(9, 1, 'Tes', '2', 'Desk', 'Y'),
(10, 1, 'Tes', 'Screen Shot 2022-07-07 at 17.30.34.png', 'kkk', 'Y');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tbl_biaya_kirim`
-- (See below for the actual view)
--
CREATE TABLE `v_tbl_biaya_kirim` (
`idBiayaKirim` int(5)
,`namaKurir` varchar(100)
,`kotaAsal` varchar(100)
,`kotaTujuan` varchar(100)
,`biaya` int(5)
);

-- --------------------------------------------------------

--
-- Structure for view `v_tbl_biaya_kirim`
--
DROP TABLE IF EXISTS `v_tbl_biaya_kirim`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tbl_biaya_kirim`  AS SELECT `bk`.`idBiayaKirim` AS `idBiayaKirim`, `k`.`namaKurir` AS `namaKurir`, `kt`.`namaKota` AS `kotaAsal`, `ktt`.`namaKota` AS `kotaTujuan`, `bk`.`biaya` AS `biaya` FROM (((`tbl_biaya_kirim` `bk` join `tbl_kurir` `k` on((`k`.`idKurir` = `bk`.`idKurir`))) join `tbl_kota` `kt` on((`kt`.`idKota` = `bk`.`idKotaAsal`))) join `tbl_kota` `ktt` on((`ktt`.`idKota` = `bk`.`idKotaTujuan`)))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kesan`
--
ALTER TABLE `kesan`
  ADD PRIMARY KEY (`id_kesan`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `tbl_biaya_kirim`
--
ALTER TABLE `tbl_biaya_kirim`
  ADD PRIMARY KEY (`idBiayaKirim`),
  ADD KEY `idKurir` (`idKurir`),
  ADD KEY `idKotaAsal` (`idKotaAsal`),
  ADD KEY `idKotaTujuan` (`idKotaTujuan`);

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`idDetailOrder`),
  ADD KEY `idOrder` (`idOrder`),
  ADD KEY `idProduk` (`idProduk`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`idKat`);

--
-- Indexes for table `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  ADD PRIMARY KEY (`idKonfirmasi`),
  ADD KEY `idOrder` (`idOrder`);

--
-- Indexes for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  ADD PRIMARY KEY (`idKota`);

--
-- Indexes for table `tbl_kurir`
--
ALTER TABLE `tbl_kurir`
  ADD PRIMARY KEY (`idKurir`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`idKonsumen`),
  ADD KEY `idKota` (`idKota`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `idKonsumen` (`idKonsumen`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`idProduk`),
  ADD KEY `idKat` (`idKat`),
  ADD KEY `idToko` (`idToko`);

--
-- Indexes for table `tbl_produk_diskusi`
--
ALTER TABLE `tbl_produk_diskusi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_diskusi_user` (`idKonsumen`),
  ADD KEY `fk_diskusi_produk` (`idProduk`);

--
-- Indexes for table `tbl_saldo`
--
ALTER TABLE `tbl_saldo`
  ADD PRIMARY KEY (`idSaldo`),
  ADD KEY `idToko` (`idToko`);

--
-- Indexes for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  ADD PRIMARY KEY (`idToko`),
  ADD KEY `idKonsumen` (`idKonsumen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kesan`
--
ALTER TABLE `kesan`
  MODIFY `id_kesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `idAdmin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_biaya_kirim`
--
ALTER TABLE `tbl_biaya_kirim`
  MODIFY `idBiayaKirim` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `idDetailOrder` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `idKat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  MODIFY `idKonfirmasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  MODIFY `idKota` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kurir`
--
ALTER TABLE `tbl_kurir`
  MODIFY `idKurir` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `idKonsumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `idOrder` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `idProduk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_produk_diskusi`
--
ALTER TABLE `tbl_produk_diskusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_saldo`
--
ALTER TABLE `tbl_saldo`
  MODIFY `idSaldo` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  MODIFY `idToko` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_biaya_kirim`
--
ALTER TABLE `tbl_biaya_kirim`
  ADD CONSTRAINT `tbl_biaya_kirim_ibfk_1` FOREIGN KEY (`idKurir`) REFERENCES `tbl_kurir` (`idKurir`),
  ADD CONSTRAINT `tbl_biaya_kirim_ibfk_2` FOREIGN KEY (`idKotaAsal`) REFERENCES `tbl_kota` (`idKota`),
  ADD CONSTRAINT `tbl_biaya_kirim_ibfk_3` FOREIGN KEY (`idKotaTujuan`) REFERENCES `tbl_kota` (`idKota`);

--
-- Constraints for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD CONSTRAINT `tbl_detail_order_ibfk_1` FOREIGN KEY (`idOrder`) REFERENCES `tbl_order` (`idOrder`),
  ADD CONSTRAINT `tbl_detail_order_ibfk_2` FOREIGN KEY (`idProduk`) REFERENCES `tbl_produk` (`idProduk`);

--
-- Constraints for table `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  ADD CONSTRAINT `tbl_konfirmasi_ibfk_1` FOREIGN KEY (`idOrder`) REFERENCES `tbl_order` (`idOrder`);

--
-- Constraints for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD CONSTRAINT `tbl_member_ibfk_1` FOREIGN KEY (`idKota`) REFERENCES `tbl_kota` (`idKota`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`idKonsumen`) REFERENCES `tbl_member` (`idKonsumen`);

--
-- Constraints for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`idKat`) REFERENCES `tbl_kategori` (`idKat`),
  ADD CONSTRAINT `tbl_produk_ibfk_2` FOREIGN KEY (`idToko`) REFERENCES `tbl_toko` (`idToko`);

--
-- Constraints for table `tbl_produk_diskusi`
--
ALTER TABLE `tbl_produk_diskusi`
  ADD CONSTRAINT `fk_diskusi_produk` FOREIGN KEY (`idProduk`) REFERENCES `tbl_produk` (`idProduk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_diskusi_user` FOREIGN KEY (`idKonsumen`) REFERENCES `tbl_member` (`idKonsumen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_saldo`
--
ALTER TABLE `tbl_saldo`
  ADD CONSTRAINT `tbl_saldo_ibfk_1` FOREIGN KEY (`idToko`) REFERENCES `tbl_toko` (`idToko`);

--
-- Constraints for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  ADD CONSTRAINT `tbl_toko_ibfk_1` FOREIGN KEY (`idKonsumen`) REFERENCES `tbl_member` (`idKonsumen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
