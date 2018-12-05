<?php

/**
 * Created by PhpStorm.
 * User: whjin
 * Date: 2018/12/5
 * Time: 15:39
 */
class testController {
    function show() {
        $testModel = M('test');
        $data = $testModel->get();
        $testView = V('test');
        $testView->display($data);
    }
}