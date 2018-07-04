-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Okt 2017 pada 04.28
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_monitoringg1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE IF NOT EXISTS `bidang` (
`bidang_id` int(11) NOT NULL,
  `bidang_nama` char(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`bidang_id`, `bidang_nama`) VALUES
(1, 'DATA KOMODITAS'),
(2, 'DATA NON KOMODITAS'),
(4, 'PENGEMBANGAN SISTEM INFORMASI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `judul`
--

CREATE TABLE IF NOT EXISTS `judul` (
`judul_id` int(11) NOT NULL,
  `judul_nama` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `judul`
--

INSERT INTO `judul` (`judul_id`, `judul_nama`) VALUES
(2, 'Sarana dan Prasarana'),
(3, 'Pengembangan Sistem, Data, Statistik dan Informasi   '),
(4, 'Pelatihan dan Pengembangan SDM '),
(5, 'Peralatan dan Fasilitas Perkantoran'),
(6, 'Alat Pengolah Data dan Multimedia'),
(7, 'Pengembangan dan Pengelolaan Layanan Sistem Informasi Pertanian  '),
(8, 'Kendaraan'),
(9, 'Perangkat Pengolah Data dan Komunikasi'),
(10, 'Layanan Perkantoran'),
(11, 'Pengadaan Alat Komunikasi dan Audio Visual'),
(12, 'Pembinaan, Pengembangan, Pemanfaatan, dan analisis data dan informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
`kegiatan_id` int(11) NOT NULL,
  `kegiatan_no` varchar(8) NOT NULL,
  `judul_id` int(11) NOT NULL,
  `subjudul_id` int(11) NOT NULL,
  `pengguna_id` bigint(20) NOT NULL,
  `kegiatan_tanggal` date NOT NULL,
  `kegiatan_anggaran` decimal(10,0) NOT NULL,
  `kegiatan_rincian` text NOT NULL,
  `kegiatan_status` int(1) NOT NULL,
  `kegiatan_ceknama` int(10) NOT NULL,
  `kegiatan_tangcek` datetime NOT NULL,
  `kegiatan_tangakhir` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`kegiatan_id`, `kegiatan_no`, `judul_id`, `subjudul_id`, `pengguna_id`, `kegiatan_tanggal`, `kegiatan_anggaran`, `kegiatan_rincian`, `kegiatan_status`, `kegiatan_ceknama`, `kegiatan_tangcek`, `kegiatan_tangakhir`) VALUES
(1, 'KGT001', 4, 7, 1980020420000304001, '2017-08-01', '7000000', '1. Pengawalan ke daerah - daerah terpilih \r\n-  Transportasi @10 orang = Rp. 300.000,-/orang\r\n-  Konsumsi     @10 orang per hari = Rp. 100.000,-/orang\r\n-  Anggaran Darurat = Rp. 1.000.000,- ', 0, 0, '0000-00-00 00:00:00', '2017-08-03'),
(2, 'KGT002', 3, 2, 1989070720110707001, '2017-06-01', '36000000', '1. Belanja Bahan \r\n\r\nKonsumsi rapat koordinasi kegiatan sub bidang sistem jaringan komputer @20 Orang Rp. 50.000 = Rp. 1.000.000,-\r\nBahan dan Alat Jaringan @4 Paket Rp. 1.000.000 = Rp. 4.000.000,-\r\nATK dan BOK @1 Paket Rp. 10.000.000 = Rp. 10.000.000,-\r\n\r\n2. Belanja Barang Non Operasional Lainnya\r\n\r\n Biaya Komunikasi  @3 OP Rp. 2.000.000,- = Rp. 6.000.000,-\r\n\r\n3.  Belanja Perjalanan Dinas Dalam Kota\r\n       a. Transport dalam kota @3 OP Rp. 5.000.000,- = Rp. 15.000.000,-', 1, 17, '2017-07-12 10:02:03', '2017-06-30'),
(3, 'KGT003', 4, 4, 1977040419980101001, '2017-05-05', '3000000', 'Pelatihan kualitas SDM\r\n\r\n1. Belanja Bahan\r\n-  Konsumsi 8 orang  per hari = Rp. 40.000,- /orang\r\n-  Transportasi 8 orang = Rp. 200.000,- /orang\r\n-  Perlengkapan medis dan lain - lain = Rp. 300.000,-\r\n-  Anggaran darurat = Rp. 140.000,-\r\n\r\n', 1, 9, '2017-04-28 08:51:28', '2017-05-06'),
(4, 'KGT004', 4, 9, 1977040419980101001, '2017-08-01', '6200000', '1. Belanja Bahan\r\n\r\n-  Konsumsi workshop @100 orang = Rp. 40.000,-/orang\r\n-  Trainer @2 orang = Rp.2.000.000/orang\r\n-  Anggaran Darurat = Rp. 200.000,-', 1, 9, '2017-08-10 10:57:21', '2017-08-02'),
(5, 'KGT005', 4, 12, 1977040419980101001, '2017-05-01', '7000000', '1. Pengawalan ke daerah - daerah terpilih \r\n-  Transportasi @10 orang = Rp. 300.000,-/orang\r\n-  Konsumsi     @10 orang per hari = Rp. 100.000,-/orang\r\n-  Anggaran Darurat = Rp. 1.000.000,-   ', 1, 9, '2017-07-28 08:52:37', '2017-05-03'),
(6, 'KGT006', 5, 10, 1977040419980101001, '2017-09-04', '30000000', '\r\n1. Pembelian Peralatan Pendukung\r\n   kursi @20 = Rp. 500.000,-/kursi\r\n   meja  @20 = Rp. 1.000.000,-/meja', 0, 0, '0000-00-00 00:00:00', '2017-09-06'),
(7, 'KGT007', 4, 13, 1977040419980101001, '2017-10-02', '7000000', '1. Pengawalan ke daerah - daerah terpilih \r\n-  Transportasi @10 orang = Rp. 300.000,-/orang\r\n-  Konsumsi     @10 orang per hari = Rp. 100.000,-/orang\r\n-  Anggaran Darurat = Rp. 1.000.000,- ', 0, 0, '0000-00-00 00:00:00', '2017-07-05'),
(8, 'KGT008', 12, 14, 1980020420000304001, '2017-06-06', '9500000', '1. Penataan dan pendataan Lahan Pertanian ke daerah - daerah terpilih\r\n\r\n-  Konsumsi @5 orang = Rp. 200.000,-/hari\r\n-  transportasi @5 orang = Rp. 300.000,-/orang\r\n-  Sewa penginapan = Rp. 100.000/hari', 1, 9, '2017-07-28 08:52:47', '2017-06-09'),
(9, 'KGT009', 4, 4, 1977040419980101001, '2017-11-01', '36000000', '1. Pelatihan Pembinaan Pegawai \r\n\r\n- Konsumsi 8 orang pegawai @8 Rp. 300.000/orang\r\n- Biaya Transportasi 8 orang pegawai @100.000/orang\r\n-  Perlengkapan medis dan lain - lain = Rp. 300.000,-\r\n-  Anggaran darurat = Rp. 100.000,-', 0, 0, '0000-00-00 00:00:00', '2017-11-03'),
(10, 'KGT010', 4, 9, 1977040419980101001, '2017-12-04', '4200000', '1. Belanja Bahan\r\n\r\n-  Konsumsi workshop @50 orang = Rp. 40.000,-/orang\r\n-  Trainer @2 orang = Rp.2.000.000/orang\r\n-  Anggaran Darurat = Rp. 200.000,-', 0, 0, '0000-00-00 00:00:00', '2017-12-05'),
(11, 'KGT011', 5, 10, 1976030319960101002, '2017-06-14', '15000000', '1. Pembelian Peralatan Pendukung\r\n   kursi @10 = Rp. 500.000,-/kursi\r\n   meja  @10 = Rp. 1.000.000,-/meja', 1, 9, '2017-07-28 08:52:57', '2017-06-15'),
(12, 'KGT012', 4, 9, 1977040419980101001, '2017-05-22', '4000000', 'Melakukan Workshop selama 2 hari\r\n\r\n1. Konsumsi @30 orang = Rp. 50.000/orang\r\n\r\n2. Menyewa pembicara @2 orang = Rp.1.000.000/orang\r\n\r\n3. Biaya lain  - lain = Rp. 500.000,- ', 1, 9, '2017-05-24 09:30:00', '2017-05-23'),
(13, 'KGT013', 2, 7, 1996080820060909001, '2017-08-10', '1000000', 'melakukan rapat koordinasi \r\n\r\nmembeli konsumsi 10 orang = Rp. 50.000,-/orang\r\nBiaya darurat = Rp. 500.000,-', 0, 0, '0000-00-00 00:00:00', '2017-08-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelaporan`
--

CREATE TABLE IF NOT EXISTS `pelaporan` (
`pelaporan_id` int(11) NOT NULL,
  `pelaporan_no` varchar(8) NOT NULL,
  `pengguna_id` int(11) NOT NULL,
  `pelaporan_nama` varchar(100) NOT NULL,
  `pelaporan_tanggal` date NOT NULL,
  `pelaporan_rincian` text NOT NULL,
  `pelaporan_berkas` text NOT NULL,
  `pelaporan_status` int(1) NOT NULL,
  `pelaporan_catatan` text NOT NULL,
  `pelaporan_pengterima` int(10) NOT NULL,
  `pelaporan_tangterima` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelaporan`
--

INSERT INTO `pelaporan` (`pelaporan_id`, `pelaporan_no`, `pengguna_id`, `pelaporan_nama`, `pelaporan_tanggal`, `pelaporan_rincian`, `pelaporan_berkas`, `pelaporan_status`, `pelaporan_catatan`, `pelaporan_pengterima`, `pelaporan_tangterima`) VALUES
(1, 'PLP001', 18, 'Pelaporan Hasil dari pelaksana kegiatan dengan kode pengajuan PGJ001 dan kode kegiatan KGT001', '2017-07-12', 'bla bla bla bla bla', 'ayunda.pdf', 1, 'sudah sesuai dengan yang di data', 17, '2017-07-12 10:01:30'),
(2, 'PLP002', 24, 'Pelaporan Hasil dari pelaksana kegiatan dengan kode pengajuan PGJ003 dan kode kegiatan KGT003', '2017-05-08', 'Pelatihan kualitas SDM\r\n\r\n1. Belanja Bahan\r\n-  Konsumsi 8 orang  per hari = Rp. 40.000,- /orang\r\n-  Transportasi 8 orang = Rp. 200.000,- /orang\r\n-  Perlengkapan medis dan lain - lain = Rp. 300.000,-\r\n-  Anggaran darurat = Rp. 140.000,-', 'kputa.jpg', 1, '', 0, '0000-00-00 00:00:00'),
(3, 'PLP003', 24, 'Pelaporan Hasil dari pelaksana kegiatan dengan kode pengajuan PGJ004 dan kode kegiatan KGT005', '2017-05-04', '1. Pengawalan ke daerah - daerah terpilih \r\n-  Transportasi @10 orang = Rp. 300.000,-/orang\r\n-  Konsumsi     @10 orang per hari = Rp. 100.000,-/orang\r\n-  Anggaran Darurat = Rp. 2.000.000,- ', 'kputa.jpg', 1, '', 0, '0000-00-00 00:00:00'),
(4, 'PLP004', 25, 'Pelaporan Hasil dari pelaksana kegiatan dengan kode pengajuan PGJ005 dan kode kegiatan KGT008', '2017-07-29', '1. Penataan dan pendataan Lahan Pertanian ke daerah - daerah terpilih\r\n\r\n-  Konsumsi @5 orang = Rp. 200.000,-/hari\r\n-  transportasi @5 orang = Rp. 300.000,-/orang\r\n-  Sewa penginapan = Rp. 100.000/hari', 'kputa (3).jpg', 1, 'telah sesuai', 9, '2017-07-29 11:23:36'),
(5, 'PLP005', 26, 'Pelaporan Hasil dari pelaksana kegiatan dengan kode pengajuan PGJ006 dan kode kegiatan KGT011', '2017-07-29', '1. Pembelian Peralatan Pendukung\r\n   kursi @10 = Rp. 500.000,-/kursi\r\n   meja  @10 = Rp. 1.000.000,-/meja', 'kputa (3).jpg', 1, 'telah sesuai', 9, '2017-07-29 11:23:51'),
(6, 'PLP006', 24, 'Pelaporan Hasil dari pelaksana kegiatan dengan kode pengajuan PGJ007 dan kode kegiatan KGT012', '2017-05-24', 'Melakukan Workshop selama 2 hari\r\n\r\n1. Konsumsi @30 orang = Rp. 50.000/orang\r\n\r\n2. Menyewa pembicara @2 orang = Rp.1.000.000/orang\r\n\r\n3. Biaya lain  - lain = Rp. 500.000,-', 'bukti pendukung.docx', 1, 'Sudah Sesuai', 9, '2017-08-10 07:40:24'),
(7, 'PLP007', 24, 'Pelaporan Hasil dari pelaksana kegiatan dengan kode pengajuan PGJ008 dan kode kegiatan KGT004', '2017-08-03', '1. Belanja Bahan\r\n\r\n-  Konsumsi workshop @100 orang = Rp. 40.000,-/orang\r\n-  Trainer @2 orang = Rp.2.000.000/orang\r\n-  Anggaran Darurat = Rp. 200.000,-', 'bukti pendukung.docx', 1, 'Sesuai Data pengajuannya', 9, '2017-08-10 07:40:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE IF NOT EXISTS `pengajuan` (
`pengajuan_id` int(11) NOT NULL,
  `pengajuan_no` varchar(8) NOT NULL,
  `pengguna_id` int(11) NOT NULL,
  `pengajuan_nama` varchar(100) NOT NULL,
  `pengajuan_tanggal` date NOT NULL,
  `pengajuan_anggaran` decimal(10,0) NOT NULL,
  `pengajuan_rincian` text NOT NULL,
  `pengajuan_status` int(1) NOT NULL,
  `pengajuan_pengterima` int(10) NOT NULL,
  `pengajuan_tangterima` datetime NOT NULL,
  `pengajuan_statusben` int(1) NOT NULL,
  `pengajuan_ben` int(10) NOT NULL,
  `pengajuan_tangsetuju` datetime NOT NULL,
  `pengajuan_catatan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`pengajuan_id`, `pengajuan_no`, `pengguna_id`, `pengajuan_nama`, `pengajuan_tanggal`, `pengajuan_anggaran`, `pengajuan_rincian`, `pengajuan_status`, `pengajuan_pengterima`, `pengajuan_tangterima`, `pengajuan_statusben`, `pengajuan_ben`, `pengajuan_tangsetuju`, `pengajuan_catatan`) VALUES
(1, 'PGJ001', 18, 'Pengambilan Anggaran Berdasarkan Kode Kegiatan KGT002', '2017-07-12', '36000000', 'Penunjang Pengembangan dan Pengelolaan Data Center\r\n\r\n\r\n\r\n1. Belanja Bahan \r\n\r\nKonsumsi rapat koordinasi kegiatan sub bidang sistem jaringan komputer @20 Orang Rp. 50.000 = Rp. 1.000.000,-\r\nBahan dan Alat Jaringan @4 Paket Rp. 1.000.000 = Rp. 4.000.000,-\r\nATK dan BOK @1 Paket Rp. 10.000.000 = Rp. 10.000.000,-\r\n\r\n2. Belanja Barang Non Operasional Lainnya\r\n\r\n Biaya Komunikasi  @3 OP Rp. 2.000.000,- = Rp. 6.000.000,-\r\n\r\n3.  Belanja Perjalanan Dinas Dalam Kota\r\n       a. Transport dalam kota @3 OP Rp. 5.000.000,- = Rp. 15.000.000,-', 1, 17, '2017-07-12 09:22:28', 1, 21, '2017-07-12 09:31:39', 'Rincian pengajuan dan anggaran telah sesuai dengan rincian kegiatan '),
(2, 'PGJ002', 18, 'anu', '2017-07-19', '12000', '', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', ''),
(3, 'PGJ003', 24, 'Pengambilan anggaran berdasar Kode KGT003', '2017-05-24', '3000000', 'Pelatihan kualitas SDM\r\n\r\n1. Belanja Bahan\r\n-  Konsumsi 8 orang  per hari = Rp. 40.000,- /orang\r\n-  Transportasi 8 orang = Rp. 200.000,- /orang\r\n-  Perlengkapan medis dan lain - lain = Rp. 300.000,-\r\n-  Anggaran darurat = Rp. 140.000,-', 1, 9, '2017-07-25 14:19:35', 1, 21, '2017-07-28 18:42:25', 'rincian sesuai dengan jadwal kegiatannya'),
(4, 'PGJ004', 24, 'Pengambilan Anggaran Berdasarkan Kode Kegiatan KGT005', '2017-05-26', '7000000', '1. Pengawalan ke daerah - daerah terpilih \r\n-  Transportasi @10 orang = Rp. 300.000,-/orang\r\n-  Konsumsi     @10 orang per hari = Rp. 100.000,-/orang\r\n-  Anggaran Darurat = Rp. 1.000.000,-   ', 1, 9, '2017-07-27 09:12:39', 1, 21, '2017-07-28 18:42:31', 'Telah Sesuai dengan yang terdapat di jadwal kegiatan'),
(5, 'PGJ005', 25, 'Pengambilan Anggaran Berdasarkan Kode Kegiatan KGT008', '2017-07-27', '8500000', '1. Penataan dan pendataan Lahan Pertanian ke daerah - daerah terpilih\r\n\r\n-  Konsumsi @5 orang = Rp. 200.000,-/hari\r\n-  transportasi @5 orang = Rp. 300.000,-/orang\r\n-  Sewa penginapan = Rp. 100.000/hari', 1, 9, '2017-07-27 09:32:16', 1, 21, '2017-07-28 18:42:36', 'Telah Sesuai yang dijadwalkan'),
(6, 'PGJ006', 26, 'Pengambilan Anggaran Berdasarkan Kode Kegiatan KGT011', '2017-07-27', '15000000', '1. Pembelian Peralatan Pendukung\r\n   kursi @10 = Rp. 500.000,-/kursi\r\n   meja  @10 = Rp. 1.000.000,-/meja', 1, 9, '2017-07-27 09:12:59', 1, 21, '2017-07-28 18:42:41', 'Telah Sesuai dengan yang di jadwal'),
(7, 'PGJ007', 24, 'Pengambilan Anggaran Berdasarkan Kode Kegiatan KGT012', '2017-05-15', '4000000', 'Melakukan Workshop selama 2 hari\r\n\r\n1. Konsumsi @30 orang = Rp. 50.000/orang\r\n\r\n2. Menyewa pembicara @2 orang = Rp.1.000.000/orang\r\n\r\n3. Biaya lain  - lain = Rp. 500.000,- ', 1, 9, '2017-05-15 13:40:35', 1, 21, '2017-05-15 13:42:23', 'sudah sesuai dengan jadwal kegiatannya.'),
(8, 'PGJ008', 24, 'Pengambilan Anggaran Berdasarkan Kode Kegiatan KGT004', '2017-07-25', '6200000', '1. Belanja Bahan\r\n\r\n-  Konsumsi workshop @100 orang = Rp. 40.000,-/orang\r\n-  Trainer @2 orang = Rp.2.000.000/orang\r\n-  Anggaran Darurat = Rp. 200.000,-', 1, 9, '2017-08-09 21:40:55', 1, 21, '2017-08-09 21:42:27', 'Sudah Sesuai dengan data yang ada di jadwal kegiatannya.'),
(9, 'PGJ009', 37, 'Pengambilan Anggaran Berdasarkan Kode Kegiatan KGT013', '2017-08-10', '1000000', 'melakukan rapat koordinasi \r\n\r\nmembeli konsumsi 10 orang = Rp. 50.000,-/orang\r\nBiaya darurat = Rp. 500.000,-', 1, 9, '2017-08-10 13:46:41', 1, 21, '2017-08-10 13:47:25', 'Sudah sesuai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`pengguna_id` int(11) NOT NULL,
  `pengguna_nip` bigint(20) NOT NULL,
  `pengguna_nama` char(50) NOT NULL,
  `bidang_id` int(11) NOT NULL,
  `subbidang_id` int(11) NOT NULL,
  `pengguna_tgllahir` date NOT NULL,
  `pengguna_alamat` text NOT NULL,
  `pengguna_telepon` varchar(13) NOT NULL,
  `pengguna_status` int(1) NOT NULL,
  `pengguna_katasandi` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `pengguna_nip`, `pengguna_nama`, `bidang_id`, `subbidang_id`, `pengguna_tgllahir`, `pengguna_alamat`, `pengguna_telepon`, `pengguna_status`, `pengguna_katasandi`) VALUES
(1, 1996, 'Admin', 0, 0, '1996-02-08', 'Jalan Agung Raya ii Rt 007 Rw 007 No.19', '083867789889', 1, 'a'),
(9, 1987082920170710001, 'Nanda Ayundari', 1, 1, '1987-01-01', 'Jalan Mangga No.10', '083812302303', 3, '56b6ds2z'),
(10, 1987020820070208001, 'Wulandari Mayatri', 1, 1, '1987-02-08', 'Jalan Semangka No.19', '08778856465', 2, 'x2lp6w7v'),
(11, 1992090920120304001, 'Wahyu Hidayat', 1, 2, '1992-09-09', 'Jalan Satwa No.34', '089834321213', 2, 'd5isglss'),
(12, 1982090720020901001, 'Joko Prayitno', 1, 2, '1982-02-09', 'Jalan Agung No.20', '089823256543', 2, 'mtsxuvoq'),
(13, 1972020219920202001, 'Lulu Kosinah', 2, 3, '1972-02-02', 'Jalan Raya No.3', '087756541213', 3, 'g7hqqdos'),
(14, 1974030319940303001, 'Bayudillah', 2, 3, '1974-03-03', 'Jalan Ayur No.88', '081234321213', 2, 'pnjmr0mg'),
(15, 1973030419940307002, 'Muhammad Fajar', 2, 4, '1973-03-04', 'Jalan Sayur No.22', '081278769897', 2, '55zqzwhq'),
(16, 1975040419960404003, 'Joko Prayitno', 2, 4, '1975-04-04', 'Jalan Mangga Raya No.77', '081323246543', 2, 'w0mjnrqr'),
(17, 1990080820120808001, 'Ayunda Maryam', 4, 5, '1990-08-08', 'Jalan Kebembem No.11', '085765645678', 3, '6oriyxxb'),
(18, 1989070720110707001, 'Memy Mardiyanah', 4, 5, '1989-07-07', 'Jalan Noe Buntu No.99', '085798970098', 2, 'zdqeb7sd'),
(19, 1988011020110810001, 'Rahmat Kushina', 4, 6, '1988-01-10', 'Jalan Duri No.22', '08876758786', 2, 'nsnzg0i4'),
(20, 1986050520110505002, 'Raden Nugraha Aziz', 4, 6, '1986-05-05', 'Jalan Kayu Putih No.88', '085656543435', 2, '9lkvd7rd'),
(21, 1970010119900101001, 'Putri Hamidah', 0, 0, '1970-01-01', 'Jalan Kayu Putih No.22', '087766545656', 4, 'vjozqwr0'),
(22, 1985010120070202001, 'Wahyu Kusumo', 1, 1, '1985-01-01', 'Jalan Pusaka Barat No.9', '085766667676', 2, 'aee0u3gp'),
(23, 1984030420060202001, 'Cahya Kumala', 1, 1, '1984-03-04', 'Jalan Sawi No.22', '087788656231', 2, 'jip5z2jg'),
(24, 1977040419980101001, 'Suryo', 1, 1, '1977-04-04', 'Jalan Nusantara Indah No.10', '08886678989', 2, 'qbq7ofrs'),
(25, 1980020420000304001, 'Purno Hidayat', 1, 2, '1980-02-04', 'Jalan Kusuma Wundari No.88', '08213343543', 2, '89t9o7x0'),
(26, 1976030319960101002, 'Januar Adi', 1, 2, '1976-03-03', 'Jalan Mawar No.33', '08567675989', 2, 'adtymkrs'),
(27, 1970080819930808001, 'Ahmadillah', 2, 3, '1970-08-08', 'Jalan Asem No.13', '0878989787889', 2, 'synrc0sc'),
(28, 1976020319980101002, 'Bayu Indra Gunawan', 2, 3, '1976-02-03', 'Jalan Noe Buntu No.33', '0815445567678', 2, 'fp3glzsm'),
(29, 1978070719990908001, 'Ayu Rahmawati', 2, 3, '1978-07-07', 'Jalan H.Montong No.19', '08125568789', 2, 'g60uraux'),
(30, 1971090819940101004, 'Muhammad Safik', 2, 4, '1971-09-08', 'Jalan Lagga No.22', '081344567878', 2, 'zdtr5jie'),
(31, 1973020319960203001, 'Annisa Fitria', 2, 4, '1973-02-03', 'Jalan Inovasi No.45', '082245437676', 2, '8ky4ha5h'),
(32, 1982010120031010001, 'Salsabillah', 4, 5, '1982-01-01', 'Jalan Lontar No.13', '082354537678', 2, '6qogonoe'),
(33, 1981020320030203001, 'Basuki', 4, 5, '1981-02-03', 'Jalan Sepakat no.11', '085788887676', 2, 'vb0m21wn'),
(34, 1977020519990202001, 'Dewiandri Suci', 4, 5, '1977-02-05', 'Jalan Sawo No.44', '08198878787', 2, '97y767w0'),
(35, 1989060620130909001, 'Kasmiyati Ramadhani', 4, 6, '1989-06-06', 'Jalan Kecapi No.11', '081922343456', 2, '1uqhjjwz'),
(36, 1969030419900202001, 'Atun Sumiyatun', 4, 6, '1969-03-04', 'Jalan Sagu No.77', '085687869899', 2, 'ric9z22e'),
(37, 1996080820060909001, 'Adjis Ramadhani U', 1, 2, '2017-02-08', 'Jalan Sagu no 12 Jakarta ', '08984658058', 2, 'fjzf6ag2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `realisasi`
--

CREATE TABLE IF NOT EXISTS `realisasi` (
`realisasi_id` int(11) NOT NULL,
  `realisasi_no` varchar(8) NOT NULL,
  `kegiatan_id` int(11) NOT NULL,
  `pengajuan_id` int(11) NOT NULL,
  `pelaporan_id` int(11) NOT NULL,
  `realisasi_anggaran` int(11) NOT NULL,
  `realisasi_sisa` int(11) NOT NULL,
  `realisasi_nama` text NOT NULL,
  `realisasi_tanggal` date NOT NULL,
  `realisasi_peng` int(11) NOT NULL,
  `realisasi_nmpeng` char(50) NOT NULL,
  `realisasi_nippeng` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `realisasi`
--

INSERT INTO `realisasi` (`realisasi_id`, `realisasi_no`, `kegiatan_id`, `pengajuan_id`, `pelaporan_id`, `realisasi_anggaran`, `realisasi_sisa`, `realisasi_nama`, `realisasi_tanggal`, `realisasi_peng`, `realisasi_nmpeng`, `realisasi_nippeng`) VALUES
(4, 'REA001', 2, 1, 1, 30000000, 6000000, 'Realisasi kegiatan kode kegiatan KGT001 , kode pengajuan PGJ001, dan kode pelaporan PLP001', '2017-07-12', 17, 'Ayunda Maryam', 1990080820120808001),
(5, 'REA002', 3, 3, 2, 3000000, 0, 'Realisasi Anggaran Kode Kegiatan KGT003 & Kode Pengajuan PGJ003 & Kode Pelaporan PLP002', '2017-07-29', 9, 'Nanda Ayundari', 1987082920170710001),
(6, 'REA003', 5, 4, 3, 6000000, 1000000, 'Realisasi Kegiatan dari Kode Kegiatan KGT005 & Kode Pengajuan PGJ004 & Kode Pelaporan PLP003', '2017-07-29', 9, 'Nanda Ayundari', 1987082920170710001),
(7, 'REA004', 8, 5, 4, 9500000, 0, 'Realisasi Kegiatan dengan Kode Kegiatan KGT008 & Kode Pengajuan PGJ005 & Kode Pelaporan PLP004', '2017-07-29', 9, 'Nanda Ayundari', 1987082920170710001),
(8, 'REA005', 11, 6, 5, 15000000, 0, 'Realisasi Kegiatan dengan Kode Kegiatan KGT011 & Kode Pengajuan PGJ006 & Kode Pelaporan PLP005', '2017-07-29', 9, 'Nanda Ayundari', 1987082920170710001);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subbidang`
--

CREATE TABLE IF NOT EXISTS `subbidang` (
`subbidang_id` int(11) NOT NULL,
  `subbidang_nama` char(200) NOT NULL,
  `bidang_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subbidang`
--

INSERT INTO `subbidang` (`subbidang_id`, `subbidang_nama`, `bidang_id`) VALUES
(1, 'DATA TANAMAN PANGAN DAN HORTIKULTURA', 1),
(2, 'DATA PETERNAKAN DAN PERKEBUNAN', 1),
(3, 'DATA SOSIAL PRASARANA DAN SARANA', 2),
(4, 'DATA EKONOMI PERTANIAN', 2),
(5, 'SISTEM JARINGAN KOMPUTER', 4),
(6, 'APLIKASI SISTEM INFORMASI', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subjudul`
--

CREATE TABLE IF NOT EXISTS `subjudul` (
`subjudul_id` int(11) NOT NULL,
  `subjudul_nama` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subjudul`
--

INSERT INTO `subjudul` (`subjudul_id`, `subjudul_nama`) VALUES
(1, 'Pengembangan dan Pengelolaan Layanan Infrastruktur'),
(2, 'Pengembangan dan Pengelolaan Layanan Data Center'),
(3, 'Pengembangan dan Pengelolaan Sistem Tata Kelola  TIK'),
(4, 'Peningkatan Kualitas SDM'),
(5, 'Workshop Multimedia'),
(6, 'Workshop Sistem Jaringan Komputer'),
(7, 'Survei Penggunaan Jagung'),
(8, 'Penataan Data Sarana Pertanian'),
(9, 'Workshop Data Sosial Ekonomi Pertanian'),
(10, 'Pengadaan Inventaris Kantor'),
(11, 'Workshop Analisis Data Sosial Ekonomi Pertanian'),
(12, 'Bimtek Pemanfaatan e-form Hortikultura'),
(13, 'Implementasi dan pengawalan e-form peternakan'),
(14, 'Penataan Data Lahan Pertanian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
 ADD PRIMARY KEY (`bidang_id`);

--
-- Indexes for table `judul`
--
ALTER TABLE `judul`
 ADD PRIMARY KEY (`judul_id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
 ADD PRIMARY KEY (`kegiatan_id`);

--
-- Indexes for table `pelaporan`
--
ALTER TABLE `pelaporan`
 ADD PRIMARY KEY (`pelaporan_id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
 ADD PRIMARY KEY (`pengajuan_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `realisasi`
--
ALTER TABLE `realisasi`
 ADD PRIMARY KEY (`realisasi_id`);

--
-- Indexes for table `subbidang`
--
ALTER TABLE `subbidang`
 ADD PRIMARY KEY (`subbidang_id`), ADD KEY `cs_subbidang_01` (`bidang_id`);

--
-- Indexes for table `subjudul`
--
ALTER TABLE `subjudul`
 ADD PRIMARY KEY (`subjudul_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
MODIFY `bidang_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `judul`
--
ALTER TABLE `judul`
MODIFY `judul_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
MODIFY `kegiatan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pelaporan`
--
ALTER TABLE `pelaporan`
MODIFY `pelaporan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
MODIFY `pengajuan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `realisasi`
--
ALTER TABLE `realisasi`
MODIFY `realisasi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subbidang`
--
ALTER TABLE `subbidang`
MODIFY `subbidang_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subjudul`
--
ALTER TABLE `subjudul`
MODIFY `subjudul_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `subbidang`
--
ALTER TABLE `subbidang`
ADD CONSTRAINT `cs_subbidang_01` FOREIGN KEY (`bidang_id`) REFERENCES `bidang` (`bidang_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
