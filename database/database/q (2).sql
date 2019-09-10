-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 11:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `q`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aaaaaaa', 'admin@test.com', '$2y$10$Xyty2THHgf4/iDdo0TxAEeXYQW5k542zJpdkceALmCFGfO6nW6NOS', '1FPBR7VnFMKDeQLGApRybiFiR7FNBiWotcGI8b8SWNQ2xd8Sc9MThYl0xbJa', NULL, '2019-08-31 08:47:12'),
(2, 'Hilary Flores', 'kikemyru@mailinator.net', '$2y$10$B6.kNbS.BGNMd8jFZY5wEezHF3L3rn6GPEClMhUfCpjc6liGe/SWC', NULL, '2019-08-31 13:19:29', '2019-08-31 13:19:29');

-- --------------------------------------------------------

--
-- Table structure for table `beststudent`
--

CREATE TABLE `beststudent` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_Teacher_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_Teacher_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lecture_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lecture_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_Teacher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beststudent`
--

INSERT INTO `beststudent` (`id`, `name_ar`, `name_en`, `name_Teacher_ar`, `name_Teacher_en`, `text_ar`, `text_en`, `date_ar`, `date_en`, `Lecture_ar`, `Lecture_en`, `job_ar`, `job_en`, `img`, `img_Teacher`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur', 'Lorem ipsum dolor sit amet, consectetur', 'Moh amed', 'Ahamed', 'Lorem ipsum dolor sit amet,  r adipiscing elit.  F  semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptentadipiscing elit.  F  semper', 'Lorem ipsum dolor sit amet,  r adipiscing elit.  F  semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptentadipiscing elit.  F  semper', '10 October,2017', '10 October,2017', '100comments', '100comments', 'Teeacher', 'weab devolper', 'beststudent/Ql5dylMJy0xYOvTjZTE42N7PN0ZCqBiN0oElEFlV.jpeg', 'beststudent/etzHym0fm7fYaktk8SWPTqr3TLFlAppwgIaVmDoZ.jpeg', '2019-09-09 15:59:54', '2019-09-09 17:51:11'),
(2, 'Lorem ipsum dolor sit amet, consectetur', 'Lorem ipsum dolor sit amet, consectetur', 'Moh amed', 'Moh amed', 'Lorem ipsum dolor sit amet,  r adipiscing elit.  F  semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptentadipiscing elit.  F  semper', 'Lorem ipsum dolor sit amet,  r adipiscing elit.  F  semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptentadipiscing elit.  F  semper', '10 October,2017', '10 October,2017', '100comments', '100comments', 'admin.', 'Reiciendis eu iste l', 'beststudent/JzQOP2WwBq2s0ET0BoyEKVFQn0eK06cKSqmUv4vy.jpeg', 'img_Teacher/LxHzv98IUixLzRkxS6Os2wrR8QBntbTrP2Dsw9JT.jpeg', '2019-09-09 16:16:34', '2019-09-09 17:50:58'),
(3, 'Lorem ipsum dolor sit amet, consectetur', 'Lorem ipsum dolor sit amet, consectetur', 'Moh amed', 'Idola Mosley', 'Lorem ipsum dolor sit amet,  r adipiscing elit.  F  semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptentadipiscing elit.  F  semper', 'Lorem ipsum dolor sit amet,  r adipiscing elit.  F  semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptentadipiscing elit.  F  semper', '10 October,2017', '10 October,2017', 'Nihil sunt aut sunt', 'Ullam est odit animi', 'weab devolper', 'Exercitation nulla p', 'beststudent/UjAYrLxIwQ6F9IklxurQ6LDALccwcTRWVrTG1RXJ.jpeg', 'img_Teacher/HZXy8xiecXPSKMy2GkTLdSGMjwNsL7hI16ALV5Iq.jpeg', '2019-09-09 17:52:30', '2019-09-09 17:52:30'),
(4, 'Lorem ipsum dolor sit amet, consectetur', 'Lorem ipsum dolor sit amet, consectetur', 'Allegra Blair', 'Moh amed', 'Lorem ipsum dolor sit amet,  r adipiscing elit.  F  semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptentadipiscing elit.  F  semper', 'Lorem ipsum dolor sit amet,  r adipiscing elit.  F  semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptentadipiscing elit.  F  semper', '10 October,2017', '10 October,2017', '100comments', 'Ullam est odit animi', 'Ea consequatur faci', 'Est nesciunt inven', 'beststudent/Np6LfUmn3vWzsb2HNNzSl2UEcjkThlf8er0olklC.jpeg', 'img_Teacher/oHoLtqEOKeNYVHez9xnaFqFB1dFBulemisO65pRb.jpeg', '2019-09-09 17:53:44', '2019-09-09 17:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `city_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `head_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_diffe_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_diffe_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `head_ar`, `head_en`, `text_ar`, `text_en`, `color_diffe_ar`, `color_diffe_en`, `icon`, `created_at`, `updated_at`) VALUES
(5, 'عربى الاسم', '24/7 SUPPORT & SCHEDULE', 'Very Flexible 24/7 support & schedule at anytime of the day.', 'Very Flexible 24/7 support & at anytime of the day.', 'schedule', 'schedule', 'courses/PcM9ijv98fAODGHCjHiCowIWjFyPBDz8kekXVkO1.jpeg', '2019-08-31 13:17:45', '2019-09-03 10:52:36'),
(6, 'Quas aliquip explica', 'Sapiente aliquip nob', 'Enim mollitia fugit', 'Qui non dolores repr', 'Nostrud nisi molesti', 'Est laboriosam exc', 'courses/Uy1JAw3FlUagRTkOVZYbW1CNT6kYGcqNfKSBw2HA.jpeg', '2019-08-31 13:18:15', '2019-09-03 05:00:25'),
(9, 'Maiores consequatur', 'Qui et mollit aut do', 'Voluptate voluptatum', ',sssssssssssssss,mojoskjdnfljnsd/,jldsjnsdnjksdnkjb,Tempora in quia exce', 'Optio cumque quia i', 'Accusamus excepteur', 'courses/RVAmTnYErybQ3YDHjFFXbzmEr0SaJxEI6d9U7j4J.jpeg', '2019-08-31 13:20:44', '2019-09-03 05:09:22'),
(12, 'Impedit rem minus t', 'Ipsum in sit aliquid', 'Autem commodi ab cil', 'Repudiandae voluptat', 'Velit voluptatem rer', 'Facere esse esse of', 'courses/ccPIpdSQA5KbDgo3fkR0kYkt0lzNMN7kVPx9sIok.png', '2019-09-03 04:34:23', '2019-09-03 04:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `dep_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dep_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `callus_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `callus_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emaill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_info_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_info_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_appstore` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_googelplay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_appstore` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_googelplay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `payment_ar`, `payment_en`, `contact_ar`, `contact_en`, `callus_ar`, `callus_en`, `emaill`, `import_info_ar`, `import_info_en`, `aboutus_ar`, `aboutus_en`, `facebook`, `twitter`, `instagram`, `googel`, `youtube`, `link_appstore`, `link_googelplay`, `img_appstore`, `img_googelplay`, `created_at`, `updated_at`) VALUES
(1, 'Our payments are securely processed by paypal. We gurantee you that we don\'t store your credit card info in our database', 'Our payments are securely processed by paypal. We gurantee you that we don\'t store your credit card info in our database', 'Head Office Location: Toronto, Canada  Branch Office Location: Cairo, Egypt Head Office Location: Toronto, Canada  Branch Office Location: Cairo, Egypt', 'Branch Office Location: Cairo, EgyptHead Office Location: Toronto, Canada  Branch Office Location: Cairo, Egypt', 'Hic minima ex offici', 'Hic minima ex offici', 'support@tareequljannah.com', 'Success Stories,  Free Registration,  Like us in Facebook,  Tweet us  Watch us our Vimeo Videos,  Watch us our Vimeo Videos', 'Success Stories,  Free Registration,  Like us in Facebook,  Tweet us  Watch us our Vimeo Videos,  Watch us our Vimeo Videos', 'We are leading online Quran & Arabic teaching institute. We are expert in using state of the art technologies to teach online. We have teacher\'s who are certified by Al-Ahzar and also fluently speaks in english and well trained to teach online.', 'We are leading online Quran & Arabic teaching institute. We are expert in using state of the art technologies to teach online. We have teacher\'s who are certified by Al-Ahzar and also fluently speaks in english and well trained to teach online.', 'https://www.facebook.com', 'https://www.twitter..com', 'https://www.instagram.com', 'https://www.googel.com', 'https://www.youtube.com', 'https://iphone-app-store.ar.uptodown.com/android', 'https://play.google.com/store/', 'img_appstore/gvkYF5JO6J1qRIUNww7nEKkAqv3OMVURHfxQxCDE.png', 'img_googelplay/USoP5RlN6c4LVQV1lbSdW14a8BaQ4Ea66YEhSJId.png', '2019-09-09 15:34:08', '2019-09-09 15:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `halfhour`
--

CREATE TABLE `halfhour` (
  `id` int(10) UNSIGNED NOT NULL,
  `head_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateshow_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateshow_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descount3_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount3_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount6_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount6_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount12_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount12_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `halfhour`
--

INSERT INTO `halfhour` (`id`, `head_ar`, `head_en`, `dateshow_ar`, `dateshow_en`, `number`, `content_ar`, `content_en`, `descount3_ar`, `descount3_en`, `percentage3`, `descount6_ar`, `descount6_en`, `percentage6`, `descount12_ar`, `descount12_en`, `percentage12`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'super duper', 'super duper', '14-Sep-2018', '01-Jul-1975', '827', 'GBP 107,  CAD 186,  AUD 196', 'GBP 107,  CAD 186,  AUD 196', 'Obcaecati architecto', '3 Adipisicing cillum a', '3%', 'Nihil labore velit', 'Dolore voluptas qui', '6%', 'Omnis necessitatibus', NULL, NULL, 'halfhour/z4UiNvJm2Sdf1mNuDiGwrDjUptRCPN95UDVg8iXb.png', '2019-09-10 01:50:11', '2019-09-10 01:51:12'),
(2, 'Amet eos enim aliq', 'Alias sit adipisci', '26-Feb-2008', '22-Feb-2002', '132', 'Dicta sed rerum iust', 'Velit iure dolorem', 'Eligendi fugit ipsu', 'Eaque iure ex ipsum', 'Asperiores placeat', 'Laborum Sit eius co', 'Quam beatae molestia', 'Saepe amet adipisci', 'Animi a dignissimos', 'Doloremque voluptate', 'Voluptas est vel ass', 'halfhour/iVTkJLxKrsggmGXRWAPUJdLlfdhgRsk0Dmucge63.png', '2019-09-10 01:52:32', '2019-09-10 01:52:32'),
(3, 'Vel eu deserunt duci', 'A obcaecati dolor se', '16-Jun-2007', '20-May-2008', '4', 'Earum commodo magna', 'Sunt in est consect', 'Odio eligendi magna', 'Possimus quisquam o', 'Illum aut voluptate', 'Et officia consectet', 'Tempor vitae et at a', 'Amet eaque quia min', 'Hic voluptate explic', 'Labore dolor quo qua', 'Et officia dolor ad', 'halfhour/6dBwuLcfNjF4IrOiE6yWiY8GfDfdhoVn8J1CNzB0.png', '2019-09-10 01:52:57', '2019-09-10 01:52:57'),
(4, 'Explicabo Voluptate', 'Quos dolor est dele', '07-Nov-1983', '14-Apr-1975', '318', 'Ullamco mollit iure', 'Qui exercitation ex', 'In sequi eu accusant', 'Officia distinctio', 'Laboris nisi tempor', 'In deserunt beatae d', 'At aut qui eiusmod f', 'Sint dicta sequi nul', 'Vero consequatur ei', 'Cum nihil voluptates', 'Et sed impedit nisi', 'halfhour/Izn8QZ2uetg4M09wHVrverYeZDTz53jNytLBtX2g.png', '2019-09-10 01:53:28', '2019-09-10 01:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `hour`
--

CREATE TABLE `hour` (
  `id` int(10) UNSIGNED NOT NULL,
  `head_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateshow_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateshow_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descount3_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount3_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount6_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount6_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount12_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount12_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hour`
--

INSERT INTO `hour` (`id`, `head_ar`, `head_en`, `dateshow_ar`, `dateshow_en`, `number`, `content_ar`, `content_en`, `descount3_ar`, `descount3_en`, `percentage3`, `descount6_ar`, `descount6_en`, `percentage6`, `descount12_ar`, `descount12_en`, `percentage12`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Cupidatat impedit a', 'Porro officiis magna', '13-Nov-2017', '07-Aug-1976', '113', 'Quos nemo dolor reic', 'Facilis est quia in', 'Eum elit quo aut no', 'Id ratione et cupidi', 'Ab sapiente Nam ab o', 'Et sit nulla quis e', 'Nisi aliqua Omnis s', 'Commodo consequuntur', 'Non sit est perspic', 'Velit tenetur sit a', 'Velit consequatur N', 'hour/AkfVoEZ5RQj5bomLWWO8RN82gTvqodGPhWERJOdI.jpeg', '2019-09-10 02:07:26', '2019-09-10 02:07:26'),
(2, 'Consequat Consequat', 'In rerum eu voluptat', '03-Jun-1999', '12-Feb-1979', '288', 'Sed reprehenderit co', 'Aut similique sunt i', 'Aut cupiditate dolor', 'Sed accusamus dolore', 'Qui optio et ea sed', 'Obcaecati aliquam la', 'Quis enim anim quia', 'Sint esse facere es', 'Consectetur dolorem', 'Atque ut quam reicie', 'Voluptatem Adipisci', 'hour/9so90BSGZHELpZmHH9OXdnIucHrMpocwJAouGkXa.png', '2019-09-10 02:08:01', '2019-09-10 02:08:01'),
(3, 'Consectetur veritat', 'Eaque consectetur s', '04-Nov-2008', '05-May-1970', '75', 'Aliquam ut rerum dol', 'Dolorem odit eius vo', 'Non aut nulla nostru', 'Est rerum ipsum null', 'Dolore provident so', 'Unde exercitationem', 'Fugiat perferendis n', 'Molestias nulla cum', 'Quas eiusmod nemo vo', 'Eos consequuntur des', 'Esse tempora volupta', 'hour/dmyVY8r1ESQCKRh4OsabsYs8QYfAORMAzaKAlaQ3.png', '2019-09-10 02:08:31', '2019-09-10 02:08:31'),
(4, 'Asperiores ea earum', 'Obcaecati qui obcaec', '18-Apr-2003', '03-Sep-2016', '175', 'Ab iusto qui est est', 'Officiis placeat of', 'Lorem mollitia duis', 'Velit voluptatem rep', 'Laudantium vel labo', 'Et voluptatem aliqua', 'Pariatur Aspernatur', 'Quo consequatur fugi', 'Illo error exercitat', 'Inventore ut repudia', 'Sint aut sed rem ass', 'hour/ZB6q3TaQuQqpOFq2h9jYPUZsqow95kWSvlmkeLK9.jpeg', '2019-09-10 02:08:56', '2019-09-10 02:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `malls`
--

CREATE TABLE `malls` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_23_212935_create_admins_table', 1),
(4, '2018_03_30_002607_create_settings_table', 1),
(5, '2018_03_31_112715_create_files_table', 1),
(6, '2018_05_25_131215_create_countries_table', 1),
(7, '2018_05_25_131216_create_cities_table', 1),
(8, '2018_06_22_073004_state', 1),
(9, '2018_06_22_145313_create_departments_table', 1),
(10, '2018_06_28_152409_create_trade_marks_table', 1),
(11, '2018_06_29_155040_create_manufacturers_table', 1),
(12, '2018_08_18_195939_create_shippings_table', 1),
(13, '2018_08_23_100756_create_malls_table', 1),
(14, '2018_09_05_132600_create_colors_table', 1),
(15, '2019_01_27_104440_create_sizes_table', 1),
(16, '2019_01_27_104441_create_weights_table', 1),
(17, '2019_01_27_184513_create_products_table', 1),
(18, '2019_08_26_222252_create_whyus_table', 1),
(19, '2019_08_26_22225_create_Courses_table', 1),
(20, '2019_08_26_22225_create_Videos_table', 2),
(25, '2019_08_26_2222_create_teachers_table', 3),
(27, '2019_08_26_222_create_stat_table', 4),
(29, '2019_08_26_223_create_testimonial_table', 5),
(30, '2019_08_26_224_create_beststudent_table', 6),
(31, '2019_08_26_22_create_halfhour_table', 6),
(32, '2019_08_26_29_create_hour_table', 6),
(33, '2019_08_2_22222222222222222_create_footer_table', 6),
(34, '2019_08_2_2222_create_slider_table', 6),
(35, '2019_08_2_222_create_news_table', 6),
(36, '2019_08_2_223_create_contact_table', 6),
(37, '2019_08_2_224_create_student_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` int(10) UNSIGNED DEFAULT NULL,
  `trade_id` int(10) UNSIGNED DEFAULT NULL,
  `manu_id` int(10) UNSIGNED DEFAULT NULL,
  `color_id` int(10) UNSIGNED DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size_id` int(10) UNSIGNED DEFAULT NULL,
  `currency_id` int(10) UNSIGNED DEFAULT NULL,
  `price` decimal(5,2) NOT NULL DEFAULT 0.00,
  `stock` int(11) NOT NULL DEFAULT 0,
  `start_at` date DEFAULT NULL,
  `end_at` date DEFAULT NULL,
  `start_offer_at` date DEFAULT NULL,
  `end_offer_at` date DEFAULT NULL,
  `price_offer` decimal(5,2) NOT NULL DEFAULT 0.00,
  `other_data` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_id` int(10) UNSIGNED DEFAULT NULL,
  `status` enum('pending','refused','active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `reason` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `sitename_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sitename_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ar',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('open','close') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `message_maintenance` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sitename_ar`, `sitename_en`, `logo`, `icon`, `email`, `main_lang`, `description`, `keywords`, `status`, `message_maintenance`, `created_at`, `updated_at`) VALUES
(1, 'fffffffffff', 'ffffffffff', NULL, NULL, NULL, 'ar', NULL, NULL, 'open', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(10) UNSIGNED DEFAULT NULL,
  `is_public` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stat`
--

CREATE TABLE `stat` (
  `id` int(10) UNSIGNED NOT NULL,
  `font_awesome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stat`
--

INSERT INTO `stat` (`id`, `font_awesome`, `number`, `head_ar`, `head_en`, `img`, `created_at`, `updated_at`) VALUES
(3, 'icon-toolbox', '639', 'Repellendus Earum n', 'Vel sed cum amet es', 'stat/E0cveFzs375ZDynQhYHm2EW5pPC6eYwBUcmesCuE.jpeg', '2019-09-03 12:34:54', '2019-09-09 20:02:07'),
(4, 'icon-video', '211', 'Ipsum dolore archite', 'Velit officia ut fug', 'stat/6UAUy9bHo751yPMoTbDpSiMNcqe4rbnZSsDplpi1.jpeg', '2019-09-03 12:36:19', '2019-09-09 20:02:21'),
(5, 'icon-happy', '431', 'Perferendis omnis fu', 'Aspernatur anim dist', 'stat/ZISPbQycK0FGyjMi29kmtY7DBqPACSjW1SXobcI8.jpeg', '2019-09-03 12:37:23', '2019-09-09 20:10:41'),
(6, 'icon-toolbox', '142', 'Culpa ipsum non ut', 'A ex alias non fugia', NULL, '2019-09-09 20:12:06', '2019-09-10 01:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `link`, `name_ar`, `name_en`, `head_ar`, `head_en`, `img`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/watch?v=HwuIqnZwLaM', 'Phyllis Combs', 'Gage Navarro', 'Non non et quaerat a', 'Sit et aut dolore a', 'teachers/wfZhlbOmNoxdzKAwMzJ4VsqtMVjYxJty8kXwRDVW.jpeg', '2019-09-03 11:15:11', '2019-09-10 02:28:36'),
(2, 'https://www.youtube.com/watch?v=jchDUG9d_Zo', 'Sade Gamble', 'Garth Dotson', 'Voluptate ex consequ', 'Tempor error quisqua', 'teachers/6jR2berOBDBUxDOtHtIZ5XkDfSHtsNiiCi8QngOB.jpeg', '2019-09-03 11:16:02', '2019-09-10 02:31:11'),
(3, 'https://www.youtube.com/watch?v=jOxehEa--C8', 'Jamal Harmon', 'Kylie Fletcher', 'Aliqua Ipsa irure', 'Aute id doloremque i', 'teachers/NWyXG3zsW2y8Nzo0yNVlWQTVmUKVRfgxRPj1NnG7.jpeg', '2019-09-03 11:19:06', '2019-09-10 02:32:01'),
(4, 'https://www.youtube.com/watch?v=6Hzk5uPDaJk', 'Irene James', 'Alyssa Burton', 'Quos maiores atque a', 'Voluptatum voluptate', 'teachers/BZMs2GcLPTtoyUV3z1tMZlraacMYDJA2khlWoXXs.jpeg', '2019-09-03 11:19:24', '2019-09-10 02:33:05'),
(5, 'https://www.youtube.com/watch?v=UyPKw_mFxvI', 'Michelle Rodriguez', 'Herman Cooley', 'Enim laborum In aut', 'Recusandae In dolor', 'teachers/61ndvIIyrPJJ8ShfMjzzwQlLUdSqW2CMmXOMTGrw.png', '2019-09-03 11:19:58', '2019-09-10 02:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name_ar`, `name_en`, `job_ar`, `job_en`, `text_ar`, `text_en`, `country_ar`, `country_en`, `img`, `created_at`, `updated_at`) VALUES
(2, 'Irma Howell', 'Aidan Skinner', 'Deserunt ad rerum mo', 'Est nesciunt inven', 'In nulla atque alias', 'Voluptas excepteur q', 'Velit anim consequa', 'Ut quo in dignissimo', 'testimonial/919MoTNsSN31WfacL27FQFhPoVc06yTq9PzojSQ2.jpeg', '2019-09-03 13:59:01', '2019-09-09 17:30:32'),
(3, 'Tad Gibbs', 'Constance Lynch', 'Quibusdam velit ipsu', 'Eu autem asperiores', 'Dolorum quasi volupt', 'Dignissimos exercita', 'Elit dolore molesti', 'Voluptas qui sed quo', 'testimonial/TDx7YL0HxWi6nBxGP2IksjSh40f5WaiGPVavEu8Q.jpeg', '2019-09-09 16:20:27', '2019-09-09 16:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `trade_marks`
--

CREATE TABLE `trade_marks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('user','vendor','company') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `link`, `img`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/watch?v=4sPoPKCRX4U&t=13s', 'videos/MCmcntUYjgSTI9DdhXHu22A6xz9a7c0vFeCnRgTn.png', '2019-09-03 05:46:35', '2019-09-10 02:45:32'),
(2, 'https://www.youtube.com/watch?v=HwuIqnZwLaM', 'videos/1KFPrOOpxa9eA8Eiaym3VZHI6GBtmo1iiJ0XFkfH.png', '2019-09-03 06:05:22', '2019-09-10 02:46:13'),
(3, 'https://www.youtube.com/watch?v=HwuIqnZwLaM', 'videos/AYDzBnaUFbs9BpA87VuM2LYPGIn5GIyRISlv3FUh.png', '2019-09-03 06:10:57', '2019-09-10 02:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `weights`
--

CREATE TABLE `weights` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `whyus`
--

CREATE TABLE `whyus` (
  `id` int(10) UNSIGNED NOT NULL,
  `head_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_diffe_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_diffe_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whyus`
--

INSERT INTO `whyus` (`id`, `head_ar`, `head_en`, `text_ar`, `text_en`, `color_diffe_ar`, `color_diffe_en`, `icon`, `created_at`, `updated_at`) VALUES
(4, '123456789Reprehenderit id ess    by AbdRahman', 'Dolor fugiat dicta e', 'Mollitia voluptate r', 'Id eaque natus lorem', 'Aut ipsum beatae lor', 'Sint in voluptates u', 'whyus/JVERjifyOTN3jdClANviQUZ7ybhaUsnFFWia7Wyo.png', '2019-09-02 17:13:16', '2019-09-03 04:45:19'),
(5, 'Ut voluptatum aut ma', 'Qui tempor sint nem', 'Voluptatem Neque la', 'Sed possimus iste m', 'Rerum mollitia repud', 'Nam deleniti commodi', 'whyus/xVn8JUuUQv8O1h2ACSsi8UJ6XIluX2codqC6dzip.png', '2019-09-03 04:45:47', '2019-09-03 04:45:47'),
(6, 'Sit do aut sit in', 'Facere accusantium r', 'Vitae consectetur la', 'Voluptate qui explic', 'Quisquam earum sunt', 'Commodo possimus nu', 'whyus/dMM7DXK7VE970NeMY0ewRaxaxDCjWjTvoJw70EOm.png', '2019-09-03 04:46:06', '2019-09-03 04:46:06'),
(7, 'Ad voluptas magni om', 'Voluptas sit duis ex', 'Quidem voluptatem la', 'Molestiae incididunt', 'Veniam suscipit par', 'Ipsum enim quisquam', 'whyus/Usix160emhCjayGo2uY26zSHRUhmXCV3Jovx7E1Q.png', '2019-09-03 04:46:26', '2019-09-03 04:46:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `beststudent`
--
ALTER TABLE `beststudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_country_id_foreign` (`country_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_parent_foreign` (`parent`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halfhour`
--
ALTER TABLE `halfhour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hour`
--
ALTER TABLE `hour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `malls`
--
ALTER TABLE `malls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `malls_country_id_foreign` (`country_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_department_id_foreign` (`department_id`),
  ADD KEY `products_trade_id_foreign` (`trade_id`),
  ADD KEY `products_manu_id_foreign` (`manu_id`),
  ADD KEY `products_color_id_foreign` (`color_id`),
  ADD KEY `products_size_id_foreign` (`size_id`),
  ADD KEY `products_currency_id_foreign` (`currency_id`),
  ADD KEY `products_weight_id_foreign` (`weight_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippings_user_id_foreign` (`user_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sizes_department_id_foreign` (`department_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stat`
--
ALTER TABLE `stat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_city_id_foreign` (`city_id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trade_marks`
--
ALTER TABLE `trade_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weights`
--
ALTER TABLE `weights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whyus`
--
ALTER TABLE `whyus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `beststudent`
--
ALTER TABLE `beststudent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `halfhour`
--
ALTER TABLE `halfhour`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hour`
--
ALTER TABLE `hour`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `malls`
--
ALTER TABLE `malls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stat`
--
ALTER TABLE `stat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trade_marks`
--
ALTER TABLE `trade_marks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `weights`
--
ALTER TABLE `weights`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `whyus`
--
ALTER TABLE `whyus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_parent_foreign` FOREIGN KEY (`parent`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `malls`
--
ALTER TABLE `malls`
  ADD CONSTRAINT `malls_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `products_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_manu_id_foreign` FOREIGN KEY (`manu_id`) REFERENCES `manufacturers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_trade_id_foreign` FOREIGN KEY (`trade_id`) REFERENCES `trade_marks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_weight_id_foreign` FOREIGN KEY (`weight_id`) REFERENCES `weights` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shippings`
--
ALTER TABLE `shippings`
  ADD CONSTRAINT `shippings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sizes`
--
ALTER TABLE `sizes`
  ADD CONSTRAINT `sizes_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
