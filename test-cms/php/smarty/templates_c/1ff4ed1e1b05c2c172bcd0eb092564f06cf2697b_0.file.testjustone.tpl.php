<?php /* Smarty version 3.1.24, created on 2016-01-08 02:35:23
         compiled from "/var/www/html/smarty/templates/sections/testjustone.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1255879327568f044b27cd42_58824012%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ff4ed1e1b05c2c172bcd0eb092564f06cf2697b' => 
    array (
      0 => '/var/www/html/smarty/templates/sections/testjustone.tpl',
      1 => 1452188905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1255879327568f044b27cd42_58824012',
  'variables' => 
  array (
    'testjustone' => 0,
    'lang' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568f044b2913e2_22884690',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568f044b2913e2_22884690')) {
function content_568f044b2913e2_22884690 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1255879327568f044b27cd42_58824012';
?>
<section class="jumbotron" id="testjustone"> <h2><?php echo smarty_function_translation(array('langId'=>"89"),$_smarty_tpl);?>
<h2> <hr> <?php
$_from = $_smarty_tpl->tpl_vars['testjustone']->value;
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