<?php /* Smarty version 3.1.24, created on 2016-01-05 00:15:17
         compiled from "/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/sections/skills.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:415355770568aeef5ea9d09_02311042%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '282fadb782b8c23583113c5671d85c68cd73f4f7' => 
    array (
      0 => '/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/sections/skills.tpl',
      1 => 1451945324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '415355770568aeef5ea9d09_02311042',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568aeef5f19914_94909693',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568aeef5f19914_94909693')) {
function content_568aeef5f19914_94909693 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '415355770568aeef5ea9d09_02311042';
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