<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_area_region`;");
E_C("CREATE TABLE `ecs_area_region` (
  `shipping_area_id` smallint(5) unsigned NOT NULL default '0',
  `region_id` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`shipping_area_id`,`region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_area_region` values('1','6');");
E_D("replace into `ecs_area_region` values('2','1834');");
E_D("replace into `ecs_area_region` values('2','1835');");
E_D("replace into `ecs_area_region` values('2','1836');");
E_D("replace into `ecs_area_region` values('2','1837');");
E_D("replace into `ecs_area_region` values('2','1838');");
E_D("replace into `ecs_area_region` values('2','1839');");
E_D("replace into `ecs_area_region` values('2','1840');");
E_D("replace into `ecs_area_region` values('2','1842');");
E_D("replace into `ecs_area_region` values('2','1843');");
E_D("replace into `ecs_area_region` values('2','1844');");
E_D("replace into `ecs_area_region` values('2','1845');");
E_D("replace into `ecs_area_region` values('2','1846');");
E_D("replace into `ecs_area_region` values('3','1834');");
E_D("replace into `ecs_area_region` values('3','1835');");
E_D("replace into `ecs_area_region` values('3','1836');");
E_D("replace into `ecs_area_region` values('3','1837');");
E_D("replace into `ecs_area_region` values('3','1838');");
E_D("replace into `ecs_area_region` values('3','1839');");
E_D("replace into `ecs_area_region` values('3','1840');");
E_D("replace into `ecs_area_region` values('3','1841');");
E_D("replace into `ecs_area_region` values('3','1842');");
E_D("replace into `ecs_area_region` values('3','1843');");
E_D("replace into `ecs_area_region` values('3','1844');");
E_D("replace into `ecs_area_region` values('3','1845');");
E_D("replace into `ecs_area_region` values('3','1846');");

require("../../inc/footer.php");
?>