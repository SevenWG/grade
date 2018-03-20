/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : grade

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-03-20 22:09:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `courseid` varchar(3) NOT NULL,
  `coursename` varchar(60) NOT NULL,
  PRIMARY KEY (`courseid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('001', 'Chinese');
INSERT INTO `course` VALUES ('002', 'Math');
INSERT INTO `course` VALUES ('003', 'English');

-- ----------------------------
-- Table structure for score
-- ----------------------------
DROP TABLE IF EXISTS `score`;
CREATE TABLE `score` (
  `scoreid` int(11) NOT NULL,
  `courseid` varchar(45) NOT NULL,
  `stuid` varchar(45) NOT NULL,
  `grade` int(11) NOT NULL,
  PRIMARY KEY (`scoreid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of score
-- ----------------------------
INSERT INTO `score` VALUES ('1', '001', '2014014001', '91');
INSERT INTO `score` VALUES ('2', '002', '2014014001', '98');
INSERT INTO `score` VALUES ('3', '003', '2014014001', '89');
INSERT INTO `score` VALUES ('4', '001', '2014014002', '87');
INSERT INTO `score` VALUES ('5', '002', '2014014002', '88');
INSERT INTO `score` VALUES ('6', '003', '2014014002', '95');
INSERT INTO `score` VALUES ('7', '001', '2014014003', '85');
INSERT INTO `score` VALUES ('8', '002', '2014014003', '92');
INSERT INTO `score` VALUES ('9', '003', '2014014003', '66');
INSERT INTO `score` VALUES ('10', '003', '2014014408', '101');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `stuid` varchar(20) NOT NULL,
  `stuname` varchar(45) NOT NULL,
  PRIMARY KEY (`stuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('2014014001', 'John');
INSERT INTO `student` VALUES ('2014014002', 'Jenny');
INSERT INTO `student` VALUES ('2014014003', 'Alex');
INSERT INTO `student` VALUES ('2014014408', 'WeiWei');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uaccount` varchar(30) NOT NULL,
  `upwd` varchar(60) NOT NULL,
  PRIMARY KEY (`uaccount`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('admin', '123456');

ALTER TABLE `score` ADD CONSTRAINT `sid` FOREIGN KEY (`stuid`) REFERENCES `student` (`stuid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `score` ADD CONSTRAINT `cid` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

