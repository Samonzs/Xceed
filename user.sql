/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : zuoyelaraveluser

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 06/12/2022 09:53:27
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin_menu
-- ----------------------------
DROP TABLE IF EXISTS `admin_menu`;
CREATE TABLE `admin_menu`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'Menu',
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'Access Address',
  `parent_id` int(10) NULL DEFAULT 0 COMMENT 'Admin No.',
  `sort` int(10) NULL DEFAULT 500 COMMENT 'Sort Number',
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'Role',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = 'Backend Menu' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_menu
-- ----------------------------
INSERT INTO 'admin_menu' VALUES (1, 'HomePage', '/admin/index', 0, 1, 'Staff');
INSERT INTO `admin_menu` VALUES (4, 'Change Password', '/admin/pwd', 0, 5000, 'Staff');
INSERT INTO `admin_menu` VALUES (6, 'Staff Management', '/admin/user/index', 0, 500, NULL);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'User ID',
  `user` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'User Name',
  `pwd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Passwprd',
  `create_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Creat Time',
  `update_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Upadate Time',
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'Staff' COMMENT 'Role',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'William', '123456', '2022-10-13 16:47:54', '2022-12-02 19:57:32', 'Admin');
INSERT INTO `user` VALUES (10, 'John', '123456', '2022-10-22 17:39:01', '2022-11-07 21:11:06', 'Staff');
INSERT INTO `user` VALUES (8, 'kathy', '123456', '2022-10-19 21:28:56', NULL, 'Staff');
INSERT INTO `user` VALUES (9, 'Ali', '123456', '2022-10-19 21:33:30', NULL, 'Staff');


SET FOREIGN_KEY_CHECKS = 1;
