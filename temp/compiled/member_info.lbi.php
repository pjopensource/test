<div id="append_parent"></div>
<?php if ($this->_var['user_info']): ?>
  <li>
<?php echo $this->_var['lang']['hello']; ?>，<font class="f4_b"><?php echo $this->_var['user_info']['username']; ?></font>, <?php echo $this->_var['lang']['welcome_return']; ?>！
<a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a>|
 <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>
</li>
<?php else: ?>
   <li>
 <table width="100%" border="0" cellspacing="0" cellpadding="0" align="right">
  <tr>
    <td align="right"><a  href="user.php">登录</a><em>|</em><a href="user.php?act=register">注册</a></td>
<!--
    <td><a href="#"><img src="themes/jumei/images/qq_login.gif"></a><a href=""><img src="themes/jumei/images/sina_login_logo.gif"></a><a href=""><img src="themes/jumei/images/taobao_login_logo.gif"></a></td>
  </tr>
  -->
</table>  
 </li> 
<?php endif; ?>