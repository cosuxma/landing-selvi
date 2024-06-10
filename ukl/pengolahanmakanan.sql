-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2024 pada 15.46
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengolahanmakanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan2`
--

CREATE TABLE `makanan2` (
  `id_makanan` int(100) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_user` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `makanan2`
--

INSERT INTO `makanan2` (`id_makanan`, `nama_makanan`, `asal`, `deskripsi`, `foto`, `id_user`) VALUES
(1, 'Karedok', 'Jawa Barat', 'Karedok adalah makanan nabati khas daerah Jawa Barat. Makanannya terdiri dari beberapa sayuran mentah, seperti kacang panjang, kol, tauge, mentimun yang dicuci bersih, lalu dipotong-potong.\r\nKaredok mengandung serat, vitamin A, vitamin C, folat, kalium, dan berbagai fitonutrien dari sayurannya.', 'karedok.jpg', 1),
(5, 'Gudeg', 'Yogyakarta', 'Gudeg merupakan makanan khas dari Kota Yogyakarta. Gudeg terbuat dari nangka mudah yang direbus dengan gula kelapa dan santan selama beberapa jam. \r\nGudeg ini mengandung karbohidrat, serat, protein nabati dari nangka muda, serta lemak dan protein hewani dari santan dan telur.', 'gudeg.jpg', 2),
(6, 'Bakpia Kacang Hijau', 'Yogyakarta', 'Bakpia termasuk camilan manis, dan disukai semua kalangan, mulai dari anak-anak sampai dewasa. \r\nKue ini memiliki tekstur lembut dan renyah di luar, sementara isian kacang hijaunya terasa manis.\r\nBakpia mengandung tinggi karbohidrat, protein nabati, serat, vitamin B1, dan mineral seperti zat besi dan magnesium dari kacang hijau.', 'bakpia.jpg', 2),
(8, 'Sayur Lodeh', 'Jawa', 'Sayur Lodeh merupakan masakan khas Jawa yang terdiri dari kacang panjang, labu siam, dan daun melinjo yang dimasak dengan kuah santan yang kental. \r\nSayur Lodeh kaya serat, vitamin, dan mineral dari berbagai sayuran seperti terong, labu siam, kacang panjang, dan daun melinjo, serta lemak baik dari santan.', 'lodeh.jpg', 3),
(9, 'Brenebon', 'Manado', 'Makanan ini merupakan sup kacang merah yang berasal dari Manado. Kacang merah sendiri merupakan jenis kacang yang memiliki nutrisi tinggi, sehingga bermanfaat bagi tubuh.\r\nAdapun kandungan dari makanan Brenebon, mengandung protein nabati tinggi dari kacang merah, serat, vitamin B, dan mineral seperti zat besi dan kalium.', 'brenebon.jpg', 4),
(10, 'Nasi Tutug Oncom Pedas', 'Tasikmalaya, Sunda', 'Makanan khas Tasikmalaya ini terbuat dari nasi yang diaduk dengan oncom goreng atau bakar. \r\nMakanan ini mengandung kaya karbohidrat dari nasi, protein nabati dan lemak dari oncom, serta rempah-rempah yang memiliki sifat antioksidan.', 'tutug.jpg', 5),
(11, 'Colenak', 'Jawa Barat', 'Makanan ini dibuat dari peuyeum sampeu (tape singkong) yang dibakar lalu dihidangkan dengan saus terbuat dari lelehan gula merah dicampur kelapa.\r\nMakanan ini mengandung karbohidrat dari tape singkong, gula, dan lemak dari kelapa parut.', 'colenak.jpg', 1),
(12, 'Bika Ambon', 'Melayu', 'Bika ambon ini, kue pipih berwarna kuning, yang permukaannya nampak seperti pori-pori kulit manusia, dan bagian bawahnya keras, sisa dari tempaan panas di dasar loyang.\r\nKandungan Bika ambon yaitu, karbohidrat, lemak, dan protein dari tepung, telur, santan, dan gula.', 'bika ambon.jpg', 6),
(13, 'Combro', 'Jawa Barat', 'Comro yang berarti oncom di jero (oncom di dalam atau isian oncom) sebagian orang mengenalnya dengan sebutan combro. Merupakan olahan makanan berbahan dasar singkong yang diparut, dan kemudian dibentuk.\r\nMakanan ini memiliki kandungan karbohidrat dari singkong, protein nabati dari tempe, serta lemak dari proses penggorengan.', 'combro.jpg', 1),
(14, 'Kimchi', 'Korea', 'Makanan tradisional Korea ini yang dibuat dari sayuran yang berbumbu pedas dan difermentasi oleh bakteri asam laktat. Sayuran yang digunakan dalam pembuatan kimchi ini pada umumnya adalah sawi putih.\r\nKimchi memiliki kandugan, serat, vitamin A, vitamin C, vitamin K, dan probiotik dari fermentasi sawi putih dan sayuran lainnya. ', 'kimchi.jpg', 7),
(15, 'Tempe Orek', 'Jawa', 'Makanan yang pembuatannya sangat sederhana yaitu dengan tempe potong kecil dimasak dengan gula dan kecap.\r\nTempe orek memiliki protein nabati tinggi, serat, vitamin B12, dan mineral seperti zat besi dan kalsium dari tempe.', 'tempe orek.jpg', 3),
(16, 'Tumis Sawi Jagung', 'Jawa', 'Makanan yang berbahan utama sawi dan jagung ini memiliki khasiat yang banyak, dan juga lezat.\r\nMakanan Tumis Sawi Jagung ini memiliki kandungan yaitu, serat, vitamin A, vitamin C, folat dari sawi, serta karbohidrat dan antioksidan dari jagung.', 'tumis.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `minuman`
--

CREATE TABLE `minuman` (
  `id_minuman` int(11) NOT NULL,
  `nama_minuman` varchar(100) NOT NULL,
  `asal_minuman` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_user` int(100) NOT NULL
) ;

--
-- Dumping data untuk tabel `minuman`
--

INSERT INTO `minuman` (`id_minuman`, `nama_minuman`, `asal_minuman`, `deskripsi`, `foto`, `id_user`) VALUES
(1, 'Susu Almond', 'Timur Tengah dan Mediterania', 'Minuman nabati ini yang terbuat dari kacang almond. Susu almond memiliki tekstur encer, rasa pedas, dan warna putih. \r\nSusu Almond memiliki Kandungan Nutrisi (per 240 ml/1 cup, tanpa pemanis)\r\nKalori:30-50 kalori\r\nLemak: 2.5-3.5 gram\r\nKarbohidrat: 1-2 gram\r\nProtein: 1 gram\r\nKalsium: 200-450 mg (tergantung fortifikasi)\r\nVitamin E: 6-12 mg\r\nVitamin D: 2-3 mcg (tergantung fortifikasi)\r\nKalium: 150-200 mg', 'susu almond.jpg', 1),
(2, 'Susu Kedelai', 'Cina', 'Susu kedelai, juga dikenal sebagai susu soya, adalah minuman nabati yang terbuat dari kedelai. Susu kedelai berwarna putih kekuningan, memiliki tekstur encer hingga kental, dan bau langu yang khas.\r\nSusu kedelai memiliki Kandungan Nutrisi (per 240 ml/1 cup, tanpa pemanis)\r\nKalori: 80-100 kalori\r\nLemak: 4-5 gram\r\nKarbohidrat: 4-6 gram\r\nProtein: 7-9 gram\r\nKalsium: 200-300 mg (tergantung fortifikasi)\r\nVitamin D: 2-3 mcg (tergantung fortifikasi)\r\nVitamin B12: 1-3 mcg (tergantung fortifikasi)\r\nZat Besi: 1-2 mg', 'susu kedelai.jpg', 2),
(3, 'Susu Beras Merah', 'Jepang', 'Sari beras atau susu beras adalah sari nabati yang terbuat dari rendaman beras.Beras merah merupakan biji-bijian utuh yang hanya mengalami sekali proses pengelupasan kulit.\r\nSusu Beras ini memiliki Kandungan Nutrisi (per 240 ml/1 cup, tanpa pemanis)\r\nKalori: 70-120 kalori\r\nLemak: 2-4 gram\r\nKarbohidrat: 14-24 gram\r\nProtein: 1-2 gram\r\nKalsium: 200-300 mg (tergantung fortifikasi)\r\nVitamin D: 2-3 mcg (tergantung fortifikasi)\r\nZat Besi: 0.5-1.5 mg', 'beras.jpg', 3),
(4, 'Susu Gandum', 'Timur Tengah', 'Susu gandum, atau susu oat, adalah minuman nabati yang terbuat dari ekstrak air biji gandum oat. Dan susu ini cocok untuk orang-orang yang tidak toleran laktosa pada susu sapi, vegetarian, atau alergi.\r\nSusu Gandum memiliki Kandungan Nutrisi (per 240 ml/1 cup, tanpa pemanis)\r\nKalori: 120-130 kalori\r\nLemak: 5-7 gram\r\nKarbohidrat: 16-24 gram\r\nProtein: 2-4 gram\r\nKalsium: 350-450 mg (tergantung fortifikasi)\r\nVitamin D: 2-3 mcg (tergantung fortifikasi)\r\nSerat: 2-4 gram', 'gandum.jpg', 1),
(5, 'Susu Kacang Mede', 'asal kacang mede sendiri berasal dari timur laut Brasil atau di Indonesia berada di Jawa Tengah', 'Susu kacang mede adalah susu nabati yang cocok untuk vegan dan orang yang tidak toleran laktosa.\r\nSusu ini memiliki Kandungan Nutrisi (per 240 ml/1 cup, tanpa pemanis)\r\nKalori: 25-50 kalori\r\nLemak: 2-4 gram\r\nKarbohidrat: 1-2 gram\r\nProtein: 0.5-1 gram\r\nKalsium: 200-300 mg (tergantung fortifikasi)\r\nVitamin D: 2-3 mcg (tergantung fortifikasi)\r\nVitamin E: 6-8 mg', 'kacang mete.jpg', 4),
(6, 'Almond Milk Yoghurt', 'MancaNegara', 'Almond milk yoghurt adalah fermentasi yang dibuat dari susu almond, yaitu susu nabati yang terbuat dari almond. Yoghurt ini juga bisa untuk orang yang sedang menghindari produk susu hewani karena alergi.\r\nYoughurt ini memiliki Kandungan Nutrisi (per 170 gram/serving)\r\nKalori: 100-150 kalori (tergantung pada merek dan tambahan bahan)\r\nLemak: 4-8 gram\r\nKarbohidrat: 10-20 gram\r\nProtein: 3-6 gram\r\nKalsium: 150-300 mg (tergantung fortifikasi)\r\nVitamin D: 1-2 mcg (tergantung fortifikasi)\r\nProbiotik: Bakteri baik seperti Lactobacillus dan Bifidobacterium', 'almond milk yoghurt.jpg', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `email`) VALUES
(31, 'b', 'b', 'user', 'almhyra@gmail.com'),
(32, 'selvianaputri', '1234', 'admin', 'selvianaputri2008@gmail.com'),
(33, 'cherryiee', '3333', 'admin', 'almhyra@gmail.com'),
(35, 'lii', '1111', 'user', 'selvianaputri2008@gmail.com'),
(36, 's', 's', 'admin', 'almhyra@gmail.com'),
(37, 's', '1', 'admin', 'almhyra@gmail.com'),
(38, 'z', '11', 'user', 'almhyra@gmail.com'),
(39, 'key', '27', 'user', 'selvianaputri2008@gmail.com'),
(40, 'cia', '12345', 'user', 'almhyra1@gmail.com'),
(41, 'Selvia', '12345', 'user', 'lele12@gmail.com'),
(42, 'selvian', '123', 'user', 'lele123@gmail.com'),
(43, 'kinarian', '2015', 'user', 'almhyra4@gmail.com'),
(44, 'kinarian', '2015', 'user', 'almhyra4@gmail.com'),
(45, 'chevy', '23', 'user', 'rizqillahi@gmail.com'),
(46, 'rizqi', '09', 'user', 'selvianaputri@gmail.com'),
(47, 'd', '5', 'user', 'kue@gmail.com'),
(48, 'cherryiee', '3333', 'user', 'almhyra@gmail.com'),
(49, 'cherryiee', '3333', 'user', 'almhyra@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan2`
--
ALTER TABLE `makanan2`
  ADD PRIMARY KEY (`id_makanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id_minuman`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan2`
--
ALTER TABLE `makanan2`
  MODIFY `id_makanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id_minuman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
