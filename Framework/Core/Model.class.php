<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/10
 * Time: 15:13
 */
namespace Core;

class Model
{
    protected $mypdo;

    public function __construct()
    {
        $array=array(
            'dbname'=>$GLOBALS['configs']['database']['dbname'],
            'host'=>$GLOBALS['configs']['database']['host'],
            'port'=>$GLOBALS['configs']['database']['port'],
            'charset'=>$GLOBALS['configs']['database']['charset'],
            'pwd'=>$GLOBALS['configs']['database']['pwd'],
            'user'=>$GLOBALS['configs']['database']['user'],
        );
        $this->mypdo=MySQLPDO::getInstance($array);
    }
}