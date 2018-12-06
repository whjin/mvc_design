<?php
/* Smarty version 3.1.33, created on 2018-12-06 14:21:14
  from 'D:\AProject\php\demo01\mvc_design\test\tpl\datetime.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c09305a608b53_74538003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d93770fd426c9fe5150018e69b3c49a77bf1622' => 
    array (
      0 => 'D:\\AProject\\php\\demo01\\mvc_design\\test\\tpl\\datetime.tpl',
      1 => 1544106072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c09305a608b53_74538003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\AProject\\php\\demo01\\mvc_design\\smarty\\plugins\\modifier.test.php','function'=>'smarty_modifier_test',),));
echo smarty_modifier_test($_smarty_tpl->tpl_vars['time']->value,'Y-m-d H:i:s');
}
}
