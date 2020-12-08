# TSAWebApp
## Database Add-ons

  >-- Table structure for table `users`
  >
  >CREATE TABLE `users` (
  >  `id` int(4) DEFAULT NULL,
  >  `first` varchar(50) DEFAULT NULL,
  >  `last` varchar(50) DEFAULT NULL,
  >  `email` varchar(200) DEFAULT NULL,
  >  `password` varchar(200) DEFAULT NULL,
  >  `type` varchar(7) DEFAULT NULL,
  >  `gradYear` int(11) DEFAULT NULL
  >) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  >
  >
  >INSERT INTO `users` (`id`, `first`, `last`, `email`, `password`, `type`, `gradYear`) VALUES
  >(15759, 'Aeneas', 'Belton', 'beltonbelton123@gmail.com', 'asd', 'student', 2021);
  >
  >
  >
  >ALTER TABLE `users`
  >  ADD UNIQUE KEY `id` (`id`);
  >COMMIT;

  >-- Table structure for table `events`
  >
  >CREATE TABLE `events` (
  >  `id` int(11) NOT NULL,
  >  `eDate` date DEFAULT NULL,
  >  `eName` text,
  >  `seats` int(11) DEFAULT NULL,
  >  `max` int(11) DEFAULT NULL,
  >  `isOnsite` tinyint(1) DEFAULT NULL,
  >  `isTeamEvent` tinyint(1) DEFAULT NULL,
  >  `isQualifying` tinyint(1) DEFAULT NULL,
  >  `description` text
  >) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  >
  >
  >INSERT INTO `events` (`id`, `eDate`, `eName`, `seats`, `max`, `isOnsite`, `isTeamEvent`, `isQualifying`, `description`) VALUES
  >(602, '2020-12-08', 'Whoop', 5, 10, 1, 1, 1, 'Whoopidy scoop'),
  >(607, '2020-12-10', 'Boop', 5, 10, 1, 1, 1, 'Boopidy whoop'),
  >(612, '2020-12-09', 'Scoop', 5, 10, 1, 1, 1, 'Scoopidy poop'),
  >(617, '2020-12-11', 'Foop', 5, 10, 1, 1, 1, 'Foopidy Scoop');
  >
  >
  >ALTER TABLE `events`
  >  ADD PRIMARY KEY (`id`);
  >COMMIT;

  >-- Table structure for table `registration`
  >
  >CREATE TABLE `registration` (
  >  `id` tinyint(4) NOT NULL,
  >  `eventID` int(11) NOT NULL,
  >  `userID` int(11) NOT NULL,
  >  `teamId` int(11) DEFAULT NULL
  >) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  >
  >
  >INSERT INTO `registration` (`id`, `eventID`, `userID`, `teamId`) VALUES
  >(22, 612, 15759, 901);
  >
  >
  >ALTER TABLE `registration`
  >  ADD PRIMARY KEY (`id`);
  >
  >
  >ALTER TABLE `registration`
  >  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
  >COMMIT;
