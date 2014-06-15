<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_attr`;");
E_C("CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL auto_increment,
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `attr_id` smallint(5) unsigned NOT NULL default '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL default '',
  `thumb_url` varchar(255) NOT NULL,
  `img_url` varchar(80) NOT NULL,
  `img_original` varchar(80) NOT NULL,
  `hex_color` varchar(80) NOT NULL,
  PRIMARY KEY  (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_attr` values('13','118','170','油性','0','','','','');");
E_D("replace into `ecs_goods_attr` values('12','118','169','脸部','0','','','','');");
E_D("replace into `ecs_goods_attr` values('11','118','168','化妆工具','0','','','','');");
E_D("replace into `ecs_goods_attr` values('10','118','167','s水','0','','','','');");
E_D("replace into `ecs_goods_attr` values('9','118','166','30ml','0','','','','');");
E_D("replace into `ecs_goods_attr` values('8','118','165','广州','0','','','','');");
E_D("replace into `ecs_goods_attr` values('15','139','213','黑色','','','','','');");
E_D("replace into `ecs_goods_attr` values('16','139','213','红色','','','','','');");
E_D("replace into `ecs_goods_attr` values('17','139','213','白色','','','','','');");
E_D("replace into `ecs_goods_attr` values('18','138','213','黑色','','','','','');");
E_D("replace into `ecs_goods_attr` values('19','138','213','红色','','','','','');");
E_D("replace into `ecs_goods_attr` values('20','138','213','白色','','','','','');");
E_D("replace into `ecs_goods_attr` values('21','118','213','黑色','','images/201304/thumb_img/118_thumb_G_1367248183305.jpg','images/201304/goods_img/118_G_1367248183436.jpg','images/201304/source_img/118_G_1367248183997.jpg','');");
E_D("replace into `ecs_goods_attr` values('22','118','213','红色','','images/201304/thumb_img/118_thumb_G_1367248194103.jpg','images/201304/goods_img/118_G_1367248194650.jpg','images/201304/source_img/118_G_1367248194003.jpg','');");
E_D("replace into `ecs_goods_attr` values('23','118','213','白色','','images/201304/thumb_img/118_thumb_G_1367248202160.jpg','images/201304/goods_img/118_G_1367248202132.jpg','images/201304/source_img/118_G_1367248202701.jpg','');");

require("../../inc/footer.php");
?>