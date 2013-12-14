SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `idProfiles` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `active` char(1) NOT NULL,
  PRIMARY KEY (`idProfiles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


LOCK TABLES `profiles` WRITE;
INSERT INTO `profiles` VALUES (1,'Administrators','Y'),(2,'Users','Y'),(3,'Read-Only','Y');
UNLOCK TABLES;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` char(60) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(48) NOT NULL,  
  `mustChangePassword` char(1) DEFAULT NULL,
  `Profiles` int(10) unsigned NOT NULL,
  `banned` char(1) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `suspended` char(1) NOT NULL,
  `active` char(1) DEFAULT NULL,
  PRIMARY KEY (`idUsers`),
  KEY `fk_Users_Profiles` (`Profiles`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `idOrder` int(11) NOT NULL AUTO_INCREMENT,   
  `User` int(11) NOT NULL,
  `createdAt` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idOrder`),
  KEY `fk_Order_Users` (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `packing_list`;
CREATE TABLE `packing_list` (
  `idPacking_List` int(11) NOT NULL AUTO_INCREMENT,
  `Shipment_Number` mediumtext NOT NULL,
  `Shipment_Date` datetime NOT NULL,
  `Delivery_Note` mediumtext NOT NULL,
  `Sender_Name` varchar(50) NOT NULL,
  `Sender_Code` varchar(50) NOT NULL,
  `Receiver_Name` varchar(50) NOT NULL,
  `Receiver_Code` varchar(50) NOT NULL,
  `Item_Type` varchar(45) NULL,
  `Order` int(11) NOT NULL,
  PRIMARY KEY (`idPacking_List`),
  KEY `fk_Packing_List_Order` (`Order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


DROP TABLE IF EXISTS `palete`;
CREATE TABLE `palete` (
  `idPalete` int(11) NOT NULL AUTO_INCREMENT,
  `GS1_Code` mediumtext NOT NULL,
  `Item_Type` varchar(45) NULL,
  `Order` int(11) NOT NULL,  
  PRIMARY KEY (`idPalete`),
  KEY `fk_Palete_Order` (`Order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


DROP TABLE IF EXISTS `artupal`;
CREATE TABLE `artupal` (
  `idArtupal` int(11) NOT NULL AUTO_INCREMENT,
  `Product_Code` varchar(45) NOT NULL,
  `Description` mediumtext NOT NULL,
  `Lot_Number` varchar(45) NOT NULL,
  `Quantity` decimal(2,0) NOT NULL,
  `Unit_Of_Measure` varchar(45) NOT NULL,
  `Count_Of_Units` int(11) NOT NULL,
  `Item_Type` varchar(45) NULL,
  `Palete` int(11) NOT NULL,
  PRIMARY KEY (`idArtupal`),
  KEY `fk_Artupal_Palete` (`Palete`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


DROP TABLE IF EXISTS `paketi`;
CREATE TABLE `paketi` (
  `idPaketi` int(11) NOT NULL AUTO_INCREMENT,
  `Item_Number` mediumtext NOT NULL,
  `Item_Type` varchar(45) NULL,
  `Unique_Number` mediumtext NOT NULL,
  `Product_Code` varchar(45) NOT NULL,
  `Description` mediumtext NOT NULL,
  `Production_Date` datetime NOT NULL,
  `Quantity` decimal(2,0) NOT NULL,
  `Unit_Of_Measure` varchar(45) NOT NULL,
  `Count_Of_Units` decimal(2,0) NOT NULL,
  `Number_Of_Items` int(11) NOT NULL,
  `GS1_Code` mediumtext DEFAULT NULL,
  `Country_Code` varchar(45) DEFAULT NULL,
  `Site_Code` varchar(45) DEFAULT NULL,
  `Artupal` int(11) NOT NULL,
  PRIMARY KEY (`idPaketi`),
  KEY `fk_Paketi_Artupal` (`Artupal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


DROP TABLE IF EXISTS `mikro`;
CREATE TABLE `mikro` (
  `idMikro` int(11) NOT NULL AUTO_INCREMENT,
  `Item_Number`mediumtext NOT NULL,
  `Item_Type` varchar(45) NULL,
  `GS1_Code` mediumtext NOT NULL,
  `Country_Code` varchar(45) NOT NULL,
  `Site_Code` varchar(45) NOT NULL,
  `Unique_Number` mediumtext NOT NULL,
  `Product_Code` varchar(45) NOT NULL,
  `Description` mediumtext NOT NULL,
  `Production_Date` datetime NOT NULL,
  `Quantity` mediumtext NOT NULL,
  `Unit_Of_Measure` varchar(45) NOT NULL,
  `Count_Of_Units` mediumtext NOT NULL,
  `Number_Of_Items` int(11) NOT NULL,
  `Paketi` int(11) NOT NULL,
  PRIMARY KEY (`idMikro`),
  KEY `fk_Mikro_Paketi` (`Paketi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


DROP TABLE IF EXISTS `jedinicno`;
CREATE TABLE `jedinicno` (
  `idJedinicno` int(11) NOT NULL AUTO_INCREMENT,
  `Item_Number` mediumtext DEFAULT NULL,
  `Item_Type` varchar(45) DEFAULT NULL,
  `GS1_Code` mediumtext DEFAULT NULL,
  `Country_Code` varchar(45) DEFAULT NULL,
  `Site_Code` varchar(45) DEFAULT NULL,
  `Unique_Number` mediumtext DEFAULT NULL,
  `Product_Code` varchar(45) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Production_Date` datetime DEFAULT NULL,
  `Quantity` varchar(45) DEFAULT NULL,
  `Unit_Of_Measure` varchar(45) DEFAULT NULL,
  `Count_Of_Units` int(11) DEFAULT NULL,
  `Number_Of_Items` int(11) DEFAULT NULL,
  `Mikro` int(11) NOT NULL,
  PRIMARY KEY (`idJedinicno`),
  KEY `fk_Jedinicno_Mikro` (`Mikro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;






DROP TABLE IF EXISTS `email_confirmations`;
CREATE TABLE `email_confirmations` (
  `idConfirmations` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `User` int(11) NOT NULL,
  `code` char(32) NOT NULL,
  `createdAt` int(10) unsigned NOT NULL,
  `modifiedAt` int(10) unsigned DEFAULT NULL,
  `confirmed` char(1) DEFAULT 'N',
  PRIMARY KEY (`idConfirmations`),
  KEY `fk_Confirmations_User` (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


DROP TABLE IF EXISTS `failed_logins`;
CREATE TABLE `failed_logins` (
  `idFailed` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `User` int(11) NOT NULL,
  `ipAddress` char(15) NOT NULL,
  `attempted` int(11) unsigned NOT NULL,
  PRIMARY KEY (`idFailed`),
  KEY `fk_Failed_User` (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


DROP TABLE IF EXISTS `password_changes`;
CREATE TABLE `password_changes` (
  `idChanges` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `User` int(11) NOT NULL,
  `ipAddress` char(15) NOT NULL,
  `userAgent` varchar(48) NOT NULL,
  `createdAt` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idChanges`),
  KEY `fk_Changes_User` (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `idPermissions` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Profiles` int(10) unsigned NOT NULL,
  `resource` varchar(16) NOT NULL,
  `action` varchar(16) NOT NULL,
  PRIMARY KEY (`idPermissions`),
  KEY `fk_Permissions_Profiles` (`Profiles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `remember_tokens`;
CREATE TABLE `remember_tokens` (
  `idTokens` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `User` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `userAgent` varchar(120) NOT NULL,
  `createdAt` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idTokens`),
  KEY `token` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `reset_passwords`;
CREATE TABLE `reset_passwords` (
  `idReset` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `User` int(11) NOT NULL,
  `code` varchar(48) NOT NULL,
  `createdAt` int(10) unsigned NOT NULL,
  `modifiedAt` int(10) unsigned DEFAULT NULL,
  `reset` char(1) NOT NULL,
  PRIMARY KEY (`idReset`),
  KEY `fk_Reset_User` (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `success_logins`;
CREATE TABLE `success_logins` (
  `idLogins` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `User` int(11) NOT NULL,
  `ipAddress` char(15) NOT NULL,
  `occurred` int(10) unsigned NOT NULL,
  `userAgent` varchar(120) NOT NULL,
  PRIMARY KEY (`idLogins`),
  KEY `fk_Logins_User` (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `success_logouts`;
CREATE TABLE `success_logouts` (
  `idLogouts` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `User` int(11) NOT NULL,  
  `ipAddress` char(15) NOT NULL,
  `occurred` int(10) unsigned NOT NULL,
  `userAgent` varchar(120) NOT NULL,
  PRIMARY KEY (`idLogouts`),
  KEY `fk_Logouts_User` (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `success_search`;
CREATE TABLE `success_search` (
  `idSearch` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `User` int(11) NOT NULL,  
  `ipAddress` char(15) NOT NULL,
  `occurred` int(10) unsigned NOT NULL,
  `userAgent` varchar(120) NOT NULL,
  PRIMARY KEY (`idSearch`),
  KEY `fk_Search_User` (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `search_params`;
CREATE TABLE `search_params` (
  `idParams` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Search` int(10) unsigned NOT NULL, 
  `name` varchar(32) NOT NULL,
  `value` varchar(100) NOT NULL,
  PRIMARY KEY (`idParams`),
  KEY `fk_Params_Search` (`Search`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


ALTER TABLE `users`
  ADD CONSTRAINT `fk_Users_Profiles` FOREIGN KEY (`Profiles`) REFERENCES `profiles` (`idProfiles`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `order`
  ADD CONSTRAINT `fk_Order_Users` FOREIGN KEY (`User`) REFERENCES `users` (`idUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `palete`
  ADD CONSTRAINT `fk_Palete_Order` FOREIGN KEY (`Order`) REFERENCES `order` (`idOrder`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `packing_list`
  ADD CONSTRAINT `fk_Packing_List_Order` FOREIGN KEY (`Order`) REFERENCES `order` (`idOrder`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `artupal`
  ADD CONSTRAINT `fk_Artupal_Palete` FOREIGN KEY (`Palete`) REFERENCES `palete` (`idPalete`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `jedinicno`
  ADD CONSTRAINT `fk_Jedinicno_Mikro` FOREIGN KEY (`Mikro`) REFERENCES `mikro` (`idMikro`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `mikro`
  ADD CONSTRAINT `fk_Mikro_Paketix` FOREIGN KEY (`Paketi`) REFERENCES `paketi` (`idPaketi`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `paketi`
  ADD CONSTRAINT `fk_Paketi_Artupal` FOREIGN KEY (`Artupal`) REFERENCES `artupal` (`idArtupal`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `email_confirmations`
  ADD CONSTRAINT `fk_Confirmations_User` FOREIGN KEY (`User`) REFERENCES `users` (`idUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `failed_logins`
  ADD CONSTRAINT `fk_Failed_User` FOREIGN KEY (`User`) REFERENCES `users` (`idUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `password_changes`
  ADD CONSTRAINT `fk_Changes_User` FOREIGN KEY (`User`) REFERENCES `users` (`idUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `permissions`
  ADD CONSTRAINT `fk_Permissions_Profiles` FOREIGN KEY (`Profiles`) REFERENCES `profiles` (`idProfiles`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `reset_passwords`
  ADD CONSTRAINT `fk_Reset_User` FOREIGN KEY (`User`) REFERENCES `users` (`idUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `success_logouts`
  ADD CONSTRAINT `fk_Logouts_User` FOREIGN KEY (`User`) REFERENCES `users` (`idUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `success_logins`
  ADD CONSTRAINT `fk_Logins_User` FOREIGN KEY (`User`) REFERENCES `users` (`idUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;


  ALTER TABLE `success_search`
  ADD CONSTRAINT `fk_Search_User` FOREIGN KEY (`User`) REFERENCES `users` (`idUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;
  

ALTER TABLE `search_params`
  ADD CONSTRAINT `fk_Params_Search` FOREIGN KEY (`Search`) REFERENCES `success_search` (`idSearch`) ON DELETE NO ACTION ON UPDATE NO ACTION;