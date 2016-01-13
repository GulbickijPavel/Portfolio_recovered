<?php /* Smarty version 3.1.24, created on 2016-01-07 18:12:39
         compiled from "/var/www/html/smarty/templates/sections/test5.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:800728821568e8e77d0b418_40040310%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb8496bdb63015f9e1234289aa0f19f0d430dcac' => 
    array (
      0 => '/var/www/html/smarty/templates/sections/test5.tpl',
      1 => 1452183134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '800728821568e8e77d0b418_40040310',
  'variables' => 
  array (
    'test5' => 0,
    'lang' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568e8e77d1ffb2_62011663',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568e8e77d1ffb2_62011663')) {
function content_568e8e77d1ffb2_62011663 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '800728821568e8e77d0b418_40040310';
?>
<section class="jumbotron" id="test5"> <h2><?php echo smarty_function_translation(array('langId'=>"84"),$_smarty_tpl);?>
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