<?php

/**
 * ECSHOP 前台公用文件
 * ============================================================================
 * 版权所有 2005-2010 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liuhui $
 * $Id: init.php 17153 2010-05-05 09:39:12Z liuhui $
*/

if (!defined('IN_MU'))//表示不能直接访问此脚本文件 
{
    die('Hacking attempt');
}

//报告所有错误
error_reporting(E_ALL);

if (__FILE__ == '') //如果获取的 当前文件的路径和文件名 为空
{
    die('Fatal error code: 0'); //致命错误
}

/* 取得当前ecshop所在的根目录 */
//定义ROOT_PATH常量  = 先把 '\\',替换成 '/'， 然后把'includes/init.php',替换为空（即去掉'includes/init.php'）
define('ROOT_PATH', str_replace('includes/init.php', '', str_replace('\\', '/', __FILE__)));

/* 初始化设置 */ 

 //ini_set更改php.ini配置功能
@ini_set('memory_limit',          '64M'); //设定了一个脚本所能够申请到的最大内存字节数 
@ini_set('session.cache_expire',  180);//缓存期限,必须在每次请求时候调用session_cache_expire()（在session_start()调用前调用
@ini_set('session.use_trans_sid', 0);// 1-表示让PHP自动跨页传递session id;   2-表示手动通过URL传值、隐藏 
@ini_set('session.use_cookies',   1);
@ini_set('session.auto_start',    0);//关闭，如果开启就自动完成了session_start()
@ini_set('display_errors',        1);//On-显示所有错误信息  Off-屏蔽所有错误信息 


/* * 在windows下路径分隔符是\,
 * 在linux上路径的分隔符是/,
 * 正确兼容的写法为DIRECTORY_SEPARATOR

 * 当时候函数include(),require(),fopen_with_path()函数来寻找文件时候
 * 默认的是以web根目录去寻找.当设置include_path以后,这些php函数就会先在指定的include_path目录下面去搜索寻找. 
 */
if (DIRECTORY_SEPARATOR == '\\')
{
    @ini_set('include_path', '.;' . ROOT_PATH);
}
else
{
    @ini_set('include_path', '.:' . ROOT_PATH);
}

require(ROOT_PATH . 'data/config.php');//载入配置文件

//defined() 函数检查某常量是否存在。
if (defined('DEBUG_MODE') == false)
{
    define('DEBUG_MODE', 0); //如果DEBUG_MODE未定义，则定义常量DEBUG_MODE
}

//PHP版本大于5.1 并且 设置过 时间时区
if (PHP_VERSION >= '5.1' && !empty($timezone))
{
    date_default_timezone_set($timezone);//设置配置文件中时区
}

/*PHP_SELF 当前文件路径名称  如:www.zhjf.com/new/a.php?id=1 得到:/new/a.php
 * PHP_SELF一般与 SCRIPT_NAME 没区别，当PHP以CGI 方式运行才会看到区别
 */
$php_self = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
if ('/' == substr($php_self, -1)) //如果$php_self尾部第一个字符是'/',表示为目录
{
    $php_self .= 'index.php';//变量赋值为 index.php
}
define('PHP_SELF', $php_self);//定义当前脚本文件

//载入根目录下includes目录下的文件
require(ROOT_PATH . 'includes/cls_mysql.php');
require(ROOT_PATH . 'includes/cls_error.php');
require(ROOT_PATH . 'includes/lib_common.php');
require(ROOT_PATH . 'includes/lib_main.php');
require(ROOT_PATH . 'includes/lib_insert.php');
require(ROOT_PATH . 'includes/lib_time.php');
require(ROOT_PATH . 'includes/lib_base.php');
require(ROOT_PATH . 'lib/fight/cls_fight.php');
require(ROOT_PATH . 'lib/quests/cls_quests.php');

/* 对用户传入的变量进行转义操作。*/
if (!get_magic_quotes_gpc())
{
    if (!empty($_GET))
    {
        $_GET  = addslashes_deep($_GET);
    }
    if (!empty($_POST))
    {
        $_POST = addslashes_deep($_POST);
    }

    $_COOKIE   = addslashes_deep($_COOKIE);
    $_REQUEST  = addslashes_deep($_REQUEST);
}

/* 初始化数据库类 */
$db = new cls_mysql($db_host, $db_user, $db_pass, $db_name);
$db_host = $db_user = $db_pass = $db_name = NULL;

/* 创建错误处理对象 */
$err = new ecs_error('message.dwt');


/* 载入系统参数 */
//$_CFG = load_config();

/* 载入语言文件 */
//require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/common.php');
/*载入smarty引擎*/
if (function_exists('mb_internal_charset')) {
  mb_internal_charset('UTF-8');
}
define('SMARTY_RESOURCE_CHAR_SET', 'UTF-8');
require('api/smarty/Smarty.class.php');
$smarty = new Smarty;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;


?>