<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/20
 * Time: 13:12
 */
namespace Controller\Admin;

use Model\CommentsModel;

class CommentController extends BaseController
{
    public function index()
    {
        $commentModel=new \Model\CommentsModel();

        $pageno=isset($_GET['pageno'])?$_GET['pageno']:1;

        $pageObj=new \Libs\Page($pageno,10,$commentModel->getCount());


        $limit=array('startno'=>$pageObj->startno,'pagesize'=>$pageObj->pagesize);

        $coommentList=$commentModel->getAll(0,$limit);


        $this->smarty->assign('commentList',$coommentList);
        $this->smarty->assign('commentPage',$pageObj->show());

        $this->smarty->display('index.html');
    }

    public function delete()
    {
        $id=$_GET['id'];
        $commentModol=new \Model\CommentsModel();

        $rs=$commentModol->delete($id);

        if($rs){
            $this->success("index.php?p=admin&c=comment&a=index",'删除成功',1);
        }else{
            $this->error("index.php?p=admin&c=comment&a=index",'删除失败',1);
        }



    }

    public function update()
    {
        if (IS_POST){
            $id=$_POST['id'];
            $aid=$_POST['aid'];
            $pid=$_POST['pid'];
            $content=$_POST['content'];
            $display=$_POST['display'];

            $commentModel=new CommentsModel();

            $rs=$commentModel->update($aid,$pid,$content,$display,$id);


            if($rs){
                $this->success("index.php?p=admin&c=comment&a=index",'修改成功',1);
            }else{
                $this->error("index.php?p=admin&c=comment&a=update&id=$id",'修改失败',1);
            }

        }else{
            $id=$_GET['id'];

            $commentModel=new \Model\CommentsModel();

            $commentinfo=$commentModel->getOne($id);

            $this->smarty->assign('info',$commentinfo);
            $this->smarty->display('update.html');
        }

    }

    public function deleteall()
    {
//        $UsersModel=new \Model\UsersModel();

        $commentModel=new \Model\CommentsModel();

        if(empty($_POST['id'])){
            $this->error('index.php?p=admin&c=comment&a=index','请选择记录',1);
        }

        $str=implode($_POST['id'],',');

        $rs=$commentModel->deleteall($str);

        if($rs){
            $this->success('index.php?p=admin&c=comment&a=index','删除成功',1);
        }else{
            $this->success('index.php?p=admin&c=comment&a=index','删除失败',1);
        }

    }

    public function add()
    {
        if(IS_POST){
            $uid=$_SESSION['userinfo']['id'];
            $aid=$_POST['aid'];
            $pid=$_POST['pid'];
            $content=$_POST['content'];
            $display=$_POST['display'];

            $commentModel=new CommentsModel();
            $rs=$commentModel->add($uid,$aid,$pid,$content,$display);


            if($rs){
                $this->success("index.php?p=admin&c=comment&a=index",'添加成功',1);
            }else{
                $this->error("index.php?p=admin&c=comment&a=add",'添加失败',1);
            }



        }else{
            $this->smarty->display('add.html');
        }


    }
}