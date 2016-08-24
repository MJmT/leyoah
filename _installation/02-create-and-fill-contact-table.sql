CREATE TABLE IF NOT EXISTS `leyoah`.`user_submission` (
  `submission_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `web_url` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`submission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';