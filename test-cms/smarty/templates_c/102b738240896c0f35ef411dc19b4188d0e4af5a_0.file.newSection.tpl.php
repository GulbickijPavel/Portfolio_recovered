<?php /* Smarty version 3.1.24, created on 2016-01-12 02:00:19
         compiled from "/var/www/html/test-cms/smarty/templates/newSection.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:209013841556944213a864a4_78367649%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '102b738240896c0f35ef411dc19b4188d0e4af5a' => 
    array (
      0 => '/var/www/html/test-cms/smarty/templates/newSection.tpl',
      1 => 1452556817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209013841556944213a864a4_78367649',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56944213aab7d7_58855570',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56944213aab7d7_58855570')) {
function content_56944213aab7d7_58855570 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '209013841556944213a864a4_78367649';
?>

  <form id="new-section-form228" class="form-horizontal" enctype="multipart/form-data">
    <div class="new-section-form-container hide-me">
      <div class="jumbotron control-section-form">
        <h3>Sukūrti skilį</h3>
        <div class="input-group">
          <span class="input-group-addon">Šablono tipas:</span>
          <select name="sectionType" class="form-control">
              <option value="simple">Paprastas</option>
              <option value="saab">Greitai bus daugiau...</option>
          </select>
        </div>
        <div class="input-group">
          <span class="input-group-addon">Skilties pavadinimas:</span>
          <input type="text" class="form-control" name="sectionName" data-validation="custom" data-validation-regexp="^([ a-zA-Z0-9]+)$" data-validation-error-msg="Naudokite tik lotiniškas raides/skaičius, tarpus" data-validation-optional="true">
        </div>
        <div class="input-group">
          <span class="input-group-addon">Naudoti lentelę:</span>
          <input type="text" class="form-control" name="usingTable" data-validation="custom" data-validation-regexp="^([a-zA-Z0-9]+)$" data-validation-error-msg="Naudokite tik lotiniškas raides/skaičius be tarpų" data-validation-optional="true">
        </div>
      <input type="button" value="Uždaryti" class="close-form-btn btn btn-default">
      <!-- <button class="btn btn-default close-form-btn" type="">Uždaryti</button> -->
      <button class="btn btn-primary" type="submit">Pateikti</button>
    </div>
  </div>
  </form>
  <form id="control-section-form228" class="form-horizontal" enctype="multipart/form-data">
    <div class="control-section-form-container hide-me">
      <div class="jumbotron control-section-form">
        <h3>Redaguoti skiltį</h3>
        <div class="input-group">
          <span class="input-group-addon">Skiltis:</span>
          <select id="sectionid2225" class="form-control" ng-options="option.sectionname for option in sectionCombo.combo track by option.sectionid" ng-model="sectionVal"></select>
          <div class="input-group-btn">
             <a href="#" id="section-del-button" class="btn btn-danger">Ištrinti</a>
          </div>
        </div>
        
        <div ng-repeat="item in secToEdit">
            <div ng-if='item.Type == "varchar(50)" && item.Field != "lang"' class="input-group">
                <span class="input-group-addon">{{item.Field}}</span>
                <input disabled class="form-control col-xs-9" type="text" name="{{item.Field}}" value="{{sectionVal[item.Field]}}">
            </div>
        </div>
        
      <input type="button" value="Uždaryti" class="close-form-btn btn btn-default">
      <!-- <button class="btn btn-default close-form-btn" type="">Uždaryti</button> -->
      <button class="btn btn-primary" type="submit">Pateikti</button>
    </div>
  </div>
  </form>
<?php }
}
?>