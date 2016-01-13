<?php /* Smarty version 3.1.24, created on 2015-09-21 14:55:59
         compiled from "C:/wamp/www/portfolio/portfolio.lt/smarty/templates/sections/experience/control.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1612755fffe5f745532_20940438%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a33b81b108a65d90f1b29ed57efa307d694fcaf' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/smarty/templates/sections/experience/control.tpl',
      1 => 1442840157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1612755fffe5f745532_20940438',
  'variables' => 
  array (
    'successmsg' => 0,
    'experience' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55fffe5f9ae8c1_80320333',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55fffe5f9ae8c1_80320333')) {
function content_55fffe5f9ae8c1_80320333 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1612755fffe5f745532_20940438';
echo $_smarty_tpl->getSubTemplate ('../../header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="container">
        <div class="main" id="main">
            <div class="jumbotron">
                <div class="alert alert-dismissible alert-success alert-box">
                  <button type="button" class="close" data-dismiss="alert" >×</button>
                  <a href="#" class="alert-link"></a>
                </div>
               <?php echo $_smarty_tpl->tpl_vars['successmsg']->value;?>

                <form class="form-horizontal" action="save.php?sectionname=expr" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend><?php echo smarty_function_translation(array('langEn'=>"Experience"),$_smarty_tpl);?>

                            <a class="btn btn-primary right control" id="experience-add-button"><?php echo smarty_function_translation(array('langEn'=>"New"),$_smarty_tpl);?>
</a>
                        </legend>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Choose"),$_smarty_tpl);?>
</label>
                            <div class="col-lg-10">
                                <div id="combox"></div>
                                <a class="btn btn-danger" id="del-button"><?php echo smarty_function_translation(array('langEn'=>"Delete"),$_smarty_tpl);?>
</a>
                            </div>    
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Company"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value['company'];?>
" name="company" id="company" placeholder="">
                          </div>
                        </div>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value['experienceid'];?>
" name="experienceid" id="experience-id">
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Address"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value['address'];?>
" name="address" id="address" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Website"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value['url'];?>
" name="url" id="url" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Work start"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value['periodstart'];?>
" name="periodstart" id="periodstart" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Work end"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value['periodend'];?>
" name="periodend" id="periodend" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Position"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['experience']->value['position'];?>
" name="position" id="position" placeholder="">
                          </div>
                        </div>
<!--
                        <div class="form-group">
                          <label for="textArea" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Description"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <textarea class="form-control" name="description"rows="3" id="editor"><?php echo $_smarty_tpl->tpl_vars['experience']->value['description'];?>
</textarea>
                          </div>
                        </div>
-->
                        <div class="form-group">
                          <label for="textArea" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Description"),$_smarty_tpl);?>
</label>
                            <div class="col-lg-10">
                                <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'en') {?>hide-me<?php }?>">
                                    <textarea class="form-control" name="descriptionEn" rows ="5" id="editor-en"><?php echo $_smarty_tpl->tpl_vars['experience']->value['descriptionEn'];?>
</textarea>
                                </div>
                            </div>
                            <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'lt') {?>hide-me<?php }?>">
                                <label for="textArea" class="col-lg-2 control-label">Lt</label>
                                <div class="col-lg-10">
                                        <textarea class="form-control" name="descriptionLt" rows ="5" id="editor-lt"><?php echo $_smarty_tpl->tpl_vars['experience']->value['descriptionLt'];?>
</textarea>
                                </div>
                            </div>
                            <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'ru') {?>hide-me<?php }?>">
                                <label for="textArea" class="col-lg-2 control-label ">Ru</label>
                                <div class="col-lg-10">
                                        <textarea class="form-control" name="descriptionRu" rows ="5" id="editor-ru"><?php echo $_smarty_tpl->tpl_vars['experience']->value['descriptionRu'];?>
</textarea>
                                </div>
                            </div>
                            <a class="btn btn-info right translations-btn"><?php echo smarty_function_translation(array('langEn'=>"Translations"),$_smarty_tpl);?>
</a>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2 right">
                            <button type="reset" class="btn btn-default"><?php echo smarty_function_translation(array('langEn'=>"Cancel"),$_smarty_tpl);?>
</button>
                            <button type="submit" class="btn btn-primary"><?php echo smarty_function_translation(array('langEn'=>"Submit"),$_smarty_tpl);?>
</button>
                          </div>
                        </div>
                      </fieldset>
                    
                </form>
            </div>
        </div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('../../footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio/portfolio.lt/js/experience/script.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
?>