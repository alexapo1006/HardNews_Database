-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Gazda: localhost:3306
-- Timp de generare: 17 Noi 2015 la 20:39
-- Versiune server: 5.6.27
-- Versiune PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Bază de date: `kaviwmxf_request_review`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `CategoryID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(35) NOT NULL,
  `ItemsCount` int(255) unsigned NOT NULL,
  `Area` varchar(35) NOT NULL,
  PRIMARY KEY (`CategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Salvarea datelor din tabel `category`
--

INSERT INTO `category` (`CategoryID`, `CategoryName`, `ItemsCount`, `Area`) VALUES
(1, 'Processors', 5, 'Gaming, Rendering, Daily Use'),
(2, 'Motherboards', 4, 'Gaming, Overclock, Daily Use'),
(3, 'Video Cards', 6, 'Graphic Edit, Rendering, Gaming'),
(4, 'Sound Cards', 1, 'Studio'),
(5, 'Solid State Drives', 1, 'All Suited, Performance'),
(6, 'Power Supplies', 2, 'Professional, High Efficiency'),
(7, 'Cases', 4, 'Gaming, Silent, Cooling'),
(8, 'Monitors', 2, 'Gaming, Graphic Edit'),
(9, 'Mice', 1, 'Gaming'),
(10, 'Tablets', 2, 'Office'),
(11, 'Phones', 2, 'Daily Use');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `ManufacturerID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ManufacturerName` varchar(35) NOT NULL,
  `Address` varchar(35) NOT NULL,
  `MPhoneNo` varchar(20) NOT NULL,
  PRIMARY KEY (`ManufacturerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Salvarea datelor din tabel `manufacturer`
--

INSERT INTO `manufacturer` (`ManufacturerID`, `ManufacturerName`, `Address`, `MPhoneNo`) VALUES
(1, 'EVGA', '1275 Mayer Terrace', '6-(846)116-1318'),
(2, 'Foxconn', '4385 Dovetail Center', '2-(455)437-3229'),
(3, 'Fractal Design', '7579 Artisan Parkway', '7-(207)519-8374'),
(4, 'Gigabyte ', '0018 Clove Plaza', '2-(485)572-2329'),
(5, 'LG', '9155 Lindbergh Way', '0-(423)665-3974'),
(6, 'Intel', '66 Sage Street', '5-(987)354-3026'),
(7, 'In Win', '497 Basil Plaza', '1-(817)464-3842'),
(8, 'Seasonic', '195 Sutteridge Plaza', '6-(697)279-3374'),
(9, 'Samsung', '1 Warbler Street', '5-(675)294-0141'),
(10, 'Lenovo', '739 Dixon Plact', '5-(242)015-9300'),
(11, 'Zotac', '385 Anthes Center', '5-(526)638-4036'),
(12, 'ASRock', '549 Lakeland Point', '9-(465)489-3747'),
(13, 'Asus', '341 Daystar Road', '6-(243)454-0950'),
(14, 'AMD', '14648 Nova Junction', '3-(853)418-7644'),
(15, 'nVidia', '57 Reindahl Points', '7-(723)159-6196');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ProductID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ManufacturerID` int(11) unsigned NOT NULL,
  `CategoryID` int(11) unsigned NOT NULL,
  `ProductName` varchar(35) NOT NULL,
  PRIMARY KEY (`ProductID`),
  KEY `ManufacturerID` (`ManufacturerID`),
  KEY `CategoryID` (`CategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Salvarea datelor din tabel `product`
--

INSERT INTO `product` (`ProductID`, `ManufacturerID`, `CategoryID`, `ProductName`) VALUES
(1, 1, 3, '960GTX'),
(2, 2, 7, 'GM-275'),
(3, 3, 7, '500R '),
(4, 4, 2, 'Z99-UD5'),
(5, 5, 8, 'Z24IN'),
(6, 6, 1, 'i7 5960X '),
(7, 7, 7, 'Stratos '),
(8, 8, 6, 'PSU-800W'),
(9, 9, 5, '800Pro'),
(10, 10, 10, 'IdeaPad '),
(11, 11, 3, 'Titan X '),
(12, 12, 2, 'AM3-C81'),
(13, 13, 4, 'Xonar D'),
(14, 14, 1, 'A10-4750'),
(15, 15, 3, 'Titan Z'),
(16, 4, 2, 'Z97-UD3R'),
(17, 5, 11, 'G3'),
(18, 6, 1, 'i5-3000K'),
(19, 7, 7, 'Dracula'),
(20, 8, 6, 'PSU-450G+'),
(21, 9, 11, 'S6 Edge'),
(22, 9, 8, 'U27-SRP'),
(23, 11, 3, '980GTX'),
(24, 12, 2, 'C21-AM3+'),
(25, 13, 10, 'FonePad'),
(26, 14, 1, 'Bulldozer'),
(27, 15, 3, 'Quadro 600'),
(28, 1, 3, 'Quadro 6500'),
(29, 4, 9, 'GM800'),
(30, 10, 1, 'Phenom x6');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `reader`
--

CREATE TABLE IF NOT EXISTS `reader` (
  `ReaderID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(35) NOT NULL,
  `Email` varchar(254) NOT NULL,
  `PhoneNo` varchar(20) NOT NULL,
  PRIMARY KEY (`ReaderID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Salvarea datelor din tabel `reader`
--

INSERT INTO `reader` (`ReaderID`, `Name`, `Email`, `PhoneNo`) VALUES
(1, 'Lee Donovan', 'Nulla.dignaoriu.Maecenas@Nunc.com', '0941 330 7318'),
(2, 'Mufutau Whitehead', 'orci.lacus@enimnectempus.co.uk', '0800 603 1856'),
(3, 'Nissim Chapman', 'Integer@Nuncacsem.ca', '056 4240 7672'),
(4, 'Raymond Knapp', 'tellus.id@Curabiturmassa.co.uk', '(020) 7851 9621'),
(5, 'Marsden Powers', 'metus@arcuvelquam.net', '0800 334729'),
(6, 'Clarke Petty', 'neque.venenatis.lacus@loremsemperauctor.com', '07624 589204'),
(7, 'Kuame Boyer', 'ac.mi.eleifend@facilisisegetipsum.net', '0800 135756'),
(8, 'Galvin Medina', 'facilisis.lorem.tristique@nunc.ca', '0500 511557'),
(9, 'Justin Nunez', 'feugiat.nec@blanditmattis.net', '(0121) 771 0665'),
(10, 'Walker Peters', 'risus.Nulla@sagittissemper.ca', '07624 417173'),
(11, 'Daquan Rush', 'lacus@ac.edu', '0391 276 5086'),
(12, 'Cade Ruiz', 'eu@Donecest.net', '070 0307 0772'),
(13, 'Omar Gentry', 'interdum.ligula@Nullam.ca', '(016977) 7805'),
(14, 'Demetrius Pacheco', 'eu@vitaealiquet.com', '(025) 1862 8362'),
(15, 'Walter Cantrell', 'a.arcu.Sed@mollis.org', '(01122) 39329'),
(16, 'Richard Sawyer', 'gravida@a.edu', '07584 384357'),
(17, 'Baxter Osborn', 'eu.dolor.egestas@urna.ca', '(01842) 43375'),
(18, 'Tanek Allen', 'eget@ultriciesornare.net', '0800 1111'),
(19, 'Alvin Nelson', 'at.arcu@lectusconvallisest.org', '0845 46 49'),
(20, 'Christian Ray', 'netus.et.malesuada@posuerecubiliaCurae.edu', '(016977) 7759'),
(21, 'Jonas Daniels', 'Pellentesque@magnaLoremipsum.ca', '0500 275475'),
(22, 'Lamar Munoz', 'Quisque.nonummy@dictumeleifendnunc.com', '(0131) 076 5265'),
(23, 'Lucius Munoz', 'lacinia@laoreet.net', '07156 788962'),
(24, 'Carl Armstrong', 'sit.amet.luctus@lacuspedesagittis.ca', '07624 651363'),
(25, 'Caesar Walsh', 'diam@adipiscinglacusUt.net', '070 7884 5124'),
(26, 'Lane Vasquez', 'lacus@Nuncsollicitudincommodo.com', '07005 886018'),
(27, 'Linus Morales', 'non.lobortis@Crasvulputatevelit.com', '(01660) 66643'),
(28, 'Samuel Fernandez', 'dui.nec@parturientmontesnascetur.co.uk', '(016977) 1190'),
(29, 'Theodore Clayton', 'turpis.In.condimentum@lobortisultrices.ca', '(016977) 7697'),
(30, 'Howard Bartlett', 'pellentesque@Nullainterdum.com', '055 1129 2579');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `RequestID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ReaderID` int(11) unsigned NOT NULL,
  `Date` date NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`RequestID`),
  KEY `ReaderID` (`ReaderID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Salvarea datelor din tabel `request`
--

INSERT INTO `request` (`RequestID`, `ReaderID`, `Date`, `Status`) VALUES
(3, 1, '2014-12-23', 1),
(4, 2, '2015-02-04', 1),
(5, 3, '2014-11-25', 1),
(6, 4, '2015-02-14', 1),
(7, 5, '2014-10-18', 1),
(8, 6, '2014-12-31', 1),
(9, 7, '2014-05-20', 1),
(10, 8, '2015-03-27', 1),
(11, 9, '2014-12-02', 1),
(12, 10, '2014-07-11', 1),
(13, 11, '2014-10-09', 1),
(14, 12, '2014-12-11', 1),
(15, 13, '2015-02-10', 1),
(16, 14, '2014-07-23', 1),
(17, 15, '2014-12-17', 1),
(18, 16, '2014-08-09', 1),
(19, 17, '2015-02-18', 1),
(20, 18, '2015-01-15', 1),
(21, 19, '2015-03-19', 1),
(22, 20, '2014-06-16', 1),
(23, 21, '2014-07-17', 1),
(24, 22, '2014-12-22', 1),
(25, 23, '2014-07-16', 0),
(26, 24, '2014-10-24', 0),
(27, 25, '2014-09-05', 0),
(28, 26, '2015-04-02', 0),
(29, 27, '2014-11-19', 0),
(30, 28, '2014-09-13', 0),
(31, 29, '2015-04-05', 0),
(32, 30, '2014-09-18', 0),
(35, 22, '0000-00-00', 0),
(36, 10, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `ReviewID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `RequestID` int(11) unsigned NOT NULL,
  `ProductID` int(11) unsigned NOT NULL,
  PRIMARY KEY (`ReviewID`),
  KEY `RequestID` (`RequestID`),
  KEY `ProductID` (`ProductID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Salvarea datelor din tabel `review`
--

INSERT INTO `review` (`ReviewID`, `RequestID`, `ProductID`) VALUES
(1, 3, 1),
(2, 4, 2),
(3, 5, 3),
(4, 6, 4),
(5, 7, 5),
(6, 8, 6),
(7, 9, 7),
(8, 10, 8),
(9, 11, 9),
(10, 12, 10),
(11, 13, 11),
(12, 14, 12),
(13, 15, 13),
(14, 16, 14),
(15, 17, 15),
(16, 18, 16),
(17, 19, 17),
(18, 20, 18),
(19, 21, 19),
(20, 22, 20),
(21, 23, 21),
(22, 24, 22),
(23, 25, 23),
(24, 26, 24),
(25, 27, 25),
(26, 28, 26),
(27, 29, 27),
(28, 30, 28),
(29, 31, 29),
(30, 32, 30),
(32, 25, 1);

--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ManufacturerID`) REFERENCES `manufacturer` (`ManufacturerID`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`CategoryID`);

--
-- Restrictii pentru tabele `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`ReaderID`) REFERENCES `reader` (`ReaderID`);

--
-- Restrictii pentru tabele `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_3` FOREIGN KEY (`RequestID`) REFERENCES `request` (`RequestID`),
  ADD CONSTRAINT `review_ibfk_4` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
