<div class="top10">

  <div class="top">Bestseller</div>
  <?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['top_goods']['iteration']++;
?>
  <?php if (($this->_foreach['top_goods']['iteration'] - 1) <= 2): ?>
  <ul>

     <li>
      <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="samllimg" /></a>
       <p class="title"> <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_name']; ?></a></p>
         <span class="shop_price"><?php echo $this->_var['lang']['shop_price']; ?><font class="lila bold"><?php echo $this->_var['goods']['shop_price']; ?> €</font></span>
     </li>

 </ul>   <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

 </div>
