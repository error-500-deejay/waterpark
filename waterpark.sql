-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Aug 20, 2018 at 06:59 PM
-- Server version: 5.7.21
-- PHP Version: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waterpark`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic`
--

CREATE TABLE `basic` (
  `attribute` varchar(100) NOT NULL,
  `adult` int(20) NOT NULL,
  `child` int(10) NOT NULL,
  `senior` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `basic`
--

INSERT INTO `basic` (`attribute`, `adult`, `child`, `senior`) VALUES
('cost_per_ticket', 300, 225, 150);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offer_id` varchar(20) NOT NULL,
  `offer_code` varchar(5) NOT NULL,
  `offer_percentage` int(11) NOT NULL,
  `multiple_of_tickets` int(11) NOT NULL,
  `minimum_no_of_tickets` int(11) NOT NULL,
  `offer_image` text NOT NULL,
  `offer_name` text NOT NULL,
  `offer_specification` longtext NOT NULL,
  `offer_description` longtext NOT NULL,
  `offer_t&c` longtext NOT NULL,
  `monday` int(11) NOT NULL,
  `tuesday` int(11) NOT NULL,
  `wednesday` int(11) NOT NULL,
  `thursday` int(11) NOT NULL,
  `friday` int(11) NOT NULL,
  `weekend` int(11) NOT NULL,
  `specific date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offer_id`, `offer_code`, `offer_percentage`, `multiple_of_tickets`, `minimum_no_of_tickets`, `offer_image`, `offer_name`, `offer_specification`, `offer_description`, `offer_t&c`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `weekend`, `specific date`) VALUES
('offer2', 'HTK18', 50, 1, 1, 'pics/offers/offer2.png', 'HALL TICKET', 'Hall Ticket Scheme for 10th & 12th students – Avail flat 50% off on entry tickets', 'Hello Students! Here’s a chance to unwind with your friends after the board exams. EsselWorld and Water Kingdom’s Hall Ticket scheme is back on a popular demand. Just flash your current year valid hall ticket and avail the special summer offer of 50% off at EsselWorld or Water Kingdom, exclusively for all 10th and 12th students!!!\r\n\r\nOffer valid from 10th March to 15th April 2018. So don’t forget to carry your present 10th or 12th Hall ticket along with the photocopy of the same and your photo ID proof.<br>\r\n\r\nGet relief from your exam stress and enjoy the adrenaline rush by heading to EsselWorld or Water Kingdom.', 'Same day booking allowed only till 9.00 am\r\n50% discount on current year’s 10th or 12th hall tickets to EsselWorld or Water Kingdom\r\nTo avail this scheme choose any visit date from 10th March to 15th April 2018 and click on Hall Ticket Scheme icon on Step 1 of payment. You need to produce your present year’s 10th or 12th Hall ticket along with the photocopy of the same and your photo id proof during the visit date at ticket counter for smooth entry to any of our parks.\r\nThis scheme is valid only on single park entry ticket to EsselWorld or Water Kingdom\r\n This offer is available offline & online i.e. over the counter, EsselWorld retail kiosk & on our website\r\nThe  scheme will be valid from 10th March to 15th April 2018 (9.00am)\r\nThe offer cannot be clubbed with any of the existing offer running at park & at our retail kiosks\r\nAll other T&Cs apply', 1, 1, 1, 1, 1, 0, 0),
('offer3', 'FUN18', 20, 1, 1, 'pics/offers/offer3.png', 'FUN18 OFFER', 'Welcome the spirit of 2018 and enjoy by availing flat 20% off on regular adult and regular child tickets to EsselWorld or Water Kingdom. To enjoy this offer use promocode FUN18 at step 3 of payment process', 'Scheme Details:\r\n\r\nSame day booking allowed only till 9.00 am\r\nThis scheme is valid for both EsselWorld or Water Kingdom\r\nTo avail this offer FUN18 promo-code needs to be entered in the STEP 3 of the payment process\r\nThis scheme is applicable only on the regular adult & regular child single park entry tickets\r\nThe benefit of the scheme i.e. 20% discount is applicable on single park entry tickets\r\nThe booking of the ticket can only be done till 31st March 2018. (9.00am)\r\n', 'This offer cannot be clubbed or combined with any other offer/ promotion running at our parks\r\nNo two schemes can be combined together\r\nThis offer is not valid on any other on any other tickets i.e Combined, Annual Passport or Super Saver Car Combos.\r\nEntry ticket includes entry and access to rides/slides\r\nLoose or Torn e-ticket will not be accepted (if the name of the guest is not reflecting properly)\r\nSelling of tickets/coupons is not permissible and is a fraudulent practice and a crime\r\nThe management reserves the right to withdraw this scheme at any point in time\r\nGeneric T&Cs apply', 1, 1, 1, 1, 1, 0, 0),
('offer4', 'FFR18', 50, 2, 2, 'pics/offers/offer4.png', 'FREAKOUT FRIDAY', 'Water Kingdom brings you a perfect way to de-stress yourself from your regular routine lifestyle.\r\n Buy One Get One FREE on single park entry tickets to Water Kingdom. \r\nThe ticket is valid for atleast 2 Tickets.\r\nMake your Freakout Fridays memorable and enjoy the water park with your loved ones..', 'Buy One Get One FREE on single park entry tickets to Water Kingdom.\r\nThis offer is valid on Adult & Child Single Entry Park tickets (not valid for Sr. Citizen).\r\nThis scheme is valid only on Fridays of the month.\r\nThis scheme is valid for Water Kingdom.\r\nSame day booking can be done only till 9.00 am.\r\nThis scheme is available only online and is not available across the ticket counters at the park.\r\nGuest needs to carry the complete e-ticket at the counter to get the entry ticket to the parks.\r\nGeneric T&Cs will apply.', 'The offer is valid only on adult & child tickets and not applicable on Sr. Citizen Ticket\r\n\r\nThis offer cannot be clubbed or combined with any other offer/promotion running at the park\r\n\r\nEntry ticket includes entry and unlimited access to all rides & slides\r\n\r\nFerry ticket, Paid attractions, F&B, Lockers & other services comes with extra cost\r\nLoose or Torn e-ticket will not be accepted (if the name of the guest is not reflecting properly)\r\n\r\nGuest need to carry their complete e-ticket i.e. along with the T&C pages\r\nThis scheme cannot be exchange for cash\r\n\r\nNo two schemes can be combined together\r\n\r\nSelling of tickets/coupons is not permissible and is a fraudulent practice and a crime\r\n\r\nAll rights reserved with management\r\n\r\nLimited time period offer\r\n\r\nOther conditions apply', 0, 0, 0, 0, 1, 0, 0),
('offer5', 'HBC18', 20, 5, 5, 'pics/offers/offer5.png', 'HAPPY BIRTHDAY OFFER', 'Free ticket for you! If it’s your Birthday\r\n\r\nIts time you celebrate your birthday in a different way. Let’s get out of our home and be adventurous. \r\nRelive your childhood memories & be thrilled over EsselWorld rides and Water Kingdom slides and attractions.\r\n Get your gang and celebrate your special day at our parks.\r\n Make your birthday a memorable one by celebrating with your family & friends at EsselWorld/Water Kingdom or just enjoy both the park with our combined ticket', 'Same day booking allowed only till 9.00 am\r\nThe Happy Birthday offer allows a free entry to the Birthday Girl/Boy. The group accompanying the Birthday Girl/Boy needs to book ticket.\r\nTo avail this offer the Birthday Girl/Boy needs to visit the park on their date of birthday\r\nTo avail this offer for a child’s birthday HBC17 promo-code needs to be entered in the STEP 3 of the payment process. To avail this offer for adult’s birthday HBA17 promo-code needs to be entered in the STEP 3 of the payment process. After entering the promo-code, it will automatically deduct 1 ticket cost at ‘Zero Value’. For example: A person books 5 tickets, 1 ticket will be free and he/she would be charged for rest 4 tickets. This will be validated after he/she enters the promo-code.\r\nTo avail this offer the Birthday Girl/Boy needs to carry original valid Govt. approved photo ID clearly mentioning date of birth as proof. In case the visitor fails to produce the original ID card at the park, he/she has to pay the difference amount on the spot.\r\nNo two offers may be combined', 'Printout of e-voucher or on mobile hand set is mandatory along with the photo id proof and photo copy of the same.\r\nOffer cannot be clubbed or combined with any other scheme / promotion running at the park\r\nTo avail this offer the Birthday Girl/Boy needs to visit the park on their date of birthday\r\nEntry ticket includes entry and unlimited access to all rides/slides\r\nFerry ticket, paid attractions, F&B, lockers & other services cost extra\r\nLoose or torn coupon will not be accepted\r\nSelling of tickets/coupons is not permissible and is a fraudulent practice and a crime\r\nManagement reserves the right to admission\r\nThe management reserves the right to withdraw this scheme at any point in time', 1, 1, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `firstname` varchar(15) NOT NULL DEFAULT 'N.A',
  `lastname` varchar(15) DEFAULT 'N.A',
  `userid` varchar(20) NOT NULL,
  `address` varchar(150) NOT NULL DEFAULT 'N.A',
  `city` varchar(10) NOT NULL DEFAULT 'N.A',
  `pincode` int(6) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `spassword` varchar(12) NOT NULL DEFAULT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`firstname`, `lastname`, `userid`, `address`, `city`, `pincode`, `phone`, `spassword`) VALUES
('A', 'A', '12@34', 'V', 'S', 400703, 1234567896, '123456'),
('A', 'A', '12A@34', 'V', 'S', 400703, 1234567896, 'DJ2765'),
('A', 'A', '12SDFGHJKKBFVBN@34', 'V', 'S', 400703, 1234567896, '1234567'),
('DJ', 'G', 'g1@g.com', 'VASHI', 'Mumbai', 400703, 1234567890, '123456'),
('Mickey', 'Mouse', 'g4@g.com', 'qwertyuiopasdfghjklzxcvbnmqwertyuiopasdfghjklzxcvb', 'Mumbai', 400111, 1234567890, 'DJ27651221'),
('Dhananjay ', 'Gadakh', 'g@g.com', 'Mumbai', 'Mumbai', 400111, 2147483647, '123456'),
('A', 'A', 'g@g1S.com', 'V', 'S', 400703, 1234567896, 'DJ27651221'),
('a', 'a', 'g@gh.com', 'VASHI', 'V', 234567, 1010101111, '123456'),
('Dhananjay ', 'g', 'ghj@g.com', 'g', 'f', 400703, 1234567490, 'DJ27651221'),
('RESHMA ', 'VARTAK', 'Reshma.var@gmail.com', 'thane', 'thane', 400604, 2147483647, 'reshma');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subscriber_id` int(11) NOT NULL,
  `email_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subscriber_id`, `email_id`) VALUES
(1, 'gad@gmsil.com'),
(2, 'a@g.c'),
(3, 'b@c.c'),
(4, 'd@d.d'),
(5, 'gad@gmsil.com'),
(6, 'f@g.co'),
(7, 'f@g.co'),
(8, 'f@g.co'),
(9, 'gad@gmsil.com'),
(10, 'gadakh.dhananjay3@gmail.com'),
(11, 'gadakh.dhananjay3@gmail.com'),
(12, 'gadakh.dhananjay3@gmail.com'),
(13, 'gadakh.dhananjay3@gmail.com'),
(14, 'gadakh.dhananjay3@gmail.com'),
(15, ''),
(16, 'gad@gmsil.com'),
(17, 'gadakh.dhananjay3@gmail.com'),
(18, 'gadakh.dhananjay3@gmail.com'),
(19, 'gadakh.dhananjay3@gmail.com'),
(20, 'gadakh.dhananjay3@gmail.com'),
(21, 'gadakh.dhananjay3@gmail.com'),
(22, 'gadakh.dhananjay3@gmail.com'),
(23, 'gadakh.dhananjay3@gmail.com'),
(24, 'gadakh.dhananjay3@gmail.com'),
(25, 'gadakh.dhananjay3@gmail.com'),
(26, 'gadakh.dhananjay3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `trans_id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `phone` int(10) NOT NULL,
  `noofadult` int(10) NOT NULL,
  `dbadultcost` int(10) NOT NULL,
  `totaladultcost` int(10) NOT NULL,
  `noofchild` int(10) NOT NULL,
  `dbchildcost` int(50) NOT NULL,
  `totalchildcost` int(10) NOT NULL,
  `noofsenior` int(10) NOT NULL,
  `dbseniorcost` int(10) NOT NULL,
  `totalseniorcost` int(50) NOT NULL,
  `totalcost` int(50) NOT NULL,
  `offer_id` varchar(50) NOT NULL,
  `offer_name` varchar(50) NOT NULL,
  `offer_code` varchar(50) NOT NULL,
  `dboffer_percentage` float NOT NULL,
  `date` varchar(50) NOT NULL,
  `totalpayablecost` int(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`trans_id`, `firstname`, `userid`, `address`, `city`, `pincode`, `phone`, `noofadult`, `dbadultcost`, `totaladultcost`, `noofchild`, `dbchildcost`, `totalchildcost`, `noofsenior`, `dbseniorcost`, `totalseniorcost`, `totalcost`, `offer_id`, `offer_name`, `offer_code`, `dboffer_percentage`, `date`, `totalpayablecost`, `status`) VALUES
(55, 'Dhananjay ', 'g@g2.com', 'Mumbai', 'Mumbai', 400111, 2147483647, 1, 275, 275, 0, 200, 0, 0, 150, 0, 275, 'offer1', '#TGI Long Week End', 'LWE18', 33, '2018-04-12 22:00:30.416020', 275, 0),
(60, 'Dhananjay ', 'g@g3.com', 'Mumbai', 'Mumbai', 400111, 2147483647, 3, 275, 825, 0, 200, 0, 0, 150, 0, 825, 'offer2', 'HALL TICKET', 'HTK18', 50, '2018-04-12 22:00:30.450773', 413, 0),
(64, 'Dhananjay ', 'g@g1.com', 'Mumbai', 'Mumbai', 400111, 2147483647, 3, 275, 825, 0, 200, 0, 0, 150, 0, 825, 'offer2', 'HALL TICKET', 'HTK18', 50, '2018-04-12 22:00:30.469978', 413, 0),
(67, 'Dhananjay ', 'g@g3.com', 'Mumbai', 'Mumbai', 400111, 2147483647, 1, 275, 275, 0, 200, 0, 0, 150, 0, 275, 'offer3', 'FUN18 OFFER', 'FUN18', 20, '2018-04-12 22:00:30.484329', 220, 0),
(74, 'Dhananjay ', 'g@g4.com', 'Mumbai', 'Mumbai', 400111, 2147483647, 4, 275, 1100, 0, 200, 0, 0, 150, 0, 1100, 'offer2', 'HALL TICKET', 'HTK18', 50, '04/12/2018', 550, 0),
(100, 'Dhananjay ', 'g@g.com', 'Mumbai', 'Mumbai', 400111, 2147483647, 3, 275, 825, 1, 200, 200, 3, 150, 450, 1475, 'offer2', 'HALL TICKET', 'HTK18', 50, '04/14/2018', 738, 0),
(101, 'Dhananjay ', 'g@g.com', 'Mumbai', 'Mumbai', 400111, 2147483647, 1, 275, 275, 7, 200, 1400, 0, 150, 0, 1675, 'offer3', 'FUN18 OFFER', 'FUN18', 20, '04/14/2018', 1340, 1),
(102, 'Dhananjay ', 'g@g.com', 'Mumbai', 'Mumbai', 400111, 2147483647, 2, 275, 550, 0, 200, 0, 0, 150, 0, 550, 'offer2', 'HALL TICKET', 'HTK18', 50, '04/14/2018', 275, 1),
(103, 'Dhananjay ', 'g@g.com', 'Mumbai', 'Mumbai', 400111, 2147483647, 1, 275, 275, 1, 200, 200, 0, 150, 0, 475, 'offer3', 'FUN18 OFFER', 'FUN18', 20, '04/14/2018', 380, 1),
(104, 'Dhananjay ', 'g@g.com', 'Mumbai', 'Mumbai', 400111, 2147483647, 1, 275, 275, 0, 200, 0, 0, 150, 0, 275, 'offer3', 'FUN18 OFFER', 'FUN18', 20, '04/14/2018', 220, 0),
(105, 'Dhananjay ', 'g@g.com', 'Mumbai', 'Mumbai', 400111, 2147483647, 1, 275, 275, 2, 200, 400, 0, 150, 0, 675, 'offer3', 'FUN18 OFFER', 'FUN18', 20, '04/20/2018', 540, 0),
(106, 'DJ', 'g1@g.com', 'VASHI', 'Mumbai', 400703, 1234567890, 1, 275, 275, 0, 200, 0, 0, 150, 0, 275, 'offer3', 'FUN18 OFFER', 'FUN18', 20, '04/23/2018', 220, 1),
(107, 'DJ', 'g1@g.com', 'VASHI', 'Mumbai', 400703, 1234567890, 3, 300, 900, 0, 225, 0, 0, 150, 0, 900, 'offer2', 'HALL TICKET', 'HTK18', 50, '04/23/2018', 450, 1),
(108, 'DJ', 'g1@g.com', 'VASHI', 'Mumbai', 400703, 1234567890, 3, 300, 900, 0, 225, 0, 0, 150, 0, 900, 'offer3', 'FUN18 OFFER', 'FUN18', 20, '04/24/2018', 900, 1),
(109, 'Dhananjay ', 'g@g.com', 'Mumbai', 'Mumbai', 400111, 2147483647, 2, 300, 600, 0, 225, 0, 0, 150, 0, 600, 'offer2', 'HALL TICKET', 'HTK18', 50, '04/24/2018', 300, 1),
(110, 'Dhananjay ', 'g@g.com', 'Mumbai', 'Mumbai', 400111, 2147483647, 1, 300, 300, 0, 225, 0, 0, 150, 0, 300, 'offer3', 'FUN18 OFFER', 'FUN18', 20, '04/24/2018', 240, 0),
(111, 'Dhananjay ', 'g@g.com', 'Mumbai', 'Mumbai', 400111, 2147483647, 5, 300, 1500, 0, 225, 0, 0, 150, 0, 1500, 'offer2', 'HALL TICKET', 'HTK18', 50, '20/08/2018', 750, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`trans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscriber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `trans_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
