<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/12
 * Time: 16:27
 */
namespace Controller\Admin;

class BaseController extends \Core\Controller
{
    public function __construct()
    {
        parent::__construct();

        if(empty($_SESSION['userinfo'])){
            $this->error('index.php?p=home&c=login&a=login','请登录后访问',3);
        }
    }
}