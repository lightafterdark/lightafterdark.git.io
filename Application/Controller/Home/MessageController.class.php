<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/19
 * Time: 11:06
 */
namespace Controller\Home;

class MessageController extends \Core\Controller
{
    public function index()
    {
        $cateModel=new \Model\CategorysModel();
        $cateList=$cateModel->getAll();
        $this->smarty->assign('cateList',$cateList);

        $messageModel=new \Model\messagesModel();
        $messageList=$messageModel->getAll();

        \Libs\Tools::getTree($messageList);
//        echo "<pre>";
//        print_r($GLOBALS['tree']);die;


        $this->smarty->assign('messageList',$GLOBALS['tree']);
        $this->smarty->display('message.html');
    }
    public function add()
    {
        if(IS_POST){
            $uid=isset($_SESSION['home_userinfo']['id'])?$_SESSION['home_userinfo']['id']:0;

            if(!$uid){
                $this->error("index.php?p=home&c=login&a=login",'去登陆',1);
            }

            $pid=$_POST['pid'];
            $content=$_POST['content'];


            $messageModel=new \Model\messagesModel();
            $rs=$messageModel->add($uid,$pid,$content);



            if($rs){
                $this->success("index.php?p=home&c=message&a=index",'留言成功',1);
            }else{
                $this->error("index.php?p=home&c=message&a=index&id",'留言失败',1);

            }
        }

    }

}