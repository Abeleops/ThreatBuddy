-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2026 at 08:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`id`, `username`, `password`) VALUES
(1, 'threatbuddy', 'threatbuddy123');

-- --------------------------------------------------------

--
-- Table structure for table `article_table`
--

CREATE TABLE `article_table` (
  `id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `read_more_link` varchar(500) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `media` varchar(255) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article_table`
--

INSERT INTO `article_table` (`id`, `author`, `title`, `subtitle`, `read_more_link`, `category`, `content`, `media`, `date_added`) VALUES
(7, 'BBC News', 'The unsettling world of the \'TikTok Farlands\'', 'There\'s a hidden corner of TikTok the algorithm won\'t show you, full of weird, creepy and downright disturbing videos. It could all be a myth – or it may be a preview of the internet\'s future.', 'https://www.bbc.com/future/article/20260618-the-terrifying-world-of-the-tiktok-farlands', 'Algorithms', 'TikTok has a reputation for serving up an endless stream of videos that are, in general, fairly positive. Some detractors even call it sanitised. But beneath the surface are billions of videos TikTok normally won\'t show you. Some are boring. Some are bizarre. Some of them are truly unsettling.\r\n\r\nRumour has it if you stay up too late, scrolling for hours until you exhaust TikTok\'s normal recommendations, you might get a momentary glimpse. But users of the platform say they\'ve found a way to go deeper. . . . .', '1783603606_bbcNews1.png', '2026-07-09 13:26:46'),
(8, 'Inquirer.net', 'Intellegal launches verifiable AI legal research assistant for Philippine legal professionals', 'Makati-based Technese Legaltech Inc. introduces an AI-powered legal research and review platform for Philippine law, combining case-law analytics, law exploration, deep synthesis, source-traceable citations, visual summaries, and AI contract review.', 'https://technology.inquirer.net/147567/intellegal-launches-verifiable-ai-legal-research-assistant-for-philippine-legal-professionals', 'AI', 'Technese Legaltech Inc., a legal technology company based in Makati, today announced the launch of Intellegal (intellegal.ai), an AI-powered legal research and review assistant built specifically for Philippine legal professionals.\r\n\r\nIntellegal launches verifiable AI legal research assistant for Philippine legal professionals\r\nDesigned for a profession where speed matters only when it is matched by accuracy and authority, Intellegal brings together Philippine case-law search, statutory exploration, deep legal synthesis, case comparison, legal-document visualization, and contract review in a single AI-assisted workflow.\r\n\r\nThe platform is built around a clear principle: legal AI should accelerate the research process, reduce repetitive work, and make complex materials easier to navigate — while keeping every answer grounded in verifiable legal sources and leaving final judgment with the lawyer.\r\n\r\nAt the center of Intellegal are three design commitments: deep legal research at speed, verifiable legal citations, and AI augmentation rather than replacement. The platform helps users move more efficiently from legal question to source, from source to analysis, and from analysis to informed professional judgment.\r\n\r\nIntellegal’s key modules include Case-Law Analytics, Law Explorer, Deep Synthesis, Case Contrast, Visual Digest, and Contract Review, each designed to support a different stage of Philippine legal research, analysis, and document review. . .', '1783606292_Intellegal.jpg', '2026-07-09 14:11:32'),
(9, 'ABS-CBN', 'How is PH fighting cybersecurity threats?', 'The rapid digital adaptation has transformed the economic and social landscape of the Philippines. It has also developed the country\'s financial access to previously unbanked, rural, and underserved populations. Moreover, MSMEs were able to thrive due to ', 'https://www.abs-cbn.com/news/technology/2026/3/26/how-is-ph-fighting-cybersecurity-threats-1625', 'Cybersecurity', 'Creating a continuing legacy of cybersecurity excellence\r\n \r\nIn 2018, a Filipino-led cybersecurity initiative, I AM SECURE, played a role in helping shape the country\'s digital defense landscape. By bringing together leaders from government, enterprise, and the technology sector, the platform advances a unified approach to cybersecurity—driving resilience, trust, and innovation.\r\n\r\n \r\nAs threats become intelligent, I AM SECURE 2026 called on organizations and leaders across the Philippines to rise together in building a secure and future-ready digital nation.\r\n\r\nADVERTISEMENT\r\n \r\nThe Philippines\' cybersecurity landscape took center stage with the official launch of I AM SECURE 2026, now in its 9th year, bringing together the country\'s leading cybersecurity experts, government institutions, and enterprise leaders. Anchored on the theme \"Soaring High: Future Ready in the Age of Intelligent Threats,\" the program highlights the urgent need for organizations to evolve in response to increasingly sophisticated and intelligent cyber risks.\r\n\r\n \r\nSince its inception, I AM SECURE has grown into one of the most influential cybersecurity event series in the country convening thousands of professionals from over 600 companies across 20 industries, alongside more than 50 thought leaders, 40 global solution providers, two exclusive CXO Connect sessions, and one flagship conference.\r\n\r\n \r\nNational leaders align on cybersecurity priorities\r\n \r\nAt the official press conference held on March 18, key government leaders and cybersecurity authorities, institution partners of the program, shared their insights on strengthening national cyber resilience and advancing digital governance.\r\n\r\n \r\nAmong those present were:\r\n\r\n- Secretary Henry Aguda, Department of Information and Communications Technology (DICT) . . .', '1783606539_absnews.png', '2026-07-09 14:15:39'),
(10, 'Philstar', 'GCash launches in-app OTPs to strengthen security against phishing scams, fraud', 'GCash users urged to turn on push notification settings to make their app transactions safe and secure MANILA, Philippines — GCash, a finance superapp, is rolling out its newest security feature: in-app OTPs (One-Time Passwords). By the first quarter of 2', 'https://www.philstar.com/business/technology/2026/01/26/2498936/gcash-launches-app-otps-strengthen-security-against-phishing-scams-fraud', 'Cybersecurity', 'By sending OTP requests directly to the user’s authenticated GCash app, GCash ensures that only the intended users can receive and use the unique OTPs, protecting them from unauthorized access. \r\n\r\nInstant, one-tap authentication also removes the need to switch apps, type codes, or wait for text messages to arrive, resulting in faster transactions and removing exposure to SMS OTPs that scammers and fraudsters can exploit.\r\n\r\n\r\n“Our upgrade to In-app OTPs is a strategic move to put an end to phishable SMS OTPs. We will shift users to instant, GCash app-verified authentication, to increase the security of their daily transactions,” said Miguel Geronilla, chief information security offiicer of GCash.\r\n\r\nThe introduction of In-App OTPs is part of the broader strategy of GCash to enhance security through Multi-factor Authentication (MFA), a well-established industry standard that adds multiple layers of protection when accessing an account. MFA greatly reduces the risk of account takeovers, even if passwords or MPINs are compromised.\r\n\r\nGCash has consistently invested in stronger protection systems, including Know-Your-Customer (KYC) verification and Facial Recognition verification (Double Safe). In-app OTPs build on these existing measures, enhancing security without adding unnecessary friction to the user experience.\r\n\r\nIn-app OTPs reflect commitment of GCash to providing secure, seamless financial services for its millions of users and set a new benchmark for digital finance security in the Philippines.', '1783606657_gcash_2026-01-05_15-55-06.jpg', '2026-07-09 14:17:37'),
(11, 'Rappler', 'Meta releases Muse Image, which lets users make AI images from public Instagram posts', 'MANILA, Philippines – Meta Platforms announced on Tuesday, July 7, that it was rolling out Muse Image, its first image generation model from Meta Superintelligence Labs which is available as part of Meta AI.', 'https://www.rappler.com/technology/meta-releases-muse-image-ai-tool/', 'AI', 'MANILA, Philippines – Meta Platforms announced on Tuesday, July 7, that it was rolling out Muse Image, its first image generation model from Meta Superintelligence Labs which is available as part of Meta AI.\r\n\r\nMuse Image is also currently available on Instagram and WhatsApp, and is coming soon to Facebook, Messenger, and for advertisers through Meta Advantage+ creative, the company said.\r\n\r\nMuse Image, as a text-to-image tool, allows users to use text prompts to start the process of creating an AI image, but users can also add public photos from Instagram into the process to “remix” the photos into an AI output. This can be done apparently without requiring permission from users at the onset, as you have to opt out of it in the settings.\r\n\r\nHow to opt out on Instagram\r\nTo opt out on Instagram’s app, users should go to their Instagram profile, click the burger menu — the option with three lines on the top right corner — then look for “Sharing and Reuse.” From there, look for “Allow people to use your content on Instagram and with AI features on Meta” and toggle off the settings there.\r\n\r\nYou may also want to toggle off the settings that lets users reuse your original audio on Meta AI, just to lessen the chances of deepfakes being made using your voice and physical likeness.', '1783606815_meta-reuters-8-2025-scaled.jpg', '2026-07-09 14:20:15'),
(12, 'Rappler', 'Anthropic commits to spending $200 billion on Google’s cloud and chips – report', 'Anthropic has committed to spend $200 billion with Google Cloud over five years as part of a recent agreement, The Information reported on Tuesday, May 5, citing a person with knowledge of the matter.', 'https://www.rappler.com/technology/anthropic-commits-spending-google-cloud-chips/', 'Cloud Computing', 'Anthropic has committed to spend $200 billion with Google Cloud over five years as part of a recent agreement, The Information reported on Tuesday, May 5, citing a person with knowledge of the matter.\r\n\r\nThe commitment suggests the AI startup accounts for more than 40% of the revenue backlog Google disclosed to investors last week, according to the report. The backlog reflects contractual commitments from cloud customers.\r\n\r\nGoogle parent Alphabet shares were up about 2% in extended trading on Tuesday following the report.\r\n\r\nAnthropic signed a deal in April with Google and the tech firm’s chip partner Broadcom for multiple gigawatts of tensor processing unit capacity, which it expects to come online starting in 2027.\r\n\r\nAlphabet is also investing up to $40 billion in Anthropic, deepening its partnership with the artificial intelligence startup, which is also its rival in the global AI race.\r\n\r\nContracts involving Anthropic and OpenAI now account for more than half of the $2 trillion in backlogs at major cloud providers such as Amazon Web Services, Microsoft Azure and Google Cloud Platform, the US digital news outlet reported. . . .', '1783607021_2023-09-25T080527Z_1151434312_RC2Y40A525QW_RTRMADP_3_AMAZON-COM-ANTHROPIC-scaled.jpg', '2026-07-09 14:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `author_table`
--

CREATE TABLE `author_table` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `followers` int(11) NOT NULL DEFAULT 0,
  `popular` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author_table`
--

INSERT INTO `author_table` (`id`, `user_id`, `author_name`, `photo`, `date_created`, `followers`, `popular`) VALUES
(5, 0, 'Rappler', '1783269893_rapplerpng.png', '2026-07-05 16:44:53', 54355, 'Yes'),
(6, 0, 'ABS-CBN', '1783269959_abscbn.png', '2026-07-05 16:45:59', 76543, 'Yes'),
(8, 0, 'Philstar', '1783602825_philstarLogo.jpg', '2026-07-09 13:13:45', 743000, 'Yes'),
(9, 0, 'Inquirer.net', '1783602879_inqLogo.png', '2026-07-09 13:14:39', 873321, 'Yes'),
(10, 0, 'BBC News', '1783602947_bbcnews.png', '2026-07-09 13:15:47', 1543432, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `library_table`
--

CREATE TABLE `library_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `severity` enum('Low','Medium','High') NOT NULL,
  `about` text NOT NULL,
  `how_it_works` text NOT NULL,
  `prevention` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `library_table`
--

INSERT INTO `library_table` (`id`, `name`, `category`, `severity`, `about`, `how_it_works`, `prevention`, `image`, `date_added`) VALUES
(2, 'SQL Injection', 'Web Application Attack', 'High', 'SQL Injection (SQLi) is a cyberattack where attackers insert malicious SQL commands into input fields to manipulate a website database. This can expose, modify, or delete sensitive information.', 'Attacker finds a vulnerable input field.\r\nMalicious SQL code is entered.\r\nThe application executes the injected query.\r\nThe attacker gains unauthorized database access or retrieves sensitive data.', 'Use prepared statements and parameterized queries.\r\nValidate and sanitize user inputs.\r\nRestrict database user permissions.\r\nKeep database software updated.', 'SQL.png', '2026-07-09 14:44:00'),
(3, 'Cross-Site Scripting (XSS)', 'Web Application Attack', 'High', 'Cross-Site Scripting (XSS) allows attackers to inject malicious JavaScript into trusted websites. When users visit the page, the script executes in their browser.', 'Attacker injects malicious JavaScript.\r\nWebsite stores or reflects the script.\r\nVictim visits the compromised page.\r\nThe script steals cookies or performs unauthorized actions.', 'Escape user-generated content.\r\nValidate all user input.\r\nImplement Content Security Policy (CSP).\r\nUse secure and HttpOnly cookies.', 'XSS.png', '2026-07-09 14:46:56'),
(4, 'Distributed Denial-of-Service (DDoS)', 'Network Attack', 'High', 'A Distributed Denial-of-Service (DDoS) attack overwhelms a server or network with massive amounts of traffic, making services unavailable to legitimate users.', 'Attacker controls multiple infected devices (botnet).\r\nBotnet sends millions of requests.\r\nServer resources become exhausted.\r\nLegitimate users cannot access the service.', 'Use DDoS protection services.\r\nConfigure firewalls and rate limiting.\r\nMonitor abnormal traffic patterns.\r\nImplement load balancing.', 'DDOS.png', '2026-07-09 14:48:52'),
(5, 'Man-in-the-Middle (MitM)', 'Network Attack', 'Medium', 'A Man-in-the-Middle attack occurs when an attacker secretly intercepts communication between two parties to steal or manipulate transmitted information.', 'Victim connects to an insecure network.\r\nAttacker intercepts the communication.\r\nData passes through the attackers device.\r\nSensitive information is captured or altered.', 'Always use HTTPS websites.\r\nAvoid public Wi-Fi without a VPN.\r\nEnable multi-factor authentication.\r\nKeep devices updated.', 'MITM.png', '2026-07-09 14:49:50'),
(6, 'Spyware', 'Malware', 'Medium', 'Spyware is malicious software designed to secretly monitor user activities and collect sensitive information without the users knowledge.', 'Spyware is installed through malicious downloads or software bundles.\r\nIt runs silently in the background.\r\nUser activities and credentials are recorded.\r\nCollected data is sent to the attacker.', 'Install trusted antivirus software.\r\nDownload software only from official sources.\r\nRegularly update your operating system.\r\nScan your device for malware frequently.', 'SPYWARE.png', '2026-07-09 14:50:16'),
(7, 'Brute Force Attack', 'Credential Attack', 'Medium', 'A brute force attack attempts to guess a users password by trying many possible combinations until the correct one is found.', 'Attacker targets a login page.\r\nAutomated tools try thousands of password combinations.\r\nWeak passwords are eventually guessed.\r\nAttacker gains unauthorized access.', 'Use long, unique passwords.\r\nEnable multi-factor authentication.\r\nLimit login attempts.\r\nMonitor for suspicious login activity.', 'BRUTEFORCE.png', '2026-07-09 14:50:46'),
(8, 'Adware', 'Malware', 'Low', 'Adware is software that automatically displays advertisements on a users device. While it is usually not destructive, it can slow down the system and invade user privacy.', 'User installs free software bundled with adware.\r\nAdware runs in the background.\r\nAdvertisements appear while browsing.\r\nUser activity may be tracked for advertising purposes.', 'Download software only from trusted websites.\r\nRead installation options carefully.\r\nUse an ad blocker.\r\nScan your computer regularly with antivirus software.', 'Adware.png', '2026-07-09 14:53:35'),
(9, 'Spam Email', 'Other', 'Low', 'Spam emails are unsolicited messages sent in bulk. Although many are harmless advertisements, some may contain suspicious links or attachments.', 'Spammers send emails to thousands of recipients.\r\nMessages advertise products or services.\r\nSome contain links to unsafe websites.\r\nUsers may accidentally click harmful content.', 'Do not reply to spam emails.\r\nMark spam messages as junk.\r\nAvoid clicking unknown links.\r\nEnable your emails spam filter.', 'Spam Email.png', '2026-07-09 14:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `userdata_table`
--

CREATE TABLE `userdata_table` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata_table`
--

INSERT INTO `userdata_table` (`user_id`, `first_name`, `last_name`, `email`, `phone`, `password`, `created_at`) VALUES
(1, 'Nathaniel Adrian', 'Lizardo', 'ivanmarklizardo@gmail.com', '09171234567', 'nathan123', '2026-07-05 11:07:10'),
(2, 'Abele John ', 'Juarez', 'abele@gmail.com', '09123456853', 'abele123', '2026-07-05 11:21:59'),
(4, 'Ken', 'Bautista', 'ken@gmail.com', '9876543217', 'ken123', '2026-07-09 04:51:02'),
(5, 'newacc', 'newacc', 'newacc@gmail.com', '09396159621', 'newacc', '2026-07-09 04:55:12'),
(6, 'accnew', 'accnew', 'accnew@gmail.com', '09396159622', 'accnew', '2026-07-09 04:57:20'),
(7, 'newacc123', 'newacc123', 'newacc123@gmail.com', '09396159626', 'newacc123', '2026-07-09 04:58:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_table`
--
ALTER TABLE `article_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_table`
--
ALTER TABLE `author_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_table`
--
ALTER TABLE `library_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata_table`
--
ALTER TABLE `userdata_table`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article_table`
--
ALTER TABLE `article_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `author_table`
--
ALTER TABLE `author_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `library_table`
--
ALTER TABLE `library_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userdata_table`
--
ALTER TABLE `userdata_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
