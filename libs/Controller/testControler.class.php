<?php

/**
 * Created by PhpStorm.
 * User: whjin
 * Date: 2018/12/5
 * Time: 15:39
 */
class testController {
    function show() {
        $testModel = new testModel();
        $data = $testModel->get();
        $testView = new testView();
        $testView->display($data);
    }
}