<script>
//获取类型
function checktype(){
   var strzhjf =document.getElementById("zhjf").value; 
  // alert(strzhjf);
	  if(strzhjf==1){
  		 location.href ='<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=ASC#goods_list';
      }
	  if(strzhjf==2){
  		 location.href ='<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=DESC#goods_list';
      }
	  if(strzhjf==3){
  		 location.href ='<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=ASC#goods_list';
      }
	  if(strzhjf==4){
  		 location.href ='<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=DESC#goods_list';
      }
	  if(strzhjf==5){
  		 location.href ='<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=ASC#goods_list';
      }
	  if(strzhjf==6){
  		 location.href ='<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=DESC#goods_list';
      }
}
</script>
<div id="pager">


  <?php if ($this->_var['pager']['page_prev']): ?><a class="prev" href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a><?php endif; ?>
    <?php if ($this->_var['pager']['page_next']): ?><a class="next" href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a><?php endif; ?>

    <?php if ($this->_var['pager']['page_first']): ?><a href="<?php echo $this->_var['pager']['page_first']; ?>">1</a><span class="dian">...</span><?php endif; ?>
  <?php if ($this->_var['pager']['page_count'] != 1): ?>
    <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>
      <span class="page_now"><?php echo $this->_var['key']; ?></span>
      <?php else: ?>
      <a href="<?php echo $this->_var['item']; ?>"><?php echo $this->_var['key']; ?></a>
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <?php endif; ?>
  <?php if ($this->_var['pager']['page_last']): ?><span class="dian">...</span><a class="last" href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['pager']['page_count']; ?></a><?php endif; ?>
  
<span class="listtype">  
  
  <form method="GET" class="sort" name="listform">

<select name="zhjf" id="zhjf" onchange="checktype()">
   <option value="0">Sortieren nach</option>
  	<option value="1" <?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'ASC'): ?>selected="selected"<?php endif; ?>>Einstellzeit: früh zuerst</option>
	<option value="2" <?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>selected="selected"<?php endif; ?>>Einstellzeit: spät zuerst</option>
	
    <option value="3" <?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>selected="selected"<?php endif; ?>>Preis: niedrigster zuerst</option>
	<option value="4" <?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'DESC'): ?>selected="selected"<?php endif; ?>> Preis: höchster zuerst</option>
	
	<option value="5" <?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'ASC'): ?>selected="selected"<?php endif; ?>>Aktualisierung: früh zuerst
</option>
	<option value="6" <?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>selected="selected"<?php endif; ?>>Aktualisierung: spät zuerst</option>
	
</select>


  <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
  <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
  <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
  <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
  <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
  <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
  <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
  <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
  </form>
  </span>
  </div>
  <div class="perlenlist">
<ul>
    <?php if ($this->_var['category'] > 0): ?>
  <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <?php endif; ?>


	<?php if (! $this->_var['goods_list']): ?>
   Zurzeit leider haben wir keine von Ihnen geforderte Ware. Sie <a href="http://www.perle-schmuck.com/artikel-73-Impressum.html"><strong>können sich an uns</strong></a> wenden, um die neuesten Produkt Informationen zu bekommen.
    <?php endif; ?>
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
    <?php if ($this->_var['goods']['goods_id']): ?>
     <li>        <div style=" position:absolute;">
              <?php if ($this->_var['goods']['watermark_img'] == watermark_promote_small): ?>
              <img src="themes/zhenzhu/images/list_sale.png" alt=""  />
              <?php else: ?>
              <?php if ($this->_var['goods']['watermark_img'] == watermark_new_small): ?>
              <img src="themes/zhenzhu/images/list_neu.png" alt=""  />
              <?php else: ?>
              <?php if ($this->_var['goods']['watermark_img'] == watermark_hot_small): ?>
              <img src="themes/zhenzhu/images/list_hot.png" alt=""  />
              <?php else: ?>
              <?php if ($this->_var['goods']['watermark_img'] == watermark_best_small): ?>
              <img src="themes/zhenzhu/images/list_best.png" alt=""  />
              <?php endif; ?>
              <?php endif; ?>
              <?php endif; ?>
              <?php endif; ?></div>
           <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" class="goodsimg" /></a><br />
           <p class="title"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['goods_name']; ?></a></p>
                 <?php if ($this->_var['show_marketprice']): ?>
    <span class="markprice">EUR <?php echo $this->_var['goods']['market_price']; ?> </span>
    <?php endif; ?>
    <?php if ($this->_var['goods']['promote_price'] != ""): ?>
   <span class="shop_price"><font class="lila bold">EUR <?php echo $this->_var['goods']['promote_price']; ?> </font></span>
    <?php else: ?>
    <span class="shop_price"><font class="lila bold">EUR <?php echo $this->_var['goods']['shop_price']; ?> </font></span>
    <?php endif; ?>
      </li>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
   

  <?php if ($this->_var['category'] > 0): ?>
  </form>
  <?php endif; ?>
</ul>

</div>

<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>