-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2020 at 07:56 AM
-- Server version: 8.0.18
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dapur_sehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Abon', 'Abon Salmon by Nafisa', 'Food', 20000, 8, 'abonsalmonnafisa.jpg'),
(2, 'Bebe Roll ', 'Bebe Roll Rasa Keju by Yummy Bites', 'Snack', 15000, 17, 'bb_keju.jpg'),
(3, 'Bebe Roll', 'Bebe Roll Rasa Strawberry by Yummy Bites', 'Snack', 15000, 20, 'bb_strawberry.jpg'),
(4, 'Bebe Roll', 'Bebe Roll Rasa Blueberry by Yummy BItes', 'Snack', 15000, 20, 'bb_blueberry.jpg'),
(5, 'Abon', 'Abon Ayam Kampung by Nafisa ', 'Food', 20000, 10, 'IMG-20200215-WA0022.jpg'),
(7, 'Sendok Garpu Sumpit Jerami ', 'Terbuat dari bahan plastik berkualitas (jerami gandum)-Warna yang tersedia : Pink,Biru,Hijau', 'Kitchen', 15000, 30, 'sendok.png'),
(8, 'Sendok Takar 1 Set ', 'Sendok ukur Set Cantik-1 pcs 1 ml / gr,2.5 ml / gr,5 ml / gr, 7.5 ml / gr,15 ml / gr', 'Kitchen', 10000, 20, 'sendokset.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id_blog` int(11) NOT NULL,
  `nama_blog` varchar(120) NOT NULL,
  `keterangan_blog` text NOT NULL,
  `kategori_blog` varchar(20) NOT NULL,
  `gambar_blog` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`id_blog`, `nama_blog`, `keterangan_blog`, `kategori_blog`, `gambar_blog`) VALUES
(3, 'Si Kecil Menangis?', 'Meski pengawasan kita ke si kecil sangat ketat, tapi pasti pernah deh kita \'kecolongan\', seperti saat nggak sengaja si kecil jatuh dari tempat tidur. . Kalau ini kejadian perrtama, kita pasti langsung panik. Tenang dulu yaa, coba yuk cek langkah yang harus kita lakukan saat ia jatuh dan terbentur di artikel Ibupedia yang linknya on bio atau langsung ke bit.ly/anakterbentur. . Jika sudah tenang, Buibu bisa langsung membawa si kecil ke dokter untuk memastikan keadaan si kecil. . Ada nggak yang anaknya juga pernah jatuh dan terbentur di kepala?', 'Info', 'nangis.png\r\n'),
(4, 'Tali Pusar Si Kecil Infeksi?', 'Menjaga kebersihan tali pusat selama belum puput itu penting banget. . kalau kebersihannya kurang terjaga, risiko infeksi akan semakin besar. Kalau sudah ada tanda infeksi, langsung dibawa ke dokter anak ya Buibu.. . Simak tips untuk merawat tali pusat di artikel Ibupedia yang linknya on bio atau langsung ke bit.ly/merawattalipusat. . Ada yang anaknya pernah mengalami infeksi pada tali pusatnya? Sharing pengalamannya yuk di sini..', 'Info', 'talipusar1.png'),
(5, 'Hentikan Kebiasaan Buruk Mengemut Jari', 'Moms, pernahkah Anda mengalami Si Kecil makannya lama sekali? Ternyata ia tidak mengunyah makanan yang masuk ke dalam mulutnya, melainkan hanya diemut.  Ya, tak sedikit ibu yang dipusingkan dengan kebiasaan anaknya yang suka mengemut makanan. Jika tidak segera disiasati, Si Kecil bisa kekurangan asupan gizi penting yang dibutuhkan dalam pertumbuhannya. Bagaimana tidak, hal ini membuat jam makan menjadi lama dan porsi makannya jadi sedikit. . . Ditambah lagi, mengemut makanan akan memberi kesempatan bakteri berkembang di mulut Si Kecil. Bakteri tersebut dapat berfermentasi dan menghasilkan asam yang dapat merusak gigi. Nah, bagaimana cara mengatasi kebiasaan buruk Si Kecil ini? Simak tips dari M&B ya, Moms!', 'Info', 'mengemut1.png'),
(6, 'Kenali Tangisan Si Kecil', 'Sebagai bahasa pertama yang si Kecil kuasai, tangisan memang mengandung banyak arti. Nah, kalo hubungannya sama rasa lapar, begini tandanya. Yang sekarang jadi waswas mandi atau pergi sebentar karena khawatir si Kecil nangis kejer, absen, yuk di sini. ', 'Info', 'tangisan1.png'),
(7, 'Panduan MPASI Si Kecil', 'yiapin menu MPASI pertama bayi tuh rasanya campur-campur! Ya deg-degan, ya senang, ya excited. Ada juga sih rasa khawatirnya, takut tekstur atau porsinya nggak sesuai. Supaya nggak bingung-bingung lagi, yuk simpan dan resapi panduan ini, Bun! ', 'Info', 'panduan1.png'),
(8, 'Nasgor Salor', 'Resep d bawah bisa jd 2 porsi ya moms\r\nNasgor Salor ( salmon Telor )\r\nBahan bahan :\r\n8 sdm nasi\r\n1/2 bonggol jagung manis,pipil\r\n1/2 buah wortel parut\r\n2 buncis iris tipis\r\n50gr salmon cincang\r\n1btr telur\r\nKecap\r\nGaram\r\nMinyak\r\n2siung baput cincang halus\r\nKaldu jamur sckupnya\r\n.\r\nCara membuat :\r\n1. Cuci bersih semua bahan\r\n2. Rebus jagung,wortel,buncis sampe matang\r\n3. Tumis baput dengan minyak sampi harum,masukan salmon dan telur,prak arik sampe salmon mateng. .\r\n4. Masukan nasi putih lalu aduk dan bumbui sampe merata. .\r\n.\r\nSajikan dengan penuh kasih sayang,jangan lupa berdoa sebelum dan sesudah makan', 'Resep', 'nasgor1.png'),
(9, 'Pancake Selai', 'PANCAKE PISANG SELAI BUAH NAGA Bahan:2 buah pisang (saya pkai pisang kepok)haluskan,1 butir telur,7 sdm tepung terigu,60 ml susu UHT. campurkan pisang yg sudah di haluskan dengan tepung terigu aduk rata lalu masukkan telur aduk lagi smpai semua tercampur rata. Masukkan susu UHT (untuk mengatur kekentalan) jngan terlalu encer dan jngan terlalu kenta.Panaskan teflon lalu masukkan adonan sebanyak 1 sendok sayur uk kecil....Ulangi smpai adonan habis.Bahan selai.1/4 buah naga(bleder lalu saring).1 1/2 sdt tepung maizena (cairkan dengan sedikit air).Sedikit yougurt plain untuk topping.masukkan buah naga ke dlm panci lalu tunggu smpai mendidih kemudian tambhkan tepung maizena aduk2 smpai mengental...sajikan di atas pancake... Jngan lupa sblm maem berdoa.', 'Resep', 'pancake1.png'),
(10, 'Apa MPASI Pertama Untuk Si Kecil', 'Dari pertama kali si kecil MPASI, Buibu bisa memberikan empat kelompok makanan ini yaa..Tinggal disesuaikan saja teksturnya, misalnya untuk anak usia 6 bulan, teksturnya bisa berupa bubur halus, sedangkan untuk anak usia 8 bulan bisa dalam bentuk nasi tim. Bahan makanannya pun bisa disesuaikan dengan kondisi si kecil. Kalau anaknya sudah di diagnosa alergi ikan laut, produk susu, atau makanan lainnya, tentu bisa dieliminasi dan dicari alternatifnya sesuai dengan anjuran dokter', 'Info', 'jenis.png'),
(11, 'Dimsum Ayam', 'Ini cemilan sekalian buat mami papinya ya di musim hujan tinggal cocol sm saos sambal duh enak banget. Dimsum Udang Ayam Bahan bahan 500 g daging ayam,aku pake bagian dada dan paha, 200 g udang kupas, Secukupnya kulit pangsit, 1/2 buah wortel serut, 2 butir telur kocok, 4 sdm maizena, 1 tangkai daun bawang iris halus, 1 1/2 sdt bawang putih bubuk, 1 sdm saus tiram, 1 sdt merica bubuk,Secukupnya gula pasir,Secukupnya garam. Cara membuat :1. Cuci Bersih semua bahan. 2. Cincang ayam dan udang,sy cincang pake chopper ( sisakan sedikitnudang untuk topingnya ). 3. Campur di wadah ayam,daun bawang,wortel dan bumbu lainnya aduk rata,tuang kocokan telur,aduk rata,masukan maizena aduk rata,koreksi rasanya. 4. Ambil 1 lembar kulit dimsum,isi dgn 1 sdm adonan,rekatkan sampingnya,lakukan hingga adonan hbs lalu beri toping 1 buah udang,bisa juga di kasih wortel parut,tabur dengan sedkit parsley kering,lalu kukus hingga matang.', 'Resep', 'dimsum.png'),
(12, 'Sosis Kriwil', 'Hayoo siapa ni anaknya yg suka sm sosis,hehe Apalagi kalau d gulung sm mie gitu,pasti anak2 suka banget. Sosis Kriwul Bahan:5 buah sosis sapi(me merk Bernardi),2 bungkus Mie dari Promina (di ganti yg lain boleh),1sdm kecap,Minyak goreng. Cara membuat :1. Bagi sosis jd 2 bagian, di tiap ujung di belah,biar kalau d goreng mekar kayak bunga. 2. Rebus mie,tiriskan. .lalu campur dengan bumbu, tambahkan sedikit kecap. 3. Gulung mie di tengah sosis,lakukan sampai sosis habis. 4. Panaskan minyak lalu goreng,jangan d bolak balik biar mie nya ga ambyar', 'Resep', 'sosis.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(5, 'Kinanti', 'Jl. Kutilang', '2020-04-17 20:25:14', '2020-04-18 20:25:14'),
(6, 'Kinan', 'Jl 1', '2020-04-18 18:57:02', '2020-04-19 18:57:02'),
(7, 'Darin', 'Taman Bahagia No 21', '2020-04-18 19:48:06', '2020-04-19 19:48:06'),
(8, 'Damila', 'Bahagia Selalu no 12', '2020-04-18 19:51:58', '2020-04-19 19:51:58'),
(9, 'violet', 'Bandung no 56', '2020-04-18 19:53:26', '2020-04-19 19:53:26'),
(10, 'Kinan Darin Millan', 'jalan soekarno hatta no 10', '2020-04-19 09:48:05', '2020-04-20 09:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(4, 5, 1, 'Abon', 1, 20000, ''),
(5, 5, 2, 'Bebe Roll ', 1, 15000, ''),
(6, 6, 3, 'Bebe Roll', 1, 15000, ''),
(7, 7, 3, 'Bebe Roll', 1, 15000, ''),
(8, 8, 1, 'Abon', 1, 20000, ''),
(9, 9, 2, 'Bebe Roll ', 1, 15000, ''),
(10, 10, 1, 'Abon', 1, 20000, ''),
(11, 10, 2, 'Bebe Roll ', 2, 15000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(5, 'Kinanti', 'kinanpermata', 'kinan', 2),
(6, 'user', 'user', 'user', 2),
(7, 'Budi', 'budiman', '123', 2),
(8, 'kinan darin millan', 'karinlan', 'karinlan', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
