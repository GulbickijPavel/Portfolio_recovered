<?php /* Smarty version 3.1.24, created on 2016-01-14 02:09:41
         compiled from "/var/www/html/smarty/templates/main/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3774085145696e745bc45c4_51334138%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '528757f834e3a65d638936bf32f1262613596b60' => 
    array (
      0 => '/var/www/html/smarty/templates/main/index.tpl',
      1 => 1452560073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3774085145696e745bc45c4_51334138',
  'variables' => 
  array (
    'sections' => 0,
    'item' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5696e745bfe429_88392870',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5696e745bfe429_88392870')) {
function content_5696e745bfe429_88392870 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3774085145696e745bc45c4_51334138';
?>

    <?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/main/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php
$_from = $_smarty_tpl->tpl_vars['sections']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['shown'] == 1) {?>
            <?php $_smarty_tpl->tpl_vars["section"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['name'], null, 0);?>
            <?php ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['section']->value, 'UTF-8');
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("smarty/templates/sections/".$_tmp1.".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
    <?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/main/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


        </div>
      </div>
    </body>
</html>
<?php }
}
?>