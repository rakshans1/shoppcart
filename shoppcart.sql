-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2015 at 03:58 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `cat_main_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_main_id`) VALUES
(1, 'LEAFIES', 1),
(2, 'FRUITS', 1),
(3, 'EXOTIC FRUITS', 1),
(4, 'VEGGIES', 1),
(5, 'EXOTIC VEGGIES', 1),
(6, 'ATTA AND FLOURS', 2),
(7, 'DALS AND PULSES', 2),
(8, 'FOOD ADDITIVES', 2),
(9, 'OLIVE OIL', 2),
(10, 'RICE', 2),
(11, 'SALT AND SUGAR', 2),
(12, 'PURE GROUND SPICES', 2),
(13, 'OIL AND GHEE', 2),
(14, 'BLENDED SPICES', 2),
(15, 'WHOLE SPICES', 2),
(16, 'SEASONING', 2),
(17, 'CEREALS', 3),
(18, 'DIET AND SOYA SNACKS', 3),
(19, 'DRIED AND DRY FRUITS', 3),
(20, 'BREAKFAST AND HEALTH BARS', 3),
(21, 'EGGS', 3),
(22, 'FLAVOURED MILK', 4),
(23, 'MILK', 4),
(24, 'OTHER DAIRY PRODUCTS', 4),
(25, 'BUTTTER', 4),
(26, 'CHEESE', 4),
(27, 'YOGHURT', 4),
(28, 'ICE CREAM AND FROZEN YOGHURT', 4),
(29, 'SYRUPS AND CORDIALS', 5),
(30, 'TEA', 5),
(31, 'WATER', 5),
(32, 'COFFEE', 5),
(33, 'FRUIT DRINKS', 5),
(34, 'JUICES', 5),
(35, 'SOFT DRINKS', 5),
(36, 'SPORTS AND ENERGY DRINKS', 5),
(37, 'CREAMS & LOTIONS', 6),
(38, 'DEOS,TALCS & PERUMES', 6),
(39, 'FACIAL CARE', 6),
(40, 'HAIR CARE', 6),
(41, 'ORAL CARE', 6),
(42, 'SHAVING NEEDS', 6),
(43, 'SOAP & BODYWASH', 6),
(44, 'COSMETICS', 6),
(45, 'BOTTLED FOOD', 7),
(46, 'CANNED FOOD', 7),
(47, 'CHIPS & WAFFERS', 7),
(48, 'NIBBLES & SNACKS', 7),
(49, 'PAPAD', 7),
(50, 'PASTA', 7),
(51, 'NOODLE & SOUP', 7),
(52, 'READY MIXTURES&INSTANT MEALS', 7),
(53, 'PASTES & PUREES', 8),
(54, 'PICKELS AND CHUTNEYS', 8),
(55, 'SAUCES', 8),
(56, 'DIPS AND DRESSINGS', 8),
(57, 'JAMS AND SPREADS', 8),
(58, 'BABY UTILITIES', 9),
(59, 'BABY FOOD', 9),
(60, 'BABY OILS AND CREAMS', 9),
(61, 'BABY SOAPS AND SHAMPOOS', 9),
(62, 'DIAPERS AND WIPES', 9),
(63, 'POOJA REQUIREMENTS', 10),
(64, 'LAUNDRY DETERGENTS', 10),
(65, 'PET CARE', 10),
(66, 'REPELLENTS AND INSECITICIDE', 10),
(67, 'CAR ACCESSORIES', 10),
(68, 'CLEANING EQUIPMENT', 10),
(69, 'CLEANING AGENTS', 10),
(70, 'DISH WASHING', 10),
(71, 'HOME FRAGRANCE', 10),
(72, 'HOUSEHOLD SUNDRIES', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_transaction` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_amount`, `order_transaction`, `order_status`, `order_currency`) VALUES
(23, 299, '2251554', 'Completed', 'usd'),
(24, 299, '2251554', 'Completed', 'usd'),
(25, 299, '2251554', 'Completed', 'usd'),
(26, 299, '2251554', 'Completed', 'usd');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pprice` int(10) NOT NULL,
  `pimage` varchar(500) NOT NULL,
  `pdesc` varchar(1000) NOT NULL,
  `pquant` int(10) NOT NULL,
  `product_cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `pname`, `pprice`, `pimage`, `pdesc`, `pquant`, `product_cat_id`) VALUES
(1, 'Brocolli', 50, 'images/fruitsandveggies/leafies/brocolli.jpg', 'Fresh brocolli,exotic and at a very cheap rate!!', 3, 1),
(2, 'Cabbage', 30, 'images/fruitsandveggies/leafies/cabbage.jpg', 'Fresh cabbage,exotic and at a very cheap rate!!', 2, 1),
(3, 'Cauliflower', 30, 'images/fruitsandveggies/leafies/cauliflower.jpg', 'Fresh cauliflower,exotic and at a very cheap rate!!', 50, 1),
(4, 'Coriander_Leaves', 20, 'images/fruitsandveggies/leafies/coriander leaves.jpg', 'Fresh coriander leaves,exotic and at a very cheap rate!!', 50, 1),
(5, 'Dill_Leaves', 30, 'images/fruitsandveggies/leafies/dill leaves.jpg', 'Fresh dill leaves,exotic and at a very cheap rate!!', 50, 1),
(6, 'French_Beans', 50, 'images/fruitsandveggies/leafies/french beans.jpg', 'Fresh french beans,exotic and at a very cheap rate!!', 50, 1),
(7, 'Apple_Kinnaur', 80, 'images/fruitsandveggies/fruits/Apple_Kinnaur.jpg', 'Fresh Apples from kinnaur and at a very cheap rate!!', 50, 2),
(8, 'Apple_Shimla', 80, 'images/fruitsandveggies/fruits/Apple_Shimla.jpg', 'Fresh Apples from Shimla and at a very cheap rate!!', 50, 2),
(9, 'Apple_Washington', 100, 'images/fruitsandveggies/fruits/Apple_Washington.jpg', 'Fresh Apples from washington and at a very cheap rate!!', 70, 2),
(10, 'avocado', 30, 'images/fruitsandveggies/fruits/avocado.jpg', 'Fresh avocado a rare fruit and at a very cheap rate!!', 30, 2),
(11, 'banana', 20, 'images/fruitsandveggies/fruits/banana.jpg', 'Fresh banana a great source of calcium at a very cheap rate!!', 50, 2),
(12, 'canary_Melon', 50, 'images/fruitsandveggies/fruits/canary_melon.jpg', 'Fresh canary melon,exotic and at a very cheap rate!!', 50, 2),
(13, 'custard_Apple', 30, 'images/fruitsandveggies/fruits/custard_apple.jpg', 'Fresh custard apple at a very cheap rate!!', 30, 2),
(14, 'Green_Kiwi', 50, 'images/fruitsandveggies/fruits/green_kiwi.jpg', 'Fresh green kiwi a rare fruit and at a very cheap rate!!', 20, 2),
(15, 'papaya', 40, 'images/fruitsandveggies/fruits/papaya.jpg', 'Fresh papaya at a very cheap rate!!', 10, 2),
(17, 'pomegranate', 30, 'images/fruitsandveggies/exoticfruits/pomegranate.jpg', 'Fresh exotic pomegranate at a very cheap rate!!', 30, 3),
(18, 'watermelon', 50, 'images/fruitsandveggies/exoticfruits/watermelon.jpg', 'Fresh exotic watermelon at a very cheap rate!!', 30, 3),
(19, 'beet_root', 20, 'images/fruitsandveggies/exoticveggies/beet_root.jpg', 'Fresh exotic beet root at a very cheap rate!!', 50, 5),
(21, 'lady_finger', 30, 'images/fruitsandveggies/exoticveggies/lady_finger.jpg', 'Fresh lady finger,exotic and at a very cheap rate!!', 50, 5),
(22, 'baby_corn', 100, 'images/fruitsandveggies/veggies/baby_corn.jpg', 'Fresh babycorn at a very cheap rate!!', 50, 4),
(23, 'big_brinjal', 30, 'images/fruitsandveggies/veggies/big_brinjal.jpg', 'Fresh at a very cheap rate!!', 50, 4),
(24, 'bitter_gourd', 30, 'images/fruitsandveggies/veggies/bitter_gourd.jpg', 'Fresh bitter gourd at a very cheap rate!!', 50, 4),
(25, 'bottle_gourd', 20, 'images/fruitsandveggies/veggies/bottle_gourd.jpg', 'Fresh bottle gourd  at a very cheap rate!!', 30, 4),
(26, 'brinjal_small', 20, 'images/fruitsandveggies/veggies/brinjal_small.jpg', 'Fresh brinjal small at a very cheap rate!!', 50, 4),
(27, 'capcicum_green', 30, 'images/fruitsandveggies/veggies/capcicum_green.jpg', 'Fresh capcicum green at a very cheap rate!!', 50, 4),
(28, 'ashirwad_atta', 80, 'images/groceryandstaples/attaandflours/ashirwad_atta.jpg', 'Healthy atta at a very reasonable price...!!', 50, 6),
(29, 'ashirwad_sudh_atta', 80, 'images/groceryandstaples/attaandflours/ashirwad_sudh_atta.jpg', 'Healthy atta at avery reasonable price....!!', 50, 6),
(30, 'daawat_devaaya_atta', 60, 'images/groceryandstaples/attaandflours/daawat_devaaya_atta.jpg', 'Healthy atta at avery reasonable price....!!', 50, 6),
(31, 'rajdhani_besan_grade_1', 60, 'images/groceryandstaples/attaandflours/rajdhani_besan_grade_1.jpg', ' Healthy atta at avery reasonable price....!!', 50, 6),
(32, 'rajdhani_maida', 30, 'images/groceryandstaples/attaandflours/rajdhani_maida.jpg', 'Healthy atta at avery reasonable price....!!', 30, 6),
(33, 'shakti_bhog_whole_wheat_atta', 60, 'images/groceryandstaples/attaandflours/shakti_bhog_whole_wheat_atta.jpg', 'Healthy atta at avery reasonable price....!!', 50, 6),
(34, 'chana_dal', 160, 'images/groceryandstaples/dalsandpulses/chana_dal.jpg', 'Healthy atta at avery reasonable price....!!', 50, 7),
(35, 'methi_dana', 80, 'images/groceryandstaples/dalsandpulses/methi_dana.jpg', 'Healthy atta at avery reasonable price....!!', 50, 7),
(36, 'mutar_white', 50, 'images/groceryandstaples/dalsandpulses/mutar_white.jpg', 'Healthy atta at avery reasonable price....!!', 50, 7),
(37, 'rajma_jammu', 50, 'images/groceryandstaples/dalsandpulses/rajma_jammu.jpg', 'Healthy atta at avery reasonable price....!!', 50, 7),
(38, 'red_kiwi_mix_dal', 100, 'images/groceryandstaples/dalsandpulses/red_kiwi_mix_dal.jpg', 'Healthy atta at avery reasonable price....!!', 50, 7),
(39, 'red_kiwi_moong_chilka', 80, 'images/groceryandstaples/dalsandpulses/red_kiwi_moong_chilka.jpg', 'Healthy atta at avery reasonable price....!!', 50, 7),
(40, 'red_rajma', 80, 'images/groceryandstaples/dalsandpulses/red_rajma.jpg', ' Healthy atta at avery reasonable price....!!', 50, 7),
(41, 'sabut_dhania', 50, 'images/groceryandstaples/dalsandpulses/sabut_dhania.jpg', ' Healthy atta at avery reasonable price....!!', 50, 7),
(42, 'borges_cesar_pomace_olive_oil', 180, 'images/groceryandstaples/oliveoil/borges_cesar_pomace_olive_oil.jpg', 'low cholestrol and at a very reasonable price....!!', 50, 9),
(43, 'borges_olive_oil_light_flavor', 200, 'images/groceryandstaples/oliveoil/borges_olive_oil_light_flavor.jpg', ' low cholestrol and at a very reasonable price....!!', 50, 9),
(44, 'cesar_olive_pomace_oil', 200, 'images/groceryandstaples/oliveoil/cesar_olive_pomace_oil.jpg', ' low cholestrol and at a very reasonable price....!!', 50, 9),
(45, 'del_monte_olive_oil_light_flavor', 220, 'images/groceryandstaples/oliveoil/del_monte_olive_oil_light_flavor.jpg', 'low cholestrol and at a very reasonable price....!!', 50, 9),
(46, 'farel_extra_virgin_oil', 240, 'images/groceryandstaples/oliveoil/farel_extra_virgin_oil.jpg', 'low cholestrol and at a very reasonable price....!!', 50, 9),
(47, 'figora_olive_oil', 200, 'images/groceryandstaples/oliveoil/figora_olive_oil.jpg', 'low cholestrol and at a very reasonable price....!!', 50, 9),
(48, 'esence_butterscotch', 25, 'images/groceryandstaples/foodadditives/esence_butterscotch.jpg', 'pure essence at a very reasonable price....!!', 20, 8),
(49, 'esence_choclate', 30, 'images/groceryandstaples/foodadditives/esence_choclate.jpg', 'pure essence at a very reasonable price....!!', 30, 8),
(50, 'esence_vanila', 20, 'images/groceryandstaples/foodadditives/esence_vanila.jpg', ' pure essence at a very reasonable price....!!', 30, 8),
(51, 'essence_elaichi', 20, 'images/groceryandstaples/foodadditives/essence_elaichi.jpg', 'pure essence at a very reasonable price....!!', 30, 8),
(52, 'kesar_dabbi_1_gm_kashmiri', 200, 'images/groceryandstaples/foodadditives/kesar_dabbi_1_gm_kashmiri.jpg', 'pure essence at a very reasonable price....!!', 20, 8),
(53, 'kesari_powder', 40, 'images/groceryandstaples/foodadditives/kesari_powder.jpg', ' pure essence at a very reasonable price....!!', 30, 8),
(54, 'Btc_Kolam_Rice', 50, 'images/groceryandstaples/rice/Btc_Kolam_Rice.jpg', 'High quality Rice at a very reasonable price....!!', 500, 10),
(55, 'fresh_organic_basmati_rice', 80, 'images/groceryandstaples/rice/fresh_organic_basmati_rice.jpg', ' High quality Rice at a very reasonable price....!!', 500, 10),
(56, 'kolam_Rice', 55, 'images/groceryandstaples/rice/kolam_Rice.jpg', ' High quality Rice at a very reasonable price....!!', 500, 10),
(57, 'mantra_basmasti_rice', 90, 'images/groceryandstaples/rice/mantra_basmasti_rice.jpg', 'High quality Rice at a very reasonable price....!!', 500, 10),
(58, 'mantra_organic_basmati_rice', 100, 'images/groceryandstaples/rice/mantra_organic_basmati_rice.jpg', 'High quality Rice at a very reasonable price....!!', 500, 10),
(59, 'Rice_Endrayani', 60, 'images/groceryandstaples/rice/Rice_Endrayani.jpg', 'High quality Rice at a very reasonable price....!!', 500, 10),
(60, 'mantra_wheat_grass_powder', 50, 'images/groceryandstaples/seasoning/mantra_wheat_grass_powder.jpg', 'spicy seasoning....!! ', 50, 16),
(61, 'Frosted', 200, 'images/breakfastandhealthyfoods/cereals/Frosted.jpg', ' healthy cereals at a very reasonable price....!!', 50, 17),
(62, 'kelloggs_miniwheats', 250, 'images/breakfastandhealthyfoods/cereals/kelloggs_miniwheats.jpg', 'healthy cereals at a very reasonable price....!!', 50, 17),
(63, 'kelloggs_pops', 220, 'images/breakfastandhealthyfoods/cereals/kelloggs_pops.jpg', '  healthy cereals at a very reasonable price....!!', 50, 17),
(64, 'kellogs_cornflakes', 200, 'images/breakfastandhealthyfoods/cereals/kellogs_cornflakes.jpg', ' healthy cereals at a very reasonable price....!!', 50, 17),
(65, 'Total', 250, 'images/breakfastandhealthyfoods/cereals/Total.jpg', 'healthy cereals at a very reasonable price....!!', 50, 17),
(66, 'Trix', 250, 'images/breakfastandhealthyfoods/cereals/Trix.jpg', 'healthy cereals at a very reasonable price....!!', 50, 17),
(67, 'badam_giri_mamra', 200, 'images/breakfastandhealthyfoods/driedanddryfruits/badam_giri_mamra.jpg', ' healthy dry fruits at a very reasonable price....!!', 30, 19),
(68, 'cashew', 250, 'images/breakfastandhealthyfoods/driedanddryfruits/cashew.jpg', 'healthy dry fruits at a very reasonable price....!!', 50, 19),
(69, 'dried_taramarind', 100, 'images/breakfastandhealthyfoods/driedanddryfruits/dried_taramarind.jpg', 'healthy dry fruits at a very reasonable price....!!', 50, 19),
(70, 'green_pista', 300, 'images/breakfastandhealthyfoods/driedanddryfruits/green_pista.jpg', 'healthy dry fruits at a very reasonable price....!!', 50, 19),
(71, 'kismish', 150, 'images/breakfastandhealthyfoods/driedanddryfruits/kismish.jpg', 'healthy dry fruits at a very reasonable price....!!', 50, 19),
(72, 'loung_kismish', 180, 'images/breakfastandhealthyfoods/driedanddryfruits/loung_kismish.jpg', 'healthy dry fruits at a very reasonable price....!!', 30, 19),
(73, 'neutrella_soyachunks', 10, 'images/breakfastandhealthyfoods/dietandsoyasnacks/neutrella_soyachunks.jpg', 'healthy soya snacks at a very reasonable price....!!', 100, 18),
(74, 'saffola_oats', 150, 'images/breakfastandhealthyfoods/dietandsoyasnacks/saffola_oats.jpg', 'healthy soya snacks at a very reasonable price....!!', 80, 18),
(75, 'soya_chips', 20, 'images/breakfastandhealthyfoods/dietandsoyasnacks/soya_chips.jpg', 'healthy soya snacks at a very reasonable price....!!', 100, 18),
(76, 'almarai_mango_flavoured_milk', 30, 'images/dairy/flavouredmilk/almarai_mango_flavoured_milk.jpg', ' healthy and tasty milk at a very reasonable price....!!', 100, 22),
(77, 'amulkool_rose', 30, 'images/dairy/flavouredmilk/amulkool_rose.jpg', '  healthy and tasty milk at a very reasonable price....!!', 100, 22),
(78, 'Badam_Flavoured_Milk', 30, 'images/dairy/flavouredmilk/Badam_Flavoured_Milk.jpg', '  healthy and tasty milk at a very reasonable price....!!', 100, 22),
(79, 'choclate_flavoured_milk', 30, 'images/dairy/flavouredmilk/choclate_flavoured_milk.jpg', 'healthy and tasty milk at a very reasonable price....!!', 100, 22),
(80, 'Elaichi_Flavoured_Milk', 30, 'images/dairy/flavouredmilk/Elaichi_Flavoured_Milk.jpg', 'healthy and tasty milk at a very reasonable price....!!', 100, 22),
(81, 'almond_milk', 50, 'images/dairy/milk/almond_milk.jpg', 'healthy  milk at a very reasonable price....!!', 200, 23),
(82, 'amul_gold', 50, 'images/dairy/milk/amul_gold.jpg', 'healthy  milk at a very reasonable price....!!', 200, 23),
(83, 'amul_tazaa', 50, 'images/dairy/milk/amul_tazaa.jpg', ' healthy  milk at a very reasonable price....!!', 200, 23),
(84, 'amulya', 50, 'images/dairy/milk/amulya.jpg', 'healthy  milk at a very reasonable price....!!', 200, 23),
(85, 'mother_diary_milk', 60, 'images/dairy/milk/mother diary_milk.jpg', ' healthy  milk at a very reasonable price....!!', 200, 23),
(86, 'amul_mithai_mate', 150, 'images/dairy/otherdairyproducts/amul_mithai_mate.jpg', 'other dairy products at a very reasonable price....!!', 50, 24),
(87, 'milkmaid', 120, 'images/dairy/otherdairyproducts/milkmaid.jpg', 'other dairy products at a very reasonable price....!!', 50, 24),
(88, 'Nestle_Milkmaid', 170, 'images/dairy/otherdairyproducts/Nestle_Milkmaid.jpg', 'other dairy products at a very reasonable price....!!', 50, 24),
(90, 'ginger_lime', 150, 'images/beveragesandsyrups/syrupsandcordials/ginger_lime.jpg', 'syrups and cordials at a very reasonable price....!!', 50, 29),
(92, 'strawberry', 150, 'images/beveragesandsyrups/syrupsandcordials/strawberry.jpg', '  syrups and cordials at a very reasonable price....!!', 50, 29),
(93, 'white_rose', 150, 'images/beveragesandsyrups/syrupsandcordials/white_rose.jpg', ' syrups and cordials at a very reasonable price....!!', 50, 29),
(94, 'aquafina_mineral_water', 15, 'images/beveragesandsyrups/water/aquafina_mineral_water.jpg', 'pure mineral water at a very reasonable price....!!', 500, 31),
(95, 'buxeon', 12, 'images/beveragesandsyrups/water/buxeon.jpg', 'pure mineral water at a very reasonable price....!!', 100, 31);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pprice` float NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pquant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `p_id`, `order_id`, `pprice`, `pname`, `pquant`) VALUES
(32, 1, 23, 50, 'BROCOLLI', 1),
(33, 22, 24, 100, 'BABY CORN', 2),
(34, 6, 25, 50, 'FRENCH BEANS', 1),
(35, 3, 26, 30, 'CAULIFLOWER', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `email_code` varchar(32) NOT NULL,
  `address` varchar(1024) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `password_recover` int(11) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `email_code`, `address`, `active`, `password_recover`, `type`) VALUES
(31, 'gada.parin786', '2c033c90c1085ec99e95ae2b45ba2136', 'Parin', 'Gada', 'gada.parin786@gmail.com', 'f094c8ca61cdf0e010d5c55a9b2e1b15', '1115, Kailash Darshan, A/102,Nr NKT School, Anjur Phata, Bhiwandi-421 302', 1, 0, 0),
(34, 'rakshans1', 'fe9bbdbcbfed836bfa29b90b6ee1902e', 'Rakshan', 'Shetty', 'shetty.raxx555@gmail.com', 'b10bcdae688ebeec648d702c0ae9e3b3', 'B/104,Annapurna Pooja,Tukaram Nagar,Dombivli (E)', 1, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
