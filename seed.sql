-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 02:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";

--
-- Database: `healthbridge`
--

-- --------------------------------------------------------

--
-- Table structure for table `abilities`
--

CREATE TABLE `abilities`
(
    `id`          bigint(20) UNSIGNED NOT NULL,
    `name`        varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `description` text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `created_at`  timestamp NULL DEFAULT NULL,
    `updated_at`  timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments`
(
    `id`             bigint(20) UNSIGNED NOT NULL,
    `user_id`        bigint(20) UNSIGNED NOT NULL,
    `department_id`  bigint(20) UNSIGNED NOT NULL,
    `total`          decimal(10, 2) NOT NULL                 DEFAULT 10000.00,
    `type`           enum('check-up','consultation','follow-up','diagnostic','emergency') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'consultation',
    `health_status`  varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `notes`          varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `scheduled_date` timestamp      NOT NULL                 DEFAULT current_timestamp() ON UPDATE current_timestamp (),
    `created_by`     bigint(20) UNSIGNED DEFAULT NULL,
    `updated_by`     bigint(20) UNSIGNED DEFAULT NULL,
    `created_at`     timestamp NULL DEFAULT NULL,
    `updated_at`     timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `user_id`, `department_id`, `total`, `type`, `health_status`, `notes`,
                            `scheduled_date`, `created_by`, `updated_by`, `created_at`, `updated_at`)
VALUES (1, 1, 1, '10000.00', 'consultation', NULL, NULL, '2023-08-17 11:47:09', 1, NULL, '2023-08-17 10:47:09',
        '2023-08-17 10:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_status`
--

CREATE TABLE `appointment_status`
(
    `id`             bigint(20) UNSIGNED NOT NULL,
    `appointment_id` bigint(20) UNSIGNED NOT NULL,
    `status_id`      bigint(20) UNSIGNED NOT NULL,
    `occurred_at`    timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp (),
    `created_by`     bigint(20) UNSIGNED DEFAULT NULL,
    `updated_by`     bigint(20) UNSIGNED DEFAULT NULL,
    `created_at`     timestamp NULL DEFAULT NULL,
    `updated_at`     timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments`
(
    `id`         bigint(20) UNSIGNED NOT NULL,
    `name`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `slug`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_by` bigint(20) UNSIGNED DEFAULT NULL,
    `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `slug`, `created_by`, `updated_by`, `created_at`, `updated_at`)
VALUES (1, 'ANAESTHESIOLOGY', 'anaesthesiology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (2, 'AUDIOLOGIST', 'audiologist', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (3, 'CARDIOLOGY', 'cardiology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (4, 'DENTISTRY', 'dentistry', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (5, 'DERMATOLOGY', 'dermatology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (6, 'DIETETICS', 'dietetics', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (7, 'ENDOCRINOLOGY', 'endocrinology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (8, 'GASTROENTEROLOGY', 'gastroenterology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (9, 'HAEMATOLOGY', 'haematology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (10, 'NEPHROLOGY', 'nephrology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (11, 'NEUROLOGY', 'neurology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (12, 'OPHTHALMOLOGY', 'ophthalmology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (13, 'OPTOMETRY', 'optometry', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (14, 'ORTHODONTICS', 'orthodontics', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (15, 'ORTHOPAEDICS', 'orthopaedics', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (16, 'PHYSIOTHERAPY', 'physiotherapy', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (17, 'PSYCHIATRY', 'psychiatry', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (18, 'PULMONOLOGY', 'pulmonology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (19, 'RHEUMATOLOGY', 'rheumatology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (20, 'UROLOGY', 'urology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs`
(
    `id`         bigint(20) UNSIGNED NOT NULL,
    `uuid`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `connection` text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `queue`      text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `payload`    longtext COLLATE utf8mb4_unicode_ci     NOT NULL,
    `exception`  longtext COLLATE utf8mb4_unicode_ci     NOT NULL,
    `failed_at`  timestamp                               NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations`
(
    `id`        int(10) UNSIGNED NOT NULL,
    `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `batch`     int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES (1, '2012_08_15_073056_create_abilities_table', 1),
       (2, '2013_08_15_073029_create_roles_table', 1),
       (3, '2014_10_12_000000_create_users_table', 1),
       (4, '2014_10_12_000001_add_authors_to_roles_table', 1),
       (5, '2014_10_12_100000_create_password_reset_tokens_table', 1),
       (6, '2019_08_19_000000_create_failed_jobs_table', 1),
       (7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
       (8, '2023_08_14_212226_create_departments_table', 1),
       (9, '2023_08_14_212900_create_appointments_table', 1),
       (10, '2023_08_15_083216_create_transactions_table', 1),
       (11, '2023_08_15_092646_create_settings_table', 1),
       (12, '2023_08_16_054903_create_statuses_table', 1),
       (13, '2023_08_16_055138_create_appointment_status_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens`
(
    `email`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens`
(
    `id`             bigint(20) UNSIGNED NOT NULL,
    `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `tokenable_id`   bigint(20) UNSIGNED NOT NULL,
    `name`           varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token`          varchar(64) COLLATE utf8mb4_unicode_ci  NOT NULL,
    `abilities`      text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `last_used_at`   timestamp NULL DEFAULT NULL,
    `expires_at`     timestamp NULL DEFAULT NULL,
    `created_at`     timestamp NULL DEFAULT NULL,
    `updated_at`     timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles`
(
    `id`         bigint(20) UNSIGNED NOT NULL,
    `name`       varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
    `abilities`  longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`abilities`)),
    `attribute`  varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    `created_by` bigint(20) UNSIGNED DEFAULT NULL,
    `updated_by` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings`
(
    `id`                bigint(20) UNSIGNED NOT NULL,
    `logo`              varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `title`             varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `description`       varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `banners`           longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`banners`)),
    `email`             varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `phone`             varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `address`           varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `social_links`      longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`social_links`)),
    `about`             longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`about`)),
    `footer_quote`      varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `usd_exchange_rate` int(11) NOT NULL DEFAULT 500,
    `meta`              longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`meta`)),
    `created_by`        bigint(20) UNSIGNED DEFAULT NULL,
    `updated_by`        bigint(20) UNSIGNED DEFAULT NULL,
    `created_at`        timestamp NULL DEFAULT NULL,
    `updated_at`        timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses`
(
    `id`         bigint(20) UNSIGNED NOT NULL,
    `name`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `sequence`   int(10) UNSIGNED NOT NULL,
    `created_by` bigint(20) UNSIGNED DEFAULT NULL,
    `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `sequence`, `created_by`, `updated_by`, `created_at`, `updated_at`)
VALUES (1, 'Confirmed', 1, 1, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (2, 'In-progress', 2, 1, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (3, 'Cancelled', 3, 1, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (4, 'Completed', 4, 1, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions`
(
    `id`             bigint(20) UNSIGNED NOT NULL,
    `appointment_id` bigint(20) UNSIGNED NOT NULL,
    `reference`      varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
    `amount`         decimal(10, 2)                         NOT NULL,
    `channel`        enum('paystack','cash','transfer') COLLATE utf8mb4_unicode_ci NOT NULL,
    `paid_at`        timestamp NULL DEFAULT NULL,
    `created_by`     bigint(20) UNSIGNED DEFAULT NULL,
    `updated_by`     bigint(20) UNSIGNED DEFAULT NULL,
    `created_at`     timestamp NULL DEFAULT NULL,
    `updated_at`     timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users`
(
    `id`                bigint(20) UNSIGNED NOT NULL,
    `first_name`        varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
    `last_name`         varchar(45) COLLATE utf8mb4_unicode_ci  DEFAULT NULL,
    `email`             varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `email_verified_at` timestamp NULL DEFAULT NULL,
    `phone`             varchar(45) COLLATE utf8mb4_unicode_ci  DEFAULT NULL,
    `password`          varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `gender`            enum('M','F') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'M',
    `language`          enum('english','yoruba','igbo','hausa') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'english',
    `photo`             varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `address`           text COLLATE utf8mb4_unicode_ci         DEFAULT NULL,
    `type`              enum('admin','patient') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'patient',
    `role_id`           bigint(20) UNSIGNED DEFAULT NULL,
    `notifiable`        tinyint(1) NOT NULL DEFAULT 1,
    `login_count`       int(11) NOT NULL DEFAULT 0,
    `last_login`        timestamp NULL DEFAULT NULL,
    `banned_until`      datetime                                DEFAULT NULL,
    `meta`              longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`meta`)),
    `remember_token`    varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at`        timestamp NULL DEFAULT NULL,
    `updated_at`        timestamp NULL DEFAULT NULL,
    `created_by`        bigint(20) UNSIGNED DEFAULT NULL,
    `updated_by`        bigint(20) UNSIGNED DEFAULT NULL,
    `deleted_at`        timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `phone`, `password`, `gender`,
                     `language`, `photo`, `address`, `type`, `role_id`, `notifiable`, `login_count`, `last_login`,
                     `banned_until`, `meta`, `remember_token`, `created_at`, `updated_at`, `created_by`, `updated_by`,
                     `deleted_at`)
VALUES (1, 'Ogar', 'Job', 'ask4rapzo@gmail.com', '2023-08-17 10:47:09', '08124409806',
        '$2y$10$.ZxvcpvDXdiSPXGQLS4GMetbGLhp6CptlVhY9BDvkLW8hMcLF8afW', 'M', 'english', NULL, NULL, 'admin', NULL, 1, 0,
        NULL, NULL, NULL, 'BMsluaXeSO', '2023-08-17 10:47:09', '2023-08-17 10:47:09', NULL, NULL, NULL),
       (2, 'Joseph', 'Bassey', 'ogarjobbassey@gmail.com', '2023-08-17 10:47:09', '08126012460',
        '$2y$10$.ZxvcpvDXdiSPXGQLS4GMetbGLhp6CptlVhY9BDvkLW8hMcLF8afW', 'M', 'english', NULL, NULL, 'admin', NULL, 1, 0,
        NULL, NULL, NULL, '9TWqXF0YX6', '2023-08-17 10:47:09', '2023-08-17 10:47:09', 1, NULL, NULL),
       (3, 'Samuel', 'Mashok', 'sammmash@gmail.com', '2023-08-17 10:47:09', '08126012678',
        '$2y$10$.ZxvcpvDXdiSPXGQLS4GMetbGLhp6CptlVhY9BDvkLW8hMcLF8afW', 'M', 'english', NULL, NULL, 'patient', NULL, 1,
        0, NULL, NULL, NULL, 'MrlmxNH5XR', '2023-08-17 10:47:09', '2023-08-17 10:47:09', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abilities`
--
ALTER TABLE `abilities`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `abilities_name_unique` (`name`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
    ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_user_id_foreign` (`user_id`),
  ADD KEY `appointments_department_id_foreign` (`department_id`),
  ADD KEY `appointments_created_by_foreign` (`created_by`),
  ADD KEY `appointments_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `appointment_status`
--
ALTER TABLE `appointment_status`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `appointment_status_appointment_id_status_id_unique` (`appointment_id`,`status_id`),
  ADD KEY `appointment_status_status_id_foreign` (`status_id`),
  ADD KEY `appointment_status_created_by_foreign` (`created_by`),
  ADD KEY `appointment_status_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_name_unique` (`name`),
  ADD UNIQUE KEY `departments_slug_unique` (`slug`),
  ADD KEY `departments_created_by_foreign` (`created_by`),
  ADD KEY `departments_updated_by_foreign` (`updated_by`);

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
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
    ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_attribute_unique` (`attribute`),
  ADD KEY `roles_created_by_foreign` (`created_by`),
  ADD KEY `roles_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
    ADD PRIMARY KEY (`id`),
  ADD KEY `settings_created_by_foreign` (`created_by`),
  ADD KEY `settings_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statuses_name_unique` (`name`),
  ADD UNIQUE KEY `statuses_sequence_unique` (`sequence`),
  ADD KEY `statuses_created_by_foreign` (`created_by`),
  ADD KEY `statuses_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transactions_reference_unique` (`reference`),
  ADD KEY `transactions_appointment_id_foreign` (`appointment_id`),
  ADD KEY `transactions_created_by_foreign` (`created_by`),
  ADD KEY `transactions_updated_by_foreign` (`updated_by`),
  ADD KEY `transactions_paid_at_index` (`paid_at`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_created_by_foreign` (`created_by`),
  ADD KEY `users_updated_by_foreign` (`updated_by`),
  ADD KEY `users_gender_index` (`gender`);
ALTER TABLE `users`
    ADD FULLTEXT KEY `users_last_name_first_name_phone_email_fulltext` (`last_name`,`first_name`,`phone`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abilities`
--
ALTER TABLE `abilities`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_status`
--
ALTER TABLE `appointment_status`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
    MODIFY `id` int (10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
    ADD CONSTRAINT `appointments_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `appointments_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `appointments_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `appointments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `appointment_status`
--
ALTER TABLE `appointment_status`
    ADD CONSTRAINT `appointment_status_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`),
  ADD CONSTRAINT `appointment_status_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `appointment_status_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `appointment_status_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
    ADD CONSTRAINT `departments_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `departments_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
    ADD CONSTRAINT `roles_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `roles_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
    ADD CONSTRAINT `settings_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `settings_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `statuses`
--
ALTER TABLE `statuses`
    ADD CONSTRAINT `statuses_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `statuses_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
    ADD CONSTRAINT `transactions_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`),
  ADD CONSTRAINT `transactions_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transactions_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
    ADD CONSTRAINT `users_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `users_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);
COMMIT;
-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 02:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";

--
-- Database: `healthbridge`
--

-- --------------------------------------------------------

--
-- Table structure for table `abilities`
--

CREATE TABLE `abilities`
(
    `id`          bigint(20) UNSIGNED NOT NULL,
    `name`        varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `description` text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `created_at`  timestamp NULL DEFAULT NULL,
    `updated_at`  timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments`
(
    `id`             bigint(20) UNSIGNED NOT NULL,
    `user_id`        bigint(20) UNSIGNED NOT NULL,
    `department_id`  bigint(20) UNSIGNED NOT NULL,
    `total`          decimal(10, 2) NOT NULL                 DEFAULT 10000.00,
    `type`           enum('check-up','consultation','follow-up','diagnostic','emergency') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'consultation',
    `health_status`  varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `notes`          varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `scheduled_date` timestamp      NOT NULL                 DEFAULT current_timestamp() ON UPDATE current_timestamp (),
    `created_by`     bigint(20) UNSIGNED DEFAULT NULL,
    `updated_by`     bigint(20) UNSIGNED DEFAULT NULL,
    `created_at`     timestamp NULL DEFAULT NULL,
    `updated_at`     timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `user_id`, `department_id`, `total`, `type`, `health_status`, `notes`,
                            `scheduled_date`, `created_by`, `updated_by`, `created_at`, `updated_at`)
VALUES (1, 1, 1, '10000.00', 'consultation', NULL, NULL, '2023-08-17 11:47:09', 1, NULL, '2023-08-17 10:47:09',
        '2023-08-17 10:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_status`
--

CREATE TABLE `appointment_status`
(
    `id`             bigint(20) UNSIGNED NOT NULL,
    `appointment_id` bigint(20) UNSIGNED NOT NULL,
    `status_id`      bigint(20) UNSIGNED NOT NULL,
    `occurred_at`    timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp (),
    `created_by`     bigint(20) UNSIGNED DEFAULT NULL,
    `updated_by`     bigint(20) UNSIGNED DEFAULT NULL,
    `created_at`     timestamp NULL DEFAULT NULL,
    `updated_at`     timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments`
(
    `id`         bigint(20) UNSIGNED NOT NULL,
    `name`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `slug`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_by` bigint(20) UNSIGNED DEFAULT NULL,
    `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `slug`, `created_by`, `updated_by`, `created_at`, `updated_at`)
VALUES (1, 'ANAESTHESIOLOGY', 'anaesthesiology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (2, 'AUDIOLOGIST', 'audiologist', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (3, 'CARDIOLOGY', 'cardiology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (4, 'DENTISTRY', 'dentistry', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (5, 'DERMATOLOGY', 'dermatology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (6, 'DIETETICS', 'dietetics', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (7, 'ENDOCRINOLOGY', 'endocrinology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (8, 'GASTROENTEROLOGY', 'gastroenterology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (9, 'HAEMATOLOGY', 'haematology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (10, 'NEPHROLOGY', 'nephrology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (11, 'NEUROLOGY', 'neurology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (12, 'OPHTHALMOLOGY', 'ophthalmology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (13, 'OPTOMETRY', 'optometry', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (14, 'ORTHODONTICS', 'orthodontics', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (15, 'ORTHOPAEDICS', 'orthopaedics', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (16, 'PHYSIOTHERAPY', 'physiotherapy', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (17, 'PSYCHIATRY', 'psychiatry', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (18, 'PULMONOLOGY', 'pulmonology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (19, 'RHEUMATOLOGY', 'rheumatology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (20, 'UROLOGY', 'urology', NULL, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs`
(
    `id`         bigint(20) UNSIGNED NOT NULL,
    `uuid`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `connection` text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `queue`      text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `payload`    longtext COLLATE utf8mb4_unicode_ci     NOT NULL,
    `exception`  longtext COLLATE utf8mb4_unicode_ci     NOT NULL,
    `failed_at`  timestamp                               NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations`
(
    `id`        int(10) UNSIGNED NOT NULL,
    `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `batch`     int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES (1, '2012_08_15_073056_create_abilities_table', 1),
       (2, '2013_08_15_073029_create_roles_table', 1),
       (3, '2014_10_12_000000_create_users_table', 1),
       (4, '2014_10_12_000001_add_authors_to_roles_table', 1),
       (5, '2014_10_12_100000_create_password_reset_tokens_table', 1),
       (6, '2019_08_19_000000_create_failed_jobs_table', 1),
       (7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
       (8, '2023_08_14_212226_create_departments_table', 1),
       (9, '2023_08_14_212900_create_appointments_table', 1),
       (10, '2023_08_15_083216_create_transactions_table', 1),
       (11, '2023_08_15_092646_create_settings_table', 1),
       (12, '2023_08_16_054903_create_statuses_table', 1),
       (13, '2023_08_16_055138_create_appointment_status_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens`
(
    `email`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens`
(
    `id`             bigint(20) UNSIGNED NOT NULL,
    `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `tokenable_id`   bigint(20) UNSIGNED NOT NULL,
    `name`           varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token`          varchar(64) COLLATE utf8mb4_unicode_ci  NOT NULL,
    `abilities`      text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `last_used_at`   timestamp NULL DEFAULT NULL,
    `expires_at`     timestamp NULL DEFAULT NULL,
    `created_at`     timestamp NULL DEFAULT NULL,
    `updated_at`     timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles`
(
    `id`         bigint(20) UNSIGNED NOT NULL,
    `name`       varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
    `abilities`  longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`abilities`)),
    `attribute`  varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    `created_by` bigint(20) UNSIGNED DEFAULT NULL,
    `updated_by` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings`
(
    `id`                bigint(20) UNSIGNED NOT NULL,
    `logo`              varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `title`             varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `description`       varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `banners`           longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`banners`)),
    `email`             varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `phone`             varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `address`           varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `social_links`      longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`social_links`)),
    `about`             longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`about`)),
    `footer_quote`      varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `usd_exchange_rate` int(11) NOT NULL DEFAULT 500,
    `meta`              longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`meta`)),
    `created_by`        bigint(20) UNSIGNED DEFAULT NULL,
    `updated_by`        bigint(20) UNSIGNED DEFAULT NULL,
    `created_at`        timestamp NULL DEFAULT NULL,
    `updated_at`        timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses`
(
    `id`         bigint(20) UNSIGNED NOT NULL,
    `name`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `sequence`   int(10) UNSIGNED NOT NULL,
    `created_by` bigint(20) UNSIGNED DEFAULT NULL,
    `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `sequence`, `created_by`, `updated_by`, `created_at`, `updated_at`)
VALUES (1, 'Confirmed', 1, 1, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (2, 'In-progress', 2, 1, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (3, 'Cancelled', 3, 1, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09'),
       (4, 'Completed', 4, 1, NULL, '2023-08-17 10:47:09', '2023-08-17 10:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions`
(
    `id`             bigint(20) UNSIGNED NOT NULL,
    `appointment_id` bigint(20) UNSIGNED NOT NULL,
    `reference`      varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
    `amount`         decimal(10, 2)                         NOT NULL,
    `channel`        enum('paystack','cash','transfer') COLLATE utf8mb4_unicode_ci NOT NULL,
    `paid_at`        timestamp NULL DEFAULT NULL,
    `created_by`     bigint(20) UNSIGNED DEFAULT NULL,
    `updated_by`     bigint(20) UNSIGNED DEFAULT NULL,
    `created_at`     timestamp NULL DEFAULT NULL,
    `updated_at`     timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users`
(
    `id`                bigint(20) UNSIGNED NOT NULL,
    `first_name`        varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
    `last_name`         varchar(45) COLLATE utf8mb4_unicode_ci  DEFAULT NULL,
    `email`             varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `email_verified_at` timestamp NULL DEFAULT NULL,
    `phone`             varchar(45) COLLATE utf8mb4_unicode_ci  DEFAULT NULL,
    `password`          varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `gender`            enum('M','F') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'M',
    `language`          enum('english','yoruba','igbo','hausa') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'english',
    `photo`             varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `address`           text COLLATE utf8mb4_unicode_ci         DEFAULT NULL,
    `type`              enum('admin','patient') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'patient',
    `role_id`           bigint(20) UNSIGNED DEFAULT NULL,
    `notifiable`        tinyint(1) NOT NULL DEFAULT 1,
    `login_count`       int(11) NOT NULL DEFAULT 0,
    `last_login`        timestamp NULL DEFAULT NULL,
    `banned_until`      datetime                                DEFAULT NULL,
    `meta`              longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`meta`)),
    `remember_token`    varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at`        timestamp NULL DEFAULT NULL,
    `updated_at`        timestamp NULL DEFAULT NULL,
    `created_by`        bigint(20) UNSIGNED DEFAULT NULL,
    `updated_by`        bigint(20) UNSIGNED DEFAULT NULL,
    `deleted_at`        timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `phone`, `password`, `gender`,
                     `language`, `photo`, `address`, `type`, `role_id`, `notifiable`, `login_count`, `last_login`,
                     `banned_until`, `meta`, `remember_token`, `created_at`, `updated_at`, `created_by`, `updated_by`,
                     `deleted_at`)
VALUES (1, 'Ogar', 'Job', 'ask4rapzo@gmail.com', '2023-08-17 10:47:09', '08124409806',
        '$2y$10$.ZxvcpvDXdiSPXGQLS4GMetbGLhp6CptlVhY9BDvkLW8hMcLF8afW', 'M', 'english', NULL, NULL, 'admin', NULL, 1, 0,
        NULL, NULL, NULL, 'BMsluaXeSO', '2023-08-17 10:47:09', '2023-08-17 10:47:09', NULL, NULL, NULL),
       (2, 'Joseph', 'Bassey', 'ogarjobbassey@gmail.com', '2023-08-17 10:47:09', '08126012460',
        '$2y$10$.ZxvcpvDXdiSPXGQLS4GMetbGLhp6CptlVhY9BDvkLW8hMcLF8afW', 'M', 'english', NULL, NULL, 'admin', NULL, 1, 0,
        NULL, NULL, NULL, '9TWqXF0YX6', '2023-08-17 10:47:09', '2023-08-17 10:47:09', 1, NULL, NULL),
       (3, 'Samuel', 'Mashok', 'sammmash@gmail.com', '2023-08-17 10:47:09', '08126012678',
        '$2y$10$.ZxvcpvDXdiSPXGQLS4GMetbGLhp6CptlVhY9BDvkLW8hMcLF8afW', 'M', 'english', NULL, NULL, 'patient', NULL, 1,
        0, NULL, NULL, NULL, 'MrlmxNH5XR', '2023-08-17 10:47:09', '2023-08-17 10:47:09', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abilities`
--
ALTER TABLE `abilities`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `abilities_name_unique` (`name`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
    ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_user_id_foreign` (`user_id`),
  ADD KEY `appointments_department_id_foreign` (`department_id`),
  ADD KEY `appointments_created_by_foreign` (`created_by`),
  ADD KEY `appointments_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `appointment_status`
--
ALTER TABLE `appointment_status`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `appointment_status_appointment_id_status_id_unique` (`appointment_id`,`status_id`),
  ADD KEY `appointment_status_status_id_foreign` (`status_id`),
  ADD KEY `appointment_status_created_by_foreign` (`created_by`),
  ADD KEY `appointment_status_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_name_unique` (`name`),
  ADD UNIQUE KEY `departments_slug_unique` (`slug`),
  ADD KEY `departments_created_by_foreign` (`created_by`),
  ADD KEY `departments_updated_by_foreign` (`updated_by`);

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
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
    ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_attribute_unique` (`attribute`),
  ADD KEY `roles_created_by_foreign` (`created_by`),
  ADD KEY `roles_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
    ADD PRIMARY KEY (`id`),
  ADD KEY `settings_created_by_foreign` (`created_by`),
  ADD KEY `settings_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statuses_name_unique` (`name`),
  ADD UNIQUE KEY `statuses_sequence_unique` (`sequence`),
  ADD KEY `statuses_created_by_foreign` (`created_by`),
  ADD KEY `statuses_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transactions_reference_unique` (`reference`),
  ADD KEY `transactions_appointment_id_foreign` (`appointment_id`),
  ADD KEY `transactions_created_by_foreign` (`created_by`),
  ADD KEY `transactions_updated_by_foreign` (`updated_by`),
  ADD KEY `transactions_paid_at_index` (`paid_at`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_created_by_foreign` (`created_by`),
  ADD KEY `users_updated_by_foreign` (`updated_by`),
  ADD KEY `users_gender_index` (`gender`);
ALTER TABLE `users`
    ADD FULLTEXT KEY `users_last_name_first_name_phone_email_fulltext` (`last_name`,`first_name`,`phone`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abilities`
--
ALTER TABLE `abilities`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_status`
--
ALTER TABLE `appointment_status`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
    MODIFY `id` int (10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
    ADD CONSTRAINT `appointments_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `appointments_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `appointments_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `appointments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `appointment_status`
--
ALTER TABLE `appointment_status`
    ADD CONSTRAINT `appointment_status_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`),
  ADD CONSTRAINT `appointment_status_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `appointment_status_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `appointment_status_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
    ADD CONSTRAINT `departments_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `departments_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
    ADD CONSTRAINT `roles_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `roles_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
    ADD CONSTRAINT `settings_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `settings_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `statuses`
--
ALTER TABLE `statuses`
    ADD CONSTRAINT `statuses_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `statuses_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
    ADD CONSTRAINT `transactions_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`),
  ADD CONSTRAINT `transactions_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transactions_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
    ADD CONSTRAINT `users_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `users_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);
COMMIT;
