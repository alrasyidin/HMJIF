-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3307
-- Generation Time: Jul 17, 2018 at 11:34 
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
(1, '5 Habits that can improve your life', '5-habits-that-can-improve-your-life', 0, 'banner.jpg', 'Read every day', 1, '2018-02-03 00:58:02', '2018-02-01 12:14:31'),
(2, 'Second post on LifeBlog', 'second-post-on-lifeblog', 0, 'banner.jpg', 'This is the body of the second post on this site', 0, '2018-02-02 04:40:14', '2018-02-01 06:04:36'),
(3, 'bandung lautan api', 'bandung-lautan-api', 0, 'banner.jpg', 'bandung dibakar habis habisan', 1, '2018-07-17 13:20:10', '0000-00-00 00:00:00'),
(4, 'Siapa? Penguasa Pasar "Smartphone" Saat ini', 'Siapa?-Penguasa-Pasar-"Smartphone"-Saat-ini', 0, 'IMG_20180627_091115.jpg', '<p>Apakah Anda memiliki&nbsp;<em>smartphone</em>? Mungkin semua pembaca yang membaca artikel ini akan menjawab ya</p>\r\n<p><em>Smartphone</em>&nbsp;sudah menjadi sebuah kebutuhan .Bahkan banyak orang panik jika&nbsp;<em>smartphone nya</em>&nbsp;tertinggal. Teknologi&nbsp;<em>smartphone&nbsp;</em>sudah sangat canggih.Bayangkan, kemampuan proses data I Phone 5 adalah 2,7 kali kemampuan proses data super komputer Cray 2 yang diperkenalkan tahun 1985.</p>\r\n<p>Tetapi saya sekarang ini, merasa bahwa kemajuan teknologi&nbsp;<em>smartphone</em>&nbsp;belum ada lompatan lagi. Sehingga saya tidak tertarik untuk mengganti&nbsp;<em>smartphone</em>&nbsp;yang dimiliki dengan&nbsp;<em>smartphone</em>&nbsp;baru yang muncul setiap tahun.</p>\r\n<p>Microprocessor adalah otak dari&nbsp;<em>smartphone</em>, Qualcomm &nbsp;masih memiliki pangsa pasar terbesar sebagai produsen microprocessor&nbsp;<em>smartphone&nbsp;</em>di tahun 2016 (39%). Mediatek menduduki posisi kedua (23%) diikuti oleh Apple di posisi ketiga (15%).</p>\r\n<p>Saat ini banyak produsen&nbsp;<em>smartphone</em>&nbsp;mulai mengembangkan&nbsp;<em>microprocessor</em>&nbsp;sendiri. Samsung dengan Exynos, Kirin yang diproduksi oleh Huawei. Bahkan terakhir Xiaomi juga mengembangkan&nbsp;<em>microprocessor</em>&nbsp;sendiri untuk &nbsp;<em>smartphone</em>&nbsp;mereka.</p>\r\n<p>Mungkin tidak banyak yang tahu bahwa dibalik semua kecanggihan&nbsp;<em>microprocessor smartphone&nbsp;</em>itu, ada satu nama yaitu&nbsp;<a href="https://en.wikipedia.org/wiki/ARM_Holdings" target="_blank" rel="noreferrer noopener">ARM (Advance RISC Machine)</a>.</p>\r\n<p>ARM Holding adalah suatu perusahaan yang didirikan pada tahun 1990. Perusahaan ini merupakan hasil kerjasama &nbsp;Acorn Computers, Apple Computer dan VLSI Technology. Bergerak di bidang pengembangan teknologi&nbsp;<em>processor</em>.</p>\r\n<p>Model bisnis perusahaan ini sangat menarik. Tidak seperti perusahaan&nbsp;<em>microprocessor</em>&nbsp;lainnya, seperti Intel, Nvidia, AMD dan lain lain yang selalu memproduksi&nbsp;<em>microprocessor</em>&nbsp;sendiri. ARM hanya mengembangkan teknologi dan arsitektur&nbsp;<em>microprocessor</em>. Setelah itu ARM akan menjual lisensi teknologi &nbsp;dan arsitektur&nbsp;<em>microprocessor</em>yang mereka kembangkan, &nbsp;untuk diproduksi oleh perusahaan lain.</p>\r\n<p><em>Microprocessor</em>&nbsp;buatan Qualcomm, Mediatek, Apple, Samsung, Huawei dan lain-lain, dibuat dengan menggunakan teknologi dan arsitektur yang dikembangkan oleh ARM.</p>\r\n<p>Sekitar 95% dari&nbsp;<em>smartphone</em>&nbsp;yang beredar saat ini menggunakan otak yang teknologinya dikembangkan oleh ARM.</p>\r\n<p><em>ARM adalah penguasa pasar smartphone yang sesungguhnya., tanpa pernah memproduksi satu bagian apapun dari smartphone .</em></p>\r\n<p>Salam</p>', 1, '2018-07-17 15:43:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` tinyint(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$tI4KR53jNrPeT6sDojukyOi2MPs6HheKkE4dHyEnKvLMITaeunasO'),
(2, 'admin', '$2y$10$QfVyEYVPL5O4zPNLe2XUhuk7TQM/Mx2B0VJboz0jU8TfCn49BcQdG'),
(3, 'admin', '$2y$10$sGugCUCgi4kfv28RwC/NIu2cAqoq9p3nFZDs9Ugdkt.o6Y.S3rfkS'),
(4, 'admin', '$2y$10$TvTdNnWbShTAiHabEY/H3Oi7qJrRV1RF2xW0dZphUBW5dZs9sIFRG'),
(5, 'admin', '$2y$10$jvMVWvG8c.B.jvdNNKbnmusd17WM.sM4p2dVJ1ZHN/L7LVgMhlc8.'),
(6, 'admin', '$2y$10$j.QvMnlTs8Pt72wST5qoredsGlaOmB/tqBoq3Uz1XLl.ecylORYv6'),
(7, 'admin', '$2y$10$zWhjINv184sJrNSIFD70.Oxy0j.UwxVUjdn3WojgihBeeHJYkFfqK'),
(8, 'admin', '$2y$10$G26Iq.lvouUODqBJ2LZTg.XcJFSLFrFFTgX0kkzMnh/gFK/4LCvne'),
(9, 'admin', '$2y$10$XS6t5soONXhq3Xd3R9P3h.c6d0B4FYrhX8r8pibhE5SBuOxEwzfq.'),
(10, 'admin', '$2y$10$D/FR20HyS/GmuuYRdgSABu7KPsVFdsnqeNpkCI8kLRmvJliPsCFIO'),
(11, 'admin', '$2y$10$xE/yr0br2HF.PNSnCc/zLeVmyWSDlDEugRk8OZPmNqX0Y9XW6lE3G'),
(12, 'admin', '$2y$10$E5ZAxYE7z.fyHJXBqpds4uVe.HgKfw.r6nHu0P0Hnlqrqb.jUH46K'),
(13, 'admin', '$2y$10$uQLVeq74.E7b.PWAPpFrBug9scgYWUHK/VfsRig52bgUh832DIrmW'),
(14, 'admin', '$2y$10$uM.6vCNU2RJU4DQhMWWEsOv.le.y6PBjPdGn.REQ/AzAxNTK5PBRu'),
(15, 'admin', '$2y$10$7TbDfamv7MOu587CglQtR./BwZc0o9Sq9AWRtq4/Z66zzunl8byYq'),
(16, 'admin', '$2y$10$Md6CWK2kXvNX.EaF2DVPvePjCTgBB9wOijm2JUm1hyzAmY.tEXtmm'),
(17, 'admin', '$2y$10$f1E3nPVDeeGt2eDtscOtC.51d0JLpZwMOAszYGrKJKic636WiTIbe'),
(18, 'admin', '$2y$10$2YZU8dllwy1a1mhKve260eRPNyr9Is4UytvRwkk.gtPShfbAxSNRe'),
(19, 'admin', '$2y$10$N9YQGMtN4j965eoDf/HUUOgQFHFdTYhBOqUlceCPYaJPmntW4hQY.'),
(20, 'admin', '$2y$10$y4dIm2X40BsR3/x2VODb3OY5Zw1L5nttlgHBg8Vmng/JtsM8z3O8m'),
(21, 'admin', '$2y$10$UVZyci8kT5zoTgIeJQ7KO.3AsSmMFFvuQwzhvRFkzJf4A/P6uOsqe'),
(22, 'admin', '$2y$10$UPoEIzjTkxUNpVTwXgU0uuBw9yEPbZ0KssNG5Svf6GYZHCXLl6AuO'),
(23, 'admin', '$2y$10$fiVA1vBnn0v6UzKthnzYAeLAfQRsMgp/d05nRZ/OxZgwqi4.9PucG'),
(24, 'admin', '$2y$10$1XU7iSCOx0nfMCbAgEFLouVYSZx9FW8ZEbDl4soDSzpr5hIYKyfrO'),
(25, 'admin', '$2y$10$gApjUY7IjrTKLBwc7QVit.z7ZCuMFhEihfX54kFsCZZpOwdrzwaZW'),
(26, 'admin', '$2y$10$rSCaMBfBPfWJnmrBy1OhN.B7ou2kWkzz8Jo744O7R2AgcZN7En6Ge'),
(27, 'admin', '$2y$10$NODxhTslhK5d6jDkc0WPu.QnBLOZFGVNNFAT.cjAJl3VQoh3oB7UC'),
(28, 'admin', '$2y$10$q.JK00/Ej83tItlgH4qPOuQlLLjrep3orkfda0dRqSdK4MRFLgiLu'),
(29, 'admin', '$2y$10$yncBOLZtHnwlZnZMOW6Bbupr5p8PUlybkaeE5wCYf72B8isCWFGS2'),
(30, 'admin', '$2y$10$fJEqrvoToNvdOvYeCxBJA.FkWjHRb2PSFVqqBSZC75MEaOlvge6b.'),
(31, 'admin', '$2y$10$RPBzmkGbnlPfJuKM1cm4T.oqOB0lyKRJEhC3LiL1rl8PK4AxF2irS'),
(32, 'admin', '$2y$10$Gee31yhb8S3voItxJZpGzuBdWEQYcjM5/yAXf8uKIrdR4QlYVa4Bi'),
(33, 'admin', '$2y$10$V4FKYpxJtlee8q12jhF9I.vAEshxipvfgNYMtD3s70jYpIDMRWZ6i'),
(34, 'admin', '$2y$10$fI.cmI4jEwqmwstrV4bTr.4R7zZS88f49rffmuVTU7hHseG7q2TK2'),
(35, 'admin', '$2y$10$3acNTa6Uu1nJiCi3IczL5.QpBvrSU3gRYEpwlaWSae6jpriaO9dkq'),
(36, 'admin', '$2y$10$ksRGKP0iuRsigy7NX9OCEeil4UfmipVxS61pGs8zdeoAImyWkSsd.'),
(37, 'admin', '$2y$10$LeOexIlry3gqygpDd5KTXO/0NfJ./Zs.P9KoV29suhZKzoUOMvckG');

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
