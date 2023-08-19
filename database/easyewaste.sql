-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2023 at 10:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easyewaste`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `order` int(11) NOT NULL DEFAULT 0,
  `title` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `uri` varchar(255) DEFAULT NULL,
  `permission` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `parent_id`, `order`, `title`, `icon`, `uri`, `permission`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Dashboard', 'fa-bar-chart', '/', NULL, NULL, NULL),
(2, 0, 2, 'Admin', 'fa-tasks', '', NULL, NULL, NULL),
(3, 2, 3, 'Users', 'fa-users', 'auth/users', NULL, NULL, NULL),
(4, 2, 4, 'Roles', 'fa-user', 'auth/roles', NULL, NULL, NULL),
(5, 2, 5, 'Permission', 'fa-ban', 'auth/permissions', NULL, NULL, NULL),
(6, 2, 6, 'Menu', 'fa-bars', 'auth/menu', NULL, NULL, NULL),
(7, 2, 7, 'Operation log', 'fa-history', 'auth/logs', NULL, NULL, NULL),
(8, 0, 0, 'Users', 'fa-user', '/users', NULL, '2023-08-18 12:22:32', '2023-08-18 12:22:32'),
(9, 0, 0, 'Orders', 'fa-archive', '/orders', NULL, '2023-08-18 12:23:06', '2023-08-18 12:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `admin_operation_log`
--

CREATE TABLE `admin_operation_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `method` varchar(10) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `input` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_operation_log`
--

INSERT INTO `admin_operation_log` (`id`, `user_id`, `path`, `method`, `ip`, `input`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-18 12:13:59', '2023-08-18 12:13:59'),
(2, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:14:05', '2023-08-18 12:14:05'),
(3, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:14:08', '2023-08-18 12:14:08'),
(4, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:14:40', '2023-08-18 12:14:40'),
(5, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-18 12:14:41', '2023-08-18 12:14:41'),
(6, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:14:47', '2023-08-18 12:14:47'),
(7, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:14:50', '2023-08-18 12:14:50'),
(8, 1, 'admin/auth/roles', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:14:51', '2023-08-18 12:14:51'),
(9, 1, 'admin/auth/permissions', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:14:52', '2023-08-18 12:14:52'),
(10, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:14:52', '2023-08-18 12:14:52'),
(11, 1, 'admin/auth/permissions', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:15:10', '2023-08-18 12:15:10'),
(12, 1, 'admin/auth/roles', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:15:10', '2023-08-18 12:15:10'),
(13, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:15:11', '2023-08-18 12:15:11'),
(14, 1, 'admin/auth/users', 'GET', '127.0.0.1', '[]', '2023-08-18 12:16:19', '2023-08-18 12:16:19'),
(15, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-18 12:16:32', '2023-08-18 12:16:32'),
(16, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:16:41', '2023-08-18 12:16:41'),
(17, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:16:44', '2023-08-18 12:16:44'),
(18, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-18 12:17:49', '2023-08-18 12:17:49'),
(19, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:17:53', '2023-08-18 12:17:53'),
(20, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:17:56', '2023-08-18 12:17:56'),
(21, 1, 'admin/auth/roles', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:17:59', '2023-08-18 12:17:59'),
(22, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:18:38', '2023-08-18 12:18:38'),
(23, 1, 'admin/auth/menu', 'POST', '127.0.0.1', '{\"parent_id\":\"0\",\"title\":\"Users\",\"icon\":\"fa-user\",\"uri\":\"\\/users\",\"roles\":[null],\"permission\":null,\"_token\":\"RzyY1CVFDMIYgtOqz57Y3Kl57fvNFy3GTtsZwtT5\"}', '2023-08-18 12:22:32', '2023-08-18 12:22:32'),
(24, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-08-18 12:22:33', '2023-08-18 12:22:33'),
(25, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:22:36', '2023-08-18 12:22:36'),
(26, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:22:43', '2023-08-18 12:22:43'),
(27, 1, 'admin/auth/menu', 'POST', '127.0.0.1', '{\"parent_id\":\"0\",\"title\":\"Orders\",\"icon\":\"fa-archive\",\"uri\":\"\\/orders\",\"roles\":[null],\"permission\":null,\"_token\":\"RzyY1CVFDMIYgtOqz57Y3Kl57fvNFy3GTtsZwtT5\"}', '2023-08-18 12:23:06', '2023-08-18 12:23:06'),
(28, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-08-18 12:23:06', '2023-08-18 12:23:06'),
(29, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:23:10', '2023-08-18 12:23:10'),
(30, 1, 'admin/auth/logout', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:23:57', '2023-08-18 12:23:57'),
(31, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-18 12:24:12', '2023-08-18 12:24:12'),
(32, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:24:19', '2023-08-18 12:24:19'),
(33, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:24:20', '2023-08-18 12:24:20'),
(34, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:24:38', '2023-08-18 12:24:38'),
(35, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:26:45', '2023-08-18 12:26:45'),
(36, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:26:46', '2023-08-18 12:26:46'),
(37, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:26:49', '2023-08-18 12:26:49'),
(38, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-18 12:30:16', '2023-08-18 12:30:16'),
(39, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:30:21', '2023-08-18 12:30:21'),
(40, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-18 12:30:34', '2023-08-18 12:30:34'),
(41, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-18 12:30:36', '2023-08-18 12:30:36'),
(42, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-18 12:30:50', '2023-08-18 12:30:50'),
(43, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-18 12:31:59', '2023-08-18 12:31:59'),
(44, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:32:01', '2023-08-18 12:32:01'),
(45, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:32:02', '2023-08-18 12:32:02'),
(46, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:32:05', '2023-08-18 12:32:05'),
(47, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-18 12:32:07', '2023-08-18 12:32:07'),
(48, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-18 12:32:43', '2023-08-18 12:32:43'),
(49, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-19 07:57:01', '2023-08-19 07:57:01'),
(50, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 07:57:10', '2023-08-19 07:57:10'),
(51, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 07:57:12', '2023-08-19 07:57:12'),
(52, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:01:13', '2023-08-19 08:01:13'),
(53, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:03:01', '2023-08-19 08:03:01'),
(54, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:05:19', '2023-08-19 08:05:19'),
(55, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:05:59', '2023-08-19 08:05:59'),
(56, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:06:02', '2023-08-19 08:06:02'),
(57, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-19 08:07:15', '2023-08-19 08:07:15'),
(58, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-19 08:07:41', '2023-08-19 08:07:41'),
(59, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-19 08:11:24', '2023-08-19 08:11:24'),
(60, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-19 08:13:52', '2023-08-19 08:13:52'),
(61, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:21:27', '2023-08-19 08:21:27'),
(62, 1, 'admin/auth/permissions', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:21:33', '2023-08-19 08:21:33'),
(63, 1, 'admin/auth/permissions/1/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:21:50', '2023-08-19 08:21:50'),
(64, 1, 'admin/auth/permissions', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:21:55', '2023-08-19 08:21:55'),
(65, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:22:15', '2023-08-19 08:22:15'),
(66, 1, 'admin/auth/users/create', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:22:30', '2023-08-19 08:22:30'),
(67, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:22:43', '2023-08-19 08:22:43'),
(68, 1, 'admin/auth/users/1/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:22:45', '2023-08-19 08:22:45'),
(69, 1, 'admin/auth/users/1', 'PUT', '127.0.0.1', '{\"username\":\"admin\",\"name\":\"Administrator\",\"password\":\"$2y$10$pPT7K1KIfB0QxlouAyGBbuQUKl4N6CfM2FuCgXv7PY\\/\\/ao4MKi96m\",\"password_confirmation\":\"$2y$10$pPT7K1KIfB0QxlouAyGBbuQUKl4N6CfM2FuCgXv7PY\\/\\/ao4MKi96m\",\"roles\":[\"1\",null],\"permissions\":[null],\"_token\":\"3FPAjIDbAcZ1edm0ue6VY2n9TWYLoZ5IOzKm0tcv\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/auth\\/users\"}', '2023-08-19 08:23:40', '2023-08-19 08:23:40'),
(70, 1, 'admin/auth/users/1/edit', 'GET', '127.0.0.1', '[]', '2023-08-19 08:23:40', '2023-08-19 08:23:40'),
(71, 1, 'admin/auth/setting', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:23:54', '2023-08-19 08:23:54'),
(72, 1, 'admin/auth/setting', 'GET', '127.0.0.1', '[]', '2023-08-19 08:25:42', '2023-08-19 08:25:42'),
(73, 1, 'admin/auth/users/1/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:25:44', '2023-08-19 08:25:44'),
(74, 1, 'admin/auth/users/1/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:25:46', '2023-08-19 08:25:46'),
(75, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:25:50', '2023-08-19 08:25:50'),
(76, 1, 'admin/auth/setting', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:25:55', '2023-08-19 08:25:55'),
(77, 1, 'admin/auth/setting', 'PUT', '127.0.0.1', '{\"name\":\"Administrator\",\"password\":\"$2y$10$pPT7K1KIfB0QxlouAyGBbuQUKl4N6CfM2FuCgXv7PY\\/\\/ao4MKi96m\",\"password_confirmation\":\"$2y$10$pPT7K1KIfB0QxlouAyGBbuQUKl4N6CfM2FuCgXv7PY\\/\\/ao4MKi96m\",\"_token\":\"3FPAjIDbAcZ1edm0ue6VY2n9TWYLoZ5IOzKm0tcv\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/users\"}', '2023-08-19 08:26:03', '2023-08-19 08:26:03'),
(78, 1, 'admin/auth/setting', 'GET', '127.0.0.1', '[]', '2023-08-19 08:26:03', '2023-08-19 08:26:03'),
(79, 1, 'admin/auth/setting', 'GET', '127.0.0.1', '[]', '2023-08-19 08:26:13', '2023-08-19 08:26:13'),
(80, 1, 'admin/auth/setting', 'GET', '127.0.0.1', '[]', '2023-08-19 08:27:38', '2023-08-19 08:27:38'),
(81, 1, 'admin/auth/setting', 'PUT', '127.0.0.1', '{\"name\":\"Administrator\",\"password\":\"$2y$10$pPT7K1KIfB0QxlouAyGBbuQUKl4N6CfM2FuCgXv7PY\\/\\/ao4MKi96m\",\"password_confirmation\":\"$2y$10$pPT7K1KIfB0QxlouAyGBbuQUKl4N6CfM2FuCgXv7PY\\/\\/ao4MKi96m\",\"_token\":\"3FPAjIDbAcZ1edm0ue6VY2n9TWYLoZ5IOzKm0tcv\",\"_method\":\"PUT\"}', '2023-08-19 08:27:59', '2023-08-19 08:27:59'),
(82, 1, 'admin/auth/setting', 'GET', '127.0.0.1', '[]', '2023-08-19 08:27:59', '2023-08-19 08:27:59'),
(83, 1, 'admin/auth/setting', 'GET', '127.0.0.1', '[]', '2023-08-19 08:28:45', '2023-08-19 08:28:45'),
(84, 1, 'admin/auth/setting', 'GET', '127.0.0.1', '[]', '2023-08-19 08:28:47', '2023-08-19 08:28:47'),
(85, 1, 'admin/auth/setting', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:32:02', '2023-08-19 08:32:02'),
(86, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:32:03', '2023-08-19 08:32:03'),
(87, 1, 'admin/auth/setting', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:32:10', '2023-08-19 08:32:10'),
(88, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:39:42', '2023-08-19 08:39:42'),
(89, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:39:43', '2023-08-19 08:39:43'),
(90, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:39:46', '2023-08-19 08:39:46'),
(91, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-19 08:39:59', '2023-08-19 08:39:59'),
(92, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-19 08:43:13', '2023-08-19 08:43:13'),
(93, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-19 08:46:06', '2023-08-19 08:46:06'),
(94, 1, 'admin/auth/setting', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:46:09', '2023-08-19 08:46:09'),
(95, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:46:11', '2023-08-19 08:46:11'),
(96, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:46:13', '2023-08-19 08:46:13'),
(97, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:46:14', '2023-08-19 08:46:14'),
(98, 1, 'admin/users', 'GET', '127.0.0.1', '[]', '2023-08-19 08:46:26', '2023-08-19 08:46:26'),
(99, 1, 'admin/users', 'GET', '127.0.0.1', '[]', '2023-08-19 08:47:57', '2023-08-19 08:47:57'),
(100, 1, 'admin/users', 'GET', '127.0.0.1', '[]', '2023-08-19 08:48:23', '2023-08-19 08:48:23'),
(101, 1, 'admin/users', 'GET', '127.0.0.1', '[]', '2023-08-19 08:50:28', '2023-08-19 08:50:28'),
(102, 1, 'admin/users', 'GET', '127.0.0.1', '[]', '2023-08-19 08:51:51', '2023-08-19 08:51:51'),
(103, 1, 'admin/users', 'GET', '127.0.0.1', '[]', '2023-08-19 08:51:57', '2023-08-19 08:51:57'),
(104, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:52:02', '2023-08-19 08:52:02'),
(105, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:52:04', '2023-08-19 08:52:04'),
(106, 1, 'admin/orders', 'GET', '127.0.0.1', '[]', '2023-08-19 08:52:57', '2023-08-19 08:52:57'),
(107, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:52:59', '2023-08-19 08:52:59'),
(108, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-19 08:53:40', '2023-08-19 08:53:40'),
(109, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:53:42', '2023-08-19 08:53:42'),
(110, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-19 08:54:13', '2023-08-19 08:54:13'),
(111, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-19 08:54:14', '2023-08-19 08:54:14'),
(112, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 08:54:16', '2023-08-19 08:54:16'),
(113, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-19 08:58:34', '2023-08-19 08:58:34'),
(114, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-19 09:02:10', '2023-08-19 09:02:10'),
(115, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 09:02:43', '2023-08-19 09:02:43'),
(116, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 09:02:44', '2023-08-19 09:02:44'),
(117, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 09:02:48', '2023-08-19 09:02:48'),
(118, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-19 09:07:06', '2023-08-19 09:07:06'),
(119, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 09:51:47', '2023-08-19 09:51:47'),
(120, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 09:51:49', '2023-08-19 09:51:49'),
(121, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 09:52:11', '2023-08-19 09:52:11'),
(122, 1, 'admin/auth/roles', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 09:52:22', '2023-08-19 09:52:22'),
(123, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 09:52:29', '2023-08-19 09:52:29'),
(124, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 09:52:34', '2023-08-19 09:52:34'),
(125, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 09:52:35', '2023-08-19 09:52:35'),
(126, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 09:52:37', '2023-08-19 09:52:37'),
(127, 1, 'admin/users', 'GET', '127.0.0.1', '[]', '2023-08-19 09:58:49', '2023-08-19 09:58:49'),
(128, 1, 'admin/users', 'GET', '127.0.0.1', '[]', '2023-08-19 09:58:50', '2023-08-19 09:58:50'),
(129, 1, 'admin/users', 'GET', '127.0.0.1', '[]', '2023-08-19 09:58:51', '2023-08-19 09:58:51'),
(130, 1, 'admin/users', 'GET', '127.0.0.1', '[]', '2023-08-19 09:58:51', '2023-08-19 09:58:51'),
(131, 1, 'admin/users', 'GET', '127.0.0.1', '[]', '2023-08-19 09:58:51', '2023-08-19 09:58:51'),
(132, 1, 'admin/users', 'GET', '127.0.0.1', '[]', '2023-08-19 09:58:51', '2023-08-19 09:58:51'),
(133, 1, 'admin/users', 'GET', '127.0.0.1', '[]', '2023-08-19 09:58:52', '2023-08-19 09:58:52'),
(134, 1, 'admin/auth/setting', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 09:58:55', '2023-08-19 09:58:55'),
(135, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 10:03:41', '2023-08-19 10:03:41'),
(136, 1, 'admin/auth/roles', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 10:03:49', '2023-08-19 10:03:49'),
(137, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 10:03:50', '2023-08-19 10:03:50'),
(138, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 10:09:42', '2023-08-19 10:09:42'),
(139, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-08-19 10:10:31', '2023-08-19 10:10:31'),
(140, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 13:39:20', '2023-08-19 13:39:20'),
(141, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 13:39:24', '2023-08-19 13:39:24'),
(142, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 14:40:34', '2023-08-19 14:40:34'),
(143, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 14:40:39', '2023-08-19 14:40:39'),
(144, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 14:40:52', '2023-08-19 14:40:52'),
(145, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 14:41:29', '2023-08-19 14:41:29'),
(146, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 14:41:31', '2023-08-19 14:41:31'),
(147, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 14:41:32', '2023-08-19 14:41:32'),
(148, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 14:41:32', '2023-08-19 14:41:32'),
(149, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-08-19 14:41:33', '2023-08-19 14:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `admin_permissions`
--

CREATE TABLE `admin_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `http_method` varchar(255) DEFAULT NULL,
  `http_path` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_permissions`
--

INSERT INTO `admin_permissions` (`id`, `name`, `slug`, `http_method`, `http_path`, `created_at`, `updated_at`) VALUES
(1, 'All permission', '*', '', '*', NULL, NULL),
(2, 'Dashboard', 'dashboard', 'GET', '/', NULL, NULL),
(3, 'Login', 'auth.login', '', '/auth/login\r\n/auth/logout', NULL, NULL),
(4, 'User setting', 'auth.setting', 'GET,PUT', '/auth/setting', NULL, NULL),
(5, 'Auth management', 'auth.management', '', '/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'administrator', '2023-08-18 12:13:33', '2023-08-18 12:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_menu`
--

CREATE TABLE `admin_role_menu` (
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_menu`
--

INSERT INTO `admin_role_menu` (`role_id`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_permissions`
--

CREATE TABLE `admin_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_permissions`
--

INSERT INTO `admin_role_permissions` (`role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_users`
--

CREATE TABLE `admin_role_users` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_users`
--

INSERT INTO `admin_role_users` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(190) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `name`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$pPT7K1KIfB0QxlouAyGBbuQUKl4N6CfM2FuCgXv7PY//ao4MKi96m', 'Administrator', 'images/Saadman_011201063.jpg', 'm0DBA1jrtCWHn1dIXnXneDDouyHoie2E4RgDRO5XbgT2m9tArtx6J9CtNcGm', '2023-08-18 12:13:32', '2023-08-19 08:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_permissions`
--

CREATE TABLE `admin_user_permissions` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `log_date` datetime NOT NULL,
  `table_name` varchar(50) DEFAULT NULL,
  `log_type` varchar(50) NOT NULL,
  `data` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, '2023_07_05_191027_create_admins_table', 2),
(8, '2020_11_20_100001_create_log_table', 4),
(9, '2023_07_08_191001_create_orders_table', 5),
(11, '2014_10_12_000000_create_users_table', 6),
(12, '2014_10_12_100000_create_password_reset_tokens_table', 6),
(13, '2014_10_12_100000_create_password_resets_table', 6),
(14, '2016_01_04_173148_create_admin_tables', 6),
(15, '2019_08_19_000000_create_failed_jobs_table', 6),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 6),
(17, '2023_07_08_192219_create_orders_table', 6),
(18, '2023_08_07_113855_add_qfd_to_orders_table', 7),
(20, '2023_08_07_114656_add_qfd_to_orders_table', 8),
(21, '2023_08_19_183348_create_q_f_d_s_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `productname` varchar(255) NOT NULL,
  `producttype` varchar(255) NOT NULL,
  `productamount` int(255) NOT NULL,
  `endproduct` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `productname`, `producttype`, `productamount`, `endproduct`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'keyboard', 'glass', 1, 'reuse', 'pending', '2023-08-04 01:02:16', '2023-08-04 01:02:16'),
(3, 2, 'monitor', 'glass', 2, 'recylce', 'pending', '2023-08-04 01:02:29', '2023-08-04 01:02:29'),
(13, 1, 'mouse', 'metal', 6, 'reduce', 'paid', '2023-08-17 14:23:48', '2023-08-17 14:35:07'),
(24, 2, 'lala', 'lala', 1, 'lala', 'pending', '2023-08-19 13:37:03', '2023-08-19 13:37:03'),
(25, 1, 'test', 'test', 2, 'test', 'pending', '2023-08-19 14:31:52', '2023-08-19 14:31:52'),
(26, 3, 'test', 'test', 1, 'test', 'paid', '2023-08-19 14:38:41', '2023-08-19 14:39:49');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `qfd`
--

CREATE TABLE `qfd` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cr1` varchar(100) NOT NULL,
  `crrank1` int(11) NOT NULL,
  `wastemanage1` int(11) NOT NULL,
  `wastemini1` int(11) NOT NULL,
  `wastecollect1` int(11) NOT NULL,
  `produra1` int(11) NOT NULL,
  `crrank2` int(11) NOT NULL,
  `wastemanage2` int(11) NOT NULL,
  `wastemini2` int(11) NOT NULL,
  `wastecollect2` int(11) NOT NULL,
  `produra2` int(11) NOT NULL,
  `crrank3` int(11) NOT NULL,
  `wastemanage3` int(11) NOT NULL,
  `wastemini3` int(11) NOT NULL,
  `wastecollect3` int(11) NOT NULL,
  `produra3` int(11) NOT NULL,
  `crrank4` int(11) NOT NULL,
  `wastemanage4` int(11) NOT NULL,
  `wastemini4` int(11) NOT NULL,
  `wastecollect4` int(11) NOT NULL,
  `produra4` int(11) NOT NULL,
  `crrank5` int(11) NOT NULL,
  `wastemanage5` int(11) NOT NULL,
  `wastemini5` int(11) NOT NULL,
  `wastecollect5` int(11) NOT NULL,
  `produra5` int(11) NOT NULL,
  `cr2` varchar(100) NOT NULL,
  `cr3` varchar(100) NOT NULL,
  `cr4` varchar(100) NOT NULL,
  `cr5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `q_f_d_s`
--

CREATE TABLE `q_f_d_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cr1` varchar(255) NOT NULL,
  `crrank1` int(11) NOT NULL,
  `wastemanage1` int(11) NOT NULL,
  `wastemini1` int(11) NOT NULL,
  `wastecollect1` int(11) NOT NULL,
  `produra1` int(11) NOT NULL,
  `cr2` varchar(255) NOT NULL,
  `crrank2` int(11) NOT NULL,
  `wastemanage2` int(11) NOT NULL,
  `wastemini2` int(11) NOT NULL,
  `wastecollect2` int(11) NOT NULL,
  `produra2` int(11) NOT NULL,
  `cr3` varchar(255) NOT NULL,
  `crrank3` int(11) NOT NULL,
  `wastemanage3` int(11) NOT NULL,
  `wastemini3` int(11) NOT NULL,
  `wastecollect3` int(11) NOT NULL,
  `produra3` int(11) NOT NULL,
  `cr4` varchar(255) NOT NULL,
  `crrank4` int(11) NOT NULL,
  `wastemanage4` int(11) NOT NULL,
  `wastemini4` int(11) NOT NULL,
  `wastecollect4` int(11) NOT NULL,
  `produra4` int(11) NOT NULL,
  `cr5` varchar(255) NOT NULL,
  `crrank5` int(11) NOT NULL,
  `wastemanage5` int(11) NOT NULL,
  `wastemini5` int(11) NOT NULL,
  `wastecollect5` int(11) NOT NULL,
  `produra5` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `q_f_d_s`
--

INSERT INTO `q_f_d_s` (`id`, `user_id`, `cr1`, `crrank1`, `wastemanage1`, `wastemini1`, `wastecollect1`, `produra1`, `cr2`, `crrank2`, `wastemanage2`, `wastemini2`, `wastecollect2`, `produra2`, `cr3`, `crrank3`, `wastemanage3`, `wastemini3`, `wastecollect3`, `produra3`, `cr4`, `crrank4`, `wastemanage4`, `wastemini4`, `wastecollect4`, `produra4`, `cr5`, `crrank5`, `wastemanage5`, `wastemini5`, `wastecollect5`, `produra5`, `created_at`, `updated_at`) VALUES
(1, 1, 'Biodegradable', 2, 3, 3, 3, 9, 'Recyleing of materials', 3, 3, 9, 9, 3, 'Extraction of heavy materials', 3, 3, 9, 3, 1, 'Transfer of ewaste', 2, 3, 3, 3, 3, 'Remaining waste disposal', 2, 3, 3, 1, 9, '2023-08-19 13:34:57', '2023-08-19 13:34:57'),
(2, 2, 'Biodegradable', 1, 9, 9, 9, 9, 'Recyleing of materials', 1, 9, 9, 9, 9, 'Extraction of heavy materials', 1, 9, 9, 9, 9, 'Transfer of ewaste', 1, 9, 9, 9, 9, 'Remaining waste disposal', 1, 9, 9, 9, 9, '2023-08-19 13:37:23', '2023-08-19 13:37:23'),
(3, 1, 'Biodegradable', 2, 0, 9, 9, 9, 'Recyleing of materials', 1, 3, 3, 3, 3, 'Extraction of heavy materials', 2, 9, 1, 1, 1, 'Transfer of ewaste', 4, 3, 3, 3, 3, 'Remaining waste disposal', 3, 9, 9, 9, 9, '2023-08-19 14:32:13', '2023-08-19 14:32:13'),
(4, 3, 'Biodegradable', 1, 0, 9, 1, 9, 'Recyleing of materials', 2, 0, 3, 0, 3, 'Extraction of heavy materials', 3, 1, 1, 1, 1, 'Transfer of ewaste', 4, 3, 0, 3, 0, 'Remaining waste disposal', 5, 9, 1, 9, 1, '2023-08-19 14:39:03', '2023-08-19 14:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `companyaddress` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `companyname`, `email`, `phone`, `companyaddress`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'testcompany', 'test@email.com', '01234567910', 'address', NULL, '$2y$10$1.F..bLYSH35Tdj/N3U2A.jly.q5D8CKvTQQpRCqAGjQjAMqkN8R2', NULL, '2023-08-01 09:24:44', '2023-08-01 09:24:44'),
(2, 'Mr. A', 'A', 'test1@email.com', '012345679100', 'A', NULL, '$2y$10$GHAB694.nrvtvHKEJyx8eOrSqLUSJPsGD5r71P/FxNgcyBZ6Mi1HK', NULL, '2023-08-04 01:02:05', '2023-08-04 01:02:05'),
(3, 'testname', 'testcompanyname', 'testemail@email.com', '01000000000', 'testaddress', NULL, '$2y$10$rbS6FCt2KoLI8BuVvtsa2uZZ8hrqTvdrP6vy2cspk2sWwRTqGF0xS', NULL, '2023-08-19 14:38:19', '2023-08-19 14:38:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_operation_log`
--
ALTER TABLE `admin_operation_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_operation_log_user_id_index` (`user_id`);

--
-- Indexes for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_permissions_name_unique` (`name`),
  ADD UNIQUE KEY `admin_permissions_slug_unique` (`slug`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_roles_name_unique` (`name`),
  ADD UNIQUE KEY `admin_roles_slug_unique` (`slug`);

--
-- Indexes for table `admin_role_menu`
--
ALTER TABLE `admin_role_menu`
  ADD KEY `admin_role_menu_role_id_menu_id_index` (`role_id`,`menu_id`);

--
-- Indexes for table `admin_role_permissions`
--
ALTER TABLE `admin_role_permissions`
  ADD KEY `admin_role_permissions_role_id_permission_id_index` (`role_id`,`permission_id`);

--
-- Indexes for table `admin_role_users`
--
ALTER TABLE `admin_role_users`
  ADD KEY `admin_role_users_role_id_user_id_index` (`role_id`,`user_id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_username_unique` (`username`);

--
-- Indexes for table `admin_user_permissions`
--
ALTER TABLE `admin_user_permissions`
  ADD KEY `admin_user_permissions_user_id_permission_id_index` (`user_id`,`permission_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_index` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `qfd`
--
ALTER TABLE `qfd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `q_f_d_s`
--
ALTER TABLE `q_f_d_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `q_f_d_s_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_operation_log`
--
ALTER TABLE `admin_operation_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qfd`
--
ALTER TABLE `qfd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `q_f_d_s`
--
ALTER TABLE `q_f_d_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `q_f_d_s`
--
ALTER TABLE `q_f_d_s`
  ADD CONSTRAINT `q_f_d_s_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
