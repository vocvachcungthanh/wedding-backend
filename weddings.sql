-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 30, 2023 at 01:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weddings`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link_img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `link_img`, `link`, `status`, `created_at`, `updated_at`) VALUES
(13, 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c41af6995aa422005fdd/small.jpg', '#', 1, '2023-06-04 07:56:08', NULL),
(14, 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c40c38a0e7aeb2001efb/small.jpg', '#', 1, '2023-06-04 07:56:08', NULL),
(15, 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c3e0d2fd0e8be50a85a2/small.jpg', '#', 1, '2023-06-04 07:56:08', NULL),
(16, 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c4f07a8359b9410a40f7/small.jpg', '#', 1, '2023-06-04 07:56:08', NULL),
(17, 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c5021dc13e77680f5041/small.jpg', '#', 1, '2023-06-04 07:56:08', NULL),
(18, 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c4457a8359b9410a40f5/large.jpg', '#', 1, '2023-06-04 07:56:08', NULL),
(19, 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6471e9b74afa858cd40094f0/small.jpg', '#', 1, '2023-06-04 07:56:08', NULL),
(20, 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c5264982b7db2c090170/small.jpg', '#', 1, '2023-06-04 07:56:08', NULL),
(21, 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c44d3908ec80de0a0fc8/large.jpg', '#', 1, '2023-06-04 07:56:08', NULL),
(22, 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c45ed2fd0e8be50a85a3/large.jpg', '#', 1, '2023-06-04 07:56:08', NULL),
(23, 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c43f0b30c67cf90be238/large.jpg', '#', 1, '2023-06-04 07:56:08', NULL),
(24, 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c3d5fa4cae68ac011c16/large.jpg', '#', 1, '2023-06-04 07:56:08', NULL),
(25, 'https://cdn.biihappy.com/ziiweb/website/64841f18d272c8eac105856b/galleries/64842d36d272c8eac1058573/large.jpg', '#', 1, '2023-06-12 07:25:05', '2023-06-12 07:25:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `link`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Cặp đôi', '#couple', '', 1, '2023-06-04 01:11:19', NULL),
(6, 'Sự kiện', '#wedding', '', 1, '2023-06-04 01:11:19', NULL),
(7, 'Album cưới', '#album', '', 1, '2023-06-04 01:11:19', NULL),
(8, 'Lời chúc', '#congratulation', '', 1, '2023-06-04 01:11:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_02_161331_create_menus_table', 2),
(6, '2023_06_04_125031_create_sliders_table', 3),
(7, '2023_06_04_143345_create_albums_table', 4),
(9, '2023_06_05_161307_create_settings_table', 5),
(10, '2023_06_12_024717_create_token_users_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brides_name` varchar(255) NOT NULL,
  `grooms_name` varchar(255) NOT NULL,
  `address_home_brides` varchar(255) NOT NULL,
  `address_home_grooms_name` varchar(255) NOT NULL,
  `map_brides` varchar(255) NOT NULL,
  `map_grooms` varchar(255) NOT NULL,
  `time_wedding` varchar(255) NOT NULL,
  `facebook_brides` varchar(255) NOT NULL,
  `facebook_grooms` varchar(255) NOT NULL,
  `instagram_brides` varchar(255) NOT NULL,
  `instagram_grooms` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `brides_name`, `grooms_name`, `address_home_brides`, `address_home_grooms_name`, `map_brides`, `map_grooms`, `time_wedding`, `facebook_brides`, `facebook_grooms`, `instagram_brides`, `instagram_grooms`, `created_at`, `updated_at`) VALUES
(1, 'Thủy Tiên', 'Hữu Thành', 'Thôn Thạch - Thạch xá -Thạch Thất - Hà Nội', '199 - Thôn 4 - Hương Ngải - Thạch Thất - Hà Nội', 'https://www.google.com/maps/place/21%C2%B003\'17.4%22N+105%C2%B036\'05.9%22E/@21.0548333,105.6016389,539m/data=!3m2!1e3!4b1!4m4!3m3!8m2!3d21.0548333!4d105.6016389?entry=ttu', 'https://www.google.com/maps/place/21%C2%B003\'17.4%22N+105%C2%B036\'05.9%22E/@21.0548333,105.6016389,539m/data=!3m2!1e3!4b1!4m4!3m3!8m2!3d21.0548333!4d105.6016389?entry=ttu', '03/12/2023', 'https://www.facebook.com/profile.php?id=100088781295596', 'https://www.facebook.com/vocvachcungthanh', 'https://www.instagram.com/thanh_dev/', 'https://www.instagram.com/thanh_dev/', '2023-06-05 09:51:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link_img` text NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `link_img`, `link`, `status`, `created_at`, `updated_at`) VALUES
(94, 'https://icdn.dantri.com.vn/thumb_w/660/2021/07/02/ngam-nhung-hot-girl-tren-duong-dua-bikini-nong-hon-thoi-tiet-ngay-hedocx-1625232725003.jpeg', 'https://www.facebook.com/vocvachcungthanh', 1, '2023-06-25 02:45:49', '2023-06-28 12:11:34'),
(95, 'https://icdn.dantri.com.vn/thumb_w/660/2021/07/02/ngam-nhung-hot-girl-tren-duong-dua-bikini-nong-hon-thoi-tiet-ngay-hedocx-1625232724702.jpeg', 'sdf', 0, '2023-06-25 02:52:09', '2023-06-28 12:10:48'),
(104, 'https://cdn.24h.com.vn/upload/3-2021/images/2021-08-22/11-1629624454-771-width650height650.jpg', 'sdfasd', 0, '2023-06-26 09:59:11', '2023-06-28 12:11:07'),
(105, 'https://cdn.24h.com.vn/upload/3-2021/images/2021-08-22/12-1629624465-627-width650height650.jpg', 'z', 1, '2023-06-26 09:59:36', '2023-06-28 12:11:39'),
(106, 'https://icdn.dantri.com.vn/2021/06/27/abc-1624782299577.jpg', 'https://dantri.com.vn/nhip-song-tre/hot-girl-goi-cam-yeu-khong-can-chu-cap-phot-lo-loi-ga-gam-anh-khoa-than-20210627164545156.htm', 1, '2023-06-26 10:10:01', '2023-06-28 12:11:35'),
(110, 'https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2021/05/hung-mau-bikini-trong-suot-sieu-nho13.jpeg', 'sdfasd', 1, '2023-06-26 10:17:20', '2023-06-28 12:11:31'),
(113, 'https://kenh14cdn.com/thumb_w/660/203336854389633024/2021/10/26/photo-1-16352181684421002314578.jpg', NULL, 1, '2023-06-26 10:21:23', '2023-06-28 09:27:55'),
(118, 'https://q6.edu.vn/anh-nguoi-dep-mac-bikini/imager_11_25132_700.jpg', NULL, 1, '2023-06-28 11:46:30', '2023-06-28 12:11:29'),
(119, 'https://q6.edu.vn/anh-nguoi-dep-mac-bikini/imager_33_25132_700.jpg', NULL, 1, '2023-06-28 11:47:17', '2023-06-28 12:11:36'),
(120, 'https://q6.edu.vn/anh-nguoi-dep-mac-bikini/imager_34_25132_700.jpg', NULL, 1, '2023-06-28 11:50:54', '2023-06-28 12:11:37'),
(121, 'https://q6.edu.vn/anh-nguoi-dep-mac-bikini/imager_37_25132_700.jpg', NULL, 1, '2023-06-28 11:53:38', '2023-06-28 12:11:26'),
(122, 'https://3.bp.blogspot.com/-TJmpKVGe0TU/WyczZ3NH_zI/AAAAAAAAA7U/nzp34VnCYToLuwK4SwshJciUfTe_UNT1QCLcBGAs/s1600/ao-tam-mau-nude-mong-tang-nhin-nhu-khong-dang-hot-tai-chau-10.jpg', NULL, 1, '2023-06-28 11:56:22', '2023-06-28 12:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `token_users`
--

CREATE TABLE `token_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) NOT NULL,
  `refresh_token` varchar(255) NOT NULL,
  `token_expired` datetime NOT NULL,
  `refresh_token_expired` datetime NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `token_users`
--

INSERT INTO `token_users` (`id`, `token`, `refresh_token`, `token_expired`, `refresh_token_expired`, `user_id`, `created_at`, `updated_at`) VALUES
(55, 'MBlI4D8M2Krfr7nNmc5ptyp4Sefmab1wfLLkaV6R', 'weJzM8Dx0Q4AcxrUzpV1AeAJPAOMsvhIl1rNGtLR', '2023-07-26 00:23:44', '2024-06-20 00:23:44', 1, '2023-06-25 17:23:44', '2023-06-25 17:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `login_at` timestamp NULL DEFAULT NULL,
  `change_password_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `username`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `login_at`, `change_password_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'admin', 'Nguyễn Hữu Thành', 'vocvachcungthanh@gmail.com', NULL, '$2y$10$PqR01jFKZ9hK5rdGlmy12uwU8jmk8fw3L/R7ARuddFSmgbdcpmNpK', NULL, NULL, NULL, '2023-06-11 20:39:46', '2023-06-11 20:39:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token_users`
--
ALTER TABLE `token_users`
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
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `token_users`
--
ALTER TABLE `token_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
