<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_kefu`;");
E_C("CREATE TABLE `ecs_kefu` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_kefu` values('1','kefushow','1');");
E_D("replace into `ecs_kefu` values('2','skin','14');");
E_D("replace into `ecs_kefu` values('3','show','0');");
E_D("replace into `ecs_kefu` values('4','showlefttop','170');");
E_D("replace into `ecs_kefu` values('5','showleft','10');");
E_D("replace into `ecs_kefu` values('6','showrighttop','10');");
E_D("replace into `ecs_kefu` values('7','showright','50');");
E_D("replace into `ecs_kefu` values('8','fs_show','1');");
E_D("replace into `ecs_kefu` values('9','typeone','售前客服');");
E_D("replace into `ecs_kefu` values('10','kfqq','张三:11111');");
E_D("replace into `ecs_kefu` values('11','im','李四:22222');");
E_D("replace into `ecs_kefu` values('12','typetwo','售后客服');");
E_D("replace into `ecs_kefu` values('13','kfqqtwo','李四:33333');");
E_D("replace into `ecs_kefu` values('14','imtwo','张三:55555');");
E_D("replace into `ecs_kefu` values('15','qqqun','');");
E_D("replace into `ecs_kefu` values('16','wwqun','');");
E_D("replace into `ecs_kefu` values('17','kftel','11111');");
E_D("replace into `ecs_kefu` values('18','shijian','9:00-24:00');");
E_D("replace into `ecs_kefu` values('19','kf53','');");
E_D("replace into `ecs_kefu` values('20','qqcss','0');");
E_D("replace into `ecs_kefu` values('21','wwcss','0');");
E_D("replace into `ecs_kefu` values('22','fenxiang','bds_qzone,bds_tsina,bds_baidu,bds_renren,bds_tqq,bds_s51');");

require("../../inc/footer.php");
?>