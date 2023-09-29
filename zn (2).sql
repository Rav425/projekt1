-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2023 at 05:48 PM
-- Server version: 8.0.33-0ubuntu0.20.04.4
-- PHP Version: 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zn`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int NOT NULL,
  `c_title` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_image` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `c_statue` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_title`, `c_image`, `c_statue`) VALUES
(1, 'Home', '509066_img_990489.png', 1),
(2, 'New', '488131_img_381618.png', 1),
(4, 'Rooms', '631169_img_256263.jpg', 1),
(5, 'Tiny homes', '544102_img_884173.jpg', 1),
(6, 'Mansions', '631905_img_785288.jpg', 1),
(7, 'Cabins', '89932_img_758184.jpg', 1),
(8, 'Home', '509066_img_990489.png', 1),
(9, 'New', '488131_img_381618.png', 1),
(10, 'Rooms', '631169_img_256263.jpg', 1),
(11, 'Tiny homes', '544102_img_884173.jpg', 1),
(12, 'Mansions', '631905_img_785288.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `l_id` int NOT NULL,
  `l_key` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `en_value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `de_value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`l_id`, `l_key`, `en_value`, `de_value`) VALUES
(1, 'LOGIN_TEXT', 'Log In', 'Anmeldung'),
(3, 'FILL_LOGIN_DETAIL', 'Fill the form to log in', 'Füllen Sie das Formular aus, um sich anzumelden\r\n'),
(4, 'INPUT_EMAIL', 'Your Email:', 'Deine E-Mail:\r\n'),
(5, 'YOUR_EMAIL', 'Enter Your Email', 'Geben sie ihre E-Mail Adresse ein\r\n'),
(6, 'INPUT_PASSWORD', 'Password:', 'Passwort:\r\n'),
(7, 'YOUR_PASSWORD', 'Enter Your Password', 'Geben Sie Ihr Passwort ein\r\n'),
(8, 'REGISTER_TEXT', 'Register', 'Registrieren'),
(9, 'FORGETPASSWORD_TEXT', 'Forget Password?', 'Passwort vergessen?\r\n'),
(11, 'BACK_TEXT', 'Back', 'Zurück'),
(12, 'REGISTERNOW_TEXT', 'Join us Now..', 'Machen Sie jetzt mit..\r\n'),
(13, 'CREATEACC_TEXT', 'Create an account', 'Ein Konto erstellen\r\n'),
(14, 'INPUT_REPASSWORD', 'Confirm Password', 'Bestätige das Passwort\r\n'),
(15, 'YOUR_PASSWORD_RETYPE', 'Type Your Password again', 'Geben Sie Ihr Passwort erneut ein\r\n'),
(16, 'AGREETO_TEXT', 'I Agree ', 'Ich stimme zu\r\n'),
(17, 'TERMS_TEXT', 'Terms and Conditions', 'Geschäftsbedingungen\r\n'),
(18, 'CLOSE_TEXT', 'Close', 'Schließen'),
(19, 'EMAIL_CHKERR', 'Email Invalid!!', 'E-Mail ungültig!!\r\n'),
(20, 'PASSWORD_CHKERR', 'Password Required!!', 'Passwort erforderlich!!\r\n'),
(21, 'PASSWORD_LENGTH_CHKERR', 'Password should be more than 6', 'Das Passwort sollte größer als 6 sein\r\n'),
(22, 'ERPASSWORD_CHKERR', 'Please Type your password again!!', 'Bitte geben Sie Ihr Passwort erneut ein!!\r\n'),
(23, 'REPASSWORD_DIF_CHKERR', 'Passwords must be the same!!', 'Passwörter müssen gleich sein!!\r\n'),
(24, 'TERMS_CHKERR', 'Please Accept Terms & Conditions!!', 'Bitte akzeptieren Sie die Allgemeinen Geschäftsbedingungen!!\r\n'),
(25, 'CONFIRMREG_TEXT', 'Confirm Registration?', 'Registrierung bestätigen?\r\n'),
(26, 'CONFIRM_TEXT', 'Confirm', 'Bestätigen\r\n'),
(27, 'CANCEL_TEXT', 'Cancel', 'Stornieren'),
(28, 'WELCOME_TEXT', 'Welcome ..', 'Willkommen ..\r\n'),
(31, 'MOBILE_TEXT', 'Your Mobile Number', 'Deine Telefonnummer\r\n'),
(32, 'USERNAME_TEXT', 'Username', 'Nutzername'),
(35, 'CHANGE_LANGUAGE', 'Change Language', 'Sprache ändern\r\n'),
(36, 'SELECT_LANGUAGE', 'Select Language', 'Sprache auswählen\r\n'),
(37, 'GERMAN_TEXT', 'German', 'Deutsch'),
(38, 'ENGLISH_TEXT', 'English', 'Englisch'),
(43, 'EMAIL_REQUIRE', 'Email is Required!!', 'E-Mail ist erforderlich!!\r\n'),
(44, 'EMAIL_WRONG', 'Invalid Email !!', 'Ungültige E-Mail !!\r\n'),
(47, 'PASSWORD_REQUIRE', 'Password Required!!', 'Passwort erforderlich!!\r\n'),
(48, 'PASSWORD_WRONG', 'Invalid Password!!', 'Ungültiges Passwort!!\r\n'),
(49, 'REPASSWORD_WRONG', 'Password must be the same!!', 'Passwort muss gleich sein!!\r\n'),
(50, 'TERMS_REQUIRE', 'You must accept the terms and conditions!!', 'Du musst die Geschäftsbedingungen akzeptieren!!\r\n'),
(51, 'PLEASE_WAIT_TEXT', 'Please Wait..', 'Warten Sie mal..\r\n'),
(53, 'TRYAGAIN_TEXT', 'Try Again', 'Versuchen Sie es erneut\r\n'),
(54, 'SUCCESS_ADD_TEXT', 'Added Successfully..', 'Erfolgreich hinzugefügt..\r\n'),
(55, 'CONTINUE_BTN', 'Continue', 'Weitermachen\r\n'),
(57, 'OR_TEXT', 'OR', 'ODER'),
(58, 'ALREADY_REGISTERED_TEXT', 'Already Registered?', 'Bereits registriert?\r\n'),
(59, 'LOGIN_HERE_TEXT', 'Login Here', 'Hier anmelden\r\n'),
(60, 'EXSIST_ERR_TEXT', 'The Information you have submitted Already Exsist!!', 'Die von Ihnen übermittelten Informationen sind bereits vorhanden!!\r\n'),
(61, 'LOGINNOW_TEXT', 'Login Now..', 'Jetzt einloggen..\r\n'),
(62, 'NOT_REGISTERED_TEXT', 'Not Registered Yet?', 'Noch nicht registriert?\r\n'),
(63, 'REGISTER_HERE_TEXT', 'Register Here', 'Hier registrieren\r\n'),
(64, 'NOTEXSIST_ERR_TEXT', 'Email Not Registered!!', 'Email Not Registered!!'),
(65, 'SUSPEND_ERR_TEXT', 'Account Suspended!!', 'Konto gesperrt!!\r\n'),
(66, 'PASSWORD_WRONG_TEXT', 'Incorrect Password!!', 'Falsches Passwort!!\r\n'),
(67, 'SUCCESS_LOGIN_TEXT', 'You have been logged successfully..', 'Sie wurden erfolgreich angemeldet.\r\n'),
(68, 'HOME_TITLE', 'Home Page', 'Startseite\r\n'),
(69, 'SIGN_OUT', 'Sign Out', 'Austragen'),
(70, 'MY_PROFILE', 'My Profile', 'Mein Profil\r\n'),
(71, 'MY_REQUESTS', 'My Requests', 'Meine Anfragen\r\n'),
(73, 'PROFILE_OVERVIEW', 'Overview', 'Überblick'),
(74, 'MANAGE_PROFILE', 'Manage', 'Verwalten'),
(75, 'EDIT_PROFILE', 'Edit Profile', 'Profil bearbeiten\r\n'),
(76, 'VIEW_PROFILE_INFO', 'My Profile Details', 'Meine Profildetails\r\n'),
(77, 'USER_AVATAR', 'User Avatar', 'Benutzer-Avatar\r\n'),
(78, 'INPUT_FULL_NAME', 'Your Full Name', 'Ihr vollständiger Name\r\n'),
(81, 'PROFILE_VIEW', 'Profile View', 'Profilansicht'),
(82, 'MOBILE_VIEW', 'Mobile Views', 'Mobile Ansichten\r\n'),
(84, 'CHANGE_AVATAR_TEXT', 'Change Profile Picture', 'Profilbild ändern\r\n'),
(85, 'SAVE_DATA', 'Save Data', 'Daten speichern\r\n'),
(87, 'DATA_WRONG', 'Please Complete the required data!!', 'Please Complete the required data!!'),
(88, 'UPDATE_SUCCESS', 'Successfully Updated..', 'Erfolgreich aktualisiert..\r\n'),
(89, 'DISABLE_PROFILE', 'Disable Profile', 'Profil deaktivieren\r\n'),
(90, 'DELETE_PROFILE', 'Delete Profile', 'Profil löschen\r\n'),
(91, 'ACC_TYPE', 'Account Type', 'Konto Typ\r\n'),
(106, 'PROJECT_TITLE', 'Title', 'Titel'),
(113, 'IMAGE_TITLE', 'Image Title', 'Bildtitel'),
(114, 'IMAGE_CONTENT', 'Image', 'Bild'),
(115, 'MANAGE_IMG', 'Manage', 'Verwalten'),
(118, 'LIKED_SUCCESS', 'Liked Successfully..', 'Mit Erfolg geliked..\r\n'),
(119, 'ALREADY_LIKED', 'Already Liked..', 'Schon geliked..\r\n'),
(120, 'VIEWS', 'Views', 'Ansichten'),
(121, 'PROJECTS', 'Projects', 'Projekte'),
(122, 'LIKES', 'Likes', 'Likes'),
(125, 'ABOUT_TXT', 'About', 'Um'),
(128, 'LOAD_MORE', 'Load More..', 'Mehr laden..\r\n'),
(130, 'ADD_LIKE', 'Add Like', 'Gefällt mir hinzufügen\r\n'),
(131, 'REPORT_TEXT', 'Report This', 'Melde dies\r\n'),
(132, 'SITE_DESC', 'Welcom to Hotel BnB', 'Willkommen im Hotel BnB\r\n'),
(133, 'INPUT_COUNTRY', 'Your Country', 'Dein Land\r\n'),
(134, 'CHOS_COUNTRY_TEXT', 'Select Your Country', 'Wähle dein Land\r\n'),
(135, 'INPUT_CITY', 'Your City', 'Deine Stadt\r\n'),
(136, 'COUNTRY_REQUIRE', 'Country is Required!', 'Land ist erforderlich!\r\n'),
(137, 'CITY_REQUIRE', 'Your City is Required!', 'Ihre Stadt ist erforderlich!\r\n'),
(138, 'INPUT_TYPE', 'Your Account Type', 'Ihr Kontotyp\r\n'),
(139, 'CHOS_TYPE_TEXT', 'Select Your Type', 'Wählen Sie Ihren Typ aus\r\n'),
(140, 'SELLER_TEXT', 'Seller', 'Verkäuferin'),
(141, 'CUSTOMER_TEXT', 'Customer', 'Kundin'),
(142, 'TYPE_REQUIRE', 'Your Type is Required!', 'Ihr Typ ist erforderlich!\r\n'),
(143, 'MY_UNIT_TEXT', 'My Units', 'Meine Wohneinheiten\r\n'),
(144, 'FAV_UNIT_TEXT', 'Favourit Units', 'Meine Lieblingswohneinheiten\r\n'),
(145, 'RECENT_PURCHASED', 'Recent Purchased', 'Kürzlich gekauft\r\n'),
(146, 'ADD_UNIT', 'Add Unit', 'Hinzufügen einer Wohneinheit\r\n'),
(147, 'PREF_LANG', 'Preferred Language', 'Bevorzugte Sprache\r\n'),
(148, 'USERNAME_REQUIRE', 'Your Name Required!', 'Dein Name (erforderlich!\r\n'),
(149, 'MANAGE_LOGIN', 'Manage Login Process', 'Anmeldevorgang verwalten\r\n'),
(150, 'CHANGE_EMAIL', 'Change Your Email', 'Ändern Sie Ihre E-Mail\r\n'),
(151, 'INPUT_NEW_EMAIL', 'Enter Your New Email', 'Geben Sie Ihre neue E-Mail-Adresse ein\r\n'),
(152, 'INPUT_CONFIRMATION_PASSWORD', 'Enter Your Password to Comfirm', 'Geben Sie zur Bestätigung Ihr Passwort ein\r\n'),
(153, 'INPUT_CURRENT_PASSWORD', 'Enter Your Current Password', 'Gib dein aktuelles Passwort ein\r\n'),
(154, 'INPUT_NEW_PASSWORD', 'Enter Your New Password', 'Gib dein neues Passwort ein\r\n'),
(155, 'UPDATE_PASSWORD', 'Update Your Password', 'Aktualisieren Sie Ihr Passwort\r\n'),
(156, 'CONFIRM_LOGOUT', 'Confirm Log Out', 'Bestätigen Sie die Abmeldung\r\n'),
(157, 'LOGOUT_TEXT', 'Log Out', 'Ausloggen'),
(158, 'SUCCESS_LOGOUT', 'Success Logout..', 'Erfolgreiche Abmeldung.\r\n'),
(159, 'UNIT_IMAGES', 'Unit Images', 'Unit Images'),
(160, 'ADD_UNIT_IMAGES', 'Add All Unit Images', 'Add All Unit Images'),
(161, 'ALLOWD_IMAGE_EXT', 'Allowed Ext. (jpg, jpeg, png)', 'Allowed Ext. (jpg, jpeg, png)'),
(162, 'ADD_NEW_UNIT', 'Add New Unit', 'Add New Unit'),
(163, 'UNIT_TITLE', 'Unit Title', 'Unit Title'),
(164, 'UNIT_COUNTRY', 'Unit Country', 'Unit Country'),
(165, 'UNIT_CITY', 'Unit City', 'Unit City'),
(166, 'UNIT_ADDRESS', 'Unit Address', 'Unit Address'),
(167, 'UNIT_HOST_COUNT', 'Unit Host Count', 'Unit Host Count'),
(168, 'UNIT_ROOM_COUNT', 'Unit Rooms Count', 'Unit Rooms Count'),
(169, 'UNIT_PATHS_COUNT', 'Unit Paths Count', 'Unit Paths Count'),
(170, 'UNIT_DESC', 'Unit Description', 'Unit Description'),
(171, 'UNIT_SPECS', 'Unit Specifications', 'Unit Specifications'),
(172, 'UNIT_WIFI', 'Unit Have WIFI', 'Unit Have WIFI'),
(173, 'UNIT_GARDEN', 'Unit Have Garden', 'Unit Have Garden'),
(174, 'UNIT_KITCHEN', 'Unit Have Kitchen', 'Unit Have Kitchen'),
(175, 'UNIT_TV', 'Unit Have TV', 'Unit Have TV'),
(176, 'UNIT_WORKSPACE', 'Unit Have Workspace', 'Unit Have Workspace'),
(177, 'UNIT_PARKING', 'Unit Have Parking', 'Unit Have Parking'),
(178, 'UNIT_POOL', 'Unit Have POOL', 'Unit Have POOL'),
(179, 'UNIT_WASHER', 'Unit Have Washer', 'Unit Have Washer'),
(180, 'UNIT_AIR_CONDITION', 'Unit Have Air Condition', 'Unit Have Air Condition'),
(181, 'UNIT_FANS', 'Unit Have FANS', 'Unit Have FANS'),
(182, 'UNIT_REFRIGATOR', 'Unit Have Refrigerator', 'Unit Have Refrigerator'),
(183, 'UNIT_ONE_NIGHT_COST', 'Unit One Night Cost', 'Unit One Night Cost'),
(184, 'UNIT_ADDED_COST', 'Unit Additional Cost', 'Unit Additional Cost'),
(185, 'REQUIRED_TEXT', 'Required!', 'Required!'),
(186, 'UPLOAD_SUCCESS_TEXT', 'Upload Success..', 'Upload Success..'),
(187, 'ADDED_ON', 'Added On', 'Added On'),
(188, 'EDIT_UNIT', 'Manage Unit', 'Manage Unit'),
(189, 'CONFIRM_DEL_IMG', 'Confirm Delete Image?', 'Confirm Delete Image?'),
(190, 'UPDATE_UNIT', 'Update Unit', 'Update Unit'),
(191, 'CONFIRM_UPDATE_UNIT', 'Confirm Update Unit?', 'Confirm Update Unit?'),
(192, 'CONFIRM_DEL_UNIT', 'Confirm Delete Unit?', 'Confirm Delete Unit?'),
(193, 'CONFIRM_ADD_UNIT', 'Confirm Add Unit?', 'Confirm Add Unit?'),
(194, 'SELECT_CAT', 'Select Category', 'Select Category'),
(195, 'RESERVE_TEXT', 'Reserve', 'Reserve'),
(196, 'ADD_FEE', 'Additional fees', 'Additional fees'),
(197, 'NIGHTS_TEXT', 'Nights', 'Nights'),
(198, 'TOTAL_BEFOR_TAX', 'Total before taxes', 'Total before taxes'),
(199, 'GARDEN_TEXT', 'Garden', 'Garden'),
(200, 'KITCHEN_TEXT', 'Kitchen', 'Kitchen'),
(201, 'TV_TEXT', 'TV', 'TV'),
(202, 'WORKSPACE_TEXT', 'Workspace', 'Workspace'),
(203, 'PARKING_TEXT', 'Parking', 'Parking'),
(204, 'POOL_TEXT', 'POOL', 'POOL'),
(205, 'WASHER_TEXT', 'Washer', 'Washer'),
(206, 'AIR_COND_TEXT', 'Air Conditioner', 'Air Conditioner'),
(207, 'FANS_TETX', 'Fans', 'Fans'),
(208, 'REFREGATOR_TEXT', 'Refrigerator', 'Refrigerator'),
(209, 'THINGS_TO_KNOW', 'Things to know', 'Things to know'),
(210, 'HOUSE_RULES', 'House rules', 'House rules'),
(211, 'SAFTY_PROPERTY', 'Safety & property', 'Safety & property'),
(212, 'CANCELATION_POLICY', 'Cancellation policy', 'Cancellation policy'),
(213, 'CHECK_IN_AFTER', 'Check-in after 2:00 PM.', 'Check-in after 2:00 PM.'),
(214, 'CHECKOUT_BEFORE', 'Checkout before 10:00 AM', 'Checkout before 10:00 AM'),
(215, 'GUSTS_MAX', '2 guests maximum', '2 guests maximum'),
(216, 'CARBON_REPORT', 'Carbon monoxide alarm not reported', 'Carbon monoxide alarm not reported'),
(217, 'SMOKE_REPORT', 'Smoke alarm not reported', 'Smoke alarm not reported'),
(218, 'CANCELATION_POLICY_PART_1', 'This reservation is non-refundable because the check-in date has passed.', 'This reservation is non-refundable because the check-in date has passed.'),
(219, 'CANCELATION_POLICY_PART_2', 'Review the Host’s full cancellation policy which applies even if you cancel for illness or disruptions caused by COVID-19.', 'Review the Host’s full cancellation policy which applies even if you cancel for illness or disruptions caused by COVID-19.'),
(220, 'GUSTS_TEXT', 'guests', 'guests'),
(221, 'BEDROOM_TEXT', 'bedroom', 'bedroom'),
(222, 'BATHS_TEXT', 'bath', 'bath'),
(223, 'RESERV_OPTION', 'Reserve Option', 'Reserve Option'),
(224, 'ORDER_DETAILS', 'Order Details', 'Order Details'),
(225, 'WHAT_PLACE_OFFER', 'What this place offers', 'What this place offers'),
(226, 'REQUEST_BOOK', 'Request to book', 'Request to book'),
(227, 'CARD_NUMBER', 'Card Number', 'Card Number'),
(228, 'EXPIRE_DATE', 'Expiration Date', 'Expiration Date'),
(229, 'CCV_NUMBER', 'CCV', 'CCV'),
(230, 'FULL_ADDRESS', 'Your Address', 'Your Address'),
(231, 'HAVE_ACCOUNT', 'Have an account.', 'Have an account.'),
(232, 'TOTAL_TEXT', 'Total', 'Total'),
(233, 'TAXES_FEE', 'Taxes Fee', 'Taxes Fee'),
(234, 'PAYMENT_DETAILS', 'Payment Details', 'Payment Details'),
(235, 'SUBMIT_RESERVE', 'Submit Reservation', 'Submit Reservation'),
(236, 'RESERVE_ADDED', 'Reservation Submitted..', 'Reservation Submitted..'),
(237, 'MY_RESERVE', 'My Reservations', 'My Reservations'),
(238, 'CHECK_IN', 'Check In', 'Check In'),
(239, 'CHECK_OUT', 'Check Out', 'Check Out'),
(240, 'NIGHT_COST', 'Night Cost', 'Night Cost'),
(241, 'SUB_COST', 'Sub Cost', 'Sub Cost'),
(242, 'FINAL_COST', 'Final Cost', 'Final Cost'),
(243, 'STATUE_TEXT', 'Statue', 'Statue'),
(244, 'CONFIRM_CANCEL_RESERVE', 'Confirm Cancel Reservation?', 'Confirm Cancel Reservation?'),
(245, 'CONFIRM_DELETE_RESERVE', 'Confirm Delete Reservation?', 'Confirm Delete Reservation?'),
(246, 'VIEW_TEXT', 'View', 'Sicht');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `l_id` int NOT NULL,
  `l_user_id` int NOT NULL DEFAULT '0',
  `l_unit_id` int NOT NULL DEFAULT '0',
  `l_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`l_id`, `l_user_id`, `l_unit_id`, `l_created_at`) VALUES
(9, 8, 26, '2023-08-16 21:32:46'),
(10, 9, 26, '2023-08-16 21:32:46'),
(11, 10, 26, '2023-08-16 21:32:46'),
(12, 11, 26, '2023-08-16 21:32:46'),
(13, 12, 26, '2023-08-16 21:32:46'),
(14, 13, 26, '2023-08-16 21:32:46'),
(15, 14, 26, '2023-08-16 21:32:46'),
(16, 15, 26, '2023-08-16 21:32:46'),
(17, 16, 26, '2023-08-16 21:32:46'),
(18, 17, 26, '2023-08-16 21:32:46'),
(19, 18, 26, '2023-08-16 21:32:46'),
(20, 19, 26, '2023-08-16 21:32:46'),
(21, 20, 26, '2023-08-16 21:32:46'),
(22, 21, 26, '2023-08-16 21:32:46'),
(23, 22, 26, '2023-08-16 21:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `r_id` int NOT NULL,
  `r_create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `r_user_id` int NOT NULL DEFAULT '0',
  `r_unit_id` int NOT NULL DEFAULT '0',
  `r_from` date NOT NULL,
  `r_to` date NOT NULL,
  `r_guests_count` int NOT NULL DEFAULT '0',
  `r_card_no` varchar(150) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `r_card_exp` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `r_card_ccv` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `r_card_address` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `r_night_cost` double NOT NULL DEFAULT '0',
  `r_added_cost` double NOT NULL DEFAULT '0',
  `r_nights_count` int NOT NULL DEFAULT '0',
  `r_sub_cost` double NOT NULL DEFAULT '0',
  `r_final_cost` double NOT NULL DEFAULT '0',
  `r_statue` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`r_id`, `r_create_at`, `r_user_id`, `r_unit_id`, `r_from`, `r_to`, `r_guests_count`, `r_card_no`, `r_card_exp`, `r_card_ccv`, `r_card_address`, `r_night_cost`, `r_added_cost`, `r_nights_count`, `r_sub_cost`, `r_final_cost`, `r_statue`) VALUES
(8, '2023-08-16 20:16:27', 31, 6, '2023-08-16', '2023-08-18', 0, '1231231231231', '12/32', '312', '123123213312213123', 1, 1, 2, 2, 3, 1),
(9, '2023-08-16 19:58:02', 7, 31, '2023-08-16', '2023-08-18', 0, '12312321312123', '32/11', '233', '123123123123123312312312', 650, 60, 2, 1300, 1360, 2),
(10, '2023-08-16 19:58:02', 7, 31, '2023-08-16', '2023-08-18', 0, '12312321312123', '32/11', '233', '123123123123123312312312', 650, 60, 2, 1300, 1360, 3),
(11, '2023-08-16 19:58:02', 7, 31, '2023-08-16', '2023-08-18', 0, '12312321312123', '32/11', '233', '123123123123123312312312', 650, 60, 2, 1300, 1360, 3),
(12, '2023-08-18 21:26:28', 7, 32, '2023-08-20', '2023-08-25', 10, '4547221245463', '12/28', '122', 'asd asd as s ', 750, 80, 5, 1500, 1580, 4),
(13, '2023-08-20 20:39:26', 7, 31, '2023-08-20', '2023-08-22', 0, '21312331212321', '11/11', '111', '11111111111111', 650, 60, 2, 1300, 1360, 1);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `u_id` int NOT NULL,
  `u_user_id` int NOT NULL DEFAULT '0',
  `u_title` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `u_country` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL,
  `u_city` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL,
  `u_address` text COLLATE utf8mb4_bin,
  `u_images` text COLLATE utf8mb4_bin,
  `u_host_count` int NOT NULL DEFAULT '0',
  `u_room_count` int NOT NULL DEFAULT '0',
  `u_path_count` int NOT NULL DEFAULT '0',
  `u_description` text COLLATE utf8mb4_bin,
  `u_wifi` tinyint(1) NOT NULL DEFAULT '0',
  `u_garden` tinyint(1) NOT NULL DEFAULT '0',
  `u_kitchen` tinyint(1) NOT NULL DEFAULT '0',
  `u_tv` tinyint(1) NOT NULL DEFAULT '0',
  `u_workspace` tinyint(1) NOT NULL DEFAULT '0',
  `u_parking` tinyint(1) NOT NULL DEFAULT '0',
  `u_pool` tinyint(1) NOT NULL DEFAULT '0',
  `u_washer` tinyint(1) NOT NULL DEFAULT '0',
  `u_air_conditioning` tinyint(1) NOT NULL DEFAULT '0',
  `u_fans` tinyint(1) NOT NULL DEFAULT '0',
  `u_refrigerator` tinyint(1) NOT NULL DEFAULT '0',
  `u_one_night_cost` double NOT NULL DEFAULT '0',
  `u_added_cost` double NOT NULL DEFAULT '0',
  `u_category` int NOT NULL DEFAULT '0',
  `u_create_at` datetime DEFAULT NULL,
  `u_statue` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`u_id`, `u_user_id`, `u_title`, `u_country`, `u_city`, `u_address`, `u_images`, `u_host_count`, `u_room_count`, `u_path_count`, `u_description`, `u_wifi`, `u_garden`, `u_kitchen`, `u_tv`, `u_workspace`, `u_parking`, `u_pool`, `u_washer`, `u_air_conditioning`, `u_fans`, `u_refrigerator`, `u_one_night_cost`, `u_added_cost`, `u_category`, `u_create_at`, `u_statue`) VALUES
(3, 25, 'Villa Overlooking Abu Sir Pyramids1', 'EG', 'Abu sir, Ismailia11', '1111111111111111', '640816_img_367269.webp,276978_img_541122.webp,471567_img_263684.webp,316026_img_666588.webp,', 1, 1, 1, 'A fabulous, newly finished 4 bedroom villa and 2 bedroom guest house nestled in a large garden with swimming pool, all with breath taking views of the Abu Sir Pyramids.\nThis is a perfect place for a family and friends retreat but we are unable to host any large events such as birthday parties, engagements and weddings.\n', 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 111, 22, 0, '2023-08-10 20:55:39', 1),
(4, 25, 'unit three test', 'OM', 'masqat', 'masqat masqat masqat', '666204_img_604367.webp,80012_img_811777.webp,186701_img_853213.webp,417624_img_674902.webp,231024_img_49633.webp,216747_img_586811.webp,', 6, 3, 5, 'Stay at ground floor of luxurious Moonlight villa with infinity pool & adjoining spa, with breath-taking views of sea, moon on water & sunset. BBQ, luscious garden, lounges, bicycles (free) & bike path. Large outdoor patios offer group fun & dining. Swim in rocky sea in front of villa or walk ~4 min to pebble beach. Long sand beach 2 km. Short walk to seaside restaurants, bars, super market, patisserie. Extra charge for private pool access. Concierge services available. COVID flexibility.\nThe space\nMoonlight Villas overlook the crystal-clear, blue waters of the Mediterranean sea- a beautiful rocky horizon ideal for swimming, sunbathing, surfing, and other water sports. Jupiter Views is the fully enclosed ground floor of the Galilean Moons villa - the upper floor has a separate entrance, patios and BBQ; only the pool is shared.\n\nSet in Koutsourás, a quiet, agricultural village in South-Eastern Crete, Moonlight Villa is a ~450 m2 brand new, private, waterfront estate that provides luxurious accommodation with spectacular views of the southern Crete landscape, moon and sunset. The property features an infinity pool (52 square meters) and adjoining whirlpool, from which guests can enjoy these stunning waterfront vistas. The pool is closed December 1- March 31.\n\nLocated only a few minutes’ walk from a pebble beach, bakery, and coffee shops, patisserie, super markets, bars, restaurants, and pharmacy, the villa combines romantic seclusion with proximity to modern comforts. Likewise, the property is located only a few km away from the tourist town of Makry Gialos, as well as traditional Cretan mountain villages with numerous authentic tavernas, bars and long sand beaches. The nearest airports are in Sitia (36 km) and Heraklion (114 km; private transportation can be arranged at a fee).\n\nThe villa is designed to accommodate the elite traveler with a desire for exceptional style and comfort. If offers private access to infinity swimming pool, whirlpool tub, pool bar, and back patio with barbecue, outdoor traditional stone dining, and vegetable and fruit tree garden. There is also free WiFi throughout the property, and showers with hydromassage. Fitted with high quality furnishings, top-quality mattresses and linen, and eco-friendly materials, fully-equipped kitchen with oven, refrigerator, toaster, dishwasher, microwave and coffee maker . Air conditioning, heating and TVs with satellite channels are also available throughout the property. The complex has its own water (private well and underground tank), electricity (solar panels, generator), central vacuum, central heating, and cooling that can be independently controlled in each room.\n\nMoonlight Villa sets the highest standards of luxury, beauty, elegance, ecological simplicity, and modern comforts. We will share our best-kept secrets about our hidden-treasure beaches, landscapes, hiking paths, culture, best restaurants, best shops and bicycle ride paths, as well as other attractions that may be of interest. Welcome to your seafront, romantic, luxury, and breathtaking home away from home!\n-------------------\nDETAILS ABOUT JUPITER VIEWS LAYOUT\nJupiter Views consists of two adjoining units: Callisto and Ganymede.\n- Callisto features a bright, comfortable living room equipped with a fireplace and corner sofa, an open-plan kitchen, and a glass dining table. The large, shaded verandas at the front and side of the villa allow for spectacular views of the sea, sky and moon. They are furnished with an outside eating area and comfy furniture to enjoy the sea and pool views. The villa’s wall art carries on the theme of moon, cosmos and sea throughout the complex.\n- Callisto has 4 bedrooms, two of which form a separate wing with a shared bathroom. The master bedroom (king-sized bed) has double doors leading to the front verandas, swimming pool and outdoors whirlpool tub. You need move only a few steps from your bed to find yourself engulfed in the smell of sea, jasmine, and other local aromatic plants. The master bedroom shares a handicapped-accessible bathroom with a second bedroom with a double bed, a foldable, wall-mounted bunk bed and a chair-bed that can accommodate up to 4 children or friends. With a separate entrance from the living area, a 3rd, front-facing bedroom features a single bed and a wall-mounted, foldable bunk bed, as well as its own private bathroom. There is a second master bedroom with a queen bed and en-suite bathroom.\n- Ganymede has a studio layout, with its private entrance off the pool terrace. The bedroom features a double bed. In combination with a corner couch in the cozy living room, as well as twin loft beds ideal for children over 6 years old (or grown-up children too!) and a fully-equipped kitchen and dining area, offers a great accommodation to a single family or friends. The front patio has sea views. The back patio opens into a vegetable/tree garden with barbecue and secluded relaxing retreat.\n\nIf you need MORE SPACE, additional bedrooms are available on the 1st floor. Please send inquiry.\nGuest access\n-Infinity Swimming Pool (51 m2), with a spectacular view to the sea (shared)\n-Outdoor, built-in stone BBQ with a gas cook top (shared)\n-Handcrafted marble dining table and marble benches, shaded by a beautiful stone/wood pergola\n-Outdoor Pool Shower (shared)\n-Outdoor whirlpool Tub (shared)\n-Large patio with sun beds, outdoor tables, and lounge chairs (shared)\n-Pebble swimming beach (with bars and restaurants) within 5-minute walk of the villa\n-Parking in nearby lot\n-Outdoor garden, landscaped with local stones and sea pebbles. You will discover local fruit trees, local Cretan herbs, blossoming flowers, local plants, lawns and an outside rock garden displaying a collection of herbs that prosper in the area.\n-Well-designed, relaxing, night lighting\n-Welcome basket complete with: (i) home-made jams, honey, olive oil, raki (a local, high-alcohol drink made from grapes in October) and cake/cookies (all home-made), as well as (ii) filter coffee, milk, juice, water, sugar, salt, pepper\n-Seasonal fresh fruit and vegetables (offered upon arrival and at different times throughout your visit)\n-Internet (wireless throughout the villa, both indoors and outdoors; also wired in each room)\n-Satellite radio and TV\n-Generator on property provides electricity even when national electricity is out\n-State-of-the-art private water treatment with active, continuous filtering of minerals and bacteria\n-Cleaning twice a week; additional cleaning as requested at an additional fee\n\nThe following services can be provided at an additional cost.\n-Pick-up and drop-off at harbor or airport (Sitia, Heraklion, Chania) Prices upon request – advance reservations required\n-Daily breakfast basket (milk, juice, bread, pastries, boiled eggs, local cheese selection) – 15 Euros per person\n-Groceries (list must be provided) – cost + 20% tip (minimum tip: 5 Euros)\n-Restaurant food delivery (menu provided) – cost + 20% tip (minimum tip: 5 Euros)\n-Private drive to local beaches and restaurants (depending on distance, 5 or 10 Euros per round-trip for 4 people; or a flat rate per day) – Guaranteed only when reserved at least 24 hours in advance\n-Longer daily trips to Sitia, Vai, Moni Toplou, Zakros, Xerokampos, Aghios Nikolaos, Elounda, Spinalonga, Festos, Matala, Knossos and archaeological museum in Heraklion can also be arranged – advance reservations are required.\nOther things to note\nHere are some extra services that you can have during your stay.\n\no Private Chef at the villa\no Wine tasting at the Villa\no Wine tasting experience of organic wine, with traditional Cretan food in the middle of the vineyard.\no Private trip with a Luxury Yacht\no Fishing trips\no Safari trips with 4x4\no Daily trips to beautiful beaches\no Yoga sunrise lessons, session at the beach\no Massage at the Villa\no Diving\no Grocery shopping\no Shisha getting prepared for you at the Villa\no E-bike trips\no Barbecue at the villa\no Latin party at the villa with professional dancers, and a bartender.\n\nDistance from Airports: (pickups can be arranged in advance)\n– Sitia Airport: 33 km\n– Heraklion Airport: 115 Km – 1h & 45min\n– Chania Airport: 261 Km – 3h & 45min\n\nAttractions within 1h drive:\n- Sitia Town (33 Km): a picturesque seaside town, situated on the northeastern side of Crete, a region still unspoiled by mass tourism with Archaeological and Folklore Museums, as well as a Venetian Fortress – Kazarma\n- The monastery of Toplou (43 Km)\n- The world famous palm forest of Vai (53 Km)\n- The Minoan palace of Kato Zakros (45 km)\n- Aghios Nikolaos (56 Km)\n\nAttractions within 2h drive:\n- The Minoan palace of Knossos (120 km, drive time ~2h)\n- The Minoan palace of Festos (west, drive time ~1h)\n- Water Park in Hersonissos (96 Km)\n- Cretaquarium – Thalassocosmos in Gournes (105 Km)\nRegistration number\n1040Κ13003386101', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 550, 55, 0, '2023-08-10 21:31:53', 1),
(6, 7, 'sadsasad', 'AS', 'sdaasd', 'asdasd', '629711_img_71006.webp,994196_img_169474.webp,822445_img_397457.webp,50698_img_296859.webp,474040_img_343949.webp,', 12, 1, 1, 'Stay at ground floor of luxurious Moonlight villa with infinity ...\r\n', 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, '2023-08-12 21:36:13', 1),
(8, 25, 'Villa Overlooking Abu Sir Pyramids1', 'EG', 'Abu sir, Ismailia11', '1111111111111111', '640816_img_367269.webp,276978_img_541122.webp,471567_img_263684.webp,316026_img_666588.webp,', 1, 1, 1, 'A fabulous, newly finished 4 bedroom villa and 2 bedroom guest house nestled in a large garden with swimming pool, all with breath taking views of the Abu Sir Pyramids.\r\nThis is a perfect place for a family and friends retreat but we are unable to host any large events such as birthday parties, engagements and weddings.\r\n', 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 111, 22, 0, '2023-08-10 20:55:39', 1),
(9, 25, 'unit three test', 'OM', 'masqat', 'masqat masqat masqat', '666204_img_604367.webp,80012_img_811777.webp,186701_img_853213.webp,417624_img_674902.webp,231024_img_49633.webp,216747_img_586811.webp,', 6, 3, 5, 'Stay at ground floor of luxurious Moonlight villa with infinity pool & adjoining spa, with breath-taking views of sea, moon on water & sunset. BBQ, luscious garden, lounges, bicycles (free) & bike path. Large outdoor patios offer group fun & dining. Swim in rocky sea in front of villa or walk ~4 min to pebble beach. Long sand beach 2 km. Short walk to seaside restaurants, bars, super market, patisserie. Extra charge for private pool access. Concierge services available. COVID flexibility.\r\nThe space\r\nMoonlight Villas overlook the crystal-clear, blue waters of the Mediterranean sea- a beautiful rocky horizon ideal for swimming, sunbathing, surfing, and other water sports. Jupiter Views is the fully enclosed ground floor of the Galilean Moons villa - the upper floor has a separate entrance, patios and BBQ; only the pool is shared.\r\n\r\nSet in Koutsourás, a quiet, agricultural village in South-Eastern Crete, Moonlight Villa is a ~450 m2 brand new, private, waterfront estate that provides luxurious accommodation with spectacular views of the southern Crete landscape, moon and sunset. The property features an infinity pool (52 square meters) and adjoining whirlpool, from which guests can enjoy these stunning waterfront vistas. The pool is closed December 1- March 31.\r\n\r\nLocated only a few minutes’ walk from a pebble beach, bakery, and coffee shops, patisserie, super markets, bars, restaurants, and pharmacy, the villa combines romantic seclusion with proximity to modern comforts. Likewise, the property is located only a few km away from the tourist town of Makry Gialos, as well as traditional Cretan mountain villages with numerous authentic tavernas, bars and long sand beaches. The nearest airports are in Sitia (36 km) and Heraklion (114 km; private transportation can be arranged at a fee).\r\n\r\nThe villa is designed to accommodate the elite traveler with a desire for exceptional style and comfort. If offers private access to infinity swimming pool, whirlpool tub, pool bar, and back patio with barbecue, outdoor traditional stone dining, and vegetable and fruit tree garden. There is also free WiFi throughout the property, and showers with hydromassage. Fitted with high quality furnishings, top-quality mattresses and linen, and eco-friendly materials, fully-equipped kitchen with oven, refrigerator, toaster, dishwasher, microwave and coffee maker . Air conditioning, heating and TVs with satellite channels are also available throughout the property. The complex has its own water (private well and underground tank), electricity (solar panels, generator), central vacuum, central heating, and cooling that can be independently controlled in each room.\r\n\r\nMoonlight Villa sets the highest standards of luxury, beauty, elegance, ecological simplicity, and modern comforts. We will share our best-kept secrets about our hidden-treasure beaches, landscapes, hiking paths, culture, best restaurants, best shops and bicycle ride paths, as well as other attractions that may be of interest. Welcome to your seafront, romantic, luxury, and breathtaking home away from home!\r\n-------------------\r\nDETAILS ABOUT JUPITER VIEWS LAYOUT\r\nJupiter Views consists of two adjoining units: Callisto and Ganymede.\r\n- Callisto features a bright, comfortable living room equipped with a fireplace and corner sofa, an open-plan kitchen, and a glass dining table. The large, shaded verandas at the front and side of the villa allow for spectacular views of the sea, sky and moon. They are furnished with an outside eating area and comfy furniture to enjoy the sea and pool views. The villa’s wall art carries on the theme of moon, cosmos and sea throughout the complex.\r\n- Callisto has 4 bedrooms, two of which form a separate wing with a shared bathroom. The master bedroom (king-sized bed) has double doors leading to the front verandas, swimming pool and outdoors whirlpool tub. You need move only a few steps from your bed to find yourself engulfed in the smell of sea, jasmine, and other local aromatic plants. The master bedroom shares a handicapped-accessible bathroom with a second bedroom with a double bed, a foldable, wall-mounted bunk bed and a chair-bed that can accommodate up to 4 children or friends. With a separate entrance from the living area, a 3rd, front-facing bedroom features a single bed and a wall-mounted, foldable bunk bed, as well as its own private bathroom. There is a second master bedroom with a queen bed and en-suite bathroom.\r\n- Ganymede has a studio layout, with its private entrance off the pool terrace. The bedroom features a double bed. In combination with a corner couch in the cozy living room, as well as twin loft beds ideal for children over 6 years old (or grown-up children too!) and a fully-equipped kitchen and dining area, offers a great accommodation to a single family or friends. The front patio has sea views. The back patio opens into a vegetable/tree garden with barbecue and secluded relaxing retreat.\r\n\r\nIf you need MORE SPACE, additional bedrooms are available on the 1st floor. Please send inquiry.\r\nGuest access\r\n-Infinity Swimming Pool (51 m2), with a spectacular view to the sea (shared)\r\n-Outdoor, built-in stone BBQ with a gas cook top (shared)\r\n-Handcrafted marble dining table and marble benches, shaded by a beautiful stone/wood pergola\r\n-Outdoor Pool Shower (shared)\r\n-Outdoor whirlpool Tub (shared)\r\n-Large patio with sun beds, outdoor tables, and lounge chairs (shared)\r\n-Pebble swimming beach (with bars and restaurants) within 5-minute walk of the villa\r\n-Parking in nearby lot\r\n-Outdoor garden, landscaped with local stones and sea pebbles. You will discover local fruit trees, local Cretan herbs, blossoming flowers, local plants, lawns and an outside rock garden displaying a collection of herbs that prosper in the area.\r\n-Well-designed, relaxing, night lighting\r\n-Welcome basket complete with: (i) home-made jams, honey, olive oil, raki (a local, high-alcohol drink made from grapes in October) and cake/cookies (all home-made), as well as (ii) filter coffee, milk, juice, water, sugar, salt, pepper\r\n-Seasonal fresh fruit and vegetables (offered upon arrival and at different times throughout your visit)\r\n-Internet (wireless throughout the villa, both indoors and outdoors; also wired in each room)\r\n-Satellite radio and TV\r\n-Generator on property provides electricity even when national electricity is out\r\n-State-of-the-art private water treatment with active, continuous filtering of minerals and bacteria\r\n-Cleaning twice a week; additional cleaning as requested at an additional fee\r\n\r\nThe following services can be provided at an additional cost.\r\n-Pick-up and drop-off at harbor or airport (Sitia, Heraklion, Chania) Prices upon request – advance reservations required\r\n-Daily breakfast basket (milk, juice, bread, pastries, boiled eggs, local cheese selection) – 15 Euros per person\r\n-Groceries (list must be provided) – cost + 20% tip (minimum tip: 5 Euros)\r\n-Restaurant food delivery (menu provided) – cost + 20% tip (minimum tip: 5 Euros)\r\n-Private drive to local beaches and restaurants (depending on distance, 5 or 10 Euros per round-trip for 4 people; or a flat rate per day) – Guaranteed only when reserved at least 24 hours in advance\r\n-Longer daily trips to Sitia, Vai, Moni Toplou, Zakros, Xerokampos, Aghios Nikolaos, Elounda, Spinalonga, Festos, Matala, Knossos and archaeological museum in Heraklion can also be arranged – advance reservations are required.\r\nOther things to note\r\nHere are some extra services that you can have during your stay.\r\n\r\no Private Chef at the villa\r\no Wine tasting at the Villa\r\no Wine tasting experience of organic wine, with traditional Cretan food in the middle of the vineyard.\r\no Private trip with a Luxury Yacht\r\no Fishing trips\r\no Safari trips with 4x4\r\no Daily trips to beautiful beaches\r\no Yoga sunrise lessons, session at the beach\r\no Massage at the Villa\r\no Diving\r\no Grocery shopping\r\no Shisha getting prepared for you at the Villa\r\no E-bike trips\r\no Barbecue at the villa\r\no Latin party at the villa with professional dancers, and a bartender.\r\n\r\nDistance from Airports: (pickups can be arranged in advance)\r\n– Sitia Airport: 33 km\r\n– Heraklion Airport: 115 Km – 1h & 45min\r\n– Chania Airport: 261 Km – 3h & 45min\r\n\r\nAttractions within 1h drive:\r\n- Sitia Town (33 Km): a picturesque seaside town, situated on the northeastern side of Crete, a region still unspoiled by mass tourism with Archaeological and Folklore Museums, as well as a Venetian Fortress – Kazarma\r\n- The monastery of Toplou (43 Km)\r\n- The world famous palm forest of Vai (53 Km)\r\n- The Minoan palace of Kato Zakros (45 km)\r\n- Aghios Nikolaos (56 Km)\r\n\r\nAttractions within 2h drive:\r\n- The Minoan palace of Knossos (120 km, drive time ~2h)\r\n- The Minoan palace of Festos (west, drive time ~1h)\r\n- Water Park in Hersonissos (96 Km)\r\n- Cretaquarium – Thalassocosmos in Gournes (105 Km)\r\nRegistration number\r\n1040Κ13003386101', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 550, 55, 0, '2023-08-10 21:31:53', 1),
(11, 7, 'sadsasad', 'AS', 'sdaasd', 'asdasd', '629711_img_71006.webp,994196_img_169474.webp,822445_img_397457.webp,50698_img_296859.webp,474040_img_343949.webp,', 12, 1, 1, 'Stay at ground floor of luxurious Moonlight villa with infinity ...\r\n', 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, '2023-08-12 21:36:13', 1),
(12, 25, 'Villa Overlooking Abu Sir Pyramids1', 'EG', 'Abu sir, Ismailia11', '1111111111111111', '640816_img_367269.webp,276978_img_541122.webp,471567_img_263684.webp,316026_img_666588.webp,', 1, 1, 1, 'A fabulous, newly finished 4 bedroom villa and 2 bedroom guest house nestled in a large garden with swimming pool, all with breath taking views of the Abu Sir Pyramids.\r\nThis is a perfect place for a family and friends retreat but we are unable to host any large events such as birthday parties, engagements and weddings.\r\n', 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 111, 22, 0, '2023-08-10 20:55:39', 1),
(13, 25, 'unit three test', 'OM', 'masqat', 'masqat masqat masqat', '666204_img_604367.webp,80012_img_811777.webp,186701_img_853213.webp,417624_img_674902.webp,231024_img_49633.webp,216747_img_586811.webp,666204_img_604367.webp,80012_img_811777.webp,186701_img_853213.webp,417624_img_674902.webp,231024_img_49633.webp,216747_img_586811.webp,666204_img_604367.webp,80012_img_811777.webp,186701_img_853213.webp,417624_img_674902.webp,231024_img_49633.webp,216747_img_586811.webp,666204_img_604367.webp,80012_img_811777.webp,186701_img_853213.webp,417624_img_674902.webp,231024_img_49633.webp,216747_img_586811.webp,\r\n', 6, 3, 5, 'Stay at ground floor of luxurious Moonlight villa with infinity pool & adjoining spa, with breath-taking views of sea, moon on water & sunset. BBQ, luscious garden, lounges, bicycles (free) & bike path. Large outdoor patios offer group fun & dining. Swim in rocky sea in front of villa or walk ~4 min to pebble beach. Long sand beach 2 km. Short walk to seaside restaurants, bars, super market, patisserie. Extra charge for private pool access. Concierge services available. COVID flexibility.\r\nThe space\r\nMoonlight Villas overlook the crystal-clear, blue waters of the Mediterranean sea- a beautiful rocky horizon ideal for swimming, sunbathing, surfing, and other water sports. Jupiter Views is the fully enclosed ground floor of the Galilean Moons villa - the upper floor has a separate entrance, patios and BBQ; only the pool is shared.\r\n\r\nSet in Koutsourás, a quiet, agricultural village in South-Eastern Crete, Moonlight Villa is a ~450 m2 brand new, private, waterfront estate that provides luxurious accommodation with spectacular views of the southern Crete landscape, moon and sunset. The property features an infinity pool (52 square meters) and adjoining whirlpool, from which guests can enjoy these stunning waterfront vistas. The pool is closed December 1- March 31.\r\n\r\nLocated only a few minutes’ walk from a pebble beach, bakery, and coffee shops, patisserie, super markets, bars, restaurants, and pharmacy, the villa combines romantic seclusion with proximity to modern comforts. Likewise, the property is located only a few km away from the tourist town of Makry Gialos, as well as traditional Cretan mountain villages with numerous authentic tavernas, bars and long sand beaches. The nearest airports are in Sitia (36 km) and Heraklion (114 km; private transportation can be arranged at a fee).\r\n\r\nThe villa is designed to accommodate the elite traveler with a desire for exceptional style and comfort. If offers private access to infinity swimming pool, whirlpool tub, pool bar, and back patio with barbecue, outdoor traditional stone dining, and vegetable and fruit tree garden. There is also free WiFi throughout the property, and showers with hydromassage. Fitted with high quality furnishings, top-quality mattresses and linen, and eco-friendly materials, fully-equipped kitchen with oven, refrigerator, toaster, dishwasher, microwave and coffee maker . Air conditioning, heating and TVs with satellite channels are also available throughout the property. The complex has its own water (private well and underground tank), electricity (solar panels, generator), central vacuum, central heating, and cooling that can be independently controlled in each room.\r\n\r\nMoonlight Villa sets the highest standards of luxury, beauty, elegance, ecological simplicity, and modern comforts. We will share our best-kept secrets about our hidden-treasure beaches, landscapes, hiking paths, culture, best restaurants, best shops and bicycle ride paths, as well as other attractions that may be of interest. Welcome to your seafront, romantic, luxury, and breathtaking home away from home!\r\n-------------------\r\nDETAILS ABOUT JUPITER VIEWS LAYOUT\r\nJupiter Views consists of two adjoining units: Callisto and Ganymede.\r\n- Callisto features a bright, comfortable living room equipped with a fireplace and corner sofa, an open-plan kitchen, and a glass dining table. The large, shaded verandas at the front and side of the villa allow for spectacular views of the sea, sky and moon. They are furnished with an outside eating area and comfy furniture to enjoy the sea and pool views. The villa’s wall art carries on the theme of moon, cosmos and sea throughout the complex.\r\n- Callisto has 4 bedrooms, two of which form a separate wing with a shared bathroom. The master bedroom (king-sized bed) has double doors leading to the front verandas, swimming pool and outdoors whirlpool tub. You need move only a few steps from your bed to find yourself engulfed in the smell of sea, jasmine, and other local aromatic plants. The master bedroom shares a handicapped-accessible bathroom with a second bedroom with a double bed, a foldable, wall-mounted bunk bed and a chair-bed that can accommodate up to 4 children or friends. With a separate entrance from the living area, a 3rd, front-facing bedroom features a single bed and a wall-mounted, foldable bunk bed, as well as its own private bathroom. There is a second master bedroom with a queen bed and en-suite bathroom.\r\n- Ganymede has a studio layout, with its private entrance off the pool terrace. The bedroom features a double bed. In combination with a corner couch in the cozy living room, as well as twin loft beds ideal for children over 6 years old (or grown-up children too!) and a fully-equipped kitchen and dining area, offers a great accommodation to a single family or friends. The front patio has sea views. The back patio opens into a vegetable/tree garden with barbecue and secluded relaxing retreat.\r\n\r\nIf you need MORE SPACE, additional bedrooms are available on the 1st floor. Please send inquiry.\r\nGuest access\r\n-Infinity Swimming Pool (51 m2), with a spectacular view to the sea (shared)\r\n-Outdoor, built-in stone BBQ with a gas cook top (shared)\r\n-Handcrafted marble dining table and marble benches, shaded by a beautiful stone/wood pergola\r\n-Outdoor Pool Shower (shared)\r\n-Outdoor whirlpool Tub (shared)\r\n-Large patio with sun beds, outdoor tables, and lounge chairs (shared)\r\n-Pebble swimming beach (with bars and restaurants) within 5-minute walk of the villa\r\n-Parking in nearby lot\r\n-Outdoor garden, landscaped with local stones and sea pebbles. You will discover local fruit trees, local Cretan herbs, blossoming flowers, local plants, lawns and an outside rock garden displaying a collection of herbs that prosper in the area.\r\n-Well-designed, relaxing, night lighting\r\n-Welcome basket complete with: (i) home-made jams, honey, olive oil, raki (a local, high-alcohol drink made from grapes in October) and cake/cookies (all home-made), as well as (ii) filter coffee, milk, juice, water, sugar, salt, pepper\r\n-Seasonal fresh fruit and vegetables (offered upon arrival and at different times throughout your visit)\r\n-Internet (wireless throughout the villa, both indoors and outdoors; also wired in each room)\r\n-Satellite radio and TV\r\n-Generator on property provides electricity even when national electricity is out\r\n-State-of-the-art private water treatment with active, continuous filtering of minerals and bacteria\r\n-Cleaning twice a week; additional cleaning as requested at an additional fee\r\n\r\nThe following services can be provided at an additional cost.\r\n-Pick-up and drop-off at harbor or airport (Sitia, Heraklion, Chania) Prices upon request – advance reservations required\r\n-Daily breakfast basket (milk, juice, bread, pastries, boiled eggs, local cheese selection) – 15 Euros per person\r\n-Groceries (list must be provided) – cost + 20% tip (minimum tip: 5 Euros)\r\n-Restaurant food delivery (menu provided) – cost + 20% tip (minimum tip: 5 Euros)\r\n-Private drive to local beaches and restaurants (depending on distance, 5 or 10 Euros per round-trip for 4 people; or a flat rate per day) – Guaranteed only when reserved at least 24 hours in advance\r\n-Longer daily trips to Sitia, Vai, Moni Toplou, Zakros, Xerokampos, Aghios Nikolaos, Elounda, Spinalonga, Festos, Matala, Knossos and archaeological museum in Heraklion can also be arranged – advance reservations are required.\r\nOther things to note\r\nHere are some extra services that you can have during your stay.\r\n\r\no Private Chef at the villa\r\no Wine tasting at the Villa\r\no Wine tasting experience of organic wine, with traditional Cretan food in the middle of the vineyard.\r\no Private trip with a Luxury Yacht\r\no Fishing trips\r\no Safari trips with 4x4\r\no Daily trips to beautiful beaches\r\no Yoga sunrise lessons, session at the beach\r\no Massage at the Villa\r\no Diving\r\no Grocery shopping\r\no Shisha getting prepared for you at the Villa\r\no E-bike trips\r\no Barbecue at the villa\r\no Latin party at the villa with professional dancers, and a bartender.\r\n\r\nDistance from Airports: (pickups can be arranged in advance)\r\n– Sitia Airport: 33 km\r\n– Heraklion Airport: 115 Km – 1h & 45min\r\n– Chania Airport: 261 Km – 3h & 45min\r\n\r\nAttractions within 1h drive:\r\n- Sitia Town (33 Km): a picturesque seaside town, situated on the northeastern side of Crete, a region still unspoiled by mass tourism with Archaeological and Folklore Museums, as well as a Venetian Fortress – Kazarma\r\n- The monastery of Toplou (43 Km)\r\n- The world famous palm forest of Vai (53 Km)\r\n- The Minoan palace of Kato Zakros (45 km)\r\n- Aghios Nikolaos (56 Km)\r\n\r\nAttractions within 2h drive:\r\n- The Minoan palace of Knossos (120 km, drive time ~2h)\r\n- The Minoan palace of Festos (west, drive time ~1h)\r\n- Water Park in Hersonissos (96 Km)\r\n- Cretaquarium – Thalassocosmos in Gournes (105 Km)\r\nRegistration number\r\n1040Κ13003386101', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 550, 55, 0, '2023-08-10 21:31:53', 1),
(14, 7, 'sadsasad', 'AS', 'sdaasd', 'asdasd', '629711_img_71006.webp,994196_img_169474.webp,822445_img_397457.webp,50698_img_296859.webp,474040_img_343949.webp,', 12, 1, 1, 'Stay at ground floor of luxurious Moonlight villa with infinity ...\r\n', 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, '2023-08-12 21:36:13', 1),
(15, 25, 'Villa Overlooking Abu Sir Pyramids1', 'EG', 'Abu sir, Ismailia11', '1111111111111111', '640816_img_367269.webp,276978_img_541122.webp,471567_img_263684.webp,316026_img_666588.webp,', 1, 1, 1, 'A fabulous, newly finished 4 bedroom villa and 2 bedroom guest house nestled in a large garden with swimming pool, all with breath taking views of the Abu Sir Pyramids.\r\nThis is a perfect place for a family and friends retreat but we are unable to host any large events such as birthday parties, engagements and weddings.\r\n', 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 111, 22, 0, '2023-08-10 20:55:39', 1),
(16, 25, 'unit three test', 'OM', 'masqat', 'masqat masqat masqat', '666204_img_604367.webp,80012_img_811777.webp,186701_img_853213.webp,417624_img_674902.webp,231024_img_49633.webp,216747_img_586811.webp,', 6, 3, 5, 'Stay at ground floor of luxurious Moonlight villa with infinity pool & adjoining spa, with breath-taking views of sea, moon on water & sunset. BBQ, luscious garden, lounges, bicycles (free) & bike path. Large outdoor patios offer group fun & dining. Swim in rocky sea in front of villa or walk ~4 min to pebble beach. Long sand beach 2 km. Short walk to seaside restaurants, bars, super market, patisserie. Extra charge for private pool access. Concierge services available. COVID flexibility.\r\nThe space\r\nMoonlight Villas overlook the crystal-clear, blue waters of the Mediterranean sea- a beautiful rocky horizon ideal for swimming, sunbathing, surfing, and other water sports. Jupiter Views is the fully enclosed ground floor of the Galilean Moons villa - the upper floor has a separate entrance, patios and BBQ; only the pool is shared.\r\n\r\nSet in Koutsourás, a quiet, agricultural village in South-Eastern Crete, Moonlight Villa is a ~450 m2 brand new, private, waterfront estate that provides luxurious accommodation with spectacular views of the southern Crete landscape, moon and sunset. The property features an infinity pool (52 square meters) and adjoining whirlpool, from which guests can enjoy these stunning waterfront vistas. The pool is closed December 1- March 31.\r\n\r\nLocated only a few minutes’ walk from a pebble beach, bakery, and coffee shops, patisserie, super markets, bars, restaurants, and pharmacy, the villa combines romantic seclusion with proximity to modern comforts. Likewise, the property is located only a few km away from the tourist town of Makry Gialos, as well as traditional Cretan mountain villages with numerous authentic tavernas, bars and long sand beaches. The nearest airports are in Sitia (36 km) and Heraklion (114 km; private transportation can be arranged at a fee).\r\n\r\nThe villa is designed to accommodate the elite traveler with a desire for exceptional style and comfort. If offers private access to infinity swimming pool, whirlpool tub, pool bar, and back patio with barbecue, outdoor traditional stone dining, and vegetable and fruit tree garden. There is also free WiFi throughout the property, and showers with hydromassage. Fitted with high quality furnishings, top-quality mattresses and linen, and eco-friendly materials, fully-equipped kitchen with oven, refrigerator, toaster, dishwasher, microwave and coffee maker . Air conditioning, heating and TVs with satellite channels are also available throughout the property. The complex has its own water (private well and underground tank), electricity (solar panels, generator), central vacuum, central heating, and cooling that can be independently controlled in each room.\r\n\r\nMoonlight Villa sets the highest standards of luxury, beauty, elegance, ecological simplicity, and modern comforts. We will share our best-kept secrets about our hidden-treasure beaches, landscapes, hiking paths, culture, best restaurants, best shops and bicycle ride paths, as well as other attractions that may be of interest. Welcome to your seafront, romantic, luxury, and breathtaking home away from home!\r\n-------------------\r\nDETAILS ABOUT JUPITER VIEWS LAYOUT\r\nJupiter Views consists of two adjoining units: Callisto and Ganymede.\r\n- Callisto features a bright, comfortable living room equipped with a fireplace and corner sofa, an open-plan kitchen, and a glass dining table. The large, shaded verandas at the front and side of the villa allow for spectacular views of the sea, sky and moon. They are furnished with an outside eating area and comfy furniture to enjoy the sea and pool views. The villa’s wall art carries on the theme of moon, cosmos and sea throughout the complex.\r\n- Callisto has 4 bedrooms, two of which form a separate wing with a shared bathroom. The master bedroom (king-sized bed) has double doors leading to the front verandas, swimming pool and outdoors whirlpool tub. You need move only a few steps from your bed to find yourself engulfed in the smell of sea, jasmine, and other local aromatic plants. The master bedroom shares a handicapped-accessible bathroom with a second bedroom with a double bed, a foldable, wall-mounted bunk bed and a chair-bed that can accommodate up to 4 children or friends. With a separate entrance from the living area, a 3rd, front-facing bedroom features a single bed and a wall-mounted, foldable bunk bed, as well as its own private bathroom. There is a second master bedroom with a queen bed and en-suite bathroom.\r\n- Ganymede has a studio layout, with its private entrance off the pool terrace. The bedroom features a double bed. In combination with a corner couch in the cozy living room, as well as twin loft beds ideal for children over 6 years old (or grown-up children too!) and a fully-equipped kitchen and dining area, offers a great accommodation to a single family or friends. The front patio has sea views. The back patio opens into a vegetable/tree garden with barbecue and secluded relaxing retreat.\r\n\r\nIf you need MORE SPACE, additional bedrooms are available on the 1st floor. Please send inquiry.\r\nGuest access\r\n-Infinity Swimming Pool (51 m2), with a spectacular view to the sea (shared)\r\n-Outdoor, built-in stone BBQ with a gas cook top (shared)\r\n-Handcrafted marble dining table and marble benches, shaded by a beautiful stone/wood pergola\r\n-Outdoor Pool Shower (shared)\r\n-Outdoor whirlpool Tub (shared)\r\n-Large patio with sun beds, outdoor tables, and lounge chairs (shared)\r\n-Pebble swimming beach (with bars and restaurants) within 5-minute walk of the villa\r\n-Parking in nearby lot\r\n-Outdoor garden, landscaped with local stones and sea pebbles. You will discover local fruit trees, local Cretan herbs, blossoming flowers, local plants, lawns and an outside rock garden displaying a collection of herbs that prosper in the area.\r\n-Well-designed, relaxing, night lighting\r\n-Welcome basket complete with: (i) home-made jams, honey, olive oil, raki (a local, high-alcohol drink made from grapes in October) and cake/cookies (all home-made), as well as (ii) filter coffee, milk, juice, water, sugar, salt, pepper\r\n-Seasonal fresh fruit and vegetables (offered upon arrival and at different times throughout your visit)\r\n-Internet (wireless throughout the villa, both indoors and outdoors; also wired in each room)\r\n-Satellite radio and TV\r\n-Generator on property provides electricity even when national electricity is out\r\n-State-of-the-art private water treatment with active, continuous filtering of minerals and bacteria\r\n-Cleaning twice a week; additional cleaning as requested at an additional fee\r\n\r\nThe following services can be provided at an additional cost.\r\n-Pick-up and drop-off at harbor or airport (Sitia, Heraklion, Chania) Prices upon request – advance reservations required\r\n-Daily breakfast basket (milk, juice, bread, pastries, boiled eggs, local cheese selection) – 15 Euros per person\r\n-Groceries (list must be provided) – cost + 20% tip (minimum tip: 5 Euros)\r\n-Restaurant food delivery (menu provided) – cost + 20% tip (minimum tip: 5 Euros)\r\n-Private drive to local beaches and restaurants (depending on distance, 5 or 10 Euros per round-trip for 4 people; or a flat rate per day) – Guaranteed only when reserved at least 24 hours in advance\r\n-Longer daily trips to Sitia, Vai, Moni Toplou, Zakros, Xerokampos, Aghios Nikolaos, Elounda, Spinalonga, Festos, Matala, Knossos and archaeological museum in Heraklion can also be arranged – advance reservations are required.\r\nOther things to note\r\nHere are some extra services that you can have during your stay.\r\n\r\no Private Chef at the villa\r\no Wine tasting at the Villa\r\no Wine tasting experience of organic wine, with traditional Cretan food in the middle of the vineyard.\r\no Private trip with a Luxury Yacht\r\no Fishing trips\r\no Safari trips with 4x4\r\no Daily trips to beautiful beaches\r\no Yoga sunrise lessons, session at the beach\r\no Massage at the Villa\r\no Diving\r\no Grocery shopping\r\no Shisha getting prepared for you at the Villa\r\no E-bike trips\r\no Barbecue at the villa\r\no Latin party at the villa with professional dancers, and a bartender.\r\n\r\nDistance from Airports: (pickups can be arranged in advance)\r\n– Sitia Airport: 33 km\r\n– Heraklion Airport: 115 Km – 1h & 45min\r\n– Chania Airport: 261 Km – 3h & 45min\r\n\r\nAttractions within 1h drive:\r\n- Sitia Town (33 Km): a picturesque seaside town, situated on the northeastern side of Crete, a region still unspoiled by mass tourism with Archaeological and Folklore Museums, as well as a Venetian Fortress – Kazarma\r\n- The monastery of Toplou (43 Km)\r\n- The world famous palm forest of Vai (53 Km)\r\n- The Minoan palace of Kato Zakros (45 km)\r\n- Aghios Nikolaos (56 Km)\r\n\r\nAttractions within 2h drive:\r\n- The Minoan palace of Knossos (120 km, drive time ~2h)\r\n- The Minoan palace of Festos (west, drive time ~1h)\r\n- Water Park in Hersonissos (96 Km)\r\n- Cretaquarium – Thalassocosmos in Gournes (105 Km)\r\nRegistration number\r\n1040Κ13003386101', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 550, 55, 0, '2023-08-10 21:31:53', 1),
(17, 7, 'sadsasad', 'AS', 'sdaasd', 'asdasd', '629711_img_71006.webp,994196_img_169474.webp,822445_img_397457.webp,50698_img_296859.webp,474040_img_343949.webp,', 12, 1, 1, 'Stay at ground floor of luxurious Moonlight villa with infinity ...\r\n', 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, '2023-08-12 21:36:13', 1),
(18, 7, 'sadsasad', 'AS', 'sdaasd', 'asdasd', '629711_img_71006.webp,994196_img_169474.webp,822445_img_397457.webp,50698_img_296859.webp,474040_img_343949.webp,', 12, 1, 1, 'Stay at ground floor of luxurious Moonlight villa with infinity ...\r\n', 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, '2023-08-12 21:36:13', 1),
(19, 25, 'Villa Overlooking Abu Sir Pyramids1', 'EG', 'Abu sir, Ismailia11', '1111111111111111', '640816_img_367269.webp,276978_img_541122.webp,471567_img_263684.webp,316026_img_666588.webp,', 1, 1, 1, 'A fabulous, newly finished 4 bedroom villa and 2 bedroom guest house nestled in a large garden with swimming pool, all with breath taking views of the Abu Sir Pyramids.\r\nThis is a perfect place for a family and friends retreat but we are unable to host any large events such as birthday parties, engagements and weddings.\r\n', 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 111, 22, 0, '2023-08-10 20:55:39', 1);
INSERT INTO `units` (`u_id`, `u_user_id`, `u_title`, `u_country`, `u_city`, `u_address`, `u_images`, `u_host_count`, `u_room_count`, `u_path_count`, `u_description`, `u_wifi`, `u_garden`, `u_kitchen`, `u_tv`, `u_workspace`, `u_parking`, `u_pool`, `u_washer`, `u_air_conditioning`, `u_fans`, `u_refrigerator`, `u_one_night_cost`, `u_added_cost`, `u_category`, `u_create_at`, `u_statue`) VALUES
(20, 25, 'unit three test', 'OM', 'masqat', 'masqat masqat masqat', '666204_img_604367.webp,80012_img_811777.webp,186701_img_853213.webp,417624_img_674902.webp,231024_img_49633.webp,216747_img_586811.webp,', 6, 3, 5, 'Stay at ground floor of luxurious Moonlight villa with infinity pool & adjoining spa, with breath-taking views of sea, moon on water & sunset. BBQ, luscious garden, lounges, bicycles (free) & bike path. Large outdoor patios offer group fun & dining. Swim in rocky sea in front of villa or walk ~4 min to pebble beach. Long sand beach 2 km. Short walk to seaside restaurants, bars, super market, patisserie. Extra charge for private pool access. Concierge services available. COVID flexibility.\r\nThe space\r\nMoonlight Villas overlook the crystal-clear, blue waters of the Mediterranean sea- a beautiful rocky horizon ideal for swimming, sunbathing, surfing, and other water sports. Jupiter Views is the fully enclosed ground floor of the Galilean Moons villa - the upper floor has a separate entrance, patios and BBQ; only the pool is shared.\r\n\r\nSet in Koutsourás, a quiet, agricultural village in South-Eastern Crete, Moonlight Villa is a ~450 m2 brand new, private, waterfront estate that provides luxurious accommodation with spectacular views of the southern Crete landscape, moon and sunset. The property features an infinity pool (52 square meters) and adjoining whirlpool, from which guests can enjoy these stunning waterfront vistas. The pool is closed December 1- March 31.\r\n\r\nLocated only a few minutes’ walk from a pebble beach, bakery, and coffee shops, patisserie, super markets, bars, restaurants, and pharmacy, the villa combines romantic seclusion with proximity to modern comforts. Likewise, the property is located only a few km away from the tourist town of Makry Gialos, as well as traditional Cretan mountain villages with numerous authentic tavernas, bars and long sand beaches. The nearest airports are in Sitia (36 km) and Heraklion (114 km; private transportation can be arranged at a fee).\r\n\r\nThe villa is designed to accommodate the elite traveler with a desire for exceptional style and comfort. If offers private access to infinity swimming pool, whirlpool tub, pool bar, and back patio with barbecue, outdoor traditional stone dining, and vegetable and fruit tree garden. There is also free WiFi throughout the property, and showers with hydromassage. Fitted with high quality furnishings, top-quality mattresses and linen, and eco-friendly materials, fully-equipped kitchen with oven, refrigerator, toaster, dishwasher, microwave and coffee maker . Air conditioning, heating and TVs with satellite channels are also available throughout the property. The complex has its own water (private well and underground tank), electricity (solar panels, generator), central vacuum, central heating, and cooling that can be independently controlled in each room.\r\n\r\nMoonlight Villa sets the highest standards of luxury, beauty, elegance, ecological simplicity, and modern comforts. We will share our best-kept secrets about our hidden-treasure beaches, landscapes, hiking paths, culture, best restaurants, best shops and bicycle ride paths, as well as other attractions that may be of interest. Welcome to your seafront, romantic, luxury, and breathtaking home away from home!\r\n-------------------\r\nDETAILS ABOUT JUPITER VIEWS LAYOUT\r\nJupiter Views consists of two adjoining units: Callisto and Ganymede.\r\n- Callisto features a bright, comfortable living room equipped with a fireplace and corner sofa, an open-plan kitchen, and a glass dining table. The large, shaded verandas at the front and side of the villa allow for spectacular views of the sea, sky and moon. They are furnished with an outside eating area and comfy furniture to enjoy the sea and pool views. The villa’s wall art carries on the theme of moon, cosmos and sea throughout the complex.\r\n- Callisto has 4 bedrooms, two of which form a separate wing with a shared bathroom. The master bedroom (king-sized bed) has double doors leading to the front verandas, swimming pool and outdoors whirlpool tub. You need move only a few steps from your bed to find yourself engulfed in the smell of sea, jasmine, and other local aromatic plants. The master bedroom shares a handicapped-accessible bathroom with a second bedroom with a double bed, a foldable, wall-mounted bunk bed and a chair-bed that can accommodate up to 4 children or friends. With a separate entrance from the living area, a 3rd, front-facing bedroom features a single bed and a wall-mounted, foldable bunk bed, as well as its own private bathroom. There is a second master bedroom with a queen bed and en-suite bathroom.\r\n- Ganymede has a studio layout, with its private entrance off the pool terrace. The bedroom features a double bed. In combination with a corner couch in the cozy living room, as well as twin loft beds ideal for children over 6 years old (or grown-up children too!) and a fully-equipped kitchen and dining area, offers a great accommodation to a single family or friends. The front patio has sea views. The back patio opens into a vegetable/tree garden with barbecue and secluded relaxing retreat.\r\n\r\nIf you need MORE SPACE, additional bedrooms are available on the 1st floor. Please send inquiry.\r\nGuest access\r\n-Infinity Swimming Pool (51 m2), with a spectacular view to the sea (shared)\r\n-Outdoor, built-in stone BBQ with a gas cook top (shared)\r\n-Handcrafted marble dining table and marble benches, shaded by a beautiful stone/wood pergola\r\n-Outdoor Pool Shower (shared)\r\n-Outdoor whirlpool Tub (shared)\r\n-Large patio with sun beds, outdoor tables, and lounge chairs (shared)\r\n-Pebble swimming beach (with bars and restaurants) within 5-minute walk of the villa\r\n-Parking in nearby lot\r\n-Outdoor garden, landscaped with local stones and sea pebbles. You will discover local fruit trees, local Cretan herbs, blossoming flowers, local plants, lawns and an outside rock garden displaying a collection of herbs that prosper in the area.\r\n-Well-designed, relaxing, night lighting\r\n-Welcome basket complete with: (i) home-made jams, honey, olive oil, raki (a local, high-alcohol drink made from grapes in October) and cake/cookies (all home-made), as well as (ii) filter coffee, milk, juice, water, sugar, salt, pepper\r\n-Seasonal fresh fruit and vegetables (offered upon arrival and at different times throughout your visit)\r\n-Internet (wireless throughout the villa, both indoors and outdoors; also wired in each room)\r\n-Satellite radio and TV\r\n-Generator on property provides electricity even when national electricity is out\r\n-State-of-the-art private water treatment with active, continuous filtering of minerals and bacteria\r\n-Cleaning twice a week; additional cleaning as requested at an additional fee\r\n\r\nThe following services can be provided at an additional cost.\r\n-Pick-up and drop-off at harbor or airport (Sitia, Heraklion, Chania) Prices upon request – advance reservations required\r\n-Daily breakfast basket (milk, juice, bread, pastries, boiled eggs, local cheese selection) – 15 Euros per person\r\n-Groceries (list must be provided) – cost + 20% tip (minimum tip: 5 Euros)\r\n-Restaurant food delivery (menu provided) – cost + 20% tip (minimum tip: 5 Euros)\r\n-Private drive to local beaches and restaurants (depending on distance, 5 or 10 Euros per round-trip for 4 people; or a flat rate per day) – Guaranteed only when reserved at least 24 hours in advance\r\n-Longer daily trips to Sitia, Vai, Moni Toplou, Zakros, Xerokampos, Aghios Nikolaos, Elounda, Spinalonga, Festos, Matala, Knossos and archaeological museum in Heraklion can also be arranged – advance reservations are required.\r\nOther things to note\r\nHere are some extra services that you can have during your stay.\r\n\r\no Private Chef at the villa\r\no Wine tasting at the Villa\r\no Wine tasting experience of organic wine, with traditional Cretan food in the middle of the vineyard.\r\no Private trip with a Luxury Yacht\r\no Fishing trips\r\no Safari trips with 4x4\r\no Daily trips to beautiful beaches\r\no Yoga sunrise lessons, session at the beach\r\no Massage at the Villa\r\no Diving\r\no Grocery shopping\r\no Shisha getting prepared for you at the Villa\r\no E-bike trips\r\no Barbecue at the villa\r\no Latin party at the villa with professional dancers, and a bartender.\r\n\r\nDistance from Airports: (pickups can be arranged in advance)\r\n– Sitia Airport: 33 km\r\n– Heraklion Airport: 115 Km – 1h & 45min\r\n– Chania Airport: 261 Km – 3h & 45min\r\n\r\nAttractions within 1h drive:\r\n- Sitia Town (33 Km): a picturesque seaside town, situated on the northeastern side of Crete, a region still unspoiled by mass tourism with Archaeological and Folklore Museums, as well as a Venetian Fortress – Kazarma\r\n- The monastery of Toplou (43 Km)\r\n- The world famous palm forest of Vai (53 Km)\r\n- The Minoan palace of Kato Zakros (45 km)\r\n- Aghios Nikolaos (56 Km)\r\n\r\nAttractions within 2h drive:\r\n- The Minoan palace of Knossos (120 km, drive time ~2h)\r\n- The Minoan palace of Festos (west, drive time ~1h)\r\n- Water Park in Hersonissos (96 Km)\r\n- Cretaquarium – Thalassocosmos in Gournes (105 Km)\r\nRegistration number\r\n1040Κ13003386101', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 550, 55, 0, '2023-08-10 21:31:53', 1),
(21, 7, 'sadsasad', 'AS', 'sdaasd', 'asdasd', '629711_img_71006.webp,994196_img_169474.webp,822445_img_397457.webp,50698_img_296859.webp,474040_img_343949.webp,', 12, 1, 1, 'Stay at ground floor of luxurious Moonlight villa with infinity ...\r\n', 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, '2023-08-12 21:36:13', 1),
(22, 25, 'Villa Overlooking Abu Sir Pyramids1', 'EG', 'Abu sir, Ismailia11', '1111111111111111', '640816_img_367269.webp,276978_img_541122.webp,471567_img_263684.webp,316026_img_666588.webp,', 1, 1, 1, 'A fabulous, newly finished 4 bedroom villa and 2 bedroom guest house nestled in a large garden with swimming pool, all with breath taking views of the Abu Sir Pyramids.\r\nThis is a perfect place for a family and friends retreat but we are unable to host any large events such as birthday parties, engagements and weddings.\r\n', 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 111, 22, 0, '2023-08-10 20:55:39', 1),
(23, 25, 'unit three test', 'OM', 'masqat', 'masqat masqat masqat', '666204_img_604367.webp,80012_img_811777.webp,186701_img_853213.webp,417624_img_674902.webp,231024_img_49633.webp,216747_img_586811.webp,', 6, 3, 5, 'Stay at ground floor of luxurious Moonlight villa with infinity pool & adjoining spa, with breath-taking views of sea, moon on water & sunset. BBQ, luscious garden, lounges, bicycles (free) & bike path. Large outdoor patios offer group fun & dining. Swim in rocky sea in front of villa or walk ~4 min to pebble beach. Long sand beach 2 km. Short walk to seaside restaurants, bars, super market, patisserie. Extra charge for private pool access. Concierge services available. COVID flexibility.\r\nThe space\r\nMoonlight Villas overlook the crystal-clear, blue waters of the Mediterranean sea- a beautiful rocky horizon ideal for swimming, sunbathing, surfing, and other water sports. Jupiter Views is the fully enclosed ground floor of the Galilean Moons villa - the upper floor has a separate entrance, patios and BBQ; only the pool is shared.\r\n\r\nSet in Koutsourás, a quiet, agricultural village in South-Eastern Crete, Moonlight Villa is a ~450 m2 brand new, private, waterfront estate that provides luxurious accommodation with spectacular views of the southern Crete landscape, moon and sunset. The property features an infinity pool (52 square meters) and adjoining whirlpool, from which guests can enjoy these stunning waterfront vistas. The pool is closed December 1- March 31.\r\n\r\nLocated only a few minutes’ walk from a pebble beach, bakery, and coffee shops, patisserie, super markets, bars, restaurants, and pharmacy, the villa combines romantic seclusion with proximity to modern comforts. Likewise, the property is located only a few km away from the tourist town of Makry Gialos, as well as traditional Cretan mountain villages with numerous authentic tavernas, bars and long sand beaches. The nearest airports are in Sitia (36 km) and Heraklion (114 km; private transportation can be arranged at a fee).\r\n\r\nThe villa is designed to accommodate the elite traveler with a desire for exceptional style and comfort. If offers private access to infinity swimming pool, whirlpool tub, pool bar, and back patio with barbecue, outdoor traditional stone dining, and vegetable and fruit tree garden. There is also free WiFi throughout the property, and showers with hydromassage. Fitted with high quality furnishings, top-quality mattresses and linen, and eco-friendly materials, fully-equipped kitchen with oven, refrigerator, toaster, dishwasher, microwave and coffee maker . Air conditioning, heating and TVs with satellite channels are also available throughout the property. The complex has its own water (private well and underground tank), electricity (solar panels, generator), central vacuum, central heating, and cooling that can be independently controlled in each room.\r\n\r\nMoonlight Villa sets the highest standards of luxury, beauty, elegance, ecological simplicity, and modern comforts. We will share our best-kept secrets about our hidden-treasure beaches, landscapes, hiking paths, culture, best restaurants, best shops and bicycle ride paths, as well as other attractions that may be of interest. Welcome to your seafront, romantic, luxury, and breathtaking home away from home!\r\n-------------------\r\nDETAILS ABOUT JUPITER VIEWS LAYOUT\r\nJupiter Views consists of two adjoining units: Callisto and Ganymede.\r\n- Callisto features a bright, comfortable living room equipped with a fireplace and corner sofa, an open-plan kitchen, and a glass dining table. The large, shaded verandas at the front and side of the villa allow for spectacular views of the sea, sky and moon. They are furnished with an outside eating area and comfy furniture to enjoy the sea and pool views. The villa’s wall art carries on the theme of moon, cosmos and sea throughout the complex.\r\n- Callisto has 4 bedrooms, two of which form a separate wing with a shared bathroom. The master bedroom (king-sized bed) has double doors leading to the front verandas, swimming pool and outdoors whirlpool tub. You need move only a few steps from your bed to find yourself engulfed in the smell of sea, jasmine, and other local aromatic plants. The master bedroom shares a handicapped-accessible bathroom with a second bedroom with a double bed, a foldable, wall-mounted bunk bed and a chair-bed that can accommodate up to 4 children or friends. With a separate entrance from the living area, a 3rd, front-facing bedroom features a single bed and a wall-mounted, foldable bunk bed, as well as its own private bathroom. There is a second master bedroom with a queen bed and en-suite bathroom.\r\n- Ganymede has a studio layout, with its private entrance off the pool terrace. The bedroom features a double bed. In combination with a corner couch in the cozy living room, as well as twin loft beds ideal for children over 6 years old (or grown-up children too!) and a fully-equipped kitchen and dining area, offers a great accommodation to a single family or friends. The front patio has sea views. The back patio opens into a vegetable/tree garden with barbecue and secluded relaxing retreat.\r\n\r\nIf you need MORE SPACE, additional bedrooms are available on the 1st floor. Please send inquiry.\r\nGuest access\r\n-Infinity Swimming Pool (51 m2), with a spectacular view to the sea (shared)\r\n-Outdoor, built-in stone BBQ with a gas cook top (shared)\r\n-Handcrafted marble dining table and marble benches, shaded by a beautiful stone/wood pergola\r\n-Outdoor Pool Shower (shared)\r\n-Outdoor whirlpool Tub (shared)\r\n-Large patio with sun beds, outdoor tables, and lounge chairs (shared)\r\n-Pebble swimming beach (with bars and restaurants) within 5-minute walk of the villa\r\n-Parking in nearby lot\r\n-Outdoor garden, landscaped with local stones and sea pebbles. You will discover local fruit trees, local Cretan herbs, blossoming flowers, local plants, lawns and an outside rock garden displaying a collection of herbs that prosper in the area.\r\n-Well-designed, relaxing, night lighting\r\n-Welcome basket complete with: (i) home-made jams, honey, olive oil, raki (a local, high-alcohol drink made from grapes in October) and cake/cookies (all home-made), as well as (ii) filter coffee, milk, juice, water, sugar, salt, pepper\r\n-Seasonal fresh fruit and vegetables (offered upon arrival and at different times throughout your visit)\r\n-Internet (wireless throughout the villa, both indoors and outdoors; also wired in each room)\r\n-Satellite radio and TV\r\n-Generator on property provides electricity even when national electricity is out\r\n-State-of-the-art private water treatment with active, continuous filtering of minerals and bacteria\r\n-Cleaning twice a week; additional cleaning as requested at an additional fee\r\n\r\nThe following services can be provided at an additional cost.\r\n-Pick-up and drop-off at harbor or airport (Sitia, Heraklion, Chania) Prices upon request – advance reservations required\r\n-Daily breakfast basket (milk, juice, bread, pastries, boiled eggs, local cheese selection) – 15 Euros per person\r\n-Groceries (list must be provided) – cost + 20% tip (minimum tip: 5 Euros)\r\n-Restaurant food delivery (menu provided) – cost + 20% tip (minimum tip: 5 Euros)\r\n-Private drive to local beaches and restaurants (depending on distance, 5 or 10 Euros per round-trip for 4 people; or a flat rate per day) – Guaranteed only when reserved at least 24 hours in advance\r\n-Longer daily trips to Sitia, Vai, Moni Toplou, Zakros, Xerokampos, Aghios Nikolaos, Elounda, Spinalonga, Festos, Matala, Knossos and archaeological museum in Heraklion can also be arranged – advance reservations are required.\r\nOther things to note\r\nHere are some extra services that you can have during your stay.\r\n\r\no Private Chef at the villa\r\no Wine tasting at the Villa\r\no Wine tasting experience of organic wine, with traditional Cretan food in the middle of the vineyard.\r\no Private trip with a Luxury Yacht\r\no Fishing trips\r\no Safari trips with 4x4\r\no Daily trips to beautiful beaches\r\no Yoga sunrise lessons, session at the beach\r\no Massage at the Villa\r\no Diving\r\no Grocery shopping\r\no Shisha getting prepared for you at the Villa\r\no E-bike trips\r\no Barbecue at the villa\r\no Latin party at the villa with professional dancers, and a bartender.\r\n\r\nDistance from Airports: (pickups can be arranged in advance)\r\n– Sitia Airport: 33 km\r\n– Heraklion Airport: 115 Km – 1h & 45min\r\n– Chania Airport: 261 Km – 3h & 45min\r\n\r\nAttractions within 1h drive:\r\n- Sitia Town (33 Km): a picturesque seaside town, situated on the northeastern side of Crete, a region still unspoiled by mass tourism with Archaeological and Folklore Museums, as well as a Venetian Fortress – Kazarma\r\n- The monastery of Toplou (43 Km)\r\n- The world famous palm forest of Vai (53 Km)\r\n- The Minoan palace of Kato Zakros (45 km)\r\n- Aghios Nikolaos (56 Km)\r\n\r\nAttractions within 2h drive:\r\n- The Minoan palace of Knossos (120 km, drive time ~2h)\r\n- The Minoan palace of Festos (west, drive time ~1h)\r\n- Water Park in Hersonissos (96 Km)\r\n- Cretaquarium – Thalassocosmos in Gournes (105 Km)\r\nRegistration number\r\n1040Κ13003386101', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 550, 55, 0, '2023-08-10 21:31:53', 1),
(24, 25, 'Villa Overlooking Abu Sir Pyramids1', 'EG', 'Abu sir, Ismailia11', '1111111111111111', '640816_img_367269.webp,276978_img_541122.webp,471567_img_263684.webp,316026_img_666588.webp,', 1, 1, 1, 'A fabulous, newly finished 4 bedroom villa and 2 bedroom guest house nestled in a large garden with swimming pool, all with breath taking views of the Abu Sir Pyramids.\r\nThis is a perfect place for a family and friends retreat but we are unable to host any large events such as birthday parties, engagements and weddings.\r\n', 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 111, 22, 0, '2023-08-10 20:55:39', 1),
(25, 25, 'unit three test', 'OM', 'masqat', 'masqat masqat masqat', '666204_img_604367.webp,80012_img_811777.webp,186701_img_853213.webp,417624_img_674902.webp,231024_img_49633.webp,216747_img_586811.webp,', 6, 3, 5, 'Stay at ground floor of luxurious Moonlight villa with infinity pool & adjoining spa, with breath-taking views of sea, moon on water & sunset. BBQ, luscious garden, lounges, bicycles (free) & bike path. Large outdoor patios offer group fun & dining. Swim in rocky sea in front of villa or walk ~4 min to pebble beach. Long sand beach 2 km. Short walk to seaside restaurants, bars, super market, patisserie. Extra charge for private pool access. Concierge services available. COVID flexibility.\r\nThe space\r\nMoonlight Villas overlook the crystal-clear, blue waters of the Mediterranean sea- a beautiful rocky horizon ideal for swimming, sunbathing, surfing, and other water sports. Jupiter Views is the fully enclosed ground floor of the Galilean Moons villa - the upper floor has a separate entrance, patios and BBQ; only the pool is shared.\r\n\r\nSet in Koutsourás, a quiet, agricultural village in South-Eastern Crete, Moonlight Villa is a ~450 m2 brand new, private, waterfront estate that provides luxurious accommodation with spectacular views of the southern Crete landscape, moon and sunset. The property features an infinity pool (52 square meters) and adjoining whirlpool, from which guests can enjoy these stunning waterfront vistas. The pool is closed December 1- March 31.\r\n\r\nLocated only a few minutes’ walk from a pebble beach, bakery, and coffee shops, patisserie, super markets, bars, restaurants, and pharmacy, the villa combines romantic seclusion with proximity to modern comforts. Likewise, the property is located only a few km away from the tourist town of Makry Gialos, as well as traditional Cretan mountain villages with numerous authentic tavernas, bars and long sand beaches. The nearest airports are in Sitia (36 km) and Heraklion (114 km; private transportation can be arranged at a fee).\r\n\r\nThe villa is designed to accommodate the elite traveler with a desire for exceptional style and comfort. If offers private access to infinity swimming pool, whirlpool tub, pool bar, and back patio with barbecue, outdoor traditional stone dining, and vegetable and fruit tree garden. There is also free WiFi throughout the property, and showers with hydromassage. Fitted with high quality furnishings, top-quality mattresses and linen, and eco-friendly materials, fully-equipped kitchen with oven, refrigerator, toaster, dishwasher, microwave and coffee maker . Air conditioning, heating and TVs with satellite channels are also available throughout the property. The complex has its own water (private well and underground tank), electricity (solar panels, generator), central vacuum, central heating, and cooling that can be independently controlled in each room.\r\n\r\nMoonlight Villa sets the highest standards of luxury, beauty, elegance, ecological simplicity, and modern comforts. We will share our best-kept secrets about our hidden-treasure beaches, landscapes, hiking paths, culture, best restaurants, best shops and bicycle ride paths, as well as other attractions that may be of interest. Welcome to your seafront, romantic, luxury, and breathtaking home away from home!\r\n-------------------\r\nDETAILS ABOUT JUPITER VIEWS LAYOUT\r\nJupiter Views consists of two adjoining units: Callisto and Ganymede.\r\n- Callisto features a bright, comfortable living room equipped with a fireplace and corner sofa, an open-plan kitchen, and a glass dining table. The large, shaded verandas at the front and side of the villa allow for spectacular views of the sea, sky and moon. They are furnished with an outside eating area and comfy furniture to enjoy the sea and pool views. The villa’s wall art carries on the theme of moon, cosmos and sea throughout the complex.\r\n- Callisto has 4 bedrooms, two of which form a separate wing with a shared bathroom. The master bedroom (king-sized bed) has double doors leading to the front verandas, swimming pool and outdoors whirlpool tub. You need move only a few steps from your bed to find yourself engulfed in the smell of sea, jasmine, and other local aromatic plants. The master bedroom shares a handicapped-accessible bathroom with a second bedroom with a double bed, a foldable, wall-mounted bunk bed and a chair-bed that can accommodate up to 4 children or friends. With a separate entrance from the living area, a 3rd, front-facing bedroom features a single bed and a wall-mounted, foldable bunk bed, as well as its own private bathroom. There is a second master bedroom with a queen bed and en-suite bathroom.\r\n- Ganymede has a studio layout, with its private entrance off the pool terrace. The bedroom features a double bed. In combination with a corner couch in the cozy living room, as well as twin loft beds ideal for children over 6 years old (or grown-up children too!) and a fully-equipped kitchen and dining area, offers a great accommodation to a single family or friends. The front patio has sea views. The back patio opens into a vegetable/tree garden with barbecue and secluded relaxing retreat.\r\n\r\nIf you need MORE SPACE, additional bedrooms are available on the 1st floor. Please send inquiry.\r\nGuest access\r\n-Infinity Swimming Pool (51 m2), with a spectacular view to the sea (shared)\r\n-Outdoor, built-in stone BBQ with a gas cook top (shared)\r\n-Handcrafted marble dining table and marble benches, shaded by a beautiful stone/wood pergola\r\n-Outdoor Pool Shower (shared)\r\n-Outdoor whirlpool Tub (shared)\r\n-Large patio with sun beds, outdoor tables, and lounge chairs (shared)\r\n-Pebble swimming beach (with bars and restaurants) within 5-minute walk of the villa\r\n-Parking in nearby lot\r\n-Outdoor garden, landscaped with local stones and sea pebbles. You will discover local fruit trees, local Cretan herbs, blossoming flowers, local plants, lawns and an outside rock garden displaying a collection of herbs that prosper in the area.\r\n-Well-designed, relaxing, night lighting\r\n-Welcome basket complete with: (i) home-made jams, honey, olive oil, raki (a local, high-alcohol drink made from grapes in October) and cake/cookies (all home-made), as well as (ii) filter coffee, milk, juice, water, sugar, salt, pepper\r\n-Seasonal fresh fruit and vegetables (offered upon arrival and at different times throughout your visit)\r\n-Internet (wireless throughout the villa, both indoors and outdoors; also wired in each room)\r\n-Satellite radio and TV\r\n-Generator on property provides electricity even when national electricity is out\r\n-State-of-the-art private water treatment with active, continuous filtering of minerals and bacteria\r\n-Cleaning twice a week; additional cleaning as requested at an additional fee\r\n\r\nThe following services can be provided at an additional cost.\r\n-Pick-up and drop-off at harbor or airport (Sitia, Heraklion, Chania) Prices upon request – advance reservations required\r\n-Daily breakfast basket (milk, juice, bread, pastries, boiled eggs, local cheese selection) – 15 Euros per person\r\n-Groceries (list must be provided) – cost + 20% tip (minimum tip: 5 Euros)\r\n-Restaurant food delivery (menu provided) – cost + 20% tip (minimum tip: 5 Euros)\r\n-Private drive to local beaches and restaurants (depending on distance, 5 or 10 Euros per round-trip for 4 people; or a flat rate per day) – Guaranteed only when reserved at least 24 hours in advance\r\n-Longer daily trips to Sitia, Vai, Moni Toplou, Zakros, Xerokampos, Aghios Nikolaos, Elounda, Spinalonga, Festos, Matala, Knossos and archaeological museum in Heraklion can also be arranged – advance reservations are required.\r\nOther things to note\r\nHere are some extra services that you can have during your stay.\r\n\r\no Private Chef at the villa\r\no Wine tasting at the Villa\r\no Wine tasting experience of organic wine, with traditional Cretan food in the middle of the vineyard.\r\no Private trip with a Luxury Yacht\r\no Fishing trips\r\no Safari trips with 4x4\r\no Daily trips to beautiful beaches\r\no Yoga sunrise lessons, session at the beach\r\no Massage at the Villa\r\no Diving\r\no Grocery shopping\r\no Shisha getting prepared for you at the Villa\r\no E-bike trips\r\no Barbecue at the villa\r\no Latin party at the villa with professional dancers, and a bartender.\r\n\r\nDistance from Airports: (pickups can be arranged in advance)\r\n– Sitia Airport: 33 km\r\n– Heraklion Airport: 115 Km – 1h & 45min\r\n– Chania Airport: 261 Km – 3h & 45min\r\n\r\nAttractions within 1h drive:\r\n- Sitia Town (33 Km): a picturesque seaside town, situated on the northeastern side of Crete, a region still unspoiled by mass tourism with Archaeological and Folklore Museums, as well as a Venetian Fortress – Kazarma\r\n- The monastery of Toplou (43 Km)\r\n- The world famous palm forest of Vai (53 Km)\r\n- The Minoan palace of Kato Zakros (45 km)\r\n- Aghios Nikolaos (56 Km)\r\n\r\nAttractions within 2h drive:\r\n- The Minoan palace of Knossos (120 km, drive time ~2h)\r\n- The Minoan palace of Festos (west, drive time ~1h)\r\n- Water Park in Hersonissos (96 Km)\r\n- Cretaquarium – Thalassocosmos in Gournes (105 Km)\r\nRegistration number\r\n1040Κ13003386101', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 550, 55, 0, '2023-08-10 21:31:53', 1),
(26, 7, 'sadsasad', 'AS', 'sdaasd', 'asdasd', '629711_img_71006.webp,994196_img_169474.webp,822445_img_397457.webp,50698_img_296859.webp,474040_img_343949.webp,', 12, 1, 1, 'Stay at ground floor of luxurious Moonlight villa with infinity ...\r\n', 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, '2023-08-12 21:36:13', 1),
(27, 25, 'Villa Overlooking Abu Sir Pyramids1', 'EG', 'Abu sir, Ismailia11', '1111111111111111', '640816_img_367269.webp,276978_img_541122.webp,471567_img_263684.webp,316026_img_666588.webp,', 1, 1, 1, 'A fabulous, newly finished 4 bedroom villa and 2 bedroom guest house nestled in a large garden with swimming pool, all with breath taking views of the Abu Sir Pyramids.\r\nThis is a perfect place for a family and friends retreat but we are unable to host any large events such as birthday parties, engagements and weddings.\r\n', 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 111, 22, 0, '2023-08-10 20:55:39', 1),
(28, 25, 'unit three test', 'OM', 'masqat', 'masqat masqat masqat', '666204_img_604367.webp,80012_img_811777.webp,186701_img_853213.webp,417624_img_674902.webp,231024_img_49633.webp,216747_img_586811.webp,', 6, 3, 5, 'Stay at ground floor of luxurious Moonlight villa with infinity pool & adjoining spa, with breath-taking views of sea, moon on water & sunset. BBQ, luscious garden, lounges, bicycles (free) & bike path. Large outdoor patios offer group fun & dining. Swim in rocky sea in front of villa or walk ~4 min to pebble beach. Long sand beach 2 km. Short walk to seaside restaurants, bars, super market, patisserie. Extra charge for private pool access. Concierge services available. COVID flexibility.\r\nThe space\r\nMoonlight Villas overlook the crystal-clear, blue waters of the Mediterranean sea- a beautiful rocky horizon ideal for swimming, sunbathing, surfing, and other water sports. Jupiter Views is the fully enclosed ground floor of the Galilean Moons villa - the upper floor has a separate entrance, patios and BBQ; only the pool is shared.\r\n\r\nSet in Koutsourás, a quiet, agricultural village in South-Eastern Crete, Moonlight Villa is a ~450 m2 brand new, private, waterfront estate that provides luxurious accommodation with spectacular views of the southern Crete landscape, moon and sunset. The property features an infinity pool (52 square meters) and adjoining whirlpool, from which guests can enjoy these stunning waterfront vistas. The pool is closed December 1- March 31.\r\n\r\nLocated only a few minutes’ walk from a pebble beach, bakery, and coffee shops, patisserie, super markets, bars, restaurants, and pharmacy, the villa combines romantic seclusion with proximity to modern comforts. Likewise, the property is located only a few km away from the tourist town of Makry Gialos, as well as traditional Cretan mountain villages with numerous authentic tavernas, bars and long sand beaches. The nearest airports are in Sitia (36 km) and Heraklion (114 km; private transportation can be arranged at a fee).\r\n\r\nThe villa is designed to accommodate the elite traveler with a desire for exceptional style and comfort. If offers private access to infinity swimming pool, whirlpool tub, pool bar, and back patio with barbecue, outdoor traditional stone dining, and vegetable and fruit tree garden. There is also free WiFi throughout the property, and showers with hydromassage. Fitted with high quality furnishings, top-quality mattresses and linen, and eco-friendly materials, fully-equipped kitchen with oven, refrigerator, toaster, dishwasher, microwave and coffee maker . Air conditioning, heating and TVs with satellite channels are also available throughout the property. The complex has its own water (private well and underground tank), electricity (solar panels, generator), central vacuum, central heating, and cooling that can be independently controlled in each room.\r\n\r\nMoonlight Villa sets the highest standards of luxury, beauty, elegance, ecological simplicity, and modern comforts. We will share our best-kept secrets about our hidden-treasure beaches, landscapes, hiking paths, culture, best restaurants, best shops and bicycle ride paths, as well as other attractions that may be of interest. Welcome to your seafront, romantic, luxury, and breathtaking home away from home!\r\n-------------------\r\nDETAILS ABOUT JUPITER VIEWS LAYOUT\r\nJupiter Views consists of two adjoining units: Callisto and Ganymede.\r\n- Callisto features a bright, comfortable living room equipped with a fireplace and corner sofa, an open-plan kitchen, and a glass dining table. The large, shaded verandas at the front and side of the villa allow for spectacular views of the sea, sky and moon. They are furnished with an outside eating area and comfy furniture to enjoy the sea and pool views. The villa’s wall art carries on the theme of moon, cosmos and sea throughout the complex.\r\n- Callisto has 4 bedrooms, two of which form a separate wing with a shared bathroom. The master bedroom (king-sized bed) has double doors leading to the front verandas, swimming pool and outdoors whirlpool tub. You need move only a few steps from your bed to find yourself engulfed in the smell of sea, jasmine, and other local aromatic plants. The master bedroom shares a handicapped-accessible bathroom with a second bedroom with a double bed, a foldable, wall-mounted bunk bed and a chair-bed that can accommodate up to 4 children or friends. With a separate entrance from the living area, a 3rd, front-facing bedroom features a single bed and a wall-mounted, foldable bunk bed, as well as its own private bathroom. There is a second master bedroom with a queen bed and en-suite bathroom.\r\n- Ganymede has a studio layout, with its private entrance off the pool terrace. The bedroom features a double bed. In combination with a corner couch in the cozy living room, as well as twin loft beds ideal for children over 6 years old (or grown-up children too!) and a fully-equipped kitchen and dining area, offers a great accommodation to a single family or friends. The front patio has sea views. The back patio opens into a vegetable/tree garden with barbecue and secluded relaxing retreat.\r\n\r\nIf you need MORE SPACE, additional bedrooms are available on the 1st floor. Please send inquiry.\r\nGuest access\r\n-Infinity Swimming Pool (51 m2), with a spectacular view to the sea (shared)\r\n-Outdoor, built-in stone BBQ with a gas cook top (shared)\r\n-Handcrafted marble dining table and marble benches, shaded by a beautiful stone/wood pergola\r\n-Outdoor Pool Shower (shared)\r\n-Outdoor whirlpool Tub (shared)\r\n-Large patio with sun beds, outdoor tables, and lounge chairs (shared)\r\n-Pebble swimming beach (with bars and restaurants) within 5-minute walk of the villa\r\n-Parking in nearby lot\r\n-Outdoor garden, landscaped with local stones and sea pebbles. You will discover local fruit trees, local Cretan herbs, blossoming flowers, local plants, lawns and an outside rock garden displaying a collection of herbs that prosper in the area.\r\n-Well-designed, relaxing, night lighting\r\n-Welcome basket complete with: (i) home-made jams, honey, olive oil, raki (a local, high-alcohol drink made from grapes in October) and cake/cookies (all home-made), as well as (ii) filter coffee, milk, juice, water, sugar, salt, pepper\r\n-Seasonal fresh fruit and vegetables (offered upon arrival and at different times throughout your visit)\r\n-Internet (wireless throughout the villa, both indoors and outdoors; also wired in each room)\r\n-Satellite radio and TV\r\n-Generator on property provides electricity even when national electricity is out\r\n-State-of-the-art private water treatment with active, continuous filtering of minerals and bacteria\r\n-Cleaning twice a week; additional cleaning as requested at an additional fee\r\n\r\nThe following services can be provided at an additional cost.\r\n-Pick-up and drop-off at harbor or airport (Sitia, Heraklion, Chania) Prices upon request – advance reservations required\r\n-Daily breakfast basket (milk, juice, bread, pastries, boiled eggs, local cheese selection) – 15 Euros per person\r\n-Groceries (list must be provided) – cost + 20% tip (minimum tip: 5 Euros)\r\n-Restaurant food delivery (menu provided) – cost + 20% tip (minimum tip: 5 Euros)\r\n-Private drive to local beaches and restaurants (depending on distance, 5 or 10 Euros per round-trip for 4 people; or a flat rate per day) – Guaranteed only when reserved at least 24 hours in advance\r\n-Longer daily trips to Sitia, Vai, Moni Toplou, Zakros, Xerokampos, Aghios Nikolaos, Elounda, Spinalonga, Festos, Matala, Knossos and archaeological museum in Heraklion can also be arranged – advance reservations are required.\r\nOther things to note\r\nHere are some extra services that you can have during your stay.\r\n\r\no Private Chef at the villa\r\no Wine tasting at the Villa\r\no Wine tasting experience of organic wine, with traditional Cretan food in the middle of the vineyard.\r\no Private trip with a Luxury Yacht\r\no Fishing trips\r\no Safari trips with 4x4\r\no Daily trips to beautiful beaches\r\no Yoga sunrise lessons, session at the beach\r\no Massage at the Villa\r\no Diving\r\no Grocery shopping\r\no Shisha getting prepared for you at the Villa\r\no E-bike trips\r\no Barbecue at the villa\r\no Latin party at the villa with professional dancers, and a bartender.\r\n\r\nDistance from Airports: (pickups can be arranged in advance)\r\n– Sitia Airport: 33 km\r\n– Heraklion Airport: 115 Km – 1h & 45min\r\n– Chania Airport: 261 Km – 3h & 45min\r\n\r\nAttractions within 1h drive:\r\n- Sitia Town (33 Km): a picturesque seaside town, situated on the northeastern side of Crete, a region still unspoiled by mass tourism with Archaeological and Folklore Museums, as well as a Venetian Fortress – Kazarma\r\n- The monastery of Toplou (43 Km)\r\n- The world famous palm forest of Vai (53 Km)\r\n- The Minoan palace of Kato Zakros (45 km)\r\n- Aghios Nikolaos (56 Km)\r\n\r\nAttractions within 2h drive:\r\n- The Minoan palace of Knossos (120 km, drive time ~2h)\r\n- The Minoan palace of Festos (west, drive time ~1h)\r\n- Water Park in Hersonissos (96 Km)\r\n- Cretaquarium – Thalassocosmos in Gournes (105 Km)\r\nRegistration number\r\n1040Κ13003386101', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 550, 55, 0, '2023-08-10 21:31:53', 1),
(29, 7, 'sadsasad', 'AS', 'sdaasd', 'asdasd', '629711_img_71006.webp,994196_img_169474.webp,822445_img_397457.webp,50698_img_296859.webp,474040_img_343949.webp,', 12, 1, 1, 'Stay at ground floor of luxurious Moonlight villa with infinity ...\n', 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 1, 1, 5, '2023-08-15 20:07:59', 1),
(30, 25, 'Villa Overlooking Abu Sir Pyramids1', 'EG', 'Abu sir, Ismailia11', '1111111111111111', '640816_img_367269.webp,276978_img_541122.webp,471567_img_263684.webp,316026_img_666588.webp,', 1, 1, 1, 'A fabulous, newly finished 4 bedroom villa and 2 bedroom guest house nestled in a large garden with swimming pool, all with breath taking views of the Abu Sir Pyramids.\r\nThis is a perfect place for a family and friends retreat but we are unable to host any large events such as birthday parties, engagements and weddings.\r\n', 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 111, 22, 0, '2023-08-10 20:55:39', 1),
(31, 7, 'Villa Borghese Luxury One BR apartment', 'IT', 'Rome, Lazio, Italy', 'Rome, Lazio, Italy', '434182_img_382046.webp,139882_img_108856.webp,736496_img_392816.webp,300792_img_428845.webp,', 10, 8, 5, 'On a magnificent street in Rome, this 1-bedroom apartment feels like a slice of serenity tucked away from the chatter of the city. Enormous arched windows offer spectacular views as well as allow sunlight to stream inside, illuminating the decorator\'s magnificent décor.  Spend an afternoon meandering the historic streets before stopping for a midday espresso. There are plenty of mouth-watering restaurants around the corner.  \n', 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 650, 60, 1, '2023-08-15 19:57:15', 1),
(32, 7, 'New Unit For Testing', 'FR', 'Paris', 'unit Full Address', '322230_img_396092.webp,655314_img_679204.webp,575221_img_597236.webp,387982_img_908275.webp,847295_img_812057.webp,184155_img_456335.webp,147851_img_57536.jpg,707238_img_151362.webp,245544_img_148173.webp,935314_img_708827.webp,', 15, 7, 5, 'On a magnificent street in Rome, this 1-bedroom apartment feels like a slice of serenity tucked away from the chatter of the city. Enormous arched windows offer spectacular views as well as allow sunlight to stream inside, illuminating the decorator\'s magnificent décor. Spend an afternoon meandering the historic streets before stopping for a midday espresso. There are plenty of mouth-watering restaurants around the corner.\n', 1, 0, 1, 1, 1, 0, 0, 1, 1, 1, 0, 750, 80, 4, '2023-08-18 21:24:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int NOT NULL,
  `u_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `u_email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `u_avatar` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `u_mobile` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `u_country` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `u_city` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `u_password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `u_type` tinyint(1) NOT NULL COMMENT '1=>customer,2=>seller',
  `u_admin` tinyint(1) NOT NULL DEFAULT '0',
  `u_lang` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'EN',
  `u_joindate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_statue` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_email`, `u_avatar`, `u_mobile`, `u_country`, `u_city`, `u_password`, `u_type`, `u_admin`, `u_lang`, `u_joindate`, `u_statue`) VALUES
(7, 'Admin', 'kasho.mobi1@gmail.com', '435776_img_928652.jpg', '01097693927', 'EG', 'Ismailia', '$P$BfjG4Zo3.Vj0PnvySozy/jS0chNMKO1', 2, 1, 'EN', '2023-03-04 18:00:48', 1),
(25, 'User One', 'test@test.com', '418852_img_160388.jpg', '01202508397', 'EG', 'Ismailia', '$P$Bu.CXK5WRMMmxSMN6SjJtYVxxVzbVU.', 2, 0, 'EN', '2023-08-07 20:30:43', 1),
(26, 'zein', 'Zeinsalloumi@gmail.com', NULL, '+4917687093018', 'DE', 'Frankfurt am Main (Sachsenhausen)', '$P$By.YcBLWIYs1Hjo2DWbpLP30AHhq27.', 2, 1, 'EN', '2023-08-09 18:04:11', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`l_id`),
  ADD KEY `l_user_id` (`l_user_id`),
  ADD KEY `l_unit_id` (`l_unit_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `r_unit_id` (`r_unit_id`),
  ADD KEY `r_user_id` (`r_user_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_category` (`u_category`),
  ADD KEY `u_user_id` (`u_user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `l_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `l_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `r_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `u_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`l_user_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`l_unit_id`) REFERENCES `units` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`r_unit_id`) REFERENCES `units` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`r_user_id`) REFERENCES `users` (`u_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_ibfk_1` FOREIGN KEY (`u_category`) REFERENCES `categories` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `units_ibfk_2` FOREIGN KEY (`u_user_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
