<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/12
 * Time: 11:01
 */
namespace Controller\Admin;

class IndexController extends BaseController
{
    public function index()
    {
        $this->smarty->display('index.html');
    }

    public function welcome()
    {
        $this->smarty->display('welcome.html');
    }
}