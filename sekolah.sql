-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2024 pada 08.24
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `terakhir_diperbaharui` varchar(20) NOT NULL,
  `terakhir_dibuat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `content`, `terakhir_diperbaharui`, `terakhir_dibuat`) VALUES
(1, 'belajar membuat web sedarhana', 'belajar membuat web sederhana menggunakan php dan database hinnga jadi', '01-11-2023', '01-11-2023'),
(2, 'belajar membuat css dengan sty', 'cara membuat style di halaman web dengan style css', '15-10-2023', '15-10-2023'),
(3, 'icpwdkvre[gpvkrepvek', 'kvpofekve[pvke[ ergew', '2023-10-20', '2023-10-20'),
(4, 'kcowp[fkwe[fp erg[ewrk', 'kcwp[ kfcekopfkerp rgkrop errs', '2023-10-20', '2023-10-20'),
(5, 'fgrjieogjregoijerger', 'gjierjgoer;gjesbvbfgr rjregio;re', '2023-10-25', '2023-10-25'),
(6, 'kfre[kvre[ ergre', 'fk3opfkw[fpwke', '2023-10-25', '2023-10-25'),
(7, 'jdfepojfewrpfj ergregjpoerj', 'fjewrprvjrep fjewopfjwefopwe', '2023-10-25', '2023-10-25'),
(8, 'data berikutnya', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium suscipit ea unde. Ex amet nam ducimus consequuntur aliquid veritatis quod dolorum quaerat? Repellendus temporibus tempora nisi accusantium animi rerum fuga nobis sequi? Dolorem ipsa suscipit, nisi dignissimos quasi eligendi harum?', '2023-10-26', '2023-10-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int(11) NOT NULL,
  `nama_mata_pelajaran` varchar(40) NOT NULL,
  `kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `nama_mata_pelajaran`, `kelas`) VALUES
(1, 'agama', 'X'),
(2, 'penjas ', 'XI'),
(3, 'penjas', 'x');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama_lengkap`, `jenis_kelamin`, `agama`, `alamat`) VALUES
(1, 'james maubila', 'laki-laki', 'kristen', 'jl sukun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(2, 'james', 'james@gmail.com', '$2y$10$MXb4mMZo3WdxDM8FaNcpveeRDG/kggA/IF.H9cxtgAeu00tyao7zm'),
(3, 'tiara', 'tiara@gmail.com', '$2y$10$BeKjvL8qHw3bSXlBa9Jo1.gCt8duOaX9Nx0ZNnIcYEuvE48QHvyo6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
