-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 07:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(191) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `author` varchar(191) DEFAULT NULL,
  `subtitle` varchar(191) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `event_name`, `date`, `description`, `image`, `author`, `subtitle`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Table Tennis Direct Level', '2023-01-04', 'Forty-eight top table tennis players voluntarily participated in this study: 24 men (25.3 ± 4.07 years) and 24 women (22.3 ± 3.8 years). These table tennis players were recruited from sport clubs and had to meet the following criteria: (i) be older than 18 years old; (ii) participate in the top category of the Spanish league', '202212291658tabletennis.jpg', 'Yash Chutake', 'participate in the top', NULL, NULL, '2022-12-29 11:28:57', '2022-12-29 11:28:57'),
(2, 'Vollyball State Level', '2023-01-08', 'The complete set of rules is extensive,[2] but play essentially proceeds as follows: a player on one of the teams begins a \'rally\' by serving the ball (tossing or releasing it and then hitting it with a hand or arm), from behind the back boundary line of the court, over the net, and into the receiving team\'s court.[3] The receiving team must not let the ball be grounded within their court. The team may touch the ball up to three times', '202212291704vollball.jpg', 'Rushikesh Dandge', 'Runner Up in Tornaments', NULL, NULL, '2022-12-29 11:34:34', '2022-12-29 11:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `image`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '202212291806cricket.jpg', 'cricket', NULL, NULL, '2022-12-29 12:36:39', '2022-12-29 12:36:39'),
(2, '202212291807mar.jpg', 'marathone', NULL, NULL, '2022-12-29 12:37:00', '2022-12-29 12:37:00'),
(3, '202212291807thugofwar.webp', 'tugofwar', NULL, NULL, '2022-12-29 12:37:30', '2022-12-29 12:37:30'),
(4, '202212291808badminton.jpg', 'badbinton', NULL, NULL, '2022-12-29 12:38:01', '2022-12-29 12:38:01'),
(5, '202212291808tabletennis.jpg', 'tabletennis', NULL, NULL, '2022-12-29 12:38:21', '2022-12-29 12:38:21'),
(6, '202212291808football.jpg', 'football', NULL, NULL, '2022-12-29 12:38:37', '2022-12-29 12:38:37'),
(7, '202212291808im.jpg', 'tams', NULL, NULL, '2022-12-29 12:38:56', '2022-12-29 12:38:56'),
(8, '202212291809batbitan.webp', 'tables', NULL, NULL, '2022-12-29 12:39:20', '2022-12-29 12:39:20'),
(9, '202212291811images (2).jpg', 'Nijh', NULL, NULL, '2022-12-29 12:41:14', '2022-12-29 12:41:14'),
(10, '202212291812vollball.jpg', 'volley', NULL, NULL, '2022-12-29 12:42:43', '2022-12-29 12:42:43'),
(11, '202212291812images (1).jpg', 'trophy', NULL, NULL, '2022-12-29 12:42:56', '2022-12-29 12:42:56'),
(12, '202212291813images (2).jpg', 'practice', NULL, NULL, '2022-12-29 12:43:30', '2022-12-29 12:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_12_12_110309_create_sessions_table', 1),
(5, '2022_12_20_084614_create_tournaments_table', 2),
(6, '2022_12_20_085510_create_teams_table', 2),
(7, '2022_12_20_085817_create_participants_table', 2),
(8, '2022_12_21_123853_create_albums_table', 2),
(9, '2022_12_22_094348_create_achievements_table', 2),
(10, '2022_12_23_185222_create_soloparticipants_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name1` varchar(191) DEFAULT NULL,
  `name2` varchar(191) DEFAULT NULL,
  `name3` varchar(191) DEFAULT NULL,
  `name4` varchar(191) DEFAULT NULL,
  `name5` varchar(191) DEFAULT NULL,
  `name6` varchar(191) DEFAULT NULL,
  `name7` varchar(191) DEFAULT NULL,
  `name8` varchar(191) DEFAULT NULL,
  `name9` varchar(191) DEFAULT NULL,
  `name10` varchar(191) DEFAULT NULL,
  `name11` varchar(191) DEFAULT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `name1`, `name2`, `name3`, `name4`, `name5`, `name6`, `name7`, `name8`, `name9`, `name10`, `name11`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'Yash Chutake', 'Rushikesh Dandge', 'Prajwal Ratnparkhe', 'Sojwal Ingle', 'Tushar wagh', 'Rushi Wayal', 'Ram Deshmukh', 'Aman Gawli', 'Rohit tayde', 'Prithwi mankar', 'shyam kakad', 1, '2022-12-29 10:45:36', '2022-12-29 10:45:36'),
(3, 'messi 1', 'messi 2', 'messi 3', 'messi 4', 'messi 5', 'messi 6', 'messi 7', 'messi 8', 'messi 9', 'messi 10', 'messi 11', 3, '2022-12-29 10:54:40', '2022-12-29 10:54:40'),
(4, 'aman gawande', 'shantanu kutafale', 'kunal pandhkar', 'sunil ramrao', 'umesh rao', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 4, '2022-12-29 11:09:05', '2022-12-29 11:09:05'),
(5, 'Rushi Dandge', 'Manav Rao', 'Kunal Pandarkar', 'kamplesh Walekar', 'Tushar Wagh', 'Prajwal rantnparkhe', 'ram deshpande', 'shubham patil', 'ramesh sonar', 'sudhanshu tayde', 'nikhil sirsat', 5, '2022-12-29 11:19:21', '2022-12-29 11:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('wHuK2u7PLa1JW0lEiEhCoSRvYOYg6jN5ilOghMLR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM3RneGN3eG1sZVlxWTVzYUtZUDBieVEybUpDakpBMTdRNU5NenN5VCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1672338884);

-- --------------------------------------------------------

--
-- Table structure for table `soloparticipants`
--

CREATE TABLE `soloparticipants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `prn` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `sport_name` varchar(191) NOT NULL,
  `department` varchar(191) NOT NULL,
  `year` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soloparticipants`
--

INSERT INTO `soloparticipants` (`id`, `name`, `prn`, `mobile`, `email`, `sport_name`, `department`, `year`, `created_at`, `updated_at`) VALUES
(1, 'Yash Chutake', '456112131311', '09834452728', 'yashchutake07@gmail.com', 'Badminton', 'it', '3', '2022-12-29 11:13:33', '2022-12-29 11:13:33'),
(2, 'Kunal Pandhkar', '146546451654165', '85545455455', 'kp@gmail.com', 'Marathon Race', 'chemical', '1', '2022-12-29 11:23:43', '2022-12-29 11:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_name` varchar(191) NOT NULL,
  `captain_name` varchar(191) NOT NULL,
  `prn` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `sport` varchar(191) NOT NULL,
  `department` varchar(191) NOT NULL,
  `year` varchar(191) NOT NULL,
  `tournament_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_name`, `captain_name`, `prn`, `email`, `mobile`, `sport`, `department`, `year`, `tournament_id`, `created_at`, `updated_at`) VALUES
(1, 'The Tigers', 'Yash Chutake', '1921321242087', 'yashchutake@gmail.com', '9834452728', 'Cricket', 'cse', '4th', 1, '2022-12-29 10:45:36', '2022-12-29 10:45:36'),
(3, 'The 11 ones', 'Messi', '78454545452', 'mesi@gmail.com', '74854454545', 'FootBall', 'civil', '2nd', 2, '2022-12-29 10:54:40', '2022-12-29 10:54:40'),
(4, 'The Stikers', 'Kamlesh', '456123234465', 'kamplse@gmail.com', '7987688454', 'Basket Ball', 'mech', '1st', 4, '2022-12-29 11:09:05', '2022-12-29 11:09:05'),
(5, 'The Rulers', 'Rushikesh Dandge', '1921321242136', 'rushi@gmail.com', '09834452728', 'Tug OF War', 'cse', '4th', 7, '2022-12-29 11:19:21', '2022-12-29 11:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sport_name` varchar(191) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `is_team` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`id`, `sport_name`, `event_date`, `description`, `image`, `is_team`, `created_at`, `updated_at`) VALUES
(1, 'Cricket', '2023-01-03', 'All the cricket playing nations have their individual bodies that manage cricket events at the domestic level. The domestic level matches are also played as one-day and five-day games. The one-day games at domestic level are called List-A and five-day format is called First-class. Best players are picked from the domestic tournaments to represent country at the highest level. These national cricket boards also manage venues when another national team is touring their country. They are responsible for visiting player’s facilities and security.', '202212291611cricket.jpg', 1, '2022-12-29 10:41:52', '2022-12-29 10:41:52'),
(2, 'FootBall', '2023-01-10', 'There is another tournament called Confederation Cup which is conducted between the winner of all the above mentioned six continents, the current World Cup champions and the country which is hosting it.  Irrespective of these tournaments, there are many champions league tournaments conducted between the Football clubs and the 10 most famous Football clubs among them', '202212291621football.jpg', 1, '2022-12-29 10:51:19', '2022-12-29 10:51:19'),
(4, 'Basket Ball', '2023-01-07', 'The tournament has had as many as 97 teams, in 2015, and as few as 24 teams, in 2020. Since 2016, the tournament has most often used a 64-team field. In 2019, the 64 teams were divided into eight regions, with each regional winner advancing to the championship venue', '202212291634basketball.webp', 1, '2022-12-29 11:04:46', '2022-12-29 11:04:46'),
(5, 'Badminton', '2023-01-04', 'Teams consist of 2 players on the court at one time. 1. Before starting the game, the opponents toss a coin with the winner choosing: (a) to serve first/to receive first, or (b) the side 2. In subsequent games, the winning side serves first.', '202212291642batbitan.webp', 0, '2022-12-29 11:12:57', '2022-12-29 11:12:57'),
(7, 'Tug OF War', '2022-12-30', 'According to the rules of tug of war, each team can accommodate a maximum of 8 members. However the combined weight of these members should not exceed the weight determined for the particular category. The game has to be played on a flat grassy patch of land.', '202212291645thugofwar.webp', 1, '2022-12-29 11:15:58', '2022-12-29 11:15:58'),
(8, 'Marathon Race', '2023-01-05', 'One of the greatest marathon runners of all time was Abebe Bikila of Ethiopia, who became the first black African to win Olympic gold by winning the marathon in a world record time', '202212291652marathon.jpg', 0, '2022-12-29 11:22:40', '2022-12-29 11:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Yash Chutake', 'yashchutake07@gmail.com', NULL, '$2y$10$mR6/Swt/Vq/2qMqjsufsleMNBQrYQgg3jQY76HCe/BixPj8TfWfZW', NULL, NULL, NULL, '8Ofar9lEbblqZqB9Wapt5uSVVBtLZvvG24VPg1c4Th0LOJ9J0JNZGHYA9E81', NULL, NULL, '2022-12-13 04:49:25', '2022-12-13 04:49:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `participants_team_id_foreign` (`team_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `soloparticipants`
--
ALTER TABLE `soloparticipants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_tournament_id_foreign` (`tournament_id`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
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
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soloparticipants`
--
ALTER TABLE `soloparticipants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `participants_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_tournament_id_foreign` FOREIGN KEY (`tournament_id`) REFERENCES `tournaments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
