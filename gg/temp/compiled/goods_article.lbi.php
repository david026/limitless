<?php if ($this->_var['goods_article_list']): ?>
<div class="desnewbox">

  <h6 class="top"><span><?php echo $this->_var['lang']['article_releate']; ?></span></h3>
 <ul>
    <?php $_from = $this->_var['goods_article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
   <li> <a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo htmlspecialchars($this->_var['article']['short_title']); ?></a></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 </ul>
</div>
<?php endif; ?>