<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/15
 * Time: 10:56
 */
namespace Model;

class ArticlesModel extends \Core\Model
{
    public function getAll($where=array(),$limit=array())
    {
        $whereStr="where 1=1";
        $whereStr.=isset($where['display'])?" and articles.display={$where['display'] }":'';
        $whereStr.=isset($where['cid'])?" and articles.cid in ({$where['cid'] })":'';

        $limit=isset($limit['startno'])?"limit {$limit['startno']},{$limit['pagesize']}":'';
        $sql="select articles.*,categorys.name as cateName,admins.uname from articles
left join categorys on articles.cid = categorys.id
left join admins on articles.adminid = admins.id $whereStr $limit;
";
//        echo $sql;die;
        return $this->mypdo->getAll($sql);
    }

    public function getOne($id)
    {
        return $this->mypdo->getRow("select * from articles where id=$id");
    }

    public function add($adminid, $cid,$title,$img,$author,$desc,$content,$is_tuijian,$display)
    {
        $time=time();
        $sql="insert into articles(adminid,cid,title,img,author,`desc`,content,is_tuijian,display,created_time,updated_time) values(
$adminid,$cid,'$title','$img','$author','$desc','$content',$is_tuijian,$display,$time,$time)";
        return $this->mypdo->exec($sql);
    }

    public function update($id,$cid,$title,$img,$author,$desc,$content,$is_tuijian,$display)
    {
        $time=time();
        $sql="update articles set cid=$cid,title='$title',img='$img',author='$author',`desc`='$desc',content='$content',is_tuijian=$is_tuijian,display=$display where id=$id";
        return $this->mypdo->exec($sql);
    }

    public function delete($id)
    {
        return $this->mypdo->exec("delete from articles where id=$id");
    }

    public function deleteall($str)
    {
        return $this->mypdo->exec("delete from articles where id in ($str)");
    }

    public function getCount($where=array())
    {
        $whereStr="where 1=1";
        $whereStr.=isset($where['display'])?" and articles.display={$where['display'] }":'';
        $whereStr.=isset($where['cid'])?" and articles.cid in ({$where['cid'] })":'';
        $tmp= $this->mypdo->getRow("select count(*) from articles $whereStr");
        return $tmp['count(*)'];
    }

    public function pv($id)
    {
        $this->mypdo->exec("update articles set pv=pv+1 where id=$id");
    }

    public function getHot()
    {
        return $this->mypdo->getAll("select * from articles  where is_tuijian=1");
    }

    public function next($id)
    {
        return $this->mypdo->getRow("select * from articles where id>$id order by id desc limit 1");
    }
    public function prev($id)
    {
        return $this->mypdo->getRow("select * from articles where id<$id order by id desc limit 1");
    }
    public function search($keyword){
//        $whereStr="where 1=1";
//        $whereStr.=isset($where['display'])?" and articles.display={$where['display'] }":'';
//        $whereStr.=isset($where['cid'])?" and articles.cid in ({$where['cid'] })":'';
        $sql="select * from articles where (content like '%$keyword%' or title like '%$keyword%') and  display=1";
//        $sql="select * from articles where like '%$guanjian%'and $where";
        return $this->mypdo->getAll($sql);
    }
}