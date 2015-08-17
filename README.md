# Beta
A portal for public betas and projects in development

#Setup:

Clone project into a web directory

Change  the 3 first variables in dbconnect.php to your MySQL servers address, username and password.

Run this SQL code to prepare the databases:
-----------------------------------------------
```sql
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `beta`
--
CREATE DATABASE IF NOT EXISTS `beta` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `beta`;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `project_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `project_id` int(11) NOT NULL,
  `project_owner` int(11) NOT NULL,
  `public` tinyint(1) NOT NULL DEFAULT '1',
  `project_name` varchar(50) NOT NULL,
  `project_description_short` varchar(250) NOT NULL,
  `project_description` mediumtext NOT NULL COMMENT 'Long description about the project'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `registration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `score` bigint(20) NOT NULL DEFAULT '10' COMMENT 'keeps track of your exp. An infamy like thing, earned by being active and exploring the system.',
  `about` varchar(1000) DEFAULT NULL COMMENT 'Should contain ~250 words about the user',
  `picture` varchar(300) NOT NULL DEFAULT 'sources\\img\\profiles\\_default.png' COMMENT 'Local link to profile picture, URL also usable?'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD UNIQUE KEY `project_id` (`project_id`),
  ADD UNIQUE KEY `project_name` (`project_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
  
  ```