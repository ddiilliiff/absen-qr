-- phpMyAdmin SQL Dump

-- version 5.2.1

-- https://www.phpmyadmin.net/

--

-- Host: 127.0.0.1

-- Waktu pembuatan: 18 Nov 2023 pada 11.02

-- Versi server: 10.4.28-MariaDB

-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

--

-- Database: `db-absen-qr`

--

-- --------------------------------------------------------

--

-- Struktur dari tabel `tabel_user`

--

CREATE TABLE
    `tabel_user` (
        `id` int(11) NOT NULL,
        `username` varchar(25) NOT NULL,
        `password` varchar(255) NOT NULL,
        `role` varchar(1) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data untuk tabel `tabel_user`

--

INSERT INTO
    `tabel_user` (
        `id`,
        `username`,
        `password`,
        `role`
    )
VALUES (
        1,
        'admin.fikom@ustj.ac.id',
        '$2y$10$WZ9v2C14y/nBcbw1vjsGwOKtTDCRiXyJrFSgJqC8wXNmx24/Q3cpe',
        '1'
    ), (
        2,
        'dosen1',
        '$2y$10$ZlsKwYGCd0PhFqdwSmrmmeBjb2n9itpHahwkbW.pS5xPNXiNipChO',
        '2'
    ), (
        4,
        '18411064',
        '$2y$10$VautlBlMQGB0w56Mm1eRe.NGmSR9DVQ.wHLWmRaz.5AGJ72eGBIYi',
        '3'
    ), (
        5,
        '202020',
        '$2y$10$0c.jmFfpiTSOO2hI2wCmd.ap6LQEUCbnSbHUiNX2nmt.LnCiornmi',
        '2'
    );

-- --------------------------------------------------------

--

-- Struktur dari tabel `tbl_dt_absen`

--

CREATE TABLE
    `tbl_dt_absen` (
        `id_absen` int(11) NOT NULL,
        `npm` varchar(11) NOT NULL,
        `id_jadwal` varchar(11) NOT NULL,
        `status` varchar(1) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data untuk tabel `tbl_dt_absen`

--

INSERT INTO
    `tbl_dt_absen` (
        `id_absen`,
        `npm`,
        `id_jadwal`,
        `status`
    )
VALUES (1, '18411064', '3201', '1'), (2, '18411064', '2', '1'), (4, '', '', '1'), (5, '1', '1', '1');

-- --------------------------------------------------------

--

-- Struktur dari tabel `tbl_dt_dosen`

--

CREATE TABLE
    `tbl_dt_dosen` (
        `nidn` varchar(16) NOT NULL,
        `nama_dosen` varchar(128) DEFAULT NULL,
        `tempat_lahir` varchar(128) DEFAULT NULL,
        `tgl_lahir` date DEFAULT NULL,
        `jk` varchar(128) DEFAULT NULL,
        `email` varchar(128) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data untuk tabel `tbl_dt_dosen`

--

INSERT INTO
    `tbl_dt_dosen` (
        `nidn`,
        `nama_dosen`,
        `tempat_lahir`,
        `tgl_lahir`,
        `jk`,
        `email`
    )
VALUES (
        '1234567',
        'Pri Utomo Damar Agung, S.Kom',
        'Sentani',
        '2000-03-10',
        'Laki',
        'massagung52@gmail.comm'
    ), (
        '124322',
        'Ziko Salasa, S.Kom',
        'Jayapura',
        '1999-10-22',
        'Laki-laki',
        'ziko@gmail.com'
    ), (
        '18192021',
        'Dilif Makalalag, S.Kom',
        'Maelang',
        '2000-12-12',
        'a',
        'alsptraw12@gmail.com'
    ), (
        '202020',
        'Arnol Pongmasangka',
        'JAYAPURA',
        '2000-01-01',
        'LAKI-LAKI',
        'anno@gmail.com'
    );

-- --------------------------------------------------------

--

-- Struktur dari tabel `tbl_dt_jadwal`

--

CREATE TABLE
    `tbl_dt_jadwal` (
        `id_jadwal` int(11) NOT NULL,
        `kode_mk` int(11) DEFAULT NULL,
        `nidn` int(11) DEFAULT NULL,
        `jam` date DEFAULT NULL,
        `ruangan` varchar(4) DEFAULT NULL,
        `kelas` varchar(4) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data untuk tabel `tbl_dt_jadwal`

--

INSERT INTO
    `tbl_dt_jadwal` (
        `id_jadwal`,
        `kode_mk`,
        `nidn`,
        `jam`,
        `ruangan`,
        `kelas`
    )
VALUES (
        1,
        120101,
        22222,
        '0000-00-00',
        'H1',
        'A'
    );

-- --------------------------------------------------------

--

-- Struktur dari tabel `tbl_dt_matkul`

--

CREATE TABLE
    `tbl_dt_matkul` (
        `kode_mk` varchar(15) NOT NULL,
        `nidn` varchar(16) NOT NULL,
        `mata_kuliah` varchar(128) DEFAULT NULL,
        `sks` int(11) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data untuk tabel `tbl_dt_matkul`

--

INSERT INTO
    `tbl_dt_matkul` (
        `kode_mk`,
        `nidn`,
        `mata_kuliah`,
        `sks`
    )
VALUES (
        '120101',
        '18192021',
        'Logika dan Algoritma',
        5
    );

-- --------------------------------------------------------

--

-- Struktur dari tabel `tbl_dt_mhs`

--

CREATE TABLE
    `tbl_dt_mhs` (
        `npm` varchar(9) NOT NULL,
        `nama_mhs` varchar(128) DEFAULT NULL,
        `tempat_lahir` varchar(128) DEFAULT NULL,
        `tgl_lahir` date DEFAULT NULL,
        `jk` varchar(128) DEFAULT NULL,
        `email` varchar(128) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data untuk tabel `tbl_dt_mhs`

--

INSERT INTO
    `tbl_dt_mhs` (
        `npm`,
        `nama_mhs`,
        `tempat_lahir`,
        `tgl_lahir`,
        `jk`,
        `email`
    )
VALUES (
        '18411064',
        'DILIF MAKALALAG',
        'MAELANG',
        '2000-05-28',
        'LAKI-LAKI',
        'dilif.makalalag@gmail.com'
    );

-- --------------------------------------------------------

--

-- Struktur dari tabel `tbl_dt_qrc`

--

CREATE TABLE
    `tbl_dt_qrc` (
        `id_qr` int(11) NOT NULL,
        `id_jadwal` varchar(11) NOT NULL,
        `qr` varchar(255) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Struktur dari tabel `tbl_user`

--

CREATE TABLE
    `tbl_user` (
        `id_user` int(11) NOT NULL,
        `nama_user` varchar(128) DEFAULT NULL,
        `email` varchar(128) DEFAULT NULL,
        `password` varchar(128) DEFAULT NULL,
        `level` int(11) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data untuk tabel `tbl_user`

--

INSERT INTO
    `tbl_user` (
        `id_user`,
        `nama_user`,
        `email`,
        `password`,
        `level`
    )
VALUES (
        1,
        'Tata Usaha',
        'ustj@gmail.ac.id',
        'abc',
        1
    );

--

-- Indexes for dumped tables

--

--

-- Indeks untuk tabel `tabel_user`

--

ALTER TABLE `tabel_user` ADD PRIMARY KEY (`id`);

--

-- Indeks untuk tabel `tbl_dt_absen`

--

ALTER TABLE `tbl_dt_absen` ADD PRIMARY KEY (`id_absen`);

--

-- Indeks untuk tabel `tbl_dt_dosen`

--

ALTER TABLE `tbl_dt_dosen` ADD PRIMARY KEY (`nidn`);

--

-- Indeks untuk tabel `tbl_dt_jadwal`

--

ALTER TABLE `tbl_dt_jadwal` ADD PRIMARY KEY (`id_jadwal`);

--

-- Indeks untuk tabel `tbl_dt_matkul`

--

ALTER TABLE `tbl_dt_matkul` ADD PRIMARY KEY (`kode_mk`);

--

-- Indeks untuk tabel `tbl_dt_mhs`

--

ALTER TABLE `tbl_dt_mhs` ADD PRIMARY KEY (`npm`);

--

-- Indeks untuk tabel `tbl_dt_qrc`

--

ALTER TABLE `tbl_dt_qrc` ADD PRIMARY KEY (`id_qr`);

--

-- Indeks untuk tabel `tbl_user`

--

ALTER TABLE `tbl_user` ADD PRIMARY KEY (`id_user`);

--

-- AUTO_INCREMENT untuk tabel yang dibuang

--

--

-- AUTO_INCREMENT untuk tabel `tabel_user`

--

ALTER TABLE
    `tabel_user` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 6;

--

-- AUTO_INCREMENT untuk tabel `tbl_dt_absen`

--

ALTER TABLE
    `tbl_dt_absen` MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 6;

--

-- AUTO_INCREMENT untuk tabel `tbl_dt_jadwal`

--

ALTER TABLE
    `tbl_dt_jadwal` MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

--

-- AUTO_INCREMENT untuk tabel `tbl_dt_qrc`

--

ALTER TABLE
    `tbl_dt_qrc` MODIFY `id_qr` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 4;

--

-- AUTO_INCREMENT untuk tabel `tbl_user`

--

ALTER TABLE
    `tbl_user` MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;