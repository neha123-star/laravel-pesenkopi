-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2020 pada 02.03
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesenkopi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bottle`
--

CREATE TABLE `bottle` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_bt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_bt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_bt` int(11) NOT NULL,
  `keterangan_bt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bottle`
--

INSERT INTO `bottle` (`id`, `nama_bt`, `gambar_bt`, `harga_bt`, `keterangan_bt`, `created_at`, `updated_at`) VALUES
(1, 'Kopi Creamy 1 L', '1605661028_creamy_1liter.jpg', 55, 'Kopi Creamy ukuran 1 Liter', NULL, NULL),
(2, 'Kopi Susu Creamy 500 ml', '1605743508_creamy_500ml.jpg', 37, 'Kopi susu creamy dengan ukuran 500 ml.', NULL, '2020-11-18 16:51:48'),
(3, 'Kopi Susu Strong 1 L', '1605743461_strong_1liter.jpg', 55, 'Kopi susu yang strong dengan ukuran 1 liter', NULL, NULL),
(4, 'Kopi Susu Strong 500 ml', '1605743570_strong_500ml.jpg', 36, 'Kopi susu strong dengan ukuan 500 mililiter', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `brownis`
--

CREATE TABLE `brownis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_br` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_br` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_br` int(11) NOT NULL,
  `keterangan_br` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `brownis`
--

INSERT INTO `brownis` (`id`, `nama_br`, `gambar_br`, `harga_br`, `keterangan_br`, `created_at`, `updated_at`) VALUES
(5, 'Brownis Waffle Coklat', '1605743665_brownis_waffle_coklat.jpg', 15, 'brownis dengan toping coklat diatasnya.', NULL, NULL),
(6, 'Brownis Waffle Coklat Keju', '1605744131_brownis_waffle_coklat_keju.jpg', 18, 'Bbrownis dengan toping coklat keju.', NULL, NULL),
(7, 'Brownis Waffle Kacang Keju', '1605744251_brownis_waffle_kacang_keju.jpg', 18, 'Brownis dengan toping kacang dan keju.', NULL, NULL),
(8, 'Brownis Waffle Keju', '1605744322_brownis_waffle_keju.jpg', 15, 'Brownis dengan toping keju di atasnya.', NULL, NULL),
(9, 'Brownis Waffle Milo', '1605744421_brownis_waffle_milo.jpg', 16, 'Brownis dengan toping susu milo diatasnya.', NULL, NULL),
(10, 'Brownis Waffle Oreo Creamcheese', '1605744500_brownis_waffle_oreo_creamcheese.jpg', 18, 'Brownis dengan toping orio dan chreamcheese diatasnya.', NULL, NULL),
(11, 'Brownis Waffle Original', '1605744569_brownis_waffle_original.jpg', 12, 'Brosnis waffle dengan toping susu putih.', NULL, NULL),
(12, 'Brownis Waffle Ovocrunchy', '1605744652_brownis_waffle_ovocrunchy.jpg', 18, 'Brownis dengan toping ovocrunchy di atasnya.', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `choco`
--

CREATE TABLE `choco` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_co` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_co` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_co` int(11) NOT NULL,
  `keterangan_co` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `choco`
--

INSERT INTO `choco` (`id`, `nama_co`, `gambar_co`, `harga_co`, `keterangan_co`, `created_at`, `updated_at`) VALUES
(2, 'Ice Chocobarry', '1605744825_chocoberry.jpg', 13, 'Ice chocobarry sengan perduan rasa coklat dan buah barry.', NULL, '2020-11-18 17:13:45'),
(3, 'Ice Chocolate', '1605743089_ice_chocolate.jpg', 10, 'Ice chocolate dengan rasa yang nikmat.', NULL, NULL),
(4, 'Hot Chocolate', '1605743201_hot_cocolate.jpg', 10, 'Hot chocolate dengan rasa yang nikmat.', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dalgona`
--

CREATE TABLE `dalgona` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_dg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_dg` int(11) NOT NULL,
  `keterangan_dg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dalgona`
--

INSERT INTO `dalgona` (`id`, `nama_dg`, `gambar_dg`, `harga_dg`, `keterangan_dg`, `created_at`, `updated_at`) VALUES
(2, 'Dalgona Coffe Oreo', '1605742834_dalgona_coffe_oreo.jpg', 13, 'Dalgona coffe dengan toping oreo.', NULL, NULL),
(3, 'Dalgona Millo', '1605742899_dalgona_millo.jpg', 13, 'Dalgona dengan rasa milo yang nikmat.', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kopiice`
--

CREATE TABLE `kopiice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_koice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_koice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_koice` int(11) NOT NULL,
  `keterangan_koice` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kopiice`
--

INSERT INTO `kopiice` (`id`, `nama_koice`, `gambar_koice`, `harga_koice`, `keterangan_koice`, `created_at`, `updated_at`) VALUES
(13, 'Ice Americano Peach', '1605739689_americano_peach.jpg', 13, 'Perpaduan kopi amerikano dengan rasa buah peach.', NULL, NULL),
(14, 'Ice Americano', '1605739786_ice_americano.jpg', 8, 'Rasa kopi yang mendominasi.', NULL, NULL),
(15, 'Hot Americano', '1605739870_hot_americano.jpg', 8, 'Kopi americano panas dengan rasa kopi yang full.', NULL, NULL),
(16, 'Ice Kopi Susu Caramel', '1605740053_ice_kopi_susu_carame.jpg', 10, 'Ice kopi susu dengan perpaduan karamel dilamnya.', NULL, NULL),
(17, 'Hot Kopi Susu Caramel', '1605740228_hot_kopi_susu_caremel.jpg', 10, 'Hot kopi susu dengan perpaduan rasa karamel.', NULL, NULL),
(18, 'Ice Kopi Susu Creamy', '1605740477_ice_kopi_susu_creamy.jpg', 10, 'Ice kopi susu dengan rasa yang creamy.', NULL, NULL),
(19, 'Hot Susu Creamy', '1605740584_hot_kopi_susu_creamy.jpg', 10, 'Hot kopi susu dengan rasa yang creamy', NULL, NULL),
(20, 'Ice Kopi Susu Peach', '1605740798_ice_kopi_susu_peach.jpg', 13, 'Ice kopi susu dengan perpaduan rasa buah peach.', NULL, NULL),
(21, 'Hot Kopi Susu Peach', '1605741133_hot_kopi_susu_peach.jpg', 13, 'Hot Kopi susu dengan perpaduan rasa buah peac.', NULL, NULL),
(22, 'Ice Kopi Susu stawbarry', '1605741497_ice_kopi_susu_strawberry.jpg', 13, 'Ice kopi susu dengan perpaduan rasa buah strawbarry.', NULL, NULL),
(23, 'Hot Kopi Susu Strawbarry', '1605741740_hot_kopi_susu_strawbarry.jpg', 13, 'Hot kopi susu dengan perpaduan rasa buah strawbarry.', NULL, NULL),
(24, 'Ice Kopi Susu Strong', '1605741845_ice_kopi_susu_strong.jpg', 10, 'Ice Kopi Susu dengan rasa kopi yang strong', NULL, NULL),
(25, 'Hot Kopi Susu Strong', '1605741951_hot_kopi_susu_strong.jpg', 10, 'Hot kopi susu dengan rasa kopi yang strong.', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_03_154715_create_kopiices_table', 2),
(5, '2020_11_04_031727_create_brownis_table', 3),
(6, '2020_11_04_034303_create_brownis_table', 4),
(7, '2020_11_04_041906_create_brownis_table', 5),
(8, '2020_11_17_083438_create_brownis_table', 6),
(9, '2020_11_17_084128_create_brownis_table', 7),
(10, '2020_11_17_102701_create_pancongs_table', 8),
(11, '2020_11_17_123128_create_teas_table', 9),
(12, '2020_11_17_123245_create_dalgonas_table', 9),
(13, '2020_11_17_123316_create_chocos_table', 9),
(14, '2020_11_17_123352_create_bottles_table', 9),
(15, '2020_11_17_163750_create_bottles_table', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pancong`
--

CREATE TABLE `pancong` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_pc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_pc` int(11) NOT NULL,
  `keterangan_pc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tea`
--

CREATE TABLE `tea` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tea` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_tea` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_tea` int(11) NOT NULL,
  `keterangan_tea` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tea`
--

INSERT INTO `tea` (`id`, `nama_tea`, `gambar_tea`, `harga_tea`, `keterangan_tea`, `created_at`, `updated_at`) VALUES
(1, 'Ice Greantea', '1605742550_ice_greentea.jpg', 10, 'Ice greantea dengan rasa yang nikmat', NULL, NULL),
(2, 'Hot Greantea', '1605742617_hot_greentea.jpg', 10, 'Hot Greantea dengan rasa yang nikmat.', NULL, NULL),
(3, 'Ice Thaitea', '1605742668_ice_thaitea.jpg', 10, 'Ice thaitea dengan rasa yang nikmat.', NULL, NULL),
(4, 'Hot Thaitea', '1605742730_hot_thaitea.jpg', 10, 'Hot tahitea dengan rasa yang nikmat.', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Neha Admin', 'neharosma200@gmail.com', NULL, 1, '$2y$10$sePFEtI8JorO/ZyD5iZFteT/jDMn4fyWs3Svfuhw/sEuYfhWnPgS.', NULL, '2020-11-03 08:32:57', '2020-11-03 08:32:57'),
(2, 'Rosma', 'neharosma225@gmail.com', NULL, NULL, '$2y$10$ri2PMr6DOk4/IE4wnvQzHuj52A1xncJVk1D4ilkflv/k3xFrF3Wby', NULL, '2020-11-03 17:55:01', '2020-11-03 17:55:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bottle`
--
ALTER TABLE `bottle`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `brownis`
--
ALTER TABLE `brownis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `choco`
--
ALTER TABLE `choco`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dalgona`
--
ALTER TABLE `dalgona`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kopiice`
--
ALTER TABLE `kopiice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pancong`
--
ALTER TABLE `pancong`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `tea`
--
ALTER TABLE `tea`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bottle`
--
ALTER TABLE `bottle`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `brownis`
--
ALTER TABLE `brownis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `choco`
--
ALTER TABLE `choco`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dalgona`
--
ALTER TABLE `dalgona`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kopiice`
--
ALTER TABLE `kopiice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pancong`
--
ALTER TABLE `pancong`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tea`
--
ALTER TABLE `tea`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
