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
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign('articleTitle', '文章标题');
$arr = array('articleContent' => array('title' => 'smarty的学习', 'author' => '张三'));
$smarty->assign('arr', $arr);
$smarty->assign('articleTitle', 'i ate an apple');
$smarty->display('test.tpl');
