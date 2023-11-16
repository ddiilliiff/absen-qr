-- phpMyAdmin SQL Dump

-- version 5.2.1

-- https://www.phpmyadmin.net/

--

-- Host: localhost:3306

-- Generation Time: Oct 27, 2023 at 04:04 PM

-- Server version: 8.0.30

-- PHP Version: 8.2.1

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

-- Table structure for table `tabel_user`

--

CREATE TABLE
    `tabel_user` (
        `id` int NOT NULL,
        `username` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
        `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
        `role` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `tabel_user`

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
        '$2y$10$0ePPVsDeZk.4H4IWZf1GRuicByyO7wN63snUMF1Pk4JLYXAAJn0aW',
        '1'
    ), (
        2,
        'dosen1',
        '$2y$10$ZlsKwYGCd0PhFqdwSmrmmeBjb2n9itpHahwkbW.pS5xPNXiNipChO',
        '2'
    ), (
        3,
        '18411064',
        '$2y$10$ZaZ8pVRU.d81dr3OqKeA5e7bB0qc69iF9BvCm8tGJKwsh8m6MlXNq',
        '3'
    );

-- --------------------------------------------------------

--

-- Table structure for table `tbl_dt_dosen`

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

-- Dumping data for table `tbl_dt_dosen`

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
        '1111',
        'fff',
        'sss',
        '2023-10-25',
        'k',
        'damar@gmail.com'
    ), (
        '1234567',
        'Pri Utomo Damar Agung, S.Kom',
        'Sentani',
        '2000-03-10',
        'Laki-laki',
        'massagung52@gmail.com'
    ), (
        '124322',
        'Ziko Salasassss, S.Kom',
        'Jayapura111',
        '1999-10-22',
        'Laki-laki',
        'ziko@gmail.com'
    ), (
        '998877779',
        'Dilif Makalalag, S.Kom',
        'Batakan',
        '2000-05-28',
        'Laki-laki',
        'dilif@gmail.com'
    );

-- --------------------------------------------------------

--

-- Table structure for table `tbl_dt_jadwal`

--

CREATE TABLE
    `tbl_dt_jadwal` (
        `id_jadwal` int NOT NULL,
        `kode_mk` int DEFAULT NULL,
        `nidn` int DEFAULT NULL,
        `jam` date DEFAULT NULL,
        `ruangan` varchar(4) DEFAULT NULL,
        `kelas` varchar(4) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `tbl_dt_jadwal`

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
        1111,
        22222,
        '0000-00-00',
        'H1',
        'A'
    );

-- --------------------------------------------------------

--

-- Table structure for table `tbl_dt_matkul`

--

CREATE TABLE
    `tbl_dt_matkul` (
        `kode_mk` varchar(15) NOT NULL,
        `mata_kuliah` varchar(128) DEFAULT NULL,
        `sks` int DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `tbl_dt_matkul`

--

INSERT INTO
    `tbl_dt_matkul` (
        `kode_mk`,
        `mata_kuliah`,
        `sks`
    )
VALUES (
        '1123',
        'Algoritma dan Pemrograman',
        3
    ), (
        '3456',
        'Sistem Pendukung Keputusan',
        3
    );

-- --------------------------------------------------------

--

-- Table structure for table `tbl_dt_mhs`

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

-- Dumping data for table `tbl_dt_mhs`

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
        '1234',
        'ddd',
        'ssss',
        '2023-10-02',
        'l',
        'dilif@gmail.com'
    ), (
        '19421003',
        'Damar',
        'Sentani',
        '2000-03-10',
        'Laki-Laki',
        'damar@gmail.com'
    );

-- --------------------------------------------------------

--

-- Table structure for table `tbl_user`

--

CREATE TABLE
    `tbl_user` (
        `id_user` int NOT NULL,
        `nama_user` varchar(128) DEFAULT NULL,
        `email` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
        `password` varchar(128) DEFAULT NULL,
        `level` int DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Dumping data for table `tbl_user`

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

-- Indexes for table `tabel_user`

--

ALTER TABLE `tabel_user` ADD PRIMARY KEY (`id`);

--

-- Indexes for table `tbl_dt_dosen`

--

ALTER TABLE `tbl_dt_dosen` ADD PRIMARY KEY (`nidn`);

--

-- Indexes for table `tbl_dt_jadwal`

--

ALTER TABLE `tbl_dt_jadwal` ADD PRIMARY KEY (`id_jadwal`);

--

-- Indexes for table `tbl_dt_matkul`

--

ALTER TABLE `tbl_dt_matkul` ADD PRIMARY KEY (`kode_mk`);

--

-- Indexes for table `tbl_dt_mhs`

--

ALTER TABLE `tbl_dt_mhs` ADD PRIMARY KEY (`npm`);

--

-- Indexes for table `tbl_user`

--

ALTER TABLE `tbl_user` ADD PRIMARY KEY (`id_user`);

--

-- AUTO_INCREMENT for dumped tables

--

--

-- AUTO_INCREMENT for table `tabel_user`

--

ALTER TABLE
    `tabel_user` MODIFY `id` int NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 4;

--

-- AUTO_INCREMENT for table `tbl_dt_jadwal`

--

ALTER TABLE
    `tbl_dt_jadwal` MODIFY `id_jadwal` int NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

--

-- AUTO_INCREMENT for table `tbl_user`

--

ALTER TABLE
    `tbl_user` MODIFY `id_user` int NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;