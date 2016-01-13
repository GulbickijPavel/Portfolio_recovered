<?php /* Smarty version 3.1.24, created on 2015-09-25 19:01:48
         compiled from "smarty/templates/sections/experience/experience.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:112939355356056fec3c1c89_78677413%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16c835ed9c3e68e97b25a70c946b11aa65825fdc' => 
    array (
      0 => 'smarty/templates/sections/experience/experience.tpl',
      1 => 1443196904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112939355356056fec3c1c89_78677413',
  'variables' => 
  array (
    'is_admin' => 0,
    'experience' => 0,
    'item' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56056fec48e7e0_12743553',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56056fec48e7e0_12743553')) {
function content_56056fec48e7e0_12743553 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '112939355356056fec3c1c89_78677413';
?>
        <section class="jumbotron" id="experience">
            <div class="experience-content">
                <h2><?php echo smarty_function_translation(array('langId'=>"42"),$_smarty_tpl);?>

                     <?php if (($_smarty_tpl->tpl_vars['is_admin']->value)) {?>
                    <a class="btn btn-primary right control" id="expr-button"><?php echo smarty_function_translation(array('langId'=>"8"),$_smarty_tpl);?>
</a>
                    <?php }?>
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
                    <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'en') {?>
                    <div class="experience-desc"><?php echo $_smarty_tpl->tpl_vars['item']->value['descriptionEn'];?>
</div> 
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'ru') {?>
                    <div class="experience-desc"><?php echo $_smarty_tpl->tpl_vars['item']->value['descriptionRu'];?>
</div> 
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'lt') {?>
                    <div class="experience-desc"><?php echo $_smarty_tpl->tpl_vars['item']->value['descriptionLt'];?>
</div> 
                    <?php }?>
                </li>
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </ul>
            </div>   
        </section> <?php }
}
?>