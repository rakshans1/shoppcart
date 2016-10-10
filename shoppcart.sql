-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2016 at 04:13 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoppcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(255) NOT NULL,
  `cat_main_id` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

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
(72, 'HOUSEHOLD SUNDRIES', 10),
(73, 'MIlk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE IF NOT EXISTS `draft` (
  `draft_id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `pprice` float NOT NULL,
  `pimage` varchar(500) NOT NULL,
  `pdesc` varchar(1000) NOT NULL,
  `pquant` int(10) NOT NULL,
  `product_cat_id` int(11) NOT NULL,
  `moderate_name` varchar(50) NOT NULL,
  PRIMARY KEY (`draft_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=270 ;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `moderate_name` varchar(50) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=271 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`log_id`, `pname`, `moderate_name`) VALUES
(1, 'oral_b', 'rakshans1'),
(2, 'heracles-olive-oil-extra-virgin', 'akshay'),
(3, '1st_bites_ragi_300gm', 'akadmin'),
(4, 'Samples_', 'akadmin'),
(5, '1st_bites_ragi_300gm', 'akadmin'),
(6, '1st_bites_ragi_mix_fruit', 'akadmin'),
(7, '1st_bites_rice_dal', 'akadmin'),
(8, '1st_bites_wheat_apple', 'akadmin'),
(9, '1st_bites_wheat_mix_veg', 'akadmin'),
(10, 'Complan_Nutri_Gro_Badam_Kheer', 'akadmin'),
(11, 'Complan_Nutri_Gro_Chocolate_Flavour', 'akadmin'),
(12, 'enfamil_a_stage_2_follow_up_formula', 'akadmin'),
(13, 'manna_first_baby_food_dates_rich_for_bonnie_babies', 'akadmin'),
(14, 'Nestle_Cerelac_Apple_&_Wheat_With_Milk', 'akadmin'),
(15, 'Nestle_Cerelac_Honey_&_Wheat_With_Milk', 'akadmin'),
(16, 'nestle_cerelac_multi_grain_5_fruits_stage_4', 'akadmin'),
(17, 'nestle_cerelac_multi_grain_dal_veg_stage_4', 'akadmin'),
(18, 'Nestle_Cerelac_Rice', 'akadmin'),
(19, 'nestle_cerelac_rice_stage_1', 'akadmin'),
(20, 'Nestle_Cerelac_Rice_Vegetables', 'akadmin'),
(21, 'nestle_cerelac_rice_vegetables_stage_2', 'akadmin'),
(22, 'Nestle_Cerelac_Wheat,_Apple_&_Cherry', 'akadmin'),
(23, 'Nestle_Cerelac_Wheat,_Rice_&_Mixed_Fruit', 'akadmin'),
(24, 'Nestle_Cerelac_Wheat_&_Mixed_Vegetable', 'akadmin'),
(25, 'nestle_cerelac_wheat_honey_stage_2', 'akadmin'),
(26, 'nestle_cerelac_wheat_mixed_fruit_stage_3', 'akadmin'),
(27, 'nestle_cerelac_wheat_mixed_vegetable_stage_3', 'akadmin'),
(28, 'nestle_cerelac_wheat_orange_stage_2', 'akadmin'),
(29, 'nestle_cerelac_wheat_stage_1', 'akadmin'),
(30, 'himalaya_baby_lotion_almond_oil_olive_oil', 'akadmin'),
(31, 'himalaya_baby_lotion_almond_oil_olive_oil', 'akadmin'),
(32, 'sebamed_baby_powder', 'akadmin'),
(33, 'sebamed_baby_lotion', 'akadmin'),
(34, 'sebamed_baby_diaper_rash_cream', 'akadmin'),
(35, 'patanjali_gel_aloe_vera', 'akadmin'),
(36, 'patanjali_dant_kanti_dental_cream', 'akadmin'),
(37, 'johnson_johnson_baby_milk_lotion', 'akadmin'),
(38, 'Himalaya_Herbals_Baby_Powder', 'akadmin'),
(39, 'johnson_johnson_baby_diaper_rash_cream', 'akadmin'),
(40, 'Himalaya_Herbals_Baby_Lotion', 'akadmin'),
(41, 'himalaya_diaper_rash_cream_almond_oil_yashada_bhas', 'akadmin'),
(42, 'Himalaya_Herbals_Baby_Cream', 'akadmin'),
(43, 'Himalaya_Baby_Massage_Oil', 'akadmin'),
(44, 'himalaya_baby_cream_extra_soft_gentle_olive_oil_co', 'akadmin'),
(45, 'sebamed_shampoo_childrens', 'akadmin'),
(46, 'Johnson_&_Johnson_Baby_Shampoo', 'akadmin'),
(47, 'mee_mee_mild_baby_shampoo', 'akadmin'),
(48, 'himalaya_extra_moisturizing_baby_soap_aloe_vera_ol', 'akadmin'),
(49, 'chicco_baby_shampoo_no_tears', 'akadmin'),
(50, 'himalaya_baby_shampoo_gentle_hibiscus_chickpea', 'akadmin'),
(51, 'pampers_premium', 'akadmin'),
(52, 'pampers_premium', 'akadmin'),
(53, 'pampers_premium', 'akadmin'),
(54, 'Pampers_Active', 'akadmin'),
(55, 'mamy_poko', 'akadmin'),
(56, 'mamy_poko_pant_style', 'akadmin'),
(57, 'mamy_poko_pant_style', 'akadmin'),
(58, 'J&J_Baby_Nappy', 'akadmin'),
(59, 'J&J_wipes', 'akadmin'),
(60, 'johnson_johnson_wipes', 'akadmin'),
(61, 'huggies_baby_wipes', 'akadmin'),
(62, 'huggies_wonder_pants', 'akadmin'),
(63, 'himalaya_babywipe', 'akadmin'),
(64, 'bella_baby', 'akadmin'),
(65, 'himalaya_diapers', 'akadmin'),
(66, 'onion', 'shivani'),
(67, 'tomato', 'shivani'),
(68, 'lady_finger', 'shivani'),
(69, 'potato', 'shivani'),
(70, 'green_chilli', 'shivani'),
(71, 'French_beans', 'shivani'),
(72, 'garlic', 'shivani'),
(73, 'drumstick', 'shivani'),
(74, 'cauliflower', 'shivani'),
(75, 'coriander_leaves', 'shivani'),
(76, 'brocoli', 'shivani'),
(77, 'carrot', 'shivani'),
(78, 'brocoli', 'shivani'),
(79, 'brocoli', 'shivani'),
(80, 'cabbage', 'shivani'),
(81, 'bitter_gourd', 'shivani'),
(82, 'beet_root', 'shivani'),
(83, 'watermelon', 'shivani'),
(84, 'baby_corn', 'shivani'),
(85, 'green_kiwi', 'shivani'),
(86, 'papaya', 'shivani'),
(87, 'pineapple', 'shivani'),
(88, 'pomegranate', 'shivani'),
(89, 'sapota', 'shivani'),
(90, 'custard_apple', 'shivani'),
(91, 'banana', 'shivani'),
(92, 'canary_melon', 'shivani'),
(93, 'avocado', 'shivani'),
(94, 'apple-kinnaur', 'shivani'),
(95, 'apple-washington', 'shivani'),
(96, 'apple-shimla', 'shivani'),
(97, 'corn_white', 'akadmin'),
(98, 'amla_lemongrass', 'akadmin'),
(99, 'syrup_caramel', 'akadmin'),
(100, 'syrup_strawberry', 'akadmin'),
(101, 'orange_syrup', 'akadmin'),
(102, 'syrup_peach', 'akadmin'),
(103, 'syrup_strawberry', 'akadmin'),
(104, 'syrup_watermelon', 'akadmin'),
(105, 'cola_syrup', 'akadmin'),
(106, 'passion_fruit', 'akadmin'),
(107, 'syrup_grenadine', 'akadmin'),
(108, 'mojito_mint', 'akadmin'),
(109, 'syrup_rose', 'akadmin'),
(110, 'twist_green_lime', 'akadmin'),
(111, 'curacao_syrup', 'akadmin'),
(112, 'chocolate_syrup', 'akadmin'),
(113, 'butterscotch_syrup', 'akadmin'),
(114, 'syrup_strawberry', 'akadmin'),
(115, 'lion_syrup_dates', 'akadmin'),
(116, 'syrup_pancake', 'akadmin'),
(117, 'bigallet_citronade', 'akadmin'),
(118, 'dabur_honitus_', 'akadmin'),
(119, 'ginger_lime', 'akadmin'),
(120, 'hersheys_syrup', 'akadmin'),
(121, 'tetley_tea_bags', 'akadmin'),
(122, 'tata_tea_life', 'akadmin'),
(123, 'tata_tea_gold', 'akadmin'),
(124, 'tata_tea_premium', 'akadmin'),
(125, 'chakra_gold', 'akadmin'),
(126, 'tata_tea_agni', 'akadmin'),
(127, 'society_tea', 'akadmin'),
(128, 'taj_mahal_tea', 'akadmin'),
(129, 'special_tea', 'akadmin'),
(130, 'society', 'akadmin'),
(131, 'society_dust_tea', 'akadmin'),
(132, '3_roses_tea', 'akadmin'),
(133, 'natural_care', 'akadmin'),
(134, 'tea_green', 'akadmin'),
(135, 'lipton', 'akadmin'),
(136, 'tea_bags_clear', 'akadmin'),
(137, 'ice_tea', 'akadmin'),
(138, 'nestea', 'akadmin'),
(139, 'red_label_tea', 'akadmin'),
(140, 'keya_pasta', 'shivani'),
(141, 'keya_basil', 'shivani'),
(142, 'keya_garlic_bread', 'shivani'),
(143, 'keya_oregano', 'shivani'),
(144, 'keya_basil', 'shivani'),
(145, 'kashmir_brand_', 'shivani'),
(146, 'Auravedic_Moisturizing_Lotion', 'parin'),
(147, 'bisleri_container', 'akadmin'),
(148, 'mountain_water', 'akadmin'),
(149, 'bisleri_mineral_water2', 'akadmin'),
(150, 'bisleri_mineral_water', 'akadmin'),
(151, 'aquafina_mineral_water', 'akadmin'),
(152, 'spring_water', 'akadmin'),
(153, 'kinley_mineral_water', 'akadmin'),
(154, 'mineral_water', 'akadmin'),
(155, 'coconut_water', 'akadmin'),
(156, 'soya_milk', 'akadmin'),
(157, 'nestle_a_toned_milk', 'akadmin'),
(158, 'nestle_milk', 'akadmin'),
(159, 'goodlife_skimmed_milk', 'akadmin'),
(160, 'goodlife_cow_milk', 'akadmin'),
(161, 'cow_milk', 'akadmin'),
(162, 'mother_diary_milk', 'akadmin'),
(163, 'milk_powder', 'akadmin'),
(164, 'danone_milk_toned', 'akadmin'),
(165, 'taaza_milk', 'akadmin'),
(166, 'skimmed_milk', 'akadmin'),
(167, 'amul_gold', 'akadmin'),
(168, 'amul_milk', 'akadmin'),
(169, 'almond_milk', 'akadmin'),
(170, 'nestle_ghee', 'shivani'),
(171, 'patanjali', 'shivani'),
(172, 'mikana_ghee', 'shivani'),
(173, 'milkfood', 'shivani'),
(174, 'mother_dairy', 'shivani'),
(175, 'dalda_ghee', 'shivani'),
(176, 'gowardhan_ghee', 'shivani'),
(177, 'desi_ghee', 'shivani'),
(178, 'danedar', 'shivani'),
(179, 'amul_ghee', 'shivani'),
(180, 'walnut_giri', 'shivani'),
(181, 'walnut_giri', 'shivani'),
(182, 'munakka', 'shivani'),
(183, 'loung_kismish', 'shivani'),
(184, 'Green_pasta', 'shivani'),
(185, 'kismish', 'shivani'),
(186, 'taramarid', 'shivani'),
(187, 'casew', 'shivani'),
(188, 'giri_mamra', 'shivani'),
(189, 'american_badam', 'shivani'),
(190, 'pedigree', 'shivani'),
(191, 'dentastix', 'shivani'),
(192, 'pet_care', 'shivani'),
(193, 'phillips_LED', 'shivani'),
(194, 'Everyday_rechargable', 'shivani'),
(195, 'Everyday_cell', 'shivani'),
(196, 'Big_cell', 'shivani'),
(197, 'Decoration_bulb', 'shivani'),
(198, 'foil', 'shivani'),
(199, 'plastic_tray', 'shivani'),
(200, 'aluminium_foil', 'shivani'),
(201, 'bulb', 'shivani'),
(202, 'watt_bulb', 'shivani'),
(203, 'Naphthalene_balls', 'shivani'),
(204, 'capcicum', 'shivani'),
(205, 'capcicum_red', 'shivani'),
(206, 'diwali', 'shivani'),
(207, 'diwali_decoration', 'shivani'),
(208, 'bathroom_tissues', 'shivani'),
(209, 'elaichi', 'shivani'),
(210, 'haldi_powder', 'shivani'),
(211, 'baby_brinjal', 'shivani'),
(212, 'big_brinjal', 'shivani'),
(213, 'cardoman_seed', 'shivani'),
(214, '_fresh_organic_', 'shivani'),
(215, 'Organic_basmati', 'shivani'),
(216, 'cloves', 'shivani'),
(217, 'Organic_rice', 'shivani'),
(218, 'basmati_rice', 'shivani'),
(219, 'Whole_wheat', 'shivani'),
(220, 'Maida', 'shivani'),
(221, 'besan', 'shivani'),
(222, 'daawat', 'shivani'),
(223, 'sudh_atta', 'shivani'),
(224, 'ashirwad_atta', 'shivani'),
(225, 'Vanaspati_ghee', 'shivani'),
(226, 'agarbatti', 'shivani'),
(227, 'agarbatti', 'shivani'),
(228, 'bansuri_agarbatti', 'shivani'),
(229, 'eco_agarbatti', 'shivani'),
(230, 'Rose_agarbatti', 'shivani'),
(231, 'Rose_agarbatti', 'shivani'),
(232, 'Lia_agarbatti', 'shivani'),
(233, 'Cycle_moods_agarbatti', 'shivani'),
(234, 'amber_agarbatti', 'shivani'),
(235, 'Fresh_agarbattis', 'shivani'),
(236, 'Fresh_agarbattis', 'shivani'),
(237, 'hari_darshan', 'shivani'),
(238, 'apple_cinamom', 'shivani'),
(239, 'Sandal_dhoop', 'shivani'),
(240, 'bags', 'shivani'),
(241, 'Cerelac_rice', 'shivani'),
(242, 'massage_oil', 'shivani'),
(243, 'powder', 'shivani'),
(244, 'baby_lotion', 'shivani'),
(245, 'baby_cream', 'shivani'),
(246, 'himalaya_herbals', 'shivani'),
(247, 'himalaya_herbals', 'shivani'),
(248, 'rash_cream', 'shivani'),
(249, 'himalaya_lotions', 'shivani'),
(250, 'oil', 'shivani'),
(251, 'gentle_soap', 'shivani'),
(252, 'shampoo', 'shivani'),
(253, 'baby_oil', 'shivani'),
(254, 'gift_pack', 'shivani'),
(255, 'huggies', 'shivani'),
(256, 'baby_care', 'shivani'),
(257, 'lotion', 'shivani'),
(258, 'skincare_wipes', 'shivani'),
(259, 'Soap', 'shivani'),
(260, 'pigeon_bottle', 'shivani'),
(261, 'badam_kheer', 'shivani'),
(262, 'chocolate_flavour', 'shivani'),
(263, 'milk', 'shivani'),
(264, 'honey_with_milk', 'shivani'),
(265, 'cerelac', 'shivani'),
(266, '3_roses_tea', 'akadmin'),
(267, 'rose__tea', 'akadmin'),
(268, 'LIPTON', 'akadmin'),
(269, 'lipton', 'akadmin'),
(270, 'lipton', 'akadmin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_amount` float NOT NULL,
  `order_transaction` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_currency` varchar(255) NOT NULL,
  `order_user_id` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_amount`, `order_transaction`, `order_status`, `order_currency`, `order_user_id`) VALUES
(43, 350, '154862', 'Completed', 'IND', 1),
(39, 980, '154862', 'Completed', 'IND', 1),
(41, 100, '154862', 'Completed', 'IND', 1),
(42, 620, '154862', 'Completed', 'IND', 1),
(44, 150, '154862', 'Completed', 'IND', 1),
(45, 150, '154862', 'Completed', 'IND', 1),
(46, 150, '154862', 'Completed', 'IND', 1),
(47, 305, '154862', 'Completed', 'IND', 1),
(48, 350, '154862', 'Completed', 'IND', 1),
(49, 230, '154862', 'Completed', 'IND', 4),
(50, 190, '154862', 'Completed', 'IND', 1),
(51, 600, '154862', 'Completed', 'IND', 4),
(52, 50, '154862', 'Completed', 'IND', 4),
(53, 220, '154862', 'Completed', 'IND', 20),
(54, 420, '156156165', 'Completed', '', 20);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `pprice` float NOT NULL,
  `pimage` varchar(1000) NOT NULL,
  `pdesc` varchar(1000) NOT NULL,
  `pquant` int(10) NOT NULL,
  `product_cat_id` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=328 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `pname`, `pprice`, `pimage`, `pdesc`, `pquant`, `product_cat_id`) VALUES
(1, 'BROCOLLI', 50, 'images/products/1/leafies/brocolli.jpg', 'Fresh brocolli,exotic and at a very cheap rate!!', 1, 1),
(2, 'CABBAGE', 30, 'images/products/1/leafies/cabbage.jpg', 'Fresh cabbage,exotic and at a very cheap rate!!', 2, 1),
(3, 'CAULIFLOWER', 30, 'images/products/1/leafies/cauliflower.jpg', 'Fresh cauliflower,exotic and at a very cheap rate!!', 50, 1),
(4, 'Coriander_Leaves', 20, 'images/products/1/leafies/coriander leaves.jpg', 'Fresh coriander leaves,exotic and at a very cheap rate!!', 50, 1),
(5, 'Dill_Leaves', 30, 'images/products/1/leafies/dill leaves.jpg', 'Fresh dill leaves,exotic and at a very cheap rate!!', 50, 1),
(6, 'French_Beans', 50, 'images/products/1/leafies/french beans.jpg', 'Fresh french beans,exotic and at a very cheap rate!!', 50, 1),
(7, 'APPLE_KINAUR', 80, 'images/products/1/fruits/Apple_Kinnaur.jpg', 'Fresh Apples from kinnaur and at a very cheap rate!!', 50, 2),
(8, 'Apple_Shimla', 80, 'images/products/1/fruits/Apple_Shimla.jpg', 'Fresh Apples from Shimla and at a very cheap rate!!', 47, 2),
(9, 'Apple_Washington', 100, 'images/products/1/fruits/Apple_Washington.jpg', 'Fresh Apples from washington and at a very cheap rate!!', 69, 2),
(12, 'canary_Melon', 50, 'images/products/1/fruits/canary_melon.jpg', 'Fresh canary melon,exotic and at a very cheap rate!!', 50, 2),
(13, 'custard_Apple', 30, 'images/products/1/fruits/custard_apple.jpg', 'Fresh custard apple at a very cheap rate!!', 30, 2),
(18, 'watermelon', 50, 'images/products/1/exotic_fruits/watermelon.jpg', 'Fresh exotic watermelon at a very cheap rate!!', 28, 3),
(19, 'beet_root', 20, 'images/products/1/exotic_veggies/beet_root.jpg', 'Fresh exotic beet root at a very cheap rate!!', 49, 5),
(21, 'lady_finger', 30, 'images/products/1/exotic_veggies/lady_finger.jpg', 'Fresh lady finger,exotic and at a very cheap rate!!', 50, 5),
(22, 'baby_corn', 100, 'images/products/1/veggies/baby_corn.jpg', 'Fresh babycorn at a very cheap rate!!', 46, 4),
(23, 'big_brinjal', 30, 'images/products/1/veggies/big_brinjal.jpg', 'Fresh at a very cheap rate!!', 50, 4),
(24, 'bitter_gourd', 30, 'images/products/1/veggies/bitter_gourd.jpg', 'Fresh bitter gourd at a very cheap rate!!', 50, 4),
(25, 'bottle_gourd', 20, 'images/products/1/veggies/bottle_gourd.jpg', 'Fresh bottle gourd  at a very cheap rate!!', 29, 4),
(26, 'brinjal_small', 20, 'images/products/1/veggies/brinjal_small.jpg', 'Fresh brinjal small at a very cheap rate!!', 50, 4),
(27, 'capcicum_green', 30, 'images/products/1/veggies/capcicum_green.jpg', 'Fresh capcicum green at a very cheap rate!!', 49, 4),
(28, 'ashirwad_atta', 80, 'images/products/2/atta_and_flours/ashirwad_atta.jpg', 'Healthy atta at a very reasonable price...!!', 50, 6),
(29, 'ashirwad_sudh_atta', 80, 'images/products/2/atta_and_flours/ashirwad_sudh_atta.jpg', 'Healthy atta at avery reasonable price....!!', 50, 6),
(30, 'daawat_devaaya_atta', 60, 'images/products/2/atta_and_flours/daawat_devaaya_atta.jpg', 'Healthy atta at avery reasonable price....!!', 47, 6),
(31, 'rajdhani_besan_grade_1', 60, 'images/products/2/atta_and_flours/rajdhani_besan_grade_1.jpg', ' Healthy atta at avery reasonable price....!!', 49, 6),
(32, 'rajdhani_maida', 30, 'images/products/2/atta_and_flours/rajdhani_maida.jpg', 'Healthy atta at avery reasonable price....!!', 30, 6),
(33, 'SHAKTI_BHOG_WHEAT_ATTA', 60, 'images/products/2/atta_and_flours/shakti_bhog_whole_wheat_atta.jpg', 'Healthy atta at avery reasonable price....!!', 50, 6),
(34, 'chana_dal', 160, 'images/products/2/dals_and_pulses/chana_dal.jpg', 'Healthy atta at avery reasonable price....!!', 49, 7),
(35, 'methi_dana', 80, 'images/products/2/dals_and_pulses/methi_dana.jpg', 'Healthy atta at avery reasonable price....!!', 49, 7),
(36, 'mutar_white', 50, 'images/products/2/dals_and_pulses/mutar_white.jpg', 'Healthy atta at avery reasonable price....!!', 50, 7),
(37, 'rajma_jammu', 50, 'images/products/2/dals_and_pulses/rajma_jammu.jpg', 'Healthy atta at avery reasonable price....!!', 50, 7),
(38, 'red_kiwi_mix_dal', 100, 'images/products/2/dals_and_pulses/red_kiwi_mix_dal.jpg', 'Healthy atta at avery reasonable price....!!', 50, 7),
(39, 'red_kiwi_moong_chilka', 80, 'images/products/2/dals_and_pulses/red_kiwi_moong_chilka.jpg', 'Healthy atta at avery reasonable price....!!', 49, 7),
(40, 'red_rajma', 80, 'images/products/2/dals_and_pulses/red_rajma.jpg', ' Healthy atta at avery reasonable price....!!', 47, 7),
(41, 'sabut_dhania', 50, 'images/products/2/dals_and_pulses/sabut_dhania.jpg', ' Healthy atta at avery reasonable price....!!', 49, 7),
(42, 'borges_cesar_pomace_olive_oil', 180, 'images/products/2/olive_oil/borges_cesar_pomace_olive_oil.jpg', 'low cholestrol and at a very reasonable price....!!', 50, 9),
(43, 'borges_olive_oil_light_flavor', 200, 'images/products/2/olive_oil/borges_olive_oil_light_flavor.jpg', ' low cholestrol and at a very reasonable price....!!', 50, 9),
(44, 'cesar_olive_pomace_oil', 200, 'images/products/2/olive_oil/cesar_olive_pomace_oil.jpg', ' low cholestrol and at a very reasonable price....!!', 49, 9),
(45, 'DEL_MONTE_OLIVE_OIL_', 220, 'images/products/2/olive_oil/del_monte_olive_oil_light_flavor.jpg', 'low cholestrol and at a very reasonable price....!!', 50, 9),
(46, 'farel_extra_virgin_oil', 240, 'images/products/2/olive_oil/farel_extra_virgin_oil.jpg', 'low cholestrol and at a very reasonable price....!!', 50, 9),
(47, 'figora_olive_oil', 200, 'images/products/2/olive_oil/figora_olive_oil.jpg', 'low cholestrol and at a very reasonable price....!!', 50, 9),
(48, 'esence_butterscotch', 25, 'images/products/2/food_additives/esence_butterscotch.jpg', 'pure essence at a very reasonable price....!!', 19, 8),
(49, 'esence_choclate', 30, 'images/products/2/food_additives/esence_choclate.jpg', 'pure essence at a very reasonable price....!!', 30, 8),
(50, 'esence_vanila', 20, 'images/products/2/food_additives/esence_vanila.jpg', ' pure essence at a very reasonable price....!!', 30, 8),
(52, 'kesar_dabbi_1_gm_kashmiri', 200, 'images/products/2/food_additives/kesar_dabbi_1_gm_kashmiri.jpg', 'pure essence at a very reasonable price....!!', 20, 8),
(53, 'KESARI_POWDER', 40, 'images/products/2/food_additives/kesari_powder.jpeg', ' pure essence at a very reasonable price....!!', 29, 8),
(54, 'Btc_Kolam_Rice', 50, 'images/products/2/rice/Btc_Kolam_Rice.jpg', 'High quality Rice at a very reasonable price....!!', 500, 10),
(55, 'fresh_organic_basmati_rice', 80, 'images/products/2/rice/fresh_organic_basmati_rice.jpg', ' High quality Rice at a very reasonable price....!!', 500, 10),
(56, 'KOLAM_RICE', 55, 'images/products/2/rice/kolam_Rice.jpg', ' High quality Rice at a very reasonable price....!!', 500, 10),
(57, 'mantra_basmasti_rice', 90, 'images/products/2/rice/mantra_basmasti_rice.jpg', 'High quality Rice at a very reasonable price....!!', 499, 10),
(58, 'mantra_organic_basmati_rice', 100, 'images/products/2/rice/mantra_organic_basmati_rice.jpg', 'High quality Rice at a very reasonable price....!!', 498, 10),
(59, 'Rice_Endrayani', 60, 'images/products/2/rice/Rice_Endrayani.jpg', 'High quality Rice at a very reasonable price....!!', 500, 10),
(60, 'mantra_wheat_grass_powder', 50, 'images/products/2/seasoning/mantra_wheat_grass_powder.jpg', 'spicy seasoning....!! ', 49, 16),
(61, 'Frosted', 200, 'images/products/3/cereals/Frosted.jpg', ' healthy cereals at a very reasonable price....!!', 42, 17),
(62, 'kelloggs_miniwheats', 250, 'images/products/3/cereals/kelloggs_miniwheats.jpg', 'healthy cereals at a very reasonable price....!!', 50, 17),
(63, 'kelloggs_pops', 220, 'images/products/3/cereals/kelloggs_pops.jpg', '  healthy cereals at a very reasonable price....!!', 49, 17),
(64, 'kellogs_cornflakes', 200, 'images/products/3/cereals/kellogs_cornflakes.jpg', ' healthy cereals at a very reasonable price....!!', 50, 17),
(65, 'Total', 250, 'images/products/3/cereals/Total.jpg', 'healthy cereals at a very reasonable price....!!', 48, 17),
(66, 'Trix', 250, 'images/products/3/cereals/Trix.jpg', 'healthy cereals at a very reasonable price....!!', 50, 17),
(67, 'badam_giri_mamra', 200, 'images/products/3/dried_and_dry_fruits/badam_giri_mamra.jpg', ' healthy dry fruits at a very reasonable price....!!', 30, 19),
(68, 'cashew', 250, 'images/products/3/dried_and_dry_fruits/cashew.jpg', 'healthy dry fruits at a very reasonable price....!!', 48, 19),
(69, 'dried_taramarind', 100, 'images/products/3/dried_and_dry_fruits/dried_taramarind.jpg', 'healthy dry fruits at a very reasonable price....!!', 50, 19),
(70, 'green_pista', 300, 'images/products/3/dried_and_dry_fruits/green_pista.jpg', 'healthy dry fruits at a very reasonable price....!!', 48, 19),
(72, 'loung_kismish', 180, 'images/products/3/dried_and_dry_fruits/loung_kismish.jpg', 'healthy dry fruits at a very reasonable price....!!', 30, 19),
(73, 'neutrella_soyachunks', 10, 'images/products/3/diet_and_soya_snacks/neutrella_soyachunks.jpg', 'healthy soya snacks at a very reasonable price....!!', 100, 18),
(74, 'saffola_oats', 150, 'images/products/3/diet_and_soya_snacks/saffola_oats.jpg', 'healthy soya snacks at a very reasonable price....!!', 80, 18),
(75, 'soya_chips', 20, 'images/products/3/diet_and_soya_snacks/soya_chips.jpg', 'healthy soya snacks at a very reasonable price....!!', 100, 18),
(76, 'almarai_mango_flavoured_milk', 30, 'images/products/4/flavoured_milk/almarai_mango_flavoured_milk.jpg', ' healthy and tasty milk at a very reasonable price....!!', 99, 22),
(77, 'amulkool_rose', 30, 'images/products/4/flavoured_milk/amulkool_rose.jpg', '  healthy and tasty milk at a very reasonable price....!!', 100, 22),
(78, 'Badam_Flavoured_Milk', 30, 'images/products/4/flavoured_milk/Badam_Flavoured_Milk.jpg', '  healthy and tasty milk at a very reasonable price....!!', 100, 22),
(79, 'choclate_flavoured_milk', 30, 'images/products/4/flavoured_milk/choclate_flavoured_milk.jpg', 'healthy and tasty milk at a very reasonable price....!!', 98, 22),
(80, 'Elaichi_Flavoured_Milk', 30, 'images/products/4/flavoured_milk/Elaichi_Flavoured_Milk.jpg', 'healthy and tasty milk at a very reasonable price....!!', 100, 22),
(83, 'amul_tazaa', 50, 'images/products/4/milk/amul_tazaa.jpg', ' healthy  milk at a very reasonable price....!!', 200, 23),
(84, 'amulya', 50, 'images/products/4/milk/amulya.jpg', 'healthy  milk at a very reasonable price....!!', 200, 23),
(86, 'amul_mithai_mate', 150, 'images/products/4/other_dairy_products/amul_mithai_mate.jpg', 'other dairy products at a very reasonable price....!!', 49, 24),
(87, 'milkmaid', 120, 'images/products/4/other_dairy_products/milkmaid.jpg', 'other dairy products at a very reasonable price....!!', 48, 24),
(88, 'Nestle_Milkmaid', 170, 'images/products/4/other_dairy_products/Nestle_Milkmaid.jpg', 'other dairy products at a very reasonable price....!!', 50, 24),
(92, 'strawberry', 150, 'images/products/5/syrups_and_cordials/strawberry.jpg', '  syrups and cordials at a very reasonable price....!!', 50, 29),
(93, 'WHITE_ROSE', 150, 'images/products/5/syrups_and_cordials/white_rose.jpg', ' syrups and cordials at a very reasonable price....!!', 48, 29),
(95, 'BUXEON', 12, 'images/products/5/water/buxeon.jpg', 'Pure mineral water at a very reasonable price....!!', 97, 31);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pprice` float NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pquant` int(11) NOT NULL,
  `report_user_id` int(11) NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `p_id`, `order_id`, `pprice`, `pname`, `pquant`, `report_user_id`) VALUES
(50, 8, 39, 80, 'APPLE SHIMLA', 1, 1),
(49, 17, 39, 30, 'POMEGRANATE', 4, 1),
(51, 61, 39, 200, 'FROSTED', 2, 1),
(52, 90, 39, 150, 'GINGER LIME', 2, 1),
(53, 40, 39, 80, 'RED RAJMA', 1, 1),
(54, 58, 41, 100, 'MANTRA ORGANIC BASMATI RICE', 1, 1),
(55, 8, 42, 80, 'APPLE SHIMLA', 1, 1),
(56, 17, 42, 30, 'POMEGRANATE', 1, 1),
(57, 61, 42, 200, 'FROSTED', 1, 1),
(58, 90, 42, 150, 'GINGER LIME', 1, 1),
(59, 40, 42, 80, 'RED RAJMA', 2, 1),
(60, 22, 43, 100, 'BABY CORN', 1, 1),
(61, 86, 43, 150, 'AMUL MITHAI MATE', 1, 1),
(62, 58, 43, 100, 'MANTRA ORGANIC BASMATI RICE', 1, 1),
(63, 79, 44, 30, 'CHOCLATE FLAVOURED MILK', 1, 1),
(64, 87, 44, 120, 'MILKMAID', 1, 1),
(65, 79, 45, 30, 'CHOCLATE FLAVOURED MILK', 1, 1),
(66, 87, 45, 120, 'MILKMAID', 1, 1),
(67, 48, 47, 25, 'ESENCE BUTTERSCOTCH', 1, 1),
(68, 65, 47, 250, 'TOTAL', 1, 1),
(69, 27, 47, 30, 'CAPCICUM GREEN', 1, 1),
(70, 41, 48, 50, 'SABUT DHANIA', 1, 1),
(71, 22, 48, 100, 'BABY CORN', 1, 1),
(72, 44, 48, 200, 'CESAR OLIVE POMACE OIL', 1, 1),
(73, 22, 49, 100, 'BABY CORN', 1, 4),
(74, 1, 49, 50, 'BROCOLLI', 1, 4),
(75, 39, 49, 80, 'RED KIWI MOONG CHILKA', 1, 4),
(76, 60, 50, 50, 'MANTRA WHEAT GRASS POWDER', 1, 1),
(77, 35, 50, 80, 'METHI DANA', 1, 1),
(78, 31, 50, 60, 'RAJDHANI BESAN GRADE 1', 1, 1),
(79, 70, 51, 300, 'GREEN PISTA', 2, 4),
(80, 1, 52, 50, 'BROCOLLI', 1, 4),
(81, 53, 53, 40, 'KESARI POWDER', 1, 20),
(82, 22, 53, 100, 'BABY CORN', 1, 20),
(83, 8, 53, 80, 'APPLE SHIMLA', 1, 20),
(84, 61, 54, 200, 'FROSTED', 2, 20),
(85, 19, 54, 20, 'BEET ROOT', 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `email_code` varchar(32) NOT NULL,
  `address` varchar(1024) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `password_recover` int(11) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0',
  `mobile_number` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `email_code`, `address`, `active`, `password_recover`, `type`, `mobile_number`) VALUES
(21, 'akash_ugale', '400cc84a97e416da56ab7d588e861918', 'Akash', 'Ugale', 'akash.rait@gmail.com', '2f4c96174de59c9cf6b1191fb652e643', 'Triveni bhavan,shanti nagar thane(w)', 1, 0, 0, '9769807576'),
(1, 'rakshans1', 'fe9bbdbcbfed836bfa29b90b6ee1902e', 'Rakshan', 'Shetty', 'shetty.raxx555@gmail.com', '0c557e304908f3eba2aba2b573dc4fa7', 'B/104,Annapurna Pooja,Tukaram Nagar,Dombivli (E)', 1, 0, 1, '9870827360');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
