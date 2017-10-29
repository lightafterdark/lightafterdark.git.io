<?php
/**
 * Created by PhpStorm.
 * User: zcc
 * Date: 2017/9/14
 * Time: 15:08
 */
namespace Libs;

class Tools
{
    /**
     * 获取指定分类的所有子级分类，保存到$GLOBALS中(先父后子并且显示等级)
     * @param array $categoryList 所有分类数据
     * @param int $pid 父级ID：0-顶级,其他-子级
     * @param int $level 级别:0-顶级,依次类推子级+1
     */
    public static function getTree($categoryList, $pid = 0, $level = 0)
    {
        //遍历所有分类数据挨个找子级
        foreach ($categoryList as $category) {
            //判断是否是子级
            if ($category['pid'] == $pid) {
                $category['level'] = $level;
                //将子级放到PHP超全局变量$GLOBALS中
                $GLOBALS['tree'][] = $category;
                //继续获取该分类的子级
                self::getTree($categoryList, $category['id'], $level + 1);
            }

        }
    }
}
