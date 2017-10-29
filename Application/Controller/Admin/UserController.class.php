<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/12
 * Time: 16:33
 */
namespace Controller\Admin;

class UserController extends \Core\Controller
{
    public function index()
    {
        $UsersModel=new \Model\UsersModel();

        $userList=$UsersModel->getAll();

        $this->smarty->assign('userInfo',$userList);

        $this->smarty->display('index.html');

    }

    public function delete()
    {
        $id=$_GET['id'];
        $UsersModel=new \Model\UsersModel();

        $rs=$UsersModel->delete($id);

        if($rs){
            $this->success('index.php?p=admin&c=user&a=index','删除成功',1);
        }else{
            $this->success('index.php?p=admin&c=user&a=index','删除失败',1);
        }
    }

    public function update()
    {
        if(IS_POST){
            $id=$_POST['id'];
            $user=$_POST['user'];
            $pwd=$_POST['pwd'];
            $name=$_POST['name'];

            $img=empty($_FILES['img']['name'])?$_POST['img2']:'';
            if(!empty($_FILES['img']['name'])){

                $img=\Libs\UploadFile::upload($_FILES['img']);

                if(!$img){
                    $this->error("index.php?p=admin&c=article&a=update&id=$id",'上传图片失败',1);
                }
            }

            $UsersModel=new \Model\UsersModel();

            $rs=$UsersModel->update($id,$user,$pwd,$name,$img);

            if($rs){
                $this->success('index.php?p=admin&c=user&a=index','修改成功',1);
            }else{
                $this->success('index.php?p=admin&c=user&a=update&id=$id','修改失败',1);
            }




        }else{
            $UsersModel=new \Model\UsersModel();
            $id=$_GET['id'];

            $userInfo=$UsersModel->getOne($id);

//            var_dump($userInfo);die;

            $this->smarty->assign('userInfo',$userInfo);

            $this->smarty->display('update.html');
        }

    }

    public function add(){
        if(IS_POST){
            $pwd=$_POST['pwd'];
            $user=$_POST['user'];
            $name=$_POST['name'];


            $img='';

            if(!empty($_FILES['img']['name'])){
                $img=\Libs\UploadFile::upload($_FILES['img']);

                if(!$img){
                    $this->error("index.php?p=admin&c=article&a=add",\Libs\UploadFile::getMessage(),1);
                }
            }

            $UsersModel=new \Model\UsersModel();

            $rs=$UsersModel->add($user,$pwd,$name,$img);

            if($rs){
                $this->success('index.php?p=admin&c=user&a=index','添加成功',1);
            }else{
                $this->success('index.php?p=admin&c=user&a=add','添加失败',1);
            }

        }else{
            $UsersModel=new \Model\UsersModel();

            $this->smarty->display('add.html');
        }

    }

    public function deleteall()
    {
        $UsersModel=new \Model\UsersModel();

        if(empty($_POST['id'])){
            $this->error('index.php?p=admin&c=user&a=index','请选择记录',1);
        }

        $str=implode($_POST['id'],',');

        $rs=$UsersModel->deleteall($str);

        if($rs){
            $this->success('index.php?p=admin&c=user&a=index','删除成功',1);
        }else{
            $this->success('index.php?p=admin&c=user&a=index','删除失败',1);
        }


    }

    public function accredit()
    {
        $id=$_GET['id'];

        $userModel=new \Model\UsersModel();
        $userinfo=$userModel->getOne($id);
        $uname=$userinfo['uname'];
        $pwd=$userinfo['pwd'];

        $adminsModel=new \Model\AdminsModel();
        $rs=$adminsModel->addadmin($uname,$pwd);

//        var_dump($rs);die;

        if($rs){
            $this->success("index.php?p=admin&c=user&a=index",'授权成功',1);
        }else{
            $this->success("index.php?p=admin&c=user&a=index&id=$id",'授权失败',1);
        }


    }

    public function unaccredit()
    {
        $id=$_GET['id'];

        $UserModel=new \Model\UsersModel();
        $userinfo=$UserModel->getOne($id);
        $uname=$userinfo['uname'];


        $adminsModel=new \Model\AdminsModel();
        $rs=$adminsModel->deleteadmin($uname);

//        var_dump($rs);die;

        if($rs){
            $this->success("index.php?p=admin&c=user&a=index",'取消授权成功',1);
        }else{
            $this->success("index.php?p=admin&c=user&a=index&id=$id",'已经取消授权',1);
        }

    }

}