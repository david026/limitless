<?php /*%%SmartyHeaderCode:289251272d7c6d02e4-23232316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1361869607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289251272d7c6d02e4-23232316',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514fffda3718b8_89607893',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514fffda3718b8_89607893')) {function content_514fffda3718b8_89607893($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<meta charset="UTF-8">
<head>
<title>let's try!</title>
<link type="text/css" rel="stylesheet" href="/css/style.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</head>
<body>
<div class="main">
  <div id="title"><b>david's 无尽世界</b></div>
  <div id="userinfo">
    <h3>属性</h3>
    <table border="1" width="287px">
      <tr>
        <th >名称</th>
        <th >数值</th>
      </tr>
      <tr>
        <td>名字</td>
        <td>猛犸</td>
      </tr>
      <tr>
        <td>性别</td>
        <td>男</td>
      </tr>
      <tr>
        <td>种族</td>
        <td>人类</td>
      </tr>
      <tr>
        <td>职业</td>
        <td>平民</td>
      </tr>
      <tr>
        <td>力量</td>
        <td>12</td>
      </tr>
      <tr>
        <td>体质</td>
        <td>11</td>
      </tr>
      <tr>
        <td>敏捷</td>
        <td>9</td>
      </tr>
      <tr>
        <td>智力</td>
        <td>13</td>
      </tr>
      <tr>
        <td>感知</td>
        <td>9</td>
      </tr>
      <tr>
        <td>魅力</td>
        <td>9</td>
      </tr>
    </table>
  </div>
  <div id="equip">
    <h3>装备</h3>
    <table border="1" width="383px">
      <tr>
        <th width="20%">位置</th>
        <th >装备名称</th>
      </tr>
      <tr>
        <td>左手</td>
        <td>菜刀</td>
      </tr>
      <tr>
        <td>右手</td>
        <td>木棍</td>
      </tr>
      <tr>
        <td>头部</td>
        <td>摩托车头盔</td>
      </tr>
      <tr>
        <td>颈部</td>
        <td>幸运符</td>
      </tr>
      <tr>
        <td>上半身</td>
        <td>皮衣</td>
      </tr>
      <tr>
        <td>下半身</td>
        <td>皮裤</td>
      </tr>
      <tr>
        <td>脚部</td>
        <td>雪地靴</td>
      </tr>
      <tr>
        <td>手部</td>
        <td>橡皮手套</td>
      </tr>
      <tr>
        <td>手指</td>
        <td>结婚戒指</td>
      </tr>
      <tr>
        <td>特殊部位</td>
        <td>羊毛围巾</td>
      </tr>
    </table>
  </div>
  <div id="quest">
    <h3>任务日志</h3>
    <table border="1" width="278px">
      <tr>
        <td><input type="button" id="chose_quest" value="切换"/></td>
      </tr>
      <tr>
        <td><input type="checkbox" disabled checked="checked">
          醒来</td>
      </tr>
      <tr>
        <td><input type="checkbox" disabled checked="checked">
          求生</td>
      </tr>
      <tr>
        <td><input type="checkbox" disabled checked="checked">
          寻找武器</td>
      </tr>
      <tr>
        <td><input type="checkbox" disabled checked="checked">
          第一次战斗</td>
      </tr>
      <tr>
        <td><input type="checkbox" disabled checked="checked">
          寻找食物</td>
      </tr>
      <tr>
        <td><input type="checkbox" disabled checked="checked">
          遇到爱丽丝</td>
      </tr>
      <tr>
        <td><input type="checkbox" disabled checked="checked">
          城市战斗</td>
      </tr>
      <tr>
        <td><input type="checkbox" disabled checked="checked">
          寻找教堂</td>
      </tr>
      <tr>
        <td><input type="checkbox" disabled >
          保护博士的女儿</td>
      </tr>
    </table>
  </div>
  <div id="running">
  <p>猛犸击中丧尸，普通攻击造成20+2点伤害，实际造成18点伤害。丧尸死亡，获得5点exp!</p>
    <div class="progress-bar green stripes" id="progress"> <span style="width: 0%"></span>
      <label>0px</label>
    </div>
  </div>
  <div id="skill">
    <h3>技能</h3>
    <table border="1" width="287px">
      <tr>
        <th >名称</th>
        <th >数值</th>
      </tr>
      <tr>
        <td>基础近战</td>
        <td>2级</td>
      </tr>
      <tr>
        <td>基础步伐</td>
        <td>1级</td>
      </tr>
    </table>
  </div>
  <div id="log">
    <h3>日志</h3>
    <table border="1" width="383px">
      <tr>
        <td>猛犸击中丧尸，普通攻击造成20+2点伤害，实际造成18点伤害</td>
      </tr>
      <tr>
        <td>丧尸击中猛犸，普通攻击造成5点伤害，实际造成2点伤害</td>
      </tr>
      <tr>
        <td>丧尸击中猛犸，撕咬造成10点伤害，实际造成8点伤害</td>
      </tr>
      <tr>
        <td>猛犸击中丧尸，普通攻击造成20+2点伤害，实际造成18点伤害</td>
      </tr>
      <tr>
        <td>丧尸击中猛犸，普通攻击造成5点伤害，实际造成2点伤害</td>
      </tr>
      <tr>
        <td>丧尸击中猛犸，撕咬造成10点伤害，实际造成8点伤害</td>
      </tr>
      <tr>
        <td>猛犸击中丧尸，普通攻击造成20+2点伤害，实际造成18点伤害。丧尸死亡，获得5点exp</td>
      </tr>
      <tr>
        <td>丧尸击中猛犸，普通攻击造成5点伤害，实际造成2点伤害</td>
      </tr>
      <tr>
        <td>丧尸击中猛犸，撕咬造成10点伤害，实际造成8点伤害</td>
      </tr>
      <tr>
        <td>猛犸击中丧尸，普通攻击造成20+2点伤害，实际造成18点伤害。丧尸死亡，获得5点exp</td>
      </tr>
      <tr>
        <td>丧尸击中猛犸，普通攻击造成5点伤害，实际造成2点伤害</td>
      </tr>
      <tr>
        <td>丧尸击中猛犸，撕咬造成10点伤害，实际造成8点伤害</td>
      </tr>
    </table>
  </div>
  <div id="backpack">
    <h3>背包</h3>
    <table border="1" width="278px">
      <tr>
        <th width="30%">物品名称</th>
        <th >物品描述</th>
      </tr>
      <tr>
        <td>血石</td>
        <td>材料，高级丧尸的结晶</td>
      </tr>
      <tr>
        <td>丧尸的牙齿</td>
        <td>垃圾，可以换钱</td>
      </tr>
      <tr>
        <td>丧尸的牙齿</td>
        <td>垃圾，可以换钱</td>
      </tr>
      <tr>
        <td>破损的枪械</td>
        <td>可回收资源</td>
      </tr>
      <tr>
        <td>旧剑</td>
        <td>低级武器</td>
      </tr>
      <tr>
        <td>微量生命药剂</td>
        <td>低级治疗药剂，+30hp</td>
      </tr>
      <tr>
        <td>微量精神药剂</td>
        <td>低级治疗药剂，+30mp</td>
      </tr>
      <tr>
        <td>铁块</td>
        <td>可回收资源</td>
      </tr>
      <tr>
        <td>新手木棒</td>
        <td>低级武器，可回收</td>
      </tr>
      <tr>
        <td>舔食者唾液</td>
        <td>炼金材料</td>
      </tr>
      <tr>
        <td>金项链</td>
        <td>贵重物品</td>
      </tr>
      <tr>
        <td>钻石戒子</td>
        <td>贵重物品</td>
      </tr>
    </table>
  </div>
  
</div>
</body>
<script>
	$(document).ready(function(){ 
		$('.quarter').click(function(){
			$(this).parent().prev().children('span').css('width','25%');
			});
		$('.half').click(function(){
			$(this).parent().prev().children('span').css('width','50%');
			});
		$('.three-quarters').click(function(){
			$(this).parent().prev().children('span').css('width','75%');
			});
		$('.full').click(function(){
			$(this).parent().prev().children('span').css('width','100%');
			});	
 
		$start = 0; 
		$.extend({ 
		a:function(t){ 
			$index = t; 
			$('#progress').children('span').css('width',$index+"%");
			$('#progress').children('label').text($index+"%");
			
			if($start<100){
				$start++;
			}else{
				window.clearInterval($int);
			}
		} 
		}); 
		$int  = setInterval("$.a($start)",200); 

		
	});
	</script>
</html><?php }} ?>