<?php /* Smarty version 3.1.24, created on 2016-01-07 19:38:54
         compiled from "/var/www/html/smarty/templates/sections/test2qweqwe.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:932300860568ea2ae8093c7_39145820%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe2735874eb006844d5ed1667a500cb04a3fb0b5' => 
    array (
      0 => '/var/www/html/smarty/templates/sections/test2qweqwe.tpl',
      1 => 1452187097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '932300860568ea2ae8093c7_39145820',
  'variables' => 
  array (
    'test2qweqwe' => 0,
    'lang' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568ea2ae821902_98217291',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568ea2ae821902_98217291')) {
function content_568ea2ae821902_98217291 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '932300860568ea2ae8093c7_39145820';
?>
<section class="jumbotron" id="test2qweqwe"> <h2><?php echo smarty_function_translation(array('langId'=>"86"),$_smarty_tpl);?>
<h2> <hr> <?php
$_from = $_smarty_tpl->tpl_vars['test2qweqwe']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?> <?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['lang']->value];?>
 <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>  </section><?php }
}
?>