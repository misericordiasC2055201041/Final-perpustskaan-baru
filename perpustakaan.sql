-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2022 pada 07.49
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kode` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kode`, `judul`, `penulis`, `penerbit`, `foto`, `created_at`, `updated_at`) VALUES
('C001', 'Pemrograman Database dengan Delphi7 Menggunakan Access ADO', 'Abdul Kadir', 'Penerbit Andi', '1641141703_05a03aa12e73e4426737.jpg', '2022-01-02 10:00:12', '2022-01-02 10:41:43'),
('C002', 'ASnimasi Pendidikan Menggunakan Flash', 'Priyanto Hidayatullah', 'Informatika', '1641141722_f277128970bfd2d82290.jpg', '2022-01-02 10:00:12', '2022-01-02 10:42:02'),
('C003', 'Menguasai Efek Khusus dengan Photoshop', 'Junilee Enterprise', 'Elex Media Komputindo', '1641141733_e5c6730ce0abe7321f60.jpg', '2022-01-02 10:00:12', '2022-01-02 10:42:13'),
('C004', 'Mudah dan Cepat Membuat Program Skripsi dengan VB 2012', 'Ir. Yuniar Supardi', 'Elex Media Komputindo', '1641141748_39bced83a5eaee63f371.jpg', '2022-01-02 10:00:12', '2022-01-02 10:42:28'),
('C005', 'the C++ Programming Language third edition', 'Bjarne Stroustrup', 'AT&T Labs', '1641141759_c45d6fbda11a5b380776.jpg', '2022-01-02 10:00:12', '2022-01-02 10:42:39'),
('C006', 'The Magic of Flash MX 2004', 'Bernard Hardianto dan Ferdianto Wijaya', 'PT Elex Media Komputindo', '1641141769_9a0525f157a26639d232.jpg', '2022-01-02 10:00:12', '2022-01-02 10:42:49'),
('C007', 'Unity Internal Windows XP Professional', 'Ian Chandra K', 'Elex Media Komputindo', '1641141781_7ac14fdaedc3be977e54.jpeg', '2022-01-02 10:00:12', '2022-01-02 10:43:01'),
('C008', 'Seluk Beluk Database Relasional (Edisi Kedua)', 'Mark Whitehorn dan Bill Marklyn', 'Erlangga', '1641141792_576924575797790222ed.jpeg', '2022-01-02 10:00:12', '2022-01-02 10:43:12'),
('C009', 'Sistem Operasi Microsoft Windows XP Professional', 'Ian Chandra K', 'Elex Media Komputindo', '1641141812_d9c1a32fe1ad741af6b2.jpeg', '2022-01-02 10:00:12', '2022-01-02 10:43:32'),
('C010', 'Algoritma & Teknik Pemrograman', 'Budi Sutejo, Michael An', 'ANDI', '1641141823_a0c6d87dea1680e17fad.jpeg', '2022-01-02 10:00:12', '2022-01-02 10:43:43'),
('C011', 'Dasar Teknik Informatika', 'Novega Pratama Adiputra', 'Deepublish', '1641141919_6a833668afdc24c830d1.jpg', '2022-01-02 10:00:12', '2022-01-02 10:45:19'),
('C012', 'Metode Penelitian Teknik Informatika', 'Ade Djohar Maturidi', 'Deepublish', '1641141929_e2f934447a0b93ffb192.jpg', '2022-01-02 10:00:12', '2022-01-02 10:45:29'),
('C013', 'Teknik Pengolahan Audio Video', 'Johnie Rogers Swanda Pasaribu, S.Kom., M.Kom.', 'Dinas Pendidikan', '1641141942_003e3b191d984012f7ff.jpg', '2022-01-02 10:00:12', '2022-01-02 10:45:42'),
('C014', 'Pengantar Teknologi Informasi', 'Buhori Muslim', 'Deepublish', '1641141958_518eb80a379e30498a20.jpg', '2022-01-02 10:00:12', '2022-01-02 10:45:58'),
('C015', 'Teknologi Informasi Di Pedesaaan', 'Hadis Turmudi, S.H., M.H.', 'Deepublish', '1641142007_967c738ae70e4c351366.jpg', '2022-01-02 10:00:12', '2022-01-02 10:46:47'),
('C016', 'Manajemen Proyek Teknologi Informasi', 'Agus Suryanto Dan Anan Nugroho', 'Deepublish', '1641142015_6c19078880daa268cc03.jpg', '2022-01-02 10:00:12', '2022-01-02 10:46:55'),
('C017', 'Basis Data Konsep Dan Aplikasi', 'Ika Oktavia Suzanti', 'Deepublish', '1641142025_f02bac441f903d06a02d.jpg', '2022-01-02 10:00:12', '2022-01-02 10:47:05'),
('C018', 'Komputer Cerdas Untuk Mahasiswa Teknik Informatika', 'Nur Nafi iyah ', 'Deepublish', '1641142033_304edb6e7865e816b895.jpg', '2022-01-02 10:00:12', '2022-01-02 10:47:13'),
('C019', 'Pengantar Teknologi Informasi', 'Edy Irwansyah Dan Jurike V. Moniaga', 'Deepublish', '1641142045_57c37bbb8e8f6d275e03.jpg', '2022-01-02 10:00:12', '2022-01-02 10:47:25'),
('C020', 'Pendidikan Teknologi Informasi Dan Komunikasi', 'Dr. Deni Darmawan, S.Pd. M.S,', 'PT. Remaja Rosdakarya', '1641142055_bed27fe6f4a434eb2be7.jpg', '2022-01-02 10:00:12', '2022-01-02 10:47:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `jenis_kelamin` enum('pria','wanita') NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`, `jenis_kelamin`, `no_telp`, `email`, `alamat`, `foto`, `created_at`, `updated_at`) VALUES
('C2055201041', 'MISERICORDIAS DOMINI NATALIA BORU PANDIANGAN', 'Teknik Informatika', 'wanita', '085753887632', 'misericordias@gmail.com', 'Jalan RTA MILONO Palangkaraya', '1641142068_34798d5e036bfbbfd324.jpg', '2022-01-02 09:59:07', '2022-01-02 10:47:48'),
('C2055201042', 'ANJELA RASTIANA', 'Teknik Informatika', 'wanita', '087838547716', 'anjelarastiana@gmail.com', 'Jalan Tjilik Riwut Palangkaraya', '1641142078_e07a471551de4718af02.jpg', '2022-01-02 09:59:07', '2022-01-02 10:47:58'),
('C2055201048', 'ANGGELINA RENTIKA KAROLINA', 'Teknik Informatika', 'wanita', '085750841933', 'anggelinarentikakarolina@gmail.com', 'Jalan Pramuka 1 Kos Milenial NO.10 Palangkaraya', '1641142105_81c04b69a14f5b7dec17.jpg', '2022-01-02 09:59:07', '2022-01-02 10:48:25'),
('C2055201049', 'SRI AYU', 'Teknik Informatika', 'wanita', '081350201762', 'sriayu@gmail.com', 'Jalan Jati Palangkaraya', '1641142120_b4df18553edb7d37b6a4.jpg', '2022-01-02 09:59:07', '2022-01-02 10:48:40'),
('C2055201050', 'FRENGKI APRIMO MANEK', 'Teknik Informatika', 'pria', '081350200171', 'frengkiaprimomanek@gmail.com', 'Jalan G.Obos 7 Palangkaraya', '', '2022-01-02 09:59:07', NULL),
('C2055201051', 'JIMMY ULU', 'Sistem Informasi', 'pria', '081339179796', 'jimmyulu@gmail.com', 'Jalan Rajawali Palangkaraya', '', '2022-01-02 09:59:07', NULL),
('C2055201052', 'JANUARIUS OLLIN', 'Sistem Informasi', 'pria', '081288121169', 'januariusollin@gmail.com', 'Jalan Garuda Palangkaraya', '', '2022-01-02 09:59:07', NULL),
('C2055201060', 'SANTOS', 'Sistem Informasi', 'pria', '081255674682', 'santos@gmail.com', 'Jalan Temanggung Tilung Palangkaraya', '', '2022-01-02 09:59:07', NULL),
('C2055201065', 'YANTO MANTANO', 'Sistem Informasi', 'pria', '085705150121', 'yantomantano@gmail.com', 'Jalan Menteng Palangkaraya', '', '2022-01-02 09:59:07', NULL),
('C2157201021', 'RISMA UTAMI HANDAYANI', 'Sistem Informasi', 'wanita', '081351680382', 'rismautamihandayani@gmail.com', 'Jalan B.Koetin Kos Putri Berlian NO.4 Palangkaraya', '', '2022-01-02 09:59:07', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(71, '2021-10-11-120716', 'App\\Database\\Migrations\\Users', 'default', 'App', 1641139032, 1),
(72, '2022-01-02-155816', 'App\\Database\\Migrations\\Mahasiswa', 'default', 'App', 1641139122, 2),
(73, '2022-01-02-155938', 'App\\Database\\Migrations\\Buku', 'default', 'App', 1641139194, 3),
(75, '2022-01-02-160546', 'App\\Database\\Migrations\\Transaksi', 'default', 'App', 1641139553, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_buku` varchar(255) NOT NULL,
  `nim_anggota` varchar(11) NOT NULL,
  `tanggal_pinjam` datetime NOT NULL DEFAULT current_timestamp(),
  `tanggal_kembali` datetime NOT NULL,
  `status` enum('Dipinjam','kembali') NOT NULL DEFAULT 'Dipinjam',
  `denda` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `kode_buku`, `nim_anggota`, `tanggal_pinjam`, `tanggal_kembali`, `status`, `denda`, `created_at`, `updated_at`) VALUES
(1, 'C001', 'C2055201041', '2022-01-02 23:15:13', '2022-01-02 10:18:15', 'kembali', 0, '2022-01-02 10:15:13', '2022-01-02 10:18:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `created_at`, `updated_at`) VALUES
('miseri', '$2y$10$rWqmESrib5PcASJA3v36JOblWtzJ22a2i9QWxuQcDgdafE3Csz9QC', 'miseri', '2022-01-02 09:57:39', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_kode_buku_foreign` (`kode_buku`),
  ADD KEY `transaksi_nim_anggota_foreign` (`nim_anggota`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_kode_buku_foreign` FOREIGN KEY (`kode_buku`) REFERENCES `buku` (`kode`),
  ADD CONSTRAINT `transaksi_nim_anggota_foreign` FOREIGN KEY (`nim_anggota`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
