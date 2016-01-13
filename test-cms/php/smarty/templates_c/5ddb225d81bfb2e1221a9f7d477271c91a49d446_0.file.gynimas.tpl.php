<?php /* Smarty version 3.1.24, created on 2016-01-11 20:53:20
         compiled from "/var/www/html/smarty/templates/sections/gynimas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13263650635693fa20d4afd9_80237546%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ddb225d81bfb2e1221a9f7d477271c91a49d446' => 
    array (
      0 => '/var/www/html/smarty/templates/sections/gynimas.tpl',
      1 => 1452538397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13263650635693fa20d4afd9_80237546',
  'variables' => 
  array (
    'gynimas' => 0,
    'lang' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5693fa20d5f683_88999472',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5693fa20d5f683_88999472')) {
function content_5693fa20d5f683_88999472 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13263650635693fa20d4afd9_80237546';
?>
<section class="jumbotron newItem" id="gynimas"> <h2><?php echo smarty_function_translation(array('langId'=>"82"),$_smarty_tpl);?>
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