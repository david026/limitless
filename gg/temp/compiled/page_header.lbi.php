<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<div id="warp">


<div id="header">
<h1 class="logo"><a href="/" name="top" title="<?php echo $this->_var['page_title']; ?>">Echte Perle|Perlenketten|Perlenschmuck Online Outletshop  bis zum 67% Rabatt.</a></h1>
<div class="topmenu">
<ul>
<li class="toplogin">  <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?> <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </li>
  <?php if ($this->_var['navigator_list']['top']): ?>
<li class="menu">   <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
            <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

   </li>
   <?php endif; ?>
</ul>
</div>
<div class="toptool">
<ul>
<li class="seachen">
  <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="f_r"  style="_position:relative; top:5px;">
   <input name="keywords" type="text" id="keyword" value="Suchbegriff" onclick="if(this.value=='Suchbegriff')this.value=''" onfocus="this.select()" onblur="if (value ==''){value=''}" onmouseover="this.focus()"  class="seachen_text" />
   <input name="imageField" type="submit" value="Suchen" class="serchen_but" style="cursor:pointer;" />

   </form>

  <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>

</li>
<li class="Warenkorb"> <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 
  <input type="button" onclick="window.location.href='/flow.php'" class="zuikasse" value="zur Kasse">
</li>
</ul>
</div>
<div id="nav">
<ul>
<li><a href="/perlen-24-Perlenschmuck.html"  <?php if ($this->_var['header'] == 1): ?>  class="lcur"<?php else: ?> class="left"<?php endif; ?> >Perlenschmuck</a>
 <ul>
    <li><a href="/perlenschmuck-0-c17-perlenkette.html" title="Perlen Ketten">Perlen Ketten</a></li>
    <li><a href="/perlenschmuck-0-c18-perlenohrring.html" title="Perlen Ohrringe">Perlen Ohrringe</a></li>
    <li><a href="/perlenschmuck-0-c19-perlenohrstecker.html" title="Perlen Ohrstecker">Perlen Ohrstecker</a></li>
    <li><a href="/perlenschmuck-0-c20-perlenanhänger.html" title="Perlen Anhänger">Perlen Anhänger</a></li>
    <li><a href="/perlenschmuck-0-c21-perlenring.html" title="Perlen Ringe">Perlen Ringe</a></li>
	<li><a href="/perlenschmuck-0-c22-perlenarmband.html" title="Perlen Armband">Perlen Armbänder</a></li>
    <li><a href="/perlen-26-LosePerlen.html" title="Lose Perlen">LosePerlen</a></li>
    <li><a href="/perlen-25-Accessoires.html" title="Accessoires">Accessoires</a></li>
  
    </ul>
</li>
<li><a href="#" title="Perlenarten" <?php if ($this->_var['header'] == 2): ?>  class="cur" <?php endif; ?>>Perlenarten</a>
 <ul>
    <li><a href="/perlenarten-16-c0-tahitiperlen.html" title="Tahiti Perlen">Tahiti Perlen</a></li>
    <li><a href="/perlenarten-15-c0-goldensüdseeperlen.html" title="Golden Südsee Perlen">Golden Südsee Perlen</a></li>
    <li><a href="/perlenarten-21-c0-weißsüdseeperlen.html" title="Weiß Südsee Perlen">Weiß Südsee Perlen</a></li>
    <li><a href="/perlenarten-13-c0-süßwasserperlen.html" title="Süßwasserperlen">Süßwasser Perlen</a></li>
    <li><a href="/perlenarten-14-c0-akoyaperlen.html" title="Akoyaperlen">Akoya Perlen</a></li>
    <li><a href="/perlenarten-18-c0-mabepearls.html" title="Mabe Pearls">Mabe Perlen</a></li>
  
    </ul>
</li>
<li><a href="#" <?php if ($this->_var['header'] == 3): ?>  class="cur" <?php endif; ?>>Juwelen Typ</a>
   <ul class="wbox">
   <div class="rightline"> 
   <p class="dtitle">Preis</p>
   <li><a href="/perlen-24-b0-min0-max59-attr0-Perlenschmuck.html" title="Unter 59 € Perlenschmuck">Unter 59 €</a></li>
    <li><a href="/perlen-24-b0-min60-max149-attr0-Perlenschmuck.html" title="60 €  – 149 € Perlenschmuck">60 €  – 149 €</a></li>
	<li><a href="/perlen-24-b0-min150-max299-attr0-Perlenschmuck.html" title="150 €  – 299 € Perlenschmuck">150 €  – 299 €</a></li>
    <li><a href="/perlen-24-b0-min300-max419-attr0-Perlenschmuck.html" title="300 €  – 419 € Perlenschmuck">300 €  – 419 €</a></li>
	<li><a href="/perlen-24-b0-min420-max1000000-attr0-Perlenschmuck.html" title="Über 420 € Perlenschmuck">Über 420 €</a></li>

	</div>
    <div>
	<p class="dtitle">Metall Material</p>
	<li><a href="/perlen-24-b0-min0-max0-attr0.0.5506.0-Perlenschmuck.html" title="18 kt./750-er Weißgold">18 kt./750-er Weißgold</a></li>
    <li><a href="/perlen-24-b0-min0-max0-attr0.0.5523.0-Perlenschmuck.html" title="18 kt./750-er Gelbgold">18 kt./750-er Gelbgold</a></li>
	<li><a href="/perlen-24-b0-min0-max0-attr0.0.6470.0-Perlenschmuck.html" title="18 kt./750-er Rosagold">18 kt./750-er Rosegold</a></li>
    <li><a href="/perlen-24-b0-min0-max0-attr0.0.5642.0-Perlenschmuck.html" title="14 kt./585-er Gelbgold">14 kt./585-er Gelbgold</a></li>
    <li><a href="/perlen-24-b0-min0-max0-attr0.0.1740.0-Perlenschmuck.html" title="Silber-925">Silber-925</a></li>
	</div>
	<div class="leftline">
	<p class="dtitle" >Perlen Farbe</p>  
	<li><a href="/perlen-24-b0-min0-max0-attr287.0.0.0-Perlenschmuck.html" title="schwarz">schwarz</a></li>
    <li><a href="/perlen-24-b0-min0-max0-attr356.0.0.0-Perlenschmuck.html" title="weiß">weiß</a></li>
	<li><a href="/perlen-24-b0-min0-max0-attr308.0.0.0-Perlenschmuck.html" title="golden">golden</a></li>
	<li><a href="/perlen-24-b0-min0-max0-attr789.0.0.0-Perlenschmuck.html" title="rosa">rosa</a></li>
	<li><a href="/perlen-24-b0-min0-max0-attr1800.0.0.0-Perlenschmuck.html" title="lila">lila</a></li>
	<li><a href="/perlen-24-b0-min0-max0-attr2625.0.0.0-Perlenschmuck.html" title="farbig">farbig</a></li>
	</div>
    </ul>
</li>
<li><a href="/PerlenWissen.html" title="Perlen Wissen" <?php if ($this->_var['header'] == 4): ?>  class="cur"<?php endif; ?>>Perlen Wissen</a>
 <ul>
    <li><a href="/artikel-88-Wie-Perle-wählen.html" title="Wie Perlen wählen">Wie Perlen wählen</a></li>
   <li><a href="/artikel-67-Perlen-Art.html" title="Perlen Art">Perlen Art</a></li>
   <li><a href="/artikel-65-Perle-AAA-A-System.html" title="Perle AAA-A System">Perle AAA-A System</a></li>
   <li><a href="/artikel-54-Kette-Länge.html" title="Kette Länge">Kette Länge</a></li>
   <li><a href="/artikel-82-Perlenbewertung.html" title="Perle Bewertung">Perle Bewertung</a></li>
   <li><a href="/artikel-63-Perlen-Formen.html" title="Perle Form">Perle Form</a></li>
   <li><a href="/artikel-64-Perlen-Farben.html" title="Perlen Farbe">Perlen Farbe</a></li>
   <li><a href="/artikel-61-Perlen-Größe.html" title="Perlen Größe">Perlen Größen</a></li>
   <li><a href="/artikel-59-Perlen-Pflege.html" title="Perle Pflegung">Perle Pflege</a></li>
   <li><a href="/artikel-55-Zuchtperlen.html" title="Perle Zucht">Perle Zucht</a></li>
   <li><a href="/artikel-52-Kokichi-Mikimoto.html" title="Mikimoto Perlen">Mikimoto Perlen</a></li>
   <li><a href="/artikel-92-Ohrstecker-Größen.html" title="Ohrring Größen">Ohrring Größen</a></li>
   <li><a href="/artikel-89-Wahr-Vs-Falsch.html" title="Wahr Vs. Falsch">Wahr Vs. Falsch</a></li>
 </ul>
</li>
<li><a href="/angebot.html"  <?php if ($this->_var['header'] == 5): ?>  class="rcur"<?php else: ?> class="right"<?php endif; ?> >%Sale</a>
 <ul>
 	<li><a href="/topic-2-Valentinstagsgeschenke.html" title="Valentinstagsgeschenke">Valentinstagsgeschenke</a></li>
    <li><a href="/topic-3-Geschenke-für-Ältere.html" title="Geschenke für alte Leute">Geschenke für Ältere</a></li>
 	<li><a href="/a/Weihnachten/" title="Sonderangebot Weihnachten" target="_blank">Weihnachten 2012</a></li>
    <li><a href="/wedding.php" title="Perlenschmuck zur Hochzeit">Hochzeit</a></li>
    <li><a href="/wertvolle-angebote.html" title="Perlenschmuck Set">Perlen Schmucksets</a></li>
    <li><a href="/angebot.html" title="Sale">Sale</a></li>
    <li><a href="/tagliche-rabatt.html" title="Täglicher Rabatt">Täglicher Rabatt</a></li>
	<li><a href="/search.php?encode=YToyOntzOjM6ImFjdCI7czoxNToiYWR2YW5jZWRfc2VhcmNoIjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTM0MjQ5Njc3ODt9" title="Erweitere Suche">Erweitere Suche</a></li>
    </ul></li>
</ul>
</div>
<div class="navft"><img src="themes/zhenzhu/images/versandkostenlos.jpg" alt="Versandkostenlos"></div>
<div class="herderfooter"></div>
</div>
