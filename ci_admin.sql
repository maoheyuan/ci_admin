/*
Navicat MySQL Data Transfer

Source Server         : localhost（本机）
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : ci_admin

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-11-24 16:15:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admins`
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '' COMMENT '用户名',
  `mobile` varchar(11) NOT NULL DEFAULT '' COMMENT '手机号',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT '密码',
  `status` smallint(6) NOT NULL DEFAULT '1' COMMENT '状态 启用1 禁用2',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '新增时间',
  `edittime` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES ('1', 'aaa', '13978021294', 'aaa', '1', '0', '0');
INSERT INTO `admins` VALUES ('2', 'fff', '13978021294', '', '1', '1511416386', '1511429271');
INSERT INTO `admins` VALUES ('3', 'ggggg', '13554820565', '124', '1', '1511416755', '0');
INSERT INTO `admins` VALUES ('4', 'faa', 'bbbsss', '', '1', '1511419180', '1511429533');
INSERT INTO `admins` VALUES ('5', 'a', 'a', 'a', '1', '1511429606', '0');
INSERT INTO `admins` VALUES ('6', 'b', 'b', 'b', '1', '1511429634', '0');
INSERT INTO `admins` VALUES ('7', 'c', 'c', 'c', '1', '1511429646', '0');
INSERT INTO `admins` VALUES ('8', 'd', 'd', 'd', '1', '1511429660', '0');
INSERT INTO `admins` VALUES ('9', 'f', 'f', 'f', '1', '1511429673', '0');
INSERT INTO `admins` VALUES ('10', 'g', 'g', 'g', '1', '1511429685', '0');
INSERT INTO `admins` VALUES ('12', 'jj', 'j', '', '2', '1511429714', '1511486903');
INSERT INTO `admins` VALUES ('13', 'aaa', '13554820565', 'bbb', '1', '1511490698', '1511490964');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '' COMMENT '分类名称',
  `status` tinyint(4) DEFAULT '1' COMMENT '状态 1启用 2禁用',
  `addtime` int(11) DEFAULT '0' COMMENT '新增时间',
  `edittime` int(11) DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'afdsfdsf', '1', '1511488479', '0');
INSERT INTO `category` VALUES ('2', 'bbb', '2', '1511488490', '0');
INSERT INTO `category` VALUES ('3', 'ssss', '1', '1511488884', '1511488897');
INSERT INTO `category` VALUES ('4', 'dff', '1', '1511489020', '0');
INSERT INTO `category` VALUES ('5', 'gg', '1', '1511489027', '0');
INSERT INTO `category` VALUES ('6', 'xxx', '1', '1511489034', '0');
INSERT INTO `category` VALUES ('7', 'eeee', '1', '1511489043', '0');
INSERT INTO `category` VALUES ('8', 'dd', '2', '1511489055', '0');
INSERT INTO `category` VALUES ('9', 'gfe', '1', '1511489063', '0');
INSERT INTO `category` VALUES ('10', 'eeef', '1', '1511489070', '0');
INSERT INTO `category` VALUES ('11', 'wf', '1', '1511489077', '0');

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '用户名',
  `image` varchar(255) NOT NULL DEFAULT '' COMMENT '图片',
  `discription` varchar(255) NOT NULL DEFAULT '' COMMENT '密码',
  `content` text NOT NULL COMMENT '内容',
  `market_price` int(11) NOT NULL DEFAULT '0' COMMENT '市场价 分',
  `sales_price` int(11) NOT NULL COMMENT '销售价 分',
  `stock` int(11) NOT NULL DEFAULT '0' COMMENT '库存',
  `status` smallint(6) NOT NULL DEFAULT '1' COMMENT '状态 启用1 禁用2',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '新增时间',
  `edittime` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('1', 'aaa', '', 'aaa', '', '2147483647', '10', '0', '1', '0', '0');
INSERT INTO `goods` VALUES ('2', 'fff', '', '', '', '2147483647', '12', '0', '1', '1511416386', '1511429271');
INSERT INTO `goods` VALUES ('3', 'ggggg', '', '124', '', '2147483647', '10', '0', '1', '1511416755', '0');
INSERT INTO `goods` VALUES ('5', 'a', '', 'a', '', '0', '0', '0', '1', '1511429606', '0');
INSERT INTO `goods` VALUES ('6', 'b', '', 'b', '', '0', '0', '0', '1', '1511429634', '0');
INSERT INTO `goods` VALUES ('7', 'c', '', 'c', '', '0', '0', '0', '1', '1511429646', '0');
INSERT INTO `goods` VALUES ('8', 'd', '', 'd', '', '0', '0', '0', '1', '1511429660', '0');
INSERT INTO `goods` VALUES ('9', 'f', '', 'f', '', '0', '0', '0', '1', '1511429673', '0');
INSERT INTO `goods` VALUES ('10', 'g', '', 'g', '', '0', '0', '0', '1', '1511429685', '0');
INSERT INTO `goods` VALUES ('12', 'jj', '', '', '', '0', '0', '0', '2', '1511429714', '1511486903');
INSERT INTO `goods` VALUES ('13', 'cvxcvxcv', '1511506137.png', 'ff', '<p>fff</p>', '0', '0', '0', '1', '1511506137', '0');
INSERT INTO `goods` VALUES ('14', '          fdsff', '1511511234.png', '    dddffffff', '<p>fdsfdsfdsf</p>', '10', '12', '0', '1', '1511507173', '1511511234');

-- ----------------------------
-- Table structure for `logs`
-- ----------------------------
DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `content` text NOT NULL COMMENT '操作内容',
  `module` varchar(255) NOT NULL DEFAULT '' COMMENT '操作模块',
  `operator` varchar(255) NOT NULL DEFAULT '' COMMENT '操作人',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '新增时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of logs
-- ----------------------------
INSERT INTO `logs` VALUES ('1', 'fsdfsdfsdf', 'Index/index', '小毛', '1111111111');

-- ----------------------------
-- Table structure for `members`
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT '密码',
  `mobile` varchar(11) NOT NULL DEFAULT '' COMMENT '手机号',
  `account` int(11) NOT NULL COMMENT '账户金额 分为单位',
  `address` tinytext NOT NULL COMMENT '地址',
  `status` smallint(6) NOT NULL DEFAULT '1' COMMENT '状态 启用1 禁用2',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '新增时间',
  `edittime` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES ('1', 'aaa', 'aaa', '13978021294', '10', 'afsdfffffff', '1', '0', '0');
INSERT INTO `members` VALUES ('2', 'fff', '', '13978021294', '12', '广西桂林', '1', '1511416386', '1511429271');
INSERT INTO `members` VALUES ('3', 'ggggg', '124', '13554820565', '10', 'fsdfsf', '1', '1511416755', '0');
INSERT INTO `members` VALUES ('4', 'faa', '', 'bbbsss', '100', 'fffds', '1', '1511419180', '1511429533');
INSERT INTO `members` VALUES ('5', 'a', 'a', 'a', '0', 'a', '1', '1511429606', '0');
INSERT INTO `members` VALUES ('6', 'b', 'b', 'b', '0', 'b', '1', '1511429634', '0');
INSERT INTO `members` VALUES ('7', 'c', 'c', 'c', '0', 'c', '1', '1511429646', '0');
INSERT INTO `members` VALUES ('8', 'd', 'd', 'd', '0', 'd', '1', '1511429660', '0');
INSERT INTO `members` VALUES ('9', 'f', 'f', 'f', '0', 'f', '1', '1511429673', '0');
INSERT INTO `members` VALUES ('10', 'g', 'g', 'g', '0', 'g', '1', '1511429685', '0');
INSERT INTO `members` VALUES ('12', 'jj', '', 'j', '0', 'j', '2', '1511429714', '1511486903');
