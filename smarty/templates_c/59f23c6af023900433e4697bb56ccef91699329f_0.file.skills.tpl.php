<?php /* Smarty version 3.1.24, created on 2016-01-07 15:01:25
         compiled from "/var/www/html/smarty/templates/sections/skills.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:274809147568e61a53edce7_98285772%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59f23c6af023900433e4697bb56ccef91699329f' => 
    array (
      0 => '/var/www/html/smarty/templates/sections/skills.tpl',
      1 => 1452168055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274809147568e61a53edce7_98285772',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568e61a5404955_21440769',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568e61a5404955_21440769')) {
function content_568e61a5404955_21440769 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '274809147568e61a53edce7_98285772';
?>
        <section class="jumbotron" id="skills">
            <h2><?php echo smarty_function_translation(array('langEn'=>"Skills"),$_smarty_tpl);?>

            </h2>
            <hr>
            <div class="content">
                <h3><?php echo smarty_function_translation(array('langEn'=>"Main"),$_smarty_tpl);?>
</h3>
                <?php echo smarty_function_skills(array('cat'=>1,'lang'=>$_smarty_tpl->tpl_vars['lang']->value),$_smarty_tpl);?>

                <h3><?php echo smarty_function_translation(array('langEn'=>"Secondary"),$_smarty_tpl);?>
</h3>
                <?php echo smarty_function_skills(array('cat'=>2,'lang'=>$_smarty_tpl->tpl_vars['lang']->value),$_smarty_tpl);?>

                <h3><?php echo smarty_function_translation(array('langEn'=>"Other"),$_smarty_tpl);?>
</h3>
                <?php echo smarty_function_skills(array('cat'=>3,'lang'=>$_smarty_tpl->tpl_vars['lang']->value),$_smarty_tpl);?>

            </div>
       </section>
<?php }
}
?>