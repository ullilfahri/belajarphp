-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Jan 2020 pada 05.51
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
`id_anggota` int(3) NOT NULL,
  `nama_anggota` varchar(32) NOT NULL,
  `alamat` text NOT NULL,
  `ttl_anggota` text NOT NULL,
  `status_anggota` varchar(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `alamat`, `ttl_anggota`, `status_anggota`) VALUES
(1, 'Redho', 'Mulbar', 'Ketapang, 17 Januari 2000', '1'),
(3, 'Roni', 'Mulia Baru', 'Ketapang, 17 Agustus 1998', '1'),
(4, 'Roni', 'Mulia Baru', 'Ketapang, 17 Agustus 1998', '1'),
(5, 'Roni', 'Mulia Baru', 'Mulia Baru', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
`kode_buku` int(11) NOT NULL,
  `judul_buku` varchar(32) NOT NULL,
  `pengarang` varchar(32) NOT NULL,
  `jenis_buku` varchar(32) NOT NULL,
  `penerbit` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul_buku`, `pengarang`, `jenis_buku`, `penerbit`) VALUES
(1, 'Bumi', 'Tere Liye', '1', 'Erlangga'),
(2, 'Cinta Brontosaurus', 'Raditya Dika', 'Fiksi', 'Erlangga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meminjam`
--

CREATE TABLE IF NOT EXISTS `meminjam` (
`id_pinjam` int(3) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `jumlah_pinjam` int(2) NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `id_anggota` int(3) NOT NULL,
  `kode_buku` varchar(5) NOT NULL,
  `kembali` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `meminjam`
--

INSERT INTO `meminjam` (`id_pinjam`, `tanggal_pinjam`, `jumlah_pinjam`, `tanggal_kembali`, `id_anggota`, `kode_buku`, `kembali`) VALUES
(1, '2019-12-05', 1, '2019-12-12', 1, '1', 1),
(2, '2019-12-01', 2, '2019-12-08', 2, '001', 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `meminjam`
--
ALTER TABLE `meminjam`
 ADD PRIMARY KEY (`id_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `id_anggota` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
MODIFY `kode_buku` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `meminjam`
--
ALTER TABLE `meminjam`
MODIFY `id_pinjam` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
