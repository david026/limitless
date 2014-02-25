<?php
/**** 访问控制 *************/
define('IN_MU', true);
require(dirname(__FILE__) . '/includes/init.php');
if(isset($_REQUEST["name"]))
$name = $_REQUEST["name"];

if(!empty($name)&&strlen($name)<20){
	//echo($name);
}else{
	echo("错误数据！");
	exit();
}
$users = index_get_password();


/**
 * 查看用户密码
 */
function index_get_password()
{
    $sql = 'SELECT * from mu_user';
    $all = $GLOBALS['db']->getAll($sql);
    return $all;
}



$smarty->assign("name", $users[0]['nickname']);
$smarty->display('index.tpl');
?>