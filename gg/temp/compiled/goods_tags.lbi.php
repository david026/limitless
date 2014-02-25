<div class="tagsbox">
<p class="top">Marke:</p>
 <form name="tagForm" action="javascript:;" onSubmit="return submitTag(this)" id="tagForm">

<p id="ECS_TAGS" class="list">   <?php $_from = $this->_var['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?><a href="search.php?keywords=<?php echo urlencode($this->_var['tag']['tag_words']); ?>"><?php echo htmlspecialchars($this->_var['tag']['tag_words']); ?>[<?php echo $this->_var['tag']['tag_count']; ?>]</a>          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <input type="text" name="tag" id="tag" class="inputtag" size="35" />
          <input type="submit" value="Add" class="but" />
          <input type="hidden" name="goods_id" value="<?php echo $this->_var['goods']['goods_id']; ?>"  />
        </p>
		<script type="text/javascript">
                //<![CDATA[
                
                /**
                 * 用户添加标记的处理函数
                 */
                function submitTag(frm)
                {
                  try
                  {
                    var tag = frm.elements['tag'].value;
                    var idx = frm.elements['goods_id'].value;

                    if (tag.length > 0 && parseInt(idx) > 0)
                    {
                      Ajax.call('user.php?act=add_tag', "id=" + idx + "&tag=" + tag, submitTagResponse, "POST", "JSON");
                    }
                  }
                  catch (e) {alert(e);}

                  return false;
                }

                function submitTagResponse(result)
                {
                  var div = document.getElementById('ECS_TAGS');

                  if (result.error > 0)
                  {
                    alert(result.message);
                  }
                  else
                  {
                    try
                    {
                      div.innerHTML = '';
                      var tags = result.content;

                      for (i = 0; i < tags.length; i++)
                      {
                        div.innerHTML += '<a href="search.php?keywords='+tags[i].word+'" style="color:#006ace; text-decoration:none; margin-right:5px;">' +tags[i].word + '[' + tags[i].count + ']<\/a>&nbsp;&nbsp; ';
                      }
                    }
                    catch (e) {alert(e);}
                  }
                }
                
                //]]>
                </script>
              </form>

<div class="addthis_toolbox addthis_default_style addthis_32x32_style" style="margin-top:5px;">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>

<a class="addthis_button_google_plusone_badge" g:plusone:size="medium" g:plusone:href="https://plus.google.com/102383601500147943541/"></a> 
<a class="addthis_button_compact"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-502cbeca59579b53"></script>

			  
</div>

   