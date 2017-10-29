<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/9
 * Time: 19:41
 */

namespace Core;
class Framework
{
    public static function run()
    {
        self::initConfig();
        self::initConst();
        self::initXss();
        self::initSmarty();
        self::autoloadClass();
        self::dispatch();
    }

    public static function initXss()
    {
        require LIB_PATH.'Xss'.DS.'HTMLPurifier.includes.php';
    }
    public static function initConfig()
    {
        $GLOBALS['configs']=require getcwd().DIRECTORY_SEPARATOR.'Application'.DIRECTORY_SEPARATOR.'Config'.DIRECTORY_SEPARATOR.'Config.php';
    }
    public static function initConst()
    {
        //定义系统常量
        define("DS", DIRECTORY_SEPARATOR);       //目录分隔符（Linux兼容处理）
        define("ROOT_PATH", getcwd() . DS);            //定义项目根目录
        define("APP_PATH", ROOT_PATH . 'Application' . DS);                //定义应用目录
        define("CONFIGS_PATH", APP_PATH . 'Config'.DS);            //定义配置文件目录
        define("FRAMEWORK_PATH", ROOT_PATH . 'Framework' . DS);        //定义框架目录
        define("CORE_PATH", FRAMEWORK_PATH . 'Core'.DS);                //定义框架核心文件目录
        define("LIB_PATH", FRAMEWORK_PATH . 'Libs'.DS);                //定义扩展类库目录

        define("CONTROLLER_PATH", APP_PATH . 'Controller'.DS);        //定义控制器目录
        define("MODEL_PATH", APP_PATH . 'Model'.DS);                //定义模型目录
        define("VIEW_PATH", APP_PATH . 'View'.DS);                //定义视图目录
        //定义平台名称
        $platform = isset($_GET['p']) ? ucfirst($_GET['p']) : ucfirst($GLOBALS['configs']['default']['platform']);
        define("PLATFORM_NAME", $platform);
        //定义当前控制器名
        $ControllerName = isset($_GET['c']) ? ucfirst($_GET['c']) . 'Controller' : ucfirst($GLOBALS['configs']['default']['Controller'])."Controller";
        define("CONTROLLER_NAME", $ControllerName);
        //定义当前方法名
        $actionName = isset($_GET['a']) ? strtolower($_GET['a']) : ucfirst($GLOBALS['configs']['default']['action']);
        define("ACTION_NAME", $actionName);

        // 定义当前请求的系统常量
        define('REQUEST_METHOD',$_SERVER['REQUEST_METHOD']);
        define('IS_GET',        REQUEST_METHOD =='GET' ? true : false);
        define('IS_POST',       REQUEST_METHOD =='POST' ? true : false);
    }

    public static function initSmarty()
    {
        require LIB_PATH .DS .'Smarty/Smarty.class.php';
    }
    public static function autoloadClass()
    {
        spl_autoload_register('self::autoload');
    }

    public static function autoload($className){
        $type = basename(dirname($className));

        if ($type == 'Core'||$type=='Libs') {
            require "./Framework/$className.class.php";
        } elseif ($type == 'Model') {
            require "./Application/$className.class.php";
        } else {
            //PRINT_R("./Application/$className.class.php");EXIT;
            require "./Application/$className.class.php";
        }
    }

    public static function dispatch()
    {
        $ControllerName = "\\Controller\\".PLATFORM_NAME."\\".CONTROLLER_NAME;

        $Controller = new $ControllerName;
        //4.调用方法
        $actionName = ACTION_NAME;

        $Controller->$actionName();
    }
}