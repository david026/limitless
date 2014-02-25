<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title>Nr.<?php echo $this->_var['goods']['goods_sn']; ?> <?php echo $this->_var['dengji']; ?> <?php echo $this->_var['goods']['goods_style_name']; ?> nur <?php echo $this->_var['goods']['shop_price_formated']; ?> EUR</title>



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
<style>
.orders{width:958px; height:auto; float:left}
.goods_style{clear:both; padding-left:20px; text-align:left;}
.goods_img {
	width:45%;
	height:auto;
	float:left
}
.goods_info {
	width:55%;
	height:auto;
	float:left
}
</style>
</head><body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div id="path"> <?php echo $this->fetch('library/ur_here.lbi'); ?> </div>

<div id="mainbox">
  <h2 class="nameh2">珍珠首饰定做</h2>
  <div class="orders">
    <div class="goods_style">
      <label>珍珠首饰样式：</label>
      <select name="goods_style">
        <option value="0">戒指</option>
        <option value="1">项链</option>
        <option value="2">耳环</option>
      </select>
    </div>
    <div class="goods_img"><a href="schmuck-473-Perlenohrring-14-kt585-er-Wei%C3%9Fgold-Tahitiperle-schwarz-9-95mm.html"><img src="/images/201207/thumb_img/473_thumb_G_1343717809846.jpg" alt="Perlenohrring 14 kt./585-er Weißgold Tahitiperle schwarz 9-9.5mm" class="goodsimg" width="300px"></a>
    <p class="title"><a href="schmuck-473-Perlenohrring-14-kt585-er-Wei%C3%9Fgold-Tahitiperle-schwarz-9-95mm.html" title="Perlenohrring 14 kt./585-er Weißgold Tahitiperle schwarz 9-9.5mm">Perlenohrring 14 kt./585-er Weißgold Tahitiperle schwarz 9-9.5mm</a></p>
    </div>
    
    <div class="goods_info">bcd</div>
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
