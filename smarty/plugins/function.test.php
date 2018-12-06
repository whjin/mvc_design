<?php
/**
 * Created by PhpStorm.
 * User: whjin
 * Date: 2018/12/6
 * Time: 21:38
 */
function smarty_function_test($params) {
    $width = $params['width'];
    $height = $params['height'];
    $area = $width * $height;
    return $area;
}