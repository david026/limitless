<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title>Nr.<?php echo $this->_var['goods']['goods_sn']; ?> <?php echo $this->_var['dengji']; ?> <?php echo $this->_var['goods']['goods_style_name']; ?> nur <?php echo $this->_var['goods']['shop_price_formated']; ?> EUR </title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>


<script type="text/javascript" src="themes/zhenzhu/js/action.js"></script>
<script type="text/javascript" src="themes/zhenzhu/js/mzp-packed-me.js"></script>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>

</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

 <div id="path">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>


<div id="mainbox">
<h2 class="nameh2"><?php echo $this->_var['goods']['goods_style_name']; ?></h2> 
<div class="upnext">
      <?php if ($this->_var['prev_good']): ?>
      <a href="<?php echo $this->_var['prev_good']['url']; ?>"> vorheriger Artikel </a> | 
      <?php endif; ?>
	  <?php if ($this->_var['next_good']): ?>
      <a href="<?php echo $this->_var['next_good']['url']; ?>"> nächster Artikel </a>
      <?php endif; ?>
</div>
<div id="desleft">
<div class="destopbg"></div>
<div id="perlenimgbox">
 <div class="imgInfo">
     <a href="<?php echo $this->_var['pictures']['0']['img_url']; ?>" id="zoom1" class="MagicZoom MagicThumb" title="<?php echo $this->_var['goods']['goods_style_name']; ?>">
      <img src="<?php echo $this->_var['pictures']['0']['img_url']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="590" height="393"/>
     </a>
 
    <div style="text-align:right; position:relative; width:100%;">

      <a href="javascript:;" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;"><img alt="zoom" src="themes/zhenzhu/images/zoom.png" /></a>
   
      </div>
      
 
           
     <?php echo $this->fetch('library/goods_gallery.lbi'); ?>
     
</div>
</div> 


<?php if ($this->_var['package_goods_list']): ?>
<div class="package"> 
  
       <?php $_from = $this->_var['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods']):
?>
      
	  
	  
       <div class="one">
	   
	     
          <?php $_from = $this->_var['package_goods']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_list');$this->_foreach['package_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['package_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_list']):
        $this->_foreach['package_goods']['iteration']++;
?>
		  <?php if ($this->_var['goods']['goods_id'] == $this->_var['goods_list']['goods_id']): ?>
		  <div class="packagebox">
		  <span class="name"><?php echo $this->_var['goods_list']['goods_name']; ?><?php echo $this->_var['goods_list']['goods_attr_str']; ?>&nbsp;&nbsp;X <?php echo $this->_var['goods_list']['goods_number']; ?></span>
		   <a href="<?php echo $this->_var['goods_list']['url']; ?>"><img src="<?php echo $this->_var['goods_list']['goods_thumb']; ?>" width="120" height="120" border="0"/></a> 
		   <span class="price"><?php echo $this->_var['lang']['shop_price']; ?><?php echo $this->_var['goods_list']['market_price']; ?></span>
		  </div>
		  <?php endif; ?>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		 
		 
		 
		 
          <?php $_from = $this->_var['package_goods']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_list');$this->_foreach['package_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['package_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_list']):
        $this->_foreach['package_goods']['iteration']++;
?> 
		  <?php if ($this->_var['goods']['goods_id'] != $this->_var['goods_list']['goods_id']): ?>
		   <div class="line"></div>
		  <div class="packagebox">
		  <span class="name"><?php echo $this->_var['goods_list']['goods_name']; ?><?php echo $this->_var['goods_list']['goods_attr_str']; ?>&nbsp;&nbsp;X <?php echo $this->_var['goods_list']['goods_number']; ?></span>
		   <a href="<?php echo $this->_var['goods_list']['url']; ?>"><img src="<?php echo $this->_var['goods_list']['goods_thumb']; ?>" width="120" height="120" border="0"/></a> 
		   <span class="price"><?php echo $this->_var['lang']['shop_price']; ?><?php echo $this->_var['goods_list']['market_price']; ?></span>
		  </div>
		  <?php endif; ?>
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		  
		  
		   </div> 
		   
		   
		  <div class="packagebuy">
		  <span class="name"><?php echo $this->_var['package_goods']['act_name']; ?></span>
		   <span class="orangepirce"><?php echo $this->_var['lang']['old_price']; ?><?php echo $this->_var['package_goods']['subtotal']; ?> €</span>
          <span class="package_price"><?php echo $this->_var['package_goods']['package_price']; ?> €</span>
          <span class="saving"><?php echo $this->_var['lang']['then_old_price']; ?><?php echo $this->_var['package_goods']['saving']; ?> €</span>
		   <p class="but"><a href="javascript:addPackageToCart(<?php echo $this->_var['package_goods']['act_id']; ?>)" title="<?php echo $this->_var['lang']['add_to_cart']; ?>">Jetzt bestellen!</a></p>
		  </div>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     
    </div> <?php endif; ?>

<div class="desc"> 
<?php echo $this->_var['description']; ?>
<br/>
<?php echo $this->_var['goods']['goods_desc']; ?>

</div>	
<div class="keydes">  
<?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
<h4 class="top"><?php echo htmlspecialchars($this->_var['key']); ?></h4> <ul>
 <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
<li>
 <span class="title"><?php echo htmlspecialchars($this->_var['property']['name']); ?>:</span>
 <span class="info"><?php echo $this->_var['property']['value']; ?></span></li>
 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></ul>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
 <?php if ($this->_var['goods']['cat_id'] == 17): ?>
<br/>
<img src="/themes/zhenzhu/images/t/xijie.jpg" width="588" border="0" style="margin-top:10px;"/>
<?php endif; ?>
<?php if ($this->_var['goods']['cat_id'] == 21): ?>
<br/>
<img src="/themes/zhenzhu/images/t/chima.jpg" width="588" border="0" style="margin-top:10px;"/>
<?php endif; ?>


<?php echo $this->fetch('library/goods_tags.lbi'); ?>

  <?php echo $this->fetch('library/comments.lbi'); ?>
<?php if ($this->_var['related_goods']): ?>
<div class="likeperlen">

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

</div>

<div id="desright">

	  <div class="perleninfo">
	       <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
<ul>  <div class="salebox">
       <?php if ($this->_var['promotion']): ?>
	 <div class="flags"><div class="infohot"></div></div>
      <li class="padd">
      <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      <?php echo $this->_var['lang']['activity']; ?>
      <?php if ($this->_var['item']['type'] == "snatch"): ?>
      <a href="snatch.php" title="<?php echo $this->_var['lang']['snatch']; ?>"><?php echo $this->_var['lang']['snatch']; ?></a>
      <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
      <a href="group_buy.php" title="<?php echo $this->_var['lang']['group_buy']; ?>" ><?php echo $this->_var['lang']['group_buy']; ?></a>
      <?php elseif ($this->_var['item']['type'] == "auction"): ?>
      <a href="auction.php" title="<?php echo $this->_var['lang']['auction']; ?>"><?php echo $this->_var['lang']['auction']; ?></a>
      <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
      <a href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>" ><?php echo $this->_var['lang']['favourable']; ?></a>
      <?php endif; ?>
      <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>"><?php echo $this->_var['item']['act_name']; ?></a><br />
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </li>
      <?php endif; ?>
	  
	 <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
      <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
	    <?php if (! $this->_var['promotion']): ?>
	 <div class="flags"><div class="infohot"></div></div>
	
	    <?php endif; ?>
		
      <li>
     <span class="shop_price"><?php echo $this->_var['lang']['promote_price']; ?><?php echo $this->_var['goods']['promote_price']; ?> EUR</span><br />
      <span class="residual_time"><?php echo $this->_var['lang']['residual_time']; ?> <font class="f4" id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></font></span>

      </li>
	  	    <li class="market_price"><?php echo $this->_var['lang']['shop_price']; ?><?php echo $this->_var['goods']['shop_price_formated']; ?> EUR</li>
	   <?php else: ?>
	 
	   <li class="shop_price"> <?php echo $this->_var['lang']['shop_price']; ?><?php echo $this->_var['goods']['shop_price_formated']; ?> EUR</li>
      <?php endif; ?>
	     <?php if ($this->_var['cfg']['show_marketprice']): ?>
       <li class="market_price"><?php echo $this->_var['lang']['market_price']; ?><?php echo $this->_var['goods']['market_price']; ?> EUR</li>
       <li class="your_sale">Sie sparen: EUR <?php echo $this->_var['goods']['save']; ?>(<?php echo $this->_var['goods']['pr_save']; ?>%)</li>
       <?php endif; ?>

<?php if ($this->_var['goods']['is_made'] == 1): ?>
      <li  class="free_shipping">Lieferzeit <?php echo $this->_var['goods']['made_remarks']; ?> Tage.<br /></li>
      <?php else: ?>
<li  class="free_shipping">Auf Lager.  <br /></li>
      <?php endif; ?>
   <?php if ($this->_var['goods']['is_shipping']): ?>
      <li>
   <?php echo $this->_var['lang']['goods_free_shipping']; ?>   
      </li>
 <?php endif; ?>  
  


<li class="show_info">
 
       <?php if ($this->_var['cfg']['show_goodssn']): ?>
       <?php echo $this->_var['lang']['goods_sn']; ?><?php echo $this->_var['goods']['goods_sn']; ?>
       <?php endif; ?>

      
       <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?> 
        <?php if ($this->_var['goods']['goods_number'] == 0): ?>
          <?php echo $this->_var['lang']['goods_number']; ?>
          <?php echo $this->_var['lang']['stock_up']; ?>
        <?php else: ?>
      <?php echo $this->_var['lang']['goods_number']; ?>
          <?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?>
        <?php endif; ?>   
      <?php endif; ?>
    
      </li>

	    <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
       <li>
       <?php echo $this->_var['lang']['goods_brand']; ?>: <a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a>
 </li>
	    <?php endif; ?>
	     <?php if ($this->_var['goods']['give_integral'] > 0): ?>
	     <li><?php echo $this->_var['lang']['goods_give_integral']; ?><?php echo $this->_var['goods']['give_integral']; ?> <?php echo $this->_var['points_name']; ?>
       </li>
	     <?php endif; ?>
	   
     
	   <?php if ($this->_var['cfg']['show_addtime']): ?>
      <li>
      <?php echo $this->_var['lang']['add_time']; ?><?php echo $this->_var['goods']['add_time']; ?>
      </li>
    <?php endif; ?>
      <?php if ($this->_var['goods']['bonus_money']): ?>
      <li>
    <?php echo $this->_var['lang']['goods_bonus']; ?><?php echo $this->_var['goods']['bonus_money']; ?>
      </li>
      <?php endif; ?>
	  
</div>
       <div class="choosetop">Wählen Sie Ihren Perlenschmuck</div>
     
      <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
	
      <li class="choosebox">
      <span class="title"><?php echo $this->_var['spec']['name']; ?>:</span>
        
                    <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                      <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                        <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                        <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                        <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
                        <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                        
                        <?php else: ?>
                        <select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
                        <option label="Bitte wählen" value="-1">Bitte wählen</option>
                          <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                          <option label="<?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?>(<?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?>(<?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?> EUR)<?php endif; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?>(<?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?>(<?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?>(<?php echo $this->_var['value']['format_price']; ?> EUR)<?php endif; ?></option>
                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </select>

                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                      <?php endif; ?>
                      
                      <?php elseif ($this->_var['spec']['attr_type'] == 3): ?>
                       <div class="selimg">
	   					<ul>
                         <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                         <?php if ($this->_var['key'] == 0): ?> <li class="liston" id="selimg_<?php echo $this->_var['spec_key']; ?>_<?php echo $this->_var['key']; ?>"><?php else: ?> <li class="list" id="selimg_<?php echo $this->_var['spec_key']; ?>_<?php echo $this->_var['key']; ?>"><?php endif; ?><a title="<?php echo $this->_var['value']['label']; ?>"  href="javascript:void(0)"  onclick="selectPic(<?php echo $this->_var['key']; ?>,<?php echo $this->_var['spec_key']; ?>,<?php echo $this->_var['value']['id']; ?>);return false;"><img src="themes/zhenzhu/images/color/<?php echo $this->_var['value']['label']; ?>.jpg" alt="<?php echo $this->_var['value']['label']; ?>" /></a><br /><?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php echo $this->_var['value']['price']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['value']['price']; ?><?php else: ?>0<?php endif; ?> €</li>

                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
                        <input type="hidden" id="spec_<?php echo $this->_var['spec_key']; ?>" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['spec']['values']['0']['id']; ?>"/>
                        <input type="hidden" id="selimg_<?php echo $this->_var['spec_key']; ?>_save" value="0" />
                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
	  				 </div>
                    <?php else: ?>
                        
                      <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                      <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                      <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                      <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                    <?php endif; ?>
				      </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      

	     <li class="choosebox">

      <span class="title"><?php echo $this->_var['lang']['number']; ?>：</span>
        <input name="number" type="text" id="number" value="1" size="4" onblur="changePrice()" style="border:1px solid #ccc; "/>
      </li>
	   <?php if ($this->_var['volume_price_list']): ?>
      <li class="handel">
       <span class="top"><?php echo $this->_var['lang']['volume_price']; ?>：</span><br />
       <table width="100%" align="center" border="0" cellpadding="3" cellspacing="1" bgcolor="#e1e1e1">
        <tr>
          <td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['number_to']; ?></strong></td>
          <td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['preferences_price']; ?></strong></td>
        </tr>
        <?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
        <tr>
        <td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['number']; ?></td>
        <td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['format_price']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </table>
      </li>
      <?php endif; ?>
	  	  
	   <li class="pauschale">
       <span class="title"><?php echo $this->_var['lang']['amount']; ?>：</span>
	   <span class="price"><span id="ECS_GOODS_AMOUNT" > </span>&nbsp; EUR</span>
	   <span class="MwSt">inkl. 19% MwSt. </span>
      </li>
      <li class="buybox">

	   <?php if ($this->_var['goods']['is_made'] == 1): ?>
       <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><span>
In den
<br>
<em>Warenkorb</em>
</span>
</strong></a> 
	   <?php else: ?>
	    <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><strong>
        <input type="hidden" id="goods_id" value="<?php echo $this->_var['goods']['goods_id']; ?>"/>
<span>
In den
<br>
<em>Warenkorb</em>
</span>
</strong></a>
	    
	    <?php endif; ?>
		<li class="onlineservice"><span class="Deliverytime">Lieferung in 3 - 5 Tagen.</span>

</li>

      </ul>
      </form>

</div>
<?php echo $this->fetch('library/goods_fittings.lbi'); ?> 
<div class="pearlinfohelp">
<div class="top">Haben Sie Fragen zu dem Produkt?</div>
<ul>
<li>
<a href="http://www.perle-schmuck.com/artikel-105-Warum-Perlen-schmuckcom.html" target="_self" >Warum Perlen-schmuck.com?</a>
</li>
<li><a href="http://www.perle-schmuck.com/artikel-106-Perlenschmuck-nach-Ihrer-Vorstellung.html" target="_self" >Perlenschmuck nach Ihrer Vorstellung</a></li>
<?php echo $this->fetch('library/goods_article.lbi'); ?>
</ul>
<div  class="online_c"><span class="email">E-Mail:<font color="#9900cc">service@perle-schmuck.com</font></span><span class="livechat"></span></div>
</div>

<div id="Convenience">
<ul>
<li><img src="themes/zhenzhu/images/Kostenlose.jpg" alt="Kostenlose  schmuck-schätzungen" /></li>
<li class="two"><img src="themes/zhenzhu/images/geschenke.jpg" alt="Schöne geschenke" /></li>
<li><img src="themes/zhenzhu/images/versandkostenfrei.jpg" alt="versandkostenlos" /></li>
<li class="two"><img src="themes/zhenzhu/images/100tage.jpg" alt="100 Tagen Rückgaberecht" /></li>
<li><img src="themes/zhenzhu/images/Lebenslang.jpg" alt="Lebenslang wartungsfrei" /></li>
<li class="two"><img src="themes/zhenzhu/images/Preisvorteil.jpg" alt="Preisvorteil" /></li>

</ul>

</div>

 <?php echo $this->fetch('library/history.lbi'); ?>


</div>


</div>
 

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var formBuy      = document.forms['ECS_FORMBUY'];
  var attr = getSelectedAttributes(formBuy);
  var qty = formBuy.elements['number'].value;
 
  for (i=0;i<formBuy.length;i++){ 
	if(formBuy.elements[i].value != -1 && formBuy.elements[i].className
														   .search("li_selected")!= -1) 
	{  
		formBuy.elements[i].className = "";
	}
 }
  //alert(document.forms['ECS_FORMBUY'].elements['number'].parentElement);
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>
</html>
