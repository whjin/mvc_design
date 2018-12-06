<?php
/* Smarty version 3.1.33, created on 2018-12-06 09:29:15
  from 'D:\AProject\php\demo01\mvc_design\test\tpl\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c08ebebbdc2d9_01945074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38e5c8b43736596d29a31017a380c657d5041070' => 
    array (
      0 => 'D:\\AProject\\php\\demo01\\mvc_design\\test\\tpl\\test.tpl',
      1 => 1544088553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c08ebebbdc2d9_01945074 (Smarty_Internal_Template $_smarty_tpl) {
$__section_article_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['articleList']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_article_0_total = $__section_article_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_article'] = new Smarty_Variable(array());
if ($__section_article_0_total !== 0) {
for ($__section_article_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] = 0; $__section_article_0_iteration <= $__section_article_0_total; $__section_article_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']++){
?>
    <?php echo $_smarty_tpl->tpl_vars['articleList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]['title'];?>

    <?php echo $_smarty_tpl->tpl_vars['articleList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]['author'];?>

    <?php echo $_smarty_tpl->tpl_vars['articleList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]['content'];?>

    <br>
<?php
}
}
?>
<hr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articleList']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
    <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

    <?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>

    <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

    <br>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
