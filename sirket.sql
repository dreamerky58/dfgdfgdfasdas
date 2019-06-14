-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Şub 2016, 22:09:07
-- Sunucu sürümü: 10.1.9-MariaDB
-- PHP Sürümü: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sirket`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact_table`
--

CREATE TABLE `contact_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `eposta` varchar(255) DEFAULT NULL,
  `message` text,
  `create_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `contact_table`
--

INSERT INTO `contact_table` (`id`, `name`, `eposta`, `message`, `create_time`) VALUES
(1, 'ghj', 'ghjghj@gmail.com', 'dfgsdfgsdfg', '2016-02-15 21:47:46');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `page_setting_table`
--

CREATE TABLE `page_setting_table` (
  `id` int(11) NOT NULL,
  `keywords` text,
  `desciription` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `page_setting_table`
--

INSERT INTO `page_setting_table` (`id`, `keywords`, `desciription`) VALUES
(1, 'cms, system, uygulama, aricpress, emre balci', 'ARICPRESS yeni firma CMS uygulamasıdır.'),
(2, 'hizmeti, hizmetler, hizmetlerimiz, hizmet aricpress', 'Hizmetlerimiz, ARICPRESS'),
(3, 'proje, proj, projects, projeler, projelerimiz', 'Projelerimiz | ARICPRESS'),
(4, 'hakkımıda', 'hakkımızda'),
(5, 'iletişim', 'iletişim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `project_table`
--

CREATE TABLE `project_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `create_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `project_table`
--

INSERT INTO `project_table` (`id`, `title`, `content`, `create_time`) VALUES
(4, 'En iyi Website 1', 'En iyi Website olmasına ragmen çok iyiy :Dd:DE:D', '2016-02-15 20:32:40'),
(5, 'HTML 5 - CSS', 'En iyi Yaptığımız sistem ve HTML sistemi Sizin için yazıldı. sizin için kodlandı !!!!', '2016-02-15 20:33:36');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services_table`
--

CREATE TABLE `services_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `create_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `services_table`
--

INSERT INTO `services_table` (`id`, `title`, `content`, `create_time`) VALUES
(1, 'PHP', 'PHP En iyi dinamik uygulama dilidir. Web tabanlı çalışmaktadır. Herzaman çok hızlıdır. mySQL birlikteliği ile işlerimizi daha kolay hale getirir', '2016-02-15 21:22:58'),
(2, 'JavaScript', 'JavaScript ClientSide Taraflı çalışan bir istemci dilidir. Çok kullanışlıdır', '2016-02-15 20:18:50'),
(3, 'CSS', 'Tasarım dilidir. İstemci taraflı çalışır. Güzeldir...', '2016-02-15 21:30:12'),
(4, 'HTML5', 'En iyi web temeli olan dildir. Bu seferki 5''inci versiyonu ile dillere destan olmuştur', '2016-02-15 21:27:46');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider_table`
--

CREATE TABLE `slider_table` (
  `id` int(11) NOT NULL,
  `create_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `slider_table`
--

INSERT INTO `slider_table` (`id`, `create_time`) VALUES
(6, '2016-02-15 21:09:30'),
(7, '2016-02-15 21:09:40');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `system_table`
--

CREATE TABLE `system_table` (
  `admin_user` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `google_maps` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `info` text,
  `company_name` varchar(255) DEFAULT NULL,
  `eposta` varchar(255) DEFAULT NULL,
  `google_site_verification` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `system_table`
--

INSERT INTO `system_table` (`admin_user`, `admin_password`, `copyright`, `facebook`, `twitter`, `pinterest`, `google_plus`, `google_maps`, `slogan`, `adres`, `tel`, `info`, `company_name`, `eposta`, `google_site_verification`) VALUES
('admin', 'demo', 'Her hakkı saklıdır. 2016', 'eballci', 'eballci', 'eballci', 'eballci', '40.25541,39.54233', 'Sizin için en iyisini yapmaya herzaman hazırız...', 'Sırasöğütler mahallesi. Muhsinyazıcıoğlu caddesi. No:37 Darıca/KOCAELİ', '905444242541', 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem', 'ARICPRESS', 'info@aricpress.com', 'd58f4gs6dg45sd6f5g614sdf6g541sdfg6');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `page_setting_table`
--
ALTER TABLE `page_setting_table`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `project_table`
--
ALTER TABLE `project_table`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `services_table`
--
ALTER TABLE `services_table`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider_table`
--
ALTER TABLE `slider_table`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `page_setting_table`
--
ALTER TABLE `page_setting_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `project_table`
--
ALTER TABLE `project_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `services_table`
--
ALTER TABLE `services_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `slider_table`
--
ALTER TABLE `slider_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
