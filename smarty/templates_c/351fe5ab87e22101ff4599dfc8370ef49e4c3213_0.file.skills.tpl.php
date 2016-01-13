<?php /* Smarty version 3.1.24, created on 2015-09-23 12:16:03
         compiled from "smarty/templates/sections/skills/skills.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:57111699156026dd305ea36_36937857%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '351fe5ab87e22101ff4599dfc8370ef49e4c3213' => 
    array (
      0 => 'smarty/templates/sections/skills/skills.tpl',
      1 => 1442999282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57111699156026dd305ea36_36937857',
  'variables' => 
  array (
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56026dd3081cf3_71927293',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56026dd3081cf3_71927293')) {
function content_56026dd3081cf3_71927293 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '57111699156026dd305ea36_36937857';
?>
 
        <section class="jumbotron" id="skills"> 
            <h2><?php echo smarty_function_translation(array('langEn'=>"Skills"),$_smarty_tpl);?>

                <?php if (($_smarty_tpl->tpl_vars['is_admin']->value)) {?>
                <a class="btn btn-primary right control" id="skil-button"><?php echo smarty_function_translation(array('langEn'=>"Control"),$_smarty_tpl);?>
</a>
                <?php }?>
            </h2>
            <hr>
            <div class="content">
                <h3><?php echo smarty_function_translation(array('langEn'=>"Main"),$_smarty_tpl);?>
</h3>
                <?php echo smarty_function_skills(array('cat'=>1),$_smarty_tpl);?>

                <h3><?php echo smarty_function_translation(array('langEn'=>"Secondary"),$_smarty_tpl);?>
</h3>
                <?php echo smarty_function_skills(array('cat'=>2),$_smarty_tpl);?>

                <h3><?php echo smarty_function_translation(array('langEn'=>"Other"),$_smarty_tpl);?>
</h3>
                <?php echo smarty_function_skills(array('cat'=>3),$_smarty_tpl);?>

            </div> 
        </section><?php }
}
?>