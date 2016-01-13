<?php /* Smarty version 3.1.24, created on 2015-10-20 17:00:04
         compiled from "/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/sections/about/control.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:748158841562648e4482635_48961151%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c3ba6f04a885773c8c0d0d492bcc894d9dce537' => 
    array (
      0 => '/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/sections/about/control.tpl',
      1 => 1442999283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '748158841562648e4482635_48961151',
  'variables' => 
  array (
    'successmsg' => 0,
    'user' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_562648e459ed32_68918631',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562648e459ed32_68918631')) {
function content_562648e459ed32_68918631 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '748158841562648e4482635_48961151';
echo $_smarty_tpl->getSubTemplate ('../../header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="container">
        <div class="main" id="main">
            <div class="jumbotron">
                <?php echo $_smarty_tpl->tpl_vars['successmsg']->value;?>

                <form class="form-horizontal" action="save.php?sectionname=abou" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend><?php echo smarty_function_translation(array('langEn'=>"About"),$_smarty_tpl);?>
<!--<?php echo smarty_function_translation(array('langEn'=>"Control"),$_smarty_tpl);?>
/<?php echo smarty_function_translation(array('langEn'=>"Change"),$_smarty_tpl);?>
--></legend>
<!--
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Title"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?php echo smarty_function_translation(array('langEn'=>"About"),$_smarty_tpl);?>
" name="" id="disabledInput" disabled="" placeholder="">
                          </div>
                        </div>
-->
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Name"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" name="name" id="" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Surname"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
" name="surname" id="" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Photo"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <img src="../../<?php echo $_smarty_tpl->tpl_vars['user']->value['userphoto'];?>
" class="image" alt="image">
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['userphoto'];?>
" name="uploadedImage"/>
                            <a class="btn btn-info img-upload-btn"><?php echo smarty_function_translation(array('langEn'=>"Change"),$_smarty_tpl);?>
/<?php echo smarty_function_translation(array('langEn'=>"Upload photo"),$_smarty_tpl);?>
</a>
                            <input type="file" name="fileToUpload" class="image-upload" id="img-url"/>
                            <img src="" width="200" style="display:none;" id="img-example" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Birth date"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['birthdate'];?>
" name="birthdate" id="" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Address"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['livingplace'];?>
" name="livingplace" id="" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"E-mail"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" name="email" id="" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Mob.phone"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
" name="phone" id="" placeholder="">
                          </div>
                        </div>
<!--
                        <div class="form-group">
                          <label for="textArea" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Description"),$_smarty_tpl);?>
</label>
                          <div class="col-lg-10">
                            <textarea class="form-control" name="info"rows="3" id="editor-en"> <?php echo $_smarty_tpl->tpl_vars['user']->value['info'];?>
</textarea>
                          </div>
                        </div>
-->
                        <div class="form-group">
                          <label for="textArea" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Description"),$_smarty_tpl);?>
</label>
                            <div class="col-lg-10">
                                <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'en') {?>hide-me<?php }?>">
                                    <textarea class="form-control" name="infoEn" rows ="5" id="editor-en"><?php echo $_smarty_tpl->tpl_vars['user']->value['infoEn'];?>
</textarea>
                                </div>
                            </div>
                            <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'lt') {?>hide-me<?php }?>">
                                <label for="textArea" class="col-lg-2 control-label">Lt</label>
                                <div class="col-lg-10">
                                        <textarea class="form-control" name="infoLt" rows ="5" id="editor-lt"><?php echo $_smarty_tpl->tpl_vars['user']->value['infoLt'];?>
</textarea>
                                </div>
                            </div>
                            <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'ru') {?>hide-me<?php }?>">
                                <label for="textArea" class="col-lg-2 control-label ">Ru</label>
                                <div class="col-lg-10">
                                        <textarea class="form-control" name="infoRu" rows ="5" id="editor-ru"><?php echo $_smarty_tpl->tpl_vars['user']->value['infoRu'];?>
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
>
        $('#img-url').change( function(event) {
        var tmppath = URL.createObjectURL(event.target.files[0]),
            imagename = $("#img-name").val();;
            $("#img-example").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
            $("#disp_tmp_path").val(tmppath);
        }), 
            langEn = 'en',
            langLt = 'lt',
            langRu = 'ru';
            initSample(langEn);
            initSample(langLt);
            initSample(langRu);
       <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
?>