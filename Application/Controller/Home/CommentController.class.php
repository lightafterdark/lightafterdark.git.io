<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/18
 * Time: 16:13
 */
namespace Controller\Home;

class CommentController extends \Core\Controller
{
    public function add()
            {

                if(IS_POST){
                    $uid=isset($_SESSION['home_userinfo']['id'])?$_SESSION['home_userinfo']['id']:0;
                    if(!$uid){
                        $this->error("index.php?p=home&c=login&a=login",'去登陆',1);
                    }
                    $aid=$_POST['aid'];
                    $pid=$_POST['pid'];
//            echo $aid;
//            echo "<br>";
//            echo $pid;
//            die;
                    $content=$_POST['content'];

                    $commentModel=new \Model\CommentsModel();

                    $rs=$commentModel->add($uid,$aid,$pid,$content);


                    if($rs){
                        $this->success("index.php?p=home&c=article&a=detail&id=$aid",'评论成功',1);
                    }else{
                        $this->error("index.php?p=home&c=article&a=detail&id=$aid",'评论失败',1);

                    }
        }

    }
}