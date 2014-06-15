<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_goods`;");
E_C("CREATE TABLE `ecs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_name` varchar(120) NOT NULL default '',
  `goods_sn` varchar(60) NOT NULL default '',
  `product_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_number` smallint(5) unsigned NOT NULL default '1',
  `market_price` decimal(10,2) NOT NULL default '0.00',
  `goods_price` decimal(10,2) NOT NULL default '0.00',
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL default '0',
  `is_real` tinyint(1) unsigned NOT NULL default '0',
  `extension_code` varchar(30) NOT NULL default '',
  `parent_id` mediumint(8) unsigned NOT NULL default '0',
  `is_gift` smallint(5) unsigned NOT NULL default '0',
  `goods_attr_id` varchar(255) NOT NULL default '',
  `package_attr_id` varchar(100) NOT NULL,
  PRIMARY KEY  (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_goods` values('1','1','118','倩碧润肤露 (有油版1，2) 125ml','ECS000118','0','1','174.00','145.00','','1','1','','0','0','','');");
E_D("replace into `ecs_order_goods` values('2','1','117','OLAY玉兰油新生塑颜金纯活能水150ml（两款包装随机发货）','ECS000117','0','1','414.00','345.00','','1','1','','0','0','','');");
E_D("replace into `ecs_order_goods` values('3','1','116','兰芝睡眠面膜80ml (多款包装，随机发货)','ECS000116','0','1','266.40','222.00','','1','1','','0','0','','');");
E_D("replace into `ecs_order_goods` values('4','1','115','芳草集玫瑰纯露 220ml ','ECS000115','0','1','429.60','358.00','','1','1','','0','0','','');");
E_D("replace into `ecs_order_goods` values('5','1','111','AFU阿芙茶树精油 10ml ','ECS000111','0','1','210.00','175.00','','1','1','','0','0','','');");
E_D("replace into `ecs_order_goods` values('6','1','110','UNES优理氏玻尿酸肽保湿隔离喷雾 60ml ','ECS000110','0','1','222.00','185.00','','1','1','','0','0','','');");
E_D("replace into `ecs_order_goods` values('7','1','109','迪肤适(The Face Shop)金盏花嫩肤精华乳150ml','ECS000109','0','1','225.00','187.50','','1','1','','0','0','','');");
E_D("replace into `ecs_order_goods` values('8','1','123','娥佩兰透气蜜粉1号(自然色）10g ','ECS000123','0','1','39.60','33.00','','1','1','','0','0','','');");
E_D("replace into `ecs_order_goods` values('9','1','122','芙优润细致无痕妆前乳 30ml','ECS000122','0','1','105.60','88.00','','1','1','','0','0','','');");
E_D("replace into `ecs_order_goods` values('10','1','121','美宝莲(MAYBELLINE)奇妙密睫梳套装(妙密睫梳9.2ml +睫毛夹) ','ECS000121','0','1','120.00','100.00','','1','1','','0','0','','');");
E_D("replace into `ecs_order_goods` values('11','1','130','相宜本草橄榄油美体滋养乳 200g*2 两款包装随机发货 ','ECS000130','0','1','399.59','333.00','','1','1','','0','0','','');");
E_D("replace into `ecs_order_goods` values('12','1','129','雅芳AVON小黑裙沐浴露 150ml ','ECS000129','0','1','26.40','22.00','','1','1','','0','0','','');");
E_D("replace into `ecs_order_goods` values('13','2','118','倩碧润肤露 (有油版1，2) 125ml','ECS000118','0','1','174.00','145.00','大小:小盒 \n颜色:黑色 \n','1','1','','0','0','1,4','');");
E_D("replace into `ecs_order_goods` values('14','3','115','芳草集玫瑰纯露 220ml ','ECS000115','0','1','429.60','20.00','','1','1','','0','0','','');");
E_D("replace into `ecs_order_goods` values('15','4','20','套餐一','','0','2','536.00','200.00','','0','1','package_buy','0','0','','118-0,115-0,120-0');");
E_D("replace into `ecs_order_goods` values('16','5','139','芳草集男士海之蓝保湿收敛水 200ml ','ECS000139','0','1','67.20','56.00','颜色:黑色 \n','0','1','','0','0','15','');");
E_D("replace into `ecs_order_goods` values('17','6','118','倩碧润肤露 (有油版1，2) 125ml','ECS000118','0','1','174.00','145.00','颜色:黑色 \n','0','1','','0','0','21','');");

require("../../inc/footer.php");
?>