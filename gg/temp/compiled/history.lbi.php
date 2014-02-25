<div class="history" id='history_div'>

  <h3 class="top"><?php echo $this->_var['lang']['view_history']; ?> <span id="clear_history" class="clear_h"><a onclick="clear_history()"> Löschen</a></span></h3>
<ul>
    <?php 
$k = array (
  'name' => 'history',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
</ul>
</div>

<script type="text/javascript">

function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '<?php echo $this->_var['lang']['no_history']; ?>';
}
</script>