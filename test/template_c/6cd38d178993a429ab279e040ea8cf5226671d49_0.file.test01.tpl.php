<?php
/* Smarty version 3.1.33, created on 2018-12-06 10:48:31
  from 'D:\AProject\php\demo01\mvc_design\test\tpl\test01.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c08fe7f4ca311_94863344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cd38d178993a429ab279e040ea8cf5226671d49' => 
    array (
      0 => 'D:\\AProject\\php\\demo01\\mvc_design\\test\\tpl\\test01.tpl',
      1 => 1544093308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5c08fe7f4ca311_94863344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sitename'=>"长城干红"), 0, false);
?>
<br>
<?php echo $_smarty_tpl->tpl_vars['my_obj']->value->method1(array('苹果','熟了','。'));
}
}
