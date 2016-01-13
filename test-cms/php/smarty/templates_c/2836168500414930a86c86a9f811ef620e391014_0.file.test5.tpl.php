<?php /* Smarty version 3.1.24, created on 2016-01-09 18:24:49
         compiled from "/var/www/html/smarty/templates/sections/test5.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:124944932856913451e9f239_67306460%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2836168500414930a86c86a9f811ef620e391014' => 
    array (
      0 => '/var/www/html/smarty/templates/sections/test5.tpl',
      1 => 1452356676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124944932856913451e9f239_67306460',
  'variables' => 
  array (
    'test5' => 0,
    'lang' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56913451eb3824_03190458',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56913451eb3824_03190458')) {
function content_56913451eb3824_03190458 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '124944932856913451e9f239_67306460';
?>
<section class="jumbotron" id="test5"> <h2><?php echo smarty_function_translation(array('langId'=>"86"),$_smarty_tpl);?>
<h2> <hr> <?php
$_from = $_smarty_tpl->tpl_vars['test5']->value;
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