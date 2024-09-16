--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` varchar(32) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `deployment` varchar(64) DEFAULT NULL,
  `document_name` varchar(128) DEFAULT NULL,
  `document_text` longtext DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT 0,
  `timestamp` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Table structure for table `exchange`
--

CREATE TABLE `exchange` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_id` varchar(32) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `prompt` text DEFAULT NULL,
  `reply` text DEFAULT NULL,
  `deployment` varchar(64) DEFAULT NULL,
  `temperature`	decimal(2,1) NULL,
  `deleted` tinyint(4) DEFAULT 0,
  `timestamp` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_exchange_chat` (`chat_id`),
  CONSTRAINT `fk_exchange_chat` FOREIGN KEY (`chat_id`) REFERENCES `chat` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Create table users
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `preferred_username` varchar(255) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL, 
  `is_admin` bool NULL,
  `ic` varchar(100) DEFAULT NULL,
  `pilot_api_keys` varchar(255) DEFAULT NULL,
  `llms_permitted` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY `id` (`id`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Add is_admin_user
ALTER TABLE `users` ADD COLUMN `is_admin` bool;

-- Add column email to users table
ALTER TABLE `users` ADD COLUMN `email` varchar(255);


