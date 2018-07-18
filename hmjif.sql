-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3307
-- Generation Time: Jul 18, 2018 at 07:42 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmjif`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `published` tinyint(1) NOT NULL,
  `tgl_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `judul`, `slug`, `views`, `image`, `isi`, `published`, `tgl_dibuat`, `tgl_update`) VALUES
(2, 'Second post on Life Blog yang bagus', 'Second post on Life Blog yang bagus', 0, 'banner.jpg', '<p>This is the body of the second post on this site</p>', 1, '2018-02-02 04:40:14', '2018-02-01 06:04:36'),
(3, 'bandung lautan api', 'bandung-lautan-api', 0, 'banner.jpg', 'bandung dibakar habis habisan', 1, '2018-07-17 13:20:10', '0000-00-00 00:00:00'),
(4, 'Siapa? Penguasa Pasar "Smartphone" Saat ini', 'Siapa?-Penguasa-Pasar-Smartphone-Saat-ini', 0, 'desk.jpg', '<p>Apakah Anda memiliki&nbsp;<em>smartphone</em>? Mungkin semua pembaca yang membaca artikel ini akan menjawab ya</p>\r\n<p><em>Smartphone</em>&nbsp;sudah menjadi sebuah kebutuhan .Bahkan banyak orang panik jika&nbsp;<em>smartphone nya</em>&nbsp;tertinggal. Teknologi&nbsp;<em>smartphone&nbsp;</em>sudah sangat canggih.Bayangkan, kemampuan proses data I Phone 5 adalah 2,7 kali kemampuan proses data super komputer Cray 2 yang diperkenalkan tahun 1985.</p>\r\n<p>Tetapi saya sekarang ini, merasa bahwa kemajuan teknologi&nbsp;<em>smartphone</em>&nbsp;belum ada lompatan lagi. Sehingga saya tidak tertarik untuk mengganti&nbsp;<em>smartphone</em>&nbsp;yang dimiliki dengan&nbsp;<em>smartphone</em>&nbsp;baru yang muncul setiap tahun.</p>\r\n<p>Microprocessor adalah otak dari&nbsp;<em>smartphone</em>, Qualcomm &nbsp;masih memiliki pangsa pasar terbesar sebagai produsen microprocessor&nbsp;<em>smartphone&nbsp;</em>di tahun 2016 (39%). Mediatek menduduki posisi kedua (23%) diikuti oleh Apple di posisi ketiga (15%).</p>\r\n<p>Saat ini banyak produsen&nbsp;<em>smartphone</em>&nbsp;mulai mengembangkan&nbsp;<em>microprocessor</em>&nbsp;sendiri. Samsung dengan Exynos, Kirin yang diproduksi oleh Huawei. Bahkan terakhir Xiaomi juga mengembangkan&nbsp;<em>microprocessor</em>&nbsp;sendiri untuk &nbsp;<em>smartphone</em>&nbsp;mereka.</p>\r\n<p>Mungkin tidak banyak yang tahu bahwa dibalik semua kecanggihan&nbsp;<em>microprocessor smartphone&nbsp;</em>itu, ada satu nama yaitu&nbsp;<a href="https://en.wikipedia.org/wiki/ARM_Holdings" target="_blank" rel="noreferrer noopener">ARM (Advance RISC Machine)</a>.</p>\r\n<p>ARM Holding adalah suatu perusahaan yang didirikan pada tahun 1990. Perusahaan ini merupakan hasil kerjasama &nbsp;Acorn Computers, Apple Computer dan VLSI Technology. Bergerak di bidang pengembangan teknologi&nbsp;<em>processor</em>.</p>\r\n<p>Model bisnis perusahaan ini sangat menarik. Tidak seperti perusahaan&nbsp;<em>microprocessor</em>&nbsp;lainnya, seperti Intel, Nvidia, AMD dan lain lain yang selalu memproduksi&nbsp;<em>microprocessor</em>&nbsp;sendiri. ARM hanya mengembangkan teknologi dan arsitektur&nbsp;<em>microprocessor</em>. Setelah itu ARM akan menjual lisensi teknologi &nbsp;dan arsitektur&nbsp;<em>microprocessor</em>yang mereka kembangkan, &nbsp;untuk diproduksi oleh perusahaan lain.</p>\r\n<p><em>Microprocessor</em>&nbsp;buatan Qualcomm, Mediatek, Apple, Samsung, Huawei dan lain-lain, dibuat dengan menggunakan teknologi dan arsitektur yang dikembangkan oleh ARM.</p>\r\n<p>Sekitar 95% dari&nbsp;<em>smartphone</em>&nbsp;yang beredar saat ini menggunakan otak yang teknologinya dikembangkan oleh ARM.</p>\r\n<p><em>ARM adalah penguasa pasar smartphone yang sesungguhnya., tanpa pernah memproduksi satu bagian apapun dari smartphone .</em></p>\r\n<p>Salam</p>', 1, '2018-07-17 15:43:53', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
