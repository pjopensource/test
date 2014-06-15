<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_gallery`;");
E_C("CREATE TABLE `ecs_goods_gallery` (
  `img_id` mediumint(8) unsigned NOT NULL auto_increment,
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `img_url` varchar(255) NOT NULL default '',
  `img_desc` varchar(255) NOT NULL default '',
  `thumb_url` varchar(255) NOT NULL default '',
  `img_original` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`img_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_gallery` values('1','108','images/201210/goods_img/108_P_1350961559755.jpg','','images/201210/thumb_img/108_thumb_P_1350961559187.jpg','images/201210/source_img/108_P_1350961559941.jpg');");
E_D("replace into `ecs_goods_gallery` values('2','109','images/201210/goods_img/109_P_1350967334134.jpg','','images/201210/thumb_img/109_thumb_P_1350967334869.jpg','images/201210/source_img/109_P_1350967334501.jpg');");
E_D("replace into `ecs_goods_gallery` values('3','110','images/201210/goods_img/110_P_1350967409513.jpg','','images/201210/thumb_img/110_thumb_P_1350967409811.jpg','images/201210/source_img/110_P_1350967409954.jpg');");
E_D("replace into `ecs_goods_gallery` values('4','111','images/201210/goods_img/111_P_1350967466836.jpg','','images/201210/thumb_img/111_thumb_P_1350967466804.jpg','images/201210/source_img/111_P_1350967466244.jpg');");
E_D("replace into `ecs_goods_gallery` values('5','113','images/201210/goods_img/113_P_1350967515209.jpg','','images/201210/thumb_img/113_thumb_P_1350967515023.jpg','images/201210/source_img/113_P_1350967515623.jpg');");
E_D("replace into `ecs_goods_gallery` values('6','114','images/201210/goods_img/114_P_1350967598950.jpg','','images/201210/thumb_img/114_thumb_P_1350967598102.jpg','images/201210/source_img/114_P_1350967598893.jpg');");
E_D("replace into `ecs_goods_gallery` values('7','115','images/201210/goods_img/115_P_1350967641539.jpg','','images/201210/thumb_img/115_thumb_P_1350967641894.jpg','images/201210/source_img/115_P_1350967641971.jpg');");
E_D("replace into `ecs_goods_gallery` values('8','116','images/201210/goods_img/116_P_1350967717685.jpg','','images/201210/thumb_img/116_thumb_P_1350967717465.jpg','images/201210/source_img/116_P_1350967717378.jpg');");
E_D("replace into `ecs_goods_gallery` values('9','116','images/201210/goods_img/116_P_1350967734040.jpg','','images/201210/thumb_img/116_thumb_P_1350967734873.jpg','images/201210/source_img/116_P_1350967734594.jpg');");
E_D("replace into `ecs_goods_gallery` values('10','117','images/201210/goods_img/117_P_1350967763237.jpg','','images/201210/thumb_img/117_thumb_P_1350967763367.jpg','images/201210/source_img/117_P_1350967763019.jpg');");
E_D("replace into `ecs_goods_gallery` values('11','118','images/201210/goods_img/118_P_1350967840968.jpg','','images/201210/thumb_img/118_thumb_P_1350967840144.jpg','images/201210/source_img/118_P_1350967840803.jpg');");
E_D("replace into `ecs_goods_gallery` values('12','119','images/201210/goods_img/119_P_1350968159879.jpg','','images/201210/thumb_img/119_thumb_P_1350968159134.jpg','images/201210/source_img/119_P_1350968159377.jpg');");
E_D("replace into `ecs_goods_gallery` values('13','120','images/201210/goods_img/120_P_1350968193090.jpg','','images/201210/thumb_img/120_thumb_P_1350968193193.jpg','images/201210/source_img/120_P_1350968193170.jpg');");
E_D("replace into `ecs_goods_gallery` values('14','121','images/201210/goods_img/121_P_1350968222242.jpg','','images/201210/thumb_img/121_thumb_P_1350968222091.jpg','images/201210/source_img/121_P_1350968222751.jpg');");
E_D("replace into `ecs_goods_gallery` values('15','122','images/201210/goods_img/122_P_1350968260963.jpg','','images/201210/thumb_img/122_thumb_P_1350968260680.jpg','images/201210/source_img/122_P_1350968260129.jpg');");
E_D("replace into `ecs_goods_gallery` values('16','123','images/201210/goods_img/123_P_1350968316568.jpg','','images/201210/thumb_img/123_thumb_P_1350968316599.jpg','images/201210/source_img/123_P_1350968316615.jpg');");
E_D("replace into `ecs_goods_gallery` values('17','124','images/201210/goods_img/124_P_1350968511253.jpg','','images/201210/thumb_img/124_thumb_P_1350968511186.jpg','images/201210/source_img/124_P_1350968511344.jpg');");
E_D("replace into `ecs_goods_gallery` values('18','125','images/201210/goods_img/125_P_1350968557553.jpg','','images/201210/thumb_img/125_thumb_P_1350968557484.jpg','images/201210/source_img/125_P_1350968557506.jpg');");
E_D("replace into `ecs_goods_gallery` values('19','126','images/201210/goods_img/126_P_1350968604933.jpg','','images/201210/thumb_img/126_thumb_P_1350968604418.jpg','images/201210/source_img/126_P_1350968604438.jpg');");
E_D("replace into `ecs_goods_gallery` values('20','127','images/201210/goods_img/127_P_1350968636263.jpg','','images/201210/thumb_img/127_thumb_P_1350968636231.jpg','images/201210/source_img/127_P_1350968636017.jpg');");
E_D("replace into `ecs_goods_gallery` values('21','128','images/201210/goods_img/128_P_1350968682836.jpg','','images/201210/thumb_img/128_thumb_P_1350968682699.jpg','images/201210/source_img/128_P_1350968682076.jpg');");
E_D("replace into `ecs_goods_gallery` values('22','129','images/201210/goods_img/129_P_1350969290617.jpg','','images/201210/thumb_img/129_thumb_P_1350969290004.jpg','images/201210/source_img/129_P_1350969290897.jpg');");
E_D("replace into `ecs_goods_gallery` values('23','130','images/201210/goods_img/130_P_1350969318500.jpg','','images/201210/thumb_img/130_thumb_P_1350969318212.jpg','images/201210/source_img/130_P_1350969318426.jpg');");
E_D("replace into `ecs_goods_gallery` values('24','131','images/201210/goods_img/131_P_1350969348298.jpg','','images/201210/thumb_img/131_thumb_P_1350969348214.jpg','images/201210/source_img/131_P_1350969348554.jpg');");
E_D("replace into `ecs_goods_gallery` values('25','132','images/201210/goods_img/132_P_1350969382351.jpg','','images/201210/thumb_img/132_thumb_P_1350969382350.jpg','images/201210/source_img/132_P_1350969382457.jpg');");
E_D("replace into `ecs_goods_gallery` values('26','133','images/201210/goods_img/133_P_1350969412403.jpg','','images/201210/thumb_img/133_thumb_P_1350969412429.jpg','images/201210/source_img/133_P_1350969412019.jpg');");
E_D("replace into `ecs_goods_gallery` values('27','134','images/201210/goods_img/134_P_1350969738090.jpg','','images/201210/thumb_img/134_thumb_P_1350969738865.jpg','images/201210/source_img/134_P_1350969738383.jpg');");
E_D("replace into `ecs_goods_gallery` values('28','135','images/201210/goods_img/135_P_1350969750665.jpg','','images/201210/thumb_img/135_thumb_P_1350969750006.jpg','images/201210/source_img/135_P_1350969750462.jpg');");
E_D("replace into `ecs_goods_gallery` values('29','136','images/201210/goods_img/136_P_1350969772241.jpg','','images/201210/thumb_img/136_thumb_P_1350969772526.jpg','images/201210/source_img/136_P_1350969772431.jpg');");
E_D("replace into `ecs_goods_gallery` values('30','136','images/201210/goods_img/136_P_1350969798051.jpg','','images/201210/thumb_img/136_thumb_P_1350969798176.jpg','images/201210/source_img/136_P_1350969798430.jpg');");
E_D("replace into `ecs_goods_gallery` values('31','137','images/201210/goods_img/137_P_1350969827981.jpg','','images/201210/thumb_img/137_thumb_P_1350969827859.jpg','images/201210/source_img/137_P_1350969827440.jpg');");
E_D("replace into `ecs_goods_gallery` values('32','138','images/201210/goods_img/138_P_1350969858740.jpg','','images/201210/thumb_img/138_thumb_P_1350969858454.jpg','images/201210/source_img/138_P_1350969858692.jpg');");
E_D("replace into `ecs_goods_gallery` values('33','139','images/201210/goods_img/139_P_1350969895018.jpg','','images/201210/thumb_img/139_thumb_P_1350969895261.jpg','images/201210/source_img/139_P_1350969895662.jpg');");
E_D("replace into `ecs_goods_gallery` values('34','118','images/201303/goods_img/118_P_1363604955065.jpg','','images/201303/thumb_img/118_thumb_P_1363604955215.jpg','images/201303/source_img/118_P_1363604955970.jpg');");
E_D("replace into `ecs_goods_gallery` values('35','139','images/201303/goods_img/139_P_1363703596645.jpg','','images/201303/thumb_img/139_thumb_P_1363703596415.jpg','images/201303/source_img/139_P_1363703596985.jpg');");
E_D("replace into `ecs_goods_gallery` values('36','140','images/201305/goods_img/140_P_1368229487468.jpg','','images/201305/thumb_img/140_thumb_P_1368229487693.jpg','images/201305/source_img/140_P_1368229487367.jpg');");
E_D("replace into `ecs_goods_gallery` values('37','140','images/201305/goods_img/140_P_1368230325036.jpg','','images/201305/thumb_img/140_thumb_P_1368230325832.jpg','images/201305/source_img/140_P_1368230325253.jpg');");
E_D("replace into `ecs_goods_gallery` values('38','140','images/201305/goods_img/140_P_1368230345509.jpg','','images/201305/thumb_img/140_thumb_P_1368230345355.jpg','images/201305/source_img/140_P_1368230345249.jpg');");
E_D("replace into `ecs_goods_gallery` values('39','141','images/201305/goods_img/141_P_1368235461621.jpg','','images/201305/thumb_img/141_thumb_P_1368235461161.jpg','images/201305/source_img/141_P_1368235461962.jpg');");
E_D("replace into `ecs_goods_gallery` values('40','142','images/201305/goods_img/142_P_1368480621612.jpg','','images/201305/thumb_img/142_thumb_P_1368480621343.jpg','images/201305/source_img/142_P_1368480621703.jpg');");
E_D("replace into `ecs_goods_gallery` values('41','143','images/201305/goods_img/143_P_1368481261930.jpg','','images/201305/thumb_img/143_thumb_P_1368481261048.jpg','images/201305/source_img/143_P_1368481261712.jpg');");
E_D("replace into `ecs_goods_gallery` values('42','144','images/201305/goods_img/144_P_1368481625168.jpg','','images/201305/thumb_img/144_thumb_P_1368481625050.jpg','images/201305/source_img/144_P_1368481625537.jpg');");
E_D("replace into `ecs_goods_gallery` values('43','145','images/201305/goods_img/145_P_1368482700864.jpg','','images/201305/thumb_img/145_thumb_P_1368482700488.jpg','images/201305/source_img/145_P_1368482700137.jpg');");
E_D("replace into `ecs_goods_gallery` values('44','146','images/201305/goods_img/146_P_1368483037735.jpg','','images/201305/thumb_img/146_thumb_P_1368483037945.jpg','images/201305/source_img/146_P_1368483037378.jpg');");
E_D("replace into `ecs_goods_gallery` values('45','147','images/201305/goods_img/147_P_1368483262648.jpg','','images/201305/thumb_img/147_thumb_P_1368483262175.jpg','images/201305/source_img/147_P_1368483262833.jpg');");
E_D("replace into `ecs_goods_gallery` values('46','148','images/201305/goods_img/148_P_1368483325258.jpg','','images/201305/thumb_img/148_thumb_P_1368483325391.jpg','images/201305/source_img/148_P_1368483325301.jpg');");
E_D("replace into `ecs_goods_gallery` values('47','149','images/201305/goods_img/149_P_1368483814526.jpg','','images/201305/thumb_img/149_thumb_P_1368483814937.jpg','images/201305/source_img/149_P_1368483814860.jpg');");
E_D("replace into `ecs_goods_gallery` values('48','150','images/201305/goods_img/150_P_1368484087887.jpg','','images/201305/thumb_img/150_thumb_P_1368484087284.jpg','images/201305/source_img/150_P_1368484087617.jpg');");
E_D("replace into `ecs_goods_gallery` values('49','151','images/201305/goods_img/151_P_1368484355880.jpg','','images/201305/thumb_img/151_thumb_P_1368484355639.jpg','images/201305/source_img/151_P_1368484355731.jpg');");
E_D("replace into `ecs_goods_gallery` values('50','152','images/201305/goods_img/152_P_1368485030559.jpg','','images/201305/thumb_img/152_thumb_P_1368485030396.jpg','images/201305/source_img/152_P_1368485030741.jpg');");
E_D("replace into `ecs_goods_gallery` values('51','153','images/201305/goods_img/153_P_1368485248694.jpg','','images/201305/thumb_img/153_thumb_P_1368485248677.jpg','images/201305/source_img/153_P_1368485248111.jpg');");
E_D("replace into `ecs_goods_gallery` values('52','154','images/201305/goods_img/154_P_1368486177900.jpg','','images/201305/thumb_img/154_thumb_P_1368486177297.jpg','images/201305/source_img/154_P_1368486177213.jpg');");
E_D("replace into `ecs_goods_gallery` values('53','155','images/201305/goods_img/155_P_1368487059533.jpg','','images/201305/thumb_img/155_thumb_P_1368487059515.jpg','images/201305/source_img/155_P_1368487059269.jpg');");
E_D("replace into `ecs_goods_gallery` values('54','156','images/201305/goods_img/156_P_1368487779002.jpg','','images/201305/thumb_img/156_thumb_P_1368487779601.jpg','images/201305/source_img/156_P_1368487779071.jpg');");
E_D("replace into `ecs_goods_gallery` values('55','157','images/201305/goods_img/157_P_1368488119118.jpg','','images/201305/thumb_img/157_thumb_P_1368488119858.jpg','images/201305/source_img/157_P_1368488119178.jpg');");
E_D("replace into `ecs_goods_gallery` values('56','158','images/201305/goods_img/158_P_1368488364930.jpg','','images/201305/thumb_img/158_thumb_P_1368488364782.jpg','images/201305/source_img/158_P_1368488364609.jpg');");
E_D("replace into `ecs_goods_gallery` values('57','159','images/201305/goods_img/159_P_1368488612450.jpg','','images/201305/thumb_img/159_thumb_P_1368488612062.jpg','images/201305/source_img/159_P_1368488612749.jpg');");
E_D("replace into `ecs_goods_gallery` values('58','160','images/201305/goods_img/160_P_1368488979946.jpg','','images/201305/thumb_img/160_thumb_P_1368488979616.jpg','images/201305/source_img/160_P_1368488979597.jpg');");
E_D("replace into `ecs_goods_gallery` values('59','161','images/201305/goods_img/161_P_1368489277118.jpg','','images/201305/thumb_img/161_thumb_P_1368489277111.jpg','images/201305/source_img/161_P_1368489277402.jpg');");
E_D("replace into `ecs_goods_gallery` values('60','161','images/201305/goods_img/161_P_1369090690295.jpg','','images/201305/thumb_img/161_thumb_P_1369090690495.jpg','images/201305/source_img/161_P_1369090690204.jpg');");

require("../../inc/footer.php");
?>