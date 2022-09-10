-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2022 pada 05.24
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_pendaftar`
--

CREATE TABLE `akun_pendaftar` (
  `noakun` char(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` char(13) NOT NULL,
  `password` varchar(30) NOT NULL,
  `konfirmasi_password` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `levelnoakun` char(6) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun_pendaftar`
--

INSERT INTO `akun_pendaftar` (`noakun`, `nama`, `email`, `telepon`, `password`, `konfirmasi_password`, `slug`, `levelnoakun`, `created_at`, `updated_at`) VALUES
('', '', '', '', '', '', '', '', '2022-07-26 00:39:37', '2022-07-26 00:39:37'),
('220001', 'akbar', 'mohammatalfan123@gmail.com', '082337341723', '12345', '12345', 'akbar', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('220002', 'Safiya', 'safiya@gmail.com', '089669598267', '123456', '123456', 'akbar', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('admin', 'faisol', 'mohammatfaisol28@gmail.com', '089669598267', 'admin', 'admin', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular User'),
(3, 'kepsek', 'Kepala Sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2),
(3, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 2),
(2, 3),
(2, 16),
(2, 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'faisol', 1, '2022-07-27 11:45:33', 0),
(2, '::1', 'faisol', 1, '2022-07-27 12:51:58', 0),
(3, '::1', 'faisol', 1, '2022-07-27 12:52:47', 0),
(4, '::1', 'faisol', 1, '2022-07-27 12:53:36', 0),
(5, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-27 12:58:22', 1),
(6, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-27 13:08:45', 1),
(7, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-27 13:09:10', 1),
(8, '::1', 'faisol', 1, '2022-07-27 13:10:22', 0),
(9, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-27 13:10:30', 1),
(10, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-27 13:10:57', 1),
(11, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-27 13:15:43', 1),
(12, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-27 13:19:05', 1),
(13, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-27 13:19:38', 1),
(14, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-27 13:22:17', 1),
(15, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-27 13:25:06', 1),
(16, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-27 13:32:58', 1),
(17, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-27 13:35:41', 1),
(18, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-27 13:37:37', 1),
(19, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-27 13:44:50', 1),
(20, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-27 13:45:50', 1),
(21, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-27 14:15:16', 1),
(22, '::1', 'aisyah@gmail.com', 3, '2022-07-28 03:22:22', 1),
(23, '::1', 'faisol', 1, '2022-07-28 03:22:39', 0),
(24, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-28 03:23:02', 1),
(25, '::1', 'faisol', 1, '2022-07-28 03:24:40', 0),
(26, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-28 03:27:51', 1),
(27, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-28 03:30:15', 1),
(28, '::1', 'aisyah@gmail.com', 3, '2022-07-28 03:43:30', 1),
(29, '::1', 'aisyah@gmail.com', 3, '2022-07-28 03:46:07', 1),
(30, '::1', 'aisyah@gmail.com', 3, '2022-07-28 03:48:58', 1),
(31, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-28 03:50:16', 1),
(32, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-28 03:50:35', 1),
(33, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-28 03:51:01', 1),
(34, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-28 03:51:24', 1),
(35, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-28 03:51:47', 1),
(36, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-29 08:36:57', 1),
(37, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-31 02:47:24', 1),
(38, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-31 03:05:14', 1),
(39, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-31 03:22:13', 1),
(40, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-31 04:31:04', 1),
(41, '::1', 'aisyah@gmail.com', 3, '2022-07-31 04:31:18', 1),
(42, '::1', 'dzaki@gmail.com', 4, '2022-07-31 04:34:04', 1),
(43, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-31 04:41:49', 1),
(44, '::1', 'dzaki@gmail.com', 4, '2022-07-31 04:55:40', 1),
(45, '::1', 'aisyah@gmail.com', 3, '2022-07-31 05:02:22', 1),
(46, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-31 05:12:24', 1),
(47, '::1', 'dzaki@gmail.com', 4, '2022-07-31 05:12:35', 1),
(48, '::1', 'dzaki@gmail.com', 4, '2022-07-31 05:28:25', 1),
(49, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-31 05:43:55', 1),
(50, '::1', 'dzaki@gmail.com', 4, '2022-07-31 05:44:16', 1),
(51, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-31 05:46:47', 1),
(52, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-31 05:49:11', 1),
(53, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-31 09:23:47', 1),
(54, '::1', 'muhammadjrc@gmail.com', 2, '2022-07-31 09:28:48', 1),
(55, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-01 04:44:34', 1),
(56, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-01 08:39:28', 1),
(57, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-01 09:07:57', 1),
(58, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-01 09:10:09', 1),
(59, '::1', 'aisyah@gmail.com', 3, '2022-08-01 09:11:56', 1),
(60, '::1', 'aisyah', NULL, '2022-08-01 09:13:44', 0),
(61, '::1', 'aisyah@gmail.com', 3, '2022-08-01 09:14:02', 1),
(62, '::1', 'aisyah@gmail.com', 3, '2022-08-01 09:18:15', 1),
(63, '::1', 'aisyah@gmail.com', 3, '2022-08-01 09:18:30', 1),
(64, '::1', 'aisyah@gmail.com', 3, '2022-08-01 09:23:58', 1),
(65, '::1', 'aisyah', NULL, '2022-08-01 09:23:58', 0),
(66, '::1', 'aisyah@gmail.com', 3, '2022-08-01 09:24:08', 1),
(67, '::1', 'aisyah', NULL, '2022-08-01 09:24:08', 0),
(68, '::1', 'aisyah@gmail.com', 3, '2022-08-01 09:24:23', 1),
(69, '::1', 'aisyah', NULL, '2022-08-01 09:24:23', 0),
(70, '::1', 'aisyah@gmail.com', 3, '2022-08-01 09:25:04', 1),
(71, '::1', 'aisyah', NULL, '2022-08-01 09:25:04', 0),
(72, '::1', 'aisyah@gmail.com', 3, '2022-08-01 09:30:27', 1),
(73, '::1', 'aisyah@gmail.com', 3, '2022-08-01 09:50:52', 1),
(74, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-01 09:51:27', 1),
(75, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-01 09:52:31', 1),
(76, '::1', 'aisyah@gmail.com', 3, '2022-08-01 09:53:35', 1),
(77, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-01 10:05:39', 1),
(78, '::1', 'aisyah@gmail.com', 3, '2022-08-01 12:58:41', 1),
(79, '::1', 'aisyah@gmail.com', 3, '2022-08-01 12:59:30', 1),
(80, '::1', 'aisyah@gmail.com', 3, '2022-08-01 13:13:06', 1),
(81, '::1', 'aisyah@gmail.com', 3, '2022-08-02 02:09:10', 1),
(82, '::1', 'aisyah@gmail.com', 3, '2022-08-02 04:03:01', 1),
(83, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-02 06:12:14', 1),
(84, '::1', 'aisyah@gmail.com', 3, '2022-08-02 06:17:20', 1),
(85, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-02 06:28:24', 1),
(86, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-02 06:33:35', 1),
(87, '::1', 'aisyah@gmail.com', 3, '2022-08-02 06:33:48', 1),
(88, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-02 09:59:22', 1),
(89, '::1', 'aisyah@gmail.com', 3, '2022-08-02 10:08:04', 1),
(90, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-02 10:09:21', 1),
(91, '::1', 'aisyah@gmail.com', 3, '2022-08-02 10:30:22', 1),
(92, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-02 10:30:39', 1),
(93, '::1', 'aisyah@gmail.com', 3, '2022-08-05 00:19:20', 1),
(94, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-05 01:38:10', 1),
(95, '::1', 'aisyah@gmail.com', 3, '2022-08-05 01:53:28', 1),
(96, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-05 01:59:41', 1),
(97, '::1', 'aisyah@gmail.com', 3, '2022-08-05 03:28:51', 1),
(98, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-05 03:44:24', 1),
(99, '::1', 'aisyah@gmail.com', 3, '2022-08-05 04:15:00', 1),
(100, '::1', 'aisyah@gmail.com', 3, '2022-08-05 07:51:05', 1),
(101, '::1', 'aisyah@gmail.com', 3, '2022-08-05 09:41:34', 1),
(102, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-05 09:49:37', 1),
(103, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-05 11:06:17', 1),
(104, '::1', 'aisyah@gmail.com', 3, '2022-08-05 12:16:56', 1),
(105, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-05 12:20:27', 1),
(106, '::1', 'aisyah@gmail.com', 3, '2022-08-05 21:59:26', 1),
(107, '::1', 'aisyah@gmail.com', 3, '2022-08-05 22:32:27', 1),
(108, '::1', 'aisyah@gmail.com', 3, '2022-08-05 22:38:53', 1),
(109, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-05 22:56:25', 1),
(110, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-06 01:46:13', 1),
(111, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-06 03:22:39', 1),
(112, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-06 04:04:08', 1),
(113, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-06 04:36:52', 1),
(114, '::1', 'mohammatfaisol28@gmail.com', 1, '2022-08-06 04:40:16', 0),
(115, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-06 04:51:06', 1),
(116, '::1', 'aisyah@gmail.com', 3, '2022-08-06 04:51:26', 1),
(117, '::1', 'mohammatfaisol28@gmail.com', NULL, '2022-08-06 04:52:43', 0),
(118, '::1', 'aisyah@gmail.com', 3, '2022-08-06 04:53:02', 1),
(119, '::1', 'aisyah@gmail.com', 3, '2022-08-06 04:59:14', 1),
(120, '::1', 'aisyah@gmail.com', 3, '2022-08-07 10:45:45', 1),
(121, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-07 10:46:41', 1),
(122, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-07 11:19:00', 1),
(123, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-07 17:56:12', 1),
(124, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-07 18:06:50', 1),
(125, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-07 18:31:57', 1),
(126, '::1', 'aisyah@gmail.com', 3, '2022-08-07 18:37:02', 1),
(127, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-07 18:42:30', 1),
(128, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-07 19:49:11', 1),
(129, '::1', 'aisyah@gmail.com', 3, '2022-08-07 19:57:24', 1),
(130, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-07 19:58:53', 1),
(131, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-07 20:38:30', 1),
(132, '::1', 'aisyah@gmail.com', 3, '2022-08-07 20:43:51', 1),
(133, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-07 20:45:47', 1),
(134, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-07 21:34:11', 1),
(135, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-08 00:46:40', 1),
(136, '::1', 'aisyah@gmail.com', 3, '2022-08-08 00:47:23', 1),
(137, '::1', 'aisyah@gmail.com', 3, '2022-08-08 01:01:48', 1),
(138, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-08 01:03:28', 1),
(139, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-08 03:06:03', 1),
(140, '::1', 'aisyah@gmail.com', 3, '2022-08-08 03:22:09', 1),
(141, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-08 15:14:09', 1),
(142, '::1', 'aisyah@gmail.com', 3, '2022-08-08 15:49:04', 1),
(143, '::1', 'aisyah@gmail.com', 3, '2022-08-08 16:14:32', 1),
(144, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-08 16:22:57', 1),
(145, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-09 10:05:47', 1),
(146, '::1', 'aisyah@gmail.com', 3, '2022-08-10 02:32:32', 1),
(147, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 02:52:24', 1),
(148, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 02:55:13', 1),
(149, '::1', 'aisyah@gmail.com', 3, '2022-08-10 03:17:24', 1),
(150, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 03:24:15', 1),
(151, '::1', 'aisyah@gmail.com', 3, '2022-08-10 03:26:57', 1),
(152, '::1', 'aisyah@gmail.com', 3, '2022-08-10 03:32:14', 1),
(153, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 03:37:19', 1),
(154, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 04:52:32', 1),
(155, '::1', 'aisyah@gmail.com', 3, '2022-08-10 04:55:13', 1),
(156, '::1', 'aisyah@gmail.com', 3, '2022-08-10 04:56:52', 1),
(157, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 05:01:22', 1),
(158, '::1', 'aisyah@gmail.com', 3, '2022-08-10 09:49:38', 1),
(159, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 09:53:12', 1),
(160, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 09:58:18', 1),
(161, '::1', 'aisyah@gmail.com', 3, '2022-08-10 10:10:16', 1),
(162, '::1', '220003', NULL, '2022-08-10 10:10:32', 0),
(163, '::1', '220003', NULL, '2022-08-10 10:10:46', 0),
(164, '::1', '220002', NULL, '2022-08-10 10:11:18', 0),
(165, '::1', 'aisyah@gmail.com', 3, '2022-08-10 10:11:22', 1),
(166, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 10:12:24', 1),
(167, '::1', '220004', NULL, '2022-08-10 10:13:15', 0),
(168, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 10:14:34', 1),
(169, '::1', '220005', NULL, '2022-08-10 10:15:48', 0),
(170, '::1', '220005', NULL, '2022-08-10 10:17:42', 0),
(171, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 10:20:16', 1),
(172, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 11:28:11', 1),
(173, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 11:54:12', 1),
(174, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 11:56:17', 1),
(175, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 18:05:02', 1),
(176, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 20:53:09', 1),
(177, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 20:56:45', 1),
(178, '::1', 'aisyah@gmail.com', 3, '2022-08-10 20:58:32', 1),
(179, '::1', 'aisyah@gmail.com', 3, '2022-08-10 20:59:21', 1),
(180, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 21:08:55', 1),
(181, '::1', 'aisyah@gmail.com', 3, '2022-08-10 21:10:15', 1),
(182, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 21:10:54', 1),
(183, '::1', 'aisyah@gmail.com', 3, '2022-08-10 21:24:03', 1),
(184, '::1', 'aisyah@gmail.com', 3, '2022-08-10 21:24:41', 1),
(185, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-10 21:26:25', 1),
(186, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 01:03:46', 1),
(187, '::1', 'aisyah@gmail.com', 3, '2022-08-12 02:18:59', 1),
(188, '::1', 'aisyah@gmail.com', 3, '2022-08-12 02:35:01', 1),
(189, '::1', 'aisyah@gmail.com', 3, '2022-08-12 02:46:45', 1),
(190, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 02:50:21', 1),
(191, '::1', 'aisyah@gmail.com', 3, '2022-08-12 02:50:38', 1),
(192, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 03:30:08', 1),
(193, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 04:10:50', 1),
(194, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 04:15:26', 1),
(195, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 04:19:57', 1),
(196, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 06:42:27', 1),
(197, '::1', 'aisyah@gmail.com', 3, '2022-08-12 06:43:48', 1),
(198, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 06:50:08', 1),
(199, '::1', 'aisyah@gmail.com', 3, '2022-08-12 06:51:08', 1),
(200, '::1', 'aisyah@gmail.com', 3, '2022-08-12 06:56:52', 1),
(201, '::1', 'aisyah@gmail.com', 3, '2022-08-12 07:14:19', 1),
(202, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 07:22:39', 1),
(203, '::1', 'aisyah@gmail.com', 3, '2022-08-12 19:53:18', 1),
(204, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 20:01:49', 1),
(205, '::1', 'aisyah@gmail.com', 3, '2022-08-12 20:05:03', 1),
(206, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 20:09:20', 1),
(207, '::1', 'aisyah@gmail.com', 3, '2022-08-12 20:10:24', 1),
(208, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 20:12:27', 1),
(209, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 20:19:35', 1),
(210, '::1', 'aisyah@gmail.com', 3, '2022-08-12 20:56:32', 1),
(211, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 21:03:39', 1),
(212, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 21:36:02', 1),
(213, '::1', 'aisyah@gmail.com', 3, '2022-08-12 21:37:52', 1),
(214, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 21:38:14', 1),
(215, '::1', 'kamu@gmail.com', 16, '2022-08-12 21:39:14', 1),
(216, '::1', 'admin', NULL, '2022-08-12 21:47:36', 0),
(217, '::1', 'admin', NULL, '2022-08-12 21:47:45', 0),
(218, '::1', 'admin', NULL, '2022-08-12 21:47:51', 0),
(219, '::1', 'admin', NULL, '2022-08-12 21:48:06', 0),
(220, '::1', 'admin', NULL, '2022-08-12 21:48:51', 0),
(221, '::1', 'akbar@gmail.com', 17, '2022-08-12 21:48:55', 1),
(222, '::1', 'admin', NULL, '2022-08-12 21:49:39', 0),
(223, '::1', '220001', NULL, '2022-08-12 21:50:37', 0),
(224, '::1', 'aisyah@gmail.com', 3, '2022-08-12 21:50:51', 1),
(225, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 21:52:09', 1),
(226, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 21:53:18', 1),
(227, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 21:54:06', 1),
(228, '::1', 'jaka@gmail.com', 19, '2022-08-12 22:09:58', 1),
(229, '::1', 'admin', NULL, '2022-08-12 22:43:01', 0),
(230, '::1', 'admin', NULL, '2022-08-12 22:43:32', 0),
(231, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 22:44:07', 1),
(232, '::1', '220001', NULL, '2022-08-12 22:49:09', 0),
(233, '::1', 'admin', NULL, '2022-08-12 22:55:07', 0),
(234, '::1', 'alfan', NULL, '2022-08-12 22:56:05', 0),
(235, '::1', '220001', NULL, '2022-08-12 22:56:13', 0),
(236, '::1', 'alfan', NULL, '2022-08-12 22:56:15', 0),
(237, '::1', 'alfan', NULL, '2022-08-12 22:56:17', 0),
(238, '::1', 'alfan', NULL, '2022-08-12 22:56:17', 0),
(239, '::1', 'alfan', NULL, '2022-08-12 22:56:18', 0),
(240, '::1', 'alfan', NULL, '2022-08-12 22:56:18', 0),
(241, '::1', 'alfan', NULL, '2022-08-12 22:56:19', 0),
(242, '::1', 'alfan', NULL, '2022-08-12 22:56:19', 0),
(243, '::1', 'alfan', NULL, '2022-08-12 22:56:19', 0),
(244, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 22:57:06', 1),
(245, '::1', '220001', NULL, '2022-08-12 22:57:36', 0),
(246, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 22:58:24', 1),
(247, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 23:02:39', 1),
(248, '::1', 'anyar@gmail.com', 22, '2022-08-12 23:03:30', 1),
(249, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-12 23:10:53', 1),
(250, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-13 02:45:45', 1),
(251, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-13 02:51:23', 1),
(252, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-14 02:18:01', 1),
(253, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-14 02:58:11', 1),
(254, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-14 07:56:47', 1),
(255, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-14 08:25:33', 1),
(256, '::1', 'aisyah@gmail.com', 3, '2022-08-14 09:46:53', 1),
(257, '::1', 'aisyah@gmail.com', 3, '2022-08-14 09:49:21', 1),
(258, '::1', 'aisyah@gmail.com', 3, '2022-08-14 10:02:31', 1),
(259, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-14 20:57:58', 1),
(260, '::1', 'muhammadjrc@gmail.com', 2, '2022-08-14 21:00:27', 1),
(261, '::1', 'aisyah@gmail.com', 3, '2022-08-14 21:42:55', 1),
(262, '::1', 'aisyah@gmail.com', 3, '2022-08-14 22:07:40', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage user\'s profile'),
(3, 'manage-laporan', 'Management laporan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `brosur`
--

CREATE TABLE `brosur` (
  `id` int(11) NOT NULL,
  `brosur1` varchar(255) NOT NULL,
  `brosur2` varchar(255) NOT NULL,
  `alur1` varchar(255) NOT NULL,
  `alur2` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `brosur`
--

INSERT INTO `brosur` (`id`, `brosur1`, `brosur2`, `alur1`, `alur2`, `created_at`, `updated_at`) VALUES
(2, '5.png', '6.png', '7.png', '8.png', '2022-08-14 02:59:09', '2022-08-14 02:59:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir`
--

CREATE TABLE `formulir` (
  `id` int(11) NOT NULL,
  `noakun` char(6) NOT NULL,
  `nisn` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` char(12) NOT NULL,
  `jns_klmn` char(11) NOT NULL,
  `telepon` char(13) NOT NULL,
  `asal_sklh` varchar(50) NOT NULL,
  `alamat_sklh` varchar(100) NOT NULL,
  `thn_lulus` char(12) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `pkrjn_ayah` varchar(50) NOT NULL,
  `gaji_ayah` char(20) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `pkrjn_ibu` varchar(50) NOT NULL,
  `gaji_ibu` char(20) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `akte` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `formulir`
--

INSERT INTO `formulir` (`id`, `noakun`, `nisn`, `nama`, `alamat`, `agama`, `jns_klmn`, `telepon`, `asal_sklh`, `alamat_sklh`, `thn_lulus`, `nama_ayah`, `pkrjn_ayah`, `gaji_ayah`, `nama_ibu`, `pkrjn_ibu`, `gaji_ibu`, `kk`, `foto`, `ijazah`, `akte`, `created_at`, `updated_at`) VALUES
(4, '220001', '9998548459', 'Aisyah', 'Jorongan', 'Islam', 'Perempuan', '089669598267', 'SD JORONGAN 4', 'Jorongan', '2021', 'Ayah', 'Buruh harian Lepas', '500.000 - 1.000.000', 'Ibu', 'Ibu rumah tangga', '0 - 100.000', 'rikaya_1.jpg', 'rikaya_2.jpg', 'rikaya_3.jpg', 'rikaya_4.jpg', '2022-08-12 20:12:00', '2022-08-12 20:12:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir_pendaftaran`
--

CREATE TABLE `formulir_pendaftaran` (
  `noakun` char(6) NOT NULL,
  `nisn` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(12) NOT NULL,
  `jns_klmn` char(11) NOT NULL,
  `telepon` char(13) NOT NULL,
  `asal_sklh` varchar(50) NOT NULL,
  `alamat_sklh` varchar(100) NOT NULL,
  `thn_lulus` char(12) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `pkrjn_ayah` varchar(50) NOT NULL,
  `gaji_ayah` char(20) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `pkrjn_ibu` varchar(50) NOT NULL,
  `gaji_ibu` char(20) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `akte` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `formulir_pendaftaran`
--

INSERT INTO `formulir_pendaftaran` (`noakun`, `nisn`, `nama`, `alamat`, `agama`, `jns_klmn`, `telepon`, `asal_sklh`, `alamat_sklh`, `thn_lulus`, `nama_ayah`, `pkrjn_ayah`, `gaji_ayah`, `nama_ibu`, `pkrjn_ibu`, `gaji_ibu`, `kk`, `foto`, `ijazah`, `akte`, `created_at`, `updated_at`) VALUES
('220001', '9998548459', 'Aisyah', 'Jorongan', 'Islam', 'Perempuan', '089669598267', 'SD JORONGAN 4', 'Jorongan', '2021', 'ayah', 'buruh', '100.000 - 500.000', 'ibu', 'iburumahtangga', '100.000 - 500.000', 'CV.jpg', 'CV_1.jpg', 'CV_2.jpg', 'CV_3.jpg', 2022, 2022);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`nama`, `email`, `asal_sekolah`, `pertanyaan`, `created_at`, `updated_at`) VALUES
('Feri Abdillah', 'muhammadjrc@gmail.com', 'SD Jorongan 4', 'P', '2022-08-07 20:10:14', '2022-08-07 20:10:14'),
('Feri Abdillah', 'mohammatfaisol28@gmail.com', 'SD Jorongan 4', 'P', '2022-08-07 20:11:14', '2022-08-07 20:11:14'),
('Akbar Faisol', 'mohammatfaisol28@gmail.com', 'gcufcy', 'P', '2022-08-07 20:15:46', '2022-08-07 20:15:46'),
('nama', 'feri@gmail.com', 'SD Jorongan 4', 'Coba', '2022-08-07 20:16:48', '2022-08-07 20:16:48'),
('faisol', 'imawati@gmail.com', 'SD Jorongan 4', 'Coba lagi', '2022-08-07 20:17:39', '2022-08-07 20:17:39'),
('Akbar Faisol', 'feri@gmail.com', 'gcufcy', '12eqed', '2022-08-07 20:20:18', '2022-08-07 20:20:18'),
('Saya', 'Saya@gmail.com', 'SD Leces 1', 'Tidak ada', '2022-08-07 20:35:44', '2022-08-07 20:35:44'),
('nama', 'dzaki@gmail.com', 'SD Leces 1', 'Siapa saya', '2022-08-07 20:37:08', '2022-08-07 20:37:08'),
('Akbar Faisol', 'mohammatfaisol28@gmail.com', 'SD Jorongan 4', 'Apa bisa saya daftar sekarang?', '2022-08-10 20:38:21', '2022-08-10 20:38:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontakbaru`
--

CREATE TABLE `kontakbaru` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `pertanyaan` varchar(200) NOT NULL,
  `jawaban` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontakbaru`
--

INSERT INTO `kontakbaru` (`id`, `nama`, `email`, `asal_sekolah`, `pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 'Feri Abdillah', 'feri@gmail.com', 'SD Jorongan 4', 'Apakah saya boleh mendaftar hari ini?', 'Iya', '2022-08-12 04:07:34', '2022-08-12 04:30:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `levels`
--

CREATE TABLE `levels` (
  `levelnoakun` char(6) NOT NULL,
  `levelnama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `levels`
--

INSERT INTO `levels` (`levelnoakun`, `levelnama`) VALUES
('1', 'admin'),
('2', 'kepsek'),
('3', 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `link_ujian`
--

CREATE TABLE `link_ujian` (
  `id` int(11) NOT NULL,
  `link_ipa` varchar(40) NOT NULL,
  `link_bhs_indo` varchar(40) NOT NULL,
  `link_mtk` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `link_ujian`
--

INSERT INTO `link_ujian` (`id`, `link_ipa`, `link_bhs_indo`, `link_mtk`, `created_at`, `updated_at`) VALUES
(2, 'https://forms.gle/4UJmQFhAfUu2Qbru6', 'https://forms.gle/JquesT77w4wZ3aG66', 'https://forms.gle/MkQNQufJL7idXW5e6', '2022-08-12 21:17:03', '2022-08-12 21:20:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lolos_tidak`
--

CREATE TABLE `lolos_tidak` (
  `noakun` char(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lolos_tidak`
--

INSERT INTO `lolos_tidak` (`noakun`, `nama`, `status`) VALUES
('220001', 'Aisyah', 'LOLOS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1657262872, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `noakun` char(6) NOT NULL,
  `id` int(11) NOT NULL,
  `nilai_ipa` char(3) NOT NULL,
  `nilai_bhs_indo` char(3) NOT NULL,
  `nilai_mtk` char(3) NOT NULL,
  `nilai_total` char(3) NOT NULL,
  `status` char(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`noakun`, `id`, `nilai_ipa`, `nilai_bhs_indo`, `nilai_mtk`, `nilai_total`, `status`, `created_at`, `updated_at`) VALUES
('', 0, '70', '70', '70', '98', 'LOLOS', '2022-08-12 01:13:20', '2022-08-12 01:13:20'),
('220001', 0, '70', '70', '70', '98', '', '2022-08-10 21:19:00', '2022-08-10 21:19:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaibaru`
--

CREATE TABLE `nilaibaru` (
  `id` int(11) NOT NULL,
  `noakun` char(6) NOT NULL,
  `nilai_ipa` char(3) NOT NULL,
  `nilai_bhs_indo` char(3) NOT NULL,
  `nilai_mtk` char(3) NOT NULL,
  `nilai_total` char(3) NOT NULL,
  `status` char(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilaibaru`
--

INSERT INTO `nilaibaru` (`id`, `noakun`, `nilai_ipa`, `nilai_bhs_indo`, `nilai_mtk`, `nilai_total`, `status`, `created_at`, `updated_at`) VALUES
(2, '220001', '98', '98', '98', '98', 'LOLOS', '2022-08-12 01:35:55', '2022-08-12 01:36:03'),
(3, '220002', '90', '90', '90', '90', '', '2022-08-12 20:02:15', '2022-08-12 20:02:15'),
(4, '220003', '70', '70', '98', '10', 'TIDAKLOLOS', '2022-08-14 08:50:33', '2022-08-14 08:51:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_baru`
--

CREATE TABLE `siswa_baru` (
  `noakun` char(6) NOT NULL,
  `kk` char(6) NOT NULL,
  `foto` char(6) NOT NULL,
  `ijazah` char(6) NOT NULL,
  `akte` char(6) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa_baru`
--

INSERT INTO `siswa_baru` (`noakun`, `kk`, `foto`, `ijazah`, `akte`, `created_at`, `updated_at`) VALUES
('220001', 'sudah', 'sudah', 'sudah', 'sudah', '2022-08-10 21:28:07', '2022-08-10 21:28:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `noakun` char(6) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `noakun`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'muhammadjrc@gmail.com', '082123456789', 'admin', 'Muhammad Alfan', 'faisol ultah.jpg', '$2y$10$Go9JG7SKeY3hL7GY/j6LE.7PcNoqrvTJoClRSinjGSCWC/5kemZ1S', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-07-27 12:58:00', '2022-08-12 02:17:20', NULL),
(3, 'aisyah@gmail.com', '087123456789', '220001', 'Siti Aisyah', 'rikaya.jpg', '$2y$10$SNkxDeHeJRb.HLveK38wjuuOKfvxrjjovVjM563TRK6e1Ykv7OK5G', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-07-28 02:40:42', '2022-08-12 02:51:08', NULL),
(16, 'kamu@gmail.com', '088123456789', '220002', 'kamuuuuu', 'Stiker.jpg', '$2y$10$6ZpE5EhfkvYeYkSg4kTQSu/FAfffameQlsoB14fmpO5GTqwNPc2xa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-12 21:37:08', '2022-08-12 21:39:58', NULL),
(22, 'anyar@gmail.com', '085123456789', '220003', 'Mohammat Faisol Akbar', 'default.svg', '$2y$10$FCtG8As1jXcPKDYxN0IEEOfKJzE4uGeraQ0OscwGmEyws2QTiKkHC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-08-12 23:02:33', '2022-08-12 23:12:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun_pendaftar`
--
ALTER TABLE `akun_pendaftar`
  ADD PRIMARY KEY (`noakun`);

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `brosur`
--
ALTER TABLE `brosur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `formulir_pendaftaran`
--
ALTER TABLE `formulir_pendaftaran`
  ADD PRIMARY KEY (`noakun`);

--
-- Indeks untuk tabel `kontakbaru`
--
ALTER TABLE `kontakbaru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`levelnoakun`);

--
-- Indeks untuk tabel `link_ujian`
--
ALTER TABLE `link_ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`noakun`) USING BTREE;

--
-- Indeks untuk tabel `nilaibaru`
--
ALTER TABLE `nilaibaru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa_baru`
--
ALTER TABLE `siswa_baru`
  ADD PRIMARY KEY (`noakun`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `brosur`
--
ALTER TABLE `brosur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kontakbaru`
--
ALTER TABLE `kontakbaru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `link_ujian`
--
ALTER TABLE `link_ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nilaibaru`
--
ALTER TABLE `nilaibaru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
