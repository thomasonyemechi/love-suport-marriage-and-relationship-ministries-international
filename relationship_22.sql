-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 09:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relationship_22`
--

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sum_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `on_del` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `tag`, `description`, `photo`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Single, Single Parents & Lovers Dinner', 'singles, dating, love', 'Are you Single or a Single parent? Or you want to make new friends?\r\n\r\nThen Join us for this date night dinner!. Lively discussions amidst sumptuous dinner, drinks and games. A perfect way to make new friends and definitely expand your network.. Silver membership is required or 20,000 Naira at the door. This guarantees your Silver membership, and full participation.', 'single-single-parents-lovers-dinner1659953285.jpg', 1660089600, 1, '2022-08-08 09:08:05', '2022-08-08 09:08:05'),
(2, 'Love Feast (SZN III) Love Feast (SZN III)', 'singles, dating, love', 'The \"Love Feast\", powered by Club Edify in conjunction with #TTCL, is an exclusive event designed to deliver a wholesome love-themed social experience to young unmarried persons. We have curated clean and entertaining music, games, discussions and a Q&A talkshow called \"Unscripted\", all for your enjoyment. If you\'re looking for a place to relax with bae/boo or a place to hangout with other young people and have clean fun, then this event is for you. We would also have the opportunity to show love to each other by sharing gifts and having some purposeful mingling 😉. Please come along with a gift for someone.\r\n\r\nAlso, please send us your Relationship questions anonymously here: https://gdpd.xyz/ttcl\r\n\r\nEvent Date: Sunday, August 28th\r\n\r\nEvent Time: 4pm prompt\r\n\r\nEvent Venue: 41A, Adeyemo Akapo Street, Omole phase 1 estate, Ikeja, Lagos.\r\n\r\nDress code: Native attire\r\n\r\n(The best dressed would be recognised)\r\n\r\nRefreshments would be served.\r\n\r\nClub Edify is a community of righteous billionaires — young entrepreneurs who enjoy building scalable businesses, making money and having clean fun. Our creed can be found in Psalm 112.\r\n\r\n#TTCL is a platform that supports young unmarried persons by addressing love and relationship issues, primarily through media and periodic love-themed events.\r\n\r\nBoth platforms are youth expressions of EdifyCity Church, the home for entrepreneurs.\r\n\r\nFor more enquiries, please feel free to call, text or DM via WhatsApp: 08097774445.\r\n\r\nThank you ❤️', 'love-feast-szn-iii1659953413.png', 1665619200, 1, '2022-08-08 09:10:13', '2022-08-08 09:10:13'),
(3, 'YOUTH & SINGLES CONNECT-VALENTINE SPECIAL EDITION', 'singles, dating, love', 'We are thrilled to invite you to the YOUTH & SINGLES CONNECT 2022 (Valentine Special Edition) on Saturday, February 26th, 2022\r\n\r\nBOAT CRUISE (music onboard), SPEED DATING, DINING BUFFET (chicken/Turkey, Chips & Soft Drinks), DATING GAMES, GIFTS + Lucky tickets.\r\n\r\nTICKET: SINGLE ₦10,000, COUPLES ₦19,000\r\n\r\nRegister: youthandsinglesconnect.eventbrite.com\r\n\r\nStart Time: 2:PM\r\n\r\nVenue: Kingfisher Africa 1, Wole Olateju Crescent, Lekki Phase\r\n\r\nIn addition to networking with fellow participants, you\'ll hear service announcements from our partners and sponsors and get direct access to the entire team -- they\'d love to chat with you!\r\n\r\nEnquiries call/WhatsApp: 08134532846, 07043332473\r\n\r\nCan\'t wait to see you there!\r\n\r\nCheers,\r\n\r\nThe Youth and Singles Connect Team', 'youth-singles-connect-valentine-special-edition1659953509.png', 1644796800, 1, '2022-08-08 09:11:49', '2022-08-08 09:11:49'),
(4, 'Boat Cruise to ilashe beach, Lekki Lagos - 2022', 'singles, dating, love', 'Ilashe Beach boasts of a Variety of Private Resorts, offering entertainment facilities and activities suitable for; Team Building/Bonding activities, Wedding receptions, honeymoons, Reunions, Video/Photo shoots and much more..\r\n\r\nFamily Boat Cruise & Picnic at ilashe beach, Lekki Lagos 2022﻿\r\n\r\nReoccurs Every weekend in 2022 ..\r\n\r\nDates:\r\n\r\nEvery Weekend in 2022\r\n\r\n** Choose Your Date.. and make Reservations !!\r\n\r\nWe also Offer;\r\n\r\n**Private Cruises on all days; Cruise to ilashe or simply have a Dinner Boat Cruise in Lekki, Lagos.\r\n\r\n** Choose your own date with your Group of 10 to Celebrate Birthdays, Reunions, May Day, Team Building Activities, Children\'s Day or any special occasion.\r\n\r\nTiming:\r\n\r\n12noon to 7pm (Prompt)\r\n\r\nTakeoff Point:\r\n\r\nAddax Jetty by Orientals Hotel, Lekki Toll Gate.\r\n\r\nIlashe Retreat Cruise Package Includes:\r\n\r\nBoat Cruise to and from Ilashe Island.\r\n\r\n3-course Meal and Drinks.\r\n\r\nVolleyball\r\n\r\nBoard Games\r\n\r\nBouncy Castle for Kids**\r\n\r\nPaintball**\r\n\r\nSwimming\r\n\r\nVideo Games\r\n\r\nMassages\r\n\r\nSnooker\r\n\r\n5 Aside Football\r\n\r\nHorseback Riding\r\n\r\nQuad bike (Beach Bike Riding)\r\n\r\nIlashe Beach Tour with Guide and Coconut Drinks\r\n\r\nNetworking Opportunity/Business Branding\r\n\r\nPRICING:\r\n\r\nSingle Ticket:. N 40,000\r\n\r\nCouples Ticket: N 75,000\r\n\r\nTable of 10: N 350,000\r\n\r\nFor Reservations & Inquiries:\r\n\r\nAde Martins;\r\n\r\nCall/WhatsApp: 08087028641\r\n\r\nBooking Resort: De kararaa Resorts, ilashe island. Lagos\r\n\r\nPayments online\r\n\r\nhttps://paystack.com/pay/cruisetoilashe', 'boat-cruise-to-ilashe-beach-lekki-lagos-20221659953593.png', 1673481600, 1, '2022-08-08 09:13:13', '2022-08-08 09:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_31_013913_create_newsletters_table', 1),
(6, '2022_06_06_111813_create_contacts_table', 1),
(7, '2022_06_09_084107_create_testimonies_table', 1),
(8, '2022_06_09_141055_create_stores_table', 1),
(9, '2022_06_23_163334_create_billings_table', 1),
(10, '2022_06_23_164925_create_carts_table', 1),
(11, '2022_06_23_164946_create_scarts_table', 1),
(12, '2022_07_08_173706_create_events_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scarts`
--

CREATE TABLE `scarts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `billing_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `more` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `snippet` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `on_del` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `slug`, `item`, `price`, `description`, `more`, `type`, `photo`, `snippet`, `url`, `main_url`, `on_del`, `status`, `created_at`, `updated_at`) VALUES
(1, 'the-all-or-nothing-marriage-how-the-best-marriages-work-by-eli-j-finkel', 'The All-or-Nothing Marriage: How the Best Marriages Work by Eli J. Finkel', 28, 'By doing a deep dive on how marriage functions from 1620 to the present, this book looks at how our relationships have evolved alongside society and offers data-driven \"lovehacks\" on how to get the most out of yours today. It\'s a must-read for those who like their advice with a side of serious research.', 'By doing a deep dive on how marriage functions from 1620 to the present, this book looks at how our relationships have evolved alongside society and offers data-driven \"lovehacks\" on how to get the most out of yours today. It\'s a must-read for those who like their advice with a side of serious research.', 3, 'the-all-or-nothing-marriage-how-the-best-marriages-work-by-eli-j-finkel_img_16599512781485768899.jpg', 'the-all-or-nothing-marriage-how-the-best-marriages-work-by-eli-j-finkel_snippet_16599512782109040988.docx', 'the-all-or-nothing-marriage-how-the-best-marriages-work-by-eli-j-finkel_img_16599512781485768899.jpg', 'the-all-or-nothing-marriage-how-the-best-marriages-work-by-eli-j-finkel_file_1659951278914181529.docx', 1, 1, '2022-08-08 08:34:38', '2022-08-08 08:34:38'),
(2, 'the-5-love-languages-the-secret-to-love-that-lasts-by-gary-chapman', 'The 5 Love Languages: The Secret to Love that Lasts by Gary Chapman', 53, 'You\'ve probably heard of the five love languages, and this is the book that explains what they are and how recognizing what makes your partner feel loved can help deepen your relationship. It\'s a pretty quick, active read and one with practical applications you can put into place right away, no therapist\'s couch required.', 'You\'ve probably heard of the five love languages, and this is the book that explains what they are and how recognizing what makes your partner feel loved can help deepen your relationship. It\'s a pretty quick, active read and one with practical applications you can put into place right away, no therapist\'s couch required.', 3, 'the-5-love-languages-the-secret-to-love-that-lasts-by-gary-chapman_img_1659951579554610310.jpg', 'the-5-love-languages-the-secret-to-love-that-lasts-by-gary-chapman_snippet_16599515791935264717.docx', 'the-5-love-languages-the-secret-to-love-that-lasts-by-gary-chapman_img_1659951579554610310.jpg', 'the-5-love-languages-the-secret-to-love-that-lasts-by-gary-chapman_file_1659951579647425098.docx', 1, 1, '2022-08-08 08:39:39', '2022-08-08 08:39:39'),
(3, 'mating-in-captivity-reconciling-the-erotic-and-the-domestic-by-esther-perel', 'Mating in Captivity: Reconciling the Erotic and the Domestic by Esther Perel', 57, 'ou may recognize this author from her popular podcast, Where Should We Begin, in which Perel applies her decades of counseling experience to real-life relationship quandaries. This book about balancing the paradox of domestic life and sexual attraction is an unparalleled guide to keeping the spark alive or rekindling closeness, both in and outside of the bedroom.', 'ou may recognize this author from her popular podcast, Where Should We Begin, in which Perel applies her decades of counseling experience to real-life relationship quandaries. This book about balancing the paradox of domestic life and sexual attraction is an unparalleled guide to keeping the spark alive or rekindling closeness, both in and outside of the bedroom.', 3, 'mating-in-captivity-reconciling-the-erotic-and-the-domestic-by-esther-perel_img_16599516301539943065.jpg', 'mating-in-captivity-reconciling-the-erotic-and-the-domestic-by-esther-perel_snippet_1659951630656102858.docx', 'mating-in-captivity-reconciling-the-erotic-and-the-domestic-by-esther-perel_img_16599516301539943065.jpg', 'mating-in-captivity-reconciling-the-erotic-and-the-domestic-by-esther-perel_file_16599516301603781245.docx', 1, 1, '2022-08-08 08:40:30', '2022-08-08 08:40:30'),
(4, 'listen-learn-love-how-to-dramatically-improve-your-relationships-in-30-days-or-less-by-susie-albert-miller', 'Listen, Learn, Love: How to Dramatically Improve Your Relationships in 30 Days or Less by Susie Albert Miller', 15, 'If you like your self-help in an actionable package, this 30-day guide is for you. With digestible, practical and even humorous tips for how to improve relationships, this book will also keep you accountable with an included progress tracker.', 'If you like your self-help in an actionable package, this 30-day guide is for you. With digestible, practical and even humorous tips for how to improve relationships, this book will also keep you accountable with an included progress tracker.', 3, 'listen-learn-love-how-to-dramatically-improve-your-relationships-in-30-days-or-less-by-susie-albert-miller_img_1659951681802196674.jpg', 'listen-learn-love-how-to-dramatically-improve-your-relationships-in-30-days-or-less-by-susie-albert-miller_snippet_16599516811755765915.docx', 'listen-learn-love-how-to-dramatically-improve-your-relationships-in-30-days-or-less-by-susie-albert-miller_img_1659951681802196674.jpg', 'listen-learn-love-how-to-dramatically-improve-your-relationships-in-30-days-or-less-by-susie-albert-miller_file_16599516811370542655.docx', 1, 1, '2022-08-08 08:41:21', '2022-08-08 08:41:21'),
(5, 'attached-the-new-science-of-adult-attachment-and-how-it-can-help-you-find-and-keep-love-by-amir-levine-md-and-rachel-sf-heller-ma', 'Attached: The New Science of Adult Attachment and How It Can Help You Find—and Keep—Love by Amir Levine. M.D. and Rachel S.F. Heller, M.A.', 15, 'Calling all science lovers (see what we did there?): This book explains how attachment theory shows up in the relationships we seek out and how they succeed, or don\'t. This is a great primer on how to recognize and express your own attachment style and use that self-knowledge to become a better partner and find the right one for you.', 'Calling all science lovers (see what we did there?): This book explains how attachment theory shows up in the relationships we seek out and how they succeed, or don\'t. This is a great primer on how to recognize and express your own attachment style and use that self-knowledge to become a better partner and find the right one for you.', 3, 'attached-the-new-science-of-adult-attachment-and-how-it-can-help-you-find-and-keep-love-by-amir-levine-md-and-rachel-sf-heller-ma_img_16599517121719722972.jpg', 'attached-the-new-science-of-adult-attachment-and-how-it-can-help-you-find-and-keep-love-by-amir-levine-md-and-rachel-sf-heller-ma_snippet_16599517122103159572.docx', 'attached-the-new-science-of-adult-attachment-and-how-it-can-help-you-find-and-keep-love-by-amir-levine-md-and-rachel-sf-heller-ma_img_16599517121719722972.jpg', 'attached-the-new-science-of-adult-attachment-and-how-it-can-help-you-find-and-keep-love-by-amir-levine-md-and-rachel-sf-heller-ma_file_1659951712134906971.docx', 1, 1, '2022-08-08 08:41:52', '2022-08-08 08:41:52'),
(6, 'the-seven-principles-for-making-marriage-work-a-practical-guide-from-the-countrys-foremost-relationship-expert-by-john-m-gottman-phd-and-nan-silver', 'The Seven Principles for Making Marriage Work: A Practical Guide from the Country\'s Foremost Relationship Expert by John M. Gottman, Ph.D. and Nan Silver', 40, 'Written by one of the country\'s foremost marriage experts and co-designer with his wife Julie Gottman of the Gottman Method, this book is basically a roadmap to how marriages should function. His findings after studying couples over a period of years are both super head-smackingly straightforward and deeply impactful.', 'Written by one of the country\'s foremost marriage experts and co-designer with his wife Julie Gottman of the Gottman Method, this book is basically a roadmap to how marriages should function. His findings after studying couples over a period of years are both super head-smackingly straightforward and deeply impactful.', 3, 'the-seven-principles-for-making-marriage-work-a-practical-guide-from-the-countrys-foremost-relationship-expert-by-john-m-gottman-phd-and-nan-silver_img_1659951748171586519.jpg', 'the-seven-principles-for-making-marriage-work-a-practical-guide-from-the-countrys-foremost-relationship-expert-by-john-m-gottman-phd-and-nan-silver_snippet_1659951748700579661.docx', 'the-seven-principles-for-making-marriage-work-a-practical-guide-from-the-countrys-foremost-relationship-expert-by-john-m-gottman-phd-and-nan-silver_img_1659951748171586519.jpg', 'the-seven-principles-for-making-marriage-work-a-practical-guide-from-the-countrys-foremost-relationship-expert-by-john-m-gottman-phd-and-nan-silver_file_16599517481289891812.docx', 1, 1, '2022-08-08 08:42:28', '2022-08-08 08:42:28'),
(7, 'loving-bravely-twenty-lessons-of-self-discovery-to-help-you-get-the-love-you-want-by-alexander-h-solomon-phd', 'Loving Bravely: Twenty Lessons of Self-Discovery to Help You Get the Love You Want by Alexander H. Solomon, PhD', 60, 'You know the saying, \"put your own oxygen mask on first?\" By that same principle, you need to know what kind of love you\'re seeking before you can find it. This book can help you do that, no matter what your current relationship status.', 'You know the saying, \"put your own oxygen mask on first?\" By that same principle, you need to know what kind of love you\'re seeking before you can find it. This book can help you do that, no matter what your current relationship status.', 3, 'loving-bravely-twenty-lessons-of-self-discovery-to-help-you-get-the-love-you-want-by-alexander-h-solomon-phd_img_1659951795283236947.jpg', 'loving-bravely-twenty-lessons-of-self-discovery-to-help-you-get-the-love-you-want-by-alexander-h-solomon-phd_snippet_1659951795351294584.docx', 'loving-bravely-twenty-lessons-of-self-discovery-to-help-you-get-the-love-you-want-by-alexander-h-solomon-phd_img_1659951795283236947.jpg', 'loving-bravely-twenty-lessons-of-self-discovery-to-help-you-get-the-love-you-want-by-alexander-h-solomon-phd_file_16599517951527803015.docx', 1, 1, '2022-08-08 08:43:15', '2022-08-08 08:43:15'),
(8, 'fed-up-emotional-labor-women-and-the-way-forward-by-gemma-hartley', 'Fed Up: Emotional Labor, Women, and the Way Forward by Gemma Hartley', 20, 'This isn\'t strictly a relationship book so much as a book about why people who shoulder the weight of the world\'s emotional labor are collapsing under it, how we got here as a society and where we go from here. If you\'re the one in your relationship who\'s carrying the bulk of the mental load, give this one a read.', 'This isn\'t strictly a relationship book so much as a book about why people who shoulder the weight of the world\'s emotional labor are collapsing under it, how we got here as a society and where we go from here. If you\'re the one in your relationship who\'s carrying the bulk of the mental load, give this one a read.', 3, 'fed-up-emotional-labor-women-and-the-way-forward-by-gemma-hartley_img_1659951839650614623.jpg', 'fed-up-emotional-labor-women-and-the-way-forward-by-gemma-hartley_snippet_1659951839894506361.docx', 'fed-up-emotional-labor-women-and-the-way-forward-by-gemma-hartley_img_1659951839650614623.jpg', 'fed-up-emotional-labor-women-and-the-way-forward-by-gemma-hartley_file_16599518391166495753.docx', 1, 1, '2022-08-08 08:43:59', '2022-08-08 08:43:59'),
(9, 'ask-a-queer-chick-a-guide-to-sex-love-and-life-for-girls-who-dig-girls-by-lindsay-king-miller', 'Ask a Queer Chick: A Guide to Sex, Love, and Life for Girls Who Dig Girls by Lindsay King-Miller', 35, 'More of an advice column in book form than self-help, this is the perfect read for navigating the LBGTQ+ experience, no matter where you are on your journey. Whether you\'ve been in an LGBTQ+ relationship for years or are just dipping your toes into the dating pool, this will help debunk stereotypes, erase damaging myths and offer validation and queer community.', 'More of an advice column in book form than self-help, this is the perfect read for navigating the LBGTQ+ experience, no matter where you are on your journey. Whether you\'ve been in an LGBTQ+ relationship for years or are just dipping your toes into the dating pool, this will help debunk stereotypes, erase damaging myths and offer validation and queer community.', 3, 'ask-a-queer-chick-a-guide-to-sex-love-and-life-for-girls-who-dig-girls-by-lindsay-king-miller_img_1659951875905509744.jpg', 'ask-a-queer-chick-a-guide-to-sex-love-and-life-for-girls-who-dig-girls-by-lindsay-king-miller_snippet_1659951875346469962.docx', 'ask-a-queer-chick-a-guide-to-sex-love-and-life-for-girls-who-dig-girls-by-lindsay-king-miller_img_1659951875905509744.jpg', 'ask-a-queer-chick-a-guide-to-sex-love-and-life-for-girls-who-dig-girls-by-lindsay-king-miller_file_16599518751053379226.docx', 1, 1, '2022-08-08 08:44:35', '2022-08-08 08:44:35'),
(10, 'open-an-uncensored-memoir-of-love-liberation-and-non-monogamy-a-polyamory-memoir-by-rachel-krantz', 'Open: An Uncensored Memoir of Love, Liberation, and Non-Monogamy—A Polyamory Memoir by Rachel Krantz', 47, 'This memoir explores the author\'s foray into the complicated world of ethical non-monogamy, open relationships and polyamory, but also features interviews with scientists, therapists and other people in open relationships about how it works, why it sometimes doesn\'t and expanding the boundaries of what love can be. It\'s a fun and fascinating read, even if you\'re not part of \"the lifestyle.\"', 'This memoir explores the author\'s foray into the complicated world of ethical non-monogamy, open relationships and polyamory, but also features interviews with scientists, therapists and other people in open relationships about how it works, why it sometimes doesn\'t and expanding the boundaries of what love can be. It\'s a fun and fascinating read, even if you\'re not part of \"the lifestyle.\"', 3, 'open-an-uncensored-memoir-of-love-liberation-and-non-monogamy-a-polyamory-memoir-by-rachel-krantz_img_16599519171534036016.jpg', 'open-an-uncensored-memoir-of-love-liberation-and-non-monogamy-a-polyamory-memoir-by-rachel-krantz_snippet_1659951917973559310.docx', 'open-an-uncensored-memoir-of-love-liberation-and-non-monogamy-a-polyamory-memoir-by-rachel-krantz_img_16599519171534036016.jpg', 'open-an-uncensored-memoir-of-love-liberation-and-non-monogamy-a-polyamory-memoir-by-rachel-krantz_file_1659951917365852668.docx', 1, 1, '2022-08-08 08:45:17', '2022-08-08 08:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no_image.png',
  `testimony` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `name`, `photo`, `testimony`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sanaa Britt', 'Sanaa Britt_1659952582230782285.jpg', 'While on their spiritual journey with Jesus, many people find the most compelling stories about Jesus come from the Christians they already know. If you’re looking for proof of Jesus’ ability, ask your peers about their own journey with Christ.', 0, '2022-08-08 08:56:22', '2022-08-08 08:56:22'),
(2, 'Myah Mccray', 'Myah Mccray_1659952623602986903.jpg', 'I didn’t like the way my family put on a show all the time. It seemed very hypocritical. Especially at church, we were not allowed talk about problems in our lives. My parents’ generation never talks about problems; they have to look good on the outside—anything bad happening in the family would make the parents look bad. So even if my mom and I had a huge fight in the car on the way to church, I had to put on a happy face before we went in. I hated it', 0, '2022-08-08 08:57:03', '2022-08-08 08:57:03'),
(3, 'Lenny Castaneda', 'Lenny Castaneda_1659952652428406081.jpg', 'I’ve always played sports. In my early high school years, I played sports year-round. I was in marching band in the fall, on the basketball team during the winter, and on the softball team in the spring. And so long as I met the age requirements for the park district, I played softball during the summer. But I didn’t do well playing the politics game that was required to excel in the athletic world. So for example, in basketball, even though I was one of the best players, I sat on the bench a lot. I was so sick of it by junior year that I decided to quit.', 0, '2022-08-08 08:57:32', '2022-08-08 08:57:32'),
(4, 'Tala Sanderson', 'Tala Sanderson_1659952689937666626.jpg', 'After high school I decided to try college without medication. My psychiatrist agreed, and that fall I went off to Calvin College in Grand Rapids. I met some good friends my first week there, but I was already showing signs of depression. I ate as few meals as I could and still survive. It was another way I was reaching out for help, seeing if anyone noticed or cared. I also decided that, since I had the choice, I wouldn’t go to church. I didn’t care anymore, and I didn’t think God would want me. But my college friends noticed I wasn’t doing so well.', 0, '2022-08-08 08:58:09', '2022-08-08 08:58:09'),
(5, 'Jonty Cooley', 'Jonty Cooley_1659952717706620498.jpg', 'My athletic career was also blessed. I was the leading running back my freshman year, and by my junior year I was a star on the football team. As my popularity around campus grew, the student body voted me to the homecoming court all four years of high school.', 0, '2022-08-08 08:58:37', '2022-08-08 08:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Love Support Admin', 'admin@love.com', NULL, '$2y$10$/1/JWYV9vj/cyikD7EMVneG9KpWDWQDBrd2uw2sCGaLe0F9ARRKrC', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `scarts`
--
ALTER TABLE `scarts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scarts`
--
ALTER TABLE `scarts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
