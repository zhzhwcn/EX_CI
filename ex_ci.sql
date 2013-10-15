/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50147
Source Host           : localhost:3306
Source Database       : ex_ci

Target Server Type    : MYSQL
Target Server Version : 50147
File Encoding         : 65001

Date: 2013-10-15 16:29:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ex_admin`
-- ----------------------------
DROP TABLE IF EXISTS `ex_admin`;
CREATE TABLE `ex_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) DEFAULT NULL,
  `admin_pass` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ex_admin
-- ----------------------------

-- ----------------------------
-- Table structure for `ex_sessions`
-- ----------------------------
DROP TABLE IF EXISTS `ex_sessions`;
CREATE TABLE `ex_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ex_sessions
-- ----------------------------
