<?php /* Smarty version 3.1.24, created on 2016-01-05 01:00:36
         compiled from "/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/sections/gynimas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1596652744568af9948dc6c5_33058744%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70d1e5c3e4b612d82949543bb1d27e674e715ee8' => 
    array (
      0 => '/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/sections/gynimas.tpl',
      1 => 1451948391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1596652744568af9948dc6c5_33058744',
  'variables' => 
  array (
    'gynimas' => 0,
    'lang' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568af994925820_26087063',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568af994925820_26087063')) {
function content_568af994925820_26087063 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1596652744568af9948dc6c5_33058744';
?>
<section class="jumbotron" id="gynimas"> <h2><?php echo smarty_function_translation(array('langEn'=>"Gynimas"),$_smarty_tpl);?>
<h2> <hr> <?php
$_from = $_smarty_tpl->tpl_vars['gynimas']->value;
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