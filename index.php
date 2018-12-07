<?php
/**
 * Created by PhpStorm.
 * User: whjin
 * Date: 2018/12/6
 * Time: 0:47
 */
require_once('function.php');
require_once('config.php');

$view = ORG('smarty/', 'Smarty', $view_config);
$controller = $_GET['controller'];
$method = $_GET['method'];
C($controller, $method);
