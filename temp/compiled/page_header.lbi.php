<link href="themes/jumei/images/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
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
                            <li class="sina"><a href="http://weibo.com/u/1915499135" rel="nofollow" target="_blank"><span class="arrow"></span>新浪微博</a></li>
                            <li class="qqblog"><a href="#" rel="nofollow" target="_blank"><span class="arrow"></span>腾讯微博</a></li>
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
           <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
   <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
  
                 
                              </ul>
        </div>
    </div>
    <div id="logo">
		<a href="index.php" id="home"><img src="themes/jumei/images/logo.png" ></a>
        <a id="cart" href="flow.php" style="background:none; margin-left:715px;"><img src="themes/jumei/images/gouwudd.jpg" ></a>
        	
</div>
    <div class="clear"></div>
    <div id="top_menu" >
        <div id="top_nav">
                    <div style="float: left; width:720px;">
  <UL class=mainmenu id=mainmenu>
    

  
  
      <LI class=mainmenu_li <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> style="background:#d4062d"<?php endif; ?> ><a href="index.php"><?php echo $this->_var['lang']['home']; ?></a></LI>
	    <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
                  <LI onMouseOver="sw_nav('<?php echo $this->_foreach['nav_middle_list']['iteration']; ?>',1);" onMouseOut="sw_nav('<?php echo $this->_foreach['nav_middle_list']['iteration']; ?>',0);"   <?php if ($this->_var['nav']['active'] == 1): ?> style="background:#d4062d"<?php endif; ?>>
        <DIV class="mainmenu_li" id=HandleLI_<?php echo $this->_foreach['nav_middle_list']['iteration']; ?> >
                        <a href="<?php echo $this->_var['nav']['url']; ?>"><?php echo $this->_var['nav']['name']; ?></a></DIV>
		  <?php $this->assign('catchild', get_child_tree($GLOBALS['smarty']->_var['nav']['cid']));?>  
	  <?php if ($this->_var['nav']['cid']): ?>
	    <?php if ($this->_var['catchild']): ?>
        <DIV id=DisSub_<?php echo $this->_foreach['nav_middle_list']['iteration']; ?> style="DISPLAY:none; Z-INDEX: 999; POSITION: relative; _top:-38px; _left:-54px;">
          <DIV class="layer">
            <DIV class=layer_left>
              <DL>
             <?php $_from = $this->_var['catchild']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
        <DD><a  href="<?php echo $this->_var['child']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['child']['name']); ?>"  target="_blank"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></DD>
         
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              </DL>
            </DIV>
            
          </DIV>
        </DIV>
           <?php endif; ?>     <?php endif; ?>
              </LI>           
		 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>			   	   
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
    <div class="mall_nav_box" <?php if (! $this->_var['index']): ?> style="background:#F2F2F2"<?php endif; ?>>
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
	<?php if ($this->_var['searchkeywords']): ?>
   <?php echo $this->_var['lang']['hot_search']; ?> ：
   <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
   <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a>&nbsp;&nbsp;
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <?php endif; ?>
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
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
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
