-- Tea Transfer database schema
-- Compatible with MySQL 8.x / MariaDB 10.x

CREATE DATABASE IF NOT EXISTS `tea_transfer`
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE `tea_transfer`;

CREATE TABLE IF NOT EXISTS `users` (
    `user_id` VARCHAR(64) NOT NULL,
    `username` VARCHAR(50) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `balance` DECIMAL(15,2) NOT NULL DEFAULT 0.00,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`user_id`),
    UNIQUE KEY `uq_users_username` (`username`),
    UNIQUE KEY `uq_users_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `transactions` (
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `sender_email` VARCHAR(255) NOT NULL,
    `recipient_email` VARCHAR(255) NOT NULL,
    `sender_username` VARCHAR(50) NOT NULL,
    `recipient_username` VARCHAR(50) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `status` TINYINT NOT NULL DEFAULT 1,
    `amount` DECIMAL(15,2) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `idx_transactions_sender` (`sender_email`, `id`),
    KEY `idx_transactions_recipient` (`recipient_email`, `id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
