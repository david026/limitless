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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

 <div id="path">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>

<div class="help">
<div class="help_banner"><img src="themes/zhenzhu/images/pe_index_top_banner.jpg" /></div>


<div class="main">

    <?php echo $this->fetch('library/help.lbi'); ?>
	<div class="AreaR" style="margin-left:20px; width:740px; display:inline; float:right;">
 
  
    <div class="helpCenterList" style="border:none;">
      <div class="help_list">
	  	<div class="help_list_title"><?php echo $this->_var['lang']['article_title']; ?></p></div>
		<ul>
		<?php $_from = $this->_var['artciles_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
			<li><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" ><?php echo $this->_var['article']['short_title']; ?></a><span><?php echo $this->_var['article']['add_time']; ?></span></li>     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	  </div>    
    


  

  <span style="float:left;"><?php echo $this->fetch('library/pages.lbi'); ?></span>

  </div>  
  
</div>

</div>




  
  

</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>

</html>
