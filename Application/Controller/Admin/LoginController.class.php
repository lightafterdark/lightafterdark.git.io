<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/12
 * Time: 10:35
 */

namespace Controller\Admin;

class LoginController extends \Core\Controller
{
    public function login()
    {
            $uname = $_POST['uname'];
            $pwd = $_POST['pwd'];

            //判断验证码是否正确

//            if(!\Libs\Captcha::checkVerify($code)){
//                $this->error('index.php?p=admin&c=login&a=login','验证码错误',1);
//            }

            $adminModel = new \Model\AdminsModel;

            $rs = $adminModel->getuserinfo($uname, $pwd);

            if ($rs) {
                $adminModel->updateUserInfo($rs['id']);

//                $adminModel->getOne($rs['id']);

                $_SESSION['userinfo']=$rs;

                $this->success('./index.php?p=admin&c=index&a=index', "登录成功", 1);
            } else {
                $this->error('./index.php?p=home&c=login&a=login', "登录失败", 1);
            }

    }
    public function captcha()
    {
        $captcha=new \Libs\Captcha(102,35);

        $captcha->generalVerify();
    }

    public function loginOut()
    {
        session_unset();

        session_destroy();

        $this->success('./index.php?p=home&c=index&a=index','已经安全退出',1);
    }

    public function changepwd()
    {
        if (IS_POST){
//            $id=$_POST['id'];
            $id=$_SESSION['userinfo']['id'];
            $pwdy=$_POST['pwdy'];
            $pwd1=$_POST['pwd1'];
            $pwd2=$_POST['pwd2'];

//            $code=$_POST['code'];
            $AdminsModel=new \Model\AdminsModel();

//            if(!\Libs\Captcha::checkVerify($code)){
//                $this->error("index.php?p=admin&c=login&a=changepwd&id=$id",'验证码111错误',1);
//            }

//            $info=$AdminsModel->getOne($id);
            $pwdy=md5($pwdy);


            if($pwdy!=$_SESSION['userinfo']['pwd']){
                $this->error("index.php?p=admin&c=login&a=changepwd&id=$id","原密码不正确,请重新输入",1);
            }

            if($pwd1!=$pwd2){
                $this->error("index.php?p=admin&c=login&a=changepwd&id=$id","两次输入密码不一致,请重新输入",1);
            }

            $rs=$AdminsModel->changepwd($id,$pwd1);

            if($rs){
                session_unset();
                session_destroy();
                $this->success('index.php?p=home&c=login&a=login','密码修改成功,请重新登录',1);
            }else{
                $this->error("index.php?p=admin&c=login&a=changepwd&id=$id",'密码修改失败',1);
            }

        }else{
            $this->smarty->display('changepwd.html');
        }

    }
}