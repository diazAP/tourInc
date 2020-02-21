-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 04:33 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourinc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb`
--

CREATE TABLE `tb` (
  `id` int(11) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `jumlah` varchar(25) NOT NULL,
  `biaya` varchar(25) NOT NULL,
  `rekomendasi` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `c11` float NOT NULL,
  `c12` float NOT NULL,
  `c13` float NOT NULL,
  `c14` float NOT NULL,
  `c21` float NOT NULL,
  `c22` float NOT NULL,
  `c23` float NOT NULL,
  `c24` float NOT NULL,
  `c31` float NOT NULL,
  `c32` float NOT NULL,
  `c33` float NOT NULL,
  `cpi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb`
--

INSERT INTO `tb` (`id`, `kota`, `jenis`, `jumlah`, `biaya`, `rekomendasi`, `deskripsi`, `gambar`, `c11`, `c12`, `c13`, `c14`, `c21`, `c22`, `c23`, `c24`, `c31`, `c32`, `c33`, `cpi`) VALUES
(15, 'Yogyakarta', 'Calm', 'Solo', 'Moderate', 'Art Jog', 'Art Jog adalah festival, pameran, dan pasar seni rupa kontemporer yang digelar tahunan, Art Jog digelar di lokasi Taman Budaya Yogyakarta. Terdapat berbagai macam karya seni yang dipoles oleh tangan seniman-seniman ternama baik dari dalam maupun luar negeri. Tempat ini cocok untuk orang yang ingin menikmati waktu sendirian ataupun dengan pasangannya. Biaya yang dikeluarkan terblang menengah disetiap kali masuk, sekitar Rp 50.000,- per orang.', 'img/rekomendasi/artjog.jpg', 3, 1, 5, 1, 5, 4, 2, 2, 1, 5, 1, 856),
(16, 'Yogyakarta', 'Art', 'Couple', 'Moderate', 'Art Jog', 'Art Jog adalah festival, pameran, dan pasar seni rupa kontemporer yang digelar tahunan, Art Jog digelar di lokasi Taman Budaya Yogyakarta. Terdapat berbagai macam karya seni yang dipoles oleh tangan seniman-seniman ternama baik dari dalam maupun luar negeri. Tempat ini cocok untuk orang yang ingin menikmati waktu sendirian ataupun dengan pasangannya. Biaya yang dikeluarkan terblang menengah disetiap kali masuk, sekitar Rp 50.000,- per orang.', 'img/rekomendasi/artjog.jpg', 3, 1, 5, 1, 5, 4, 2, 2, 1, 5, 1, 856),
(17, 'Yogyakarta', 'Art', 'Couple', 'Budget', 'Malioboro', 'Jalan Malioboro adalah nama salah satu kawasan jalan dari tiga jalan di Kota Yogyakarta yang membentang dari Tugu Yogyakarta hingga ke perempatan Kantor Pos Yogyakarta. Kawasan ini kental akan suasana keistimewaan jogja, salah satunya pasar yang menjual berbagai macam barang-barang khas kebudayaan jogja seperti blangkon, batik dan lain-lain. Dengan budget yang pas-pasan, anda bisa mendapatkan berbagai macam souvenir yang tergolong unik dan murah Selain itu disini juga memiliki banyak tempat yang menyajikan makanan-makanan khas seperti gudeg sehingga sangat cocok untuk wisata berkelompok ataupun bersama keluarga tercinta.', 'img/rekomendasi/malioboro.jpg', 1, 1, 4, 2, 2, 3, 4, 5, 5, 2, 1, 791),
(18, 'Yogyakarta', 'Art', 'Family', 'Budget', 'Malioboro', 'Jalan Malioboro adalah nama salah satu kawasan jalan dari tiga jalan di Kota Yogyakarta yang membentang dari Tugu Yogyakarta hingga ke perempatan Kantor Pos Yogyakarta. Kawasan ini kental akan suasana keistimewaan jogja, salah satunya pasar yang menjual berbagai macam barang-barang khas kebudayaan jogja seperti blangkon, batik dan lain-lain. Dengan budget yang pas-pasan, anda bisa mendapatkan berbagai macam souvenir yang tergolong unik dan murah Selain itu disini juga memiliki banyak tempat yang menyajikan makanan-makanan khas seperti gudeg sehingga sangat cocok untuk wisata berkelompok ataupun bersama keluarga tercinta.', 'img/rekomendasi/malioboro.jpg', 1, 1, 4, 2, 2, 3, 4, 5, 5, 2, 1, 791),
(19, 'Yogyakarta', 'Art', 'Group', 'Budget', 'Malioboro', 'Jalan Malioboro adalah nama salah satu kawasan jalan dari tiga jalan di Kota Yogyakarta yang membentang dari Tugu Yogyakarta hingga ke perempatan Kantor Pos Yogyakarta. Kawasan ini kental akan suasana keistimewaan jogja, salah satunya pasar yang menjual berbagai macam barang-barang khas kebudayaan jogja seperti blangkon, batik dan lain-lain. Dengan budget yang pas-pasan, anda bisa mendapatkan berbagai macam souvenir yang tergolong unik dan murah Selain itu disini juga memiliki banyak tempat yang menyajikan makanan-makanan khas seperti gudeg sehingga sangat cocok untuk wisata berkelompok ataupun bersama keluarga tercinta.', 'img/rekomendasi/malioboro.jpg', 1, 1, 4, 2, 2, 3, 4, 5, 5, 2, 1, 791),
(20, 'Yogyakarta', 'Historical', 'Family', 'Budget', 'Taman Sari', 'Taman Sari Yogyakarta, merupakan salah satu bangunan milik kesultanan Yogyakarta yang difungsikan sebagai destinasi wisata dan juga pada saat tertentu juga masih digunakan sebagai tempat ritual oleh keluarga raja. Dengan bentuk bangunan arsitektur ala Portugis-Jawa, bangunan di taman ini menjadi daya tarik utama. Tempat ini cocok untuk anda yang sedang berlibur dengan berkelompok ataupun dengan keluarga tercinta. Hanya dengan Rp 5000,-/orang, anda bisa masuk ke dalam bangunan tempat para petinggi keraton jogja dahulunya mandi.', 'img/rekomendasi/tamansari.jpg', 2, 1, 3, 5, 1, 2, 4, 5, 5, 1, 1, 866),
(21, 'Yogyakarta', 'Historical', 'Group', 'Budget', 'Taman Sari', 'Taman Sari Yogyakarta, merupakan salah satu bangunan milik kesultanan Yogyakarta yang difungsikan sebagai destinasi wisata dan juga pada saat tertentu juga masih digunakan sebagai tempat ritual oleh keluarga raja. Dengan bentuk bangunan arsitektur ala Portugis-Jawa, bangunan di taman ini menjadi daya tarik utama. Tempat ini cocok untuk anda yang sedang berlibur dengan berkelompok ataupun dengan keluarga tercinta. Hanya dengan Rp 5000,-/orang, anda bisa masuk ke dalam bangunan tempat para petinggi keraton jogja dahulunya mandi.', 'img/rekomendasi/tamansari.jpg', 2, 1, 3, 5, 1, 2, 4, 5, 5, 1, 1, 866),
(22, 'Yogyakarta', 'Tropical', 'Family', 'Moderate', 'Gembira Loka Zoo', 'Kebun Binatang Gembira Loka adalah kebun binatang  yang berisi berbagai macam spesies dari belahan dunia, seperti orangutan, gajah asia, simpanse, harimau, dan lain sebagainya. Terdapat lebih dari 100 spesies satwa di antaranya 61 spesies flora. Tempat ini cocok untuk wisata bersama anak-anak, keluarga ataupun bersama teman-teman. Untuk masuk ke wisata ini memakan biaya Rp 30.000,- per orang dan belum lagi biaya untuk menikmati wahana lain.', 'img/rekomendasi/gembiraloka.jpg', 1, 5, 1, 1, 1, 2, 4, 5, 1, 5, 1, 746),
(23, 'Yogyakarta', 'Tropical', 'Group', 'Moderate', 'Gembira Loka Zoo', 'Kebun Binatang Gembira Loka adalah kebun binatang  yang berisi berbagai macam spesies dari belahan dunia, seperti orangutan, gajah asia, simpanse, harimau, dan lain sebagainya. Terdapat lebih dari 100 spesies satwa di antaranya 61 spesies flora. Tempat ini cocok untuk wisata bersama anak-anak, keluarga ataupun bersama teman-teman. Untuk masuk ke wisata ini memakan biaya Rp 30.000,- per orang dan belum lagi biaya untuk menikmati wahana lain.', 'img/rekomendasi/gembiraloka.jpg', 1, 5, 1, 1, 1, 2, 4, 5, 1, 5, 1, 746),
(24, 'Yogyakarta', 'Historical', 'Family', 'Budget', 'Keraton', 'Keraton merupakan salah satu objek wisata di Kota Yogyakarta. Sebagian kompleks keraton merupakan museum yang menyimpan berbagai koleksi milik kesultanan, termasuk berbagai pemberian dari raja-raja Eropa, replika pusaka keraton, dan gamelan. Dari segi bangunannya, keraton ini merupakan salah satu contoh arsitektur istana Jawa yang terbaik, memiliki balairung-balairung mewah dan lapangan serta paviliun yang luas. Tempat ini cocok sebagai wisata edukasi yang bisa dikunjungi secara berkelompok ataupun dengan keluarga meskipun sendirian juga tidak masalah. Untuk masuk ke objek wisata ini cukup terjangkau sekitar Rp 7000,- untuk wisatawan lokal dan Rp 15.000,- untuk wisatawan mancanegara sehingga tidak memberatkan bagi wisatawan.', 'img/rekomendasi/keraton.jpg', 1, 1, 3, 5, 2, 1, 4, 5, 5, 1, 1, 826),
(25, 'Yogyakarta', 'Historical', 'Group', 'Budget', 'Keraton', 'Keraton merupakan salah satu objek wisata di Kota Yogyakarta. Sebagian kompleks keraton merupakan museum yang menyimpan berbagai koleksi milik kesultanan, termasuk berbagai pemberian dari raja-raja Eropa, replika pusaka keraton, dan gamelan. Dari segi bangunannya, keraton ini merupakan salah satu contoh arsitektur istana Jawa yang terbaik, memiliki balairung-balairung mewah dan lapangan serta paviliun yang luas. Tempat ini cocok sebagai wisata edukasi yang bisa dikunjungi secara berkelompok ataupun dengan keluarga meskipun sendirian juga tidak masalah. Untuk masuk ke objek wisata ini cukup terjangkau sekitar Rp 7000,- untuk wisatawan lokal dan Rp 15.000,- untuk wisatawan mancanegara sehingga tidak memberatkan bagi wisatawan.', 'img/rekomendasi/keraton.jpg', 1, 1, 3, 5, 2, 1, 4, 5, 5, 1, 1, 826),
(26, 'Yogyakarta', 'Tropical', 'Couple', 'Budget', 'Tebing Breksi', 'Taman wisata Tebing Breksi adalah tempat wisata alam di Jogja. Sesuai dengan namanya, tempat wisata ini merupakan perbukitan batuan breksi. Potensi wisata alam yang dimilikinya menawarkan banyak hal yang tidak boleh dilewatkan, diantaranya adalah pemandangan dinding tebing dengan ornamen patahan yang terlihat begitu artistik. Wisata ini bagus untuk dikunjungi bersama kekasih tercinta meskipun juga cocok untuk bersama keluarga ataupun teman-teman. Biaya masuknya sendiri masih secara suka rela, namun untuk parkir membayar parkir mobil sebesar Rp 5000,- dan motor sebesar Rp 2000,-.', 'img/rekomendasi/tebing.jpg', 1, 4, 1, 1, 0, 3, 3, 4, 5, 1, 1, 676),
(27, 'Yogyakarta', 'Tropical', 'Family', 'Budget', 'Tebing Breksi', 'Taman wisata Tebing Breksi adalah tempat wisata alam di Jogja. Sesuai dengan namanya, tempat wisata ini merupakan perbukitan batuan breksi. Potensi wisata alam yang dimilikinya menawarkan banyak hal yang tidak boleh dilewatkan, diantaranya adalah pemandan', 'img/rekomendasi/tebing.jpg', 1, 4, 1, 1, 1, 3, 3, 4, 5, 1, 1, 676),
(28, 'Yogyakarta', 'Tropical', 'Group', 'Budget', 'Tebing Breksi', 'Taman wisata Tebing Breksi adalah tempat wisata alam di Jogja. Sesuai dengan namanya, tempat wisata ini merupakan perbukitan batuan breksi. Potensi wisata alam yang dimilikinya menawarkan banyak hal yang tidak boleh dilewatkan, diantaranya adalah pemandan', 'img/rekomendasi/tebing.jpg', 1, 4, 1, 1, 1, 3, 3, 4, 5, 1, 1, 676),
(29, 'Yogyakarta', 'Calm', 'Couple', 'Budget', 'Hutan Pinus Mangunan', 'Hutan Pinus Mangunan merupakan destinasi wisata alam yang berada di daerah Bantul yang dijadikan sebagai salah satu tempat selfie yang diburu banyak orang. Terdapat banyak deretan pohon pinus yang tumbuh subur di sepanjang hutan tersebut. Hutan Pinus Mang', 'img/rekomendasi/hutan.jpg', 4, 5, 1, 1, 4, 2, 2, 3, 5, 1, 1, 836),
(30, 'Yogyakarta', 'Tropical', 'Couple', 'Budget', 'Hutan Pinus Mangunan', 'Hutan Pinus Mangunan merupakan destinasi wisata alam yang berada di daerah Bantul yang dijadikan sebagai salah satu tempat selfie yang diburu banyak orang. Terdapat banyak deretan pohon pinus yang tumbuh subur di sepanjang hutan tersebut. Hutan Pinus Mang', 'img/rekomendasi/hutan.jpg', 4, 5, 1, 1, 4, 2, 2, 3, 5, 1, 1, 836),
(31, 'Yogyakarta', 'Tropical', 'Family', 'Budget', 'Hutan Pinus Mangunan', 'Hutan Pinus Mangunan merupakan destinasi wisata alam yang berada di daerah Bantul yang dijadikan sebagai salah satu tempat selfie yang diburu banyak orang. Terdapat banyak deretan pohon pinus yang tumbuh subur di sepanjang hutan tersebut. Hutan Pinus Mang', 'img/rekomendasi/hutan.jpg', 4, 5, 1, 1, 4, 2, 2, 3, 5, 1, 1, 836),
(32, 'Yogyakarta', 'Calm', 'Family', 'Budget', 'Hutan Pinus Mangunan', 'Hutan Pinus Mangunan merupakan destinasi wisata alam yang berada di daerah Bantul yang dijadikan sebagai salah satu tempat selfie yang diburu banyak orang. Terdapat banyak deretan pohon pinus yang tumbuh subur di sepanjang hutan tersebut. Hutan Pinus Mang', 'img/rekomendasi/hutan.jpg', 4, 5, 1, 1, 4, 2, 2, 3, 5, 1, 1, 836),
(33, 'Yogyakarta', 'Art', 'Family', 'Budget', 'Pasar Beringharjo', 'Pasar Beringharjo adalah pasar tertua yang  memiliki makna harafiah hutan pohon beringin yang diharapkan memberikan kesejahteraan bagi warga Yogyakarta. Terdapat berbagai macam barang yang mulai dari baju batik hingga jajanan pasar tradisional yang kental', 'img/rekomendasi/beringharjo.jpg', 1, 1, 5, 1, 1, 2, 5, 4, 5, 1, 1, 746),
(34, 'Yogyakarta', 'Art', 'Group', 'Budget', 'Pasar Beringharjo', 'Pasar Beringharjo adalah pasar tertua yang  memiliki makna harafiah hutan pohon beringin yang diharapkan memberikan kesejahteraan bagi warga Yogyakarta. Terdapat berbagai macam barang yang mulai dari baju batik hingga jajanan pasar tradisional yang kental', 'img/rekomendasi/beringharjo.jpg', 1, 1, 5, 1, 1, 2, 5, 4, 5, 1, 1, 746),
(35, 'Yogyakarta', 'Art', 'Solo', 'Fancy', 'Kampung Prawirotaman', 'Kampung Prawirotaman memiliki predikat sebagai kampung internasional ini pernah menjadi markas pejuang kemerdekaan hingga usaha batik ternama.Disini terdapat sederet artshop, cafe, toko buku,  sehingga tempat ini cocok untuk dinikmati sendiri untuk  menen', 'img/rekomendasi/prawirotaman.jpg', 3, 1, 1, 1, 5, 1, 1, 1, 1, 1, 5, 546),
(36, 'Yogyakarta', 'Tropical', 'Solo', 'Budget', 'Taman Budaya Yogyakarta', 'Taman Budaya Yogyakarta menjadi tempat dilangsungkan aneka kegiatan seni budaya (teater, musik, tari, pameran), hingga bimbingan dan pelatihan seni untuk anak dan remaja. Selain memiliki gedung pertunjukan, gedung pameran dan amphiteater sehingga tempat i', 'img/rekomendasi/tamanbudaya.jpg', 3, 1, 5, 1, 5, 1, 1, 2, 5, 1, 1, 736),
(37, 'Yogyakarta', 'Tropical', 'Family', 'Budget', 'Taman Budaya Yogyakarta', 'Taman Budaya Yogyakarta menjadi tempat dilangsungkan aneka kegiatan seni budaya (teater, musik, tari, pameran), hingga bimbingan dan pelatihan seni untuk anak dan remaja. Selain memiliki gedung pertunjukan, gedung pameran dan amphiteater sehingga tempat i', 'img/rekomendasi/tamanbudaya.jpg', 3, 1, 5, 1, 5, 1, 1, 2, 5, 1, 1, 736),
(38, 'Yogyakarta', 'Art', 'Family', 'Budget', 'Taman Budaya Yogyakarta', 'Taman Budaya Yogyakarta menjadi tempat dilangsungkan aneka kegiatan seni budaya (teater, musik, tari, pameran), hingga bimbingan dan pelatihan seni untuk anak dan remaja. Selain memiliki gedung pertunjukan, gedung pameran dan amphiteater sehingga tempat i', 'img/rekomendasi/tamanbudaya.jpg', 3, 1, 5, 1, 5, 1, 1, 2, 5, 1, 1, 736),
(39, 'Yogyakarta', 'Art', 'Solo', 'Budget', 'Taman Budaya Yogyakarta', 'Taman Budaya Yogyakarta menjadi tempat dilangsungkan aneka kegiatan seni budaya (teater, musik, tari, pameran), hingga bimbingan dan pelatihan seni untuk anak dan remaja. Selain memiliki gedung pertunjukan, gedung pameran dan amphiteater sehingga tempat i', 'img/rekomendasi/tamanbudaya.jpg', 3, 1, 5, 1, 5, 1, 1, 2, 5, 1, 1, 736),
(40, 'Yogyakarta', 'Tropical', 'Couple', 'Budget', 'Pantai Parangtritis', 'Pantai Parangtritis merupakan salah satu pantai yang terkenal di daerah Bantul.Dari sana kita bisa menikmati seluruh area Pantai Parangtritis, laut selatan, hingga ke batas cakrawala khas tropis. Tempat ini cocok dikunjungi bersama keluarga, teman-teman s', 'img/rekomendasi/pantai.jpg', 3, 5, 1, 1, 2, 3, 5, 4, 5, 1, 1, 886),
(41, 'Yogyakarta', 'Tropical', 'Family', 'Budget', 'Pantai Parangtritis', 'Pantai Parangtritis merupakan salah satu pantai yang terkenal di daerah Bantul.Dari sana kita bisa menikmati seluruh area Pantai Parangtritis, laut selatan, hingga ke batas cakrawala khas tropis. Tempat ini cocok dikunjungi bersama keluarga, teman-teman s', 'img/rekomendasi/pantai.jpg', 3, 5, 1, 1, 2, 3, 5, 4, 5, 1, 1, 886),
(42, 'Yogyakarta', 'Tropical', 'Group', 'Budget', 'Pantai Parangtritis', 'Pantai Parangtritis merupakan salah satu pantai yang terkenal di daerah Bantul.Dari sana kita bisa menikmati seluruh area Pantai Parangtritis, laut selatan, hingga ke batas cakrawala khas tropis. Tempat ini cocok dikunjungi bersama keluarga, teman-teman s', 'img/rekomendasi/pantai.jpg', 3, 5, 1, 1, 2, 3, 5, 4, 5, 1, 1, 886),
(43, 'Yogyakarta', 'Historical', 'Family', 'Budget', 'Malioboro', 'Jalan Malioboro adalah nama salah satu kawasan jalan dari tiga jalan di Kota Yogyakarta yang membentang dari Tugu Yogyakarta hingga ke perempatan Kantor Pos Yogyakarta. Kawasan ini kental akan suasana keistimewaan jogja, salah satunya pasar yang menjual berbagai macam barang-barang khas kebudayaan jogja seperti blangkon, batik dan lain-lain. Dengan budget yang pas-pasan, anda bisa mendapatkan berbagai macam souvenir yang tergolong unik dan murah Selain itu disini juga memiliki banyak tempat yang menyajikan makanan-makanan khas seperti gudeg sehingga sangat cocok untuk wisata berkelompok ataupun bersama keluarga tercinta.', 'img/rekomendasi/malioboro.jpg', 1, 1, 4, 2, 2, 3, 4, 5, 5, 2, 1, 791);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb`
--
ALTER TABLE `tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb`
--
ALTER TABLE `tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
