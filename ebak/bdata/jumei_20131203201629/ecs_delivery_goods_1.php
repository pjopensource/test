<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_goods`;");
E_C("CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `delivery_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `product_id` mediumint(8) unsigned default '0',
  `product_sn` varchar(60) default NULL,
  `goods_name` varchar(120) default NULL,
  `brand_name` varchar(60) default NULL,
  `goods_sn` varchar(60) default NULL,
  `is_real` tinyint(1) unsigned default '0',
  `extension_code` varchar(30) default NULL,
  `parent_id` mediumint(8) unsigned default '0',
  `send_number` smallint(5) unsigned default '0',
  `goods_attr` text,
  PRIMARY KEY  (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_goods` values('1','1','118','0','','倩碧润肤露 (有油版1，2) 125ml','Herborist','ECS000118','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('2','1','117','0','','OLAY玉兰油新生塑颜金纯活能水150ml（两款包装随机发货）','jiyan','ECS000117','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('3','1','116','0','','兰芝睡眠面膜80ml (多款包装，随机发货)','umei','ECS000116','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('4','1','115','0','','芳草集玫瑰纯露 220ml ','Loreal','ECS000115','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('5','1','111','0','','AFU阿芙茶树精油 10ml ','xiangyibencao','ECS000111','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('6','1','110','0','','UNES优理氏玻尿酸肽保湿隔离喷雾 60ml ','yilishabaiyadun','ECS000110','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('7','1','109','0','','迪肤适(The Face Shop)金盏花嫩肤精华乳150ml','ZA','ECS000109','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('8','1','123','0','','娥佩兰透气蜜粉1号(自然色）10g ','cetaphil','ECS000123','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('9','1','122','0','','芙优润细致无痕妆前乳 30ml','cetaphil','ECS000122','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('10','1','121','0','','美宝莲(MAYBELLINE)奇妙密睫梳套装(妙密睫梳9.2ml +睫毛夹) ','cetaphil','ECS000121','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('11','1','130','0','','相宜本草橄榄油美体滋养乳 200g*2 两款包装随机发货 ','cetaphil','ECS000130','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('12','1','129','0','','雅芳AVON小黑裙沐浴露 150ml ','ZA','ECS000129','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('13','2','118','0','','倩碧润肤露 (有油版1，2) 125ml','Herborist','ECS000118','1','','0','1','大小:小盒 \n颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('14','3','115','0','','芳草集玫瑰纯露 220ml ','Loreal','ECS000115','1','','0','1','');");

require("../../inc/footer.php");
?>