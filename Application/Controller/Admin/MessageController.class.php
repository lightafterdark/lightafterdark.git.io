<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/20
 * Time: 14:57
 */
namespace Controller\Admin;

use Model\messagesModel;

class MessageController extends BaseController
{
    public function index()
    {
        $messageModel=new \Model\messagesModel();

        $pageno=isset($_GET['pageno'])?$_GET['pageno']:1;
        $pageObj=new \Libs\Page($pageno,10,$messageModel->getCount());

        $limit=array('startno'=>$pageObj->startno,'pagesize'=>$pageObj->pagesize);

        $messageList=$messageModel->getAll(0,$limit);


        $this->smarty->assign('messageList',$messageList);
        $this->smarty->assign('messagePage',$pageObj->show());

        $this->smarty->display('index.html');
    }

    public function delete()
    {
        $id=$_GET['id'];

        $messageModel=new \Model\messagesModel();

        $rs=$messageModel->delete($id);


        if($rs){
            $this->success("index.php?p=admin&c=message&a=index",'删除成功',1);
        }else{
            $this->error("index.php?p=admin&c=message&a=index",'删除失败',1);
        }
    }

    public function deleteall()
    {
        if(empty($_POST['id'])){
            $this->error("index.php?p=admin&c=message&a=index",'请选择记录',1);
        }

        $str=implode($_POST['id'],',');

        $messageModel=new \Model\messagesModel();

        $rs=$messageModel->deleteall($str);


        if($rs){
            $this->success("index.php?p=admin&c=message&a=index",'删除成功',1);
        }else{
            $this->error("index.php?p=admin&c=message&a=index",'删除失败',1);
        }
    }

    public function add()
    {
        if(IS_POST){
            $uid=$_SESSION['userinfo']['id'];
            $pid=$_POST['pid'];
            $content=$_POST['content'];
            $display=$_POST['display'];

            $messagesModel=new \Model\messagesModel();
            $rs=$messagesModel->add($uid,$pid,$content,$display);

            if($rs){
                $this->success("index.php?p=admin&c=message&a=index",'留言成功',1);
            }else{
                $this->error("index.php?p=admin&c=message&a=add",'留言失败',1);
            }

        }else{
            $this->smarty->display('add.html');
        }
    }

    public function update()
    {
        if (IS_POST){
            $id=$_POST['id'];
            $pid=$_POST['pid'];
            $content=$_POST['content'];
            $display=$_POST['display'];
            $messageModel=new \Model\messagesModel();
            $rs=$messageModel->update($pid,$content,$display,$id);

            if($rs){
                $this->success("index.php?p=admin&c=message&a=index",'修改成功',1);
            }else{
                $this->error("index.php?p=admin&c=message&a=add&id=$id",'修改失败',1);
            }




        }else{
            $id=$_GET['id'];
            $messageModel=new \Model\messagesModel();
            $messageinfo=$messageModel->getOne($id);
            $this->smarty->assign('info',$messageinfo);
            $this->smarty->display('update.html');
        }

    }
}