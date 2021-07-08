/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100132
 Source Host           : localhost:3306
 Source Schema         : kontaktelpon

 Target Server Type    : MySQL
 Target Server Version : 100132
 File Encoding         : 65001

 Date: 08/07/2021 17:01:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for telepon
-- ----------------------------
DROP TABLE IF EXISTS `telepon`;
CREATE TABLE `telepon`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nomor` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of telepon
-- ----------------------------
INSERT INTO `telepon` VALUES (7, 'Alpha', '08576666765');
INSERT INTO `telepon` VALUES (8, 'agus', '088888888');
INSERT INTO `telepon` VALUES (9, 'anjiiirrrrr', '9999999999999');
INSERT INTO `telepon` VALUES (10, 'ardi', '088888888');
INSERT INTO `telepon` VALUES (11, 'anjiiirrrrr', '9999999999999');

SET FOREIGN_KEY_CHECKS = 1;
