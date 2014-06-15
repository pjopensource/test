<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_type`;");
E_C("CREATE TABLE `ecs_goods_type` (
  `cat_id` smallint(5) unsigned NOT NULL auto_increment,
  `cat_name` varchar(60) NOT NULL default '',
  `enabled` tinyint(1) unsigned NOT NULL default '1',
  `attr_group` varchar(255) NOT NULL,
  PRIMARY KEY  (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_type` values('8','化妆品','1','');");
E_D("replace into `ecs_goods_type` values('12','吸顶灯','1','');");
E_D("replace into `ecs_goods_type` values('11','开关','1','');");
E_D("replace into `ecs_goods_type` values('13','地漏','1','');");
E_D("replace into `ecs_goods_type` values('14','水槽','1','');");
E_D("replace into `ecs_goods_type` values('15','镜前灯','1','');");
E_D("replace into `ecs_goods_type` values('16','油漆涂料','1','');");
E_D("replace into `ecs_goods_type` values('17','浴霸','1','');");
E_D("replace into `ecs_goods_type` values('18','保险柜','1','');");
E_D("replace into `ecs_goods_type` values('19','卫浴五金','1','');");
E_D("replace into `ecs_goods_type` values('20','座便器','1','');");
E_D("replace into `ecs_goods_type` values('21','淋浴房','1','');");
E_D("replace into `ecs_goods_type` values('22','床垫','1','');");
E_D("replace into `ecs_goods_type` values('23','鞋柜','1','');");

require("../../inc/footer.php");
?>