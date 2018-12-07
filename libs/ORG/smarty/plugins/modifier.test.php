<?php
/**
 * Created by PhpStorm.
 * User: whjin
 * Date: 2018/12/6
 * Time: 22:16
 */
function smarty_modifier_test($utime, $format) {
    return date($format, $utime);
}