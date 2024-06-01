-- Generate the base schema
create schema if not exists `mhil`;

-- create two tables for interacting with
DROP TABLE IF EXISTS `mhil`.`albums`;
CREATE TABLE `mhil`.`albums`(
  `album_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `album_title` VARCHAR(255) NOT NULL,
  `album_artist` VARCHAR(255) NOT NULL,
  `album_year` INT NOT NULL,
  PRIMARY KEY (`album_id`),
  UNIQUE INDEX `album_id_UNIQUE` (`album_id` ASC) VISIBLE);

-- create a users table
DROP TABLE IF EXISTS `mhil`.`users`;
CREATE TABLE `mhil`.`users` (
	`user_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL,
    `created` DATETIME NOT NULL DEFAULT current_timestamp,
    PRIMARY KEY (`user_id`),
UNIQUE INDEX `user_id_UNIQUE` (`user_id` ASC, `username` ASC) VISIBLE);

-- Seed the albums table with some demo data
INSERT INTO `mhil`.`albums` (`album_title`, `album_artist`, `album_year`) VALUES ('Fear Inoculum', 'Tool', '2019');
INSERT INTO `mhil`.`albums` (`album_title`, `album_artist`, `album_year`) VALUES ('The Fat of the Land', 'The Prodigy', '1997');

-- Seed the users table with a single user
INSERT INTO `mhil`.`users` (`username`) VALUES ('graham');