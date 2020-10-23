-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 12:19 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `id` int(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `addressLine1` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `iklan` varchar(320) NOT NULL,
  `tanggal` date NOT NULL,
  `unik` varchar(255) NOT NULL,
  `status_iklan` varchar(255) NOT NULL,
  `tgl_invoice` varchar(255) DEFAULT NULL,
  `bayar` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`id`, `fullName`, `addressLine1`, `email`, `iklan`, `tanggal`, `unik`, `status_iklan`, `tgl_invoice`, `bayar`) VALUES
(170, 'Dio Alfian', 'Jalan Sisingamangaraja', 'dioalfian31@gmail.com', 'JUAL RUMAH Blok 3, Puri Depok,dekat kmpus UI,Lt.138/Lb.120,SHM,Siap huni,jual cepat!hrg.nego!! Hub.0813 168 405 â€“ 0812 726 510', '2019-07-13', '177iz0z', 'Iklan dapat ditayangkan', '2019-07-04 06:00:48', 55000),
(171, 'Muhammad Rafli', 'Jalan Timun', 'raflim14@gmail.com', 'DIJUAL CEPAT, rmh 2 lantai di Komp.Villa Asean, Pd. Cabe TangSel,SHM, LT 1.000m2, LB -+500m2, Hub: Dewi: 08129965606', '2019-07-20', '4245luc', 'Iklan dapat ditayangkan', '2019-07-04 06:05:46', 44000),
(172, 'Rifka Suci', 'Jalan Belimbing', 'sucir18@gmail.com', 'DJUAL RMH BARU dipusat kt Semarang, Lt120/180 KT4,KM2,KP1, 1300/1200W,Grsi,AC ,Dkt TOL.850Jt.BU.Jl.Setia 1 Rt4/8 Jtwrngin. T. 081287053154', '2019-07-10', '742ydpo', 'Iklan dapat ditayangkan', '2019-07-04 06:08:07', 55000),
(173, 'Dio Alfian', 'Jalan Sisingamangaraja', 'dioalfian31@gmail.com', 'antenna anti gledek :081XXXXXXXXX ahli antenna TV & parabola 75 ribu dpt:ant,kbl+psg', '2019-07-10', '3774ggd', 'Iklan sedang dalam proses pengecekan', '2019-07-06 12:31:11', 33000),
(174, 'Dio Alfian', 'Jalan Sisingamangaraja', 'dioalfian31@gmail.com', 'novitadian13@yahoo.com novitadian13@yahoo.com novitadian13@yahoo.com novitadian13@yahoo.com novitadian13@yahoo.com', '2019-07-20', '432t19v', 'Kirim bukti pembayaran terlebih dahulu', '2019-07-06 13:57:10', 44000),
(175, 'Dio Alfian', 'Jalan Sisingamangaraja', 'dioalfian31@gmail.com', 'antenna anti gledek :081XXXXXXXXX ahli antenna TV & parabola 75 ribu dpt:ant,kbl+psg', '2019-07-20', '473nvjz', 'Iklan sedang dalam proses pengecekan', '2019-07-08 15:56:27', 33000),
(176, 'Dio Alfian', 'Jalan Sisingamangaraja', 'dioalfian31@gmail.com', 'antenna anti gledek :081XXXXXXXXX ahli antenna TV & parabola 75 ribu dpt:ant,kbl+psg', '2019-07-13', '978hirz', 'Kirim bukti pembayaran terlebih dahulu', NULL, 0),
(177, 'Dio Alfian', 'Jalan Sisingamangaraja', 'dioalfian31@gmail.com', 'antenna anti gledek :081XXXXXXXXX ahli antenna TV & parabola 75 ribu dpt:ant,kbl+psg', '2019-07-13', '3831s$y', 'Kirim bukti pembayaran terlebih dahulu', NULL, 0),
(178, 'Dio Alfian', 'Jalan Sisingamangaraja', 'dioalfian31@gmail.com', 'antenna anti gledek :081XXXXXXXXX ahli antenna TV & parabola 75 ribu dpt:ant,kbl+psg', '2019-07-13', '265q23$', 'Iklan sedang dalam proses pengecekan', '2019-07-10 21:34:15', 33000);

-- --------------------------------------------------------

--
-- Table structure for table `iklan2`
--

CREATE TABLE `iklan2` (
  `id2` int(255) NOT NULL,
  `iklan2` varchar(320) NOT NULL,
  `tanggal2` date NOT NULL,
  `status_iklan2` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `unik2` varchar(255) NOT NULL,
  `tgl_invoice2` varchar(255) DEFAULT NULL,
  `bayar2` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan2`
--

INSERT INTO `iklan2` (`id2`, `iklan2`, `tanggal2`, `status_iklan2`, `userid`, `unik2`, `tgl_invoice2`, `bayar2`) VALUES
(54, 'J/K RmhTkt Di Bandung II Rt03/12 Maskumambang,View Bgs,Dkt Bndara, Hrg 700Jt Nego,LT102m2 LB120m2 6KT,1KM,1KP, Artetis,PLN 800W,Grsi.Tlp/WA:085740073021', '2019-07-19', 'Iklan dapat ditayangkan', 3, '568odle', '2019-07-04 06:12:54', 55000),
(55, 'Dijual Cpt Rumah Murah LB38/LT72.Hrga 150Jt.Nego. 2KT,1KM. Sisa Blkang 4M, Sisa Depan 3M, Air Artetis.Perum Kawali Blok 2 No.5 Buah Batu. Hp/Wa: 082198280001', '2019-07-24', 'Iklan sedang dalam proses pengecekan', 3, '836v8f6', '2019-07-04 06:15:15', 55000),
(56, 'Jual Rumah HM,Intan Permai Blok D.170 LT=85m2 (9x 10) Fullbang, 2 Lantai, 3KT, 2KM, Hrg 410jt Nego. Hub:08139872640', '2019-07-12', 'Iklan sedang dalam proses pengecekan', 4, '1880l6$', '2019-07-04 06:16:28', 44000),
(57, 'Dijual Rumah+Toko Jl Banjar15 Bandung. LT.175m2, 4KT 2KM Lokasi strgs, hdap kanan, 085700008971', '2019-07-19', 'Iklan sedang dalam proses pengecekan', 4, '165gvq1', '2019-07-04 06:17:06', 33000),
(58, 'JUAL RUMAH Blok 3, Puri Depok,dekat kmpus UI,Lt.138/Lb.120,SHM,Siap huni,jual cepat!hrg.nego!! Hub.0813 168 405 â€“ 0812 726 510', '2019-07-19', 'Iklan sedang dalam proses pengecekan', 5, '39744$e', '2019-07-04 06:19:09', 55000),
(59, 'DIJUAL CEPAT, rmh 2 lantai di Komp.Villa Asean, Pd. Cabe TangSel,SHM, LT 1.000m2, LB -+500m2, Hub: Dewi: 08129965606', '2019-07-13', 'Iklan sedang dalam proses pengecekan', 5, '403pw2e', '2019-07-04 06:19:45', 44000),
(60, 'Dijual Rumah+Toko Jl Banjar15 Bandung. LT.175m2, 4KT 2KM Lokasi strgs, hdap kanan, 085700008971', '2019-07-19', 'Iklan sedang dalam proses pengecekan', 3, '746rvb3', '2019-07-04 06:24:41', 33000),
(61, 'DIJUAL CEPAT, rmh 2 lantai di Komp.Villa Asean, Pd. Cabe TangSel,SHM, LT 1.000m2, LB -+500m2, Hub: Dewi: 08129965606', '2019-07-19', 'Iklan sedang dalam proses pengecekan', 3, '468$z18', '2019-07-04 06:29:56', 44000),
(62, 'DIJUAL CEPAT, rmh 2 lantai di Komp.Villa Asean, Pd. Cabe TangSel,SHM, LT 1.000m2, LB -+500m2, Hub: Dewi: 08129965606', '2019-07-25', 'Iklan tidak dapat ditayangkan', 3, '621qltd', '2019-07-04 06:34:13', 44000),
(63, 'DJUAL RMH BARU dipusat kt Semarang, Lt120/180 KT4,KM2,KP1, 1300/1200W,Grsi,AC ,Dkt TOL.850Jt.BU.Jl.Setia 1 Rt4/8 Jtwrngin. T. 081287053154', '2019-07-18', 'Iklan sedang dalam proses pengecekan', 3, '260ftvk', '2019-07-06 13:42:24', 55000),
(64, 'Jual Rumah HM,Intan Permai Blok D.170 LT=85m2 (9x 10) Fullbang, 2 Lantai, 3KT, 2KM, Hrg 410jt Nego. Hub:08139872640', '2019-07-25', 'Kirim bukti pembayaran terlebih dahulu', 3, '225iu99', NULL, 0),
(65, 'DJUAL RMH BARU dipusat kt Semarang, Lt120/180 KT4,KM2,KP1, 1300/1200W,Grsi,AC ,Dkt TOL.850Jt.BU.Jl.Setia 1 Rt4/8 Jtwrngin. T. 081287053154', '2019-07-19', 'Iklan sedang dalam proses pengecekan', 3, '124bvox', '2019-07-08 16:09:11', 55000),
(66, 'J/K RmhTkt Di Bandung II Rt03/12 Maskumambang,View Bgs,Dkt Bndara, Hrg 700Jt Nego,LT102m2 LB120m2 6KT,1KM,1KP, Artetis,PLN 800W,Grsi.Tlp/WA:085740073021', '2019-07-13', 'Kirim bukti pembayaran terlebih dahulu', 3, '758bcb5', NULL, 0),
(67, 'J/K RmhTkt Di Bandung II Rt03/12 Maskumambang,View Bgs,Dkt Bndara, Hrg 700Jt Nego,LT102m2 LB120m2 6KT,1KM,1KP, Artetis,PLN 800W,Grsi.Tlp/WA:085740073021', '2019-07-13', 'Iklan sedang dalam proses pengecekan', 3, '766kefe', '2019-07-10 21:47:46', 55000);

-- --------------------------------------------------------

--
-- Table structure for table `image_tb`
--

CREATE TABLE `image_tb` (
  `imageid` int(255) NOT NULL,
  `img_location` varchar(255) NOT NULL,
  `unik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_tb`
--

INSERT INTO `image_tb` (`imageid`, `img_location`, `unik`) VALUES
(51, 'upload/55000_1562195075.jpg', '177iz0z'),
(52, 'upload/44000_1562195223.jpg', '4245luc'),
(53, 'upload/55000_1562195298.jpg', '742ydpo'),
(54, 'upload/33000_1562392925.jpg', '3774ggd'),
(55, 'upload/33000_1562576370.jpg', '473nvjz'),
(56, 'upload/20190709 (1)_1562769510.jpg', '265q23$');

-- --------------------------------------------------------

--
-- Table structure for table `image_tb2`
--

CREATE TABLE `image_tb2` (
  `imageid2` int(255) NOT NULL,
  `img_location2` varchar(255) NOT NULL,
  `unik2` varchar(255) NOT NULL,
  `userid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_tb2`
--

INSERT INTO `image_tb2` (`imageid2`, `img_location2`, `unik2`, `userid`) VALUES
(3, 'upload/55000_1562195597.jpg', '568odle', 3),
(4, 'upload/55000_1562195736.jpg', '836v8f6', 3),
(5, 'upload/44000_1562195803.jpg', '1880l6$', 4),
(6, 'upload/33000_1562195887.jpg', '165gvq1', 4),
(7, 'upload/55000_1562195965.jpg', '39744$e', 5),
(8, 'upload/44000_1562196002.jpg', '403pw2e', 5),
(9, 'upload/33000_1562196298.jpg', '746rvb3', 3),
(10, 'upload/44000_1562196616.jpg', '468$z18', 3),
(11, 'upload/44000_1562196869.jpg', '621qltd', 3),
(12, 'upload/55000_1562396189.jpg', '260ftvk', 3),
(13, 'upload/33000_1562577122.jpg', '124bvox', 3),
(14, 'upload/20190709 (1)_1562770183.jpg', '766kefe', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `code` varchar(20) NOT NULL,
  `verify` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `password`, `code`, `verify`) VALUES
(3, 'novitadian13@yahoo.com', '5240c3fea9a2ead528fe3f66f3cde4ca', 'Kes9pay6kQ5i', 1),
(4, 'diannovita42@yahoo.com', 'd571ba5754c314a2cc215bf99ed76564', '5Gbku8OWrSxE', 1),
(5, 'danggraini92@yahoo.com', 'd571ba5754c314a2cc215bf99ed76564', '8u3s5gmzDa4i', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iklan2`
--
ALTER TABLE `iklan2`
  ADD PRIMARY KEY (`id2`);

--
-- Indexes for table `image_tb`
--
ALTER TABLE `image_tb`
  ADD PRIMARY KEY (`imageid`);

--
-- Indexes for table `image_tb2`
--
ALTER TABLE `image_tb2`
  ADD PRIMARY KEY (`imageid2`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `iklan2`
--
ALTER TABLE `iklan2`
  MODIFY `id2` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `image_tb`
--
ALTER TABLE `image_tb`
  MODIFY `imageid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `image_tb2`
--
ALTER TABLE `image_tb2`
  MODIFY `imageid2` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
