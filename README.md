# Beta
A portal for public betas and projects in development


Setup:
Clone project into a web directory

Change  the 3 first variables in dbconnect.php to your MySQL servers address, username and password.

Run this SQL code to prepare the databases:
CREATE DATABASE `beta` ;
CREATE TABLE `beta`.`users` (`user_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,`username` VARCHAR( 25 ) NOT NULL ,`email` VARCHAR( 35 ) NOT NULL ,`password` VARCHAR( 50 ) NOT NULL ,UNIQUE (`email`)) ENGINE = MYISAM ;
