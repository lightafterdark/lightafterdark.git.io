<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/15
 * Time: 10:55
 */
namespace Controller\Admin;

class ArticleController extends BaseController
{
    public function index(){
        $articlesModel=new \Model\ArticlesModel();

        $pageno=isset($_GET['pageno'])?$_GET['pageno']:1;

        $pageObj=new \Libs\Page($pageno,4,$articlesModel->getCount());

        $limit=array('startno'=>$pageObj->startno,'pagesize'=>$pageObj->pagesize);

        $articleList=$articlesModel->getAll(0,$limit);
        $this->smarty->assign('articleList',$articleList);
        $this->smarty->assign('articlePage',$pageObj->show());
        $this->smarty->display('index.html');
    }

    public function delete()
    {
        $id=(int)$_GET['id'];

        $ArticleModel=new \Model\ArticlesModel();

        $rs=$ArticleModel->delete($id);

        if($rs){
            $this->success('index.php?p=admin&c=article&a=index','删除成功',1);
        }else{
            $this->success('index.php?p=admin&c=article&a=index','删除失败',1);
        }



    }

    public function update()
    {
        if(IS_POST){
            $id=(int)($_POST['id']);
            $cid=(int)$_POST['cid'];
            $title=$_POST['title'];
            $author=$_POST['author'];
            $desc=$_POST['desc'];
//            $img=$_POST['img'];
            $content=$_POST['content'];
            $is_tuijian=$_POST['is_tuijian'];
            $display=$_POST['display'];

            $img=empty($_FILES['img']['name'])?$_POST['img2']:'';
            if(!empty($_FILES['img']['name'])){

                $img=\Libs\UploadFile::upload($_FILES['img']);

                if(!$img){
                    $this->error("index.php?p=admin&c=article&a=update&id=$id",'上传图片失败',1);
                }
            }

            $ArticleModel=new \Model\ArticlesModel();

            $rs=$ArticleModel->update($id,$cid,$title,$img,$author,$desc,$content,$is_tuijian,$display);



            if($rs){
                $this->success('index.php?p=admin&c=article&a=index','修改成功',1);
            }else{
                $this->error("index.php?p=admin&c=article&a=update&id=$id",'修改失败',1);
            }


        }else{

            $cateModel=new \Model\CategorysModel();

            $cateList=$cateModel->getAll();

            \Libs\Tools::getTree($cateList);

            $this->smarty->assign('cateList',$GLOBALS['tree']);


            $ArticlesModel=new \Model\ArticlesModel();
            $id=$_GET['id'];

            $ArticleInfo=$ArticlesModel->getOne($id);


            $this->smarty->assign('Info',$ArticleInfo);


            $this->smarty->display('update.html');
        }


    }

    public function add()
    {
        if(IS_POST){
            $cid=(int)$_POST['cid'];
//            $title=$_POST['title'];
            $title=$this->xss->purify($_POST['title']);
            $author=$_POST['author'];
            $desc=$_POST['desc'];
//            $img=$_POST['img'];
            $content=$_POST['content'];
            $is_tuijian=$_POST['is_tuijian'];
            $display=$_POST['display'];
            $ArticleModel=new \Model\ArticlesModel();

            $img='';

            if(!empty($_FILES['img']['name'])){
                $img=\Libs\UploadFile::upload($_FILES['img']);

                if(!$img){
                    $this->error("index.php?p=admin&c=article&a=add",\Libs\UploadFile::getMessage(),1);
                }
            }

            $rs=$ArticleModel->add($_SESSION['userinfo']['id'], $cid,$title,$img,$author,$desc,$content,$is_tuijian,$display);

            if($rs){
                $this->success('index.php?p=admin&c=article&a=index','添加成功',1);
            }else{
                $this->success('index.php?p=admin&c=article&a=add','添加失败',1);
            }

        }
        else{
            $cateModel=new \Model\CategorysModel();

            $cateList=$cateModel->getAll();

            \Libs\Tools::getTree($cateList);

            $this->smarty->assign('cateList',$GLOBALS['tree']);

            $this->smarty->display('add.html');
        }

    }

    public function deleteall()
    {
        $ArticlesModel=new \Model\ArticlesModel();

        if(empty($_POST['id'])){
            $this->error('index.php?p=admin&c=user&a=index','请选择记录',1);
        }
        $str=implode($_POST['id'],',');
        $rs=$ArticlesModel->deleteall($str);

        if($rs){
            $this->success('index.php?p=admin&c=article&a=index','删除成功',1);
        }else{
            $this->success('index.php?p=admin&c=article&a=index','删除失败',1);
        }


    }

}