<?php /* Smarty version 3.1.24, created on 2015-09-15 10:51:53
         compiled from "C:/wamp/www/portfolio/portfolio.lt/smarty/templates/sections/skills/add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2047755f7dc29d16a96_11617066%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a012445a98cf8b94657fc1d1ba0c9cda176ea57f' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/smarty/templates/sections/skills/add.tpl',
      1 => 1441817272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2047755f7dc29d16a96_11617066',
  'variables' => 
  array (
    'successmsg' => 0,
    'skill' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55f7dc29eb8a81_22132895',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f7dc29eb8a81_22132895')) {
function content_55f7dc29eb8a81_22132895 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2047755f7dc29d16a96_11617066';
echo $_smarty_tpl->getSubTemplate ('../../header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

           <div class="container">
            <div class="main" id="main">
                <div class="jumbotron">
                    <?php echo $_smarty_tpl->tpl_vars['successmsg']->value;?>

                    <form class="form-horizontal" action="save.php?sectionname=skil-add" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <legend><?php echo smarty_function_translation(array('langEn'=>"New"),$_smarty_tpl);?>

                            <a href="../../php/actions/change.php?sectionname=skil" class="btn btn-default right"><?php echo smarty_function_translation(array('langEn'=>"Back"),$_smarty_tpl);?>
</a>
                            </legend>
                            <input type="hidden" value="" name="skillid" id="skill-id">
                            <div class="form-group">
                              <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Title"),$_smarty_tpl);?>
</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" value="" name="skillname" id="skill-name" placeholder="">
                              </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Knowledge"),$_smarty_tpl);?>
</label>
                                <div id="knowledge-box"></div>
                            </div>
                            <input type="hidden" class="form-control" name="skillKnowledgeEn" id="knowledgeEn">
                            <input type="hidden" class="form-control" name="skillKnowledgeLt" id="knowledgeLt">
                            <input type="hidden" class="form-control" name="skillKnowledgeRu" id="knowledgeRu">
                            <div class="form-group">
                              <label class="col-lg-2 control-label"><?php echo smarty_function_translation(array('langEn'=>"Photo"),$_smarty_tpl);?>
</label>
                              <div class="col-lg-10">
<!--                                <img src="../../<?php echo $_smarty_tpl->tpl_vars['skill']->value['skillimage'];?>
" class="image" alt="skill image" id="skill-image">-->
                                <a class="btn btn-info img-upload-btn"><?php echo smarty_function_translation(array('langEn'=>"Upload photo"),$_smarty_tpl);?>
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
                                <textarea class="form-control" name="infoEn"rows="3" id="editor-en" wrap="hard"></textarea>
                                </div>
                                <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'lt') {?>hide-me<?php }?>">
                                <textarea class="form-control" name="infoLt"rows="3" id="editor-lt" wrap="hard"></textarea>
                                </div>
                                <div class="editor <?php if ($_smarty_tpl->tpl_vars['lang']->value != 'ru') {?>hide-me<?php }?>">
                                <textarea class="form-control" name="infoRu"rows="3" id="editor-ru" wrap="hard"></textarea>
                                </div>
                                  <a class="btn btn-info right translations-btn"><?php echo smarty_function_translation(array('langEn'=>"Translations"),$_smarty_tpl);?>
</a>
                              </div>
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
        $('.translations-btn').click(function(){
            $('.editor').toggleClass('open');
        });
        $('#img-url').change( function(event) {
        var tmppath = URL.createObjectURL(event.target.files[0]),
            imagename = $("#img-name").val();;
            $("#img-example").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
            $("#disp_tmp_path").val(tmppath);
        });
        var langEn = 'en',
            langLt = 'lt',
            langRu = 'ru';
        initSample(langEn);
        initSample(langLt);
        initSample(langRu);
        var knowledgeCombo = $('#knowledge-box').magicSuggest({
            placeholder: 'Pasirinkite...',
            allowFreeEntries: false,
            value: 1,
            data: '../../php/combo.php?section=skills&box=knowledge',
            valueField: 'id',
            cls: 'col-lg-10',
            style: 'width:80%; margin-left:15px',
            displayField: 'langEn',
            maxSelection: 1
        });
        $(knowledgeCombo).on("selectionchange", function(){
            if(this.getSelection()[0]){
                var en = this.getSelection()[0].langEn,
                    lt = this.getSelection()[0].langLt,
                    ru = this.getSelection()[0].langRu;
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