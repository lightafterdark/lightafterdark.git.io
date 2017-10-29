<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/19
 * Time: 11:13
 */
namespace Model;

class messagesModel extends \Core\Model
{
    public function add($uid,$pid,$content,$display=1){
        $time=time();
        $sql="insert into messages values(null,$uid,$pid,'$content',$time,$time,$display)";
        return $this->mypdo->exec($sql);
    }

    public function getAll($where=array(),$limit=array()){
        $wherestr=' where 1=1';
        $wherestr.=isset($where['display'])?" and display={$where['display']}":'';
        $limit=isset($limit['startno'])?"limit {$limit['startno']},{$limit['pagesize']}":'';
        $sql="select messages.*,users.uname,users.img from messages left join users on messages.uid=users.id $wherestr $limit";
        return $this->mypdo->getAll($sql);
    }

    public function getOne($id)
    {
        return $this->mypdo->getRow("select * from messages where id=$id");
    }

    public function getCount()
    {
        $tmp= $this->mypdo->getRow("select count(*) from messages");
        return $tmp['count(*)'];
    }

    public function delete($id)
    {
        return $this->mypdo->exec("delete from messages where id=$id");
    }

    public function deleteall($str)
    {
        return $this->mypdo->exec("delete from messages where id in($str)");
    }

    public function update($pid,$content,$display,$id)
    {
        $time=time();
        return $this->mypdo->exec("update messages set pid=$pid,content='$content',display=$display,updated_time=$time where id=$id");
    }



}