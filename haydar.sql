-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 27 Ağu 2019, 22:25:36
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `haydar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bildirimler`
--

CREATE TABLE `bildirimler` (
  `bildirim_id` int(11) NOT NULL,
  `gonderen_kadi` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `alan_kadi` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `bildirim` text COLLATE utf8_turkish_ci NOT NULL,
  `bildirim_tur` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bildirimler`
--

INSERT INTO `bildirimler` (`bildirim_id`, `gonderen_kadi`, `alan_kadi`, `bildirim`, `bildirim_tur`) VALUES
(1, '', 'umut', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(2, '', 'meryem', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(3, '', 'gul', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(4, '', 'glfdn', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(6, '', 'reyyan', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(7, '', 'seclorum', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(8, '', 'mozcan', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(9, '', 'sinan', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(10, '', 'taa', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(11, '', 'haydar', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(14, '', 'ttokocha', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(15, '', 'emrahalp', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(16, '', 'deneme', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(18, '', 'cinde', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(21, '', 'enes', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(22, '', 'meryemh', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(24, '', 'whataboutyou', 'LA CASA DE PAPEL ETKİNLİĞİ BAŞLADI! Hemen Özellikler menüsüne, go, go!', 'duyuru'),
(26, 'dctosman', 'ginan', ' adlı kullanıcı size Poly Baba isimli kartı hediye etti!', 'hediye'),
(27, 'dctosman', 'ginan', ' adlı kullanıcı size Elmas isimli kartı hediye etti!', 'hediye'),
(28, 'dctosman', 'ginan', ' adlı kullanıcı size Nejdet isimli kartı hediye etti!', 'hediye'),
(29, 'dctosman', 'ginan', ' adlı kullanıcı size Büyücü Win isimli kartı hediye etti!', 'hediye'),
(30, 'dctosman', 'ginan', ' adlı kullanıcı size Baltaja isimli kartı hediye etti!', 'hediye'),
(31, 'atesberkay', 'ginan', ' adlı kullanıcı size Tırmık isimli kartı hediye etti!', 'hediye'),
(32, 'atesberkay', 'ginan', ' adlı kullanıcı size Trampon isimli kartı hediye etti!', 'hediye'),
(33, 'atesberkay', 'ginan', ' adlı kullanıcı size Kostas Dede isimli kartı hediye etti!', 'hediye'),
(34, 'dctosman', 'ginan', ' adlı kullanıcı size Rio isimli kartı hediye etti!', 'hediye');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `birlikler`
--

CREATE TABLE `birlikler` (
  `birlik_id` int(11) NOT NULL,
  `birlik_adi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `birlik_kod` int(6) NOT NULL,
  `uye1` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `uye2` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `uye3` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `uye4` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `uye5` varchar(120) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `birlikler`
--

INSERT INTO `birlikler` (`birlik_id`, `birlik_adi`, `birlik_kod`, `uye1`, `uye2`, `uye3`, `uye4`, `uye5`) VALUES
(1, 'DOCTORS', 921435, 'ginan', 'dctosman', 'inanreyyan', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etkinlikler`
--

CREATE TABLE `etkinlikler` (
  `id` int(11) NOT NULL,
  `etkinlik_adi` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `etkinlik_asama` int(11) NOT NULL,
  `uye_kadi` varchar(120) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `etkinlikler`
--

INSERT INTO `etkinlikler` (`id`, `etkinlik_adi`, `etkinlik_asama`, `uye_kadi`) VALUES
(1, 'lcdp', 0, 'dctosman');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kartlar`
--

CREATE TABLE `kartlar` (
  `kart_id` int(11) NOT NULL,
  `karakter_adi` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `saldiri` int(11) NOT NULL,
  `savunma` int(11) NOT NULL,
  `guc` int(11) NOT NULL,
  `kart_konum` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` int(11) NOT NULL,
  `seri` int(11) NOT NULL DEFAULT '1',
  `market_durum` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kartlar`
--

INSERT INTO `kartlar` (`kart_id`, `karakter_adi`, `saldiri`, `savunma`, `guc`, `kart_konum`, `fiyat`, `seri`, `market_durum`) VALUES
(1, 'Amazona', 45, 45, 45, 'amazona.png', 0, 1, 1),
(2, 'Baltaja', 70, 50, 60, 'baltaja.png', 2000, 1, 1),
(3, 'Büyücü Win', 75, 50, 62, 'buyucuwin.png', 3000, 1, 1),
(4, 'Enişte', 20, 60, 40, 'eniste.png', 0, 1, 1),
(5, 'Kadim Noforis', 85, 75, 80, 'kadimnoforis.png', 10000, 1, 1),
(6, 'Kostas Dede', 30, 80, 55, 'kostasdede.png', 1500, 1, 1),
(7, 'Lapkin', 30, 20, 25, 'lapkin.png', 0, 1, 1),
(8, 'Novus Ordo', 75, 67, 71, 'novusordo.png', 5000, 1, 1),
(9, 'Senior Rimela', 80, 55, 72, 'seniorrimela.png', 8000, 1, 1),
(10, 'Trampon', 60, 40, 50, 'trampon.png', 1000, 1, 1),
(11, 'Çaylak', 15, 15, 15, 'caylak.png', 0, 1, 1),
(12, 'V', 25, 5, 15, 'v.png', 0, 1, 1),
(13, 'Nejdet', 60, 50, 55, 'nejdet.png', 6000, 1, 1),
(14, 'Hızar', 15, 25, 20, 'hizar.png', 200, 1, 1),
(15, 'Tırmık', 40, 20, 30, 'tirmik.png', 400, 1, 1),
(16, 'Derman', 60, 60, 60, '2derman.png', 7000, 2, 1),
(17, 'Nejdet (Seviye 2)', 75, 60, 68, '2nejdet.png', 11500, 2, 1),
(18, 'Poly Baba', 75, 35, 55, '2polybaba.png', 2000, 2, 1),
(19, 'Scofield', 60, 70, 65, '2scofield.png', 8000, 2, 1),
(20, 'Berlin', 80, 80, 80, '2berlin.png', 15000, 2, 1),
(21, 'Shi', 25, 30, 27, '2shi.png', 600, 2, 1),
(22, 'Manastır', 70, 65, 67, '2manastir.png', 11000, 2, 1),
(23, 'Peace', 55, 75, 65, '2peace.png', 7500, 2, 1),
(24, 'Dımbıllan', 80, 70, 75, '2dimbillan.png', 20000, 2, 1),
(25, 'Fox', 65, 65, 65, '2fox.png', 7500, 2, 1),
(26, 'Elmas', 50, 70, 60, '2elmas.png', 4000, 2, 1),
(27, 'Denver', 55, 50, 53, '2denver.png', 0, 2, 0),
(28, 'Nairobi', 55, 45, 50, '2nairobi.png', 0, 2, 0),
(29, 'Profesör', 60, 80, 70, '2profesor.png', 0, 2, 0),
(30, 'Rio', 55, 50, 53, '2rio.png', 0, 2, 0),
(31, 'Tokyo', 70, 65, 67, '2tokyo.png', 0, 2, 0),
(32, 'Coşkun', 61, 63, 62, '2coskun.png', 5000, 2, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `satin_almalar`
--

CREATE TABLE `satin_almalar` (
  `satis_id` int(11) NOT NULL,
  `uye_kadi` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `alinan_urun_id` int(11) NOT NULL,
  `fiyat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `satin_almalar`
--

INSERT INTO `satin_almalar` (`satis_id`, `uye_kadi`, `alinan_urun_id`, `fiyat`) VALUES
(1, 'mozcan', 1, 0),
(2, 'sinan', 1, 0),
(3, 'sinan', 4, 0),
(4, 'sinan', 7, 0),
(5, 'sinan', 11, 0),
(7, 'sinan', 10, 1000),
(8, 'sinan', 6, 1500),
(9, 'taa', 1, 0),
(10, 'taa', 4, 0),
(11, 'taa', 7, 0),
(12, 'taa', 11, 0),
(14, 'haydar', 1, 0),
(15, 'haydar', 4, 0),
(16, 'haydar', 7, 0),
(17, 'haydar', 11, 0),
(19, 'nehir', 1, 0),
(20, 'nehir', 4, 0),
(21, 'nehir', 7, 0),
(22, 'nehir', 11, 0),
(24, 'dctosman', 1, 0),
(25, 'dctosman', 4, 0),
(26, 'dctosman', 7, 0),
(27, 'dctosman', 11, 0),
(29, 'ttokocha', 1, 0),
(30, 'ttokocha', 4, 0),
(31, 'ttokocha', 7, 0),
(32, 'ttokocha', 11, 0),
(34, 'ttokocha', 14, 200),
(35, 'emrahalp', 1, 0),
(36, 'emrahalp', 4, 0),
(37, 'emrahalp', 7, 0),
(38, 'emrahalp', 11, 0),
(41, 'emrahalp', 14, 200),
(42, 'dctosman', 10, 1000),
(44, 'deneme', 1, 0),
(45, 'deneme', 4, 0),
(46, 'deneme', 7, 0),
(47, 'deneme', 11, 0),
(50, 'inanreyyan', 1, 0),
(51, 'inanreyyan', 4, 0),
(52, 'inanreyyan', 7, 0),
(53, 'inanreyyan', 11, 0),
(55, 'inanreyyan', 14, 200),
(60, 'dctosman', 8, 5000),
(62, 'dctosman', 9, 8000),
(63, 'dctosman', 5, 10000),
(65, 'dctosman', 17, 11500),
(66, 'cinde', 1, 0),
(67, 'cinde', 4, 0),
(68, 'cinde', 7, 0),
(69, 'cinde', 11, 0),
(71, 'dctosman', 19, 8000),
(72, 'dctosman', 20, 15000),
(73, 'dctosman', 23, 7500),
(75, 'iamtester', 1, 0),
(76, 'iamtester', 4, 0),
(77, 'iamtester', 7, 0),
(78, 'iamtester', 11, 0),
(80, 'iamtester', 6, 1500),
(81, 'iamtester', 2, 2000),
(82, 'iamtester', 14, 200),
(84, 'seclorum', 1, 0),
(85, 'seclorum', 4, 0),
(86, 'seclorum', 7, 0),
(87, 'seclorum', 11, 0),
(96, 'umut', 1, 0),
(97, 'umut', 4, 0),
(98, 'umut', 7, 0),
(99, 'umut', 11, 0),
(101, 'umut', 14, 200),
(102, 'atesberkay', 1, 0),
(103, 'atesberkay', 4, 0),
(104, 'atesberkay', 7, 0),
(105, 'atesberkay', 11, 0),
(107, 'enes', 1, 0),
(108, 'enes', 4, 0),
(109, 'enes', 7, 0),
(110, 'enes', 11, 0),
(112, 'enes', 0, 0),
(113, 'enes', 21, 600),
(114, 'enes', 3, 3000),
(115, 'enes', 2, 2000),
(116, 'enes', 5, 10000),
(117, 'meryemh', 1, 0),
(118, 'meryemh', 4, 0),
(119, 'meryemh', 7, 0),
(120, 'meryemh', 11, 0),
(122, 'meryemh', 17, 11500),
(123, 'meryemh', 19, 8000),
(124, 'meryemh', 14, 200),
(125, 'meryemh', 18, 2000),
(126, 'meryemh', 8, 5000),
(127, 'inanreyyan', 21, 600),
(128, 'inanreyyan', 0, 0),
(132, 'atesberkay', 12, 0),
(133, 'inanreyyan', 12, 0),
(135, 'dctosman', 12, 0),
(137, 'inanreyyan', 16, 0),
(139, 'meryemh', 16, 0),
(140, 'meryemh', 21, 600),
(143, 'atesberkay', 14, 200),
(144, 'atesberkay', 21, 600),
(148, 'deneme0', 1, 0),
(149, 'deneme0', 4, 0),
(150, 'deneme0', 7, 0),
(151, 'deneme0', 11, 0),
(152, 'deneme0', 12, 0),
(153, 'deneme0', 17, 11500),
(154, 'deneme0', 20, 15000),
(155, 'deneme0', 22, 11000),
(156, 'deneme0', 24, 20000),
(157, 'deneme0', 19, 8000),
(158, 'atesberkay', 18, 0),
(159, 'iamtester', 16, 4000),
(163, 'whataboutyou', 1, 0),
(164, 'whataboutyou', 4, 0),
(165, 'whataboutyou', 7, 0),
(166, 'whataboutyou', 11, 0),
(167, 'whataboutyou', 12, 0),
(168, 'whataboutyou', 10, 1000),
(169, 'whataboutyou', 15, 400),
(170, 'whataboutyou', 21, 600),
(171, 'whataboutyou', 2, 2000),
(172, 'deneme0', 14, 0),
(173, 'deneme0', 15, 0),
(174, 'deneme0', 21, 0),
(175, 'deneme0', 18, 0),
(180, 'dctosman', 15, 0),
(181, 'deneme0', 6, 0),
(182, 'deneme0', 16, 0),
(183, 'deneme0', 8, 0),
(184, 'deneme0', 13, 0),
(185, 'deneme0', 26, 0),
(186, 'ttokocha', 21, 600),
(187, 'ttokocha', 12, 0),
(188, 'ttokocha', 6, 0),
(189, 'ttokocha', 9, 0),
(190, 'ttokocha', 25, 0),
(191, 'ttokocha', 15, 0),
(192, 'ttokocha', 10, 0),
(193, 'ttokocha', 8, 0),
(194, 'ttokocha', 16, 0),
(195, 'ttokocha', 20, 0),
(196, 'ttokocha', 5, 0),
(197, 'ttokocha', 2, 0),
(198, 'emrahalp4', 1, 0),
(199, 'emrahalp4', 4, 0),
(200, 'emrahalp4', 7, 0),
(201, 'emrahalp4', 11, 0),
(202, 'emrahalp4', 12, 0),
(203, 'emrahalp4', 21, 600),
(204, 'deneme0', 3, 0),
(205, 'deneme0', 25, 0),
(206, 'emrahalp4', 17, 11500),
(207, 'emrahalp4', 20, 15000),
(208, 'emrahalp4', 14, 200),
(209, 'emrahalp4', 15, 400),
(210, 'emrahalp4', 9, 0),
(211, 'emrahalp4', 5, 0),
(212, 'emrahalp4', 13, 0),
(213, 'emrahalp4', 6, 0),
(214, 'emrahalp4', 16, 0),
(215, 'emrahalp4', 25, 0),
(216, 'dctosman', 14, 200),
(218, 'emrahalp4', 18, 0),
(219, 'emrahalp4', 24, 0),
(220, 'emrahalp4', 3, 0),
(221, 'emrahalp4', 16, 0),
(222, 'emrahalp4', 8, 0),
(223, 'emrahalp4', 2, 0),
(224, 'emrahalp4', 16, 0),
(225, 'dctosman', 24, 20000),
(226, 'dctosman', 6, 1500),
(227, 'dctosman', 16, 4000),
(228, 'dctosman', 21, 600),
(229, 'dctosman', 25, 7500),
(231, 'ginan', 1, 0),
(232, 'ginan', 4, 0),
(233, 'ginan', 7, 0),
(234, 'ginan', 11, 0),
(235, 'ginan', 12, 0),
(236, 'atesberkay', 9, 0),
(237, 'atesberkay', 17, 0),
(238, 'atesberkay', 25, 0),
(239, 'atesberkay', 2, 2000),
(240, 'atesberkay', 3, 0),
(241, 'atesberkay', 8, 0),
(242, 'atesberkay', 23, 0),
(243, 'atesberkay', 13, 0),
(244, 'atesberkay', 5, 0),
(245, 'emrahalp4', 10, 0),
(246, 'iamtester', 13, 0),
(248, 'iamtester', 21, 600),
(249, 'iamtester', 18, 0),
(250, 'iamtester', 10, 0),
(251, 'iamtester', 12, 0),
(252, 'ginan', 18, 0),
(253, 'ginan', 26, 0),
(254, 'ginan', 13, 0),
(255, 'ginan', 3, 0),
(256, 'ginan', 2, 0),
(257, 'dctosman', 27, 0),
(258, 'dctosman', 18, 0),
(259, 'dctosman', 3, 0),
(260, 'dctosman', 2, 0),
(261, 'dctosman', 32, 5000),
(262, 'dctosman', 26, 4000),
(263, 'dctosman', 13, 6000),
(264, 'ginan', 15, 0),
(265, 'ginan', 10, 0),
(266, 'ginan', 6, 0),
(268, 'dctosman', 29, 0),
(269, 'dctosman', 31, 0),
(270, 'dctosman', 28, 0),
(271, 'ginan', 30, 0),
(272, 'dctosman', 30, 0),
(273, 'iamtester', 27, 0),
(274, 'iamtester', 30, 0),
(275, 'iamtester', 28, 0),
(276, 'iamtester', 31, 0),
(277, 'iamtester', 20, 0),
(278, 'inanreyyan', 15, 400),
(279, 'inanreyyan', 10, 1000),
(280, 'inanreyyan', 30, 0),
(281, 'inanreyyan', 27, 0),
(282, 'inanreyyan', 31, 0),
(283, 'inanreyyan', 28, 0),
(284, 'inanreyyan', 29, 0),
(285, 'inanreyyan', 20, 0),
(286, 'nehir', 22, 0),
(287, 'nehir', 21, 600),
(288, 'nehir', 12, 0),
(289, 'nehir', 14, 200),
(290, 'nehir', 15, 400),
(291, 'nehir', 10, 1000),
(292, 'nehir', 20, 0),
(293, 'nehir', 29, 0),
(294, 'nehir', 30, 0),
(295, 'nehir', 27, 0),
(296, 'nehir', 8, 0),
(297, 'nehir', 3, 0),
(298, 'nehir', 6, 0),
(299, 'nehir', 28, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `uye_id` int(11) NOT NULL,
  `uye_adsoyad` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `uye_kadi` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `uye_sifre` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `uye_para` int(11) NOT NULL,
  `uye_seviye` int(11) NOT NULL DEFAULT '1',
  `xp` int(11) NOT NULL,
  `gorev` int(11) NOT NULL,
  `son_odul_tarihi` datetime NOT NULL,
  `sandik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uye_adsoyad`, `uye_kadi`, `uye_sifre`, `uye_para`, `uye_seviye`, `xp`, `gorev`, `son_odul_tarihi`, `sandik`) VALUES
(1, 'Umut', 'umut', 'umut0808', 200, 1, 0, 1, '2019-07-12 20:05:20', 0),
(2, 'Meryem İnan', 'meryem', 'meryem12', 0, 1, 0, 0, '0000-00-00 00:00:00', 0),
(3, 'Gülfidan', 'gul', 'gul080808', 0, 1, 0, 0, '0000-00-00 00:00:00', 0),
(4, 'Gülfidan', 'glfdn', 'glfdn55', 0, 1, 0, 0, '0000-00-00 00:00:00', 0),
(5, 'Gülfidan İnan', 'ginan', 'ginan55', 1001, 1, 0, 0, '2019-07-22 21:00:44', 0),
(6, 'Reyyan', 'reyyan', 'reyyan11', 0, 1, 0, 0, '0000-00-00 00:00:00', 0),
(7, 'Seclorum', 'seclorum', 'seclorum', 10400, 1, 0, 0, '2019-07-12 06:11:01', 0),
(8, 'Mehmet Özcan', 'mozcan', '123456', 10, 1, 0, 0, '0000-00-00 00:00:00', 0),
(9, 'Sinan İnan', 'sinan', 'inan120808', 500, 1, 0, 0, '0000-00-00 00:00:00', 0),
(10, 'Teknolojiye Atarlanan Adam', 'taa', 'taa$taa', 140, 1, 0, 0, '0000-00-00 00:00:00', 0),
(11, 'Haydar', 'haydar', 'haydar$', 0, 1, 0, 0, '0000-00-00 00:00:00', 0),
(12, 'Nehir', 'nehir', 'nehir1', 2500, 1, 100, 5, '2019-08-09 19:49:13', 0),
(13, 'Osman İnan', 'dctosman', 'osmany.inan', 9863980, 4, 6800, 4, '2019-08-09 19:49:48', 467),
(14, 'Tey Tey Okocha', 'ttokocha', 'okocha', 7999, 1, 0, 5, '2019-07-17 03:35:31', 5),
(15, 'Emrah Alp', 'emrahalp', 'emrahalp1', 680, 2, 2221, 0, '0000-00-00 00:00:00', 0),
(16, 'Deneme', 'deneme', 'deneme', 400, 1, 300, 0, '0000-00-00 00:00:00', 0),
(17, 'Reyyan', 'inanreyyan', 'reyyaninan', 3150, 1, 100, 5, '2019-08-06 17:57:00', 0),
(18, 'Cınde', 'cinde', 'cinde1', 3000, 1, 100, 0, '0000-00-00 00:00:00', 0),
(19, 'Tester', 'iamtester', 'iamtester', 2200, 3, 3820, 5, '2019-08-06 17:52:13', 0),
(20, 'Berkay Ateş', 'atesberkay', '000000', 20500, 1, 100, 5, '2019-08-06 13:38:29', 0),
(21, 'Enes', 'enes', 'enes2009', 7750, 1, 600, 3, '2019-07-17 09:00:22', 0),
(22, 'Meryem Hanne', 'meryemh', '123456', 99973999, 1, 0, 3, '2019-07-13 23:00:25', 0),
(23, 'Deneme', 'deneme0', 'deneme', 74701, 1, 500, 0, '2019-07-16 21:18:23', 41),
(24, 'Challenger', 'whataboutyou', '000000', 860, 3, 3700, 3, '2019-07-16 05:39:04', 0),
(25, 'Eymen Esat', 'emrahalp4', 'eymenesatkilavuz', 114400, 2, 2800, 5, '2019-07-30 21:49:39', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye_bilgiler`
--

CREATE TABLE `uye_bilgiler` (
  `uye_kadi` int(11) NOT NULL,
  `uye_cinsiyet` int(11) NOT NULL,
  `uye_kayit_tarihi` datetime NOT NULL,
  `uye_guvenliksoru` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `uye_guvenlikcevap` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `uye_ppurl` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye_kartlar`
--

CREATE TABLE `uye_kartlar` (
  `sira` int(11) NOT NULL,
  `uye_kadi` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `kart1_id` int(11) NOT NULL,
  `kart2_id` int(11) NOT NULL,
  `kart3_id` int(11) NOT NULL,
  `kart4_id` int(11) NOT NULL,
  `kart5_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uye_kartlar`
--

INSERT INTO `uye_kartlar` (`sira`, `uye_kadi`, `kart1_id`, `kart2_id`, `kart3_id`, `kart4_id`, `kart5_id`) VALUES
(1, 'taa', 1, 4, 7, 11, 12),
(2, 'dctosman', 20, 24, 17, 32, 27),
(3, 'ttokocha', 1, 4, 7, 14, 12),
(4, 'emrahalp', 1, 4, 15, 7, 14),
(5, 'deneme', 4, 15, 1, 7, 11),
(6, 'inanreyyan', 1, 4, 7, 14, 11),
(7, 'cinde', 1, 4, 7, 11, 12),
(8, 'iamtester', 2, 6, 1, 4, 15),
(9, 'umut', 1, 4, 7, 11, 12),
(10, 'atesberkay', 1, 4, 7, 11, 17),
(11, 'enes', 5, 3, 2, 1, 4),
(12, 'meryemh', 1, 4, 7, 11, 12),
(13, 'deneme0', 20, 24, 17, 22, 19),
(14, 'whataboutyou', 2, 10, 1, 4, 15),
(15, 'emrahalp4', 18, 20, 24, 5, 25),
(16, 'ginan', 1, 4, 7, 11, 12),
(17, 'nehir', 20, 29, 6, 8, 28);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bildirimler`
--
ALTER TABLE `bildirimler`
  ADD PRIMARY KEY (`bildirim_id`);

--
-- Tablo için indeksler `birlikler`
--
ALTER TABLE `birlikler`
  ADD PRIMARY KEY (`birlik_id`);

--
-- Tablo için indeksler `etkinlikler`
--
ALTER TABLE `etkinlikler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kartlar`
--
ALTER TABLE `kartlar`
  ADD PRIMARY KEY (`kart_id`);

--
-- Tablo için indeksler `satin_almalar`
--
ALTER TABLE `satin_almalar`
  ADD PRIMARY KEY (`satis_id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`uye_id`);

--
-- Tablo için indeksler `uye_bilgiler`
--
ALTER TABLE `uye_bilgiler`
  ADD UNIQUE KEY `uye_kadi` (`uye_kadi`);

--
-- Tablo için indeksler `uye_kartlar`
--
ALTER TABLE `uye_kartlar`
  ADD PRIMARY KEY (`sira`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bildirimler`
--
ALTER TABLE `bildirimler`
  MODIFY `bildirim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Tablo için AUTO_INCREMENT değeri `birlikler`
--
ALTER TABLE `birlikler`
  MODIFY `birlik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `etkinlikler`
--
ALTER TABLE `etkinlikler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `kartlar`
--
ALTER TABLE `kartlar`
  MODIFY `kart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Tablo için AUTO_INCREMENT değeri `satin_almalar`
--
ALTER TABLE `satin_almalar`
  MODIFY `satis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;
--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Tablo için AUTO_INCREMENT değeri `uye_kartlar`
--
ALTER TABLE `uye_kartlar`
  MODIFY `sira` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
