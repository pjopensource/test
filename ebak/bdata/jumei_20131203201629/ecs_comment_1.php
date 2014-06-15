<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_comment`;");
E_C("CREATE TABLE `ecs_comment` (
  `comment_id` int(10) unsigned NOT NULL auto_increment,
  `comment_type` tinyint(3) unsigned NOT NULL default '0',
  `id_value` mediumint(8) unsigned NOT NULL default '0',
  `email` varchar(60) NOT NULL default '',
  `user_name` varchar(60) NOT NULL default '',
  `content` text NOT NULL,
  `comment_rank` tinyint(1) unsigned NOT NULL default '0',
  `add_time` int(10) unsigned NOT NULL default '0',
  `ip_address` varchar(15) NOT NULL default '',
  `status` tinyint(3) unsigned NOT NULL default '0',
  `parent_id` int(10) unsigned NOT NULL default '0',
  `user_id` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`comment_id`),
  KEY `parent_id` (`parent_id`),
  KEY `id_value` (`id_value`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_comment` values('1','0','118','446443357@qq.com','xiaoqi','在聚美上观望了好久，终于下定决心买了我第一个产品，现在好好来写下\r\n','5','1350971434','127.0.0.1','1','0','1');");
E_D("replace into `ecs_comment` values('2','0','118','446443357@qq.com','xiaoqi','夏天的时候,脚后跟突然烈了,里面黑黑的怎么样都洗不掉的说,看到有...阅读全文','5','1350971465','127.0.0.1','1','0','1');");
E_D("replace into `ecs_comment` values('3','0','116','446443357@qq.com','xiaoqi','好慢的快递呀，人家都口碑的写了我还没有收到，今天终于见面了，激动...','5','1350971492','127.0.0.1','1','0','1');");
E_D("replace into `ecs_comment` values('4','0','115','446443357@qq.com','xiaoqi','一下子买了两个、因为想要免运费、另一个给闺蜜带了~首先感觉这款护...阅读全文','5','1350971513','127.0.0.1','1','0','1');");
E_D("replace into `ecs_comment` values('5','0','111','446443357@qq.com','xiaoqi','第一次买，快递两天半。不过那个睫毛膏貌似是去年的、、、这个粉饼是...','5','1350971532','127.0.0.1','1','0','1');");
E_D("replace into `ecs_comment` values('6','0','110','446443357@qq.com','xiaoqi','\r\n上图勒，来一张外形照一张全家福打上后的效果，我不喜欢太浓密的感..','5','1350971555','127.0.0.1','1','0','1');");

require("../../inc/footer.php");
?>