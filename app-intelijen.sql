-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 22. Mei 2017 jam 02:30
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `app-intelijen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas_contoh`
--

CREATE TABLE IF NOT EXISTS `berkas_contoh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `berkas_contoh` varchar(200) DEFAULT NULL,
  `contoh_enk` varchar(200) DEFAULT NULL,
  `jenis_laporan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `berkas_contoh`
--

INSERT INTO `berkas_contoh` (`id`, `berkas_contoh`, `contoh_enk`, `jenis_laporan`) VALUES
(4, 'SKEP JUKLAK PENGGALANGAN.doc', 'a3fb6286f1bfb7287d3623da5cff52ce.doc', 'lapharintel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas_produk`
--

CREATE TABLE IF NOT EXISTS `berkas_produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) DEFAULT NULL,
  `berkas` text,
  `berkas_enk` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `berkas_produk`
--

INSERT INTO `berkas_produk` (`id`, `id_produk`, `berkas`, `berkas_enk`) VALUES
(5, 5, 'LAMP I. PED. GAL.doc', 'c5abb49c3db23f52548453b86d2b364d.doc'),
(6, 6, 'LAMP V. PED. GAL.doc', '02124b5bd7960493fc191a4823bbec65.doc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE IF NOT EXISTS `bidang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bidang` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id`, `bidang`) VALUES
(1, 'POLITIK'),
(2, 'EKONOMI'),
(3, 'SOSBUD'),
(4, 'KEAMANAN'),
(5, 'KEAMANAN KHUSUS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_laporan`
--

CREATE TABLE IF NOT EXISTS `menu_laporan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) NOT NULL,
  `alias` varchar(100) DEFAULT NULL,
  `status_menu` int(11) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `jenis_menu` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `menu_laporan`
--

INSERT INTO `menu_laporan` (`id`, `menu`, `alias`, `status_menu`, `link`, `jenis_menu`) VALUES
(1, 'LAPHARINTEL', 'LAPHAR INTELIJEN', 1, 'produk/lapharintel', 'INTELIJEN TAKTIS'),
(2, 'LAPHARSUS', 'LAPHARSUS', 1, 'produk/lapharsus', 'INTELIJEN TAKTIS'),
(3, 'LAPINFORMASI', 'LAPORAN INFORMASI', 1, 'produk/lapinformasi', 'INTELIJEN TAKTIS'),
(4, 'INFOKHUSUS', 'INFORMASI KHUSUS', 1, 'produk/infokhusus', 'INTELIJEN TAKTIS'),
(5, 'LAPKHUSUS', 'LAPORAN KHUSUS', 1, 'produk/lapkhusus', 'INTELIJEN TAKTIS'),
(6, 'LAPATENSIA', 'LAPORAN ATENSIA', 1, 'produk/lapatensia', 'INTELIJEN TAKTIS'),
(7, 'TELAAHANINTELIJEN', 'TELAAHAN INTELIJEN', 1, 'produk/telaahintelijen', 'INTELIJEN TAKTIS'),
(8, 'PERKIRAANIKHUSUS', 'PERKIRAAN INTELIJEN KHUSUS', 1, 'produk/perkiraankhusus', 'INTELIJEN TAKTIS'),
(9, 'PERKIRAANSINGKAT', 'PERKIRAAN INTELIJEN SINGKAT', 1, 'produk/perkiraansingkat', 'INTELIJEN TAKTIS'),
(10, 'PERKIRAANCEPAT', 'PERKIRAAN INTELIJEN CEPAT', 1, 'produk/perkiraancepat', 'INTELIJEN TAKTIS'),
(11, 'PERKIRAANKONTINJENSI', 'PERKIRAAN INTELIJEN KONTINJENSI', 1, 'produk/perkiraankontinjensi', 'INTELIJEN TAKTIS'),
(12, 'LAPINTELIJEN', 'LAPORAN INTELIJEN', 1, 'produk/lapintelijen', 'INTELIJEN TAKTIS'),
(13, 'MEMOINTELIJEN', 'MEMO INTELIJEN', 1, 'produk/memointelijen', 'INTELIJEN TAKTIS'),
(14, 'NOTAINTELIJEN', 'NOTA INTELIJEN', 1, 'produk/notaintelijen', 'INTELIJEN TAKTIS'),
(15, 'INTELIJENDASAR', 'INTELIJEN DASAR', 1, 'produk/inteldasar', 'INTELIJEN STRATEGIS'),
(16, 'BERKAS CONTOH', 'BERKAS CONTOH', 1, 'master/berkas_contoh', 'MASTER'),
(17, 'BIDANG', 'BIDANG', 1, 'master/bidang', 'MASTER'),
(18, 'PENGATURAN', 'PENGATURAN', 1, 'pengaturan/pengaturan', 'SISTEM'),
(19, 'MENU', 'MENU ', 1, 'pengaturan/menu', 'SISTEM'),
(20, 'NOMOR', 'NOMOR PRODUK', 1, 'pengaturan/no_produk', 'SISTEM'),
(21, 'HAK AKSES', 'HAK AKSES', 1, 'pengaturan/hak_akses', 'SISTEM'),
(22, 'PENJELASAN', 'PENJELASAN', 1, 'master/penjelasan', 'MASTER'),
(23, 'NOMOR22012', 'NOMOR 2 THN 2012', 1, 'kaba/kaba2012', 'PERATURAN KANA'),
(24, 'NOMOR42014', 'NOMOR 4 THN 2014', 1, 'kaba/kaba2014', 'PERATURAN KABA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `no_produk`
--

CREATE TABLE IF NOT EXISTS `no_produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no` varchar(20) DEFAULT NULL,
  `jenis_laporan` varchar(30) NOT NULL,
  `next` int(11) NOT NULL DEFAULT '1',
  `format` varchar(30) DEFAULT NULL,
  `tahun` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE IF NOT EXISTS `pengaturan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kop_kanan` text NOT NULL,
  `kop_kiri` text NOT NULL,
  `judul` text NOT NULL,
  `diskripsi` text NOT NULL,
  `ico` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjelasan`
--

CREATE TABLE IF NOT EXISTS `penjelasan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pengertian` text NOT NULL,
  `materi` text NOT NULL,
  `penanggung_jawab` text NOT NULL,
  `format` text NOT NULL,
  `distribusi` text NOT NULL,
  `tgl_update` date NOT NULL,
  `jenis_laporan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `penjelasan`
--

INSERT INTO `penjelasan` (`id`, `pengertian`, `materi`, `penanggung_jawab`, `format`, `distribusi`, `tgl_update`, `jenis_laporan`) VALUES
(5, '<p>eweew</p>', '<p>eeee</p>', '55555', '<p>dddd</p>', '<p>dddd</p>', '2017-05-21', 'lapharintel'),
(6, '<p>harsssusss</p>', '<p>sasasadx8sd8a8</p>', 'dsadada', '<p>8</p>', '<p>8888dsadad</p>\n<p>&nbsp;</p>\n<p>adaksdk</p>\n<p>&nbsp;</p>\n<p>sda</p>', '2017-05-21', 'lapharsus'),
(7, '<p>dadda</p>', '<p>dada</p>', '3333', '<p>dada</p>', '<p>dasdda</p>', '2017-05-21', 'infokhusus'),
(8, '<p>stensi</p>', '<p>sdaa888</p>', 'Aaaa', '<p>dsf88e4iusiu</p>', '<p>dsifsi4rfrdsf</p>', '2017-05-21', 'lapatensia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_surat` varchar(50) DEFAULT NULL,
  `bidang` varchar(50) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `prihal` text,
  `tgl_produk` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `isi` text,
  `jenis_laporan` varchar(50) NOT NULL,
  `pembuat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `no_surat`, `bidang`, `judul`, `prihal`, `tgl_produk`, `status`, `isi`, `jenis_laporan`, `pembuat`) VALUES
(5, '001/LI/V/2017', 'EKONOMI', 'Intel Dasar', 'Testing', '2017-05-22', 1, '', 'inteldasar', ''),
(6, '001/LI/V/2017', 'SOSBUD', 'Laphar Intelijen', 'Tesssss', '2017-05-24', 1, '', 'lapharintel', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_akses`
--

CREATE TABLE IF NOT EXISTS `users_akses` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `level` varchar(100) NOT NULL,
  `bidang` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users_akses`
--

INSERT INTO `users_akses` (`id`, `username`, `password`, `nama`, `level`, `bidang`) VALUES
(0, 'admin', 'admin', 'admin', 'admin', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_akses` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
