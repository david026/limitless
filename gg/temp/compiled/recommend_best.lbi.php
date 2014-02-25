<?php if ($this->_var['best_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="recom">

<ul>


  <?php endif; ?>
  <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
  <li>
       
           <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a><br />
     
    <p class="title"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></p>
	          
    <span class="markprice">EUR <?php echo $this->_var['goods']['market_price']; ?> </span>
 
    <?php if ($this->_var['goods']['promote_price'] != ""): ?>
   <span class="shop_price"><font class="lila bold">EUR <?php echo $this->_var['goods']['promote_price']; ?> </font></span>
    <?php else: ?>
    <span class="shop_price"><font class="lila bold">EUR <?php echo $this->_var['goods']['shop_price']; ?> </font></span>
    <?php endif; ?>
      
        </li>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  <?php if ($this->_var['cat_rec_sign'] != 1): ?>

</ul>
</div>

  <?php endif; ?>
<?php endif; ?>
