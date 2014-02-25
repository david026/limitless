<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<?php if ($this->_var['auto_redirect']): ?>
<meta http-equiv="refresh" content="3;URL=<?php echo $this->_var['message']['href']; ?>" />
<?php endif; ?>

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

<div id="mainbox">
<div id="cateleft">
    


 
<div class="filternbox"><a href="/wertvolle-angebote.html" title="perlenschmuck günstig"><img src="themes/zhenzhu/images/sale_ado.jpg" alt="perlenschmuck günstig"  border="0"></a></a><a href="artikel_cat-18-Perlen-Wissen-.html" title="Perlen Wissen"><img src="themes/zhenzhu/images/Style_Screening.jpg" alt="Perlen Wissen"   border="0"></a>
  <a href="artikel_cat-15-Shopping-Hilfe.html" title="Hilfe"><img src="themes/zhenzhu/images/Wissens.jpg"  alt="Shopping Hilfe" border="0"></a></div>
<?php echo $this->fetch('library/order_query.lbi'); ?>
      <?php echo $this->fetch('library/top10.lbi'); ?>

    

    

  </div>
  
  
<div id="cateright">
  <?php echo $this->fetch('library/message_list.lbi'); ?>
  <?php echo $this->fetch('library/pages.lbi'); ?>

<div class="messageadd">
      <h3 class="top">Kommentieren</h3>

          <form action="message2.php" method="post" name="formMsg" onSubmit="return submitMsgBoard(this)">
            <table class="inputbox" cellpadding="3">
              <tr style="display:none">
                <td class="title"><?php echo $this->_var['lang']['username']; ?></td>
                <td class="input">
                <?php if ($_SESSION['user_name']): ?>
                <font class="f4_b"><?php echo $this->_var['username']; ?></font><label for="anonymous" style="margin-left:8px;"><input type="checkbox" name="anonymous" value="1" id="anonymous" /><?php echo $this->_var['lang']['message_anonymous']; ?></label>
                <?php else: ?>
               <?php echo $this->_var['lang']['anonymous']; ?>
                <?php endif; ?>
                </td>
              </tr>
              <tr>
                <td class="title">Vollständige Namen</td>
                <td class="input"><input name="fullname" type="text" class="inputBg" size="20" value="<?php echo $this->_var['fullname']; ?>" /></td>
              </tr>
              <tr>
                <td class="title">Telefon</td>
                <td class="input"><input name="tel" type="text" class="inputBg" size="20" value="<?php echo htmlspecialchars($_SESSION['tel']); ?>" /></td>
              </tr>
              <tr>
                <td class="title"><?php echo $this->_var['lang']['email']; ?></td>
                <td class="input"><input name="user_email" type="text" class="inputBg" size="20" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" /></td>
              </tr>
             
              <tr>
                <td class="title">Internationale Codes</td>
                <td class="input"><select  size="1" name="Country" maxlenth="30">

                                                    <option  selected="selected">Germany (+49)</option>

                                                     <option>Austria (+43)</option>

                                                    <option>Autralia (+61)</option>

                                                    <option>Belgium (+32)</option>

                                                    <option>Canada (+1)</option>

                                                    <option>Denmark (+45)</option>

                                                    <option>Finland (+358)</option>

                                                    <option>France (+33)</option>

                                                    <option>Germany (+49)</option>

                                                    <option>Italy (+39)</option>

                                                    <option>Luxembourg (+352)</option>

                                                    <option>Netherlands (+31)</option>

                                                    <option>Poland (+48)</option>

                                                    <option>Switzerland (+41)</option>

                                                    <option>United Kingdom (+44)</option>

                                                    <option>United States (+1)</option>

                                                </select></td>
              </tr>
              
               <tr>
                <td class="title">Kontakt Datum</td>
               <td class="input"><select id="select3" size="1" name="Day">
                                                    <option selected="selected">Tag</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
<select id="select4" size="1" name="Month">
                                                    <option value="Monat" selected="selected">Monat</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                                 </td>
              </tr>
             <tr>
                <td class="title">Anruf Zeitpunkt</td>
               <td class="input"><select id="Time" name="Time">

                                                    <option selected="selected">Zeitpunkt</option>
                                                    <option>00:00</option>
                                                    <option>01:00</option>
                                                    <option>02:00</option>
                                                    <option>03:00</option>
                                                    <option>04:00</option>
                                                    <option>05:00</option>
                                                    <option>06:00</option>
                                                    <option>07:00</option>
                                                    <option>08:00</option>
                                                    <option>09:00</option>
                                                    <option>10:00</option>
                                                    <option>11:00</option>
                                                    <option>12:00</option>
                                                    <option>13:00</option>
                                                    <option>14:00</option>
                                                    <option>15:00</option>
                                                    <option>16:00</option>
                                                    <option>17:00</option>
                                                    <option>18:00</option>
                                                    <option>19:00</option>
                                                    <option>20:00</option>
                                                    <option>21:00</option>
                                                    <option>22:00</option>
                                                    <option>23:00</option>
                                                </select></td>
              </tr> 
                <tr>
                <td class="title"><?php echo $this->_var['lang']['message_board_type']; ?></td>
                <td class="input"><input name="msg_type" type="radio" value="0" checked="checked" />
                  <?php echo $this->_var['lang']['message_type']['0']; ?>
                  <input type="radio" name="msg_type" value="1" />
                  <?php echo $this->_var['lang']['message_type']['1']; ?>
                  <input type="radio" name="msg_type" value="2" />
                  <?php echo $this->_var['lang']['message_type']['2']; ?>
                  <input type="radio" name="msg_type" value="3" />
                  <?php echo $this->_var['lang']['message_type']['3']; ?>
                  <input type="radio" name="msg_type" value="4" />
                  <?php echo $this->_var['lang']['message_type']['4']; ?> </td>
              </tr>
            <?php if ($this->_var['enabled_mes_captcha']): ?>
              <tr>
                <td class="title"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
                <td class="input"><input type="text" size="8" name="captcha"  class="inputBg" />
                <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" /> </td>
              </tr>
            <?php endif; ?>
              <tr>
                <td class="title"><?php echo $this->_var['lang']['message_content']; ?></td>
                <td class="input"><textarea name="msg_content" cols="50" rows="4" wrap="virtual" style="border:1px solid #ccc;"></textarea></td>
              </tr>
              <tr>
                <td >&nbsp;</td>
                <td class="input"><input type="hidden" name="act" value="act_add_message" />
                  <input type="submit" value="<?php echo $this->_var['lang']['post_message']; ?>" class="but" />
                </td>
              </tr>
            </table>
          </form>
        <script type="text/javascript">
        <?php $_from = $this->_var['lang']['message_board_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        
        /**
         * 提交留言信息
        */
        function submitMsgBoard(frm)
        {
            var msg = new Object;

             msg.user_email  = frm.elements['user_email'].value;
             msg.msg_title   = frm.elements['msg_title'].value;
             msg.msg_content = frm.elements['msg_content'].value;
             msg.captcha     = frm.elements['captcha'] ? frm.elements['captcha'].value : '';

            var msg_err = '';

            if (msg.user_email.length > 0)
            {
               if (!(Utils.isEmail(msg.user_email)))
               {
                  msg_err += msg_error_email + '\n';
                }
             }
             else
             {
                  msg_err += msg_empty_email + '\n';
             }
            if (msg.msg_title.length == 0)
            {
                msg_err += msg_title_empty + '\n';
            }
            if (frm.elements['captcha'] && msg.captcha.length==0)
            {
                msg_err += msg_captcha_empty + '\n'
            }
            if (msg.msg_content.length == 0)
            {
                msg_err += msg_content_empty + '\n'
            }
            if (msg.msg_title.length > 200)
            {
                msg_err += msg_title_limit + '\n';
            }

            if (msg_err.length > 0)
            {
                alert(msg_err);
                return false;
            }
            else
            {
                return true;
            }
        }
        
        </script>
     </div>
  </div>
  
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
