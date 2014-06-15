<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_email_sendlist`;");
E_C("CREATE TABLE `ecs_email_sendlist` (
  `id` mediumint(8) NOT NULL auto_increment,
  `email` varchar(100) NOT NULL,
  `template_id` mediumint(8) NOT NULL,
  `email_content` text NOT NULL,
  `error` tinyint(1) NOT NULL default '0',
  `pri` tinyint(10) NOT NULL,
  `last_send` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_email_sendlist` values('1','446443357@qq.com','15','<p>亲爱的测试，你好！ <br /><br /><br /><br />我们已经收到您于 2013-05-05 14:01:22 提交的订单，该订单编号为：2013050564955 请记住这个编号以便日后的查询。<br /><br /><br /><br /><br /><br />系统自动为您创建的帐号：15013245760<br /><br />密码：15013245760<br /><br /><br /><br />ecshop模板<br /><br />2013-05-05</p>','0','0','2013');");

require("../../inc/footer.php");
?>