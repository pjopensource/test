<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_article`;");
E_C("CREATE TABLE `ecs_article` (
  `article_id` mediumint(8) unsigned NOT NULL auto_increment,
  `cat_id` smallint(5) NOT NULL default '0',
  `title` varchar(150) NOT NULL default '',
  `content` longtext NOT NULL,
  `author` varchar(30) NOT NULL default '',
  `author_email` varchar(60) NOT NULL default '',
  `keywords` varchar(255) NOT NULL default '',
  `article_type` tinyint(1) unsigned NOT NULL default '2',
  `is_open` tinyint(1) unsigned NOT NULL default '1',
  `add_time` int(10) unsigned NOT NULL default '0',
  `file_url` varchar(255) NOT NULL default '',
  `open_type` tinyint(1) unsigned NOT NULL default '0',
  `link` varchar(255) NOT NULL default '',
  `description` varchar(255) default NULL,
  PRIMARY KEY  (`article_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_article` values('1','2','免责条款','','','','','0','1','1350912454','','0','','');");
E_D("replace into `ecs_article` values('2','2','隐私保护','','','','','0','1','1350912454','','0','','');");
E_D("replace into `ecs_article` values('3','2','咨询热点','','','','','0','1','1350912454','','0','','');");
E_D("replace into `ecs_article` values('4','2','联系我们','','','','','0','1','1350912454','','0','','');");
E_D("replace into `ecs_article` values('5','2','公司简介','','','','','0','1','1350912454','','0','','');");
E_D("replace into `ecs_article` values('6','-1','用户协议','','','','','0','1','1350912454','','0','','');");
E_D("replace into `ecs_article` values('7','4','新手指南 ','','','','','0','1','1350971787','','0','http://','');");
E_D("replace into `ecs_article` values('8','4','常见问题 ','','','','','0','1','1350971799','','0','http://','');");
E_D("replace into `ecs_article` values('9','4','帮助中心首页 ','','','','','0','1','1350971809','','0','http://','');");
E_D("replace into `ecs_article` values('10','4','用户协议 ','','','','','0','1','1350971818','','0','http://','');");
E_D("replace into `ecs_article` values('11','4','隐私声明 ','','','','','0','1','1350971827','','0','http://','');");
E_D("replace into `ecs_article` values('12','5','100%正品保障 ','','','','','0','1','1350971854','','0','http://','');");
E_D("replace into `ecs_article` values('13','5','退换货政策 ','','','','','0','1','1350971863','','0','http://','');");
E_D("replace into `ecs_article` values('14','5','在线退货办理 ','','','','','0','1','1350971872','','0','http://','');");
E_D("replace into `ecs_article` values('15','5','玩转口碑中心 ','','','','','0','1','1350971885','','0','http://','');");
E_D("replace into `ecs_article` values('16','5','总裁邮箱','','','','','0','1','1350971907','','0','http://','');");
E_D("replace into `ecs_article` values('17','6','订阅每日团购 ','','','','','0','1','1350971917','','0','http://','');");
E_D("replace into `ecs_article` values('18','6','博客','','','','','0','1','1350971925','','0','http://','');");
E_D("replace into `ecs_article` values('19','6','新浪微博','','','','','0','1','1350971936','','0','http://','');");
E_D("replace into `ecs_article` values('20','6','手机版','','','','','0','1','1350971947','','0','http://','');");
E_D("replace into `ecs_article` values('21','7','品牌合作专区 ','','','','','0','1','1350971957','','0','http://','');");
E_D("replace into `ecs_article` values('22','7','关于我们','','','','','0','1','1350971968','','0','http://','');");
E_D("replace into `ecs_article` values('23','7','媒体报道 ','','','','','0','1','1350971977','','0','http://','');");
E_D("replace into `ecs_article` values('24','8','商务合作 ','','','','','0','1','1350971991','','0','http://','');");
E_D("replace into `ecs_article` values('25','8','招贤纳士','','','','','0','1','1350972000','','0','http://','');");
E_D("replace into `ecs_article` values('26','8','友情链接 ','','','','','0','1','1350972009','','0','http://','');");
E_D("replace into `ecs_article` values('27','9','货到付款 ','','','','','0','1','1350972017','','0','http://','');");
E_D("replace into `ecs_article` values('28','8','在线支付 ','','','','','0','1','1350972025','','0','http://','');");
E_D("replace into `ecs_article` values('29','9','余额支付 ','','','','','0','1','1350972033','','0','http://','');");
E_D("replace into `ecs_article` values('30','10','“五坚决”引发新变革','','','','','0','1','1364264475','','0','http://','');");
E_D("replace into `ecs_article` values('31','10','牵头号召行业自律','','','','','0','1','1364264487','','0','http://','');");
E_D("replace into `ecs_article` values('32','10','吹响真品联盟集结号','','','','','0','1','1364264495','','0','http://','');");
E_D("replace into `ecs_article` values('33','10','号召化妆品电商自律','','','','','0','1','1364264503','','0','http://','');");
E_D("replace into `ecs_article` values('34','10','破局网购新政','','','','','0','1','1364264511','','0','http://','');");

require("../../inc/footer.php");
?>