<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_link_goods`;");
E_C("CREATE TABLE `ecs_link_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `link_goods_id` mediumint(8) unsigned NOT NULL default '0',
  `is_double` tinyint(1) unsigned NOT NULL default '0',
  `admin_id` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`goods_id`,`link_goods_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_link_goods` values('118','113','0','1');");
E_D("replace into `ecs_link_goods` values('118','114','0','1');");
E_D("replace into `ecs_link_goods` values('118','115','0','1');");
E_D("replace into `ecs_link_goods` values('118','116','0','1');");
E_D("replace into `ecs_link_goods` values('118','117','0','1');");
E_D("replace into `ecs_link_goods` values('118','110','0','1');");
E_D("replace into `ecs_link_goods` values('118','111','0','1');");
E_D("replace into `ecs_link_goods` values('118','108','0','1');");
E_D("replace into `ecs_link_goods` values('118','109','0','1');");

require("../../inc/footer.php");
?>