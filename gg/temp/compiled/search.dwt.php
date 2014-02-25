<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php if ($this->_var['zhjf_url'] == 'Sale'): ?>
<meta name="Keywords" content="günstiger perlenschmuck,perlenketten günstig,perlen ohrring günstig,perlen ohrstecker günstig,perlen ring günstig,perlen Anhänger günstig,perlen Armband günstig" />
<meta name="Description" content="Auf 80% günstiger basiert Perlenkette, -Ring, -Anhänger, -Ohrring, -Ohrstecker und -Armband im Rabatt online kaufen, versandkostenlos liefern.
" />
<?php else: ?>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<?php endif; ?> 


<title><?php if ($this->_var['zhjf_url'] == 'Sale'): ?> Auf 80% günstiger basiert Perlenschmuck im Rabatt  verkaufen <?php else: ?> <?php echo $this->_var['page_title']; ?> <?php endif; ?>  </title>




<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>


 <div id="path">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>


<div id="mainbox">

  
  

  <?php if ($this->_var['action'] == "form"): ?>
  
  <div class="sarchform">

    <h3 class="top"><?php echo $this->_var['lang']['advanced_search']; ?></h3>

      <form action="search.php" method="get" name="advancedSearchForm" id="advancedSearchForm">
    <table border="0" align="left" cellpadding="3" width="740">
      <tr>
        <td valign="top"><?php echo $this->_var['lang']['keywords']; ?>：</td>
        <td>
          <input name="keywords" id="keywords" type="text" size="40" maxlength="120" class="inputBg" value="<?php echo $this->_var['adv_val']['keywords']; ?>" />
          <label for="sc_ds"><input type="checkbox" name="sc_ds" value="1" id="sc_ds" <?php echo $this->_var['scck']; ?> /><?php echo $this->_var['lang']['sc_ds']; ?></label>
          <br /><?php echo $this->_var['lang']['searchkeywords_notice']; ?>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->_var['lang']['category']; ?>：</td>
        <td><select name="category" id="select" style="border:1px solid #ccc;">
            <option value="0"><?php echo $this->_var['lang']['all_category']; ?></option><?php echo $this->_var['cat_list']; ?></select>
        </td>
      </tr>
      <tr>
        <td>Perlen Art：</td>
        <td><select name="brand" id="brand" style="border:1px solid #ccc;">
            <option value="0"><?php echo $this->_var['lang']['all_brand']; ?></option>
            <?php echo $this->html_options(array('options'=>$this->_var['brand_list'],'selected'=>$this->_var['adv_val']['brand'])); ?>
          </select>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->_var['lang']['price']; ?>：</td>
        <td><input name="min_price" type="text" id="min_price" class="inputBg" value="<?php echo $this->_var['adv_val']['min_price']; ?>" size="10" maxlength="8" />
          -
          <input name="max_price" type="text" id="max_price" class="inputBg" value="<?php echo $this->_var['adv_val']['max_price']; ?>" size="10" maxlength="8" />
        </td>
      </tr>
      <?php if ($this->_var['goods_type_list']): ?>
      <tr>
        <td><?php echo $this->_var['lang']['extension']; ?>：</td>
        <td><select name="goods_type" onchange="this.form.submit()" style="border:1px solid #ccc;">
            <option value="0"><?php echo $this->_var['lang']['all_option']; ?></option>
            <?php echo $this->html_options(array('options'=>$this->_var['goods_type_list'],'selected'=>$this->_var['goods_type_selected'])); ?>
          </select>
        </td>
      </tr>
      <?php endif; ?>
      <?php if ($this->_var['goods_type_selected'] > 0): ?>
      <?php $_from = $this->_var['goods_attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
      <?php if ($this->_var['item']['type'] == 1): ?>
      <tr>
        <td><?php echo $this->_var['item']['attr']; ?>：</td>
        <td colspan="3"><input name="attr[<?php echo $this->_var['item']['id']; ?>]" value="<?php echo $this->_var['item']['value']; ?>" class="inputBg" type="text" size="20" maxlength="120" /></td>
      </tr>
      <?php endif; ?>
      <?php if ($this->_var['item']['type'] == 2): ?>
      <tr>
        <td><?php echo $this->_var['item']['attr']; ?>：</td>
        <td colspan="3"><input name="attr[<?php echo $this->_var['item']['id']; ?>][from]" class="inputBg" value="<?php echo $this->_var['item']['value']['from']; ?>" type="text" size="5" maxlength="5" />
          -
          <input name="attr[<?php echo $this->_var['item']['id']; ?>][to]" value="<?php echo $this->_var['item']['value']['to']; ?>"  class="inputBg" type="text" maxlength="5" /></td>
      </tr>
      <?php endif; ?>
      <?php if ($this->_var['item']['type'] == 3): ?>
      <tr>
        <td><?php echo $this->_var['item']['attr']; ?>：</td>
        <td colspan="3"><select name="attr[<?php echo $this->_var['item']['id']; ?>]" style="border:1px solid #ccc;">
            <option value="0"><?php echo $this->_var['lang']['all_option']; ?></option>
            <?php echo $this->html_options(array('options'=>$this->_var['item']['options'],'selected'=>$this->_var['item']['value'])); ?>
          </select></td>
      </tr>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>



      <tr>
        <td colspan="4" align="center"><input type="hidden" name="action" value="form" />
          <input type="submit" name="Submit" class="bnt_blue_1" value="Gehen" /></td>
      </tr>
    </table>
  </form>

  </div>

  <?php endif; ?>



   <?php if (isset ( $this->_var['goods_list'] )): ?>
   
   
<div class="perlenlist">
  <h3 class="top">
    
        <?php if ($this->_var['intromode'] == 'best'): ?>
         <span><?php echo $this->_var['lang']['best_goods']; ?></span>
         <?php elseif ($this->_var['intromode'] == 'new'): ?>
         <span><?php echo $this->_var['lang']['new_goods']; ?></span>
         <?php elseif ($this->_var['intromode'] == 'hot'): ?>
         <span><?php echo $this->_var['lang']['hot_goods']; ?></span>
         <?php elseif ($this->_var['intromode'] == 'promotion'): ?>
         <span><?php echo $this->_var['lang']['promotion_goods']; ?></span>
         <?php else: ?>
         <span><?php echo $this->_var['lang']['search_result']; ?></span>
         <?php endif; ?>
		  </h3>
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
  <?php if ($this->_var['pager']['page_last']): ?><span class="dian">...</span><a class="last" href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['pager']['record_count']; ?></a><?php endif; ?>
		 <span class="listtype">  
          <?php if ($this->_var['goods_list']): ?>
          <form action="search.php" method="post" class="sort" name="listform" id="form">
         
              <select name="sort">
              <?php echo $this->html_options(array('options'=>$this->_var['lang']['sort'],'selected'=>$this->_var['pager']['search']['sort'])); ?>
              </select>
              <select name="order">
              <?php echo $this->html_options(array('options'=>$this->_var['lang']['order'],'selected'=>$this->_var['pager']['search']['order'])); ?>
              </select>
              <input type="image" name="imageField" src="themes/zhenzhu/images/los.jpg" alt="go"/>
              <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
              <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
              <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
              <?php if ($this->_var['key'] != "sort" && $this->_var['key'] != "order"): ?>
                <?php if ($this->_var['key'] == 'keywords'): ?>
                  <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo urldecode($this->_var['item']); ?>" />
                <?php else: ?>
                  <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item']; ?>" />
                <?php endif; ?>
              <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </form>
          <?php endif; ?>
		  </span>
         </div> 
        <?php if ($this->_var['goods_list']): ?>
<ul>
          <form action="compare.php" method="post" name="compareForm" id="compareForm" onsubmit="return compareGoods(this);">
         
         
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                <?php if ($this->_var['goods']['goods_id']): ?>
			
                     <li>
					 	<div style=" position:absolute;">
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
       
    <?php if ($this->_var['goods']['promote_price'] != ""): ?>
   <span class="sale_price"><?php echo $this->_var['lang']['promote_price']; ?><font class="lila bold">EUR <?php echo $this->_var['goods']['promote_price']; ?></font></span>
    <?php else: ?>
	 <span class="markprice">EUR <?php echo $this->_var['goods']['market_price']; ?></span>
    <span class="shop_price"><font class="lila bold">EUR <?php echo $this->_var['goods']['shop_price']; ?></font></span>
    <?php endif; ?>
        </li>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         </ul>
            
          </form>
          <script type="text/javascript">
        <?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

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
        window.onload = function()
        {
          Compare.init();
          fixpng();
        }
        var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
        var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
        var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
        </script>
        <?php else: ?>
        <div style="padding:20px 0px; text-align:center" class="f5" ><?php echo $this->_var['lang']['no_search_result']; ?></div>
        <?php endif; ?>
        </div>
      
     
      <?php echo $this->fetch('library/pages.lbi'); ?>
   <?php endif; ?>


  </div>
  


<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
