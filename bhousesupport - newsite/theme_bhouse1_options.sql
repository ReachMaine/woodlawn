-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2015 at 01:10 PM
-- Server version: 5.5.31-30.3-log
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bhouse_bhcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `bhc_options`
--

CREATE TABLE IF NOT EXISTS `bhc_options` (
  `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(64) NOT NULL DEFAULT '',
  `option_value` longtext NOT NULL,
  `autoload` varchar(20) NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name` (`option_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1346 ;

--
-- Dumping data for table `bhc_options`
--

INSERT INTO `bhc_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(140, 'theme_mods_bhousesupport1', 'a:111:{i:0;b:0;s:12:"social_icons";a:5:{s:8:"facebook";s:1:"0";s:7:"twitter";s:1:"0";s:5:"email";s:1:"0";s:9:"pinterest";s:1:"0";s:10:"googleplus";s:1:"0";}s:7:"backups";a:111:{i:0;b:0;s:12:"social_icons";a:5:{s:8:"facebook";s:1:"0";s:7:"twitter";s:1:"0";s:5:"email";s:1:"0";s:9:"pinterest";s:1:"0";s:10:"googleplus";s:1:"0";}s:7:"backups";N;s:9:"site_logo";s:78:"http://woodlawnmuseum.com/support/wp-content/uploads/2015/02/wl_logo_boxed.png";s:12:"site_favicon";s:72:"http://woodlawnmuseum.com/support/wp-content/uploads/2015/02/favicon.png";s:18:"site_favicon_large";s:0:"";s:16:"custom_cart_icon";s:0:"";s:11:"body_layout";s:13:"framed-layout";s:7:"body_bg";s:7:"#0a0a0a";s:13:"body_bg_image";s:0:"";s:12:"body_bg_type";s:12:"bg-full-size";s:13:"content_color";s:5:"light";s:10:"content_bg";s:4:"#FFF";s:13:"header_height";s:3:"200";s:10:"logo_width";s:3:"229";s:13:"logo_position";s:4:"left";s:10:"search_pos";s:4:"hide";s:12:"nav_position";s:13:"bottom_center";s:8:"nav_size";s:3:"80%";s:18:"myaccount_dropdown";s:1:"0";s:9:"show_cart";s:1:"0";s:13:"header_sticky";s:1:"0";s:20:"header_height_sticky";s:2:"70";s:12:"header_color";s:5:"light";s:9:"header_bg";s:4:"#fff";s:13:"header_bg_img";s:74:"http://woodlawnmuseum.com/support/wp-content/uploads/2015/03/wl_banner.jpg";s:17:"header_bg_img_pos";s:8:"repeat-x";s:11:"topbar_show";i:1;s:9:"topbar_bg";s:0:"";s:11:"topbar_left";s:0:"";s:15:"nav_position_bg";s:4:"#eee";s:18:"nav_position_color";s:5:"light";s:17:"nav_position_text";s:0:"";s:21:"nav_position_text_top";s:0:"";s:16:"footer_left_text";s:51:"Copyright 2015 © <strong>Woodlawn Museum</strong>.";s:17:"footer_right_text";s:0:"";s:14:"footer_1_color";s:5:"light";s:17:"footer_1_bg_color";s:4:"#fff";s:14:"footer_2_color";s:4:"dark";s:17:"footer_2_bg_color";s:4:"#777";s:19:"footer_bottom_style";s:4:"dark";s:19:"footer_bottom_color";s:4:"#333";s:13:"disable_fonts";i:0;s:13:"type_headings";s:5:"arial";s:10:"type_texts";s:5:"arial";s:8:"type_nav";s:6:"Taprom";s:8:"type_alt";s:14:"Dancing Script";s:11:"type_subset";a:7:{s:5:"latin";s:1:"1";s:12:"cyrillic-ext";s:1:"0";s:9:"greek-ext";s:1:"0";s:5:"greek";s:1:"0";s:10:"vietnamese";s:1:"0";s:9:"latin-ext";s:1:"0";s:8:"cyrillic";s:1:"0";}s:13:"color_primary";s:7:"#884935";s:15:"color_secondary";s:7:"#000000";s:13:"color_success";s:7:"#562b1d";s:11:"color_links";s:7:"#562b1d";s:14:"color_checkout";s:7:"#884935";s:10:"color_sale";s:0:"";s:12:"color_review";s:0:"";s:13:"button_radius";s:3:"0px";s:15:"dropdown_border";s:0:"";s:11:"dropdown_bg";s:0:"";s:13:"dropdown_text";s:5:"light";s:18:"cart_dropdown_show";i:1;s:16:"shop_aside_title";s:17:"complete the look";s:15:"product_sidebar";s:10:"no_sidebar";s:15:"product_display";s:8:"sections";s:9:"tab_title";s:0:"";s:11:"tab_content";s:0:"";s:25:"disable_product_scrollbar";i:0;s:16:"category_sidebar";s:4:"none";s:10:"grid_style";s:5:"grid1";s:15:"breadcrumb_size";s:17:"breadcrumb-normal";s:15:"breadcrumb_home";s:1:"0";s:18:"category_row_count";s:1:"4";s:16:"products_pr_page";s:2:"12";s:13:"search_result";i:0;s:16:"add_to_cart_icon";s:4:"show";s:13:"product_hover";s:4:"none";s:12:"bubble_style";s:6:"style1";s:22:"sale_bubble_percentage";i:0;s:18:"disable_quick_view";s:1:"1";s:11:"blog_layout";s:13:"right-sidebar";s:10:"blog_style";s:11:"blog-normal";s:15:"blog_author_box";i:1;s:11:"blog_header";s:1:" ";s:10:"blog_share";i:0;s:13:"blog_parallax";i:0;s:22:"featured_items_pr_page";s:1:"6";s:22:"featured_items_related";s:6:"style1";s:29:"featured_items_related_height";s:5:"250px";s:15:"html_custom_css";s:6:"div {}";s:22:"html_custom_css_mobile";s:0:"";s:19:"html_scripts_footer";s:1:" ";s:10:"html_intro";s:1:" ";s:14:"html_shop_page";s:1:" ";s:23:"html_before_add_to_cart";s:1:" ";s:22:"html_after_add_to_cart";s:1:" ";s:17:"html_after_header";s:1:" ";s:18:"html_before_footer";s:1:" ";s:17:"html_after_footer";s:1:" ";s:16:"html_cart_footer";s:1:" ";s:12:"catalog_mode";i:0;s:19:"catalog_mode_prices";i:0;s:19:"catalog_mode_header";s:0:"";s:20:"catalog_mode_product";s:0:"";s:21:"catalog_mode_lightbox";s:0:"";s:14:"facebook_login";i:0;s:17:"facebook_login_bg";s:0:"";s:18:"nav_menu_locations";a:3:{s:11:"top_bar_nav";i:15;s:6:"footer";i:14;s:7:"primary";i:25;}s:19:"facebook_login_text";s:0:"";s:23:"facebook_login_checkout";s:1:"0";s:13:"facebook_meta";s:1:"1";s:15:"coupon_checkout";s:1:"0";s:10:"backup_log";s:31:"Thu, 05 Mar 2015 18:58:24 +0000";}s:9:"smof_init";s:31:"Tue, 10 Feb 2015 19:37:51 +0000";s:9:"site_logo";s:55:"[site_url]/wp-content/uploads/2015/02/wl_logo_boxed.png";s:12:"site_favicon";s:49:"[site_url]/wp-content/uploads/2015/02/favicon.png";s:18:"site_favicon_large";s:0:"";s:16:"custom_cart_icon";s:0:"";s:11:"body_layout";s:13:"framed-layout";s:7:"body_bg";s:7:"#0a0a0a";s:13:"body_bg_image";s:0:"";s:12:"body_bg_type";s:12:"bg-full-size";s:13:"content_color";s:5:"light";s:10:"content_bg";s:4:"#FFF";s:13:"header_height";s:3:"200";s:10:"logo_width";s:3:"229";s:13:"logo_position";s:4:"left";s:10:"search_pos";s:4:"hide";s:12:"nav_position";s:13:"bottom_center";s:8:"nav_size";s:3:"80%";s:18:"myaccount_dropdown";s:1:"0";s:9:"show_cart";s:1:"0";s:13:"header_sticky";s:1:"0";s:20:"header_height_sticky";s:2:"70";s:12:"header_color";s:5:"light";s:9:"header_bg";s:4:"#fff";s:13:"header_bg_img";s:51:"[site_url]/wp-content/uploads/2015/03/wl_banner.jpg";s:17:"header_bg_img_pos";s:8:"repeat-x";s:11:"topbar_show";i:1;s:9:"topbar_bg";s:0:"";s:11:"topbar_left";s:0:"";s:15:"nav_position_bg";s:4:"#eee";s:18:"nav_position_color";s:5:"light";s:17:"nav_position_text";s:0:"";s:21:"nav_position_text_top";s:0:"";s:16:"footer_left_text";s:51:"Copyright 2015 © <strong>Woodlawn Museum</strong>.";s:17:"footer_right_text";s:0:"";s:14:"footer_1_color";s:5:"light";s:17:"footer_1_bg_color";s:4:"#fff";s:14:"footer_2_color";s:4:"dark";s:17:"footer_2_bg_color";s:4:"#777";s:19:"footer_bottom_style";s:4:"dark";s:19:"footer_bottom_color";s:4:"#333";s:13:"disable_fonts";i:0;s:13:"type_headings";s:5:"arial";s:10:"type_texts";s:5:"arial";s:8:"type_nav";s:6:"Taprom";s:8:"type_alt";s:14:"Dancing Script";s:11:"type_subset";a:7:{s:5:"latin";s:1:"1";s:12:"cyrillic-ext";s:1:"0";s:9:"greek-ext";s:1:"0";s:5:"greek";s:1:"0";s:10:"vietnamese";s:1:"0";s:9:"latin-ext";s:1:"0";s:8:"cyrillic";s:1:"0";}s:13:"color_primary";s:7:"#884935";s:15:"color_secondary";s:7:"#000000";s:13:"color_success";s:7:"#562b1d";s:11:"color_links";s:7:"#562b1d";s:14:"color_checkout";s:7:"#884935";s:10:"color_sale";s:0:"";s:12:"color_review";s:0:"";s:13:"button_radius";s:3:"0px";s:15:"dropdown_border";s:0:"";s:11:"dropdown_bg";s:0:"";s:13:"dropdown_text";s:5:"light";s:18:"cart_dropdown_show";i:1;s:16:"shop_aside_title";s:17:"complete the look";s:15:"product_sidebar";s:10:"no_sidebar";s:15:"product_display";s:8:"sections";s:9:"tab_title";s:0:"";s:11:"tab_content";s:0:"";s:25:"disable_product_scrollbar";i:0;s:16:"category_sidebar";s:4:"none";s:10:"grid_style";s:5:"grid1";s:15:"breadcrumb_size";s:17:"breadcrumb-normal";s:15:"breadcrumb_home";s:1:"0";s:18:"category_row_count";s:1:"4";s:16:"products_pr_page";s:2:"12";s:13:"search_result";i:0;s:16:"add_to_cart_icon";s:4:"show";s:13:"product_hover";s:4:"none";s:12:"bubble_style";s:6:"style1";s:22:"sale_bubble_percentage";i:0;s:18:"disable_quick_view";s:1:"1";s:11:"blog_layout";s:13:"right-sidebar";s:10:"blog_style";s:11:"blog-normal";s:15:"blog_author_box";i:1;s:11:"blog_header";s:1:" ";s:10:"blog_share";i:0;s:13:"blog_parallax";i:0;s:22:"featured_items_pr_page";s:1:"6";s:22:"featured_items_related";s:6:"style1";s:29:"featured_items_related_height";s:5:"250px";s:15:"html_custom_css";s:6:"div {}";s:22:"html_custom_css_mobile";s:0:"";s:19:"html_scripts_footer";s:1:" ";s:10:"html_intro";s:1:" ";s:14:"html_shop_page";s:1:" ";s:23:"html_before_add_to_cart";s:1:" ";s:22:"html_after_add_to_cart";s:1:" ";s:17:"html_after_header";s:1:" ";s:18:"html_before_footer";s:1:" ";s:17:"html_after_footer";s:1:" ";s:16:"html_cart_footer";s:1:" ";s:12:"catalog_mode";i:0;s:19:"catalog_mode_prices";i:0;s:19:"catalog_mode_header";s:0:"";s:20:"catalog_mode_product";s:0:"";s:21:"catalog_mode_lightbox";s:0:"";s:14:"facebook_login";i:0;s:17:"facebook_login_bg";s:0:"";s:18:"nav_menu_locations";a:3:{s:11:"top_bar_nav";i:15;s:6:"footer";i:14;s:7:"primary";i:25;}s:19:"facebook_login_text";s:0:"";s:23:"facebook_login_checkout";s:1:"0";s:13:"facebook_meta";s:1:"1";s:15:"coupon_checkout";s:1:"0";}', 'yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
