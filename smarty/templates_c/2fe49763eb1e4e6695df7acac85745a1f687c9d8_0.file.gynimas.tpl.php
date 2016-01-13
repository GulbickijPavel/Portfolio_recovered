<?php /* Smarty version 3.1.24, created on 2016-01-11 20:55:23
         compiled from "/var/www/html/smarty/templates/sections/gynimas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13433423145693fa9bbfb8a4_40983072%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fe49763eb1e4e6695df7acac85745a1f687c9d8' => 
    array (
      0 => '/var/www/html/smarty/templates/sections/gynimas.tpl',
      1 => 1452538397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13433423145693fa9bbfb8a4_40983072',
  'variables' => 
  array (
    'gynimas' => 0,
    'lang' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5693fa9bc12b90_11241343',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5693fa9bc12b90_11241343')) {
function content_5693fa9bc12b90_11241343 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13433423145693fa9bbfb8a4_40983072';
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