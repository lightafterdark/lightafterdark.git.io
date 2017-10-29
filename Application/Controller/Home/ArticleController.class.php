<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/18
 * Time: 10:00
 */
namespace Controller\Home;

class ArticleController extends \Core\Controller
{
    public function index()
    {
        $cid=(int)$_GET['cid'];

        $articlesModel=new \Model\ArticlesModel();



        $cateModel=new \Model\CategorysModel();

        $cateList=$cateModel->getAll();
        $this->smarty->assign('cateList',$cateList);

//        $cateList=$cateModel->getAll();
        \Libs\Tools::getTree($cateList,$cid);

        $cidArr[]=$cid;
        if(!empty($GLOBALS['tree'])){
            foreach ($GLOBALS['tree'] as $cate)
            {
                $cidArr[]=$cate['id'];
            }
        }

        $where['display']=1;
        $where['cid']=implode(',',$cidArr);


        $pageno=isset($_GET['pageno'])?$_GET['pageno']:1;

        $pageObj=new \Libs\Page($pageno,4,$articlesModel->getCount($where));

        $limit=array('startno'=>$pageObj->startno,'pagesize'=>$pageObj->pagesize);
        $articleList=$articlesModel->getAll($where,$limit);


        $this->smarty->assign('articleList',$articleList);
        $arr=array('cid'=>$cid);
        $this->smarty->assign('articlePage',$pageObj->show($arr));

        $this->smarty->display('index.html');
    }
    public function detail()
    {
        //分类数据
        $cateModel=new \Model\CategorysModel();
        $cateList=$cateModel->getAll();
        $this->smarty->assign('cateList',$cateList);

        //文章详细数据
        $id=(int)$_GET['id'];
        $articlesModel=new \Model\ArticlesModel();

        $articlesModel->pv($id);
        $articleInfo=$articlesModel->getOne($id);

        $this->smarty->assign('artInfo',$articleInfo);

        //评论数据
//        $commentsModel=new \Model\CommentsModel();
//        $commentList=$commentsModel->getAll($id);
        $commentsModel=new \Model\CommentsModel();
        $where[]=$id;
        $commentList=$commentsModel->getAll($where);

        \Libs\Tools::getTree($commentList);

        $commentList=isset($GLOBALS['tree'])?$GLOBALS['tree']:$commentList;

        //上一篇文章下一篇
        $prev=$articlesModel->prev($id);
        $this->smarty->assign('prev',$prev);
        $next=$articlesModel->next($id);
        $this->smarty->assign('next',$next);

        $this->smarty->assign('commentList',$commentList);
        $this->smarty->display('detail.html');




    }


}