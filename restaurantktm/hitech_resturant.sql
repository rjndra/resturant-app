-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2015 at 07:48 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hitech_resturant`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE IF NOT EXISTS `tbl_account` (
  `account_id` int(3) NOT NULL AUTO_INCREMENT,
  `acc_table_id` int(3) NOT NULL,
  `acc_payment` int(3) NOT NULL,
  `acc_date` date NOT NULL,
  `acc_time` time NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_id` int(3) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `cat_publish` enum('Y','N') NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `cat_description`, `cat_image`, `cat_publish`) VALUES
(1, 'resturant', 'resturant menu', 'a', 'Y'),
(2, 'takeway', 'takeway ', 'a', 'Y'),
(3, '', '', 'a', 'N'),
(4, 'special', 'special set menu', 'a', 'Y'),
(5, 'wine', 'wine menu', 'a', 'Y'),
(6, 'lunch', 'lunch menu', 'a', 'Y'),
(7, 'desert', 'desert menu', 'a', 'Y'),
(8, 'chirtmas tree', 'chirtmas menu', 'www.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE IF NOT EXISTS `tbl_items` (
  `item_id` int(3) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `item_description` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_price` float NOT NULL,
  `item_cat_id` int(3) NOT NULL,
  `item_tag_id` int(3) NOT NULL,
  `item_publish` enum('Y','N') NOT NULL,
  `item_featured` enum('Y','N') NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`item_id`, `item_name`, `item_description`, `item_image`, `item_price`, `item_cat_id`, `item_tag_id`, `item_publish`, `item_featured`) VALUES
(1, 'VEGETABLE SAMOSA', 'Golden fried pastry parcels stuffed with cumin, green peas and mashed potato', 'a', 6, 1, 0, 'Y', 'Y'),
(2, 'VEGETABLE PAKORA', 'Fresh seasonal vegetables marinated with mild spices, dipped in the gram flour batter and deep fried', 'a', 6, 1, 0, 'Y', 'Y'),
(3, 'ONION BHAJI', 'Shallow fried onion slices with cumin seeds, mild spices and deep fried.', 'a', 6, 1, 0, 'Y', 'Y'),
(4, 'ALOO CHAP', 'Mashed potatoes infused with ginger, and cumin, dipped in the batter and deep fried', 'a', 6, 1, 0, 'Y', 'Y'),
(5, 'ACHARI MURGA TIKKA chilly', 'Tender pieces of chicken breast marinated in yoghurt, pickled sauce, fresh seasonal herbs and grilled in the clay oven.', 'a', 6, 1, 0, 'Y', 'Y'),
(6, 'CHICKEN PAKORA', 'Strips of chicken breast slightly spiced, dipped in gram flour batter and deep fried.', 'a', 7, 1, 0, 'Y', 'Y'),
(7, 'SAFFRON MALAI TIKKA', 'Tender breast pieces of chicken marinated and grilled till perfection with mild spices, yoghurt saffron, and fresh herbs.', 'a', 7, 1, 0, 'Y', 'Y'),
(8, 'KATHMANDU KO SEKUWA (LAMB / CHICKEN) chilly', 'Slices of chicken or lamb tikka tossed with ginger garlic paste, peppers and mild spices.', 'a', 9, 1, 0, 'Y', 'Y'),
(10, 'PRAWN CAKE', 'Warm water tiger prawns mixed with ginger, garlic, scallions, coriander battered in and deep fried.', 'a', 10, 1, 0, 'Y', 'Y'),
(11, 'GULAFI SHEEKH KEBAB', 'Minced meat of lamb flavoured with mild spices, fresh herbs, coated with chopped peppers, skewered and char grilled.', 'a', 9, 1, 0, 'Y', 'Y'),
(12, 'SHAMI KEBAB', 'SHAMI KEBABDelicacy minced lamb kebab from Kundan house style', 'a', 9, 1, 0, 'Y', 'Y'),
(13, 'LAMB CHOP', 'Succulent rack of lamb overnight marinated in special tandoori sauce & char gilled', 'a', 9, 1, 0, 'Y', 'Y'),
(14, 'TAREKO JHINGA', 'Freshly marinated prawn with garlic battered in and deep fried served in a papad bed.', 'a', 10, 1, 0, 'Y', 'Y'),
(15, 'MO: MO', 'Nepalese famous and delicious mouth watering steamed dumplings stuffed of minced chicken tossed with ginger garlic paste served with home made sauce .(starter for 2 )', 'a', 14, 1, 0, 'Y', 'Y'),
(16, 'DIWALI VEGETERIAN PLATTER FOR 2', 'Assorted vegetarian starters to share', 'a', 13, 1, 0, 'Y', 'Y'),
(17, 'DIWALI MEAT PLATTER FOR 2', 'Assorted meat starters to share', 'a', 16, 1, 0, 'Y', 'Y'),
(18, 'EVEREST SPECIAL SEA FOOD SIZZLER', 'Mixed sea food of Tandoori king prawns, scallops, crab, mussels and the grilled fillet of fish served in sizzling hot plate.', 'a', 18, 1, 0, 'Y', 'Y'),
(19, 'KATHMANDU TANDOORI PRAWNS SIZZLER', 'Jumbo king prawns marinated with Nepalese spice grilled in big clay oven and onion, peppers serve in sizzling hot plate.', 'a', 10, 1, 0, 'Y', 'Y'),
(20, 'RATO BHALEKO SIZZLER', 'Chicken ( on bone ) marinated in yogurt, Nepalese spice and herbs grilled and cooked with home-style onion, peppers, tomato sauce, tossed with fresh spring onion serve in sizzling hot plate.', 'a', 11, 1, 0, 'Y', 'Y'),
(21, 'FEWATAL SCALLOPS SIZZLER', 'Fried scallops tossed with garlic chilly sauce, onion, and bell peppers serve in sizzling hot plate', 'a', 18, 1, 0, 'Y', 'Y'),
(22, 'KUKHURAKO SADA MASU SIZZLER', 'Deep fried cubes of chicken breast in mild spices, tossed with fresh coriander leaves serve in sizzling hot plate', 'a', 15, 1, 0, 'Y', 'Y'),
(23, 'GORKHALI SAG PAT SIZZLER chilly', 'GORKHALI SAG PAT SIZZLER chillyLightly marinated mushroom, aubergine, onion, capsicum, courgette, potatoes, cottage cheese with Himalayan spice cooked in clay oven and serve in sizzling hot plate.', 'a', 14, 1, 0, 'Y', 'Y'),
(24, 'CHICKEN SHASHLIK chilly', 'Mixed platter of King Prawns, tandoori chicken, chicken tikka and gulafi kebab flavoured with brandy. You will feel like your are at the base of mountains.', 'a', 16, 1, 0, 'Y', 'Y'),
(25, 'CHICKEN KEBAB chilly', 'Minced chicken flavoured with mild spices, fresh herbs, coated with chopped peppers, skewered and char grilled', 'a', 16, 1, 0, 'Y', 'Y'),
(26, 'TANDOORI CHICKEN', 'A mouth watering chicken leg/breast piece marinated in yoghurt sauce, tandoori spices, fresh herbs and grilled in clay oven.', 'a', 16, 1, 0, 'Y', 'Y'),
(27, 'HANSKO MASU', 'Minced meat of lamb flavoured with mild spices, fresh herbs, coated with chopped peppers, skewered and char grilled.', 'a', 16, 1, 0, 'Y', 'Y'),
(28, ' GULAFI SEEKH KEBAB chilly', 'Mixed platter of King Prawns, tandoori chicken, chicken tikka and gulafi kebab flavoured with brandy. You will feel like your are at the base of mountains.', 'a', 17, 1, 0, 'Y', 'Y'),
(29, 'MACHHA JHANEKO', 'Medium spiced fish with tomatoes capsicum and Himalayan hurbs serve in sizzling hot plate.', 'a', 17, 1, 0, 'Y', 'Y'),
(30, ' DIWALI SPECIAL MIXED SIZZLER chilly', 'Mixed platter of King Prawns, Tandoori chicken, chicken tikka and gulafi kebab flavoured with brandy. You will feel like you are at base of Himalaya', 'a', 18, 1, 0, 'Y', 'Y'),
(31, ' HIMALAYAN CURRY chilly chilly chilly', 'Traditional Sherpa dish from Himalayan region of Nepal cooked in Himalayan spices with yogurt and coriander.', 'a', 0, 1, 0, 'Y', 'Y'),
(32, 'GARLIC CHILLY MASALA (CHICKEN/LAMB/PRAWN) chilly chilly', 'Breast pieces of chicken / tender pieces of lamb/ Juicy Fresh Water Prawn simmered in garlic chilli sauce and fresh herbs', 'a', 0, 1, 0, 'Y', 'Y'),
(33, 'GORKHALI (CHICKEN/ LAMB/PRAWN) chilly chilly chilly', 'Spicy Nepali dish with yogurt, fresh chillies, coriander, ginger and a touch of garlic.', 'a', 0, 1, 0, 'Y', 'Y'),
(34, 'LEDOBEDO (CHICKEN/ LAMB/PRAWN)', 'Traditional Nepali Curry cooked with creamy sauce, brown onion, tomato sauce in medium spicy.', 'a', 0, 1, 0, 'Y', 'Y'),
(35, 'BABARI MASU CHICKEN/ LAMB chilly', 'Boneless chicken /Tender pieces of lamb cooked in Tandoor and served in rich creamy masala sauce with fresh mint.', 'a', 0, 1, 0, 'Y', 'Y'),
(36, 'MASU SAAG (CHICKEN / LAMB) chilly', 'Tender pieces of chicken/lamb cooked with spinach and fresh herbs.', 'a', 0, 1, 0, 'Y', 'Y'),
(37, 'KUKHURAKO BARI chilly', 'Mince chicken cooked in medium spice and served in rich creamy masala sauce with fresh mint.', 'a', 0, 1, 0, 'Y', 'Y'),
(38, 'KHASI KO MASU', 'A classic lamb curry cooked in a medium spiced onion sauce flavoured with seasonal herbs.', 'a', 0, 1, 0, 'Y', 'Y'),
(39, 'CHICKEN / PRAWN TAKATAK chilly', 'Chicken/Prawn dish from the coastal region of India with seasonal herbs & spices flavoured with white rum', 'a', 0, 1, 0, 'Y', 'Y'),
(40, 'BUTTER CHICKEN', 'Tender pieces of grilled chicken breast slow cooked in cream butter and tomato sauce', 'a', 0, 1, 0, 'Y', 'Y'),
(41, 'CHICKEN JEERA chilly chilly', 'Chicken Tikka cooked with fresh ginger, green chillies and fresh coriander in a garlic dressing with a touch of whole cumin seeds and red wine.', 'a', 0, 1, 0, 'Y', 'Y'),
(42, 'DIWALI SPECIAL MIXED CURRY', 'A mixed chef’s special curry of lamb, chicken and prawn flavoured with fenugreek leaves', 'a', 18, 1, 0, 'Y', 'Y'),
(43, 'TIKKA MASALA', 'Tomato based cream sauce with grounded cashew nuts.', 'a', 0, 1, 0, 'Y', 'Y'),
(44, 'KORMA', 'Mild almond cream sauce sprinkled with ground cardamom and flavoured with rose wate', 'a', 0, 1, 0, 'Y', 'Y'),
(45, 'PASANDA', 'Traditionally made curry of ground almonds, cardamom, tomato and cream', 'a', 0, 1, 0, 'Y', 'Y'),
(46, 'NEPALI ROGAN JOSH chilly', 'Fresh curry prepared with onion, ginger, fresh herbs, mushroom and green peppers', 'a', 0, 1, 0, 'Y', 'Y'),
(47, 'JALFRIZI chilly chilly', 'Slightly sweet and sour curry prepared with the infusion of diced peppers & onions, fresh chopped coriander and finished with the touch of lemon', 'a', 0, 1, 0, 'Y', 'Y'),
(48, 'BHUNA  ', 'A roast dish tossed with red onions, spring onions and fresh garden tomatoes.', 'a', 0, 1, 0, 'Y', 'Y'),
(49, 'DHANSAAK  chilly', 'Chicken breast/ cubes of lamb prepared with lentils and spicy sauce.', 'a', 0, 1, 0, 'Y', 'Y'),
(50, 'KARAHI chilly', 'A parsi speciality cooked with mixed peppers, red onions, ginger and tossed mustard seed.', 'a', 0, 1, 0, 'Y', 'Y'),
(51, 'MADRAS chilly chilly chilly', 'A south indian special curry of curry leaves, coconut powder and tossed muster seeds.', 'a', 0, 1, 0, 'Y', 'Y'),
(52, 'SPECIAL BALTI chilly chilly', 'Traditional Balti dish cooked with chefs special balti sauce, pickled spice, yoghurt and finished with fresh mint.', 'a', 0, 1, 0, 'Y', 'Y'),
(53, 'VINDALU chilly chilly chilly  chilly', 'Spicy sauce created from onion, tomatoes, ginger and fresh grounded chillies.', 'a', 0, 1, 0, 'Y', 'Y'),
(54, 'CHICKEN BIRYANI', 'CHICKEN BIRYANI', 'a', 17, 1, 0, 'Y', 'Y'),
(55, 'LAMB BIRYANI', 'LAMB BIRYANI', 'a', 18, 1, 0, 'Y', 'Y'),
(56, 'VEGETABLE BIRYANI', 'VEGETABLE BIRYANI', 'a', 15, 1, 0, 'Y', 'Y'),
(57, 'PRAWN BIRIYANI', 'PRAWN BIRIYANI', 'a', 19, 1, 0, 'Y', 'Y'),
(58, 'PRAWN BIRIYANI', 'PRAWN BIRIYANI', 'a', 19, 1, 0, 'Y', 'Y'),
(59, 'ALOO BODI TAMA chilly', 'Typical Nepalese Curry cooked with tangy bamboo shoot and seasonalvegetables.', 'a', 7, 1, 0, 'Y', 'Y'),
(60, 'MIX –MAX VEGETABLE', 'Fresh seasonal vegetables prepared in coconut base sauce tempered with cumin seeds.', 'a', 10, 1, 0, 'Y', 'Y'),
(61, 'SAAG PANEER/ ALOO', 'Spinach cooked with tossed cottage cheese/potato and onion sauce.', 'a', 10, 1, 0, 'Y', 'Y'),
(62, 'ALOO GOBI chilly', 'Fresh cauliflowers and potatoes cooked in curry sauce, fresh herbs and spices.', 'a', 10, 1, 0, 'Y', 'Y'),
(63, 'KERAU PANEER', 'Cottage cheese and green peas cooked with creamy tomato sauce and fresh herbs.', 'a', 10, 1, 0, 'Y', 'Y'),
(64, 'BOMBAY ALOO DUM', 'Diced potatoes cooked with brown onions, tomatoes, fresh coriander and ground spices.', 'a', 10, 1, 0, 'Y', 'Y'),
(65, 'EVEREST CHANA MASALA chilly', 'Chick peas simmered in mild curry sauce with shallots, spring onion fresh tomatoes & whole spices.', 'a', 10, 1, 0, 'Y', 'Y'),
(66, 'MUSHROOM BHAJI ', 'Fresh mushrooms stir fried with tomato sauce and red onions', 'a', 10, 1, 0, 'Y', 'Y'),
(67, 'DAAL TARKA', 'Yellow lentils cooked with cumin and tempered with garlic and asafoetida', 'a', 10, 1, 0, 'Y', 'Y'),
(68, 'BOILED RICE', 'BOILED RICE', 'a', 3, 1, 0, 'Y', 'Y'),
(69, 'PULAO RICE', 'PULAO RICE', 'a', 3, 1, 0, 'Y', 'Y'),
(70, 'LEMON RICE', 'LEMON RICE', 'a', 3, 1, 0, 'Y', 'Y'),
(71, 'COCONUT RICE', 'COCONUT RICE', 'a', 3, 1, 0, 'Y', 'Y'),
(72, 'EGG FRIED RICE', 'EGG FRIED RICE', 'a', 4, 1, 0, 'Y', 'Y'),
(73, 'MUSHROOM FRIED RICE', 'MUSHROOM FRIED RICE', 'a', 4, 1, 0, 'Y', 'Y'),
(74, 'PLAIN NAAN', 'PLAIN NAAN', 'a', 3, 1, 0, 'Y', 'Y'),
(75, 'GARLIC NAAN', 'GARLIC NAAN', 'a', 3, 1, 0, 'Y', 'Y'),
(76, 'PESWARI NAAN', 'PESWARI NAAN', 'a', 3, 1, 0, 'Y', 'Y'),
(77, 'GOC (GARLIC, ONION, CORIANDER) NAAN', 'GOC (GARLIC, ONION, CORIANDER) NAAN', 'a', 3, 1, 0, 'Y', 'Y'),
(78, 'CHEESE NAAN', 'CHEESE NAAN', 'a', 3, 1, 0, 'Y', 'Y'),
(79, 'KEEMA NAAN', 'KEEMA NAAN', 'a', 4, 1, 0, 'Y', 'Y'),
(80, 'CHAPATI', 'CHAPATI', 'a', 3, 1, 0, 'Y', 'Y'),
(81, 'TANDOORI ROTI', 'TANDOORI ROTI', 'a', 3, 1, 0, 'Y', 'Y'),
(82, 'STUFFED PARATHA', 'STUFFED PARATHA', 'a', 3, 1, 0, 'Y', 'Y'),
(83, 'CHIPS', 'CHIPS', 'a', 3, 1, 0, 'Y', 'Y'),
(84, 'RAITA', 'RAITA', 'a', 3, 1, 0, 'Y', 'Y'),
(85, 'GREEN SALADi', 'GREEN SALAD', 'me.jpg', 3, 1, 0, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `menu_id` int(3) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) NOT NULL,
  `menu_description` varchar(255) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notify`
--

CREATE TABLE IF NOT EXISTS `tbl_notify` (
  `notify_id` int(3) NOT NULL AUTO_INCREMENT,
  `notify_message` varchar(255) NOT NULL,
  `notfiy_user_cat` varchar(255) NOT NULL,
  `notify_order_id` int(3) NOT NULL,
  PRIMARY KEY (`notify_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` int(3) NOT NULL AUTO_INCREMENT,
  `order_table_id` int(3) NOT NULL,
  `order_item_id` int(3) NOT NULL,
  `order_item_qty` int(3) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_table_id`, `order_item_id`, `order_item_qty`) VALUES
(1, 2, 1, 3),
(2, 6, 2, 3),
(3, 1, 4, 3),
(4, 2, 1, 3),
(6, 5, 5, 1),
(7, 3, 1, 2),
(8, 3, 6, 2),
(9, 3, 2, 5),
(12, 1, 4, 3),
(13, 6, 1, 3),
(14, 2, 3, 2),
(15, 2, 5, 1),
(16, 5, 1, 2),
(17, 5, 6, 2),
(18, 6, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `payment_id` int(3) NOT NULL AUTO_INCREMENT,
  `paid_table_id` int(3) NOT NULL,
  `paid_item_id` int(3) NOT NULL,
  `paid_item_price` int(3) NOT NULL,
  `paid_item_qty` int(3) NOT NULL,
  `paid_total_price` int(3) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE IF NOT EXISTS `tbl_profile` (
  `pro_id` int(3) NOT NULL AUTO_INCREMENT,
  `pro_user_id` int(3) NOT NULL,
  `pro_user_firstname` varchar(255) NOT NULL,
  `pro_user_lastname` varchar(255) NOT NULL,
  `pro_image` varchar(255) NOT NULL,
  `pro_gender` enum('M','F') NOT NULL,
  `pro_contact` int(3) NOT NULL,
  `pro_city` varchar(255) NOT NULL,
  `pro_country` varchar(255) NOT NULL,
  `pro_status` enum('M','U') NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_table`
--

CREATE TABLE IF NOT EXISTS `tbl_table` (
  `table_id` int(3) NOT NULL AUTO_INCREMENT,
  `table_description` varchar(255) NOT NULL,
  `table_seats` int(3) NOT NULL,
  `table_location` varchar(255) NOT NULL,
  `table_image` varchar(255) NOT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_table`
--

INSERT INTO `tbl_table` (`table_id`, `table_description`, `table_seats`, `table_location`, `table_image`) VALUES
(1, 'Table No. 1', 4, 'front - 1st column- 1st row', ''),
(2, 'Table No.2', 4, 'front - 2nd column- 1st row', ''),
(3, 'Table No.3', 4, 'front - 1st column - 2nd row', ''),
(4, 'Table No.4', 4, 'front - 2nd column - 2nd row', ''),
(5, 'Table No.5', 4, 'front - 1st column - 3rd row', ''),
(6, 'Table No. 6', 4, 'front - 2nd column- 3rd row', ''),
(7, 'Table No. 7', 4, 'front - 1st column- 4th row', ''),
(8, 'Table No. 8', 4, 'front - 2nd column - 4th row', ''),
(9, 'Table No. 9', 4, 'front - 1st column - 5th row', ''),
(10, 'Table No. 10', 4, 'front - 2nd column - 5ht row', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tag`
--

CREATE TABLE IF NOT EXISTS `tbl_tag` (
  `tag_id` int(3) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(255) DEFAULT NULL,
  UNIQUE KEY `tag_id` (`tag_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tbl_tag`
--

INSERT INTO `tbl_tag` (`tag_id`, `tag_name`) VALUES
(1, 'resturant menu'),
(2, 'takeaway menu'),
(3, 'lunch menu'),
(4, 'early bird menu'),
(5, 'wine menu'),
(6, 'special set menu'),
(7, 'desert menu'),
(8, 'christmas delights'),
(9, 'Starter''s'),
(10, 'tandoori Specialities'),
(11, 'chef''s Specialities'),
(12, 'all time favourite'),
(13, 'Biriyani'),
(14, 'vegeterain'),
(15, 'accompaniments'),
(16, 'sizzler''s specialities'),
(17, 'sunday'),
(18, 'monday'),
(19, 'tuesday'),
(20, 'wednesday'),
(21, 'thursday'),
(22, 'friday'),
(23, 'saturday'),
(24, 'main course'),
(25, 'desert main'),
(26, 'desert extra'),
(27, 'pouring selection'),
(28, 'white selection'),
(29, 'mountain selection'),
(30, 'red selection'),
(31, 'rose wine'),
(32, 'half bottle'),
(33, 'sparkling options');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_fullname` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_cat_id` varchar(3) NOT NULL,
  `user_status` enum('A','I') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fullname`, `user_username`, `user_password`, `user_email`, `user_cat_id`, `user_status`) VALUES
(1, 'Rajendra Karki', 'admin', 'admin', 'admin@gmail.com', '1', 'A'),
(2, 'Hitech', 'hitech', 'hitech', 'hietch@gmail.com', '2', 'A'),
(3, 'Mahes', 'mahesh', 'mahesh', 'mahesh@gmail.com', '4', 'A'),
(4, 'Anugya Ghimire', 'anguya', 'anugya', 'anugyag@hitechkathmandu.com', '1', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_cat`
--

CREATE TABLE IF NOT EXISTS `tbl_user_cat` (
  `user_cat_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_cat_type` varchar(255) NOT NULL,
  `user_cat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`user_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_user_cat`
--

INSERT INTO `tbl_user_cat` (`user_cat_id`, `user_cat_type`, `user_cat_name`) VALUES
(1, 'Super User', 'Admin'),
(2, 'Editor', 'Editor'),
(4, 'check order', 'Chef');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
