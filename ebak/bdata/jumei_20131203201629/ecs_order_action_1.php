<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_action`;");
E_C("CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL auto_increment,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `action_user` varchar(30) NOT NULL default '',
  `order_status` tinyint(1) unsigned NOT NULL default '0',
  `shipping_status` tinyint(1) unsigned NOT NULL default '0',
  `pay_status` tinyint(1) unsigned NOT NULL default '0',
  `action_place` tinyint(1) unsigned NOT NULL default '0',
  `action_note` varchar(255) NOT NULL default '',
  `log_time` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_action` values('1','1','admin','1','0','0','0','','1350971303');");
E_D("replace into `ecs_order_action` values('2','1','admin','1','0','2','0','22','1350971308');");
E_D("replace into `ecs_order_action` values('3','1','admin','1','3','2','0','','1350971312');");
E_D("replace into `ecs_order_action` values('4','1','admin','5','5','2','0','2','1350971322');");
E_D("replace into `ecs_order_action` values('5','1','admin','1','1','2','1','','1350971335');");
E_D("replace into `ecs_order_action` values('6','1','买家','5','2','2','0','','1350971352');");
E_D("replace into `ecs_order_action` values('7','2','admin','1','0','2','0','2','1363939516');");
E_D("replace into `ecs_order_action` values('8','2','admin','5','5','2','0','2','1363939524');");
E_D("replace into `ecs_order_action` values('9','2','admin','1','1','2','1','','1363939536');");
E_D("replace into `ecs_order_action` values('10','2','买家','5','2','2','0','','1363939548');");
E_D("replace into `ecs_order_action` values('11','3','admin','1','0','2','0','2','1367202441');");
E_D("replace into `ecs_order_action` values('12','3','admin','1','3','2','0','','1367202478');");
E_D("replace into `ecs_order_action` values('13','3','admin','1','3','2','0','[售后] 22','1367202505');");
E_D("replace into `ecs_order_action` values('14','3','admin','5','5','2','0','','1367202607');");
E_D("replace into `ecs_order_action` values('15','3','admin','1','1','2','1','','1367202618');");
E_D("replace into `ecs_order_action` values('16','3','买家','5','2','2','0','','1367202638');");

require("../../inc/footer.php");
?>