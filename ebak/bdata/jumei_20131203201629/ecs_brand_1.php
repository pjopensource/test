<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_brand`;");
E_C("CREATE TABLE `ecs_brand` (
  `brand_id` smallint(5) unsigned NOT NULL auto_increment,
  `brand_name` varchar(60) NOT NULL default '',
  `brand_logo` varchar(80) NOT NULL default '',
  `brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL default '',
  `sort_order` tinyint(3) unsigned NOT NULL default '50',
  `is_show` tinyint(1) unsigned NOT NULL default '1',
  PRIMARY KEY  (`brand_id`),
  KEY `is_show` (`is_show`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_brand` values('1','auprfs','1350960778808534248.jpg','','http://','1','1');");
E_D("replace into `ecs_brand` values('2','cetaphil','1350960796051594894.jpg','','http://','2','1');");
E_D("replace into `ecs_brand` values('3','fuyourun','1350960810760106090.jpg','','http://','3','1');");
E_D("replace into `ecs_brand` values('4','GARNIER','1350960825868461476.jpg','','http://','4','1');");
E_D("replace into `ecs_brand` values('5','Herborist','1350960841884197510.jpg','','http://','21','1');");
E_D("replace into `ecs_brand` values('6','jiyan','1350960858006482117.jpg','','http://','22','1');");
E_D("replace into `ecs_brand` values('7','umei','1350960873367432963.jpg','','http://','23','1');");
E_D("replace into `ecs_brand` values('8','Loreal','1350960889471069704.jpg','','http://','24','1');");
E_D("replace into `ecs_brand` values('9','meibaolian','1350960903201262096.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('10','xiangyibencao','1350961079050948857.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('11','yilishabaiyadun','1350961097750867864.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('12','ZA','1350961104713298526.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('13','西蒙开关','1368229246066239900.jpg','  1999 年 7 月，西蒙电气来到中国，在江苏省南通市成立了第一家合资公司 \" 西蒙奇通 \" ， 又于 2002 年成立了第二家合资公司“西蒙智控”。依托 SIMON 集团强有力的技术支持， 西蒙电气（中国）制造的产品逐步发展成了以家用开关、插座为主业，同时生产低压电器、灯具、布线等相关多元化产品。目前在中国获得的产品专利近百项，位居国内同行前列。','http://','0','1');");
E_D("replace into `ecs_brand` values('14','欧普照明','','  欧普照明是一家创新型快速发展的公司，成立于1996年8月，是一家集研发、生产和销售于一体的综合型照明企业，现有员工6000多人，产品涵盖光源、灯具、电工电器、集成吊顶等领域，目前拥有上海总部及中山工业园、吴江工业园、伊朗等多个海内外生产基地。目前有37个办事处和遍布全国5000多家专卖店，10000多家销售网点，产品远销世界十几个国家和地区。 \r\n','http://','50','1');");
E_D("replace into `ecs_brand` values('15','潜水艇地漏','','','http://','50','1');");
E_D("replace into `ecs_brand` values('16','欧琳厨卫','','  欧琳，一个蕴含欧洲物征的厨房生活标杆品牌，凝聚着欧洲风情和全球智慧。\r\n  欧琳创建于1995年，是国内最早进军整体厨房行业、专业设计力量最强大、产品线最丰富的厨具品牌之一，致力于智能美学橱柜、高端厨电和健康水槽的设计研发，是厨房整体解决方案的提供者和经典生活方式的倡导者。崇尚细节，使每套厨具在每个细节上都做到精益求精；追求卓越，让每个家庭都能享受尊贵典雅的“新欧洲生活美学。\r\n  欧琳拥有国际领先、亚洲最先进的现代化橱柜制造中心，曾与中科院宁波材料所、德国包豪斯大学、中国美院、同济大学等展开合作，近年来，又与浙江大学、湖南大学等国内一流高校进行对接，已建成国内首家厨房用具材料工程技术研究中心、厨房色彩研发基地以及厨具产品检测中心等。\r\n  目前，欧琳在国内设有完善的销售、服务网点；在全球，70多个国家和地区，250个城市，350多万户家庭正在尊享欧琳厨房用品。\r\n  十余年来，通过“智慧制造促转型升级”，欧琳成为一个象征用户身份的品牌。\r\n\r\n\r\n\r\n\r\n','http://','50','1');");
E_D("replace into `ecs_brand` values('17','普乐美厨卫','','  普乐美，全球不锈钢卫浴领航品牌。\r\n  普乐美传承欧洲精湛工艺，融合全球最新科技，专注不锈钢水龙头、花洒、水槽、挂件等厨卫五金解决方案。产品以304不锈钢为主材，其经久耐用、安全健康、节能环保、易于保养等方面的优越性超越其他材料生产的产品，成为全新一代的健康卫浴产品。将引领卫浴行业发展新方向。\r\n  普乐美产品完美诠释了以人为本，以水为源，追求人与自然和谐的品牌理念。为用户带来健康、快乐和美的生活享受！\r\n\r\n','http://','50','1');");
E_D("replace into `ecs_brand` values('18','多乐士','','','http://','50','1');");
E_D("replace into `ecs_brand` values('19','松下电器','','','http://','50','1');");
E_D("replace into `ecs_brand` values('20','全能保险柜','','  广东安能保险柜制造有限公司是以从事保险柜（箱）等安防产品为主的现代化企业，公司拥有占地面积33000平方米的现代化厂房，装备了数百台国际著名品牌的数控冲床、折弯机、激光切割机、以及弧焊机器人等设备，并配备了独立的研发中心、检测中心、寿命实验室，具有世界领先的制造设备和工艺流程，产品涉及家用保险柜、文件保密柜、酒店客房保险箱、枪弹柜、金库门等多个系列近300余款产品，年生产规模超过30万台。\r\n\r\n公司控股工业集团创始于1935年，保险柜的制造历史可追溯到1939年，其间经历了中国现代工业的历史变迁，上世纪九十年代恢复了保险柜的生产，1999年广东安能保险柜制造有限公司正式成立，旗下“全能”品牌是中国保险柜行业的旗舰品牌。在公司的发展过程中，受到了社会的普遍认同，相继获得广东省著名商标、高新技术企业、中国保险柜十大品牌、中国酒店用品十大品牌、中国家具最受消费者欢迎品牌等荣誉称号，公司同时是中国安防协会理事单位、广东省安防协会理事单位。\r\n  经过多年的持续发展，公司已跻身为中国大陆领先、华南地区产销量第一的保险柜制造企业，创新的技术研发、卓越的品质控制、完善的售后服务，成为了北京奥运会、上海世博会、广州亚运会产品供应商，同时为中国移动、中国石油、中国银行等大型国企及公安部门、武警部队等军政部门提供各类专业保险柜产品。\r\n','http://','50','1');");
E_D("replace into `ecs_brand` values('21','卡贝卫浴','','  浙江卡贝卫浴有限公司专业致力于太空铝卫浴的设计、开发、生产及销售，经过几年的努力，卡贝已经在国内卫浴行业中占有不可小觑的地位。 \r\n  公司始建于2008年，在短短的四年内卡贝发展成为一个拥有生产厂房占地15亩，建筑面积15000多平方米，在职员工400多名，其中专业技术人员50名的实力雄厚的私营独资企业。 \r\n  目前公司生产的产品涵盖十一大系列，即纸巾盒、活动浴巾架、厨房挂件、牙刷架、置物架、铝篮、排衣钩、地漏、衣裤架、扶手、活动杆、浴室铝挂件。另外，公司目前拥有生产设备齐全的生产厂房，所生产的产品外观时尚、精美，形体轻巧、经久耐用、款式新颖实用，无铅环保，且永不生锈的特性，突破了传统卫浴挂件的诸多缺陷与不足，让浴室的每一个空间、每一个组合、每一个细节都充分展示不同的品位，不同的个性，不同的文化感触，不经意流露出的神彩，点缀了家的祥和，已成为星级宾馆，高级饭店及豪华家装卫浴产品的理想选择。 \r\n  公司严格执行ISO 9001质量管理体系，严把质量关，以确保卡贝卫浴产品样样精致、件件精品，秉承“坚守专业，保持专注，努力创业，不断创新，回馈客户”的经营理念，再加上全体员工的不懈努力，卡贝获得了许多荣誉，如2011年7月卡贝荣获第一个太空铝挂件的中国驰名商标、卡贝卫浴、KOHLER、GROHE、FAENZA、TOTO、OULIN、ANNWA、箭牌卫浴八大卫浴品牌成功进驻淘宝家居馆、2011年11月5日大世界基尼斯世界记录认证官员在上海正式宣布，浙江卡贝卫浴有限公司申报基尼斯世界纪录现场认证正式通过、2011年11月9日浙江卡贝卫浴喜获香港国际专利博览会金奖。中国第一家太空铝挂件上央视上榜展播品牌。 \r\n  公司精准的市场定位，资深的研发团队，专业的生产技术人员，干练激情的前沿销售精英，细致的售后服务专员，辅以公司雄厚的资金实力，成就了“cobbe卡贝”在竞争激烈的卫浴市场中脱颖而出，陆续进驻“居然之家”“东方家园”“红星美凯龙”等大型卖场和知名建材超市，现有各类销售网点1000余家，覆盖全国各大中小城市且远销欧美，中东，东南亚等国家。 \r\n','http://','50','1');");
E_D("replace into `ecs_brand` values('22','欧普吊顶','','  欧普集成吊顶以简约居家、浪漫经典的设计理念，针对中国国内家居绿色环保的新要求，融合东方家居的简约温馨和西方家居的欧式经典浪漫，不断探索改进，精心准确地打造了专为中国人设计的东西方完美结合、更具人性化和时尚居家环境的产品，努力跻身于世界厨卫吊顶的顶尖行列，引领时尚家居。 \r\n  面对激烈的市场竞争，公司坚持“以精英团队塑造企业文化、以企业文化培养优秀员工、以优秀员工创造管理品牌、以管理精品推进规模发展、以规模扩展追求企业效益、以企业效益凝聚优秀人才”并始终坚持“科技以人为本”、“资源共享、合作双赢”的市场理念来推动企业与加盟商的不断进步。 \r\n  在产品方面坚持选用高质量电器元件，为消费者提供性能优异、品质可靠的科技吊顶精品。 \r\n\r\n','http://','50','1');");
E_D("replace into `ecs_brand` values('23','九牧卫浴','','  九牧集团有限公司创立于1989年，集团总部位于福建泉州南安市，是目前中国国内大型的卫浴洁具产品制造商和供应商之一，同时也是《陶瓷片密封水嘴》国家标准的起草和制定单位，“全国五金制品标准化技术委员会厨卫五金分技术委员会”秘书处。 集团旗下品牌为“JOMOO九牧”。该品牌荣获“中国名牌”、“中国驰名商标”、“中国国家免检产品”三项国家级荣誉。\r\n  自集团创立以来，集团就以“改善和提高家居生活品质”为己任，以高品质的产品和优质服务为核心，不断推动“居家生活品质”的改善。\r\n  同享九牧、共享未来。九牧集团将通过不断提升企业的经营能力，建立自有知识产权的技术优势，继续保持在行业内的领先地位。为实现“九牧洁具、全球共享”的远景目标，九牧集团将继续不懈努力。\r\n','http://','50','1');");
E_D("replace into `ecs_brand` values('24','朗斯淋浴房','','  朗斯创建于2002年，是中国淋浴房行业内首家集产品研发、生产、营销、服务于一体的中国企业；是一家极富创新精神和勇于探索实践的中国民族企业；是中国最值得信赖、最具公信力与民族责任感的中国淋浴房行业的领导者。\r\n  中山市朗斯卫浴有限公司坐落于广东省中山市国家级火炬开发区内，占地100余亩，气势恢宏；是国内淋浴房行业内唯一一家集玻璃钢化、五金加工和组装生产于一身的国际一流的中国领军企业。朗斯已将ISO9001国际质量管理体系与世界一流的国际化管理标准“5S管理”扎根于企业深处。\r\n\r\n','http://','50','1');");
E_D("replace into `ecs_brand` values('25','喜临门床垫','','  喜临门集团创办于1984年，厂房总面积30万平方米，员工2000余人，其中大专以上学历600多人。已连续三年入选中国民营企业最具竞争力50强，2008年又获得中国民营企业国际竞争力50强。喜临门品牌为中国床垫行业标志性品牌。\r\n  喜临门集团引进了大批世界先进设备，目前床垫生产能力已达200万张，规模为亚洲领先。集团是中国家具行业协会副理事长单位、中国家具协会软垫家具专业委员会主席单位，还是中国床垫行业国家标准和木制宾馆家具国家行业标准的起草单位。已先后荣获“中国驰名商标”、“中国名牌”等称号，主流产品已列入2008-2009年国家火炬计划项目，弹簧软床垫、宾馆软体沙发、宾馆家具柜等在行业内率先达到阻燃一级标准，已由国家颁发阻燃制品标识“阻燃”使用证书。\r\n  喜临门集团为浙江省高新技术企业，在新产品开发中喜临门始终坚持走科技创新之路，已有二十多项技术获国家专利。喜临门与清华大学、北京大学合作成立了“健康睡眠研究中心”进行技术开发；喜临门健康睡眠床垫获得中国睡眠研究会专业认证。在生产中喜临门始终严把质量关，在同行业中率先通过ISO9001质量管理体系、ISO14001环境管理体系、OHSAS18001健康安全管理体系认证。国际巨星巩俐为喜临门公司的形象代言人。在经营中喜临门始终严守“诚信 双赢”的诺言，并被国家工商总局评为国家级“守合同，重信用”单位。\r\n  喜临门产品已为希尔顿、万豪等200余家五星级酒店和钓鱼台国宾馆总统楼、人民大会堂及国家大剧院所采用，并和全球60个国家和地区建立了稳固的贸易往来，营销网络遍及全世界。今后，喜临门将继续以提升床垫的核心竞争力为基础，以科技改善人类生活品质为使命，把自身发展成为具有一流竞争力的企业，创喜临门国际品牌。\r\n  品质铸巅峰，诚信创未来。\r\n  喜临门集团，一个崛起于世界东方的时代骄子，一颗民族工业的希望之星，紧随时代潮流，在创新中成长，在竞争中强大，引领行业发展，创造着一个产业的未来。\r\n','http://','50','1');");
E_D("replace into `ecs_brand` values('26','好莱客移门衣柜','','  广州好莱客创意家居股份有限公司（以下简称好莱客）一直致力于整体衣柜领域发展，行业中率先提出“整体衣柜”概念，秉承专业专注精神理念，将欧洲时尚家居潮流源源不断融入中国市场，是引领中国整体衣柜发展的领军品牌之一。定位于做“整体衣柜领跑者”，好莱客不断通过技术研发和创新，获得了多项技术专利，产品的滑轮等核心五金部件品质达到国际领先水平；每年推出的数十款代表行业最新风尚和潮流的新品，以独特的高雅品味和艺术魅力，为消费者打造一个舒适满意家居空间的同时，更成为行业的风向标。\r\n  作为衣柜行业中的领跑者，好莱客建立了专业的服务体系：率先与专业软件企业合作开发先进的软件设计系统，为顾客提供个性化、体验式设计服务；业内先行推出产品保修保养及使用说明手册，并明确甲醛等有害物质的限量说明；较早开通 800及400服务热线，以完善的售后服务为顾客解决后顾之忧。\r\n  截止目前，好莱客在全国398个城市建立了近518家高品味的品牌专卖店，营销及服务网络遍布各地，并以强劲的势头继续稳步发展，成为业内颇具影响力的一面旗帜。\r\n  在业界，好莱客以高性价比、为消费者提供卓越品质及更低价格而著称。经过多年的发展与变革，好莱客产品已具有多种不同风格、覆盖各个价格层次、形成自身品牌特色产品体系。公司将一直秉承及坚持“三个最”理念（即：产品风格体系最丰富、价格覆盖面最广、性价比最高）并不断创新求变，追求卓越。\r\n  做整体衣柜领跑者，带给广大消费者最优品质、最佳服务及最具性价比产品选择，是好莱客人持续永恒的动力源泉。\r\n','http://','50','1');");

require("../../inc/footer.php");
?>