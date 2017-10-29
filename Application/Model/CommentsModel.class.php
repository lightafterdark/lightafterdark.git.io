<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/18
 * Time: 16:10
 */
namespace Model;

class CommentsModel extends \Core\Model
{
    public function add($uid,$aid,$pid,$content,$display=1)
    {
        $time=time();
        $sql="insert into comments values (null,$uid,$aid,$pid,'$content',$time,$time,$display)";
        return $this->mypdo->exec($sql);

    }

    public function getAll($where=array(),$limit=array()){

        $wherestr='where 1=1';
        $wherestr.=isset($where['display'])?" and display={$where['display']}":'';
        $wherestr.=isset($where['id'])?" and aid={$where['id']}":'';
        $limit=isset($limit['startno'])?"limit {$limit['startno']},{$limit['pagesize']}":'';


        $sql="select comments.*,users.uname,users.img from comments left join users on comments.uid=users.id $wherestr $limit";
        return $this->mypdo->getAll($sql);
    }

    public function getNew(){
        $sql="select comments.*,users.uname,users.img from comments left join users on comments.uid=users.id order by created_time desc";

        return $this->mypdo->getAll($sql);
    }

    public function getCount()
    {
        $tmp= $this->mypdo->getRow("select count(*) from comments");
        return $tmp['count(*)'];
    }

    public function delete($id)
    {
        return $this->mypdo->exec("delete from comments where id=$id");
    }

    public function deleteall($str)
    {
        return $this->mypdo->exec("delete from comments where id in ($str)");
    }

    public function getOne($id)
    {
        return $this->mypdo->getRow("select * from comments where id=$id");
    }

    public function update($aid,$pid,$content,$display,$id)
    {
        return $this->mypdo->exec("update comments set aid=$aid,pid=$pid,content='$content',display=$display where id=$id");
    }


}