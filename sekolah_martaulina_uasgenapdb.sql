-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2021 pada 15.51
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah_martaulina_uasgenapdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `matpel`
--

CREATE TABLE `matpel` (
  `id_matpel` varchar(15) NOT NULL,
  `nama_matpel` varchar(70) NOT NULL,
  `status_pelajaran` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matpel`
--

INSERT INTO `matpel` (`id_matpel`, `nama_matpel`, `status_pelajaran`, `created_at`, `updated_at`) VALUES
('M0001', 'Pemograman VB', 'Aktif', '2019-12-28 17:20:35', '2019-12-28 17:20:35'),
('M0002', 'MTK', 'Aktif', '2020-01-08 04:28:12', '2020-01-08 04:28:12'),
('M0003', 'Bahasa Indonesia', 'Aktif', '2020-01-08 04:28:38', '2020-01-08 04:28:38'),
('M0004', 'Bahasa Arab', 'Aktif', '2020-01-08 04:29:10', '2021-06-14 06:40:22'),
('M0008', 'Bahasa Arab', 'Tidak Aktif', '2021-06-17 03:22:56', '2021-06-17 03:22:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mbank`
--

CREATE TABLE `mbank` (
  `no_virtual_account` varchar(30) NOT NULL,
  `nilai_pebayaran` decimal(4,2) DEFAULT NULL,
  `no_rekening` varchar(30) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `nama_cabang` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mguru`
--

CREATE TABLE `mguru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_ktp` varchar(35) NOT NULL,
  `status_keluarga` enum('Lajang','Menikah') NOT NULL,
  `id_jabatan` varchar(8) NOT NULL,
  `foto` varchar(15) NOT NULL,
  `status_pegawai` enum('Honorer','Tetap') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mguru`
--

INSERT INTO `mguru` (`id_guru`, `nip`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_ktp`, `status_keluarga`, `id_jabatan`, `foto`, `status_pegawai`, `created_at`, `updated_at`) VALUES
(1101, '1117286', 'Ade Sukiman', 'Jakarta', '1989-01-10', 'Bekasi', '3216061001890001', 'Menikah', '21', '1101.jpg', 'Tetap', '2020-01-08 04:27:35', '2021-06-14 07:27:41'),
(1103, '1117282', 'Kosasih Muchtar', 'Jakarta', '1984-06-18', 'Jalan Cempedak 1 Blok C NO.69 RT001/015 Perumahan Jatimulya Bekasi Timur', '3216062705970001', 'Menikah', '21', '1103.jpg', 'Tetap', '2019-12-23 10:58:12', '2019-12-25 10:54:57'),
(1104, '1117285', 'Dedi Haryanto', 'Magetan', '1987-01-02', 'Margahayu', '32162511790002', 'Menikah', '21', '1104.jpg', 'Tetap', '2019-12-25 09:30:40', '2019-12-25 09:30:40'),
(1106, '1117289', 'Halim Kusuma', 'Bandung', '1978-01-08', 'Jalan Agus Salim Bekasi', '3210060801780009', 'Menikah', '12', '1106.jpg', 'Tetap', '2020-01-08 16:39:36', '2020-01-08 16:39:36'),
(1107, '1117259', 'Zakaria Bawazier', 'Jakarta', '1979-01-22', 'Jalan Margahayu Raya Bekasi Timur', '3216062201790001', 'Menikah', '31', '1107.jpg', 'Tetap', '2020-01-08 16:42:45', '2021-06-15 07:36:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mjenis_pembayaran`
--

CREATE TABLE `mjenis_pembayaran` (
  `id_jenis_pembayaran` int(11) NOT NULL,
  `nama_jenis_pembayaran` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mjenis_pembayaran`
--

INSERT INTO `mjenis_pembayaran` (`id_jenis_pembayaran`, `nama_jenis_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 'Tunai', '2019-12-20 11:08:06', '2019-12-20 11:08:55'),
(2, 'Transfer', '2019-12-20 11:08:06', '2019-12-20 11:08:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mkasir`
--

CREATE TABLE `mkasir` (
  `id_kasir` int(11) NOT NULL,
  `nama_kasir` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mkasir`
--

INSERT INTO `mkasir` (`id_kasir`, `nama_kasir`, `created_at`, `updated_at`) VALUES
(1, 'Yanti', '2019-12-20 11:08:06', '2019-12-20 11:08:55'),
(2, 'Udin', '2019-12-20 11:08:06', '2019-12-20 11:08:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mkelas`
--

CREATE TABLE `mkelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(35) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `nis` int(11) DEFAULT NULL,
  `id_tahun_ajaran` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mkelas`
--

INSERT INTO `mkelas` (`id_kelas`, `nama_kelas`, `id_guru`, `nis`, `id_tahun_ajaran`, `created_at`, `updated_at`) VALUES
(123, 'XRPL3', 1103, 2016102250, 1, '2019-12-19 02:52:53', '2019-12-23 03:31:01'),
(124, 'XRPL2', 1101, 2016102239, 1, '2020-01-08 04:34:40', '2020-01-08 04:49:47'),
(125, 'XRPL9', 1104745, 2147483647, 1, '2019-12-28 17:25:45', '2021-06-14 07:42:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `msemester`
--

CREATE TABLE `msemester` (
  `id_semester` int(5) NOT NULL,
  `nama_semester` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `msemester`
--

INSERT INTO `msemester` (`id_semester`, `nama_semester`, `created_at`, `updated_at`) VALUES
(1, '2017/2018 semester ganjil', '2019-12-20 11:08:06', '2021-06-08 08:02:16'),
(2, '2017/2018 semester genap', '2019-12-20 11:08:06', '2021-06-08 08:02:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `msiswa`
--

CREATE TABLE `msiswa` (
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','W') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `pekerjaan_ortu` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `msiswa`
--

INSERT INTO `msiswa` (`nis`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `foto`, `id_kelas`, `asal_sekolah`, `nama_ortu`, `pekerjaan_ortu`, `created_at`, `updated_at`) VALUES
(85903, 'Kimlip', 'L', 'Medan', '2005-08-12', 'Bekasi', '0888888846', '10001.jpg', 462839, 'SMP ASURUL', 'sukijemu', 'Pedagang', '2021-06-14 07:10:31', '2021-06-14 07:51:50'),
(553452, 'jaja', 'L', 'Medan', '2002-02-01', 'Sukabahagia', '0888888846', '178.jpg', 126, 'SMP PGRI', 'suja', 'Karyawan Swasta', '2021-06-14 06:51:16', '2021-06-14 07:52:03'),
(2016102239, 'Raden Faris Jatmika', 'L', 'Bekas', '1998-01-08', 'Perumnas 1 Bekasi Timur', '085715150857', '2016102239.jpg', 124, 'SMPN 4 Tamsel', 'Jati', 'Pegawai Swasta', '2020-01-08 04:49:32', '2020-01-08 04:49:32'),
(2016102247, 'Khairunissa', 'W', 'Jakarta', '1998-12-13', 'Pondok Gede', '085814887522', '2016102247.jpg', 125, 'SMPN 12 Jatimakmur', 'Badriah', 'Guru', '2019-12-20 13:08:48', '2019-12-20 13:08:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mtahun_ajaran`
--

CREATE TABLE `mtahun_ajaran` (
  `id_tahun_ajaran` int(5) NOT NULL,
  `nama_tahun_ajaran` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mtahun_ajaran`
--

INSERT INTO `mtahun_ajaran` (`id_tahun_ajaran`, `nama_tahun_ajaran`, `created_at`, `updated_at`) VALUES
(1, '2017/2018', '2019-12-20 11:08:06', '2019-12-20 11:08:55'),
(2, '2019/2020', '2019-12-20 11:08:06', '2019-12-20 11:08:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tnilai_siswa`
--

CREATE TABLE `tnilai_siswa` (
  `id_nilai_siswa` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `id_matpel` varchar(15) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_tahun_ajaran` int(5) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `nilai_harian1` decimal(4,2) DEFAULT NULL,
  `nilaiharian2` decimal(4,2) DEFAULT NULL,
  `nilaiharian3` decimal(4,2) DEFAULT NULL,
  `nilai_tugas1` decimal(4,2) DEFAULT NULL,
  `nilai_tugas2` decimal(4,2) DEFAULT NULL,
  `nilai_uts` decimal(4,2) DEFAULT NULL,
  `nilai_uas` decimal(4,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tnilai_siswa`
--

INSERT INTO `tnilai_siswa` (`id_nilai_siswa`, `nis`, `id_matpel`, `id_kelas`, `id_guru`, `id_tahun_ajaran`, `id_semester`, `nilai_harian1`, `nilaiharian2`, `nilaiharian3`, `nilai_tugas1`, `nilai_tugas2`, `nilai_uts`, `nilai_uas`, `created_at`, `updated_at`) VALUES
(2, 2016102247, 'M0003', 125, 1101, 1, 1, '90.00', '90.00', '89.00', '75.00', '89.00', '85.00', '87.00', '2020-01-08 04:53:25', '2021-06-21 13:02:37'),
(3, 2016102247, 'M0004', 125, 1106, 1, 1, '95.00', '80.00', '85.00', '80.00', '80.00', '84.00', '81.00', '2020-01-08 16:40:25', '2020-01-08 16:40:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpembayaran`
--

CREATE TABLE `tpembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_tahun_ajaran` int(5) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_jenis_pembayaran` int(11) NOT NULL,
  `no_virtual_account` varchar(30) DEFAULT NULL,
  `nilai_pebayaran` decimal(4,2) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `id_kasir` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `matpel`
--
ALTER TABLE `matpel`
  ADD PRIMARY KEY (`id_matpel`);

--
-- Indeks untuk tabel `mbank`
--
ALTER TABLE `mbank`
  ADD PRIMARY KEY (`no_virtual_account`);

--
-- Indeks untuk tabel `mguru`
--
ALTER TABLE `mguru`
  ADD PRIMARY KEY (`id_guru`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indeks untuk tabel `mjenis_pembayaran`
--
ALTER TABLE `mjenis_pembayaran`
  ADD PRIMARY KEY (`id_jenis_pembayaran`);

--
-- Indeks untuk tabel `mkasir`
--
ALTER TABLE `mkasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indeks untuk tabel `mkelas`
--
ALTER TABLE `mkelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `fk_guru` (`id_guru`),
  ADD KEY `fk_siswa` (`nis`);

--
-- Indeks untuk tabel `msemester`
--
ALTER TABLE `msemester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indeks untuk tabel `msiswa`
--
ALTER TABLE `msiswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `mtahun_ajaran`
--
ALTER TABLE `mtahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indeks untuk tabel `tnilai_siswa`
--
ALTER TABLE `tnilai_siswa`
  ADD PRIMARY KEY (`id_nilai_siswa`),
  ADD KEY `id_matpel` (`id_matpel`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`),
  ADD KEY `id_semester` (`id_semester`);

--
-- Indeks untuk tabel `tpembayaran`
--
ALTER TABLE `tpembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mjenis_pembayaran`
--
ALTER TABLE `mjenis_pembayaran`
  MODIFY `id_jenis_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mkasir`
--
ALTER TABLE `mkasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `msemester`
--
ALTER TABLE `msemester`
  MODIFY `id_semester` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mtahun_ajaran`
--
ALTER TABLE `mtahun_ajaran`
  MODIFY `id_tahun_ajaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tnilai_siswa`
--
ALTER TABLE `tnilai_siswa`
  MODIFY `id_nilai_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5429;

--
-- AUTO_INCREMENT untuk tabel `tpembayaran`
--
ALTER TABLE `tpembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tnilai_siswa`
--
ALTER TABLE `tnilai_siswa`
  ADD CONSTRAINT `tnilai_siswa_ibfk_1` FOREIGN KEY (`id_matpel`) REFERENCES `matpel` (`id_matpel`),
  ADD CONSTRAINT `tnilai_siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `mkelas` (`id_kelas`),
  ADD CONSTRAINT `tnilai_siswa_ibfk_3` FOREIGN KEY (`nis`) REFERENCES `msiswa` (`nis`),
  ADD CONSTRAINT `tnilai_siswa_ibfk_4` FOREIGN KEY (`id_guru`) REFERENCES `mguru` (`id_guru`),
  ADD CONSTRAINT `tnilai_siswa_ibfk_5` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `mtahun_ajaran` (`id_tahun_ajaran`),
  ADD CONSTRAINT `tnilai_siswa_ibfk_6` FOREIGN KEY (`id_semester`) REFERENCES `msemester` (`id_semester`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
