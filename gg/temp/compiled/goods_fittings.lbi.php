<?php if ($this->_var['fittings']): ?>
<div id="fittings">

  <div class="top"><span><?php echo $this->_var['lang']['accessories_releate']; ?></span> <a href="javascript:clearChain()">Clear selection</a></div>
<ul>
    <?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_40103100_1361244913');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_40103100_1361244913']):
?>

      <li>
	  <p  id="l<?php echo $this->_var['goods_0_40103100_1361244913']['goods_id']; ?>">
      <a href="javascript:void(0);" target="_blank" tips="123" title="<?php echo htmlspecialchars($this->_var['goods_0_40103100_1361244913']['goods_name']); ?>" onClick="selectChain(<?php echo $this->_var['goods_0_40103100_1361244913']['goods_id']; ?>);return false;"><img src="<?php echo $this->_var['goods_0_40103100_1361244913']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_40103100_1361244913']['name']); ?>" class="B_blue"/>
	  <font class="price">+ <?php echo $this->_var['goods_0_40103100_1361244913']['fittings_price']; ?></font>
	  </a>
	  </p>
   
     <span class="name"> <a href="<?php echo $this->_var['goods_0_40103100_1361244913']['url']; ?>" target="_blank" title="View <?php echo htmlspecialchars($this->_var['goods_0_40103100_1361244913']['goods_name']); ?>">More...</a></span>
      </li>
    
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
<input type="hidden" id="chain_id" value="0">
</div>

<?php endif; ?>




