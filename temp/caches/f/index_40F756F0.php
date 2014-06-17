<?php exit;?>a:3:{s:8:"template";a:5:{i:0;s:39:"/home/jpan/jumei/themes/jumei/index.dwt";i:1;s:53:"/home/jpan/jumei/themes/jumei/library/page_header.lbi";i:2;s:50:"/home/jpan/jumei/themes/jumei/library/index_ad.lbi";i:3;s:53:"/home/jpan/jumei/themes/jumei/library/ad_position.lbi";i:4;s:53:"/home/jpan/jumei/themes/jumei/library/page_footer.lbi";}s:7:"expires";i:1403021105;s:8:"maketime";i:1403017505;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="项链 手链 水晶 玉石 流行饰品购物类网站" />
<meta name="Description" content="最美饰" />
<title>最美饰 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="alternate" type="application/rss+xml" title="RSS|最美饰 - Powered by ECShop" href="feed.php" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/index.js"></script><script type="text/javascript" src="themes/jumei/images/js/pic.js"></script>
<script type="text/javascript" src="themes/jumei/images/js/left_goodslist.js"></script>
<script type="text/javascript" src="themes/jumei/images/js/jquery.js"></script>
<script type="text/javascript" src="themes/jumei/images/js/scrollpic.js"></script>
<script type="text/javascript" src="themes/jumei/images/js/productlist_roll.js"></script>
<script type="text/javascript" src="themes/jumei/images/js/common1.js"></script>
<script type="text/javascript" src="themes/jumei/images/js/MSClass.js"></script>
<script type="text/javascript">
//<![CDATA[
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onmouseover=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
function salelog()
{
	str = "com";
	var bt=$$(str+"_b").getElementsByTagName("h2")[1];
	bt.subj = str;
	bt.pai  = 1;
	bt.style.cursor = "pointer";
	$$(bt.subj + "_v").innerHTML = $$(bt.subj + "_h").getElementsByTagName("blockquote")[bt.pai].innerHTML;
	for(var j=0;j<$$(bt.subj+"_b").getElementsByTagName("h2").length;j++)
	{
		var _bt = $$(bt.subj+"_b").getElementsByTagName("h2")[j];
		var ison = (j == bt.pai);
		_bt.className = (ison ? "" : "h2bg");
	}
	$$(str+"_h").className = "none";
	$$(str+"_v").innerHTML = $$(str+"_h").getElementsByTagName("blockquote")[1].innerHTML;
}
//]]>
</script>
<script type="text/javascript" src="themes/jumei/images/js/cctv.js"></script>   
<script>
<!--
/*第一种形式 第二种形式 更换显示样式*/
function setTabCatGoods(name,cursel,n){
for(i=1;i<=n;i++){
var menu=document.getElementById(name+i);
var con=document.getElementById("con_"+name+"_"+i);
con.style.display=i==cursel?"block":"none";
menu.className=i==cursel?"hover":"";
}
}
//-->
</script> 
</head>
<body>
<link href="themes/jumei/images/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script language="javascript"> 
<!--
/*屏蔽所有的js错误*/
function killerrors() { 
return true; 
} 
window.onerror = killerrors; 
//-->
</script>
<SCRIPT>
function ask(txt) {
return window.confirm(txt);
}
function bookmark(){
if(ask("要将本站点加入收藏夹吗？")) {
  var title = document.title
  var domain = window.location.hostname;
  var url = window.location.href;
  if( document.all ) { // ie
   window.external.AddFavorite(url, title);
  } else if (window.sidebar) { // firefox
   window.sidebar.addPanel(title, url, title);
  }
}
}
function setIndex(obj) {
var domain = window.location.hostname;
domain = "http://" + domain + "/";
if(ask("要将本站设为首页吗？")) {
  if( document.all ) { // ie
   obj.style.behavior='url(#default#homepage)';
   obj.setHomePage(domain);
  } else if (window.sidebar) { // firefox
   if(window.netscape) {
       try {  
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");  
          } catch (e) {  
        alert( "该操作被浏览器拒绝，如果想启用该功能，请在地址栏内输入 about:config,然后将项 signed.applets.codebase_principal_support 值该为true" );  
          }
      } 
      var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components. interfaces.nsIPrefBranch);
      prefs.setCharPref('browser.startup.homepage', domain);
   }
}
}
</SCRIPT> 
<!--[if IE 6]>
<script type="text/javascript">
try {document.execCommand('BackgroundImageCache', false, true);} catch(e) {}
</script>
<![endif]-->
<div id="header_container">
        <div id="user_header">
        <div id="user_control">
              <ul class="menu_header">
			  <li class="menu_intro"><a href="#" target="_blank"><span class="arrow"></span>邀请好友</a><em>|</em></li>
			  
        <li class="menu_stow"><a onclick=bookmark(); href="javascript: void 0;" id="bookmark_us"><span class="arrow"></span>加入收藏</a><em>|</em></li>
         <li id="my_jumei_attention_link" style="position:relative; overflow:inherit; z-index:999;">
          
      <div class="headeraccount" style="position:relative;" onmouseover="showtopMenu('show')" onmouseout="showtopMenu('hide')" >
         <a href="user.php" target="_blank" title="我的账户" id="myxiu_a" style="position:relative; left:5px; width:60px; color:#d4062d; z-index:999; top:1px;background:url(themes/jumei/images/top_corn.gif) no-repeat right 12px; *background:url(themes/jumei/images/top_corn.gif) no-repeat right 10px;_background:url(themes/jumei/images/top_corn.gif) no-repeat right 12px;" class="">关注我们</a>
		 
      
		  <div  id="topnavboxss" style=" display:none; ">
                        <ul>
                            <li class="sina"><a href="#" rel="nofollow" target="_blank"><span class="arrow"></span>新浪微博</a></li>
                            <li class="qqblog"><a href="#" rel="nofollow" target="_blank"><span class="arrow"></span>腾讯微博</a></li>
                            <li class="qq"><a href="#" rel="nofollow" target="_blank"><span class="arrow"></span>QQ空间</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
		  
          <SCRIPT language=Javascript>
function showtopMenu(dos){
	if(dos=='show'){
		document.getElementById('topnavboxss').style.display="block";
			document.getElementById('myxiu_a').className="hover";
	}else{
		document.getElementById('topnavboxss').style.display="none";
		document.getElementById('myxiu_a').className="";
	}
}
</SCRIPT>
        </div>
                  </li>
              
              </ul>
              <ul class="login_header">
           <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>   <font id="ECS_MEMBERZONE">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </font>
  
                 
                              </ul>
        </div>
    </div>
    <div id="logo">
		<a href="index.php" id="home"><img src="themes/jumei/images/logo.png" ></a>
        <a id="cart" href="flow.php" style="background:none; margin-left:715px;"><img src="themes/jumei/images/gouwudd.jpg" ></a>
        <a href="#" class="top_link persent" target="_blank"></a>
        <a href="#" class="top_link credit" target="_blank"></a>
        <a href="#" class="top_link gild" target="_blank"></a>
        <a href="#" class="top_link lightning" target="_blank"></a>
        	
</div>
    <div class="clear"></div>
    <div id="top_menu" >
        <div id="top_nav">
                    <div style="float: left; width:720px;">
  <UL class=mainmenu id=mainmenu>
    
  
  
      <LI class=mainmenu_li  style="background:#d4062d" ><a href="index.php">首页</a></LI>
	                      <LI onMouseOver="sw_nav('1',1);" onMouseOut="sw_nav('1',0);"   >
        <DIV class="mainmenu_li" id=HandleLI_1 >
                        <a href="group_buy.php">今日特卖</a></DIV>
		    
	                </LI>           
		                   <LI onMouseOver="sw_nav('2',1);" onMouseOut="sw_nav('2',0);"   >
        <DIV class="mainmenu_li" id=HandleLI_2 >
                        <a href="222">所有品牌</a></DIV>
		    
	                </LI>           
		 			   	   
                </UL>
            </div>
             
                <div class="top_search_wrap" >
                  <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()"  >
                   <div class="top_search_bg">
                        <input name="keywords" type="text" class="top_search_input" id="keyword" value="补水"/>
                    </div>
                    <div id="search_btn" class="div_after top_search_buttom">
                     <input name="imageField" type="submit" value="" style="cursor:pointer; background:url(themes/jumei/images/images/search_top_buttom.jpg); border:none; width:32px; height:26px;" /> 
                      
                    </div>
                      </form>
                </div>
                    </div>
    </div>
    </div>
    <div class="mall_nav">
    <div class="mall_nav_box" >
                        <ul class="nav">
           <!--
            <li><div class="border"><a href="search.php?intro=new" target="_blank" style="color:#7e0b18" >最新上架</a></div></li>
            <li><div class="border"><a href="#" target="_blank" style="color:#d4062d">保湿专区</a></div></li>
            <li><div class="border"><a href="#" target="_blank"  >抗皱专区</a></div></li>
            <li><div class="border"><a href="#" target="_blank" >香水专区</a></div></li>
            <li><div class="border"><a href="#" target="_blank" >美白专区</a></div></li>
		    <li><div class="border"><a href="#" target="_blank" >补水专区</a></div></li>
			-->			
          
                  </ul>
    <div class="serchkeyword" >
	   热门搜索 ：
      <a href="search.php?keywords=%E8%A5%BF%E8%92%99">西蒙</a>&nbsp;&nbsp;
      <a href="search.php?keywords=%E5%A5%A5%E6%99%AE">奥普</a>&nbsp;&nbsp;
      <a href="search.php?keywords=%E5%BF%97%E9%82%A6">志邦</a>&nbsp;&nbsp;
      <a href="search.php?keywords=%E5%9C%A3%E8%B1%A1">圣象</a>&nbsp;&nbsp;
      <a href="search.php?keywords=%E5%96%9C%E4%B8%B4%E9%97%A8">喜临门</a>&nbsp;&nbsp;
          </div>
                </div>      
</div>
  
     <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
    </script>
<script type="text/javascript">
      //初始化主菜单
		function sw_nav(obj,tag)
		{
		var DisSub = document.getElementById("DisSub_"+obj);
		var HandleLI= document.getElementById("HandleLI_"+obj);
			if(tag==1)
			{
				DisSub.style.display = "block";
				HandleLI.className="mainmenu_li current";
				
			}
			else
			{
				DisSub.style.display = "none";
				HandleLI.className="mainmenu_li";
			}
		}
      </script>
<div class="yl_up">
	<a class="bookmark" href="message.php"></a> <a href="#top" class="to_top" align="absmiddle" alt="回顶部"></a>
</div><div class="blank" id="kbaidddddd"></div>
<style>
#kbaidddddd{display:none;}
</style>
<div id="container" >
    <div id="body">
<div class="mallTopScreen">
<div class="fl" style="width:190px;">
<div class="mtsCategory">
<div class="mtsCategory-con">
<div class="mallCategory" id="mallCategory">
<h2 class="mc_head">全部分类</h2>
<div class="mc_content">
<ul class="mc_items">
    	<li onMouseOver="this.className='hover item'" onMouseOut="this.className='item'" class="item" style="border-top:none;"  >
    <span class="icon i1"></span>
    <h3>
     <a href="category.php?id=85" target="_blank">家具</a>
    </h3>
    <p>
   <a href="category.php?id=86"  target="_blank">床</a>
     
       <a href="category.php?id=87"  target="_blank">床垫</a>
     
       <a href="category.php?id=88"  target="_blank">沙发</a>
     
       <a href="category.php?id=89"  target="_blank">客厅家具</a>
     
       <a href="category.php?id=90"  target="_blank">柜子</a>
     
       <a href="category.php?id=91"  target="_blank">架类</a>
     
            </p>
   
</li>
    	<li onMouseOver="this.className='hover item'" onMouseOut="this.className='item'" class="item"  >
    <span class="icon i2"></span>
    <h3>
     <a href="category.php?id=78" target="_blank">建材</a>
    </h3>
    <p>
   <a href="category.php?id=79"  target="_blank">开关插座</a>
     
       <a href="category.php?id=80"  target="_blank">照明灯具</a>
     
       <a href="category.php?id=81"  target="_blank">卫浴</a>
     
       <a href="category.php?id=82"  target="_blank">地板</a>
     
       <a href="category.php?id=83"  target="_blank">瓷砖</a>
     
       <a href="category.php?id=84"  target="_blank">橱柜</a>
     
       <a href="category.php?id=117"  target="_blank">移门衣柜</a>
     
       <a href="category.php?id=118"  target="_blank">集成吊顶</a>
     
       <a href="category.php?id=119"  target="_blank">厨卫电器</a>
     
       <a href="category.php?id=120"  target="_blank">门窗</a>
     
       <a href="category.php?id=121"  target="_blank">窗帘</a>
     
       <a href="category.php?id=122"  target="_blank">墙面装饰</a>
     
       <a href="category.php?id=123"  target="_blank">防盗监控</a>
     
       <a href="category.php?id=124"  target="_blank">家用五金</a>
     
       <a href="category.php?id=125"  target="_blank">工具专区</a>
     
       <a href="category.php?id=126"  target="_blank">晾衣架</a>
     
            </p>
   
</li>
    	<li onMouseOver="this.className='hover item'" onMouseOut="this.className='item'" class="item"  >
    <span class="icon i3"></span>
    <h3>
     <a href="category.php?id=92" target="_blank">健康家居</a>
    </h3>
    <p>
   <a href="category.php?id=275"  target="_blank">空气净化</a>
     
       <a href="category.php?id=278"  target="_blank">净水处理</a>
     
       <a href="category.php?id=282"  target="_blank">空气检测</a>
     
       <a href="category.php?id=283"  target="_blank">舒适冷暖</a>
     
       <a href="category.php?id=287"  target="_blank">影音音响</a>
     
       <a href="category.php?id=288"  target="_blank">垃圾处理器</a>
     
            </p>
   
</li>
    	<li onMouseOver="this.className='hover item'" onMouseOut="this.className='item'" class="item"  >
    <span class="icon i4"></span>
    <h3>
     <a href="category.php?id=100" target="_blank">装修服务</a>
    </h3>
    <p>
   <a href="category.php?id=101"  target="_blank">室内设计</a>
     
       <a href="category.php?id=102"  target="_blank">监理</a>
     
       <a href="category.php?id=103"  target="_blank">局部施工</a>
     
       <a href="category.php?id=104"  target="_blank">安装</a>
     
       <a href="category.php?id=105"  target="_blank">全屋保洁</a>
     
       <a href="category.php?id=106"  target="_blank">搬家</a>
     
       <a href="category.php?id=107"  target="_blank">窗帘清洗</a>
     
       <a href="category.php?id=108"  target="_blank">地板保养</a>
     
       <a href="category.php?id=109"  target="_blank">沙发保养</a>
     
       <a href="category.php?id=110"  target="_blank">地毯清洗</a>
     
       <a href="category.php?id=274"  target="_blank">配送</a>
     
            </p>
   
</li>
    	<li onMouseOver="this.className='hover item'" onMouseOut="this.className='item'" class="item"  >
    <span class="icon i5"></span>
    <h3>
     <a href="category.php?id=111" target="_blank">家居饰品</a>
    </h3>
    <p>
   <a href="category.php?id=112"  target="_blank">地毯</a>
     
       <a href="category.php?id=113"  target="_blank">挂钟</a>
     
       <a href="category.php?id=114"  target="_blank">装饰画</a>
     
       <a href="category.php?id=115"  target="_blank">墙贴</a>
     
       <a href="category.php?id=116"  target="_blank">炭雕</a>
     
       <a href="category.php?id=267"  target="_blank">仿真花</a>
     
       <a href="category.php?id=271"  target="_blank">鱼缸</a>
     
            </p>
   
</li>
       
</ul>
</div>
</div>
</div>
</div>
<div class="left_shadow" style="margin-bottom: 7px;"></div></div>
<div class="fr" style="width:760px;">
    <div class="mtsBanner" id="mtsBanner">
        <STYLE>
B {
	FONT-SIZE: 12px; TEXT-DECORATION: none
}
PRE {
	COLOR: #808080
}
IMG {
	BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px
}
</STYLE>
<style type="text/css">
#JINGDONGNumID{position:absolute; bottom:5px; right:5px;}
#JINGDONGNumID li{list-style:none;float:left;width:18px;height:16px;FILTER:alpha(opacity=80);opacity:0.8;border:1px solid #D00000;background-color:#FFFFFF;color:#D00000;text-align:center;cursor:pointer;margin-right:4px;padding-top:2px;overflow:hidden; line-height:16px;}
#JINGDONGNumID li:hover,#JINGDONGNumID li.active{border:1px solid #D00000;background-color:#ED145B;color:#FFFFFF;width:18px;height:16px;font-weight:bold;font-size:13px; line-height:16px;}
</style>
<div style="overflow:hidden;width:760px;height:311px;position:relative;clear:both;background-color:#ffffff; line-height:normal;">
	<div id="JINGDONGBox">
		<ul id="JINGDONGContentID">
			    
         			<li><a href=""><img border="0" src="/data/afficheimg/1367714774913839607.jpg" alt="科勒" width="760" height="311"/></a></li>	         			<li><a href=""><img border="0" src="/data/afficheimg/1402801185385917711.jpg" alt="test" width="760" height="311"/></a></li>	 	
					
					  </ul>
	</div>
	<ul id="JINGDONGNumID">
       		<li class="">1</li>
	     		<li class="">2</li>
	     		<li class="">3</li>
	     		<li class="">4</li>
	     		<li class="">5</li>
	     		
	       
	</ul>
</div>
<script type="text/javascript">
new Marquee(
{MSClassID : "JINGDONGBox",ContentID : "JINGDONGContentID",TabID	  : "JINGDONGNumID",Direction : 0,Step	  : 0.3,Width	  : 760,Height	  : 311,Timer	  : 20,DelayTime : 3000,WaitTime  : 0,ScrollStep: 311,SwitchType: 0,AutoStart : 1})
</script>      
    </div>
    <div class="right_shadow" style="margin-bottom: 4px;"></div>
  <div class="Brand_Flagship_Store">
        <div class="bfs_head">品牌官方旗舰店</div>
        <div class="bfs_content clearfix" >
        <DIV class="bfs_marquee" id="MarqueeDiv1">
<UL onmouseout="hiddenallimgbox(this,event)">
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"2";s:3:"num";s:1:"8";}554fcae493e564ee0dc75bdf2ebf94ca
</UL>
<SCRIPT type=text/javascript>
new Marquee("MarqueeDiv1",2,20,760,253,20,4000,5000,190)	
</SCRIPT>
</DIV>
  </div>
    </div>
<div class="right_shadow"></div>
</div>
<div class="clear"></div>
</div>
  <div class="">
</div>   
  <div class="floor_shadow"></div> 
<div id="skincare" class="floor">
<div class="floor_head">
    <h3>SKINCARE 护肤</h3>
    <ul class="fh_cate">
<li><a href="brand.php?id=46" target="_blank">滋润</a></li>
<li><a href="brand.php?id=51" target="_blank">保湿</a></li>
<li><a href="brand.php?id=49" target="_blank">清洁</a></li>
<li><a href="brand.php?id=73" target="_blank">补水</a></li>
<li><a href="brand.php?id=50" target="_blank">美白</a></li>
<li><a href="brand.php?id=63" target="_blank">控油</a></li>
<li><a href="brand.php?id=14" target="_blank">防晒</a></li>
<li><a href="brand.php?id=39" target="_blank">紧致</a></li>
<li><a href="search.php?encode=YToyOntzOjg6ImtleXdvcmRzIjtzOjY6IuWFsOiKnSI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjEzNTAzMDE4MzM7fQ==" target="_blank">去角质</a></li>
<li style="border: none;"><a href="brand.php?id=57" target="_blank">收敛毛孔</a></li> 
    </ul>
    <a href="category.php?id=6" class="more" target="_blank">去护肤馆</a></div>
<div class="floor_con" style="height: 590px;width:960px; overflow:hidden;">
    <div class="fc_l fl" style="width:200px;">
        <div class="fc_sale_rank">
            <h3>大家都喜欢买</h3>
            <div class="sr_list">       
<UL >
     
  <SCRIPT type=text/javascript> window.onload = show_goodspic(1,'top1');</SCRIPT>
</UL></div>
        </div>
    </div>
    <div class="fc_main fl" style="height: 570px; position:relative;">
    <div onmouseout="hiddenallimgbox(this,event)">
    <div style="width:185px;float:left;">
       <div  class="imgbox" style="width:185px; height:190px; overflow:hidden;" onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
       
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1368488031411424510.jpg" width='185' height='190' border='0' /></a>
              <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div class="imgbox" style="width:185px; height:190px; overflow:hidden;"   onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
                   
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1368489896718779191.jpg" width='185' height='190' border='0'  alt="护肤广告2"/></a>
     
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div>
       
<div  style=" width:380px; height:380px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
                     
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1368492113689972090.jpg" width='380' height='380' border='0'  alt="护肤广告4"/></a>
   
            <div class="imgbox_gray" style="display:none; width:380px; height:380px;"></div>
       </div>
       
       <div style="width:185px; float:left;">
       <div style=" width:185px; height:190px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
                              
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1368490837805110087.jpg" width='185' height='190' border='0'  alt="护肤广告3"/></a>
     
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div  style=" width:185px; height:190px;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
               
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1368491105228378690.jpg" width='190' height='190' border='0'  alt="护肤广告5"/></a>
     
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div>
      
       <div >
       <div  style=" width:185px; height:190px; float:left; overflow:hidden;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
               
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1368491454877536965.jpg" width='185' height='190' border='0'  alt="护肤广告6"/></a>
     
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div style=" width:190px; height:190px; float:left; overflow:hidden;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
                     
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1368492242286265489.jpg" width='190' height='190' border='0'  alt="护肤广告7"/></a>
     
            <div class="imgbox_gray" style="display:none; width:190px; height:190px;"></div>
       </div>
       <div  style=" width:190px; height:190px; float:left; overflow:hidden;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
                      
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1368491819213639673.jpg" width='190' height='190' border='0'  alt="护肤广告8"/></a>
     
            <div class="imgbox_gray" style="display:none; width:190px; height:190px;"></div>
       </div>
       <div style=" width:185px; height:190px; float:left; overflow:hidden;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
               
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1368491396927844036.jpg" width='185' height='190' border='0'  alt="护肤广告9"/></a>
     
       <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div>
       </div>
         <div style="height:0px; line-height:0px; clear:both;"></div>
                </div>
    <div class="clear"></div>
</div>
<div class="floor_con_koubei koubei"  id="MarqueeDiv7" style="width:960px; height:98px; overflow:hidden;">
<ul  class="koubei_slider" >
<li style=" height:100px; *height:98px; overflow:hidden;">
                                     <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=110" class="pic fl" target="_blank">
                            <img title="UNES优理氏玻尿酸肽保湿隔离喷雾 60ml " src="images/201210/thumb_img/110_thumb_G_1350967409788.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="UNES优理氏玻尿酸肽保湿隔离喷雾 60ml " href="goods.php?id=110">UNES优理氏玻尿酸肽保湿隔离喷雾 60ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=110">买家评论：上图勒，来一张外形照一张全家福打上后的效果，我不喜欢太浓密的感..</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=111" class="pic fl" target="_blank">
                            <img title="AFU阿芙茶树精油 10ml " src="images/201210/thumb_img/111_thumb_G_1350967466098.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="AFU阿芙茶树精油 10ml " href="goods.php?id=111">AFU阿芙茶树精油 10ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=111">买家评论：第一次买，快递两天半。不过那个睫毛膏貌似是去年的、、、这个粉饼是...</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=115" class="pic fl" target="_blank">
                            <img title="芳草集玫瑰纯露 220ml " src="images/201210/thumb_img/115_thumb_G_1350967641536.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="芳草集玫瑰纯露 220ml " href="goods.php?id=115">芳草集玫瑰纯露 220ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=115">买家评论：一下子买了两个、因为想要免运费、另一个给闺蜜带了~首先感觉这款护...阅读全文</a></p>
                        </div>
                    </div>
                                                
                    </li>
<li style=" height:100px; *height:98px; overflow:hidden;">
                                     <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=116" class="pic fl" target="_blank">
                            <img title="兰芝睡眠面膜80ml (多款包装，随机发货)" src="images/201210/thumb_img/116_thumb_G_1350967734766.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="兰芝睡眠面膜80ml (多款包装，随机发货)" href="goods.php?id=116">兰芝睡眠面膜80ml (多款包装，随机发货)</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=116">买家评论：好慢的快递呀，人家都口碑的写了我还没有收到，今天终于见面了，激动...</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=118" class="pic fl" target="_blank">
                            <img title="倩碧润肤露 (有油版1，2) 125ml" src="images/201210/thumb_img/118_thumb_G_1350967840545.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="倩碧润肤露 (有油版1，2) 125ml" href="goods.php?id=118">倩碧润肤露 (有油版1，2) 125ml</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=118">买家评论：夏天的时候,脚后跟突然烈了,里面黑黑的怎么样都洗不掉的说,看到有...阅读全文</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=118" class="pic fl" target="_blank">
                            <img title="倩碧润肤露 (有油版1，2) 125ml" src="images/201210/thumb_img/118_thumb_G_1350967840545.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="倩碧润肤露 (有油版1，2) 125ml" href="goods.php?id=118">倩碧润肤露 (有油版1，2) 125ml</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=118">买家评论：在聚美上观望了好久，终于下定决心买了我第一个产品，现在好好来写下</a></p>
                        </div>
                    </div>
                                                
                    </li>
        </ul>
            
    </div>
<SCRIPT type=text/javascript>
/*********向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)***************/
new Marquee("MarqueeDiv7",1,0.1,960,100,20,4000,5000)	//向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)
</SCRIPT>
<div class="floor_bottom">
     		    
</div>
</div>
<div class="floor_shadow"></div>
    
<div id="color" class="floor">
    <div class="floor_head">
        <h3>彩妆</h3>
        <ul class="fh_cate">
<li><a href="goods.php?id=266" target="_blank">持久</a></li>
<li><a href="brand.php?id=62" target="_blank">睫毛增长</a></li>
<li><a href="goods.php?id=263" target="_blank">眼部造型</a></li>
<li><a href="goods.php?id=197" target="_blank">均匀肤色</a></li>
<li><a href="goods.php?id=198" target="_blank">修饰</a></li>
<li><a href="brand.php?id=14" target="_blank">防水</a></li>
<li><a href="brand.php?id=65" target="_blank">遮瑕</a></li>
<li><a href="goods.php?id=198" target="_blank">定妆</a></li>
<li><a href="brand.php?id=65" target="_blank">隔离</a></li>
<li><a href="goods.php?id=264" target="_blank">保湿</a></li>
<li style="border: none;"><a href="goods.php?id=260" target="_blank">控油</a></li>
                            </ul>
        <a href="category.php?id=1" target="_blank" class="more">去彩妆馆</a>
    </div>        
    <div class="floor_con" style="width:960px; overflow:hidden;">
        <div class="fc_l fl" style="width:200px;">
            <div class="fc_sale_rank">
                <h3>大家都喜欢买</h3>
                <div class="sr_list">
                                         
<UL >
        
  <SCRIPT type=text/javascript> window.onload = show_goodspic(1,'top2');</SCRIPT>
</UL>
        
                                </div>
            </div>
        </div>
    <div class="fc_main fl" style="height: 570px; position:relative; ">
    <div onmouseout="hiddenallimgbox(this,event)">
    <div style="width:185px;float:left;">
       <div  class="imgbox" style="width:185px; height:190px; overflow:hidden;" onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
  
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348136425252000931.jpg" width='185' height='190' border='0'  alt="彩妆广告1"/></a>
     	
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div class="imgbox" style="width:185px; height:190px; overflow:hidden;"   onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
  
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348136438452748662.jpg" width='185' height='190' border='0'  alt="彩妆广告2"/></a>
     
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div>
       
<div  style=" width:380px; height:380px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
   
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348136451642072887.jpg" width='380' height='380' border='0'  alt="彩妆广告3"/></a>
           
            <div class="imgbox_gray" style="display:none; width:380px; height:380px;"></div>
       </div>
       
       <div style="width:185px; float:left;">
       <div style=" width:185px; height:190px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
     
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348136465544327900.jpg" width='185' height='190' border='0'  alt="彩妆广告4"/></a>
     
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div  style=" width:185px; height:190px;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
  
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348136477488189896.jpg" width='185' height='190' border='0'  alt="彩妆广告5"/></a>
     
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div>
        <div class="clear"></div>
    </div>
</div>  
    </div>
        <div class="clear"></div>
<div class="floor_con_koubei koubei"  id="MarqueeDiv6" style="width:960px; height:98px; overflow:hidden;">	   	    
<ul  class="koubei_slider" >
<li style=" height:100px; *height:98px; overflow:hidden;">
                                     <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=110" class="pic fl" target="_blank">
                            <img title="UNES优理氏玻尿酸肽保湿隔离喷雾 60ml " src="images/201210/thumb_img/110_thumb_G_1350967409788.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="UNES优理氏玻尿酸肽保湿隔离喷雾 60ml " href="goods.php?id=110">UNES优理氏玻尿酸肽保湿隔离喷雾 60ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=110">买家评论：上图勒，来一张外形照一张全家福打上后的效果，我不喜欢太浓密的感..</a></p> 
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=111" class="pic fl" target="_blank">
                            <img title="AFU阿芙茶树精油 10ml " src="images/201210/thumb_img/111_thumb_G_1350967466098.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="AFU阿芙茶树精油 10ml " href="goods.php?id=111">AFU阿芙茶树精油 10ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=111">买家评论：第一次买，快递两天半。不过那个睫毛膏貌似是去年的、、、这个粉饼是...</a></p> 
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=115" class="pic fl" target="_blank">
                            <img title="芳草集玫瑰纯露 220ml " src="images/201210/thumb_img/115_thumb_G_1350967641536.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="芳草集玫瑰纯露 220ml " href="goods.php?id=115">芳草集玫瑰纯露 220ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=115">买家评论：一下子买了两个、因为想要免运费、另一个给闺蜜带了~首先感觉这款护...阅读全文</a></p> 
                        </div>
                    </div>
                                                
                    </li>
<li style=" height:100px; *height:98px; overflow:hidden;">
                                     <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=116" class="pic fl" target="_blank">
                            <img title="兰芝睡眠面膜80ml (多款包装，随机发货)" src="images/201210/thumb_img/116_thumb_G_1350967734766.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="兰芝睡眠面膜80ml (多款包装，随机发货)" href="goods.php?id=116">兰芝睡眠面膜80ml (多款包装，随机发货)</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=116">买家评论：好慢的快递呀，人家都口碑的写了我还没有收到，今天终于见面了，激动...</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=118" class="pic fl" target="_blank">
                            <img title="倩碧润肤露 (有油版1，2) 125ml" src="images/201210/thumb_img/118_thumb_G_1350967840545.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="倩碧润肤露 (有油版1，2) 125ml" href="goods.php?id=118">倩碧润肤露 (有油版1，2) 125ml</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=118">买家评论：夏天的时候,脚后跟突然烈了,里面黑黑的怎么样都洗不掉的说,看到有...阅读全文</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=118" class="pic fl" target="_blank">
                            <img title="倩碧润肤露 (有油版1，2) 125ml" src="images/201210/thumb_img/118_thumb_G_1350967840545.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="倩碧润肤露 (有油版1，2) 125ml" href="goods.php?id=118">倩碧润肤露 (有油版1，2) 125ml</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=118">买家评论：在聚美上观望了好久，终于下定决心买了我第一个产品，现在好好来写下</a></p>
                        </div>
                    </div>
                                                
                    </li>                        
        </ul>        
    </div>
<SCRIPT type=text/javascript>
/*********向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)***************/
new Marquee("MarqueeDiv6",1,0.1,960,100,20,4000,5000)		//向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)
</SCRIPT>
    
    <div class="floor_bottom">
         		            
    
                        </div>
</div>
<div class="floor_shadow"></div>
<div id="ferfuem_floor" class="floor">
<div class="floor_head">
        <h3>香氛</h3>
        <ul class="fh_cate">
                                                <li><a href="#" target="_blank">持久</a></li>
<li><a href="brand.php?id=14" target="_blank">喷雾</a></li>
<li><a href="goods.php?id=186" target="_blank">温和</a></li>
<li><a href="goods.php?id=196" target="_blank">舒缓</a></li>
<li><a href="goods.php?id=259" target="_blank">男士</a></li>
<li><a href="category.php?id=44" target="_blank">香氛</a></li>
<li><a href="goods.php?id=199" target="_blank">清爽</a></li>
<li style="border: none;"><a href="goods.php?id=267" target="_blank">修饰</a></li>
                                    </ul>
        <a href="category.php?id=12" class="more" target="_blank">去香氛馆</a>
    </div>        
       <div class="floor_con" style="width:960px; overflow:hidden;">
        <div class="fc_l fl" style="width:200px;">
            <div class="fc_sale_rank">
                <h3>大家都喜欢买</h3>
                <div class="sr_list">
<UL >
     
    
  <SCRIPT type=text/javascript> window.onload = show_goodspic(1,'top3');</SCRIPT>
</UL>
                                </div>
            </div>
        </div>
        <div class="fc_main fl" style="height: 570px; position:relative;">
    <div onmouseout="hiddenallimgbox(this,event)">
    <div style="width:185px;float:left;">
       <div  class="imgbox" style="width:185px; height:190px; overflow:hidden;" onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
      
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348137052886620116.jpg" width='185' height='190' border='0'  alt="香气广告1"/></a>
     
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div class="imgbox" style="width:185px; height:190px; overflow:hidden;"   onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
      
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348137068182798495.jpg" width='185' height='190' border='0'  alt="香气广告2"/></a>
     
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div>
<div  style=" width:380px; height:380px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
        
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348137086655646938.jpg"  width='380' height='380' border='0'  alt="香气广告3"/></a>
         
            <div class="imgbox_gray" style="display:none; width:380px; height:380px;"></div>
       </div>
       
       <div style="width:185px; float:left;">
       <div style=" width:185px; height:190px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
           
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348137099507317623.jpg"  width='185' height='190' border='0'  alt="香气广告4"/></a>
       
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div  style=" width:185px; height:190px;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
        
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348137115983874262.jpg"  width='185' height='190' border='0'  alt="香气广告5"/></a>
       
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div> 
        <div class="clear"></div>
    </div>
</div>
       <div class="clear"></div>
    </div>
<div class="floor_con_koubei koubei"  id="MarqueeDiv5" style="width:960px; height:98px; overflow:hidden;">   	    
<ul  class="koubei_slider" >
<li style=" height:100px; *height:98px; overflow:hidden;">
                                     <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=110" class="pic fl" target="_blank">
                            <img title="UNES优理氏玻尿酸肽保湿隔离喷雾 60ml " src="images/201210/thumb_img/110_thumb_G_1350967409788.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="UNES优理氏玻尿酸肽保湿隔离喷雾 60ml " href="goods.php?id=110">UNES优理氏玻尿酸肽保湿隔离喷雾 60ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=110">买家评论：上图勒，来一张外形照一张全家福打上后的效果，我不喜欢太浓密的感..</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=111" class="pic fl" target="_blank">
                            <img title="AFU阿芙茶树精油 10ml " src="images/201210/thumb_img/111_thumb_G_1350967466098.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="AFU阿芙茶树精油 10ml " href="goods.php?id=111">AFU阿芙茶树精油 10ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=111">买家评论：第一次买，快递两天半。不过那个睫毛膏貌似是去年的、、、这个粉饼是...</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=115" class="pic fl" target="_blank">
                            <img title="芳草集玫瑰纯露 220ml " src="images/201210/thumb_img/115_thumb_G_1350967641536.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="芳草集玫瑰纯露 220ml " href="goods.php?id=115">芳草集玫瑰纯露 220ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=115">买家评论：一下子买了两个、因为想要免运费、另一个给闺蜜带了~首先感觉这款护...阅读全文</a></p>
                        </div>
                    </div>
                                                
                    </li>
<li style=" height:100px; *height:98px; overflow:hidden;">
                                     <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=116" class="pic fl" target="_blank">
                            <img title="兰芝睡眠面膜80ml (多款包装，随机发货)" src="images/201210/thumb_img/116_thumb_G_1350967734766.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="兰芝睡眠面膜80ml (多款包装，随机发货)" href="goods.php?id=116">兰芝睡眠面膜80ml (多款包装，随机发货)</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=116">买家评论：好慢的快递呀，人家都口碑的写了我还没有收到，今天终于见面了，激动...</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=118" class="pic fl" target="_blank">
                            <img title="倩碧润肤露 (有油版1，2) 125ml" src="images/201210/thumb_img/118_thumb_G_1350967840545.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="倩碧润肤露 (有油版1，2) 125ml" href="goods.php?id=118">倩碧润肤露 (有油版1，2) 125ml</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=118">买家评论：夏天的时候,脚后跟突然烈了,里面黑黑的怎么样都洗不掉的说,看到有...阅读全文</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=118" class="pic fl" target="_blank">
                            <img title="倩碧润肤露 (有油版1，2) 125ml" src="images/201210/thumb_img/118_thumb_G_1350967840545.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="倩碧润肤露 (有油版1，2) 125ml" href="goods.php?id=118">倩碧润肤露 (有油版1，2) 125ml</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=118">买家评论：在聚美上观望了好久，终于下定决心买了我第一个产品，现在好好来写下</a></p>
                        </div>
                    </div>
                                                
                    </li>      
        </ul>      
    </div>
<SCRIPT type=text/javascript>
/*********向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)***************/
new Marquee("MarqueeDiv5",1,0.1,960,100,20,4000,5000)	//向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)
</SCRIPT>
    <div class="floor_bottom">
          		            
 </div>
</div>
<div class="floor_shadow"></div>
<div id="Body_floor" class="floor">
<div class="floor_head">
        <h3>身体护理</h3>
<ul class="fh_cate">
<li><a href="goods.php?id=196" target="_blank">舒缓</a></li>
<li><a href="category.php?id=22" target="_blank">排毒</a></li>
<li><a href="goods.php?id=197" target="_blank">紧致</a></li>
<li><a href="goods.php?id=200" target="_blank">纤体</a></li>
<li><a href="goods.php?id=196" target="_blank">消肿</a></li>
<li><a href="goods.php?id=267" target="_blank">修护肌肤</a></li>
<li><a href="goods.php?id=168" target="_blank">瘦腿</a></li>
<li style="border: none;"><a href="goods.php?id=162" target="_blank">脱毛</a></li>
</ul>
        <a href="category.php?id=16" target="_blank" class="more">去身体护理馆</a>
    </div>
     <div class="floor_con" style="width:960px; overflow:hidden;">
        <div class="fc_l fl" style="width:200px;">
            <div class="fc_sale_rank">
                <h3>大家都喜欢买</h3>
                <div class="sr_list">
<UL >
   
    
  <SCRIPT type=text/javascript> window.onload = show_goodspic(1,'top4');</SCRIPT>
</UL>
                                </div>
            </div>
        </div>
        <div class="fc_main fl" style="height: 570px; position:relative;">
    <div onmouseout="hiddenallimgbox(this,event)">
    <div style="width:185px;float:left;">
       <div  class="imgbox" style="width:185px; height:190px; overflow:hidden;" onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
           
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348137560912401664.jpg"  width='185' height='190' border='0'  alt="身体护理广告1"/></a>
       
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div class="imgbox" style="width:185px; height:190px; overflow:hidden;"   onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
             
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348137576206025799.jpg"  width='185' height='190' border='0'  alt="身体护理广告2"/></a>
    
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div>
       
<div  style=" width:380px; height:380px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
         
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348137591085612625.jpg"  width='380' height='380' border='0'  alt="身体护理广告3"/></a>
    
            <div class="imgbox_gray" style="display:none; width:380px; height:380px;"></div>
       </div>
       
       <div style="width:185px; float:left;">
       <div style=" width:185px; height:190px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
             
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348137608304923660.jpg"  width='185' height='190' border='0'  alt="身体护理广告4"/></a>
    
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div  style=" width:185px; height:190px;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
             
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348137623754599043.jpg"  width='185' height='190' border='0'  alt="身体护理广告5"/></a>
    
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div>
        <div class="clear"></div>
    </div>
</div>
        <div class="clear"></div>
    </div>  
<div class="floor_con_koubei koubei"  id="MarqueeDiv4" style="width:960px; height:98px; overflow:hidden;">	   	    
<ul  class="koubei_slider" >         
<li style=" height:100px; *height:98px; overflow:hidden;">
                                     <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=110" class="pic fl" target="_blank">
                            <img title="UNES优理氏玻尿酸肽保湿隔离喷雾 60ml " src="images/201210/thumb_img/110_thumb_G_1350967409788.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="UNES优理氏玻尿酸肽保湿隔离喷雾 60ml " href="goods.php?id=110">UNES优理氏玻尿酸肽保湿隔离喷雾 60ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=110">买家评论：上图勒，来一张外形照一张全家福打上后的效果，我不喜欢太浓密的感..</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=111" class="pic fl" target="_blank">
                            <img title="AFU阿芙茶树精油 10ml " src="images/201210/thumb_img/111_thumb_G_1350967466098.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="AFU阿芙茶树精油 10ml " href="goods.php?id=111">AFU阿芙茶树精油 10ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=111">买家评论：第一次买，快递两天半。不过那个睫毛膏貌似是去年的、、、这个粉饼是...</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=115" class="pic fl" target="_blank">
                            <img title="芳草集玫瑰纯露 220ml " src="images/201210/thumb_img/115_thumb_G_1350967641536.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="芳草集玫瑰纯露 220ml " href="goods.php?id=115">芳草集玫瑰纯露 220ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=115">买家评论：一下子买了两个、因为想要免运费、另一个给闺蜜带了~首先感觉这款护...阅读全文</a></p>
                        </div>
                    </div>
                                                
                    </li>
<li style=" height:100px; *height:98px; overflow:hidden;">
                                     <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=116" class="pic fl" target="_blank">
                            <img title="兰芝睡眠面膜80ml (多款包装，随机发货)" src="images/201210/thumb_img/116_thumb_G_1350967734766.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="兰芝睡眠面膜80ml (多款包装，随机发货)" href="goods.php?id=116">兰芝睡眠面膜80ml (多款包装，随机发货)</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=116">买家评论：好慢的快递呀，人家都口碑的写了我还没有收到，今天终于见面了，激动...</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=118" class="pic fl" target="_blank">
                            <img title="倩碧润肤露 (有油版1，2) 125ml" src="images/201210/thumb_img/118_thumb_G_1350967840545.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="倩碧润肤露 (有油版1，2) 125ml" href="goods.php?id=118">倩碧润肤露 (有油版1，2) 125ml</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=118">买家评论：夏天的时候,脚后跟突然烈了,里面黑黑的怎么样都洗不掉的说,看到有...阅读全文</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=118" class="pic fl" target="_blank">
                            <img title="倩碧润肤露 (有油版1，2) 125ml" src="images/201210/thumb_img/118_thumb_G_1350967840545.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="倩碧润肤露 (有油版1，2) 125ml" href="goods.php?id=118">倩碧润肤露 (有油版1，2) 125ml</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=118">买家评论：在聚美上观望了好久，终于下定决心买了我第一个产品，现在好好来写下</a></p>
                        </div>
                    </div>
                                                
                    </li>  
        </ul>       
    </div>
<SCRIPT type=text/javascript>
/*********向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)***************/
new Marquee("MarqueeDiv4",1,0.1,960,100,20,4000,5000)	//向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)
</SCRIPT>
    
    <div class="floor_bottom">
           		             
                        </div>
</div>
<div class="floor_shadow"></div>
<div id="Man_floor" class="floor">
<div class="floor_head">
        <h3>男士护理</h3>
        <ul class="fh_cate">
                                                <li><a href="category.php?id=44" target="_blank">男士香水</a></li>
<li><a href="brand.php?id=12" target="_blank">面膜</a></li>
<li><a href="brand.php?id=49" target="_blank">洁面</a></li>
<li><a href="goods.php?id=167" target="_blank">唇膏</a></li>
<li><a href="goods.php?id=263" target="_blank">眼部护理</a></li>
<li><a href="goods.php?id=124" target="_blank">喷雾</a></li>
<li><a href="goods.php?id=200" target="_blank">沐浴用品</a></li>
<li style="border: none;"><a href="category.php?id=59" target="_blank">护肤套装</a></li>
                                    </ul>
        <a href="category.php?id=18" class="more" target="_blank">去男士馆</a>
    </div>    <div class="floor_con" style="width:960px; overflow:hidden;">
        <div class="fc_l fl" style="width:200px;">
            <div class="fc_sale_rank">
                <h3>大家都喜欢买</h3>
                <div class="sr_list">
<UL >
   
    
  <SCRIPT type=text/javascript> window.onload = show_goodspic(1,'top5');</SCRIPT>
</UL>            </div>
            </div>
        </div>
        <div class="fc_main fl" style="height: 570px; position:relative;">
    <div onmouseout="hiddenallimgbox(this,event)">
    <div style="width:185px;float:left;">
       <div  class="imgbox" style="width:185px; height:190px; overflow:hidden;" onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
                 
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348137941809662729.jpg"  width='185' height='190' border='0'  alt="男士护理广告1"/></a>
   
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div class="imgbox" style="width:185px; height:190px; overflow:hidden;"   onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
       
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348137953225166711.jpg"  width='185' height='190' border='0'  alt="男士护理广告2"/></a>
   
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div>
       
<div  style=" width:380px; height:380px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
    
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348137967730425865.jpg"  width='380' height='380' border='0'  alt="男士护理广告3"/></a>
   
            <div class="imgbox_gray" style="display:none; width:380px; height:380px;"></div>
       </div>
       
       <div style="width:185px; float:left;">
       <div style=" width:185px; height:190px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
         
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348137982372989240.jpg"  width='185' height='190' border='0'  alt="男士护理广告4"/></a>
   
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div  style=" width:185px; height:190px;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
	        
    <a href='index.php' target='_blank'><img src="/data/afficheimg/1348137996646578317.jpg"  width='185' height='190' border='0'  alt="男士护理广告5"/></a>
   
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div> 
        <div class="clear"></div>
    </div>
</div>
        <div class="clear"></div>
    </div>  
<div class="floor_con_koubei koubei"  id="MarqueeDiv2" style="width:960px; height:100px; *height:98px; overflow:hidden;">	   	    
<ul  class="koubei_slider" >
<li style=" height:100px; *height:98px; overflow:hidden;">
                                     <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=110" class="pic fl" target="_blank">
                            <img title="UNES优理氏玻尿酸肽保湿隔离喷雾 60ml " src="images/201210/thumb_img/110_thumb_G_1350967409788.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="UNES优理氏玻尿酸肽保湿隔离喷雾 60ml " href="goods.php?id=110">UNES优理氏玻尿酸肽保湿隔离喷雾 60ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=110">买家评论：上图勒，来一张外形照一张全家福打上后的效果，我不喜欢太浓密的感..</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=111" class="pic fl" target="_blank">
                            <img title="AFU阿芙茶树精油 10ml " src="images/201210/thumb_img/111_thumb_G_1350967466098.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="AFU阿芙茶树精油 10ml " href="goods.php?id=111">AFU阿芙茶树精油 10ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=111">买家评论：第一次买，快递两天半。不过那个睫毛膏貌似是去年的、、、这个粉饼是...</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=115" class="pic fl" target="_blank">
                            <img title="芳草集玫瑰纯露 220ml " src="images/201210/thumb_img/115_thumb_G_1350967641536.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="芳草集玫瑰纯露 220ml " href="goods.php?id=115">芳草集玫瑰纯露 220ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=115">买家评论：一下子买了两个、因为想要免运费、另一个给闺蜜带了~首先感觉这款护...阅读全文</a></p>
                        </div>
                    </div>
                                                
                    </li>
<li style=" height:100px; *height:98px; overflow:hidden;">
                                     <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=116" class="pic fl" target="_blank">
                            <img title="兰芝睡眠面膜80ml (多款包装，随机发货)" src="images/201210/thumb_img/116_thumb_G_1350967734766.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="兰芝睡眠面膜80ml (多款包装，随机发货)" href="goods.php?id=116">兰芝睡眠面膜80ml (多款包装，随机发货)</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=116">买家评论：好慢的快递呀，人家都口碑的写了我还没有收到，今天终于见面了，激动...</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=118" class="pic fl" target="_blank">
                            <img title="倩碧润肤露 (有油版1，2) 125ml" src="images/201210/thumb_img/118_thumb_G_1350967840545.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="倩碧润肤露 (有油版1，2) 125ml" href="goods.php?id=118">倩碧润肤露 (有油版1，2) 125ml</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=118">买家评论：夏天的时候,脚后跟突然烈了,里面黑黑的怎么样都洗不掉的说,看到有...阅读全文</a></p>
                        </div>
                    </div>
                                        <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=118" class="pic fl" target="_blank">
                            <img title="倩碧润肤露 (有油版1，2) 125ml" src="images/201210/thumb_img/118_thumb_G_1350967840545.jpg" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="倩碧润肤露 (有油版1，2) 125ml" href="goods.php?id=118">倩碧润肤露 (有油版1，2) 125ml</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=118">买家评论：在聚美上观望了好久，终于下定决心买了我第一个产品，现在好好来写下</a></p>
                        </div>
                    </div>
                                                
                    </li>  
        </ul>         
    </div>
<SCRIPT type=text/javascript>
/*********向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)***************/
new Marquee("MarqueeDiv2",1,0.1,960,100,20,4000,5000)	//向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)
</SCRIPT>
    
    <div class="floor_bottom">
           		              
                        </div>
</div>
<div class="floor_shadow"></div>
<div class="floor clearfix floor_koubei koubei">
    <div class="fl fk_left">
<div class="zixunad">
<div class="roll">
                 
                       <div id="rollphoto1" class="rollcon">
                           <ul >
	        
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"8";s:3:"num";s:1:"2";}554fcae493e564ee0dc75bdf2ebf94ca
                           </ul>
                       </div>    
<SCRIPT language=javascript type=text/javascript>
		var scrollPic_01 = new ScrollPic();
		scrollPic_01.scrollContId   = "rollphoto1"; //内容容器ID
		scrollPic_01.arrLeftId      = "leftbtn1";//左箭头ID
		scrollPic_01.arrRightId     = "rightbtn1"; //右箭头ID
		scrollPic_01.frameWidth     = 180;//显示框宽度
		scrollPic_01.pageWidth      = 180; //翻页宽度
		scrollPic_01.speed          = 10; //移动速度(单位毫秒，越小越快)
		scrollPic_01.space          = 10; //每次移动像素(单位px，越大越快)
		scrollPic_01.autoPlay       = true; //自动播放
		scrollPic_01.autoPlayTime   = 3; //自动播放间隔时间(秒)
		scrollPic_01.initialize(); //初始化
</SCRIPT>
                   </div>
</div>
    </div>    
<div class="fr fk_right">
        <div class="fkr_head">
            <h3 style="margin-top:3px;">用户评论展播</h3>
            <a href="message.php" class="more" target="_blank">更多用户评论</a>
        </div>
        <div class="fk_main">
            <ul>
            
                          <li class="clearfix">
                        <a style="margin-top:-5px;" href="goods.php?id=110" class="pic fl" target="_blank">
                            <img title="UNES优理氏玻尿酸肽保湿隔离喷雾 60ml " src="images/201210/thumb_img/110_thumb_G_1350967409788.jpg" />
                        </a>
                       <div class="fkm_con fl">
                            <p class="tit"><a target="_blank" title="UNES优理氏玻尿酸肽保湿隔离喷雾 60ml " href="goods.php?id=110">UNES优理氏玻尿酸肽保湿隔离喷雾 60ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con"><a target="_blank" href="goods.php?id=110">买家评论：上图勒，来一张外形照一张全家福打上后的效果，我不喜欢太浓密的感..</a></p>
                        </div>
           </li>
                                      <li class="clearfix">
                        <a style="margin-top:-5px;" href="goods.php?id=111" class="pic fl" target="_blank">
                            <img title="AFU阿芙茶树精油 10ml " src="images/201210/thumb_img/111_thumb_G_1350967466098.jpg" />
                        </a>
                       <div class="fkm_con fl">
                            <p class="tit"><a target="_blank" title="AFU阿芙茶树精油 10ml " href="goods.php?id=111">AFU阿芙茶树精油 10ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con"><a target="_blank" href="goods.php?id=111">买家评论：第一次买，快递两天半。不过那个睫毛膏貌似是去年的、、、这个粉饼是...</a></p>
                        </div>
           </li>
                                      <li class="clearfix">
                        <a style="margin-top:-5px;" href="goods.php?id=115" class="pic fl" target="_blank">
                            <img title="芳草集玫瑰纯露 220ml " src="images/201210/thumb_img/115_thumb_G_1350967641536.jpg" />
                        </a>
                       <div class="fkm_con fl">
                            <p class="tit"><a target="_blank" title="芳草集玫瑰纯露 220ml " href="goods.php?id=115">芳草集玫瑰纯露 220ml </a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con"><a target="_blank" href="goods.php?id=115">买家评论：一下子买了两个、因为想要免运费、另一个给闺蜜带了~首先感觉这款护...阅读全文</a></p>
                        </div>
           </li>
                                      <li class="clearfix">
                        <a style="margin-top:-5px;" href="goods.php?id=116" class="pic fl" target="_blank">
                            <img title="兰芝睡眠面膜80ml (多款包装，随机发货)" src="images/201210/thumb_img/116_thumb_G_1350967734766.jpg" />
                        </a>
                       <div class="fkm_con fl">
                            <p class="tit"><a target="_blank" title="兰芝睡眠面膜80ml (多款包装，随机发货)" href="goods.php?id=116">兰芝睡眠面膜80ml (多款包装，随机发货)</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con"><a target="_blank" href="goods.php?id=116">买家评论：好慢的快递呀，人家都口碑的写了我还没有收到，今天终于见面了，激动...</a></p>
                        </div>
           </li>
                                      <li class="clearfix">
                        <a style="margin-top:-5px;" href="goods.php?id=118" class="pic fl" target="_blank">
                            <img title="倩碧润肤露 (有油版1，2) 125ml" src="images/201210/thumb_img/118_thumb_G_1350967840545.jpg" />
                        </a>
                       <div class="fkm_con fl">
                            <p class="tit"><a target="_blank" title="倩碧润肤露 (有油版1，2) 125ml" href="goods.php?id=118">倩碧润肤露 (有油版1，2) 125ml</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con"><a target="_blank" href="goods.php?id=118">买家评论：夏天的时候,脚后跟突然烈了,里面黑黑的怎么样都洗不掉的说,看到有...阅读全文</a></p>
                        </div>
           </li>
                                      <li class="clearfix">
                        <a style="margin-top:-5px;" href="goods.php?id=118" class="pic fl" target="_blank">
                            <img title="倩碧润肤露 (有油版1，2) 125ml" src="images/201210/thumb_img/118_thumb_G_1350967840545.jpg" />
                        </a>
                       <div class="fkm_con fl">
                            <p class="tit"><a target="_blank" title="倩碧润肤露 (有油版1，2) 125ml" href="goods.php?id=118">倩碧润肤露 (有油版1，2) 125ml</a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con"><a target="_blank" href="goods.php?id=118">买家评论：在聚美上观望了好久，终于下定决心买了我第一个产品，现在好好来写下</a></p>
                        </div>
           </li>
                     
</ul>
        </div>
    </div>
</div>
<div class="floor_shadow "></div>                         
</div></div>
    <div class="clear"></div>    
 
<div id="footer_container">
  <div id="footer">  
<div class="footer_top">
            <div class="footer_top_bg">
            <div id="footer_links">
  <ul class="links1">
                    <li class="links">使用帮助</li>
                        <li><a href="article.php?id=7" title="新手指南 ">新手指南</a></li>
    <li><a href="article.php?id=8" title="常见问题 ">常见问题</a></li>
    <li><a href="article.php?id=9" title="帮助中心首页 ">帮助中心首页</a></li>
    <li><a href="article.php?id=10" title="用户协议 ">用户协议</a></li>
    <li><a href="article.php?id=11" title="隐私声明 ">隐私声明</a></li>
                </ul>
  <ul class="links2">
                    <li class="links">售后服务</li>
                        <li><a href="article.php?id=12" title="100%正品保障 ">100%正品保障</a></li>
    <li><a href="article.php?id=13" title="退换货政策 ">退换货政策</a></li>
    <li><a href="article.php?id=14" title="在线退货办理 ">在线退货办理</a></li>
    <li><a href="article.php?id=15" title="玩转口碑中心 ">玩转口碑中心</a></li>
    <li><a href="article.php?id=16" title="总裁邮箱">总裁邮箱</a></li>
                </ul>
  <ul class="links3">
                    <li class="links">获取更新</li>
                        <li><a href="article.php?id=17" title="订阅每日团购 ">订阅每日团购</a></li>
    <li><a href="article.php?id=18" title="博客">博客</a></li>
    <li><a href="article.php?id=19" title="新浪微博">新浪微博</a></li>
    <li><a href="article.php?id=20" title="手机版">手机版</a></li>
                </ul>
  <ul class="links4">
                    <li class="links">关于我们</li>
                        <li><a href="article.php?id=21" title="品牌合作专区 ">品牌合作专区</a></li>
    <li><a href="article.php?id=22" title="关于我们">关于我们</a></li>
    <li><a href="article.php?id=23" title="媒体报道 ">媒体报道</a></li>
                </ul>
  <ul class="links5">
                    <li class="links">加入我们</li>
                        <li><a href="article.php?id=24" title="商务合作 ">商务合作</a></li>
    <li><a href="article.php?id=25" title="招贤纳士">招贤纳士</a></li>
    <li><a href="article.php?id=26" title="友情链接 ">友情链接</a></li>
    <li><a href="article.php?id=28" title="在线支付 ">在线支付</a></li>
                </ul>
  <ul class="links6">
                    <li class="links">支付方式</li>
                        <li><a href="article.php?id=27" title="货到付款 ">货到付款</a></li>
    <li><a href="article.php?id=29" title="余额支付 ">余额支付</a></li>
                </ul>
            </div>
            </div>
    </div>
        <div class="footer_top">
            <div class="footer_top_bg">
                <div id="footer_credit">
                    <img src="/themes/jumei/images/images/footer_icons.png" alt="" style="display: block;">
                  
                </div>
            </div>
</div>
                <div class="blank"></div>
             <div id="foot_b">
 <div class="text">
&copy; 2005-2014 最美饰 版权所有，并保留所有权利。  客服热线：286582261 <br />
     
<div style=" margin-top:10px">
                <img src="themes/jumei/images/footer_credit_icons.jpg" alt="" usemap="#bottom_map_icons">
            <map name="bottom_map_icons" id="bottom_map_icons">
                <area shape="rect" coords="131,4,255,45" href="#" target="_blank" rel="nofollow">
                <area shape="rect" coords="556,4,682,44" href="#" rel="nofollow" target="_blank" id="urlknet" onclick="change_urlknet('urlknet');">
            </map>
            </div>
            <br />
 </div>
</div>
  </div>
</div>
<!--
554fcae493e564ee0dc75bdf2ebf94cakefushow|a:1:{s:4:"name";s:8:"kefushow";}554fcae493e564ee0dc75bdf2ebf94ca-->
<script src="/js/qq_float_right.js"></script>    
<SCRIPT type=text/javascript>
$(document).ready(function () {
            Jumei.Core.init();
            Jumei.Account.init();
            Jumei.Mall.init();
        for(var i in Jumei.Core.afterInitFunctions)
        Jumei.Core.afterInitFunctions[i].call();
 
});
</SCRIPT>
</body>
</html>
          
