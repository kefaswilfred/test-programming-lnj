/*
 Navicat Premium Data Transfer

 Source Server         : localhost 3307
 Source Server Type    : MySQL
 Source Server Version : 100316
 Source Host           : localhost:3307
 Source Schema         : test_programming_lnj

 Target Server Type    : MySQL
 Target Server Version : 100316
 File Encoding         : 65001

 Date: 26/11/2021 02:48:43
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data
-- ----------------------------
DROP TABLE IF EXISTS `data`;
CREATE TABLE `data`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carp_code` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `category` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `initiator` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `initiator_div` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `initiator_branch` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `recipient` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `recipient_div` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `recipient_branch` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `verified_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `due_date` date NULL DEFAULT NULL,
  `effectiveness` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_date` date NULL DEFAULT NULL,
  `stage` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` date NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 80 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data
-- ----------------------------
INSERT INTO `data` VALUES (1, 'CARP00089', 'internal audit findings, non conformity', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'ELLIE CAMACHO', 'OPERATION', 'JKT', '', '2021-12-15', '', '2021-11-15', 'Open', 'Open', '2021-11-15', '2021-11-24 16:13:10');
INSERT INTO `data` VALUES (2, 'CARP00088', 'internal audit findings, non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'FIN CASEY', 'KEY ACCOUNT', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-12-15', 'Effective', '2021-11-16', 'Closed', 'Closed', '2021-11-15', '2021-11-24 16:13:10');
INSERT INTO `data` VALUES (3, 'CARP00087', 'internal audit findings, non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'GAMORA', 'OPERATION', 'SUB', '', '2021-12-15', '', '2021-11-15', 'Open', 'Open', '2021-11-15', '2021-11-24 16:13:10');
INSERT INTO `data` VALUES (4, 'CARP00086', 'oportunity for improvement', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'NAMORITA \"NITA\" PRENTISS', 'COMMERCIAL', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-12-04', 'Effective', '2021-11-17', 'Closed', 'Closed', '2021-11-04', '2021-11-24 16:13:10');
INSERT INTO `data` VALUES (5, 'CARP00085', 'non conformity', 'BARBARA \"BOBBI\" MORSE', 'SALES', 'SUB', 'STEPHEN VINCENT STRANGE', 'KEY ACCOUNT', 'SUB', '', '2021-11-21', '', '2021-10-22', 'Open', 'Open', '2021-10-22', '2021-11-24 16:13:10');
INSERT INTO `data` VALUES (6, 'CARP00084', 'internal audit findings, non conformity', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'DEREK MORGAN', 'KEY ACCOUNT', 'SUB', '', '2021-11-14', '', '2021-10-15', 'Open', 'Open', '2021-10-15', '2021-11-24 16:13:10');
INSERT INTO `data` VALUES (7, 'CARP00083', 'internal audit findings, non conformity', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'DEREK MORGAN', 'KEY ACCOUNT', 'SUB', '', '2021-11-14', '', '2021-10-15', 'Voided', 'Canceled', '2021-10-15', '2021-11-24 16:13:10');
INSERT INTO `data` VALUES (8, 'CARP00082', 'non conformity, external complain', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'CATHRINE MORA', 'KEY ACCOUNT', 'SUB', '', '2021-11-13', '', '2021-10-14', 'Open', 'Open', '2021-10-14', '2021-11-24 16:13:10');
INSERT INTO `data` VALUES (9, 'CARP00081', 'internal audit findings, non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'CLINT BARTON', 'TRUCKING', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-11-06', 'Effective', '2021-11-16', 'Closed', 'Closed', '2021-10-07', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (10, 'CARP00080', 'internal audit findings, non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'PATSY WALKER', 'CR', 'JKT', '', '2021-11-06', '', '2021-10-07', 'Open', 'Open', '2021-10-07', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (11, 'CARP00079', 'internal audit findings, non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'CLINT BARTON', 'TRUCKING', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-10-27', 'Effective', '2021-11-16', 'Closed', 'Closed', '2021-09-27', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (12, 'CARP00078', 'internal audit findings, safety non compliance', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'CLINT BARTON', 'TRUCKING', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-10-27', 'Effective', '2021-10-26', 'Closed', 'Closed', '2021-09-27', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (13, 'CARP00077', 'internal audit findings, non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'ELEKTRA NATCHIOS', 'HSE', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-10-27', 'Effective', '2021-11-12', 'Closed', 'Closed', '2021-09-27', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (14, 'CARP00074', 'non conformity', 'NAMORITA \"NITA\" PRENTISS', 'COMMERCIAL', 'SUB', 'DEREK MORGAN', 'CR', 'SUB', '', '2021-10-08', '', '2021-09-08', 'Open', 'Open', '2021-08-23', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (15, 'CARP00073', 'non conformity', 'NAMORITA \"NITA\" PRENTISS', 'COMMERCIAL', 'SUB', 'DEREK MORGAN', 'CR', 'SUB', '', '2021-09-19', '', '2021-08-27', 'Open', 'Open', '2021-08-20', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (16, 'CARP00071', 'internal complain, kpi bsc monitoring', 'JOHN JONAH JAMESON', 'COMMERCIAL', 'SUB', 'DEREK MORGAN', 'CR', 'SUB', '', '2021-09-19', '', '2021-08-20', 'Voided', 'Canceled', '2021-08-20', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (17, 'CARP00070', 'internal complain, kpi bsc monitoring', 'JOHN JONAH JAMESON', 'COMMERCIAL', 'SUB', 'ROBERT BRUCE BANNER', 'CR', 'SUB', '', '2021-09-19', '', '2021-08-20', 'Voided', 'Canceled', '2021-08-20', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (18, 'CARP00069', 'internal complain, kpi bsc monitoring', 'JOHN JONAH JAMESON', 'COMMERCIAL', 'SUB', 'ROBERT BRUCE BANNER', 'CR', 'SUB', '', '2021-09-19', '', '2021-08-20', 'Voided', 'Canceled', '2021-08-20', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (19, 'CARP00068', 'internal audit findings, non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'CAMELLIA', 'CC', 'SUB', '', '2021-09-04', '', '2021-08-05', 'Open', 'Open', '2021-08-05', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (20, 'CARP00067', 'non conformity', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'DEREK MORGAN', 'CR', 'SUB', '', '2021-09-04', '', '2021-08-27', 'Open', 'Open', '2021-08-05', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (21, 'CARP00066', 'non conformity', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'DEREK MORGAN', 'CR', 'SUB', '', '2021-09-04', '', '2021-08-05', 'Voided', 'Canceled', '2021-08-05', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (22, 'CARP00065', 'non conformity', 'JANET VAN DYNE', 'KEY ACCOUNT', 'SUB', 'STEPHEN VINCENT STRANGE', 'KEY ACCOUNT', 'SUB', '', '2021-08-29', '', '2021-07-30', 'Open', 'Open', '2021-07-30', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (23, 'CARP00064', 'non conformity', 'STEPHEN VINCENT STRANGE', 'KEY ACCOUNT', 'SUB', 'CAMELLIA', 'OPERATION', 'SUB', '', '2021-08-29', '', '2021-09-23', 'Open', 'Open', '2021-07-30', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (24, 'CARP00063', 'non conformity, external complain', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'DEREK MORGAN', 'KEY ACCOUNT', 'SUB', '', '2021-08-29', '', '2021-07-30', 'Open', 'Open', '2021-07-30', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (25, 'CARP00062', 'safety non compliance, external complain', 'ELEKTRA NATCHIOS', 'HSE', 'SUB', 'CLINT BARTON', 'TRUCKING', 'SUB', 'ELEKTRA NATCHIOS', '2021-08-01', 'Effective', '2021-07-15', 'Closed', 'Closed', '2021-07-02', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (26, 'CARP00061', 'safety non compliance, external complain', 'ELEKTRA NATCHIOS', 'HSE', 'SUB', 'CLINT BARTON', 'TRUCKING', 'SUB', '', '2021-08-01', '', '2021-07-02', 'Voided', 'Canceled', '2021-07-02', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (27, 'CARP00060', 'internal audit findings, oportunity for improvement', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'CAIN MARKO', 'HR&GA', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-07-14', 'Effective', '2021-07-01', 'Closed', 'Closed', '2021-06-14', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (28, 'CARP00059', 'internal audit findings, non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'CAIN MARKO', 'HR&GA', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-07-14', 'Effective', '2021-07-07', 'Closed', 'Closed', '2021-06-14', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (29, 'CARP00058', 'internal audit findings, non conformity, external complain', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'DEREK MORGAN', 'CR', 'SUB', '', '2021-07-02', '', '2021-06-02', 'Open', 'Open', '2021-06-02', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (30, 'CARP00057', 'internal audit findings, non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'JEAN GREY', 'PROCUREMENT', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-06-27', 'Effective', '2021-07-08', 'Closed', 'Closed', '2021-05-28', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (31, 'CARP00056', 'internal audit findings, oportunity for improvement', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'JEAN GREY', 'PROCUREMENT', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-06-27', 'Effective', '2021-07-08', 'Closed', 'Closed', '2021-05-28', '2021-11-24 16:13:11');
INSERT INTO `data` VALUES (32, 'CARP00055', 'internal audit findings, non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'JEAN GREY', 'PROCUREMENT', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-06-27', 'Effective', '2021-07-08', 'Closed', 'Closed', '2021-05-28', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (33, 'CARP00054', 'internal audit findings, non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'MILES BULLOCK', 'HR&GA', 'SUB', '', '2021-06-24', '', '2021-05-25', 'Open', 'Open', '2021-05-25', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (34, 'CARP00053', 'internal audit findings, oportunity for improvement', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'MILES BULLOCK', 'HR&GA', 'SUB', '', '2021-06-24', '', '2021-05-25', 'Open', 'Open', '2021-05-25', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (35, 'CARP00052', 'internal audit findings, non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'NAMORITA \"NITA\" PRENTISS', 'COMMERCIAL', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-06-24', 'Effective', '2021-07-06', 'Closed', 'Closed', '2021-05-25', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (36, 'CARP00051', 'internal complain', 'CAMELLIA', 'OPERATION', 'SUB', 'MILES BULLOCK', 'HR&GA', 'SUB', '', '2021-06-24', '', '2021-05-27', 'Open', 'Open', '2021-05-25', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (37, 'CARP00050', 'internal audit findings, non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'DEREK MORGAN', 'CR', 'SUB', '', '2021-06-24', 'Not Effective', '2021-05-25', 'Re-Open', 'Open', '2021-05-25', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (38, 'CARP00049', 'oportunity for improvement', 'CATHRINE MORA', 'KEY ACCOUNT', 'SUB', 'GAMORA', 'OPERATION', 'SUB', 'CATHRINE MORA', '2021-06-18', 'Effective', '2021-10-14', 'Closed', 'Closed', '2021-05-19', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (39, 'CARP00048', 'internal audit findings, non conformity', 'JANET VAN DYNE', 'MANAGEMENT', 'SUB', 'FIN CASEY', 'KEY ACCOUNT', 'SUB', '', '2021-06-17', '', '2021-05-18', 'Open', 'Open', '2021-05-18', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (40, 'CARP00047', 'internal audit findings, oportunity for improvement', 'JANET VAN DYNE', 'MANAGEMENT', 'SUB', 'STEPHEN VINCENT STRANGE', 'KEY ACCOUNT', 'SUB', 'JANET VAN DYNE', '2021-05-28', 'Not Effective', '2021-05-19', 'Closed', 'Closed', '2021-04-28', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (41, 'CARP00046', 'non conformity, external complain', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'DEREK MORGAN', 'CR', 'SUB', '', '2021-05-27', '', '2021-04-27', 'Open', 'Open', '2021-04-27', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (42, 'CARP00045', 'non conformity, external complain', 'MATT MURDOCK', 'HSE', 'SUB', 'GAMORA', 'OPERATION', 'SUB', '', '2021-05-27', '', '2021-07-06', 'Open', 'Open', '2021-04-27', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (43, 'CARP00044', 'oportunity for improvement, external complain', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'CAMELLIA', 'OPERATION', 'SUB', '', '2021-05-26', '', '2021-07-06', 'Open', 'Open', '2021-04-26', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (44, 'CARP00043', 'external complain', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'DEREK MORGAN', 'CR', 'SUB', '', '2021-05-26', '', '2021-04-26', 'Open', 'Open', '2021-04-26', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (45, 'CARP00042', 'oportunity for improvement, external complain', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'CAMELLIA', 'OPERATION', 'SUB', '', '2021-05-26', '', '2021-04-26', 'Voided', 'Canceled', '2021-04-26', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (46, 'CARP00041', 'external complain', 'JANET VAN DYNE', 'MANAGEMENT', 'SUB', 'CAMELLIA', 'CR', 'SUB', '', '2021-05-23', '', '2021-05-24', 'Open', 'Open', '2021-04-23', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (47, 'CARP00040', 'safety non compliance', 'MATT MURDOCK', 'HSE', 'SUB', 'CLINT BARTON', 'TRUCKING', 'SUB', 'MATT MURDOCK', '2021-05-23', 'Effective', '2021-05-04', 'Closed', 'Closed', '2021-04-22', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (48, 'CARP00039', 'non conformity', 'JANET VAN DYNE', 'MANAGEMENT', 'SUB', 'STEPHEN VINCENT STRANGE', 'KEY ACCOUNT', 'SUB', 'JANET VAN DYNE', '2021-05-16', 'Effective', '2021-11-15', 'Closed', 'Closed', '2021-04-16', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (49, 'CARP00038', 'internal audit findings, oportunity for improvement', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'JAMES MADROX', 'IT', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-05-14', 'Effective', '2021-05-05', 'Closed', 'Closed', '2021-04-14', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (50, 'CARP00037', 'external complain', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'DEREK MORGAN', 'CR', 'SUB', '', '2021-05-08', '', '2021-07-15', 'Open', 'Open', '2021-04-06', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (51, 'CARP00036', 'non conformity', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'DEREK MORGAN', 'CR', 'SUB', '', '2021-04-25', '', '2021-04-06', 'Open', 'Open', '2021-03-26', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (52, 'CARP00035', 'non conformity, external complain', 'JANET VAN DYNE', 'MANAGEMENT', 'SUB', 'CATHRINE MORA', 'KEY ACCOUNT', 'SUB', 'JANET VAN DYNE', '2021-04-17', 'Not Effective', '2021-10-14', 'Closed', 'Closed', '2021-03-18', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (53, 'CARP00034', 'internal audit findings', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'JEAN GREY', 'PROCUREMENT', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-04-17', 'Effective', '2021-04-23', 'Closed', 'Closed', '2021-03-18', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (54, 'CARP00033', 'external complain', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'CAMELLIA', 'OPERATION', 'SUB', 'WANDA MAXIMOFF', '2021-04-08', 'Not Effective', '2021-11-22', 'Verified', 'Open', '2021-03-09', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (55, 'CARP00032', 'external complain', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'CAMELLIA', 'OPERATION', 'SUB', '', '2021-04-08', '', '2021-03-09', 'Voided', 'Canceled', '2021-03-09', '2021-11-24 16:13:12');
INSERT INTO `data` VALUES (56, 'CARP00031', 'external complain', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'CAMELLIA', 'OPERATION', 'SUB', '', '2021-04-08', '', '2021-03-09', 'Voided', 'Canceled', '2021-03-09', '2021-11-24 16:13:13');
INSERT INTO `data` VALUES (57, 'CARP00030', 'internal audit findings, non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'JEAN GREY', 'PROCUREMENT', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-04-03', 'Effective', '2021-03-18', 'Closed', 'Closed', '2021-03-04', '2021-11-24 16:13:13');
INSERT INTO `data` VALUES (58, 'CARP00029', 'safety non compliance, external complain', 'DEREK MORGAN', 'CR', 'SUB', 'CAMELLIA', 'OPERATION', 'SUB', '', '2021-04-02', '', '2021-07-05', 'Responded', 'Open', '2021-03-03', '2021-11-24 16:13:13');
INSERT INTO `data` VALUES (59, 'CARP00028', 'external complain', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'STEPHEN VINCENT STRANGE', 'KEY ACCOUNT', 'SUB', 'WANDA MAXIMOFF', '2021-04-02', 'Effective', '2021-03-12', 'Closed', 'Closed', '2021-03-02', '2021-11-24 16:13:13');
INSERT INTO `data` VALUES (60, 'CARP00027', 'safety non compliance, external complain', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'PATSY WALKER', 'OPERATION', 'JKT', '', '2021-03-25', '', '2021-02-24', 'Open', 'Open', '2021-02-23', '2021-11-24 16:13:13');
INSERT INTO `data` VALUES (61, 'CARP00026', 'external complain', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'CAMELLIA', 'OPERATION', 'SUB', 'WANDA MAXIMOFF', '2021-03-25', 'Not Effective', '2021-05-04', 'Closed', 'Closed', '2021-02-23', '2021-11-24 16:13:13');
INSERT INTO `data` VALUES (62, 'CARP00025', 'internal audit findings, non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-03-24', 'Effective', '2021-07-07', 'Closed', 'Closed', '2021-02-22', '2021-11-24 16:13:13');
INSERT INTO `data` VALUES (63, 'CARP00024', 'non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'DEREK MORGAN', 'CR', 'SUB', '', '2021-03-21', 'Not Effective', '2021-05-19', 'Re-Open', 'Open', '2021-02-19', '2021-11-24 16:13:13');
INSERT INTO `data` VALUES (64, 'CARP00023', 'external complain', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'CAMELLIA', 'OPERATION', 'SUB', 'WANDA MAXIMOFF', '2021-03-17', 'Effective', '2021-04-22', 'Closed', 'Closed', '2021-02-08', '2021-11-24 16:13:13');
INSERT INTO `data` VALUES (65, 'CARP00022', 'internal audit findings, non conformity', 'NATALIA ALIANOVNA ROMANOVA', 'IC', 'SUB', 'CAIN MARKO', 'HR&GA', 'SUB', 'NATALIA ALIANOVNA ROMANOVA', '2021-03-04', 'Effective', '2021-03-01', 'Closed', 'Closed', '2021-02-02', '2021-11-24 16:13:13');
INSERT INTO `data` VALUES (66, 'CARP00021', 'external complain', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'CAMELLIA', 'CC', 'SUB', '', '2021-02-27', '', '2021-01-28', 'Voided', 'Canceled', '2021-01-28', '2021-11-24 16:13:13');
INSERT INTO `data` VALUES (67, 'CARP00020', 'external complain', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'CAMELLIA', 'OPERATION', 'SUB', '', '2021-02-27', 'Not Effective', '2021-06-02', 'Re-Open', 'Open', '2021-01-28', '2021-11-24 16:13:13');
INSERT INTO `data` VALUES (68, 'CARP00019', 'external complain', 'WANDA MAXIMOFF', 'SALES', 'SUB', 'CAMELLIA', 'OPERATION', 'SUB', '', '2021-02-27', '', '2021-01-28', 'Voided', 'Canceled', '2021-01-27', '2021-11-24 16:13:13');
INSERT INTO `data` VALUES (69, 'CARP00016', 'non conformity, external complain', 'DEREK MORGAN', 'CR', 'SUB', 'CAMELLIA', 'OPERATION', 'SUB', '', '2021-02-13', '', '2021-04-09', 'Responded', 'Open', '2021-01-14', '2021-11-24 16:13:13');
INSERT INTO `data` VALUES (70, 'CARP00015', 'non conformity, external complain', 'DEREK MORGAN', 'CR', 'SUB', 'CAMELLIA', 'OPERATION', 'SUB', '', '2021-03-19', '', '2021-03-15', 'Responded', 'Open', '2021-01-13', '2021-11-24 16:13:13');

-- ----------------------------
-- Table structure for master_category
-- ----------------------------
DROP TABLE IF EXISTS `master_category`;
CREATE TABLE `master_category`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_category` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of master_category
-- ----------------------------
INSERT INTO `master_category` VALUES (1, 'external complain', 'external complain');
INSERT INTO `master_category` VALUES (2, 'internal audit findings', 'internal audit findings');
INSERT INTO `master_category` VALUES (3, 'internal audit findings, non conformity', 'internal audit findings, non conformity');
INSERT INTO `master_category` VALUES (4, 'internal audit findings, non conformity, external complain', 'internal audit findings, non conformity, external complain');
INSERT INTO `master_category` VALUES (5, 'internal audit findings, oportunity for improvement', 'internal audit findings, oportunity for improvement');
INSERT INTO `master_category` VALUES (6, 'internal audit findings, safety non compliance', 'internal audit findings, safety non compliance');
INSERT INTO `master_category` VALUES (7, 'internal complain', 'internal complain');
INSERT INTO `master_category` VALUES (8, 'internal complain, kpi bsc monitoring', 'internal complain, kpi bsc monitoring');
INSERT INTO `master_category` VALUES (9, 'non conformity', 'non conformity');
INSERT INTO `master_category` VALUES (10, 'non conformity, external complain', 'non conformity, external complain');
INSERT INTO `master_category` VALUES (11, 'oportunity for improvement', 'oportunity for improvement');
INSERT INTO `master_category` VALUES (12, 'oportunity for improvement, external complain', 'oportunity for improvement, external complain');
INSERT INTO `master_category` VALUES (13, 'safety non compliance', 'safety non compliance');
INSERT INTO `master_category` VALUES (14, 'safety non compliance, external complain', 'safety non compliance, external complain');

-- ----------------------------
-- Table structure for master_initiator_div
-- ----------------------------
DROP TABLE IF EXISTS `master_initiator_div`;
CREATE TABLE `master_initiator_div`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_initiator_div` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_initiator_div` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of master_initiator_div
-- ----------------------------
INSERT INTO `master_initiator_div` VALUES (1, 'COMMERCIAL', 'COMMERCIAL');
INSERT INTO `master_initiator_div` VALUES (2, 'CR', 'CR');
INSERT INTO `master_initiator_div` VALUES (3, 'HSE', 'HSE');
INSERT INTO `master_initiator_div` VALUES (4, 'IC', 'IC');
INSERT INTO `master_initiator_div` VALUES (5, 'KEY ACCOUNT', 'KEY ACCOUNT');
INSERT INTO `master_initiator_div` VALUES (6, 'MANAGEMENT', 'MANAGEMENT');
INSERT INTO `master_initiator_div` VALUES (7, 'OPERATION', 'OPERATION');
INSERT INTO `master_initiator_div` VALUES (8, 'SALES', 'SALES');

-- ----------------------------
-- Table structure for master_recipient_div
-- ----------------------------
DROP TABLE IF EXISTS `master_recipient_div`;
CREATE TABLE `master_recipient_div`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_recipient_div` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_recipient_div` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of master_recipient_div
-- ----------------------------
INSERT INTO `master_recipient_div` VALUES (1, 'CC', 'CC');
INSERT INTO `master_recipient_div` VALUES (2, 'COMMERCIAL', 'COMMERCIAL');
INSERT INTO `master_recipient_div` VALUES (3, 'CR', 'CR');
INSERT INTO `master_recipient_div` VALUES (4, 'HR&GA', 'HR&GA');
INSERT INTO `master_recipient_div` VALUES (5, 'HSE', 'HSE');
INSERT INTO `master_recipient_div` VALUES (6, 'IT', 'IT');
INSERT INTO `master_recipient_div` VALUES (7, 'KEY ACCOUNT', 'KEY ACCOUNT');
INSERT INTO `master_recipient_div` VALUES (8, 'OPERATION', 'OPERATION');
INSERT INTO `master_recipient_div` VALUES (9, 'PROCUREMENT', 'PROCUREMENT');
INSERT INTO `master_recipient_div` VALUES (10, 'SALES', 'SALES');
INSERT INTO `master_recipient_div` VALUES (11, 'TRUCKING', 'TRUCKING');

-- ----------------------------
-- Table structure for master_stage
-- ----------------------------
DROP TABLE IF EXISTS `master_stage`;
CREATE TABLE `master_stage`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_stage` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_stage` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of master_stage
-- ----------------------------
INSERT INTO `master_stage` VALUES (1, 'Draft', 'Draft');
INSERT INTO `master_stage` VALUES (2, 'Submitted', 'Submitted');
INSERT INTO `master_stage` VALUES (3, 'Open', 'Open');
INSERT INTO `master_stage` VALUES (4, 'Responded', 'Responded');
INSERT INTO `master_stage` VALUES (5, 'Verified', 'Verified');
INSERT INTO `master_stage` VALUES (6, 'Closed', 'Closed');
INSERT INTO `master_stage` VALUES (7, 'Re-Open', 'Re-Open');
INSERT INTO `master_stage` VALUES (8, 'Voided', 'Voided');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin@admin.com', '$2y$10$tPtTNuqf/.2zPK9O7sm9t.3KE/9DwBnf.M5TaBLJCrfC8tpXSLe9y');

SET FOREIGN_KEY_CHECKS = 1;
