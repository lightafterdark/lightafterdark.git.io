<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/14
 * Time: 19:55
 */
namespace Model;

class CategorysModel extends \Core\Model
{
    public function getAll($where=array())
    {

        $where=empty($where)?'':"where pid={$where['pid']}";
//        echo "select * from categorys $where";die;
        return $this->mypdo->getAll("select * from categorys $where");
    }

    public function getOne($id)
    {
        return $this->mypdo->getRow("select * from categorys where id=$id");
    }

    public function delete($id)
    {
        return $this->mypdo->exec("delete from categorys where id=$id");
    }

    public function isSon($id)
    {
        return $this->mypdo->getRow("select * from categorys where pid=$id");
    }

    public function add($pid,$name,$sort)
    {
        $time=time();
        $sql="insert into categorys (pid,name,sort,created_time,updated_time)
 values ($pid,'$name',$sort,$time,$time)";
        return $this->mypdo->exec($sql);
    }
}