DROP DATABASE IF EXISTS `capstonedb`;

CREATE DATABASE IF NOT EXISTS `capstonedb`;

USE `capstonedb`;

DROP TABLE IF EXISTS `user`;

CREATE TABLE IF NOT EXISTS `user` (
    `id` INT NOT NULL UNIQUE auto_increment,
    `fname` VARCHAR(45) NOT NULL,
    `lname` VARCHAR(45) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `pass` VARCHAR(128) NOT NULL,
    `dob` DATE NOT NULL,
    `phone` VARCHAR(15) NOT NULL,
    `sex` VARCHAR(6) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `email` (`email`)
);