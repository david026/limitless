<?php if ($this->_var['related_goods']): ?>
<div class="likeperlen new_xiangguan">

      <h3 class="top"><?php echo $this->_var['lang']['releate_goods']; ?></h3>
   <ul >
      <?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
?>
        <li>
        <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>"><img src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" class= height="188" width="188" /></a>

        <span class="name"><a href="<?php echo $this->_var['releated_goods_data']['url']; ?>" title="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>"><?php echo $this->_var['releated_goods_data']['short_name']; ?></a></span>
        <?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?>
       <span class="price"> <?php echo $this->_var['lang']['promote_price']; ?><font class="f1"><?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?></font></span>
        <?php else: ?>
        <span class="price"> <?php echo $this->_var['lang']['shop_price']; ?><font class="f1"><?php echo $this->_var['releated_goods_data']['shop_price']; ?></font></span>
        <?php endif; ?>
          </li>
       
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 </ul>
    </div>
<?php endif; ?>
