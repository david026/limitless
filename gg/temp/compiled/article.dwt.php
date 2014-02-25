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

<div class="help_banner"><img src="themes/zhenzhu/images/pe_index_top_banner.jpg" /></div>

  
  <div class="mainbox">
  <div class="help">
  <div class="AreaL">


<div class="block">
  <div class="box">
    <?php echo $this->fetch('library/help.lbi'); ?>
  </div>
</div>
<div class="blank"></div>

  <div class="AreaR">
    <div class="box">
     <div class="box_1">
      <div class="help_right">
         <div class="tc" style="padding:4px; margin-bottom:10px; width:720px; height:20px; text-align:center; border-bottom:1px solid #999999;">
         <font class="f5 f6" style="font-size:17px; height:20px; font-weight:bold; width:540px; text-align:left; float:left;"><?php echo htmlspecialchars($this->_var['article']['title']); ?></font> <font class="f3" style="float:right; height:20px; text-align:right;"> <?php echo $this->_var['article']['add_time']; ?></font>
         </div>
         <?php if ($this->_var['article']['content']): ?>
         <div class="article_des"> <?php echo $this->_var['article']['content']; ?></div>
         <?php endif; ?>
         <?php if ($this->_var['article']['open_type'] == 2 || $this->_var['article']['open_type'] == 1): ?><br />
         <div><a href="<?php echo $this->_var['article']['file_url']; ?>" target="_blank"><?php echo $this->_var['lang']['relative_file']; ?></a></div>
          <?php endif; ?>
         <div class="fenye_top">
         
          <?php if ($this->_var['next_article']): ?>
            <?php echo $this->_var['lang']['next_article']; ?>:<a href="<?php echo $this->_var['next_article']['url']; ?>" class="f6"><?php echo $this->_var['next_article']['title']; ?></a><br />
          <?php endif; ?>
          
          <?php if ($this->_var['prev_article']): ?>
            <?php echo $this->_var['lang']['prev_article']; ?>:<a href="<?php echo $this->_var['prev_article']['url']; ?>" class="f6"><?php echo $this->_var['prev_article']['title']; ?></a>
          <?php endif; ?>
         </div>
      </div>
    </div>
	
  </div>
  <div class="blank"></div>
 <?php echo $this->fetch('library/goods_related.lbi'); ?>
  </div>
  
</div>

</div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
