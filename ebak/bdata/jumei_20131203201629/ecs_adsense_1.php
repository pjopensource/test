<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_adsense`;");
E_C("CREATE TABLE `ecs_adsense` (
  `from_ad` smallint(5) NOT NULL default '0',
  `referer` varchar(255) NOT NULL default '',
  `clicks` int(10) unsigned NOT NULL default '0',
  KEY `from_ad` (`from_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_adsense` values('48','本站','1');");
E_D("replace into `ecs_adsense` values('12','本站','2');");
E_D("replace into `ecs_adsense` values('49','本站','2');");
E_D("replace into `ecs_adsense` values('10','本站','1');");
E_D("replace into `ecs_adsense` values('14','本站','2');");
E_D("replace into `ecs_adsense` values('13','本站','1');");

require("../../inc/footer.php");
?>