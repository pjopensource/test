<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad`;");
E_C("CREATE TABLE `ecs_ad` (
  `ad_id` smallint(5) unsigned NOT NULL auto_increment,
  `position_id` smallint(5) unsigned NOT NULL default '0',
  `media_type` tinyint(3) unsigned NOT NULL default '0',
  `ad_name` varchar(60) NOT NULL default '',
  `ad_link` varchar(255) NOT NULL default '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL default '0',
  `end_time` int(11) NOT NULL default '0',
  `link_man` varchar(60) NOT NULL default '',
  `link_email` varchar(60) NOT NULL default '',
  `link_phone` varchar(60) NOT NULL default '',
  `click_count` mediumint(8) unsigned NOT NULL default '0',
  `enabled` tinyint(3) unsigned NOT NULL default '1',
  PRIMARY KEY  (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad` values('9','2','0','品牌官方旗舰店1','index.php','1348131758830731507.jpg','1348070400','1476892800','','','','0','1');");
E_D("replace into `ecs_ad` values('10','2','0','品牌官方旗舰店2','index.php','1348131772173284039.jpg','1348070400','1539964800','','','','1','1');");
E_D("replace into `ecs_ad` values('11','2','0','品牌官方旗舰店3','index.php','1348131787934306852.jpg','1348070400','1539964800','','','','0','1');");
E_D("replace into `ecs_ad` values('12','2','0','品牌官方旗舰店4','index.php','1348131801087012465.jpg','1348070400','1508428800','','','','2','1');");
E_D("replace into `ecs_ad` values('13','2','0','品牌官方旗舰店5','index.php','1348131818999684405.jpg','1348070400','1476892800','','','','2','1');");
E_D("replace into `ecs_ad` values('14','2','0','品牌官方旗舰店6','index.php','1348131837594155183.jpg','1348070400','1508428800','','','','2','1');");
E_D("replace into `ecs_ad` values('15','2','0','品牌官方旗舰店7','index.php','1348131974609404099.jpg','1348070400','1445270400','','','','0','1');");
E_D("replace into `ecs_ad` values('16','2','0','品牌官方旗舰店8','index.php','1348131990264351079.jpg','1348070400','1476892800','','','','0','1');");
E_D("replace into `ecs_ad` values('17','3','0','护肤广告1','index.php','1368488031411424510.jpg','1348041600','1476950400','','','','0','1');");
E_D("replace into `ecs_ad` values('18','3','0','护肤广告2','index.php','1368489896718779191.jpg','1348041600','1539936000','','','','0','1');");
E_D("replace into `ecs_ad` values('19','3','0','护肤广告3','index.php','1368490837805110087.jpg','1348041600','1508400000','','','','0','1');");
E_D("replace into `ecs_ad` values('20','3','0','护肤广告4','index.php','1368492113689972090.jpg','1348041600','1476864000','','','','0','1');");
E_D("replace into `ecs_ad` values('21','3','0','护肤广告5','index.php','1368491105228378690.jpg','1348041600','1476864000','','','','0','1');");
E_D("replace into `ecs_ad` values('22','3','0','护肤广告6','index.php','1368491454877536965.jpg','1348041600','1508400000','','','','0','1');");
E_D("replace into `ecs_ad` values('23','3','0','护肤广告7','index.php','1368492242286265489.jpg','1348041600','1508400000','','','','0','1');");
E_D("replace into `ecs_ad` values('24','3','0','护肤广告8','index.php','1368491819213639673.jpg','1348041600','1508400000','','','','0','1');");
E_D("replace into `ecs_ad` values('25','3','0','护肤广告9','index.php','1368491396927844036.jpg','1348041600','1545206400','','','','0','1');");
E_D("replace into `ecs_ad` values('26','4','0','彩妆广告1','index.php','1348136425252000931.jpg','1348070400','1476892800','','','','0','1');");
E_D("replace into `ecs_ad` values('27','4','0','彩妆广告2','index.php','1348136438452748662.jpg','1348070400','1476892800','','','','0','1');");
E_D("replace into `ecs_ad` values('28','4','0','彩妆广告3','index.php','1348136451642072887.jpg','1348070400','1445270400','','','','0','1');");
E_D("replace into `ecs_ad` values('29','4','0','彩妆广告4','index.php','1348136465544327900.jpg','1348070400','1507824000','','','','0','1');");
E_D("replace into `ecs_ad` values('30','4','0','彩妆广告5','index.php','1348136477488189896.jpg','1348070400','1571500800','','','','0','1');");
E_D("replace into `ecs_ad` values('31','5','0','香气广告1','index.php','1348137052886620116.jpg','1348070400','1508428800','','','','0','1');");
E_D("replace into `ecs_ad` values('32','5','0','香气广告2','index.php','1348137068182798495.jpg','1348070400','1445270400','','','','0','1');");
E_D("replace into `ecs_ad` values('33','5','0','香气广告3','index.php','1348137086655646938.jpg','1348070400','1539878400','','','','0','1');");
E_D("replace into `ecs_ad` values('34','5','0','香气广告4','index.php','1348137099507317623.jpg','1348070400','1508428800','','','','0','1');");
E_D("replace into `ecs_ad` values('35','5','0','香气广告5','index.php','1348137115983874262.jpg','1348070400','1476374400','','','','0','1');");
E_D("replace into `ecs_ad` values('36','6','0','身体护理广告1','index.php','1348137560912401664.jpg','1348070400','1476288000','','','','0','1');");
E_D("replace into `ecs_ad` values('37','6','0','身体护理广告2','index.php','1348137576206025799.jpg','1348070400','1508428800','','','','0','1');");
E_D("replace into `ecs_ad` values('38','6','0','身体护理广告3','index.php','1348137591085612625.jpg','1348070400','1445270400','','','','0','1');");
E_D("replace into `ecs_ad` values('39','6','0','身体护理广告4','index.php','1348137608304923660.jpg','1348070400','1511020800','','','','0','1');");
E_D("replace into `ecs_ad` values('40','6','0','身体护理广告5','index.php','1348137623754599043.jpg','1348070400','1508428800','','','','0','1');");
E_D("replace into `ecs_ad` values('41','7','0','男士护理广告1','index.php','1348137941809662729.jpg','1348070400','1444665600','','','','0','1');");
E_D("replace into `ecs_ad` values('42','7','0','男士护理广告2','index.php','1348137953225166711.jpg','1348070400','1539964800','','','','0','1');");
E_D("replace into `ecs_ad` values('43','7','0','男士护理广告3','index.php','1348137967730425865.jpg','1348070400','1476892800','','','','0','1');");
E_D("replace into `ecs_ad` values('44','7','0','男士护理广告4','index.php','1348137982372989240.jpg','1348070400','1476892800','','','','0','1');");
E_D("replace into `ecs_ad` values('45','7','0','男士护理广告5','index.php','1348137996646578317.jpg','1348070400','1476892800','','','','0','1');");
E_D("replace into `ecs_ad` values('46','8','0','用品评论左侧广告1','index.php','1350973122657353586.jpg','1348070400','1476892800','','','','0','1');");
E_D("replace into `ecs_ad` values('47','8','0','用品评论左侧广告2','index.php','1350973085437131886.jpg','1348070400','1476892800','','','','0','1');");
E_D("replace into `ecs_ad` values('48','9','0','商品列表右边广告区域','index.php','1350975236144913107.jpg','1348070400','1444752000','','','','3','1');");
E_D("replace into `ecs_ad` values('49','10','0','团购顶部广告','','1364263064106916030.jpg','1361808000','1398355200','','','','2','1');");
E_D("replace into `ecs_ad` values('50','11','0','团购右边广告一','#','1364263418962890644.jpg','1364227200','1398355200','','','','0','1');");
E_D("replace into `ecs_ad` values('51','12','0','团购右边广告二','#','1364263435696471849.jpg','1364227200','1398355200','','','','0','1');");
E_D("replace into `ecs_ad` values('52','13','0','团购右边广告三','#','1364264951031141824.jpg','1364227200','1398355200','','','','0','1');");
E_D("replace into `ecs_ad` values('53','14','0','团购右边广告四','#','1364264964633605740.jpg','1364227200','1398355200','','','','0','1');");
E_D("replace into `ecs_ad` values('54','10','0','TG2','','1367711350416460355.jpg','1367654400','1370246400','','','','0','1');");
E_D("replace into `ecs_ad` values('55','1','0','科勒','','1367714774913839607.jpg','1367568000','1370246400','','','','0','1');");

require("../../inc/footer.php");
?>