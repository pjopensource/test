<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_nav`;");
E_C("CREATE TABLE `ecs_nav` (
  `id` mediumint(8) NOT NULL auto_increment,
  `ctype` varchar(10) default NULL,
  `cid` smallint(5) unsigned default NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_nav` values('1','c','6','建材超市','0','2','0','category.php?id=6','middle');");
E_D("replace into `ecs_nav` values('2','c','1','团购活动','1','1','0','category.php?id=1','middle');");
E_D("replace into `ecs_nav` values('3','c','12','置家宝','1','3','0','category.php?id=12','middle');");
E_D("replace into `ecs_nav` values('4','c','16','装修服务','1','4','0','category.php?id=16','middle');");
E_D("replace into `ecs_nav` values('5','c','17','企业服务','1','5','0','category.php?id=17','middle');");
E_D("replace into `ecs_nav` values('6','','0','每日精选','1','0','0','group_buy.php','middle');");
E_D("replace into `ecs_nav` values('7','','0','所有品牌','1','7','0','222','middle');");
E_D("replace into `ecs_nav` values('9','c','128','插座','0','9','0','category.php?id=128','middle');");
E_D("replace into `ecs_nav` values('10',NULL,NULL,'源码','0','10','0','http://www.souho.net','middle');");

require("../../inc/footer.php");
?>