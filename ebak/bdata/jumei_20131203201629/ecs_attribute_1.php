<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_attribute`;");
E_C("CREATE TABLE `ecs_attribute` (
  `attr_id` smallint(5) unsigned NOT NULL auto_increment,
  `cat_id` smallint(5) unsigned NOT NULL default '0',
  `attr_name` varchar(60) NOT NULL default '',
  `attr_input_type` tinyint(1) unsigned NOT NULL default '1',
  `attr_type` tinyint(1) unsigned NOT NULL default '1',
  `attr_values` text NOT NULL,
  `attr_index` tinyint(1) unsigned NOT NULL default '0',
  `sort_order` tinyint(3) unsigned NOT NULL default '0',
  `is_linked` tinyint(1) unsigned NOT NULL default '0',
  `attr_group` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`attr_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=217 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_attribute` values('165','8','产地','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('166','8','产品规格/容量','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('167','8','主要原料','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('168','8','所属类别','1','0','彩妆\r\n化妆工具\r\n护肤品\r\n香水','0','0','0','0');");
E_D("replace into `ecs_attribute` values('169','8','使用部位','0','0','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('170','8','适合肤质','1','0','油性\r\n中性\r\n干性','0','0','0','0');");
E_D("replace into `ecs_attribute` values('171','8','适用人群','1','0','女性\r\n男性','0','0','0','0');");
E_D("replace into `ecs_attribute` values('213','8','颜色','1','1','黑色\r\n红色\r\n蓝色\r\n白色','0','0','0','0');");
E_D("replace into `ecs_attribute` values('214','11','开关分类','1','0','单控开关\r\n双控开关\r\n遥控开关\r\n多控开关\r\n触摸开关\r\n感应开关\r\n智能开关\r\n浴霸专用开关\r\n其他','0','0','1','0');");
E_D("replace into `ecs_attribute` values('215','11','按键数','1','0','一开\r\n二开\r\n三开\r\n四开\r\n其他','0','0','0','0');");
E_D("replace into `ecs_attribute` values('216','11','类型','1','0','86\r\n118\r\n120\r\n其他','0','0','0','0');");

require("../../inc/footer.php");
?>