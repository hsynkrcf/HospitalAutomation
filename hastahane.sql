-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 22 May 2018, 01:57:11
-- Sunucu sürümü: 5.6.11-log
-- PHP Sürümü: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `hastane`
--
CREATE DATABASE IF NOT EXISTS `hastane` DEFAULT CHARACTER SET latin5 COLLATE latin5_turkish_ci;
USE `hastane`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolum`
--

CREATE TABLE IF NOT EXISTS `bolum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bolum_adi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin5 AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `bolum`
--

INSERT INTO `bolum` (`id`, `bolum_adi`) VALUES
(1, 'Genel Cerrahi'),
(2, 'Göğüs Cerrahi'),
(3, 'Nefroloji'),
(4, 'Beyin Ve Sinir Cerrahisi'),
(5, 'Hematoloji'),
(6, 'Üroloji');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hastalar`
--

CREATE TABLE IF NOT EXISTS `hastalar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tc` varchar(50) NOT NULL,
  `adi` varchar(50) NOT NULL,
  `soyadi` varchar(50) NOT NULL,
  `cinsiyet` char(1) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin5 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `hastalar`
--

INSERT INTO `hastalar` (`id`, `tc`, `adi`, `soyadi`, `cinsiyet`, `sifre`) VALUES
(1, '11223344551', 'Elif', 'Gözüaç', 'B', '123456789'),
(2, '29986128455', 'Buket', 'Akça', 'B', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `kullanici_adi` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_adi`, `sifre`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personeller`
--

CREATE TABLE IF NOT EXISTS `personeller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tc` varchar(50) NOT NULL,
  `adi` varchar(50) NOT NULL,
  `soyadi` varchar(50) NOT NULL,
  `cinsiyet` char(1) NOT NULL,
  `bolum` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin5 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `personeller`
--

INSERT INTO `personeller` (`id`, `tc`, `adi`, `soyadi`, `cinsiyet`, `bolum`, `sifre`) VALUES
(1, '29986128454', 'Buket', 'AKÇAM', 'B', 'Nefroloji', '123456'),
(2, '12345678912', 'Efe', 'AKÇAM', 'E', 'Genel Cerrahi', '12345'),
(3, '22222222222', 'Ayşe', 'Veli', 'B', 'Beyin Ve Sinir Cerrahisi', '123'),
(4, '12345678999', 'Ayhan', 'Baygül', 'E', 'Beyin Ve Sinir Cerrahisi', '123'),
(5, '12345678999', 'Ayhan', 'Baygül', 'E', 'Beyin Ve Sinir Cerrahisi', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevual`
--

CREATE TABLE IF NOT EXISTS `randevual` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gun` varchar(50) NOT NULL,
  `ay` varchar(50) NOT NULL,
  `yil` varchar(50) NOT NULL,
  `bolum` varchar(50) NOT NULL,
  `hekim` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin5 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
