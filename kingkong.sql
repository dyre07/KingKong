-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 05:18 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kingkong`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_jb` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `merk` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `deskripsi` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `harga_akhir` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_jb`, `id_karyawan`, `merk`, `stock`, `harga`, `diskon`, `deskripsi`, `gambar`, `harga_akhir`) VALUES
(13, 4, 2, 'Dog Chow', 32, 275000, 20, 'Healthy Choice for Your Lovely Puppies', 'product_1489553034.jpg', 220000),
(16, 4, 2, 'Canidae', 292, 170000, 0, 'Healthy Choice for Your Lovely Puppies', 'product_1489553723.jpg', 170000),
(12, 4, 2, 'Milo\'s Kitchen', 126, 780000, 35, 'Healthy Choice for Your Lovely Puppies', 'product_1489552881.jpg', 507000),
(14, 4, 2, 'Kibbles \'n Bits', 25, 520000, 20, 'Healthy Choice for Your Lovely Puppies', 'product_1489553217.jpg', 416000),
(15, 4, 2, 'Ol\'Roy', 23, 12000, 20, 'Healthy Choice for Your Lovely Puppies', 'product_1489553445.jpg', 9600),
(55, 4, 2, 'Happy Dog NaturCroq - Puppies -4 kg', 38, 240000, 0, 'Makanan lengkap super premium yang seimbang dan sangat mudah dicerna NaturCroq Puppies dikembangkan secara khusus untuk kebutuhan gizi khusus anak anjing berusia antara 4 minggu sampai 6 bulan. Nutrisi protein hewani, gandum utuh yang diubah menjadi gelatin/agar-agar, ditambah semua vitamin, mineral dan Unsur kelumit penting, menghasilkan kondisi sempurna bagi pertumbuhan kesehatan anjing Anda. Mulai usia 6 bulan, direkomendasikan pengalihan pakan ke Happy Dog Supreme protein-reduced Junior concept, untuk pemberian pakan optimal setelah anjing Anda memiliki semua gigi dewasa-nya. NaturCroq Puppies: Makanan premium lengkap yang seimbang dengan semua nutrisi penting. Tidak ada pewarna, pengawet atau soya. Kualitas baik,dan mudah dicerna.', 'product_1491836077.jpg', 240000),
(26, 5, 1, 'Royal Canin Hair & Skin 2KG', 17, 230000, 10, 'Royal Canin Hair & Skin 33 adalah produk makanan kering untuk kucing dewasa yang berguna menjaga dan mengembalikan kondisi bulu kucing sehabis sakit atau terkena jamur. Royal Canin Hair & Skin 33 diformulasikan khusus untuk kesehatan dan keindahan kulit dan bulu kucing usia 1 tahun ke-atas. Bulu akan terlihat signifikan mengkilap setelah 21 hari eksklusif mengkonsumsi Royal Canin Hair & Skin 33.', 'product_1491540691.jpg', 207000),
(28, 5, 1, 'Royal Canin Baby Cat 4 KG', 35, 359000, 15, 'Royal Canin Baby Cat 34 adalah makanan untuk anak kucing dalam fase pertumbuhan pertama (sampai 4 bulan), Mousse krim untuk transisi mudah dari susu ke makanan padat. Royal Canin mempertahankan bahwa diet kucing harus memperhitungkan semua parameter kehidupan seperti usia, ras, gaya hidup, dan keadaan individual', 'product_1491541188.jpg', 305150),
(29, 5, 2, 'Happy Cat La Cuisine - Sea Fish - 1.4 kg', 39, 180000, 0, 'Happy Cat La Cuisine Sea Fish (with Poultry and Potatoes) adalah kegemaran gourmet bebas gandum yang terbuat dari bahan baku eksklusif. Kandungan ikan air asin terbaik, daging unggas yang sangat mudah dicerna dan buah ara yang dengan lembut memanjakan kucing Anda – dan tentu saja gluten-free. Formulasi khusus dan bahan-bahan bermanfaat dari Happy Cat Natural Life Concept® membuat resep ini sangat cocok bagi hewan peliharaan aktif yang sensitif terhadap makanan tertentu. Dikarenakan kandungannya dengan jumlah ideal kalsium, natrium, fosfor dan taurin, Happy Cat La Cuisine Sea Fish (with Poultry and Potatoes) dengan daging unggas, dapat memberikan pondasi terbaik bagi kelangsungan hidup kucing – untuk semua jenis kucing, termasuk keturunan dan ras berbulu panjang', 'product_1491541327.jpg', 180000),
(61, 8, 2, 'Sumo Cat Litter Lavender- 10liter', 40, 80000, 10, 'Sumo Cat cat litter merupakan pasir kucing kualitas premium yang memiliki penyerapan tinggi dan aman untuk digunakan karena tidak mengandung bahan kimia tambahan. Kecepatan penyerapan yang cepat sehingga membentuk gumpalan dan mencegah lapisan bawah tidak basah. Hal ini ekonomis karena gumpalan terbentuk pada lapisan permukaan sehingga dapat dengan mudah diangkat pergi, meninggalkan cat litter (pasir) tetap segar dan bisa digunakan kembali. Pasir Sumo Cat juga memiliki kemampuan untuk menghilangkan bau yang buruk, meninggalkan area sekitarnya tetap segar dengan berbagai aroma Apel.Lemon, Peach, Strawberry, Lavender, Green Tea dan Orange.Piihan aroma sesuai ketersediaan stok.', 'product_1491973549.jpg', 72000),
(31, 4, 1, 'Royal Canin Mini  Mature +8  2 Kg', 50, 200000, 10, 'Makanan lengkap untuk anjing senior ukuran kecil (berat badan hingga 10 kg). Usia lebih dari 8 tahun  Kandungan nutrisi dari formula ini membantu menjaga vitalitas dari ras anjing kecil yang menghadapi tanda-tanda awal penuaan. Mengandung kompleks antioksidan yang dipatenka', 'product_1491541603.jpg', 180000),
(32, 5, 2, 'Equilibrio  Adult Cat  Persian Cat', 35, 550000, 20, 'Equilibrio merupakan makanan hewan yang diolah dari bahan-bahan kualitas terbaik. Dengan kualitas super premium, Equilibrio menjadi makanan hewan dengan pertimbangan kesempurnaan nutrisi seimbang yang dibutuhkan oleh hewan. Equilibrio telah teruji menjadi makanan anjing dan kucing dengan kandungan nutrisi dan gizi yang baik oleh para dokter hewan.', 'product_1491541760.png', 440000),
(33, 5, 2, 'M&C Healthy Bites  Breath & Dental  65g', 45, 35000, 0, 'M&C Healthy Bites - Breath & Dental - 65g merupakan cemilan sehat yang terbuat dari bahan pilihan yang menjadikannya makanan yang baik untuk kesehatan gigi kucing. Perpaduan daging ayam akan disukai kucing dimanapun! Bahan alami dan segar menjadikannya cemilan sehat dan bergizi. Sangat baik untuk kucing.', 'product_1491541871.jpg', 35000),
(34, 5, 2, 'Max Cat Mix Selection  Makanan Kucing  1 kg', 30, 70000, 10, 'Max Cat Mix Selection merupakan makanan yang lengkap untuk kucing dewasa. Kucing adalah makhluk yang sangat selektif dalam memilih makanan, oleh karena itu, Max Cat Mix Selection hadir untuk memenuhi pilihan selera makanan kucing Anda.', 'product_1491542013.png', 63000),
(35, 5, 1, 'Royal Canin Pediatric Growth 2 kg  Makanan Kucing', 45, 250000, 0, 'Royal Canin Pediatric Growth adalah makanan kucing dengan nutrisi yang seimbang untuk anak kucing usia 4 bulan hingga 12 bulan. Makanan ini dirancang khusus untuk mendorong pencernaan yang sehat, mudah dicerna dan mengandung antioksidan kompleks yang dipantenkan untuk merangsang produksi antibodi pada kucing.', 'product_1491542111.png', 250000),
(36, 7, 2, 'Cat Amusing Stick', 34, 35000, 0, 'Mainan Cat Amusing Stick merupakan mainan tongkat dan tali khusus untuk hewan yang dapat diayunkan. Bentuknya unik dan lucu, terdiri dari tongkat dan tali sehingga hewan peliharaan Anda akan bersemangat untuk memainkannya.', 'product_1491640406.jpg', 35000),
(37, 7, 2, 'Amy Carol Cat Teaser', 23, 35000, 5, 'Amy Carol Cat Teaser merupakan mainan kucing untuk menghilangkan stres yang sempurna untuk kucing Anda. Dengan bentuk yang unik dan lucu, maka kucing Anda pasti tidak tahan lagi kalau tidak menggaruknya. Kucing Anda akan merasa senang ketika mendapatkannya', 'product_1491640491.jpg', 33250),
(38, 7, 2, 'Cat Scratch Fish', 40, 45000, 0, 'Cat Scratch Fish Garukan Kucing 11 cm x 26 cm merupakan garukan kucing yang berfungsi untuk mengajak hewan peliharan anda bergerak aktif, tidak bosan, stress. Garukan kucing ini juga memiliki desain yang unik berbentuk ikan dengan gradasi warna yang cerah sehingga memungkinkan kucing untuk bermain dan senang.', 'product_1491640565.gif', 45000),
(75, 4, 2, 'bodrek', 30, 200000, 0, 'baik', 'product_1492047539.jpg', 200000),
(76, 4, 2, 'widya', 28, 300000, 20, 'CANTIK', 'product_1492047862.jpg', 240000),
(46, 6, 1, 'Octagon Smaller Dog Mask 102', 40, 40000, 0, 'Anjing yang aktif biasanya senang menggigit. Pertumbuhan gigi ini yang biasa membuat mereka menjadi gatal pada bagian mulut, dan menjadi sangat terganggu. Selain itu, di usia anjing pada masa ingin kawin, anjing juga biasanya agresif dan suka menggigit karena merasa gelisah. Untuk itu, diperlukan penutup mulut khusus untuk anjing, agar ia tidak menggigit sembarangan.', 'product_1491641265.jpg', 40000),
(47, 6, 1, 'Pet Feeder', 45, 150000, 10, 'Pet Feeder merupakan tempat minum sekaligus tempat makanan hewan peliharaan Anda. Pet Feeder di desain dengan bentuk yang unik serta dalam tiga varian warna cantik yang bisa Anda pilih. Selain itu Pet Feeder juga memiliki kapasitas yang cukup banyak, sangat cocok untuk Anda yang sehari-hari bekerja sehingga hewan peliharaan Anda tidak akan kehausan dan kelaparan ketika Anda tinggalkan.', 'product_1491641417.jpg', 135000),
(48, 6, 1, 'Leather Muzzle L', 45, 100000, 20, 'Leather Muzzle merupakan penutup mulut anjing yang berbahan kulit yang  fleksibel. Leather Muzzle memiliki tali seperti gesper.', 'product_1491641475.gif', 80000),
(49, 6, 1, 'Anti Ant Moat Bowl', 50, 150000, 25, 'Tempat makan ini didesign unik agar makanan bebas dari semut. Terdapat bagian cekungan diluar mangkuk yang dapat di isi dengan air sehingga semut tidak bisa mendekat. Mangkuk ini juga dapat berfungsi sebagai tempat minum.', 'product_1491641688.jpg', 112500),
(50, 6, 1, 'Lice Repellent Collar 33cm', 45, 68000, 0, 'Mencegah Kutu secara efektif , Aroma dan perlindungan terhadap kutu tahan lama/awet dan Didesign anti air', 'product_1491641900.jpg', 68000),
(51, 6, 1, 'Bed Animal Karakter 02A Biru', 50, 35000, 0, 'Kasur kasur untuk hewan kesayangan anda .anjing,kucing,kelinci, dll. design menarik. bahan berkualitas', 'product_1491641957.jpg', 35000),
(52, 6, 1, 'FootBall Star For Treasure Up Germany - Miniatur Doggy', 40, 90000, 10, 'FootBall Star For Treasure Up Germany koleksi wajib bagi Anda yang maniak bola dan pecinta doggy. Miniatur doggy ini di desain menarik dengan menggunakan kostum bola asal negara Germany. Miniatur doggy ini cocok untuk di jadikan koleksi atau pajangan di kendaraan pribadi Anda karena di lengkapi dengan \'per\' di bagian kepalanya sehingga kepala doggy dapat bergoyang goyang ketika kendaraan melaju.', 'product_1491642014.jpg', 81000),
(53, 6, 1, 'Panganggon Pet Collar Simply', 50, 250000, 10, 'Pet collar memiliki fungsi sebagai penanda identitas agar sang pemilik bisa mengenali hewan peliharaannya. Anjing dan kucing yang memakai kalung akan terlihat lebih rapi, elegan atau sporty tergantung bentuk kalung itu sendiri. Kalung yang baik tidak membuat anjing dan kucing yang memakainya terganggu saat beraktifitas.', 'product_1491642082.jpg', 225000),
(54, 6, 1, 'Wetnoz 23900 Arc Diner for Pets - Medium - Hibiscus', 45, 490000, 10, 'Wetnoz Arc Diner merupakan tempat makan hewan berupa mangkuk stainless steel yang dapat di bongkar pasang yang berada di dalam stand melamin dengan warna yang cerah dan mengkilap. Mangkuk khusus untuk hewan peliharaan ini tidak mudah bergeser dan anti slip.', 'product_1491642156.jpg', 441000),
(56, 4, 2, 'Happy Dog Supreme Senior - 1 kg', 50, 110000, 10, 'Diet untuk anak anjing yang disusun secara optimal merupakan dasar terbaik untuk perkembangan yang sehat! Supreme Senior mengandung daging unggas kualitas tinggi, salmon dan nutrisi kerang dari Selandia Baru dalam resep dengan nilai protein 29% yang sebagaimana direkomendasikan oleh Dokter hewan. Pemberian pakan sesuai tahapan pertumbuhan pada anjing senior yang sensitif dari semua ras .', 'product_1491836157.jpg', 99000),
(57, 4, 2, 'Happy Dog Supreme Young – Maxi Junior - 15 kg', 20, 900000, 10, 'Pertumbuhan yang terlalu cepat merupakan masalah yang sering ditemukan pada anjing muda ras besar. Resep Supreme Young – Maxi Junior, yang direkomendasikan Dokter hewan, dengan kandungan energi rendah dan protein 25% memastikan anjing tersebut tidak menerima nutrisi berlebih dalam tahap pertumbuhannya. Supreme Young – Maxi Junior mengandung daging unggas berkualitas tinggi, salmon dan nutrisi kerang dari Selandia Baru. Oleh karena itu, Supreme Young – Maxi Junior sangat ideal untuk terbebas dari masalah di atas dan pemberian pakan diberikan sesuai tahapan pada anjing muda ras besar yang sensitif sejak berusia 6 bulan. Kemudian setelah berusia sekitar 18 bulan, dapat dialihkan ke produk Happy Dog Supreme Adult yang sesuai. Variasi makanan lengkap dan seimbang bagi anjing muda dengan keunikan Happy Dog Natural Life Concept® dapat mencegah tanda-tanda defisiensi. Dianjurkan diet sesuai jenis dan kebutuhan… Bersifat alami sebagaimana diinginkan!', 'product_1491836299.jpg', 810000),
(58, 4, 2, 'Happy Dog Supreme Mini – Adult Africa (with Ostrich and Potato) - 4 kg', 25, 450000, 0, 'Makanan lengkap super premium yang luar biasa lezat Supreme Mini – Mini Adult Africa (with Ostrich and Potato) sangat ideal untuk semua kebutuhan anjing kecil yang mencari sesuatu yang spesial atau agak pemilih makanan. Supreme Mini – Mini Adult Africa (with Ostrich and Potato) juga sangat cocok untuk makanan anjing ras kecil sensitif dengan kebutuhan khusus mereka: Supreme Mini – Mini Adult Africa (with Ostrich and Potato) menggabungkan daging burung unta dan kentang untuk membuat resep yang unik. Daging burung unta merupakan sumber protein yang sangat langka, sehingga ideal untuk anjing yang alergi makanan. Kentang tidak mengandung gluten apapun dan direkomendasikan untuk hewan yang alergi gandum. Nutrisi asam lemak omega-3 dan omega-6-penting bagi kesehatan kulit dan bulu yang mengkilat tersaji dalam resep eksklusif ini. Kroket (kepingan makanan) yang ekstra kecil disesuaikan sempurna dengan gigi ras kecil.', 'product_1491836402.jpg', 450000),
(59, 4, 2, 'Happy Dog NaturCroq - Puppies - 15 kg', 12, 620000, 15, 'Makanan lengkap super premium yang seimbang dan sangat mudah dicerna NaturCroq Puppies dikembangkan secara khusus untuk kebutuhan gizi khusus anak anjing berusia antara 4 minggu sampai 6 bulan. Nutrisi protein hewani, gandum utuh yang diubah menjadi gelatin/agar-agar, ditambah semua vitamin, mineral dan Unsur kelumit penting, menghasilkan kondisi sempurna bagi pertumbuhan kesehatan anjing Anda. Mulai usia 6 bulan, direkomendasikan pengalihan pakan ke Happy Dog Supreme protein-reduced Junior concept, untuk pemberian pakan optimal setelah anjing Anda memiliki semua gigi dewasa-nya. NaturCroq Puppies: Makanan premium lengkap yang seimbang dengan semua nutrisi penting. Tidak ada pewarna, pengawet atau soya. Kualitas baik,dan mudah dicerna..', 'product_1491836475.jpg', 527000),
(60, 4, 1, 'Brit Care - Puppy Lamb & Rice 3 Kg makanan anjing kecil', 13, 250000, 0, 'Super Premium Dog Food from Brit Care. Makanan Anjing berkualitas.  HYPOALLERGENIC Formula for Puppies & Junior Dogs of All Breeds  (4 Weeks 12 Months)  Why lamb? DIGESTIBILITY AND USABILITY WITH NO ALLERGIES. FORMULA CONTAINS NO CHICKEN OR OTHER UNDESIRABLE PROTEINS .  Lamb is very digestible and contains high levels of PUFAs (polyunsaturated fatty acids with excellent usability). The complete profile of amino acids has been optimized to nourish the muscles and tissue and maintain perfect condition.', 'product_1491836805.png', 250000),
(62, 8, 2, 'Advance Bentoinite Cat Litter 4,5 kg', 40, 55000, 0, 'Advance Bentoinite Cat Litter 4,5 kg merupakan pasir bentonite hingga kini selalu menjadi pasir kesukaan pemilik kucing. Pasir bentonite selalu memiliki keunggulan menggumpal pada lokasi yang terkena air ini merupakan pasir yang sangat membantu para pemilik kucing. Pasir jenis bentonite ini juga memiliki aroma yng baik yang dapat mengurangi aroma tidak sedap pada kotoran kucing. Advance Octagon Bentonite Cat Litter dengan kemasan 4,5 kg. Ini dia pasir bentonite yang ekonomis dengan harga yang ekonomis. Hebatnya pasir ini wangi dan segar, sehingga membuat anda tidak repot dan takut kebauan dalam memberikan pasir untuk kucing kamu .  nah pasir ini beraroma Apple, Lavender dan Lemon, aroma yang pastinya akan disenangi oleh kucing kamu.', 'product_1491973610.gif', 55000),
(63, 8, 2, 'Sumo Cat Litter Lemon Fresh - 10liter', 40, 80000, 10, 'Sumo Cat cat litter merupakan pasir kucing kualitas premium yang memiliki penyerapan tinggi dan aman untuk digunakan karena tidak mengandung bahan kimia tambahan. Kecepatan penyerapan yang cepat sehingga membentuk gumpalan dan mencegah lapisan bawah tidak basah. Hal ini ekonomis karena gumpalan terbentuk pada lapisan permukaan sehingga dapat dengan mudah diangkat pergi, meninggalkan cat litter (pasir) tetap segar dan bisa digunakan kembali. Pasir Sumo Cat juga memiliki kemampuan untuk menghilangkan bau yang buruk, meninggalkan area sekitarnya tetap segar dengan berbagai aroma Apel.Lemon, Peach, Strawberry, Lavender, Green Tea dan Orange.Piihan aroma sesuai ketersediaan stok.', 'product_1491973669.jpg', 72000),
(64, 8, 2, 'Sumo Cat Litter Jasmine - 10liter', 40, 80000, 10, 'Sumo Cat cat litter merupakan pasir kucing kualitas premium yang memiliki penyerapan tinggi dan aman untuk digunakan karena tidak mengandung bahan kimia tambahan. Kecepatan penyerapan yang cepat sehingga membentuk gumpalan dan mencegah lapisan bawah tidak basah. Hal ini ekonomis karena gumpalan terbentuk pada lapisan permukaan sehingga dapat dengan mudah diangkat pergi, meninggalkan cat litter (pasir) tetap segar dan bisa digunakan kembali. Pasir Sumo Cat juga memiliki kemampuan untuk menghilangkan bau yang buruk, meninggalkan area sekitarnya tetap segar dengan berbagai aroma Apel.Lemon, Peach, Strawberry, Lavender, Green Tea dan Orange.Piihan aroma sesuai ketersediaan stok.', 'product_1491973723.jpg', 72000),
(65, 9, 1, 'Paws Lite Bottle Dog Toy', 25, 100000, 20, 'Introducing Paws Lite, a Beer PrideBite dog toy every dog will love. Paws Lite can be sipped inside and outside, and if your dog drops it in the pool don\'t worry, this dog toy can float. Although it won\'t give your dog the hiccups, it will give them the squeaks. If you want to tidy up the bottle, cleaning it\'s a breeze. Paws Lite is machine washable.', 'product_1491973858.jpg', 80000),
(66, 9, 1, 'Steak Dog Toy', 25, 10000, 20, 'We have created a dog toy for both dog and man alike. Look at our beautiful piece of Steak PrideBite dog toy. This steak tastes great inside and outside. It will squeak when it\'s on the grill, and it will float if it falls in the pool. It\'s a perfectly uncooked toy. When you need to clean up the meat just throw it in with the laundry, this toy is machine washable.', 'product_1491973909.jpg', 8000),
(67, 9, 1, 'Pizza Dog Toy', 25, 10000, 20, 'EVERYONE loves pizza, especially members of the canine family. Now you can give your dog a piece of PrideBite Pizza without cleaning up the inevitable mess. Our Pizza toy squeaks and floats, and you don\'t even have to worry about the crust getting soggy. The best part is \"The Five Second\" food rule doesn\'t apply here! When your pizza gets dirty just throw it in with the laundry, because our pizza is machine washable.', 'product_1491974031.jpg', 8000),
(68, 9, 1, 'Tooth Grinding Bone', 30, 25000, 0, 'Toys > Chew Toys', 'product_1491974088.jpg', 25000),
(69, 9, 1, 'WETNOZ QUAX DOG TOY ', 30, 150000, 15, 'Perfect for fetchers and chewers, the colourful Wetnoz toys will entertain pups for hours. These durable toys are all made of smooth-to-touch, odor-free silicone and are dishwasher safe. 140mm long approx', 'product_1491974189.jpg', 127500),
(70, 9, 1, 'Ultimate Jackpot toy', 30, 112000, 5, 'The Ultimate Jackpot toy is a combination treat toy and tug toy. The tug toy part in made with strong fleece assembled in a continuous braid that provides handles on each side and an extra sturdy biting area across the pouch.', 'product_1491974240.jpg', 106400),
(71, 9, 1, 'Wonder Stick', 30, 70000, 5, 'All Wonder Sticks and Wonder Bars are now stuffed with 100% Sheepskin scraps!  The Standard Wonder Stick is a dog tug toy that you and your dog will love! It has a smooth nylon webbing exterior, real sheepskin stuffing, and a nylon handle. Scent stimulated dogs will love the smell of the fur, and bite stimulated dogs will really enjoy sinking their teeth into the bar.  You\'ll love the comfort and control of the soft nylon handle. At about 10\" x 2\", with an 8\" handle, this dog tug toy is a great size for just about any dog.', 'product_1491974307.jpg', 66500),
(72, 9, 1, 'Logo Ball Toy with Tennis Ball', 30, 85000, 5, 'The Logo Ball Toy is a tennis ball toy like no other. It has a standard size tennis ball for those ball crazy larger breeds, a braided bite zone for bite stimulated dogs, and a great fringy tassel for visually stimulated dogs. It\'s also got a handle for you. This tennis ball toy is made with strong nylon webbing printed with our great Genuine Dog Gear logo. All of our dog toys are 100% made in the USA and guaranteed against any workmanship or material defects.', 'product_1491974375.jpg', 80750),
(73, 9, 1, 'Two Handled Tiger Tug', 30, 80000, 5, 'The Two-Handled Tiger Tug is a tug toy made from plush faux fur and strong nylon webbing. The nylon webbing forms the two handles and runs all the way through the toy to give it extra strength. The two handles will give you more control over the tug toy than our one-handled version. This toy is soft on your hands and your dog\'s teeth. This tug toy is machine washable and very durable. All of our dog toys are 100% made in America and guaranteed to be free of any workmanship or material defects.', 'product_1491974433.jpg', 76000);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `no_pesan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_barang`, `id_user`, `quantity`, `total`, `status`, `no_pesan`) VALUES
(24, 15, 6, 2, 19200, 'order', 1492003552),
(25, 55, 6, 2, 480000, 'order', 1492003552),
(26, 16, 6, 2, 340000, 'order', 1492003612),
(27, 76, 8, NULL, NULL, 'wishlist', NULL),
(29, 76, 8, 2, 480000, 'order', 1492048326);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `id_barang`, `id_user`, `feedback`) VALUES
(1, 16, 6, 'Good Quality, Fast respond, fast shipping. GREAT !!!'),
(2, 76, 8, 'packing rapi');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jb` int(11) NOT NULL,
  `jenis_barang` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jb`, `jenis_barang`) VALUES
(4, 'Makanan Anjing'),
(5, 'Makanan Kucing'),
(6, 'Accessories Anjing'),
(7, 'Accessories Kucing'),
(8, 'Cat Litter'),
(9, 'treats & rawhide');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `jk` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `alamat`, `jk`, `username`, `password`, `foto`) VALUES
(1, 'Widya Restiani', 'Tulungagung', 'Wanita', 'widya', 'widya', 'widya'),
(2, 'Justin Bieber', 'Jember', 'Pria', 'jebe', 'jebe', 'jebe');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kec` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `ongkir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `kota` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `id_provinsi`, `kota`) VALUES
(4, 2, 'Malang'),
(6, 2, 'Tulungagung'),
(7, 4, 'Bogor'),
(8, 4, 'Depok');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `bank_account` varchar(100) NOT NULL,
  `nominal` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_payment`, `id_order`, `bank`, `bank_account`, `nominal`, `date`) VALUES
(1, 16, 'BRI', 'Widya Restiani', 499200, '2017-01-31'),
(2, 18, 'Mega', 'Widya', 480000, '2017-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `method` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `no_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_order`, `id_user`, `alamat`, `kode_pos`, `method`, `telp`, `total`, `status`, `no_order`) VALUES
(16, 6, 'Jl. Sukses PW No. 13', 681908, 'bank', '081234567890', 499200, 'done', 1492003552),
(17, 6, 'Jl. Sukses PW No. 13, malang', 612900, 'cod', '081234567890', 340000, 'done', 1492003612),
(18, 8, 'Jl. Sukses PW No. 13, malang', 681908, 'bank', '081234567890', 480000, 'done', 1492048326);

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `id_pet` int(11) NOT NULL,
  `kategori` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `species` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ras` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gambar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`id_pet`, `kategori`, `species`, `ras`, `umur`, `tgl_lahir`, `gambar`, `deskripsi`, `harga`, `id_toko`, `id_karyawan`) VALUES
(8, 'Anjing', 'retriever-gun dog', 'Retriever', 1, '2016-03-14', 'pet_1486892005.jpg', 'The Labrador Retriever, also Labrador, is a type of retriever-gun dog. The Labrador is one of the mo', 1750000, 3, 1),
(7, 'Anjing', 'Bulldog', 'Bulldog', 2, '2016-01-01', 'pet_1486891910.jpg', 'The Bulldog is a medium-sized breed of dog commonly referred to as the English Bulldog or British Bu', 2300000, 3, 2),
(9, 'Anjing', 'Beagle', 'Begle', 4, '2016-12-12', 'pet_1491978378.jpg', 'belum di vaksin, kondisi sehat tanpa cacat', 15000000, 4, 1),
(10, 'Anjing', 'Chihuahua', 'Chihuahua', 6, '2016-10-03', 'pet_1491978532.jpg', 'sudah divaksin, kondisi sehat tanpa cacat', 4000000, 3, 1),
(11, 'Anjing', 'Dalmatian', 'Dalmatian', 5, '2016-11-05', 'pet_1491978629.jpg', 'sudah divaksin, kondisi sehat tanpa cacat', 3500000, 5, 1),
(15, 'Anjing', 'Siberian Husky', 'Siberian Husky', 1, '2016-04-13', 'pet_1491979051.jpeg', 'kondisi sehat tanpa cacat, bersertifikat', 6000000, 5, 1),
(16, 'Anjing', 'Papillon', 'Papillon', 6, '2016-10-19', 'pet_1491979159.jpg', 'sudah divaksin, kondisi sehat tanpa cacat', 5500000, 5, 1),
(17, 'Anjing', 'Poodle', 'Poodle', 3, '2017-01-01', 'pet_1491979281.jpg', 'belum di vaksin, kondisi sehat tanpa cacat', 4500000, 6, 1),
(18, 'Anjing', 'Westie', 'Westie', 5, '2016-12-01', 'pet_1491979395.jpg', 'sudah divaksin, kondisi sehat tanpa cacat', 2000000, 4, 1),
(19, 'Kucing', 'American Shorthair', 'American Shorthair', 5, '2016-11-27', 'pet_1491979530.jpg', 'sudah divaksin, kondisi sehat tanpa cacat', 8000000, 3, 2),
(20, 'Kucing', 'Anggora', 'Anggora', 6, '2016-11-01', 'pet_1491979609.jpg', 'sudah divaksin, kondisi sehat tanpa cacat', 6000000, 5, 2),
(21, 'Kucing', 'Balinese', 'Balinese', 5, '2016-12-01', 'pet_1491979706.jpg', 'belum di vaksin, kondisi sehat tanpa cacat', 5500000, 6, 2),
(23, 'Kucing', 'Bombay', 'Bombay Cat', 7, '2016-10-24', 'pet_1491979863.jpg', 'belum di vaksin, kondisi sehat tanpa cacat', 4500000, 5, 2),
(24, 'Kucing', 'British Shorthair', 'British Shorthair', 4, '2016-12-31', 'pet_1491980070.jpg', 'belum di vaksin, kondisi sehat tanpa cacat', 9500000, 6, 2),
(26, 'Kucing', 'Persia', 'Persia', 6, '2016-11-30', 'pet_1491980308.jpg', 'sudah divaksin, kondisi sehat tanpa cacat', 12000000, 3, 2),
(27, 'Kucing', 'Scottish Fold', 'Scottish Fold', 3, '2017-01-31', 'pet_1491980382.jpg', 'belum di vaksin, kondisi sehat tanpa cacat', 6000000, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `provinsi` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `provinsi`) VALUES
(2, 'Jawa Timur'),
(3, 'Jawa Tengah'),
(4, 'Jawa Barat'),
(5, 'Yogyakarta'),
(6, 'Jakarta'),
(7, 'Banten');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `alamat` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `id_provinsi`, `id_kota`, `alamat`) VALUES
(4, 5, 4, 'Jl. Telkom Jaya No. 117'),
(3, 2, 4, 'Jl. Danau Ranau No. 37'),
(5, 3, 4, 'Jl. Semua Sukses No. 10'),
(6, 4, 8, 'Jl. Sukses PW No. 13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `jk` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `jk`, `no_telp`, `email`, `password`) VALUES
(1, 'Widya Restiani', 'Jl. Sukses PW No. 13, malang', 'female', '082137123984', 'widya@gmail.com', '29c65f781a1068a41f735e1b092546de'),
(6, 'Dya Restia', 'Jl. Danau Ranau A3', 'female', '081235456734', 'tante@gmail.com', '1cdac5ad084879e80e5b67c51baa9095'),
(7, 'hafni', 'pakis', 'female', '01233455678', 'liahafni@gmail.com', '8d84dd7c18bdcb39fbb17ceeea1218cd'),
(5, 'amalia', 'malang', 'female', '02345678', 'amalia@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'Rembe', 'JL. sukses pw ', 'female', '081234567890', 'rembe@gmail.com', '29c65f781a1068a41f735e1b092546de');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jb`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id_pet`),
  ADD KEY `id_toko` (`id_toko`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id_jb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kec` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
