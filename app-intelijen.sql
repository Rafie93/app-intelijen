-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 24. Mei 2017 jam 10:35
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `berkas_contoh`
--

INSERT INTO `berkas_contoh` (`id`, `berkas_contoh`, `contoh_enk`, `jenis_laporan`) VALUES
(4, 'SKEP JUKLAK PENGGALANGAN.doc', 'a3fb6286f1bfb7287d3623da5cff52ce.doc', 'lapharintel'),
(5, 'LAMP I. PED. GAL.doc', 'ca4a982b7453c65574f9bd7781f5aa70.doc', 'lapharsus');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `berkas_produk`
--

INSERT INTO `berkas_produk` (`id`, `id_produk`, `berkas`, `berkas_enk`) VALUES
(8, 8, 'NASKAH GAL INTEL.doc', '03e8f7c5acea91ce6bd765f496949b9f.doc'),
(9, 9, 'LAMP I. PED. GAL.doc', '6992dd44596a9f64867fd0b35d9f4d36.doc'),
(10, 10, 'LAMP III. PED. GAL.doc', '6e493d82c2b91841a8a655c8063d8622.doc');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

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
(18, 'PENGATURAN', 'PENGATURAN', 1, 'sistem/pengaturan', 'SISTEM'),
(19, 'MENU', 'MENU ', 1, 'pengaturan/menu', 'SISTEM'),
(20, 'NOMOR', 'NOMOR PRODUK', 1, 'sistem/no_produk', 'SISTEM'),
(21, 'HAK AKSES', 'HAK AKSES', 1, 'pengaturan/hak_akses', 'SISTEM'),
(22, 'PENJELASAN', 'PENJELASAN', 1, 'master/data_penjelasan', 'MASTER'),
(23, 'NOMOR22012', 'NOMOR 2 THN 2012', 1, 'kaba/kaba2012', 'PERATURAN KANA'),
(24, 'NOMOR42014', 'NOMOR 4 THN 2014', 1, 'kaba/kaba2014', 'PERATURAN KABA'),
(25, 'PERKIRAANINTELKEAMANAN', 'PERKIRAAN INTELIJEN KEAMANAN', 1, 'produk/perkiraanintelkeamanan', 'INTELIJEN STRATEGIS');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `no_produk`
--

INSERT INTO `no_produk` (`id`, `no`, `jenis_laporan`, `next`, `format`, `tahun`) VALUES
(1, '002', 'lapharintel', 3, 'LAPHARINTEL', 2017),
(2, '002', 'lapharsus', 3, 'LAPHARSUS', 2017);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE IF NOT EXISTS `pengaturan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kop_kanan` text NOT NULL,
  `judul` text NOT NULL,
  `diskripsi` text NOT NULL,
  `ico` varchar(100) DEFAULT NULL,
  `logo_kop` varchar(100) NOT NULL,
  `judul_kop` varchar(200) NOT NULL,
  `desc_kop` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `kop_kanan`, `judul`, `diskripsi`, `ico`, `logo_kop`, `judul_kop`, `desc_kop`, `alamat`) VALUES
(1, '', 'APLIKASI PRODUK INTELIJEN', 'Memuat konten upload berkas, dan membuat berkas produk intel', NULL, '', 'KEPOLISIAN NEGARA REPUBLIK INDONESIA MARKAS BESAR', 'BANJARMASIN KALIMANTAN SELATAN', '');

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
(7, '<p>dadda aaah</p>', '<p>dada</p>', '33334', '<p>dada</p>', '<p>dasdda</p>', '2017-05-24', 'infokhusus'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `no_surat`, `bidang`, `judul`, `prihal`, `tgl_produk`, `status`, `isi`, `jenis_laporan`, `pembuat`) VALUES
(8, '001/LAPHARINTEL/V/2017', 'POLITIK', 'Test Percobaan', 'Mencoba', '2017-05-24', 1, '', 'lapharintel', ''),
(9, '001/LAPHARSUS/V/2017', 'EKONOMI', 'Lapharsus', 'tessss ', '2017-05-24', 1, '', 'lapharsus', ''),
(10, '002/LAPHARSUS/V/2017', 'KEAMANAN', 'Doukumen keamanan', 'ddddd', '2017-05-24', 1, '', 'lapharsus', '');

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
