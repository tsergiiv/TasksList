-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2020 at 08:58 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tasks`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20201110212350', '2020-11-10 21:24:02', 100),
('DoctrineMigrations\\Version20201111081624', '2020-11-11 08:16:30', 133);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `task` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_added` datetime NOT NULL,
  `admin_edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task`, `status`, `author`, `date_added`, `admin_edit`) VALUES
(1, 'Explain the project to key stakeholders, define goals, and get initial buy-in', 0, 'admin@admin.com', '2020-11-10 15:12:25', 0),
(2, 'List out goals, align OKRs, and outline the project', 1, 'admin@admin.com', '2020-11-10 16:32:28', 0),
(3, 'Create a project scope document', 2, 'admin@admin.com', '2020-11-10 17:45:48', 0),
(4, 'Craft a detailed project schedule', 1, 'admin@admin.com', '2020-11-10 18:10:00', 0),
(5, 'Define the roles, responsibilities, and resources', 2, 'admin@admin.com', '2020-11-10 18:19:51', 0),
(6, 'Define the communication and check-in process', 0, 'admin@admin.com', '2020-11-10 18:23:12', 0),
(7, 'Identify resources to be monitored.', 2, 'admin@admin.com', '2020-11-10 19:09:32', 0),
(8, 'Define users and workflow', 0, 'admin@admin.com', '2020-11-10 19:09:46', 0),
(9, 'Identify event sources by resource type.', 2, 'admin@admin.com', '2020-11-10 19:09:55', 0),
(10, 'Define the relationship between resources and business systems', 0, 'admin@admin.com', '2020-11-10 19:10:06', 1),
(11, 'Identify tasks and URLs by resource type.', 0, 'admin@admin.com', '2020-11-10 19:10:13', 0),
(12, 'Define the server configuration.', 1, 'admin@admin.com', '2020-11-10 19:10:19', 0),
(13, 'Identify the implementation team.', 0, 'admin@admin.com', '2020-11-10 19:10:28', 0),
(14, 'Order the server hardware for production as well as test/quality assurance (QA).', 1, 'admin@admin.com', '2020-11-10 19:10:35', 0),
(15, 'Order console machines.', 0, 'admin@admin.com', '2020-11-10 19:10:45', 0),
(16, 'Order prerequisite software.', 2, 'admin@admin.com', '2020-11-10 19:10:50', 0),
(17, 'Install test and QA servers and prerequisite software.', 1, 'admin@admin.com', '2020-11-10 19:15:05', 0),
(18, 'Install console machines and prerequisite software.', 0, 'admin@admin.com', '2020-11-10 19:15:13', 0),
(19, 'Install production servers and prerequisite software.', 0, 'admin@admin.com', '2020-11-10 19:15:22', 0),
(20, 'Consider training a key group and have them train their peers', 0, 'admin@admin.com', '2020-11-10 19:15:34', 1),
(21, 'Create configuration level objects for the production LPARs.', 2, 'admin@admin.com', '2020-11-10 19:15:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `roles`, `password`) VALUES
(3, 'admin', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$t6vJzkgQZllEnwvE+Y2V4w$aEgZOy5rkSqfycFriVkiQ7xkePzdkXMCcUClFNKuiRU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649AA08CB10` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
