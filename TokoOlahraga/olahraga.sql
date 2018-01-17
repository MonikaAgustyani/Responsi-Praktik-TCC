-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 24 Mei 2017 pada 10.12
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `olahraga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `namaadmin` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lvl` int(11) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `namaadmin`, `username`, `password`, `lvl`) VALUES
(123, 'admin1', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `idbarang` int(11) NOT NULL AUTO_INCREMENT,
  `namabarang` varchar(50) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  PRIMARY KEY (`idbarang`),
  KEY `fk_kategori` (`idkategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1203 ;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idbarang`, `namabarang`, `harga`, `stok`, `gambar`, `warna`, `ukuran`, `idkategori`, `deskripsi`) VALUES
(1101, 'Bola Basket Mikasa', 350000, 100, 'b-basket-mikasa.jpg', 'Orenge', 45, 1002, 'Bola basket Mikasa yang memiliki permukaan yang terbuat dari material yang kuat dan tahan lama serta desain dan warna yang simple dan sporty, dengan Mikasa Anda dapat bermain basket dimana dan kapan saja karena mudah untuk dibawa kemana saja.'),
(1102, 'Bola Voly', 25000, 100, 'b-voli.jpg', 'Biru', 40, 1003, 'Bola voli adalah olahraga permainan yang dimainkan oleh dua grup berlawanan. Masing-masing grup memiliki enam orang pemain. Terdapat pula variasi permainanbola voli pantai yang masing-masing grup hanya memiliki dua orang pemain.'),
(1103, 'Bola Futsal', 25000, 150, 'b-futsal.jpg', 'Hijau', 40, 1001, 'Bola Futsal My UnoTerbuat dari bahan Kulit sinthetic polyurethan, dilem rapi, menggunakan bola dalam Butyl 80%, lunak dan lentur. Futsal adalah permainan bola yang dimainkan oleh dua tim, yang masing-masing beranggotakan lima orang. Tujuannya adalah memasukkan bola ke gawang lawan, dengan memanipulasi bola dengan kaki. Selain lima pemain utama, setiap regu juga diizinkan memiliki pemain cadangan. Tidak seperti permainan sepak bola dalam ruangan lainnya.'),
(1105, 'Barbel', 400000, 50, 'barbel.jpg', 'Hitam', 200, 1004, 'Barbell adalah versi besar dari dumbbell. Alat ini dihubungkan batang besi yang panjang dan umumnya beban pada kedua sisinya dapat di bongkar pasang untuk mengatur beban agar sesuai dengan kemampuan penggunanya. Tidak seperti dumble yang dapat digunakan dengan hanya satu tangan, Barbell adalah alat yang harus digunakan dengan 2 tangan. Alat ini dapat membuat otot bagian kanan dan kiri berkembang secara seimbang.'),
(1106, 'ButterflyMachine', 2500000, 10, 'b-machine.jpg', 'Hitam Putih', 100, 1004, 'Cara menggunakan alat ini dengan membuka ke arah depan dan belakang, persis kepakan sayap kupu-kupu. Alat ini berguna untuk melatih otot Pectoralis (otot dada) terutama bagian tengah. Ini merupakan salah satu alat favorit penggemar fitness.'),
(1107, 'Chest Press Machine', 3500000, 20, 'c-p-Machine.jpg', 'Hitam', 200, 1004, 'Penggunaan alat ini dengan mendorong ke depan yang merupakan fokus latihannya. Keunggulannya adalah bentuk pegangannya memungkinkan gaya dorong secara vertikal atau horisontal yang memberikan efek tekanan yang berbeda pada otot dada. Fungsinya melatih otot dada bagian tengah (Pectoralis).'),
(1108, 'Dumbbell', 500000, 50, 'dumbel.jpg', 'Hitam', 30, 1004, 'Dumbbell adalah alat fitnes dasar. Bentuknya ialah 2 buah beban yang tersambung oleh batang besi pendek. Anda biasanya akan menemukan banyak alat ini di gym dengan ukuran yang berbeda-beda. Alat ini sangat praktis karena dapat dibawa kemanapun dan tidak perlu menggunakan ruangan yang luas ketika menggunakannya untuk berlatih. Berbeda dengan alat lainya, alat ini dapat digunakan untuk variasi gerakan fitnes yang tidak terbatas.'),
(1109, 'Bet Ping-Pong', 150000, 200, 'bet-pingpong.jpg', 'Merah Hitam', 50, 1005, 'Ukuran, berat dan bentuk raket tidak ditentukan, tetapi daun raket harus datar dan kaku. Daun raket minimal 85 % terbuat dari kayu diukur dari ketebalannya. Lapisan perekat di dalam kayu dapat diperkuat dengan bahan yang berserat seperti serat karbon (carbon fibre) atau serat kaca (glass fibre) atau bahan kertas yang dipadatkan, namun bahan tersebut tidak boleh lebih dari 7,5 % dari total ketebalan atau berukuran 0,35 mm, yang lebih tipis yang dipakai sebagai acuan.'),
(1201, 'Tolak Peluru', 200000, 70, 'tolak-peluru.jpg', 'Hitam', 10, 1004, 'Tolak peluru adalah salah satu cabang olahraga atletik. Atlet tolak peluru melemparkan bola besi yang berat sejauh mungkin. Ukuran dari tolak peluru ini pun berbeda-beda. Namun untuk produk ini digunakan untuk junior putri yang beratnya 3 kg.'),
(1202, 'Peluit', 50000, 500, 'peluit.jpg', 'orange', 10, 1001, 'Peluit Fox biasanya digunakan untuk olahraga yang berbeda juga menggunakan peluit, tetapi biasanya digunakan di dalam banyak olahraga ialah Fox. Peluit ini digunakan pada olahraga basket, sepak bola, dan permainan lainnya, karena dapat langsung didengar oleh banyak penonton. Umumnya para pelatih olahraga atau guru olahraga di sekolah identik dengan peluit di sakunya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idkategori` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1006 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idkategori`, `nama`) VALUES
(1001, 'Sepakbola'),
(1002, 'Basket'),
(1003, 'Volly'),
(1004, 'Alat'),
(1005, 'Dan Lain-Lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `idpembelian` int(20) NOT NULL AUTO_INCREMENT,
  `namapembeli` varchar(40) NOT NULL,
  `jumlahpemesanan` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notlp` int(13) NOT NULL,
  `email` varchar(25) NOT NULL,
  `metodebayar` enum('COD','Transfer') NOT NULL,
  `idbarang` int(11) NOT NULL,
  PRIMARY KEY (`idpembelian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
