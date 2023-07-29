-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 09:49 PM
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
(8, 0, 0, 'Users', 'fa-users', '/users', NULL, '2023-07-08 12:30:31', '2023-07-08 12:30:31'),
(9, 0, 0, 'Orders', 'fa-archive', '/orders', NULL, '2023-07-08 13:25:23', '2023-07-08 13:25:23');

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
(1, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-07-05 13:51:16', '2023-07-05 13:51:16'),
(2, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-07-05 14:02:47', '2023-07-05 14:02:47'),
(3, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-07-05 14:03:21', '2023-07-05 14:03:21'),
(4, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-05 14:03:32', '2023-07-05 14:03:32'),
(5, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-05 14:03:37', '2023-07-05 14:03:37'),
(6, 1, 'admin/auth/roles', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-05 14:03:40', '2023-07-05 14:03:40'),
(7, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-05 14:03:42', '2023-07-05 14:03:42'),
(8, 1, 'admin/auth/roles', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-05 14:03:50', '2023-07-05 14:03:50'),
(9, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-05 14:03:52', '2023-07-05 14:03:52'),
(10, 1, 'admin/auth/roles', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-05 14:03:58', '2023-07-05 14:03:58'),
(11, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-05 14:03:59', '2023-07-05 14:03:59'),
(12, 1, 'admin/auth/roles', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-05 14:03:59', '2023-07-05 14:03:59'),
(13, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-05 14:03:59', '2023-07-05 14:03:59'),
(14, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-05 14:04:00', '2023-07-05 14:04:00'),
(15, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-05 14:04:00', '2023-07-05 14:04:00'),
(16, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-07-07 11:51:24', '2023-07-07 11:51:24'),
(17, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-07 11:51:29', '2023-07-07 11:51:29'),
(18, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-07 11:51:38', '2023-07-07 11:51:38'),
(19, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-07 11:51:42', '2023-07-07 11:51:42'),
(20, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-07 11:51:47', '2023-07-07 11:51:47'),
(21, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-07 11:51:56', '2023-07-07 11:51:56'),
(22, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-07-07 11:59:21', '2023-07-07 11:59:21'),
(23, 1, 'admin/auth/logout', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-07 11:59:26', '2023-07-07 11:59:26'),
(24, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-07-07 11:59:37', '2023-07-07 11:59:37'),
(25, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-07 11:59:43', '2023-07-07 11:59:43'),
(26, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-07-08 09:04:45', '2023-07-08 09:04:45'),
(27, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 09:13:15', '2023-07-08 09:13:15'),
(28, 1, 'admin/auth/permissions', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 09:13:20', '2023-07-08 09:13:20'),
(29, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 09:13:34', '2023-07-08 09:13:34'),
(30, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 09:13:36', '2023-07-08 09:13:36'),
(31, 1, 'admin/auth/roles', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 09:13:45', '2023-07-08 09:13:45'),
(32, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 09:13:47', '2023-07-08 09:13:47'),
(33, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 09:13:50', '2023-07-08 09:13:50'),
(34, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-07-08 11:37:30', '2023-07-08 11:37:30'),
(35, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-07-08 12:16:29', '2023-07-08 12:16:29'),
(36, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-07-08 12:25:55', '2023-07-08 12:25:55'),
(37, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 12:25:58', '2023-07-08 12:25:58'),
(38, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 12:26:01', '2023-07-08 12:26:01'),
(39, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 12:27:07', '2023-07-08 12:27:07'),
(40, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 12:27:08', '2023-07-08 12:27:08'),
(41, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 12:27:11', '2023-07-08 12:27:11'),
(42, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 12:27:15', '2023-07-08 12:27:15'),
(43, 1, 'admin/auth/menu/3/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 12:27:40', '2023-07-08 12:27:40'),
(44, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 12:28:12', '2023-07-08 12:28:12'),
(45, 1, 'admin/auth/menu', 'POST', '127.0.0.1', '{\"parent_id\":\"0\",\"title\":\"Users\",\"icon\":\"fa-users\",\"uri\":\"\\/users\",\"roles\":[null],\"permission\":null,\"_token\":\"gyC4pOEWPSgIuVl72yaRCirHiBRCN2L44YOzFWEW\"}', '2023-07-08 12:30:30', '2023-07-08 12:30:30'),
(46, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-07-08 12:30:31', '2023-07-08 12:30:31'),
(47, 1, 'admin/auth/roles', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 12:30:35', '2023-07-08 12:30:35'),
(48, 1, 'admin/auth/roles/create', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 12:30:38', '2023-07-08 12:30:38'),
(49, 1, 'admin/auth/roles', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 12:30:51', '2023-07-08 12:30:51'),
(50, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 12:31:10', '2023-07-08 12:31:10'),
(51, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-07-08 12:31:32', '2023-07-08 12:31:32'),
(52, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 12:31:35', '2023-07-08 12:31:35'),
(53, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 12:36:03', '2023-07-08 12:36:03'),
(54, 1, 'admin/auth/menu', 'POST', '127.0.0.1', '{\"parent_id\":\"0\",\"title\":\"Orders\",\"icon\":\"fa-archive\",\"uri\":\"\\/orders\",\"roles\":[null],\"permission\":null,\"_token\":\"gyC4pOEWPSgIuVl72yaRCirHiBRCN2L44YOzFWEW\"}', '2023-07-08 13:25:23', '2023-07-08 13:25:23'),
(55, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-07-08 13:25:23', '2023-07-08 13:25:23'),
(56, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-07-08 13:25:27', '2023-07-08 13:25:27'),
(57, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 13:25:30', '2023-07-08 13:25:30'),
(58, 1, 'admin/orders/create', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 14:05:21', '2023-07-08 14:05:21'),
(59, 1, 'admin/orders', 'POST', '127.0.0.1', '{\"user_id\":null,\"productname\":\"mouse\",\"producttype\":\"plastic\",\"productamount\":\"1kg\",\"endproduct\":\"recycled plastic\",\"status\":\"pending\",\"_token\":\"gyC4pOEWPSgIuVl72yaRCirHiBRCN2L44YOzFWEW\",\"_previous_\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/orders\"}', '2023-07-08 14:05:58', '2023-07-08 14:05:58'),
(60, 1, 'admin/orders/create', 'GET', '127.0.0.1', '[]', '2023-07-08 14:05:59', '2023-07-08 14:05:59'),
(61, 1, 'admin/orders', 'POST', '127.0.0.1', '{\"user_id\":\"1\",\"productname\":\"mouse\",\"producttype\":\"plastic\",\"productamount\":\"1kg\",\"endproduct\":\"recycled plastic\",\"status\":\"pending\",\"_token\":\"gyC4pOEWPSgIuVl72yaRCirHiBRCN2L44YOzFWEW\"}', '2023-07-08 14:06:08', '2023-07-08 14:06:08'),
(62, 1, 'admin/orders', 'GET', '127.0.0.1', '[]', '2023-07-08 14:06:09', '2023-07-08 14:06:09'),
(63, 1, 'admin/orders/1/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 14:08:11', '2023-07-08 14:08:11'),
(64, 1, 'admin/orders/1', 'PUT', '127.0.0.1', '{\"user_id\":\"1\",\"productname\":\"mouse\",\"producttype\":\"plastic\",\"productamount\":\"1kg\",\"endproduct\":\"recycled plastic\",\"status\":\"done\",\"_token\":\"gyC4pOEWPSgIuVl72yaRCirHiBRCN2L44YOzFWEW\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/orders\"}', '2023-07-08 14:08:16', '2023-07-08 14:08:16'),
(65, 1, 'admin/orders', 'GET', '127.0.0.1', '[]', '2023-07-08 14:08:16', '2023-07-08 14:08:16'),
(66, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-07-08 14:33:31', '2023-07-08 14:33:31'),
(67, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 14:33:34', '2023-07-08 14:33:34'),
(68, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 14:33:55', '2023-07-08 14:33:55'),
(69, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 14:34:03', '2023-07-08 14:34:03'),
(70, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 14:34:06', '2023-07-08 14:34:06'),
(71, 1, 'admin/orders/create', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 14:34:55', '2023-07-08 14:34:55'),
(72, 1, 'admin/orders', 'POST', '127.0.0.1', '{\"user_id\":\"1\",\"productname\":\"keyboard\",\"producttype\":\"plastic\",\"productamount\":\"1kg\",\"endproduct\":\"recycled plastic\",\"status\":\"pending\",\"_token\":\"gyC4pOEWPSgIuVl72yaRCirHiBRCN2L44YOzFWEW\",\"_previous_\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/orders\"}', '2023-07-08 14:35:15', '2023-07-08 14:35:15'),
(73, 1, 'admin/orders', 'GET', '127.0.0.1', '[]', '2023-07-08 14:35:16', '2023-07-08 14:35:16'),
(74, 1, 'admin/orders/2/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 14:35:51', '2023-07-08 14:35:51'),
(75, 1, 'admin/orders/2', 'PUT', '127.0.0.1', '{\"user_id\":\"1\",\"productname\":\"keyboard\",\"producttype\":\"plastic\",\"productamount\":\"1kg\",\"endproduct\":\"recycled plastic\",\"status\":\"pickup on the way\",\"_token\":\"gyC4pOEWPSgIuVl72yaRCirHiBRCN2L44YOzFWEW\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/orders\"}', '2023-07-08 14:36:08', '2023-07-08 14:36:08'),
(76, 1, 'admin/orders', 'GET', '127.0.0.1', '[]', '2023-07-08 14:36:08', '2023-07-08 14:36:08'),
(77, 1, 'admin/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 14:37:05', '2023-07-08 14:37:05'),
(78, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-08 14:37:13', '2023-07-08 14:37:13'),
(79, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-07-27 09:22:24', '2023-07-27 09:22:24'),
(80, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-27 09:22:39', '2023-07-27 09:22:39'),
(81, 1, 'admin/orders', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-07-27 09:25:53', '2023-07-27 09:25:53');

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
(1, 'Administrator', 'administrator', '2023-07-05 13:46:29', '2023-07-05 13:46:29');

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
(1, 'admin', '$2y$10$0VM0aoIll028tylbw3LxC.3YzgBXmyJRA8mZ0iYDBoTn6uOgKzjKq', 'Administrator', NULL, '78MfqYO1neKwPIMnTeTm74dLVVNXuDzrhG13m5Raf2Sm9MpBdSrtE5eSGvgp', '2023-07-05 13:46:29', '2023-07-05 13:46:29');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_07_05_191027_create_admins_table', 2),
(7, '2016_01_04_173148_create_admin_tables', 3),
(8, '2020_11_20_100001_create_log_table', 4),
(9, '2023_07_08_191001_create_orders_table', 5),
(10, '2023_07_08_192219_create_orders_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `productname` varchar(255) NOT NULL,
  `producttype` varchar(255) NOT NULL,
  `productamount` varchar(255) NOT NULL,
  `endproduct` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `productname`, `producttype`, `productamount`, `endproduct`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'mouse', 'plastic', '1', 'recycled ', 'done', '2023-07-08 14:06:08', '2023-07-08 14:08:16'),
(2, 1, 'keyboard', 'plastic', '1', 'recycled ', 'pickup on the way', '2023-07-08 14:35:15', '2023-07-08 14:36:08'),
(4, 1, 'mouse', 'glass', '1', 'reduce', 'pending', '2023-07-27 13:12:00', '2023-07-27 13:12:00'),
(5, 1, 'keyboard', 'plastic', '3', 'recylce', 'pending', '2023-07-28 13:43:43', '2023-07-28 13:43:43');

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
(1, 'test', 'test company name', 'test@email.com', '01234567910', 'test company address', NULL, '$2y$10$5BrzPA1jEiLFGeGU7RGhe.ktu7X.ZDRH8MgDBHYpRJ.1sep37PXTu', 'QwEVe999vXRht8pK7P5V1VaeeEc4wuDZHx960VJcBtPapA87qlfQZMkpkCdA', '2023-07-01 14:52:40', '2023-07-01 14:52:40'),
(2, 'Mr. B', 'B', 'test1@email.com', '012345679100', 'B', NULL, '$2y$10$IkZyvrfKJe3D8SmxZHbJ/eLUxGZUiqkp2bf4al6IEiiQMb4NXSdgC', NULL, '2023-07-05 13:15:51', '2023-07-05 13:15:51');

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
  ADD UNIQUE KEY `admin_users_username_unique` (`username`),
  ADD UNIQUE KEY `admin_users_email_unique` (`name`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
