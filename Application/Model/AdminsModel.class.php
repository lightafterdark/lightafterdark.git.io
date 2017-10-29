<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/12
 * Time: 10:52
 */
namespace Model;

class AdminsModel extends \Core\Model
{
    public function getuserinfo($uname,$pwd)
    {
        $uname=addslashes($uname);

        $pwd=md5($pwd);
//        var_dump($pwd);die;
        $sql="select * from admins where uname='$uname' and pwd='$pwd'";
        return $this->mypdo->getRow($sql);
    }

    public function updateUserInfo($id)
    {
        $ip=ip2long($_SERVER['REMOTE_ADDR']);
        $time=time();

        return $this->mypdo->exec("update admins set login_count=login_count+1,last_login_time=$time,
last_login_ip=$ip,updated_time=$time where id=$id");

    }

    public function getOne($id)
    {
        return $this->mypdo->getRow("select * from admins where id=$id");
    }

    public function changepwd($id,$pwd){

        $pwd=md5($pwd);

        return $this->mypdo->exec("update admins set pwd='$pwd' where id=$id");
    }

    public function addadmin($uname,$pwd)
    {
        $time=time();
        return $this->mypdo->exec("insert into admins values(null,'$uname','$pwd',0,0,0,$time,0,1)");
    }

    public function deleteadmin($uname)
    {
        return $this->mypdo->exec("delete from admins where uname='$uname'");
    }
}