
<h6 class="adreetop"><?php echo $this->_var['lang']['consignee_info']; ?></h6>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,transport.js')); ?>



<table class="Lieferadresse" align="center" border="0" cellpadding="0" cellspacing="0">
  <tr>
  <td class="title"><?php echo $this->_var['lang']['email_address']; ?><span class="redbox">*</span></td>
    <td class="inputbox"><input name="email" type="text" class="inputBg"  id="email_<?php echo $this->_var['sn']; ?>" value="<?php if ($_SESSION['email']): ?><?php echo $_SESSION['email']; ?><?php else: ?><?php echo htmlspecialchars($this->_var['consignee']['email']); ?><?php endif; ?>" size="40" maxlength="80" <?php if ($_SESSION['email']): ?>	readonly  <?php endif; ?> />
  </td>
  </tr>

  <td class="title">Anrede<span class="redbox">*</span></td>
    <td class="inputbox"><select name="sex" id="sex">
                    <option value="0">Bitte wählen</option>
                    <option value="1" <?php if ($this->_var['consignee']['sex'] == 1): ?>selected<?php endif; ?>>Frau</option>
                    <option value="2" <?php if ($this->_var['consignee']['sex'] == 2): ?>selected<?php endif; ?>>Herr</option>
                  </select></td>
    </tr>
	  <tr>
    <td class="title">Firma(optional)</td>
    <td class="inputbox"><input name="sign_building" type="text" class="inputBg"  id="sign_building_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['sign_building']); ?>" size="50" maxlength="100" /></td>
	</tr>
	  <tr>
   <tr>
    <td class="title"><?php echo $this->_var['lang']['consignee_name']; ?><span class="redbox">*</span></td>
    <td class="inputbox">
 <input name="consignee" type="text" class="inputBg" id="consignee_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?>" size="18" maxlength="40" /></td>
  </tr>
  <tr>
    <td class="title">Nachname<span class="redbox">*</span></td>
    <td class="inputbox">
 <input name="last_name" type="text" class="inputBg"  id="last_name_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['last_name']); ?>" size="18" maxlength="50" </td>
  </tr>
  <tr>
    <td class="title"><?php echo $this->_var['lang']['phone']; ?><span class="redbox">*</span></td>
    <td class="inputbox"><input name="tel" type="text" class="inputBg"  id="tel_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['tel']); ?>" size="20" maxlength="20" /> </td>
	</tr>
<tr>
    <td class="title"><?php echo $this->_var['lang']['detailed_address']; ?><span class="redbox">*</span></td>
    <td class="inputbox">
<input name="address" type="text" class="inputBg"  id="address_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['address']); ?>" size="50" maxlength="100" />
</td>
  </tr>
  <tr>
    <td class="title"><?php echo $this->_var['lang']['postalcode']; ?><span class="redbox">*</span></td>
    <td class="inputbox">
 <input name="zipcode" type="text" class="inputBg"  id="zipcode_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['zipcode']); ?>" size="8" maxlength="16" /></td>
  </tr>

<?php if ($this->_var['real_goods_count'] > 0): ?>

<tr>
    <td class="title">Stadt<span class="redbox">*</span></td>
    <td class="inputbox">
 <input name="cityname" type="text" class="inputBg" id="cityname_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['cityname']); ?>" size="26" maxlength="40" />
 </td>
  </tr>
<?php endif; ?>


  <?php if ($this->_var['real_goods_count'] > 0): ?>
  
  <tr>
    <td class="title"><?php echo $this->_var['lang']['country_province']; ?><span class="redbox">*</span></td>
    <td class="inputbox">
    <select name="country"  style="border:1px solid #ccc;">
        <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
        <option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['old_country'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
	  </td>
</tr>
  <?php endif; ?>

  


  <?php if ($this->_var['real_goods_count'] > 0): ?>
  

	<tr>
    <td class="title">Anmerkung:</td>
    <td class="inputbox"><input name="best_time" type="text"  class="inputBg" id="best_time_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['best_time']); ?>" size="50" maxlength="100" /></td>
  </tr>
  <?php endif; ?>

  <tr>
    <td colspan="2" class="Pflichtfelder"> <span class="redbox">*</span> Pflichtfelder</td>
  </tr>
 
  <tr>
    <td colspan="2" class="Pflichtfelder">
	
	
	
	<table class="group" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td id="Wahl1" class="active"><label>
		
          <input name="Wahladresse" id="Wahladresse_<?php echo $this->_var['sn']; ?>" type="radio" value="0" onclick="check(true)" checked>
         Rechnungsadresse wie Lieferadresse</label></td>
      </tr>
      <tr>
        <td id="Wahl2" ><label>
          <input type="radio" name="Wahladresse"  id="Wahladresse_<?php echo $this->_var['sn']; ?>"   onclick="check(false);" value="1">
          Unten angegebene Rechnungsadresse verwenden</label></td>
      </tr>
    </table>
	

	

		
	<table  class="Lieferadresse" align="center" border="0" cellpadding="0" cellspacing="0" style="display:none" id="Liefer">
	 <tr>
    <td height="30" colspan="2" class="adreetop">Rechnungsadresse</td>
  </tr>
  <td class="title">Anrede<span class="redbox">*</span></td>
    <td class="inputbox"> <select name="sex2" id="sex2">
                    <option value="0">Bitte wählen</option>
                    <option value="1" <?php if ($this->_var['consignee']['sex2'] == 1): ?>selected<?php endif; ?>>Frau</option>
                    <option value="2" <?php if ($this->_var['consignee']['sex2'] == 2): ?>selected<?php endif; ?>>Herr</option>
                  </select></td>
    </tr>
	  <tr>
    <td class="title">Firma(optional)</td>
    <td class="inputbox"><input name="sign_building2" type="text" class="inputBg"  id="sign_building2_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['sign_building2']); ?>" size="50" maxlength="100" /></td>
	</tr>
	  <tr>
   <tr>
    <td class="title"><?php echo $this->_var['lang']['consignee_name']; ?><span class="redbox">*</span></td>
    <td class="inputbox">
 <input name="consignee2" type="text" class="inputBg" id="consignee2_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['consignee2']); ?>" size="18" maxlength="40" /></td>
  </tr>
  <tr>
    <td class="title">Nachname<span class="redbox">*</span></td>
    <td class="inputbox">
 <input name="last_name2" type="text" class="inputBg"  id="last_name2_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['last_name2']); ?>" size="18" maxlength="50" /></td>
  </tr>
<tr>
    <td class="title"><?php echo $this->_var['lang']['detailed_address']; ?><span class="redbox">*</span></td>
    <td class="inputbox">
<input name="address2" type="text" class="inputBg"  id="address2_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['address2']); ?>" size="50" maxlength="100" />
</td>
  </tr>
  <tr>
    <td class="title"><?php echo $this->_var['lang']['postalcode']; ?><span class="redbox">*</span></td>
    <td class="inputbox">
 <input name="zipcode2" type="text" class="inputBg"  id="zipcode2_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['zipcode2']); ?>" size="8" maxlength="16" /> </td>
  </tr>

<?php if ($this->_var['real_goods_count'] > 0): ?>

<tr>
    <td class="title">Stadt<span class="redbox">*</span></td>
    <td class="inputbox">
 <input name="cityname2" type="text" class="inputBg" id="cityname2_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['cityname2']); ?>" size="26" maxlength="40" /></td>
  </tr>
<?php endif; ?>
 
 

  <?php if ($this->_var['real_goods_count'] > 0): ?>
  
  <tr>
    <td class="title"><?php echo $this->_var['lang']['country_province']; ?><span class="redbox">*</span></td>
    <td class="inputbox">
    <select name="country2"  style="border:1px solid #ccc;">
        <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
        <option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['consignee']['country2'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
</td>
  </tr>
    <tr>
    <td colspan="2" class="Pflichtfelder"> <span class="redbox">*</span> Pflichtfelder</td>
  </tr>
 
  <?php endif; ?>
</table>

  
  
         </td>
  </tr>
  <tr>
    <td colspan="2" class="Pflichtfelder">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="2" class="inputbox">
   <span class="Return"> <a href="./flow.php">Zurück zum Warenkorb </a></span><input type="submit" name="Submit" class="Weiter" value="Weiter" />
     
      <input type="hidden" name="step" value="consignee" />
      <input type="hidden" name="act" value="checkout" />
      <input name="address_id" type="hidden" value="<?php echo $this->_var['consignee']['address_id']; ?>" />      </td>
  </tr>
</table>


