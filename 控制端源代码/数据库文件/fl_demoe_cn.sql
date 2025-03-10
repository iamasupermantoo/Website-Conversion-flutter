-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-06-24 22:07:48
-- 服务器版本： 5.6.50-log
-- PHP 版本： 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `fl_demoe_cn`
--

-- --------------------------------------------------------

--
-- 表的结构 `boarding`
--

CREATE TABLE `boarding` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `boarding`
--

INSERT INTO `boarding` (`id`, `image`, `title`, `description`, `status`, `date`) VALUES
(1, 'boarding_item_1.png', '松果应用', '松果应用可以轻松把你的网站转换成APP应用程序', 1, '2021-05-27 10:18:16'),
(2, 'boarding_item_2.png', '主题支持', '如果需要更改主题颜色你可以从管理后台设置中修改颜色支持渐变或单一颜色', 1, '2021-05-27 10:18:16'),
(3, 'boarding_item_3.png', '媒体支持', '松果应用支持音视频和所有的图像包括gif', 1, '2021-05-27 10:18:16');

-- --------------------------------------------------------

--
-- 表的结构 `floating`
--

CREATE TABLE `floating` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type` varchar(255) NOT NULL,
  `icon` text NOT NULL,
  `url` text NOT NULL,
  `backgroundColor` varchar(255) NOT NULL,
  `iconColor` varchar(255) NOT NULL DEFAULT '#ffffff',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `floating`
--

INSERT INTO `floating` (`id`, `title`, `type`, `icon`, `url`, `backgroundColor`, `iconColor`, `status`, `date`) VALUES
(1, '优惠商品', 'url', 'floating_item_1.png', 'https://www.pineal.cn/wap/goods/detail?goods_id=72', '#7b50dc', '#ffffff', 1, '2021-06-11 18:22:30'),
(2, '最新商品', 'url', 'floating_item_2.png', 'https://www.pineal.cn/wap/goods/discount.html', '#7b50dc', '#ffffff', 1, '2021-06-11 18:37:08'),
(3, '个人中心', 'url', 'floating_item_3.png', 'https://www.pineal.cn/wap/login.html', '#7b50dc', '#ffffff', 1, '2021-06-11 19:35:45');

-- --------------------------------------------------------

--
-- 表的结构 `left_navigation_icon`
--

CREATE TABLE `left_navigation_icon` (
  `id` int(11) NOT NULL,
  `icon` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `fixed` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `left_navigation_icon`
--

INSERT INTO `left_navigation_icon` (`id`, `icon`, `title`, `value`, `type`, `url`, `status`, `fixed`, `created_at`, `updated_at`) VALUES
(1, 'icon_item_1.png', 'Side Menu', 'icon_menu', 'action', '', 1, 1, '2021-06-23 02:04:12', '2020-06-07 10:58:42'),
(2, 'icon_item_2.png', 'Reload Button', 'icon_reload', 'action', '', 0, 1, '2021-06-23 02:04:12', '2020-06-07 10:58:42'),
(3, 'icon_item_3.png', 'Share Button', 'icon_share', 'action', '', 0, 1, '2020-06-07 11:16:42', '2020-06-07 11:16:42'),
(4, 'icon_item_4.png', 'Home Button', 'icon_home', 'action', '', 0, 1, '2020-06-07 11:16:42', '2020-06-07 11:16:42'),
(5, 'icon_item_5.png', 'Back Forward Button', 'icon_back_forward', 'action', '', 0, 1, '2020-07-05 02:46:10', '2020-07-05 02:46:10'),
(6, 'icon_item_6.png', 'Back Button', 'icon_back', 'action', '', 0, 1, '2020-07-04 10:17:29', '2020-07-04 10:17:29'),
(7, 'icon_item_7.png', 'Forward Button', 'icon_forward', 'action', '', 0, 1, '2020-07-04 10:17:29', '2020-07-04 10:17:29'),
(8, 'icon_item_8.png', 'Forward-2 Button', 'icon_forward', 'action', '', 0, 1, '2020-06-07 11:18:16', '2020-06-07 11:18:16'),
(9, 'icon_item_9.png', 'Back-2 Forward Button', 'icon_back_forward', 'action', '', 0, 1, '2020-06-07 11:18:16', '2020-06-07 11:18:16'),
(10, 'icon_item_10.png', 'Forward-3 Button', 'icon_forward', 'action', '', 0, 1, '2020-06-07 11:18:16', '2020-06-07 11:18:16'),
(11, 'icon_item_11.png', 'Back-3 Forward Button', 'icon_back_forward', 'action', '', 0, 1, '2020-06-07 11:18:16', '2020-06-07 11:18:16'),
(12, 'icon_item_12.png', 'No Button', 'icon_empty', 'action', '', 0, 1, '2020-07-05 02:46:10', '2020-07-05 02:46:10'),
(13, 'icon_item_13.png', 'Cart Button', 'icon_cart', 'url', 'https://www.pineal.cn/', 0, 1, '2021-06-24 13:52:34', '2020-06-07 11:18:16'),
(14, 'icon_item_14.png', 'Sale Button', 'icon_sale', 'url', 'https://www.pineal.cn/', 0, 1, '2021-06-24 13:52:48', '2020-06-07 11:18:16'),
(15, 'icon_item_15.png', 'Search Button', 'icon_search', 'url', 'https://www.pineal.cn/', 0, 1, '2021-06-24 13:53:03', '2020-06-07 11:18:16'),
(16, 'icon_item_16.png', 'Exit Button', 'icon_exit', 'action', '', 0, 1, '2020-06-07 11:18:16', '2020-06-07 11:18:16'),
(17, 'icon_item_17.png', 'Close', 'icon_back', 'action', '', 0, 1, '2020-06-07 11:18:16', '2020-06-07 11:18:16'),
(18, 'icon_item_18.png', 'Add', 'icon_add', 'url', 'https://www.pineal.cn/', 0, 1, '2021-06-24 13:53:22', '2020-06-07 11:18:16'),
(19, 'icon_item_19.png', 'QrCode-1', 'icon_qrcode', 'action', '', 0, 1, '2021-06-09 10:18:16', '2021-06-09 10:18:16'),
(20, 'icon_item_20.png', 'QrCode-2', 'icon_qrcode', 'action', '', 0, 1, '2021-06-09 10:18:16', '2021-06-09 10:18:16'),
(21, 'icon_item_21.png', 'QrCode-3', 'icon_qrcode', 'action', '', 0, 1, '2021-06-09 10:18:16', '2021-06-09 10:18:16'),
(22, 'icon_item_22.png', 'Notification', 'icon_notification', 'url', 'https://www.pineal.cn/', 0, 1, '2021-06-24 13:53:39', '2021-06-11 16:19:07'),
(23, 'icon_item_23.png', 'Profile', 'icon_profile', 'url', 'https://www.pineal.cn/', 0, 1, '2021-06-24 13:54:04', '2021-06-11 16:21:21'),
(24, 'icon_item_24.png', 'Message', 'icon_message', 'url', 'https://www.pineal.cn/', 0, 1, '2021-06-24 13:54:20', '2021-06-11 16:21:21'),
(25, 'icon_item_25.png', 'Messanger', 'icon_messanger', 'url', 'https://www.pineal.cn/', 0, 1, '2021-06-24 13:54:34', '2021-06-11 16:21:21');

-- --------------------------------------------------------

--
-- 表的结构 `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type` varchar(255) NOT NULL,
  `icon` text NOT NULL,
  `url` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `menu`
--

INSERT INTO `menu` (`id`, `title`, `type`, `icon`, `url`, `status`, `date`) VALUES
(1, '论坛列表', 'url', 'menu_item_1.png', 'http://1.116.186.172/swap/forum.php?forumlist=1&mobile=2', 1, '2020-05-06 10:18:16'),
(2, '最新贴文', 'url', 'menu_item_2.png', 'http://1.116.186.172/swap/forum.php?mod=forumdisplay&fid=2&mobile=2', 1, '2021-06-02 10:18:16'),
(3, '松果商城', 'url', 'menu_item_3.png', 'https://www.pineal.cn/wap/index.html', 1, '2021-06-02 10:18:16');

-- --------------------------------------------------------

--
-- 表的结构 `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type` varchar(255) NOT NULL,
  `icon` text NOT NULL,
  `url` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `pages`
--

INSERT INTO `pages` (`id`, `title`, `type`, `icon`, `url`, `status`, `date`) VALUES
(1, '关于我们', 'url', 'page_item_1.png', 'https://www.gc.com.cn/support/about.htm', 1, '2021-05-20 17:10:54'),
(2, '隐私政策', 'url', 'page_item_2.png', 'http://www.apppark.cn/privacy.html', 1, '2021-05-19 20:09:36'),
(3, '使用条款', 'url', 'page_item_3.png', 'https://www.intel.cn/content/www/cn/zh/legal/terms-of-use.html', 1, '2021-05-19 20:11:22');

-- --------------------------------------------------------

--
-- 表的结构 `right_navigation_icon`
--

CREATE TABLE `right_navigation_icon` (
  `id` int(11) NOT NULL,
  `icon` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `fixed` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `right_navigation_icon`
--

INSERT INTO `right_navigation_icon` (`id`, `icon`, `title`, `value`, `type`, `url`, `status`, `fixed`, `created_at`, `updated_at`) VALUES
(1, 'icon_item_1.png', 'Side Menu', 'icon_menu', 'action', '', 0, 1, '2020-06-07 09:58:42', '2020-06-07 09:58:42'),
(2, 'icon_item_2.png', 'Reload Button', 'icon_reload', 'action', '', 1, 1, '2020-06-07 09:58:42', '2020-06-07 09:58:42'),
(3, 'icon_item_3.png', 'Share Button', 'icon_share', 'action', '', 1, 1, '2020-06-07 10:16:42', '2020-06-07 10:16:42'),
(4, 'icon_item_4.png', 'Home Button', 'icon_home', 'action', '', 0, 1, '2020-06-07 10:16:42', '2020-06-07 10:16:42'),
(5, 'icon_item_5.png', 'Back Forward Button', 'icon_back_forward', 'action', '', 0, 1, '2020-07-05 01:46:10', '2020-07-05 01:46:10'),
(6, 'icon_item_6.png', 'Back Button', 'icon_back', 'action', '', 0, 1, '2020-07-04 09:17:29', '2020-07-04 09:17:29'),
(7, 'icon_item_7.png', 'Forward Button', 'icon_forward', 'action', '', 0, 1, '2020-07-04 09:17:29', '2020-07-04 09:17:29'),
(8, 'icon_item_8.png', 'Back Button', 'icon_back', 'action', '', 0, 1, '2020-06-07 10:18:16', '2020-06-07 10:18:16'),
(9, 'icon_item_9.png', 'Back-2 Forward Button', 'icon_back_forward', 'action', '', 0, 1, '2020-06-07 10:18:16', '2020-06-07 10:18:16'),
(10, 'icon_item_10.png', 'Forward-3 Button', 'icon_forward', 'action', '', 0, 1, '2020-06-07 10:18:16', '2020-06-07 10:18:16'),
(11, 'icon_item_11.png', 'Back-3 Forward Button', 'icon_back_forward', 'action', '', 0, 1, '2020-06-07 10:18:16', '2020-06-07 10:18:16'),
(12, 'icon_item_12.png', 'No Button', 'icon_empty', 'action', '', 0, 1, '2020-07-05 01:46:10', '2020-07-05 01:46:10'),
(13, 'icon_item_13.png', 'Cart Button', 'icon_cart', 'url', 'https://www.pineal.cn/', 0, 1, '2021-06-24 13:55:16', '2020-06-07 10:18:16'),
(14, 'icon_item_14.png', 'Sale Button', 'icon_sale', 'url', 'https://www.pineal.cn/', 0, 1, '2021-06-24 13:55:45', '2020-06-07 10:18:16'),
(15, 'icon_item_15.png', 'Search Button', 'icon_search', 'url', 'https://m.so.com/?src=360portal&ls=', 1, 1, '2021-06-24 09:01:16', '2020-06-07 10:18:16'),
(16, 'icon_item_16.png', 'Exit Button', 'icon_exit', 'action', '', 0, 1, '2020-06-07 10:18:16', '2020-06-07 10:18:16'),
(17, 'icon_item_17.png', 'Close', 'icon_back', 'action', '', 0, 1, '2020-06-07 10:18:16', '2020-06-07 10:18:16'),
(18, 'icon_item_18.png', 'Add', 'icon_add', 'url', 'https://www.pineal.cn/', 0, 1, '2021-06-24 13:56:10', '2020-06-07 10:18:16'),
(19, 'icon_item_19.png', 'QrCode-1', 'icon_qrcode', 'action', '', 0, 1, '2021-06-24 08:56:27', '2021-06-09 09:18:16'),
(20, 'icon_item_20.png', 'QrCode-2', 'icon_qrcode', 'action', '', 0, 1, '2021-06-09 09:18:16', '2021-06-09 09:18:16'),
(21, 'icon_item_21.png', 'QrCode-3', 'icon_qrcode', 'action', '', 0, 1, '2021-06-09 09:18:16', '2021-06-09 09:18:16'),
(22, 'icon_item_22.png', 'Notification', 'icon_notification', 'url', 'https://www.pineal.cn/', 0, 1, '2021-06-24 13:56:34', '2021-06-11 15:19:07'),
(23, 'icon_item_23.png', 'Profile', 'icon_profile', 'url', 'https://www.pineal.cn/', 0, 1, '2021-06-24 13:56:57', '2021-06-11 15:21:21'),
(24, 'icon_item_24.png', 'Message', 'icon_message', 'url', 'https://www.pineal.cn/', 0, 1, '2021-06-24 13:57:32', '2021-06-11 15:21:21'),
(25, 'icon_item_25.png', 'Messanger', 'icon_messanger', 'url', 'https://www.pineal.cn/', 0, 1, '2021-06-24 13:57:59', '2021-06-11 15:21:21');

-- --------------------------------------------------------

--
-- 表的结构 `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `url` varchar(255) NOT NULL,
  `admob_id` varchar(255) NOT NULL,
  `admob_id_ios` varchar(255) NOT NULL,
  `admob_key_ad_banner` varchar(255) NOT NULL,
  `admob_key_ad_interstitial` varchar(255) NOT NULL,
  `admob_key_ad_banner_ios` varchar(255) NOT NULL,
  `admob_key_ad_interstitial_ios` varchar(255) NOT NULL,
  `admob_dealy` int(11) NOT NULL,
  `navigatin_bar_style` varchar(255) NOT NULL,
  `left_button` varchar(255) NOT NULL,
  `right_button` varchar(255) NOT NULL,
  `loader` varchar(255) NOT NULL,
  `loaderColor` varchar(255) NOT NULL,
  `firstColor` varchar(255) NOT NULL,
  `secondColor` varchar(255) NOT NULL,
  `backgroundColor` varchar(255) NOT NULL,
  `logo` text NOT NULL,
  `javascript` tinyint(4) NOT NULL DEFAULT '1',
  `download_webview` tinyint(4) NOT NULL DEFAULT '1',
  `permission_dialog` tinyint(4) NOT NULL DEFAULT '1',
  `splach_screen` tinyint(4) NOT NULL DEFAULT '1',
  `swipe_refresh` tinyint(4) NOT NULL DEFAULT '1',
  `website_zoom` tinyint(4) NOT NULL DEFAULT '0',
  `desktop_mode` tinyint(4) NOT NULL DEFAULT '0',
  `full_screen` tinyint(4) NOT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `logo_header` text NOT NULL,
  `type_header` varchar(255) NOT NULL,
  `about_us` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `android_id` varchar(255) NOT NULL,
  `ios_id` varchar(255) NOT NULL,
  `onesignal_id` varchar(255) NOT NULL,
  `onesignal_api_key` varchar(255) NOT NULL,
  `share` text CHARACTER SET utf8 NOT NULL,
  `list` varchar(255) NOT NULL DEFAULT '6788f8a68f2145bee08f3f2813ab7226',
  `ad_banner` tinyint(4) NOT NULL,
  `ad_interstitial` tinyint(4) NOT NULL,
  `pull_refresh` tinyint(4) NOT NULL,
  `boarding` tinyint(4) NOT NULL,
  `deeplink` varchar(255) NOT NULL DEFAULT 'app.flyweb.scheme',
  `tab_navigation_enable` tinyint(4) NOT NULL,
  `colorTab` varchar(255) NOT NULL,
  `version_android` varchar(20) DEFAULT '1.0.0',
  `version_ios` varchar(20) DEFAULT '1.0.0',
  `version_app` varchar(255) NOT NULL DEFAULT 'version_app',
  `purchase_code` varchar(255) NOT NULL DEFAULT 'NullJungle'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `settings`
--

INSERT INTO `settings` (`id`, `title`, `url`, `admob_id`, `admob_id_ios`, `admob_key_ad_banner`, `admob_key_ad_interstitial`, `admob_key_ad_banner_ios`, `admob_key_ad_interstitial_ios`, `admob_dealy`, `navigatin_bar_style`, `left_button`, `right_button`, `loader`, `loaderColor`, `firstColor`, `secondColor`, `backgroundColor`, `logo`, `javascript`, `download_webview`, `permission_dialog`, `splach_screen`, `swipe_refresh`, `website_zoom`, `desktop_mode`, `full_screen`, `sub_title`, `logo_header`, `type_header`, `about_us`, `android_id`, `ios_id`, `onesignal_id`, `onesignal_api_key`, `share`, `list`, `ad_banner`, `ad_interstitial`, `pull_refresh`, `boarding`, `deeplink`, `tab_navigation_enable`, `colorTab`, `version_android`, `version_ios`, `version_app`, `purchase_code`) VALUES
(1, '松果应用', 'http://1.116.186.172/swap/forum.php?mod=guide&view=newthread&mobile=2', '', '', 'ca-app-pub-3940256099942544/6300978111', 'ca-app-pub-3940256099942544/1033173712', 'ca-app-pub-3940256099942544/2934735716', 'ca-app-pub-3940256099942544/4411468910', 100, 'left', '', '', 'RotatingCircle', '#597ae2', '#7b50dc', '#597ae2', '', 'settings_1.png', 0, 0, 0, 0, 0, 0, 0, 0, '轻松将你的网站转换成APP客户端', 'logo_header_1.png', 'text', '松果应用为你提供网站转换APP最好的解决方案,开发语言使用Flutter你可以挂平台生成自己的APP,包括安卓和苹果,你只需要输入自己的域名,在后台添加菜单,自定义颜色,即可生成与众不同的APP应用程序', 'com.pineal', '', 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx', 'Rest Api Key', '给你推荐一款非常好用的APP赶快下载吧\r\nAndroid:\r\nhttps://www.pineal.cn/\r\niOS:\r\nhttps://www.pineal.cn/', '', 0, 0, 1, 1, 'app.flyweb.scheme', 0, '#597ae2', '2.0.0', '2.0.0', '2.0.1', 'NullJungle');

-- --------------------------------------------------------

--
-- 表的结构 `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  `id_app` varchar(255) NOT NULL,
  `icon` text NOT NULL,
  `url` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `social`
--

INSERT INTO `social` (`id`, `title`, `link_url`, `id_app`, `icon`, `url`, `status`, `date`) VALUES
(1, 'Facebook', 'fb://page/id_app', '590628830966605', 'social_item_1.png', 'https://www.facebook.com/id_app', 0, '2020-05-28 10:18:16'),
(2, 'Youtube', 'https://www.youtube.com/channel/id_app', 'UCvHPU0LieqpqD8eKj2VypPg', 'social_item_2.png', 'https://www.youtube.com/channel/id_app', 0, '2020-05-28 15:46:15'),
(3, 'Skype', 'skype:id_app?chat', 'positifmobile', 'social_item_3.png', 'skype:id_app?chat', 0, '2020-05-28 10:18:16'),
(4, 'Twitter', 'https://twitter.com/id_app', 'positifmobile', 'social_item_4.png', 'https://twitter.com/id_app', 0, '2020-05-28 10:18:16'),
(5, 'WhatsApp', 'whatsapp://send?phone=id_app', 'positifmobile', 'social_item_5.png', 'whatsapp://send?phone=id_app', 0, '2020-05-28 10:18:16'),
(6, 'Snapchat', 'snapchat://add/id_app', 'positifmobile', 'social_item_6.png', 'https://www.snapchat.com/download', 0, '2020-05-28 10:18:16'),
(7, 'Messenger', 'https://www.messenger.com/t/id_app', 'positifmobile', 'social_item_7.png', 'https://www.messenger.com/t/id_app', 0, '2020-05-28 10:18:16'),
(8, 'Instagram', 'instagram://user?username=id_app', 'envato', 'social_item_8.png', 'https://www.instagram.com/id_app', 0, '2020-05-28 10:18:16');

-- --------------------------------------------------------

--
-- 表的结构 `splash`
--

CREATE TABLE `splash` (
  `id` int(11) NOT NULL,
  `firstColor` varchar(255) NOT NULL,
  `secondColor` varchar(255) NOT NULL,
  `logo_splash` varchar(255) NOT NULL,
  `img_splash` varchar(255) NOT NULL,
  `enable_logo` tinyint(4) NOT NULL,
  `enable_img` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `splash`
--

INSERT INTO `splash` (`id`, `firstColor`, `secondColor`, `logo_splash`, `img_splash`, `enable_logo`, `enable_img`) VALUES
(1, '#7b50dc', '#597ae2', 'logo_splash.png', 'img_splash.png', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tab`
--

CREATE TABLE `tab` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `tab`
--

INSERT INTO `tab` (`id`, `title`, `url`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, '首页', 'http://47.100.112.22/demo/nuke/portal.php?mod=index&mobile=2', 'tab_item_1.png', 1, '2021-06-24 09:51:24', '2021-06-24 09:51:24'),
(2, '论坛分类', 'http://47.100.112.22/demo/nuke/forum.php?forumlist=1&mobile=2', 'tab_item_2.png', 1, '2021-06-24 09:52:26', '2021-06-24 09:52:26'),
(3, '优惠课程', 'http://47.100.112.22/demo/nuke/forum.php?mod=forumdisplay&fid=36&page=1&mobile=2', 'tab_item_3.png', 1, '2021-06-24 09:53:45', '2021-06-24 09:53:45'),
(4, '轻松购物', 'https://www.pineal.cn/wap/goods/category.html', 'tab_item_4.png', 1, '2021-06-24 09:54:33', '2021-06-24 09:54:33'),
(5, '设置中心', 'https://www.pineal.cn/wap/login.html', 'tab_item_5.png', 1, '2021-06-24 09:55:14', '2021-06-24 09:55:14');

-- --------------------------------------------------------

--
-- 表的结构 `useragent`
--

CREATE TABLE `useragent` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `value_android` text NOT NULL,
  `value_ios` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `useragent`
--

INSERT INTO `useragent` (`id`, `title`, `value_android`, `value_ios`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Chrome', 'Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.210 Mobile Safari/537.36', 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/90.0.4430.78 Mobile/15E148 Safari/604.1', 1, '2021-05-17 20:41:03', '2021-05-17 20:41:03');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `picture`) VALUES
(1, 'admin@gmail.com', 'crrC/bL/nxi/Y', 'Admin', 'Admin', 'user_1.png');

--
-- 转储表的索引
--

--
-- 表的索引 `boarding`
--
ALTER TABLE `boarding`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `floating`
--
ALTER TABLE `floating`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `left_navigation_icon`
--
ALTER TABLE `left_navigation_icon`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `right_navigation_icon`
--
ALTER TABLE `right_navigation_icon`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `splash`
--
ALTER TABLE `splash`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `tab`
--
ALTER TABLE `tab`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `useragent`
--
ALTER TABLE `useragent`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `boarding`
--
ALTER TABLE `boarding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `floating`
--
ALTER TABLE `floating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `left_navigation_icon`
--
ALTER TABLE `left_navigation_icon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- 使用表AUTO_INCREMENT `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- 使用表AUTO_INCREMENT `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `right_navigation_icon`
--
ALTER TABLE `right_navigation_icon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 使用表AUTO_INCREMENT `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `splash`
--
ALTER TABLE `splash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `tab`
--
ALTER TABLE `tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `useragent`
--
ALTER TABLE `useragent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
