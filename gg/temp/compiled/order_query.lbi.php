<?php if (empty ( $this->_var['order_query'] )): ?>
<script>var invalid_order_sn = "<?php echo $this->_var['lang']['invalid_order_sn']; ?>"</script>
<div class="orderbox">
<div class="order_suchen">
<ul>
<li class="top">Bestellung suchen</li>
<li class="topdes">Bitte Ihre Bestell-Nr. eingeben und die Bestellinfo heraussuchen.</li>
<li class="textbox"><form name="ecsOrderQuery"><input name="order_sn" type="text" class="order_text"><input type="button" class="order_but" value="Suchen" onclick="orderQuery()">
</form></li>
</ul>
</div>
<div id="ECS_ORDER_QUERY">
      <?php else: ?>
	  <ul>
      <?php if ($this->_var['order_query']['user_id']): ?>
<li class="otitle"><?php echo $this->_var['lang']['order_number']; ?>：</li><li class="oinfo"><?php echo $this->_var['order_query']['order_sn']; ?></li>
  <?php else: ?>
<li class="otitle"><?php echo $this->_var['lang']['order_number']; ?>：</li>
<li class="oinfo"> <?php echo $this->_var['order_query']['order_sn']; ?>属于匿名订单</li>

  <?php endif; ?>
<li class="otitle"><?php echo $this->_var['lang']['order_status']; ?>：</li><li class="oinfo lila"><?php echo $this->_var['order_query']['order_status']; ?></li>
  <?php if ($this->_var['order_query']['invoice_no']): ?>
<li class="otitle"><?php echo $this->_var['lang']['consignment']; ?>：</li><li class="oinfo"><?php echo $this->_var['order_query']['invoice_no']; ?></li>
  <?php endif; ?>
   <?php if ($this->_var['order_query']['shipping_date']): ?> 
     <li class="otitle"><?php echo $this->_var['lang']['shipping_date']; ?> ：</li><li class="oinfo"><?php echo $this->_var['order_query']['shipping_date']; ?></li>
  <?php endif; ?>
  </ul>
  
  <?php if (! $this->_var['order_query']['user_id']): ?> 
  <ul class="lookorder"> 
  <li class="passtitle">Bestellpasswort:</li>
<li class="passinfo"><form action="user.php?act=order_detail2&order_id=<?php echo $this->_var['order_query']['order_id']; ?>" method="post">
<input type="password" name="password" class="inputbg" id="password"/>
<input type="submit" value="Bestellinfos anschauen" class="but"/>
</form>
</li>
<li class="passinfodes">* Geben Sie bitte die Bestellpassworte ein, mit denen Sie bestellt haben, können Sie Bestellinfos durchschauen.</li>
  </ul>
    <?php else: ?>
	  <ul class="lookorder"> 
  <li >Loggen Sie sich bitte zuerst, dann können Sie <a href="user.php?act=order_detail&order_id=<?php echo $this->_var['order_query']['order_id']; ?>" >Bestellinfos durchsehen</a></li>

  </ul>
  <?php endif; ?>
  
  <?php endif; ?>
</div>
</div>
