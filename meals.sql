-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 04:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbuddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `uid` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `dscrip` varchar(600) NOT NULL,
  `imglink` varchar(200) NOT NULL,
  `price` varchar(10) NOT NULL,
  `prep_time` int(30) NOT NULL,
  `reviews` int(100) NOT NULL,
  `calories` varchar(255) NOT NULL,
  `ingred` varchar(255) NOT NULL,
  `posppl` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`uid`, `name`, `dscrip`, `imglink`, `price`, `prep_time`, `reviews`, `calories`, `ingred`, `posppl`) VALUES
(1, 'Spicy Maple Glazed Tilapia', 'You’ll give flaky fish fillets a flavorful lift by basting them in the pan with a rich glaze of maple syrup and gochujang—a savory paste made from chiles and fermented soybeans. It all comes together over a robust, hearty mix of brown rice and roasted vegetables.', 'images\\F_img_1.jpg', '15.00', 35, 19, '590', 'images\\ingred_1.jpg', '88'),
(2, 'Hot Truffle Honey White Pizza', 'For this crowd-pleasing pizza, sweet, tender corn and three kinds of cheese—melty fresh mozzarella, creamy ricotta, and fontina—are layered onto our crispy crust. A tangy, punchy sauce made with honey, our earthy truffle zest seasoning, and a touch of red pepper flakes and garnish of aromatic chives adds dynamic flavor. ', 'images/F_img_2.jpg', '12.50', 35, 49, '690', 'images\\ingred_2.jpg', '80'),
(3, 'Shawarma-Spiced Strip Steaks', 'It’s brimming with bold Middle Eastern flavors, thanks to a blend of classic shawarma spices that encrusts our seared steaks, the creamy labneh sauce drizzled on top, and the smoky harissa that dresses a side of barley, vegetables, and dates.', 'images/F_img_3.jpg', '18.99', 45, 38, '990', 'images\\ingred_3.jpg', '91'),
(4, 'Roasted Spaghetti Squash & Crispy Prosciutto', 'To contrast the sweet flavors of our spaghetti squash—a special variety whose flesh transforms into delicate, spaghetti-like strands when cooked—we’re tossing it in a savory fresh tomato sauce and topping it all with crisp prosciutto and rich, soft-boiled eggs.', 'images\\F_img_4.jpg', '12.89', 30, 41, '550', 'images\\ingred_4.jpg', '94'),
(5, 'Seared Steaks & Homemade Steak Sauce', 'To highlight the rich flavors of this dish, you’ll make a homemade steak sauce using classic flavors like Worcestershire, ketchup, vinegar, and more—all cooked in the reserved fond from the steaks for a savory boost of flavor. Sautéed carrots and mashed potatoes (which get extra richness from creamy buttermilk and white cheddar) tie this hearty meal together.', 'images/F_img_5.jpg', '17.49', 45, 44, '740', 'images/ingred_5.jpg', '84');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
