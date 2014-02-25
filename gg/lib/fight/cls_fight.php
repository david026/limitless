<?php
/************************************************************************************************************************************************
 * 战斗核心类
 * $attacker 攻击者
 * $defender 防御者
 ************************************************************************************************************************************************/
/*if (!defined('IN_MU'))
{
    die('Hacking attempt');
}*/
class cls_fight{
	
	var $role;
	var $monster;
	var $skill_name;
	var $role_hp;
	var $monster_hp;
	//构造函数
	 function __construct($role, $monster)
    {
       //echo($this->fight($attacker,$defender));
	 	   $this->role = $role;
		   $this->monster = $monster;
		   $this->role_hp = $role['hp'];
		   $this->monster_hp = $monster['hp'];
	   
    }
	
	//战斗核心方法
	function fight(){
		for($i=0;$i<30;$i++){
			$fight_type = $this->who_atk($this->role,$this->monster);
			if ($fight_type){
				if($this->is_hit($this->role,$this->monster)){
					$damage = $this->get_damage($this->role,$this->monster);
					$this->monster_hp = $this->monster_hp - $damage;
					echo($this->role['role_name']."的".$this->skill_name."击中".$this->monster['role_name']."造成".$damage."点伤害！");
					echo("<br/>");
					if($this->monster_hp<=0){
						echo($this->monster['role_name']."被消灭,战斗结束！");
						echo("<br/>");
						return true;
					}
				}else{
					echo($this->role['role_name']."未命中".$this->monster['role_name']);
					echo("<br/>");
				}
			}else{
				if($this->is_hit($this->monster,$this->role)){
					$damage = $this->get_damage($this->monster,$this->role);
					$this->role_hp = $this->role_hp - $damage;
					echo($this->monster['role_name']."的".$this->skill_name."击中".$this->role['role_name']."造成".$damage."点伤害！");
					echo("<br/>");
					if($this->role_hp<=0){
						echo($this->role['role_name']."被".$this->monster['role_name']."杀死,冒险结束！");
						echo("<br/>");
						return false;
					}
				}else{
					echo($this->monster['role_name']."未命中".$this->role['role_name']);
					echo("<br/>");
				}
			}
		}
		
		return;
	}
	
	//检查战斗类型
	function check_type($attacker,$defender){
		if($attacker['role']=='player'&&$defender['role']=='monster') 
		{
			return 1;
		}else if($attacker['role']=='monster'&&$defender['role']=='player')
		{
			return 2;
		}
	}
	
	/*********************************************************************************************************************************************
	* 攻击优先度计算
	* 随机（基础攻击优先值20/技能优先值+天赋优先值-体型惩罚）*敏捷
	* 技能修正+专长修正+敏捷差+体型差+职业修正+种族修正
	*********************************************************************************************************************************************/
	
	function who_atk($role,$monster){
		
		if(rand(1,(20+1-3))*$role['dexterous']>=rand(1,(20-2-3))*$monster['dexterous'])
		{
			return true;
		}else{
			return false;
		}
		
	}
	
	//计算是否命中
	function is_hit($attacker,$defender){
		
		$hit_rate = ($attacker['atk']-$defender['def'])/$attacker['atk'];
		if($hit_rate<=0){
			return false;
		}else{
			if($hit_rate >= rand(0,100)/100)
			{
				return true;
			}else{
				return false;
			}
		}
	}
	
	//自动攻击，判断攻击方式
	function get_atk_type($attacker){
		if(empty($attacker['skills'])){
			return 0;//普通攻击
		}else if(is_array(json_decode($attacker['skills'],true))){
			//print_r(json_decode($attacker['skills'],true));
			
			$skills = json_decode($attacker['skills'],true);
			//
			foreach($skills as $key=>$skill){
				$skill_arr[] = array('id'=>$key,'rate'=>$skill);
			}
			$select_skill = rand(0,count($skill_arr)-1);

			if($skill_arr[$select_skill]['rate']<=rand(0,100)){
				$id = $skill_arr[$select_skill]['id'];
				$skill = get_skill_info($id);
				return $skill[0];
			}else{
				return 0;
			}
			
		}else{
			if($attacker['skills']['rate']<=rand(0,100)){
				return $attacker['skill'];
			}else{
				return 0;
			}
			
		}
	}
	
	
	/*********************************************************************************************************************************************
	* 伤害计算
	* 随机（基础攻击优先值20/技能优先值+天赋优先值-体型惩罚）*敏捷
	* 技能修正+专长修正+敏捷差+体型差+职业修正+种族修正
	*********************************************************************************************************************************************/
	function get_damage($attacker,$defender){
		//先判断是技能攻击还是普通攻击
		
		$atk_type = $this->get_atk_type($attacker);
		if(is_array($atk_type)){
			//技能攻击
			$damage = ($attacker['atk']+$attacker['strength'])*$atk_type['power']-$defender['def']-$defender['dexterous'];
			$this->skill_name = $atk_type['skill_name'];
			return $damage>0?$damage:0;
		}else{
			//普通攻击
			$damage = $attacker['atk']+$attacker['strength']-$defender['def']-$defender['dexterous'];
			$this->skill_name = "普通攻击";
			return $damage>0?$damage:0;
		}
	}
}



?>