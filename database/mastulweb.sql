-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 07:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mastulweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `childrens`
--

CREATE TABLE `childrens` (
  `id` int(10) UNSIGNED NOT NULL,
  `childManual_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_id` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '0=not_sponson',
  `child_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religious` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fat_income` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mot_income` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dream` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_food` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_place` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_sports` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_personality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_teacher` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobby` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stories` text COLLATE utf8mb4_unicode_ci,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `informar_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `informar_age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_education` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_education` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stoppingEdu_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stay_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `where_before` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `changing_residence` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `changing_hsePlan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_residence` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `study_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_school` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_chgSchool` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satisfactory_level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noticable_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parents_problem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parents_dream` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behaviour` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brilliancy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merit_score` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify_date` date DEFAULT NULL,
  `father_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_certificate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` int(11) NOT NULL DEFAULT '0' COMMENT '0=inactive, 1=active, 2=disable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `childrens`
--

INSERT INTO `childrens` (`id`, `childManual_id`, `sponsor_id`, `child_name`, `slug`, `gender`, `date_of_birth`, `age`, `class`, `school`, `religious`, `height`, `fat_income`, `mot_income`, `blood_group`, `dream`, `fav_color`, `fav_food`, `fav_place`, `fav_sports`, `fav_personality`, `fav_teacher`, `hobby`, `skills`, `stories`, `present_address`, `permanent_address`, `informar_name`, `informar_age`, `father_education`, `mother_education`, `stoppingEdu_reason`, `stay_time`, `where_before`, `changing_residence`, `changing_hsePlan`, `next_residence`, `house_type`, `study_time`, `pre_school`, `reason_chgSchool`, `satisfactory_level`, `noticable_reason`, `parents_problem`, `parents_dream`, `behaviour`, `brilliancy`, `attendency`, `merit_score`, `comment`, `verify_by`, `verify_date`, `father_file`, `mother_file`, `birth_certificate`, `active_status`, `created_at`, `updated_at`) VALUES
(1, 'ch002', 2, 'mohsin kobir', 'mohsin', 'male', '2019-06-18', '12', 'eight', 'jhaochor primary school', 'islam', NULL, '1200', '1200', NULL, NULL, NULL, NULL, 'zoo', NULL, NULL, NULL, NULL, NULL, NULL, 'jhaochor', 'jahochor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-07-06 23:46:34'),
(2, 'ch001', 1, 'Shahed afridi', 'Shahed-afridi', 'male', '2019-06-18', '6', 'six', 'dhamnodi primary school', 'islam', NULL, '1300', '500', NULL, NULL, 'yellow', NULL, '', NULL, NULL, NULL, NULL, NULL, 'empty', 'jhaochor', 'jahochor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-07-09 01:54:18'),
(6, '234242df', 0, '2234234dfsbvgdsgfsg', '2234234dfsbvgdsgfsg234242df', 'male', '2019-07-20', '2345345', 'dsgsdg', 'sdfgdsfg', 'Hindu', NULL, '63453', '34534', NULL, 'fdsf', 'Blue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'empty', 'Dhaka', 'dhaka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Christian', '2019-07-10', NULL, NULL, NULL, 1, '2019-07-07 22:10:19', '2019-07-08 01:41:02');

-- --------------------------------------------------------

--
-- Table structure for table `child_images`
--

CREATE TABLE `child_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `child_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=inaction, 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_images`
--

INSERT INTO `child_images` (`id`, `child_id`, `image`, `type`, `status`, `created_at`, `updated_at`) VALUES
(4, 2, '1560666275.png', 'child', 0, '2019-06-16 00:24:36', '2019-07-09 01:42:45'),
(5, 6, '1560667064.JPG', 'child', 1, '2019-06-16 00:37:46', '2019-07-08 01:44:45'),
(6, 1, '1560667160.JPG', 'child', 0, '2019-06-16 00:39:22', '2019-06-16 00:39:22'),
(7, 1, '1560667162.JPG', 'child', 0, '2019-06-16 00:39:24', '2019-06-16 00:39:24'),
(10, 2, '1560683408.JPG', 'child', 0, '2019-06-16 05:10:10', '2019-06-16 05:10:10'),
(20, 6, '1562559019.jpg', 'child', 0, '2019-07-07 22:10:19', '2019-07-08 01:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `costomer_id` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `costomer_id`, `month`, `transaction_id`) VALUES
(1, '00101', 'January', '09183128'),
(2, '00102', 'February', '092834092'),
(3, '00101', 'March', '2151354245'),
(4, '00103', 'June', '820842024'),
(5, '00101', 'may', '1231321098'),
(6, '00101', 'January', '123456346');

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` int(10) UNSIGNED NOT NULL,
  `child_id` int(10) UNSIGNED NOT NULL,
  `guardian_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`id`, `child_id`, `guardian_type`, `name`, `mobile_num`, `gaddress`, `created_at`, `updated_at`) VALUES
(1, 1, 'Father', 'mojibir hossain', '01740621231', 'jhaochor', '2019-06-16 05:05:12', '2019-06-16 05:05:12'),
(2, 2, 'Father', 'mojibir hossain', '01740621231', 'jhaochor', '2019-06-16 12:15:52', '2019-06-16 12:15:52'),
(3, 2, 'Mother', 'rohima', '01740621231', 'jhaochor', '2019-06-16 12:16:12', '2019-06-16 12:16:12'),
(4, 2, 'Relative', 'mojibir hossain', '01740621231', 'jhaochor', '2019-06-16 12:16:27', '2019-06-16 12:16:27'),
(5, 4, 'Father', 'mojibir hossain', '01740621231', 'jhaochor', '2019-06-16 12:36:25', '2019-06-16 12:36:25'),
(6, 4, 'Mother', 'nasima hossain', '12313445', 'jhaochor', '2019-06-16 12:37:08', '2019-06-16 12:37:08'),
(7, 6, 'Mother', 'mojibir hossain', '12313445', 'jhaochor', '2019-06-29 20:27:11', '2019-06-29 20:27:11'),
(8, 7, 'Mother', 'asdf', 'asdf', 'asdf', '2019-06-30 21:16:31', '2019-06-30 21:16:31'),
(9, 6, 'Father', 'webmastul', '01740621231', 'jhaochor', '2019-07-07 22:12:39', '2019-07-07 22:12:39'),
(10, 6, 'Relative', 'mojibir hossain', '01740621231', 'jhaochor', '2019-07-07 22:12:51', '2019-07-07 22:12:51');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_05_30_071254_create_siblings_table', 1),
(6, '2019_05_30_072904_create_child_images_table', 1),
(13, '2019_05_30_070049_create_guardians_table', 3),
(16, '2019_06_17_060916_create_social_communications_table', 5),
(17, '2019_06_17_073034_create_sponsor_images_table', 6),
(20, '2014_10_12_000000_create_users_table', 9),
(22, '2019_07_02_164315_create_monthly_payments_table', 10),
(24, '2019_07_07_042513_create_videos_table', 11),
(25, '2019_05_30_044902_create_childrens_table', 12),
(26, '2019_06_17_055047_create_sponsors_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `monthly_payments`
--

CREATE TABLE `monthly_payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `sponsor_id` int(11) NOT NULL,
  `payment_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monthly_payments`
--

INSERT INTO `monthly_payments` (`id`, `sponsor_id`, `payment_month`, `payment_method`, `transaction_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 'February', 'Rocket', '1286159255', 4, '2019-07-02 11:31:59', '2019-07-02 11:31:59'),
(2, 1, 'March', 'Select Payment Method', '1286159255', 5, '2019-07-02 13:06:03', '2019-07-02 13:06:03'),
(3, 2, 'February', 'Bkash', '1286159255', 2000, '2019-07-06 23:46:17', '2019-07-06 23:46:17'),
(4, 2, 'March', 'Bkash', '1286159255', 1000, '2019-07-06 23:52:06', '2019-07-06 23:52:06'),
(5, 2, 'February', 'Bkash', '1286159255', 2000, '2019-07-06 23:46:17', '2019-07-06 23:46:17'),
(6, 1, 'january', 'Bkash', '1286159255', 2000, '2019-07-06 23:46:17', '2019-07-06 23:46:17'),
(7, 1, 'January', 'Bkash', '12313', 1200, '2019-07-09 01:50:19', '2019-07-09 01:50:19'),
(8, 1, 'January', 'Bkash', '1286159255', 4, '2019-07-09 01:52:20', '2019-07-09 01:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siblings`
--

CREATE TABLE `siblings` (
  `id` int(10) UNSIGNED NOT NULL,
  `child_id` int(10) UNSIGNED NOT NULL,
  `sibling_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sibling_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sibling_age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sibling_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siblings`
--

INSERT INTO `siblings` (`id`, `child_id`, `sibling_type`, `sibling_name`, `sibling_age`, `sibling_class`, `created_at`, `updated_at`) VALUES
(1, 3, 'Brother', 'dip', '01796520143', NULL, '2019-06-16 06:18:14', '2019-06-16 06:18:14'),
(2, 3, 'Brother', 'five', NULL, '12', '2019-06-16 06:20:30', '2019-06-16 06:20:30'),
(3, 3, 'Brother', 'dip', '10', 'five', '2019-06-16 06:21:39', '2019-06-16 06:21:39'),
(4, 2, 'Brother', 'dip', '5', 'five', '2019-06-16 09:43:35', '2019-06-16 09:43:35'),
(5, 2, 'Sister', 'rohima', '12', 'five', '2019-06-16 09:47:30', '2019-06-16 09:47:30'),
(6, 2, 'Brother', 'raju vai', '5', 'five', '2019-06-16 09:55:38', '2019-06-16 09:55:38'),
(7, 2, 'Brother', 'dip', '1', 'five', '2019-06-16 09:59:26', '2019-06-16 09:59:26'),
(8, 2, 'Sister', 'tohmina', '12', 'seven', '2019-06-16 10:01:35', '2019-06-16 10:01:35'),
(9, 2, 'Brother', 'kamal', '3', 'nine', '2019-06-16 11:38:42', '2019-06-16 11:38:42'),
(10, 4, 'Brother', 'raju vai', '5', 'seven', '2019-06-16 12:44:14', '2019-06-16 12:44:14'),
(11, 4, 'Sister', 'rohima', '4', 'seven', '2019-06-16 12:44:32', '2019-06-16 12:44:32'),
(12, 6, 'Brother', 'raju vai', '7', 'five', '2019-06-29 20:27:31', '2019-06-29 20:27:31'),
(13, 7, 'Brother', 'dip', '4', 'seven', '2019-06-30 21:16:41', '2019-06-30 21:16:41'),
(14, 6, 'Brother', 'raju vai', '6', 'five', '2019-07-07 22:13:09', '2019-07-07 22:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `social_communications`
--

CREATE TABLE `social_communications` (
  `id` int(10) UNSIGNED NOT NULL,
  `sponsor_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_communications`
--

INSERT INTO `social_communications` (`id`, `sponsor_id`, `type`, `address`, `created_at`, `updated_at`) VALUES
(1, 3, 'mobile', '01740621231232', '2019-06-17 02:48:13', '2019-06-17 02:48:13'),
(2, 2, 'mobile', '0174062123123', '2019-06-17 02:49:54', '2019-06-17 02:49:54'),
(3, 1, 'personal_email', '45645634634552', '2019-06-17 02:51:32', '2019-06-17 02:51:32'),
(4, 4, 'mobile', '67867575567', '2019-06-29 20:30:43', '2019-06-29 20:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(10) UNSIGNED NOT NULL,
  `sponsorManual_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'individual, organization',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_of_residence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maritul_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recieve_communication` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` int(11) NOT NULL DEFAULT '0' COMMENT '0=didnot sponsor, 1=sponson, 2=disable',
  `number_of_child` int(11) DEFAULT NULL,
  `payment_intervel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preffered_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `sponsorManual_id`, `type`, `name`, `slug`, `gender`, `date_of_birth`, `age`, `nationality`, `country_of_residence`, `maritul_status`, `present_address`, `permanent_address`, `organization_name`, `organization_address`, `designation`, `recieve_communication`, `national_id`, `passport_id`, `active_status`, `number_of_child`, `payment_intervel`, `preffered_date`, `created_at`, `updated_at`) VALUES
(1, 'sp001', 'individual', 'asif reaz', 'asif_reaz', 'male', '2019-07-01', '32', 'Bangladesh', 'Bangladesh', 'unmariied', 'Bangladesh', 'Bangladesh', 'Bangladesh', 'Bangladesh', 'director', 'office', '345354263673', '354345346345', 1, 3, 'Quarterly', '123', NULL, '2019-07-09 01:50:19'),
(2, 'sp002', 'individual', 'ferdouse wahid ', 'ferdouse wahid', 'male', '2019-07-01', '32', 'Bangladesh', 'Bangladesh', 'unmariied', 'Bangladesh', 'Bangladesh', 'Bangladesh', 'Bangladesh', 'director', 'office', '345354263673', '354345346345', 1, 5, 'Quarterly', '5', NULL, '2019-07-06 23:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_images`
--

CREATE TABLE `sponsor_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `sponsor_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsor_images`
--

INSERT INTO `sponsor_images` (`id`, `sponsor_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '1560758333.JPG', '2019-06-17 01:58:55', '2019-06-17 01:58:55'),
(2, 2, '1560758738.JPG', '2019-06-17 02:05:40', '2019-06-17 02:05:40'),
(3, 3, '1560761047.JPG', '2019-06-17 02:44:10', '2019-06-17 02:44:10'),
(4, 4, '1561861727.jpg', '2019-06-29 20:28:47', '2019-06-29 20:28:47'),
(5, 5, '1561953120.jpg', '2019-06-30 21:52:00', '2019-06-30 21:52:00'),
(6, 10, '1561953968.jpg', '2019-06-30 22:06:08', '2019-06-30 22:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Asif Reaz', 'asifreaz@gmail.com', 'super_admin', NULL, '$2y$10$9JDqfWoXyl3pJdi2dsxnA.DQCSrOM1Q6BV.wnLyu9f1IMrvHdJSj6', 'aKH2NIsPocA7JcQbQoeKQxIWKqoQIXirO8zFIVPuZdnDWuwO1AekFTKdWR7q', '2019-07-02 09:41:24', '2019-07-02 09:41:24'),
(2, 'mastul foundation', 'mastul@gmail.com', 'admin', NULL, '$2y$10$zxMtnllkT4Mcjny2t2618emuOBFxJATm1DA7ZG5861qcX8HuDCppO', 'jO2QNx9PcnlrC7E20sfp1jaqCp8y5PwJXzcZBtuCjdF5SZ4keSVy0hLSvVWM', '2019-07-02 09:48:10', '2019-07-02 09:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `foreign_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'child,sponsor,childGift',
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `foreign_id`, `type`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 'child', 'https://www.youtube.com/watch?v=8u_YpW9sCJs', 1, '2019-07-07 22:10:19', '2019-07-08 02:30:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `childrens`
--
ALTER TABLE `childrens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_images`
--
ALTER TABLE `child_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardians`
--
ALTER TABLE `guardians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_payments`
--
ALTER TABLE `monthly_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `siblings`
--
ALTER TABLE `siblings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_communications`
--
ALTER TABLE `social_communications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor_images`
--
ALTER TABLE `sponsor_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `childrens`
--
ALTER TABLE `childrens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `child_images`
--
ALTER TABLE `child_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `monthly_payments`
--
ALTER TABLE `monthly_payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `siblings`
--
ALTER TABLE `siblings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `social_communications`
--
ALTER TABLE `social_communications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sponsor_images`
--
ALTER TABLE `sponsor_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
