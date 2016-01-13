<?php /* Smarty version 3.1.24, created on 2015-09-22 17:55:21
         compiled from "C:/wamp/www/portfolio.lt/smarty/templates/sections/skills/control.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1420560179e999e6a6_53214181%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fb9918ae141b58e5bb94e4759a2773771070673' => 
    array (
      0 => 'C:/wamp/www/portfolio.lt/smarty/templates/sections/skills/control.tpl',
      1 => 1442937312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1420560179e999e6a6_53214181',
  'variables' => 
  array (
    'successmsg' => 0,
    'skill' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560179e9b96594_85014588',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560179e9b96594_85014588')) {
function content_560179e9b96594_85014588 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1420560179e999e6a6_53214181';
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

                    <form class="form-horizontal" action="save.php?sectionname=skil" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="row">
                            <legend><?php echo smarty_function_translation(array('langEn'=>"Skills"),$_smarty_tpl);?>

                                <a class="btn btn-primary right control" id="skil-add-button"><?php echo smarty_function_translation(array('langEn'=>"New"),$_smarty_tpl);?>
</a>
                            </legend>
                            <div class="form-group">
                                <div class="">
                                    <label  class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Choose"),$_smarty_tpl);?>
</label>
                                </div>
                                <div id="skill-box">
                                </div>
                                <div class="col-lg-2 right">
                                    <a class="btn btn-danger" id="del-button"><?php echo smarty_function_translation(array('langEn'=>"Delete"),$_smarty_tpl);?>
</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Knowledge"),$_smarty_tpl);?>
</label>
                                <div id="knowledge-box"></div>
                            </div>
                            <input type="text" class="form-control" name="skillKnowledgeEn" id="knowledgeEn">
                            <input type="text" class="form-control" name="skillKnowledgeLt" id="knowledgeLt">
                            <input type="text" class="form-control" name="skillKnowledgeRu" id="knowledgeRu">
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['skill']->value['skillid'];?>
" name="skillid" id="skill-id">
                            <div class="form-group">
                              <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Title"),$_smarty_tpl);?>
</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['skill']->value['skillname'];?>
" name="skillname" id="skill-name-en">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Photo"),$_smarty_tpl);?>
</label>
                              <div class="col-lg-10">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['skill']->value['skillimage'];?>
" class="image" alt="skill image" id="skill-image">
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['skill']->value['skillimage'];?>
" name="uploadedImage" id="uploadedimage-id">
                                <a class="btn btn-info img-upload-btn"><?php echo smarty_function_translation(array('langEn'=>"Change"),$_smarty_tpl);?>
/<?php echo smarty_function_translation(array('langEn'=>"Upload photo"),$_smarty_tpl);?>
</a>
                                <input type="file" name="fileToUpload" class="image-upload" id="img-url"/>
                                <img src="" width="200" style="display:none;" id="img-example" />
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="textArea" class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Description"),$_smarty_tpl);?>
</label>
                                <div class="col-lg-10">
                                    <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'en') {?>hide-me<?php }?>">
                                        <textarea class="form-control" name="infoEn" rows ="5" id="editor-en"><?php echo $_smarty_tpl->tpl_vars['skill']->value['descriptionEn'];?>
</textarea>
                                    </div>
                                </div>
                                <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'lt') {?>hide-me<?php }?>">
                                    <label for="textArea" class="col-lg-2 control-label">Lt</label>
                                    <div class="col-lg-10">
                                            <textarea class="form-control" name="infoLt" rows ="5" id="editor-lt"><?php echo $_smarty_tpl->tpl_vars['skill']->value['descriptionLt'];?>
</textarea>
                                    </div>
                                </div>
                                <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'ru') {?>hide-me<?php }?>">
                                    <label for="textArea" class="col-lg-2 control-label ">Ru</label>
                                    <div class="col-lg-10">
                                            <textarea class="form-control" name="infoRu" rows ="5" id="editor-ru"><?php echo $_smarty_tpl->tpl_vars['skill']->value['descriptionRu'];?>
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
                                <button type="submit" class="btn btn-primary" onSubmit="window.location.reload()"><?php echo smarty_function_translation(array('langEn'=>"Submit"),$_smarty_tpl);?>
</button>
                              </div>
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
 type="text/javascript" src="/portfolio.lt/js/skills/script.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            var knowledgeCombo = $('#knowledge-box').magicSuggest({
                placeholder: 'Pasirinkite...',
                allowFreeEntries: false,
                value: 1,
                data: '../../php/combo.php?section=skills&box=knowledge',
                valueField: 'id',
                cls: 'col-lg-10',
                style: 'width:80%; margin-left:15px',
                displayField: 'catEn',
                maxSelection: 1
            });
            $(knowledgeCombo).on("selectionchange", function(){
            if(this.getSelection()[0]){
                var en = this.getSelection()[0].catEn,
                    lt = this.getSelection()[0].catLt,
                    ru = this.getSelection()[0].catRu;
            }
            else{
               var  en = '',
                    lt = '',
                    ru = '';
            }
            $("#knowledgeEn").val(en);
            $("#knowledgeLt").val(lt);
            $("#knowledgeRu").val(ru);
        });
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
?>