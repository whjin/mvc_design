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

/*class My_Obj {
    function method1($param) {
        return $param[0] . '已经' . $param[1] . $param[2];
    }
}

$my_obj = new My_Obj;

$smarty->assign('my_obj', $my_obj);
$smarty->assign('time', time());
$smarty->assign('str', 'abcdefg');*/

/*function test($params) {
    $p1 = $params['p1'];
    $p2 = $params['p2'];
    return '传入的参数1值为：' . $p1 . '，传入的参数2值为：' . $p2;
}

$smarty->registerPlugin('function', 'f_test', 'test');*/

//$smarty->display('test01.tpl');
//$smarty->display('area.tpl');
$smarty->assign('time', time());
$smarty->display('datetime.tpl');