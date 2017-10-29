<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/15
 * Time: 10:56
 */
namespace Model;

class UsersModel extends \Core\Model
{
    public function getAll()
    {
        return $this->mypdo->getAll("select * from users");
    }

    public function getOne($id)
    {
        return $this->mypdo->getRow("select * from users where id=$id");
    }

    public function add($uname,$pwd,$name,$img)
    {
        $time=time();
        $sql="insert into users(uname,pwd,name,created_time,img) values('$uname','$pwd','$name',$time,'$img')";
        return $this->mypdo->exec($sql);
    }

    public function update($id,$uname,$pwd,$name,$img)
    {
        $time=time();
        $sql="update users set uname='$uname',pwd='$pwd',name='$name',updated_time=$time,img='$img'  where id=$id";
        return $this->mypdo->exec($sql);
    }

    public function delete($id)
    {
        return $this->mypdo->exec("delete from users where id=$id");
    }

    public function deleteall($str)
    {
        return $this->mypdo->exec("delete from users where id in ($str)");
    }

    public function getUserinfo($uname,$pwd)
    {
//        echo "select * from users where uname='$uname' and pwd='$pwd'";die;
        return $this->mypdo->getRow("select *from users where uname='$uname' and pwd='$pwd'");
    }

}