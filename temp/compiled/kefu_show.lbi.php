<link href="OKQQ/images/common.css" rel="stylesheet" type="text/css"/>

<?php echo $this->smarty_insert_scripts(array('files'=>'FixedKF.js')); ?>

<?php if ($this->_var['kefu']['kefushow'] == 1): ?>



<style>

#BottomNav {
/*background: #9F6;*/
margin:0 auto;
z-index: 999;
position: fixed;
<?php if ($this->_var['kefu']['show'] == 0): ?>
top: <?php echo $this->_var['kefu']['showlefttop']; ?>px;
left: <?php echo $this->_var['kefu']['showleft']; ?>px;
<?php else: ?>
top: <?php echo $this->_var['kefu']['showrighttop']; ?>px;
right: <?php echo $this->_var['kefu']['showright']; ?>px;
<?php endif; ?>

width:120px;
_position: absolute;
_top: expression(documentElement.scrollTop-10 + documentElement.clientHeight-this.offsetHeight);
overflow: visible;}

</style>

<script language="javascript">
	function xianshi()
	{
		var showone = document.getElementById('show_one');
		var showtwo = document.getElementById('show_two');
		showone.style.display = "none"; 
		showtwo.style.display = "block"; 	
	}
	
	function guanbi()
	{
		var showone = document.getElementById('show_one');
		var showtwo = document.getElementById('show_two');
		showone.style.display = "block"; 
		showtwo.style.display = "none"; 	
	}
	
</script>



<div id="BottomNav">
<?php if ($this->_var['kefu']['skin'] == 1): ?>


<div class="shrink_s1" id="show_one" <?php if ($this->_var['kefu']['fs_show'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>><a href="javascript:xianshi();"><img src="OKQQ/images/s1/shrink.png"/></a></div>
<div class="expansion_s1" <?php if ($this->_var['kefu']['fs_show'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="show_two">
	<div><a href="javascript:guanbi();"title="点击关闭"><img src="OKQQ/images/s1/close.jpg" /></a></div>
    <div><img src="OKQQ/images/s1/kfbg.jpg" /></div>
    <div class="common common_s1"><?php echo $this->fetch('/library/kefu_showone.lbi'); ?></div>
     <div><a href="javascript:void(0);"onclick='window.scrollTo(0,0);' title="返回顶部"><img src="OKQQ/images/s1/gotop.jpg" /></a></div>
    <div><img src="OKQQ/images/s1/endbg.jpg" /></div>
</div>
<?php endif; ?>

<?php if ($this->_var['kefu']['skin'] == 2): ?>

<div class="shrink_s2" id="show_one" <?php if ($this->_var['kefu']['fs_show'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>>
<a href="javascript:xianshi();"><img src="OKQQ/images/s2/shrink.jpg" /></a></div>

<div class="expansion_s2" <?php if ($this->_var['kefu']['fs_show'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="show_two">
	<div><a href="javascript:guanbi();"title="点击关闭"><img src="OKQQ/images/s2/close.jpg" /></a></div>
    <div><img src="OKQQ/images/s2/kfbg.jpg" /></div>
    <div class="common common_s2">
    <?php echo $this->fetch('/library/kefu_showone.lbi'); ?>
    </div>
    <div><a href="javascript:void(0);"onclick='window.scrollTo(0,0);' title="返回顶部"><img src="OKQQ/images/s2/gotop.jpg" /></a></div>
</div>
<?php endif; ?>

<?php if ($this->_var['kefu']['skin'] == 3): ?>



<div class="shrink_s3" id="show_one" <?php if ($this->_var['kefu']['fs_show'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>>
<a href="javascript:xianshi();"><img src="OKQQ/images/s3/shrink.jpg" /></a></div>

<div class="expansion_s3" <?php if ($this->_var['kefu']['fs_show'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="show_two">
	<div><a href="javascript:guanbi();"title="点击关闭"><img src="OKQQ/images/s3/close.png" /></a></div>
    <div><img src="OKQQ/images/s3/kfbg.jpg" /></div>
    <div class="common common_s3"><?php echo $this->fetch('/library/kefu_showone.lbi'); ?></div>
    <div><a href="javascript:void(0);"onclick='window.scrollTo(0,0);' title="返回顶部"><img src="OKQQ/images/s3/endbg.png" /></a></div>
</div>
<?php endif; ?>

<?php if ($this->_var['kefu']['skin'] == 4): ?>

<div class="shrink_s4" id="show_one" <?php if ($this->_var['kefu']['fs_show'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>>
<a href="javascript:xianshi();"><img src="OKQQ/images/s4/shrink.jpg" /></a></div>

<div class="expansion_s4" <?php if ($this->_var['kefu']['fs_show'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="show_two">
	<div><a href="javascript:guanbi();"title="点击关闭"><img src="OKQQ/images/s4/close.png" /></a></div>
    <div><img src="OKQQ/images/s4/kfbg.png" /></div>
    <div class="common common_s4"><?php echo $this->fetch('/library/kefu_showone.lbi'); ?></div>
    <div><a href="javascript:void(0);"onclick='window.scrollTo(0,0);' title="返回顶部"><img src="OKQQ/images/s4/endbg.png" /></a></div>
</div>
<?php endif; ?>

<?php if ($this->_var['kefu']['skin'] == 5): ?>

<div class="shrink_s5" id="show_one" <?php if ($this->_var['kefu']['fs_show'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>><a href="javascript:xianshi();"><img src="OKQQ/images/s5/shrink.jpg" /></a></div>

<div class="expansion_s5" <?php if ($this->_var['kefu']['fs_show'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="show_two">
	<div><a href="javascript:guanbi();"title="点击关闭"><img src="OKQQ/images/s5/close.jpg" /></a></div>
    <div><img src="OKQQ/images/s5/kfbg.jpg" /></div>
    <div class="common common_s5"><?php echo $this->fetch('/library/kefu_showone.lbi'); ?></div>
    <div><a href="javascript:void(0);"onclick='window.scrollTo(0,0);' title="返回顶部"><img src="OKQQ/images/s5/endbg.png" /></a></div>
</div>
<?php endif; ?>

<?php if ($this->_var['kefu']['skin'] == 6): ?>

<div class="shrink_s6" id="show_one" <?php if ($this->_var['kefu']['fs_show'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>><a href="javascript:xianshi();"><img src="OKQQ/images/s6/shrink.png" /></a></div>

<div class="expansion_s6" <?php if ($this->_var['kefu']['fs_show'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="show_two">
	<div><a href="javascript:guanbi();"title="点击关闭"><img src="OKQQ/images/s6/close.jpg" /></a></div>
    <div class="common common_s6"><?php echo $this->fetch('/library/kefu_showone.lbi'); ?></div>
    <div><a href="javascript:void(0);"onclick='window.scrollTo(0,0);' title="返回顶部"><img src="OKQQ/images/s6/endbg.jpg" /></a></div>
</div>
<?php endif; ?>

<?php if ($this->_var['kefu']['skin'] == 7): ?>



<div class="shrink_s7" id="show_one" <?php if ($this->_var['kefu']['fs_show'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>>
<a href="javascript:xianshi();"><img src="OKQQ/images/s7/shrink.png" /></a></div>

<div class="expansion_s7" <?php if ($this->_var['kefu']['fs_show'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="show_two">
	<div class="close7"><a href="javascript:guanbi();"title="点击关闭"><img src="OKQQ/images/s7/close.png" /></a></div>
    <div class="close7"><img src="OKQQ/images/s7/kfbg.png" /></div>
    <div class="common common_s7"><?php echo $this->fetch('/library/kefu_showone.lbi'); ?></div>
    <div><a href="javascript:void(0);"onclick='window.scrollTo(0,0);' title="返回顶部"><img src="OKQQ/images/s7/endbg.png" /></a></div>
</div>

<?php endif; ?>


<?php if ($this->_var['kefu']['skin'] == 8): ?>

<div class="shrink_s8" id="show_one" <?php if ($this->_var['kefu']['fs_show'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>><a href="javascript:xianshi();"><img src="OKQQ/images/s8/shrink.jpg" /></a></div>

<div class="expansion_s8" <?php if ($this->_var['kefu']['fs_show'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="show_two">
	<div><a href="javascript:guanbi();"title="点击关闭"><img src="OKQQ/images/s8/close.jpg" /></a></div>
    <div><img src="OKQQ/images/s8/kfbg.jpg" /></div>
    <div class="common common_s8"><?php echo $this->fetch('/library/kefu_showone.lbi'); ?></div>
    <div><a href="javascript:void(0);"onclick='window.scrollTo(0,0);' title="返回顶部"><img src="OKQQ/images/s8/endbg.jpg" /></a></div>
</div>
<?php endif; ?>


<?php if ($this->_var['kefu']['skin'] == 9): ?>

<div class="shrink_s9" id="show_one" <?php if ($this->_var['kefu']['fs_show'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>><a href="javascript:xianshi();"><img src="OKQQ/images/s9/shrink.jpg" /></a></div>

<div class="expansion_s9" <?php if ($this->_var['kefu']['fs_show'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="show_two">
	<div><a href="javascript:guanbi();"title="点击关闭"><img src="OKQQ/images/s9/close.jpg" /></a></div>
    <div><img src="OKQQ/images/s9/kfbg.jpg" /></div>
    <div class="common common_s9"><?php echo $this->fetch('/library/kefu_showone.lbi'); ?></div>
    <div><a href="javascript:void(0);"onclick='window.scrollTo(0,0);' title="返回顶部"><img src="OKQQ/images/s9/endbg.jpg" /></a></div>
</div>
<?php endif; ?>



<?php if ($this->_var['kefu']['skin'] == 10): ?>


<div class="shrink_s10" id="show_one" <?php if ($this->_var['kefu']['fs_show'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>><a href="javascript:xianshi();"><img src="OKQQ/images/s10/shrink.png" /></a></div>

<div class="expansion_s10" <?php if ($this->_var['kefu']['fs_show'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="show_two">
	<div><a href="javascript:guanbi();"title="点击关闭"><img src="OKQQ/images/s10/close.png" /></a></div>
    <div class="kfbg10"><img src="OKQQ/images/s10/kfbg.png" /></div>
    <div class="common common_s10"><?php echo $this->fetch('/library/kefu_showone.lbi'); ?></div>
    <div ><a href="javascript:void(0);"onclick='window.scrollTo(0,0);' title="返回顶部"><img src="OKQQ/images/s10/gotop.jpg" /></a></div>
    <div><img src="OKQQ/images/s10/endbg.png" /></div>
</div>

<?php endif; ?>


<?php if ($this->_var['kefu']['skin'] == 11): ?>

<div class="shrink_s11" id="show_one" <?php if ($this->_var['kefu']['fs_show'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>><a href="javascript:xianshi();"><img src="OKQQ/images/s11/shrink.png" /></a></div>

<div class="expansion_s11" <?php if ($this->_var['kefu']['fs_show'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="show_two">
	<div><a href="javascript:guanbi();"title="点击关闭"><img src="OKQQ/images/s11/close.png" /></a></div>
    <div class="common common_s11"><?php echo $this->fetch('/library/kefu_showone.lbi'); ?></div>
    <div ><a href="javascript:void(0);"onclick='window.scrollTo(0,0);' title="返回顶部"><img src="OKQQ/images/s11/gotop.jpg" /></a></div>
    <div><img src="OKQQ/images/s11/endbg.png" /></div>
</div>
<?php endif; ?>

<?php if ($this->_var['kefu']['skin'] == 12): ?>

<div class="shrink_s12" id="show_one" <?php if ($this->_var['kefu']['fs_show'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>><a href="javascript:xianshi();"><img src="OKQQ/images/s12/shrink.jpg" /></a></div>

<div class="expansion_s12" <?php if ($this->_var['kefu']['fs_show'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="show_two">
	<div><a href="javascript:guanbi();"title="点击关闭"><img src="OKQQ/images/s12/close.jpg" /></a></div>
    <div><img src="OKQQ/images/s12/kfbg.jpg" /></div>
    <div class="common common_s12"><?php echo $this->fetch('/library/kefu_showone.lbi'); ?></div>
    <div><a href="javascript:void(0);"onclick='window.scrollTo(0,0);' title="返回顶部"><img src="OKQQ/images/s12/endbg.jpg" /></a></div>
</div>
<?php endif; ?>



<?php if ($this->_var['kefu']['skin'] == 13): ?>

<div class="shrink_s13" id="show_one" <?php if ($this->_var['kefu']['fs_show'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>><a href="javascript:xianshi();"><img src="OKQQ/images/s13/shrink.jpg" /></a></div>

<div class="expansion_s13" <?php if ($this->_var['kefu']['fs_show'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="show_two">
	<div><a href="javascript:guanbi();"title="点击关闭"><img src="OKQQ/images/s13/close.png" /></a></div>
    <div class="common common_s13"><?php echo $this->fetch('/library/kefu_showone.lbi'); ?></div>
    <div><a href="javascript:void(0);"onclick='window.scrollTo(0,0);' title="返回顶部"><img src="OKQQ/images/s13/endbg.png" /></a></div>
</div>
<?php endif; ?>



<?php if ($this->_var['kefu']['skin'] == 14): ?>

<div class="shrink_s14" id="show_one" <?php if ($this->_var['kefu']['fs_show'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>><a href="javascript:xianshi();"><img src="OKQQ/images/s14/shrink.jpg" /></a></div>

<div class="expansion_s14" <?php if ($this->_var['kefu']['fs_show'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="show_two">
	<div><a href="javascript:guanbi();"title="点击关闭"><img src="OKQQ/images/s14/close.jpg" /></a></div>
    <div><img src="OKQQ/images/s14/kfbg.jpg" /></div>
    <div class="common common_s14"><?php echo $this->fetch('/library/kefu_showone.lbi'); ?></div>
    <div><a href="javascript:void(0);"onclick='window.scrollTo(0,0);' title="返回顶部"><img src="OKQQ/images/s14/endbg.jpg" /></a></div>
</div>
<?php endif; ?>



<?php if ($this->_var['kefu']['skin'] == 15): ?>

<div class="shrink_s15" id="show_one" <?php if ($this->_var['kefu']['fs_show'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>><a href="javascript:xianshi();"><img src="OKQQ/images/s15/shrink.png" /></a></div>

<div class="expansion_s15" <?php if ($this->_var['kefu']['fs_show'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="show_two">
	<div><a href="javascript:guanbi();" title="点击关闭"><img src="OKQQ/images/s15/close.png" /></a></div>
    <div><img src="OKQQ/images/s15/kfbg.jpg" /></div>
    <div class="common common_s15"><?php echo $this->fetch('/library/kefu_showone.lbi'); ?></div>
    <div><a href="javascript:void(0);"onclick='window.scrollTo(0,0);' title="返回顶部"><img src="OKQQ/images/s15/endbg.jpg" /></a></div>
</div>
<?php endif; ?>


<?php if ($this->_var['kefu']['skin'] == 16): ?>

<div class="shrink_s16" id="show_one" <?php if ($this->_var['kefu']['fs_show'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>><a href="javascript:xianshi();"><img src="OKQQ/images/s16/shrink.jpg" /></a></div>

<div class="expansion_s16" <?php if ($this->_var['kefu']['fs_show'] == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?> id="show_two">
	<div><a href="javascript:guanbi();" title="点击关闭"><img src="OKQQ/images/s16/close.jpg" /></a></div>
    <div><img src="OKQQ/images/s16/kfbg.jpg" /></div>
    <div class="common common_s16"><?php echo $this->fetch('/library/kefu_showone.lbi'); ?></div>
    <div><a href="javascript:void(0);"onclick='window.scrollTo(0,0);' title="返回顶部"><img src="OKQQ/images/s16/endbg.jpg" /></a></div>
</div>
<?php endif; ?>




</div>

<?php endif; ?>

