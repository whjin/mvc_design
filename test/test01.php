<?php
/**
 * Created by PhpStorm.
 * User: whjin
 * Date: 2018/12/6
 * Time: 17:45
 */
require('../smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->left_delimiter = "{";
$smarty->right_delimiter = "}";
$smarty->template_dir = "tpl";
$smarty->compile_dir = "template_c";
$smarty->cache_dir = "cache";

class My_Obj {
    function method1($param) {
        return $param[0] . '已经' . $param[1] . $param[2];
    }
}

$my_obj = new My_Obj;

$smarty->assign('my_obj', $my_obj);
$smarty->assign('time', time());
$smarty->display('test01.tpl');