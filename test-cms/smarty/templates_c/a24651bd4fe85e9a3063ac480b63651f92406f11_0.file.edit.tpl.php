<?php /* Smarty version 3.1.24, created on 2016-01-10 00:56:00
         compiled from "/var/www/html/test-cms/smarty/templates/edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9882151525691900000e938_68795265%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a24651bd4fe85e9a3063ac480b63651f92406f11' => 
    array (
      0 => '/var/www/html/test-cms/smarty/templates/edit.tpl',
      1 => 1452380150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9882151525691900000e938_68795265',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_569190000350f0_86629597',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569190000350f0_86629597')) {
function content_569190000350f0_86629597 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9882151525691900000e938_68795265';
?>
                <div id="edit" class="tab-pane fade">
                      
                    <form class="form-horizontal" id="control-form" enctype="multipart/form-data">
                        <div class="input-group">
                                <span class="input-group-addon">Pasirinkti:</span>
                                <select id="item-id" class="form-control" ng-options="option[1] for option in combo.comb track by option[0]" ng-model="foo"></select>
                                <!--value as option.native for option in langCmb.langCombo track by option.keyword  -->
                            <div class="input-group-btn">
                               <a href="#" id="item-del-button" class="btn btn-danger">Ištrinti</a>
                            </div>
                        </div>
                      <input id="table-field" class="form-control col-xs-9" type="hidden" name="table" value="">
                        <div ng-repeat="item in ToEdit">
                            <div ng-if='item.Type == "varchar(50)" && item.Field != "email" && item.Field != "phone" && item.Field != "imagePath"' class="input-group">
                                    <span class="input-group-addon">{{item.Field}}</span>
                                    <input  class="form-control col-xs-9" type="text" name="{{item.Field}}" value="{{foo[item.Field]}}"
                                    data-validation="length"
                                    data-validation-length="max50"
                                    data-validation-error-msg-length="Maksimalus įrašo ilgis 50 simbolių">
                            </div>
                            <div ng-if='item.Type == "varchar(50)" && item.Field == "email"' class="input-group">
                                    <span class="input-group-addon">{{item.Field}}</span>
                                    <input  class="form-control col-xs-9" type="text" name="{{item.Field}}" value="{{foo[item.Field]}}"
                                    data-validation="email, length"
                                    data-validation-length="max50"
                                    data-validation-error-msg-length="Maksimalus įrašo ilgis 50 simbolių"
                                    data-validation-error-msg-email="Neteisingas el. pašto formatas. pvz: pvz@pvz.com">
                            </div>
                            <div ng-if='item.Type == "varchar(50)" && item.Field == "phone"' class="input-group">
                                    <span class="input-group-addon">{{item.Field}}</span>
                                    <input  class="form-control col-xs-9" type="text" name="{{item.Field}}" value="{{foo[item.Field]}}"
                                    data-validation="custom, length"
                                    data-validation-regexp="^([ +0-9]+)$""
                                    data-validation-length="max50"
                                    data-validation-error-msg-length="Maksimalus įrašo ilgis 50 simbolių"
                                    data-validation-error-msg-custom='Telefono numeriui naudokite skaičius, tarpus ir "+" ženklą'>
                            </div>
                            <div ng-if='item.Type == "date"' class="input-group">
                                  <span class="input-group-addon">{{item.Field}}</span>
                                  <input  class="form-control date-picker col-xs-9" type="text" name="{{item.Field}}" value="{{foo[item.Field]}}">
                            </div>
                            <div ng-if='item.Type == "int(8)" || item.Type == "int(10)" ' class="row">
                                <input class="form-control" type="hidden" name="{{item.Field}}" value="{{foo[item.Field]}}" id="selected-item">
                            </div>
                            <div ng-if='item.Type == "int(11)"' class="row">
                                <input type="hidden" class="form-control {{item.field}}" name="{{item.Field}}" value="{{foo[item.Field]}}">
                            </div>
                            <div ng-if='item.Type == "int(15)"' class="row">
                                <input class="form-control" type="hidden" name="{{item.Field}}" value="{{foo[item.Field]}}">
                            </div>
                            <div ng-if='item.Type == "varchar(255)"' class="input-group">
                                <span class="input-group-addon">{{item.Field}}</span>
                                <img ng-src='{{foo[item.Field]}}' class="image">
                                <input  type="file" name="fileToUpload[]" class="form-control col-xs-9 image-path" id="{{item.Field}}"
                                data-validation="mime size"
		                            data-validation-allowing="jpg, png, gif"
		                            data-validation-max-size="400kb"
                                data-validation-error-msg-size="Maksimalus užkraunamų nuortraukų dydis 400kb..."
                                data-validation-error-msg-mime="Užkrauti galima tik nuotraukas...">
                                <input  type="hidden" name="{{item.Field}}" class="form-control col-xs-9" value="{{foo[item.Field]}}" id="{{item.Field}}-image">
                                <img ng-src="" width="200" style="display:none;" id="example-{{item.Field}}" class="image-example"/>
                            </div>
                            <div ng-if='item.Type == "varchar(10)" && item.Field == "category"' class="input-group" >
                                <span class="input-group-addon">Kategorija</span>
                                <select class="form-control" name="{{item.Field}}" ng-options="option.category for option in skillCat track by option.catid" ng-model="setSkillCat[foo[item.Field]]">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2 right">
                            <button action="submit" class="btn btn-primary main-controll-submit">Išsaugoti pakeitimus</button>
                          </div>
                        </div>
                    </form>
                    <form class="form-horizontal" enctype="multipart/form-data" id="text-translations-form">
                        <div ng-repeat="item in ToEdit">
                          <div ng-if='item.Type == "text"' class="input-group">
                            <span class="input-group-addon">{{item.Field}}</span>
                            <textarea id="{{item.Field}}" class="ckeditor editor-test" class="form-control col-xs-9" name="{{item.Field}}">
                                {{foo[item.Field]}}
                            </textarea>
                          </div>
                        </div>
                      <button type="submit" class="btn btn-primary text-translations-form-submit">Išsaugoti vertimus </button>
                    </form>
                </div>

<!-- ckeditor editor-test -->
<?php }
}
?>