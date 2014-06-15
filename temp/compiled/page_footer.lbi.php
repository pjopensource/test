 

<div id="footer_container">
  <div id="footer">  
<div class="footer_top">
            <div class="footer_top_bg">
            <div id="footer_links">
<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['topssgoods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['topssgoods']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['topssgoods']['iteration']++;
?>
  <ul class="links<?php echo $this->_foreach['topssgoods']['iteration']; ?>">
                    <li class="links"><?php echo $this->_var['help_cat']['cat_name']; ?></li>
                      <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
  <li><a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a></li>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </ul>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
<?php echo $this->_var['copyright']; ?> <?php if ($this->_var['icp_number']): ?>
  <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a>
  <?php endif; ?> <?php if ($this->_var['service_phone']): ?>客服热线：<?php echo $this->_var['service_phone']; ?> <?php endif; ?><br />
     
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

<?php 
$k = array (
  'name' => 'kefushow',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>