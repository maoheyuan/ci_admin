/*
Navicat MySQL Data Transfer

Source Server         : localhost（本机）
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : ci_admin

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-11-28 16:18:36
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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COMMENT='管理员管理';

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES ('1', 'maoheyuan', '13978021294', '123', '1', '0', '1511854764');
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
INSERT INTO `admins` VALUES ('13', 'aaa', '13554820565', '', '1', '1511490698', '1511765018');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COMMENT='分类管理';

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
INSERT INTO `category` VALUES ('11', 'wf', '1', '1511489077', '1511764542');

-- ----------------------------
-- Table structure for `configs`
-- ----------------------------
DROP TABLE IF EXISTS `configs`;
CREATE TABLE `configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id ',
  `key` varchar(255) DEFAULT '' COMMENT '键名',
  `value` varchar(255) DEFAULT '' COMMENT '键值',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of configs
-- ----------------------------
INSERT INTO `configs` VALUES ('1', 'domain', 'www.baidu.com');
INSERT INTO `configs` VALUES ('2', 'email', 'maoheyuan@qq.com');
INSERT INTO `configs` VALUES ('3', 'statistical_code', '');
INSERT INTO `configs` VALUES ('4', 'alipay_appid', '');
INSERT INTO `configs` VALUES ('5', 'alipay_merchant_private_key', '');
INSERT INTO `configs` VALUES ('6', 'alipay_public_key', '');
INSERT INTO `configs` VALUES ('7', 'weixin_appid', '');
INSERT INTO `configs` VALUES ('8', 'weixin_mch_id', '');
INSERT INTO `configs` VALUES ('9', 'weixin_private_key', '');
INSERT INTO `configs` VALUES ('10', 'weixin_appsecret', '');
INSERT INTO `configs` VALUES ('11', 'status', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COMMENT='商品管理';

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('1', 'aaa', '', 'aaa', '', '2147483647', '10', '0', '1', '0', '0');
INSERT INTO `goods` VALUES ('2', 'fff', '', '', '', '2147483647', '12', '0', '1', '1511416386', '1511429271');
INSERT INTO `goods` VALUES ('3', 'ggggg', '', '124', '', '2147483647', '10', '0', '1', '1511416755', '0');
INSERT INTO `goods` VALUES ('15', '1511774714.png', '', '', '', '0', '0', '0', '2', '1511774714', '0');
INSERT INTO `goods` VALUES ('5', 'a', '', 'a', '', '0', '0', '0', '1', '1511429606', '0');
INSERT INTO `goods` VALUES ('6', 'b', '', 'b', '', '0', '0', '0', '1', '1511429634', '0');
INSERT INTO `goods` VALUES ('7', 'c', '', 'c', '', '0', '0', '0', '1', '1511429646', '0');
INSERT INTO `goods` VALUES ('8', 'd', '', 'd', '', '0', '0', '0', '1', '1511429660', '0');
INSERT INTO `goods` VALUES ('9', 'f', '', 'f', '', '0', '0', '0', '1', '1511429673', '0');
INSERT INTO `goods` VALUES ('10', 'g', '', 'g', '', '0', '0', '0', '1', '1511429685', '0');
INSERT INTO `goods` VALUES ('12', 'jj', '', '', '', '0', '0', '0', '2', '1511429714', '1511486903');
INSERT INTO `goods` VALUES ('13', 'cvxcvxcv', '1511506137.png', 'ff', '<p>fff</p>', '0', '0', '0', '1', '1511506137', '0');
INSERT INTO `goods` VALUES ('14', '          fdsff', '1511511234.png', '    dddffffff', '<p>fdsfdsfdsf</p>', '10', '12', '0', '1', '1511507173', '1511511234');
INSERT INTO `goods` VALUES ('16', '1511775273.png', '', '', '', '0', '0', '0', '1', '1511775273', '0');
INSERT INTO `goods` VALUES ('17', '   1511775352.png', '1511841859.png', 'ddfdsfdsf', '<p>fsdfsdfsdf</p>', '0', '0', '0', '1', '1511775352', '1511841859');

-- ----------------------------
-- Table structure for `images`
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id',
  `name` varchar(255) DEFAULT '' COMMENT '图片名称',
  `module` varchar(255) DEFAULT '' COMMENT '所属模块',
  `add_time` int(11) DEFAULT '0' COMMENT '新增时间',
  `edit_time` int(11) DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='图片管理';

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES ('1', '1511841921.png', null, '1511775554', '1511841921');
INSERT INTO `images` VALUES ('2', '1511841910.png', null, '1511776828', '1511841910');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='日志管理';

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COMMENT='会员管理';

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
INSERT INTO `members` VALUES ('13', 'a', '123456', 'a', '10', 'MY_ControllerMY_Controller', '1', '1511764907', '1511841887');

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ordersn` varchar(255) NOT NULL DEFAULT '' COMMENT '用户名',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '收货人',
  `mobile` varchar(255) NOT NULL DEFAULT '' COMMENT ' 收货人手机',
  `address` text NOT NULL COMMENT ' 收货人地址',
  `sales_price` int(11) NOT NULL COMMENT '销售总金额 分',
  `pay_time` int(11) NOT NULL DEFAULT '0' COMMENT '支付时间',
  `pay_type` int(11) NOT NULL DEFAULT '0' COMMENT '支付类型 1微信 2 支付宝',
  `pay_money` int(11) NOT NULL DEFAULT '0' COMMENT '支付金额',
  `status` smallint(6) NOT NULL DEFAULT '1' COMMENT '订单状态 1未支付 已支付2 取消3',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '新增时间',
  `edit_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COMMENT='订单管理';

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('1', 'aaa', '', 'aaa', '', '10', '0', '0', '0', '1', '0', '0');
INSERT INTO `orders` VALUES ('2', 'fff', '', '', '', '12', '0', '0', '0', '1', '1511416386', '1511429271');
INSERT INTO `orders` VALUES ('3', 'ggggg', '', '124', '', '10', '0', '0', '0', '1', '1511416755', '0');
INSERT INTO `orders` VALUES ('5', 'a', '', 'a', '', '0', '0', '0', '0', '1', '1511429606', '0');
INSERT INTO `orders` VALUES ('6', 'b', '', 'b', '', '0', '0', '0', '0', '1', '1511429634', '0');
INSERT INTO `orders` VALUES ('7', 'c', '', 'c', '', '0', '0', '0', '0', '1', '1511429646', '0');
INSERT INTO `orders` VALUES ('8', 'd', '', 'd', '', '0', '0', '0', '0', '1', '1511429660', '0');
INSERT INTO `orders` VALUES ('9', 'f', '', 'f', '', '0', '0', '0', '0', '1', '1511429673', '0');
INSERT INTO `orders` VALUES ('10', 'g', '', 'g', '', '0', '0', '0', '0', '1', '1511429685', '0');
INSERT INTO `orders` VALUES ('12', 'jj', '', '', '', '0', '0', '0', '0', '2', '1511429714', '1511486903');
INSERT INTO `orders` VALUES ('13', 'cvxcvxcv', '1511506137.png', 'ff', '<p>fff</p>', '0', '0', '0', '0', '1', '1511506137', '0');
INSERT INTO `orders` VALUES ('14', 'fdsff', '1511511234.png', '    dddffffff', '<p>fdsfdsfdsf</p>', '12', '0', '0', '0', '1', '1511507173', '1511511234');

-- ----------------------------
-- Table structure for `orders_goods`
-- ----------------------------
DROP TABLE IF EXISTS `orders_goods`;
CREATE TABLE `orders_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `order_sn` varchar(255) NOT NULL DEFAULT '' COMMENT '订单编号',
  `goods_name` varchar(255) NOT NULL DEFAULT '' COMMENT '商品名称',
  `goods_sn` varchar(255) NOT NULL DEFAULT '' COMMENT '商品编号',
  `goods_num` text NOT NULL COMMENT '商品数量',
  `sales_price` int(11) NOT NULL COMMENT '销售价 分',
  `market_price` int(11) NOT NULL DEFAULT '0' COMMENT '市场价 分',
  `return_num` int(11) NOT NULL DEFAULT '0' COMMENT '退货数量',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '新增时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COMMENT='订单商品';

-- ----------------------------
-- Records of orders_goods
-- ----------------------------
INSERT INTO `orders_goods` VALUES ('1', 'aaa', '', 'aaa', '', '10', '0', '0', '0');
INSERT INTO `orders_goods` VALUES ('2', 'fff', '', '', '', '12', '0', '0', '1511416386');
INSERT INTO `orders_goods` VALUES ('3', 'ggggg', '', '124', '', '10', '0', '0', '1511416755');
INSERT INTO `orders_goods` VALUES ('5', 'a', '', 'a', '', '0', '0', '0', '1511429606');
INSERT INTO `orders_goods` VALUES ('6', 'b', '', 'b', '', '0', '0', '0', '1511429634');
INSERT INTO `orders_goods` VALUES ('7', 'c', '', 'c', '', '0', '0', '0', '1511429646');
INSERT INTO `orders_goods` VALUES ('8', 'd', '', 'd', '', '0', '0', '0', '1511429660');
INSERT INTO `orders_goods` VALUES ('9', 'f', '', 'f', '', '0', '0', '0', '1511429673');
INSERT INTO `orders_goods` VALUES ('10', 'g', '', 'g', '', '0', '0', '0', '1511429685');
INSERT INTO `orders_goods` VALUES ('12', 'jj', '', '', '', '0', '0', '0', '1511429714');
INSERT INTO `orders_goods` VALUES ('13', 'cvxcvxcv', '1511506137.png', 'ff', '<p>fff</p>', '0', '0', '0', '1511506137');
INSERT INTO `orders_goods` VALUES ('14', 'fdsff', '1511511234.png', '    dddffffff', '<p>fdsfdsfdsf</p>', '12', '0', '0', '1511507173');
