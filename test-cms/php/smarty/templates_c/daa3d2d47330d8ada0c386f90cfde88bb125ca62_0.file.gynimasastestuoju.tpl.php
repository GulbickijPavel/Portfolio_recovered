<?php /* Smarty version 3.1.24, created on 2016-01-07 19:41:53
         compiled from "/var/www/html/smarty/templates/sections/gynimasastestuoju.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1709120471568ea361e6c7d0_18113049%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daa3d2d47330d8ada0c386f90cfde88bb125ca62' => 
    array (
      0 => '/var/www/html/smarty/templates/sections/gynimasastestuoju.tpl',
      1 => 1452188365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1709120471568ea361e6c7d0_18113049',
  'variables' => 
  array (
    'Gynimasastestuoju' => 0,
    'lang' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568ea361e7fc69_70109733',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568ea361e7fc69_70109733')) {
function content_568ea361e7fc69_70109733 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1709120471568ea361e6c7d0_18113049';
?>
<section class="jumbotron" id="Gynimasastestuoju"> <h2><?php echo smarty_function_translation(array('langId'=>"87"),$_smarty_tpl);?>
<h2> <hr> <?php
$_from = $_smarty_tpl->tpl_vars['Gynimasastestuoju']->value;
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