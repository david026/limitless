<div id="append_parent"></div>
<?php if ($this->_var['user_info']): ?>
 Willkommen  <?php echo $this->_var['user_info']['username']; ?>!
<a href="user.php">Mein Konto</a>.
 <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>

<?php elseif ($this->_var['consignee']): ?>
 Willkommen  <?php echo $this->_var['consignee']['email']; ?>!
<a href="user.php">Mein Konto</a>.
 <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>

<?php else: ?>
Willkommen! Melden Sie sich bitte 
 <a href="user.php">hier</a> an. 
 <a href="user.php?act=register">Neu hier</a> ? 
<?php endif; ?>