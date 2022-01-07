-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2022 pada 05.02
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `77ds`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `deskripsi` text NOT NULL,
  `section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `judul`, `deskripsi`, `section`) VALUES
(1, 'Visi & Misi', 'Mempermudah masyarakat dalam mencari jasa design tanpa rasa khawatir dengan pelayanan yang kurang\r\nMenyediakan layanan penjembatan antara masyarakat dan designer grafis dengan mengutamakan mutu serta pelayanan yang baik.', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `about-img`
--

CREATE TABLE `about-img` (
  `id` int(128) NOT NULL,
  `file` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about-img`
--

INSERT INTO `about-img` (`id`, `file`, `nama`) VALUES
(3, '1641304972.png', 'Angular'),
(4, '1641304985.png', 'HTML 5'),
(5, '1641305004.png', 'Javascript'),
(6, '1641305017.png', 'NodeJS'),
(7, '1641305035.svg', 'CSS'),
(8, '1641305063.png', 'VScode');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `nama`, `deskripsi`, `file`) VALUES
(1, 'Whatsapp', '+62877226666', '1641439875.png'),
(2, 'Twitter', '77design', '1641439905.png'),
(3, 'Facebook', '77design', '1641439921.png'),
(4, 'Instagram', '@77design', '1641439937.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `deskripsi` text NOT NULL,
  `section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id`, `judul`, `deskripsi`, `section`) VALUES
(1, '77Design', '77Design berdiri sejak tahun 2019 berawal dari sebuah forum percakapan daring yang berisi para designer grafis dan masyarakat umum, melihat kondisi sekitar dan keadaan pasar maka berdirilah 77Design sebagai startup rintisan yang berkembang hingga saat ini menjawab kebutuhan masyarakat akan design grafis dalam dunia digital marketing.', 1),
(2, 'Kenapa 77Design?', '77design bergerak di bidang jasa yang menjembatani antara masyarakat dengan para designer yang telah bergabung bersama kami. Melihat perkembangan teknologi beserta pasar ekonomi yanf mendorong masyarakat membuka usaha dan berbisnis tetapi masih bingung bagaimana konsep design logo, pamphlet promosi dsb dan juga mereka tidak tahu dimana mendesign ataupun menemukan designer grafis yang dapat membantu mereka.', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `deskripsi` text NOT NULL,
  `file` varchar(128) NOT NULL,
  `section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id`, `nama`, `deskripsi`, `file`, `section`) VALUES
(2, 'Figma', 'Software Figma', '1641385399.png', 2),
(4, 'Desain Grafis', 'Design grafis meliputi logo, banner, pamphlet,brosur,kartu nama,name tag dll', '1641386346.png', 1),
(5, 'Desain Website', 'Web design meliputi landing page design, portolio web, company web, wordpress dll', '1641386405.jpg', 1),
(6, 'Desain VIdeo', 'Video design meliputi video promosi, animasi, eding video, visual sfx vfx dll', '1641386441.jpg', 1),
(7, 'Adobe Ilustrator ', 'Software Ilustrator', '1641386491.png', 2),
(8, 'Adobe Lightroom', 'Software Adobe Lightroom', '1641386537.png', 2),
(9, 'Adobe Photoshop', 'Software Adobe Photoshop', '1641386576.png', 2),
(10, 'After Effects', 'Software After Effects', '1641386610.png', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id`, `judul`, `deskripsi`, `section`) VALUES
(1, 'WE ARE HIRING NEW TEAM', 'Kami membuka peluang bagi team anda yang ingin join ke 77Design untuk info lebih lanjut bisa silakan contact 77Design', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `team-img`
--

CREATE TABLE `team-img` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `job` varchar(64) NOT NULL,
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `team-img`
--

INSERT INTO `team-img` (`id`, `nama`, `job`, `file`) VALUES
(4, 'Krisnanta Wahyudha', 'Fullstack', '1641374477.svg'),
(14, 'DOGE 1', 'DOGGING', '1641380133.png'),
(15, 'DOGE 2', 'DOGGING', '1641380148.png'),
(16, 'DOGE 3', 'DOGGING', '1641380163.png'),
(17, 'DOGE4', 'DOGGING', '1641380183.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(18) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `nama`, `email`, `password`) VALUES
('admin', 'One', 'admin@email.com', 'admin123'),
('admin2', 'adminsecond1', 'admin@mail.com', 'asd'),
('adminsecond', 'Two', 'adminsecond@email.com', 'admin123'),
('adminthird', 'Three', 'adminthird@email.com', 'admin123'),
('asd1', 'asd1', 'asd1@mail.com', 'asd'),
('asd2', 'asd0', 'asd1@mail.com', 'asd'),
('kriss', 'Kris Wahyu', 'kris@gmail.com', 'kris123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `view`
--

CREATE TABLE `view` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `view`
--

INSERT INTO `view` (`id`, `status`) VALUES
(1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `about-img`
--
ALTER TABLE `about-img`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `team-img`
--
ALTER TABLE `team-img`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about-img`
--
ALTER TABLE `about-img`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `team-img`
--
ALTER TABLE `team-img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
