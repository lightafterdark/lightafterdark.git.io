<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/17
 * Time: 15:14
 */
namespace Controller\Home;

class IndexController extends \Core\Controller
{
    public function index()
    {
        //获取分类
        $cateModel=new \Model\CategorysModel();
        $cateList=$cateModel->getAll();
        $this->smarty->assign('cateList',$cateList);

        $articlesModel=new \Model\ArticlesModel();

        //热门推荐
        $hotList=$articlesModel->getHot();
        $this->smarty->assign('hotList',$hotList);

        //最新评论
        $commentModel=new \Model\CommentsModel();

        $commentList=$commentModel->getNew();
        $this->smarty->assign('commentList',$commentList);

        //分页
        $pageno=isset($_GET['pageno'])?$_GET['pageno']:1;
        $where['display']=1;
//        var_dump($where);die;

        $pageObj=new \Libs\Page($pageno,6,$articlesModel->getCount($where));

        $limit=array('startno'=>$pageObj->startno,'pagesize'=>$pageObj->pagesize);
        $articleList=$articlesModel->getAll($where,$limit);

        $this->smarty->assign('articleList',$articleList);
        $this->smarty->assign('articlePage',$pageObj->show());
        $this->smarty->display('index.html');
    }




}