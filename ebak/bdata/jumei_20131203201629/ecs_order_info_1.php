<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_info`;");
E_C("CREATE TABLE `ecs_order_info` (
  `order_id` mediumint(8) unsigned NOT NULL auto_increment,
  `order_sn` varchar(20) NOT NULL default '',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `order_status` tinyint(1) unsigned NOT NULL default '0',
  `shipping_status` tinyint(1) unsigned NOT NULL default '0',
  `pay_status` tinyint(1) unsigned NOT NULL default '0',
  `consignee` varchar(60) NOT NULL default '',
  `country` smallint(5) unsigned NOT NULL default '0',
  `province` smallint(5) unsigned NOT NULL default '0',
  `city` smallint(5) unsigned NOT NULL default '0',
  `district` smallint(5) unsigned NOT NULL default '0',
  `address` varchar(255) NOT NULL default '',
  `zipcode` varchar(60) NOT NULL default '',
  `tel` varchar(60) NOT NULL default '',
  `mobile` varchar(60) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `best_time` varchar(120) NOT NULL default '',
  `sign_building` varchar(120) NOT NULL default '',
  `postscript` varchar(255) NOT NULL default '',
  `shipping_id` tinyint(3) NOT NULL default '0',
  `shipping_name` varchar(120) NOT NULL default '',
  `pay_id` tinyint(3) NOT NULL default '0',
  `pay_name` varchar(120) NOT NULL default '',
  `how_oos` varchar(120) NOT NULL default '',
  `how_surplus` varchar(120) NOT NULL default '',
  `pack_name` varchar(120) NOT NULL default '',
  `card_name` varchar(120) NOT NULL default '',
  `card_message` varchar(255) NOT NULL default '',
  `inv_payee` varchar(120) NOT NULL default '',
  `inv_content` varchar(120) NOT NULL default '',
  `goods_amount` decimal(10,2) NOT NULL default '0.00',
  `shipping_fee` decimal(10,2) NOT NULL default '0.00',
  `insure_fee` decimal(10,2) NOT NULL default '0.00',
  `pay_fee` decimal(10,2) NOT NULL default '0.00',
  `pack_fee` decimal(10,2) NOT NULL default '0.00',
  `card_fee` decimal(10,2) NOT NULL default '0.00',
  `money_paid` decimal(10,2) NOT NULL default '0.00',
  `surplus` decimal(10,2) NOT NULL default '0.00',
  `integral` int(10) unsigned NOT NULL default '0',
  `integral_money` decimal(10,2) NOT NULL default '0.00',
  `bonus` decimal(10,2) NOT NULL default '0.00',
  `order_amount` decimal(10,2) NOT NULL default '0.00',
  `from_ad` smallint(5) NOT NULL default '0',
  `referer` varchar(255) NOT NULL default '',
  `add_time` int(10) unsigned NOT NULL default '0',
  `confirm_time` int(10) unsigned NOT NULL default '0',
  `pay_time` int(10) unsigned NOT NULL default '0',
  `shipping_time` int(10) unsigned NOT NULL default '0',
  `pack_id` tinyint(3) unsigned NOT NULL default '0',
  `card_id` tinyint(3) unsigned NOT NULL default '0',
  `bonus_id` mediumint(8) unsigned NOT NULL default '0',
  `invoice_no` varchar(255) NOT NULL default '',
  `extension_code` varchar(30) NOT NULL default '',
  `extension_id` mediumint(8) unsigned NOT NULL default '0',
  `to_buyer` varchar(255) NOT NULL default '',
  `pay_note` varchar(255) NOT NULL default '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `inv_type` varchar(60) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `is_separate` tinyint(1) NOT NULL default '0',
  `parent_id` mediumint(8) unsigned NOT NULL default '0',
  `discount` decimal(10,2) NOT NULL,
  PRIMARY KEY  (`order_id`),
  UNIQUE KEY `order_sn` (`order_sn`),
  KEY `user_id` (`user_id`),
  KEY `order_status` (`order_status`),
  KEY `shipping_status` (`shipping_status`),
  KEY `pay_status` (`pay_status`),
  KEY `shipping_id` (`shipping_id`),
  KEY `pay_id` (`pay_id`),
  KEY `extension_code` (`extension_code`,`extension_id`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_info` values('1','2012102367927','1','5','2','2','小七','1','6','76','695','小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七','','1111111111','','446443357@qq.com','','','','1','中通速递','1','支付宝','等待所有商品备齐后再发','','','','','','','2193.50','10.00','0.00','0.00','0.00','0.00','2203.50','0.00','0','0.00','0.00','0.00','0','本站','1350970866','1350971303','1350971308','1350971335','0','0','0','22','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('2','2013032286030','1','5','2','2','小七','1','6','76','695','小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七','','1111111111','','446443357@qq.com','','','','1','中通速递','1','支付宝','等待所有商品备齐后再发','','','','','','','145.00','10.00','0.00','0.00','0.00','0.00','155.00','0.00','0','0.00','0.00','0.00','0','本站','1363939500','1363939516','1363939516','1363939536','0','0','0','222222222222','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('3','2013042992269','1','5','2','2','小七','1','6','76','695','小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七小七','','1111111111','','4@qq.com','','','','1','中通速递','1','支付宝','等待所有商品备齐后再发','','','','','','','20.00','10.00','0.00','0.00','0.00','0.00','30.00','0.00','0','0.00','0.00','0.00','0','本站','1367202402','1367202570','1367202570','1367202618','0','0','0','2','group_buy','19','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('4','2013050249186','0','0','0','0','22','1','6','76','692','222','','2222','','22@qq.dom','','','','1','中通速递','1','支付宝','等待所有商品备齐后再发','','','','','','','400.00','10.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','410.00','0','本站','1367478879','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('5','2013050564955','2','0','0','0','测试','1','6','76','693','3333','','15013245760','','446443357@qq.com','','','','1','中通速递','1','支付宝','等待所有商品备齐后再发','','','','','','','56.00','10.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','66.00','0','本站','1367733682','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('6','2013051031332','3','0','0','0','周馨馨','1','16','220','1838','卡子门大街29号','','15380809984','','119282138@qq.com','','','','3','运费到付','1','支付宝','等待所有商品备齐后再发','','','','','','南京名都家居广场有限公司','145.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','145.00','0','本站','1368129101','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");

require("../../inc/footer.php");
?>