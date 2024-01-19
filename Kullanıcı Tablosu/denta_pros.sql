-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Oca 2024, 14:57:21
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `denta_pros`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `birimler`
--

CREATE TABLE `birimler` (
  `id` int(11) NOT NULL,
  `birim_adi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `birimler`
--

INSERT INTO `birimler` (`id`, `birim_adi`) VALUES
(1, 'Genel Muayene'),
(2, 'Diş Temizliği'),
(3, 'Ortodonti'),
(4, 'Estetik Diş Hekimliği'),
(5, 'Oral Cerrahi'),
(6, 'Periodontoloji'),
(7, 'Çocuk Diş Hekimliği'),
(8, 'Protez'),
(9, 'Implantoloji'),
(10, 'Endodonti');


-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) DEFAULT NULL,
  `soyad` varchar(50) DEFAULT NULL,
  `telefon` varchar(15) DEFAULT NULL,
  `tc` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dogum_tarihi` date DEFAULT NULL,
  `kayit_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `bolum` varchar(50) DEFAULT NULL,
  `birim_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `ad`, `soyad`, `telefon`, `tc`, `email`, `dogum_tarihi`, `kayit_tarihi`, `bolum`, `birim_id`) VALUES
(1, 'Ahmet', 'Yılmaz', '555-1234567', '12345678901', 'ahmet@email.com', '1990-01-15', '2024-01-19 13:41:58', 'Bilgisayar Mühendisliği', 1),
(2, 'Mehmet', 'Kara', '555-9876543', '98765432109', 'mehmet@email.com', '1985-05-20', '2024-01-19 13:41:58', 'Elektrik Elektronik Mühendisliği', 2),
(3, 'Ayşe', 'Demir', '555-2345678', '23456789012', 'ayse@email.com', '1995-08-10', '2024-01-19 13:41:58', 'Makine Mühendisliği', 3),
(4, 'Fatma', 'Kaya', '555-8765432', '87654321098', 'fatma@email.com', '1988-03-25', '2024-01-19 13:41:58', 'Endüstri Mühendisliği', 4),
(5, 'Ali', 'Çelik', '555-3456789', '34567890123', 'ali@email.com', '1992-11-02', '2024-01-19 13:41:58', 'İnşaat Mühendisliği', 2),
(6, 'Zeynep', 'Şahin', '555-6543210', '65432109876', 'zeynep@email.com', '1980-07-18', '2024-01-19 13:41:58', 'Bilgisayar Bilimleri', 4),
(7, 'Mustafa', 'Yıldız', '555-4321098', '43210987654', 'mustafa@email.com', '1987-09-12', '2024-01-19 13:41:58', 'Uçak Mühendisliği', 9),
(8, 'Gizem', 'Arslan', '555-1098765', '10987654321', 'gizem@email.com', '1998-04-30', '2024-01-19 13:41:58', 'Kimya Mühendisliği', 10),
(9, 'Emre', 'Can', '555-5678901', '56789012345', 'emre@email.com', '1993-12-05', '2024-01-19 13:41:58', 'Biyomedikal Mühendisliği', 1),
(10, 'Selin', 'Aksoy', '555-8901234', '89012345678', 'selin@email.com', '1983-06-15', '2024-01-19 13:41:58', 'Uzay Mühendisliği', 2);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `birimler`
--
ALTER TABLE `birimler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `birimler`
--
ALTER TABLE `birimler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
