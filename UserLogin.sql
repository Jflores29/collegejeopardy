--
-- MySQL 5.6.17
-- Mon, 09 May 2016 06:20:13 +0000
--

CREATE TABLE `user_login` (
   `User_Num` int(11) not null auto_increment,
   `Password` varchar(25) not null,
   `First_Name` varchar(25),
   `Last_Name` varchar(25),
   `UserName` varchar(25),
   `Email` varchar(35),
   PRIMARY KEY (`User_Num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

-- [Table `user_login` is empty]