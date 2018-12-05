<?php
/**
 * Created by PhpStorm.
 * User: whjin
 * Date: 2018/12/5
 * Time: 22:42
 */
function C($name, $method) {
    require_once("libs/Controller/'.$name.'Controller.class.php");
    eval('$obj=new ' . $name . 'Controller();$obj->' . $method . '()');
    /*    $controler = $name . 'controller';
        $obj = new $controler();
        $obj->$method();*/
}

C('test', 'show');

function M($name) {
    require_once('libs/Model/' . $name . 'Model.class.php');
    eval('$obj=new ' . $name . 'Model();');
    return $obj;
}