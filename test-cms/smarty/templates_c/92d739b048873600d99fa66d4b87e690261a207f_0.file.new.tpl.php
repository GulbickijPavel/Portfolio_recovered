<?php /* Smarty version 3.1.24, created on 2016-01-11 01:06:10
         compiled from "/var/www/html/test-cms/smarty/templates/new.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8135277755692e3e2ceb603_55475245%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92d739b048873600d99fa66d4b87e690261a207f' => 
    array (
      0 => '/var/www/html/test-cms/smarty/templates/new.tpl',
      1 => 1452467163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8135277755692e3e2ceb603_55475245',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5692e3e2d00ab0_90603416',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5692e3e2d00ab0_90603416')) {
function content_5692e3e2d00ab0_90603416 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8135277755692e3e2ceb603_55475245';
?>
                <div id="new-item" class="tab-pane fade">
                     
                    <form class="form-horizontal" id="new-tem-form" enctype="multipart/form-data">
                      <input id="new-item-table-field" class="form-control col-xs-9" type="hidden" name="table" value="">
                        <div ng-repeat="item in ToEdit">
                            <div ng-if='item.Type == "varchar(50)"' class="input-group">
                                    <span class="input-group-addon">{{item.Field}}</span>
                                    <input  class="form-control col-xs-9" type="text" name="{{item.Field}}"
                                     data-validation="length"
                                     data-validation-length="max50"
                                     data-validation-error-msg-length="Maksimalus įrašo ilgis 50 simbolių">
                            </div>
                            <div ng-if='item.Type == "int(8)" || item.Type == "int(10)" ' class="row">
                                <input class="form-control" type="hidden" name="{{item.Field}}">
                            </div>
                            <div ng-if='item.Type == "date"' class="input-group">
                                  <span class="input-group-addon">{{item.Field}}</span>
                                  <input  class="form-control date-picker col-xs-9" type="text" name="{{item.Field}}" value="">
                            </div>
                            <div ng-if='item.Type == "varchar(255)"' class="input-group">
                                <span class="input-group-addon">{{item.Field}}</span>
                                <input  type="file" name="fileToUpload[]" class="form-control col-xs-9 image-path" id="new-{{item.Field}}"
                                data-validation="mime size required"
                                data-validation-allowing="jpg, png, gif"
                                data-validation-max-size="400kb"
                                data-validation-error-msg-size="Maksimalus užkraunamų nuortraukų dydis 400kb..."
                                data-validation-error-msg-mime="Užkrauti galima tik nuotraukas..."
                                data-validation-error-msg-required="Pasirinkite nuotrauką, maksimalus dydis 400kb, palaikomi formatai: jpg, png, gif">
                                <input  type="hidden" name="{{item.Field}}" class="form-control col-xs-9" value="" id="new-{{item.Field}}-image">
                                <img ng-src="" width="200" style="display:none;" id="example-new-{{item.Field}}" class="image-example"/>
                            </div>
                            <div ng-if='item.Type == "varchar(10)" && item.Field == "category"' class="input-group" >
                                <span class="input-group-addon">Kategorija</span>
                                <select class="form-control" name="{{item.Field}}" ng-options="option.category for option in skillCat track by option.catid" ng-model="setSkillCat[0]">

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary new-item-submit-button">Pateikti</button>
                        </div>
                        
                    </form>
                </div>
<?php }
}
?>