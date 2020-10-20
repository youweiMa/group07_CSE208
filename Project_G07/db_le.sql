CREATE DATABASE `db_le` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_le`;

GRANT select, insert, update, delete
on db_le.*
to group07@localhost identified by 'password';
-- please grant this new mySQL user


CREATE TABLE IF NOT EXISTS `admin_user` (
  `username` varchar(16) NOT NULL,
  `password` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `admin_user` (`username`, `password`) VALUES
('Manager', '123456'),
('Deliveryman', '666666');
--predefined administration user account

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `tb_order` (
  `ordID` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `cusPhone` varchar(12) NOT NULL,
  `area` set('Wenxing','Wenhui','Wencui','') NOT NULL,
  `address` varchar(10) NOT NULL,
  `clothName` varchar(100) NOT NULL,
  `price` int(6) NOT NULL,
  `startTime` datetime NOT NULL,
  `endTime` datetime DEFAULT NULL,
  `status` set('new','picking up','washing','in delivery','finished') NOT NULL DEFAULT 'new',
  `mark` set('Good','General','Bad','') DEFAULT NULL,
  `comment` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=172 ;


-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(16) NOT NULL,
  `passwd` char(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `SQ1` varchar(100) NOT NULL,
  `AW1` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

