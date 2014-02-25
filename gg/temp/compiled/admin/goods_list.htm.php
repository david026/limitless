<!-- $Id: goods_list.htm 17126 2010-04-23 10:30:26Z liuhui $ -->

<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<!-- 商品搜索 -->
<?php echo $this->fetch('goods_search.htm'); ?>
<!-- 商品列表 -->
<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start goods list -->
  <div class="list-div" id="listDiv">
<?php endif; ?>
<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
      <a href="javascript:listTable.sort('goods_id'); "><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_goods_id']; ?>
    </th>
    <th><a href="javascript:listTable.sort('goods_name'); "><?php echo $this->_var['lang']['goods_name']; ?></a><?php echo $this->_var['sort_goods_name']; ?></th>
    <th><a href="javascript:listTable.sort('goods_sn'); "><?php echo $this->_var['lang']['goods_sn']; ?></a><?php echo $this->_var['sort_goods_sn']; ?></th>
    <th><a href="javascript:listTable.sort('shop_price'); "><?php echo $this->_var['lang']['shop_price']; ?></a><?php echo $this->_var['sort_shop_price']; ?></th>
    <th><a href="javascript:listTable.sort('is_on_sale'); "><?php echo $this->_var['lang']['is_on_sale']; ?></a><?php echo $this->_var['sort_is_on_sale']; ?></th>
    <th><a href="javascript:listTable.sort('is_best'); "><?php echo $this->_var['lang']['is_best']; ?></a><?php echo $this->_var['sort_is_best']; ?></th>
    <th><a href="javascript:listTable.sort('is_new'); "><?php echo $this->_var['lang']['is_new']; ?></a><?php echo $this->_var['sort_is_new']; ?></th>
    <th><a href="javascript:listTable.sort('is_hot'); "><?php echo $this->_var['lang']['is_hot']; ?></a><?php echo $this->_var['sort_is_hot']; ?></th>
    <th><a href="javascript:listTable.sort('sort_order'); "><?php echo $this->_var['lang']['sort_order']; ?></a><?php echo $this->_var['sort_sort_order']; ?></th>
    <?php if ($this->_var['use_storage']): ?>
    <th><a href="javascript:listTable.sort('goods_number'); "><?php echo $this->_var['lang']['goods_number']; ?></a><?php echo $this->_var['sort_goods_number']; ?></th>
    <?php endif; ?>
    <th><a href="javascript:listTable.sort('click_count'); ">点击</a><?php echo $this->_var['sort_click_count']; ?></th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  <tr>
  <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('okey', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['okey'] => $this->_var['goods']):
?>
  <tr>
    <td><input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['goods']['goods_id']; ?>" /><a tips="../<?php echo $this->_var['goods']['goods_thumb']; ?>" onmouseover="show_img(this)" onmouseout="hide_img()"><?php echo $this->_var['goods']['goods_id']; ?></a></td>

    <td class="first-cell" style="<?php if ($this->_var['goods']['is_promote']): ?>color:red;<?php endif; ?>"><span onclick="listTable.edit(this, 'edit_goods_name', <?php echo $this->_var['goods']['goods_id']; ?>)"><?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?></span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', <?php echo $this->_var['goods']['goods_id']; ?>)"><?php echo $this->_var['goods']['goods_sn']; ?></span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', <?php echo $this->_var['goods']['goods_id']; ?>)"><?php echo $this->_var['goods']['shop_price']; ?>

    </span></td>
    <td align="center"><img src="images/<?php if ($this->_var['goods']['is_on_sale']): ?>yes<?php else: ?>no<?php endif; ?>.gif" onclick="listTable.toggle(this, 'toggle_on_sale', <?php echo $this->_var['goods']['goods_id']; ?>)" /></td>
    <td align="center"><img src="images/<?php if ($this->_var['goods']['is_best']): ?>yes<?php else: ?>no<?php endif; ?>.gif" onclick="listTable.toggle(this, 'toggle_best', <?php echo $this->_var['goods']['goods_id']; ?>)" /></td>
    <td align="center"><img src="images/<?php if ($this->_var['goods']['is_new']): ?>yes<?php else: ?>no<?php endif; ?>.gif" onclick="listTable.toggle(this, 'toggle_new', <?php echo $this->_var['goods']['goods_id']; ?>)" /></td>
    <td align="center"><img src="images/<?php if ($this->_var['goods']['is_hot']): ?>yes<?php else: ?>no<?php endif; ?>.gif" onclick="listTable.toggle(this, 'toggle_hot', <?php echo $this->_var['goods']['goods_id']; ?>)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', <?php echo $this->_var['goods']['goods_id']; ?>)"><?php echo $this->_var['goods']['sort_order']; ?></span></td>
    <?php if ($this->_var['use_storage']): ?>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', <?php echo $this->_var['goods']['goods_id']; ?>)"><?php echo $this->_var['goods']['goods_number']; ?></span></td>
    <?php endif; ?>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', <?php echo $this->_var['goods']['goods_id']; ?>)"><?php echo $this->_var['goods']['click_count']; ?></span></td>
    <td align="center">
      <a href="../goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" title="<?php echo $this->_var['lang']['view']; ?>"><img src="images/icon_view.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=edit&goods_id=<?php echo $this->_var['goods']['goods_id']; ?><?php if ($this->_var['code'] != 'real_goods'): ?>&extension_code=<?php echo $this->_var['code']; ?><?php endif; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
      <a href="goods.php?act=copy&goods_id=<?php echo $this->_var['goods']['goods_id']; ?><?php if ($this->_var['code'] != 'real_goods'): ?>&extension_code=<?php echo $this->_var['code']; ?><?php endif; ?>" title="<?php echo $this->_var['lang']['copy']; ?>"><img src="images/icon_copy.gif" width="16" height="16" border="0" /></a>
      <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['goods']['goods_id']; ?>, '<?php echo $this->_var['lang']['trash_goods_confirm']; ?>')" title="<?php echo $this->_var['lang']['trash']; ?>"><img src="images/icon_trash.gif" width="16" height="16" border="0" /></a>
      <?php if ($this->_var['specifications'] [ $this->_var['goods']['goods_type'] ] != ''): ?><a href="goods.php?act=product_list&goods_id=<?php echo $this->_var['goods']['goods_id']; ?>" title="<?php echo $this->_var['lang']['item_list']; ?>"><img src="images/icon_docs.gif" width="16" height="16" border="0" /></a><?php else: ?><img src="images/empty.gif" width="16" height="16" border="0" /><?php endif; ?>
      <?php if ($this->_var['add_handler']): ?>
        |
        <?php $_from = $this->_var['add_handler']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'handler');if (count($_from)):
    foreach ($_from AS $this->_var['handler']):
?>
        <a href="<?php echo $this->_var['handler']['url']; ?>&goods_id=<?php echo $this->_var['goods']['goods_id']; ?>" title="<?php echo $this->_var['handler']['title']; ?>"><img src="images/<?php echo $this->_var['handler']['img']; ?>" width="16" height="16" border="0" /></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>
    </td>
  </tr>
  
  <?php endforeach; else: ?>
  <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
<!-- end goods list -->
<div style="display:none" id="div1">
<img src="" />
</div>
<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td align="right" nowrap="true">
    <?php echo $this->fetch('page.htm'); ?>
    </td>
  </tr>
</table>

<?php if ($this->_var['full_page']): ?>
</div>

<div>
  <input type="hidden" name="act" value="batch" />
  <select name="type" id="selAction" onchange="changeAction()">
    <option value=""><?php echo $this->_var['lang']['select_please']; ?></option>
    <option value="trash"><?php echo $this->_var['lang']['trash']; ?></option>
    <option value="on_sale"><?php echo $this->_var['lang']['on_sale']; ?></option>
    <option value="not_on_sale"><?php echo $this->_var['lang']['not_on_sale']; ?></option>
    <option value="best"><?php echo $this->_var['lang']['best']; ?></option>
    <option value="not_best"><?php echo $this->_var['lang']['not_best']; ?></option>
    <option value="new"><?php echo $this->_var['lang']['new']; ?></option>
    <option value="not_new"><?php echo $this->_var['lang']['not_new']; ?></option>
    <option value="hot"><?php echo $this->_var['lang']['hot']; ?></option>
    <option value="not_hot"><?php echo $this->_var['lang']['not_hot']; ?></option>
    <option value="move_to"><?php echo $this->_var['lang']['move_to']; ?></option>
	<?php if ($this->_var['suppliers_list'] > 0): ?>
    <option value="suppliers_move_to"><?php echo $this->_var['lang']['suppliers_move_to']; ?></option>
	<?php endif; ?>    
  </select>
  <select name="target_cat" style="display:none">
    <option value="0"><?php echo $this->_var['lang']['select_please']; ?></option><?php echo $this->_var['cat_list']; ?>
  </select>
	<?php if ($this->_var['suppliers_list'] > 0): ?>
  <!--二级主菜单：转移供货商-->
  <select name="suppliers_id" style="display:none">
    <option value="-1"><?php echo $this->_var['lang']['select_please']; ?></option>
    <option value="0"><?php echo $this->_var['lang']['lab_to_shopex']; ?></option>
    <?php $_from = $this->_var['suppliers_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'sl');$this->_foreach['sln'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sln']['total'] > 0):
    foreach ($_from AS $this->_var['sl']):
        $this->_foreach['sln']['iteration']++;
?>
      <option value="<?php echo $this->_var['sl']['suppliers_id']; ?>"><?php echo $this->_var['sl']['suppliers_name']; ?></option>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </select>
  <!--end!-->
	<?php endif; ?>  
  <?php if ($this->_var['code'] != 'real_goods'): ?>
  <input type="hidden" name="extension_code" value="<?php echo $this->_var['code']; ?>" />
  <?php endif; ?>
  <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" id="btnSubmit" name="btnSubmit" class="button" disabled="true" />
</div>
</form>

<script type="text/javascript">
  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  
  onload = function()
  {
    startCheckOrder(); // 开始检查订单
    document.forms['listForm'].reset();
  }

  /**
   * @param: bool ext 其他条件：用于转移分类
   */
  function confirmSubmit(frm, ext)
  {
      if (frm.elements['type'].value == 'trash')
      {
          return confirm(batch_trash_confirm);
      }
      else if (frm.elements['type'].value == 'not_on_sale')
      {
          return confirm(batch_no_on_sale);
      }
      else if (frm.elements['type'].value == 'move_to')
      {
          ext = (ext == undefined) ? true : ext;
          return ext && frm.elements['target_cat'].value != 0;
      }
      else if (frm.elements['type'].value == '')
      {
          return false;
      }
      else
      {
          return true;
      }
  }

  function changeAction()
  {
      var frm = document.forms['listForm'];

      // 切换分类列表的显示
      frm.elements['target_cat'].style.display = frm.elements['type'].value == 'move_to' ? '' : 'none';
			
			<?php if ($this->_var['suppliers_list'] > 0): ?>
      frm.elements['suppliers_id'].style.display = frm.elements['type'].value == 'suppliers_move_to' ? '' : 'none';
			<?php endif; ?>

      if (!document.getElementById('btnSubmit').disabled &&
          confirmSubmit(frm, false))
      {
          frm.submit();
      }
  }




    /**
     * 显示订单商品及缩图
     */
    var show_goods_layer = 'order_goods_layer';
    var goods_hash_table = new Object;
    var timer = new Object;

    /**
     * 绑定订单号事件
     *
     * @return void
     */
    function bind_order_event()
    {
        var order_seq = 0;
        while(true)
        {
            var order_sn = Utils.$('order_'+order_seq);
            if (order_sn)
            {
                order_sn.onmouseover = function(e)
                {
                    try
                    {
                        window.clearTimeout(timer);
                    }
                    catch(e)
                    {
                    }
                    var order_id = Utils.request(this.href, 'order_id');
                    show_order_goods(e, order_id, show_goods_layer);
                }
                order_sn.onmouseout = function(e)
                {
                    hide_order_goods(show_goods_layer)
                }
                order_seq++;
            }
            else
            {
                break;
            }
        }
    }
    listTable.listCallback = function(result, txt) 
    {
        if (result.error > 0) 
        {
            alert(result.message);
        }
        else 
        {
            try 
            {
                document.getElementById('listDiv').innerHTML = result.content;
                bind_order_event();
                if (typeof result.filter == "object") 
                {
                    listTable.filter = result.filter;
                }
                listTable.pageCount = result.page_count;
            }
            catch(e)
            {
                alert(e.message);
            }
        }
    }
    /**
     * 浏览器兼容式绑定Onload事件
     *
     */
    if (Browser.isIE)
    {
        window.attachEvent("onload", bind_order_event);
    }
    else
    {
        window.addEventListener("load", bind_order_event, false);
    }

    /**
     * 建立订单商品显示层
     *
     * @return void
     */
    function create_goods_layer(id)
    {
        if (!Utils.$(id))
        {
            var n_div = document.createElement('DIV');
            n_div.id = id;
            n_div.className = 'order-goods';
            document.body.appendChild(n_div);
            Utils.$(id).onmouseover = function()
            {
                window.clearTimeout(window.timer);
            }
            Utils.$(id).onmouseout = function()
            {
                hide_order_goods(id);
            }
        }
        else
        {
            Utils.$(id).style.display = '';
        }
    }

    /**
     * 显示订单商品数据
     *
     * @return void
     */
    function show_order_goods(e, order_id, layer_id)
    {
        create_goods_layer(layer_id);
        $layer_id = Utils.$(layer_id);
        $layer_id.style.top = (Utils.y(e) + 12) + 'px';
        $layer_id.style.left = (Utils.x(e) + 12) + 'px';
        if (typeof(goods_hash_table[order_id]) == 'object')
        {
            response_goods_info(goods_hash_table[order_id]);
        }
        else
        {
            $layer_id.innerHTML = loading;
            //Ajax.call('order.php?is_ajax=1&act=get_goods_info&order_id='+order_id, '', response_goods_info , 'POST', 'JSON');
			alert("22222");
			//images/201207/goods_img/373_P_1342844683852.jpg
        }
    }

    /**
     * 隐藏订单商品
     *
     * @return void
     */
    function hide_order_goods(layer_id)
    {
        $layer_id = Utils.$(layer_id);
        window.timer = window.setTimeout('$layer_id.style.display = "none"', 500);
    }
	
	function show_img(oEvent){	
		var oEvent = oEvent ? oEvent : window.event;
		var d1 = document.getElementById("div1");
		d1.style.display="inline";
		var img = d1.getElementsByTagName("img")[0];
		img.src = oEvent.getAttribute('tips');
		img.style.position = 'absolute';
 		img.style.left = '200px';
  		img.style.top =  '200px';
		img.style.z-index ="99";
	}

	function hide_img(){
		var d1 = document.getElementById("div1");
		d1.style.display="none";
	}

</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>