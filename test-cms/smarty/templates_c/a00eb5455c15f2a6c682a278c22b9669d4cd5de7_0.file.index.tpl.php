<?php /* Smarty version 3.1.24, created on 2016-01-07 15:03:45
         compiled from "/var/www/html/test-cms/smarty/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1227167086568e62313af695_67755939%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a00eb5455c15f2a6c682a278c22b9669d4cd5de7' => 
    array (
      0 => '/var/www/html/test-cms/smarty/templates/index.tpl',
      1 => 1452168068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1227167086568e62313af695_67755939',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568e62313bdd26_43559934',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568e62313bdd26_43559934')) {
function content_568e62313bdd26_43559934 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1227167086568e62313af695_67755939';
echo $_smarty_tpl->getSubTemplate ('smarty/templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>