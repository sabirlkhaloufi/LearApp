-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 03:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_08_27_161958_create-operateurs-table', 1),
(6, '2022_08_27_163605_create-zones-table', 1),
(7, '2022_08_27_180517_create-teamleaders-table', 1),
(8, '2022_08_27_181804_create-seniors-table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `operateurs`
--

CREATE TABLE `operateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Poste` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Equipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_zone` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `time` time NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `operateurs`
--

INSERT INTO `operateurs` (`id`, `nom`, `prenom`, `Matricule`, `Poste`, `Equipe`, `fk_zone`, `date`, `time`, `code`) VALUES
(20, 'sabir', 'sabir', '123', '1', '1', 3, '2022-08-30', '15:05:06', 'code1'),
(22, 'said', 'said', '12', '2', '3', 4, '2022-08-31', '19:11:42', 'code2'),
(23, 'hanane', 'hanane', '12', '2', '3', 3, '2022-09-02', '16:28:52', 'code3'),
(24, 'aya', 'ayaa', 'jj', 'jj', '5', 5, '2022-08-31', '15:56:31', 'code4'),
(25, 'aziz', 'aziz', '23', '2', '3', 7, '2022-09-05', '00:35:01', 'code5'),
(26, 'samira', 'samira', '23', '2', '3', 6, '2022-09-05', '24:36:27', 'code6'),
(27, 'aiccha', 'aiccha', '23', '2', '3', 5, NULL, '00:00:00', 'code7');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seniors`
--

CREATE TABLE `seniors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Equipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seniors`
--

INSERT INTO `seniors` (`id`, `nom`, `Matricule`, `Equipe`, `prenom`, `email`, `password`) VALUES
(1, 'sabir', '123', '1', 'sabir', 'sabir@gmail.com', 'sabir123'),
(2, 'wassim', '12', '2', 'wassim', 'wassim', 'wassim123');

-- --------------------------------------------------------

--
-- Table structure for table `teamleaders`
--

CREATE TABLE `teamleaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Equipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_senior` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `time` time NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timeTeam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teamleaders`
--

INSERT INTO `teamleaders` (`id`, `nom`, `prenom`, `Matricule`, `Equipe`, `fk_senior`, `email`, `password`, `date`, `time`, `code`, `timeTeam`) VALUES
(1, 'aicha', 'aicha', 'A1234', '1', 2, 'aicha@gmail.com', 'aicha123', NULL, '00:00:00', 'aicha123', '00:00:00'),
(2, 'sara', 'sara', 'H345', '2', 1, 'sara@gmail.com', 'sara123', '2022-09-07', '02:56:35', 'sara123', '02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_teamLeader` bigint(20) UNSIGNED NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `code`, `designation`, `fk_teamLeader`, `time`) VALUES
(3, '1', 'Zone1', 1, '00:00:00'),
(4, '1', 'Zone2', 1, '21:23:00'),
(5, '1', 'Zone3', 2, '22:39:00'),
(6, '1', 'Zone4', 2, '23:33:00'),
(7, '1', 'Zone5', 1, '23:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operateurs`
--
ALTER TABLE `operateurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_zone` (`fk_zone`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `seniors`
--
ALTER TABLE `seniors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamleaders`
--
ALTER TABLE `teamleaders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-senior` (`fk_senior`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_teamLeader` (`fk_teamLeader`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `operateurs`
--
ALTER TABLE `operateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seniors`
--
ALTER TABLE `seniors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teamleaders`
--
ALTER TABLE `teamleaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `operateurs`
--
ALTER TABLE `operateurs`
  ADD CONSTRAINT `operateurs_ibfk_1` FOREIGN KEY (`fk_zone`) REFERENCES `zones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teamleaders`
--
ALTER TABLE `teamleaders`
  ADD CONSTRAINT `teamleaders_ibfk_2` FOREIGN KEY (`fk_senior`) REFERENCES `seniors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zones`
--
ALTER TABLE `zones`
  ADD CONSTRAINT `zones_ibfk_1` FOREIGN KEY (`fk_teamLeader`) REFERENCES `teamleaders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
