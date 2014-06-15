<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
<script type="text/javascript" src="themes/jumei/images/js/pic.js"></script>
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
<?php echo $this->fetch('library/page_header.lbi'); ?>
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
    <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['top_goods']['iteration']++;
?>
	<li onMouseOver="this.className='hover item'" onMouseOut="this.className='item'" class="item" <?php if ($this->_foreach['top_goods']['iteration'] == 1): ?>style="border-top:none;" <?php endif; ?> >
    <span class="icon i<?php echo $this->_foreach['top_goods']['iteration']; ?>"></span>
    <h3>
     <a href="<?php echo $this->_var['cat']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
    </h3>
    <p>
 <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
  <a href="<?php echo $this->_var['child']['url']; ?>"  target="_blank"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
     
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </p>
   
</li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
</ul>
</div>
</div>
</div>
</div>


<div class="left_shadow" style="margin-bottom: 7px;"></div></div>
<div class="fr" style="width:760px;">
  <?php echo $this->fetch('library/index_ad.lbi'); ?>



    <div class="right_shadow" style="margin-bottom: 4px;"></div>
  <div class="Brand_Flagship_Store">
        <div class="bfs_head">品牌官方旗舰店</div>
        <div class="bfs_content clearfix" >
        <DIV class="bfs_marquee" id="MarqueeDiv1">
<UL onmouseout="hiddenallimgbox(this,event)">

<?php $this->assign('ads_id','2'); ?><?php $this->assign('ads_num','8'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

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
 <?php $this->assign('aahufuphui', tjiansp(6));?>
   <?php $_from = $this->_var['aahufuphui']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['topssegoods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['topssegoods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['topssegoods']['iteration']++;
?>
   	<?php if ($this->_foreach['topssegoods']['iteration'] < 11): ?>
  <LI class="item " id=top1s<?php echo $this->_foreach['topssegoods']['iteration']; ?> onMouseOver="show_goodspic(<?php echo $this->_foreach['topssegoods']['iteration']; ?>,'top1')" >
      
      
       <p class="clearfix tit">
       <em class="fl"><?php echo $this->_foreach['topssegoods']['iteration']; ?></em>
		<A href="<?php echo $this->_var['goods']['url']; ?>" target=_blank class="fl" title="<?php echo $this->_var['goods']['short_style_name']; ?>"><?php echo $this->_var['goods']['short_style_name']; ?></A>
                                    </p>
      
      </LI> 
   <LI class="item hover" id=top1b<?php echo $this->_foreach['topssegoods']['iteration']; ?> style="DISPLAY:none"> 
        <div class="sr_con"  style="margin-top:0px;">
       <p class="clearfix tit">
                                        <em class="fl"><?php echo $this->_foreach['topssegoods']['iteration']; ?></em>
                                  <A href="<?php echo $this->_var['goods']['url']; ?>" target=_blank class="fl"   title="<?php echo $this->_var['goods']['short_style_name']; ?>"><?php echo $this->_var['goods']['short_style_name']; ?></A>
                                    </p>
									<A title="<?php echo $this->_var['goods']['short_style_name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>" target=_blank  class="sr_img" style="padding-left:18px;"><IMG style="OVERFLOW: hidden;margin-top:3px; margin-bottom:3px;" src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" />
                                        </a>
                                        <p class="text"  style="padding-left:18px; padding-top:6px; padding-bottom:6px;"><?php if ($this->_var['goods']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods']['shop_price']; ?>
          <?php endif; ?><?php $this->assign('goumaishu', get_goods_ordernum($GLOBALS['smarty']->_var['goods']['id']));?><span>最近<script>document.write(parseInt(Math.random()*(100)+100));
</script><?php echo $this->_var['goumaishu']; ?>人购买</span></p>                      
          </DIV>
      </LI>      <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <SCRIPT type=text/javascript> window.onload = show_goodspic(1,'top1');</SCRIPT>
</UL></div>
        </div>
    </div>
    <div class="fc_main fl" style="height: 570px; position:relative;">
    <div onmouseout="hiddenallimgbox(this,event)">
    <div style="width:185px;float:left;">
       <div  class="imgbox" style="width:185px; height:190px; overflow:hidden;" onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
     <?php $this->assign('czhuanggg1', ggtp(3,17));?>  
  <?php $_from = $this->_var['czhuanggg1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" width='185' height='190' border='0' /></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div class="imgbox" style="width:185px; height:190px; overflow:hidden;"   onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
                 <?php $this->assign('czhuanggg1', ggtp(3,18));?>  
  <?php $_from = $this->_var['czhuanggg1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div>
       
<div  style=" width:380px; height:380px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
                   <?php $this->assign('czhuanggg1', ggtp(3,20));?>  
  <?php $_from = $this->_var['czhuanggg1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" width='380' height='380' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <div class="imgbox_gray" style="display:none; width:380px; height:380px;"></div>
       </div>
       
       <div style="width:185px; float:left;">
       <div style=" width:185px; height:190px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
                            <?php $this->assign('czhuanggg1', ggtp(3,19));?>  
  <?php $_from = $this->_var['czhuanggg1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div  style=" width:185px; height:190px;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
             <?php $this->assign('czhuanggg1', ggtp(3,21));?>  
  <?php $_from = $this->_var['czhuanggg1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" width='190' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div>
      
       <div >
       <div  style=" width:185px; height:190px; float:left; overflow:hidden;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
             <?php $this->assign('czhuanggg1', ggtp(3,22));?>  
  <?php $_from = $this->_var['czhuanggg1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div style=" width:190px; height:190px; float:left; overflow:hidden;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
                   <?php $this->assign('czhuanggg1', ggtp(3,23));?>  
  <?php $_from = $this->_var['czhuanggg1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" width='190' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
            <div class="imgbox_gray" style="display:none; width:190px; height:190px;"></div>
       </div>
       <div  style=" width:190px; height:190px; float:left; overflow:hidden;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
                    <?php $this->assign('czhuanggg1', ggtp(3,24));?>  
  <?php $_from = $this->_var['czhuanggg1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" width='190' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
            <div class="imgbox_gray" style="display:none; width:190px; height:190px;"></div>
       </div>
       <div style=" width:185px; height:190px; float:left; overflow:hidden;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
             <?php $this->assign('czhuanggg1', ggtp(3,25));?>  
  <?php $_from = $this->_var['czhuanggg1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
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
<?php  $this->assign('hfudd',get_comments(0,3)); // 数据条数 ?>
<li style=" height:100px; *height:98px; overflow:hidden;">
              <?php $_from = $this->_var['hfudd']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['comments']['iteration']++;
?>
                       <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>" class="pic fl" target="_blank">
                            <img title="<?php echo $this->_var['comments']['goods_name']; ?>" src="<?php echo $this->_var['comments']['goods_thumb']; ?>" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="<?php echo $this->_var['comments']['goods_name']; ?>" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>"><?php echo $this->_var['comments']['goods_name']; ?></a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>">买家评论：<?php echo sub_str($this->_var['comments']['content'],60); ?></a></p>
                        </div>
                    </div>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                               
                    </li>
<?php  $this->assign('hfuddyi',get_comments(3,3)); // 数据条数 ?>
<li style=" height:100px; *height:98px; overflow:hidden;">
              <?php $_from = $this->_var['hfuddyi']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['comments']['iteration']++;
?>
                       <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>" class="pic fl" target="_blank">
                            <img title="<?php echo $this->_var['comments']['goods_name']; ?>" src="<?php echo $this->_var['comments']['goods_thumb']; ?>" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="<?php echo $this->_var['comments']['goods_name']; ?>" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>"><?php echo $this->_var['comments']['goods_name']; ?></a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>">买家评论：<?php echo sub_str($this->_var['comments']['content'],60); ?></a></p>
                        </div>
                    </div>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                               
                    </li>
        </ul>
            
    </div>
<SCRIPT type=text/javascript>
/*********向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)***************/
new Marquee("MarqueeDiv7",1,0.1,960,100,20,4000,5000)	//向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)
</SCRIPT>
<div class="floor_bottom">
     <?php $this->assign('pinpai', get_brandsyi(6));?>
		 <?php $_from = $this->_var['pinpai']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brandy');$this->_foreach['fenleipp'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fenleipp']['total'] > 0):
    foreach ($_from AS $this->_var['brandy']):
        $this->_foreach['fenleipp']['iteration']++;
?>
		 <?php if ($this->_foreach['fenleipp']['iteration'] < 10): ?>
	<a href="<?php echo $this->_var['brandy']['url']; ?>" target="_blank"><img src="data/brandlogo/<?php echo $this->_var['brandy']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brandy']['brand_name']); ?> (<?php echo $this->_var['brandy']['goods_num']; ?>)" class="lazy_img"/></a><?php endif; ?> 
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
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
 <?php $this->assign('ddhufuphui', tjiansp(1));?>
   <?php $_from = $this->_var['ddhufuphui']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['topssegoods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['topssegoods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['topssegoods']['iteration']++;
?>
   	<?php if ($this->_foreach['topssegoods']['iteration'] < 6): ?>
  <LI class="item " id=top2s<?php echo $this->_foreach['topssegoods']['iteration']; ?> onMouseOver="show_goodspic(<?php echo $this->_foreach['topssegoods']['iteration']; ?>,'top2')" >
      
      
       <p class="clearfix tit">
                                        <em class="fl"><?php echo $this->_foreach['topssegoods']['iteration']; ?></em>
										<A href="<?php echo $this->_var['goods']['url']; ?>" target=_blank class="fl" title="<?php echo $this->_var['goods']['short_style_name']; ?>"><?php echo $this->_var['goods']['short_style_name']; ?></A>
                                    </p>
      
      </LI> 
   <LI class="item hover" id=top2b<?php echo $this->_foreach['topssegoods']['iteration']; ?> style="DISPLAY:none">
        <div class="sr_con" >
       <p class="clearfix tit">
                                        <em class="fl"><?php echo $this->_foreach['topssegoods']['iteration']; ?></em>
                                  <A href="<?php echo $this->_var['goods']['url']; ?>" target=_blank class="fl"   title="<?php echo $this->_var['goods']['short_style_name']; ?>"><?php echo $this->_var['goods']['short_style_name']; ?></A>
                                    </p>
									<A title="<?php echo $this->_var['goods']['short_style_name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>" target=_blank  class="sr_img" style="padding-left:18px;"><IMG style="OVERFLOW: hidden" src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" />
                                        </a>
                                        <p class="text"  style="padding-left:18px;"><?php if ($this->_var['goods']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods']['shop_price']; ?>
          <?php endif; ?><?php $this->assign('goumaishu', get_goods_ordernum($GLOBALS['smarty']->_var['goods']['id']));?><span>最近<script>document.write(parseInt(Math.random()*(100)+100));
</script><?php echo $this->_var['goumaishu']; ?>人购买</span></p>                      
          </DIV>
      </LI>      <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>    
  <SCRIPT type=text/javascript> window.onload = show_goodspic(1,'top2');</SCRIPT>
</UL>
        
                                </div>
            </div>
        </div>
    <div class="fc_main fl" style="height: 570px; position:relative; ">
    <div onmouseout="hiddenallimgbox(this,event)">
    <div style="width:185px;float:left;">
       <div  class="imgbox" style="width:185px; height:190px; overflow:hidden;" onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
<?php $this->assign('czhuangg1', ggtp(4,26));?>  
  <?php $_from = $this->_var['czhuangg1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   	
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div class="imgbox" style="width:185px; height:190px; overflow:hidden;"   onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
<?php $this->assign('czhuangg1', ggtp(4,27));?>  
  <?php $_from = $this->_var['czhuangg1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div>
       
<div  style=" width:380px; height:380px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
 <?php $this->assign('czhuangg3', ggtp(4,28));?>  
  <?php $_from = $this->_var['czhuangg3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" width='380' height='380' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>         
            <div class="imgbox_gray" style="display:none; width:380px; height:380px;"></div>
       </div>
       
       <div style="width:185px; float:left;">
       <div style=" width:185px; height:190px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
   <?php $this->assign('czhuangg4', ggtp(4,29));?>  
  <?php $_from = $this->_var['czhuangg4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div  style=" width:185px; height:190px;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
<?php $this->assign('czhuangg5', ggtp(4,30));?>  
  <?php $_from = $this->_var['czhuangg5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
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
<?php  $this->assign('chaizhuang',get_comments(0,3)); // 数据条数 ?>
<li style=" height:100px; *height:98px; overflow:hidden;">
              <?php $_from = $this->_var['chaizhuang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['comments']['iteration']++;
?>
                       <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>" class="pic fl" target="_blank">
                            <img title="<?php echo $this->_var['comments']['goods_name']; ?>" src="<?php echo $this->_var['comments']['goods_thumb']; ?>" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="<?php echo $this->_var['comments']['goods_name']; ?>" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>"><?php echo $this->_var['comments']['goods_name']; ?></a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>">买家评论：<?php echo sub_str($this->_var['comments']['content'],60); ?></a></p> 
                        </div>
                    </div>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                               
                    </li>
<?php  $this->assign('chaizhuangyi',get_comments(3,3)); // 数据条数 ?>
<li style=" height:100px; *height:98px; overflow:hidden;">
              <?php $_from = $this->_var['chaizhuangyi']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['comments']['iteration']++;
?>
                       <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>" class="pic fl" target="_blank">
                            <img title="<?php echo $this->_var['comments']['goods_name']; ?>" src="<?php echo $this->_var['comments']['goods_thumb']; ?>" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="<?php echo $this->_var['comments']['goods_name']; ?>" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>"><?php echo $this->_var['comments']['goods_name']; ?></a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>">买家评论：<?php echo sub_str($this->_var['comments']['content'],60); ?></a></p>
                        </div>
                    </div>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                               
                    </li>                        
        </ul>        
    </div>
<SCRIPT type=text/javascript>
/*********向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)***************/
new Marquee("MarqueeDiv6",1,0.1,960,100,20,4000,5000)		//向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)
</SCRIPT>
    
    <div class="floor_bottom">
         <?php $this->assign('pinpai', get_brandsyi(1));?>
		 <?php $_from = $this->_var['pinpai']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brandy');$this->_foreach['fenleipp'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fenleipp']['total'] > 0):
    foreach ($_from AS $this->_var['brandy']):
        $this->_foreach['fenleipp']['iteration']++;
?>
		 <?php if ($this->_foreach['fenleipp']['iteration'] < 10): ?>
	<a href="<?php echo $this->_var['brandy']['url']; ?>" target="_blank"><img src="data/brandlogo/<?php echo $this->_var['brandy']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brandy']['brand_name']); ?> (<?php echo $this->_var['brandy']['goods_num']; ?>)" class="lazy_img"/></a><?php endif; ?> 
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>           
    
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
 <?php $this->assign('qqhufuphui', tjiansp(12));?>    
   <?php $_from = $this->_var['qqhufuphui']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['topssegoods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['topssegoods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['topssegoods']['iteration']++;
?>
   	<?php if ($this->_foreach['topssegoods']['iteration'] < 6): ?>
  <LI class="item " id=top3s<?php echo $this->_foreach['topssegoods']['iteration']; ?> onMouseOver="show_goodspic(<?php echo $this->_foreach['topssegoods']['iteration']; ?>,'top3')" >
      
      
       <p class="clearfix tit">
                                        <em class="fl"><?php echo $this->_foreach['topssegoods']['iteration']; ?></em>
										<A href="<?php echo $this->_var['goods']['url']; ?>" target=_blank class="fl" title="<?php echo $this->_var['goods']['short_style_name']; ?>"><?php echo $this->_var['goods']['short_style_name']; ?></A>
                                    </p>
      
      </LI> 
   <LI class="item hover" id=top3b<?php echo $this->_foreach['topssegoods']['iteration']; ?> style="DISPLAY:none">
        <div class="sr_con" >
       <p class="clearfix tit">
                                        <em class="fl"><?php echo $this->_foreach['topssegoods']['iteration']; ?></em>
                                  <A href="<?php echo $this->_var['goods']['url']; ?>" target=_blank class="fl"   title="<?php echo $this->_var['goods']['short_style_name']; ?>"><?php echo $this->_var['goods']['short_style_name']; ?></A>
                                    </p>
									<A title="<?php echo $this->_var['goods']['short_style_name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>" target=_blank  class="sr_img" style="padding-left:18px;"><IMG style="OVERFLOW: hidden" src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" />
                                        </a>
                                        <p class="text"  style="padding-left:18px;"><?php if ($this->_var['goods']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods']['shop_price']; ?>
          <?php endif; ?><?php $this->assign('goumaishu', get_goods_ordernum($GLOBALS['smarty']->_var['goods']['id']));?><span>最近<script>document.write(parseInt(Math.random()*(100)+100));
</script><?php echo $this->_var['goumaishu']; ?>人购买</span></p>                      
          </DIV>
      </LI>      <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <SCRIPT type=text/javascript> window.onload = show_goodspic(1,'top3');</SCRIPT>
</UL>
                                </div>
            </div>
        </div>
        <div class="fc_main fl" style="height: 570px; position:relative;">
    <div onmouseout="hiddenallimgbox(this,event)">
    <div style="width:185px;float:left;">
       <div  class="imgbox" style="width:185px; height:190px; overflow:hidden;" onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
    <?php $this->assign('xiangqi1', ggtp(5,31));?>  
  <?php $_from = $this->_var['xiangqi1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div class="imgbox" style="width:185px; height:190px; overflow:hidden;"   onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
    <?php $this->assign('xiangqi2', ggtp(5,32));?>  
  <?php $_from = $this->_var['xiangqi2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div>
<div  style=" width:380px; height:380px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
      <?php $this->assign('xiangqi3', ggtp(5,33));?>  
  <?php $_from = $this->_var['xiangqi3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>"  width='380' height='380' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>       
            <div class="imgbox_gray" style="display:none; width:380px; height:380px;"></div>
       </div>
       
       <div style="width:185px; float:left;">
       <div style=" width:185px; height:190px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
         <?php $this->assign('xiangqi4', ggtp(5,34));?>  
  <?php $_from = $this->_var['xiangqi4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>"  width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>     
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div  style=" width:185px; height:190px;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
      <?php $this->assign('xiangqi5', ggtp(5,35));?>  
  <?php $_from = $this->_var['xiangqi5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>"  width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>     
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
<?php  $this->assign('xiangqi',get_comments(0,3)); // 数据条数 ?>
<li style=" height:100px; *height:98px; overflow:hidden;">
              <?php $_from = $this->_var['xiangqi']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['comments']['iteration']++;
?>
                       <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>" class="pic fl" target="_blank">
                            <img title="<?php echo $this->_var['comments']['goods_name']; ?>" src="<?php echo $this->_var['comments']['goods_thumb']; ?>" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="<?php echo $this->_var['comments']['goods_name']; ?>" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>"><?php echo $this->_var['comments']['goods_name']; ?></a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>">买家评论：<?php echo sub_str($this->_var['comments']['content'],60); ?></a></p>
                        </div>
                    </div>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                               
                    </li>
<?php  $this->assign('xiangqiyi',get_comments(3,3)); // 数据条数 ?>
<li style=" height:100px; *height:98px; overflow:hidden;">
              <?php $_from = $this->_var['xiangqiyi']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['comments']['iteration']++;
?>
                       <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>" class="pic fl" target="_blank">
                            <img title="<?php echo $this->_var['comments']['goods_name']; ?>" src="<?php echo $this->_var['comments']['goods_thumb']; ?>" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="<?php echo $this->_var['comments']['goods_name']; ?>" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>"><?php echo $this->_var['comments']['goods_name']; ?></a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>">买家评论：<?php echo sub_str($this->_var['comments']['content'],60); ?></a></p>
                        </div>
                    </div>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                               
                    </li>      
        </ul>      
    </div>
<SCRIPT type=text/javascript>
/*********向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)***************/
new Marquee("MarqueeDiv5",1,0.1,960,100,20,4000,5000)	//向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)
</SCRIPT>
    <div class="floor_bottom">
          <?php $this->assign('pinpai', get_brandsyi(12));?>
		 <?php $_from = $this->_var['pinpai']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brandy');$this->_foreach['fenleipp'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fenleipp']['total'] > 0):
    foreach ($_from AS $this->_var['brandy']):
        $this->_foreach['fenleipp']['iteration']++;
?>
		 <?php if ($this->_foreach['fenleipp']['iteration'] < 10): ?>
	<a href="<?php echo $this->_var['brandy']['url']; ?>" target="_blank"><img src="data/brandlogo/<?php echo $this->_var['brandy']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brandy']['brand_name']); ?> (<?php echo $this->_var['brandy']['goods_num']; ?>)" class="lazy_img"/></a><?php endif; ?> 
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>           
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
 <?php $this->assign('wwhufuph', tjiansp(16));?>  
   <?php $_from = $this->_var['wwhufuph']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['topssegoods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['topssegoods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['topssegoods']['iteration']++;
?>
   	<?php if ($this->_foreach['topssegoods']['iteration'] < 6): ?>
  <LI class="item " id=top4s<?php echo $this->_foreach['topssegoods']['iteration']; ?> onMouseOver="show_goodspic(<?php echo $this->_foreach['topssegoods']['iteration']; ?>,'top4')" >
             <p class="clearfix tit">
                                        <em class="fl"><?php echo $this->_foreach['topssegoods']['iteration']; ?></em>
										<A href="<?php echo $this->_var['goods']['url']; ?>" target=_blank class="fl" title="<?php echo $this->_var['goods']['short_style_name']; ?>"><?php echo $this->_var['goods']['short_style_name']; ?></A>
                                    </p>
      
      </LI> 
   <LI class="item hover" id=top4b<?php echo $this->_foreach['topssegoods']['iteration']; ?> style="DISPLAY:none">
        <div class="sr_con" >
       <p class="clearfix tit">
                                        <em class="fl"><?php echo $this->_foreach['topssegoods']['iteration']; ?></em>
                                  <A href="<?php echo $this->_var['goods']['url']; ?>" target=_blank class="fl"   title="<?php echo $this->_var['goods']['short_style_name']; ?>"><?php echo $this->_var['goods']['short_style_name']; ?></A>
                                    </p>
									<A title="<?php echo $this->_var['goods']['short_style_name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>" target=_blank  class="sr_img" style="padding-left:18px;"><IMG style="OVERFLOW: hidden" src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" />
                                        </a>
                                        <p class="text"  style="padding-left:18px;"><?php if ($this->_var['goods']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods']['shop_price']; ?>
          <?php endif; ?><?php $this->assign('goumaishu', get_goods_ordernum($GLOBALS['smarty']->_var['goods']['id']));?><span>最近<script>document.write(parseInt(Math.random()*(100)+100));
</script><?php echo $this->_var['goumaishu']; ?>人购买</span></p>                      
          </DIV>
      </LI>      <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <SCRIPT type=text/javascript> window.onload = show_goodspic(1,'top4');</SCRIPT>
</UL>
                                </div>
            </div>
        </div>
        <div class="fc_main fl" style="height: 570px; position:relative;">
    <div onmouseout="hiddenallimgbox(this,event)">
    <div style="width:185px;float:left;">
       <div  class="imgbox" style="width:185px; height:190px; overflow:hidden;" onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
         <?php $this->assign('shengtihli1', ggtp(6,36));?>  
  <?php $_from = $this->_var['shengtihli1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>"  width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>     
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div class="imgbox" style="width:185px; height:190px; overflow:hidden;"   onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
           <?php $this->assign('shengtihli2', ggtp(6,37));?>  
  <?php $_from = $this->_var['shengtihli2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>"  width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div>
       
<div  style=" width:380px; height:380px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
       <?php $this->assign('shengtihli3', ggtp(6,38));?>  
  <?php $_from = $this->_var['shengtihli3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>"  width='380' height='380' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
            <div class="imgbox_gray" style="display:none; width:380px; height:380px;"></div>
       </div>
       
       <div style="width:185px; float:left;">
       <div style=" width:185px; height:190px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
           <?php $this->assign('shengtihli4', ggtp(6,39));?>  
  <?php $_from = $this->_var['shengtihli4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>"  width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div  style=" width:185px; height:190px;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
           <?php $this->assign('shengtihli5', ggtp(6,40));?>  
  <?php $_from = $this->_var['shengtihli5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>"  width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
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
<?php  $this->assign('shentihli',get_comments(0,3)); // 数据条数 ?>
<li style=" height:100px; *height:98px; overflow:hidden;">
              <?php $_from = $this->_var['shentihli']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['comments']['iteration']++;
?>
                       <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>" class="pic fl" target="_blank">
                            <img title="<?php echo $this->_var['comments']['goods_name']; ?>" src="<?php echo $this->_var['comments']['goods_thumb']; ?>" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="<?php echo $this->_var['comments']['goods_name']; ?>" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>"><?php echo $this->_var['comments']['goods_name']; ?></a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>">买家评论：<?php echo sub_str($this->_var['comments']['content'],60); ?></a></p>
                        </div>
                    </div>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                               
                    </li>
<?php  $this->assign('shentihliyi',get_comments(3,3)); // 数据条数 ?>
<li style=" height:100px; *height:98px; overflow:hidden;">
              <?php $_from = $this->_var['shentihliyi']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['comments']['iteration']++;
?>
                       <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>" class="pic fl" target="_blank">
                            <img title="<?php echo $this->_var['comments']['goods_name']; ?>" src="<?php echo $this->_var['comments']['goods_thumb']; ?>" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="<?php echo $this->_var['comments']['goods_name']; ?>" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>"><?php echo $this->_var['comments']['goods_name']; ?></a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>">买家评论：<?php echo sub_str($this->_var['comments']['content'],60); ?></a></p>
                        </div>
                    </div>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                               
                    </li>  
        </ul>       
    </div>
<SCRIPT type=text/javascript>
/*********向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)***************/
new Marquee("MarqueeDiv4",1,0.1,960,100,20,4000,5000)	//向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)
</SCRIPT>
    
    <div class="floor_bottom">
           <?php $this->assign('pinpai', get_brandsyi(16));?>
		 <?php $_from = $this->_var['pinpai']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brandy');$this->_foreach['fenleipp'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fenleipp']['total'] > 0):
    foreach ($_from AS $this->_var['brandy']):
        $this->_foreach['fenleipp']['iteration']++;
?>
		 <?php if ($this->_foreach['fenleipp']['iteration'] < 10): ?>
	<a href="<?php echo $this->_var['brandy']['url']; ?>" target="_blank"><img src="data/brandlogo/<?php echo $this->_var['brandy']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brandy']['brand_name']); ?> (<?php echo $this->_var['brandy']['goods_num']; ?>)" class="lazy_img"/></a><?php endif; ?> 
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>            
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
 <?php $this->assign('eehufuph', tjiansp(62));?>  
   <?php $_from = $this->_var['eehufuph']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['topssegoods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['topssegoods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['topssegoods']['iteration']++;
?>
   	<?php if ($this->_foreach['topssegoods']['iteration'] < 6): ?>
  <LI class="item " id=top5s<?php echo $this->_foreach['topssegoods']['iteration']; ?> onMouseOver="show_goodspic(<?php echo $this->_foreach['topssegoods']['iteration']; ?>,'top5')" >
             <p class="clearfix tit">
                                        <em class="fl"><?php echo $this->_foreach['topssegoods']['iteration']; ?></em>
										<A href="<?php echo $this->_var['goods']['url']; ?>" target=_blank class="fl" title="<?php echo $this->_var['goods']['short_style_name']; ?>"><?php echo $this->_var['goods']['short_style_name']; ?></A>
                                    </p>
      
      </LI> 
   <LI class="item hover" id=top5b<?php echo $this->_foreach['topssegoods']['iteration']; ?> style="DISPLAY:none">
        <div class="sr_con" >
       <p class="clearfix tit">
                                        <em class="fl"><?php echo $this->_foreach['topssegoods']['iteration']; ?></em>
                                  <A href="<?php echo $this->_var['goods']['url']; ?>" target=_blank class="fl"   title="<?php echo $this->_var['goods']['short_style_name']; ?>"><?php echo $this->_var['goods']['short_style_name']; ?></A>
                                    </p>
									<A title="<?php echo $this->_var['goods']['short_style_name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>" target=_blank  class="sr_img" style="padding-left:18px;"><IMG style="OVERFLOW: hidden" src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" />
                                        </a>
                                        <p class="text"  style="padding-left:18px;"><?php if ($this->_var['goods']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods']['shop_price']; ?>
          <?php endif; ?><?php $this->assign('goumaishu', get_goods_ordernum($GLOBALS['smarty']->_var['goods']['id']));?><span>最近<script>document.write(parseInt(Math.random()*(100)+100));
</script><?php echo $this->_var['goumaishu']; ?>人购买</span></p>                      
          </DIV>
      </LI>      <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <SCRIPT type=text/javascript> window.onload = show_goodspic(1,'top5');</SCRIPT>
</UL>            </div>
            </div>
        </div>
        <div class="fc_main fl" style="height: 570px; position:relative;">
    <div onmouseout="hiddenallimgbox(this,event)">
    <div style="width:185px;float:left;">
       <div  class="imgbox" style="width:185px; height:190px; overflow:hidden;" onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
               <?php $this->assign('nanrzq1', ggtp(7,41));?>  
  <?php $_from = $this->_var['nanrzq1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>"  width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div class="imgbox" style="width:185px; height:190px; overflow:hidden;"   onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
     <?php $this->assign('nanrzq2', ggtp(7,42));?>  
  <?php $_from = $this->_var['nanrzq2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>"  width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       </div>
       
<div  style=" width:380px; height:380px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
  <?php $this->assign('nanrzq3', ggtp(7,43));?>  
  <?php $_from = $this->_var['nanrzq3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>"  width='380' height='380' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <div class="imgbox_gray" style="display:none; width:380px; height:380px;"></div>
       </div>
       
       <div style="width:185px; float:left;">
       <div style=" width:185px; height:190px; overflow:hidden; float:left;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
       <?php $this->assign('nanrzq4', ggtp(7,44));?>  
  <?php $_from = $this->_var['nanrzq4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>"  width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <div class="imgbox_gray" style="display:none; width:185px; height:190px;"></div>
       </div>
       <div  style=" width:185px; height:190px;" class="imgbox"  onmouseover="showimgbox(this,event);" onmouseout="hiddenimgbox(this,event)">
	      <?php $this->assign('nanrzq5', ggtp(7,45));?>  
  <?php $_from = $this->_var['nanrzq5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');if (count($_from)):
    foreach ($_from AS $this->_var['qiehuan']):
?>
  <a href='<?php echo $this->_var['qiehuan']['ad_link']; ?>' target='_blank'><img src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>"  width='185' height='190' border='0'  alt="<?php echo $this->_var['qiehuan']['ad_name']; ?>"/></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
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
<?php  $this->assign('nanshli',get_comments(0,3)); // 数据条数 ?>
<li style=" height:100px; *height:98px; overflow:hidden;">
              <?php $_from = $this->_var['nanshli']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['comments']['iteration']++;
?>
                       <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>" class="pic fl" target="_blank">
                            <img title="<?php echo $this->_var['comments']['goods_name']; ?>" src="<?php echo $this->_var['comments']['goods_thumb']; ?>" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="<?php echo $this->_var['comments']['goods_name']; ?>" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>"><?php echo $this->_var['comments']['goods_name']; ?></a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>">买家评论：<?php echo sub_str($this->_var['comments']['content'],60); ?></a></p>
                        </div>
                    </div>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                               
                    </li>
<?php  $this->assign('nanshliyi',get_comments(3,3)); // 数据条数 ?>
<li style=" height:100px; *height:98px; overflow:hidden;">
              <?php $_from = $this->_var['nanshliyi']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['comments']['iteration']++;
?>
                       <div class="clearfix item">
                        <a style="margin-top:-5px;" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>" class="pic fl" target="_blank">
                            <img title="<?php echo $this->_var['comments']['goods_name']; ?>" src="<?php echo $this->_var['comments']['goods_thumb']; ?>" />
                        </a>
                        <div class="fl fck_con">
                            <p class="tit"><a target="_blank" title="<?php echo $this->_var['comments']['goods_name']; ?>" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>"><?php echo $this->_var['comments']['goods_name']; ?></a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con" style="display:block; height:50px; width:230px; overflow:hidden;"><a target="_blank" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>">买家评论：<?php echo sub_str($this->_var['comments']['content'],60); ?></a></p>
                        </div>
                    </div>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                               
                    </li>  
        </ul>         
    </div>
<SCRIPT type=text/javascript>
/*********向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)***************/
new Marquee("MarqueeDiv2",1,0.1,960,100,20,4000,5000)	//向上间歇滚动(缓动)(若此处省略最后一个参数52后，则默认为翻屏滚动)
</SCRIPT>
    
    <div class="floor_bottom">
           <?php $this->assign('pinpai', get_brandsyi(62));?>
		 <?php $_from = $this->_var['pinpai']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brandy');$this->_foreach['fenleipp'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fenleipp']['total'] > 0):
    foreach ($_from AS $this->_var['brandy']):
        $this->_foreach['fenleipp']['iteration']++;
?>
		 <?php if ($this->_foreach['fenleipp']['iteration'] < 10): ?>
	<a href="<?php echo $this->_var['brandy']['url']; ?>" target="_blank"><img src="data/brandlogo/<?php echo $this->_var['brandy']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brandy']['brand_name']); ?> (<?php echo $this->_var['brandy']['goods_num']; ?>)" class="lazy_img"/></a><?php endif; ?> 
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>             
                        </div>
</div>
<div class="floor_shadow"></div>
<div class="floor clearfix floor_koubei koubei">
    <div class="fl fk_left">
<div class="zixunad">
<div class="roll">
                 
                       <div id="rollphoto1" class="rollcon">
                           <ul >
	        
<?php $this->assign('ads_id','8'); ?><?php $this->assign('ads_num','2'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

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
           <?php $this->assign('nanrzq',get_comments(0,6)); // 数据条数 ?> 
     <?php $_from = $this->_var['nanrzq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['comments']['iteration']++;
?>
                     <li class="clearfix">
                        <a style="margin-top:-5px;" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>" class="pic fl" target="_blank">
                            <img title="<?php echo $this->_var['comments']['goods_name']; ?>" src="<?php echo $this->_var['comments']['goods_thumb']; ?>" />
                        </a>
                       <div class="fkm_con fl">
                            <p class="tit"><a target="_blank" title="<?php echo $this->_var['comments']['goods_name']; ?>" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>"><?php echo $this->_var['comments']['goods_name']; ?></a></p>
                            <p class="rat">
                                <span class="r5"></span>
                            </p>
                            <p class="con"><a target="_blank" href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>">买家评论：<?php echo sub_str($this->_var['comments']['content'],60); ?></a></p>
                        </div>
           </li>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>    
</ul>
        </div>
    </div>
</div>
<div class="floor_shadow "></div>                         
</div></div>
    <div class="clear"></div>    
<?php echo $this->fetch('library/page_footer.lbi'); ?>
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
          
