<?php /* Smarty version 3.1.24, created on 2015-09-21 16:39:14
         compiled from "C:/wamp/www/portfolio/portfolio.lt/smarty/templates/sections/experience/add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1948356001692a732c6_71716018%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45dc01a6e7fea7702735fcc7c728f088d77ba7e2' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/smarty/templates/sections/experience/add.tpl',
      1 => 1442846349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1948356001692a732c6_71716018',
  'variables' => 
  array (
    'successmsg' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56001692c38530_23570086',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56001692c38530_23570086')) {
function content_56001692c38530_23570086 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1948356001692a732c6_71716018';
echo $_smarty_tpl->getSubTemplate ('../../header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="container">
        <div class="main" id="main">
            <div class="jumbotron">
               <?php echo $_smarty_tpl->tpl_vars['successmsg']->value;?>

                <form class="form-horizontal" action="save.php?sectionname=experience-add" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend><?php echo smarty_function_translation(array('langEn'=>"New"),$_smarty_tpl);?>

                            <a href="../../php/actions/change.php?sectionname=expr" class="btn btn-default right"><?php echo smarty_function_translation(array('langEn'=>"Back"),$_smarty_tpl);?>
</a>
                        </legend>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Company"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="" name="company" id="company" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Address"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="" name="address" id="address" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Website"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="" name="url" id="url" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Work start"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="" name="periodstart" id="periodstart" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Work end"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="" name="periodend" id="periodend" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Position"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="" name="position" id="position" placeholder="">
                          </div>
                        </div>
                            <div class="form-group">
                          <label for="textArea" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Description"),$_smarty_tpl);?>
</label>
                            <div class="col-lg-10">
                                <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'en') {?>hide-me<?php }?>">
                                    <textarea class="form-control" name="descriptionEn" rows ="5" id="editor-en"></textarea>
                                </div>
                            </div>
                            <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'lt') {?>hide-me<?php }?>">
                                <label for="textArea" class="col-lg-2 control-label">Lt</label>
                                <div class="col-lg-10">
                                        <textarea class="form-control" name="descriptionLt" rows ="5" id="editor-lt"></textarea>
                                </div>
                            </div>
                            <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'ru') {?>hide-me<?php }?>">
                                <label for="textArea" class="col-lg-2 control-label ">Ru</label>
                                <div class="col-lg-10">
                                        <textarea class="form-control" name="descriptionRu" rows ="5" id="editor-ru"></textarea>
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
>
        initSample('en');
        initSample('lt');
        initSample('ru');
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
?>