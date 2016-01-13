<?php /* Smarty version 3.1.24, created on 2015-09-23 11:57:32
         compiled from "smarty/templates/sections/about/about.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:324755602697c6667c7_73548379%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '962dc18b18b68f0d5fde29d002162a250260b2fc' => 
    array (
      0 => 'smarty/templates/sections/about/about.tpl',
      1 => 1442829522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324755602697c6667c7_73548379',
  'variables' => 
  array (
    'is_admin' => 0,
    'details' => 0,
    'item' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5602697c7aab90_20069148',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5602697c7aab90_20069148')) {
function content_5602697c7aab90_20069148 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '324755602697c6667c7_73548379';
?>
    <section class="jumbotron" id="about">
            <div class="about-content">
                <h2><?php echo smarty_function_translation(array('langEn'=>"About"),$_smarty_tpl);?>

                <?php if (($_smarty_tpl->tpl_vars['is_admin']->value)) {?>
                    <a class="btn btn-primary right control" id="abou-button"><?php echo smarty_function_translation(array('langEn'=>"Control"),$_smarty_tpl);?>
</a>
                <?php }?>
                </h2>
                <hr>
                <?php
$_from = $_smarty_tpl->tpl_vars['details']->value;
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
        <img class="my-photo" alt="photo" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['userphoto'];?>
">
                <div class="about"> 
                    <span>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['surname'];?>
<br>
                        <?php echo smarty_function_translation(array('langEn'=>"Address"),$_smarty_tpl);?>
 : <?php echo $_smarty_tpl->tpl_vars['item']->value['livingplace'];?>
<br>
                        <?php echo smarty_function_translation(array('langEn'=>"Mob.phone"),$_smarty_tpl);?>
 : <?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
 <br>
                        <?php echo smarty_function_translation(array('langEn'=>"E-mail"),$_smarty_tpl);?>
  : <?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
 <br>
                        <?php echo smarty_function_translation(array('langEn'=>"Birth date"),$_smarty_tpl);?>
  : <?php echo $_smarty_tpl->tpl_vars['item']->value['birthdate'];?>
 <br>                    
                    </span>
                </div>
                <article class="ar-about">
                   <h6><?php echo smarty_function_translation(array('langEn'=>"Education"),$_smarty_tpl);?>
 </h6>
                    <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'en') {?> 
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['infoEn'];?>

                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'lt') {?> 
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['infoLt'];?>

                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'ru') {?> 
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['infoRu'];?>

                    <?php }?>
                </article>
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
            </div> 
        </section>   
<?php }
}
?>