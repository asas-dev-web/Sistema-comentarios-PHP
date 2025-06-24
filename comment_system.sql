CREATE DATABASE IF NOT EXISTS `comment-system`;

USE `comment-system`;

CREATE TABLE IF NOT EXISTS `tbl_comment` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `commentator` VARCHAR(255) NOT NULL,
    `comment` TEXT NOT NULL,
    `time_date_comment` DATETIME NOT NULL
);

CREATE TABLE IF NOT EXISTS `tbl_reply` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `tbl_comment_id` INT NOT NULL,
    `replier` VARCHAR(255) NOT NULL,
    `reply` TEXT NOT NULL,
    `time_date_reply` DATETIME NOT NULL,
    FOREIGN KEY (`tbl_comment_id`) REFERENCES `tbl_comment`(`id`) ON DELETE CASCADE
);

