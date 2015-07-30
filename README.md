# Beta
A portal for public betas and projects in development


#Setup:

Clone project into a web directory

Change  the 3 first variables in dbconnect.php to your MySQL servers address, username and password.

Run this SQL code to prepare the databases:


CREATE DATABASE IF NOT EXISTS `beta` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `beta`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `about` varchar(1000) NOT NULL COMMENT 'Should contain ~250 words about the user',
  `picture` varchar(300) NOT NULL DEFAULT 'sources\\img\\profiles\\_default.png' COMMENT 'Local link to profile picture, URL also usable?'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user_id` (`user_id`);
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT;
