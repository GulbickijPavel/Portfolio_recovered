<?php /* Smarty version 3.1.24, created on 2016-01-07 15:01:25
         compiled from "/var/www/html/smarty/templates/sections/contacts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:163939291568e61a54d5ac0_96978120%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83a898bacbe639e61705940bc5cb2df4b84abd0a' => 
    array (
      0 => '/var/www/html/smarty/templates/sections/contacts.tpl',
      1 => 1452168055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163939291568e61a54d5ac0_96978120',
  'variables' => 
  array (
    'about' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568e61a5521dd1_35712833',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568e61a5521dd1_35712833')) {
function content_568e61a5521dd1_35712833 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '163939291568e61a54d5ac0_96978120';
?>
    <div id="contactForm-container">
        <div id= "contactForm" class="jumbotron">
            <p class="contact-forminfo">
                <?php
$_from = $_smarty_tpl->tpl_vars['about']->value;
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
                Github: <a href="https://github.com/GulbickijPavel" target="_blank"> https://github.com/GulbickijPavel </a> <br>
                <a href="files/cv.pdf" target="_blank" download="cv.pdf"> <?php echo smarty_function_translation(array('langId'=>"77"),$_smarty_tpl);?>
</a>
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
            </p>

            <form class="form-horizontal contact-form" id="contact-form">
              <fieldset>
                <legend><?php echo smarty_function_translation(array('langId'=>"17"),$_smarty_tpl);?>
 <?php echo smarty_function_translation(array('langId'=>"18"),$_smarty_tpl);?>
</legend>
                <span class="help-block"><?php echo smarty_function_translation(array('langId'=>"19"),$_smarty_tpl);?>
</span>
                <div class="input-group">
                    <span class="input-group-addon"><?php echo smarty_function_translation(array('langId'=>"9"),$_smarty_tpl);?>
*</span>
                    <input type="text" class="form-control" id="inputCompany" name="company" data-validation="length" data-validation-length="min3"  data-validation-error-msg="<?php echo smarty_function_translation(array('langId'=>"58"),$_smarty_tpl);?>
" data-validation-optional="true" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><?php echo smarty_function_translation(array('langId'=>"14"),$_smarty_tpl);?>
*</span>
                    <input type="text" class="form-control" id="inputSenderName"  name="name" data-validation="custom" data-validation-regexp="^([ a-zA-Zа-яА-Я]+)$" data-validation-error-msg="<?php echo smarty_function_translation(array('langId'=>"55"),$_smarty_tpl);?>
" data-validation-optional="true" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><?php echo smarty_function_translation(array('langId'=>"15"),$_smarty_tpl);?>
*</span>
                    <input type="text" class="form-control" id="inputSenderSurname"  name="surname" data-validation="custom" data-validation-regexp="^([ a-zA-Zа-яА-Я]+)$" data-validation-error-msg="<?php echo smarty_function_translation(array('langId'=>"55"),$_smarty_tpl);?>
" data-validation-optional="true" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><?php echo smarty_function_translation(array('langId'=>"4"),$_smarty_tpl);?>
*</span>
                    <input class="form-control" data-validation="email" data-validation-error-msg="<?php echo smarty_function_translation(array('langId'=>"56"),$_smarty_tpl);?>
" id="cemail"  placeholder="<?php echo smarty_function_translation(array('langId'=>"78"),$_smarty_tpl);?>
" name="email" data-validation-optional="true">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><?php echo smarty_function_translation(array('langId'=>"13"),$_smarty_tpl);?>
</span>
                    <input type="phone" class="form-control" id="inputPhone"  placeholder="8459632145" name="phone" data-validation="custom" data-validation-regexp="^([ +0-9]+)$" data-validation-error-msg="<?php echo smarty_function_translation(array('langId'=>"57"),$_smarty_tpl);?>
" data-validation-optional="true" >
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><?php echo smarty_function_translation(array('langId'=>"16"),$_smarty_tpl);?>
 *</span>
                    <textarea class="form-control" rows="3" id="editor" name="comments" data-validation="length" data-validation-length="min3"  data-validation-error-msg="<?php echo smarty_function_translation(array('langId'=>"59"),$_smarty_tpl);?>
" data-validation-optional="true" ></textarea>
                </div>
                <div class="form-group right">
                  <div class="col-lg-10 col-lg-offset-2 confirmation">
                    <div class="right">
                        <button type="reset" id="cform-cancel" class="btn btn-default"><?php echo smarty_function_translation(array('langId'=>"20"),$_smarty_tpl);?>
</button>
                        <button type="submit" class="btn btn-primary "><?php echo smarty_function_translation(array('langId'=>"21"),$_smarty_tpl);?>
</button>
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
        </div>
    </div>
    <div id="backgroundPopup">&nbsp;</div>
<?php }
}
?>