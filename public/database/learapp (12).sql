-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 01:29 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `justifications`
--

CREATE TABLE `justifications` (
  `id` int(11) NOT NULL,
  `justification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `justifications`
--

INSERT INTO `justifications` (`id`, `justification`) VALUES
(3, 'malade'),
(4, 'gharad');

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
  `Equipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_zone` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `time` time NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `justification` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_jus` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `operateurs`
--

INSERT INTO `operateurs` (`id`, `nom`, `prenom`, `Matricule`, `Equipe`, `fk_zone`, `date`, `time`, `code`, `justification`, `date_jus`) VALUES
(20, 'sabir', 'sabir', '123', '1', 3, '2022-08-30', '15:05:06', 'code1', '', NULL),
(23, 'hanane', 'hanane', '12', '3', 3, '2022-09-08', '14:02:13', 'code3', '', NULL),
(40, 'wassim', 'wassim', '237777', 'ff', 5, NULL, '00:00:00', '', 'malade', '2022-11-01'),
(41, 'ahmed', 'ahmex', '65', 'Y', 4, NULL, '00:00:00', '', '', NULL),
(42, 'nouhayla', 'nouhayla', 'nouha13', '4', 6, '2022-11-01', '08:44:26', 'code6', '', NULL);

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
-- Table structure for table `postes`
--

CREATE TABLE `postes` (
  `id_poste` bigint(20) UNSIGNED NOT NULL,
  `Poste` varchar(100) NOT NULL,
  `fk_oper` bigint(20) UNSIGNED DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postes`
--

INSERT INTO `postes` (`id_poste`, `Poste`, `fk_oper`, `date`) VALUES
(12, 'poste3', NULL, '2022-10-28'),
(17, 'poste4', 40, NULL),
(26, 'poste6', 42, '2022-11-01'),
(27, 'poste5', NULL, '2022-10-28');

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
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ROLE` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seniors`
--

INSERT INTO `seniors` (`id`, `nom`, `Matricule`, `Equipe`, `prenom`, `email`, `password`, `ROLE`) VALUES
(1, 'sabir', '12377', '155', 'sabir', 'sabir@gmail.com', 'sabir123', ''),
(2, 'wassim', '12', '2', 'wassim', 'wassim@gmail.com', 'wassim123', 'admin');

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
  `timeTeam` time NOT NULL,
  `justification` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_just` date DEFAULT NULL,
  `Poste` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teamleaders`
--

INSERT INTO `teamleaders` (`id`, `nom`, `prenom`, `Matricule`, `Equipe`, `fk_senior`, `email`, `password`, `date`, `time`, `code`, `timeTeam`, `justification`, `date_just`, `Poste`) VALUES
(1, 'aicha', 'aicha', 'A1234', '1', 2, 'aicha@gmail.com', 'aicha123', NULL, '00:00:00', 'aicha123', '00:00:00', '', NULL, 'DD'),
(2, 'sara', 'sara', 'H345', '2', 1, 'sara@gmail.com', 'sara123', '2022-09-07', '03:18:22', 'sara123', '02:00:00', 'gharad', '2022-09-12', '');

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
-- Indexes for table `justifications`
--
ALTER TABLE `justifications`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `postes`
--
ALTER TABLE `postes`
  ADD PRIMARY KEY (`id_poste`),
  ADD KEY `postes_ibfk_1` (`fk_oper`);

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
-- AUTO_INCREMENT for table `justifications`
--
ALTER TABLE `justifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `operateurs`
--
ALTER TABLE `operateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postes`
--
ALTER TABLE `postes`
  MODIFY `id_poste` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `seniors`
--
ALTER TABLE `seniors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teamleaders`
--
ALTER TABLE `teamleaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- Constraints for table `postes`
--
ALTER TABLE `postes`
  ADD CONSTRAINT `postes_ibfk_1` FOREIGN KEY (`fk_oper`) REFERENCES `operateurs` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

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
