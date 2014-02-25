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


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,shopping_flow.js')); ?>
</head>
<script type="text/javascript">
	   //包装
function change1(aa)
{
	//alert(aa);
   document.getElementById("baozhuang").innerHTML = ""+ aa +".00  EUR";

}
	   //贺卡
function change2(aa)
{
	//alert(aa);
   document.getElementById("bless_num").innerHTML = ""+ aa +".00  EUR";

}
  //快递 配送
function change3(aa)
{
	//alert(aa);
   document.getElementById("onshipping").innerHTML = " "+ aa + ".00 EUR";

}
 </script> 
 
 <script language=javascript>
      function check(flag){
                if(flag == true){
                        document.getElementById("Liefer").style.display='none';
						document.getElementById("Wahl1").className='active';
						document.getElementById("Wahl2").className='';

                }else{
                       document.getElementById("Liefer").style.display='';
					   document.getElementById("Wahl1").className='';
					   document.getElementById("Wahl2").className='active';
                }
        }
</script>


<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

 <div id="path">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>



  <?php if ($this->_var['step'] == "cart"): ?>
  <div id="mainbox">
  
  
  <?php echo $this->smarty_insert_scripts(array('files'=>'showdiv.js')); ?>
  <script type="text/javascript">
  <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </script>
    <div class="Warenkorbtop">  <div class="left"><a href="/perlen-24-Perlenschmuck.html">Weiter Einkaufen </a></div> </div>
  <div id="CheckoutSteps">
  <ul>
  <li id="LastCheckout" class="last">Best&auml;tigung</li>
<li>Zahlungsweise</li>
<li>Adresse</li>
<li class="current">
Warenkorb
</li>

  </ul>
   </div>
  

  
  <div class="flowBox">

        <form id="formCart" name="formCart" method="post" action="flow.php">
           <table border="0" cellpadding="0" cellspacing="0" class="Warenkorbmain">
            <tr>
			 <th class="itemtop th1"></th>
              <th class="itemtop th2"><?php echo $this->_var['lang']['goods_name']; ?></th>

            <th class="itemtop th4"><?php echo $this->_var['lang']['number']; ?></th>
              <th class="itemtop th3">Einzeln</th>
            
              <th class="itemtop th3">Gesamt</th>
             
            </tr>
            <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
            <tr class="list">
			 <td align="center" class="th1">
                <a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; " ><img src="themes/zhenzhu/images/del_item.png" alt="Del" /></a>
            </td>
              <td class="namebox">
                <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                  <?php if ($this->_var['show_goods_thumb'] == 1): ?>
                    <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['goods']['goods_name']; ?></a>
                  <?php elseif ($this->_var['show_goods_thumb'] == 2): ?>
                    <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"  border="0" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" /></a>
                  <?php else: ?>
                    <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"  border="0" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" /></a>
                   <span class="name"> <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['goods']['goods_name']; ?></a></span>
					<span class="property"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></span>
                  <?php endif; ?>
                  <?php if ($this->_var['goods']['parent_id'] > 0): ?>
                  <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span>
                  <?php endif; ?>
                  <?php if ($this->_var['goods']['is_gift'] > 0): ?>
                  <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span>
                  <?php endif; ?>
                <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
                <p class="packagetitle"> <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></p></a>
                  <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
                      <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
                      <span class="package_name"><a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><img src="<?php echo $this->_var['package_goods_list']['goods_thumb']; ?>"  border="0" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" /></a> <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a></span>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </div>
                <?php else: ?>
                  <?php echo $this->_var['goods']['goods_name']; ?>
                <?php endif; ?>
              </td>
               <td >
                <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
                <input type="text" name="goods_number[<?php echo $this->_var['goods']['rec_id']; ?>]" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>" size="4" class="updatetext"  onkeydown="showdiv(this)"/><br />
				 <input name="submit" type="submit" class="updatelink" value="aktualisieren" />
                <?php else: ?>
                <?php echo $this->_var['goods']['goods_number']; ?>

                <?php endif; ?>              </td>
        
              <td class="th3 fontpirce1"><?php echo $this->_var['goods']['goods_price']; ?> EUR</td>
         
              <td class="th3 fontpirce2"><?php echo $this->_var['goods']['subtotal']; ?> EUR</td>
             
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
            
		  
          <table class="updatebox">
            <tr>
              <td>
      
              </td>
              <td width="415">
                
                <input name="submit" type="submit" class="update_but" value=" " />
              </td>
            </tr>
          </table>
          <input type="hidden" name="step" value="update_cart" />
        </form>
        <div id="subtolalbox">
		<table border="0" cellpadding="0" cellspacing="0" class="subtolalbox">
  <tr>
    <td class="td1 top10"><div id="red_envelope">
          <table class="red_envelope">
            <tr>
            <?php if ($this->_var['allow_use_bonus']): ?>
              <td style="display:none;">
      			<b><?php echo $this->_var['lang']['use_bonus']; ?>:</b>
              </td>
              <td width="80px" style="display:none;">
               <select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS" style="border:1px solid #e6e6e6;">
                  <option value="0" <?php if ($this->_var['order']['bonus_id'] == 0): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['please_select']; ?></option>
                  <?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');if (count($_from)):
    foreach ($_from AS $this->_var['bonus']):
?>
                  <option value="<?php echo $this->_var['bonus']['bonus_id']; ?>" <?php if ($this->_var['order']['bonus_id'] == $this->_var['bonus']['bonus_id']): ?>selected<?php endif; ?>><?php echo $this->_var['bonus']['type_name']; ?>[<?php echo $this->_var['bonus']['bonus_money_formated']; ?>]</option>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </select> 
              </td>
              <td width="90px">
              <b>Gutscheincode</b>
              </td>
              
              <td>
              <input name="bonus_sn" id="bonus_sn" type="text" class="inputBg" size="20" value="<?php echo $this->_var['order']['bonus_sn']; ?>" />
              </td>
              
              <td width="60px">
               &nbsp;<input name="validate_bonus" type="button" class="butlos" value=" " onclick="validateBonus(document.getElementById('bonus_sn').value)" style="vertical-align:middle;" />
              </td>
              <?php endif; ?>	
            </tr>
          </table>
           </div>   <?php if ($this->_var['discount'] > 0): ?><?php echo $this->_var['your_discount']; ?><br /><?php endif; ?></td>
    <td class="td3 top10">Zwischensumme</td>    
	<td class="td4 top10"><?php echo $this->_var['shopping_money']; ?> EUR</td>
  </tr>
  <tr>
    <td class="td2 bottom10">Lieferung in 3 - 5 Tagen
    </td>
    <td class="td3 bottom10">Versandkosten nach
    <select name="country"  onchange="validateBonus(document.getElementById('bonus_sn').value,this.value)" style="border:1px solid #ccc;">
        <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
        <option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['old_country'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
</td>    
	<td class="td4 bottom10"><?php echo $this->_var['shipping_fee_formated']; ?> EUR</td>
  </tr>
</table>
<table class="tolalnum" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="leftnum"><a href="./">Weiter Einkaufen </a></td>
    <td class="titel"></td>
    <td class="gesamt"><?php echo $this->_var['total_price']; ?> EUR</td>
  </tr>
</table>
</div>
        <table class="writerzuikass" border="0" cellpadding="0" cellspacing="0">

          <tr>
            <td class="title">wir akzeptieren: <img src="themes/zhenzhu/images/akzeptieren.png" align="absbottom" /></td>
            <td><a href="flow.php?step=checkout" class="but">Zur Kasse</a></td>
          </tr>
		  
        </table>
       <?php if ($_SESSION['user_id'] > 0): ?>
       <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
       <script type="text/javascript" charset="utf-8">
        function collect_to_flow(goodsId)
        {
          var goods        = new Object();
          var spec_arr     = new Array();
          var fittings_arr = new Array();
          var number       = 1;
          goods.spec     = spec_arr;
          goods.goods_id = goodsId;
          goods.number   = number;
          goods.parent   = 0;
          Ajax.call('flow.php?step=add_to_cart', 'goods=' + goods.toJSONString(), collect_to_flow_response, 'POST', 'JSON');
        }
        function collect_to_flow_response(result)
        {
          if (result.error > 0)
          {
            // 如果需要缺货登记，跳转
            if (result.error == 2)
            {
              if (confirm(result.message))
              {
                location.href = 'user.php?act=add_booking&id=' + result.goods_id;
              }
            }
            else if (result.error == 6)
            {
              openSpeDiv(result.message, result.goods_id);
            }
            else
            {
              alert(result.message);
            }
          }
          else
          {
            location.href = 'flow.php';
          }
        }
      </script>
  <?php endif; ?>
  </div>
</div>
  <?php endif; ?>

  

 


        <?php if ($this->_var['step'] == "consignee"): ?>
		<div id="mainbox">
  <div id="CheckoutSteps">
  <ul>
  <li id="LastCheckout" class="last">Best&auml;tigung</li>
<li>Zahlungsweise</li>
<li  class="current">Adresse</li>
<li class="done"><a href="/flow.php">Warenkorb</a></li>

  </ul>
   </div>
        
        <?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?>
        <script type="text/javascript">
          region.isAdmin = false;
          <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          
          onload = function() {
            if (!document.all)
            {
              document.forms['theForm'].reset();
            }
          }
          
        </script>
        
		
<script type="text/javascript">
//获取类型,然后跳转
function checktype(){
   var address_sn =document.getElementById("address").value; 
  	 	 location.href ='/flow.php?step=consignee&address_sn='+address_sn;
    }
</script>
		
		<div class="consigneemain">
		 <?php if ($_SESSION['user_id'] > 0 && $this->_var['consignee_list']['0']['address_id'] > 0): ?>
		 <div class="seltaddress">
		 <span class="stitle">Alte Adresse benutzen:</span>
		  <form method="GET" class="selbox" name="addressform">
			<select name="address" id="address" onchange="checktype()"> 
			      <option value="0">Wählen Sie bitte Ihre Versand- und Rechnungsadresse.</option>
				 <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'con');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['con']):
?>
				  <option value="<?php echo $this->_var['con']['address_id']; ?>"><?php echo htmlspecialchars($this->_var['con']['consignee']); ?> <?php echo htmlspecialchars($this->_var['con']['last_name']); ?>, <?php echo htmlspecialchars($this->_var['con']['address']); ?>, <?php echo htmlspecialchars($this->_var['con']['zipcode']); ?>-<?php echo htmlspecialchars($this->_var['con']['cityname']); ?></option>
				  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</select>
			</form>
			</div>
		  <?php endif; ?>
        <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
        <?php echo $this->fetch('library/consignee.lbi'); ?>
        </form>
         
		</div>
	<?php if (! $_SESSION['user_id']): ?>	
	<div class="zurkass_loginbox">
	<div class="top">
	Schon Mitglied?
	</div>
	<ul>
	<form action="flow.php?step=login" method="post" name="loginForm" id="loginForm" onsubmit="return checkLoginForm(this)">
                <table border="0" cellpadding="0" cellspacing="0">
				
				  <tr>
                    <td colspan="2" class="des" >Melden Sie sich bitte mit Ihrer E-Mail Adresse und Ihrem Passwort an. 
</td>
                  </tr>
                  <tr>
                    <td class="title">E-Mail Adresse</td>
                    <td><input name="username" type="text" class="inputbg" id="username" /></td>
                  </tr>
                  <tr>
                    <td class="title"><?php echo $this->_var['lang']['password']; ?></td>
                    <td ><input name="password" class="inputbg" type="password" /></td>
                  </tr>
                  <?php if ($this->_var['enabled_login_captcha']): ?>
                  <tr>
                    <td class="title"><div align="right"><strong><?php echo $this->_var['lang']['comment_captcha']; ?>:</strong></div></td>
                    <td ><input type="text" size="8" name="captcha" class="inputBg" />
                    <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </td>
                  </tr>
                  <?php endif; ?>
              <tr>
                    <td colspan="2" class="butbox">
                        <span class="remem"><input type="checkbox" value="1" name="remember" id="remember" /><label for="remember"><?php echo $this->_var['lang']['remember']; ?></label></span><input type="submit" class="loginbut" name="login" value="<?php echo $this->_var['lang']['forthwith_login']; ?>" />
                      
                        <input name="act" type="hidden" value="signin" />
                      </td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><a href="user.php?act=qpassword_name" class="f6"><?php echo $this->_var['lang']['get_password_by_question']; ?></a>&nbsp;&nbsp;&nbsp;<a href="user.php?act=get_password" class="f6"><?php echo $this->_var['lang']['get_password_by_mail']; ?></a></td>
                  </tr>
            
                </table>
                </form>
	</ul>
	</div>	
	<?php endif; ?>
	</div>
	
        <?php endif; ?>

        <?php if ($this->_var['step'] == "checkout"): ?>
				<div id="mainbox">
  <div id="CheckoutSteps">
  <ul>
  <li id="LastCheckout" class="last">Best&auml;tigung</li>
<li   class="current">Zahlungsweise</li>
<li  class="done"><a href="/flow.php?step=consignee">Adresse</a></li>
<li class="done"><a href="/flow.php">Warenkorb</a></li>

  </ul>
   </div>
        <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
        <script type="text/javascript">
        var flow_no_payment = "<?php echo $this->_var['lang']['flow_no_payment']; ?>";
        var flow_no_shipping = "<?php echo $this->_var['lang']['flow_no_shipping']; ?>";
        </script>
		
		  <?php if ($this->_var['is_exchange_goods'] != 1 || $this->_var['total']['real_goods_count'] != 0): ?>
    <div class="flowBox">
    <h6><span>Bitte wählen Sie eine Zahlungsmethode</span></h6>
	<div class="paymentbox" id="paymentTable">
	<ul>
	 <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');if (count($_from)):
    foreach ($_from AS $this->_var['payment']):
?>
            
	<li>
	<label> 
	<input type="radio" name="payment" class="radio" value="<?php echo $this->_var['payment']['pay_id']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?>checked<?php endif; ?> isCod="<?php echo $this->_var['payment']['is_cod']; ?>" onclick="selectPayment(this)" <?php if ($this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1"): ?>disabled="true"<?php endif; ?>/>
	
<span class="name"><?php echo $this->_var['payment']['pay_name']; ?></span>
 <span class="pay_fee"></span>
<span  class="des">   <?php echo $this->_var['payment']['pay_desc']; ?></span> 
            </label>
	</li>
	    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</ul>
	
	</div>

    </div>
    <?php else: ?>
        <input name = "payment" type="radio" value = "-1" checked="checked"  style="display:none"/>
    <?php endif; ?>
		
       <div class="flowBox">
        <h6><span>Ihre Artikel</span><?php if ($this->_var['allow_edit_cart']): ?><span class="modify"><a href="flow.php" class="f6"><?php echo $this->_var['lang']['modify']; ?></a></span><?php endif; ?></h6>
			  <table border="0" cellpadding="0" cellspacing="0" class="Warenkorbmain">
            <tr>
              <th class="tiemtopbe"><?php echo $this->_var['lang']['goods_name']; ?></th>

            <th class="tiemtopbe th4"><?php echo $this->_var['lang']['number']; ?></th>
              <th class="tiemtopbe th3"><?php if ($this->_var['gb_deposit']): ?><?php echo $this->_var['lang']['deposit']; ?><?php else: ?>Einzeln<?php endif; ?></th>
            
              <th class="tiemtopbe th3"><?php echo $this->_var['lang']['subtotal']; ?></th>
             
            </tr>
            <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
            <tr class="listbe">
              <td  class="namebox">
              <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
          <p class="name"><a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></p></a>
          <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
              <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
            <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
          <?php else: ?>
          <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"  border="0" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" /></a>
		    <span class="name"> <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" ><?php echo $this->_var['goods']['goods_name']; ?></a></span>
		<span class="property"><?php echo nl2br($this->_var['goods']['goods_attr']); ?>
                <?php if ($this->_var['goods']['parent_id'] > 0): ?>
                <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span>
                <?php elseif ($this->_var['goods']['is_gift']): ?>
                <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span>
                <?php endif; ?></span>
          <?php endif; ?>
          <?php if ($this->_var['goods']['is_shipping']): ?>(<span style="color:#FF0000"><?php echo $this->_var['lang']['free_goods']; ?></span>)<?php endif; ?>
              </td>
          
            
              <td ><?php echo $this->_var['goods']['goods_number']; ?></td>
			   <td class="th3 fontpirce1"><?php echo $this->_var['goods']['formated_goods_price']; ?> EUR</td>
              <td class="th3 fontpirce2"><?php echo $this->_var['goods']['formated_subtotal']; ?> EUR</td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php if (! $this->_var['gb_deposit']): ?>
            <tr style=" display:none;">
              <td class="moneybe"  colspan="7">
              <?php if ($this->_var['discount'] > 0): ?><?php echo $this->_var['your_discount']; ?><br /><?php endif; ?>
              <?php echo $this->_var['shopping_money']; ?> EUR
              </td>
            </tr>
            <?php endif; ?>
          </table>
      </div>
      
      <?php if ($this->_var['total']['real_goods_count'] != 0): ?>
    <div class="flowBox">
	<div class="Zahlunggbox">
	<ul style="display:none">
	     <?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
		<li>
	<label> 

<span class="name2">Ab <?php echo $this->_var['shipping']['format_shipping_fee']; ?> EUR versandkostenlos</span>
            </label>
	</li>
	     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
	</ul>
	 <span class="shipname">Versandkosten:</span> <span class="shipnuber" id='onshipping'> <?php echo $this->_var['total']['shipping_fee_formated']; ?> EUR</span>
	</div>
    </div>
        <?php else: ?>
        <input name = "shipping" type="radio" value = "-1" checked="checked"  style="display:none"/>
        <?php endif; ?>

    <div class="blank"></div>
          <?php if ($this->_var['pack_list']): ?>
          <div class="flowBox">
          <h6><span><?php echo $this->_var['lang']['goods_package']; ?></span></h6>
		  <div class="Zahlunggbox">
		  <ul>
		  <li style=""><label> 
		  <input type="radio" class="radio" name="pack" value="0" <?php if ($this->_var['order']['pack_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectPack(this);change1(0)" />
	     <span class="name"><?php echo $this->_var['lang']['no_pack']; ?></span>
         <span class="name2"></span>
         <span class="pay_fee"></span>
         </label></li>
   <?php $_from = $this->_var['pack_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pack');if (count($_from)):
    foreach ($_from AS $this->_var['pack']):
?>
		  <li><label> 
		   <input type="radio"  class="radio" name="pack" value="<?php echo $this->_var['pack']['pack_id']; ?>" <?php if ($this->_var['order']['pack_id'] == $this->_var['pack']['pack_id']): ?>checked="true"<?php endif; ?> onclick="selectPack(this);change1(<?php echo $this->_var['pack']['format_pack_fee']; ?>)" />
		  <p class="name"><?php echo $this->_var['pack']['pack_name']; ?> <?php if ($this->_var['pack']['pack_img']): ?>
           <span  class="imglook"><a href="data/packimg/<?php echo $this->_var['pack']['pack_img']; ?>" target="_blank" class="f6">Anzeigen</a></span> 
           <?php else: ?>
           <span  class="imglook"><?php echo $this->_var['lang']['no']; ?></span> 
           <?php endif; ?>
		   </p>
          <span class="name2">Ab <?php echo $this->_var['pack']['format_free_money']; ?> EUR versandkostenlos</span>
          <span class="pay_fee"><?php echo $this->_var['pack']['format_pack_fee']; ?> EUR</span>
          </label></li>  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		  </ul>
		 
	        <div class="totalnuber" id="baozhuang"><?php echo $this->_var['total']['card_fee_formated']; ?> EUR</div>
			
		  </div>
       </div>
          <?php endif; ?>


 

          <?php if ($this->_var['card_list']): ?>
          <div class="flowBox">
          <h6><span><?php echo $this->_var['lang']['goods_card']; ?></span></h6>


		  <div class="Zahlunggbox">
		  <ul>
		  <li style=" display:none;"><label> 
		 <input type="radio" class="radio" name="card" value="0" <?php if ($this->_var['order']['card_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectCard(this);change2(0)" />
         <span class="name"><?php echo $this->_var['lang']['no_card']; ?></span>
         <span class="name2"></span>
         <span class="pay_fee"></span>
         </label></li>
		  <?php $_from = $this->_var['card_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
		  <li><label>
		   <input type="radio" class="radio" name="card" value="<?php echo $this->_var['card']['card_id']; ?>" <?php if ($this->_var['order']['card_id'] == $this->_var['card']['card_id']): ?>checked="true"<?php endif; ?> onclick="selectCard(this);change2(<?php echo $this->_var['card']['format_card_fee']; ?>)" />
		  <p class="name"><?php echo $this->_var['card']['card_name']; ?>  <?php if ($this->_var['card']['card_img']): ?>
                   <span  class="imglook"><a href="data/cardimg/<?php echo $this->_var['card']['card_img']; ?>" target="_blank">Anzeigen</a></span>
                  <?php else: ?>
                   <span  class="imglook"><?php echo $this->_var['lang']['no']; ?></span>
                  <?php endif; ?></p>
          <span class="name2" style=" display:none;">Ab <?php echo $this->_var['card']['format_free_money']; ?> EUR versandkostenlos</span>
          <span class="pay_fee" style=" display:none;"><?php echo $this->_var['card']['format_card_fee']; ?> EUR</span>
		  </label></li>
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		  <span  class="des"><b><?php echo $this->_var['lang']['bless_note']; ?>:</b><textarea name="card_message" cols="60" rows="2" style="width:auto; border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['card_message']); ?></textarea></span>
		  </ul>
		  	 <div class="totalnuber" id="bless_num" style=" display:none;"><?php echo $this->_var['total']['card_fee_formated']; ?> EUR</div>
			
		  </div>
        </div>

        <?php endif; ?>

<div class="threetotal">
<div class="bonusbox">
<ul>
    <?php if ($this->_var['allow_use_surplus']): ?>
<li class="btitle">Kreditbetrag:</li>
<li class="boninfo"><input name="surplus" type="text" class="inputBg" id="ECS_SURPLUS" onblur="changeSurplus(this.value)" value="<?php echo empty($this->_var['order']['surplus']) ? '0' : $this->_var['order']['surplus']; ?>" size="3" maxlength="12" <?php if ($this->_var['disable_surplus']): ?>disabled="disabled"<?php endif; ?> />
              <?php echo empty($this->_var['your_surplus']) ? '0' : $this->_var['your_surplus']; ?> Rest<span id="ECS_SURPLUS_NOTICE" class="notice"></span></li>
<?php endif; ?>
			  
			  
</ul>

</div>
 <div class="fee_total"><?php echo $this->fetch('library/order_total.lbi'); ?></div>
</div>

      <div class="flowBox">
      <h6><?php echo $this->_var['lang']['consignee_info']; ?><span class="modify"><a href="flow.php?step=consignee" class="f6"><?php echo $this->_var['lang']['modify']; ?></a></span></h6>
	  <div class="consignee_info">
	  <p class="email_adress"><?php echo $this->_var['lang']['email_address']; ?>: <?php echo htmlspecialchars($this->_var['consignee']['email']); ?></p>
	  <ul>
	  <li class="top">Lieferadresse</li>
	  <li><?php echo $this->_var['lang']['phone']; ?>: <?php echo $this->_var['consignee']['tel']; ?></li>
	  <li><?php if ($this->_var['consignee']['sex'] == 0): ?>Bitte wählen<?php endif; ?><?php if ($this->_var['consignee']['sex'] == 1): ?>Frau<?php endif; ?>  <?php if ($this->_var['consignee']['sex'] == 2): ?>Herr<?php endif; ?> <?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?> <?php echo htmlspecialchars($this->_var['consignee']['last_name']); ?></li>
	  <li><?php echo htmlspecialchars($this->_var['consignee']['address']); ?>, <?php echo htmlspecialchars($this->_var['consignee']['sign_building']); ?></li>
	  <li><?php echo htmlspecialchars($this->_var['consignee']['zipcode']); ?> <?php echo htmlspecialchars($this->_var['consignee']['cityname']); ?></li>
	  <li>
	    <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
			<?php if ($this->_var['consignee']['country'] == $this->_var['country']['region_id']): ?><?php echo $this->_var['country']['region_name']; ?><?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	  </li>

	  
	  </ul>
	  	
	   <ul>
	  <li class="top">Rechnungsadresse</li>
	  <li></li>
	  <li><?php if ($this->_var['consignee']['sex2'] == 0): ?>Bitte wählen<?php endif; ?><?php if ($this->_var['consignee']['sex2'] == 1): ?>Frau<?php endif; ?>  <?php if ($this->_var['consignee']['sex2'] == 2): ?>Herr<?php endif; ?>  <?php echo htmlspecialchars($this->_var['consignee']['consignee2']); ?> <?php echo htmlspecialchars($this->_var['consignee']['last_name2']); ?></li>
	  <li><?php echo htmlspecialchars($this->_var['consignee']['address2']); ?>, <?php echo htmlspecialchars($this->_var['consignee']['sign_building2']); ?></li>
	  <li><?php echo htmlspecialchars($this->_var['consignee']['zipcode2']); ?>  <?php echo htmlspecialchars($this->_var['consignee']['cityname2']); ?></li>
	  <li>    <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
			<?php if ($this->_var['consignee']['country2'] == $this->_var['country']['region_id']): ?><?php echo $this->_var['country']['region_name']; ?><?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></li>
	  </ul>
	  
	  </div>

	   
      </div>
 

 


      <div class="flowBox">
   <div class="other_box">
   <div class="postscript">
   <ul>
   <li>
   <span class="ptitle"><?php echo $this->_var['lang']['order_postscript']; ?>:</span><textarea name="postscript" cols="60" rows="2" id="postscript" style="border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['postscript']); ?></textarea>
   </li>
 
	
   </ul>
   </div>
   <div class="agbbox">Mit klick auf "Bestellung abschicken" bestätigen Sie unsere <a href="artikel-40-AGB.html" target="_blank">AGB</a> und <a href="artikel-39-Datenschutz.html" target="_blank">Datenschutz</a></div>
   </div>  
    </div>

    <div class="flowBox">
<div class="Bestellungab">
		      <span class="Return"> <a href="flow.php?step=consignee">Zurück zur Lieferadresse</a></span><input type="submit" name="Submit" class="Weiter2" value="Bestellung abschicken" />
      
            <input type="hidden" name="step" value="done" />

    </div>
	</div>
    </form>
	</div>
        <?php endif; ?>

        <?php if ($this->_var['step'] == "done"): ?>
		 
						<div id="mainbox">
  <div id="CheckoutSteps">
  <ul>
  <li id="LastCheckout" class="last current">Best&auml;tigung</li>
<li   class="done">Zahlungsweise</li>
<li  class="done">Adresse</li>
<li class="done">Warenkorb></li>

  </ul>
   </div>
       
        <div class="donebox">
		<h6>Vielen Dank für Ihre Bestellung bei Perle-Schmuck.com</h6>
         <div class="top">
         
         Sie haben eine Bestellung mit der Nummer <span class="snst"><?php echo $this->_var['order']['order_sn']; ?></span> getätigt. Bei perle-schmuck.com haben Sie mehrere Möglichkeiten Ihre Bestellungen zu bezahlen(Gesamtsumme: <span class="snst"><?php echo $this->_var['total']['amount_formated']; ?> EUR </span>). Sie erhalten in wenigen Minuten eine Email mit Ihrer Rechnung. Der Warenversand erfolgt sofort nach Zahlungseingang. Sollten Sie in der Zwischenzeit Fragen zu Ihrer Bestellung haben, kontaktieren Sie uns bitte per E-mail mit Ihrer Bestellnummer <span class="snst"><?php echo $this->_var['order']['order_sn']; ?></span>.
		  </div>
		 <div  class="paytop">Bitte bezahlen Sie:</div>
		 <div class="payonline"><span class="snst"><?php echo $this->_var['order']['pay_name']; ?></span><br /><?php if ($this->_var['order']['pay_desc2'] == null || $this->_var['order']['pay_desc2'] == ""): ?><?php echo $this->_var['order']['pay_desc']; ?><?php else: ?><?php echo $this->_var['order']['pay_desc2']; ?><?php endif; ?></div>
		 <?php if ($this->_var['pay_online']): ?>
            
		 <div class="paylinebox"><?php echo $this->_var['pay_online']; ?></div>
		  <?php endif; ?>
		  <div class="bespayinfo">Wenn wir Ihre Bezahlung bekommen haben, werden wir innerhalb 24 Stunden Ihre Bestellinfos bestätigen und Ihren Perlenschmuck liefern.
</div>
         
          <?php if ($this->_var['virtual_card']): ?>
          <div style="text-align:center;overflow:hidden;border:1px solid #E2C822;background:#FFF9D7;margin:10px;padding:10px 50px 30px;">
          <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
            <h3 style="color:#2359B1; font-size:12px;"><?php echo $this->_var['vgoods']['goods_name']; ?></h3>
            <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
              <ul style="list-style:none;padding:0;margin:0;clear:both">
              <?php if ($this->_var['card']['card_sn']): ?>
              <li style="margin-right:50px;float:left;">
              <strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span>
              </li><?php endif; ?>
              <?php if ($this->_var['card']['card_password']): ?>
              <li style="margin-right:50px;float:left;">
              <strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span>
              </li><?php endif; ?>
              <?php if ($this->_var['card']['end_date']): ?>
              <li style="float:left;">
              <strong><?php echo $this->_var['lang']['end_date']; ?>:</strong><?php echo $this->_var['card']['end_date']; ?>
              </li><?php endif; ?>
              </ul>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
          <?php endif; ?>
    
		</div>
		    <div class="flowBox">
<div class="Bestellungab">
		      <span class="Return"> <a href=".">Zurück zum Shop</a></span>
			  <span class="Return" style="float:right;"> <a href="user.php">zum Kunden-Zentrum</a></span>
			 

    </div>
	</div>
		
		
		</div>
        <?php endif; ?>
        <?php if ($this->_var['step'] == "login"): ?>
        <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,user.js')); ?>
        <script type="text/javascript">
        <?php $_from = $this->_var['lang']['flow_login_register']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        
        function checkLoginForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          return true;
        }

        function checkSignupForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.trim(frm.elements['username'].value).match(/^\s*$|^c:\\con\\con$|[%,\'\*\"\s\t\<\>\&\\]/))
          {
            alert(username_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['email'].value)) {
            alert(email_not_null);
            return false;
          }

          if (!Utils.isEmail(frm.elements['email'].value)) {
            alert(email_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          if (frm.elements['password'].value.length < 6) {
            alert(password_lt_six);
            return false;
          }

          if (frm.elements['password'].value != frm.elements['confirm_password'].value) {
            alert(password_not_same);
            return false;
          }
          return true;
        }
        
        </script>
        
        <div class="flowBox">
        <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr>
            <td width="50%" valign="top" bgcolor="#ffffff">
            <h6><span>用户登录：</span></h6>
            <form action="flow.php?step=login" method="post" name="loginForm" id="loginForm" onsubmit="return checkLoginForm(this)">
                <table width="90%" border="0" cellpadding="8" cellspacing="1" bgcolor="#B0D8FF" class="table">
                  <tr>
                    <td bgcolor="#ffffff"><div align="right"><strong><?php echo $this->_var['lang']['username']; ?></strong></div></td>
                    <td bgcolor="#ffffff"><input name="username" type="text" class="inputBg" id="username" /></td>
                  </tr>
                  <tr>
                    <td bgcolor="#ffffff"><div align="right"><strong><?php echo $this->_var['lang']['password']; ?></strong></div></td>
                    <td bgcolor="#ffffff"><input name="password" class="inputBg" type="password" /></td>
                  </tr>
                  <?php if ($this->_var['enabled_login_captcha']): ?>
                  <tr>
                    <td bgcolor="#ffffff"><div align="right"><strong><?php echo $this->_var['lang']['comment_captcha']; ?>:</strong></div></td>
                    <td bgcolor="#ffffff"><input type="text" size="8" name="captcha" class="inputBg" />
                    <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </td>
                  </tr>
                  <?php endif; ?>
                  <tr>
            <td colspan="2"  bgcolor="#ffffff"><input type="checkbox" value="1" name="remember" id="remember" /><label for="remember"><?php echo $this->_var['lang']['remember']; ?></label></td>
          </tr>
                  <tr>
                    <td bgcolor="#ffffff" colspan="2" align="center"><a href="user.php?act=qpassword_name" class="f6"><?php echo $this->_var['lang']['get_password_by_question']; ?></a>&nbsp;&nbsp;&nbsp;<a href="user.php?act=get_password" class="f6"><?php echo $this->_var['lang']['get_password_by_mail']; ?></a></td>
                  </tr>
                  <tr>
                    <td bgcolor="#ffffff" colspan="2"><div align="center">
                        <input type="submit" class="bnt_blue" name="login" value="<?php echo $this->_var['lang']['forthwith_login']; ?>" />
                        <?php if ($this->_var['anonymous_buy'] == 1): ?>
                        <input type="button" class="bnt_blue_2" value="<?php echo $this->_var['lang']['direct_shopping']; ?>" onclick="location.href='flow.php?step=consignee&amp;direct_shopping=1'" />
                        <?php endif; ?>
                        <input name="act" type="hidden" value="signin" />
                      </div></td>
                  </tr>
                </table>
              </form>

              </td>
            <td valign="top" bgcolor="#ffffff">
            <h6><span>用户注册：</span></h6>
            <form action="flow.php?step=login" method="post" name="formUser" id="registerForm" onsubmit="return checkSignupForm(this)">
               <table width="98%" border="0" cellpadding="8" cellspacing="1" bgcolor="#B0D8FF" class="table">
                  <tr>
                    <td bgcolor="#ffffff" align="right" width="25%"><strong><?php echo $this->_var['lang']['username']; ?></strong></td>
                    <td bgcolor="#ffffff"><input name="username" type="text" class="inputBg" id="username" onblur="is_registered(this.value);" /><br />
            <span id="username_notice" style="color:#FF0000"></span></td>
                  </tr>
                  <tr>
                    <td bgcolor="#ffffff" align="right"><strong><?php echo $this->_var['lang']['email_address']; ?></strong></td>
                    <td bgcolor="#ffffff"><input name="email" type="text" class="inputBg" id="email" onblur="checkEmail(this.value);" /><br />
            <span id="email_notice" style="color:#FF0000"></span></td>
                  </tr>
                  <tr>
                    <td bgcolor="#ffffff" align="right"><strong><?php echo $this->_var['lang']['password']; ?></strong></td>
                    <td bgcolor="#ffffff"><input name="password" class="inputBg" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" /><br />
            <span style="color:#FF0000" id="password_notice"></span></td>
                  </tr>
                  <tr>
                    <td bgcolor="#ffffff" align="right"><strong><?php echo $this->_var['lang']['confirm_password']; ?></strong></td>
                    <td bgcolor="#ffffff"><input name="confirm_password" class="inputBg" type="password" id="confirm_password" onblur="check_conform_password(this.value);" /><br />
            <span style="color:#FF0000" id="conform_password_notice"></span></td>
                  </tr>
                  <?php if ($this->_var['enabled_register_captcha']): ?>
                  <tr>
                    <td bgcolor="#ffffff" align="right"><strong><?php echo $this->_var['lang']['comment_captcha']; ?>:</strong></td>
                    <td bgcolor="#ffffff"><input type="text" size="8" name="captcha" class="inputBg" />
                    <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" /> </td>
                  </tr>
                  <?php endif; ?>
                  <tr>
                    <td colspan="2" bgcolor="#ffffff" align="center">
                        <input type="submit" name="Submit" class="bnt_blue_1" value="<?php echo $this->_var['lang']['forthwith_register']; ?>" />
                        <input name="act" type="hidden" value="signup" />
                    </td>
                  </tr>
                </table>
              </form>
              </td>
          </tr>
          <?php if ($this->_var['need_rechoose_gift']): ?>
          <tr>
            <td colspan="2" align="center" style="border-top:1px #ccc solid; padding:5px; color:red;"><?php echo $this->_var['lang']['gift_remainder']; ?></td>
          </tr>
          <?php endif; ?>
        </table>
        </div>
        
        <?php endif; ?>





<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</html>
