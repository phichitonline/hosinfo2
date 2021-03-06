/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50548
Source Host           : localhost:3306
Source Database       : hosinfo2

Target Server Type    : MYSQL
Target Server Version : 50548
File Encoding         : 65001

Date: 2021-02-20 12:58:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('4', '2014_10_12_200000_add_two_factor_columns_to_users_table', '2');
INSERT INTO `migrations` VALUES ('5', '2019_12_14_000001_create_personal_access_tokens_table', '2');
INSERT INTO `migrations` VALUES ('6', '2021_01_27_095915_create_sessions_table', '2');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for rep_reports
-- ----------------------------
DROP TABLE IF EXISTS `rep_reports`;
CREATE TABLE `rep_reports` (
  `repid` int(11) NOT NULL AUTO_INCREMENT,
  `rep_code` varchar(255) DEFAULT NULL,
  `rep_name` varchar(255) DEFAULT NULL,
  `rep_column` longtext,
  `rep_sql1` longtext,
  `rep_sql2` longtext,
  `rep_sql3` longtext,
  `rep_sql4` longtext,
  `rep_where` longtext,
  `rep_where_fdatename` longtext,
  `rep_where_selecter` longtext,
  `rep_groupby` longtext,
  `rep_user_reporter` varchar(15) DEFAULT NULL,
  `rep_user_request` varchar(255) DEFAULT NULL,
  `rep_update` datetime DEFAULT NULL,
  `rep_cat` varchar(2) DEFAULT NULL,
  `rep_template` text,
  `rep_status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`repid`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rep_reports
-- ----------------------------
INSERT INTO `rep_reports` VALUES ('37', '2564-20210129151900', 'รายงานการใช้ยาต้านไวรัสเอดส์ ARV', 'vn,hn,vstdate,name_pat', 'select o.vn, p.hn, o.vstdate,concat(p.pname,p.fname,\" \",p.lname) name_pat\r\n  from ovst o\r\n  inner join opitemrece i on o.vn=i.vn\r\n  inner join pttype t on o.pttype=t.pttype\r\n  left join patient p on o.hn=p.hn\r\n  left join hospcode h1 on o.hospmain=h1.hospcode\r\n  left join hospcode h2 on o.hospsub=h2.hospcode\r\n  inner join opd_ill_history oi ON o.hn = oi.hn\r\n  where o.vstdate between \"2021-01-01\" and \"2021-01-07\"\r\n  and i.icode in (\"1520570\",\"1520528\",\"1520532\",\"1520318\",\"1590012\",\"1520537\",\"1520017\",\"1520589\",\"1520017\",\"1520589\",\"1520539\",\"1520469\",\"1520673\",\"1520571\",\"1520593\",\"1520578\",\"1520644\",\"1520633\",\"1600031\",\"1620036\",\"1620041\")\r\n  group by o.vn, p.hn\r\n  order by o.hn', null, null, null, null, null, null, null, 'ghost', null, '2021-01-29 15:20:35', '10', null, '1');
INSERT INTO `rep_reports` VALUES ('38', '2564-20210129151901', 'รายงานการใช้ยาต้านไวรัสเอดส์ ARV2', 'vn,hn,วันที่,คำนำหน้า,ชื่อ,นามสกุล', 'select o.vn, p.hn, o.vstdate,p.pname,p.fname,p.lname\r\n  from ovst o\r\n  inner join opitemrece i on o.vn=i.vn\r\n  inner join pttype t on o.pttype=t.pttype\r\n  left join patient p on o.hn=p.hn\r\n  left join hospcode h1 on o.hospmain=h1.hospcode\r\n  left join hospcode h2 on o.hospsub=h2.hospcode\r\n  inner join opd_ill_history oi ON o.hn = oi.hn', null, null, null, 'i.icode in (\"1520570\",\"1520528\",\"1520532\",\"1520318\",\"1590012\",\"1520537\",\"1520017\",\"1520589\",\"1520017\",\"1520589\",\"1520539\",\"1520469\",\"1520673\",\"1520571\",\"1520593\",\"1520578\",\"1520644\",\"1520633\",\"1600031\",\"1620036\",\"1620041\")', 'o.vstdate', '3', 'o.vn, p.hn', 'ghost', null, '2021-01-29 15:20:35', '10', null, '1');

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES ('meiXpkQig4EAOEmMl1CHd2imzxKnAPb4TK8OsMsp', null, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSmw4dHg1MzcxbVQ3cUNyUlRmRExJYmpYdWRLWVJnbjZtVThPVFFvMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zZXR0aW5nIjt9fQ==', '1613613323');
INSERT INTO `sessions` VALUES ('yT55gQECfCuho7tSPqbG1aRZWVNXi3FjbcmIQCsn', null, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVnBJWmpSNVhxZUZSYWdwY2FkT25MSkRuV1NJMEZCcGU0cXRIbUlpUSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyOToiaHR0cDovL2xvY2FsaG9zdDo4MDAwL3NldHRpbmciO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovL2xvY2FsaG9zdDo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', '1613456820');
INSERT INTO `sessions` VALUES ('ZRRqPbCTmLcG3h1xs4sct0vvCT7Smn5KzMNqYTjj', '7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidGZkZ3pCN0JqeWNzeFliNDEyQ2gxc1pTeHdPNXBWS3Rja3VONzBYVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTcxOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvcmVwb3J0cy8zOD9kYXRlc2VsZWN0PTAyJTJGMDklMkYyMDIxJTIwLSUyMDAyJTJGMTUlMkYyMDIxJmlub3V0YXJlYT0xJmlub3V0dGltZT0wJnB0dHlwZSU1QjAlNUQ9MiZwdHR5cGUlNUIxJTVEPTMmdHlwZWFyZWElNUIwJTVEPTEmdHlwZWFyZWElNUIxJTVEPTMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkZGkxQWlFUFhoM25UWk1TZFpXY2hTLlpLTlBNdU1iTURMOHdRUi53VkpOblZEN0J3Zk1hcmkiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGRpMUFpRVBYaDNuVFpNU2RaV2NoUy5aS05QTXVNYk1ETDh3UVIud1ZKTm5WRDdCd2ZNYXJpIjt9', '1613360768');

-- ----------------------------
-- Table structure for sys_rep_cat
-- ----------------------------
DROP TABLE IF EXISTS `sys_rep_cat`;
CREATE TABLE `sys_rep_cat` (
  `id` int(11) NOT NULL,
  `rep_cat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sys_rep_cat
-- ----------------------------
INSERT INTO `sys_rep_cat` VALUES ('1', 'อุบัติเหตุและฉุกเฉิน');
INSERT INTO `sys_rep_cat` VALUES ('2', 'ผู้ป่วยนอก');
INSERT INTO `sys_rep_cat` VALUES ('3', 'ผู้ป่วยใน');
INSERT INTO `sys_rep_cat` VALUES ('5', 'สูติกรรม');
INSERT INTO `sys_rep_cat` VALUES ('6', 'ผ่าตัดและวิสัญญี');
INSERT INTO `sys_rep_cat` VALUES ('8', 'เวชกรรมสังคม');
INSERT INTO `sys_rep_cat` VALUES ('10', 'เภสัชกรรม');
INSERT INTO `sys_rep_cat` VALUES ('14', 'กายภาพบำบัด');
INSERT INTO `sys_rep_cat` VALUES ('15', 'เวชระเบียน');
INSERT INTO `sys_rep_cat` VALUES ('17', 'ประกันสุขภาพ');
INSERT INTO `sys_rep_cat` VALUES ('18', 'แผนงานและข้อมูลข่าวสาร');
INSERT INTO `sys_rep_cat` VALUES ('19', 'เวชสถิติ ');
INSERT INTO `sys_rep_cat` VALUES ('20', 'องค์กรแพทย์');
INSERT INTO `sys_rep_cat` VALUES ('21', 'ทันตกรรม');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', 'sirintorn', 'สิรินธร  เครือเทศ', 'evesirintorn@gmail.com', null, '$2y$10$2W9gN489IQb2JBp01tMYsewPLlIuzm7mFi765GwMWdFC1LfOBgZHG', null, null, null, '2021-01-28 04:37:33', '2021-01-28 04:37:33');
INSERT INTO `users` VALUES ('7', 'ghost', 'ณัฐพงศ์  เครือเทศ', 'phichitonline@gmail.com', null, '$2y$10$di1AiEPXh3nTZMSdZWchS.ZKNPMuMbMDL8wQR.wVJNnVD7BwfMari', null, null, null, '2021-01-28 05:30:23', '2021-01-28 05:30:23');
INSERT INTO `users` VALUES ('8', 'phichitonline', 'ผู้ดูแลระบบ', 'admin@tphcp.go.th', null, '$2y$10$lwKdTyXNKGk.O8g0PNhZ6.KFfNocU3exKU2aVOckLc0ZqEP0ZVwFK', null, null, null, '2021-01-28 05:39:15', '2021-01-28 05:39:15');
