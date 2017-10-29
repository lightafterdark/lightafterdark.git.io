<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/14
 * Time: 19:50
 */

namespace Controller\Admin;

class CategoryController extends BaseController
{
    public function index()
    {
        $cateorysModel = new \Model\CategorysModel();

        $cateList = $cateorysModel->getAll();

        \Libs\Tools::getTree($cateList);

        $this->smarty->assign('cateList', $GLOBALS['tree']);

        $this->smarty->display('index.html');
    }

    public function delete()
    {
        $id = $_GET['id'];

        $categorysModel = new \Model\CategorysModel();

        if ($categorysModel->isSon($id)) {
            $this->error('index.php?p=admin&c=category&a=index', '删除失败,亲先删除子类', 1);
        }

        $rs = $categorysModel->delete($id);

        if ($rs) {
            $this->success('index.php?p=admin&c=category&a=index', '删除成功', 1);
        } else {
            $this->success('index.php?p=admin&c=category&a=index', '删除失败', 1);

        }


    }

    public function add()
    {
        if (IS_POST) {
            $pid = $_POST['pid'];
            $name = $_POST['name'];
            $sort = $_POST['sort'];
            $cateorysModel = new \Model\CategorysModel();

            $rs = $cateorysModel->add($pid, $name, $sort);

            if ($rs) {
                $this->success('index.php?p=admin&c=category&a=index', '添加成功', 1);
            } else {
                $this->success('index.php?p=admin&c=category&a=add', '添加失败', 1);

            }
        } else {
            $cateorysModel = new \Model\CategorysModel();

            $cateList = $cateorysModel->getAll();

            \Libs\Tools::getTree($cateList);
            $this->smarty->assign('cateList', $GLOBALS['tree']);

            $this->smarty->display('add.html');
        }


    }

    public function update()
    {
        if (IS_POST) {

        } else {
            $categoryModel = new \Model\CategorysModel();

            $cateList = $categoryModel->getAll();

            \Libs\Tools::getTree($cateList);

            $this->smarty->assign('cateList', $GLOBALS['tree']);

            $id = $_GET['id'];

            $cateInfo = $categoryModel->getOne($id);

            $this->smarty->assign('cateInfo', $cateInfo);


            $this->smarty->display('update.html');
        }
    }


}