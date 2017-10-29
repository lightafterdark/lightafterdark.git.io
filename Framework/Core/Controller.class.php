<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/9
 * Time: 20:14
 */
namespace Core;

class Controller
{
    protected $smarty;
    protected $xss;

    public function __construct()
    {
        $this->initSession();
        $this->initSmarty();
        $this->initXss();

    }
    private function initXss()
    {
        $this->xss=new \HTMLPurifier();
    }
    public function initSession()
    {
        session_start();
    }

    public function initSmarty()
    {
        $this->smarty=new \Smarty();

        $this->smarty->setTemplateDir(VIEW_PATH .DS .PLATFORM_NAME .DS .str_replace('Controller','',CONTROLLER_NAME .DS));
        $this->smarty->setCompileDir(APP_PATH . 'View_c');
    }

    public function success($url,$message,$time=3)
    {
        $this->jump($url,$message,$time,'success');
    }

    public function error($url,$message,$time=3)
    {
        $this->jump($url,$message,$time,'error');
    }

    public function jump($url,$message='操作成功,3秒后跳转',$time=3,$state='success')
    {
        echo <<<STR
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="{$time};URL={$url}">
<title>提示页面</title>
<style type="text/css">
#img{text-align:center;margin-top:50px;margin-bottom:20px;}
.info{text-align:center;font-size:24px;font-family:'微软雅黑';font-weight:bold;}
#success{color:#060;}
#error{color:#F00;}
</style>
</head> 
<body>
    <div id="img"><img src="./Public/img/{$state}.png" width="160" height="200" /></div>
    <div id='{$state}' class="info">{$message}</div>
</body>
</html>
STR;
        die;

    }
}