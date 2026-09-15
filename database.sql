CREATE DATABASE IF NOT EXISTS `tatto`
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE `bedi_tattoo`;

CREATE TABLE IF NOT EXISTS `works` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(150) NOT NULL,
    `description` TEXT NULL,
    `image` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (`id`)
) ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;
