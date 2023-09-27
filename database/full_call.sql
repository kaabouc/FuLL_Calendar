-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 27 sep. 2023 à 12:30
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `full_call`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description_categorie` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `description_categorie`, `created_at`, `updated_at`) VALUES
(1, 'sport', 'fichiers/8gf9M40dOLVHuSF2lW239JRzVtZ5MM71GJnU7HAV.png', 'desc2', '2023-08-03 20:11:26', '2023-08-03 20:11:26'),
(2, 'food', 'fichiers/s96b6N48sia3Lh4A3Fkq7uv6ksAltCltWdpsbPSA.png', 'desc2', '2023-08-03 20:11:44', '2023-08-03 20:11:44');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `Name`, `Email`, `Subject`, `Message`, `created_at`, `updated_at`) VALUES
(3, 'membre', 'email_test1@gmail.com', 'event', 'comment cree event dans le sit', '2023-09-01 22:25:58', '2023-09-01 22:25:58'),
(4, 'zakia', 'mohamed@gmail.com', 'd', 'u', '2023-09-04 21:24:36', '2023-09-04 21:24:36');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description_event` varchar(255) NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `categorie_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `description_event`, `start_datetime`, `end_datetime`, `role`, `categorie_id`, `created_at`, `updated_at`, `user_id`, `color`) VALUES
(2, 'tesut', 'dds', '2023-08-01 20:12:00', '2023-08-01 22:12:00', 0, 2, '2023-08-03 20:12:50', '2023-08-03 20:12:50', 1, ''),
(4, 'hello', 'n', '2023-08-07 19:07:00', '2023-08-08 19:07:00', 1, 1, '2023-08-06 19:07:30', '2023-08-06 19:07:30', 1, ''),
(5, 'tiltle 1', 'rf', '2023-08-08 19:36:00', '2023-08-09 19:36:00', 1, 2, '2023-08-07 19:36:59', '2023-08-07 19:36:59', 1, '#5880df'),
(6, 'r', 'r', '2023-08-15 19:38:00', '2023-08-16 19:38:00', 0, 2, '2023-08-07 19:38:57', '2023-08-07 19:38:57', 1, '#c0bb26'),
(8, 'dinner', 'desc2', '2023-08-15 13:10:00', '2023-08-15 13:40:00', 0, 2, '2023-09-01 12:11:37', '2023-09-01 12:11:37', 6, '#e3ccf0');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `families`
--

CREATE TABLE `families` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name_famile` varchar(255) NOT NULL,
  `Adress_famile` varchar(255) NOT NULL,
  `Tell_fixe` varchar(255) NOT NULL,
  `Image_famile` varchar(255) NOT NULL,
  `Email_famile` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `families`
--

INSERT INTO `families` (`id`, `Name_famile`, `Adress_famile`, `Tell_fixe`, `Image_famile`, `Email_famile`, `created_at`, `updated_at`) VALUES
(1, 'kaabouchj', 'risaani ciry', '04894709364', 'fichiers/fYF2j4b0ZuYTFNRRmttNNCKgovTXjOD8Ufgr3cyx.png', 'madmb@hmav.com', '2023-08-03 20:13:37', '2023-08-03 20:13:37'),
(2, 'lhaj', 'tcsa va maT', '0809632', 'fichiers/Jw5GX0RGZPB2tRrqBQk8SJNhpGCN3prrnXg5FswT.png', 'lhaj_homme@gmail.com', '2023-08-13 20:36:47', '2023-08-13 20:36:47'),
(3, 'lhaaaaj', 'auis uhs', '9486365', 'fichiers/meJ8JCUm3EINgGn29gxtrXv45TrkpmekiMl0SW98.png', 'meyd@hmaod.vpm', '2023-08-13 20:54:58', '2023-08-13 20:54:58'),
(4, 'hajjjjj', 'dsjn', '7879898', 'fichiers/583yh6JI2YLT34iHpAjewD3uMxGgGX2Lu3TE0jxD.png', 'ms@gmail.com', '2023-08-13 23:14:16', '2023-08-13 23:14:16'),
(6, 'kaabouch', 'r', '0600468073', 'fichiers/4GP0R1hT1ubr3bQydR9C3iW7vj7MtYClSejXZM9X.jpg', 'kaabouch249@gmail.com', '2023-09-01 21:59:47', '2023-09-01 22:20:28'),
(7, 'test famile', 'riss', '0689898', 'fichiers/d6IoYwAuoJ9b60Iz38gPPXpCabIgTMkCoI68TdXU.png', 'test@gmail.com', '2023-09-01 22:05:18', '2023-09-01 22:05:18'),
(8, 'test famile', 'r', 'e', 'fichiers/Bh6g8SvHrsP6uJXz6cr6sLVyDobFjXTwARYVb2Su.png', 'd', '2023-09-20 10:59:42', '2023-09-20 10:59:42');

-- --------------------------------------------------------

--
-- Structure de la table `information_sites`
--

CREATE TABLE `information_sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `information_sites`
--

INSERT INTO `information_sites` (`id`, `telephone`, `description`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, '060000000', 'Family Calendar est un calendrier interactif partagé conçu pour les familles. Organisez facilement vos emplois du temps, partagez des événements et restez synchronisés en un seul \r\n                      endroit pratique. Simplifiez la coordination familiale pour des moments inoubliables ensemble.', 'admin_page@fullc.com', 'maroc , marrakech , ru 19', '2023-08-20 18:54:25', '2023-08-20 19:07:48');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2000_07_01_195135_create_families_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_07_20_0930_create_categories_table', 1),
(7, '2023_07_20_093846_create_events_table', 1),
(8, '2023_07_20_110306_add_foreign_key_id_user_to_events', 1),
(9, '2023_08_03_185045_add_is_accept_to_users', 1),
(10, '2023_08_03_193259_add_token_invitation_to_users', 1),
(11, '2023_08_07_182503_create_contacts_table', 2),
(12, '2023_08_07_190247_add_role_to_users', 3),
(13, '2023_08_07_192745_add_color_to_events', 4),
(14, '2023_08_13_200727_add_responsable_to_users', 5),
(15, '2023_08_20_182349_create_information_sites_table', 6);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `sex` varchar(255) NOT NULL,
  `image_user` varchar(2048) DEFAULT NULL,
  `CIN` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `famile_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_accepted` tinyint(1) NOT NULL DEFAULT 0,
  `invitation_token` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT 0,
  `responsable` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `prenom`, `nationalite`, `date_naissance`, `sex`, `image_user`, `CIN`, `email_verified_at`, `password`, `remember_token`, `famile_id`, `created_at`, `updated_at`, `is_accepted`, `invitation_token`, `role`, `responsable`) VALUES
(1, 'mohamed', 'mohamed@gmail.com', 'kaabouch', 'maroc', '2002-11-19', 'homme', 'profile_pictures/JltN05UcMLNKh7sYF0TAkpdF8qrX1n8uOr1yfOYY.png', 'ud16357', NULL, '$2y$10$h7r/CNOfypnJlz3gR9Qb1Oc.Xrhr0Tu.ERlrP3h.3NTV1.EkfgnnK', NULL, NULL, '2023-08-03 20:10:39', '2023-08-17 17:51:57', 0, 'test', 1, 0),
(4, 'lhaj', 'lhaj@gmail.com', 'sghjzx', 'maroc', '2001-11-11', 'homme', 'profile_pictures/7nuBz2NfUgj55bk85DOB5oPtaT9IqzdrloFasPqD.jpg', 'sxkj', NULL, '$2y$10$TSuyv1sGPUThU4R1.VfziuccvnuM/VywUKjrshlL22itfmAtVy5sq', NULL, 2, '2023-08-19 19:30:17', '2023-09-01 22:15:51', 0, NULL, 0, NULL),
(5, 'irisi', 'irisi@gmail.com', 'mmm', 'maroc', '2000-11-11', 'homme', 'profile_pictures/5KonOAqhZsZvyvf0daOAz4ASxwINEejc2yFIgJBb.jpg', 'dd877', NULL, '$2y$10$ZpF8zDCunInGqfmWHp/jTuvkQ2EuO3y8/E6cSfUPOwEtA79JamcOq', NULL, 7, '2023-09-01 11:53:16', '2023-09-01 22:16:50', 0, NULL, 0, 1),
(6, 'test', 'test1@gmail.com', 'irisi', 'maroc', '2000-11-11', 'femme', 'profile_pictures/Sr5DTlnyfrkThhQz5gdrvB2VafvJ0DoJzL6UPYwe.jpg', 'irisi1563', NULL, '$2y$10$R/i6N2ZyWBdwcALDuQyPQ.U5ZNoJ/52/2PZSJ8NppcHwK.97IMGnS', NULL, 7, '2023-09-01 12:09:38', '2023-09-03 09:04:09', 0, NULL, 0, NULL),
(7, 'zakia', 'zakia@gmail.com', 's', 'd', '1999-11-11', 'femme', 'profile_pictures/7ONg2rgIE2CfaBTzwl1M4LLLcaKcuG9hg36D7drA.png', 'w', NULL, '$2y$10$I6p4KFLqrZtZ4qfjQUZ0V.2ZN6PJhPD7S/gvfu1cOxsS7zx8C1fC6', NULL, NULL, '2023-09-04 21:26:31', '2023-09-04 21:26:31', 0, NULL, 0, 1),
(8, 'irisi', 'moh@gmail.com', 'ka', 'mar', '2000-09-08', 'homme', 'profile_pictures/QsajMz1KjYkppJRMXm5ZZrTMAzpwM2I5bbl14AEt.png', 'us dn82', NULL, '$2y$10$sW76jXkonmX.D1U54LKYF.ZIo.9s.8n5Mj6Uq.Cp7JJ/GCyjITZCS', NULL, NULL, '2023-09-18 09:36:28', '2023-09-18 09:36:28', 0, NULL, 0, 1),
(9, 'test', 'testtt@gmail.com', 'mm', 'maroc', '2002-11-11', 'homme', 'profile_pictures/ETxKUqtEq32lv3cCxc5PZ42srvCghXdt9xlcZXRb.jpg', 'uhsd', NULL, '$2y$10$KEmlV5225i2bwoL4oSvqW.NOggCLTfGAcR9lLyBcDcVH8CfsPLKuO', NULL, 8, '2023-09-20 10:58:16', '2023-09-20 10:59:42', 0, NULL, 0, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_categorie_id_foreign` (`categorie_id`),
  ADD KEY `events_user_id_foreign` (`user_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `information_sites`
--
ALTER TABLE `information_sites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_famile_id_foreign` (`famile_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `families`
--
ALTER TABLE `families`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `information_sites`
--
ALTER TABLE `information_sites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_famile_id_foreign` FOREIGN KEY (`famile_id`) REFERENCES `families` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
