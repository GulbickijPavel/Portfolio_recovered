<?php /* Smarty version 3.1.24, created on 2016-01-08 02:36:10
         compiled from "/var/www/html/smarty/templates/sections/test5asda.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:579670637568f047abd9841_93045429%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e0609cf3e8e389e7a8bc0d700887fb83946f734' => 
    array (
      0 => '/var/www/html/smarty/templates/sections/test5asda.tpl',
      1 => 1452189208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '579670637568f047abd9841_93045429',
  'variables' => 
  array (
    'test5asda' => 0,
    'lang' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568f047abe6667_28164608',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568f047abe6667_28164608')) {
function content_568f047abe6667_28164608 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '579670637568f047abd9841_93045429';
?>
<section class="jumbotron" id="test5asda"> <h2><?php echo smarty_function_translation(array('langId'=>"91"),$_smarty_tpl);?>
<h2> <hr> <?php
$_from = $_smarty_tpl->tpl_vars['test5asda']->value;
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