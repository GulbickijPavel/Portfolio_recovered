<?php /* Smarty version 3.1.24, created on 2016-01-07 19:00:48
         compiled from "/var/www/html/smarty/templates/sections/test.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1461421447568e99c0bb7c30_00651020%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e4f8855acd865f8390ad3f9991c359c9f624b12' => 
    array (
      0 => '/var/www/html/smarty/templates/sections/test.tpl',
      1 => 1452186040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1461421447568e99c0bb7c30_00651020',
  'variables' => 
  array (
    'test' => 0,
    'lang' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568e99c0be3000_90055224',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568e99c0be3000_90055224')) {
function content_568e99c0be3000_90055224 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1461421447568e99c0bb7c30_00651020';
?>
<section class="jumbotron" id="test"> <h2><?php echo smarty_function_translation(array('langId'=>"83"),$_smarty_tpl);?>
<h2> <hr> <?php
$_from = $_smarty_tpl->tpl_vars['test']->value;
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