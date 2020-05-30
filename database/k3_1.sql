-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 01:14 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k3`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE IF NOT EXISTS `access` (
  `id` int(11) NOT NULL,
  `access_control_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`id`, `access_control_id`, `role_id`, `status`) VALUES
(13, 94, 17, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `access_control`
--

CREATE TABLE IF NOT EXISTS `access_control` (
  `id` int(11) NOT NULL,
  `folder` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `val` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=308 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_control`
--

INSERT INTO `access_control` (`id`, `folder`, `class`, `method`, `val`) VALUES
(1, '', 'Access', '__construct', 'access/__construct'),
(2, '', 'Access', 'index', 'access/index'),
(3, '', 'Access', 'json', 'access/json'),
(4, '', 'Access', 'control', 'access/control'),
(5, '', 'Access', 'store', 'access/store'),
(6, '', 'Access', 'konfig', 'access/konfig'),
(7, '', 'Access', 'upload_file', 'access/upload_file'),
(8, '', 'Access', 'upload_file_dir', 'access/upload_file_dir'),
(9, '', 'Access', 'get_uri', 'access/get_uri'),
(10, '', 'Access', 'log_activity', 'access/log_activity'),
(11, '', 'Access', 'get_instance', 'access/get_instance'),
(12, '', 'Crud', '__construct', 'crud/__construct'),
(13, '', 'Crud', 'index', 'crud/index'),
(14, '', 'Crud', 'viewcode', 'crud/viewcode'),
(15, '', 'Crud', 'generate', 'crud/generate'),
(16, '', 'Crud', 'get_kolom', 'crud/get_kolom'),
(17, '', 'Crud', 'save_generate', 'crud/save_generate'),
(18, '', 'Crud', 'api', 'crud/api'),
(19, '', 'Crud', 'api_generate', 'crud/api_generate'),
(20, '', 'Crud', 'services', 'crud/services'),
(21, '', 'Crud', 'konfig', 'crud/konfig'),
(22, '', 'Crud', 'upload_file', 'crud/upload_file'),
(23, '', 'Crud', 'upload_file_dir', 'crud/upload_file_dir'),
(24, '', 'Crud', 'get_uri', 'crud/get_uri'),
(25, '', 'Crud', 'log_activity', 'crud/log_activity'),
(26, '', 'Crud', 'get_instance', 'crud/get_instance'),
(27, '', 'Crud_ajax', '__construct', 'crud_ajax/__construct'),
(28, '', 'Crud_ajax', 'index', 'crud_ajax/index'),
(29, '', 'Crud_ajax', 'ajaxGetTableCustomer', 'crud_ajax/ajaxgettablecustomer'),
(30, '', 'Crud_ajax', 'validate', 'crud_ajax/validate'),
(31, '', 'Crud_ajax', 'tambah', 'crud_ajax/tambah'),
(32, '', 'Crud_ajax', 'hapus', 'crud_ajax/hapus'),
(33, '', 'Crud_ajax', 'ajaxGetModalCustomer', 'crud_ajax/ajaxgetmodalcustomer'),
(34, '', 'Crud_ajax', 'edit', 'crud_ajax/edit'),
(35, '', 'Crud_ajax', 'konfig', 'crud_ajax/konfig'),
(36, '', 'Crud_ajax', 'upload_file', 'crud_ajax/upload_file'),
(37, '', 'Crud_ajax', 'upload_file_dir', 'crud_ajax/upload_file_dir'),
(38, '', 'Crud_ajax', 'get_uri', 'crud_ajax/get_uri'),
(39, '', 'Crud_ajax', 'log_activity', 'crud_ajax/log_activity'),
(40, '', 'Crud_ajax', 'get_instance', 'crud_ajax/get_instance'),
(41, '', 'Debug', '__construct', 'debug/__construct'),
(42, '', 'Debug', 'index', 'debug/index'),
(43, '', 'Debug', 'exportexcell', 'debug/exportexcell'),
(44, '', 'Debug', 'ecryprdecrypt', 'debug/ecryprdecrypt'),
(45, '', 'Debug', 'validation_form', 'debug/validation_form'),
(46, '', 'Debug', 'konfig', 'debug/konfig'),
(47, '', 'Debug', 'upload_file', 'debug/upload_file'),
(48, '', 'Debug', 'upload_file_dir', 'debug/upload_file_dir'),
(49, '', 'Debug', 'get_uri', 'debug/get_uri'),
(50, '', 'Debug', 'log_activity', 'debug/log_activity'),
(51, '', 'Debug', 'get_instance', 'debug/get_instance'),
(52, '', 'Dropdown', '__construct', 'dropdown/__construct'),
(53, '', 'Dropdown', 'index', 'dropdown/index'),
(54, '', 'Dropdown', 'generate', 'dropdown/generate'),
(55, '', 'Dropdown', 'konfig', 'dropdown/konfig'),
(56, '', 'Dropdown', 'upload_file', 'dropdown/upload_file'),
(57, '', 'Dropdown', 'upload_file_dir', 'dropdown/upload_file_dir'),
(58, '', 'Dropdown', 'get_uri', 'dropdown/get_uri'),
(59, '', 'Dropdown', 'log_activity', 'dropdown/log_activity'),
(60, '', 'Dropdown', 'get_instance', 'dropdown/get_instance'),
(61, '', 'Fitur', '__construct', 'fitur/__construct'),
(62, '', 'Fitur', 'ekspor', 'fitur/ekspor'),
(63, '', 'Fitur', 'impor', 'fitur/impor'),
(64, '', 'Fitur', 'importdata', 'fitur/importdata'),
(65, '', 'Fitur', 'access', 'fitur/access'),
(66, '', 'Fitur', 'exportreport', 'fitur/exportreport'),
(67, '', 'Fitur', 'toPdf', 'fitur/topdf'),
(68, '', 'Fitur', 'konfig', 'fitur/konfig'),
(69, '', 'Fitur', 'upload_file', 'fitur/upload_file'),
(70, '', 'Fitur', 'upload_file_dir', 'fitur/upload_file_dir'),
(71, '', 'Fitur', 'get_uri', 'fitur/get_uri'),
(72, '', 'Fitur', 'log_activity', 'fitur/log_activity'),
(73, '', 'Fitur', 'get_instance', 'fitur/get_instance'),
(74, '', 'Form_input', '__construct', 'form_input/__construct'),
(75, '', 'Form_input', 'index', 'form_input/index'),
(76, '', 'Form_input', 'ajaxGetAutocompleteCustomer', 'form_input/ajaxgetautocompletecustomer'),
(77, '', 'Form_input', 'ajaxGetSelectCustomer', 'form_input/ajaxgetselectcustomer'),
(78, '', 'Form_input', 'ajaxTambahCustomer', 'form_input/ajaxtambahcustomer'),
(79, '', 'Form_input', 'konfig', 'form_input/konfig'),
(80, '', 'Form_input', 'upload_file', 'form_input/upload_file'),
(81, '', 'Form_input', 'upload_file_dir', 'form_input/upload_file_dir'),
(82, '', 'Form_input', 'get_uri', 'form_input/get_uri'),
(83, '', 'Form_input', 'log_activity', 'form_input/log_activity'),
(84, '', 'Form_input', 'get_instance', 'form_input/get_instance'),
(85, '', 'Home', '__construct', 'home/__construct'),
(86, '', 'Home', 'index', 'home/index'),
(87, '', 'Home', 'chart', 'home/chart'),
(88, '', 'Home', 'get_autocomplete', 'home/get_autocomplete'),
(89, '', 'Home', 'konfig', 'home/konfig'),
(90, '', 'Home', 'upload_file', 'home/upload_file'),
(91, '', 'Home', 'upload_file_dir', 'home/upload_file_dir'),
(92, '', 'Home', 'get_uri', 'home/get_uri'),
(93, '', 'Home', 'log_activity', 'home/log_activity'),
(94, '', 'Home', 'get_instance', 'home/get_instance'),
(95, '', 'Login', '__construct', 'login/__construct'),
(96, '', 'Login', 'index', 'login/index'),
(97, '', 'Login', 'logout', 'login/logout'),
(98, '', 'Login', 'act_login', 'login/act_login'),
(99, '', 'Login', 'lockscreen', 'login/lockscreen'),
(100, '', 'Login', 'konfig', 'login/konfig'),
(101, '', 'Login', 'upload_file', 'login/upload_file'),
(102, '', 'Login', 'upload_file_dir', 'login/upload_file_dir'),
(103, '', 'Login', 'get_uri', 'login/get_uri'),
(104, '', 'Login', 'log_activity', 'login/log_activity'),
(105, '', 'Login', 'get_instance', 'login/get_instance'),
(106, '', 'Page', '__construct', 'page/__construct'),
(107, '', 'Page', 'portrait', 'page/portrait'),
(108, '', 'Page', 'landscape', 'page/landscape'),
(109, '', 'Page', 'konfig', 'page/konfig'),
(110, '', 'Page', 'upload_file', 'page/upload_file'),
(111, '', 'Page', 'upload_file_dir', 'page/upload_file_dir'),
(112, '', 'Page', 'get_uri', 'page/get_uri'),
(113, '', 'Page', 'log_activity', 'page/log_activity'),
(114, '', 'Page', 'get_instance', 'page/get_instance'),
(115, '', 'Rest_server', 'index', 'rest_server/index'),
(116, '', 'Rest_server', '__construct', 'rest_server/__construct'),
(117, '', 'Rest_server', 'get_instance', 'rest_server/get_instance'),
(118, '', 'Tablednd', '__construct', 'tablednd/__construct'),
(119, '', 'Tablednd', 'index', 'tablednd/index'),
(120, '', 'Tablednd', 'simpan', 'tablednd/simpan'),
(121, '', 'Tablednd', 'konfig', 'tablednd/konfig'),
(122, '', 'Tablednd', 'upload_file', 'tablednd/upload_file'),
(123, '', 'Tablednd', 'upload_file_dir', 'tablednd/upload_file_dir'),
(124, '', 'Tablednd', 'get_uri', 'tablednd/get_uri'),
(125, '', 'Tablednd', 'log_activity', 'tablednd/log_activity'),
(126, '', 'Tablednd', 'get_instance', 'tablednd/get_instance'),
(127, '', 'Tinymce', '__construct', 'tinymce/__construct'),
(128, '', 'Tinymce', 'index', 'tinymce/index'),
(129, '', 'Tinymce', 'konfig', 'tinymce/konfig'),
(130, '', 'Tinymce', 'upload_file', 'tinymce/upload_file'),
(131, '', 'Tinymce', 'upload_file_dir', 'tinymce/upload_file_dir'),
(132, '', 'Tinymce', 'get_uri', 'tinymce/get_uri'),
(133, '', 'Tinymce', 'log_activity', 'tinymce/log_activity'),
(134, '', 'Tinymce', 'get_instance', 'tinymce/get_instance'),
(135, '', 'UploadImage', '__construct', 'uploadimage/__construct'),
(136, '', 'UploadImage', 'index', 'uploadimage/index'),
(137, '', 'UploadImage', 'uploadAjax', 'uploadimage/uploadajax'),
(138, '', 'UploadImage', 'ajaxImageUnlink', 'uploadimage/ajaximageunlink'),
(139, '', 'UploadImage', 'konfig', 'uploadimage/konfig'),
(140, '', 'UploadImage', 'upload_file', 'uploadimage/upload_file'),
(141, '', 'UploadImage', 'upload_file_dir', 'uploadimage/upload_file_dir'),
(142, '', 'UploadImage', 'get_uri', 'uploadimage/get_uri'),
(143, '', 'UploadImage', 'log_activity', 'uploadimage/log_activity'),
(144, '', 'UploadImage', 'get_instance', 'uploadimage/get_instance'),
(145, 'master', 'Customer', '__construct', 'master/customer/__construct'),
(146, 'master', 'Customer', 'index', 'master/customer/index'),
(147, 'master', 'Customer', 'create', 'master/customer/create'),
(148, 'master', 'Customer', 'validate', 'master/customer/validate'),
(149, 'master', 'Customer', 'store', 'master/customer/store'),
(150, 'master', 'Customer', 'json', 'master/customer/json'),
(151, 'master', 'Customer', 'edit', 'master/customer/edit'),
(152, 'master', 'Customer', 'update', 'master/customer/update'),
(153, 'master', 'Customer', 'delete', 'master/customer/delete'),
(154, 'master', 'Customer', 'status', 'master/customer/status'),
(155, 'master', 'Customer', 'konfig', 'master/customer/konfig'),
(156, 'master', 'Customer', 'upload_file', 'master/customer/upload_file'),
(157, 'master', 'Customer', 'upload_file_dir', 'master/customer/upload_file_dir'),
(158, 'master', 'Customer', 'get_uri', 'master/customer/get_uri'),
(159, 'master', 'Customer', 'log_activity', 'master/customer/log_activity'),
(160, 'master', 'Customer', 'get_instance', 'master/customer/get_instance'),
(161, 'master', 'Grafik', '__construct', 'master/grafik/__construct'),
(162, 'master', 'Grafik', 'index', 'master/grafik/index'),
(163, 'master', 'Grafik', 'create', 'master/grafik/create'),
(164, 'master', 'Grafik', 'validate', 'master/grafik/validate'),
(165, 'master', 'Grafik', 'store', 'master/grafik/store'),
(166, 'master', 'Grafik', 'json', 'master/grafik/json'),
(167, 'master', 'Grafik', 'edit', 'master/grafik/edit'),
(168, 'master', 'Grafik', 'update', 'master/grafik/update'),
(169, 'master', 'Grafik', 'delete', 'master/grafik/delete'),
(170, 'master', 'Grafik', 'status', 'master/grafik/status'),
(171, 'master', 'Grafik', 'konfig', 'master/grafik/konfig'),
(172, 'master', 'Grafik', 'upload_file', 'master/grafik/upload_file'),
(173, 'master', 'Grafik', 'upload_file_dir', 'master/grafik/upload_file_dir'),
(174, 'master', 'Grafik', 'get_uri', 'master/grafik/get_uri'),
(175, 'master', 'Grafik', 'log_activity', 'master/grafik/log_activity'),
(176, 'master', 'Grafik', 'get_instance', 'master/grafik/get_instance'),
(177, 'master', 'Image', '__construct', 'master/image/__construct'),
(178, 'master', 'Image', 'index', 'master/image/index'),
(179, 'master', 'Image', 'create', 'master/image/create'),
(180, 'master', 'Image', 'validate', 'master/image/validate'),
(181, 'master', 'Image', 'store', 'master/image/store'),
(182, 'master', 'Image', 'json', 'master/image/json'),
(183, 'master', 'Image', 'edit', 'master/image/edit'),
(184, 'master', 'Image', 'update', 'master/image/update'),
(185, 'master', 'Image', 'delete', 'master/image/delete'),
(186, 'master', 'Image', 'status', 'master/image/status'),
(187, 'master', 'Image', 'konfig', 'master/image/konfig'),
(188, 'master', 'Image', 'upload_file', 'master/image/upload_file'),
(189, 'master', 'Image', 'upload_file_dir', 'master/image/upload_file_dir'),
(190, 'master', 'Image', 'get_uri', 'master/image/get_uri'),
(191, 'master', 'Image', 'log_activity', 'master/image/log_activity'),
(192, 'master', 'Image', 'get_instance', 'master/image/get_instance'),
(193, 'master', 'Keys', '__construct', 'master/keys/__construct'),
(194, 'master', 'Keys', 'index', 'master/keys/index'),
(195, 'master', 'Keys', 'create', 'master/keys/create'),
(196, 'master', 'Keys', 'validate', 'master/keys/validate'),
(197, 'master', 'Keys', 'store', 'master/keys/store'),
(198, 'master', 'Keys', 'json', 'master/keys/json'),
(199, 'master', 'Keys', 'edit', 'master/keys/edit'),
(200, 'master', 'Keys', 'update', 'master/keys/update'),
(201, 'master', 'Keys', 'delete', 'master/keys/delete'),
(202, 'master', 'Keys', 'status', 'master/keys/status'),
(203, 'master', 'Keys', 'konfig', 'master/keys/konfig'),
(204, 'master', 'Keys', 'upload_file', 'master/keys/upload_file'),
(205, 'master', 'Keys', 'upload_file_dir', 'master/keys/upload_file_dir'),
(206, 'master', 'Keys', 'get_uri', 'master/keys/get_uri'),
(207, 'master', 'Keys', 'log_activity', 'master/keys/log_activity'),
(208, 'master', 'Keys', 'get_instance', 'master/keys/get_instance'),
(209, 'master', 'Konfig', '__construct', 'master/konfig/__construct'),
(210, 'master', 'Konfig', 'index', 'master/konfig/index'),
(211, 'master', 'Konfig', 'create', 'master/konfig/create'),
(212, 'master', 'Konfig', 'validate', 'master/konfig/validate'),
(213, 'master', 'Konfig', 'store', 'master/konfig/store'),
(214, 'master', 'Konfig', 'json', 'master/konfig/json'),
(215, 'master', 'Konfig', 'edit', 'master/konfig/edit'),
(216, 'master', 'Konfig', 'update', 'master/konfig/update'),
(217, 'master', 'Konfig', 'delete', 'master/konfig/delete'),
(218, 'master', 'Konfig', 'status', 'master/konfig/status'),
(219, 'master', 'Konfig', 'konfig', 'master/konfig/konfig'),
(220, 'master', 'Konfig', 'upload_file', 'master/konfig/upload_file'),
(221, 'master', 'Konfig', 'upload_file_dir', 'master/konfig/upload_file_dir'),
(222, 'master', 'Konfig', 'get_uri', 'master/konfig/get_uri'),
(223, 'master', 'Konfig', 'log_activity', 'master/konfig/log_activity'),
(224, 'master', 'Konfig', 'get_instance', 'master/konfig/get_instance'),
(225, 'master', 'Menu_master', '__construct', 'master/menu_master/__construct'),
(226, 'master', 'Menu_master', 'index', 'master/menu_master/index'),
(227, 'master', 'Menu_master', 'create', 'master/menu_master/create'),
(228, 'master', 'Menu_master', 'validate', 'master/menu_master/validate'),
(229, 'master', 'Menu_master', 'store', 'master/menu_master/store'),
(230, 'master', 'Menu_master', 'json', 'master/menu_master/json'),
(231, 'master', 'Menu_master', 'edit', 'master/menu_master/edit'),
(232, 'master', 'Menu_master', 'update', 'master/menu_master/update'),
(233, 'master', 'Menu_master', 'delete', 'master/menu_master/delete'),
(234, 'master', 'Menu_master', 'status', 'master/menu_master/status'),
(235, 'master', 'Menu_master', 'konfig', 'master/menu_master/konfig'),
(236, 'master', 'Menu_master', 'upload_file', 'master/menu_master/upload_file'),
(237, 'master', 'Menu_master', 'upload_file_dir', 'master/menu_master/upload_file_dir'),
(238, 'master', 'Menu_master', 'get_uri', 'master/menu_master/get_uri'),
(239, 'master', 'Menu_master', 'log_activity', 'master/menu_master/log_activity'),
(240, 'master', 'Menu_master', 'get_instance', 'master/menu_master/get_instance'),
(241, 'master', 'Report', '__construct', 'master/report/__construct'),
(242, 'master', 'Report', 'index', 'master/report/index'),
(243, 'master', 'Report', 'create', 'master/report/create'),
(244, 'master', 'Report', 'validate', 'master/report/validate'),
(245, 'master', 'Report', 'store', 'master/report/store'),
(246, 'master', 'Report', 'json', 'master/report/json'),
(247, 'master', 'Report', 'edit', 'master/report/edit'),
(248, 'master', 'Report', 'update', 'master/report/update'),
(249, 'master', 'Report', 'delete', 'master/report/delete'),
(250, 'master', 'Report', 'status', 'master/report/status'),
(251, 'master', 'Report', 'generate', 'master/report/generate'),
(252, 'master', 'Report', 'konfig', 'master/report/konfig'),
(253, 'master', 'Report', 'upload_file', 'master/report/upload_file'),
(254, 'master', 'Report', 'upload_file_dir', 'master/report/upload_file_dir'),
(255, 'master', 'Report', 'get_uri', 'master/report/get_uri'),
(256, 'master', 'Report', 'log_activity', 'master/report/log_activity'),
(257, 'master', 'Report', 'get_instance', 'master/report/get_instance'),
(258, 'master', 'Role', '__construct', 'master/role/__construct'),
(259, 'master', 'Role', 'index', 'master/role/index'),
(260, 'master', 'Role', 'create', 'master/role/create'),
(261, 'master', 'Role', 'validate', 'master/role/validate'),
(262, 'master', 'Role', 'store', 'master/role/store'),
(263, 'master', 'Role', 'json', 'master/role/json'),
(264, 'master', 'Role', 'edit', 'master/role/edit'),
(265, 'master', 'Role', 'update', 'master/role/update'),
(266, 'master', 'Role', 'delete', 'master/role/delete'),
(267, 'master', 'Role', 'status', 'master/role/status'),
(268, 'master', 'Role', 'konfig', 'master/role/konfig'),
(269, 'master', 'Role', 'upload_file', 'master/role/upload_file'),
(270, 'master', 'Role', 'upload_file_dir', 'master/role/upload_file_dir'),
(271, 'master', 'Role', 'get_uri', 'master/role/get_uri'),
(272, 'master', 'Role', 'log_activity', 'master/role/log_activity'),
(273, 'master', 'Role', 'get_instance', 'master/role/get_instance'),
(274, 'master', 'Site', '__construct', 'master/site/__construct'),
(275, 'master', 'Site', 'index', 'master/site/index'),
(276, 'master', 'Site', 'site_json', 'master/site/site_json'),
(277, 'master', 'Site', 'site_default', 'master/site/site_default'),
(278, 'master', 'Site', 'site_custom', 'master/site/site_custom'),
(279, 'master', 'Site', 'site_data', 'master/site/site_data'),
(280, 'master', 'Site', 'site_store', 'master/site/site_store'),
(281, 'master', 'Site', 'site_edit', 'master/site/site_edit'),
(282, 'master', 'Site', 'site_update', 'master/site/site_update'),
(283, 'master', 'Site', 'site_hidden', 'master/site/site_hidden'),
(284, 'master', 'Site', 'konfig', 'master/site/konfig'),
(285, 'master', 'Site', 'upload_file', 'master/site/upload_file'),
(286, 'master', 'Site', 'upload_file_dir', 'master/site/upload_file_dir'),
(287, 'master', 'Site', 'get_uri', 'master/site/get_uri'),
(288, 'master', 'Site', 'log_activity', 'master/site/log_activity'),
(289, 'master', 'Site', 'get_instance', 'master/site/get_instance'),
(290, 'master', 'User', 'index', 'master/user/index'),
(291, 'master', 'User', 'json', 'master/user/json'),
(292, 'master', 'User', 'json_activity', 'master/user/json_activity'),
(293, 'master', 'User', 'store', 'master/user/store'),
(294, 'master', 'User', 'edit', 'master/user/edit'),
(295, 'master', 'User', 'editUser', 'master/user/edituser'),
(296, 'master', 'User', 'updateUser', 'master/user/updateuser'),
(297, 'master', 'User', 'update', 'master/user/update'),
(298, 'master', 'User', 'delete', 'master/user/delete'),
(299, 'master', 'User', 'password_check', 'master/user/password_check'),
(300, 'master', 'User', 'editUser_redirect', 'master/user/edituser_redirect'),
(301, 'master', 'User', '__construct', 'master/user/__construct'),
(302, 'master', 'User', 'konfig', 'master/user/konfig'),
(303, 'master', 'User', 'upload_file', 'master/user/upload_file'),
(304, 'master', 'User', 'upload_file_dir', 'master/user/upload_file_dir'),
(305, 'master', 'User', 'get_uri', 'master/user/get_uri'),
(306, 'master', 'User', 'log_activity', 'master/user/log_activity'),
(307, 'master', 'User', 'get_instance', 'master/user/get_instance');

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `ip` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `get` longtext,
  `post` longtext,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`ip`, `link`, `get`, `post`, `user_id`, `created_at`) VALUES
('118.136.148.201', 'http://gatoko1.com/sop/master/user/editUser/6XmR9kAQpXD-j2AwEhMiO54SOxC8fXgNJVwrdGbiesI~', '[]', '[]', 1, '2019-02-19 10:59:26'),
('182.0.231.50', 'http://gatoko1.com/sop/', '[]', '[]', 1, '2019-03-25 11:32:10'),
('182.0.231.50', 'http://gatoko1.com/sop/report/users', '[]', '[]', 1, '2019-03-25 11:32:12'),
('182.0.231.50', 'http://gatoko1.com/sop/report/Users/ajaxall/', '[]', '{"draw":"1","columns":[{"data":"0","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"1","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"2","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"3","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"4","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"5","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"6","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"7","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"8","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"9","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"10","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}}],"start":"0","length":"10","search":{"value":"","regex":"false"}}', 1, '2019-03-25 11:32:13'),
('182.0.231.50', 'http://gatoko1.com/sop/index.php/master/user/editUser/rRntbEh0leW4k9gNhEWWCbHwo2zGf472OKDemzWpDYM~', '[]', '[]', 1, '2019-03-25 11:31:57'),
('182.0.231.50', 'http://gatoko1.com/sop/master/user/json_activity/9', '[]', '{"draw":"1","columns":[{"data":"ip","name":"","searchable":"true","orderable":"false","search":{"value":"","regex":"false"}},{"data":"created_at","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"ip","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"link","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"post","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"get","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}}],"order":[{"column":"1","dir":"asc"}],"start":"0","length":"10","search":{"value":"","regex":"false"}}', 1, '2019-03-25 11:31:57'),
('182.0.231.50', 'http://gatoko1.com/sop/index.php/master/user/editUser/rRntbEh0leW4k9gNhEWWCbHwo2zGf472OKDemzWpDYM~', '[]', '[]', 1, '2019-03-25 11:31:58'),
('182.0.231.50', 'http://gatoko1.com/sop/master/user/json_activity/9', '[]', '{"draw":"1","columns":[{"data":"ip","name":"","searchable":"true","orderable":"false","search":{"value":"","regex":"false"}},{"data":"created_at","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"ip","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"link","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"post","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"get","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}}],"order":[{"column":"1","dir":"asc"}],"start":"0","length":"10","search":{"value":"","regex":"false"}}', 1, '2019-03-25 11:31:59'),
('118.136.148.201', 'http://gatoko1.com/sop/master/user/editUser/6XmR9kAQpXD-j2AwEhMiO54SOxC8fXgNJVwrdGbiesI~', '[]', '[]', 1, '2019-02-19 11:03:04'),
('118.136.148.201', 'http://gatoko1.com/sop/master/user/updateUser', '[]', '{"ids":"1","name":"Smartsoft Studio","email":"smartsoftstudio1@mail.com","desc":"asda"}', 1, '2019-02-19 11:02:53'),
('182.0.231.50', 'http://gatoko1.com/sop/index.php/master/user/editUser/rRntbEh0leW4k9gNhEWWCbHwo2zGf472OKDemzWpDYM~', '[]', '[]', 1, '2019-03-25 11:32:00'),
('182.0.231.50', 'http://gatoko1.com/sop/master/user/json_activity/9', '[]', '{"draw":"1","columns":[{"data":"ip","name":"","searchable":"true","orderable":"false","search":{"value":"","regex":"false"}},{"data":"created_at","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"ip","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"link","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"post","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"get","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}}],"order":[{"column":"1","dir":"asc"}],"start":"0","length":"10","search":{"value":"","regex":"false"}}', 1, '2019-03-25 11:32:01'),
('182.0.231.173', 'http://gatoko1.com/sop/index.php/home/get_autocomplete?term=ke', '{"term":"ke"}', '[]', 1, '2019-03-25 11:32:21'),
('182.0.231.173', 'http://gatoko1.com/sop/index.php/home/get_autocomplete?term=kementr', '{"term":"kementr"}', '[]', 1, '2019-03-25 11:32:22'),
('182.0.231.173', 'http://gatoko1.com/sop/index.php/home/get_autocomplete?term=kementr', '{"term":"kementr"}', '[]', 1, '2019-03-25 11:32:23'),
('182.0.197.180', 'http://gatoko1.com/sop/index.php/home/get_autocomplete?term=kementr', '{"term":"kementr"}', '[]', 1, '2019-03-25 11:32:24'),
('182.0.197.180', 'http://gatoko1.com/sop/login/logout', '[]', '[]', 1, '2019-03-25 11:32:31'),
('182.0.197.180', 'http://gatoko1.com/sop/index.php/login', '[]', '[]', NULL, '2019-03-25 11:32:31'),
('182.0.231.125', 'http://gatoko1.com/sop/login/lockscreen?user=smartsoft', '{"user":"smartsoft"}', '[]', NULL, '2019-03-25 11:32:38'),
('182.0.231.125', 'http://gatoko1.com/sop/login/act_login', '[]', '{"username":"smartsoft","password":"admin"}', NULL, '2019-03-25 11:32:41'),
('182.0.231.125', 'http://gatoko1.com/sop/', '[]', '[]', 1, '2019-03-25 11:32:41'),
('182.0.231.125', 'http://gatoko1.com/sop/master/user/editUser/6XmR9kAQpXD-j2AwEhMiO54SOxC8fXgNJVwrdGbiesI~', '[]', '[]', 1, '2019-03-25 11:32:45'),
('182.0.231.125', 'http://gatoko1.com/sop/master/user/json_activity/1', '[]', '{"draw":"1","columns":[{"data":"ip","name":"","searchable":"true","orderable":"false","search":{"value":"","regex":"false"}},{"data":"created_at","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"ip","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"link","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"post","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}},{"data":"get","name":"","searchable":"true","orderable":"true","search":{"value":"","regex":"false"}}],"order":[{"column":"1","dir":"asc"}],"start":"0","length":"10","search":{"value":"","regex":"false"}}', 1, '2019-03-25 11:32:46'),
('118.136.148.201', 'http://gatoko1.com/sop/master/user/editUser/6XmR9kAQpXD-j2AwEhMiO54SOxC8fXgNJVwrdGbiesI~', '[]', '[]', 1, '2019-02-19 10:59:26'),
('118.136.148.201', 'http://gatoko1.com/sop/master/user/editUser/6XmR9kAQpXD-j2AwEhMiO54SOxC8fXgNJVwrdGbiesI~', '[]', '[]', 1, '2019-02-19 11:03:04'),
('118.136.148.201', 'http://gatoko1.com/sop/master/user/updateUser', '[]', '{"ids":"1","name":"Smartsoft Studio","email":"smartsoftstudio1@mail.com","desc":"asda"}', 1, '2019-02-19 11:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `contohmaster`
--

CREATE TABLE IF NOT EXISTS `contohmaster` (
  `cm_id` int(11) NOT NULL,
  `cm_nama` varchar(500) NOT NULL,
  `cm_data` text NOT NULL,
  `status` enum('ENABLE','DISABLE') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_dnd`
--

CREATE TABLE IF NOT EXISTS `customer_dnd` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `urutan` int(50) DEFAULT NULL,
  `status` enum('ENABLE','DISABLE') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `customer_dnd`
--

INSERT INTO `customer_dnd` (`id`, `nama`, `email`, `telp`, `alamat`, `urutan`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Soleh', 'soleh@gmail.com', '081249812947', '-', 0, 'ENABLE', NULL, NULL),
(2, 'Solihun', 'solihun@gmail.com', '089182491928', '-', 1, 'ENABLE', NULL, NULL),
(3, 'Gatot', 'gatot@gmail.com', '089128498129', '-', 2, 'ENABLE', NULL, NULL),
(4, '', '', '', '', 3, 'ENABLE', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mime` varchar(255) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `table` varchar(255) DEFAULT NULL,
  `table_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `name`, `mime`, `dir`, `table`, `table_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '6950c16c9bcc6995f376b297f163175914846.png', 'image/png', 'webfile/6950c16c9bcc6995f376b297f163175914846.png', 'user', 12, NULL, NULL, '2020-02-19 18:20:14'),
(3, '', '', '', 'master_perusahaan', 1, 'ENABLE', '2020-02-21 14:38:40', NULL),
(4, '6950c16c9bcc6995f376b297f163175928384.jpg', 'image/jpeg', 'webfile/6950c16c9bcc6995f376b297f163175928384.jpg', 'user', 13, NULL, NULL, '2020-02-21 15:47:28'),
(5, '6950c16c9bcc6995f376b297f163175935146.jpg', 'image/jpeg', 'webfile/6950c16c9bcc6995f376b297f163175935146.jpg', 'tbl_iuran', 1, 'ENABLE', '2020-02-21 15:56:40', NULL),
(6, '6950c16c9bcc6995f376b297f163175974758.png', 'image/png', 'webfile/6950c16c9bcc6995f376b297f163175974758.png', 'master_perusahaan', 2, 'ENABLE', '2020-02-21 22:33:59', '2020-02-21 22:35:08'),
(7, '6950c16c9bcc6995f376b297f163175926384.jpg', 'image/jpeg', 'webfile/6950c16c9bcc6995f376b297f163175926384.jpg', 'tbl_iuran', 6, 'ENABLE', '2020-02-21 22:35:59', '2020-02-21 22:36:30'),
(8, '', '', '', 'master_perusahaan', 3, 'ENABLE', '2020-02-24 05:58:09', NULL),
(9, '', '', '', 'master_jabatan', 1, 'ENABLE', '2020-05-14 15:02:22', NULL),
(10, '', '', '', 'master_jabatan', 2, 'ENABLE', '2020-05-14 15:02:28', NULL),
(11, '', '', '', 'master_jabatan', 3, 'ENABLE', '2020-05-14 15:02:35', NULL),
(12, '', '', '', 'master_jabatan', 4, 'ENABLE', '2020-05-14 15:02:44', NULL),
(13, '', '', '', 'master_jabatan', 5, 'ENABLE', '2020-05-14 15:02:54', NULL),
(14, '', '', '', 'master_shift', 1, 'ENABLE', '2020-05-14 15:03:09', NULL),
(15, '', '', '', 'master_shift', 2, 'ENABLE', '2020-05-14 15:03:16', NULL),
(16, '', '', '', 'master_shift', 3, 'ENABLE', '2020-05-14 15:03:19', NULL),
(17, '', '', '', 'master_shift', 4, 'ENABLE', '2020-05-14 15:03:25', NULL),
(18, '', '', '', 'master_shift', 5, 'ENABLE', '2020-05-14 15:03:31', NULL),
(19, '', '', '', 'master_departemen', 1, 'ENABLE', '2020-05-14 15:04:19', NULL),
(20, '', '', '', 'master_departemen', 2, 'ENABLE', '2020-05-14 15:04:45', NULL),
(21, '', '', '', 'master_departemen', 3, 'ENABLE', '2020-05-14 15:05:01', NULL),
(22, '', '', '', 'master_departemen', 4, 'ENABLE', '2020-05-14 15:05:11', NULL),
(23, '', '', '', 'master_departemen', 5, 'ENABLE', '2020-05-14 15:05:28', NULL),
(24, '', '', '', 'master_departemen', 6, 'ENABLE', '2020-05-14 15:05:42', NULL),
(25, '', '', '', 'master_departemen', 7, 'ENABLE', '2020-05-14 15:05:56', NULL),
(26, '', '', '', 'master_kompartemen', 1, 'ENABLE', '2020-05-14 15:06:29', NULL),
(27, '', '', '', 'master_kompartemen', 2, 'ENABLE', '2020-05-14 15:06:40', NULL),
(28, '', '', '', 'master_kompartemen', 3, 'ENABLE', '2020-05-14 15:06:54', NULL),
(29, '', '', '', 'master_kompartemen', 4, 'ENABLE', '2020-05-14 15:07:04', NULL),
(30, '', '', '', 'master_kompartemen', 5, 'ENABLE', '2020-05-14 15:07:25', NULL),
(31, '', '', '', 'master_kompartemen', 6, 'ENABLE', '2020-05-14 15:07:35', NULL),
(32, '', '', '', 'master_kompartemen', 7, 'ENABLE', '2020-05-14 15:07:46', NULL),
(33, '', '', '', 'master_kompartemen', 8, 'ENABLE', '2020-05-14 15:07:52', NULL),
(34, '', '', '', 'master_kompartemen', 9, 'ENABLE', '2020-05-14 15:08:00', NULL),
(35, '', '', '', 'master_daftar_periksa_kat', 1, 'ENABLE', '2020-05-14 15:08:52', NULL),
(36, '', '', '', 'master_daftar_periksa_kat', 2, 'ENABLE', '2020-05-14 15:08:58', NULL),
(37, '', '', '', 'master_daftar_periksa_kat', 3, 'ENABLE', '2020-05-14 15:09:06', NULL),
(38, '', '', '', 'master_daftar_periksa_kat', 4, 'ENABLE', '2020-05-14 15:09:18', NULL),
(39, '', '', '', 'master_daftar_periksa_kat', 5, 'ENABLE', '2020-05-14 15:09:30', NULL),
(40, '', '', '', 'master_daftar_periksa', 1, 'ENABLE', '2020-05-14 15:10:16', NULL),
(41, '', '', '', 'master_daftar_periksa', 2, 'ENABLE', '2020-05-14 15:10:25', NULL),
(42, '', '', '', 'master_daftar_periksa', 3, 'ENABLE', '2020-05-14 15:10:43', NULL),
(43, '', '', '', 'master_daftar_periksa', 4, 'ENABLE', '2020-05-14 15:11:12', NULL),
(44, '', '', '', 'master_daftar_periksa', 5, 'ENABLE', '2020-05-14 15:11:40', NULL),
(45, '', '', '', 'master_daftar_periksa', 6, 'ENABLE', '2020-05-14 15:11:48', NULL),
(46, '', '', '', 'master_daftar_periksa', 7, 'ENABLE', '2020-05-14 15:12:06', NULL),
(47, '', '', '', 'master_daftar_periksa', 8, 'ENABLE', '2020-05-14 15:12:21', NULL),
(48, '', '', '', 'master_daftar_periksa', 9, 'ENABLE', '2020-05-14 15:12:35', NULL),
(49, '', '', '', 'master_daftar_periksa', 10, 'ENABLE', '2020-05-14 15:12:48', NULL),
(50, '', '', '', 'master_daftar_periksa', 11, 'ENABLE', '2020-05-14 15:13:07', NULL),
(51, '', '', '', 'master_daftar_periksa', 12, 'ENABLE', '2020-05-14 15:13:20', NULL),
(52, '', '', '', 'master_daftar_periksa', 13, 'ENABLE', '2020-05-14 15:13:36', NULL),
(53, '', '', '', 'master_daftar_periksa', 14, 'ENABLE', '2020-05-14 15:13:46', NULL),
(54, '', '', '', 'master_daftar_periksa', 15, 'ENABLE', '2020-05-14 15:14:05', NULL),
(55, '', '', '', 'master_daftar_periksa', 16, 'ENABLE', '2020-05-14 15:14:32', NULL),
(56, '', '', '', 'master_daftar_periksa', 17, 'ENABLE', '2020-05-14 15:14:48', NULL),
(57, '', '', '', 'master_daftar_periksa', 18, 'ENABLE', '2020-05-14 15:15:03', NULL),
(58, '', '', '', 'master_daftar_periksa', 19, 'ENABLE', '2020-05-14 15:15:19', NULL),
(59, '', '', '', 'master_daftar_periksa', 20, 'ENABLE', '2020-05-14 15:15:45', NULL),
(60, '', '', '', 'master_daftar_periksa', 21, 'ENABLE', '2020-05-14 15:16:01', NULL),
(61, '', '', '', 'master_daftar_periksa', 22, 'ENABLE', '2020-05-14 15:16:14', NULL),
(62, '', '', '', 'master_daftar_periksa', 23, 'ENABLE', '2020-05-14 15:17:01', NULL),
(63, '', '', '', 'master_daftar_periksa', 24, 'ENABLE', '2020-05-14 15:17:23', NULL),
(64, '', '', '', 'master_daftar_periksa', 25, 'ENABLE', '2020-05-14 15:17:37', NULL),
(65, '', '', '', 'master_daftar_periksa', 26, 'ENABLE', '2020-05-14 15:18:11', NULL),
(66, '', '', '', 'master_daftar_periksa', 27, 'ENABLE', '2020-05-14 15:18:40', NULL),
(67, '', '', '', 'master_daftar_periksa', 28, 'ENABLE', '2020-05-14 15:18:52', NULL),
(68, '', '', '', 'master_daftar_periksa', 29, 'ENABLE', '2020-05-14 15:19:10', NULL),
(69, '', '', '', 'master_daftar_periksa', 30, 'ENABLE', '2020-05-14 15:19:37', NULL),
(70, '', '', '', 'master_daftar_periksa', 31, 'ENABLE', '2020-05-14 15:20:06', NULL),
(71, '', '', '', 'master_daftar_periksa', 32, 'ENABLE', '2020-05-14 15:20:18', NULL),
(72, '', '', '', 'master_daftar_periksa', 33, 'ENABLE', '2020-05-14 15:20:28', NULL),
(73, '', '', '', 'master_daftar_periksa', 34, 'ENABLE', '2020-05-14 15:20:34', NULL),
(74, '', '', '', 'master_daftar_periksa', 35, 'ENABLE', '2020-05-14 15:20:48', NULL),
(75, '', '', '', 'master_daftar_periksa', 36, 'ENABLE', '2020-05-14 15:21:15', NULL),
(76, '', '', '', 'master_daftar_periksa', 37, 'ENABLE', '2020-05-14 15:21:53', NULL),
(77, '', '', '', 'master_daftar_periksa', 38, 'ENABLE', '2020-05-14 15:24:23', NULL),
(78, '', '', '', 'master_daftar_periksa', 39, 'ENABLE', '2020-05-14 15:24:55', NULL),
(79, '', '', '', 'master_daftar_periksa', 40, 'ENABLE', '2020-05-14 15:25:17', NULL),
(80, '', '', '', 'master_daftar_periksa', 41, 'ENABLE', '2020-05-14 15:25:27', NULL),
(81, '', '', '', 'master_daftar_periksa', 42, 'ENABLE', '2020-05-14 15:25:43', NULL),
(82, '', '', '', 'master_daftar_periksa', 43, 'ENABLE', '2020-05-14 15:25:57', NULL),
(83, '', '', '', 'master_daftar_periksa', 44, 'ENABLE', '2020-05-14 15:26:18', NULL),
(84, '', '', '', 'master_daftar_periksa', 45, 'ENABLE', '2020-05-14 15:26:37', NULL),
(85, '', '', '', 'pegawai', 1, 'ENABLE', '2020-05-14 15:49:34', NULL),
(86, '', '', '', 'pegawai', 2, 'ENABLE', '2020-05-14 15:54:38', NULL),
(87, '', '', '', 'pegawai', 3, 'ENABLE', '2020-05-14 15:55:06', NULL),
(88, '', '', '', 'pegawai', 4, 'ENABLE', '2020-05-14 15:59:43', NULL),
(89, '', '', '', 'master_bagian', 1, 'ENABLE', '2020-05-17 14:23:04', NULL),
(90, '', '', '', 'master_bagian', 2, 'ENABLE', '2020-05-17 14:23:11', NULL),
(91, '', '', '', 'master_bagian', 3, 'ENABLE', '2020-05-17 14:23:17', NULL),
(92, '', '', '', 'master_bagian', 4, 'ENABLE', '2020-05-17 14:23:23', NULL),
(93, '', '', '', 'master_bagian', 5, 'ENABLE', '2020-05-17 14:23:28', NULL),
(94, '', '', '', 'master_bagian', 6, 'ENABLE', '2020-05-17 14:23:34', NULL),
(95, '', '', '', 'master_bagian', 7, 'ENABLE', '2020-05-17 14:23:40', NULL),
(96, '', '', '', 'form_tindak_lanjut', 1, 'ENABLE', '2020-05-17 14:46:18', NULL),
(97, '', '', '', 'form_tindak_lanjut', 1, 'ENABLE', '2020-05-17 14:46:18', NULL),
(98, '', '', '', 'form_tindak_lanjut', 2, 'ENABLE', '2020-05-17 14:46:57', NULL),
(99, '', '', '', 'form_tindak_lanjut', 2, 'ENABLE', '2020-05-17 14:46:57', NULL),
(100, '', '', '', 'form_tindak_lanjut', 1, 'ENABLE', '2020-05-17 15:05:25', NULL),
(101, '', '', '', 'form_tindak_lanjut', 1, 'ENABLE', '2020-05-17 15:06:36', NULL),
(102, '', '', '', 'form_tindak_lanjut', 1, 'ENABLE', '2020-05-17 15:42:40', NULL),
(103, '', '', '', 'form_tindak_lanjut', 2, 'ENABLE', '2020-05-17 15:57:32', NULL),
(104, '', '', '', 'form_tindak_lanjut', 2, 'ENABLE', '2020-05-17 15:57:32', NULL),
(105, '', '', '', 'form_tindak_lanjut', 3, 'ENABLE', '2020-05-17 15:59:17', NULL),
(106, '', '', '', 'form_tindak_lanjut', 4, 'ENABLE', '2020-05-17 16:00:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `form_laporan_bulanan`
--

CREATE TABLE IF NOT EXISTS `form_laporan_bulanan` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `departemen` int(11) NOT NULL,
  `bagian` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL,
  `value` text NOT NULL,
  `id_kabag` int(11) NOT NULL,
  `status` enum('ENABLE','DISABLE') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_laporan_bulanan`
--

INSERT INTO `form_laporan_bulanan` (`id`, `lokasi`, `departemen`, `bagian`, `tanggal`, `value`, `id_kabag`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Teras', 1, '1', '2020-05-30 00:00:00', '[{"id_dp":"1","hasil":"Ya","keterangan":"Ya"},{"id_dp":"2","hasil":"Tidak","keterangan":""},{"id_dp":"3","hasil":"Ya","keterangan":"Ya"},{"id_dp":"4","hasil":"Tidak","keterangan":""},{"id_dp":"5","hasil":"Ya","keterangan":"Ya"},{"id_dp":"6","hasil":"Tidak","keterangan":""},{"id_dp":"7","hasil":"Ya","keterangan":"Ya"},{"id_dp":"8","hasil":"Tidak","keterangan":""},{"id_dp":"9","hasil":"Tidak","keterangan":""},{"id_dp":"10","hasil":"Tidak","keterangan":""},{"id_dp":"11","hasil":"Ya","keterangan":"Ya"},{"id_dp":"12","hasil":"Ya","keterangan":"Ya"},{"id_dp":"13","hasil":"Tidak","keterangan":""},{"id_dp":"14","hasil":"Tidak","keterangan":""},{"id_dp":"15","hasil":"Tidak","keterangan":""},{"id_dp":"16","hasil":"Tidak","keterangan":""},{"id_dp":"17","hasil":"Ya","keterangan":"Ya"},{"id_dp":"18","hasil":"Tidak","keterangan":""},{"id_dp":"19","hasil":"Ya","keterangan":"Ya"},{"id_dp":"20","hasil":"Tidak","keterangan":""},{"id_dp":"21","hasil":"Tidak","keterangan":""},{"id_dp":"22","hasil":"Tidak","keterangan":""},{"id_dp":"23","hasil":"Tidak","keterangan":""},{"id_dp":"24","hasil":"Ya","keterangan":"Ya"},{"id_dp":"25","hasil":"Tidak","keterangan":""},{"id_dp":"26","hasil":"Tidak","keterangan":""},{"id_dp":"27","hasil":"Ya","keterangan":"Ya"},{"id_dp":"28","hasil":"Tidak","keterangan":""},{"id_dp":"29","hasil":"Tidak","keterangan":""},{"id_dp":"30","hasil":"Ya","keterangan":"Ya"},{"id_dp":"31","hasil":"Ya","keterangan":"Ya"},{"id_dp":"32","hasil":"Tidak","keterangan":""},{"id_dp":"33","hasil":"Tidak","keterangan":""},{"id_dp":"34","hasil":"Tidak","keterangan":""},{"id_dp":"35","hasil":"Tidak","keterangan":""},{"id_dp":"36","hasil":"Ya","keterangan":"Ya"},{"id_dp":"37","hasil":"Tidak","keterangan":""},{"id_dp":"38","hasil":"Ya","keterangan":"Ya"},{"id_dp":"39","hasil":"Tidak","keterangan":""},{"id_dp":"40","hasil":"Tidak","keterangan":""},{"id_dp":"41","hasil":"Tidak","keterangan":""},{"id_dp":"42","hasil":"Tidak","keterangan":""},{"id_dp":"43","hasil":"Tidak","keterangan":""},{"id_dp":"44","hasil":"Ya","keterangan":"Ya"},{"id_dp":"45","hasil":"Tidak","keterangan":""}]', 0, 'ENABLE', '2020-05-17 14:46:18', '2020-05-17 15:42:40', 4),
(2, 'Teras', 1, '1', '2020-05-20 00:00:00', '[{"id_dp":"1","hasil":"Ya","keterangan":"Ya"},{"id_dp":"2","hasil":"Tidak","keterangan":""},{"id_dp":"3","hasil":"Ya","keterangan":"Ya"},{"id_dp":"4","hasil":"Tidak","keterangan":""},{"id_dp":"5","hasil":"Ya","keterangan":"Ya"},{"id_dp":"6","hasil":"Tidak","keterangan":""},{"id_dp":"7","hasil":"Ya","keterangan":"Ya"},{"id_dp":"8","hasil":"Tidak","keterangan":""},{"id_dp":"9","hasil":"Tidak","keterangan":""},{"id_dp":"10","hasil":"Tidak","keterangan":""},{"id_dp":"11","hasil":"Ya","keterangan":"Ya"},{"id_dp":"12","hasil":"Ya","keterangan":"Ya"},{"id_dp":"13","hasil":"Tidak","keterangan":""},{"id_dp":"14","hasil":"Tidak","keterangan":""},{"id_dp":"15","hasil":"Tidak","keterangan":""},{"id_dp":"16","hasil":"Tidak","keterangan":""},{"id_dp":"17","hasil":"Ya","keterangan":"Ya"},{"id_dp":"18","hasil":"Tidak","keterangan":""},{"id_dp":"19","hasil":"Ya","keterangan":"Ya"},{"id_dp":"20","hasil":"Tidak","keterangan":""},{"id_dp":"21","hasil":"Tidak","keterangan":""},{"id_dp":"22","hasil":"Tidak","keterangan":""},{"id_dp":"23","hasil":"Tidak","keterangan":""},{"id_dp":"24","hasil":"Ya","keterangan":"Ya"},{"id_dp":"25","hasil":"Tidak","keterangan":""},{"id_dp":"26","hasil":"Tidak","keterangan":""},{"id_dp":"27","hasil":"Ya","keterangan":"Ya"},{"id_dp":"28","hasil":"Tidak","keterangan":""},{"id_dp":"29","hasil":"Tidak","keterangan":""},{"id_dp":"30","hasil":"Ya","keterangan":"Ya"},{"id_dp":"31","hasil":"Ya","keterangan":"Ya"},{"id_dp":"32","hasil":"Tidak","keterangan":""},{"id_dp":"33","hasil":"Tidak","keterangan":""},{"id_dp":"34","hasil":"Tidak","keterangan":""},{"id_dp":"35","hasil":"Tidak","keterangan":""},{"id_dp":"36","hasil":"Ya","keterangan":"Ya"},{"id_dp":"37","hasil":"Tidak","keterangan":""},{"id_dp":"38","hasil":"Ya","keterangan":"Ya"},{"id_dp":"39","hasil":"Tidak","keterangan":""},{"id_dp":"40","hasil":"Tidak","keterangan":""},{"id_dp":"41","hasil":"Tidak","keterangan":""},{"id_dp":"42","hasil":"Tidak","keterangan":""},{"id_dp":"43","hasil":"Tidak","keterangan":""},{"id_dp":"44","hasil":"Ya","keterangan":"Ya"},{"id_dp":"45","hasil":"Tidak","keterangan":""}]', 0, 'ENABLE', '2020-05-17 14:46:57', '2020-05-17 15:57:31', 4),
(3, 'Dapur', 1, '1', '2020-05-27 00:00:00', '[{"id_dp":"1","hasil":"Ya","keterangan":"alksjd"},{"id_dp":"2","hasil":"Ya","keterangan":"aslkdj"},{"id_dp":"3","hasil":"Tidak","keterangan":""},{"id_dp":"4","hasil":"Ya","keterangan":""},{"id_dp":"5","hasil":"Tidak","keterangan":""},{"id_dp":"6","hasil":"Tidak","keterangan":"aslkdj"},{"id_dp":"7","hasil":"Tidak","keterangan":"asdklj"},{"id_dp":"8","hasil":"Tidak","keterangan":""},{"id_dp":"9","hasil":"Tidak","keterangan":"asdkj"},{"id_dp":"10","hasil":"Tidak","keterangan":""},{"id_dp":"11","hasil":"Tidak","keterangan":""},{"id_dp":"12","hasil":"Tidak","keterangan":""},{"id_dp":"13","hasil":"Tidak","keterangan":""},{"id_dp":"14","hasil":"Tidak","keterangan":""},{"id_dp":"15","hasil":"Tidak","keterangan":""},{"id_dp":"16","hasil":"Tidak","keterangan":""},{"id_dp":"17","hasil":"Tidak","keterangan":""},{"id_dp":"18","hasil":"Tidak","keterangan":""},{"id_dp":"19","hasil":"Tidak","keterangan":""},{"id_dp":"20","hasil":"Tidak","keterangan":""},{"id_dp":"21","hasil":"Tidak","keterangan":""},{"id_dp":"22","hasil":"Tidak","keterangan":""},{"id_dp":"23","hasil":"Tidak","keterangan":""},{"id_dp":"24","hasil":"Tidak","keterangan":""},{"id_dp":"25","hasil":"Tidak","keterangan":""},{"id_dp":"26","hasil":"Tidak","keterangan":""},{"id_dp":"27","hasil":"Tidak","keterangan":""},{"id_dp":"28","hasil":"Tidak","keterangan":""},{"id_dp":"29","hasil":"Tidak","keterangan":""},{"id_dp":"30","hasil":"Tidak","keterangan":""},{"id_dp":"31","hasil":"Tidak","keterangan":""},{"id_dp":"32","hasil":"Tidak","keterangan":""},{"id_dp":"33","hasil":"Tidak","keterangan":""},{"id_dp":"34","hasil":"Tidak","keterangan":""},{"id_dp":"35","hasil":"Tidak","keterangan":""},{"id_dp":"36","hasil":"Tidak","keterangan":""},{"id_dp":"37","hasil":"Tidak","keterangan":""},{"id_dp":"38","hasil":"Tidak","keterangan":""},{"id_dp":"39","hasil":"Tidak","keterangan":""},{"id_dp":"40","hasil":"Tidak","keterangan":""},{"id_dp":"41","hasil":"Tidak","keterangan":""},{"id_dp":"42","hasil":"Tidak","keterangan":""},{"id_dp":"43","hasil":"Tidak","keterangan":""},{"id_dp":"44","hasil":"Tidak","keterangan":""},{"id_dp":"45","hasil":"Tidak","keterangan":""}]', 0, 'ENABLE', '2020-05-17 15:59:17', '0000-00-00 00:00:00', 4),
(4, 'Pager', 1, '1', '2020-05-24 00:00:00', '[{"id_dp":"1","hasil":"Ya","keterangan":""},{"id_dp":"2","hasil":"Tidak","keterangan":""},{"id_dp":"3","hasil":"Tidak","keterangan":""},{"id_dp":"4","hasil":"Tidak","keterangan":""},{"id_dp":"5","hasil":"Ya","keterangan":""},{"id_dp":"6","hasil":"Ya","keterangan":""},{"id_dp":"7","hasil":"Tidak","keterangan":""},{"id_dp":"8","hasil":"Tidak","keterangan":""},{"id_dp":"9","hasil":"Ya","keterangan":""},{"id_dp":"10","hasil":"Tidak","keterangan":""},{"id_dp":"11","hasil":"Ya","keterangan":""},{"id_dp":"12","hasil":"Tidak","keterangan":""},{"id_dp":"13","hasil":"Tidak","keterangan":""},{"id_dp":"14","hasil":"Tidak","keterangan":""},{"id_dp":"15","hasil":"Tidak","keterangan":""},{"id_dp":"16","hasil":"Tidak","keterangan":""},{"id_dp":"17","hasil":"Tidak","keterangan":""},{"id_dp":"18","hasil":"Tidak","keterangan":""},{"id_dp":"19","hasil":"Tidak","keterangan":""},{"id_dp":"20","hasil":"Tidak","keterangan":""},{"id_dp":"21","hasil":"Tidak","keterangan":""},{"id_dp":"22","hasil":"Tidak","keterangan":""},{"id_dp":"23","hasil":"Tidak","keterangan":""},{"id_dp":"24","hasil":"Tidak","keterangan":""},{"id_dp":"25","hasil":"Tidak","keterangan":""},{"id_dp":"26","hasil":"Tidak","keterangan":""},{"id_dp":"27","hasil":"Tidak","keterangan":""},{"id_dp":"28","hasil":"Tidak","keterangan":""},{"id_dp":"29","hasil":"Tidak","keterangan":""},{"id_dp":"30","hasil":"Tidak","keterangan":""},{"id_dp":"31","hasil":"Tidak","keterangan":""},{"id_dp":"32","hasil":"Tidak","keterangan":""},{"id_dp":"33","hasil":"Tidak","keterangan":""},{"id_dp":"34","hasil":"Tidak","keterangan":""},{"id_dp":"35","hasil":"Tidak","keterangan":""},{"id_dp":"36","hasil":"Tidak","keterangan":""},{"id_dp":"37","hasil":"Tidak","keterangan":""},{"id_dp":"38","hasil":"Tidak","keterangan":""},{"id_dp":"39","hasil":"Tidak","keterangan":""},{"id_dp":"40","hasil":"Tidak","keterangan":""},{"id_dp":"41","hasil":"Tidak","keterangan":""},{"id_dp":"42","hasil":"Tidak","keterangan":""},{"id_dp":"43","hasil":"Tidak","keterangan":""},{"id_dp":"44","hasil":"Tidak","keterangan":""},{"id_dp":"45","hasil":"Tidak","keterangan":""}]', 0, 'ENABLE', '2020-05-17 16:00:43', '0000-00-00 00:00:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `form_tindak_lanjut`
--

CREATE TABLE IF NOT EXISTS `form_tindak_lanjut` (
  `id` int(11) NOT NULL,
  `id_laporan` int(11) NOT NULL,
  `hasil_temuan` text NOT NULL,
  `ke` varchar(255) NOT NULL,
  `tindak_lanjut` text NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `status` enum('ENABLE','DISABLE') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_tindak_lanjut`
--

INSERT INTO `form_tindak_lanjut` (`id`, `id_laporan`, `hasil_temuan`, `ke`, `tindak_lanjut`, `jenis`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(8, 2, 'Berisik', '5', '-', 'UA', 'ENABLE', '2020-05-17 15:57:31', '0000-00-00 00:00:00', 4),
(9, 2, 'Maling', '4', '-', 'UC', 'ENABLE', '2020-05-17 15:57:32', '0000-00-00 00:00:00', 4),
(10, 3, 'Banyak pembulyan', '23', '-', 'LK', 'ENABLE', '2020-05-17 15:59:17', '0000-00-00 00:00:00', 4),
(11, 4, '', '', '', '', 'ENABLE', '2020-05-17 16:00:43', '0000-00-00 00:00:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `grafik`
--

CREATE TABLE IF NOT EXISTS `grafik` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grafik`
--

INSERT INTO `grafik` (`id`, `name`, `value`) VALUES
(1, 'Testing', '-30'),
(2, 'Testing 2', '20'),
(3, 'Testing 2', '30'),
(4, 'testing2', '40'),
(5, 'testing 2', '50'),
(6, 'testing 2', '20'),
(7, 'testing 2', '10'),
(8, 'testing 2', '15'),
(9, 'testing 2', '20'),
(10, 'testing 2', '25'),
(11, 'testing 2', '35'),
(12, 'testing 2', '45');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(12) NOT NULL,
  `path` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `path`) VALUES
(5, 'webfile/6950c16c9bcc6995f376b297f163175977305.jpg'),
(6, 'webfile/6950c16c9bcc6995f376b297f16317598195.png'),
(7, 'webfile/6950c16c9bcc6995f376b297f163175918255.pdf'),
(8, 'webfile/6950c16c9bcc6995f376b297f163175942707.jpg'),
(9, 'webfile/6950c16c9bcc6995f376b297f163175917095.png'),
(10, 'webfile/6950c16c9bcc6995f376b297f163175950229.jpg'),
(11, 'webfile/6950c16c9bcc6995f376b297f163175993341.pdf'),
(12, 'webfile/6950c16c9bcc6995f376b297f163175959701.png'),
(13, 'webfile/6950c16c9bcc6995f376b297f163175996844.jpg'),
(14, 'webfile/6950c16c9bcc6995f376b297f163175942779.jpg'),
(15, '<'),
(16, 'webfile/6950c16c9bcc6995f376b297f163175942654.jpg'),
(17, 'webfile/6950c16c9bcc6995f376b297f163175912658.jpg'),
(18, 'webfile/6950c16c9bcc6995f376b297f163175961249.jpg'),
(19, 'webfile/6950c16c9bcc6995f376b297f16317598585.png'),
(20, 'webfile/6950c16c9bcc6995f376b297f163175965096.docx'),
(21, '<'),
(22, 'webfile/6950c16c9bcc6995f376b297f163175939845.png'),
(23, 'webfile/6950c16c9bcc6995f376b297f163175965468.jpg'),
(24, 'webfile/6950c16c9bcc6995f376b297f163175994781.jpg'),
(25, '<'),
(26, 'webfile/6950c16c9bcc6995f376b297f163175925126.jpg'),
(27, 'af2a4c9d4c4956ec9d6ba62213eed568'),
(28, 'webfile/6950c16c9bcc6995f376b297f163175945616.jpg'),
(29, 'webfile/6950c16c9bcc6995f376b297f163175960129.jpg'),
(30, 'webfile/6950c16c9bcc6995f376b297f163175996636.doc'),
(31, 'webfile/6950c16c9bcc6995f376b297f163175937709.jpg'),
(32, 'webfile/6950c16c9bcc6995f376b297f163175930035.png'),
(33, 'webfile/6950c16c9bcc6995f376b297f163175919824.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE IF NOT EXISTS `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `ignore_limits` varchar(255) DEFAULT NULL,
  `is_private_key` varchar(255) DEFAULT NULL,
  `ip_addresses` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `status` enum('ENABLE','DISABLE') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, '35d3d08c3d7b7f445ceb8e726a87b26c', '0', '0', '0', '123', '2017-10-12 13:34:33', 'ENABLE', NULL, '2019-02-18 17:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `konfig`
--

CREATE TABLE IF NOT EXISTS `konfig` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `value` text,
  `status` enum('ENABLE','DISABLE') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfig`
--

INSERT INTO `konfig` (`id`, `slug`, `value`, `status`, `created_at`, `updated_at`) VALUES
(6, 'APPLICATION', 'K3', 'ENABLE', '2019-02-18 15:28:44', '2020-02-19 18:16:00'),
(7, 'LOGO', 'https://www.karyastudio.com/assets/images/logos/favicon.png', 'ENABLE', '2019-02-18 15:29:32', '2019-10-22 11:47:44'),
(8, 'LOGIN_BACKGROUND', 'background-image: url(''https://images.pexels.com/photos/434337/pexels-photo-434337.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'');background-size: cover;background-position: center;', 'ENABLE', '2019-02-18 15:29:52', '2019-04-29 10:57:19'),
(9, 'COLOR_HEADER', 'background: linear-gradient(to right,#0052D4,#65C7F7);', 'DISABLE', '2019-02-18 15:30:24', '2019-02-18 15:31:08'),
(10, 'VERSION', '1.0.0', 'ENABLE', '2019-02-18 15:30:39', NULL),
(11, 'COPYRIGHT', '© 2020 <a href="https://birunet.co.id/" target="_blank">Birunet Media Komputindo</a>.</strong> All rights     reserved.', 'ENABLE', '2019-02-18 15:32:01', '2019-02-19 10:27:32'),
(12, 'SKIN', 'skin-blue-light', 'ENABLE', '2019-02-18 15:34:01', '2020-02-19 18:18:33'),
(13, 'TITLE_APPLICATION', 'K3', 'ENABLE', '2019-02-18 15:39:54', NULL),
(14, 'APPLICATION_SMALL', 'K3', 'ENABLE', '2019-02-18 15:42:41', '2020-02-19 18:16:07'),
(15, 'LOGIN_BOX', 'background : #fff !important ; ', 'ENABLE', '2019-02-18 15:45:53', '2019-02-18 15:58:53'),
(16, 'TITLE_LOGIN_APPLICATION', 'K3', 'ENABLE', '2019-02-18 15:47:41', NULL),
(17, 'LOGIN_TITLE', '', 'ENABLE', '2019-02-18 15:48:55', NULL),
(24, 'LOGIN', '0', 'ENABLE', '2019-02-21 14:12:14', '2019-02-21 16:33:07'),
(25, 'email-template', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">\r\n<html xmlns="http://www.w3.org/1999/xhtml">\r\n\r\n<head>\r\n    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />\r\n    <meta name="viewport" content="width=device-width" />\r\n\r\n\r\n    <style type="text/css">\r\n        /* Your custom styles go here */\r\n        * {\r\n            margin: 0;\r\n            padding: 0;\r\n            font-size: 100%;\r\n            font-family: ''Avenir Next'', "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;\r\n            line-height: 1.65;\r\n        }\r\n\r\n        img {\r\n            max-width: 100%;\r\n            margin: 0 auto;\r\n            display: block;\r\n        }\r\n\r\n        body,\r\n        .body-wrap {\r\n            width: 100% !important;\r\n            height: 100%;\r\n            background: #f8f8f8;\r\n        }\r\n\r\n        a {\r\n            color: #71bc37;\r\n            text-decoration: none;\r\n        }\r\n\r\n        a:hover {\r\n            text-decoration: underline;\r\n        }\r\n\r\n        .text-center {\r\n            text-align: center;\r\n        }\r\n\r\n        .text-right {\r\n            text-align: right;\r\n        }\r\n\r\n        .text-left {\r\n            text-align: left;\r\n        }\r\n\r\n        .button {\r\n            display: inline-block;\r\n            color: white;\r\n            background: #71bc37;\r\n            border: solid #71bc37;\r\n            border-width: 10px 20px 8px;\r\n            font-weight: bold;\r\n            border-radius: 4px;\r\n        }\r\n\r\n        .button:hover {\r\n            text-decoration: none;\r\n        }\r\n\r\n        h1,\r\n        h2,\r\n        h3,\r\n        h4,\r\n        h5,\r\n        h6 {\r\n            margin-bottom: 20px;\r\n            line-height: 1.25;\r\n        }\r\n\r\n        h1 {\r\n            font-size: 32px;\r\n        }\r\n\r\n        h2 {\r\n            font-size: 28px;\r\n        }\r\n\r\n        h3 {\r\n            font-size: 24px;\r\n        }\r\n\r\n        h4 {\r\n            font-size: 20px;\r\n        }\r\n\r\n        h5 {\r\n            font-size: 16px;\r\n        }\r\n\r\n        p,\r\n        ul,\r\n        ol {\r\n            font-size: 16px;\r\n            font-weight: normal;\r\n            margin-bottom: 20px;\r\n        }\r\n\r\n        .container {\r\n            display: block !important;\r\n            clear: both !important;\r\n            margin: 0 auto !important;\r\n            max-width: 580px !important;\r\n        }\r\n\r\n        .container table {\r\n            width: 100% !important;\r\n            border-collapse: collapse;\r\n        }\r\n\r\n        .container .masthead {\r\n            padding: 80px 0;\r\n            background: #71bc37;\r\n            color: white;\r\n        }\r\n\r\n        .container .masthead h1 {\r\n            margin: 0 auto !important;\r\n            max-width: 90%;\r\n            text-transform: uppercase;\r\n        }\r\n\r\n        .container .content {\r\n            background: white;\r\n            padding: 30px 35px;\r\n        }\r\n\r\n        .container .content.footer {\r\n            background: none;\r\n        }\r\n\r\n        .container .content.footer p {\r\n            margin-bottom: 0;\r\n            color: #888;\r\n            text-align: center;\r\n            font-size: 14px;\r\n        }\r\n\r\n        .container .content.footer a {\r\n            color: #888;\r\n            text-decoration: none;\r\n            font-weight: bold;\r\n        }\r\n\r\n        .container .content.footer a:hover {\r\n            text-decoration: underline;\r\n        }\r\n\r\n    </style>\r\n</head>\r\n\r\n<body>\r\n    <table class="body-wrap">\r\n        <tr>\r\n            <td class="container">\r\n\r\n                <!-- Message start -->\r\n                <table>\r\n                    <tr>\r\n                        <td align="center" class="masthead">\r\n\r\n                            <h1>Something Big...</h1>\r\n\r\n                        </td>\r\n                    </tr>\r\n                    <tr>\r\n                        <td class="content">\r\n\r\n                            <h2>Hi Stranger,</h2>\r\n\r\n                            <p>Kielbasa venison ball tip shankle. Boudin prosciutto landjaeger, pancetta jowl turkey tri-tip porchetta beef pork loin drumstick. Frankfurter short ribs kevin pig ribeye drumstick bacon kielbasa. Pork loin brisket biltong, pork belly filet mignon ribeye pig ground round porchetta turducken turkey. Pork belly beef ribs sausage ham hock, ham doner frankfurter pork chop tail meatball beef pig meatloaf short ribs shoulder. Filet mignon ham hock kielbasa beef ribs shank. Venison swine beef ribs sausage pastrami shoulder.</p>\r\n\r\n                            <table>\r\n                                <tr>\r\n                                    <td align="center">\r\n                                        <p>\r\n                                            <a href="#" class="button">Share the Awesomeness</a>\r\n                                        </p>\r\n                                    </td>\r\n                                </tr>\r\n                            </table>\r\n\r\n                            <p>By the way, if you''re wondering where you can find more of this fine meaty filler, visit <a href="http://baconipsum.com">Bacon Ipsum</a>.</p>\r\n\r\n                            <p><em>– Mr. Pen</em></p>\r\n\r\n                        </td>\r\n                    </tr>\r\n                </table>\r\n\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td class="container">\r\n\r\n                <!-- Message start -->\r\n                <table>\r\n                    <tr>\r\n                        <td class="content footer" align="center">\r\n                            <p>Sent by <a href="#">Company Name</a>, 1234 Yellow Brick Road, OZ, 99999</p>\r\n                            <p><a href="mailto:">hello@company.com</a> | <a href="#">Unsubscribe</a></p>\r\n                        </td>\r\n                    </tr>\r\n                </table>\r\n\r\n            </td>\r\n        </tr>\r\n    </table>\r\n</body>\r\n\r\n</html>\r\n', 'ENABLE', NULL, NULL),
(26, 'FAVICON', '', 'ENABLE', NULL, NULL),
(27, 'REGISTER_TITLE', 'REGISTER', 'ENABLE', '2019-02-18 15:48:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `konfig_email`
--

CREATE TABLE IF NOT EXISTS `konfig_email` (
  `ke_id` int(11) NOT NULL,
  `ke_slug` varchar(500) NOT NULL,
  `ke_content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfig_email`
--

INSERT INTO `konfig_email` (`ke_id`, `ke_slug`, `ke_content`) VALUES
(1, 'logo', 'http://smartsoftstudio.com/wp-content/themes/sistemmikir-o/assets/images/logo-smartsoftstudio.png'),
(2, 'perusahaan', 'SMARTSOFT STUDIO'),
(3, 'body', 'Terima Kasih sudah mendaftar silahkan klik tombol dibawah ini untuk memverikasi'),
(4, 'footer', 'sd'),
(5, 'warna', '#8080ff');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) NOT NULL,
  `response_code` smallint(3) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `uri`, `method`, `params`, `api_key`, `ip_address`, `time`, `rtime`, `authorized`, `response_code`) VALUES
(12, 'api/example/users/1', 'get', 'a:13:{s:2:"id";s:1:"1";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"b95151e2-01cb-48b0-fc71-74788b971014";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549426798, 1549430000, '1', 400),
(13, 'api/example/users/1', 'get', 'a:13:{s:2:"id";s:1:"1";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"da6c7ebc-d468-82cd-b107-a43b223e3229";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549426847, 1549430000, '1', 400),
(14, 'api/example/users', 'get', 'a:12:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"295384ee-de46-448a-ee33-5da93f0ee6d3";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549426895, 1549430000, '1', 200),
(15, 'api/example/users/24', 'get', 'a:13:{s:2:"id";s:2:"24";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"9463f032-7a0c-d92f-b412-4fe3b0e3283d";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549426900, 1549430000, '1', 400),
(16, 'api/example/users/24', 'get', 'a:13:{s:2:"id";s:2:"24";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"466fe8da-8fb3-03e6-9281-d0d53ff867b5";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549426910, 1549430000, '1', 400),
(17, 'api/example/users/24', 'get', 'a:13:{s:2:"id";s:2:"24";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"a4353c0f-ae54-9d99-82b9-3952449d6589";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549426923, 1549430000, '1', 400),
(18, 'api/example/users/24', 'get', 'a:13:{s:2:"id";s:2:"24";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"4b9ec719-7307-81d5-7700-cc52c1882174";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549426931, 1549430000, '1', 400),
(19, 'api/example/users/24', 'get', 'a:13:{s:2:"id";s:2:"24";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"1a9c3d5a-3eea-1ea0-192d-69d8b0d3bd7e";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549426934, 1549430000, '1', 400),
(20, 'api/example/users/24', 'get', 'a:13:{s:2:"id";s:2:"24";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"faf745f8-86a1-6571-45a1-1d5c705857e3";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549426935, 1549430000, '1', 400),
(21, 'api/example/users/24', 'get', 'a:13:{s:2:"id";s:2:"24";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"d66bf86e-f241-d6bc-59a8-53e219895de5";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549426936, 1549430000, '1', 400),
(22, 'api/example/users/24', 'get', 'a:13:{s:2:"id";s:2:"24";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"8d1e6190-f1ee-732f-0712-9b86f649431a";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549426958, 1549430000, '1', 400),
(23, 'api/example/users/24', 'get', 'a:13:{s:2:"id";s:2:"24";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"d947680b-21bb-f0d0-cb14-816ffd6557e6";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549426959, 1549430000, '1', 400),
(24, 'api/example/users/24', 'get', 'a:13:{s:2:"id";s:2:"24";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"196ad13d-5766-c800-4cc0-6521f1f0a5fa";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549426967, 1549430000, '1', 400),
(25, 'api/example/users/24', 'get', 'a:13:{s:2:"id";s:2:"24";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"aa627fb0-cd37-f6b7-1353-a00ab4db601f";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549426968, 1549430000, '1', 400),
(26, 'api/example/users/24', 'get', 'a:13:{s:2:"id";s:2:"24";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"5cd4e253-2ef5-0abe-87fd-1c70c0b74460";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549426978, 1549430000, '1', 400),
(27, 'api/example/users/24', 'get', 'a:13:{s:2:"id";s:2:"24";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"313f78a7-c82e-0686-8762-b874535cdcbf";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549427000, 1549430000, '1', 400),
(28, 'api/example/users/24', 'get', 'a:13:{s:2:"id";s:2:"24";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"465eac17-0ecf-a742-60c1-d1bb5aad672c";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549427018, 1549430000, '1', 400),
(29, 'api/example/users/24', 'get', 'a:13:{s:2:"id";s:2:"24";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"b1a5d762-4c11-9bf5-3a0f-c672375a4477";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549427058, 1549430000, '1', 200),
(30, 'api/example/users', 'get', 'a:12:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"bc6fbf72-1adf-b4ba-a316-5b75ea6b1cb9";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549427061, 1549430000, '1', 200),
(31, 'api/example/users-detail/1', 'get', 'a:14:{i:0;N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"541c15c3-9e59-a3ec-6a6c-65e6eee16eda";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=kp7ibnsa9pihb2thj3g5ejllg6gvs00e";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549427100, 1549430000, '1', 200),
(32, 'api/example/users-detail/1', 'get', 'a:14:{i:0;N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"4ea9e5cc-a4c2-710e-9f72-f921bcd470f7";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=8rtpkm1nfabdkg2pphk15kukku3536p8";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549427157, 1549430000, '1', 200),
(33, 'api/example/users-detail/1', 'get', 'a:14:{i:0;N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"c58bbf9d-48fe-4890-0e5a-87c7d21f1bcb";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=8rtpkm1nfabdkg2pphk15kukku3536p8";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549427166, 1549430000, '1', 200),
(34, 'api/example/users-detail/1', 'get', 'a:14:{i:0;N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"a864cc0c-2540-09b1-c9e4-15a3c7791f89";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=8rtpkm1nfabdkg2pphk15kukku3536p8";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549427177, 1549430000, '1', 200),
(35, 'api/example/users', 'get', 'a:12:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"97063f8c-c173-d733-e5b1-eb36b50c6717";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=8rtpkm1nfabdkg2pphk15kukku3536p8";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549427200, 1549430000, '1', 200),
(36, 'api/example/services', 'get', 'a:12:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"d74b25e0-c53c-1b24-ee1e-a456ca5e754a";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=8rtpkm1nfabdkg2pphk15kukku3536p8";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428325, 1549430000, '1', 0),
(37, 'api/example/services', 'get', 'a:12:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"2dcb425a-4947-898b-1c78-91cda05e66a3";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=h6f32vnji308dtjd5sr71vei0ltn58lq";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428345, 1549430000, '1', 404),
(38, 'api/example/services', 'get', 'a:12:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"ad64360f-e0c5-ec3c-3da3-c50b37fbef7f";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=h6f32vnji308dtjd5sr71vei0ltn58lq";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428370, 1549430000, '1', 404),
(39, 'api/example/services', 'get', 'a:12:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"7c2b7aba-7f85-deed-d309-3d825769427e";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=h6f32vnji308dtjd5sr71vei0ltn58lq";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428382, 1549430000, '1', 404),
(40, 'api/example/services', 'post', 'a:17:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:3:"337";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"a927b74d-cc4b-7215-9fdd-f3592820fcb0";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:12:"Content-Type";s:68:"multipart/form-data; boundary=----WebKitFormBoundarymV0NNVKnF6IL7z29";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=h6f32vnji308dtjd5sr71vei0ltn58lq";s:5:"title";s:3:"tes";s:4:"date";s:10:"2019-01-01";s:7:"content";s:3:"ini";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428413, 1549430000, '1', 200),
(41, 'api/example/services', 'put', 'a:18:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:2:"43";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"612f28dc-dc61-b57a-c9c0-69a5a8262b98";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=h6f32vnji308dtjd5sr71vei0ltn58lq";s:5:"title";s:4:"tesa";s:4:"date";s:10:"2019-01-01";s:7:"content";s:3:"ini";s:2:"id";s:1:"1";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428448, 1549430000, '1', 200),
(42, 'api/example/services-enable', 'put', 'a:15:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"4";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"391bbf12-fd99-4e28-7fc5-6496dc491b0c";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=h6f32vnji308dtjd5sr71vei0ltn58lq";s:2:"id";s:1:"1";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428468, 1549430000, '1', 200),
(43, 'api/example/services-disable', 'put', 'a:15:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"4";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"d5cbf18b-d9b5-f44d-c232-f84cc4d11db2";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=h6f32vnji308dtjd5sr71vei0ltn58lq";s:2:"id";s:1:"1";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428472, 1549430000, '1', 200),
(44, 'api/example/services', 'get', 'a:13:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"16344db9-d25f-e334-9651-333d7e88314e";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=h6f32vnji308dtjd5sr71vei0ltn58lq";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428480, 1549430000, '1', 200),
(45, 'api/example/services', 'get', 'a:13:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"caef2b39-8710-18ca-6ce5-4fe6b70992a0";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=h6f32vnji308dtjd5sr71vei0ltn58lq";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428655, 1549430000, '1', 404),
(46, 'api/example/services/1', 'get', 'a:15:{i:0;N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"5c1fc3d5-e1a0-32d4-5577-0da8790112ac";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428659, 1549430000, '1', 404),
(47, 'api/example/services/0', 'get', 'a:15:{i:0;N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"b65e8ad4-2781-d95d-de2c-4c8e8aa447fc";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428662, 1549430000, '1', 404),
(48, 'api/example/services', 'get', 'a:13:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"b6e9a137-e2d0-9180-a433-6216c066a468";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428677, 1549430000, '1', 404),
(49, 'api/example/services/a', 'get', 'a:14:{s:1:"a";N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"72518478-f719-4e92-cfe4-bf027a496092";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428680, 1549430000, '1', 404),
(50, 'api/example/services/a', 'get', 'a:14:{s:1:"a";N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"faff51a0-75b3-9d5f-3b80-ba00e099b484";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428682, 1549430000, '1', 404),
(51, 'api/example/services/a', 'get', 'a:14:{s:1:"a";N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"f20c8e54-9446-4d38-8a0f-219f1d5a561e";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428715, 1549430000, '1', 404),
(52, 'api/example/services/a', 'get', 'a:14:{s:1:"a";N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"5801b626-9ea3-b456-ae32-9af94267f20c";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428717, 1549430000, '1', 404),
(53, 'api/example/services/a', 'get', 'a:14:{s:1:"a";N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"43e761b9-d088-5745-33a6-e6e2c77f8e0a";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428725, 1549430000, '1', 0),
(54, 'api/example/services/a', 'get', 'a:14:{s:1:"a";N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"dda3a68d-329e-371a-e751-4fd11e3241e7";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428727, 1549430000, '1', 0),
(55, 'api/example/services/aa', 'get', 'a:14:{s:2:"aa";N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"c960faa4-1219-26de-d6fe-b7ddc07ec486";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428729, 1549430000, '1', 0),
(56, 'api/example/services/aa', 'get', 'a:14:{s:2:"aa";N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"ab82d302-2290-2edd-eb75-0771e0de4f73";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428730, 1549430000, '1', 0),
(57, 'api/example/services', 'get', 'a:13:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"b5495e5a-91ee-67ca-07fd-505c64ac0685";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428734, 1549430000, '1', 0),
(58, 'api/example/services', 'get', 'a:13:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"9923d27a-b199-e900-361a-1d6b440579a1";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428741, 1549430000, '1', 404),
(59, 'api/example/services', 'get', 'a:13:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"0e4e077d-2103-723e-61fb-c5ec2ee8d025";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428742, 1549430000, '1', 404),
(60, 'api/example/services', 'get', 'a:13:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"f47e693b-addb-43f8-7837-ab0c7793c087";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428748, 1549430000, '1', 404),
(61, 'api/example/services', 'get', 'a:13:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"cbbd6ccb-dc98-f683-b919-c56aa9c0e66d";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428749, 1549430000, '1', 404),
(62, 'api/example/services', 'get', 'a:13:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"d1976171-7268-0319-2e50-4851a2fd6c22";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428786, 1549430000, '1', 200),
(63, 'api/example/services', 'get', 'a:13:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"fabc78b4-cc98-1a61-3131-0c44475cbcdc";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428800, 1549430000, '1', 404),
(64, 'api/example/services', 'get', 'a:13:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"1ea384ac-8306-2f85-88da-49178e8a7f0e";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428801, 1549430000, '1', 404),
(65, 'api/example/services/disable', 'get', 'a:14:{s:7:"disable";N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"ab54ff73-1a8a-cb60-b1b0-870b35536d9d";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428805, 1549430000, '1', 404),
(66, 'api/example/services/disable', 'get', 'a:14:{s:7:"disable";N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"ea261273-b754-5389-5412-58e6beb47631";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428807, 1549430000, '1', 404),
(67, 'api/example/services/disable', 'get', 'a:14:{s:7:"disable";N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"9e35cfeb-4c7c-699b-5643-8470aca0fbcb";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428808, 1549430000, '1', 404),
(68, 'api/example/services/disable', 'get', 'a:14:{s:7:"disable";N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"04edaf72-fcb9-e17b-2fc6-2986cbbbf741";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428815, 1549430000, '1', 200),
(69, 'api/example/services/disable', 'get', 'a:14:{s:7:"disable";N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"2514eb50-6c21-1356-dfa9-e4eac100bf8a";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428816, 1549430000, '1', 200);
INSERT INTO `logs` (`id`, `uri`, `method`, `params`, `api_key`, `ip_address`, `time`, `rtime`, `authorized`, `response_code`) VALUES
(70, 'api/example/services/disable', 'get', 'a:14:{s:7:"disable";N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"be916c7e-09f8-5b25-2c50-d09787853210";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428826, 1549430000, '1', 200),
(71, 'api/example/services/disable', 'get', 'a:14:{s:7:"disable";N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"fddcff9d-7292-6c1e-ae51-0e74db0f397e";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549428841, 1549430000, '1', 200),
(72, 'api/services', 'get', 'a:13:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"bb1329fc-8f5a-bd41-0f66-d7fe899375b6";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=gfi1v6ub44v9airna31r4vql0d5mq2g2";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434763, 1549430000, '1', 404),
(73, 'api/services/disable', 'get', 'a:13:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"1e145c56-5906-ea88-a56e-a6c2bf9ae277";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434776, 1549430000, '1', 200),
(74, 'api/services', 'post', 'a:17:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:3:"340";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"003e2e9a-9dda-4605-9c78-fedc0f0a57be";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:78:"------WebKitFormBoundarylrlQsIiHIrwCnJE3\r\nContent-Disposition:_form-data;_name";s:261:""title"\r\n\r\ntes ah\r\n------WebKitFormBoundarylrlQsIiHIrwCnJE3\r\nContent-Disposition: form-data; name="date"\r\n\r\n2019-01-01\r\n------WebKitFormBoundarylrlQsIiHIrwCnJE3\r\nContent-Disposition: form-data; name="content"\r\n\r\nini\r\n------WebKitFormBoundarylrlQsIiHIrwCnJE3--\r\n";i:0;s:261:""title"\r\n\r\ntes ah\r\n------WebKitFormBoundarylrlQsIiHIrwCnJE3\r\nContent-Disposition: form-data; name="date"\r\n\r\n2019-01-01\r\n------WebKitFormBoundarylrlQsIiHIrwCnJE3\r\nContent-Disposition: form-data; name="content"\r\n\r\nini\r\n------WebKitFormBoundarylrlQsIiHIrwCnJE3--\r\n";i:1;s:261:""title"\r\n\r\ntes ah\r\n------WebKitFormBoundarylrlQsIiHIrwCnJE3\r\nContent-Disposition: form-data; name="date"\r\n\r\n2019-01-01\r\n------WebKitFormBoundarylrlQsIiHIrwCnJE3\r\nContent-Disposition: form-data; name="content"\r\n\r\nini\r\n------WebKitFormBoundarylrlQsIiHIrwCnJE3--\r\n";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434796, 1549430000, '1', 200),
(75, 'api/services', 'post', 'a:17:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:3:"340";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"21a992d3-2eab-652c-dd40-fdb1b27632f2";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:12:"Content-Type";s:68:"multipart/form-data; boundary=----WebKitFormBoundaryT4EoJtBkCQ8K6lqn";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:5:"title";s:6:"tes ah";s:4:"date";s:10:"2019-01-01";s:7:"content";s:3:"ini";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434803, 1549430000, '1', 200),
(76, 'api/services/detail', 'get', 'a:12:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"e91f5cdb-a803-5c82-de2d-af59bdf0072b";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434820, 1549430000, '1', 200),
(77, 'api/services/detail/1', 'get', 'a:14:{i:0;N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"da4fade1-054f-e5bc-7b3d-7bdfd6dc0890";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434823, 1549430000, '1', 200),
(78, 'api/services/detail/2', 'get', 'a:14:{i:0;N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"216ef3d2-4d51-94bb-4a48-6947f622e27f";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434825, 1549430000, '1', 200),
(79, 'api/services/detail/1', 'get', 'a:14:{i:0;N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"537a295c-f413-84a0-cf08-67482a6c039d";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434830, 1549430000, '1', 200),
(80, 'api/services/detail', 'get', 'a:12:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"4f91ad2b-5a8b-947f-efdd-412572cc6296";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434831, 1549430000, '1', 200),
(81, 'api/services/detail/1', 'get', 'a:14:{i:0;N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"15127d88-080d-fb1b-d526-47437f9257d2";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434849, 1549430000, '1', 200),
(82, 'api/services/detail/2', 'get', 'a:14:{i:0;N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Postman-Token";s:36:"b2321b65-d3c7-71b6-c06c-bf8c11305996";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434851, 1549430000, '1', 200),
(83, 'api/services', 'put', 'a:18:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:2:"47";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"d74656c0-5e25-a4c6-7237-23ef9a1ce210";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:5:"title";s:8:"tesah uh";s:4:"date";s:10:"2019-01-01";s:7:"content";s:3:"ini";s:2:"id";s:1:"2";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434871, 1549430000, '1', 200),
(84, 'api/services/enable/1', 'put', 'a:19:{i:0;N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:2:"47";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"c2454b7a-dddb-d292-306e-ddc176572eb8";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:5:"title";s:8:"tesah uh";s:4:"date";s:10:"2019-01-01";s:7:"content";s:3:"ini";s:2:"id";s:1:"2";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434936, 1549430000, '1', 200),
(85, 'api/services/enable/1', 'put', 'a:16:{i:0;N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"4";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"35291873-7622-cfd6-23b5-c0c943dddcef";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:2:"id";s:1:"2";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434952, 1549440000, '1', 200),
(86, 'api/services/enable/1', 'put', 'a:16:{i:0;N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"4";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"043b2b1f-e7e5-18ca-e0de-b3efa3271808";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:2:"id";s:1:"2";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434970, 1549440000, '1', 200),
(87, 'api/services/enable/1', 'put', 'a:16:{i:0;N;s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"4";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"6b1ddca4-8512-a1b9-382e-ebc1a7796a91";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:2:"id";s:1:"2";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434971, 1549440000, '1', 200),
(88, 'api/services/enable', 'put', 'a:15:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"4";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"d41aed32-18b4-96a0-6158-0d008a068ca1";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:2:"id";s:1:"2";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549434990, 1549440000, '1', 200),
(89, 'api/services/enable', 'put', 'a:15:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"4";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"bcfb6c42-5e8e-3733-2fe7-bede9320fbd0";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:2:"id";s:1:"2";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549435032, 1549440000, '1', 200),
(90, 'api/services/disable', 'put', 'a:15:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"4";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"8ba1482d-f892-55a3-293d-faadb1ceb153";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:2:"id";s:1:"2";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549435039, 1549440000, '1', 200),
(91, 'api/services/enable', 'put', 'a:15:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"4";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"7bd0b329-191e-52a9-d139-a2d7c158cd13";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:2:"id";s:1:"2";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549435046, 1549440000, '1', 200),
(92, 'api/services/delete', 'put', 'a:15:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"4";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"643bb8b6-7edb-359a-7151-afb177dc0837";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:2:"id";s:1:"2";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549435056, 1549440000, '1', 200),
(93, 'api/services', 'delete', 'a:15:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"4";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"041e4196-2eea-aa15-bad9-20df6c9acb1d";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=htg6ga22bj85pmfg8eurnju3pe5i262u";s:2:"id";s:1:"2";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549435078, 1549440000, '1', 200),
(94, 'api/services', 'delete', 'a:15:{s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"4";s:10:"User-Agent";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36";s:13:"Cache-Control";s:8:"no-cache";s:6:"Origin";s:51:"chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Postman-Token";s:36:"1f715e2e-ea3b-d008-56b0-946c4f5f4d53";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:45:"id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,fil;q=0.6";s:6:"Cookie";s:43:"ci_session=nkv3g7akvntgcd18ur7a4k02o5pm9rv6";s:2:"id";s:1:"2";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.236.122', 1549435084, 1549440000, '1', 200),
(95, 'api/services', 'get', 'a:9:{s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"9eb3274b-e76d-48c9-8398-904cb2c09d56";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";}', '', '118.136.148.201', 1550041680, 0.046937, '0', 403),
(96, 'api/services', 'get', 'a:11:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"fac2440a-8f8a-430b-a974-b987f96839ca";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=m7h04auf726kni0f1drtlu2i5gsto0lv";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550041746, 0.03969, '1', 0),
(97, 'api/customer', 'get', 'a:11:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"d183c396-83d6-46f9-8625-9c7e996b1ee6";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=m7h04auf726kni0f1drtlu2i5gsto0lv";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550041890, 0.0436552, '1', 404),
(98, 'api/customer', 'get', 'a:11:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"58030595-56be-4fbe-888c-be60f7e5563c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=m7h04auf726kni0f1drtlu2i5gsto0lv";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550042033, 0.3466, '1', 200),
(99, 'api/customer/detail/1', 'get', 'a:13:{i:0;N;s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"7fe9cef8-cbb0-4272-80d3-f9900f4a2297";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=00p5toh62fbnfbrapstu4do5pd2m5k1g";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550043293, 0.038852, '1', 200),
(100, 'api/customer/detail/2', 'get', 'a:13:{i:0;N;s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"08d7c7d9-094a-41ea-81ef-e36b64bc9014";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=cebaammcrlfrmo22ob063uu9j99aj3or";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550043338, 0.038234, '1', 200),
(101, 'api/customer/detail/3', 'get', 'a:13:{i:0;N;s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"7df16ff6-d61f-4187-9c17-c5ce6167b3df";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=cebaammcrlfrmo22ob063uu9j99aj3or";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550043341, 0.0393689, '1', 200),
(102, 'api/customer/detail/2', 'get', 'a:13:{i:0;N;s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"bd5e8835-e313-43fa-af33-d81fe9524a2b";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=cebaammcrlfrmo22ob063uu9j99aj3or";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550043345, 0.0416031, '1', 200),
(103, 'api/customer/detail', 'get', 'a:11:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"ad35228d-cc4d-49bc-a4bf-8cea06c5e871";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=cebaammcrlfrmo22ob063uu9j99aj3or";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550043354, 0.041436, '1', 200),
(104, 'api/customer/detail/1', 'get', 'a:13:{i:0;N;s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"e30dc5a1-111a-4df7-9f68-10b8a01b5d2f";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=cebaammcrlfrmo22ob063uu9j99aj3or";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550043357, 0.0402689, '1', 200),
(105, 'api/customer/index_detail/1', 'get', 'a:13:{i:0;N;s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"378b4b80-ba76-4700-a7f2-90843fe6d12c";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=cebaammcrlfrmo22ob063uu9j99aj3or";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550043363, 0.0494442, '1', 200),
(106, 'api/customer/detail/1', 'get', 'a:13:{i:0;N;s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"92d2bfcb-f7c6-4a74-b267-8f7ec2c94079";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=cebaammcrlfrmo22ob063uu9j99aj3or";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550043379, 0.045403, '1', 200),
(107, 'api/customer/detail/1', 'get', 'a:13:{i:0;N;s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"3319eaf6-e27f-4fc8-9127-e9f085acca16";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=cebaammcrlfrmo22ob063uu9j99aj3or";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550043412, 0.040298, '1', 200),
(108, 'api/customer/detail/2', 'get', 'a:13:{i:0;N;s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"e5354978-963c-47d5-9011-9df26f790075";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=cebaammcrlfrmo22ob063uu9j99aj3or";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550043439, 0.0403781, '1', 404),
(109, 'api/customer/detail/2', 'post', 'a:17:{i:0;N;s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"6f15e59e-9569-43bc-a36b-6e38d2614227";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=cebaammcrlfrmo22ob063uu9j99aj3or";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:12:"Content-Type";s:80:"multipart/form-data; boundary=--------------------------270277143471167715971007";s:14:"Content-Length";s:3:"583";s:10:"Connection";s:10:"keep-alive";s:4:"name";s:18:"Bayu Briyan El Roy";s:5:"email";s:24:"bayubriyanelroy@gmal.com";s:5:"phone";s:12:"081230008101";s:7:"address";s:56:"Jl Madasah Azziadah 24 Klender Duren Sawit Jakarta Timur";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550043765, 0.0433841, '1', 200),
(110, 'api/customer/detail/2', 'post', 'a:17:{i:0;N;s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"021b5b57-e343-4b71-8bd7-9eb0ee56608b";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=ocfa57scutskl15se2kfcquut0c5qcf6";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:12:"Content-Type";s:80:"multipart/form-data; boundary=--------------------------241408044604135091511042";s:14:"Content-Length";s:3:"473";s:10:"Connection";s:10:"keep-alive";s:4:"name";s:0:"";s:5:"email";s:0:"";s:7:"address";s:0:"";s:5:"phone";s:0:"";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550043819, 0.074012, '1', 200),
(111, 'api/customer', 'put', 'a:17:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"c7c07d35-658f-4bc5-91fe-808d684170b1";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=ocfa57scutskl15se2kfcquut0c5qcf6";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:14:"Content-Length";s:3:"167";s:10:"Connection";s:10:"keep-alive";s:4:"name";s:18:"Bayu Briyan El Roy";s:5:"email";s:24:"bayubriyanelroy@gmal.com";s:7:"address";s:12:"081230008101";s:5:"phone";s:56:"Jl Madasah Azziadah 24 Klender Duren Sawit Jakarta Timur";s:2:"id";s:1:"2";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550048354, 0.0457339, '1', 200),
(112, 'api/customer', 'put', 'a:17:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"891707bc-ee69-4f66-9f9a-d443df828569";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=37s1q7gk3gn2aeg9ro5ob31up38apt58";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:14:"Content-Length";s:2:"33";s:10:"Connection";s:10:"keep-alive";s:7:"address";s:0:"";s:5:"phone";s:0:"";s:2:"id";s:1:"2";s:4:"name";s:0:"";s:5:"email";s:0:"";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550048393, 0.0788889, '1', 200),
(113, 'api/customer', 'delete', 'a:12:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"20c22bab-e0ff-4ae7-93e9-1b31a76b80fe";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=37s1q7gk3gn2aeg9ro5ob31up38apt58";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:14:"Content-Length";s:1:"0";s:10:"Connection";s:10:"keep-alive";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550048516, 0.04495, '1', 400),
(114, 'api/customer', 'delete', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"c81411b7-5a9b-412d-bb50-45725d178c11";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=37s1q7gk3gn2aeg9ro5ob31up38apt58";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:14:"Content-Length";s:1:"4";s:10:"Connection";s:10:"keep-alive";s:2:"id";s:1:"3";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550048560, 0.0388892, '1', 200),
(115, 'api/customer', 'delete', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"26396c1a-8e8d-47f3-9602-dc03e8e12fc3";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=37s1q7gk3gn2aeg9ro5ob31up38apt58";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:14:"Content-Length";s:1:"4";s:10:"Connection";s:10:"keep-alive";s:2:"id";s:1:"3";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550048595, 0.0394552, '1', 404),
(116, 'api/customer', 'delete', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"ac36bcce-0e42-4a69-8308-4ede1e1f3561";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=37s1q7gk3gn2aeg9ro5ob31up38apt58";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:14:"Content-Length";s:1:"4";s:10:"Connection";s:10:"keep-alive";s:2:"id";s:1:"2";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550048671, 0.0670228, '1', 200),
(117, 'api/customer', 'delete', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"c407981f-055a-4663-96fd-2d9e281bdff5";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=8i5f6u5b0nfn5tl1ivgjost2obatfvcv";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:14:"Content-Length";s:1:"4";s:10:"Connection";s:10:"keep-alive";s:2:"id";s:1:"2";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550048689, 0.04316, '1', 404),
(118, 'api/customer/enable', 'put', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"55701b25-9c14-46aa-ba95-fde151a8281d";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=8i5f6u5b0nfn5tl1ivgjost2obatfvcv";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:14:"Content-Length";s:1:"4";s:10:"Connection";s:10:"keep-alive";s:2:"id";s:1:"1";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550048728, 0.046968, '1', 200),
(119, 'api/customer/enable', 'put', 'a:12:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"56c42994-6fd9-4291-a637-426d62fa3c6a";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=8i5f6u5b0nfn5tl1ivgjost2obatfvcv";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:14:"Content-Length";s:1:"0";s:10:"Connection";s:10:"keep-alive";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.148.201', 1550048810, 0.0421109, '1', 200),
(120, 'api/customer', 'get', 'a:10:{s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"55658acd-5e8a-420b-ac48-52cd56478e31";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=noffqtdft10n5hslgh4410qv6kk88j9l";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";}', '', '118.136.101.98', 1553486265, 0.043426, '0', 403),
(121, 'api/customer', 'get', 'a:11:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"580bffef-90d3-49fb-b877-2c5a0b3768f6";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=noffqtdft10n5hslgh4410qv6kk88j9l";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553486285, 0.0393262, '1', 200),
(122, 'api/customer', 'post', 'a:11:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"74e8aac9-a514-4fd1-a378-7cb584845d45";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=noffqtdft10n5hslgh4410qv6kk88j9l";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:14:"Content-Length";s:1:"0";s:10:"Connection";s:10:"keep-alive";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553486435, 0.0415149, '1', 200),
(123, 'api/customer', 'get', 'a:11:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"61ad4f72-a273-4b0c-90d1-776651ee155d";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=0ou9naa8qcf17lcnuuh5836h89j9jng2";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553486456, 0.0401361, '1', 200),
(124, 'api/customer/detail/1', 'get', 'a:13:{i:0;N;s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"f48b46f5-ef2c-4ced-828d-d55dcf4741e4";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=0ou9naa8qcf17lcnuuh5836h89j9jng2";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553486464, 0.0408051, '1', 200),
(125, 'api/customer/detail/2', 'get', 'a:13:{i:0;N;s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"25a837ed-9429-4b7b-adf2-f6a4c5a37024";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=0ou9naa8qcf17lcnuuh5836h89j9jng2";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553486468, 0.0408051, '1', 404),
(126, 'api/customer/detail/1', 'get', 'a:13:{i:0;N;s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"d35dbdaa-e37f-4b92-9b2b-12f285cb0b12";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=0ou9naa8qcf17lcnuuh5836h89j9jng2";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";i:1;N;}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553486471, 0.042562, '1', 200),
(127, 'api/customer/detail/1', 'post', 'a:12:{i:0;N;s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"914bbbda-2ea7-46f7-b9a4-41e60cbcbfcf";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=0ou9naa8qcf17lcnuuh5836h89j9jng2";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:14:"Content-Length";s:1:"0";s:10:"Connection";s:10:"keep-alive";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553486475, 0.041795, '1', 200),
(128, 'api/customer/detail/1', 'post', 'a:12:{i:0;N;s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"b931dae0-efcf-4311-bad6-6b0281842cf9";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=0ou9naa8qcf17lcnuuh5836h89j9jng2";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:14:"Content-Length";s:1:"0";s:10:"Connection";s:10:"keep-alive";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553486478, 0.0405412, '1', 200),
(129, 'api/customer', 'get', 'a:11:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"776eb3f3-8102-4bd7-b787-1a5c4bcb4795";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=0ou9naa8qcf17lcnuuh5836h89j9jng2";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553486548, 0.0437829, '1', 200),
(130, 'api/customer', 'put', 'a:11:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"28873dba-1b14-4637-916e-8cdb5119f1eb";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=0ou9naa8qcf17lcnuuh5836h89j9jng2";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:14:"Content-Length";s:1:"0";s:10:"Connection";s:10:"keep-alive";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553486610, 0.0680921, '1', 200),
(131, 'api/customer', 'put', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"7e1eac1e-faf7-44dd-b734-af0e471a8dea";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=0ou9naa8qcf17lcnuuh5836h89j9jng2";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:12:"Content-Type";s:80:"multipart/form-data; boundary=--------------------------132173021837729928827018";s:14:"Content-Length";s:3:"601";s:10:"Connection";s:10:"keep-alive";s:90:"----------------------------132173021837729928827018\r\nContent-Disposition:_form-data;_name";s:510:""id"\r\n\r\n1\r\n----------------------------132173021837729928827018\r\nContent-Disposition: form-data; name="name"\r\n\r\nMarcell\r\n----------------------------132173021837729928827018\r\nContent-Disposition: form-data; name="email"\r\n\r\nmarcell@gmail.com\r\n----------------------------132173021837729928827018\r\nContent-Disposition: form-data; name="phone"\r\n\r\n0\r\n----------------------------132173021837729928827018\r\nContent-Disposition: form-data; name="address"\r\n\r\n-\r\n----------------------------132173021837729928827018--\r\n";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553486651, 0.0602229, '1', 200);
INSERT INTO `logs` (`id`, `uri`, `method`, `params`, `api_key`, `ip_address`, `time`, `rtime`, `authorized`, `response_code`) VALUES
(132, 'api/customer/index', 'put', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"bdc624da-d819-4d43-a638-2841595334cf";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=0ou9naa8qcf17lcnuuh5836h89j9jng2";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:12:"Content-Type";s:80:"multipart/form-data; boundary=--------------------------058076299379341907803355";s:14:"Content-Length";s:3:"601";s:10:"Connection";s:10:"keep-alive";s:90:"----------------------------058076299379341907803355\r\nContent-Disposition:_form-data;_name";s:510:""id"\r\n\r\n1\r\n----------------------------058076299379341907803355\r\nContent-Disposition: form-data; name="name"\r\n\r\nMarcell\r\n----------------------------058076299379341907803355\r\nContent-Disposition: form-data; name="email"\r\n\r\nmarcell@gmail.com\r\n----------------------------058076299379341907803355\r\nContent-Disposition: form-data; name="phone"\r\n\r\n0\r\n----------------------------058076299379341907803355\r\nContent-Disposition: form-data; name="address"\r\n\r\n-\r\n----------------------------058076299379341907803355--\r\n";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553486659, 0.0498202, '1', 200),
(133, 'api/customer', 'put', 'a:17:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"7017eee3-7f68-470d-b48f-cda8a497db21";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=0ou9naa8qcf17lcnuuh5836h89j9jng2";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:14:"Content-Length";s:2:"61";s:10:"Connection";s:10:"keep-alive";s:2:"id";s:1:"1";s:4:"name";s:7:"Marcell";s:5:"email";s:17:"marcell@gmail.com";s:5:"phone";s:1:"0";s:7:"address";s:1:"-";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553486677, 0.0547671, '1', 200),
(134, 'api/customer', 'put', 'a:17:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"0919d15c-ab2d-4719-905a-294bab410871";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=0ou9naa8qcf17lcnuuh5836h89j9jng2";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:14:"Content-Length";s:2:"72";s:10:"Connection";s:10:"keep-alive";s:2:"id";s:1:"1";s:4:"name";s:7:"Marcell";s:5:"email";s:17:"marcell@gmail.com";s:5:"phone";s:12:"023489234234";s:7:"address";s:1:"-";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553486705, 0.067431, '1', 200),
(135, 'api/customer', 'get', 'a:12:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"22946704-6ecb-4ae0-818a-984fe1ebb128";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=0ou9naa8qcf17lcnuuh5836h89j9jng2";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:14:"Content-Length";s:1:"0";s:10:"Connection";s:10:"keep-alive";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553486710, 0.0617602, '1', 200),
(136, 'api/service/1', 'get', 'a:12:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Cache-Control";s:9:"max-age=0";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:25:"Upgrade-Insecure-Requests";s:1:"1";s:10:"User-Agent";s:104:"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.75 Safari/537.36";s:6:"Accept";s:118:"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:23:"en-US,en;q=0.9,id;q=0.8";s:6:"Cookie";s:162:"__tawkuuid=e::gatoko1.com::OhUiMUccaj8WHrrU9umxSbLztAdgNdRTssI1QjdAzElG8peDYrIMeFEHEJGxhcsK::2; timezone=Asia/Jakarta; ci_session=ikkhl00q5hb0lmtih2p6drde5dd37s1v";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553490057, 0.0625389, '1', 200),
(137, 'api/service/1', 'get', 'a:12:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:4:"Host";s:11:"gatoko1.com";s:10:"Connection";s:10:"keep-alive";s:13:"Cache-Control";s:9:"max-age=0";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:25:"Upgrade-Insecure-Requests";s:1:"1";s:10:"User-Agent";s:104:"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.75 Safari/537.36";s:6:"Accept";s:118:"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:15:"Accept-Language";s:23:"en-US,en;q=0.9,id;q=0.8";s:6:"Cookie";s:162:"__tawkuuid=e::gatoko1.com::OhUiMUccaj8WHrrU9umxSbLztAdgNdRTssI1QjdAzElG8peDYrIMeFEHEJGxhcsK::2; timezone=Asia/Jakarta; ci_session=ng0su29jtcb11lv1ee30qq70g9o6j7fs";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1553493660, 0.158972, '1', 200),
(138, 'api/example/users', 'get', 'a:9:{s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"0a4c05b5-5bda-4ae6-b446-a56b0f58dd10";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";}', '', '118.136.101.98', 1554794034, 0.0983059, '0', 403),
(139, 'api/example/users', 'get', 'a:11:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"10838701-cb4f-4a83-a991-0e05906965ca";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=p051e6s1ql0263n5n3sddmlsk9u8rqs6";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1554794302, 0.0760469, '1', 0),
(140, 'api/example/users', 'get', 'a:11:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"3a770d89-3c5a-426c-8a88-ab7b2ff71a96";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=cb1hqv00que8cpvs70e1d5895usqu7td";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1554883642, 0.0705218, '1', 0),
(141, 'api/example', 'get', 'a:11:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"48c7470c-04ff-47f0-9e30-e464283234f0";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=94jbc6nbivmbtahbnm04qncc3pf2585j";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1554883651, 0.055877, '1', 0),
(142, 'api/example', 'get', 'a:11:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"f5001237-7200-4352-b3f3-4aef64823792";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=94jbc6nbivmbtahbnm04qncc3pf2585j";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1554883678, 0.0204818, '1', 0),
(143, 'api/example', 'get', 'a:11:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"Cache-Control";s:8:"no-cache";s:13:"Postman-Token";s:36:"aba6da08-f4f7-4619-99b5-04c6ee8ffc87";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.1";s:6:"Accept";s:3:"*/*";s:4:"Host";s:11:"gatoko1.com";s:6:"Cookie";s:43:"ci_session=94jbc6nbivmbtahbnm04qncc3pf2585j";s:15:"Accept-Encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";s:14:"Content-Length";s:1:"0";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '118.136.101.98', 1554883745, 0.136361, '1', 200),
(144, 'api/example', 'get', 'a:9:{s:4:"Host";s:11:"gatoko1.com";s:6:"Accept";s:3:"*/*";s:15:"Accept-Encoding";s:13:"deflate, gzip";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:13:"Cache-Control";s:8:"no-cache";s:13:"postman-token";s:36:"a99bba16-ad49-13bc-4f20-f6991eb24681";s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:14:"Content-Length";s:1:"0";s:12:"Content-Type";s:33:"application/x-www-form-urlencoded";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '103.233.102.8', 1554883924, 0.0799909, '1', 200),
(145, 'api/agenda', 'get', 'a:9:{s:6:"status";s:6:"ENABLE";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"64957500-f314-450a-88ee-7348a5a3d12e";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:15:"accept-encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";}', '', '::1', 1581107206, 0.388589, '0', 403),
(146, 'api/agenda', 'get', 'a:9:{s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"18e1f5fd-d1ed-41cc-8db9-84e288d1b2d3";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=svug2616ig40tacs4ip570qdbk40lhmh";s:15:"accept-encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";}', '', '::1', 1581107290, 0.221693, '0', 403),
(147, 'api/agenda', 'get', 'a:10:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"826c4bf3-f82d-4795-8040-90d3745d49bb";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=svug2616ig40tacs4ip570qdbk40lhmh";s:15:"accept-encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581107298, 0.188079, '1', 200),
(148, 'api/agenda', 'get', 'a:10:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"b6ea18bc-d202-47b6-9518-ff1e92555f34";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=svug2616ig40tacs4ip570qdbk40lhmh";s:15:"accept-encoding";s:13:"gzip, deflate";s:10:"Connection";s:10:"keep-alive";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581107485, 0.119811, '1', 0),
(149, 'api/agenda/data', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"b435f5f1-d482-405e-9c72-34cc7019c802";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=svug2616ig40tacs4ip570qdbk40lhmh";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------681613633344753041997619";s:14:"content-length";s:3:"162";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:3:"all";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581107772, 0.171924, '1', 200),
(150, 'api/agenda/data', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"c6a1f0a6-af16-46f9-856e-dc373d2eb58f";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=pgp1b4aoch5h6jen1f6q28umaht73mei";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------424556575584894607287387";s:14:"content-length";s:3:"162";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:3:"all";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581107796, 0.210317, '1', 200),
(151, 'api/agenda/data', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"40218baf-f530-4774-b224-9ed9e53cc0f4";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=pgp1b4aoch5h6jen1f6q28umaht73mei";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------519331652213454007049437";s:14:"content-length";s:3:"162";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:3:"all";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581107848, 0.222481, '1', 200),
(152, 'api/agenda/data', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"eab8df73-9a92-4efa-a3f9-3b9db6ee3e9b";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=pgp1b4aoch5h6jen1f6q28umaht73mei";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------539476156032771192763629";s:14:"content-length";s:3:"162";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:3:"all";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581107895, 0.156217, '1', 200),
(153, 'api/agenda/data', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"a174ed1f-4fc6-4643-b7ce-f122966f1af2";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=pgp1b4aoch5h6jen1f6q28umaht73mei";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------767302900973670512527769";s:14:"content-length";s:3:"162";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:3:"all";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581108010, 0.111477, '1', 0),
(154, 'api/agenda/data', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"3547ea87-16e9-45a4-9f3a-ddf26bb3d179";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=pgp1b4aoch5h6jen1f6q28umaht73mei";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------501420790186009958579429";s:14:"content-length";s:3:"162";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:3:"all";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581108039, 0.204038, '1', 200),
(155, 'api/agenda/data', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"bc86e018-e483-4dbb-95ca-628593e98d09";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=pgp1b4aoch5h6jen1f6q28umaht73mei";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------410346059560643206528682";s:14:"content-length";s:3:"160";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:1:"1";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581108051, 0.162569, '1', 404),
(156, 'api/agenda/data', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"6ba5b422-ea70-460f-baf6-447f768d6f35";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=pgp1b4aoch5h6jen1f6q28umaht73mei";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------507903723317984818360281";s:14:"content-length";s:3:"160";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:1:"1";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581108066, 0.0873361, '1', 0),
(157, 'api/agenda/data', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"05b80c70-952c-45e2-9305-2d54a738f715";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=pgp1b4aoch5h6jen1f6q28umaht73mei";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------497064197050139166403650";s:14:"content-length";s:3:"160";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:1:"1";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581108088, 0.125984, '1', 0),
(158, 'api/agenda/data', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"65aa414a-368b-49b2-bc1d-f4dc9e225d36";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=6o1ueau9ft5vrt1thn2tbutjqgh4a8u2";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------642213496888560854859485";s:14:"content-length";s:3:"160";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:1:"1";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581108194, 0.135526, '1', 0),
(159, 'api/agenda/data', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"fec4f177-5ab0-484d-8c93-c1265f4c0b8e";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=6o1ueau9ft5vrt1thn2tbutjqgh4a8u2";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------643673087526783132265979";s:14:"content-length";s:3:"160";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:1:"1";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581108201, 0.325349, '1', 200),
(160, 'api/agenda/data', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"fb087584-fdb9-492e-9662-4e77e12034cf";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=6o1ueau9ft5vrt1thn2tbutjqgh4a8u2";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------145104156549291941388185";s:14:"content-length";s:3:"160";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:1:"1";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581108284, 0.247431, '1', 0),
(161, 'api/agenda/data', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"2425f0f0-6b55-4ac1-8c46-823aa559eb71";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=6o1ueau9ft5vrt1thn2tbutjqgh4a8u2";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------601923227458518789887956";s:14:"content-length";s:3:"160";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:1:"1";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581108333, 0.251942, '1', 200),
(162, 'api/agenda/data', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"81cc9d41-f064-4416-9c46-db7c4a3efd1e";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=6o1ueau9ft5vrt1thn2tbutjqgh4a8u2";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------465608526487360869387210";s:14:"content-length";s:3:"160";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:1:"1";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581108365, 0.246988, '1', 200),
(163, 'api/agenda/detail', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"7769e1a9-24b8-4b3c-83fc-d460abc82e3f";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=6o1ueau9ft5vrt1thn2tbutjqgh4a8u2";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------091149469895645945599366";s:14:"content-length";s:3:"160";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:1:"1";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581108444, 0.203635, '1', 200),
(164, 'api/agenda/pencarian', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"5ae55039-53b6-452a-9828-1649ef394bd2";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=290553bhv1oh2hb0oga3kkgm80h9p5tv";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------056388180909865207373419";s:14:"content-length";s:3:"164";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:5:"rapat";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581108636, 0.133255, '1', 200),
(165, 'api/agenda/pencarian', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"205c4d4f-27ef-4fad-bde8-091b0d22d072";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=290553bhv1oh2hb0oga3kkgm80h9p5tv";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------947447183930638270802627";s:14:"content-length";s:3:"160";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:1:"t";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581108641, 0.136973, '1', 200),
(166, 'api/agenda/pencarian', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"6d78055e-7ef7-4a8a-b7d6-87a2ea4ed7a5";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=290553bhv1oh2hb0oga3kkgm80h9p5tv";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------321197829375541028300671";s:14:"content-length";s:3:"160";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:1:"v";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581108648, 0.119339, '1', 404),
(167, 'api/agenda/pencarian', 'post', 'a:13:{s:8:"x-sm-key";s:32:"35d3d08c3d7b7f445ceb8e726a87b26c";s:13:"cache-control";s:8:"no-cache";s:13:"Postman-Token";s:36:"ec08c6e1-636c-4d31-8139-bce3cdffb9ff";s:13:"Authorization";s:38:"Basic c200cnRzMGZ0Oj96d01BeEJuUzlqag==";s:10:"User-Agent";s:20:"PostmanRuntime/7.6.0";s:6:"Accept";s:3:"*/*";s:4:"Host";s:9:"localhost";s:6:"cookie";s:43:"ci_session=290553bhv1oh2hb0oga3kkgm80h9p5tv";s:15:"accept-encoding";s:13:"gzip, deflate";s:12:"content-type";s:80:"multipart/form-data; boundary=--------------------------774340899679243633764898";s:14:"content-length";s:3:"159";s:10:"Connection";s:10:"keep-alive";s:4:"kode";s:0:"";}', '35d3d08c3d7b7f445ceb8e726a87b26c', '::1', 1581108652, 0.144485, '1', 200);

-- --------------------------------------------------------

--
-- Table structure for table `log_aktivitas`
--

CREATE TABLE IF NOT EXISTS `log_aktivitas` (
  `log_id` int(11) NOT NULL,
  `log_created_at` datetime NOT NULL,
  `log_created_by` int(11) NOT NULL,
  `log_action` varchar(500) NOT NULL,
  `log_tablename` varchar(500) NOT NULL,
  `log_jsondata` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=442 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_aktivitas`
--

INSERT INTO `log_aktivitas` (`log_id`, `log_created_at`, `log_created_by`, `log_action`, `log_tablename`, `log_jsondata`) VALUES
(1, '2019-09-30 16:36:09', 1, 'deleteData', 'contohmaster', '{"cm_id":"3","cm_nama":"ddfdf","cm_data":"dfdfdf","status":"DISABLE","created_at":"2019-09-30 16:25:21","updated_at":null}'),
(2, '2019-10-01 10:22:47', 1, 'deleteData', 'contohmaster', '{"conn_id":{"affected_rows":null,"client_info":null,"client_version":null,"connect_errno":null,"connect_error":null,"errno":null,"error":null,"error_list":null,"field_count":null,"host_info":null,"info":null,"insert_id":null,"server_info":null,"server_version":null,"stat":null,"sqlstate":null,"protocol_version":null,"thread_id":null,"warning_count":null},"result_id":{"current_field":null,"field_count":null,"lengths":null,"num_rows":null,"type":null},"result_array":[],"result_object":[],"custom_result_object":[],"current_row":0,"num_rows":null,"row_data":null}'),
(3, '2019-10-01 10:29:38', 1, 'deleteData', 'contohmaster', '{"cm_id":"6","cm_nama":"tes","cm_data":"asdsd","status":"ENABLE","created_at":"2019-10-01 10:27:04","updated_at":null}{"cm_id":"7","cm_nama":"dssd","cm_data":"ddssd","status":"ENABLE","created_at":"2019-10-01 10:27:10","updated_at":null}'),
(4, '2019-10-01 10:35:34', 1, 'deleteData', 'contohmaster', '{"cm_id":"8","cm_nama":"sddssd","cm_data":"ssd","status":"ENABLE","created_at":"2019-10-01 10:33:35","updated_at":null}'),
(5, '2019-10-01 10:43:29', 1, 'updateData', 'contohmaster', '{"cm_id":"8","cm_nama":"sddssd","cm_data":"ssd","status":"ENABLE","created_at":"2019-10-01 10:33:35","updated_at":"2019-10-01 10:35:34"}'),
(6, '2019-10-01 10:43:35', 1, 'updateData', 'contohmaster', '{"cm_id":"8","cm_nama":"sddssd","cm_data":"ssd","status":"ENABLE","created_at":"2019-10-01 10:33:35","updated_at":"2019-10-01 10:43:29"}'),
(7, '2019-10-01 10:56:08', 1, 'updateData', 'contohmaster', '{"cm_id":"8","cm_nama":"sdsd","cm_data":"ssd","status":"ENABLE","created_at":"2019-10-01 10:33:35","updated_at":"2019-10-01 10:43:35"}'),
(8, '2019-10-01 10:56:51', 1, 'updateData', 'contohmaster', '{"cm_id":"8","cm_nama":"sdsd","cm_data":"ssd","status":"ENABLE","created_at":"2019-10-01 10:33:35","updated_at":"2019-10-01 10:56:08"}'),
(9, '2019-10-01 10:56:54', 1, 'updateData', 'contohmaster', '{"cm_id":"8","cm_nama":"sdsd","cm_data":"ssdssa","status":"ENABLE","created_at":"2019-10-01 10:33:35","updated_at":"2019-10-01 10:56:51"}'),
(10, '2019-10-01 10:57:18', 1, 'deleteData', 'contohmaster', '{"cm_id":"8","cm_nama":"sdsd","cm_data":"ssdssa","status":"DISABLE","created_at":"2019-10-01 10:33:35","updated_at":"2019-10-01 10:56:51"}'),
(11, '2019-10-01 10:58:10', 1, 'updateData', 'contohmaster', '{"cm_id":"9","cm_nama":"tes","cm_data":"sdsd","status":"ENABLE","created_at":"2019-10-01 10:33:41","updated_at":null}'),
(12, '2019-10-01 10:58:15', 1, 'deleteData', 'contohmaster', '{"cm_id":"9","cm_nama":"tes","cm_data":"sdsd","status":"DISABLE","created_at":"2019-10-01 10:33:41","updated_at":null}'),
(13, '2019-10-01 11:18:04', 1, 'updateData', 'konfig', '{"id":"6","slug":"APPLICATION","value":"SMARTSOFT SOP","status":"ENABLE","created_at":"2019-02-18 15:28:44","updated_at":"2019-06-26 13:56:36"}'),
(14, '2019-10-01 14:21:22', 1, 'updateData', 'user', '{"id":"11","nip":"oplos","name":"Oplos","email":"oplos@oplos.com","password":"0192023a7bbd73250516f069df18b500","role_id":"18","desc":"-\\r\\n","status":"0","created_at":"2018-11-15 16:47:11","updated_at":"2019-06-26 11:36:03"}'),
(15, '2019-10-01 14:23:04', 1, 'updateData', 'customer', '{"id":"5","nama":"Bayu Briyan El Roy","email":"bayubriyanelroy@gmail.com","telp":"08123000801","alamat":"address","status":"ENABLE","created_at":"2019-08-15 07:44:50","updated_at":"2019-08-15 07:48:37"}'),
(16, '2019-10-01 14:27:47', 1, 'updateData', 'customer', '{"id":"6","nama":"kjs","email":"a@gmial.com","telp":"898","alamat":"jdf","status":"ENABLE","created_at":"2019-08-15 07:54:51","updated_at":"2019-08-15 09:46:19"}'),
(17, '2019-10-01 15:17:03', 1, 'updateData', 'customer', '{"id":"7","nama":"Rahmat","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"ENABLE","created_at":"2019-10-01 15:15:09","updated_at":null}'),
(18, '2019-10-01 15:17:09', 1, 'deleteData', 'file', '{"id":"177","name":"","mime":"","dir":"","table":"customer","table_id":"7","status":"ENABLE","created_at":"2019-10-01 15:15:09","updated_at":null}'),
(19, '2019-10-01 15:17:09', 1, 'deleteData', 'customer', '{"id":"7","nama":"Rahmat","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"DISABLE","created_at":"2019-10-01 15:15:09","updated_at":null}'),
(20, '2019-10-01 15:19:31', 1, 'updateData', 'customer', '{"id":"8","nama":"Rahmat","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"ENABLE","created_at":"2019-10-01 15:19:10","updated_at":null}'),
(21, '2019-10-01 15:19:37', 1, 'deleteData', 'file', '{"id":"178","name":"","mime":"","dir":"","table":"customer","table_id":"8","status":"ENABLE","created_at":"2019-10-01 15:19:10","updated_at":null}'),
(22, '2019-10-01 15:19:37', 1, 'deleteData', 'customer', '{"id":"8","nama":"Rahmat","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"DISABLE","created_at":"2019-10-01 15:19:10","updated_at":null}'),
(23, '2019-10-01 15:21:15', 1, 'insertData', 'customer', '{"nama":"Rahmatss","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","created_at":"2019-10-01 15:21:15","status":"ENABLE"}'),
(24, '2019-10-01 15:21:15', 1, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"customer","table_id":9,"status":"ENABLE","created_at":"2019-10-01 15:21:15"}'),
(25, '2019-10-01 15:21:27', 1, 'insertData', 'customer', '{"nama":"Rahmatss","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","created_at":"2019-10-01 15:21:27","status":"ENABLE"}'),
(26, '2019-10-01 15:21:27', 1, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"customer","table_id":10,"status":"ENABLE","created_at":"2019-10-01 15:21:27"}'),
(27, '2019-10-01 15:21:59', 1, 'insertData', 'customer', '{"nama":"Rahmatss","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","created_at":"2019-10-01 15:21:59","status":"ENABLE"}'),
(28, '2019-10-01 15:21:59', 1, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"customer","table_id":11,"status":"ENABLE","created_at":"2019-10-01 15:21:59"}'),
(29, '2019-10-01 15:22:01', 1, 'insertData', 'customer', '{"nama":"Rahmatss","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","created_at":"2019-10-01 15:22:01","status":"ENABLE"}'),
(30, '2019-10-01 15:22:01', 1, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"customer","table_id":12,"status":"ENABLE","created_at":"2019-10-01 15:22:01"}'),
(31, '2019-10-01 15:22:20', 1, 'insertData', 'customer', '{"nama":"Rahmatss","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","created_at":"2019-10-01 15:22:20","status":"ENABLE"}'),
(32, '2019-10-01 15:22:21', 1, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"customer","table_id":13,"status":"ENABLE","created_at":"2019-10-01 15:22:21"}'),
(33, '2019-10-01 15:23:02', 1, 'updateData', 'customer', '{"id":"13","nama":"Rahmatss","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"ENABLE","created_at":"2019-10-01 15:22:20","updated_at":null}'),
(34, '2019-10-01 15:23:04', 1, 'updateData', 'customer', '{"id":"12","nama":"Rahmatss","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"ENABLE","created_at":"2019-10-01 15:22:01","updated_at":null}'),
(35, '2019-10-01 15:23:05', 1, 'updateData', 'customer', '{"id":"11","nama":"Rahmatss","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"ENABLE","created_at":"2019-10-01 15:21:59","updated_at":null}'),
(36, '2019-10-01 15:23:06', 1, 'updateData', 'customer', '{"id":"10","nama":"Rahmatss","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"ENABLE","created_at":"2019-10-01 15:21:27","updated_at":null}'),
(37, '2019-10-01 15:23:08', 1, 'updateData', 'customer', '{"id":"9","nama":"Rahmatss","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"ENABLE","created_at":"2019-10-01 15:21:15","updated_at":null}'),
(38, '2019-10-01 15:23:12', 1, 'deleteData', 'file', '{"id":"179","name":"","mime":"","dir":"","table":"customer","table_id":"9","status":"ENABLE","created_at":"2019-10-01 15:21:15","updated_at":null}'),
(39, '2019-10-01 15:23:12', 1, 'deleteData', 'customer', '{"id":"9","nama":"Rahmatss","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"DISABLE","created_at":"2019-10-01 15:21:15","updated_at":null}'),
(40, '2019-10-01 15:24:27', 1, 'deleteData', 'file', '{"id":"183","name":"","mime":"","dir":"","table":"customer","table_id":"13","status":"ENABLE","created_at":"2019-10-01 15:22:21","updated_at":null}'),
(41, '2019-10-01 15:24:27', 1, 'deleteData', 'customer', '{"id":"13","nama":"Rahmatss","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"DISABLE","created_at":"2019-10-01 15:22:20","updated_at":null}'),
(42, '2019-10-01 15:25:05', 1, 'deleteData', 'file', '{"id":"182","name":"","mime":"","dir":"","table":"customer","table_id":"12","status":"ENABLE","created_at":"2019-10-01 15:22:01","updated_at":null}'),
(43, '2019-10-01 15:25:05', 1, 'deleteData', 'customer', '{"id":"12","nama":"Rahmatss","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"DISABLE","created_at":"2019-10-01 15:22:01","updated_at":null}'),
(44, '2019-10-01 15:25:32', 1, 'deleteData', 'file', '{"id":"180","name":"","mime":"","dir":"","table":"customer","table_id":"10","status":"ENABLE","created_at":"2019-10-01 15:21:27","updated_at":null}'),
(45, '2019-10-01 15:25:32', 1, 'deleteData', 'customer', '{"id":"10","nama":"Rahmatss","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"DISABLE","created_at":"2019-10-01 15:21:27","updated_at":null}'),
(46, '2019-10-01 15:25:36', 1, 'deleteData', 'file', '{"id":"181","name":"","mime":"","dir":"","table":"customer","table_id":"11","status":"ENABLE","created_at":"2019-10-01 15:21:59","updated_at":null}'),
(47, '2019-10-01 15:25:36', 1, 'deleteData', 'customer', '{"id":"11","nama":"Rahmatss","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"DISABLE","created_at":"2019-10-01 15:21:59","updated_at":null}'),
(48, '2019-10-01 15:28:17', 1, 'insertData', 'customer', '{"nama":"Rahmat","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","created_at":"2019-10-01 15:28:17","status":"ENABLE"}'),
(49, '2019-10-01 15:28:17', 1, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"customer","table_id":14,"status":"ENABLE","created_at":"2019-10-01 15:28:17"}'),
(50, '2019-10-01 15:30:39', 1, 'updateData', 'customer', '{"id":"14","nama":"Rahmat","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"ENABLE","created_at":"2019-10-01 15:28:17","updated_at":null}'),
(51, '2019-10-01 15:31:05', 1, 'deleteData', 'file', '{"id":"184","name":"","mime":"","dir":"","table":"customer","table_id":"14","status":"ENABLE","created_at":"2019-10-01 15:28:17","updated_at":null}'),
(52, '2019-10-01 15:31:05', 1, 'deleteData', 'customer', '{"id":"14","nama":"Rahmat","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"DISABLE","created_at":"2019-10-01 15:28:17","updated_at":null}'),
(53, '2019-10-01 17:09:44', 1, 'insertData', 'customer', '{"nama":"tes tamba","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","created_at":"2019-10-01 17:09:44","status":"ENABLE"}'),
(54, '2019-10-01 17:09:44', 1, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"customer","table_id":15,"status":"ENABLE","created_at":"2019-10-01 17:09:44"}'),
(55, '2019-10-01 17:09:50', 1, 'updateData', 'customer', '{"id":"15","nama":"tes tamba","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"ENABLE","created_at":"2019-10-01 17:09:44","updated_at":null}'),
(56, '2019-10-01 17:09:55', 1, 'deleteData', 'file', '{"id":"185","name":"","mime":"","dir":"","table":"customer","table_id":"15","status":"ENABLE","created_at":"2019-10-01 17:09:44","updated_at":null}'),
(57, '2019-10-01 17:09:55', 1, 'deleteData', 'customer', '{"id":"15","nama":"tes tamba","email":"hmdrahmat8@gmail.com","telp":"0032880","alamat":"test","status":"DISABLE","created_at":"2019-10-01 17:09:44","updated_at":null}'),
(58, '2019-10-15 09:53:06', 1, 'deleteData', 'customer', '{"id":"5","nama":"Bayu Briyan El Roy","email":"bayubriyanelroy@gmail.com","telp":"08123000801","alamat":"address","status":"ENABLE","created_at":"2019-08-15 07:44:50","updated_at":"2019-10-01 14:23:04"}'),
(59, '2019-10-15 09:58:06', 1, 'insertData', 'customer', '{"nama":"Iqbal luthfi","email":"sistem.mikir@gmail.com","telp":"2342","alamat":"asdfadsf","created_at":"2019-10-15 09:58:06","status":"ENABLE"}'),
(60, '2019-10-15 09:58:06', 1, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"customer","table_id":16,"status":"ENABLE","created_at":"2019-10-15 09:58:06"}'),
(61, '2019-10-22 11:47:44', 1, 'updateData', 'konfig', '{"id":"7","slug":"LOGO","value":"http:\\/\\/www.pertanian.go.id\\/img\\/logo.png","status":"ENABLE","created_at":"2019-02-18 15:29:32","updated_at":"2019-04-29 10:56:09"}'),
(62, '2019-10-22 13:14:57', 1, 'insertData', 'customer_dnd', '{"nama":"Solihun","email":"solihun@gmail.com","telp":"089182491928","alamat":"-","status":"ENABLE","urutan":0}'),
(63, '2019-10-22 13:14:57', 1, 'insertData', 'customer_dnd', '{"nama":"Gatot","email":"gatot@gmail.com","telp":"089128498129","alamat":"-","status":"ENABLE","urutan":1}'),
(64, '2019-10-22 13:14:57', 1, 'insertData', 'customer_dnd', '{"nama":"","email":"","telp":"","alamat":"","status":"ENABLE","urutan":2}'),
(65, '2019-10-22 13:14:57', 1, 'insertData', 'customer_dnd', '{"nama":"Soleh","email":"soleh@gmail.com","telp":"081249812947","alamat":"-","status":"ENABLE","urutan":3}'),
(66, '2019-10-22 13:15:02', 1, 'insertData', 'customer_dnd', '{"nama":"Soleh","email":"soleh@gmail.com","telp":"081249812947","alamat":"-","status":"ENABLE","urutan":0}'),
(67, '2019-10-22 13:15:02', 1, 'insertData', 'customer_dnd', '{"nama":"Solihun","email":"solihun@gmail.com","telp":"089182491928","alamat":"-","status":"ENABLE","urutan":1}'),
(68, '2019-10-22 13:15:02', 1, 'insertData', 'customer_dnd', '{"nama":"Gatot","email":"gatot@gmail.com","telp":"089128498129","alamat":"-","status":"ENABLE","urutan":2}'),
(69, '2019-10-22 13:15:02', 1, 'insertData', 'customer_dnd', '{"nama":"","email":"","telp":"","alamat":"","status":"ENABLE","urutan":3}'),
(70, '2019-10-22 13:26:52', 1, 'updateData', 'customer', '{"id":"6","nama":"kjs","email":"a@gmial.com","telp":"898","alamat":"jdf","status":"ENABLE","created_at":"2019-08-15 07:54:51","updated_at":"2019-10-01 14:27:47"}'),
(71, '2019-10-22 13:27:06', 1, 'updateData', 'customer', '{"id":"3","nama":"Gatot","email":"gatot@gmail.com","telp":"238137","alamat":"-","status":"ENABLE","created_at":null,"updated_at":"2019-08-15 07:42:48"}'),
(72, '2019-10-22 13:35:26', 1, 'deleteData', 'customer', '{"id":"6","nama":"kjs","email":"a@gmial.com","telp":"898","alamat":"18","status":"ENABLE","created_at":"2019-08-15 07:54:51","updated_at":"2019-10-22 13:26:52"}'),
(73, '2019-10-22 13:35:47', 1, 'updateData', 'customer', '{"id":"16","nama":"Iqbal luthfi","email":"sistem.mikir@gmail.com","telp":"2342","alamat":"asdfadsf","status":"ENABLE","created_at":"2019-10-15 09:58:06","updated_at":null}'),
(74, '2019-10-22 13:35:57', 1, 'updateData', 'customer', '{"id":"16","nama":"Iqbal luthfi","email":"sistem.mikir@gmail.com","telp":"2342","alamat":"asdfadsf","status":"ENABLE","created_at":"2019-10-15 09:58:06","updated_at":"2019-10-22 13:35:47"}'),
(75, '2019-10-22 13:36:30', 1, 'updateData', 'customer', '{"id":"16","nama":"Iqbal luthfi","email":"sistem.mikir@gmail.com","telp":"2342","alamat":"asem","status":"ENABLE","created_at":"2019-10-15 09:58:06","updated_at":"2019-10-22 13:35:57"}'),
(76, '2019-11-02 15:49:56', 1, 'deleteData', 'access', '{"id":"2","access_control_id":"94","role_id":"17","status":"active"}'),
(77, '2019-11-02 15:50:26', 1, 'deleteData', 'access', '{"id":"3","access_control_id":"94","role_id":"17","status":"active"}{"id":"4","access_control_id":"293","role_id":"17","status":"active"}{"id":"5","access_control_id":"294","role_id":"17","status":"active"}'),
(78, '2019-11-02 15:50:43', 1, 'insertData', 'customer', '{"nama":"1","email":"2","telp":"3","alamat":"17","created_at":"2019-11-02 15:50:43","status":"ENABLE"}'),
(79, '2019-11-02 15:51:31', 1, 'deleteData', 'access', '{"id":"8","access_control_id":"149","role_id":"17","status":"active"}{"id":"7","access_control_id":"147","role_id":"17","status":"active"}{"id":"6","access_control_id":"94","role_id":"17","status":"active"}'),
(80, '2019-11-02 15:51:48', 1, 'deleteData', 'access', '{"id":"11","access_control_id":"147","role_id":"17","status":"active"}{"id":"10","access_control_id":"146","role_id":"17","status":"active"}{"id":"9","access_control_id":"94","role_id":"17","status":"active"}{"id":"12","access_control_id":"149","role_id":"17","status":"active"}'),
(81, '2019-11-08 09:48:39', 1, 'insertData', 'customer', '{"nama":"Tesing","email":"testing@gmail.com","telp":"1","alamat":"1","created_at":"2019-11-08 09:48:39","status":"ENABLE"}'),
(82, '2019-11-11 07:18:16', 13, 'insertData', 'customer_dnd', '{"nama":"Soleh","email":"soleh@gmail.com","telp":"081249812947","alamat":"-","status":"ENABLE","urutan":0}'),
(83, '2019-11-11 07:18:16', 13, 'insertData', 'customer_dnd', '{"nama":"Solihun","email":"solihun@gmail.com","telp":"089182491928","alamat":"-","status":"ENABLE","urutan":1}'),
(84, '2019-11-11 07:18:16', 13, 'insertData', 'customer_dnd', '{"nama":"Gatot","email":"gatot@gmail.com","telp":"089128498129","alamat":"-","status":"ENABLE","urutan":2}'),
(85, '2019-11-11 07:18:16', 13, 'insertData', 'customer_dnd', '{"nama":"","email":"","telp":"","alamat":"","status":"ENABLE","urutan":3}'),
(86, '2020-01-07 10:20:59', 12, 'insertData', 'master_siswa', '{"nis":"091823981927","nama_lengkap":"Arvin Fairuz","tempat_lahir":"Malang","tanggal_lahir":"1997-08-02","nama_wali":"Wali","created_by":"12","created_at":"2020-01-07 10:20:59","status":"ENABLE"}'),
(87, '2020-01-07 10:20:59', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_siswa","table_id":1,"status":"ENABLE","created_at":"2020-01-07 10:20:59"}'),
(88, '2020-01-07 10:26:52', 12, 'updateData', 'role', '{"id":"17","role":"Admin","status":"ENABLE","menu":"[\\"1\\",\\"13\\"]","created_at":"2018-10-12 17:03:59","updated_at":"2019-07-01 09:03:03"}'),
(89, '2020-01-07 10:27:04', 12, 'updateData', 'role', '{"id":"18","role":"Operation","status":"ENABLE","menu":null,"created_at":"2018-10-24 10:29:54","updated_at":null}'),
(90, '2020-01-07 10:27:13', 12, 'updateData', 'role', '{"id":"18","role":"Wali Murid","status":"ENABLE","menu":"null","created_at":"2018-10-24 10:29:54","updated_at":"2020-01-07 10:27:04"}'),
(91, '2020-01-07 10:57:08', 1, 'updateData', 'role', '{"id":"18","role":"Wali Murid","status":"ENABLE","menu":"[\\"1\\",\\"14\\",\\"15\\"]","created_at":"2018-10-24 10:29:54","updated_at":"2020-01-07 10:27:13"}'),
(92, '2020-01-07 11:09:41', 12, 'insertData', 'pembayaran_spp', '{"bulan":"01-2020-01","biaya":"300000","id_siswa":null,"created_by":"12","created_at":"2020-01-07 11:09:41","status":"ENABLE"}'),
(93, '2020-01-07 11:09:45', 12, 'insertData', 'pembayaran_spp', '{"bulan":"01-2020-01","biaya":"300000","id_siswa":null,"created_by":"12","created_at":"2020-01-07 11:09:45","status":"ENABLE"}'),
(94, '2020-01-07 11:10:34', 12, 'insertData', 'pembayaran_spp', '{"bulan":"01-2020-01","biaya":"300000","id_siswa":"1","created_by":"12","created_at":"2020-01-07 11:10:34","status":"ENABLE"}'),
(95, '2020-01-07 11:10:34', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"pembayaran_spp","table_id":1,"status":"ENABLE","created_at":"2020-01-07 11:10:34"}'),
(96, '2020-01-07 11:11:46', 12, 'insertData', 'master_siswa', '{"nis":"019283901283","nama_lengkap":"Sodron","tempat_lahir":"Pakis","tanggal_lahir":"1997-09-02","nama_wali":"Sudrung","created_by":"12","created_at":"2020-01-07 11:11:46","status":"ENABLE"}'),
(97, '2020-01-07 11:11:46', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_siswa","table_id":2,"status":"ENABLE","created_at":"2020-01-07 11:11:46"}'),
(98, '2020-01-07 11:13:11', 12, 'insertData', 'pembayaran_spp', '{"bulan":"2020-01-01","biaya":"300000","id_siswa":"1","created_by":"12","created_at":"2020-01-07 11:13:11","status":"ENABLE"}'),
(99, '2020-01-07 11:13:11', 12, 'insertData', 'pembayaran_spp', '{"bulan":"2020-01-01","biaya":"300000","id_siswa":"2","created_by":"12","created_at":"2020-01-07 11:13:11","status":"ENABLE"}'),
(100, '2020-01-07 11:13:11', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"pembayaran_spp","table_id":3,"status":"ENABLE","created_at":"2020-01-07 11:13:11"}'),
(101, '2020-01-07 11:30:27', 1, 'updateData', 'role', '{"id":"18","role":"Wali Murid","status":"ENABLE","menu":"[\\"1\\"]","created_at":"2018-10-24 10:29:54","updated_at":"2020-01-07 10:57:08"}'),
(102, '2020-01-07 11:47:58', 1, 'insertData', 'file', '{"name":"6950c16c9bcc6995f376b297f163175966271.jpg","mime":"image\\/jpeg","dir":"webfile\\/6950c16c9bcc6995f376b297f163175966271.jpg","table":"pembayaran_spp","table_id":"2","updated_at":"2020-01-07 11:47:58"}'),
(103, '2020-01-07 11:47:58', 1, 'updateData', 'pembayaran_spp', '{"id":"2","id_siswa":"1","bulan":"2020-01-01","biaya":"300000","tanggal_pembayaran":"0000-00-00 00:00:00","tanggal_validasi":"0000-00-00 00:00:00","status":"ENABLE","created_at":"2020-01-07 11:13:11","updated_at":"0000-00-00 00:00:00","created_by":"12"}'),
(104, '2020-01-07 11:54:15', 1, 'updateData', 'file', '{"id":"191","name":"6950c16c9bcc6995f376b297f163175966271.jpg","mime":"image\\/jpeg","dir":"webfile\\/6950c16c9bcc6995f376b297f163175966271.jpg","table":"pembayaran_spp","table_id":"2","status":null,"created_at":null,"updated_at":"2020-01-07 11:47:58"}'),
(105, '2020-01-07 11:54:15', 1, 'updateData', 'pembayaran_spp', '{"id":"2","id_siswa":"1","bulan":"2020-01-01","biaya":"300000","tanggal_pembayaran":"0000-00-00 00:00:00","tanggal_validasi":"0000-00-00 00:00:00","status":"ENABLE","created_at":"2020-01-07 11:13:11","updated_at":"2020-01-07 11:47:58","created_by":"12"}'),
(106, '2020-01-07 13:21:01', 12, 'updateData', 'pembayaran_spp', '{"id":"2","id_siswa":"1","bulan":"2020-01-01","biaya":"300000","tanggal_pembayaran":"2020-01-07 11:54:15","tanggal_validasi":"0000-00-00 00:00:00","status":"ENABLE","created_at":"2020-01-07 11:13:11","updated_at":"2020-01-07 11:54:15","created_by":"12"}'),
(107, '2020-01-07 13:32:40', 12, 'insertData', 'master_siswa', '{"nis":"0192301983290","nama_lengkap":"Lala","tempat_lahir":"Malang","tanggal_lahir":"1997-08-09","nama_wali":"Lili","created_by":"12","created_at":"2020-01-07 13:32:40","status":"ENABLE"}'),
(108, '2020-01-07 13:32:40', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_siswa","table_id":3,"status":"ENABLE","created_at":"2020-01-07 13:32:40"}'),
(109, '2020-01-07 13:33:01', 12, 'insertData', 'pembayaran_spp', '{"bulan":"2020-01-01","biaya":"300000","id_siswa":"3","created_by":"12","created_at":"2020-01-07 13:33:01","status":"ENABLE"}'),
(110, '2020-01-07 13:33:01', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"pembayaran_spp","table_id":4,"status":"ENABLE","created_at":"2020-01-07 13:33:01"}'),
(111, '2020-01-07 13:33:15', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"pembayaran_spp","table_id":0,"status":"ENABLE","created_at":"2020-01-07 13:33:15"}'),
(112, '2020-01-07 13:56:28', 12, 'updateData', 'report', '{"id":"3","name":"Statistik","query":"SELECT pembayaran_spp.bulan, a.belum_bayar, b.belum_validasi, c.sudah_bayar, d.sudah_validasi\\r\\nFROM pembayaran_spp\\r\\nLEFT JOIN\\r\\n\\t(\\r\\n        SELECT pembayaran_spp.bulan, COUNT(pembayaran_spp.id) as belum_bayar\\r\\n        FROM pembayaran_spp\\r\\n        WHERE pembayaran_spp.tanggal_pembayaran = ''0000-00-00 00:00:00''\\r\\n        GROUP BY pembayaran_spp.bulan\\r\\n        ) a\\r\\nON pembayaran_spp.bulan = a.bulan\\r\\nLEFT JOIN\\r\\n\\t(\\r\\n        SELECT pembayaran_spp.bulan, COUNT(pembayaran_spp.id) as belum_validasi\\r\\n        FROM pembayaran_spp\\r\\n        WHERE pembayaran_spp.tanggal_validasi = ''0000-00-00 00:00:00''\\r\\n        GROUP BY pembayaran_spp.bulan\\r\\n        ) b\\r\\nON pembayaran_spp.bulan = b.bulan\\r\\nLEFT JOIN\\r\\n\\t(\\r\\n        SELECT pembayaran_spp.bulan, COUNT(pembayaran_spp.id) as sudah_bayar\\r\\n        FROM pembayaran_spp\\r\\n        WHERE pembayaran_spp.tanggal_pembayaran != ''0000-00-00 00:00:00''\\r\\n        GROUP BY pembayaran_spp.bulan\\r\\n        ) c\\r\\nON pembayaran_spp.bulan = c.bulan\\r\\nLEFT JOIN\\r\\n\\t(\\r\\n        SELECT pembayaran_spp.bulan, COUNT(pembayaran_spp.id) as sudah_validasi\\r\\n        FROM pembayaran_spp\\r\\n        WHERE pembayaran_spp.tanggal_validasi != ''0000-00-00 00:00:00''\\r\\n        GROUP BY pembayaran_spp.bulan\\r\\n        ) d\\r\\nON pembayaran_spp.bulan = d.bulan\\r\\nGROUP BY pembayaran_spp.bulan","header":null,"status":"ENABLE","created_at":"2020-01-07 13:56:11","updated_at":null}'),
(113, '2020-01-07 13:57:34', 12, 'updateData', 'report', '{"id":"3","name":"Statistik","query":"SELECT pembayaran_spp.bulan, a.belum_bayar, b.belum_validasi, c.sudah_bayar, d.sudah_validasi\\r\\nFROM pembayaran_spp\\r\\nLEFT JOIN\\r\\n\\t(\\r\\n        SELECT pembayaran_spp.bulan, COUNT(pembayaran_spp.id) as belum_bayar\\r\\n        FROM pembayaran_spp\\r\\n        WHERE pembayaran_spp.tanggal_pembayaran = ''0000-00-00 00:00:00''\\r\\n        GROUP BY pembayaran_spp.bulan\\r\\n        ) a\\r\\nON pembayaran_spp.bulan = a.bulan\\r\\nLEFT JOIN\\r\\n\\t(\\r\\n        SELECT pembayaran_spp.bulan, COUNT(pembayaran_spp.id) as belum_validasi\\r\\n        FROM pembayaran_spp\\r\\n        WHERE pembayaran_spp.tanggal_validasi = ''0000-00-00 00:00:00''\\r\\n        GROUP BY pembayaran_spp.bulan\\r\\n        ) b\\r\\nON pembayaran_spp.bulan = b.bulan\\r\\nLEFT JOIN\\r\\n\\t(\\r\\n        SELECT pembayaran_spp.bulan, COUNT(pembayaran_spp.id) as sudah_bayar\\r\\n        FROM pembayaran_spp\\r\\n        WHERE pembayaran_spp.tanggal_pembayaran != ''0000-00-00 00:00:00''\\r\\n        GROUP BY pembayaran_spp.bulan\\r\\n        ) c\\r\\nON pembayaran_spp.bulan = c.bulan\\r\\nLEFT JOIN\\r\\n\\t(\\r\\n        SELECT pembayaran_spp.bulan, COUNT(pembayaran_spp.id) as sudah_validasi\\r\\n        FROM pembayaran_spp\\r\\n        WHERE pembayaran_spp.tanggal_validasi != ''0000-00-00 00:00:00''\\r\\n        GROUP BY pembayaran_spp.bulan\\r\\n        ) d\\r\\nON pembayaran_spp.bulan = d.bulan\\r\\nGROUP BY pembayaran_spp.bulan","header":"[\\"bulan\\",\\"belum_bayar\\",\\"belum_validasi\\",\\"sudah_bayar\\",\\"sudah_validasi\\"]","status":"ENABLE","created_at":"2020-01-07 13:56:11","updated_at":"2020-01-07 13:56:28"}'),
(114, '2020-01-07 13:58:08', 12, 'updateData', 'report', '{"id":"3","name":"Statistik","query":"SELECT date_format(pembayaran_spp.bulan, ''%M %Y'') as bulan, a.belum_bayar, b.belum_validasi, c.sudah_bayar, d.sudah_validasi\\r\\nFROM pembayaran_spp\\r\\nLEFT JOIN\\r\\n\\t(\\r\\n        SELECT pembayaran_spp.bulan, COUNT(pembayaran_spp.id) as belum_bayar\\r\\n        FROM pembayaran_spp\\r\\n        WHERE pembayaran_spp.tanggal_pembayaran = ''0000-00-00 00:00:00''\\r\\n        GROUP BY pembayaran_spp.bulan\\r\\n        ) a\\r\\nON pembayaran_spp.bulan = a.bulan\\r\\nLEFT JOIN\\r\\n\\t(\\r\\n        SELECT pembayaran_spp.bulan, COUNT(pembayaran_spp.id) as belum_validasi\\r\\n        FROM pembayaran_spp\\r\\n        WHERE pembayaran_spp.tanggal_validasi = ''0000-00-00 00:00:00''\\r\\n        GROUP BY pembayaran_spp.bulan\\r\\n        ) b\\r\\nON pembayaran_spp.bulan = b.bulan\\r\\nLEFT JOIN\\r\\n\\t(\\r\\n        SELECT pembayaran_spp.bulan, COUNT(pembayaran_spp.id) as sudah_bayar\\r\\n        FROM pembayaran_spp\\r\\n        WHERE pembayaran_spp.tanggal_pembayaran != ''0000-00-00 00:00:00''\\r\\n        GROUP BY pembayaran_spp.bulan\\r\\n        ) c\\r\\nON pembayaran_spp.bulan = c.bulan\\r\\nLEFT JOIN\\r\\n\\t(\\r\\n        SELECT pembayaran_spp.bulan, COUNT(pembayaran_spp.id) as sudah_validasi\\r\\n        FROM pembayaran_spp\\r\\n        WHERE pembayaran_spp.tanggal_validasi != ''0000-00-00 00:00:00''\\r\\n        GROUP BY pembayaran_spp.bulan\\r\\n        ) d\\r\\nON pembayaran_spp.bulan = d.bulan\\r\\nGROUP BY pembayaran_spp.bulan","header":"[\\"bulan\\",\\"belum_bayar\\",\\"belum_validasi\\",\\"sudah_bayar\\",\\"sudah_validasi\\"]","status":"ENABLE","created_at":"2020-01-07 13:56:11","updated_at":"2020-01-07 13:57:34"}'),
(115, '2020-01-10 09:28:03', 12, 'updateData', 'role', '{"id":"17","role":"Admin","status":"ENABLE","menu":"[\\"1\\",\\"14\\",\\"15\\"]","created_at":"2018-10-12 17:03:59","updated_at":"2020-01-07 10:26:52"}'),
(116, '2020-01-10 09:28:15', 12, 'updateData', 'menu_master', '{"id":"16","name":"Master","icon":"fa fa-times","link":"#","urutan":"7","parent":"0","notif":"","status":"ENABLE","created_at":"2020-01-10 09:27:29","updated_at":null}'),
(117, '2020-01-10 09:29:17', 12, 'insertData', 'master_kelas', '{"value":"A","created_by":"12","created_at":"2020-01-10 09:29:17","status":"ENABLE"}'),
(118, '2020-01-10 09:29:17', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kelas","table_id":1,"status":"ENABLE","created_at":"2020-01-10 09:29:17"}'),
(119, '2020-01-10 09:29:21', 12, 'insertData', 'master_kelas', '{"value":"B","created_by":"12","created_at":"2020-01-10 09:29:21","status":"ENABLE"}'),
(120, '2020-01-10 09:29:21', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kelas","table_id":2,"status":"ENABLE","created_at":"2020-01-10 09:29:21"}'),
(121, '2020-01-10 09:29:26', 12, 'insertData', 'master_kelas', '{"value":"V","created_by":"12","created_at":"2020-01-10 09:29:26","status":"ENABLE"}'),
(122, '2020-01-10 09:29:26', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kelas","table_id":3,"status":"ENABLE","created_at":"2020-01-10 09:29:26"}'),
(123, '2020-01-10 09:29:32', 12, 'updateData', 'master_kelas', '{"id":"3","value":"V","status":"ENABLE","created_at":"2020-01-10 09:29:26","updated_at":"0000-00-00 00:00:00","created_by":"12"}'),
(124, '2020-01-10 09:39:35', 12, 'updateData', 'master_siswa', '{"id":"3","nis":"0192301983290","nama_lengkap":"Lala","tempat_lahir":"Malang","tanggal_lahir":"1997-08-09","nama_wali":"Lili","nama_ayah":"","nama_ibu":"","jenis_kelamin":"","alamat_lengkap":"","kelas":"","status":"ENABLE","created_at":"2020-01-07 13:32:40","updated_at":"0000-00-00 00:00:00","created_by":"12"}'),
(125, '2020-02-06 18:38:06', 12, 'updateData', 'role', '{"id":"17","role":"Admin","status":"ENABLE","menu":"[\\"1\\",\\"14\\",\\"15\\",\\"16\\",\\"17\\"]","created_at":"2018-10-12 17:03:59","updated_at":"2020-01-10 09:28:03"}'),
(126, '2020-02-06 18:38:41', 12, 'updateData', 'role', '{"id":"17","role":"Admin","status":"ENABLE","menu":"[\\"1\\"]","created_at":"2018-10-12 17:03:59","updated_at":"2020-02-06 18:38:06"}'),
(127, '2020-02-06 18:43:03', 12, 'updateData', 'role', '{"id":"17","role":"Admin","status":"ENABLE","menu":"[\\"1\\",\\"16\\"]","created_at":"2018-10-12 17:03:59","updated_at":"2020-02-06 18:38:41"}'),
(128, '2020-02-06 18:46:20', 12, 'insertData', 'master_kategori_agenda', '{"value":"Audiensi","created_by":"12","created_at":"2020-02-06 18:46:20","status":"ENABLE"}'),
(129, '2020-02-06 18:46:20', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kategori_agenda","table_id":1,"status":"ENABLE","created_at":"2020-02-06 18:46:20"}'),
(130, '2020-02-06 18:46:27', 12, 'insertData', 'master_kategori_agenda', '{"value":"Bantuan","created_by":"12","created_at":"2020-02-06 18:46:27","status":"ENABLE"}'),
(131, '2020-02-06 18:46:28', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kategori_agenda","table_id":2,"status":"ENABLE","created_at":"2020-02-06 18:46:28"}'),
(132, '2020-02-06 18:46:43', 12, 'insertData', 'master_kategori_agenda', '{"value":"Gladi\\/Survey","created_by":"12","created_at":"2020-02-06 18:46:43","status":"ENABLE"}'),
(133, '2020-02-06 18:46:43', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kategori_agenda","table_id":3,"status":"ENABLE","created_at":"2020-02-06 18:46:43"}'),
(134, '2020-02-06 18:47:00', 12, 'updateData', 'master_kategori_agenda', '{"id":"2","value":"Bantuan","status":"ENABLE","created_at":"2020-02-06 18:46:27","updated_at":"0000-00-00 00:00:00","created_by":"12"}'),
(135, '2020-02-06 18:47:11', 12, 'updateData', 'master_kategori_agenda', '{"id":"3","value":"Gladi\\/Survey","status":"ENABLE","created_at":"2020-02-06 18:46:43","updated_at":"0000-00-00 00:00:00","created_by":"12"}'),
(136, '2020-02-06 18:47:33', 12, 'insertData', 'master_agenda_role', '{"id_role":"18","value":"Bapak Bupati","created_by":"12","created_at":"2020-02-06 18:47:33","status":"ENABLE"}'),
(137, '2020-02-06 18:47:33', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_agenda_role","table_id":1,"status":"ENABLE","created_at":"2020-02-06 18:47:33"}'),
(138, '2020-02-06 18:47:43', 12, 'insertData', 'master_agenda_role', '{"id_role":"18","value":"Ibu Bupati","created_by":"12","created_at":"2020-02-06 18:47:43","status":"ENABLE"}'),
(139, '2020-02-06 18:47:43', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_agenda_role","table_id":2,"status":"ENABLE","created_at":"2020-02-06 18:47:43"}'),
(140, '2020-02-06 18:48:01', 12, 'insertData', 'master_agenda_role', '{"id_role":"18","value":"Bapak Ibu Bupati","created_by":"12","created_at":"2020-02-06 18:48:01","status":"ENABLE"}'),
(141, '2020-02-06 18:48:01', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_agenda_role","table_id":3,"status":"ENABLE","created_at":"2020-02-06 18:48:01"}'),
(142, '2020-02-06 18:48:12', 12, 'insertData', 'master_agenda_role', '{"id_role":"19","value":"Bapak Wakil Bupati","created_by":"12","created_at":"2020-02-06 18:48:12","status":"ENABLE"}'),
(143, '2020-02-06 18:48:12', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_agenda_role","table_id":4,"status":"ENABLE","created_at":"2020-02-06 18:48:12"}'),
(144, '2020-02-06 18:48:26', 12, 'insertData', 'master_agenda_role', '{"id_role":"19","value":"Ibu Wakil Bupati","created_by":"12","created_at":"2020-02-06 18:48:26","status":"ENABLE"}'),
(145, '2020-02-06 18:48:26', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_agenda_role","table_id":5,"status":"ENABLE","created_at":"2020-02-06 18:48:26"}'),
(146, '2020-02-06 18:48:37', 12, 'insertData', 'master_agenda_role', '{"id_role":"19","value":"Bapak Ibu Wakil Bupati","created_by":"12","created_at":"2020-02-06 18:48:37","status":"ENABLE"}'),
(147, '2020-02-06 18:48:37', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_agenda_role","table_id":6,"status":"ENABLE","created_at":"2020-02-06 18:48:37"}'),
(148, '2020-02-06 18:49:00', 12, 'insertData', 'master_agenda_role', '{"id_role":"20","value":"Sekretaris Daerah","created_by":"12","created_at":"2020-02-06 18:49:00","status":"ENABLE"}'),
(149, '2020-02-06 18:49:00', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_agenda_role","table_id":7,"status":"ENABLE","created_at":"2020-02-06 18:49:00"}'),
(150, '2020-02-06 18:49:24', 12, 'insertData', 'master_agenda_role', '{"id_role":"21","value":"Assisten I Sekda","created_by":"12","created_at":"2020-02-06 18:49:24","status":"ENABLE"}'),
(151, '2020-02-06 18:49:24', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_agenda_role","table_id":8,"status":"ENABLE","created_at":"2020-02-06 18:49:24"}'),
(152, '2020-02-06 18:49:35', 12, 'insertData', 'master_agenda_role', '{"id_role":"22","value":"Assisten II Sekda","created_by":"12","created_at":"2020-02-06 18:49:35","status":"ENABLE"}'),
(153, '2020-02-06 18:49:35', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_agenda_role","table_id":9,"status":"ENABLE","created_at":"2020-02-06 18:49:35"}'),
(154, '2020-02-06 18:49:44', 12, 'insertData', 'master_agenda_role', '{"id_role":"17","value":"Assisten III Sekda","created_by":"12","created_at":"2020-02-06 18:49:44","status":"ENABLE"}'),
(155, '2020-02-06 18:49:44', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_agenda_role","table_id":10,"status":"ENABLE","created_at":"2020-02-06 18:49:44"}'),
(156, '2020-02-06 18:49:55', 12, 'insertData', 'master_agenda_role', '{"id_role":"24","value":"Protokol","created_by":"12","created_at":"2020-02-06 18:49:55","status":"ENABLE"}'),
(157, '2020-02-06 18:49:55', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_agenda_role","table_id":11,"status":"ENABLE","created_at":"2020-02-06 18:49:55"}'),
(158, '2020-02-07 14:04:04', 12, 'deleteData', 'user', '{"id":"1","nip":"smartsoft","name":"Smartsoft Studio","email":"smartsoftstudio1@mail.com","password":"21232f297a57a5a743894a0e4a801fc3","role_id":"17","desc":"asda","status":"0","created_at":"2018-02-23 16:09:49","updated_at":"2019-02-19 11:02:53"}'),
(159, '2020-02-07 14:04:05', 12, 'deleteData', 'file', '{"id":"40","name":"6950c16c9bcc6995f376b297f16317593930.png","mime":"image\\/png","dir":"webfile\\/6950c16c9bcc6995f376b297f16317593930.png","table":"user","table_id":"1","status":null,"created_at":null,"updated_at":"2019-02-18 16:07:47"}'),
(160, '2020-02-07 14:04:09', 12, 'deleteData', 'user', '{"id":"9","nip":"operator","name":"Operator","email":"","password":"4b583376b2767b923c3e1da60d10de59","role_id":"18","desc":"0","status":"0","created_at":"2018-10-24 10:53:02","updated_at":"2019-02-18 16:18:41"}'),
(161, '2020-02-07 14:04:10', 12, 'deleteData', 'file', '{"id":"48","name":"6950c16c9bcc6995f376b297f163175955554.png","mime":"image\\/png","dir":"webfile\\/6950c16c9bcc6995f376b297f163175955554.png","table":"user","table_id":"9","status":null,"created_at":null,"updated_at":"2019-02-18 16:18:41"}'),
(162, '2020-02-07 14:04:13', 12, 'deleteData', 'user', '{"id":"11","nip":"oplos","name":"Oplos","email":"oplos@oplos.com","password":"0192023a7bbd73250516f069df18b500","role_id":"18","desc":"-\\r\\n","status":"0","created_at":"2018-11-15 16:47:11","updated_at":"2019-10-01 14:21:22"}'),
(163, '2020-02-07 14:04:13', 12, 'deleteData', 'file', '{"id":"45","name":"6950c16c9bcc6995f376b297f163175988920.png","mime":"image\\/png","dir":"webfile\\/6950c16c9bcc6995f376b297f163175988920.png","table":"user","table_id":"11","status":"ENABLE","created_at":"2018-11-15 16:47:11","updated_at":"2019-02-18 16:18:34"}'),
(164, '2020-02-07 14:04:17', 12, 'deleteData', 'user', '{"id":"13","nip":"karya123studio","name":"Karya Studio","email":"karya123studio@gmail.com","password":"356f3bfc360b9018ab724b11064e2ddf","role_id":"17","desc":"-","status":"0","created_at":"2018-02-23 16:09:49","updated_at":"2019-02-19 11:02:53"}'),
(165, '2020-02-07 14:29:06', 14, 'insertData', 'master_agenda', '{"id_role":"1","id_kategori":"1","nama_kegiatan":"Rapat Bulanan","tanggal":"2020-02-07","tempat":"Kantor Bupati","pakaian":"Jas","undangan":"<p>Undangan<\\/p>","peran_pimpinan":"<p>Pimpin<\\/p>","urutan_acara":"<p><ul><li>Makan<\\/li><li>Minum<\\/li><li>Istirahat<\\/li><li>Pulang<\\/li><\\/ul><\\/p>","tata_ruangan":"-","perlengkapan":"-","penyelenggara":"--","petugas_protokol":"-","catatan":"<p>tidak ada<\\/p>","status_kehadiran":"0","perwakilan":"-","created_by":"14","created_at":"2020-02-07 14:29:06","status":"ENABLE"}'),
(166, '2020-02-07 14:29:06', 14, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_agenda","table_id":1,"status":"ENABLE","created_at":"2020-02-07 14:29:06"}'),
(167, '2020-02-07 15:14:04', 14, 'updateData', 'master_agenda', '{"id":"1","id_role":"1","id_kategori":"1","nama_kegiatan":"Rapat Bulanan","tanggal":"2020-02-07","jam":"00:00:00","tempat":"Kantor Bupati","pakaian":"Jas","undangan":"<p>Undangan<\\/p>","peran_pimpinan":"<p>Pimpin<\\/p>","urutan_acara":"<p><ul><li>Makan<\\/li><li>Minum<\\/li><li>Istirahat<\\/li><li>Pulang<\\/li><\\/ul><\\/p>","tata_ruangan":"-","perlengkapan":"-","penyelenggara":"--","petugas_protokol":"-","catatan":"<p>tidak ada<\\/p>","status_kehadiran":"0","perwakilan":"-","status":"ENABLE","created_at":"2020-02-07 14:29:06","updated_at":"0000-00-00 00:00:00","created_by":"14"}'),
(168, '2020-02-07 15:16:04', 14, 'updateData', 'role', '{"id":"18","role":"Bupati","status":"ENABLE","menu":"[\\"1\\",\\"18\\",\\"16\\",\\"20\\",\\"19\\"]","created_at":"2018-10-24 10:29:54","updated_at":"2020-01-07 11:30:27"}'),
(169, '2020-02-19 17:42:56', 12, 'updateData', 'role', '{"id":"0","role":"Admin","status":"ENABLE","menu":"[\\"1\\"]","created_at":"2018-10-12 17:03:59","updated_at":"2020-02-06 18:43:03"}'),
(170, '2020-02-19 18:06:20', 12, 'insertData', 'master_provinsi', '{"kode":"12","provinsi":"Sumatra Utara","created_by":"12","created_at":"2020-02-19 18:06:20","status":"ENABLE"}'),
(171, '2020-02-19 18:06:20', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_provinsi","table_id":1,"status":"ENABLE","created_at":"2020-02-19 18:06:20"}'),
(172, '2020-02-19 18:06:54', 12, 'insertData', 'master_kota', '{"id_provinsi":"1","kode":"1","kota":"Kabupaten Tapanuli Tengah","created_by":"12","created_at":"2020-02-19 18:06:54","status":"ENABLE"}'),
(173, '2020-02-19 18:06:54', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kota","table_id":1,"status":"ENABLE","created_at":"2020-02-19 18:06:54"}'),
(174, '2020-02-19 18:07:14', 12, 'insertData', 'master_kota', '{"id_provinsi":"1","kode":"2","kota":"Kabupaten Tapanuli Utara","created_by":"12","created_at":"2020-02-19 18:07:14","status":"ENABLE"}'),
(175, '2020-02-19 18:07:14', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kota","table_id":2,"status":"ENABLE","created_at":"2020-02-19 18:07:14"}'),
(176, '2020-02-19 18:07:30', 12, 'insertData', 'master_kota', '{"id_provinsi":"1","kode":"3","kota":"Kabupaten Tapanuli Selatan","created_by":"12","created_at":"2020-02-19 18:07:30","status":"ENABLE"}'),
(177, '2020-02-19 18:07:30', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kota","table_id":3,"status":"ENABLE","created_at":"2020-02-19 18:07:30"}'),
(178, '2020-02-19 18:07:43', 12, 'insertData', 'master_kota', '{"id_provinsi":"1","kode":"4","kota":"Kabupaten Nias","created_by":"12","created_at":"2020-02-19 18:07:43","status":"ENABLE"}'),
(179, '2020-02-19 18:07:43', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kota","table_id":4,"status":"ENABLE","created_at":"2020-02-19 18:07:43"}'),
(180, '2020-02-19 18:08:27', 12, 'insertData', 'master_kota', '{"id_provinsi":"1","kode":"5","kota":"Kabupaten Langkat","created_by":"12","created_at":"2020-02-19 18:08:27","status":"ENABLE"}'),
(181, '2020-02-19 18:08:27', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kota","table_id":5,"status":"ENABLE","created_at":"2020-02-19 18:08:27"}'),
(182, '2020-02-19 18:16:00', 12, 'updateData', 'konfig', '{"id":"6","slug":"APPLICATION","value":"KARYA STUDIO SOP","status":"ENABLE","created_at":"2019-02-18 15:28:44","updated_at":"2019-10-01 11:18:04"}'),
(183, '2020-02-19 18:16:07', 12, 'updateData', 'konfig', '{"id":"14","slug":"APPLICATION_SMALL","value":"KS","status":"ENABLE","created_at":"2019-02-18 15:42:41","updated_at":"2019-02-18 15:43:24"}'),
(184, '2020-02-19 18:18:33', 12, 'updateData', 'konfig', '{"id":"12","slug":"SKIN","value":"skin-black","status":"ENABLE","created_at":"2019-02-18 15:34:01","updated_at":"2019-05-01 09:53:50"}'),
(185, '2020-02-19 18:19:05', 12, 'updateData', 'file', '{"id":"43","name":"6950c16c9bcc6995f376b297f163175921106.jpg","mime":"image\\/jpeg","dir":"webfile\\/6950c16c9bcc6995f376b297f163175921106.jpg","table":"user","table_id":"12","status":"ENABLE","created_at":"2018-11-05 11:15:57","updated_at":null}'),
(186, '2020-02-19 18:19:05', 12, 'updateData', 'user', '{"id":"12","nip":"arvin","name":"arvin","email":"arvin","password":"89f6432af2e2bcea9489ad02cd27a134","role_id":"0","desc":null,"status":"ENABLE","created_at":null,"updated_at":null}'),
(187, '2020-02-19 18:20:14', 12, 'insertData', 'file', '{"name":"6950c16c9bcc6995f376b297f163175914846.png","mime":"image\\/png","dir":"webfile\\/6950c16c9bcc6995f376b297f163175914846.png","table":"user","table_id":"12","updated_at":"2020-02-19 18:20:14"}'),
(188, '2020-02-19 18:20:14', 12, 'updateData', 'user', '{"id":"12","nip":"arvin","name":"arvin","email":"arvin","password":"89f6432af2e2bcea9489ad02cd27a134","role_id":"0","desc":"","status":"ENABLE","created_at":null,"updated_at":"2020-02-19 18:19:05"}'),
(189, '2020-02-21 13:36:05', 12, 'insertData', 'master_provinsi', '{"provinsi":"Sumatra Utara","p_bsni":"sdasd","created_by":"12","created_at":"2020-02-21 13:36:05","status":"ENABLE"}'),
(190, '2020-02-21 13:36:05', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_provinsi","table_id":35,"status":"ENABLE","created_at":"2020-02-21 13:36:05"}'),
(191, '2020-02-21 14:36:54', 12, 'insertData', 'master_perusahaan', '{"id_provinsi":"15","id_kota":"261","nama_pt":"Seteguk Kopi","alamat_pt":"Mawar Gang 1","pemilik":"Wong wong edan","sektor_usaha":"Perkopian duniawi","created_by":"12","created_at":"2020-02-21 14:36:54","status":"ENABLE"}'),
(192, '2020-02-21 14:37:08', 12, 'insertData', 'master_perusahaan', '{"id_provinsi":"15","id_kota":"261","nama_pt":"Seteguk Kopi","alamat_pt":"Mawar Gang 1","pemilik":"Wong wong edan","sektor_usaha":"Perkopian duniawi","created_by":"12","created_at":"2020-02-21 14:37:08","status":"ENABLE"}'),
(193, '2020-02-21 14:38:40', 12, 'insertData', 'master_perusahaan', '{"id_provinsi":"15","id_kota":"261","nama_pt":"Seteguk Kopi","alamat_pt":"Mawar Gang 1","pemilik":"Wong wong edan","sektor_usaha":"Perkopian duniawi","created_by":"12","created_at":"2020-02-21 14:38:40","status":"ENABLE"}'),
(194, '2020-02-21 14:38:40', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_perusahaan","table_id":1,"status":"ENABLE","created_at":"2020-02-21 14:38:40"}'),
(195, '2020-02-21 15:11:31', 13, 'updateData', 'role', '{"id":"1","role":"User","status":"ENABLE","menu":"[\\"1\\"]","created_at":"2018-10-24 10:29:54","updated_at":"2020-02-07 15:16:04"}'),
(196, '2020-02-21 15:15:39', 13, 'updateData', 'role', '{"id":"1","role":"User","status":"ENABLE","menu":"[\\"1\\",\\"24\\"]","created_at":"2018-10-24 10:29:54","updated_at":"2020-02-21 15:11:31"}'),
(197, '2020-02-21 15:41:22', 34, 'updateData', 'menu_master', '{"id":"25","name":"Iuran Ku","icon":"fa fa-credit-card","link":"master\\/tbl_iuran","urutan":"1","parent":"0","notif":"","status":"ENABLE","created_at":"2020-02-21 15:15:26","updated_at":null}'),
(198, '2020-02-21 15:47:28', 13, 'insertData', 'file', '{"name":"6950c16c9bcc6995f376b297f163175928384.jpg","mime":"image\\/jpeg","dir":"webfile\\/6950c16c9bcc6995f376b297f163175928384.jpg","table":"user","table_id":"13","updated_at":"2020-02-21 15:47:28"}'),
(199, '2020-02-21 15:47:29', 13, 'updateData', 'user', '{"id":"13","id_detail":"1","nip":"seteguk","name":"Seteguk Kopi Part 2","email":"arvinfairuzhuda@gmail.com","password":"20caff83ebe191195fb82597d4e82f9e","role_id":"1","desc":"","status":"0","created_at":"2020-02-21 15:08:43","updated_at":null}'),
(200, '2020-02-21 15:56:40', 13, 'insertData', 'tbl_iuran', '{"id_pt":"1","iuran":"350000","keterangan":"Iuran Mabok Gess","pembayaran":1,"tgl_pembayaran":"2020-02-21 15:56:40","created_by":"13","created_at":"2020-02-21 15:56:40","status":"ENABLE"}'),
(201, '2020-02-21 15:56:40', 13, 'insertData', 'file', '{"id":"","name":"6950c16c9bcc6995f376b297f163175935146.jpg","mime":"image\\/jpeg","dir":"webfile\\/6950c16c9bcc6995f376b297f163175935146.jpg","table":"tbl_iuran","table_id":1,"status":"ENABLE","created_at":"2020-02-21 15:56:40"}'),
(202, '2020-02-21 16:39:02', 12, 'updateData', 'tbl_iuran', '{"id":"1","id_pt":"1","iuran":"350000","keterangan":"Iuran Mabok Gess","pembayaran":"1","tgl_pembayaran":"2020-02-21 15:56:40","status":"ENABLE","created_at":"2020-02-21 15:56:40","updated_at":"0000-00-00 00:00:00","created_by":"13"}'),
(203, '2020-02-21 16:47:19', 12, 'updateData', 'tbl_iuran', '{"id":"1","id_pt":"1","iuran":"350000","keterangan":"Iuran Mabok Gess","pembayaran":"2","tgl_pembayaran":"2020-02-21 15:56:40","status":"ENABLE","created_at":"2020-02-21 15:56:40","updated_at":"2020-02-21 16:39:02","created_by":"13"}'),
(204, '2020-02-21 22:33:59', 12, 'insertData', 'master_perusahaan', '{"id_provinsi":"15","id_kota":"235","nama_pt":"Birunet","alamat_pt":"Jombang dalan ombo","pemilik":"Rosihan","sektor_usaha":"Teknologi","created_by":"12","created_at":"2020-02-21 22:33:59","status":"ENABLE"}'),
(205, '2020-02-21 22:33:59', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_perusahaan","table_id":2,"status":"ENABLE","created_at":"2020-02-21 22:33:59"}'),
(206, '2020-02-21 22:35:59', 14, 'insertData', 'tbl_iuran', '{"id_pt":"2","iuran":"550000","keterangan":"Pembangunan Tol","pembayaran":1,"tgl_pembayaran":"2020-02-21 22:35:59","created_by":"14","created_at":"2020-02-21 22:35:59","status":"ENABLE"}'),
(207, '2020-02-21 22:35:59', 14, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"tbl_iuran","table_id":6,"status":"ENABLE","created_at":"2020-02-21 22:35:59"}'),
(208, '2020-02-21 22:36:30', 12, 'updateData', 'file', '{"id":"7","name":"","mime":"","dir":"","table":"tbl_iuran","table_id":"6","status":"ENABLE","created_at":"2020-02-21 22:35:59","updated_at":null}');
INSERT INTO `log_aktivitas` (`log_id`, `log_created_at`, `log_created_by`, `log_action`, `log_tablename`, `log_jsondata`) VALUES
(209, '2020-02-21 22:36:30', 12, 'updateData', 'tbl_iuran', '{"id":"6","id_pt":"2","iuran":"550000","keterangan":"Pembangunan Tol","pembayaran":"1","tgl_pembayaran":"2020-02-21 22:35:59","status":"ENABLE","created_at":"2020-02-21 22:35:59","updated_at":"0000-00-00 00:00:00","created_by":"14"}'),
(210, '2020-02-21 22:36:38', 12, 'updateData', 'tbl_iuran', '{"id":"6","id_pt":"2","iuran":"550000","keterangan":"Pembangunan Tol","pembayaran":"1","tgl_pembayaran":"2020-02-21 22:35:59","status":"ENABLE","created_at":"2020-02-21 22:35:59","updated_at":"2020-02-21 22:36:30","created_by":"14"}'),
(211, '2020-02-21 22:40:20', 12, 'updateData', 'role', '{"id":"0","role":"Admin","status":"ENABLE","menu":"[\\"1\\",\\"23\\",\\"24\\",\\"16\\",\\"21\\",\\"22\\"]","created_at":"2018-10-12 17:03:59","updated_at":"2020-02-19 17:42:56"}'),
(212, '2020-02-24 05:58:09', 0, 'insertData', 'master_perusahaan', '{"id_provinsi":"2","id_kota":"33","nama_pt":"Pabrik Seribu Satu","alamat_pt":"Langkat Matata","pemilik":"Seribu Satu","sektor_usaha":"Pabrik","created_by":0,"created_at":"2020-02-24 05:58:09","status":"ENABLE"}'),
(213, '2020-02-24 05:58:09', 0, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_perusahaan","table_id":3,"status":"ENABLE","created_at":"2020-02-24 05:58:09"}'),
(214, '2020-05-14 14:57:04', 12, 'updateData', 'role', '{"id":"0","role":"Admin","status":"ENABLE","menu":"[\\"1\\",\\"23\\",\\"24\\",\\"26\\",\\"27\\",\\"16\\",\\"21\\",\\"22\\"]","created_at":"2018-10-12 17:03:59","updated_at":"2020-02-21 22:40:20"}'),
(215, '2020-05-14 14:59:47', 12, 'updateData', 'menu_master', '{"id":"16","name":"Master","icon":"fa fa-th","link":"#","urutan":"7","parent":"0","notif":"","status":"ENABLE","created_at":"2020-01-10 09:27:29","updated_at":"2020-01-10 09:28:15"}'),
(216, '2020-05-14 15:02:05', 12, 'updateData', 'role', '{"id":"0","role":"Admin","status":"ENABLE","menu":"[\\"1\\"]","created_at":"2018-10-12 17:03:59","updated_at":"2020-05-14 14:57:04"}'),
(217, '2020-05-14 15:02:22', 12, 'insertData', 'master_jabatan', '{"nama":"Pelaksana","created_by":"12","created_at":"2020-05-14 15:02:22","status":"ENABLE"}'),
(218, '2020-05-14 15:02:22', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_jabatan","table_id":1,"status":"ENABLE","created_at":"2020-05-14 15:02:22"}'),
(219, '2020-05-14 15:02:28', 12, 'insertData', 'master_jabatan', '{"nama":"Staff Muda","created_by":"12","created_at":"2020-05-14 15:02:28","status":"ENABLE"}'),
(220, '2020-05-14 15:02:28', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_jabatan","table_id":2,"status":"ENABLE","created_at":"2020-05-14 15:02:28"}'),
(221, '2020-05-14 15:02:35', 12, 'insertData', 'master_jabatan', '{"nama":"Karu","created_by":"12","created_at":"2020-05-14 15:02:35","status":"ENABLE"}'),
(222, '2020-05-14 15:02:35', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_jabatan","table_id":3,"status":"ENABLE","created_at":"2020-05-14 15:02:35"}'),
(223, '2020-05-14 15:02:44', 12, 'insertData', 'master_jabatan', '{"nama":"Staff Pemula","created_by":"12","created_at":"2020-05-14 15:02:44","status":"ENABLE"}'),
(224, '2020-05-14 15:02:44', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_jabatan","table_id":4,"status":"ENABLE","created_at":"2020-05-14 15:02:44"}'),
(225, '2020-05-14 15:02:54', 12, 'insertData', 'master_jabatan', '{"nama":"Kasi","created_by":"12","created_at":"2020-05-14 15:02:54","status":"ENABLE"}'),
(226, '2020-05-14 15:02:54', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_jabatan","table_id":5,"status":"ENABLE","created_at":"2020-05-14 15:02:54"}'),
(227, '2020-05-14 15:03:09', 12, 'insertData', 'master_shift', '{"nama":"ND","created_by":"12","created_at":"2020-05-14 15:03:09","status":"ENABLE"}'),
(228, '2020-05-14 15:03:09', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_shift","table_id":1,"status":"ENABLE","created_at":"2020-05-14 15:03:09"}'),
(229, '2020-05-14 15:03:15', 12, 'insertData', 'master_shift', '{"nama":"B","created_by":"12","created_at":"2020-05-14 15:03:15","status":"ENABLE"}'),
(230, '2020-05-14 15:03:16', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_shift","table_id":2,"status":"ENABLE","created_at":"2020-05-14 15:03:16"}'),
(231, '2020-05-14 15:03:19', 12, 'insertData', 'master_shift', '{"nama":"C","created_by":"12","created_at":"2020-05-14 15:03:19","status":"ENABLE"}'),
(232, '2020-05-14 15:03:19', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_shift","table_id":3,"status":"ENABLE","created_at":"2020-05-14 15:03:19"}'),
(233, '2020-05-14 15:03:25', 12, 'insertData', 'master_shift', '{"nama":"A","created_by":"12","created_at":"2020-05-14 15:03:25","status":"ENABLE"}'),
(234, '2020-05-14 15:03:25', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_shift","table_id":4,"status":"ENABLE","created_at":"2020-05-14 15:03:25"}'),
(235, '2020-05-14 15:03:31', 12, 'insertData', 'master_shift', '{"nama":"D","created_by":"12","created_at":"2020-05-14 15:03:31","status":"ENABLE"}'),
(236, '2020-05-14 15:03:31', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_shift","table_id":5,"status":"ENABLE","created_at":"2020-05-14 15:03:31"}'),
(237, '2020-05-14 15:04:19', 12, 'insertData', 'master_departemen', '{"nama":"Dis. Wilayah I \\/ GD Fosfat I","created_by":"12","created_at":"2020-05-14 15:04:19","status":"ENABLE"}'),
(238, '2020-05-14 15:04:19', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_departemen","table_id":1,"status":"ENABLE","created_at":"2020-05-14 15:04:19"}'),
(239, '2020-05-14 15:04:45', 12, 'insertData', 'master_departemen', '{"nama":"Dis. Wilayah I \\/ GD Fosfat II","created_by":"12","created_at":"2020-05-14 15:04:45","status":"ENABLE"}'),
(240, '2020-05-14 15:04:45', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_departemen","table_id":2,"status":"ENABLE","created_at":"2020-05-14 15:04:45"}'),
(241, '2020-05-14 15:05:01', 12, 'insertData', 'master_departemen', '{"nama":"Dis. Wilayah I \\/ GD Fosfat Phonska","created_by":"12","created_at":"2020-05-14 15:05:01","status":"ENABLE"}'),
(242, '2020-05-14 15:05:01', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_departemen","table_id":3,"status":"ENABLE","created_at":"2020-05-14 15:05:01"}'),
(243, '2020-05-14 15:05:11', 12, 'insertData', 'master_departemen', '{"nama":"Dis. Wilayah I \\/ GD Fosfat Curah","created_by":"12","created_at":"2020-05-14 15:05:11","status":"ENABLE"}'),
(244, '2020-05-14 15:05:11', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_departemen","table_id":4,"status":"ENABLE","created_at":"2020-05-14 15:05:11"}'),
(245, '2020-05-14 15:05:28', 12, 'insertData', 'master_departemen', '{"nama":"Dis. Wilayah I \\/ GD Fosfat Multiguna","created_by":"12","created_at":"2020-05-14 15:05:28","status":"ENABLE"}'),
(246, '2020-05-14 15:05:28', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_departemen","table_id":5,"status":"ENABLE","created_at":"2020-05-14 15:05:28"}'),
(247, '2020-05-14 15:05:42', 12, 'insertData', 'master_departemen', '{"nama":"Dis. Wilayah I \\/ GD Fosfat ZA","created_by":"12","created_at":"2020-05-14 15:05:42","status":"ENABLE"}'),
(248, '2020-05-14 15:05:42', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_departemen","table_id":6,"status":"ENABLE","created_at":"2020-05-14 15:05:42"}'),
(249, '2020-05-14 15:05:56', 12, 'insertData', 'master_departemen', '{"nama":"Dis. Wilayah I \\/ GD Fosfat Amurea","created_by":"12","created_at":"2020-05-14 15:05:56","status":"ENABLE"}'),
(250, '2020-05-14 15:05:56', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_departemen","table_id":7,"status":"ENABLE","created_at":"2020-05-14 15:05:56"}'),
(251, '2020-05-14 15:06:29', 12, 'insertData', 'master_kompartemen', '{"nama":"Audit Intern","created_by":"12","created_at":"2020-05-14 15:06:29","status":"ENABLE"}'),
(252, '2020-05-14 15:06:29', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kompartemen","table_id":1,"status":"ENABLE","created_at":"2020-05-14 15:06:29"}'),
(253, '2020-05-14 15:06:40', 12, 'insertData', 'master_kompartemen', '{"nama":"Penjualan Retail","created_by":"12","created_at":"2020-05-14 15:06:40","status":"ENABLE"}'),
(254, '2020-05-14 15:06:40', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kompartemen","table_id":2,"status":"ENABLE","created_at":"2020-05-14 15:06:40"}'),
(255, '2020-05-14 15:06:54', 12, 'insertData', 'master_kompartemen', '{"nama":"Pemasaran dan Logistik","created_by":"12","created_at":"2020-05-14 15:06:54","status":"ENABLE"}'),
(256, '2020-05-14 15:06:54', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kompartemen","table_id":3,"status":"ENABLE","created_at":"2020-05-14 15:06:54"}'),
(257, '2020-05-14 15:07:04', 12, 'insertData', 'master_kompartemen', '{"nama":"Penjualan Komersil","created_by":"12","created_at":"2020-05-14 15:07:04","status":"ENABLE"}'),
(258, '2020-05-14 15:07:04', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kompartemen","table_id":4,"status":"ENABLE","created_at":"2020-05-14 15:07:04"}'),
(259, '2020-05-14 15:07:25', 12, 'insertData', 'master_kompartemen', '{"nama":"Administrasi Keuangan","created_by":"12","created_at":"2020-05-14 15:07:25","status":"ENABLE"}'),
(260, '2020-05-14 15:07:25', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kompartemen","table_id":5,"status":"ENABLE","created_at":"2020-05-14 15:07:25"}'),
(261, '2020-05-14 15:07:35', 12, 'insertData', 'master_kompartemen', '{"nama":"Pabrik I","created_by":"12","created_at":"2020-05-14 15:07:35","status":"ENABLE"}'),
(262, '2020-05-14 15:07:35', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kompartemen","table_id":6,"status":"ENABLE","created_at":"2020-05-14 15:07:35"}'),
(263, '2020-05-14 15:07:46', 12, 'insertData', 'master_kompartemen', '{"nama":"Pabrik II","created_by":"12","created_at":"2020-05-14 15:07:46","status":"ENABLE"}'),
(264, '2020-05-14 15:07:46', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kompartemen","table_id":7,"status":"ENABLE","created_at":"2020-05-14 15:07:46"}'),
(265, '2020-05-14 15:07:52', 12, 'insertData', 'master_kompartemen', '{"nama":"Pabrik III","created_by":"12","created_at":"2020-05-14 15:07:52","status":"ENABLE"}'),
(266, '2020-05-14 15:07:52', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kompartemen","table_id":8,"status":"ENABLE","created_at":"2020-05-14 15:07:52"}'),
(267, '2020-05-14 15:08:00', 12, 'insertData', 'master_kompartemen', '{"nama":"Teknologi","created_by":"12","created_at":"2020-05-14 15:08:00","status":"ENABLE"}'),
(268, '2020-05-14 15:08:00', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_kompartemen","table_id":9,"status":"ENABLE","created_at":"2020-05-14 15:08:00"}'),
(269, '2020-05-14 15:08:52', 12, 'insertData', 'master_daftar_periksa_kat', '{"nama":"Bahan","created_by":"12","created_at":"2020-05-14 15:08:52","status":"ENABLE"}'),
(270, '2020-05-14 15:08:52', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa_kat","table_id":1,"status":"ENABLE","created_at":"2020-05-14 15:08:52"}'),
(271, '2020-05-14 15:08:58', 12, 'insertData', 'master_daftar_periksa_kat', '{"nama":"Manusia","created_by":"12","created_at":"2020-05-14 15:08:58","status":"ENABLE"}'),
(272, '2020-05-14 15:08:58', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa_kat","table_id":2,"status":"ENABLE","created_at":"2020-05-14 15:08:58"}'),
(273, '2020-05-14 15:09:06', 12, 'insertData', 'master_daftar_periksa_kat', '{"nama":"Cara Kerja","created_by":"12","created_at":"2020-05-14 15:09:06","status":"ENABLE"}'),
(274, '2020-05-14 15:09:06', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa_kat","table_id":3,"status":"ENABLE","created_at":"2020-05-14 15:09:06"}'),
(275, '2020-05-14 15:09:18', 12, 'insertData', 'master_daftar_periksa_kat', '{"nama":"Peralatan","created_by":"12","created_at":"2020-05-14 15:09:18","status":"ENABLE"}'),
(276, '2020-05-14 15:09:18', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa_kat","table_id":4,"status":"ENABLE","created_at":"2020-05-14 15:09:18"}'),
(277, '2020-05-14 15:09:30', 12, 'insertData', 'master_daftar_periksa_kat', '{"nama":"Lingkungan","created_by":"12","created_at":"2020-05-14 15:09:30","status":"ENABLE"}'),
(278, '2020-05-14 15:09:30', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa_kat","table_id":5,"status":"ENABLE","created_at":"2020-05-14 15:09:30"}'),
(279, '2020-05-14 15:10:16', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Ditempatkan sesuai tempatnya","created_by":"12","created_at":"2020-05-14 15:10:16","status":"ENABLE"}'),
(280, '2020-05-14 15:10:16', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":1,"status":"ENABLE","created_at":"2020-05-14 15:10:16"}'),
(281, '2020-05-14 15:10:25', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Dipilah sesuai sifatnya","created_by":"12","created_at":"2020-05-14 15:10:25","status":"ENABLE"}'),
(282, '2020-05-14 15:10:25', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":2,"status":"ENABLE","created_at":"2020-05-14 15:10:25"}'),
(283, '2020-05-14 15:10:43', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Kemasan tidak bocor dan tutup kemasan rapat","created_by":"12","created_at":"2020-05-14 15:10:43","status":"ENABLE"}'),
(284, '2020-05-14 15:10:43', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":3,"status":"ENABLE","created_at":"2020-05-14 15:10:43"}'),
(285, '2020-05-14 15:11:11', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Ada label(Gambar\\/Simbol, Pernyataan Bahaya dan Kata Peringatan)","created_by":"12","created_at":"2020-05-14 15:11:11","status":"ENABLE"}'),
(286, '2020-05-14 15:11:12', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":4,"status":"ENABLE","created_at":"2020-05-14 15:11:12"}'),
(287, '2020-05-14 15:11:40', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Tempat penyimpanan dilengkapi dengan atap dan tanggul","created_by":"12","created_at":"2020-05-14 15:11:40","status":"ENABLE"}'),
(288, '2020-05-14 15:11:40', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":5,"status":"ENABLE","created_at":"2020-05-14 15:11:40"}'),
(289, '2020-05-14 15:11:48', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Tersedia MSDS","created_by":"12","created_at":"2020-05-14 15:11:48","status":"ENABLE"}'),
(290, '2020-05-14 15:11:48', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":6,"status":"ENABLE","created_at":"2020-05-14 15:11:48"}'),
(291, '2020-05-14 15:12:06', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Telah tersedia APD yang memadai","created_by":"12","created_at":"2020-05-14 15:12:06","status":"ENABLE"}'),
(292, '2020-05-14 15:12:06', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":7,"status":"ENABLE","created_at":"2020-05-14 15:12:06"}'),
(293, '2020-05-14 15:12:21', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Tersedia APAR dan ditempatkan pada tempatnya","created_by":"12","created_at":"2020-05-14 15:12:21","status":"ENABLE"}'),
(294, '2020-05-14 15:12:21', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":8,"status":"ENABLE","created_at":"2020-05-14 15:12:21"}'),
(295, '2020-05-14 15:12:35', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Segel APAR baik","created_by":"12","created_at":"2020-05-14 15:12:35","status":"ENABLE"}'),
(296, '2020-05-14 15:12:35', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":9,"status":"ENABLE","created_at":"2020-05-14 15:12:35"}'),
(297, '2020-05-14 15:12:48', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Tekanan APAR baik","created_by":"12","created_at":"2020-05-14 15:12:48","status":"ENABLE"}'),
(298, '2020-05-14 15:12:48', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":10,"status":"ENABLE","created_at":"2020-05-14 15:12:48"}'),
(299, '2020-05-14 15:13:06', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Lokasi APAR dan pemadam api lainnya tidak terhalang","created_by":"12","created_at":"2020-05-14 15:13:06","status":"ENABLE"}'),
(300, '2020-05-14 15:13:07', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":11,"status":"ENABLE","created_at":"2020-05-14 15:13:07"}'),
(301, '2020-05-14 15:13:20', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Tersedia line hydrant dan kondisinya baik","created_by":"12","created_at":"2020-05-14 15:13:20","status":"ENABLE"}'),
(302, '2020-05-14 15:13:20', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":12,"status":"ENABLE","created_at":"2020-05-14 15:13:20"}'),
(303, '2020-05-14 15:13:36', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Terdapat Kotak Fire Hydrant beserta kelengkapan","created_by":"12","created_at":"2020-05-14 15:13:36","status":"ENABLE"}'),
(304, '2020-05-14 15:13:36', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":13,"status":"ENABLE","created_at":"2020-05-14 15:13:36"}'),
(305, '2020-05-14 15:13:46', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Terdapat alarm dan fire detector","created_by":"12","created_at":"2020-05-14 15:13:46","status":"ENABLE"}'),
(306, '2020-05-14 15:13:46', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":14,"status":"ENABLE","created_at":"2020-05-14 15:13:46"}'),
(307, '2020-05-14 15:14:05', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Terdapat alat pemercik air otomatis (sprinkler)","created_by":"12","created_at":"2020-05-14 15:14:05","status":"ENABLE"}'),
(308, '2020-05-14 15:14:05', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":15,"status":"ENABLE","created_at":"2020-05-14 15:14:05"}'),
(309, '2020-05-14 15:14:32', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Tersedia alat dekontaminasi\\/safety shower sesuai kebutuhan","created_by":"12","created_at":"2020-05-14 15:14:32","status":"ENABLE"}'),
(310, '2020-05-14 15:14:32', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":16,"status":"ENABLE","created_at":"2020-05-14 15:14:32"}'),
(311, '2020-05-14 15:14:48', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"2","nama":"Tidak bercanda dalam bekerja","created_by":"12","created_at":"2020-05-14 15:14:48","status":"ENABLE"}'),
(312, '2020-05-14 15:14:48', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":17,"status":"ENABLE","created_at":"2020-05-14 15:14:48"}'),
(313, '2020-05-14 15:15:03', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"2","nama":"Tidak terdapat sikap tidak aman","created_by":"12","created_at":"2020-05-14 15:15:03","status":"ENABLE"}'),
(314, '2020-05-14 15:15:03', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":18,"status":"ENABLE","created_at":"2020-05-14 15:15:03"}'),
(315, '2020-05-14 15:15:18', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"2","nama":"APD telah digunakan sesuai risiko bahaya","created_by":"12","created_at":"2020-05-14 15:15:18","status":"ENABLE"}'),
(316, '2020-05-14 15:15:19', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":19,"status":"ENABLE","created_at":"2020-05-14 15:15:19"}'),
(317, '2020-05-14 15:15:45', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"2","nama":"Memiliki SIM\\/SIO\\/Sertifikat Khusus","created_by":"12","created_at":"2020-05-14 15:15:45","status":"ENABLE"}'),
(318, '2020-05-14 15:15:45', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":20,"status":"ENABLE","created_at":"2020-05-14 15:15:45"}'),
(319, '2020-05-14 15:16:00', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"1","nama":"Waktu bekerja dan istirahat sesua ketentuan","created_by":"12","created_at":"2020-05-14 15:16:00","status":"ENABLE"}'),
(320, '2020-05-14 15:16:01', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":21,"status":"ENABLE","created_at":"2020-05-14 15:16:01"}'),
(321, '2020-05-14 15:16:14', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"2","nama":"Tersedia air minum yang memadai","created_by":"12","created_at":"2020-05-14 15:16:14","status":"ENABLE"}'),
(322, '2020-05-14 15:16:14', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":22,"status":"ENABLE","created_at":"2020-05-14 15:16:14"}'),
(323, '2020-05-14 15:16:39', 12, 'updateData', 'master_daftar_periksa', '{"id":"21","kategori":"1","nama":"Waktu bekerja dan istirahat sesua ketentuan","status":"ENABLE","created_at":"2020-05-14 15:16:00","updated_at":"0000-00-00 00:00:00","created_by":"12"}'),
(324, '2020-05-14 15:17:01', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"3","nama":"Sesuai dengan SOP\\/IK","created_by":"12","created_at":"2020-05-14 15:17:01","status":"ENABLE"}'),
(325, '2020-05-14 15:17:01', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":23,"status":"ENABLE","created_at":"2020-05-14 15:17:01"}'),
(326, '2020-05-14 15:17:23', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"3","nama":"Tudaj terdapat cara kerja yang membahayakan diri sendiri maupun orang lain","created_by":"12","created_at":"2020-05-14 15:17:23","status":"ENABLE"}'),
(327, '2020-05-14 15:17:23', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":24,"status":"ENABLE","created_at":"2020-05-14 15:17:23"}'),
(328, '2020-05-14 15:17:37', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"3","nama":"Sudah ada safety permit\\/JSA","created_by":"12","created_at":"2020-05-14 15:17:37","status":"ENABLE"}'),
(329, '2020-05-14 15:17:37', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":25,"status":"ENABLE","created_at":"2020-05-14 15:17:37"}'),
(330, '2020-05-14 15:17:51', 12, 'updateData', 'master_daftar_periksa', '{"id":"24","kategori":"3","nama":"Tudaj terdapat cara kerja yang membahayakan diri sendiri maupun orang lain","status":"ENABLE","created_at":"2020-05-14 15:17:23","updated_at":"0000-00-00 00:00:00","created_by":"12"}'),
(331, '2020-05-14 15:18:11', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"3","nama":"Peralatan laik pakai dan aman untuk digunakan","created_by":"12","created_at":"2020-05-14 15:18:11","status":"ENABLE"}'),
(332, '2020-05-14 15:18:11', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":26,"status":"ENABLE","created_at":"2020-05-14 15:18:11"}'),
(333, '2020-05-14 15:18:19', 12, 'updateData', 'master_daftar_periksa', '{"id":"26","kategori":"3","nama":"Peralatan laik pakai dan aman untuk digunakan","status":"ENABLE","created_at":"2020-05-14 15:18:11","updated_at":"0000-00-00 00:00:00","created_by":"12"}'),
(334, '2020-05-14 15:18:39', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"4","nama":"Telah tersedia pengaman yang diperlukan","created_by":"12","created_at":"2020-05-14 15:18:39","status":"ENABLE"}'),
(335, '2020-05-14 15:18:40', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":27,"status":"ENABLE","created_at":"2020-05-14 15:18:40"}'),
(336, '2020-05-14 15:18:52', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"4","nama":"Alat ukur telah dikalibrasi","created_by":"12","created_at":"2020-05-14 15:18:52","status":"ENABLE"}'),
(337, '2020-05-14 15:18:52', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":28,"status":"ENABLE","created_at":"2020-05-14 15:18:52"}'),
(338, '2020-05-14 15:19:10', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"4","nama":"Tenaga, pagar, dan lantai kerja laik dan aman dipakai","created_by":"12","created_at":"2020-05-14 15:19:10","status":"ENABLE"}'),
(339, '2020-05-14 15:19:10', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":29,"status":"ENABLE","created_at":"2020-05-14 15:19:10"}'),
(340, '2020-05-14 15:19:37', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"4","nama":"Kotak listrik, saklar, sambungan kabel, kabel rol dalam kondisi baik","created_by":"12","created_at":"2020-05-14 15:19:37","status":"ENABLE"}'),
(341, '2020-05-14 15:19:37', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":30,"status":"ENABLE","created_at":"2020-05-14 15:19:37"}'),
(342, '2020-05-14 15:20:06', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"5","nama":"Lantai kerja, atap dan dinnding ruang kerja bersih dan tidak rusak","created_by":"12","created_at":"2020-05-14 15:20:06","status":"ENABLE"}'),
(343, '2020-05-14 15:20:06', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":31,"status":"ENABLE","created_at":"2020-05-14 15:20:06"}'),
(344, '2020-05-14 15:20:17', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"5","nama":"Telah tersedia ventilasi yang memadai","created_by":"12","created_at":"2020-05-14 15:20:17","status":"ENABLE"}'),
(345, '2020-05-14 15:20:18', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":32,"status":"ENABLE","created_at":"2020-05-14 15:20:18"}'),
(346, '2020-05-14 15:20:28', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"5","nama":"Penerangan sudah memadai","created_by":"12","created_at":"2020-05-14 15:20:28","status":"ENABLE"}'),
(347, '2020-05-14 15:20:28', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":33,"status":"ENABLE","created_at":"2020-05-14 15:20:28"}'),
(348, '2020-05-14 15:20:34', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"5","nama":"Tidak bising","created_by":"12","created_at":"2020-05-14 15:20:34","status":"ENABLE"}'),
(349, '2020-05-14 15:20:34', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":34,"status":"ENABLE","created_at":"2020-05-14 15:20:34"}'),
(350, '2020-05-14 15:20:48', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"5","nama":"Tidak terdapat paparan debu\\/gas berbahaya","created_by":"12","created_at":"2020-05-14 15:20:48","status":"ENABLE"}'),
(351, '2020-05-14 15:20:48', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":35,"status":"ENABLE","created_at":"2020-05-14 15:20:48"}'),
(352, '2020-05-14 15:21:14', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"5","nama":"Temperatur memadai (tidak terlalu panas\\/dingin)","created_by":"12","created_at":"2020-05-14 15:21:14","status":"ENABLE"}'),
(353, '2020-05-14 15:21:15', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":36,"status":"ENABLE","created_at":"2020-05-14 15:21:15"}'),
(354, '2020-05-14 15:21:53', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"5","nama":"Kebersihan terjaga","created_by":"12","created_at":"2020-05-14 15:21:53","status":"ENABLE"}'),
(355, '2020-05-14 15:21:53', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":37,"status":"ENABLE","created_at":"2020-05-14 15:21:53"}'),
(356, '2020-05-14 15:24:23', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"5","nama":"Tersedia kotak P3K dan isinya lengkap","created_by":"12","created_at":"2020-05-14 15:24:23","status":"ENABLE"}'),
(357, '2020-05-14 15:24:23', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":38,"status":"ENABLE","created_at":"2020-05-14 15:24:23"}'),
(358, '2020-05-14 15:24:54', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"5","nama":"Telah tersedia rambu peringatan, larangan dan petunjuk yang diperlukan dan berkaitan dengan K3","created_by":"12","created_at":"2020-05-14 15:24:54","status":"ENABLE"}'),
(359, '2020-05-14 15:24:55', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":39,"status":"ENABLE","created_at":"2020-05-14 15:24:55"}'),
(360, '2020-05-14 15:25:17', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"5","nama":"Tersedua Emergency Exit dan siap digunakan dalam kondisi darurat","created_by":"12","created_at":"2020-05-14 15:25:17","status":"ENABLE"}'),
(361, '2020-05-14 15:25:17', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":40,"status":"ENABLE","created_at":"2020-05-14 15:25:17"}'),
(362, '2020-05-14 15:25:27', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"5","nama":"Tidak ada penghalang","created_by":"12","created_at":"2020-05-14 15:25:27","status":"ENABLE"}'),
(363, '2020-05-14 15:25:27', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":41,"status":"ENABLE","created_at":"2020-05-14 15:25:27"}'),
(364, '2020-05-14 15:25:43', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"5","nama":"Tersedia ruang ganti dalam keadaan bersih dan rapi","created_by":"12","created_at":"2020-05-14 15:25:43","status":"ENABLE"}'),
(365, '2020-05-14 15:25:43', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":42,"status":"ENABLE","created_at":"2020-05-14 15:25:43"}'),
(366, '2020-05-14 15:25:57', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"5","nama":"Kamar mandi dan WC dalam keadaan bersih","created_by":"12","created_at":"2020-05-14 15:25:57","status":"ENABLE"}'),
(367, '2020-05-14 15:25:57', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":43,"status":"ENABLE","created_at":"2020-05-14 15:25:57"}'),
(368, '2020-05-14 15:26:18', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"5","nama":"Sistem drainase tidak tersumbat","created_by":"12","created_at":"2020-05-14 15:26:18","status":"ENABLE"}'),
(369, '2020-05-14 15:26:18', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":44,"status":"ENABLE","created_at":"2020-05-14 15:26:18"}'),
(370, '2020-05-14 15:26:37', 12, 'insertData', 'master_daftar_periksa', '{"kategori":"5","nama":"Tersedia bendera evakuasi sesuai pada tempatnya","created_by":"12","created_at":"2020-05-14 15:26:37","status":"ENABLE"}'),
(371, '2020-05-14 15:26:37', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_daftar_periksa","table_id":45,"status":"ENABLE","created_at":"2020-05-14 15:26:37"}'),
(372, '2020-05-14 15:41:29', 12, 'updateData', 'role', '{"id":"0","role":"Admin","status":"ENABLE","menu":"[\\"1\\",\\"16\\",\\"28\\",\\"29\\",\\"30\\",\\"31\\"]","created_at":"2018-10-12 17:03:59","updated_at":"2020-05-14 15:02:05"}'),
(373, '2020-05-14 15:49:34', 12, 'insertData', 'pegawai', '{"nip":"12345","nama":"Arvin","id_shift":"1","id_departemen":"1","id_kompartemen":"6","id_jabatan":"1","id_role":"1","created_by":"12","created_at":"2020-05-14 15:49:34","status":"ENABLE"}'),
(374, '2020-05-14 15:49:34', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"pegawai","table_id":1,"status":"ENABLE","created_at":"2020-05-14 15:49:34"}'),
(375, '2020-05-14 15:53:58', 12, 'updateData', 'pegawai', '{"id":"1","nip":"12345","nama":"Arvin","id_shift":"1","id_departemen":"1","id_kompartemen":"6","id_jabatan":"1","id_role":"1","status":"ENABLE","created_at":"2020-05-14 15:49:34","updated_at":"0000-00-00 00:00:00","created_by":"12"}'),
(376, '2020-05-14 15:54:38', 12, 'insertData', 'pegawai', '{"nip":"123182736","nama":"Test Pengawas SR","id_shift":"4","id_departemen":"4","id_kompartemen":"3","id_jabatan":"3","id_role":"2","created_by":"12","created_at":"2020-05-14 15:54:38","status":"ENABLE"}'),
(377, '2020-05-14 15:54:38', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"pegawai","table_id":2,"status":"ENABLE","created_at":"2020-05-14 15:54:38"}'),
(378, '2020-05-14 15:55:06', 12, 'insertData', 'pegawai', '{"nip":"129371234","nama":"Test Kabak Terkait","id_shift":"4","id_departemen":"4","id_kompartemen":"4","id_jabatan":"5","id_role":"5","created_by":"12","created_at":"2020-05-14 15:55:06","status":"ENABLE"}'),
(379, '2020-05-14 15:55:06', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"pegawai","table_id":3,"status":"ENABLE","created_at":"2020-05-14 15:55:06"}'),
(380, '2020-05-14 15:59:43', 12, 'insertData', 'pegawai', '{"nip":"123","nama":"Test Admin","id_shift":"1","id_departemen":"1","id_kompartemen":"1","id_jabatan":"1","id_role":"0","created_by":"12","created_at":"2020-05-14 15:59:43","status":"ENABLE"}'),
(381, '2020-05-14 15:59:43', 12, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"pegawai","table_id":4,"status":"ENABLE","created_at":"2020-05-14 15:59:43"}'),
(382, '2020-05-14 15:59:53', 12, 'updateData', 'pegawai', '{"id":"1","nip":"12345","nama":"Test SR","id_shift":"1","id_departemen":"1","id_kompartemen":"6","id_jabatan":"1","id_role":"1","status":"ENABLE","created_at":"2020-05-14 15:49:34","updated_at":"2020-05-14 15:53:58","created_by":"12"}'),
(383, '2020-05-17 13:22:45', 4, 'updateData', 'role', '{"id":"0","role":"Admin","status":"ENABLE","menu":"[\\"1\\",\\"33\\",\\"16\\",\\"28\\",\\"29\\",\\"30\\",\\"31\\"]","created_at":"2018-10-12 17:03:59","updated_at":"2020-05-14 15:41:29"}'),
(384, '2020-05-17 14:22:11', 4, 'updateData', 'role', '{"id":"0","role":"Admin","status":"ENABLE","menu":"[\\"1\\",\\"33\\",\\"34\\",\\"16\\",\\"28\\",\\"29\\",\\"30\\",\\"31\\"]","created_at":"2018-10-12 17:03:59","updated_at":"2020-05-17 13:22:45"}'),
(385, '2020-05-17 14:23:04', 4, 'insertData', 'master_bagian', '{"nama":"GD Fosfat Amurea","created_by":"4","created_at":"2020-05-17 14:23:04","status":"ENABLE"}'),
(386, '2020-05-17 14:23:04', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_bagian","table_id":1,"status":"ENABLE","created_at":"2020-05-17 14:23:04"}'),
(387, '2020-05-17 14:23:11', 4, 'insertData', 'master_bagian', '{"nama":" GD Fosfat Curah","created_by":"4","created_at":"2020-05-17 14:23:11","status":"ENABLE"}'),
(388, '2020-05-17 14:23:11', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_bagian","table_id":2,"status":"ENABLE","created_at":"2020-05-17 14:23:11"}'),
(389, '2020-05-17 14:23:17', 4, 'insertData', 'master_bagian', '{"nama":"GD Fosfat I","created_by":"4","created_at":"2020-05-17 14:23:17","status":"ENABLE"}'),
(390, '2020-05-17 14:23:17', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_bagian","table_id":3,"status":"ENABLE","created_at":"2020-05-17 14:23:17"}'),
(391, '2020-05-17 14:23:23', 4, 'insertData', 'master_bagian', '{"nama":"GD Fosfat II","created_by":"4","created_at":"2020-05-17 14:23:23","status":"ENABLE"}'),
(392, '2020-05-17 14:23:23', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_bagian","table_id":4,"status":"ENABLE","created_at":"2020-05-17 14:23:23"}'),
(393, '2020-05-17 14:23:28', 4, 'insertData', 'master_bagian', '{"nama":"GD Fosfat Multiguna","created_by":"4","created_at":"2020-05-17 14:23:28","status":"ENABLE"}'),
(394, '2020-05-17 14:23:28', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_bagian","table_id":5,"status":"ENABLE","created_at":"2020-05-17 14:23:28"}'),
(395, '2020-05-17 14:23:34', 4, 'insertData', 'master_bagian', '{"nama":"GD Fosfat Phonska","created_by":"4","created_at":"2020-05-17 14:23:34","status":"ENABLE"}'),
(396, '2020-05-17 14:23:34', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_bagian","table_id":6,"status":"ENABLE","created_at":"2020-05-17 14:23:34"}'),
(397, '2020-05-17 14:23:40', 4, 'insertData', 'master_bagian', '{"nama":"GD Fosfat ZA","created_by":"4","created_at":"2020-05-17 14:23:40","status":"ENABLE"}'),
(398, '2020-05-17 14:23:40', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"master_bagian","table_id":7,"status":"ENABLE","created_at":"2020-05-17 14:23:40"}'),
(399, '2020-05-17 14:23:48', 4, 'updateData', 'master_departemen', '{"id":"7","nama":"Dis. Wilayah I \\/ GD Fosfat Amurea","status":"ENABLE","created_at":"2020-05-14 15:05:56","updated_at":"0000-00-00 00:00:00","created_by":"12"}'),
(400, '2020-05-17 14:23:53', 4, 'updateData', 'master_departemen', '{"id":"4","nama":"Dis. Wilayah I \\/ GD Fosfat Curah","status":"ENABLE","created_at":"2020-05-14 15:05:11","updated_at":"0000-00-00 00:00:00","created_by":"12"}'),
(401, '2020-05-17 14:26:42', 4, 'updateData', 'pegawai', '{"id":"2","nip":"123182736","nama":"Test Pengawas SR","id_shift":"4","id_departemen":"4","id_bagian":"0","id_kompartemen":"3","id_jabatan":"3","id_role":"2","status":"ENABLE","created_at":"2020-05-14 15:54:38","updated_at":"0000-00-00 00:00:00","created_by":"12"}'),
(402, '2020-05-17 14:26:48', 4, 'updateData', 'pegawai', '{"id":"3","nip":"129371234","nama":"Test Kabak Terkait","id_shift":"4","id_departemen":"4","id_bagian":"0","id_kompartemen":"4","id_jabatan":"5","id_role":"5","status":"ENABLE","created_at":"2020-05-14 15:55:06","updated_at":"0000-00-00 00:00:00","created_by":"12"}'),
(403, '2020-05-17 14:31:38', 4, 'updateData', 'pegawai', '{"id":"1","nip":"0938459234","nama":"Test SR","id_shift":"1","id_departemen":"1","id_bagian":"0","id_kompartemen":"6","id_jabatan":"1","id_role":"1","status":"ENABLE","created_at":"2020-05-14 15:49:34","updated_at":"2020-05-14 15:59:53","created_by":"12"}'),
(404, '2020-05-17 14:31:41', 4, 'updateData', 'pegawai', '{"id":"4","nip":"123","nama":"Test Admin","id_shift":"1","id_departemen":"1","id_bagian":"0","id_kompartemen":"1","id_jabatan":"1","id_role":"0","status":"ENABLE","created_at":"2020-05-14 15:59:43","updated_at":"0000-00-00 00:00:00","created_by":"12"}'),
(405, '2020-05-17 14:31:45', 4, 'updateData', 'pegawai', '{"id":"2","nip":"123182736","nama":"Test Pengawas SR","id_shift":"4","id_departemen":"1","id_bagian":"0","id_kompartemen":"3","id_jabatan":"3","id_role":"2","status":"ENABLE","created_at":"2020-05-14 15:54:38","updated_at":"2020-05-17 14:26:42","created_by":"12"}'),
(406, '2020-05-17 14:31:48', 4, 'updateData', 'pegawai', '{"id":"3","nip":"129371234","nama":"Test Kabak Terkait","id_shift":"4","id_departemen":"1","id_bagian":"0","id_kompartemen":"4","id_jabatan":"5","id_role":"5","status":"ENABLE","created_at":"2020-05-14 15:55:06","updated_at":"2020-05-17 14:26:48","created_by":"12"}'),
(407, '2020-05-17 14:40:08', 4, 'insertData', 'form_laporan_bulanan', '{"lokasi":"Teras","tanggal":"2020-05-28","departemen":"1","bagian":"1","json":"[{\\"id_dp\\":\\"1\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"ya\\"},{\\"id_dp\\":\\"2\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"3\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"4\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"ya\\"},{\\"id_dp\\":\\"5\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"6\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"ya\\"},{\\"id_dp\\":\\"7\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"ya\\"},{\\"id_dp\\":\\"8\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"9\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"10\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"ya\\"},{\\"id_dp\\":\\"11\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"ya\\"},{\\"id_dp\\":\\"12\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"13\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"14\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"15\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"16\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"17\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"18\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"19\\",\\"hasil\\":null,\\"keterangan\\":\\"ya\\"},{\\"id_dp\\":\\"20\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"21\\",\\"hasil\\":null,\\"keterangan\\":\\"ya\\"},{\\"id_dp\\":\\"22\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"23\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"24\\",\\"hasil\\":null,\\"keterangan\\":\\"ya\\"},{\\"id_dp\\":\\"25\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"26\\",\\"hasil\\":null,\\"keterangan\\":\\"ya\\"},{\\"id_dp\\":\\"27\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"28\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"29\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"30\\",\\"hasil\\":null,\\"keterangan\\":\\"ya\\"},{\\"id_dp\\":\\"31\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"32\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"33\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"34\\",\\"hasil\\":null,\\"keterangan\\":\\"ya\\"},{\\"id_dp\\":\\"35\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"36\\",\\"hasil\\":null,\\"keterangan\\":\\"ya\\"},{\\"id_dp\\":\\"37\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"38\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"39\\",\\"hasil\\":null,\\"keterangan\\":\\"ya\\"},{\\"id_dp\\":\\"40\\",\\"hasil\\":null,\\"keterangan\\":\\"ya\\"},{\\"id_dp\\":\\"41\\",\\"hasil\\":null,\\"keterangan\\":\\"ya\\"},{\\"id_dp\\":\\"42\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"43\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"44\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"45\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"}]","created_by":"4","created_at":"2020-05-17 14:40:08","status":"ENABLE"}'),
(408, '2020-05-17 14:45:45', 4, 'insertData', 'form_laporan_bulanan', '{"lokasi":"Teras","tanggal":"2020-05-20","departemen":"1","bagian":"1","json":"[{\\"id_dp\\":\\"1\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"2\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"3\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"4\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"5\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"6\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"7\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"8\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"9\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"10\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"11\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"12\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"13\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"14\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"15\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"16\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"17\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"18\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"19\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"20\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"21\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"22\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"23\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"24\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"25\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"26\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"27\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"28\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"29\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"30\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"31\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"32\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"33\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"34\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"35\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"36\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"37\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"38\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"39\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"40\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"41\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"42\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"43\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"44\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"45\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"}]","created_by":"4","created_at":"2020-05-17 14:45:45","status":"ENABLE"}');
INSERT INTO `log_aktivitas` (`log_id`, `log_created_at`, `log_created_by`, `log_action`, `log_tablename`, `log_jsondata`) VALUES
(409, '2020-05-17 14:45:50', 4, 'insertData', 'form_laporan_bulanan', '{"lokasi":"Teras","tanggal":"2020-05-20","departemen":"1","bagian":"1","json":"[{\\"id_dp\\":\\"1\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"2\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"3\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"4\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"5\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"6\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"7\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"8\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"9\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"10\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"11\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"12\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"13\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"14\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"15\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"16\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"17\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"18\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"19\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"20\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"21\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"22\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"23\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"24\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"25\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"26\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"27\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"28\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"29\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"30\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"31\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"32\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"33\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"34\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"35\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"36\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"37\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"38\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"39\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"40\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"41\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"42\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"43\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"44\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"45\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"}]","created_by":"4","created_at":"2020-05-17 14:45:50","status":"ENABLE"}'),
(410, '2020-05-17 14:45:57', 4, 'insertData', 'form_laporan_bulanan', '{"lokasi":"Teras","tanggal":"2020-05-20","departemen":"1","bagian":"1","json":"[{\\"id_dp\\":\\"1\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"2\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"3\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"4\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"5\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"6\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"7\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"8\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"9\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"10\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"11\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"12\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"13\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"14\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"15\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"16\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"17\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"18\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"19\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"20\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"21\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"22\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"23\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"24\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"25\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"26\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"27\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"28\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"29\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"30\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"31\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"32\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"33\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"34\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"35\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"36\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"37\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"38\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"39\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"40\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"41\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"42\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"43\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"44\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"45\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"}]","created_by":"4","created_at":"2020-05-17 14:45:57","status":"ENABLE"}'),
(411, '2020-05-17 14:46:18', 4, 'insertData', 'form_laporan_bulanan', '{"lokasi":"Teras","tanggal":"2020-05-20","departemen":"1","bagian":"1","value":"[{\\"id_dp\\":\\"1\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"2\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"3\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"4\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"5\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"6\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"7\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"8\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"9\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"10\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"11\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"12\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"13\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"14\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"15\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"16\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"17\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"18\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"19\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"20\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"21\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"22\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"23\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"24\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"25\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"26\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"27\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"28\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"29\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"30\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"31\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"32\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"33\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"34\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"35\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"36\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"37\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"38\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"39\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"40\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"41\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"42\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"43\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"44\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"45\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"}]","created_by":"4","created_at":"2020-05-17 14:46:18","status":"ENABLE"}'),
(412, '2020-05-17 14:46:18', 4, 'insertData', 'form_tindak_lanjut', '{"id_laporan":1,"jenis":"UA","hasil_temuan":"Berisik","ke":"5","tindak_lanjut":"-","created_at":"2020-05-17 14:46:18","status":"ENABLE","created_by":"4"}'),
(413, '2020-05-17 14:46:18', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"form_tindak_lanjut","table_id":1,"status":"ENABLE","created_at":"2020-05-17 14:46:18"}'),
(414, '2020-05-17 14:46:18', 4, 'insertData', 'form_tindak_lanjut', '{"id_laporan":1,"jenis":"UC","hasil_temuan":"Maling","ke":"3","tindak_lanjut":"-","created_at":"2020-05-17 14:46:18","status":"ENABLE","created_by":"4"}'),
(415, '2020-05-17 14:46:18', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"form_tindak_lanjut","table_id":1,"status":"ENABLE","created_at":"2020-05-17 14:46:18"}'),
(416, '2020-05-17 14:46:57', 4, 'insertData', 'form_laporan_bulanan', '{"lokasi":"Teras","tanggal":"2020-05-20","departemen":"1","bagian":"1","value":"[{\\"id_dp\\":\\"1\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"2\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"3\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"4\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"5\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"6\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"7\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"8\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"9\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"10\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"11\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"12\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"13\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"14\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"15\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"16\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"17\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"18\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"19\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"20\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"21\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"22\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"23\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"24\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"25\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"26\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"27\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"28\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"29\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"30\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"31\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"32\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"33\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"34\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"35\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"36\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"37\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"38\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"39\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"40\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"41\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"42\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"43\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"44\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"45\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"}]","created_by":"4","created_at":"2020-05-17 14:46:57","status":"ENABLE"}'),
(417, '2020-05-17 14:46:57', 4, 'insertData', 'form_tindak_lanjut', '{"id_laporan":2,"jenis":"UA","hasil_temuan":"Berisik","ke":"5","tindak_lanjut":"-","created_at":"2020-05-17 14:46:57","status":"ENABLE","created_by":"4"}'),
(418, '2020-05-17 14:46:57', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"form_tindak_lanjut","table_id":2,"status":"ENABLE","created_at":"2020-05-17 14:46:57"}'),
(419, '2020-05-17 14:46:57', 4, 'insertData', 'form_tindak_lanjut', '{"id_laporan":2,"jenis":"UC","hasil_temuan":"Maling","ke":"3","tindak_lanjut":"-","created_at":"2020-05-17 14:46:57","status":"ENABLE","created_by":"4"}'),
(420, '2020-05-17 14:46:57', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"form_tindak_lanjut","table_id":2,"status":"ENABLE","created_at":"2020-05-17 14:46:57"}'),
(421, '2020-05-17 15:05:24', 4, 'updateData', 'form_laporan_bulanan', '{"id":"1","lokasi":"Teras","departemen":"1","bagian":"1","tanggal":"2020-05-20 00:00:00","value":"[{\\"id_dp\\":\\"1\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"2\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"3\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"4\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"5\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"6\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"7\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"8\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"9\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"10\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"11\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"12\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"13\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"14\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"15\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"16\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"17\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"18\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"19\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"20\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"21\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"22\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"23\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"24\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"25\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"26\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"27\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"28\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"29\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"30\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"31\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"32\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"33\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"34\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"35\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"36\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"37\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"38\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"39\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"40\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"41\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"42\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"43\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"44\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"45\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"}]","id_pengawas":"0","id_kabag":"0","status":"ENABLE","created_at":"2020-05-17 14:46:18","updated_at":"0000-00-00 00:00:00","created_by":"4"}'),
(422, '2020-05-17 15:05:24', 4, 'insertData', 'form_tindak_lanjut', '{"id_laporan":"1","jenis":"","hasil_temuan":"","ke":"","tindak_lanjut":"","created_at":"2020-05-17 15:05:24","status":"ENABLE","created_by":"4"}'),
(423, '2020-05-17 15:05:25', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"form_tindak_lanjut","table_id":"1","status":"ENABLE","created_at":"2020-05-17 15:05:25"}'),
(424, '2020-05-17 15:06:35', 4, 'updateData', 'form_laporan_bulanan', '{"id":"1","lokasi":"Teras","departemen":"1","bagian":"1","tanggal":"2020-05-20 00:00:00","value":"[{\\"id_dp\\":\\"1\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"2\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"3\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"4\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"5\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"6\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"7\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"8\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"9\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"10\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"11\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"12\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"13\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"14\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"15\\",\\"hasil\\":\\"on\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"16\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"17\\",\\"hasil\\":null,\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"18\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"19\\",\\"hasil\\":null,\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"20\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"21\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"22\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"23\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"24\\",\\"hasil\\":null,\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"25\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"26\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"27\\",\\"hasil\\":null,\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"28\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"29\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"30\\",\\"hasil\\":null,\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"31\\",\\"hasil\\":null,\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"32\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"33\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"34\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"35\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"36\\",\\"hasil\\":null,\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"37\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"38\\",\\"hasil\\":null,\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"39\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"40\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"41\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"42\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"43\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"44\\",\\"hasil\\":null,\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"45\\",\\"hasil\\":null,\\"keterangan\\":\\"\\"}]","id_pengawas":"0","id_kabag":"0","status":"ENABLE","created_at":"2020-05-17 14:46:18","updated_at":"2020-05-17 15:05:24","created_by":"4"}'),
(425, '2020-05-17 15:06:35', 4, 'insertData', 'form_tindak_lanjut', '{"id_laporan":"1","jenis":"","hasil_temuan":"","ke":"","tindak_lanjut":"","created_at":"2020-05-17 15:06:35","status":"ENABLE","created_by":"4"}'),
(426, '2020-05-17 15:06:36', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"form_tindak_lanjut","table_id":"1","status":"ENABLE","created_at":"2020-05-17 15:06:36"}'),
(427, '2020-05-17 15:42:40', 4, 'updateData', 'form_laporan_bulanan', '{"id":"1","lokasi":"Teras","departemen":"1","bagian":"1","tanggal":"2020-05-20 00:00:00","value":"[{\\"id_dp\\":\\"1\\",\\"hasil\\":\\"Y\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"2\\",\\"hasil\\":\\"a\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"3\\",\\"hasil\\":\\"d\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"4\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"5\\",\\"hasil\\":\\"k\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"6\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"7\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"8\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"9\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"10\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"11\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"12\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"13\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"14\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"15\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"16\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"17\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"18\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"19\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"20\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"21\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"22\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"23\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"24\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"25\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"26\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"27\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"28\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"29\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"30\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"31\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"32\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"33\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"34\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"35\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"36\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"37\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"38\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"39\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"40\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"41\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"42\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"43\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"44\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"45\\",\\"hasil\\":\\"\\",\\"keterangan\\":\\"\\"}]","id_pengawas":"0","id_kabag":"0","status":"ENABLE","created_at":"2020-05-17 14:46:18","updated_at":"2020-05-17 15:06:35","created_by":"4"}'),
(428, '2020-05-17 15:42:40', 4, 'insertData', 'form_tindak_lanjut', '{"id_laporan":"1","jenis":"","hasil_temuan":"","ke":"","tindak_lanjut":"","created_at":"2020-05-17 15:42:40","status":"ENABLE","created_by":"4"}'),
(429, '2020-05-17 15:42:40', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"form_tindak_lanjut","table_id":"1","status":"ENABLE","created_at":"2020-05-17 15:42:40"}'),
(430, '2020-05-17 15:54:05', 4, 'deleteData', 'form_tindak_lanjut', '{"id":"4","id_laporan":"2","hasil_temuan":"Maling","ke":"3","tindak_lanjut":"-","jenis":"UC","status":"ENABLE","created_at":"2020-05-17 14:46:57","updated_at":"0000-00-00 00:00:00","created_by":"4"}'),
(431, '2020-05-17 15:57:31', 4, 'updateData', 'form_laporan_bulanan', '{"id":"2","lokasi":"Teras","departemen":"1","bagian":"1","tanggal":"2020-05-20 00:00:00","value":"[{\\"id_dp\\":\\"1\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"2\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"3\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"4\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"5\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"6\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"7\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"8\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"9\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"10\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"11\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"12\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"13\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"14\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"15\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"16\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"17\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"18\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"19\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"20\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"21\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"22\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"23\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"24\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"25\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"26\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"27\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"28\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"29\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"30\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"31\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"32\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"33\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"34\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"35\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"36\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"37\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"38\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"39\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"40\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"41\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"42\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"43\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"44\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"Ya\\"},{\\"id_dp\\":\\"45\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"}]","id_pengawas":"0","id_kabag":"0","status":"ENABLE","created_at":"2020-05-17 14:46:57","updated_at":"0000-00-00 00:00:00","created_by":"4"}'),
(432, '2020-05-17 15:57:31', 4, 'insertData', 'form_tindak_lanjut', '{"id_laporan":"2","jenis":"UA","hasil_temuan":"Berisik","ke":"5","tindak_lanjut":"-","created_at":"2020-05-17 15:57:31","status":"ENABLE","created_by":"4"}'),
(433, '2020-05-17 15:57:32', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"form_tindak_lanjut","table_id":"2","status":"ENABLE","created_at":"2020-05-17 15:57:32"}'),
(434, '2020-05-17 15:57:32', 4, 'insertData', 'form_tindak_lanjut', '{"id_laporan":"2","jenis":"UC","hasil_temuan":"Maling","ke":"4","tindak_lanjut":"-","created_at":"2020-05-17 15:57:32","status":"ENABLE","created_by":"4"}'),
(435, '2020-05-17 15:57:32', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"form_tindak_lanjut","table_id":"2","status":"ENABLE","created_at":"2020-05-17 15:57:32"}'),
(436, '2020-05-17 15:59:17', 4, 'insertData', 'form_laporan_bulanan', '{"lokasi":"Dapur","tanggal":"2020-05-27","departemen":"1","bagian":"1","value":"[{\\"id_dp\\":\\"1\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"alksjd\\"},{\\"id_dp\\":\\"2\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"aslkdj\\"},{\\"id_dp\\":\\"3\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"4\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"5\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"6\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"aslkdj\\"},{\\"id_dp\\":\\"7\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"asdklj\\"},{\\"id_dp\\":\\"8\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"9\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"asdkj\\"},{\\"id_dp\\":\\"10\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"11\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"12\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"13\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"14\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"15\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"16\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"17\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"18\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"19\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"20\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"21\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"22\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"23\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"24\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"25\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"26\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"27\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"28\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"29\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"30\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"31\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"32\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"33\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"34\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"35\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"36\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"37\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"38\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"39\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"40\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"41\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"42\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"43\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"44\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"45\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"}]","created_by":"4","created_at":"2020-05-17 15:59:17","status":"ENABLE"}'),
(437, '2020-05-17 15:59:17', 4, 'insertData', 'form_tindak_lanjut', '{"id_laporan":3,"jenis":"LK","hasil_temuan":"Banyak pembulyan","ke":"23","tindak_lanjut":"-","created_at":"2020-05-17 15:59:17","status":"ENABLE","created_by":"4"}'),
(438, '2020-05-17 15:59:17', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"form_tindak_lanjut","table_id":3,"status":"ENABLE","created_at":"2020-05-17 15:59:17"}'),
(439, '2020-05-17 16:00:43', 4, 'insertData', 'form_laporan_bulanan', '{"lokasi":"Pager","tanggal":"2020-05-24","departemen":"1","bagian":"1","value":"[{\\"id_dp\\":\\"1\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"2\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"3\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"4\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"5\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"6\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"7\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"8\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"9\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"10\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"11\\",\\"hasil\\":\\"Ya\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"12\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"13\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"14\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"15\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"16\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"17\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"18\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"19\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"20\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"21\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"22\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"23\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"24\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"25\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"26\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"27\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"28\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"29\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"30\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"31\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"32\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"33\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"34\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"35\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"36\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"37\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"38\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"39\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"40\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"41\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"42\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"43\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"44\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"},{\\"id_dp\\":\\"45\\",\\"hasil\\":\\"Tidak\\",\\"keterangan\\":\\"\\"}]","created_by":"4","created_at":"2020-05-17 16:00:43","status":"ENABLE"}'),
(440, '2020-05-17 16:00:43', 4, 'insertData', 'form_tindak_lanjut', '{"id_laporan":4,"jenis":"","hasil_temuan":"","ke":"","tindak_lanjut":"","created_at":"2020-05-17 16:00:43","status":"ENABLE","created_by":"4"}'),
(441, '2020-05-17 16:00:43', 4, 'insertData', 'file', '{"id":"","name":"","mime":"","dir":"","table":"form_tindak_lanjut","table_id":4,"status":"ENABLE","created_at":"2020-05-17 16:00:43"}');

-- --------------------------------------------------------

--
-- Table structure for table `log_backupdb`
--

CREATE TABLE IF NOT EXISTS `log_backupdb` (
  `bdb_id` int(11) NOT NULL,
  `bdb_file` varchar(500) NOT NULL,
  `bdb_size` varchar(500) NOT NULL,
  `bdb_sizedisplay` varchar(500) NOT NULL,
  `bdb_created_at` datetime NOT NULL,
  `bdb_created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_backupdb`
--

INSERT INTO `log_backupdb` (`bdb_id`, `bdb_file`, `bdb_size`, `bdb_sizedisplay`, `bdb_created_at`, `bdb_created_by`) VALUES
(1, 'backup-on-2019-09-25-17-18-20.zip', '26893', '26.26 KB', '2019-09-25 17:18:20', 1),
(2, 'backup-on-2019-09-25-17-19-15.zip', '26964', '26.33 KB', '2019-09-25 17:19:15', 1),
(3, 'backup-on-2019-09-30-17-04-07.zip', '27346', '26.71 KB', '2019-09-30 17:04:07', 1),
(4, 'backup-on-2019-10-03-16-55-55.zip', '29539', '28.85 KB', '2019-10-03 16:55:55', 1),
(5, 'backup-on-2019-10-15-09-53-59.zip', '29571', '28.88 KB', '2019-10-15 09:53:59', 1),
(6, 'backup-on-2019-10-16-14-00-26.zip', '29760', '29.06 KB', '2019-10-16 14:00:26', 1),
(7, 'backup-on-2019-11-08-09-47-08.zip', '30655', '29.94 KB', '2019-11-08 09:47:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_bagian`
--

CREATE TABLE IF NOT EXISTS `master_bagian` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` enum('ENABLE','DISABLE') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_bagian`
--

INSERT INTO `master_bagian` (`id`, `nama`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'GD Fosfat Amurea', 'ENABLE', '2020-05-17 14:23:04', '0000-00-00 00:00:00', 4),
(2, ' GD Fosfat Curah', 'ENABLE', '2020-05-17 14:23:11', '0000-00-00 00:00:00', 4),
(3, 'GD Fosfat I', 'ENABLE', '2020-05-17 14:23:17', '0000-00-00 00:00:00', 4),
(4, 'GD Fosfat II', 'ENABLE', '2020-05-17 14:23:23', '0000-00-00 00:00:00', 4),
(5, 'GD Fosfat Multiguna', 'ENABLE', '2020-05-17 14:23:28', '0000-00-00 00:00:00', 4),
(6, 'GD Fosfat Phonska', 'ENABLE', '2020-05-17 14:23:34', '0000-00-00 00:00:00', 4),
(7, 'GD Fosfat ZA', 'ENABLE', '2020-05-17 14:23:40', '0000-00-00 00:00:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `master_daftar_periksa`
--

CREATE TABLE IF NOT EXISTS `master_daftar_periksa` (
  `id` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` enum('ENABLE','DISABLE') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_daftar_periksa`
--

INSERT INTO `master_daftar_periksa` (`id`, `kategori`, `nama`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 1, 'Ditempatkan sesuai tempatnya', 'ENABLE', '2020-05-14 15:10:16', '0000-00-00 00:00:00', 12),
(2, 1, 'Dipilah sesuai sifatnya', 'ENABLE', '2020-05-14 15:10:25', '0000-00-00 00:00:00', 12),
(3, 1, 'Kemasan tidak bocor dan tutup kemasan rapat', 'ENABLE', '2020-05-14 15:10:43', '0000-00-00 00:00:00', 12),
(4, 1, 'Ada label(Gambar/Simbol, Pernyataan Bahaya dan Kata Peringatan)', 'ENABLE', '2020-05-14 15:11:11', '0000-00-00 00:00:00', 12),
(5, 1, 'Tempat penyimpanan dilengkapi dengan atap dan tanggul', 'ENABLE', '2020-05-14 15:11:40', '0000-00-00 00:00:00', 12),
(6, 1, 'Tersedia MSDS', 'ENABLE', '2020-05-14 15:11:48', '0000-00-00 00:00:00', 12),
(7, 1, 'Telah tersedia APD yang memadai', 'ENABLE', '2020-05-14 15:12:06', '0000-00-00 00:00:00', 12),
(8, 1, 'Tersedia APAR dan ditempatkan pada tempatnya', 'ENABLE', '2020-05-14 15:12:21', '0000-00-00 00:00:00', 12),
(9, 1, 'Segel APAR baik', 'ENABLE', '2020-05-14 15:12:35', '0000-00-00 00:00:00', 12),
(10, 1, 'Tekanan APAR baik', 'ENABLE', '2020-05-14 15:12:48', '0000-00-00 00:00:00', 12),
(11, 1, 'Lokasi APAR dan pemadam api lainnya tidak terhalang', 'ENABLE', '2020-05-14 15:13:06', '0000-00-00 00:00:00', 12),
(12, 1, 'Tersedia line hydrant dan kondisinya baik', 'ENABLE', '2020-05-14 15:13:20', '0000-00-00 00:00:00', 12),
(13, 1, 'Terdapat Kotak Fire Hydrant beserta kelengkapan', 'ENABLE', '2020-05-14 15:13:36', '0000-00-00 00:00:00', 12),
(14, 1, 'Terdapat alarm dan fire detector', 'ENABLE', '2020-05-14 15:13:46', '0000-00-00 00:00:00', 12),
(15, 1, 'Terdapat alat pemercik air otomatis (sprinkler)', 'ENABLE', '2020-05-14 15:14:05', '0000-00-00 00:00:00', 12),
(16, 1, 'Tersedia alat dekontaminasi/safety shower sesuai kebutuhan', 'ENABLE', '2020-05-14 15:14:32', '0000-00-00 00:00:00', 12),
(17, 2, 'Tidak bercanda dalam bekerja', 'ENABLE', '2020-05-14 15:14:48', '0000-00-00 00:00:00', 12),
(18, 2, 'Tidak terdapat sikap tidak aman', 'ENABLE', '2020-05-14 15:15:03', '0000-00-00 00:00:00', 12),
(19, 2, 'APD telah digunakan sesuai risiko bahaya', 'ENABLE', '2020-05-14 15:15:18', '0000-00-00 00:00:00', 12),
(20, 2, 'Memiliki SIM/SIO/Sertifikat Khusus', 'ENABLE', '2020-05-14 15:15:45', '0000-00-00 00:00:00', 12),
(21, 2, 'Waktu bekerja dan istirahat sesua ketentuan', 'ENABLE', '2020-05-14 15:16:00', '2020-05-14 15:16:39', 12),
(22, 2, 'Tersedia air minum yang memadai', 'ENABLE', '2020-05-14 15:16:14', '0000-00-00 00:00:00', 12),
(23, 3, 'Sesuai dengan SOP/IK', 'ENABLE', '2020-05-14 15:17:01', '0000-00-00 00:00:00', 12),
(24, 3, 'Tidak terdapat cara kerja yang membahayakan diri sendiri maupun orang lain', 'ENABLE', '2020-05-14 15:17:23', '2020-05-14 15:17:51', 12),
(25, 3, 'Sudah ada safety permit/JSA', 'ENABLE', '2020-05-14 15:17:37', '0000-00-00 00:00:00', 12),
(26, 4, 'Peralatan laik pakai dan aman untuk digunakan', 'ENABLE', '2020-05-14 15:18:11', '2020-05-14 15:18:19', 12),
(27, 4, 'Telah tersedia pengaman yang diperlukan', 'ENABLE', '2020-05-14 15:18:39', '0000-00-00 00:00:00', 12),
(28, 4, 'Alat ukur telah dikalibrasi', 'ENABLE', '2020-05-14 15:18:52', '0000-00-00 00:00:00', 12),
(29, 4, 'Tenaga, pagar, dan lantai kerja laik dan aman dipakai', 'ENABLE', '2020-05-14 15:19:10', '0000-00-00 00:00:00', 12),
(30, 4, 'Kotak listrik, saklar, sambungan kabel, kabel rol dalam kondisi baik', 'ENABLE', '2020-05-14 15:19:37', '0000-00-00 00:00:00', 12),
(31, 5, 'Lantai kerja, atap dan dinnding ruang kerja bersih dan tidak rusak', 'ENABLE', '2020-05-14 15:20:06', '0000-00-00 00:00:00', 12),
(32, 5, 'Telah tersedia ventilasi yang memadai', 'ENABLE', '2020-05-14 15:20:17', '0000-00-00 00:00:00', 12),
(33, 5, 'Penerangan sudah memadai', 'ENABLE', '2020-05-14 15:20:28', '0000-00-00 00:00:00', 12),
(34, 5, 'Tidak bising', 'ENABLE', '2020-05-14 15:20:34', '0000-00-00 00:00:00', 12),
(35, 5, 'Tidak terdapat paparan debu/gas berbahaya', 'ENABLE', '2020-05-14 15:20:48', '0000-00-00 00:00:00', 12),
(36, 5, 'Temperatur memadai (tidak terlalu panas/dingin)', 'ENABLE', '2020-05-14 15:21:14', '0000-00-00 00:00:00', 12),
(37, 5, 'Kebersihan terjaga', 'ENABLE', '2020-05-14 15:21:53', '0000-00-00 00:00:00', 12),
(38, 5, 'Tersedia kotak P3K dan isinya lengkap', 'ENABLE', '2020-05-14 15:24:23', '0000-00-00 00:00:00', 12),
(39, 5, 'Telah tersedia rambu peringatan, larangan dan petunjuk yang diperlukan dan berkaitan dengan K3', 'ENABLE', '2020-05-14 15:24:54', '0000-00-00 00:00:00', 12),
(40, 5, 'Tersedua Emergency Exit dan siap digunakan dalam kondisi darurat', 'ENABLE', '2020-05-14 15:25:17', '0000-00-00 00:00:00', 12),
(41, 5, 'Tidak ada penghalang', 'ENABLE', '2020-05-14 15:25:27', '0000-00-00 00:00:00', 12),
(42, 5, 'Tersedia ruang ganti dalam keadaan bersih dan rapi', 'ENABLE', '2020-05-14 15:25:43', '0000-00-00 00:00:00', 12),
(43, 5, 'Kamar mandi dan WC dalam keadaan bersih', 'ENABLE', '2020-05-14 15:25:57', '0000-00-00 00:00:00', 12),
(44, 5, 'Sistem drainase tidak tersumbat', 'ENABLE', '2020-05-14 15:26:18', '0000-00-00 00:00:00', 12),
(45, 5, 'Tersedia bendera evakuasi sesuai pada tempatnya', 'ENABLE', '2020-05-14 15:26:37', '0000-00-00 00:00:00', 12);

-- --------------------------------------------------------

--
-- Table structure for table `master_daftar_periksa_kat`
--

CREATE TABLE IF NOT EXISTS `master_daftar_periksa_kat` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` enum('ENABLE','DISABLE') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_daftar_periksa_kat`
--

INSERT INTO `master_daftar_periksa_kat` (`id`, `nama`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Bahan', 'ENABLE', '2020-05-14 15:08:52', '0000-00-00 00:00:00', 12),
(2, 'Manusia', 'ENABLE', '2020-05-14 15:08:58', '0000-00-00 00:00:00', 12),
(3, 'Cara Kerja', 'ENABLE', '2020-05-14 15:09:06', '0000-00-00 00:00:00', 12),
(4, 'Peralatan', 'ENABLE', '2020-05-14 15:09:18', '0000-00-00 00:00:00', 12),
(5, 'Lingkungan', 'ENABLE', '2020-05-14 15:09:30', '0000-00-00 00:00:00', 12);

-- --------------------------------------------------------

--
-- Table structure for table `master_departemen`
--

CREATE TABLE IF NOT EXISTS `master_departemen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` enum('ENABLE','DISABLE') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_departemen`
--

INSERT INTO `master_departemen` (`id`, `nama`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Dis. Wilayah I', 'ENABLE', '2020-05-14 15:04:19', '0000-00-00 00:00:00', 12),
(2, 'PPNPJ', 'ENABLE', '2020-05-14 15:04:45', '0000-00-00 00:00:00', 12),
(3, 'PRW II', 'ENABLE', '2020-05-14 15:05:01', '0000-00-00 00:00:00', 12),
(4, 'PP KORP', 'ENABLE', '2020-05-14 15:05:11', '2020-05-17 14:23:53', 12),
(5, 'Dis. Wilayah II', 'ENABLE', '2020-05-14 15:05:28', '0000-00-00 00:00:00', 12),
(6, 'PROMCANSAR', 'ENABLE', '2020-05-14 15:05:42', '0000-00-00 00:00:00', 12),
(7, 'PENGELOLAAN MITRA PROD', 'ENABLE', '2020-05-14 15:05:56', '2020-05-17 14:23:48', 12);

-- --------------------------------------------------------

--
-- Table structure for table `master_jabatan`
--

CREATE TABLE IF NOT EXISTS `master_jabatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` enum('ENABLE','DISABLE') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_jabatan`
--

INSERT INTO `master_jabatan` (`id`, `nama`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Pelaksana', 'ENABLE', '2020-05-14 15:02:22', '0000-00-00 00:00:00', 12),
(2, 'Staff Muda', 'ENABLE', '2020-05-14 15:02:28', '0000-00-00 00:00:00', 12),
(3, 'Karu', 'ENABLE', '2020-05-14 15:02:35', '0000-00-00 00:00:00', 12),
(4, 'Staff Pemula', 'ENABLE', '2020-05-14 15:02:44', '0000-00-00 00:00:00', 12),
(5, 'Kasi', 'ENABLE', '2020-05-14 15:02:54', '0000-00-00 00:00:00', 12);

-- --------------------------------------------------------

--
-- Table structure for table `master_kompartemen`
--

CREATE TABLE IF NOT EXISTS `master_kompartemen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` enum('ENABLE','DISABLE') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_kompartemen`
--

INSERT INTO `master_kompartemen` (`id`, `nama`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Audit Intern', 'ENABLE', '2020-05-14 15:06:29', '0000-00-00 00:00:00', 12),
(2, 'Penjualan Retail', 'ENABLE', '2020-05-14 15:06:40', '0000-00-00 00:00:00', 12),
(3, 'Pemasaran dan Logistik', 'ENABLE', '2020-05-14 15:06:54', '0000-00-00 00:00:00', 12),
(4, 'Penjualan Komersil', 'ENABLE', '2020-05-14 15:07:04', '0000-00-00 00:00:00', 12),
(5, 'Administrasi Keuangan', 'ENABLE', '2020-05-14 15:07:25', '0000-00-00 00:00:00', 12),
(6, 'Pabrik I', 'ENABLE', '2020-05-14 15:07:35', '0000-00-00 00:00:00', 12),
(7, 'Pabrik II', 'ENABLE', '2020-05-14 15:07:46', '0000-00-00 00:00:00', 12),
(8, 'Pabrik III', 'ENABLE', '2020-05-14 15:07:52', '0000-00-00 00:00:00', 12),
(9, 'Teknologi', 'ENABLE', '2020-05-14 15:08:00', '0000-00-00 00:00:00', 12);

-- --------------------------------------------------------

--
-- Table structure for table `master_shift`
--

CREATE TABLE IF NOT EXISTS `master_shift` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` enum('ENABLE','DISABLE') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_shift`
--

INSERT INTO `master_shift` (`id`, `nama`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'ND', 'ENABLE', '2020-05-14 15:03:09', '0000-00-00 00:00:00', 12),
(2, 'B', 'ENABLE', '2020-05-14 15:03:15', '0000-00-00 00:00:00', 12),
(3, 'C', 'ENABLE', '2020-05-14 15:03:19', '0000-00-00 00:00:00', 12),
(4, 'A', 'ENABLE', '2020-05-14 15:03:25', '0000-00-00 00:00:00', 12),
(5, 'D', 'ENABLE', '2020-05-14 15:03:31', '0000-00-00 00:00:00', 12);

-- --------------------------------------------------------

--
-- Table structure for table `menu_master`
--

CREATE TABLE IF NOT EXISTS `menu_master` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `urutan` varchar(255) DEFAULT NULL,
  `parent` varchar(255) DEFAULT NULL,
  `notif` varchar(255) DEFAULT NULL,
  `status` enum('ENABLE','DISABLE') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_master`
--

INSERT INTO `menu_master` (`id`, `name`, `icon`, `link`, `urutan`, `parent`, `notif`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'mdi mdi-monitor-dashboard', '', '1', '0', NULL, 'ENABLE', '2019-01-17 14:33:33', NULL),
(33, 'Pegawai', 'fa fa-users', 'master/pegawai', '1', '0', '', 'ENABLE', '2020-05-14 15:41:19', NULL),
(16, 'Pengaturan', 'fa fa-th', '#', '7', '0', '', 'ENABLE', '2020-01-10 09:27:29', '2020-05-14 14:59:47'),
(28, 'Jabatan', 'fa fa-circle', 'master/master_jabatan', '0', '16', '', 'ENABLE', '2020-05-14 15:00:22', NULL),
(29, 'Shift', 'fa fa-circle', 'master/master_shift', '0', '16', '', 'ENABLE', '2020-05-14 15:00:22', NULL),
(30, 'Departemen', 'fa fa-circle', 'master/master_departemen', '0', '16', '', 'ENABLE', '2020-05-14 15:00:22', NULL),
(31, 'Kompartemen', 'fa fa-circle', 'master/master_kompartemen', '0', '16', '', 'ENABLE', '2020-05-14 15:00:22', NULL),
(34, 'Safety Patrol', 'fa fa-refresh', 'master/form_laporan_bulanan', '2', '0', '', 'ENABLE', '2020-05-17 13:22:09', NULL),
(35, 'Bagian', 'fa fa-circle', 'master/master_bagian', '3', '16', '', 'ENABLE', '2020-05-17 14:22:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_shift` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `id_kompartemen` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `status` enum('ENABLE','DISABLE') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `id_shift`, `id_departemen`, `id_bagian`, `id_kompartemen`, `id_jabatan`, `id_role`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, '0938459234', 'Test SR', 1, 1, 1, 6, 1, 1, 'ENABLE', '2020-05-14 15:49:34', '2020-05-17 14:31:38', 12),
(2, '123182736', 'Test Pengawas SR', 4, 1, 1, 3, 3, 2, 'ENABLE', '2020-05-14 15:54:38', '2020-05-17 14:31:45', 12),
(3, '129371234', 'Test Kabak Terkait', 4, 1, 1, 4, 5, 5, 'ENABLE', '2020-05-14 15:55:06', '2020-05-17 14:31:48', 12),
(4, '123', 'Test Admin', 1, 1, 1, 1, 1, 0, 'ENABLE', '2020-05-14 15:59:43', '2020-05-17 14:31:41', 12);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `query` longtext,
  `header` varchar(255) DEFAULT NULL,
  `status` enum('ENABLE','DISABLE') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `name`, `query`, `header`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Users', 'SELECT * FROM user', '["nip","name","email","password","role_id","desc","status","created_at","updated_at"]', 'ENABLE', '2019-03-13 09:57:07', '2019-03-19 17:13:35'),
(2, 'Customer', 'SELECT customer.*,file.dir FROM customer LEFT JOIN file ON file.table_id = customer.id and file.table= ''customer''', '["nama","email","telp","alamat","status","dir"]', 'ENABLE', '2019-03-25 10:47:39', '2019-07-01 09:01:19'),
(3, 'Statistik', 'SELECT date_format(pembayaran_spp.bulan, ''%M %Y'') as bulan, a.belum_bayar, c.sudah_bayar, b.belum_validasi, d.sudah_validasi\r\nFROM pembayaran_spp\r\nLEFT JOIN\r\n	(\r\n        SELECT pembayaran_spp.bulan, COUNT(pembayaran_spp.id) as belum_bayar\r\n        FROM pembayaran_spp\r\n        WHERE pembayaran_spp.tanggal_pembayaran = ''0000-00-00 00:00:00''\r\n        GROUP BY pembayaran_spp.bulan\r\n        ) a\r\nON pembayaran_spp.bulan = a.bulan\r\nLEFT JOIN\r\n	(\r\n        SELECT pembayaran_spp.bulan, COUNT(pembayaran_spp.id) as belum_validasi\r\n        FROM pembayaran_spp\r\n        WHERE pembayaran_spp.tanggal_validasi = ''0000-00-00 00:00:00''\r\n        GROUP BY pembayaran_spp.bulan\r\n        ) b\r\nON pembayaran_spp.bulan = b.bulan\r\nLEFT JOIN\r\n	(\r\n        SELECT pembayaran_spp.bulan, COUNT(pembayaran_spp.id) as sudah_bayar\r\n        FROM pembayaran_spp\r\n        WHERE pembayaran_spp.tanggal_pembayaran != ''0000-00-00 00:00:00''\r\n        GROUP BY pembayaran_spp.bulan\r\n        ) c\r\nON pembayaran_spp.bulan = c.bulan\r\nLEFT JOIN\r\n	(\r\n        SELECT pembayaran_spp.bulan, COUNT(pembayaran_spp.id) as sudah_validasi\r\n        FROM pembayaran_spp\r\n        WHERE pembayaran_spp.tanggal_validasi != ''0000-00-00 00:00:00''\r\n        GROUP BY pembayaran_spp.bulan\r\n        ) d\r\nON pembayaran_spp.bulan = d.bulan\r\nGROUP BY pembayaran_spp.bulan', '["bulan","belum_bayar","belum_validasi","sudah_bayar","sudah_validasi"]', 'ENABLE', '2020-01-07 13:56:11', '2020-01-07 13:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `status` enum('DISABLE','ENABLE') DEFAULT NULL,
  `menu` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`, `status`, `menu`, `created_at`, `updated_at`) VALUES
(0, 'Admin', 'ENABLE', '["1","33","34","16","28","29","30","31","35"]', '2018-10-12 17:03:59', '2020-05-17 14:22:11'),
(1, 'SR', 'ENABLE', '["1"]', '2018-10-24 10:29:54', '2020-02-21 15:15:39'),
(2, 'Pengawas SR', 'ENABLE', '["1"]', '2018-10-24 10:29:54', '2020-02-21 15:15:39'),
(3, 'Sekretaris SP2K3', 'ENABLE', '["1"]', '2018-10-24 10:29:54', '2020-02-21 15:15:39'),
(4, 'Kabag K3', 'ENABLE', '["1"]', '2018-10-24 10:29:54', '2020-02-21 15:15:39'),
(5, 'Kabag Terkait', 'ENABLE', '["1"]', '2018-10-24 10:29:54', '2020-02-21 15:15:39'),
(6, 'SE', 'ENABLE', '["1"]', '2018-10-24 10:29:54', '2020-02-21 15:15:39'),
(7, 'SI', 'ENABLE', '["1"]', '2018-10-24 10:29:54', '2020-02-21 15:15:39'),
(8, 'Ketua SP2K3', 'ENABLE', '["1"]', '2018-10-24 10:29:54', '2020-02-21 15:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `id` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `site` varchar(225) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `code`, `site`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '725245003', 'JAKARTA', 'JAKARTA', 'ENABLE', '2018-02-05 15:24:09', '2018-10-12 04:20:35'),
(7, '71805050', 'ADARO', 'SIS ADARO', 'ENABLE', '2018-02-05 13:48:30', '2018-08-06 05:40:46'),
(8, '71923055', 'KIDECO', 'BUMA KIDECO', 'ENABLE', '2018-02-05 13:50:04', '2018-10-12 04:20:39'),
(9, '72524510', 'HANDIL', 'HANDIL', 'ENABLE', '2018-02-13 17:59:15', '2018-05-03 09:09:28'),
(10, '71005052', 'LATI', 'BUMA LATI', 'ENABLE', '2018-02-27 04:51:48', '2018-05-03 09:09:36'),
(11, '72005051', 'ARKON', 'ARKON', 'ENABLE', '2018-02-27 04:52:11', '2018-10-12 03:20:21'),
(12, '71605055', 'ADARO', 'BUMA ADARO', 'ENABLE', '2018-03-20 06:48:21', '2018-05-03 09:09:51'),
(13, '71605054', 'BINUNGAN', 'BUMA BINUNGAN', 'ENABLE', '2018-03-20 06:48:44', '2018-05-03 09:09:58'),
(14, '72305050', 'SAMBARATA', 'SIS SAMBARATA', 'ENABLE', '2018-03-20 06:49:06', '2018-05-03 09:10:07'),
(15, '72305052', 'LATI', 'RBA LATI', 'ENABLE', '2018-03-20 06:49:25', '2018-05-03 09:10:17'),
(16, '72305053', 'MARTABE', 'MARTABE', 'ENABLE', '2018-03-20 06:49:47', '2018-05-03 09:10:24'),
(17, '72805053', 'AKT', 'AKT', 'ENABLE', '2018-03-20 06:50:02', '2018-05-03 09:10:33'),
(18, '72905053', 'KIDECO', 'PETROSEA KIDECO', 'ENABLE', '2018-03-20 06:50:26', '2018-05-03 09:10:43'),
(19, '73305053', 'BAKAN', 'BAKAN', 'ENABLE', '2018-03-20 06:50:56', '2018-05-03 09:10:52'),
(20, '73305054', 'BINUNGAN', 'SIS BINUNGAN', 'ENABLE', '2018-03-20 06:51:11', '2018-05-03 09:11:01'),
(21, 'sss', 'asdad', 'sadsa', 'ENABLE', '2018-08-07 13:58:09', NULL),
(22, '725245003', 'BANDUNG', 'BANDUNG', 'ENABLE', '2018-08-11 02:56:50', NULL),
(23, '7879779879', 'BANDUNG', 'BANDUNG', 'ENABLE', '2018-08-11 02:59:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `id_detail` int(11) NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_detail`, `nip`, `name`, `email`, `password`, `role_id`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(12, 0, 'arvin', 'arvin', 'arvin', '89f6432af2e2bcea9489ad02cd27a134', 0, '', 'ENABLE', NULL, '2020-02-19 18:20:14'),
(13, 1, 'seteguk', 'Seteguk Kopi Part 2', 'arvinfairuzhuda@gmail.com', '20caff83ebe191195fb82597d4e82f9e', 1, '', '0', '2020-02-21 15:08:43', '2020-02-21 15:47:29'),
(14, 2, 'birunet', 'Birunet', 'birunet@gmail.com', '423cc7259a09bc3a11f504df801ae4e5', 1, '', '0', '2020-02-21 22:35:08', NULL),
(15, 3, 'seribusatu', 'Pabrik Seribu Satu', 'seribusatu@gmail.com', '1079e4019393f363b4a7e6a27104ff65', 1, '', '0', '2020-02-24 05:58:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `access_control`
--
ALTER TABLE `access_control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contohmaster`
--
ALTER TABLE `contohmaster`
  ADD PRIMARY KEY (`cm_id`);

--
-- Indexes for table `customer_dnd`
--
ALTER TABLE `customer_dnd`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_laporan_bulanan`
--
ALTER TABLE `form_laporan_bulanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_tindak_lanjut`
--
ALTER TABLE `form_tindak_lanjut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grafik`
--
ALTER TABLE `grafik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfig`
--
ALTER TABLE `konfig`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `konfig_email`
--
ALTER TABLE `konfig_email`
  ADD PRIMARY KEY (`ke_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `log_backupdb`
--
ALTER TABLE `log_backupdb`
  ADD PRIMARY KEY (`bdb_id`);

--
-- Indexes for table `master_bagian`
--
ALTER TABLE `master_bagian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_daftar_periksa`
--
ALTER TABLE `master_daftar_periksa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_daftar_periksa_kat`
--
ALTER TABLE `master_daftar_periksa_kat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_departemen`
--
ALTER TABLE `master_departemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_jabatan`
--
ALTER TABLE `master_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_kompartemen`
--
ALTER TABLE `master_kompartemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_shift`
--
ALTER TABLE `master_shift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_master`
--
ALTER TABLE `menu_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access`
--
ALTER TABLE `access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `access_control`
--
ALTER TABLE `access_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=308;
--
-- AUTO_INCREMENT for table `contohmaster`
--
ALTER TABLE `contohmaster`
  MODIFY `cm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_dnd`
--
ALTER TABLE `customer_dnd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `form_laporan_bulanan`
--
ALTER TABLE `form_laporan_bulanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `form_tindak_lanjut`
--
ALTER TABLE `form_tindak_lanjut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `grafik`
--
ALTER TABLE `grafik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `konfig`
--
ALTER TABLE `konfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `konfig_email`
--
ALTER TABLE `konfig_email`
  MODIFY `ke_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=168;
--
-- AUTO_INCREMENT for table `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=442;
--
-- AUTO_INCREMENT for table `log_backupdb`
--
ALTER TABLE `log_backupdb`
  MODIFY `bdb_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `master_bagian`
--
ALTER TABLE `master_bagian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `master_daftar_periksa`
--
ALTER TABLE `master_daftar_periksa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `master_daftar_periksa_kat`
--
ALTER TABLE `master_daftar_periksa_kat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `master_departemen`
--
ALTER TABLE `master_departemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `master_jabatan`
--
ALTER TABLE `master_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `master_kompartemen`
--
ALTER TABLE `master_kompartemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `master_shift`
--
ALTER TABLE `master_shift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menu_master`
--
ALTER TABLE `menu_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
