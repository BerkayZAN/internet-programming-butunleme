-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 12 Şub 2022, 13:53:17
-- Sunucu sürümü: 10.3.32-MariaDB
-- PHP Sürümü: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `faiktnmr_teknikservisv3`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `site_title` char(70) COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_meta` char(160) COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_description` char(160) COLLATE utf8_turkish_ci DEFAULT NULL,
  `banner_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_mail` char(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_mail_sifre` char(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_mail_host` char(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_mail_port` char(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `firma_telefon` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `firma_telefon1` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `firma_telefon2` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `whatsapp` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `firma_fax` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `firma_email` varchar(40) COLLATE utf8_turkish_ci DEFAULT NULL,
  `firma_adres` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `google_maps` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `facebook` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `instagram` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `twitter` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `gplus` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `linkedin` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `pinterest` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `firma_adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `renk` varchar(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `copyright` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `footer_adres` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `logo` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `footer_logo` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `site_title`, `site_meta`, `site_description`, `banner_resim`, `site_mail`, `site_mail_sifre`, `site_mail_host`, `site_mail_port`, `google_analytics`, `firma_telefon`, `firma_telefon1`, `firma_telefon2`, `whatsapp`, `firma_fax`, `firma_email`, `firma_adres`, `google_maps`, `facebook`, `instagram`, `twitter`, `gplus`, `linkedin`, `pinterest`, `firma_adi`, `renk`, `copyright`, `footer_adres`, `logo`, `footer_logo`) VALUES
(1, 'Teknik Servis V3', 'Teknik Servis V3', 'Teknik Servis V3', NULL, '#', '#', '#', '#', '#', '0539 596 53 87', '0539 596 53 87', '0539 596 53 87', '', '', 'info@utwebtasarim.com', 'İstanbul / Avrupa', '                  	<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192697.7932759511!2d28.8720964464606!3d41.00549580940238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1640119172791!5m2!1str!2str\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe> \r\n                  ', '#', '#', '#', '#', '#', '#', 'Teknik Servis V3', '#', '#', '#', '9918-logo.png', '5107-footerlogo.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

CREATE TABLE `duyurular` (
  `id` int(11) NOT NULL,
  `adi` text COLLATE utf8_turkish_ci NOT NULL,
  `sira` int(11) NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(3) NOT NULL,
  `adi_en` text COLLATE utf8_turkish_ci NOT NULL,
  `adi_fr` text COLLATE utf8_turkish_ci NOT NULL,
  `adi_ar` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama_en` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama_fr` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama_ar` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ulke` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ulke_en` text COLLATE utf8_turkish_ci NOT NULL,
  `ulke_fr` text COLLATE utf8_turkish_ci NOT NULL,
  `ulke_ar` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ebulten`
--

CREATE TABLE `ebulten` (
  `id` int(11) NOT NULL,
  `mail` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fotograf_galeri`
--

CREATE TABLE `fotograf_galeri` (
  `id` int(11) NOT NULL,
  `kategori` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` int(11) DEFAULT NULL,
  `resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` int(3) DEFAULT NULL,
  `adi_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `banner_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki_de` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fotograf_galeri_kategori`
--

CREATE TABLE `fotograf_galeri_kategori` (
  `id` int(11) NOT NULL,
  `kategori_adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_title` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_description` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` int(11) DEFAULT NULL,
  `kategori_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` int(3) DEFAULT NULL,
  `banner_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_linki` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_linki_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_linki_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_linki_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_linki_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_linki_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `ustid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`id`, `urun_id`, `resim`) VALUES
(1198, 469, '7092_asdad.PNG'),
(1197, 469, '9594_ronaldo.jpg'),
(1196, 26, '4172_ronaldo.jpg'),
(1199, 471, '8118_1e0e4.jpg'),
(1200, 471, '2069_pic1.jpg'),
(1201, 535, '776_941-referans.png'),
(1202, 535, '7018_ehliyet-sinavi.jpg'),
(1222, 547, '9093_images.jpg'),
(1205, 553, '2740_images.jpg'),
(1206, 553, '8227_Motorlu-Perde-4.jpg'),
(1207, 560, '1299_a.jpg'),
(1208, 560, '6466_images.jpg'),
(1209, 559, '5197_a.jpg'),
(1210, 559, '2945_images.jpg'),
(1211, 558, '3719_images.jpg'),
(1214, 557, '3394_p.jpg'),
(1213, 557, '1241_images.jpg'),
(1215, 556, '1708_a.jpg'),
(1216, 556, '6665_images.jpg'),
(1217, 555, '4545_a.jpg'),
(1218, 555, '1770_images.jpg'),
(1219, 554, '6576_kisbahcesi-perdesi5.jpg'),
(1220, 554, '922_kis-bahcesi-perdesi-1030x684.jpg'),
(1221, 547, '5731_r.jpg'),
(1227, 595, '5901_1.jpg'),
(1228, 595, '3473_2.jpg'),
(1229, 596, '3141_2.jpg'),
(1230, 596, '8691_22.jpg'),
(1231, 597, '1509_3.jpg'),
(1232, 597, '9804_33.jpg'),
(1233, 598, '7856_4.jpg'),
(1234, 598, '8417_44.jpg'),
(1235, 599, '4246_5.jpg'),
(1236, 599, '1988_55.jpg'),
(1237, 600, '8165_6.jpg'),
(1238, 600, '6524_66.jpg'),
(1239, 601, '847_7.jpg'),
(1240, 601, '2545_77.jpg'),
(1241, 602, '4818_8.jpg'),
(1242, 602, '8788_88.jpg'),
(1243, 603, '5706_9.jpg'),
(1244, 603, '3167_99.jpg'),
(1245, 604, '88_10.jpg'),
(1246, 604, '8166_1010.jpg'),
(1247, 605, '3681_11.jpg'),
(1248, 605, '6797_1111.jpg'),
(1249, 606, '5004_12.jpg'),
(1250, 606, '3372_1212.jpg'),
(1251, 607, '8281_13.jpg'),
(1252, 607, '9255_1313.jpg'),
(1253, 608, '3485_14.jpg'),
(1254, 608, '8773_1414.jpg'),
(1255, 609, '9067_15.jpg'),
(1256, 609, '1667_1515.jpg'),
(1257, 610, '3365_16.jpg'),
(1258, 610, '4575_1616.jpg'),
(1259, 611, '564_17.jpg'),
(1260, 611, '8904_1717.jpg'),
(1261, 612, '2331_18.jpg'),
(1262, 612, '2144_1818.jpg'),
(1263, 613, '3469_19.jpg'),
(1264, 613, '5698_1919.jpg'),
(1265, 614, '6217_20.jpg'),
(1266, 614, '614_2020.jpg'),
(1267, 615, '584_21.jpg'),
(1268, 615, '6369_2121.jpg'),
(1269, 616, '3067_2222.jpg'),
(1270, 616, '8138_22222.jpg'),
(1271, 617, '591_23.jpg'),
(1272, 617, '4252_2323.jpg'),
(1273, 618, '1641_24.jpg'),
(1274, 618, '3465_2424.jpg'),
(1275, 619, '710_25.jpg'),
(1276, 619, '7105_2525.jpg'),
(1277, 620, '2886_26.jpg'),
(1278, 620, '9072_2626.jpg'),
(1279, 621, '7990_27.jpg'),
(1280, 621, '3161_2727.jpg'),
(1281, 622, '2085_28.jpg'),
(1282, 622, '8313_2828.jpg'),
(1283, 623, '5235_29.jpg'),
(1284, 623, '2702_2929.jpg'),
(1285, 624, '3097_30.jpg'),
(1286, 624, '6238_3030.jpg'),
(1287, 625, '2741_31.jpg'),
(1288, 625, '8378_3131.jpg'),
(1289, 626, '5540_32.jpg'),
(1290, 626, '3271_3232.jpg'),
(1291, 627, '442_333.jpg'),
(1292, 627, '1640_3333.jpg'),
(1293, 628, '547_34.jpg'),
(1294, 628, '725_3434.jpg'),
(1295, 629, '2148_35.jpg'),
(1296, 629, '5922_3535.jpg'),
(1297, 630, '5550_36.jpg'),
(1298, 630, '4205_3636.jpg'),
(1299, 631, '454_37.jpg'),
(1300, 631, '5474_3737.jpg'),
(1301, 632, '7830_38.jpg'),
(1302, 632, '6904_3838.jpg'),
(1303, 633, '6235_39.jpg'),
(1304, 633, '7234_3939.jpg'),
(1305, 634, '1303_40.jpg'),
(1306, 634, '7133_4040.jpg'),
(1307, 635, '4297_41.jpg'),
(1308, 635, '6207_4141.jpg'),
(1309, 636, '1556_42.jpg'),
(1310, 636, '9091_4242.jpg'),
(1311, 637, '444_43.jpg'),
(1312, 637, '5523_4343.jpg'),
(1313, 638, '2318_444.jpg'),
(1314, 638, '3425_4444.jpg'),
(1315, 639, '5915_45.jpg'),
(1316, 639, '7769_4545.jpg'),
(1317, 640, '7590_46.jpg'),
(1318, 640, '3171_4646.jpg'),
(1319, 641, '1864_47.jpg'),
(1320, 641, '524_4747.jpg'),
(1321, 642, '2615_48.jpg'),
(1322, 642, '1572_4848.jpg'),
(1323, 643, '4228_49.jpg'),
(1324, 643, '5693_4949.jpg'),
(1325, 644, '3570_50.jpg'),
(1326, 644, '7460_5050.jpg'),
(1327, 645, '154_51.jpg'),
(1328, 645, '3735_5151.jpg'),
(1329, 646, '1312_52.jpg'),
(1330, 646, '5269_5252.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri_kat`
--

CREATE TABLE `galeri_kat` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galeri_kat`
--

INSERT INTO `galeri_kat` (`id`, `urun_id`, `resim`) VALUES
(57, 23, '6334_asdad.PNG'),
(56, 23, '8343_ronaldo.jpg'),
(55, 23, '1015_ronaldo.jpg'),
(54, 25, '4760_ronaldo.jpg'),
(49, 468, '6153_ronaldo.jpg'),
(50, 468, '2013_asdad.PNG'),
(51, 468, '9806_ay.jpg'),
(53, 25, '5367_asdad.PNG'),
(58, 28, '9064_02.jpg'),
(59, 28, '8341_01.jpg'),
(60, 28, '915_03.jpg'),
(61, 28, '2375_amkcocu.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri_pro`
--

CREATE TABLE `galeri_pro` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galeri_pro`
--

INSERT INTO `galeri_pro` (`id`, `urun_id`, `resim`) VALUES
(134, 23, '1481_asdad.PNG'),
(133, 23, '5809_ronaldo.jpg'),
(136, 36, '1691_aslii.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri_sayfa`
--

CREATE TABLE `galeri_sayfa` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galeri_sayfa`
--

INSERT INTO `galeri_sayfa` (`id`, `urun_id`, `resim`) VALUES
(134, 23, '1481_asdad.PNG'),
(133, 23, '5809_ronaldo.jpg'),
(135, 21, '917_ehliyet-sinavi.jpg'),
(136, 21, '5444_ehliyet-randevu-1024x537.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri_sube`
--

CREATE TABLE `galeri_sube` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galeri_sube`
--

INSERT INTO `galeri_sube` (`id`, `urun_id`, `resim`) VALUES
(134, 23, '1481_asdad.PNG'),
(133, 23, '5809_ronaldo.jpg'),
(135, 21, '917_ehliyet-sinavi.jpg'),
(136, 21, '5444_ehliyet-randevu-1024x537.jpg'),
(138, 38, '2221_bb.jpg'),
(140, 37, '8397_omer.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `id` int(11) NOT NULL,
  `kategori` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` int(11) DEFAULT NULL,
  `aciklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` int(3) DEFAULT NULL,
  `adi_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `banner_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_title` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_description` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `hit` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `kategori`, `adi`, `sira`, `aciklama`, `resim`, `durum`, `adi_en`, `adi_fr`, `adi_ar`, `adi_ru`, `adi_de`, `seo`, `banner_resim`, `site_title`, `site_description`, `aciklama_en`, `aciklama_fr`, `aciklama_ar`, `aciklama_ru`, `aciklama_de`, `hit`) VALUES
(51, NULL, 'Web sitemiz yenileniyor', 1, '<div>\r\n	<p>\r\n		Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n	<div>\r\n		&nbsp;</div>\r\n</div>\r\n<div>\r\n	&nbsp;</div>\r\n', '775-web-sitemiz-yenileniyor.jpg', 0, NULL, NULL, NULL, NULL, NULL, 'web-sitemiz-yenileniyor', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(52, NULL, 'Klima Bakım', 2, '<div>\r\n	<p>\r\n		Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n	<div>\r\n		&nbsp;</div>\r\n</div>\r\n<div>\r\n	&nbsp;</div>\r\n', '298-klima-bakim.jpg', 0, NULL, NULL, NULL, NULL, NULL, 'klima-bakim', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(53, NULL, 'Klima Onarım', 3, '<div>\r\n	<p>\r\n		Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n	<div>\r\n		&nbsp;</div>\r\n</div>\r\n<div>\r\n	&nbsp;</div>\r\n', '981-klima-onarim.jpg', 0, NULL, NULL, NULL, NULL, NULL, 'klima-onarim', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haber_kategori`
--

CREATE TABLE `haber_kategori` (
  `id` int(15) NOT NULL,
  `sira` int(15) NOT NULL,
  `kategori_adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` int(3) DEFAULT NULL,
  `tarih` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `banner_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_title` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_description` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `ustid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetgaleri`
--

CREATE TABLE `hizmetgaleri` (
  `id` int(11) NOT NULL,
  `kategori` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi` text COLLATE utf8_turkish_ci NOT NULL,
  `sira` int(11) NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(3) NOT NULL,
  `adi_en` text COLLATE utf8_turkish_ci NOT NULL,
  `adi_fr` text COLLATE utf8_turkish_ci NOT NULL,
  `adi_ar` text COLLATE utf8_turkish_ci NOT NULL,
  `linki` text COLLATE utf8_turkish_ci NOT NULL,
  `linki_en` text COLLATE utf8_turkish_ci NOT NULL,
  `linki_fr` text COLLATE utf8_turkish_ci NOT NULL,
  `linki_ar` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hizmetgaleri`
--

INSERT INTO `hizmetgaleri` (`id`, `kategori`, `adi`, `sira`, `resim`, `durum`, `adi_en`, `adi_fr`, `adi_ar`, `linki`, `linki_en`, `linki_fr`, `linki_ar`) VALUES
(22, NULL, '', 0, 'lib/images/hizmetgaleri/k2.PNG', 0, '', '', '', '', '', '', ''),
(21, NULL, '', 0, 'lib/images/hizmetgaleri/s1.jpg', 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `id` int(11) NOT NULL,
  `kategori` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` int(11) DEFAULT NULL,
  `aciklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` int(3) DEFAULT NULL,
  `adi_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `icon` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `banner_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_title` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_description` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `hit` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`id`, `kategori`, `adi`, `sira`, `aciklama`, `resim`, `durum`, `adi_en`, `adi_fr`, `adi_ar`, `adi_ru`, `adi_de`, `icon`, `seo`, `banner_resim`, `site_title`, `site_description`, `aciklama_en`, `aciklama_fr`, `aciklama_ar`, `aciklama_ru`, `aciklama_de`, `hit`) VALUES
(81, '266', 'Bosch Klima Servisi', 36, '<div>\r\n	<p>\r\n		Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n	<div>\r\n		&nbsp;</div>\r\n</div>\r\n<div>\r\n	&nbsp;</div>\r\n', '657-avcilar-klima-servisi.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'bosch-klima-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(86, '266', 'Siemens Klima Servisi', 2, '<div>\r\n	<p>\r\n		Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n	<div>\r\n		&nbsp;</div>\r\n</div>\r\n<div>\r\n	&nbsp;</div>\r\n', '866-siemens-klima-servisi.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'siemens-klima-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(87, '266', 'Arçelik Klima Servisi', 3, '<div>\r\n	<p>\r\n		Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n	<div>\r\n		&nbsp;</div>\r\n</div>\r\n<div>\r\n	&nbsp;</div>\r\n', '890-arcelik-klima-servisi.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'arcelik-klima-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(88, '264', 'Bosch Beyaz Eşya Servisi', 1, '<div>\r\n	<p>\r\n		Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n	<div>\r\n		&nbsp;</div>\r\n</div>\r\n<div>\r\n	&nbsp;</div>\r\n', '553-bosch-beyaz-esya-servisi.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'bosch-beyaz-esya-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(89, '264', 'Siemens Beyaz Eşya Servisi', 4, '<div>\r\n	<p>\r\n		Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n	<div>\r\n		&nbsp;</div>\r\n</div>\r\n<div>\r\n	&nbsp;</div>\r\n', '40-siemens-beyaz-esya-servisi.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'siemens-beyaz-esya-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(90, '264', 'Arçelik Beyaz Eşya Servisi', 5, '<div>\r\n	<p>\r\n		Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n	<div>\r\n		&nbsp;</div>\r\n</div>\r\n<div>\r\n	&nbsp;</div>\r\n', '720-arcelik-beyaz-esya-servisi.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'arcelik-beyaz-esya-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(91, '264', 'Vestel Beyaz Eşya Servisi', 6, '<div>\r\n	<p>\r\n		Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n	<div>\r\n		&nbsp;</div>\r\n</div>\r\n<div>\r\n	&nbsp;</div>\r\n', '419-vestel-beyaz-esya-servisi.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'vestel-beyaz-esya-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(92, '264', 'Ariston Beyaz Eşya Servisi', 7, '<div>\r\n	<p>\r\n		Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n	<div>\r\n		&nbsp;</div>\r\n</div>\r\n<div>\r\n	&nbsp;</div>\r\n', '992-ariston-beyaz-esya-servisi.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'ariston-beyaz-esya-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(93, '265', 'Bosch Televiyoz Servisi', 1, '<p style=\"text-align: justify;\">\r\n	Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '825-bosch-televiyoz-servisi.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'bosch-televiyoz-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(94, '265', 'Siemens Televizyon Servisi', 2, '<p style=\"text-align: justify;\">\r\n	Siemens Televizyon Bakım ve Onarım servisi en iyi tamir servisi ve ustaları ile &ccedil;alışmaktadır. Siemens Television elektronik servis merkezimizi g&uuml;venle emanet edebilirsiniz. Siemens Televizyon servis at&ouml;lyesi ve merkezi b&uuml;y&uuml;k &ouml;nem taşımaktadır. Siemens Televizyon teknik servisi, t&uuml;m televizyon lcd plazma projeksiyonunu onarabilir.</p>\r\n<p style=\"text-align: justify;\">\r\n	Uzman Siemens Televizyon teknisyenleri ve teknisyen asistanları ile Siemens Televizyon hizmeti olarak hizmet vermekteyiz. Bize duyduğunuz g&uuml;ven ve memnuniyetle kendimizi geliştirerek sorunlarınızda size yardımcı olmaya &ccedil;alışıyoruz. İstekleriniz doğrultusunda 7/24 kesintisiz, kaliteli hizmet sunuyoruz.</p>\r\n<p style=\"text-align: justify;\">\r\n	Sizi yanlış y&ouml;nlendirmemek i&ccedil;in, g&uuml;veninizi sarsmamak i&ccedil;in kalitemiz ve &ccedil;izgimizden &ouml;d&uuml;n vermeden kararlılıkla &ccedil;alışmaya devam ediyoruz.</p>\r\n', '14-siemens-televizyon-servisi.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'siemens-televizyon-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(95, '265', 'Arçelik Televizyon Servisi', 3, '<p style=\"text-align: justify;\">\r\n	AR&Ccedil;ELİK Televizyon servisi, AR&Ccedil;ELİK marka t&uuml;m televizyon &uuml;r&uuml;nlerinde teknik servis imkanı sağlamaktadır. Plazma, LCD ve normal televizyon arızalarında yerinde servis imkanı sunan AR&Ccedil;ELİK Televizyon Servisi bakım, onarım ve montaj işlemleri yapmaktadır. Arızalı &uuml;r&uuml;nleriniz yerinde, konusunda deneyimli ustalarımız sayesinde en kısa s&uuml;rede onarılmaktadır. Servis elemanlarımız servis yapılacak yere t&uuml;m yedek par&ccedil;alarla gelmektedir. Bu sayede &uuml;r&uuml;n&uuml;n hangi par&ccedil;asında sorun var ise ona g&ouml;re par&ccedil;a değişikliği o anda yapılır ve televizyonunuz &ccedil;alışır hale getirilir.</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	AR&Ccedil;ELİK marka televizyon cihazınızın arızası yerinde &ccedil;&ouml;z&uuml;lemeyecek gibiyse cihaz sizlerden alınarak merkezimize getirilir. Burada uzman servis elemanlarımız AR&Ccedil;ELİK marka televizyon cihazınızın gereken t&uuml;m bakımlarını yaparak &ccedil;alışır duruma getirmektedir.</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	AR&Ccedil;ELİK Televizyon Servisimiz İstanbul&#39;un t&uuml;m semt ve mahallerine haftanın 7 g&uuml;n&uuml; 24 saat hizmet vermektedir.</p>\r\n<p style=\"text-align: justify;\">\r\n	Televizyon Servisi</p>\r\n<p style=\"text-align: justify;\">\r\n	Ar&ccedil;elik Tv, Led, Plazma Montaj &ccedil;alışmalarının doğru bir şekilde yapılması &ccedil;ok &ouml;nemlidir. &Ccedil;&uuml;nk&uuml; yapılan yanlış ile s&ouml;k&uuml;l&uuml;p tekrar montaj yapılması; hem &ccedil;ok zahmetli, hem &ccedil;ok masraflı, hem de cihazın zarar g&ouml;rmesine neden olabilir. Bu nedenle dayanıklı bir alan se&ccedil;ilerek montaj &ccedil;alışmaları başlar.</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	Zemine g&ouml;re doğru aparatların se&ccedil;imi de &ouml;nemlidir. Cihazın &ccedil;evresinde gaz ka&ccedil;ağı oluşturabilecek farklı cihazlarda kullanılmamalıdır.</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	Kapılara yakın alanlarda olmaması gerektiği gibi farklı elektronik cihazlara zarar verebilecek bir ortam da bulunmaması &ouml;nerilir.</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	Arızalar ve Nedenleri</p>\r\n<p style=\"text-align: justify;\">\r\n	Ar&ccedil;elik Elektronik cihazlar zaman i&ccedil;erisinde arızalanabilir. Tv, Led, Plazma arızalarında da pek &ccedil;ok fakt&ouml;r etkili olabilir. Cihazınızın kumandası &ccedil;alışmıyor ise pillerini kontrol edebilir, cihaz ile i&ccedil; &uuml;nite arasındaki mesafeden sinyal alıp almadığına bakabilirsiniz.</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	Ar&ccedil;elik Cihaz tamamen &ccedil;alışmıyor ise elektrik gitmiyor, i&ccedil; &uuml;nite &ccedil;alışma g&ouml;stergesi &ccedil;alışmıyor ya da kumanda arızasından dolayı arıza durumları ortaya &ccedil;ıkabilir. Yapacağınız birka&ccedil; kontrol sonrasında sorun devam ediyor ise teknik destek almanız gerekli olacaktır.</p>\r\n', '352-arcelik-televizyon-servisi.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'arcelik-televizyon-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(96, '265', 'Vestel Televizyon Servisi', 4, '<p style=\"text-align: justify;\">\r\n	VESTEL TELEVİZYON HİZMETİ</p>\r\n<p style=\"text-align: justify;\">\r\n	VESTEL Televizyon hizmeti, t&uuml;m VESTEL marka televizyon &uuml;r&uuml;nleri i&ccedil;in teknik servis sunmaktadır. Plazma, LCD ve normal televizyon arızaları i&ccedil;in yerinde servis sağlayan VESTEL Televizyon Servisi bakım, onarım ve kurulum işlemlerini ger&ccedil;ekleştirir. Arızalı &uuml;r&uuml;nleriniz deneyimli ustalarımız sayesinde en kısa s&uuml;rede onarılmaktadır. Servis kadromuz t&uuml;m yedek par&ccedil;alarla servis merkezine gelir. Bu şekilde, &uuml;r&uuml;n&uuml;n hangi kısmında sorun olduğuna bağlı olarak, par&ccedil;a değişikliği o anda yapılır ve televizyonunuz &ccedil;alışır hale gelir.</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	VESTEL marka televizyon cihazınızın arızası yerinde &ccedil;&ouml;z&uuml;lemezse, cihaz sizden alınır ve merkezimize getirilir. Burada, uzman servis personelimiz VESTEL TV setinizin t&uuml;m bakımını yapar ve &ccedil;alışır hale getirir.</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	VESTEL Televizyon Servisimiz, İstanbul&#39;un t&uuml;m il&ccedil;elerine ve b&ouml;lgelerine haftanın 7 g&uuml;n&uuml; 24 saat hizmet vermektedir.</p>\r\n<p style=\"text-align: justify;\">\r\n	Televizyon Hizmeti</p>\r\n<p style=\"text-align: justify;\">\r\n	Vestel Tv, Led, Plazma Montajının doğru şekilde yapılması &ccedil;ok &ouml;nemlidir. &Ccedil;&uuml;nk&uuml; s&ouml;kme ve yanlış montaj ile yeniden montaj; &ccedil;ok zahmetli, maliyetli olabilir ve cihaza zarar verebilir. Bu nedenle dayanıklı bir alan se&ccedil;ilir ve montaj &ccedil;alışmaları başlar.</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	Zemin i&ccedil;in doğru aparatın se&ccedil;ilmesi de &ouml;nemlidir. Cihaz &ccedil;evresinde gaz sızıntısına neden olabilecek farklı cihazlarda kullanılmamalıdır.</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	Farklı elektronik cihazlara zarar verebilecek bir ortamın yanı sıra kapıların yakınında herhangi bir alan olmamalıdır.</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	Arızalar ve Nedenleri</p>\r\n<p style=\"text-align: justify;\">\r\n	Vestel Elektronik cihazları zamanla bozulabilir. Tv, Led, Plazma arızalarında bir&ccedil;ok fakt&ouml;r etkili olabilir. Cihazınızın kontrol&uuml; &ccedil;alışmıyorsa, pilleri kontrol edebilir ve cihaz ile i&ccedil; &uuml;nite arasındaki mesafeden sinyal alıp almadığını g&ouml;rebilirsiniz.</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	Vestel Cihazı tamamen &ccedil;alışmıyorsa, elektrik gitmez, i&ccedil; &uuml;nite &ccedil;alışma g&ouml;stergesi &ccedil;alışmaz veya kontrol arızası nedeniyle arızalar meydana gelebilir. Birka&ccedil; kontrolden sonra sorun devam ederse, teknik desteğe ihtiyacınız olacaktır.</p>\r\n', '146-vestel-televizyon-servisi.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'vestel-televizyon-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(97, '267', 'Bosch Kombi Servisi', 1, '<p style=\"text-align: justify;\">\r\n	T&uuml;rkiye&#39;deki firmalar arasında m&uuml;şteri memnuniyeti İstanbul Bosch kazan odaklı servis &ccedil;alışanlarına, parmaklarının &ouml;nde gelen şirketlerinden biri olduğu g&ouml;sterilmiştir. Beyaz eşya sekt&ouml;r&uuml;ndeki m&uuml;şterilerimizin memnuniyetine odaklanan &ccedil;alışmalarımızla her zaman tercih odağımız olmuştur. M&uuml;şterilerimizin &ccedil;evrimi&ccedil;i hizmet kaydı ile bizimle iletişime ge&ccedil;meleri i&ccedil;in her t&uuml;rl&uuml; imkanı sunuyoruz. Online servis kayıt uygulamamız ile internet &uuml;zerinden erişim sağlayan ve m&uuml;şterilerimizin beklentilerini karşılayan İstanbul bosch kazan servisimiz, sunulan hizmetin kalitesini artırarak etkilemeye devam ediyor. &Ccedil;ağrı merkezimizi de i&ccedil;eren lider şirketimiz, her alanda m&uuml;şterilerimize en iyi kaliteyi ve en iyi hizmeti sunmak i&ccedil;in elinden gelenin en iyisini yapmaya &ccedil;alışıyor.</p>\r\n', '482-bosch-kombi-servisi.png', 0, NULL, NULL, NULL, NULL, NULL, '', 'bosch-kombi-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(98, '267', 'Siemens Kombi Servisi', 2, '<p style=\"text-align: justify;\">\r\n	Siemens Yetkili Servis web sitesi, hem g&uuml;ncel hem de doğru bilgi sağlamayı ve ziyaret ettiğiniz web sitesinin yetkili bir Siemens Beyaz Eşya Servisi&#39;ne ait olmasını sağlamayı ama&ccedil;lamaktadır.</p>\r\n', '118-siemens-kombi-servisi.png', 0, NULL, NULL, NULL, NULL, NULL, '', 'siemens-kombi-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(99, '267', 'Arçelik Kombi Servisi', 3, '<p style=\"text-align: justify;\">\r\n	Ar&ccedil;elik Kombi Servisi yıllardır her t&uuml;rl&uuml; Ar&ccedil;elik kombi kazanında size yardımcı olmaktadır. Teknik olarak Ar&ccedil;elik kombilerde hizmet veren &ouml;zel bir şirketiz. &Ouml;zel bir hizmet olarak neredeyse her b&ouml;lgeye bakıyoruz. Model hakkında hi&ccedil;bir ayrım yapmıyoruz. Nerede olursanız olun, sorunlarınızla yıllardır aynı teknik &uuml;zerinden ilgileniyoruz ve sorunlarınızı &ccedil;&ouml;zmek i&ccedil;in ne gerekiyorsa yapıyoruz. Herhangi bir konuda bilgi vererek size telefonla yardım etmeye &ccedil;alışan uzman kadromuz, &ccedil;ağrı merkezi personelimiz ile huzurunuzda olmanın haklı gururunu yaşıyoruz. &Ouml;zel Ar&ccedil;elik Kombi Servisini tercih edenler kalıcı memnuniyet yaşayabileceklerinden emin olabilirler&hellip;</p>\r\n', '930-arcelik-kombi-servisi.png', 0, NULL, NULL, NULL, NULL, NULL, '', 'arcelik-kombi-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(100, '267', 'Vestel Kombi Servisi', 4, '<p style=\"text-align: justify;\">\r\n	Hizmetimiz deneyimli kadrosu ile İstanbul&#39;un t&uuml;m il&ccedil;elerine hizmet vermektedir. Buzdolabı, bulaşık makinesi, &ccedil;amaşır makinesi, fırın, ankraj, kazan ve klima servis ve bakımını yapmaktayız. Cihazda meydana gelecek t&uuml;m arızaları hızlı, g&uuml;venli ve y&uuml;ksek kalitede tamamlayan servisimiz, değiştirdiği yedek par&ccedil;alara 1 yıl yedek par&ccedil;a ve iş&ccedil;ilik garantisi vermektedir.</p>\r\n', '204-vestel-kombi-servisi.png', 0, NULL, NULL, NULL, NULL, NULL, '', 'vestel-kombi-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(101, '267', 'Ariston Kombi Servisi', 5, '<p style=\"text-align: justify;\">\r\n	Dayanıklılığı tartışılmaz olan markanın beyaz eşyalarınız varsa, yıllar sonra başarısız olmaları sizi şaşırtabilir. Ancak ARISTON servisi i&ccedil;in endişelenmenize gerek yok. Bizi 7/24 arayabilir ve sizin i&ccedil;in bir onarım servisi randevusu oluşturabilirsiniz. ARISTON &ccedil;amaşır makinesi, ARISTON kurutucu, ARISTON bulaşık makinesi, ARISTON fırın, ARISTON elektrikli s&uuml;p&uuml;rge ve daha fazlası i&ccedil;in eğitimli ARISTON servis ekibi &uuml;yelerimizin deneyim ve yeteneklerine g&uuml;venebilirsiniz.</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n', '537-ariston-kombi-servisi.png', 0, NULL, NULL, NULL, NULL, NULL, '', 'ariston-kombi-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(102, '266', 'Ariston Klima Servisi', 4, '<p>\r\n	İstanbul&#39;un her b&ouml;lgesinde 7/24 kesintisiz hizmet vermekten gurur duyuyoruz. Gen&ccedil;, dinamik, g&uuml;lery&uuml;zl&uuml;, uzman kadromuz ve geniş servis ağımızla hizmetinizdeyiz.</p>\r\n', '520-ariston-klima-servisi.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'ariston-klima-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(103, '266', 'Vestel Klima Servisi', 5, '<p>\r\n	Uzman ekiplerimiz arızayı tespit edecek ve m&uuml;mk&uuml;n olan en kısa s&uuml;rede ger&ccedil;ekleştirilecek eylemler hakkında sizi bilgilendirecektir. Onarımın m&uuml;mk&uuml;n olmadığı durumlarda par&ccedil;a değişimi yapacak ekibimiz, verdiğimiz hizmet modelinde size anında &ccedil;&ouml;z&uuml;m hizmeti sunuyor.</p>\r\n', '18-vestel-klima-servisi.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'vestel-klima-servisi', 'resim-yok', '', '', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmet_kategori`
--

CREATE TABLE `hizmet_kategori` (
  `id` int(15) NOT NULL,
  `sira` int(15) DEFAULT NULL,
  `kategori_adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` int(3) DEFAULT NULL,
  `tarih` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `banner_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_title` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_description` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `ustid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hizmet_kategori`
--

INSERT INTO `hizmet_kategori` (`id`, `sira`, `kategori_adi`, `kategori_resim`, `durum`, `tarih`, `kategori_adi_en`, `kategori_adi_fr`, `kategori_adi_ar`, `kategori_adi_ru`, `kategori_adi_de`, `seo`, `banner_resim`, `site_title`, `site_description`, `aciklama`, `aciklama_en`, `aciklama_fr`, `aciklama_ar`, `aciklama_ru`, `aciklama_de`, `ustid`) VALUES
(264, 1, 'Beyaz Eşya', '863-beyaz-esya.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'beyaz-esya', 'resim-yok', '', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(265, 2, 'Televizyon', '925-televizyon.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'televizyon', 'resim-yok', '', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(266, 3, 'Klima', '541-klima.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'klima', 'resim-yok', '', '', '', NULL, NULL, NULL, NULL, NULL, 0),
(267, 4, 'Kombi', '462-kombi.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'kombi', 'resim-yok', '', '', '', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `idari_kadro`
--

CREATE TABLE `idari_kadro` (
  `id` int(11) NOT NULL,
  `sira` text COLLATE utf8_turkish_ci NOT NULL,
  `adi` text COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(2) NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL,
  `unvan` text COLLATE utf8_turkish_ci NOT NULL,
  `twitter` text COLLATE utf8_turkish_ci NOT NULL,
  `facebook` text COLLATE utf8_turkish_ci NOT NULL,
  `mail` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `ad` text COLLATE utf8_turkish_ci NOT NULL,
  `mail` text COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` text COLLATE utf8_turkish_ci NOT NULL,
  `durum` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ip_adresi`
--

CREATE TABLE `ip_adresi` (
  `id` int(11) NOT NULL,
  `ip` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_id` text NOT NULL,
  `zaman` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ip_adresi`
--

INSERT INTO `ip_adresi` (`id`, `ip`, `urun_id`, `zaman`) VALUES
(505, '::1', '28', '13.12.2019'),
(506, '::1', '26', '13.12.2019'),
(507, '::1', '32', '13.12.2019'),
(508, '::1', '25', '13.12.2019'),
(509, '::1', '553', '10.01.2020'),
(510, '::1', '555', '15.01.2020'),
(511, '::1', '547', '15.01.2020'),
(512, '::1', '558', '15.01.2020'),
(513, '::1', '560', '15.01.2020'),
(514, '::1', '37', '21.01.2020');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `koseler`
--

CREATE TABLE `koseler` (
  `id` int(11) NOT NULL,
  `adi` text COLLATE utf8_turkish_ci NOT NULL,
  `sira` int(11) NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `ad_soyad` text COLLATE utf8_turkish_ci NOT NULL,
  `firma_adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `firma_gorevi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `sektoru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `eposta` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `sifre` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyelik_tarihi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `son_giris` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `ad_soyad`, `firma_adi`, `firma_gorevi`, `sektoru`, `eposta`, `telefon`, `adres`, `sifre`, `uyelik_tarihi`, `son_giris`) VALUES
(90, 'form kalıp', 'Beylikdüzü Klima Servisi', 'Makine Sanayi', 'Makine', 'info@formkalip.com', 'asd', 'asd', 'f10e2821bbbea527ea02200352313bc059445190', '23.11.2019', '23.11.2019');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurslar`
--

CREATE TABLE `kurslar` (
  `id` int(11) NOT NULL,
  `adi` text COLLATE utf8_turkish_ci NOT NULL,
  `sira` int(11) NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `markalar`
--

CREATE TABLE `markalar` (
  `id` int(11) NOT NULL,
  `sira` text COLLATE utf8_turkish_ci NOT NULL,
  `adi` text COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(2) NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `sira` text COLLATE utf8_turkish_ci NOT NULL,
  `adi` text COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(2) NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `ustu` varchar(11) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referanslar`
--

CREATE TABLE `referanslar` (
  `id` int(11) NOT NULL,
  `kategori` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` int(11) DEFAULT NULL,
  `aciklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` int(3) DEFAULT NULL,
  `adi_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `banner_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki_en` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki_fr` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki_ar` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki_ru` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki_de` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_de` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `referanslar`
--

INSERT INTO `referanslar` (`id`, `kategori`, `adi`, `sira`, `aciklama`, `resim`, `durum`, `adi_en`, `adi_fr`, `adi_ar`, `adi_ru`, `adi_de`, `linki`, `banner_resim`, `linki_en`, `linki_fr`, `linki_ar`, `linki_ru`, `linki_de`, `seo`, `aciklama_en`, `aciklama_fr`, `aciklama_ar`, `aciklama_ru`, `aciklama_de`) VALUES
(114, NULL, 'b', 2, '', '670-b.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'resim-yok', NULL, NULL, NULL, NULL, NULL, 'b', NULL, NULL, NULL, NULL, NULL),
(113, NULL, 'a', 1, '', '753-a.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'resim-yok', NULL, NULL, NULL, NULL, NULL, 'a', NULL, NULL, NULL, NULL, NULL),
(115, NULL, 'c', 3, '', '850-c.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'resim-yok', NULL, NULL, NULL, NULL, NULL, 'c', NULL, NULL, NULL, NULL, NULL),
(116, NULL, 'd', 4, '', '341-d.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'resim-yok', NULL, NULL, NULL, NULL, NULL, 'd', NULL, NULL, NULL, NULL, NULL),
(117, NULL, 'e', 5, '', '7-e.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'resim-yok', NULL, NULL, NULL, NULL, NULL, 'e', NULL, NULL, NULL, NULL, NULL),
(118, NULL, 'a', 6, '', '754-a.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'resim-yok', NULL, NULL, NULL, NULL, NULL, 'a', NULL, NULL, NULL, NULL, NULL),
(119, NULL, 'a', 8, '', '18-a.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'resim-yok', NULL, NULL, NULL, NULL, NULL, 'a', NULL, NULL, NULL, NULL, NULL),
(120, NULL, '9', 9, '', '405-9.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'resim-yok', NULL, NULL, NULL, NULL, NULL, '9', NULL, NULL, NULL, NULL, NULL),
(121, NULL, 'a', 10, '', '483-a.jpg', 0, NULL, NULL, NULL, NULL, NULL, '', 'resim-yok', NULL, NULL, NULL, NULL, NULL, 'a', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referans_kategori`
--

CREATE TABLE `referans_kategori` (
  `id` int(15) NOT NULL,
  `sira` int(15) DEFAULT NULL,
  `kategori_adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` int(3) DEFAULT NULL,
  `tarih` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_title` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `banner_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_description` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `ustid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `id` int(11) NOT NULL,
  `adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` int(11) DEFAULT NULL,
  `seo` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `banner_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_title` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_description` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` int(3) DEFAULT NULL,
  `adi_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_de` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`id`, `adi`, `sira`, `seo`, `banner_resim`, `site_title`, `site_description`, `aciklama`, `resim`, `durum`, `adi_en`, `adi_fr`, `adi_ar`, `adi_ru`, `adi_de`, `aciklama_en`, `aciklama_fr`, `aciklama_ar`, `aciklama_ru`, `aciklama_de`) VALUES
(21, 'Kurumsal', 1, 'kurumsal', '67697-kurumsal.jpg', 'asd', 'asd', 'Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.\r\n\r\n', '247-kurumsal.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `adsoyad` text COLLATE utf8_turkish_ci NOT NULL,
  `mail` text COLLATE utf8_turkish_ci NOT NULL,
  `telefon` text COLLATE utf8_turkish_ci NOT NULL,
  `kodu` text COLLATE utf8_turkish_ci NOT NULL,
  `konu` text COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `sira` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `sira`, `adi`, `seo`, `resim`, `resim_en`, `resim_fr`, `resim_ar`, `resim_ru`, `resim_de`, `aciklama`, `adi_en`, `adi_fr`, `adi_ar`, `adi_ru`, `adi_de`, `aciklama_en`, `aciklama_fr`, `aciklama_ar`, `aciklama_ru`, `aciklama_de`, `linki`) VALUES
(127, '1', 'Teknik Servis V3', 'teknik-servis-v3', '403-klima-servisi.jpg', 'resim-yok', 'resim-yok', 'resim-yok', 'resim-yok', 'resim-yok', '<p>\r\n	Lorem Ipsum pasajlarının bir&ccedil;ok &ccedil;eşitlemesi vardır. Ancak bunların b&uuml;y&uuml;k bir &ccedil;oğunluğu mizah katılarak eklenerek değiştirilmişlerdir.</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(126, '2', 'Teknik Servis V3', 'teknik-servis-v3', '652-klima-servisi.jpg', 'resim-yok', 'resim-yok', 'resim-yok', 'resim-yok', 'resim-yok', '<p>\r\n	Lorem Ipsum pasajlarının bir&ccedil;ok &ccedil;eşitlemesi vardır. Ancak bunların b&uuml;y&uuml;k bir &ccedil;oğunluğu mizah katılarak eklenerek değiştirilmişlerdir.</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(130, '4', 'Teknik Servis V3', 'teknik-servis-v3', '624-klima-servisi.jpg', 'resim-yok', 'resim-yok', 'resim-yok', 'resim-yok', 'resim-yok', '<p>\r\n	Lorem Ipsum pasajlarının bir&ccedil;ok &ccedil;eşitlemesi vardır. Ancak bunların b&uuml;y&uuml;k bir &ccedil;oğunluğu mizah katılarak eklenerek değiştirilmişlerdir.</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sss`
--

CREATE TABLE `sss` (
  `id` int(11) NOT NULL,
  `adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` int(11) DEFAULT NULL,
  `aciklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` int(3) DEFAULT NULL,
  `adi_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `banner_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `hit` int(11) NOT NULL DEFAULT 0,
  `zaman` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `subeler`
--

CREATE TABLE `subeler` (
  `id` int(11) NOT NULL,
  `adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` int(11) DEFAULT NULL,
  `seo` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `banner_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_title` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_description` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` int(3) DEFAULT NULL,
  `adi_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `sube_telefon` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `sube_adres` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `google_maps` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_de` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `kategori` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` int(11) DEFAULT NULL,
  `resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` int(3) DEFAULT NULL,
  `aciklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama1` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim2` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim3` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim4` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `fiyat` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `goster` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `saat` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `icon` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `alan1` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `alan2` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `alan3` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `banner_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `hit` int(11) NOT NULL DEFAULT 0,
  `site_title` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_description` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_en1` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_fr1` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ar1` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ru1` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_de1` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `video` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `onizleme` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `kategori`, `adi`, `sira`, `resim`, `durum`, `aciklama`, `aciklama1`, `resim2`, `resim3`, `resim4`, `fiyat`, `goster`, `tarih`, `saat`, `icon`, `adi_en`, `adi_fr`, `adi_ar`, `adi_ru`, `adi_de`, `alan1`, `alan2`, `alan3`, `seo`, `banner_resim`, `hit`, `site_title`, `site_description`, `aciklama_en`, `aciklama_en1`, `aciklama_fr`, `aciklama_fr1`, `aciklama_ar`, `aciklama_ar1`, `aciklama_ru`, `aciklama_ru1`, `aciklama_de`, `aciklama_de1`, `video`, `onizleme`) VALUES
(663, NULL, 'Klima Bakımı', 2, '998-klima-bakimi.jpg', 0, '<div>\r\n	<div>\r\n		Klima Bakım</div>\r\n	<div>\r\n		Klima bakımı; Yaz ve kış aylarında her ortamda kullandığımız cihaz i&ccedil;in sağlığımızı ve konforumuzu sunmak ve satın alırken y&uuml;ksek maliyetler &ouml;demek, ilk g&uuml;nk&uuml; performansında &ccedil;alışmak ve bizi bir&ccedil;ok sorundan uzak tutmak &ccedil;ok &ouml;nemlidir. bu zamanla meydana gelecektir.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Herhangi bir bakımımız yoksa ne olur? Klimamız kullanıldığı i&ccedil;in bazı durumlara maruz kalır, kirlenir, yorulur ve her mekanik alet gibi bakıma ihtiya&ccedil; duyar. Bakım yapmazsak, zamanla daha zararlı hale gelir.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Klima Bakımının Faydaları</div>\r\n	<div>\r\n		KLİMA &Ouml;MR&Uuml; YAŞAMI; Mekanik par&ccedil;alar bakım sırasında kontrol edilir ve gerekli temizlik veya m&uuml;dahalelerle &uuml;retken hale gelir. Bu şekilde &ouml;mr&uuml; uzun ve sağlıklıdır</div>\r\n	<div>\r\n		.</div>\r\n	<div>\r\n		ORTADAN HASTALIK RİSKİ; Klima i&ccedil;inde yaşadığımız ortamdaki havayı alır ve soğutma / ısıtma yoluyla &ccedil;evreye geri kazandırır. Topladığı havadaki toz par&ccedil;acıkları filtrelerde toplanır. Zamanla, bu biriken tozda bakteriler b&uuml;y&uuml;meye başlar. Bakım gerektirmeyen bir klimadaki bu bakteriler, hastalığın nedeni olan hava ile yaşam ortamlarımıza bulaşır.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		ENERJİ TASARRUFU SAĞLANMAKTADIR; Korunmuş bir klimanın performansı artacağından daha d&uuml;ş&uuml;k enerji ile &ccedil;alışır.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		ARIZALAR &Ouml;NLENMEKTEDİR; Bakım sırasında, daha b&uuml;y&uuml;k arızaların &ouml;nlenmesi i&ccedil;in k&uuml;&ccedil;&uuml;k arızalar algılanır ve &ccedil;&ouml;z&uuml;l&uuml;r.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		PERFORMANSI ARTIRIR; Klimadaki filtreler zamanla tıkanacağı i&ccedil;in hava akışı azalacaktır. Bakım sırasında bu filtreler temizlenecek ve daha verimli hale gelecektir.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Klimayı Kimler Korumalı?</div>\r\n	<div>\r\n		Klima bakımı kadar bakım yapacak servis &ccedil;ok &ouml;nemlidir. Karmaşık olmayan ve yarı bakımdan sonra, klimanın verimliliği daha da d&uuml;şebilir ve hatta arızalara neden olabilir.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Hizmetin &uuml;r&uuml;n, bakım i&ccedil;in tam olarak kullanılacak malzeme ve kalite ve uygun bakım hakkında tam bilgiye sahip olması gerekir.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		KLİMA BAKIMIMIZI YAPABİLİR MİYİZ?</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Bu genel bir konudur, ancak evde kendinize bakamazsınız. Sadece &ouml;n filtreler evde yıkanabilir ve kullanılabilir, ancak bu hem verimlilik hem de &ccedil;&ouml;z&uuml;m veya teknik sorunların &ouml;nlenmesi i&ccedil;in yeterli değildir. Bu ev filtresi temizliği 10-15 g&uuml;nde bir yapılabilir, ancak en az 4-5 ayda bir uzman bir servis yapılmalıdır.</div>\r\n	<div>\r\n		İKLİM BAKIM AŞAMALARI</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Eksik bakım, yarardan &ccedil;ok zarar verebilir. Şirket olarak tam donanımlı bakım sağlıyoruz.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Bakım aşamalarımız;</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Her şeyden &ouml;nce, t&uuml;m &ouml;l&ccedil;&uuml;mler yapılır ve tespitler yapılır.</div>\r\n	<div>\r\n		&Ccedil;alışma verimliliği i&ccedil;in &ouml;nemli bir konu olan gaz basıncı ve miktarı gerektiğinde &ouml;l&ccedil;&uuml;lmekte ve g&uuml;&ccedil;lendirilmektedir.</div>\r\n	<div>\r\n		T&uuml;m elektrik bağlantıları voltaj &ouml;l&ccedil;&uuml;mleri ile kontrol edilir</div>\r\n	<div>\r\n		&Ouml;n filtre temizlenir ve gerektiğinde değiştirilir</div>\r\n	<div>\r\n		Fanlar ve pervaneler kimyasal sıvı ile yıkanır</div>\r\n	<div>\r\n		T&uuml;m dahili kurulumun soket bağlantıları kontrol edilir ve bir sorun varsa, ortadan kaldırılır</div>\r\n	<div>\r\n		Isı verimliliği &ouml;l&ccedil;&uuml;l&uuml;r ve gerekli ayarlamalar yapılır</div>\r\n	<div>\r\n		Boru hattı, kırma, sızıntı, aşınma olup olmadığını kontrol eder ve gerekirse sorun ortadan kaldırılır.</div>\r\n	<div>\r\n		Ses &ouml;l&ccedil;&uuml;m&uuml; yapılır, sorun varsa gerekli ayarlamalar yapılır.</div>\r\n	<div>\r\n		T&uuml;m işlemler tamamlandıktan sonra &ccedil;alışma testi ve &ouml;l&ccedil;&uuml;mleri tekrar yapılır.</div>\r\n	<div>\r\n		BAKIM KALİTESİ</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Klima bakımının en &ouml;nemli unsuru doğru yoldur. T&uuml;m &ouml;ğeler titizlikle olmalı ve eksik olan her şey d&uuml;zeltilmelidir. Temizlik de dikkatlice yapılmalıdır.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		BAKIM ARALIĞI</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Bakım aralığı yılda en az 2 kez olmakla birlikte, kullanım sıklığına bağlı olarak her 3-4 ayda bir yapılabilir.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Hizmet olarak uzman ekibimizle t&uuml;m şartları yerine getirerek bakım hizmeti veriyoruz.</div>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', '', 'Dosya-yok', 'Dosya-yok', 'Dosya-yok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'klima-bakimi', 'resim-yok', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(665, NULL, 'Klima Arızaları', 4, '786-klima-arizalari.jpg', 0, '<div>\r\n	<div>\r\n		Klima Arızaları</div>\r\n	<div>\r\n		Klima arızaları, yaşam alanlarımızda kullandığımız, &ouml;ne &ccedil;ıkan klimaların zaman zaman ortaya &ccedil;ıktığı ve uygun şekilde m&uuml;dahale edilmesi gereken durumlardır. Y&uuml;ksek maliyetle sağladığımız klimaların arızalanması ve kaliteli hizmet &ccedil;er&ccedil;evesinde kaliteli hizmet ve kaliteli hizmetin ortadan kaldırılması, &ouml;mr&uuml;n&uuml; doğrudan etkileyen bir unsurdur.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Klima arızalarının her aşamasında uzman ekibimizle en kaliteli ve doğru hizmeti sunuyoruz.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Sorun giderme adımlarını dikkatle ger&ccedil;ekleştirdiğimizde en iyi sonucu elde edeceğiz.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Bir&ccedil;ok arıza, kullanıcı dostu ve basit ayarlarla d&uuml;zeltilebilen problemlerdir. Bu nedenle, servise başvurmadan &ouml;nce bazı m&uuml;dahaleler ve kontroller yapmamız gerekir.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Klima &ccedil;alışmazsa, &ouml;nce elektrikli par&ccedil;alar ve sigortalar kontrol edilir. Elektrikli bileşendeki sorun &ccedil;&ouml;z&uuml;lemezse servisle irtibata ge&ccedil;ilecektir.</div>\r\n	<div>\r\n		İkinci aşama elektriktir, ancak klima &ccedil;alıştırılmazsa kontrol kontrol edilir. Kontrol pili zayıf veya bitmişse değiştirilir.</div>\r\n	<div>\r\n		Klima &ccedil;alışıyor ancak daha az hava veriyorsa, &ouml;n paneldeki filtreler yıkanır ve kurutulur ve monte edilir.</div>\r\n	<div>\r\n		İ&ccedil; ortama su akışı varsa, tahliye hortumu kontrol edilir ve bir tıkanma varsa, &ccedil;ıkarılır.</div>\r\n	<div>\r\n		Klima kışın &ccedil;alışırken bir s&uuml;re beklemeye alınırsa, mevsimsel bir durumdur ve bir arıza değildir.</div>\r\n	<div>\r\n		T&uuml;m bu kontrollere bakıldıktan sonra klima hala &ccedil;alışmıyorsa, servis m&uuml;dahalesinin zamanı gelmiştir.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Bu aşamada &ouml;nemli bir s&uuml;re&ccedil; başlar.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		HIZLI ULAŞIM; Hizmet olarak, herhangi bir arıza durumunda anında ulaşabileceğiniz bir hizmet sunuyoruz. Uzman m&uuml;şteri hizmetleri temsilcimiz, kaydınızı ve arıza hakkında kısa bilgi alarak randevunuzu alacak ve personelimize en kısa zamanda rehberlik edecektir.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		ARIZA TESPİTİ; Ekibimiz randevu saatine ulaşır, arıza tespiti ile ilgili ilk testleri yapar ve sonucu rapor eder.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		M&Uuml;DAHALE VE ONARIM; Sorun ve arıza, kaliteli malzemeler ve par&ccedil;alar kullanılarak en pratik şekilde &ccedil;&ouml;z&uuml;l&uuml;r.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		ORİJİNAL PAR&Ccedil;ALARI KULLANMA; &Uuml;r&uuml;ne uygun orijinal par&ccedil;alar kullanılır. İşlem stok ve bekleme s&uuml;resi olmadan yapılır.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		TEST VE KONTROL; Onarımdan sonra klima &ccedil;alıştırılarak test edilir. En y&uuml;ksek verimlilikle &ccedil;alışıp &ccedil;alışmadığı kontrol edilir.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Klima Arızası Teknik Yanıt Adımları</div>\r\n	<div>\r\n		Her şeyden &ouml;nce, elektrikli par&ccedil;alar kontrol edilir, klimaya kadar tesisatta bir sorun varsa, &ccedil;&ouml;z&uuml;l&uuml;r. Klimaya enerji verilirse, sistem i&ccedil; par&ccedil;alarda kontrol edilir ve &ccedil;&ouml;z&uuml;l&uuml;r.</div>\r\n	<div>\r\n		Kontrol kontrol edilir, arızalıysa, onarım yoluna alınır, arızayı gidermek m&uuml;mk&uuml;n değilse, yenisiyle değiştirilir.</div>\r\n	<div>\r\n		Klimanın fan motoru &ccedil;alışıyor, ancak soğutma / ısıtma &ccedil;alışmıyorsa, &ouml;nce termostat kontrol edilir ve bir arıza varsa ortadan kaldırılır. Gerekirse değiştirilir.</div>\r\n	<div>\r\n		Termal kontrol edilir, arıza giderilir.</div>\r\n	<div>\r\n		Klima &ccedil;ıkarsa, ancak termal atarsa, gerekirse gaz kontrol&uuml; yapılır ve g&uuml;&ccedil;lendirilir. Herhangi bir sızıntı kontrol edilir.</div>\r\n	<div>\r\n		Klima &uuml;flenirse, dahili bağlantılar kontrol edilir. Kablo arızası varsa yenilenir. &Ccedil;ıkarılan bir kablo varsa değiştirilir.</div>\r\n	<div>\r\n		Klima y&uuml;ksek sesle &ccedil;alışıyorsa; fan ve bur&ccedil; motorları arızalı olabilir. Onarmak m&uuml;mk&uuml;nse değiştirilmez.</div>\r\n	<div>\r\n		Bunlar teknik m&uuml;dahalenin ana aşamalarıdır. Diğer bir&ccedil;ok hatanın tespiti ve onarımı, uzman ekibimizle m&uuml;mk&uuml;n olan en kısa s&uuml;rede en kaliteli malzemelerle ger&ccedil;ekleştirilir.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Yedek par&ccedil;aların garanti s&uuml;releri de &ouml;nemlidir. Bir hizmet olarak, değiştirdiğimiz her par&ccedil;anın başarısızlığını ve hizmetini garanti ediyoruz.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		İlk m&uuml;dahalenin arızalanmasına, ortadan kaldırılmasına ve daha sonraki takibine kadar her aşamada en verimli hizmeti sunuyoruz.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		&Ouml;nemli bir konu, klima arızalarının periyodik bakımının en aza indirilmesidir. Bu şekilde, ilk aşamada bir&ccedil;ok sorun tespit edilecek ve klimaya daha sağlıklı ve daha uzun &ouml;m&uuml;r sağlanacaktır.</div>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', '', 'Dosya-yok', 'Dosya-yok', 'Dosya-yok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'klima-arizalari', 'resim-yok', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(662, NULL, 'Klima Servisi', 1, '455-klima-servisi.jpg', 0, '<div>\r\n	<p>\r\n		Klima Servisi</p>\r\n	<p>\r\n		İnsan ihtiya&ccedil;larının zamanla değişmesi ile birlikte klima hizmeti, her evde temel şart olan klima kullanımı ile bir zorunluluk haline gelmiştir.</p>\r\n	<p>\r\n		Şimdi d&ouml;rt mevsim evlerimizde kullandığımız klimaları temin ederken, teknoloji, pratiklik ve elektrik t&uuml;ketimi gibi bir&ccedil;ok &ouml;zelliği değerlendiriyoruz. Uzun araştırmalardan sonra aldığımız klimanın en verimli, sorunsuz ve sağlıklı kullanımı i&ccedil;in servis &ccedil;ok, &ccedil;ok &ouml;nemlidir.</p>\r\n	<p>\r\n		Doğru ve zamanında m&uuml;dahale etmeyen bir klima bir&ccedil;ok farklı soruna neden olur. Y&uuml;ksek maliyetler sunduğumuz bu cihazlar i&ccedil;in, servis i&ccedil;in daha fazla harcama yapmamız gerekebilir.</p>\r\n	<p>\r\n		Servisin doğru se&ccedil;ilmesi, klimanın &ouml;mr&uuml;n&uuml; uzatacak ve en verimli şekilde &ccedil;alışmasını sağlayacaktır.</p>\r\n	<p>\r\n		Satın alırken bir&ccedil;ok &ouml;zelliği araştırdığımız i&ccedil;in, klima hizmetini se&ccedil;erken dikkate alacağımız kriterler olmalı.</p>\r\n	<p>\r\n		Şirket olarak, t&uuml;m bu kriterlere en iyisini sunarak hizmet vermekten mutluluk duyuyoruz.</p>\r\n	<p>\r\n		Dinamik ekibimizle montajdan arızaya, bakımdan kontrole kadar t&uuml;m hizmetleri ve 12 yıllık end&uuml;stri deneyimini sunuyoruz.</p>\r\n	<p>\r\n		Size en iyi hizmeti vermek i&ccedil;in vazge&ccedil;ilmez kurallarımız var. Bunlar;</p>\r\n	<p>\r\n		İLETİŞİM; &Uuml;r&uuml;n&uuml;m&uuml;z arızalandığında hemen bir &ccedil;&ouml;z&uuml;m aramak istiyoruz. Yaptığımız ilk şey telefonla iletişim kurmak. Tek ihtiyacımız, muhataba en hızlı şekilde ulaşmak, hatayı a&ccedil;ıklamak ve bir &ccedil;&ouml;z&uuml;m aramaktır. Bu noktada iletişim &ouml;nem kazanır. Size kalan bir servis telefonunu aradığınızda, bir cevap alamazsanız, ilginizi dinlemiyorsanız, sorununuzu a&ccedil;ıklayamıyorsanız, ilk dakikada bir &ccedil;&ouml;z&uuml;m yolundasınız demektir.</p>\r\n	<p>\r\n		Sorunu, &uuml;r&uuml;n&uuml;n ve arızaların farkında olmayan anlamsız bir m&uuml;şteri hizmetleri personeline anlatmak kadar yorucu değildir.</p>\r\n	<p>\r\n		Şirket olarak, sorunu en hızlı şekilde anlama ve iletişim numaralarımıza anında cevap vererek size gerekli &ccedil;&ouml;z&uuml;mleri sağlama prensibi ile &ccedil;alışıyoruz.</p>\r\n	<p>\r\n		Anında yanıt, y&uuml;ksek iletişim yeteneği ve &uuml;r&uuml;n bilgisine sahip m&uuml;şteri hizmetleri ekibimiz, telefonun diğer ucunda hizmetinize her zaman hazırdır.</p>\r\n	<p>\r\n		İlk kayıttan sonra, &ccedil;&ouml;z&uuml;m s&uuml;reci boyunca size bilgi aktararak aldığınız hizmet hakkında bilgilendirilirsiniz.</p>\r\n	<p>\r\n		HIZ; S&uuml;rekli kullandığımız bir cihazın arızalanmasının en hızlı şekilde &ccedil;&ouml;z&uuml;lmesini istiyoruz. Bu nedenle, bir hizmetten hizmet alırken ilk beklentimiz &ccedil;abukluktur.</p>\r\n	<p>\r\n		Dinamik ve tecr&uuml;beli ekibimizle en hızlı şekilde randevu alıyoruz ve &ccedil;&ouml;z&uuml;m i&ccedil;in m&uuml;dahale ediyoruz.</p>\r\n	<p>\r\n		G&Uuml;VEN; Hizmetlere g&uuml;ven kalitenin sembol&uuml;d&uuml;r. M&uuml;şterilerimizin fazla bir şey bilmediği teknik konularda bile, vaat edilen hizmetler en ince ayrıntısına kadar a&ccedil;ıklanarak istenildiği gibi tamamlanmaktadır.</p>\r\n	<p>\r\n		&Ccedil;&Ouml;Z&Uuml;M; Teknolojimizin s&uuml;rekli geliştiği teknoloji sekt&ouml;r&uuml;n&uuml; s&uuml;rekli takip ederek karşılaşacağımız t&uuml;m arızalar i&ccedil;in &ccedil;&ouml;z&uuml;mlerimizi &uuml;retiyoruz. &Ccedil;&ouml;z&uuml;lemeyen bir arızadan daha olumsuz olanı yarım &ccedil;&ouml;z&uuml;mlerdir. Bu, gelecekte &uuml;r&uuml;n&uuml;m&uuml;zde kalıcı arızalara neden olabilir. Her &uuml;r&uuml;n i&ccedil;in en uygun &ccedil;&ouml;z&uuml;mleri sunuyoruz.</p>\r\n	<p>\r\n		YEDEK PAR&Ccedil;A; Arıza &ccedil;&ouml;z&uuml;mlerinde yedek par&ccedil;a temini ve kaliteli yedek par&ccedil;a kullanımı &ccedil;ok &ouml;nemlidir. Her marka &uuml;r&uuml;n&uuml;n t&uuml;m yedek par&ccedil;alarını hızlı bir şekilde tedarik ederek en kaliteli hizmeti sunuyoruz. Yedek par&ccedil;a beklemeden d&uuml;ş&uuml;k kaliteli yedek par&ccedil;aları servis kadar kullanmamak en &ouml;nemli &ccedil;alışma kuralımızdır.</p>\r\n	<p>\r\n		M&Uuml;ŞTERİ MEMNUNİYETİ; m&uuml;şteri bizim hayırsever. Hizmetimiz ne kadar iyi olursa olsun, m&uuml;şterimizin memnun olmaması kabul edilemez. M&uuml;şteri talep, beklenti ve ihtiya&ccedil;larını analiz ederek hizmet vermekteyiz. En b&uuml;y&uuml;k farkımız hem hız hem de maliyet a&ccedil;ısından en uygun hizmeti sunmaktır.</p>\r\n	<p>\r\n		KALİTE; Her hizmette olduğu gibi iklimlendirme hizmetinde de vazge&ccedil;ilmez kuralları koruyarak ve m&uuml;şterilerimizin isteklerini birinci sıraya koyarak &ccedil;alışıyoruz.</p>\r\n	<p>\r\n		Hizmetin servisi &uuml;r&uuml;n&uuml;m&uuml;z&uuml;n kalitesi kadar &ouml;nemlidir. Bu nedenle, bir &uuml;r&uuml;n se&ccedil;erken ne kadar dikkat edeceğinizi l&uuml;tfen bir hizmet se&ccedil;erken aynı dikkati g&ouml;z &ouml;n&uuml;nde bulundurun.</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', '', 'Dosya-yok', 'Dosya-yok', 'Dosya-yok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'klima-servisi', 'resim-yok', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(667, NULL, 'Chiller Klima Servisi', 6, '195-chiller-klima-servisi.jpg', 0, '<div>\r\n	<div>\r\n		Chiller Klima Servisi</div>\r\n	<div>\r\n		Chiller klima hizmetini se&ccedil;mek, kullandığımız ve end&uuml;striyel olarak yaptığımız işin en &ouml;nemli par&ccedil;asıdır. Chiller klimalar, y&uuml;ksek verimli hizmet sunmak a&ccedil;ısından &ouml;nemlidir.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		End&uuml;striyel olarak soğutulması gereken t&uuml;m ekipman i&ccedil;in kullanılır. Şirketler i&ccedil;in hayati &ouml;nem taşıdığından, Chiller klimamızı hem &ccedil;alışma sırasında hem de arıza durumunda uzman ve kaliteli hizmet veren servise teslim etmeliyiz.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Chiller Klima Modelleri</div>\r\n	<div>\r\n		1. Hava soğutmalı chiller klimalar: Kondenserler hava soğutmalı klimalardır. &Uuml;zerindeki fanlar sayesinde hava akışkanlığı sağlayarak faaliyetlerine devam ediyor. Genellikle su verimliliğinin d&uuml;ş&uuml;k olduğu yerlerde kullanılır.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		2. Su soğutmalı chiller klimalar: Kondenserler su soğutmalı klimalardır. Su soğutmalı chiller klimalar kule fanlara sahiptir ve kondenser &uuml;nitesinin i&ccedil;indeki ısıtılmış gazın sıcaklığını alır ve kule fanların bulunduğu yeri soğutur. Hava akışkanlığının m&uuml;mk&uuml;n olmadığı yerlerde kullanılır. Genellikle bodrum katlarına monte edilir.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Chiller Klima Kullanım Alanları</div>\r\n	<div>\r\n		Chiller soğutma sistemlerinin kullanım alanları &ccedil;ok geniş olmasına rağmen, end&uuml;striyel kalıp soğutma, hastaneler, okullar gibi ana yerleri saymak m&uuml;mk&uuml;nd&uuml;r.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Bakımın &Ouml;nemi</div>\r\n	<div>\r\n		Arızalara neden olmamak i&ccedil;in s&uuml;rekli aktif olan Chiller klimalarının d&uuml;zenli periyodik bakımını yapmak &ouml;nemlidir.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Hem kurulum, bakım hem de arıza konusunda uzman bir servisten destek almak &ccedil;ok &ouml;nemlidir.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Tam donanımlı ekibimizle hizmet vermeye hazırız.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		ULAŞMAK KOLAYIZ</div>\r\n	<div>\r\n		&Uuml;r&uuml;n&uuml;n&uuml;zde bir sorun oluştuğunda, en gerekli durum servise hızlı bir şekilde ulaşmaktır. Başarısız bir durum var ve m&uuml;mk&uuml;n olan en kısa s&uuml;rede bir &ccedil;&ouml;z&uuml;m gerekiyor. Bu noktada, en ihtiya&ccedil; duyulan durum hizmete ulaşmaktır. Bir hizmet olarak, telefonun diğer ucunda sorunlarınızı dinlemek ve &ccedil;&ouml;z&uuml;mler sunmak i&ccedil;in bekliyoruz.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		BİZ HER ZAMAN</div>\r\n	<div>\r\n		Chiller servisi olarak montaj, bakım, arıza &ccedil;&ouml;z&uuml;m&uuml;nden kullanım desteğine kadar her aşamada yanınızdayız. Chiller klimaların bakımı işimizin kesintiye uğraması i&ccedil;in &ouml;nemli olduğunda, işi periyodik olarak takip ederek bakım hizmeti veriyoruz.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		HIZLIIZ</div>\r\n	<div>\r\n		Her m&uuml;şteri gibi sorunun da hızlı bir şekilde &ccedil;&ouml;z&uuml;lmesini istiyorsunuz. İlk m&uuml;dahale aşamasında veya sorun gidermenin her aşamasında sizin i&ccedil;in en hızlı şekilde yanınızdayız. &Ouml;zellikle, end&uuml;striyel alanda kullanılan soğutucu klimalara anında m&uuml;dahale edilmesi &ccedil;ok &ouml;nemlidir. Aksi takdirde işimiz bozulur ve maddi kayıplara neden olur.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		&Ccedil;EVİRİLDİK</div>\r\n	<div>\r\n		12 yıllık tecr&uuml;bemiz ile dinamik bir ekiple hizmet veriyoruz. Her marka ve model i&ccedil;in ge&ccedil;miş deneyimlerimiz doğrultusunda hizmet veriyoruz. Chiller klimalar &ouml;zel uzmanlık gerektirdiğinden, personelimiz bu bilgilerle donatılmıştır.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		BİZ BİLGİDİR</div>\r\n	<div>\r\n		Pazar dinamiklerini s&uuml;rekli takip ederek her model ve marka i&ccedil;in eğitimlerimizi &ccedil;alışanlarımıza veriyoruz. Bu şekilde s&uuml;rekli kendimizi geliştirerek en kaliteli hizmeti sunmaya &ccedil;alışıyoruz.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		KALİTE HİZMETİ SUNUYORUZ</div>\r\n	<div>\r\n		Kaliteli hizmet i&ccedil;in buradayız, bir kez değil sizinle &ccedil;alışmak arzusu ile size en kaliteli hizmeti sunmak istiyoruz.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		KALİTE YEDEK PAR&Ccedil;A KULLANIRIZ</div>\r\n	<div>\r\n		Yedek par&ccedil;alar, cihazlarınızın &ccedil;alışması i&ccedil;in en &ouml;nemli fakt&ouml;rd&uuml;r. &Uuml;r&uuml;ne d&uuml;ş&uuml;k kaliteli bir yedek par&ccedil;a takılması t&uuml;m sistemi bozabilir. En kaliteli par&ccedil;alarla hizmet veriyoruz.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		MEMNUNİYETE BAKIYORUZ</div>\r\n	<div>\r\n		Hizmetlerimizin ve &ccedil;&ouml;z&uuml;mlerimizin kalitesinden bağımsız olarak, memnun olmayan bir m&uuml;şteri hizmeti hizmetimizi tamamlamamaktadır. Bu bilin&ccedil;le dinamik ekibimizle faaliyetlerimizin her aşamasında m&uuml;şteri memnuniyetini &ouml;n planda tutuyoruz.</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Kalite, memnuniyet, hız, &ccedil;&ouml;z&uuml;m i&ccedil;in hizmet vermekteyiz.</div>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', '', 'Dosya-yok', 'Dosya-yok', 'Dosya-yok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'chiller-klima-servisi', 'resim-yok', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(669, NULL, 'İnverter Klima Servisi', 8, '513-inverter-klima-servisi.jpg', 0, '<div>\r\n	Inverter Klima Servisi</div>\r\n<div>\r\n	Inverter klima, klima geliştirme s&uuml;recinin son noktasıdır. Elektrik tasarrufu, y&uuml;ksek verimlilik, d&uuml;zg&uuml;n &ccedil;alışma ile fiyat farkı hakkı verir. İnverter klima servisi olarak bu kaliteyi &ouml;demek istiyoruz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Inverter Klima Nedir?</div>\r\n<div>\r\n	Inverter teknolojisi, klimanın i&ccedil;indeki hava &uuml;flemeli kompres&ouml;r&uuml;n, ortamın ihtiya&ccedil;larına g&ouml;re &ccedil;alışma kapasitesini kendi kendine arttırdığı ve azalttığı anlamına gelir. Bu bir klima teknolojisidir. İnvert&ouml;rs&uuml;z klimalar, aynı kapasitede hava &uuml;fleyerek &ccedil;evreyi ısıtır / soğutur, bunu yaparken, ortam belirli bir sıcaklığa ulaştığında klima otomatik olarak kapanır ve ortam sıcaklığı d&uuml;şt&uuml;ğ&uuml;nde otomatik olarak a&ccedil;ılır. Inverter klimalar i&ccedil;erdiği teknoloji sayesinde hava &uuml;flemesini ortam sıcaklığına g&ouml;re otomatik olarak ayarlar, b&ouml;ylece klimanın kapanma ve a&ccedil;ma gibi ek enerji gerektiren işlemlere ihtiya&ccedil; duymamasını sağlar. B&ouml;ylece eski tip klimalar ile karşılaştırıldığında bir&ccedil;ok fayda sağlar.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Inverter Klima Nasıl Tasarruf Eder?</div>\r\n<div>\r\n	İnverter klimaların en &ouml;nemli &ouml;zelliği tasarruftur. Peki, inverter kliması hangi koşullar altında ger&ccedil;ekten paradan tasarruf ediyor? Bu sorunun cevabı aslında klimanızı nasıl kullandığınızla ilgilidir. G&uuml;nde bir veya iki saat boyunca bir klima satın almak istiyorsanız, invert&ouml;rs&uuml;z bir A sınıfı klima da se&ccedil;ebilirsiniz. &Ccedil;&uuml;nk&uuml;, bir veya iki saatlik &ccedil;alışma sırasında, klimanız durur ve sadece birka&ccedil; kez başlar ve yine de &ccedil;ok fazla enerji t&uuml;ketmez. Ancak, &ouml;rneğin, klimayı sabahtan akşama kadar &ccedil;alışması gereken bir iş yerine g&ouml;t&uuml;r&uuml;yorsanız, invert&ouml;r tipi bir klimanın klimanızın durup başlayacağını d&uuml;ş&uuml;nerek ger&ccedil;ekten paradan tasarruf edeceğini unutmayın g&uuml;n boyunca onlarca kez.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Herhangi bir &uuml;r&uuml;nde olduğu gibi, bir inverter klima satın alırken &ouml;n araştırmalar yapılmalıdır. Bu noktada size hizmet olarak danışmanlık hizmeti veriyoruz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Her şeyden &ouml;nce, invert&ouml;r klimayı kullanmak istediğiniz ortam analiz edilir. Genişlik, g&uuml;neşe maruz kalma, kat sayısı, pencere sayısı, kullanım sıklığı bildirilir. Size uygun klima kapasitesi tavsiye edilir.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Daha sonra montaj aşamasında, gen&ccedil;, dinamik ekibimizle en kaliteli montaj malzemelerini kullanarak &ccedil;evrenin estetiğini bozmadan s&uuml;reci ger&ccedil;ekleştiriyoruz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	İnverter klimanın karmaşık yapısı ve ince ayarlarda kullanılması gerekliliği, nasıl kullanılacağını &ouml;ğrenmeyi &ouml;nemli hale getirmiştir. Deneyimli servis personelimiz, inverter klimasının t&uuml;m &ouml;zelliklerini, kullanım şekillerini ve gerekli ayarları ince ayrıntısına kadar a&ccedil;ıklayacaktır.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Inverter klima servisi; Airfel, Alarko, Ar&ccedil;elik, Aura, Vestel, Baymak, Beko, Demird&ouml;k&uuml;m, Daikin, E.C.A., Mitsubishi, Samsung, Siemens, York olmak &uuml;zere t&uuml;m marka ve modeller i&ccedil;in montaj, bakım, arıza servisi sağlıyoruz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	İnverter klima fiyatlarının diğer modellerden daha y&uuml;ksek olması, kullanım sırasında servis se&ccedil;iminin &ouml;nemini beraberinde getirir.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	12 yıllık deneyimimizi birleştirerek t&uuml;m marka ve modellere servis desteği sağlıyoruz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&Uuml;r&uuml;n&uuml;n&uuml;zde bir sorun oluştuğunda, en gerekli durum servise hızlı bir şekilde ulaşmaktır. Başarısız bir durum var ve m&uuml;mk&uuml;n olan en kısa s&uuml;rede bir &ccedil;&ouml;z&uuml;m gerekiyor. &Ccedil;ağrı merkezi ekibimiz size hızlı hizmet verebilmek i&ccedil;in başvurularınızı anında değerlendirmeye hazırdır.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Servis, kurulum, bakım, arıza &ccedil;&ouml;z&uuml;m servisinden kullanım desteğine kadar her aşamada yanınızdayız.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Her m&uuml;şteri gibi sorunun da hızlı bir şekilde &ccedil;&ouml;z&uuml;lmesini istiyorsunuz. İlk m&uuml;dahale aşamasında veya sorun gidermenin her aşamasında sizin i&ccedil;in en hızlı şekilde yanınızdayız.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	DENEYİM</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	12 yıllık tecr&uuml;bemiz ile dinamik bir ekiple hizmet veriyoruz. Her marka ve model i&ccedil;in ge&ccedil;miş deneyimlerimiz doğrultusunda hizmet veriyoruz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Pazar dinamiklerini s&uuml;rekli takip ederek her model ve marka i&ccedil;in eğitimlerimizi &ccedil;alışanlarımıza veriyoruz. Bu şekilde s&uuml;rekli kendimizi geliştirerek en kaliteli hizmeti sunmaya &ccedil;alışıyoruz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Kaliteli hizmet i&ccedil;in buradayız, bir kez değil sizinle &ccedil;alışmak arzusu ile size en kaliteli hizmeti sunmak istiyoruz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	YEDEK PAR&Ccedil;A</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Yedek par&ccedil;alar, cihazlarınızın &ccedil;alışması i&ccedil;in en &ouml;nemli fakt&ouml;rd&uuml;r. &Uuml;r&uuml;ne d&uuml;ş&uuml;k kaliteli bir yedek par&ccedil;a takılması t&uuml;m sistemi bozabilir. En kaliteli par&ccedil;alarla hizmet veriyoruz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Hizmetlerimizin ve &ccedil;&ouml;z&uuml;mlerimizin kalitesinden bağımsız olarak, memnun olmayan bir m&uuml;şteri hizmeti hizmetimizi tamamlamamaktadır. Bu bilin&ccedil;le dinamik ekibimizle faaliyetlerimizin her aşamasında m&uuml;şteri memnuniyetini &ouml;n planda tutuyoruz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n', '', 'Dosya-yok', 'Dosya-yok', 'Dosya-yok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'inverter-klima-servisi', 'resim-yok', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(671, NULL, 'Kanallı Tip Klima Servisi', 9, '326-kanalli-tip-klima-servisi.jpg', 0, '<div>\r\n	Kanal Tipi Klima Servisi</div>\r\n<div>\r\n	Kanallı klima s&ouml;z konusu olduğunda akla ilk gelen şey sessizliktir. Bu &ouml;zellik genellikle tercih edilir. Kanal tipi klima servisimizle tercihinize değer veriyoruz, satın alma, kurulum, kurulum ve onarım hizmetlerini sunuyoruz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Kanallı tip klimalar i&ccedil;in diğer bir isim merkezi sistem klimadır. Maliyet y&uuml;ksekse, verimlilik analizi yapıldığında kaliteli bir &uuml;r&uuml;n ve &ccedil;evre demektir.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Sistem, binanın bir kısmına monte edilen &uuml;nite ile, t&uuml;m yaşam alanlarına &ouml;zel olarak &ccedil;ekilen kanallar ve sistem d&ouml;şemesi ile kullanılır. Hem ısıtma hem de soğutma &ouml;zelliklerine sahip klimalar konfor ve y&uuml;ksek g&uuml;&ccedil; i&ccedil;in tercih edilir.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Kullanım alanları;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Harika işyerleri</div>\r\n<div>\r\n	Bilgi işlem odaları</div>\r\n<div>\r\n	K&uuml;t&uuml;phaneler</div>\r\n<div>\r\n	hastaneler</div>\r\n<div>\r\n	Alışveriş Merkezleri</div>\r\n<div>\r\n	Oteller</div>\r\n<div>\r\n	villalar</div>\r\n<div>\r\n	Alışveriş merkezleri</div>\r\n<div>\r\n	Kısacası, insanların meşgul olduğu veya y&uuml;ksek verimliliğin gerekli olduğu soğutma ve ısıtma gerektiren t&uuml;m ortamlarda kullanılır.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Kanal tipi klima servisi olarak; &Ouml;zellikle Mitsubishi, Midea, Tronic, Sigma, LG, Zen, Airfel, Ar&ccedil;elik, Alarko, Beko, Kartel, Vestel, Rubenis, Demird&ouml;k&uuml;m olmak &uuml;zere t&uuml;m kanallı klima marka ve modellerine hizmet vermekteyiz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	B&uuml;y&uuml;k mekanlarda aktif olarak kullanılan kanal tipi klimaların verimliliğinden, arıza durumunda hızlı m&uuml;dahale ve &ccedil;&ouml;z&uuml;m hizmetlerinden memnun kalmanız i&ccedil;in adayız.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Uzman, deneyimli ve dinamik ekibimiz ile kanal tipi klimaların her aşamasındayız.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	SE&Ccedil;İM AŞAMASI</div>\r\n<div>\r\n	En &ouml;nemli kısım se&ccedil;im noktasıdır. Binanızın yapısı, beklentileriniz, verimlilik planınız dahil t&uuml;m verileri hizmetimizle analiz ediyor ve sizin i&ccedil;in en uygun model ve markanın se&ccedil;iminde danışmanlık hizmeti veriyoruz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	MONTAJ AŞAMASI</div>\r\n<div>\r\n	Kullanmadan &ouml;nce en &ouml;nemli s&uuml;re&ccedil; montajdır. Binanın kanallı sistem i&ccedil;in uygun olması &ouml;nemlidir. Sistem uygun bir yere kurulur ve uzman ekibimiz tarafından &ouml;zenle monte edilir. Aynı performansa sahip t&uuml;m oda ve birimlere hizmet vermek i&ccedil;in gerekli d&ouml;şeme uygulanır. &Ccedil;alışmanın sonunda kontrol ve test aşaması yapılır ve teslim edilir.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	BAKIM AŞAMASI</div>\r\n<div>\r\n	Y&uuml;ksek kapasite sağlayan ve t&uuml;m binaya hizmet eden kanallı tip klimaların bakımı &ccedil;ok &ouml;nemlidir. T&uuml;m sistem, elektronik, teknik ve mekanik par&ccedil;alar belirli yıllık periyotlarla kontrol edilir. Filtreler gerektiği gibi temizlenir veya değiştirilir. Bir arıza varsa sabittir. Bakım sonrası testler yapıların tam performansta &ccedil;alışmasını sağlar.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	SORUN GİDERME</div>\r\n<div>\r\n	Hizmet kanallı klimalar konusunda uzmanlaşmıştır. Başvurular anında kaydedilir ve en kısa zamanda m&uuml;dahale edilir. En yeni cihazlarla arıza tespiti algılanır ve size &ccedil;&ouml;z&uuml;mler sunulur. 12 yıllık deneyimimizi kalite ve garantili yedek par&ccedil;alarla birleştirerek, arıza en hızlı şekilde &ccedil;&ouml;z&uuml;l&uuml;r.</div>\r\n<div>\r\n	Bir &uuml;r&uuml;n alırken aldığımız &ouml;zen ve &ouml;zen kadar, hizmet se&ccedil;iminde de aynı &ouml;zeni g&ouml;stermeliyiz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Biz;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Her zaman ihtiya&ccedil;larınızı karşılamaya hazırız.</div>\r\n<div>\r\n	T&uuml;m talepleriniz en hızlı şekilde planlanmaktadır.</div>\r\n<div>\r\n	T&uuml;m sorunlarınız en kısa s&uuml;rede &ccedil;&ouml;z&uuml;l&uuml;r.</div>\r\n<div>\r\n	Kullandığımız t&uuml;m par&ccedil;alar piyasadaki en kaliteli &uuml;r&uuml;nlerden se&ccedil;ilmektedir.</div>\r\n<div>\r\n	Kalitenin yanı sıra, en iyi fiyatla hizmet veriyoruz.</div>\r\n<div>\r\n	Sadece arızalı değil montaj, bakım ve servis sonrası da yanınızdayız.</div>\r\n<div>\r\n	Memnuniyet bizim i&ccedil;in ilk sırada. Yaptığım her işlemde memnuniyetiniz, işin iyi kalitede yapıldığı anlamına gelecektir.</div>\r\n<div>\r\n	Deneyimimiz, dinamik ekibimiz, bilgi birikimimiz, hızımız ve ekonomik fiyatlarımızla hizmetinizdeyiz.</div>\r\n', '', 'Dosya-yok', 'Dosya-yok', 'Dosya-yok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kanalli-tip-klima-servisi', 'resim-yok', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(675, NULL, 'Yer ve Tavan Tipi Klima Servisi', 14, '655-yer-ve-tavan-tipi-klima-servisi.jpg', 0, '<div>\r\n	Yer ve Tavan Tipi Klima Servisi</div>\r\n<div>\r\n	Zemin ve tavan tipi klima hizmetinin se&ccedil;imi, &ouml;zellikle insan kalabalığının yoğun olduğu yerlerde tercih edilen y&uuml;ksek kapasiteli zemin ve tavan tipi klimaların arızalanmasına karşı verimlilik, sağlıklı &ccedil;alışma ve koruma a&ccedil;ısından &ouml;nemlidir. sinema, tiyatro, restoran, restoran gibi yoğun hizmet.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Zemin ve tavan tipi klima s&ouml;z konusu olduğunda, insanlara hizmet veren geniş alanlar ve b&uuml;y&uuml;k kapasiteli işletmeler akla geliyor. En &ouml;nemli &ouml;zelliği sessiz olması ve t&uuml;m &ccedil;evreyi kapsayan hizmetidir.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Merkezi olarak monte edilmiş harici sisteme bağlı ve &ccedil;alışma ortamının bir&ccedil;ok noktasında &ccedil;ıkış sağlayan zemin ve tavan tipi klimalar maksimum konfor sağlar.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Kullanım yerleri</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Restoranlar</div>\r\n<div>\r\n	Tiyatrolar</div>\r\n<div>\r\n	Sinemalar</div>\r\n<div>\r\n	Kahve d&uuml;kkanları</div>\r\n<div>\r\n	D&uuml;ğ&uuml;n salonları</div>\r\n<div>\r\n	Restoranlar</div>\r\n<div>\r\n	İşyerleri</div>\r\n<div>\r\n	Alışveriş merkezleri</div>\r\n<div>\r\n	Yukarıda bahsettiğimiz yerler i&ccedil;in y&uuml;ksek kapasitesi ile d&uuml;ş&uuml;k enerji kullanarak en verimli &ccedil;alışma &ouml;zelliği tercih edilmektedir.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Karmaşık bir kurulum sistemi olduğundan, satın alma işleminden başlayarak, kullanım ve bakım da dahil olmak &uuml;zere her noktada uzman ekibi ile hizmetten destek almak uzun yıllar sağlıklı kullanım i&ccedil;in gereklidir.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Satın almadan &ouml;nce, yer belirleme, alan &ouml;zellikleri, kapasite analizi, montaj yerleri analiz edilmelidir.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&Ouml;zellikle y&uuml;ksek tavanlı yerlerde, maksimum verim alabileceğimiz ve tavan tipi klimalar i&ccedil;in &ouml;n &ccedil;alışma hayati &ouml;nem taşımaktadır.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Profesyonel ve dinamik servis ekibimizle hizmetinizdeyiz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Satın almadan &ouml;nce yapılan t&uuml;m analizler, tespitler ve &ouml;neriler deneyimimizle birleştirilir ve size sunulur. Bu aşama &ouml;nemlidir &ccedil;&uuml;nk&uuml; teknolojik olarak ne kadar gelişmiş olursa olsun, daha fazla &uuml;r&uuml;n satın alırsak, kullanacağımız &ccedil;evre ile uyumlu değilse sonu&ccedil; hayal kırıklığı yaratacaktır.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Montaj aşamasında, deneyimli ekibimiz montaj planını en ince ayrıntısına kadar yapar. Daha sonra kaliteli montaj malzemeleri se&ccedil;ilir ve işlem hassas bir şekilde yapılır. Montajın sonunda, t&uuml;m &ouml;zellikler her noktada test edilir ve en verimli şekilde &ccedil;alışmaya başlanması sağlanır.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Bu t&uuml;r klima i&ccedil;in bakım s&uuml;reci &ccedil;ok &ouml;nemlidir. Yıllar biriktik&ccedil;e klimanızın elektrikli, teknik ve mekanik par&ccedil;aları i&ccedil;eren her noktası kontrol edilir ve analiz edilir. Bir hata varsa, &ccedil;&ouml;z&uuml;l&uuml;r. T&uuml;m par&ccedil;alar &ouml;zel sol&uuml;syonlarla temizlenir. Bakımdan sonra tam olarak verimli &ccedil;alışıp &ccedil;alışmadığını kontrol etmek i&ccedil;in bir teste tabi tutulur. Bakım sayesinde, klima uzun &ouml;m&uuml;rl&uuml;, daha az arıza yapan ve tam performanslı bir &ccedil;alışma ortamı elde eder.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	T&uuml;m bu hizmetleri, başta Mitsubishi, General, Daikin, Sharp, Toshiba, Fujitsu olmak &uuml;zere t&uuml;m markalar ve modeller i&ccedil;in 7/24 sunuyoruz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&Uuml;r&uuml;n&uuml; satın aldıktan sonra, sağlıklı, verimli, sorunsuz ve &uuml;cretsiz bir yolun uzman bir servis ekibinden hizmet almak olduğunu unutmayın.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Ekibimiz olarak,</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Satın almadan &ouml;nce t&uuml;m danışmanlık hizmetlerini sunuyoruz</div>\r\n<div>\r\n	T&uuml;m taleplerinize anında erişmek i&ccedil;in &ccedil;ağrı merkezi ekibimizle telefonun diğer ucunu bekliyoruz.</div>\r\n<div>\r\n	T&uuml;m talepleriniz i&ccedil;in m&uuml;mk&uuml;n olan en kısa s&uuml;rede hareket ediyoruz</div>\r\n<div>\r\n	T&uuml;m işlemlerimizde minimum bekleme s&uuml;resi sunuyoruz</div>\r\n<div>\r\n	Kullandığımız t&uuml;m par&ccedil;a ve montaj malzemelerini en y&uuml;ksek kalite sınıfından sunuyoruz</div>\r\n<div>\r\n	Uzman ekibimizle &ccedil;&ouml;z&uuml;lmemiş herhangi bir sorun bırakmıyoruz.</div>\r\n<div>\r\n	Yaptığımız her işte m&uuml;şteri memnuniyeti birinci &ouml;nceliktir.</div>\r\n<div>\r\n	T&uuml;m s&uuml;re&ccedil;lerde, alternatiflerle şeffaf, ayrıntılı bilgi sağlıyoruz ve s&uuml;re&ccedil; boyunca taleplerinizi dikkate alıyoruz.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&Uuml;r&uuml;n&uuml;n kalitesi ve verimliliği, aldığınız hizmetin kalitesiyle doğrudan ilişkilidir.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Siz, klimanız, talepleriniz, beklentileriniz bizim i&ccedil;in değerlidir.</div>\r\n<div>\r\n	T&uuml;m bu prensiplerle hizmetinize hazırız.</div>\r\n', '', 'Dosya-yok', 'Dosya-yok', 'Dosya-yok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yer-ve-tavan-tipi-klima-servisi', 'resim-yok', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_kategori`
--

CREATE TABLE `urun_kategori` (
  `id` int(15) NOT NULL,
  `sira` int(15) NOT NULL,
  `kategori_adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` int(3) DEFAULT NULL,
  `tarih` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_adi_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `banner_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_title` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_description` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `ustid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` int(11) DEFAULT NULL,
  `resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` int(3) DEFAULT NULL,
  `linki` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `banner_resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_de` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazi`
--

CREATE TABLE `yazi` (
  `id` int(11) NOT NULL,
  `sira` text COLLATE utf8_turkish_ci NOT NULL,
  `adi` text COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(2) NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

CREATE TABLE `yonetici` (
  `id` int(11) NOT NULL,
  `ad_soyad` text COLLATE utf8_turkish_ci NOT NULL,
  `eposta` text COLLATE utf8_turkish_ci NOT NULL,
  `sifre` text COLLATE utf8_turkish_ci NOT NULL,
  `uyelik_tarihi` text COLLATE utf8_turkish_ci NOT NULL,
  `son_giris` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`id`, `ad_soyad`, `eposta`, `sifre`, `uyelik_tarihi`, `son_giris`) VALUES
(1, 'İlter Web Tasarım', 'info@ilterwebtasarim.com', '54e4958000a7ed39cd0c662e6872422350a91a40', '05.01.2015', '22.12.2021'),
(69, 'demo', 'demo@demo.com', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', '22.12.2021', '25.12.2021');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici_izin`
--

CREATE TABLE `yonetici_izin` (
  `id` int(11) NOT NULL,
  `urun_kat` int(3) NOT NULL DEFAULT 0,
  `urun` int(3) NOT NULL DEFAULT 0,
  `haber_kat` int(3) NOT NULL DEFAULT 0,
  `haber` int(3) NOT NULL DEFAULT 0,
  `hizmet_kat` int(3) NOT NULL DEFAULT 0,
  `hizmet` int(3) NOT NULL DEFAULT 0,
  `referans_kat` int(3) NOT NULL DEFAULT 0,
  `referans` int(3) NOT NULL DEFAULT 0,
  `galeri_kat` int(3) NOT NULL DEFAULT 0,
  `galeri` int(3) NOT NULL DEFAULT 0,
  `video` int(3) NOT NULL DEFAULT 0,
  `sayfa` int(3) NOT NULL DEFAULT 0,
  `slider` int(3) NOT NULL DEFAULT 0,
  `uye` int(3) NOT NULL DEFAULT 0,
  `sss` int(3) NOT NULL DEFAULT 0,
  `yorum` int(3) NOT NULL DEFAULT 0,
  `banner` int(3) NOT NULL DEFAULT 0,
  `sube` int(3) NOT NULL DEFAULT 0,
  `en` int(3) NOT NULL DEFAULT 0,
  `fr` int(3) NOT NULL DEFAULT 0,
  `ar` int(3) NOT NULL DEFAULT 0,
  `ru` int(3) NOT NULL DEFAULT 0,
  `de` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `yonetici_izin`
--

INSERT INTO `yonetici_izin` (`id`, `urun_kat`, `urun`, `haber_kat`, `haber`, `hizmet_kat`, `hizmet`, `referans_kat`, `referans`, `galeri_kat`, `galeri`, `video`, `sayfa`, `slider`, `uye`, `sss`, `yorum`, `banner`, `sube`, `en`, `fr`, `ar`, `ru`, `de`) VALUES
(1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `kategori` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` int(11) DEFAULT NULL,
  `aciklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` int(3) DEFAULT NULL,
  `adi_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_en` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_fr` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_ru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama_de` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `hit` int(11) NOT NULL DEFAULT 0,
  `unvan` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `duyurular`
--
ALTER TABLE `duyurular`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ebulten`
--
ALTER TABLE `ebulten`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `fotograf_galeri`
--
ALTER TABLE `fotograf_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `fotograf_galeri_kategori`
--
ALTER TABLE `fotograf_galeri_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galeri_kat`
--
ALTER TABLE `galeri_kat`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galeri_pro`
--
ALTER TABLE `galeri_pro`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galeri_sayfa`
--
ALTER TABLE `galeri_sayfa`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galeri_sube`
--
ALTER TABLE `galeri_sube`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `haber_kategori`
--
ALTER TABLE `haber_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hizmetgaleri`
--
ALTER TABLE `hizmetgaleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hizmet_kategori`
--
ALTER TABLE `hizmet_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `idari_kadro`
--
ALTER TABLE `idari_kadro`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ip_adresi`
--
ALTER TABLE `ip_adresi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `koseler`
--
ALTER TABLE `koseler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kurslar`
--
ALTER TABLE `kurslar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `markalar`
--
ALTER TABLE `markalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `referanslar`
--
ALTER TABLE `referanslar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `referans_kategori`
--
ALTER TABLE `referans_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sss`
--
ALTER TABLE `sss`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `subeler`
--
ALTER TABLE `subeler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urun_kategori`
--
ALTER TABLE `urun_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yazi`
--
ALTER TABLE `yazi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yonetici`
--
ALTER TABLE `yonetici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yonetici_izin`
--
ALTER TABLE `yonetici_izin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayar`
--
ALTER TABLE `ayar`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `duyurular`
--
ALTER TABLE `duyurular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Tablo için AUTO_INCREMENT değeri `ebulten`
--
ALTER TABLE `ebulten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `fotograf_galeri`
--
ALTER TABLE `fotograf_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Tablo için AUTO_INCREMENT değeri `fotograf_galeri_kategori`
--
ALTER TABLE `fotograf_galeri_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1331;

--
-- Tablo için AUTO_INCREMENT değeri `galeri_kat`
--
ALTER TABLE `galeri_kat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Tablo için AUTO_INCREMENT değeri `galeri_pro`
--
ALTER TABLE `galeri_pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- Tablo için AUTO_INCREMENT değeri `galeri_sayfa`
--
ALTER TABLE `galeri_sayfa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- Tablo için AUTO_INCREMENT değeri `galeri_sube`
--
ALTER TABLE `galeri_sube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Tablo için AUTO_INCREMENT değeri `haber_kategori`
--
ALTER TABLE `haber_kategori`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetgaleri`
--
ALTER TABLE `hizmetgaleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- Tablo için AUTO_INCREMENT değeri `hizmet_kategori`
--
ALTER TABLE `hizmet_kategori`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- Tablo için AUTO_INCREMENT değeri `idari_kadro`
--
ALTER TABLE `idari_kadro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `ip_adresi`
--
ALTER TABLE `ip_adresi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=515;

--
-- Tablo için AUTO_INCREMENT değeri `koseler`
--
ALTER TABLE `koseler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- Tablo için AUTO_INCREMENT değeri `kurslar`
--
ALTER TABLE `kurslar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `markalar`
--
ALTER TABLE `markalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `referanslar`
--
ALTER TABLE `referanslar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- Tablo için AUTO_INCREMENT değeri `referans_kategori`
--
ALTER TABLE `referans_kategori`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- Tablo için AUTO_INCREMENT değeri `sss`
--
ALTER TABLE `sss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Tablo için AUTO_INCREMENT değeri `subeler`
--
ALTER TABLE `subeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=676;

--
-- Tablo için AUTO_INCREMENT değeri `urun_kategori`
--
ALTER TABLE `urun_kategori`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- Tablo için AUTO_INCREMENT değeri `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- Tablo için AUTO_INCREMENT değeri `yazi`
--
ALTER TABLE `yazi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `yonetici`
--
ALTER TABLE `yonetici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Tablo için AUTO_INCREMENT değeri `yonetici_izin`
--
ALTER TABLE `yonetici_izin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
