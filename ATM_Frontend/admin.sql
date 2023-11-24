/*
Navicat MySQL Data Transfer

Source Server         : conn
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : db

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2015-05-06 17:19:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `age` int(11) NOT NULL,
  `sex` char(255) CHARACTER SET utf8 NOT NULL,
  `times` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `frez_time` int(11) NOT NULL,
  `daymoney` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `qumon_time` int(11) NOT NULL,
  PRIMARY KEY (`id`,`password`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', '222222', '111111', '胡一菲', '22', '女', '0', '0', '0', '20000', '26600', '1430890694');
INSERT INTO `admin` VALUES ('2', '703078', '333333', '壶壶', '22', '男', '0', '0', '0', '0', '0', '0');
INSERT INTO `admin` VALUES ('3', '129747', '444444', '呵呵呵', '34', '男', '0', '0', '0', '0', '0', '0');
INSERT INTO `admin` VALUES ('4', '333333', '555555', '个一户', '24', '', '0', '0', '0', '0', '0', '0');
INSERT INTO `admin` VALUES ('5', '35008', '666666', '科技科技', '56', '男', '0', '0', '0', '0', '0', '0');
INSERT INTO `admin` VALUES ('6', '555555', '777777', '萨萨', '34', '女', '0', '0', '0', '0', '900', '0');
INSERT INTO `admin` VALUES ('7', '459551', '888888', '呼呼', '23', '男', '0', '0', '0', '0', '0', '0');
INSERT INTO `admin` VALUES ('8', '65589', '999999', '哈哈哈', '23', '男', '0', '0', '0', '0', '0', '0');
INSERT INTO `admin` VALUES ('9', '715971', '567890', '好好好', '23', '男', '0', '0', '0', '0', '0', '0');
INSERT INTO `admin` VALUES ('10', '785508', '900000', '还会', '43', '男', '0', '0', '0', '0', '0', '0');
INSERT INTO `admin` VALUES ('11', '803051', '555555', '哈哈哈哈', '24', '男', '0', '0', '0', '0', '0', '0');
INSERT INTO `admin` VALUES ('12', '244311', '999999', '和哈哈哈和', '23', '男', '0', '0', '0', '0', '0', '0');
INSERT INTO `admin` VALUES ('13', '659265', '666666', '与和哈哈哈和', '34', '男', '0', '0', '0', '0', '0', '0');
INSERT INTO `admin` VALUES ('14', '755785', '666666', '和哈哈哈哈哈', '45', '男', '0', '0', '0', '0', '0', '0');
