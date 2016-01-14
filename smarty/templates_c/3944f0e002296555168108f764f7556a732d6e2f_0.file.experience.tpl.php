<?php /* Smarty version 3.1.24, created on 2016-01-14 02:09:41
         compiled from "/var/www/html/smarty/templates/sections/experience.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2563571865696e745db7549_77616453%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3944f0e002296555168108f764f7556a732d6e2f' => 
    array (
      0 => '/var/www/html/smarty/templates/sections/experience.tpl',
      1 => 1452168055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2563571865696e745db7549_77616453',
  'variables' => 
  array (
    'experience' => 0,
    'item' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5696e745df73a5_47702086',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5696e745df73a5_47702086')) {
function content_5696e745df73a5_47702086 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2563571865696e745db7549_77616453';
?>
        <section class="jumbotron" id="experience">
            <div class="experience-content">
                <h2><?php echo smarty_function_translation(array('langId'=>"42"),$_smarty_tpl);?>

                </h2>
                <hr>
                <ul class="bxslider">
                <?php
$_from = $_smarty_tpl->tpl_vars['experience']->value;
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
                <li>
                    <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['company'];?>
</h3>
                    <div class="experience-info">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['logo']) {?>
                        <div class="company-logo">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
">
                        </div>
                        <?php }?>
                        <span>
                        <?php echo smarty_function_translation(array('langId'=>"66"),$_smarty_tpl);?>
: <?php echo smarty_function_translation(array('langEn'=>$_smarty_tpl->tpl_vars['item']->value['address']),$_smarty_tpl);?>
<br>
                        <?php echo smarty_function_translation(array('langId'=>"10"),$_smarty_tpl);?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
</a><br>
                        <?php echo smarty_function_translation(array('langId'=>"12"),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value['periodstart'];?>
 - <?php if ($_smarty_tpl->tpl_vars['item']->value['periodend'] != "now") {
echo $_smarty_tpl->tpl_vars['item']->value['periodend'];
}?> <?php if ($_smarty_tpl->tpl_vars['item']->value['periodend'] == "now") {
echo smarty_function_translation(array('langEn'=>"now"),$_smarty_tpl);
}?><br>
                        <?php echo smarty_function_translation(array('langId'=>"11"),$_smarty_tpl);?>
: <?php echo smarty_function_translation(array('langEn'=>$_smarty_tpl->tpl_vars['item']->value['position']),$_smarty_tpl);?>
<br>
                        </span>
                    </div>

                    <div class="experience-desc">
                      <?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['lang']->value];?>

                    </div>

                </li>
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </ul>
            </div>
        </section>
<?php }
}
?>