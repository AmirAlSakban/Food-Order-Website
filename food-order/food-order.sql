

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE DATABASE IF NOT EXISTS `food-order` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `food-order`;


CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(12, 'Blaise S', 'blaisesss', '1ad39eef9c0fc09f0d412aad0133efad'),
(13, 'Max Hodkiewicz', 'Kelly_Ankunding40', '24747179155f218dd4fcc240ffffba37'),
(16, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b'),
(19, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(20, 'Amir', 'Amir', '63eefbd45d89e8c91f24b609f7539942');

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(10, 'pizza', 'Food_Category_162.jpg', 'Yes', 'Yes'),
(12, 'momo', 'Food_Category_553.jpg', 'Yes', 'Yes'),
(13, 'burger', 'Food_Category_662.jpg', 'Yes', 'Yes');


CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(3, 'Legacy Interactions Planner', 'Eos rem ratione nihil.', '472', '', 6, 'No', 'Yes'),
(4, 'Corporate Web Agent', 'Et natus eius voluptas est dolore aliquam iure magni.', '517', '', 6, 'No', 'Yes'),
(5, 'Investor Usability Liaison', 'Sunt qui molestiae ut non molestiae velit hic accusantium vel.', '254', '', 1, 'No', 'Yes'),
(6, 'mmm', 'Mmm', '557', '', 7, 'No', 'No'),
(7, 'Dumplings', 'Chicken dumpling.', '499', 'Food-Name-802.jpg', 0, 'Yes', 'Yes'),
(8, 'Senior Implementation Analyst', 'Mollitia id natus voluptas quod architecto iure voluptatem perspiciatis.', '315', '', 7, 'No', 'Yes'),
(9, 'Product Data Liaison', 'Voluptatem rem odit.', '564', '', 1, 'Yes', 'No'),
(10, 'Margherita', 'The most exquisite pizza from our selection', '99', 'Food-Name-5094.jpg', 10, 'Yes', 'Yes'),
(11, 'Burger', 'Largest burger in downtown', '899', 'Food-Name-2927.jpg', 13, 'Yes', 'Yes');


CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_adress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_adress`) VALUES
(1, 'Burger', '899', 3, '2697', '2022-01-23 12:25:04', 'Delivered', 'Lisandro Keebler', '594-504-5543', 'your.email+fakedata95487@gmail.com', '906 Kub Point'),
(2, 'Dumplings', '499', 6, '2994', '2022-01-23 12:30:46', 'Ordered', 'Ericka Thiel', '481-217-8771', 'your.email+fakedata67613@gmail.com', '524 Funk Road');

ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
