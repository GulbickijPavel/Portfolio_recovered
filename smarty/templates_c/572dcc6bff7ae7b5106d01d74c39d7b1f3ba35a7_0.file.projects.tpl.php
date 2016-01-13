<?php /* Smarty version 3.1.24, created on 2015-09-23 11:57:32
         compiled from "smarty/templates/sections/projects/projects.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:114465602697ce4e0a4_05230692%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '572dcc6bff7ae7b5106d01d74c39d7b1f3ba35a7' => 
    array (
      0 => 'smarty/templates/sections/projects/projects.tpl',
      1 => 1442919690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114465602697ce4e0a4_05230692',
  'variables' => 
  array (
    'is_admin' => 0,
    'projectslist' => 0,
    'item' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5602697d00d9e3_51616211',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5602697d00d9e3_51616211')) {
function content_5602697d00d9e3_51616211 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '114465602697ce4e0a4_05230692';
?>
        <section class="jumbotron" id="projects">
            <div class="experience-content">
                <h2><?php echo smarty_function_translation(array('langEn'=>"Projects"),$_smarty_tpl);?>

                    <?php if (($_smarty_tpl->tpl_vars['is_admin']->value)) {?>
                    <a class="btn btn-primary right control" id="proj-button"><?php echo smarty_function_translation(array('langEn'=>"Control"),$_smarty_tpl);?>
</a>
                <?php }?>
                </h2>
                <hr>
                <ul class="bxslider">
                    <?php
$_from = $_smarty_tpl->tpl_vars['projectslist']->value;
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
                        <h3> <?php echo $_smarty_tpl->tpl_vars['item']->value['projectname'];?>
</h3>
                        <ul id="img-container" class="image-container">
                            <li class="image-box">
                                <a href="" rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
"><img class="proj-image" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
" alt="image" /></a>
                            </li>
                            <li class="image-box">
                                <a href="" rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
"><img class="proj-image center-image" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
" alt="image" /></a>
                            </li>
                            <li class="image-box">
                                <a href="" rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
"><img class="proj-image" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
" alt="image" /></a>
                            </li>
                        </ul>

                        <article class="experience-desc">
                            <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'en') {?> 
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['descriptionEn'];?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'lt') {?> 
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['descriptionLt'];?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'ru') {?> 
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['descriptionRu'];?>

                            <?php }?>
                        </article>
                    </li>
                    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </ul>
            </div>   
        </section><?php }
}
?>