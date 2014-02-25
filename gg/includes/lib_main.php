<?php
/*************************************************************************************************************************************************
 * 公共函数库
************************************************************************************************************************************************/

/**
 *  获取用户信息数组
 *
 * @access  public
 * @param
 *
 * @return array        $user       用户信息数组
 */
function get_user_info($id=0)
{
    if ($id == 0)
    {
        $id = $_SESSION['user_id'];
    }
    $time = date('Y-m-d');
    $sql  = 'SELECT u.user_id, u.email, u.user_name, u.user_money, u.pay_points'.
            ' FROM ' .$GLOBALS['ecs']->table('users'). ' AS u ' .
            " WHERE u.user_id = '$id'";
    $user = $GLOBALS['db']->getRow($sql);
    $bonus = get_user_bonus($id);

    $user['username']    = $user['user_name'];
    $user['user_points'] = $user['pay_points'] . $GLOBALS['_CFG']['integral_name'];
    $user['user_money']  = price_format($user['user_money'], false);
    $user['user_bonus']  = price_format($bonus['bonus_value'], false);

    return $user;
}

//获取角色信息
function get_role_info($id){
	if (!$_SESSION['user_id'])
    {
        return false;
    }
	
	$sql  = 'SELECT * from mu_role where r_id = '.$id;
	$role = $GLOBALS['db']->getAll($sql);
    return $role;
}

//获取任务信息
function get_quest_info($id){
	if (!$_SESSION['user_id'])
    {
        return false;
    }
	
	$sql  = 'SELECT * from mu_quest where id = '.$id;
	$quest = $GLOBALS['db']->getAll($sql);
    return $quest[0];
}

//获取地图信息
function get_map_info($id){
	if (!$_SESSION['user_id'])
    {
        return false;
    }
	
	$sql  = 'SELECT * from mu_map where id = '.$id;
    return $GLOBALS['db']->getAll($sql);
}

//获取怪物信息
function get_monster_info($id){
	if (!$_SESSION['user_id'])
    {
        return false;
    }
	
	$sql  = 'SELECT * from mu_monster where id = '.$id;
    return $GLOBALS['db']->getAll($sql);
}

//获取技能信息
function get_skill_info($id){
	if (!$_SESSION['user_id'])
    {
        return false;
    }
	
	$sql  = 'SELECT * from mu_skills where id = '.$id;
    return $GLOBALS['db']->getAll($sql);
}
?>