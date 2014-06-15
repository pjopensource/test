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
			  <?php $this->assign('syqiehuantp', qiehuantp(1));?>  
 <?php $_from = $this->_var['syqiehuantp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qiehuan');$this->_foreach['qiehuantpid'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['qiehuantpid']['total'] > 0):
    foreach ($_from AS $this->_var['qiehuan']):
        $this->_foreach['qiehuantpid']['iteration']++;
?>
        			<li><a href="<?php echo $this->_var['qiehuan']['ad_link']; ?>"><img border="0" src="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_code']); ?>" alt="<?php echo htmlspecialchars($this->_var['qiehuan']['ad_name']); ?>" width="760" height="311"/></a></li>	 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
					
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