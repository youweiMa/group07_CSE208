/*
MySQL Data Transfer
Source Host: localhost
Source Database: order
Target Host: localhost
Target Database: order
Date: 2016/4/26 11:32:12
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(11) NOT NULL auto_increment,
  `area` varchar(20) NOT NULL,
  `acceptedTime` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL default 'New',
  `price` float NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `order` VALUES ('1', 'Square A', '2016-04-26 09:20:07', 'New', '120.5');
INSERT INTO `order` VALUES ('2', 'Square B', '2016-04-26 12:00:00', 'New', '100');
INSERT INTO `user` VALUES ('test', '123');
