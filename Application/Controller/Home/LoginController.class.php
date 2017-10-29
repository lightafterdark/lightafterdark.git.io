<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/18
 * Time: 14:36
 */
namespace Controller\Home;

class LoginController extends \Core\Controller
{
    public function login()
    {
        if(IS_POST){
            $uname=$_POST['uname'];
//            $pwd=md5($_POST['pwd']);
            $pwd=$_POST['pwd'];
//            var_dump($_POST);die;

            //创建用户模型
            $userModel=new \Model\UsersModel();

            $rs=$userModel->getUserinfo($uname,$pwd);

            if($rs){
                $_SESSION['home_userinfo']=$rs;
                $this->success('index.php?p=home&c=index&a=index','登录成功',3);
            }else{
                $this->error("index.php?p=home&c=login&a=login","登录失败",3);

            }



        }else{
            $this->smarty->display('login.html');
        }
    }

    public function register()
    {
        if (IS_POST){
            $name=$_POST['name'];
            $uname=$_POST['uname'];
            $pwd=$_POST['pwd'];

            $img='';

            if(!empty($_FILES['img']['name'])){
                $img=\Libs\UploadFile::upload($_FILES['img']);

                if(!$img){
                    $this->error("index.php?p=admin&c=article&a=add",\Libs\UploadFile::getMessage(),1);
                }
            }

            if (!$name){
                $this->error('index.php?p=home&c=login&a=register','请输入性名',1);
            }

            if (!$uname){
                $this->error('index.php?p=home&c=login&a=register','请输入用户名',1);
            }

            if (!$pwd){
                $this->error('index.php?p=home&c=login&a=register','请输入mima',1);
            }

            $userModel=new \Model\UsersModel();


            $rs=$userModel->add($uname,$pwd,$name,$img);




            if($rs){
                $this->success('index.php?p=home&c=login&a=login','注册成功',1);
            }else{
                $this->success('index.php?p=home&c=login&a=register','网络开小差了',1);
            }

        }else{
            $this->smarty->display('register.html');
        }


    }
}