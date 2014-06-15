<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_order`;");
E_C("CREATE TABLE `ecs_delivery_order` (
  `delivery_id` mediumint(8) unsigned NOT NULL auto_increment,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `invoice_no` varchar(50) default NULL,
  `add_time` int(10) unsigned default '0',
  `shipping_id` tinyint(3) unsigned default '0',
  `shipping_name` varchar(120) default NULL,
  `user_id` mediumint(8) unsigned default '0',
  `action_user` varchar(30) default NULL,
  `consignee` varchar(60) default NULL,
  `address` varchar(250) default NULL,
  `country` smallint(5) unsigned default '0',
  `province` smallint(5) unsigned default '0',
  `city` smallint(5) unsigned default '0',
  `district` smallint(5) unsigned default '0',
  `sign_building` varchar(120) default NULL,
  `email` varchar(60) default NULL,
  `zipcode` varchar(60) default NULL,
  `tel` varchar(60) default NULL,
  `mobile` varchar(60) default NULL,
  `best_time` varchar(120) default NULL,
  `postscript` varchar(255) default NULL,
  `how_oos` varchar(120) default NULL,
  `insure_fee` decimal(10,2) unsigned default '0.00',
  `shipping_fee` decimal(10,2) unsigned default '0.00',
  `update_time` int(10) unsigned default '0',
  `suppliers_id` smallint(5) default '0',
  `status` tinyint(1) unsigned NOT NULL default '0',
  `agency_id` smallint(5) unsigned default '0',
  PRIMARY KEY  (`delivery_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_order` values('1','20121023054840411','2012102367927','1','22','1350970866','1','中通速递','1','admin','小七','小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七','1','6','76','695','','446443357@qq.com','','1111111111','','','','等待所有商品备齐后再发','0.00','10.00','1350971322','0','0','0');");
E_D("replace into `ecs_delivery_order` values('2','20130322080555367','2013032286030','2','222222222222','1363939500','1','中通速递','1','admin','小七','小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七','1','6','76','695','','446443357@qq.com','','1111111111','','','','等待所有商品备齐后再发','0.00','10.00','1363939523','0','0','0');");
E_D("replace into `ecs_delivery_order` values('3','20130429023037774','2013042992269','3','2','1367202402','1','中通速递','1','admin','小七','小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七','1','6','76','695','','4@qq.com','','1111111111','','','','等待所有商品备齐后再发','0.00','10.00','1367202607','0','0','0');");

require("../../inc/footer.php");
?>