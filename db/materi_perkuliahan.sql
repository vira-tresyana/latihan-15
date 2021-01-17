-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2020 pada 06.36
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `materi_perkuliahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `belanja`
--

CREATE TABLE `belanja` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `harga` char(50) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `belanja`
--

INSERT INTO `belanja` (`id`, `nama`, `harga`, `total`, `created_at`, `updated_at`) VALUES
(1, 'HOODIE OFFWHITE GRADIENT WHITE PREMIUM HOODIE PRIA HYPE BRANDED MURAH', '450000', 1, '2020-11-21 02:03:16', '2020-11-21 02:03:16'),
(2, '17SEVEN SWEATER HOODIE JUMPER PRIA 0078 POWERBLACK - L', '199000', 2, '2020-11-21 02:03:30', '2020-11-21 02:03:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Pakaian  Wanita', '2020-11-21 19:32:22', '2020-11-21 19:32:22'),
(2, 'Jam Tangan Couple', '2020-11-21 19:53:50', '2020-11-21 19:53:50'),
(3, 'Pakaian Pria', '2020-11-21 20:16:10', '2020-11-21 20:16:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `id_kategori` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `id_user`, `nama`, `harga`, `berat`, `stok`, `id_kategori`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Erie Dress Batik Wanita - Standard', 130000, 1000, 100, 1, 'Cocok untuk berbagai macam acara, kegiatan perkantoran dan jalan jalan tentunya.\r\n\r\n- Motif : Maja Series\r\n- Depan : Ada Accesories Kancing di bagian atas dress\r\n- Belakang : Resleting\r\n- Ukuran :\r\n* Standard (Allsize Fit to S-M)\r\nLingkar Dada : 86-98 cm\r\nPanjang Baju : 87-89 cm\r\nPanjang Lengan : 41 cm\r\n* Jumbo (Allsize Fit to L-XL)\r\nLingkar Dada : 92-104 cm\r\nPanjang Baju : 88-90 cm\r\nPanjang Lengan : 42 cm\r\n* Super Jumbo (Allsize Fit to XL-XXL)\r\nLingkar Dada : 100-116 cm\r\nPanjang Baju : 90-92 cm\r\nPanjang Lengan : 45 cm\r\n\r\nNotes : Toleransi Error Pengukuran ±1-3 cm', '2020-11-21 19:05:31', '2020-11-22 02:50:20'),
(2, 1, 'Gaya Dress Batik Wanita - Standard', 150000, 1000, 20, 1, 'Nyaman dipake seharian, cocok banget untuk menambah koleksi2 dress batik.\r\n\r\n- Motif : Ciara Series\r\n- Bahan : Katun / Cotton Stretch\r\n- Depan : Kancing dari atas sampai bawah\r\n- Ada Kantong Saku di bagian samping kanan kiri\r\n- Ada Pita terpisah untuk diikatkan supaya lebih terkesan langsing\r\n\r\n- Ukuran :\r\n* Standard (Allsize Fit to S-M)\r\nLingkar Dada : 90-98 cm\r\nPanjang Dress : 90-100 cm\r\n* Jumbo (Allsize Fit to L-XL)\r\nLingkar Dada : 96-110 cm\r\nPanjang Dress : 96-110 cm\r\n\r\nNotes :\r\n1. Toleransi Error Pengukuran ±1-3 cm\r\n2. Model memakai Size Standard\r\n3. Ukuran Model : Tinggi 175cm, Lingkar Dada 76cm, Pinggang 56cm', '2020-11-21 19:17:21', '2020-11-22 02:50:22'),
(3, 2, 'Jam Tangan Couple GC Y37003G7 /Y36002G6 Original', 800000, 2000, 10, 2, 'Jam tangan Couple GC COLLECTION\r\nOriginal\r\nAll stainless steel\r\nDiameter 44mm cowok\r\nDiameter 36mm cewek\r\nReal picture\r\n\r\nHarga /pcs\r\n\r\nGaransi mesin 1tahun\r\n\r\nInclude box original + paperbag\r\n\r\n\r\nBACA TERLEBIH DAHULU\r\n-Garansi Fisik 1x24 jam setelah barang diterima dan tidak lepas segel\r\n-Garansi Mesin 1th\r\n-Klaim Garansi bisa titip Di Store Kami\r\n-Untuk klaim garansi bisa dikirim ke toko kami tidak ada biaya apapun (hanya biaya ongkir bolak balik )\r\n-Klaim bisa\r\n------------------------\r\n\r\nKETENTUAN:\r\n-Untuk pilihan Type Dan Size cantumkan Di Notes/Catatan yang berada di Tokopedia\r\n-Pastikan orderanmu sudah sesuai yang kamu inginkan. Kami tidak bisa mengubah ukuran atau warna ya\r\n-Memberikan rating jelek dan komentar negatif Garansi Hangus dan tidak akan dibantu dalam service', '2020-11-21 19:44:24', '2020-11-22 02:50:24'),
(15, 1, 'Astaguna Kemeja Batik Solo Lengan Panjang Full Furing Size M', 140000, 1000, 100, 3, 'MENERIMA PEMESANAN SERAGAM BATIK UNTUK BERBAGAI KEPERLUAN. SILAHKAN LANGSUNG CHAT ADMIN KAK. :)\r\n\r\nLAPISAN FURING\r\nHIGH QUALITY\r\nBAHAN KATUN HALUS\r\nStok Tersedia : M, L, XL dan XXL\r\n- M Lebar dada 108\r\n- L Lebar dada 112\r\n- XL Lebar dada 116\r\n- XXL Lebar dada 120\r\nToleransi ukuran kurang lebih 2cm.\r\n(Harap Konfirmasi Stok Terlebih Dahulu Sebelum Membeli)\r\n\r\nKENAPA BELI BATIK di Galeri Batik Store?\r\n1. Bahan dan jahitannya lebih bagus\r\n2. Harga premium lebih murah\r\n3. Bisa pesan seragam\r\n4. Kualitas High Quality\r\n5. Bisa Dropship\r\n\r\nSemua Produk yang kami buat menyerupai foto dengan tingkat kemiripan maksimal : 90%\r\nFoto diatas hanya sebagai referensi saja.\r\nMohon cantumkan keterangan warna Cadangan ketika order untuk menghidari pesanan terpending di akibatkan stock warna yang di pesan habis, terima kasih\r\n\r\nNOTE:\r\nJika tidak menyertakan keterangan warna, maka akan kami kirim random.\r\nJika ada yang tidak berkenan, kami hanya dapat memproses komplain kakak 1x24 jam kerja begitu barang tersebut sampai. Jika tidak ada tanggapan dari kakak, kami menganggap kakak menyetujui pembelian barang tersebut.', '2020-11-21 20:19:35', '2020-11-21 20:19:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(225) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vira Tresyana', 'viratres', 'vira@gmail.com', '$2y$10$uZJCtciRXUWKZzw/b3f0Des3RcMbG7FiMEmGSnlBurlm/nUV32ib2', NULL, '2020-11-20 19:34:42', '2020-11-20 19:34:42'),
(2, 'Vira', 'vira', 'viratres@gmail.com', '$2y$10$6VcIUYbEwtySd18SxzCEeuHhHtnR.mI3Y14H4ryMXG2T4/4JbWnr2', NULL, '2020-11-21 18:50:08', '2020-11-21 18:50:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_detail`
--

INSERT INTO `user_detail` (`id`, `id_user`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 2, '+628876543212', '2020-11-22 01:55:31', '2020-11-22 01:55:31'),
(2, 1, '+628123456789', '2020-11-22 03:12:25', '2020-11-22 03:12:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `belanja`
--
ALTER TABLE `belanja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `belanja`
--
ALTER TABLE `belanja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
