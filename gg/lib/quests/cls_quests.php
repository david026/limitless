<?php
/************************************************************************************************************************************************
 * 任务核心类
 * 
 * 
 ************************************************************************************************************************************************/
/*if (!defined('IN_MU'))
{
    die('Hacking attempt');
}*/
class cls_quests{
	
	
	//构造函数
	 function __construct()
    {
	 	echo("启动任务类");  
		
    }
	
	//更新任务状态
	function update_quests(){
		 $qeust = $_SESSION['quest'];
		 $role = $_SESSION['role'];
		 if(!empty($qeust)){
			 if(!empty($role['quest_completed'])){
			 	$quest_completed  = json_decode($role['quest_completed'],true);
				 array_push($quest_completed,array('id'=>$role['r_id'],'c_time'=>time()));
			 }else{
				 $quest_completed[] = array('id'=>$role['r_id'],'c_time'=>time());
			 }
			 
			 $sql = "update mu_role set quest = quest+1 ,quest_completed ='".json_encode($quest_completed)."' where r_id= ".$role['r_id'];
    		 return $GLOBALS['db']->query($sql);
		}else{
		     return false;
		 }
	}
	
	
}



?>