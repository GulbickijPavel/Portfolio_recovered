<?php /* Smarty version 3.1.24, created on 2016-01-04 23:38:53
         compiled from "/home/drabuziu/domains/pgulbickij.lt/public_html/test-cms/smarty/templates/edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1456451894568ae66d6a5399_23554902%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60a3371219a7b394be07dc2768cd27046e4923c4' => 
    array (
      0 => '/home/drabuziu/domains/pgulbickij.lt/public_html/test-cms/smarty/templates/edit.tpl',
      1 => 1451943291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1456451894568ae66d6a5399_23554902',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568ae66d6b66b2_72698373',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568ae66d6b66b2_72698373')) {
function content_568ae66d6b66b2_72698373 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1456451894568ae66d6a5399_23554902';
?>
                <div id="edit" class="tab-pane fade">
                      
                    <form class="form-horizontal" id="control-form" enctype="multipart/form-data">
                        <div class="input-group">
                                <span class="input-group-addon">Pasirinkti:</span>
                                <select id="item-id" class="form-control" ng-options="option[1] for option in combo track by option[0]"
      ng-model="foo"></select>
                            <div class="input-group-btn">
                               <a href="#" id="item-del-button" class="btn btn-danger">Ištrinti</a>
                            </div>
                        </div>
                      <input id="table-field" class="form-control col-xs-9" type="hidden" name="table" value="">
                        <div ng-repeat="item in ToEdit">
                            <div ng-if='item.Type == "varchar(50)"' class="input-group">
                                    <span class="input-group-addon">{{item.Field}}</span>
                                    <input  class="form-control col-xs-9" type="text" name="{{item.Field}}" value="{{foo[item.Field]}}">
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
                                <input  type="file" name="fileToUpload[]" class="form-control col-xs-9 image-path" id="{{item.Field}}">
                                <input  type="hidden" name="{{item.Field}}" class="form-control col-xs-9" value="{{foo[item.Field]}}" id="{{item.Field}}-image">
                                <img ng-src="" width="200" style="display:none;" id="example-{{item.Field}}" class="image-example"/>
                            </div>
                            <div ng-if='item.Type == "varchar(10)" && item.Field == "category"' class="input-group" >
                                <span class="input-group-addon">{{item.Field}}</span>
                                <select class="form-control" name="{{item.Field}}">
                                  <option ng-selected="foo[item.Field] == 'defaultValue'" value="1">Main</option>
                                  <option ng-selected="foo[item.Field] == 'defaultValue'" value="2">Secondary</option>
                                  <option ng-selected="foo[item.Field] == 'defaultValue'" value="3">Other</option>
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
                            <textarea id="b225{{item.Field}}" class="ckeditor editor-test" class="form-control col-xs-9" name="{{item.Field}}">
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