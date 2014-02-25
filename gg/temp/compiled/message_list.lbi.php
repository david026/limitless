<div class="messagebox">
      <h3 class="top"><?php echo $this->_var['lang']['message_board']; ?></h3>
      <div class="boxCenterList">
      <?php $_from = $this->_var['msg_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'msg');$this->_foreach['message_lists'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['message_lists']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['msg']):
        $this->_foreach['message_lists']['iteration']++;
?>
      <div class="mesgtitle" >
      <span class="f2"><?php echo $this->_var['msg']['user_name']; ?><?php if ($this->_var['msg']['user_name'] == ''): ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?>：</span><?php if ($this->_var['msg']['id_value'] > 0): ?><?php echo $this->_var['lang']['feed_user_comment']; ?><b><a  href="<?php echo $this->_var['msg']['goods_url']; ?>" target="_blank" title="<?php echo $this->_var['msg']['goods_name']; ?>"><?php echo $this->_var['msg']['goods_name']; ?></a></b><?php endif; ?><font class="f4"><?php echo $this->_var['msg']['msg_title']; ?></font> <span class="f3">(<?php echo $this->_var['msg']['msg_time']; ?>)</span>     </div><?php if ($this->_var['msg']['comment_rank'] > 0): ?><img src="themes/zhenzhu/images/stars<?php echo $this->_var['msg']['comment_rank']; ?>.gif" alt="<?php echo $this->_var['msg']['comment_rank']; ?>" /><?php endif; ?>
 
      <div class="word">
      <?php echo $this->_var['msg']['msg_content']; ?><br>
      <?php if ($this->_var['msg']['re_content']): ?>
       <font class="f2"><?php echo $this->_var['lang']['shopman_reply']; ?></font><br />
       <?php echo $this->_var['msg']['re_content']; ?>
      <?php endif; ?>
      </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
    </div>
  </div>




