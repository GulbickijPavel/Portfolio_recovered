<?php /* Smarty version 3.1.24, created on 2016-01-04 23:38:53
         compiled from "/home/drabuziu/domains/pgulbickij.lt/public_html/test-cms/smarty/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1173792349568ae66d584509_45751393%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c699be9178385f5a2537c03d721cbd1f82788566' => 
    array (
      0 => '/home/drabuziu/domains/pgulbickij.lt/public_html/test-cms/smarty/templates/index.tpl',
      1 => 1451943290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1173792349568ae66d584509_45751393',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568ae66d5ddb61_87991483',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568ae66d5ddb61_87991483')) {
function content_568ae66d5ddb61_87991483 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1173792349568ae66d584509_45751393';
echo $_smarty_tpl->getSubTemplate ('smarty/templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>