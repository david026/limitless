<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>

</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

 <div id="path">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>

<div id="mainbox">

<div id="prolistbox">
 
	  <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
<div class="seltagbox">
<p class="head">Grenzen Sie die Produktanzeige ein:</p>
<ul>
<li><a class="hide" href="#"><?php if ($this->_var['status']['Kategorien']): ?><?php echo $this->_var['status']['Kategorien']; ?><?php else: ?>Kategorien<?php endif; ?></a>
  <ul>

<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
	 <li><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?><font class="num"> <?php if ($this->_var['cat']['num']): ?>(<?php echo $this->_var['cat']['num']; ?>)<?php endif; ?></font></a></li>
     <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
     <li><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?> <font class="num"> (<?php echo $this->_var['child']['num']; ?>)</font></a></li>
       <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
     <li><a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?> (<?php echo $this->_var['childer']['num']; ?>)</a></li>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  </ul>
</li>
<?php if ($this->_var['brands']['1']): ?>
<li><a class="hide" href="#"><?php if ($this->_var['status']['Perlenarten']): ?><?php echo $this->_var['status']['Perlenarten']; ?><?php else: ?>Perlenarten<?php endif; ?></a>
  <ul>
  <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
					<?php if ($this->_var['brand']['selected']): ?>
  <li><span><?php echo $this->_var['brand']['brand_name']; ?></span></li>
  <?php else: ?>
  <li><a href="<?php echo $this->_var['brand']['url']; ?>" title="<?php echo $this->_var['brand']['brand_name']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a></li>
  	<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
</li>
<?php endif; ?>
<?php if ($this->_var['price_grade']['1']): ?>
<li><a class="hide" href="#"><?php if ($this->_var['status']['Preis']): ?><?php echo $this->_var['status']['Preis']; ?><?php else: ?>Preis<?php endif; ?></a>
		<ul>	
			<?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
				<?php if ($this->_var['grade']['selected']): ?>
				  <li><span><?php echo $this->_var['grade']['price_range']; ?></span></li>
				<?php else: ?>
				<li><a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a></li>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
			</li>
			<?php endif; ?>
<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_73925100_1361245201');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_73925100_1361245201']):
?>
<li><a class="hide" href="#"><?php echo $this->_var['filter_attr_0_73925100_1361245201']['filter_attr_name']; ?></a>
<ul>
			<?php $_from = $this->_var['filter_attr_0_73925100_1361245201']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
				<?php if ($this->_var['attr']['selected']): ?>
				<li><span><?php echo $this->_var['attr']['attr_value']; ?></span></li>
				<?php else: ?>
				<li><a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a></li>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
			</li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>			
			
</ul>
</div>
	  <?php endif; ?>
	 


<?php echo $this->fetch('library/goods_list.lbi'); ?>
<?php echo $this->fetch('library/pages.lbi'); ?>	 
</div>
 
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>	


</body>
</html>
