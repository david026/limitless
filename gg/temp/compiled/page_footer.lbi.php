

<div id="mainhelp">
<div class="gara">
<div class="top">Warum unseren Perlenschmuck wählen?</div>
<ul>
<li>Kostenlose Lieferung in 3-5 Tage</li>
<li>Best-Preis Garantie</li>
<li>Bis zu 78% Rabatt</li>
<li>Bestand seit 1982</li>
<li>100 Tage Rückgabegarantie</li>
<li>zeitlich unbegrenzter Pflegeservice</li>
<li>Juwelen direkt beim Hersteller kaufen</li>
<li>Top Juwelen-Team</li>
</ul>
</div>
<div class="shoping">
<ul>
<li>
<p class="top">Sicher einkaufen und bezahlen</p>
<p class="des">Eine verschlüsselte Verbindung und 
verschiedene Zahlungsmöglichkeiten 
– so ist Einkaufen sicher</p>
<p class="picturehelp"><img src="themes/zhenzhu/images/paypal1.jpg" alt="Perlenkette, Perlenschmuck und Edelsteine kaufen bei Laperle mit diesen Bezahlsystemen"></p>
</li>

<li>
<p class="top">Alle Ware versandkostenfrei </p>
<p class="des">nach Deutschland, Österreich, in die Schweiz und anderen europäischen Ländern.
 </p>
<p class="picturehelp"><img src="themes/zhenzhu/images/dhl.jpg" alt="DHL"><img src="themes/zhenzhu/images/fedex.jpg" alt="FedEx"><img src="themes/zhenzhu/images/ups.jpg" alt="UPS"></p>
</li>
<li class="email">
<p class="top">Kontaktieren Sie uns</p>
<p class="des">Wenn Sie Fragen zum Kauf im Online Shop haben,
wenden Sie sich bitte unter folgender Adresse bei uns: Email. 
<b><?php echo $this->_var['service_email']; ?> </b></p>

<p class="newsletter"><strong><?php echo $this->_var['lang']['email_subscribe']; ?>:</strong><input type="text" id="user_email" class="emailtext"><input type="button" class="but" value=" " onclick="add_email_list();"><input type="button" class="but2" value=" " onclick="cancel_email_list();" ></p>

<script type="text/javascript">
var email = document.getElementById('user_email');
function add_email_list()
{
  if (check_email())
  {
    Ajax.call('user.php?act=email_list&job=add&email=' + email.value, '', rep_add_email_list, 'GET', 'TEXT');
  }
}
function rep_add_email_list(text)
{
  alert(text);
}
function cancel_email_list()
{
  if (check_email())
  {
    Ajax.call('user.php?act=email_list&job=del&email=' + email.value, '', rep_cancel_email_list, 'GET', 'TEXT');
  }
}
function rep_cancel_email_list(text)
{
  alert(text);
}
function check_email()
{
  if (Utils.isEmail(email.value))
  {
    return true;
  }
  else
  {
    alert('<?php echo $this->_var['lang']['email_invalid']; ?>');
    return false;
  }
}
</script>

</li>
</ul>
</div>

</div>
</div>

 
<div id="warp_footer"></div>
<div id="footer">
<div class="helpbox">
<ul>
<li>

<p class="tetle">Beratung & Hilfe</p>
 <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><b>Skype:</b> <?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<a href="#">E-mail: <?php echo $this->_var['service_email']; ?></a>
<a href="/message.php" title="Customer Service">Customer Service</a>


<p class="tetle">Online anrufen!</p>
<!--
Skype 'My status' button
http://skype.tom.com/help/skypebuttons
-->
<script type="text/javascript" src="http://skype.tom.com/script/skypeCheck40.js"></script>
<a href="skype:perle-schmuck%2Ecom?call" onclick="return skypeCheck();"><img src="http://skype.tom.com/help/skypebuttons/buttons/call_green_white_153x63.png" style="border: none;" alt="Call me!" /></a><br><br>
</li>
<li class="hlist">
<p class="tetle"><a href='/artikel-78-Über-uns.html' title="Über uns">Perle-Schmuck.com</a></p>
  <a href="/artikel-78-Über-uns.html" title="Über uns">Über uns</a>
  <a href="/artikel-41-Über-Firma.html" title="Über Firma">Über Firma</a>
  <a href="/artikel-71-Unsere-Fabrik.html" title="Unsere Fabrik">Unsere Fabrik</a>
  <a href="/artikel-72-Produkt-Bild-.html" title="Produkt-Bild ">Produkt-Bild</a>
  <a href="/artikel-73-Impressum.html" title="Impressum">Impressum</a>
  <a href="/artikel-40-AGB.html" title="AGB">AGB</a>
<a href="http://www.pearlol.com/" title="Pearl jewelry">Pearl jewelry</a>
  
  </li>
  <li class="hlist">
<p class="tetle"><a href='/artikel_cat-15-Kundenservice.html' title="Kundenservice">Kundenservice</a></p>
  <a href="/artikel_cat-20-FAQ.html" title="FAQ">FAQ</a>
  <a href="/artikel-37-Versand.html" title="Versand">Versand</a>
  <a href="/artikel-38-Kontakt.html" title="Kontakt">Kontakt</a> 
  <a href="/artikel-79-Kundenservice.html" title="Kundenservice">Kundenservice</a>
  <a href="/artikel-36-Zahlungsweise.html" title="Zahlungsweise">Zahlungsweise</a>
  <a href="/artikel-39-Datenschutz.html" title="Datenschutz">Datenschutz</a>
  <a href="/artikel-75-Behandlung-der-Bestellung-.html" title="Behandlung der Bestellung ">Behandlung der Bestellung</a>
  <a href="/artikel-76-Transport-und-Auslieferung-.html" title="Transport und Auslieferung ">Transport und Auslieferung</a>
  <a href="/artikel-12-Umtausch-und-Rückgabe.html" title="Umtausch und Rückgabe">Umtausch und Rückgabe</a>
  <a href="/artikel-13-Best-Service-Garantie.html" title="Best-Service-Garantie">Best-Service-Garantie</a>
  <a href="/artikel-14-Best-Preis-Garantie.html" title="Best-Preis-Garantie">Best-Preis-Garantie</a>
  <a href="/artikel_cat-21-Kauf-Tipps.html" title="Kauf-Tipps">Kauf-Tipps</a>

  </li>
  <li class="hlist">
<p class="tetle"><a href='/artikel_cat-18-Perlenwissen.html' title="Perlenwissen">Perlenwissen</a></p>
  <a href="/artikel_cat-19-Perlenbewertung.html" title="Perlenbewertung">Perlenbewertung</a>
  <a href="/artikel-88-Wie-Perle-Wählen.html" title="Wie Perle Wählen">Wie Perle Wählen</a>
  <a href="/artikel-55-Perle-Zucht.html" title="Perle Zucht">Perle Zucht</a>
  <a href="/artikel-56-Naturperlen.html" title="Naturperlen">Naturperlen</a>
  <a href="/artikel-57-Künstliche-Perlen.html" title="Künstliche Perlen">Künstliche Perlen</a>
  <a href="/artikel-58-Perlen-und-Medizin.html" title="Perlen und Medizin">Perlen und Medizin</a>
  <a href="/artikel-59-Perlen-Pflege.html" title="Perlen Pflege">Perlen Pflege</a>
  <a href="/artikel-60-Perlen-Matching.html" title="Perlen Matching">Perlen Matching</a>
  <a href="/artikel-61-Perlen-Größen.html" title="Perlen Größen">Perlen Größen</a> 
  <a href="/artikel-62-Perlen-Lüster.html" title="Perlen Lüster">Perlen Lüster</a>   
  <a href="/artikel-63-Perlen-Formen.html" title="Perlen Formen">Perlen Formen</a>   
  <a href="/artikel-64-Perlen-Farben.html" title="Perlen Farben">Perlen Farben</a>
 </li>
 
<li class="hlist">
<p class="tetle">Perlenschmuck</p>
<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
<?php endif; ?>
</li>
</ul>
</div>
<div class="siteinfo"> <?php echo $this->_var['copyright']; ?>

</div> 
<div class="Statistics"><?php if ($this->_var['stats_code']): ?> <?php echo $this->_var['stats_code']; ?>  <?php endif; ?>
</div>   
</div>

