<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions_data`;");
E_C("CREATE TABLE `ecs_sessions_data` (
  `sesskey` varchar(32) character set utf8 collate utf8_bin NOT NULL default '',
  `expiry` int(10) unsigned NOT NULL default '0',
  `data` longtext NOT NULL,
  PRIMARY KEY  (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions_data` values('a6436579f9afd77f88b09a9bba84153c','4294967295','a:6:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:14:\"display_search\";s:4:\"grid\";s:12:\"captcha_word\";s:16:\"ODNlN2E4NjVmNw==\";s:10:\"flow_order\";a:5:{s:11:\"shipping_id\";i:0;s:6:\"pay_id\";i:1;s:14:\"extension_code\";s:0:\"\";s:7:\"surplus\";i:0;s:8:\"integral\";i:0;}}');");
E_D("replace into `ecs_sessions_data` values('083166e0753a6b942b241081781d44fd','4294967295','a:7:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:10:\"flow_order\";a:5:{s:11:\"shipping_id\";i:0;s:6:\"pay_id\";i:1;s:14:\"extension_code\";s:0:\"\";s:7:\"surplus\";i:0;s:8:\"integral\";i:0;}s:12:\"captcha_word\";s:16:\"NDViZGYyMDUxNA==\";s:9:\"flow_type\";i:0;s:15:\"direct_shopping\";i:1;}');");
E_D("replace into `ecs_sessions_data` values('b9bd7aee1626650735a7126ba815c5cd','4294967295','a:9:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:12:\"captcha_word\";s:16:\"ZTFlNzg0YWE4ZQ==\";s:9:\"flow_type\";i:0;s:10:\"flow_order\";a:8:{s:14:\"extension_code\";s:0:\"\";s:11:\"shipping_id\";i:0;s:6:\"pay_id\";i:1;s:7:\"pack_id\";i:0;s:7:\"card_id\";i:0;s:5:\"bonus\";i:0;s:8:\"integral\";i:0;s:7:\"surplus\";i:0;}s:9:\"last_time\";s:1:\"0\";s:7:\"last_ip\";s:0:\"\";s:14:\"flow_consignee\";a:14:{s:10:\"address_id\";i:0;s:9:\"consignee\";s:9:\"周馨馨\";s:7:\"country\";s:1:\"1\";s:8:\"province\";s:2:\"16\";s:4:\"city\";s:3:\"220\";s:8:\"district\";s:4:\"1838\";s:5:\"email\";s:16:\"119282138@qq.com\";s:7:\"address\";s:20:\"卡子门大街29号\";s:7:\"zipcode\";s:0:\"\";s:3:\"tel\";s:11:\"15380809984\";s:6:\"mobile\";s:0:\"\";s:13:\"sign_building\";s:0:\"\";s:9:\"best_time\";s:0:\"\";s:7:\"user_id\";s:1:\"3\";}}');");

require("../../inc/footer.php");
?>