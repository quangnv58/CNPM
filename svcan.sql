-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2015 at 05:32 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `svcan`
--
CREATE DATABASE IF NOT EXISTS `svcan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `svcan`;

-- --------------------------------------------------------

--
-- Table structure for table `svc_comment`
--

CREATE TABLE IF NOT EXISTS `svc_comment` (
  `idcomment` int(255) NOT NULL AUTO_INCREMENT COMMENT 'id comment',
  `idaccount` int(255) NOT NULL COMMENT 'id tai khoan',
  `content` text NOT NULL COMMENT 'noi dung comment',
  `time` time NOT NULL COMMENT 'thoi gian comment',
  `belongPost` int(11) NOT NULL,
  `belongUser` text NOT NULL,
  PRIMARY KEY (`idcomment`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `svc_comment`
--

INSERT INTO `svc_comment` (`idcomment`, `idaccount`, `content`, `time`, `belongPost`, `belongUser`) VALUES
(20, 0, '', '00:00:00', 50, 'admin'),
(19, 0, '', '00:00:00', 50, 'admin'),
(18, 0, '', '00:00:00', 50, 'admin'),
(17, 0, 'uk', '00:00:00', 50, 'admin'),
(16, 0, '1', '00:00:00', 49, 'admin'),
(15, 0, '1', '00:00:00', 49, 'admin'),
(14, 0, 'ok', '00:00:00', 48, 'taikhoan1'),
(13, 0, 'Tá»‘t', '00:00:00', 49, 'taikhoan1');

-- --------------------------------------------------------

--
-- Table structure for table `svc_employer`
--

CREATE TABLE IF NOT EXISTS `svc_employer` (
  `idrecruitment` int(255) NOT NULL AUTO_INCREMENT COMMENT 'id nha tuyen dung',
  `recruitmentname` varchar(200) NOT NULL COMMENT 'ten nha tuyen dung',
  `phone` tinytext NOT NULL COMMENT 'so dien thoai',
  `email` varchar(50) NOT NULL COMMENT 'email',
  `link` varchar(100) NOT NULL COMMENT 'trang web',
  `introduction` longtext NOT NULL COMMENT 'gioi thieu cong ty/to chuc',
  PRIMARY KEY (`idrecruitment`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `svc_menu`
--

CREATE TABLE IF NOT EXISTS `svc_menu` (
  `idmenu` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `sequence` int(20) NOT NULL,
  `status` int(2) NOT NULL,
  `link` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `parent_id` int(100) NOT NULL,
  PRIMARY KEY (`idmenu`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `svc_menu`
--

INSERT INTO `svc_menu` (`idmenu`, `name`, `sequence`, `status`, `link`, `level`, `parent_id`) VALUES
(59, 'Tin Mới', 2, 1, 'tinmoi', 1, 0),
(58, 'Đăng tin', 1, 1, 'Dang_tin', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `svc_post`
--

CREATE TABLE IF NOT EXISTS `svc_post` (
  `idpost` int(200) NOT NULL AUTO_INCREMENT,
  `recruitment` varchar(100) NOT NULL,
  `title` varchar(150) NOT NULL,
  `number` int(200) NOT NULL,
  `position` varchar(150) NOT NULL,
  `postdate` date NOT NULL,
  `outdate` date NOT NULL,
  `describer` longtext NOT NULL,
  `img` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  `belong` varchar(200) NOT NULL,
  PRIMARY KEY (`idpost`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `svc_post`
--

INSERT INTO `svc_post` (`idpost`, `recruitment`, `title`, `number`, `position`, `postdate`, `outdate`, `describer`, `img`, `status`, `belong`) VALUES
(50, 'Homepage', 'Tuyển nhân viên bán hàng', 11, 'Bán lẻ / Bán sỉ, Bán hàng / Kinh doanh, Dịch vụ khách hàng', '0000-00-00', '0000-00-00', 'Bán cafe', '', 1, 'taikhoan1'),
(49, 'Homepage', 'Tuyển Lập trình viên', 1, 'lập trình viên c++', '0000-00-00', '0000-00-00', 'Tuyển người có kinh nghiệm', '', 1, 'taikhoan1'),
(48, 'Homepage', 'Tuyển thực tập sinh', 11, 'Lập trình java', '0000-00-00', '0000-00-00', 'Tuyển sinh viên năm 2', '', 1, 'taikhoan1'),
(51, 'Homepage', 'Tuyển ôsin', 1, 'Osin', '0000-00-00', '0000-00-00', 'Làm Việc tại nhà', '', 1, 'taikhoan1');

-- --------------------------------------------------------

--
-- Table structure for table `svc_user`
--

CREATE TABLE IF NOT EXISTS `svc_user` (
  `opentid` int(255) NOT NULL AUTO_INCREMENT COMMENT 'id tai khoan',
  `name` varchar(30) NOT NULL COMMENT 'ho ten',
  `user` varchar(30) NOT NULL COMMENT 'ten dang nhap',
  `email` varchar(50) NOT NULL COMMENT 'mail',
  `password` varchar(50) NOT NULL COMMENT 'mat khau',
  `field` varchar(11) NOT NULL COMMENT 'linh vuc',
  PRIMARY KEY (`opentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `svc_user`
--

INSERT INTO `svc_user` (`opentid`, `name`, `user`, `email`, `password`, `field`) VALUES
(1, 'quang', 'admin', 'quang@gmail.com', '123456', '23'),
(2, 'Homepage', 'taikhoan1', 'duytien.uet@gmail.com', '123', 'CNTT');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
