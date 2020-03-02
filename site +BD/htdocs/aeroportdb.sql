-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Dec 2016 la 18:23
-- Versiune server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aeroportdb`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `calatorii`
--

CREATE TABLE `calatorii` (
  `id_calatorie` int(11) NOT NULL,
  `id_cursa` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_transport` int(11) NOT NULL,
  `tip_calatorie` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `taxa_adit` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `calatorii`
--

INSERT INTO `calatorii` (`id_calatorie`, `id_cursa`, `id_client`, `id_transport`, `tip_calatorie`, `taxa_adit`) VALUES
(1, 1, 1, 1, 'Public', '33'),
(2, 2, 1, 2, 'Privat', '51'),
(3, 4, 2, 3, 'Public', '50'),
(4, 4, 3, 4, 'Public', '40'),
(5, 4, 4, 4, 'Public', '40'),
(6, 4, 5, 4, 'Public', '40'),
(7, 1, 6, 1, 'Privat', '31'),
(8, 5, 7, 5, 'Public', '33'),
(9, 5, 8, 5, 'Public', '33'),
(10, 6, 9, 8, 'Privat', '42'),
(11, 7, 7, 10, 'Public', '54'),
(12, 5, 10, 5, 'Public', '33'),
(13, 8, 11, 11, 'Public', '48'),
(14, 9, 12, 12, 'Privat', '56'),
(15, 10, 13, 13, 'Public', '54'),
(16, 11, 14, 15, 'Privat', '76'),
(18, 13, 16, 8, 'Public', '32'),
(19, 14, 8, 5, 'Public', '57'),
(20, 15, 7, 2, 'Public', '88'),
(21, 16, 5, 4, 'Public', '46'),
(22, 4, 4, 3, 'Privat', '76'),
(23, 16, 11, 4, 'Public', '46'),
(24, 16, 6, 4, 'Public', '46'),
(25, 11, 12, 15, 'Privat', '76'),
(26, 6, 10, 8, 'Privat', '42'),
(27, 10, 15, 13, 'Public', '54'),
(28, 9, 13, 12, 'Privat', '56'),
(29, 10, 9, 11, 'Privat', '69'),
(30, 8, 10, 16, 'Privat', '2');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `clienti`
--

CREATE TABLE `clienti` (
  `id_client` int(11) NOT NULL,
  `nume_client` varchar(100) CHARACTER SET utf8 NOT NULL,
  `telefon` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `clienti`
--

INSERT INTO `clienti` (`id_client`, `nume_client`, `telefon`, `email`) VALUES
(1, 'Ursu Cristian', '37369457220', 'ursu.cristi@mail.md'),
(2, 'Zavadschi Vitaliie', '37378554216', 'zavadschi.v@mail.md'),
(3, 'Mardari Anatol', '37368265333', 'mardari.tolea@gmail.com'),
(4, 'Popescu Cristina', '37378065432', 'pp@gmail.com'),
(5, 'Ionascu Gheorghe', '37368412374', 'ionascu.g@mail.md'),
(6, 'Ciorba Snejana', '37368023856', 'ciorba.sn@gmail.com'),
(7, 'Iordachi Cristian', '37378142359', 'iordachi.cristian@mail.md'),
(8, 'Andronic Alin', '37369259712', 'andronic.alin@mail.md '),
(9, 'Bratu Ilie', '37368156983', 'bratu_ilie@mail.md'),
(10, 'Istratii Corina', '37368176589', 'istratii.c@mail.md'),
(11, 'Becali Ion', '37369242198', 'ion.becali@mail.md'),
(12, 'Rusu Vasile', '37379254712', 'rusu.vasile@mail.md'),
(13, 'Manole Ana', '37360041276', 'manole.ana@mail.md'),
(14, 'Stratulat Alexandru', '37369267678', 'stratulat.a@mail.md'),
(15, 'Barbarosie Andrei', '37368134567', 'barbarosie.andrei@mail.md'),
(16, 'Turcan Alexandru', '37368098765', 'turcan.alex@mail.md');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `curse`
--

CREATE TABLE `curse` (
  `id_cursa` int(11) NOT NULL,
  `p_pornire` varchar(50) CHARACTER SET utf8 NOT NULL,
  `destinatie` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cost` int(11) NOT NULL,
  `timp_zbor` time NOT NULL,
  `tip` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `curse`
--

INSERT INTO `curse` (`id_cursa`, `p_pornire`, `destinatie`, `cost`, `timp_zbor`, `tip`) VALUES
(1, 'Chisinau', 'Iasi', 10000, '00:40:00', 'local'),
(2, 'Chisinau', 'Drasliceni', 5003, '03:00:00', 'international'),
(3, 'Chisinau', 'Briceni', 5000, '00:30:00', 'local'),
(4, 'Chisinau', 'Bucuresti', 7001, '01:00:00', 'local'),
(5, 'Chisinau', 'Turcia', 13000, '01:50:00', 'international'),
(6, 'Chisinau', 'Kemer', 12000, '01:45:00', 'international'),
(7, 'Chisinau', 'Venezia', 14500, '01:30:00', 'international'),
(8, 'Chisinau', 'New York', 40000, '04:00:00', 'international'),
(9, 'Chisinau', 'Padova', 28000, '02:00:00', 'international'),
(10, 'Chisinau', 'Parma', 29300, '02:10:00', 'international'),
(11, 'Chisinau', 'Balti', 6000, '00:35:00', 'local'),
(12, 'Chisinau', 'Cluj', 10000, '01:00:00', 'local'),
(13, 'Chisinau', 'Kiev', 12000, '01:20:00', 'local'),
(14, 'Chisinau', 'Dubai', 28000, '02:30:00', 'international'),
(15, 'Chisinau', 'Chicago', 30000, '02:40:00', 'international'),
(16, 'Chisinau', 'Moscow', 20000, '01:20:00', 'international'),
(17, 'Chisinau', 'Paris', 25000, '03:10:00', 'international'),
(18, 'Drasliceni', 'Chisinau', 501, '00:00:03', 'local'),
(19, 'Drasliceni', 'New York', 10002, '00:07:20', 'international');

-- --------------------------------------------------------

--
-- Stand-in structure for view `datecalatorii`
--
CREATE TABLE `datecalatorii` (
`id_calatorie` int(11)
,`p_pornire` varchar(50)
,`destinatie` varchar(50)
,`nume_client` varchar(100)
,`denumire` varchar(50)
,`tip_calatorie` varchar(50)
,`TAXA` decimal(47,4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `datecalatorii1`
--
CREATE TABLE `datecalatorii1` (
`id_calatorie` int(11)
,`p_pornire` varchar(50)
,`destinatie` varchar(50)
,`nume_client` varchar(100)
,`denumire` varchar(50)
,`tip_calatorie` varchar(50)
,`taxa_adit` decimal(10,0)
);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `logare`
--

CREATE TABLE `logare` (
  `id` int(11) NOT NULL,
  `login` varchar(20) CHARACTER SET utf8 NOT NULL,
  `parola` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `activ` int(11) DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `logare`
--

INSERT INTO `logare` (`id`, `login`, `parola`, `activ`, `email`) VALUES
(1, 'dumitru1', 'boaghi1', 0, 'boaghid@gmail.com');

-- --------------------------------------------------------

--
-- Stand-in structure for view `nrcalatorii_clienti`
--
CREATE TABLE `nrcalatorii_clienti` (
`nume_client` varchar(100)
,`telefon` varchar(30)
,`email` varchar(30)
,`Numarul de calatorii` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `nrcalatorii_curse`
--
CREATE TABLE `nrcalatorii_curse` (
`p_pornire` varchar(50)
,`destinatie` varchar(50)
,`cost` int(11)
,`timp_zbor` time
,`Numarul de calatorii` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `nrcalatorii_transport`
--
CREATE TABLE `nrcalatorii_transport` (
`denumire` varchar(50)
,`tip_transport` varchar(15)
,`stare` varchar(10)
,`rol` varchar(25)
,`Numarul de calatorii` bigint(21)
);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `transport`
--

CREATE TABLE `transport` (
  `id_transport` int(11) NOT NULL,
  `denumire` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tip_transport` varchar(15) CHARACTER SET utf8 NOT NULL,
  `anul_prod` int(11) DEFAULT NULL,
  `pret` int(11) DEFAULT NULL,
  `stare` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `rol` varchar(25) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `transport`
--

INSERT INTO `transport` (`id_transport`, `denumire`, `tip_transport`, `anul_prod`, `pret`, `stare`, `rol`) VALUES
(1, 'Cessna 670', 'Elicopter', 2005, 3000000, 'activ', 'pasagerial'),
(2, 'Cessna 680', 'Avion', 2010, 3000000, 'activ', 'pasagerial'),
(3, 'Gulfstream IV', 'Avion', 2009, 36000000, 'neactiv', 'marfa'),
(4, 'Ultrausor Mosquito XE', 'Elicopter', 2007, 55004, 'activ', 'pasagerial'),
(5, 'Airbus A380', 'Avion', 2005, 11000000, 'activ', 'pasagerial'),
(6, 'Boeing 747', 'Avion', 2007, 45000000, 'neactiv', 'pasagerial'),
(7, 'Antonov AN-124', 'Elicopter', 2008, 20000000, 'neactiv', 'marfa'),
(8, 'Airbus A319', 'Avion', 2006, 32000000, 'activ', 'marfa'),
(9, 'Boeing B777', 'Avion', 2009, 43000000, 'neactiv', 'pasagerial'),
(10, 'Bombardier CRJ700', 'Avion', 2010, 34000000, 'activ', 'marfa'),
(11, 'Ilyusin IL86', 'Avion', 2007, 56000000, 'neactiv', 'pasagerial'),
(12, 'Ilyusin IL89', 'Avion', 2003, 24000000, 'activ', 'pasagerial'),
(13, 'Tupolev TU204', 'Avion', 2004, 31000000, 'activ', 'pasagerial'),
(14, 'Tupolev TU214', 'Elicopter', 2007, 27000000, 'neactiv', 'pasagerial'),
(15, 'SAAB 2000', 'Elicopter', 2010, 56000000, 'activ', 'marfa'),
(16, 'Ilyusin IL96', 'Avion', 2013, 76000000, 'activ', 'pasagerial'),
(17, ' Tupolev TU334', 'Elicopter', 2014, 70000000, 'neactiv', 'marfa');

-- --------------------------------------------------------

--
-- Structură pentru vizualizare `datecalatorii`
--
DROP TABLE IF EXISTS `datecalatorii`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datecalatorii`  AS  select `d`.`id_calatorie` AS `id_calatorie`,`a`.`p_pornire` AS `p_pornire`,`a`.`destinatie` AS `destinatie`,`b`.`nume_client` AS `nume_client`,`c`.`denumire` AS `denumire`,`d`.`tip_calatorie` AS `tip_calatorie`,sum((((`d`.`taxa_adit` / 100) + 1) * `a`.`cost`)) AS `TAXA` from (((`curse` `a` join `clienti` `b`) join `transport` `c`) join `calatorii` `d`) where ((`a`.`id_cursa` = `d`.`id_cursa`) and (`b`.`id_client` = `d`.`id_client`) and (`c`.`id_transport` = `d`.`id_transport`)) group by `d`.`id_calatorie`,`a`.`p_pornire`,`a`.`destinatie`,`b`.`nume_client`,`c`.`denumire`,`d`.`tip_calatorie` order by `d`.`id_calatorie` ;

-- --------------------------------------------------------

--
-- Structură pentru vizualizare `datecalatorii1`
--
DROP TABLE IF EXISTS `datecalatorii1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datecalatorii1`  AS  select `d`.`id_calatorie` AS `id_calatorie`,`a`.`p_pornire` AS `p_pornire`,`a`.`destinatie` AS `destinatie`,`b`.`nume_client` AS `nume_client`,`c`.`denumire` AS `denumire`,`d`.`tip_calatorie` AS `tip_calatorie`,`d`.`taxa_adit` AS `taxa_adit` from (((`curse` `a` join `clienti` `b`) join `transport` `c`) join `calatorii` `d`) where ((`a`.`id_cursa` = `d`.`id_cursa`) and (`b`.`id_client` = `d`.`id_client`) and (`c`.`id_transport` = `d`.`id_transport`)) order by `d`.`id_calatorie` ;

-- --------------------------------------------------------

--
-- Structură pentru vizualizare `nrcalatorii_clienti`
--
DROP TABLE IF EXISTS `nrcalatorii_clienti`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nrcalatorii_clienti`  AS  select `clienti`.`nume_client` AS `nume_client`,`clienti`.`telefon` AS `telefon`,`clienti`.`email` AS `email`,count(0) AS `Numarul de calatorii` from (`clienti` join `calatorii` on((`clienti`.`id_client` = `calatorii`.`id_client`))) group by `clienti`.`nume_client`,`clienti`.`telefon`,`clienti`.`email` having (count(0) >= 1) ;

-- --------------------------------------------------------

--
-- Structură pentru vizualizare `nrcalatorii_curse`
--
DROP TABLE IF EXISTS `nrcalatorii_curse`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nrcalatorii_curse`  AS  select `curse`.`p_pornire` AS `p_pornire`,`curse`.`destinatie` AS `destinatie`,`curse`.`cost` AS `cost`,`curse`.`timp_zbor` AS `timp_zbor`,count(0) AS `Numarul de calatorii` from (`curse` join `calatorii` on((`curse`.`id_cursa` = `calatorii`.`id_cursa`))) group by `curse`.`p_pornire`,`curse`.`destinatie`,`curse`.`cost`,`curse`.`timp_zbor` having (count(0) >= 1) ;

-- --------------------------------------------------------

--
-- Structură pentru vizualizare `nrcalatorii_transport`
--
DROP TABLE IF EXISTS `nrcalatorii_transport`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nrcalatorii_transport`  AS  select `transport`.`denumire` AS `denumire`,`transport`.`tip_transport` AS `tip_transport`,`transport`.`stare` AS `stare`,`transport`.`rol` AS `rol`,count(0) AS `Numarul de calatorii` from (`transport` join `calatorii` on((`transport`.`id_transport` = `calatorii`.`id_transport`))) group by `transport`.`denumire`,`transport`.`tip_transport`,`transport`.`stare`,`transport`.`rol` having (count(0) >= 1) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calatorii`
--
ALTER TABLE `calatorii`
  ADD PRIMARY KEY (`id_calatorie`),
  ADD KEY `fkey` (`id_cursa`),
  ADD KEY `fkey2` (`id_client`),
  ADD KEY `fkey3` (`id_transport`);

--
-- Indexes for table `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `curse`
--
ALTER TABLE `curse`
  ADD PRIMARY KEY (`id_cursa`);

--
-- Indexes for table `logare`
--
ALTER TABLE `logare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id_transport`);

--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `calatorii`
--
ALTER TABLE `calatorii`
  ADD CONSTRAINT `fkey` FOREIGN KEY (`id_cursa`) REFERENCES `curse` (`id_cursa`),
  ADD CONSTRAINT `fkey2` FOREIGN KEY (`id_client`) REFERENCES `clienti` (`id_client`),
  ADD CONSTRAINT `fkey3` FOREIGN KEY (`id_transport`) REFERENCES `transport` (`id_transport`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
