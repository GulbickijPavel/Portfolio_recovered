<?php /* Smarty version 3.1.24, created on 2015-09-23 10:30:25
         compiled from "C:/wamp/www/portfolio.lt/smarty/templates/sections/projects/control.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3607560263215934e6_40466426%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81c5608a25cc5fde7ef2dfeb26b628080fae1638' => 
    array (
      0 => 'C:/wamp/www/portfolio.lt/smarty/templates/sections/projects/control.tpl',
      1 => 1442937293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3607560263215934e6_40466426',
  'variables' => 
  array (
    'successmsg' => 0,
    'project' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560263217c5d67_06886808',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560263217c5d67_06886808')) {
function content_560263217c5d67_06886808 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3607560263215934e6_40466426';
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

                <form class="form-horizontal" action="save.php?sectionname=proj" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend><?php echo smarty_function_translation(array('langEn'=>"Projects"),$_smarty_tpl);?>
<!--<?php echo smarty_function_translation(array('langEn'=>"Control"),$_smarty_tpl);?>
/<?php echo smarty_function_translation(array('langEn'=>"Change"),$_smarty_tpl);?>
-->
                            <a class="btn btn-primary right control" id="project-add-button"><?php echo smarty_function_translation(array('langEn'=>"New"),$_smarty_tpl);?>
</a>
                        </legend>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Choose"),$_smarty_tpl);?>
</label>
                            <div class="col-lg-10">
                                <div id="combox"></div><a class="btn btn-danger" id="del-button"><?php echo smarty_function_translation(array('langEn'=>"Delete"),$_smarty_tpl);?>
</a>
                          </div>
                        </div>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['project']->value['projectid'];?>
" name="projectid" id="project-id">
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Title"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['project']->value['projectname'];?>
" name="projectname" id="project-name" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                        <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Photos"),$_smarty_tpl);?>
</label>
                        <div class="row">
                          <div class="col-xs-3">
                            <div class="col-lg-10">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['project']->value['image1'];?>
" class="image" alt="skill image" id="project-image1">
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['project']->value['image1'];?>
" name="image1" id="projectimg1">
                            <input type="file" name="file1ToUpload" class="image-upload" id="img1-url"/>
                            <img src="" width="100" style="display:none;" id="img1-example" />
                          </div>
                          </div>
                          <div class="col-xs-3">
                            <div class="col-lg-10">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['project']->value['image2'];?>
" class="image" alt="skill image" id="project-image2">
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['project']->value['image2'];?>
" name="image2" id="projectimg2">
                            <input type="file" name="file2ToUpload" class="image-upload" id="img2-url"/>
                            <img src="" width="100" style="display:none;" id="img2-example" />
                          </div>
                          </div>
                          <div class="col-xs-3">
                            <div class="col-lg-10">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['project']->value['image3'];?>
" class="image" alt="skill image" id="project-image3">
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['project']->value['image3'];?>
" name="image3" id="projectimg3">
                            <input type="file" name="file3ToUpload" class="image-upload" id="img3-url"/>
                            <img src="" width="100" style="display:none;" id="img3-example" />
                          </div>
                          </div>
                        </div>
                            <a class="btn btn-info img-upload-btn right"><?php echo smarty_function_translation(array('langEn'=>"Change"),$_smarty_tpl);?>
/<?php echo smarty_function_translation(array('langEn'=>"Upload photos"),$_smarty_tpl);?>
</a>
                        </div>
                        <div class="form-group">
                          <label for="textArea" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Description"),$_smarty_tpl);?>
</label>
                            <div class="col-lg-10">
                                <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'en') {?>hide-me<?php }?>">
                                    <textarea class="form-control" name="descriptionEn" rows ="5" id="editor-en"><?php echo $_smarty_tpl->tpl_vars['project']->value['descriptionEn'];?>
</textarea>
                                </div>
                            </div>
                            <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'lt') {?>hide-me<?php }?>">
                                <label for="textArea" class="col-lg-2 control-label">Lt</label>
                                <div class="col-lg-10">
                                        <textarea class="form-control" name="descriptionLt" rows ="5" id="editor-lt"><?php echo $_smarty_tpl->tpl_vars['project']->value['descriptionLt'];?>
</textarea>
                                </div>
                            </div>
                            <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'ru') {?>hide-me<?php }?>">
                                <label for="textArea" class="col-lg-2 control-label ">Ru</label>
                                <div class="col-lg-10">
                                        <textarea class="form-control" name="descriptionRu" rows ="5" id="editor-ru"><?php echo $_smarty_tpl->tpl_vars['project']->value['descriptionRu'];?>
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
 type="text/javascript" src="/portfolio.lt/js/projects/script.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
?>