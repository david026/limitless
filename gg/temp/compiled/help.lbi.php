
<script type="text/javascript" src="js/accordian.pack.js"></script>




<div id="left" style="width:200px;  float:left;">
    <?php if ($this->_var['helps']): ?>
    <div id="basic-accordian" >
        <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['foo']['iteration']++;
?>
              <div id="test<?php echo $this->_var['help_cat']['cat_name']; ?>_header" class="accordion_headings <?php if ($this->_foreach['foo']['iteration'] == $this->_var['c_sid']): ?>header_highlight<?php endif; ?>" ><a href="<?php echo $this->_var['help_cat']['cat_id']; ?>" class="green" title="<?php echo $this->_var['help_cat']['cat_name']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></a></div>
              
              <div id="test<?php echo $this->_var['help_cat']['cat_name']; ?>_content">
                    <div class="accordion_child">
                        <ul>
                            <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <li><a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a></li>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
                    </div>
              </div>
			  
			  <div class="clear"></div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
		<div class="clear"></div>
<?php endif; ?>
</div>
<script language="javascript">
new Accordian('basic-accordian',5,'header_highlight');
</script>

