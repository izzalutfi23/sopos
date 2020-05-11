-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 03:43 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sopos`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabang_toko`
--

CREATE TABLE `cabang_toko` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_toko` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cabang_toko`
--

INSERT INTO `cabang_toko` (`id`, `nama_toko`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Toko Berkah Makmur 1', 'Jl. Japerejo-Banyurip Km. 04 Desa Mlagen, Kec. Pamotan, Kab. Rembang', '2020-03-16 18:00:00', '2020-05-02 04:37:48'),
(2, 'Toko Berkah Makmur 2', 'Jl. Imam Bonjol No.207, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131, Indonesia', '2020-05-04 08:13:08', '2020-05-08 07:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `id_karyawan` int(10) UNSIGNED NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_customer` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_kel` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama_customer`, `j_kel`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Rizki Noor', 'L', '089768765453', 'Cilacap', '2020-03-25 07:33:58', '2020-03-25 07:33:58'),
(3, 'Muhammad Izza Lutfi', 'L', '085210539260', 'Desa Mlagen, Kec. Pamotan, Kab. Rembang', '2020-03-25 08:00:40', '2020-03-25 08:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_cabang` int(10) UNSIGNED NOT NULL,
  `nama_karyawan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_kel` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `id_user`, `id_cabang`, `nama_karyawan`, `j_kel`, `no_hp`, `alamat`, `foto`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Christina Peri', 'P', '085387656785', 'Bulustalan IV', 'imground2.jpg', '2020-03-16 21:00:00', '2020-05-05 01:01:21'),
(4, 3, 1, 'Lucky Arif R', 'L', '089787656545', 'Kota Purwodadi', 'imground3.jpg', '2020-05-25 17:00:00', '2020-05-05 17:00:00'),
(7, 6, 2, 'Rizki Noor Ichwanuddin', 'L', '098765987', 'Cilacap', 'badminton.jpg', '2020-05-04 07:55:51', '2020-05-04 08:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Makanan Ringan', '2020-03-25 08:05:46', '2020-03-25 08:13:36'),
(2, 'Bahan Pokok', '2020-03-25 08:11:01', '2020-03-25 08:11:01'),
(3, 'Test', '2020-03-26 08:31:11', '2020-03-26 08:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_03_12_123736_create_supplier_table', 2),
(4, '2020_03_12_124213_create_customer_table', 3),
(5, '2020_03_12_124603_create_kategori_table', 4),
(6, '2020_03_12_124836_create_unit_table', 5),
(7, '2020_03_12_125044_create_cabang_toko_table', 6),
(8, '2020_03_12_125342_create_karyawan_table', 7),
(9, '2020_03_12_155634_create_produk_table', 8),
(10, '2020_03_12_160124_create_stokin_table', 9),
(11, '2020_03_12_160500_create_stockout_table', 10),
(12, '2020_03_12_160758_create_cart_table', 11),
(13, '2020_03_12_161010_create_penjualan_table', 12),
(14, '2020_03_12_162640_create_detail_penjualan_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cabang` int(10) UNSIGNED NOT NULL,
  `id_karyawan` int(10) UNSIGNED NOT NULL,
  `customer` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faktur` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(10) UNSIGNED NOT NULL,
  `diskon` int(10) UNSIGNED NOT NULL,
  `total_akhir` int(10) UNSIGNED NOT NULL,
  `bayar` int(10) NOT NULL,
  `kembalian` int(10) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `item` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `id_cabang`, `id_karyawan`, `customer`, `faktur`, `total`, `diskon`, `total_akhir`, `bayar`, `kembalian`, `note`, `item`, `created_at`, `updated_at`) VALUES
(23, 1, 4, 'Umum', 'TRX110520200001', 11000, 0, 11000, 15000, 4000, NULL, '[{\"nama_produk\":\"Beras\",\"harga\":11000,\"qty\":1}]', '2020-05-11 04:37:47', '2020-05-11 04:37:47'),
(24, 1, 4, 'Umum', 'TRX1105202000024', 23000, 0, 23000, 23000, 0, NULL, '[{\"nama_produk\":\"Buku\",\"harga\":23000,\"qty\":1}]', '2020-05-11 06:00:54', '2020-05-11 06:00:54'),
(25, 1, 4, 'Umum', 'TRX1105202000025', 11000, 0, 11000, 11000, 0, NULL, '[{\"nama_produk\":\"Beras\",\"harga\":11000,\"qty\":1}]', '2020-05-11 06:01:19', '2020-05-11 06:01:19'),
(26, 1, 4, 'Umum', 'TRX1105202000026', 12000, 0, 12000, 15000, 3000, NULL, '[{\"nama_produk\":\"Telur\",\"harga\":12000,\"qty\":1}]', '2020-05-11 06:02:07', '2020-05-11 06:02:07'),
(27, 1, 4, 'Umum', 'TRX1105202000027', 15000, 0, 15000, 15000, 0, NULL, '[{\"nama_produk\":\"Minyak Goreng\",\"harga\":15000,\"qty\":1}]', '2020-05-11 06:12:47', '2020-05-11 06:12:47'),
(28, 1, 4, 'Umum', 'TRX1105202000028', 58000, 0, 58000, 60000, 2000, NULL, '[{\"nama_produk\":\"Buku\",\"harga\":23000,\"qty\":1},{\"nama_produk\":\"Telur\",\"harga\":12000,\"qty\":2},{\"nama_produk\":\"Beras\",\"harga\":11000,\"qty\":1}]', '2020-05-11 06:15:57', '2020-05-11 06:15:57'),
(29, 2, 7, 'Umum', 'TRX1105202000029', 75000, 0, 75000, 100000, 25000, NULL, '[{\"nama_produk\":\"Minyak Goreng\",\"harga\":15000,\"qty\":1},{\"nama_produk\":\"Telur\",\"harga\":12000,\"qty\":5}]', '2020-05-11 06:23:41', '2020-05-11 06:23:41'),
(30, 2, 7, 'Umum', 'TRX1105202000030', 11000, 0, 11000, 12000, 1000, NULL, '[{\"nama_produk\":\"Beras\",\"harga\":11000,\"qty\":1}]', '2020-05-11 06:27:21', '2020-05-11 06:27:21'),
(31, 2, 7, 'Umum', 'TRX1105202000031', 11000, 0, 11000, 15000, 4000, NULL, '[{\"nama_produk\":\"Beras\",\"harga\":11000,\"qty\":1}]', '2020-05-11 06:41:37', '2020-05-11 06:41:37'),
(32, 2, 7, 'Umum', 'TRX1105202000032', 15000, 0, 15000, 15000, 0, NULL, '[{\"nama_produk\":\"Minyak Goreng\",\"harga\":15000,\"qty\":1}]', '2020-05-11 06:42:00', '2020-05-11 06:42:00'),
(33, 2, 7, 'Umum', 'TRX1105202000033', 23000, 0, 23000, 25000, 2000, NULL, '[{\"nama_produk\":\"Buku\",\"harga\":23000,\"qty\":1}]', '2020-05-11 06:42:32', '2020-05-11 06:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `id_unit` int(10) UNSIGNED NOT NULL,
  `kode_produk` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(10) UNSIGNED NOT NULL,
  `stok` int(10) UNSIGNED NOT NULL,
  `diskon` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_kategori`, `id_unit`, `kode_produk`, `nama_produk`, `harga`, `stok`, `diskon`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '4567', 'Buku', 23000, 7, 0, '2020-03-26 08:50:52', '2020-05-11 06:42:24'),
(2, 2, 1, '3456789', 'Beras', 11000, 6, 0, '2020-03-26 08:57:26', '2020-05-11 06:41:29'),
(3, 3, 3, '4356789', 'Minyak Goreng', 15000, 7, 0, '2020-03-26 09:04:55', '2020-05-11 06:41:51'),
(4, 1, 1, '3456789', 'Telur', 12000, 3, 0, '2020-04-30 03:53:33', '2020-05-11 06:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `stockout`
--

CREATE TABLE `stockout` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stokin`
--

CREATE TABLE `stokin` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `id_supplier` int(10) UNSIGNED NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stokin`
--

INSERT INTO `stokin` (`id`, `id_produk`, `id_supplier`, `qty`, `foto`, `created_at`, `updated_at`) VALUES
(9, 2, 3, 4, NULL, '2020-04-08 05:48:20', '2020-04-08 05:48:20'),
(16, 1, 2, 7, NULL, '2020-05-02 04:36:30', '2020-05-02 04:36:30'),
(17, 2, 1, 7, NULL, '2020-05-02 04:44:32', '2020-05-02 04:44:32'),
(18, 3, 1, 1, NULL, '2020-05-10 06:50:49', '2020-05-10 06:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_suplier` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `nama_suplier`, `no_hp`, `alamat`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Qota', '089768765675', 'Desa Mlagen', 'Bos Rokok', '2020-03-21 02:27:27', '2020-03-21 02:27:27'),
(2, 'Rizky Noor I', '085647876342', 'Kota Cilacap', 'Pemilik Toko Elektronik', '2020-03-21 02:32:06', '2020-03-21 02:32:06'),
(3, 'Luki', '087867656543', 'Purwodadi', 'Pemilik Toko kelontong', '2020-03-22 02:46:37', '2020-03-21 05:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_unit` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `nama_unit`, `created_at`, `updated_at`) VALUES
(1, 'Kg', '2020-03-25 08:28:47', '2020-03-25 08:28:47'),
(2, 'Pcs', '2020-03-25 08:32:57', '2020-03-25 08:32:57'),
(3, 'Liter', '2020-03-25 08:33:08', '2020-03-25 08:33:08'),
(4, 'Buah', '2020-03-25 08:36:32', '2020-03-25 08:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `status`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '1', 'admin', 'admin@gmail.com', NULL, '$2y$10$nrnIPfe.6sw3gk4z7ihqCeWbu0CDvjVw6wZtaD/00wHZq7tAAPa0e', NULL, '2020-03-17 07:18:23', '2020-03-17 07:18:23'),
(3, 'kasir', '1', 'kasir', 'kasir@gmail.com', NULL, '$2y$10$3rVEgD57aAYo4Rc7DgEyVOxcGSHI0eD0nNJvS6EN/I4PWfZ.LuT6u', NULL, '2020-05-01 01:32:40', '2020-05-01 01:32:40'),
(4, 'admin', '1', 'izza', 'lutfi@gmail.com', NULL, '$2y$10$s2AXnyFdX9wchAojOhs/9uqOP4p5RNIqGS.eXq/ldS0LKy0JS0tly', NULL, '2020-05-04 07:27:55', '2020-05-04 07:27:55'),
(6, 'kasir', '1', 'rizki', 'noor@gmail.com', NULL, '$2y$10$3B2XkrA4HwYl9wpC3a0YJeLMADTABLH2i8H/9g0yZaqj5gWsge.DS', NULL, '2020-05-04 07:55:51', '2020-05-08 06:29:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabang_toko`
--
ALTER TABLE `cabang_toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_cabang` (`id_cabang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cabang` (`id_cabang`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_unit` (`id_unit`);

--
-- Indexes for table `stockout`
--
ALTER TABLE `stockout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `stokin`
--
ALTER TABLE `stokin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabang_toko`
--
ALTER TABLE `cabang_toko`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stockout`
--
ALTER TABLE `stockout`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stokin`
--
ALTER TABLE `stokin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karyawan_ibfk_2` FOREIGN KEY (`id_cabang`) REFERENCES `cabang_toko` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_cabang`) REFERENCES `cabang_toko` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_ibfk_3` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stockout`
--
ALTER TABLE `stockout`
  ADD CONSTRAINT `stockout_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stokin`
--
ALTER TABLE `stokin`
  ADD CONSTRAINT `stokin_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stokin_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
