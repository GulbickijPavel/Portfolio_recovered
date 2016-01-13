<?php /* Smarty version 3.1.24, created on 2015-09-23 11:57:33
         compiled from "smarty/templates/sections/contacts/contacts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:117035602697d0a5f86_11556971%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e2ab9cde4e87a0ad0ab6c69cf344e75b85c70d3' => 
    array (
      0 => 'smarty/templates/sections/contacts/contacts.tpl',
      1 => 1441701878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117035602697d0a5f86_11556971',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5602697d159aa1_00998261',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5602697d159aa1_00998261')) {
function content_5602697d159aa1_00998261 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '117035602697d0a5f86_11556971';
?>
        <section class="jumbotron" id="contacts">
            <h2><?php echo smarty_function_translation(array('langEn'=>"Contacts"),$_smarty_tpl);?>
</h2>
            <hr>
            <form class="form-horizontal" action="/portfolio/portfolio.lt/php/contact.php" method="post">
              <fieldset>
                <legend><?php echo smarty_function_translation(array('langEn'=>"Contact"),$_smarty_tpl);?>
 <?php echo smarty_function_translation(array('langEn'=>"Form"),$_smarty_tpl);?>
</legend>
                <span class="help-block"><?php echo smarty_function_translation(array('langEn'=>"You can leave your contacts here. Reauired fields are marked with *."),$_smarty_tpl);?>
</span>
                 <div class="form-group">
                  <label for="inputCompany" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Company"),$_smarty_tpl);?>
 *</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputCompany"  placeholder="" name="company">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputSender" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Name"),$_smarty_tpl);?>
,<?php echo smarty_function_translation(array('langEn'=>"Surname"),$_smarty_tpl);?>
</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputSender"  placeholder="Vardenis, Pavardenis" name="nameSurname">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"E-mail"),$_smarty_tpl);?>
 *</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputEmail"  placeholder="Email" name="email">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPhone" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Contact phone"),$_smarty_tpl);?>
 *</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputPhone"  placeholder="+370 XXX XXXXX" name="phone">
                  </div>
                </div>
                <div class="form-group">
                  <label for="textArea" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Comments"),$_smarty_tpl);?>
</label>
                  <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="textArea"  name="comments"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default"><?php echo smarty_function_translation(array('langEn'=>"Cancel"),$_smarty_tpl);?>
</button>
                    <button type="submit" class="btn btn-primary"><?php echo smarty_function_translation(array('langEn'=>"Submit"),$_smarty_tpl);?>
</button>
                  </div>
                </div>
              </fieldset>
            </form>
        </section>
        </div>
    </div><?php }
}
?>