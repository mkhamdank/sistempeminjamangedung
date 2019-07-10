-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Jul 2019 pada 05.40
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman_gedung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_gedung`
--

CREATE TABLE `fasilitas_gedung` (
  `id_fasilitas` int(11) NOT NULL,
  `fk_gedung` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas_gedung`
--

INSERT INTO `fasilitas_gedung` (`id_fasilitas`, `fk_gedung`, `jumlah`, `jenis`) VALUES
(1, 1, 62, 'Kursi Rapat Pimpinan'),
(3, 1, 6, 'Kursi Rapat Pimpinan Sedang'),
(4, 1, 24, 'Kursi Rapat'),
(5, 1, 32, 'Meja Rapat pimpinan'),
(6, 1, 28, 'Mic Meja'),
(7, 1, 4, 'Speaker EV'),
(8, 1, 1, 'Mixer Maxie Pro FX22'),
(9, 1, 8, 'Receiver Wireless'),
(10, 1, 2, 'Receiver Wireless Sure'),
(11, 1, 2, 'Mic Wireless'),
(12, 1, 1, 'Meja LCD'),
(13, 1, 100, 'Kapasitas'),
(15, 5, 1, 'TV 43" Samsung'),
(16, 5, 3, 'Meja rapat pimpinan'),
(17, 5, 5, 'Rountable'),
(18, 5, 32, 'Kursi rapat'),
(19, 5, 1, 'Meja prasasti'),
(20, 5, 1, 'Kotak mixer'),
(21, 5, 2, 'Speaker'),
(22, 5, 1, 'Mixer'),
(23, 5, 1, 'Wireless sure'),
(24, 5, 1, 'DVD player'),
(25, 5, 1, 'Mic meja'),
(26, 7, 23, 'Meja rapat pimpinan'),
(27, 7, 26, 'Kursi rapat pimpinan'),
(28, 7, 85, 'Meja rapat'),
(29, 7, 4, 'Speaker EV'),
(30, 7, 4, 'Stand speaker'),
(31, 7, 27, 'Mic meja'),
(32, 7, 6, 'Receiver mic meja'),
(33, 7, 2, 'Mic wireless'),
(34, 7, 2, 'Receiver mic'),
(35, 7, 1, 'Mixer maxie pro 22'),
(36, 7, 2, 'Stand mic'),
(37, 7, 48, 'Kursi rapat'),
(38, 7, 15, 'Kursi rapat lengkung'),
(39, 7, 1, 'DVD polytron + remote'),
(40, 7, 85, 'Kursi rapat sofa sedang'),
(41, 7, 1, 'Garuda pancasila'),
(42, 7, 2, 'Foto presiden & wakil presiden'),
(43, 6, 6, 'Meja rapat pimpinan'),
(44, 6, 5, 'Kursi rapat pimpinan'),
(45, 6, 85, 'Meja rapat'),
(46, 6, 2, 'Speaker EV'),
(47, 6, 4, 'Stand speaker'),
(48, 6, 30, 'Mic meja rusak 2'),
(49, 6, 8, 'Receiver'),
(50, 6, 2, 'Mic wireless'),
(51, 6, 2, 'Receiver mic'),
(52, 6, 1, 'DVD player'),
(53, 6, 1, 'Mixer maxie pro 22'),
(54, 6, 1, 'Podium'),
(55, 6, 20, 'Kursi rapat'),
(56, 6, 3, 'Kursi rapat pejabat'),
(57, 6, 85, 'Kursi rapat sofa sedang'),
(58, 6, 1, 'Garuda pancasila'),
(59, 6, 2, 'Foto presiden & wakil presiden'),
(60, 3, 11, 'Kursi rapat pimpinan sedang'),
(61, 3, 14, 'Kursi rapat'),
(62, 3, 1, 'Meja rapat bersama'),
(63, 7, 100, 'Kapasitas'),
(64, 5, 30, 'Kapasitas'),
(65, 6, 100, 'Kapasitas'),
(66, 3, 100, 'Kapasitas'),
(67, 10, 28, 'Kursi rapat pimpinan'),
(68, 10, 5, 'Kursi rapat pimpinan sedang'),
(69, 10, 34, 'Kursi rapat'),
(70, 10, 16, 'Meja rapat pimpinan'),
(71, 10, 16, 'Mic meja'),
(72, 10, 4, 'Speaker EV'),
(73, 10, 1, 'Mixer maxie pro FX16'),
(74, 10, 4, 'Receiver wireless'),
(75, 10, 1, 'Receiver wireless sure'),
(76, 10, 1, 'Mic wireless'),
(77, 10, 2, 'Meja LCD'),
(78, 10, 3, 'Meja eseselon 4'),
(79, 10, 40, 'Kapasitas'),
(80, 9, 70, 'Kapasitas'),
(81, 9, 70, 'Meja rapat'),
(82, 9, 3, 'Meja rapat pimpinan'),
(83, 9, 2, 'Speaker pasif'),
(84, 9, 1, 'Wireless shure'),
(85, 9, 3, 'Mic meja kabel'),
(86, 9, 1, 'Mic wireless'),
(87, 9, 2, 'AC berdiri'),
(88, 9, 6, 'AC tembok'),
(89, 9, 1, 'Proyektor'),
(90, 9, 1, 'Power mixer'),
(91, 9, 3, 'Kursi rapat pimpinan'),
(92, 9, 70, 'Kursi rapat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`, `judul`, `tanggal`, `deskripsi`) VALUES
(10, '1.jpg', 'Coba', '2018-02-08', 'coba upload galeri'),
(11, '2.jpg', 'coba 2', '2018-02-13', 'coba upload galeri lagi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedung`
--

CREATE TABLE `gedung` (
  `id_gedung` int(11) NOT NULL,
  `nama_gedung` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gedung`
--

INSERT INTO `gedung` (`id_gedung`, `nama_gedung`, `status`) VALUES
(1, 'RUPATAMA', 'LENGKAP'),
(3, 'R. RAPAT SEKDA', 'LENGKAP'),
(5, 'R. RAPAT LT III A', 'LENGKAP'),
(6, 'R. RAPAT LT III B', 'LENGKAP'),
(7, 'R. RAPAT LT II B', 'LENGKAP'),
(9, 'BINA BHAKTI PRAJA', 'LENGKAP'),
(10, 'R. RAPAT WAKIL WALIKOTA', 'LENGKAP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `nama`) VALUES
(1, 'BAGIANUMUM', 'd534d9ede101a0c3d66a40b86e121b14', 'Admin'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `fk_skpd` int(11) NOT NULL,
  `nama_peminjam` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `fk_gedung` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `jumlah_orang` int(11) NOT NULL,
  `acara` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `skpd`
--

CREATE TABLE `skpd` (
  `id_skpd` int(11) NOT NULL,
  `nama_skpd` varchar(255) NOT NULL,
  `kepdin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skpd`
--

INSERT INTO `skpd` (`id_skpd`, `nama_skpd`, `kepdin`) VALUES
(1, 'Dinas Pendidikan', 'Dra. Mistin, M.Pd.'),
(3, 'Instansi Lain', '---'),
(4, 'Badan Perencanaan Pembangunan, Penelitian & Pengembangan Daerah', 'M. Chori, S.Sos, M.Si'),
(5, 'Badan Kepegawaian & Pengembangan SDM', 'Dra. Wiwik Sukesi, M.Si'),
(6, 'Badan Penanggulangan Bencana Daerah', 'Sasmito, S.Pd, MH'),
(7, 'Badan Keuangan Daerah', 'Drs. Zadim Effisiensi, M.Si'),
(8, 'Inspektorat', 'Eddy Murtono, SH, MM'),
(9, 'Satuan Polisi Pamong Praja', 'Drs. Robiq Yunianto, M.AP'),
(10, 'Kantor Kesbangpol', 'Suliyanah, S.Sos'),
(11, 'Dinas Kesehatan', 'drg. Kartika Trisulandari'),
(12, 'Dinas Perhubungan', 'Drs. Susetya Herawan, M.Si'),
(13, 'Dinas Kependudukan & Capil', 'Drs. Maulidiono, M.Pd'),
(14, 'Dinas Pekerjaan Umum & Penataan Ruang', 'Ir. Himpun'),
(15, 'Dinas Pemberdayaan Perempuan, Perlindungan Anak, Pengendalian Penduduk, & KB', 'Drs. Abu Sufyan, MM(Plt.)'),
(16, 'Dinas Koperasi, Usaha Mikro & Perdagangan', 'Drs. Arief As Siddiq(Plt.)'),
(17, 'Dinas Pariwisata', 'Drs. Imam Suryono, MM(Plt.)'),
(18, 'Dinas Pertanian', 'Ir. Sugeng Pramono'),
(19, 'Dinas Komunikasi & Informatika', 'Drs. Siswanto, MM'),
(20, 'Dinas Penanaman Modal, Pelayanan Terpadu Satu Pintu & Naker', 'Dra. Eny Rachyuningsih, M.Si'),
(21, 'Dinas Perpustakaan & Kearsipan', 'Drs. Eko Suhartono, MM'),
(22, 'Dinas Lingkungan Hidup', 'Drs. Arief As Siddiq'),
(23, 'Dinas Ketahanan Pangan', 'Dra. Wiwik Nuryati, MM'),
(24, 'Dinas Penanggulangan Kebakaran', 'Drs. Abdillah Alkaf'),
(25, 'Dinas Sosial', 'Drs. Bambang Kuncoro'),
(26, 'Dinas Perumahan, Kawasan Permukiman & Pertanahan', 'Ir. Himpun(Plt.)'),
(27, 'Bagian Adm. Pemerintahan & Otoda', 'Suliyanah, S.Sos(Plt.)'),
(28, 'Bagian Hukum', 'Rr. Maria Inge SS, SH, MH'),
(29, 'Bagian Organisasi', 'Mokhamad Forkan, S.Pd, SE, SH, MM'),
(30, 'Bagian Administrasi Ekbang', 'Andhang Budhy Harsa, SE'),
(31, 'Bagian Administrasi Kesra & Sosial', 'Dra. Diah Liestina P, MM'),
(32, 'Bagian Layanan Pengadaan', 'Andhang Budhy Harsa, SE(Plt.)'),
(33, 'Bagian Umum', 'Julijanti Wachjuni, SH'),
(34, 'Bagian Protokol & Rumah Tangga', 'Drs. Sanyoto Widayat, M.AP'),
(35, 'Bagian Hubungan Masyarakat', 'Dra. Shanti Restuningsasi, MM'),
(36, 'Kecamatan Batu', 'Aries Setiawan, S.STP'),
(37, 'Kecamatan Junrejo', 'M. Nur Adhim, AP'),
(38, 'Kecamatan Bumiaji', 'Aditya Prasaja(Plt.)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas_gedung`
--
ALTER TABLE `fasilitas_gedung`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `fk_gedung` (`fk_gedung`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id_gedung`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `fk_skpd` (`fk_skpd`),
  ADD KEY `fk_gedung` (`fk_gedung`);

--
-- Indexes for table `skpd`
--
ALTER TABLE `skpd`
  ADD PRIMARY KEY (`id_skpd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas_gedung`
--
ALTER TABLE `fasilitas_gedung`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id_gedung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skpd`
--
ALTER TABLE `skpd`
  MODIFY `id_skpd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fasilitas_gedung`
--
ALTER TABLE `fasilitas_gedung`
  ADD CONSTRAINT `fasilitas_gedung_ibfk_1` FOREIGN KEY (`fk_gedung`) REFERENCES `gedung` (`id_gedung`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`fk_skpd`) REFERENCES `skpd` (`id_skpd`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`fk_gedung`) REFERENCES `gedung` (`id_gedung`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
