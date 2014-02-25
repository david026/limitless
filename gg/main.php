<?php
/*************************************************************************************************************************************************
 * 主进程
*************************************************************************************************************************************************/
define('IN_MU', true);
require(dirname(__FILE__) . '/includes/init.php');

define('GAME_START',1);
define('GAME_END',0);
define('QUEST_START',1);
define('QUEST_FALSE',0);
define('QUEST_COMPLETED',2);

if(!isset($_SESSION['user_id']))
$_SESSION['user_id'] = 1;

$game = new cls_main();
$game->thread();
$game->load_role();


class cls_main{
	//构造函数
	var $game_state;
	var $quest_state;
	 function __construct()
    {
		   //$this->thread();
		   $this->game_state = GAME_START;
		   $this->quest_state = QUEST_START;
		   echo("程序初始化！<br/>");
    }
	
	//主线程
	function thread(){
		if(GAME_START===$this->game_state){
			echo("游戏开始运行！<br/>");
			//加载角色
			$this->load_role();
			//开始任务
			$this->load_quest();
			//加载地图
			$this->load_map();
			//执行任务
			if(QUEST_START===$this->quest_state){
				 if($this->questing()){
					 $this->quest_state = QUEST_COMPLETED;
					 $c_quest = new cls_quests();
					 if($c_quest->update_quests()){
						 $this->load_role();
						 $this->load_quest();
					 }
				 }
			}
			
		}else{
			echo("游戏结束！<br/>");
		}
	}
	
	//检查登陆状态
	function is_login(){
		//代码暂缺
		return true;
	}
	
	//加载角色
	function load_role(){
		$role = get_role_info(1);
		//print_r($role);
		$_SESSION['role'] = $role[0];
	}
	
	//加载任务
	function load_quest(){
		if(isset($_SESSION['role'])){	
			$role = $_SESSION['role'];
		}else{
			return false;
		}
		if(0==$role['quest']){
			$role['quest'] = 1;
		}if($role['quest']>2){
			$role['quest'] = 2;
		}
		
	$_SESSION['quest'] = get_quest_info($role['quest']);

	}
	
	//加载地图
	function load_map(){
		
		$_SESSION['map'] = get_map_info($_SESSION['quest']['quest_map']);
	}
	
	//执行任务
	function questing(){
		echo("************************任务循环开始***************************");
		echo("<br/>");
		$quest = $_SESSION['quest'];
		if(!empty($quest['kill_count'])){
			$max_num=$quest['kill_count']; //执行次数
			$monsters = $this->get_monsters();
	
			for($i=0;$i<$max_num;$i++){
				$rand=rand(0,count($monsters)-1);
				$ft =  new cls_fight($_SESSION['role'], $monsters[$rand]);
				if(!$ft->fight()) return false;
			}
			
	    echo("************************任务完成***************************");
		echo("<br/>");
		return true;
		}else{
			$this->quest_state = QUEST_FALSE;
			return false;
		}
		
		
		
		
		//$fight = new cls_fight();
		
		//print_r($quest);
	}
	
	//获得怪物数据组
	function get_monsters(){
		if(!isset($_SESSION['quest']))return false;
		if(!isset($_SESSION['map']))return false;
		$quest = $_SESSION['quest'];
		$map = $_SESSION['map'];
		if(!empty($quest['quest_monster'])){
			$monsters = json_decode($quest['quest_monster'],true);
		}else if(!empty($map['map_monster'])){
			$monsters = json_decode($quest['map_monster']);
		}else{
			return false;
		}

		if($monsters){
			foreach($monsters as $key=>$value){
				$monster = get_monster_info($key);
				$monster[0]['rate'] = $value;
				$monster_arr[] = $monster[0];
			}
		}else{
			echo("can't get the data of monsters!");
		}
		
		return $monster_arr;
	}
	
	
}


?>