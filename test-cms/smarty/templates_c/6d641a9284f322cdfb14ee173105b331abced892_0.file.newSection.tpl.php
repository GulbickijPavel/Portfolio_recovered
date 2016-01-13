<?php /* Smarty version 3.1.24, created on 2016-01-04 23:38:53
         compiled from "/home/drabuziu/domains/pgulbickij.lt/public_html/test-cms/smarty/templates/newSection.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:709956409568ae66d698bb5_84196623%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d641a9284f322cdfb14ee173105b331abced892' => 
    array (
      0 => '/home/drabuziu/domains/pgulbickij.lt/public_html/test-cms/smarty/templates/newSection.tpl',
      1 => 1451943291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '709956409568ae66d698bb5_84196623',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568ae66d69e086_30959623',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568ae66d69e086_30959623')) {
function content_568ae66d69e086_30959623 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '709956409568ae66d698bb5_84196623';
?>

  <form id="new-section-form228" class="form-horizontal " enctype="multipart/form-data">
    <div class="new-section-form-container hide-me">
      <div class="jumbotron new-section-form">
        <div class="input-group">
          <span class="input-group-addon">Šablono tipas:</span>
          <select name="sectionType" class="form-control">
              <option value="simple">Paprastas</option>
              <option value="saab">Greitai bus daugiau...</option>
          </select>
        </div>
        <div class="input-group">
          <span class="input-group-addon">Skilties pavadinimas:</span>
          <input type="text" class="form-control" name="sectionName">
        </div>
        <div class="input-group">
          <span class="input-group-addon">Naudoti lentelę:</span>
          <input type="text" class="form-control" name="usingTable">
        </div>
      <button class="btn btn-default" type="reset">Anulioti</button>
      <button class="btn btn-primary" type="submit">Pateikti</button>
    </div>
  </div>
  </form>
<?php }
}
?>