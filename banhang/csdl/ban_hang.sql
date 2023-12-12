
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- Database: `ban_hang`

-- Table structure for table `banner`
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `rong` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `cao` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `hinh`, `rong`, `cao`) VALUES
(1, 'banner_2.png', '990px', '150px');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `html` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `html`) VALUES
(1, '<div id="fod"> \r\n<div id="fod2">\r\n<div id="fod3"> \r\n<div id="fod33">\r\n<div class="the"> <p style="font-size:18px; padding-left:23px; color:#FFF;  padding-top:10px; font-family:Tahoma;"> THANH TOÁN NHANH NHẤT </p> </div>\r\n </div>\r\n<div id="fod33"> \r\n<div class="the"> <p style="font-size:18px; padding-left:23px; color:#FFF;  padding-top:10px; font-family:Tahoma;"> VẬN CHUYỂN NHANH NHẤT </p> </div>\r\n</div>\r\n<div id="fod33"> \r\n<div class="the"> <p style="font-size:18px; padding-left:23px; color:#FFF;  padding-top:10px; font-family:Tahoma;"> GIẦY UY TÍN NHẤT </p> </div>\r\n \r\n\r\n</div>\r\n</div>\r\n \r\n<br>\r\n<br>\r\n<div id="cuoi" style="float:left; margin-top:100px;">\r\n\r\n <p class="address">Địa chỉ: Số 05 - ngõ 21 nhuệ giang - Nam từ liêm - Hà Nội<br />\r\n <p class="address">T6 - Tòa nhà A - Trường cao đẳng nghề công nghệ cao Hà Nội<br />\r\nĐiện thoại: <span style="color: #dc0309;font-weight: bold">0978.74.53.53 hoặc 0934.30.55.88</span><br />\r\nVận hành bởi <a target="_blank" href="http://sohoaweb.com">Số Hóa Web</a><br /> Ahihi Việt Nam © 2017      <div class="icon-social">\r\n        <a href="#" ><img src="img/facebook-512.png" style="float:left; width:35px; height:35px; margin-top:10px; margin-left:5px;"></a>\r\n        <a href="#" rel="nofollow" target="_blank"><img src="img/Twitter.png" style="float:left; width:35px; height:35px; margin-top:10px; margin-left:5px;"></a>\r\n        <a href="#" rel="nofollow" target="_blank"><img src="img/youtube-icon-logo-C39DEA9322-seeklogo.com.png" style="float:left; width:35px; height:35px; margin-top:10px; margin-left:5px;"></a>\r\n      </div>\r\n    </p>\r\n    </div>\r\n<div id="cuoi" style="float:right; margin-top:100px;">\r\n\r\n <p class="address">Giấy phép số 1818/GP-TTĐT do Sở Thông tin và Truyền thông Hà Nội cấp ngày 05/05/2017 </p>\r\n <p class="address">Đơn vị chủ quản: Công ty Cổ phần Công nghệ DV</p> \r\n <p class="address">Địa chỉ: Tầng 7, Tòa nhà Báo Sinh Viên VN, D29 Phạm Văn Bạch, Yên Hòa, Cầu Giấy, Hà Nội </p>\r\n <p class="address">AHIHI SHOP tổng hợp và sắp xếp các thông tin tự động </p>\r\n <p class="address"> chương trình máy tính</p>\r\n <br />  \r\n        \r\n    </p>\r\n    </div>\r\n\r\n </div>\r\n \r\n </div>\r\n</div>');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE IF NOT EXISTS `hoa_don` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nguoi_mua` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `hang_duoc_mua` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ten_nguoi_mua`, `email`, `dia_chi`, `dien_thoai`, `noi_dung`, `hang_duoc_mua`) VALUES
(2, 'lhjv', 'nuigjhvjh@gmail.com', 'ha noi', '01232115632', 'jkbjk', '26[|||]0[|||||]12[|||]0[|||||]4[|||]1[|||||]');

-- --------------------------------------------------------

--
-- Table structure for table `menu_doc`
--

CREATE TABLE IF NOT EXISTS `menu_doc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `menu_doc`
--

INSERT INTO `menu_doc` (`id`, `ten`) VALUES
(1, 'Menu 1'),
(2, 'Menu 2'),
(3, 'Menu 3'),
(4, 'Menu 4'),
(5, 'Menu 5a'),
(6, 'Menu 6'),
(7, 'Menu 7'),
(8, 'Menu 8');

-- --------------------------------------------------------

--
-- Table structure for table `menu_ngang`
--

CREATE TABLE IF NOT EXISTS `menu_ngang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `loai_menu` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `menu_ngang`
--

INSERT INTO `menu_ngang` (`id`, `ten`, `noi_dung`, `loai_menu`) VALUES
(1, 'Giới thiệu', '<p>Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /></p>', ''),
(2, 'Sản phẩm', '', 'san_pham'),
(3, 'Hướng dẫn mua hàng', 'Nội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>', ''),
(4, 'Cách mua hàng', 'Nội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>', ''),
(5, 'Liên hệ', 'Nội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>', '');

-- --------------------------------------------------------

--
-- Table structure for table `quang_cao`
--

CREATE TABLE IF NOT EXISTS `quang_cao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `html` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `vi_tri` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `quang_cao`
--

INSERT INTO `quang_cao` (`id`, `html`, `vi_tri`) VALUES
(1, '<p><a href="#"><img style="display: block; margin-left: auto; margin-right: auto;" src="/ban_hang/hinh_anh/tinymce/qc_p_1.png" alt="" /></a></p>\r\n<p style="text-align: center;"><a href="#"><img src="/ban_hang/hinh_anh/tinymce/qc_p_2.png" alt="" /></a></p>\r\n<p><a href="#"><img style="display: block; margin-left: auto; margin-right: auto;" src="/ban_hang/hinh_anh/tinymce/qc_p_3.png" alt="" /></a></p>', 'trai'),
(2, '<p><a href="#"><img style="display: block; margin-left: auto; margin-right: auto;" src="/ban_hang/hinh_anh/tinymce/qc_t_1.png" alt="" /></a></p>\r\n<p style="text-align: center;"><a href="#"><img src="/ban_hang/hinh_anh/tinymce/qc_t_2.png" alt="" /></a></p>\r\n<p><a href="#"><img style="display: block; margin-left: auto; margin-right: auto;" src="/ban_hang/hinh_anh/tinymce/qc_t_3.png" alt="" /></a></p>', 'phai');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE IF NOT EXISTS `san_pham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(255) NOT NULL,
  `hinh_anh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `thuoc_menu` int(255) NOT NULL,
  `noi_bat` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `trang_chu` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `sap_xep_trang_chu` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten`, `gia`, `hinh_anh`, `noi_dung`, `thuoc_menu`, `noi_bat`, `trang_chu`, `sap_xep_trang_chu`) VALUES
(1, 'Giầy lười phong cách hàn quốc GD546', 55000, '1.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd545/giay-luoi-01.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd545/giay-luoi-02.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd545/giay-luoi-03.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd545/giay-luoi-04.jpg" alt="" /></p>', 1, 'co', '', 0),
(2, 'Giầy lười chuông phong cách GD535', 82000, 'giay-gd535-01.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd535/giay-gd535-01.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd535/giay-gd535-02.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd535/giay-gd535-03.jpg" alt="" /></p>', 3, '', '', 7),
(3, 'Giày lười Peas phong cách Anh 2016 GD358', 86000, '1_2.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD358/giay-luoi-gd358-08.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD358/giay-luoi-gd358-09.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD358/giay-luoi-gd358-010.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD358/giay-luoi-gd358-011.jpg" alt="" /></p>', 1, '', '', 0),
(4, 'Giầy lười da bò GD447', 97000, '1_3.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD447/giay-luoi-van-ca-sau-gd447-06.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD447/giay-luoi-van-ca-sau-gd447-08.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD447/giay-luoi-van-ca-sau-gd447-012.jpg" alt="" /></p>', 1, '', '', 3),
(5, 'Giầy lười da lộn trẻ trung GD506', 42000, '1_4.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd506/giay-gd506-05.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd506/giay-gd506-08.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd506/giay-gd506-09.jpg" alt="" /></p>', 1, '', 'co', 0),
(6, 'Giày lười da thật GUCCI cao cấp GD332', 100000, '1_5.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD332/giay-luoi-da-that-gd332-04.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD332/giay-luoi-da-that-gd332-05.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD332/giay-luoi-da-that-gd332-06.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD332/giay-luoi-da-that-gd332-08.jpg" alt="" /></p>', 1, '', '', 0),
(7, 'Giầy lười trẻ trung cao cấp GD518', 120000, '1_6.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd518/giay-gd521-01.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd518/giay-gd521-02.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd518/giay-gd521-07.jpg" alt="" /></p>', 1, '', '', 2),
(8, 'Giầy lười công sở kiểu khuy và nơ phong cách hàn quốc GD503', 80000, '1_7.jpg', '<p>&nbsp;</p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD503/giay-gd503-06.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD503/giay-gd503-06.jpg" alt="" /><img src="http://labaha.vn/image/catalog/Giay_nam/GD503/giay-gd503-06.jpg" alt="" /></p>', 1, '', '', 0),
(9, 'Giầy lười công sở phong cách quý ông lịch lãm GD537', 160000, '1_8.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd537/giay-gd537-01.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd537/giay-gd537-02.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd537/giay-gd537-03.jpg" alt="" /></p>', 1, '', '', 0),
(10, 'Giày kinh doanh quý ông vân cá sấu GD244', 160000, '1_9.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD244/giay-da-ca-sau-gd244-06.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD244/giay-da-ca-sau-gd244-07.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD244/giay-da-ca-sau-gd244-010.jpg" alt="" /></p>', 1, '', '', 7),
(11, 'Giày Dr Martens GD92', 135000, '1_10.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD92/giay-dr-martens-gd92-06.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD92/giay-dr-martens-gd92-07.jpg" alt="" /></p>', 1, '', '', 0),
(12, 'Giày Dr.Martens GD189', 55000, '1_11.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD189/giay-dr-martens-gd189-06.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD189/giay-dr-martens-gd189-07.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD189/giay-dr-martens-gd189-08.jpg" alt="" /></p>', 1, '', '', 13),
(13, 'Giày dr martens da bò thật 100% đế đúc cao su bền chắc GD315', 72000, '1_12.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD315/giay-dr-marten-chinh-hang-gd315-07.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD315/giay-dr-marten-chinh-hang-gd315-08.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD315/giay-dr-marten-chinh-hang-gd315-09.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD315/giay-dr-marten-chinh-hang-gd315-010.jpg" alt="" /></p>', 1, '', '', 0),
(14, 'Boot cao cổ nam nam tính GD431', 78000, '1_13.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD431/boot-nam-gd431-06.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD431/boot-nam-gd431-014.jpg" alt="" /></p>', 1, '', '', 11),
(15, 'Giày Dr.Martens phong cách châu Âu 2015 GD19', 123000, '1_14.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_19/giay-dr-martens-moi-2015-gd18-06.jpg" alt="" /><img src="http://labaha.vn/image/catalog/Giay_19/giay-dr-martens-moi-2015-gd18-06.jpg" alt="" /><img src="http://labaha.vn/image/catalog/Giay_19/giay-dr-martens-moi-2015-gd18-06.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_19/giay-dr-martens-moi-2015-gd18-06.jpg" alt="" /></p>', 1, '', '', 0),
(16, 'Giày nam trẻ trung sành điệu GD519', 125000, '1_15.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd519/giay-nam-gd519-01.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd519/giay-nam-gd519-02.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd519/giay-nam-gd519-04.jpg" alt="" /></p>', 1, 'co', '', 5),
(17, 'Giày kinh doanh quý ông vân cá sấu GD239', 99000, '1_16.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD239/giay-da-ca-sau-gd239-07.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD239/giay-da-ca-sau-gd239-08.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD239/giay-da-ca-sau-gd239-09.jpg" alt="" /></p>', 1, '', '', 0),
(18, 'Giày doanh nhân cao cấp GD94', 145000, '1_17.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD94/giay-cong-so-gd94-04.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD94/giay-cong-so-gd94-04.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD94/giay-cong-so-gd94-05.jpg" alt="" /></p>', 1, '', '', 1),
(19, 'Giày da nam cao cấp GD421', 1450000, '1_18.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD421/giay-da-nam-ca-sau-gd421-06.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD421/giay-da-nam-ca-sau-gd421-07.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD421/giay-da-nam-ca-sau-gd421-08.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD421/giay-da-nam-ca-sau-gd421-09.jpg" alt="" /></p>', 1, '', '', 0),
(20, 'Giày da bóng Anh GD180', 170000, '1_19.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD180/giay-da-bong-gd180-05.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD180/giay-da-bong-gd180-08.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD180/giay-da-bong-gd180-08.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD180/giay-da-bong-gd180-09.jpg" alt="" /></p>', 1, '', '', 0),
(21, 'Giầy buộc dây phong cách hàn quốc GD546 â', 85000, 'giay-luoi-01-430x430.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd546/giay-luoi-01.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd546/giay-luoi-02.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd546/giay-luoi-03.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd546/giay-luoi-04.jpg" alt="" /></p>', 1, 'co', 'co', 0),
(22, 'Giày da bóng cao cấp phong cách Anh GD571', 30000, '3_2.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD571/22366714_1573847322654447_6374887001152717668_n.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD571/22450019_1573765602662619_1559922134321615756_n.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD571/TB2Jbk6uHXlpuFjy1zbXXb_qpXa_!!3277724470.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD571/TB2wW4ju9FjpuFjSspbXXXagVXa_!!3277724470.jpg" alt="" /></p>', 3, '', '', 8),
(23, 'Giày lười da bò cao cấp GD565', 40000, '3_3.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD565/2815648499_824335788.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD565/2815654209_824335788.jpg" alt="" /><img src="http://labaha.vn/image/catalog/Giay_nam/GD565/2815654397_824335788.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD565/2815654397_824335788.jpg" alt="" /></p>', 3, '', '', 6),
(24, 'Giày công sở cao cấp phong cách sang trọng GD552', 50000, '3_4.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD552/EO8A0900.JPG" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD552/EO8A0902.JPG" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD552/EO8A0911.JPG" alt="" /></p>', 3, 'co', 'co', 0),
(25, 'Giầy lười trẻ trung cá tính GD549', 60000, '3_5.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd549/giay-luoi-01.jpg" alt="" /></p>\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd549/giay-luoi-02.jpg" alt="" /></p>\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd549/giay-luoi-03.jpg" alt="" /></p>', 3, '', 'co', 9),
(26, 'Giầy lười thoáng khí GD553', 70000, '3_6.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd553/giay-thoang-khi-01.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd553/giay-thoang-khi-02.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd553/giay-thoang-khi-03.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd553/giay-thoang-khi-04.jpg" alt="" /></p>', 3, 'co', '', 12),
(27, 'Giày lười da lộn cao cấp GD572', 80000, '3_7.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD572/TB2v7y.aSFjpuFjSspbXXXagVXa_!!2968892884-Recovered.png" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD572/TB2RZTNa.hnpuFjSZFEXXX0PFXa_!!2968892884.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD572/TB2ua5_aR0kpuFjy1zdXXXuUVXa_!!2968892884.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD572/TB22c05bB8lpuFjSspaXXXJKpXa_!!2458958821-1.jpg" alt="" /></p>', 3, 'co', 'co', 0),
(28, 'Giày lười da bò cao cấp phong cách sang trọng GD568', 90000, '3_8.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD568/TB21TlIae6yQeBjy0FfXXcWvXXa_!!2182903784.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD568/TB2Cw8GahbxQeBjy1XdXXXVBFXa_!!2182903784%20(1).jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD568/TB2glJIaanyQeBjSsplXXaLWVXa_!!2182903784.jpg" alt="" /></p>', 3, 'co', 'co', 8),
(29, 'Giày lười da bò vân cá sấu GD566', 100000, '3_9.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD566/TB2lwTQXgYDK1JjSZFNXXXnkVXa_!!2433251950.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD566/3890630145_1620862535.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD566/3893277428_1620862535.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD566/3893274450_1620862535.jpg" alt="" /></p>', 3, '', '', 0),
(30, 'Giày lười da bò cách điệu phong cách GD569', 110000, '3_10.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD569/TB2A9sHd9hlpuFjSspkXXa1ApXa_!!629983525.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD569/TB2dqIWdYplpuFjSspiXXcdfFXa_!!629983525.jpg" alt="" /></p>', 3, '', '', 7),
(31, 'Giày lười chuông da bò cao cấp GD563', 120000, '3_11.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD563/6.jpg" alt="" /><img src="http://labaha.vn/image/catalog/Giay_nam/GD563/8.jpg" alt="" /><img src="http://labaha.vn/image/catalog/Giay_nam/GD563/10.jpg" alt="" />v</p>', 3, 'co', 'co', 9),
(32, 'Giày da bóng cao cấp phong cách Anh GD571', 50000, '3_12.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD571/22366714_1573847322654447_6374887001152717668_n.jpg" alt="" /><img src="http://labaha.vn/image/catalog/Giay_nam/GD571/22450019_1573765602662619_1559922134321615756_n.jpg" alt="" /><img src="http://labaha.vn/image/catalog/Giay_nam/GD571/TB2vhNau1J8puFjy1XbXXagqVXa_!!3277724470.jpg" alt="" /><img src="http://labaha.vn/image/catalog/Giay_nam/GD571/TB2wW4ju9FjpuFjSspbXXXagVXa_!!3277724470.jpg" alt="" /></p>', 3, 'co', 'co', 12),
(33, 'Giày lười da bò cao cấp GD565', 60000, '3_13.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD565/2815648499_824335788.jpg" alt="" /><img src="http://labaha.vn/image/catalog/Giay_nam/GD565/2815654209_824335788.jpg" alt="" /></p>', 3, 'co', 'co', 1),
(34, 'Giày công sở cao cấp phong cách sang trọng GD552', 70000, '3_14.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD552/EO8A0900.JPG" alt="" /><img src="http://labaha.vn/image/catalog/Giay_nam/GD552/EO8A0902.JPG" alt="" /></p>', 3, 'co', 'co', 11),
(35, 'Giầy lười trẻ trung cá tính GD549', 80000, '3_15.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd549/giay-luoi-02.jpg" alt="" /><img src="http://labaha.vn/image/catalog/Giay_nam/gd549/giay-luoi-03.jpg" alt="" /><img src="http://labaha.vn/image/catalog/Giay_nam/gd549/giay-luoi-04.jpg" alt="" /></p>', 3, '', 'co', 0),
(36, 'Giầy lười thoáng khí GD553', 90000, '3_16.jpg', '<p><img src="http://labaha.vn/image/catalog/Giay_nam/gd553/giay-thoang-khi-01.jpg" alt="" /><img src="http://labaha.vn/image/catalog/Giay_nam/gd553/giay-thoang-khi-02.jpg" alt="" /><img src="http://labaha.vn/image/catalog/Giay_nam/gd553/giay-thoang-khi-04.jpg" alt="" /></p>', 3, 'co', 'co', 16),
(37, 'Giày lười da lộn cao cấp GD572', 170000, '3_17.jpg', '<h1 class="title_product">Gi&agrave;y lười da lộn cao cấp GD572</h1>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD572/TB2v7y.aSFjpuFjSspbXXXagVXa_!!2968892884-Recovered.png" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD572/TB2RZTNa.hnpuFjSZFEXXX0PFXa_!!2968892884.jpg" alt="" /></p>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD572/TB22c05bB8lpuFjSspaXXXJKpXa_!!2458958821-1.jpg" alt="" /></p>', 3, 'co', 'co', 15),
(38, 'Giày lười da bò cao cấp phong cách sang trọng GD568', 180000, '3_18.jpg', '<h1 class="title_product">Gi&agrave;y lười da b&ograve; cao cấp phong c&aacute;ch sang trọng GD568</h1>\r\n<p><img src="http://labaha.vn/image/catalog/Giay_nam/GD568/TB21TlIae6yQeBjy0FfXXcWvXXa_!!2182903784.jpg" alt="" /><img src="http://labaha.vn/image/catalog/Giay_nam/GD568/TB2Cw8GahbxQeBjy1XdXXXVBFXa_!!2182903784%20(1).jpg" alt="" /><img src="http://labaha.vn/image/catalog/Giay_nam/GD568/TB2glJIaanyQeBjSsplXXaLWVXa_!!2182903784.jpg" alt="" /></p>', 3, '', 'co', 0),
(39, 'Giày lười da bò vân cá sấu GD566', 190000, '3_19.jpg', '<h1 class="title_product">Gi&agrave;y lười da b&ograve; v&acirc;n c&aacute; sấu GD566&nbsp;</h1>\r\n<p><img src="/ban_hang/hinh_anh/tinymce/giantrang.jpg" alt="" /></p>', 3, 'co', 'co', 0),
(40, 'Giày lười da bò cách điệu phong cách GD569', 200000, '3_20.jpg', '<p>Giầy da đen D05<img src="/ban_hang/hinh_anh/tinymce/giayden.jpg" alt="" /></p>\r\n<p><img src="/ban_hang/hinh_anh/tinymce/TB20esde.lnpuFjSZFjXXXTaVXa_!!629983525-261x261_.jpg" alt="" /></p>', 3, 'co', 'co', 2);

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `lien_ket` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `hinh`, `lien_ket`) VALUES
(1, 'a_1.png', '#'),
(2, 'a_2.png', '#'),
(3, 'a_3.png', '#'),
(4, 'a_4.png', '#');

-- --------------------------------------------------------

--
-- Table structure for table `thong_tin_quan_tri`
--

CREATE TABLE IF NOT EXISTS `thong_tin_quan_tri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ky_danh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `thong_tin_quan_tri`
--

INSERT INTO `thong_tin_quan_tri` (`id`, `ky_danh`, `mat_khau`) VALUES
(1, 'admin', 'c3284d0f94606de1fd2af172aba15bf3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
