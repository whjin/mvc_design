<?php
/**
 * Created by PhpStorm.
 * User: whjin
 * Date: 2018/12/6
 * Time: 3:33
 */
require('../smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->left_delimiter = "{";
$smarty->right_delimiter = "}";
$smarty->template_dir = "tpl";//html模板地址
$smarty->compile_dir = "template_c";//模板编译生成的文件
$smarty->cache_dir = "cache";
//$smarty->caching = true;
//$smarty->cache_lifetime = 120;

$smarty->assign('articleTitle', 'i ate an apple.');
$smarty->assign('url', 'https://www.imooc.com/note/1075?sort=last&page=1');
$smarty->assign('articleContent', '写代码的一天
是开心的一天
技术改变世界');
$smarty->assign('score', 90);

$articleList = array(
    array(
        "title" => "第一篇文章",
        "author" => "小王",
        "content" => "第一篇文章介绍了《滕王阁饯别序》"
    ),
    array(
        "title" => "第二篇文章",
        "author" => "小张",
        "content" => "第二篇文章介绍了《赤壁赋》"
    ),
    array(
        "title" => "第三篇文章",
        "author" => "小陈",
        "content" => "第三篇文章介绍了《醉翁亭记》"
    )
);
$smarty->assign("articleList", $articleList);
$smarty->display('test.tpl');
