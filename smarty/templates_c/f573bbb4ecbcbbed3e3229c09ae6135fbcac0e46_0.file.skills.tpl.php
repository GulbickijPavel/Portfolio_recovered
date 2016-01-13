<?php /* Smarty version 3.1.24, created on 2016-01-05 00:08:50
         compiled from "/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/sections/skills.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:383933854568aed72110b05_88098100%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f573bbb4ecbcbbed3e3229c09ae6135fbcac0e46' => 
    array (
      0 => '/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/sections/skills.tpl',
      1 => 1451945324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '383933854568aed72110b05_88098100',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568aed7213d703_52616983',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568aed7213d703_52616983')) {
function content_568aed7213d703_52616983 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '383933854568aed72110b05_88098100';
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