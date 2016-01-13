<?php /* Smarty version 3.1.24, created on 2016-01-10 01:49:52
         compiled from "/var/www/html/smarty/templates/sections/test2.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:110666202156919ca0be9b98_70126685%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d5c8b333c60d303d4bf0cc1f9ab87bdd3f4e361' => 
    array (
      0 => '/var/www/html/smarty/templates/sections/test2.tpl',
      1 => 1452383323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110666202156919ca0be9b98_70126685',
  'variables' => 
  array (
    'test2' => 0,
    'lang' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56919ca0c051b9_04828537',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56919ca0c051b9_04828537')) {
function content_56919ca0c051b9_04828537 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '110666202156919ca0be9b98_70126685';
?>
<section class="jumbotron" id="test2"> <h2><?php echo smarty_function_translation(array('langId'=>"81"),$_smarty_tpl);?>
<h2> <hr> <?php
$_from = $_smarty_tpl->tpl_vars['test2']->value;
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