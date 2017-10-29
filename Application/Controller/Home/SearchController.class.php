<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/19
 * Time: 17:59
 */
namespace Controller\Home;

class SearchController extends \Core\Controller
{
    public function search()
    {
        //顶部分类
        $cateModel=new \Model\CategorysModel();
        $cateList=$cateModel->getAll();
        $this->smarty->assign('cateList',$cateList);

        //
        $keyword=$_POST['keyword'];
        $articleModel=new \Model\ArticlesModel();

        //分页


        $searchList=$articleModel->search($keyword);

        $this->smarty->assign('searchList',$searchList);
        $this->smarty->display('search.html');

    }
}
