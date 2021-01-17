-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2021 pada 09.05
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `User` varchar(25) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `User`, `Password`, `updated_at`, `created_at`) VALUES
(1, 'hafidh@gmail.com', '12345', '2021-01-02 13:57:53', '2021-01-02 13:57:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `NIK` int(15) NOT NULL,
  `NIDN_NUP` int(15) NOT NULL,
  `Nama_Dosen` varchar(20) NOT NULL,
  `Jabatan_Akademik` varchar(20) NOT NULL,
  `Pendidikan` varchar(20) NOT NULL,
  `Sertifikasi` varchar(15) NOT NULL,
  `Program_Studi` varchar(30) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `updated_at` varchar(25) NOT NULL,
  `created_at` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`NIK`, `NIDN_NUP`, `Nama_Dosen`, `Jabatan_Akademik`, `Pendidikan`, `Sertifikasi`, `Program_Studi`, `Status`, `updated_at`, `created_at`) VALUES
(19999, 11111, 'Gum', 'Asisten Ahli', 'S1', 'Sudah', 'Teknik Informatika (S1)', 'Dosen Tetap Yayasan', '2021-01-02 10:31:34', '2021-01-02 10:31:34'),
(3010014, 40457203, 'Asep Sudrajat,SH,.', 'Tenaga Pengajar', 'S1', 'Belum', 'Manajemen Informatika (D3)', 'Dosen Tetap Yayasan', '2021-01-16 12:22:39', '2021-01-16 12:22:39'),
(14010046, 411039101, 'Agun Guntara, M,Kom.', 'Asisten Ahli', 'S1', 'Sudah', 'Teknik Informatika (S1)', 'Dosen Tetap Yayasan', '2021-01-16 12:21:18', '2021-01-16 12:17:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepegawaian`
--

CREATE TABLE `kepegawaian` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `NIK` int(15) NOT NULL,
  `TTL` varchar(25) NOT NULL,
  `Alamat` text NOT NULL,
  `NPWP` varchar(20) NOT NULL,
  `No_HP` int(15) NOT NULL,
  `Pendidikan` varchar(20) NOT NULL,
  `Pendidikan_Terakhir_Pada_Saat_Diangkat` varchar(20) NOT NULL,
  `NO_SK_Awal_Pengangkatan` varchar(20) NOT NULL,
  `TMT_SK_Awal_Pengangkatan` varchar(20) NOT NULL,
  `Berkala_Kenaikan` varchar(20) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kepegawaian`
--

INSERT INTO `kepegawaian` (`id`, `Nama`, `NIK`, `TTL`, `Alamat`, `NPWP`, `No_HP`, `Pendidikan`, `Pendidikan_Terakhir_Pada_Saat_Diangkat`, `NO_SK_Awal_Pengangkatan`, `TMT_SK_Awal_Pengangkatan`, `Berkala_Kenaikan`, `updated_at`, `created_at`) VALUES
(1, 'Hafidh', 12345, 'Sumedang,24/02/1999', 'SUmedang', '1234', 987, 'Tamat', 'S4', '12345', '12345', '1234', '2021-01-02 13:59:38', '2021-01-02 13:59:38'),
(2, 'Dwi Yuniarto, S.Sos., M.Kom.', 10009, 'SUMEDANG, 30-06-1977', 'PERUM JATIHURIP BLOK 8 NO. 145 RT.2 RW.14 SMD', '29.947.580.7.446000', 8122400, '2019', 'D-3', '008/SK/YPS/III/2000', '3/1/2000 II-C', '1/2/2000 ||-c', '2021-01-16 12:30:16', '2021-01-16 12:30:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `NPM` varchar(15) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Pilihan_Prodi` varchar(30) NOT NULL,
  `Tempat_Lahir` varchar(20) NOT NULL,
  `Tanggal_lahir` varchar(20) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `Alamat_lengkap` text NOT NULL,
  `Kecamatan` varchar(20) NOT NULL,
  `Kabupaten` varchar(20) NOT NULL,
  `KTP` int(20) NOT NULL,
  `KK` int(20) NOT NULL,
  `No_HP` int(10) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `NPM`, `Nama`, `Pilihan_Prodi`, `Tempat_Lahir`, `Tanggal_lahir`, `Jenis_kelamin`, `Alamat_lengkap`, `Kecamatan`, `Kabupaten`, `KTP`, `KK`, `No_HP`, `updated_at`, `created_at`) VALUES
(3, 'A2.17123', 'Fauzan', 'Teknik Informatika (S1)', 'Sumedang', '1999-12-10', 'L', 'Jalan pangeran santri', 'sumedang', 'sumedang selatan', 21314, 324123, 312390, '2020-12-29 15:24:31', '2020-12-29 15:24:31'),
(5, 'A1.2000001', 'Daffa Refa Ismanto', 'Manajemen Informatika (D3)', 'Sumedang', '1998-02-02', 'L', 'Jalan 11 Aprill,Rt/Rw 003/009', 'Sumedang Utara', 'Sumedang', 0, 0, 8123456, '2021-01-16 12:05:55', '2021-01-16 12:05:55'),
(6, 'A1.2000002', 'Imam Wahyuningrat', 'Manajemen Informatika (D3)', 'Sumedang', '2001-12-26', 'L', 'Dsn.Paniis Rt/Rw 02/04', 'Tanjungkerta', 'Sumedang', 0, 0, 8123456, '2021-01-16 12:11:06', '2021-01-16 12:11:06'),
(7, 'A1.2000003', 'Muhamad Baktti Solihin', 'Manajemen Informatika (D3)', 'Madiun', '1996-11-25', 'L', 'Dsn Bodoloa Rt/Rw 07/02 Desa bongkok', 'Paseh', 'Sumedang', 0, 0, 8123456, '2021-01-16 12:13:12', '2021-01-16 12:13:12'),
(8, 'A1.2000004', 'Nita Lismaya', 'Manajemen Informatika (D3)', 'Subang', '2001-07-03', 'P', 'Kp.Cilimus Rt/Rw 04/01 Dusun Sindanglaya', 'Tanjungsiang', 'Subang', 0, 0, 8123456, '2021-01-16 12:14:59', '2021-01-16 12:14:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIK`);

--
-- Indeks untuk tabel `kepegawaian`
--
ALTER TABLE `kepegawaian`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kepegawaian`
--
ALTER TABLE `kepegawaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
