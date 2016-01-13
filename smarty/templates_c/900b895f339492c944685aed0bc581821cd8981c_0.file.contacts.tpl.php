<?php /* Smarty version 3.1.24, created on 2016-01-14 01:14:11
         compiled from "smarty/templates/sections/contacts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18233186525696da4323b7b4_16555670%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '900b895f339492c944685aed0bc581821cd8981c' => 
    array (
      0 => 'smarty/templates/sections/contacts.tpl',
      1 => 1452726840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18233186525696da4323b7b4_16555670',
  'variables' => 
  array (
    'about' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5696da43293485_52916757',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5696da43293485_52916757')) {
function content_5696da43293485_52916757 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18233186525696da4323b7b4_16555670';
?>

        <div id= "contactForm" class="contact-form-container jumbotron hide-me">
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
                  <div class="confirmation">
                        <!-- <button type="button" name="button" class="btn btn-primary im-not-a-robot">Im not a robot</button> -->
                        <button type="submit" class="btn btn-primary cform-submit"><?php echo smarty_function_translation(array('langId'=>"21"),$_smarty_tpl);?>
</button>
                        <button type="reset" id="cform-cancel" class="btn btn-default cform-cancel"><?php echo smarty_function_translation(array('langId'=>"20"),$_smarty_tpl);?>
</button>
                        <div class="form-group">
                           <div class="checkbox form-control">
                             <label>
                               <input class="contact-form-check" type="checkbox"> <?php echo smarty_function_translation(array('langId'=>"80"),$_smarty_tpl);?>

                               <img src="images/wait.gif" class="contact-form-wait hide-me" alt="wait"/>
                             </label>
                           </div>

                       </div>
                    </div>
              </fieldset>
            </form>
        </div>
<?php }
}
?>