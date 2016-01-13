<?php /* Smarty version 3.1.24, created on 2016-01-12 01:55:59
         compiled from "/var/www/html/test-cms/smarty/templates/content.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17885193555694410fe0e143_50113329%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '152b7d1faec2a6958353f4d8b14f08b3aedd19cf' => 
    array (
      0 => '/var/www/html/test-cms/smarty/templates/content.tpl',
      1 => 1452556557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17885193555694410fe0e143_50113329',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5694410fe5bd39_72042166',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5694410fe5bd39_72042166')) {
function content_5694410fe5bd39_72042166 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17885193555694410fe0e143_50113329';
?>
    <div id="wrapper" ng-controller="wrapper">
        <?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div id="page-wrapper">
            <ul class="nav nav-tabs">
                <li class="web-page-only-control" id="view-tab-li"><a data-toggle="tab" href="#view">Peržiūra</a></li>
                <li id="edit-tab" class="web-page-only-control"><a data-toggle="tab" href="#edit">Valdymas</a></li>
                <li id="new-item-tab" class="web-page-only-control"><a data-toggle="tab" href="#new-item">Naujas</a></li>
                <li id="translations-tab" class="cms-page-only-control"><a data-toggle="tab" href="#translations">Vertimai</a></li>
                <li id="meniu-control-tab" class="main-web-page-control"><a data-toggle="tab" href="#menu-control">Meniu</a></li>
            </ul>
            <div class="message-div" id="message-box-div">

            </div>
           <h2 id="fileName" class="hide-me"></h2>
           <h2 id="fname" class="fname-header"></h2>
           <?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/newSection.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

           <div class="language-select input-group hide-me">
              <span class="input-group-addon">Pasirinkite kalbą: </span>
              <select id="langDropDown" class="form-control"  ng-options="option.langNative for option in langCmb.langCombo track by option.keyword" ng-model="langDefault"></select>
              <button class="btn btn-primary wiev-rr-button-my"><span class="glyphicon glyphicon-refresh"></span></button>
          </div>
          <!-- <div class="todo-list">
            <ul> To do:
              <li>Experience logo reset</li>
              <li><strong>Sections control</strong></li>
              <li><strong>Meniu control form</strong></li>
              <li><strong>Language control form</strong></li>
              <li>Texteditor data after save</li>
              <li><strong>Input validation</strong></li>
              <li>main page????</li>
            </ul>
            <button type="button" name="button" class="btn btn-primary to-do-show">to do show</button>
            <button type="button" name="button" class="btn btn-primary to-do-hide">to do hide</button>
          </div> -->

              <div class="tab-content">
                <div id="view" class="tab-pane fade view-tab-my">
                </div>
                 <?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                 <?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/new.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                <div id="translations" class="tab-pane fade">
                    
                    <div id="translations-main">
                        <button class="btn btn-primary lang-add-btn">Pridėti kalbą</button>
                        <button ng-click="langControl()" class="btn btn-primary lang-control-btn"> Kalbų valdymas</button>
                        <div class="translation-filter input-group">
                          <span class="input-group-addon">Paieška</span>
                          <input ng-model="query" type="text" class="form-control lang-search-field" id="searchfield" value="" placeholder="Įveskite ieškomą žodį">
                        </div>
                        <div  class="selected-languages">
                          <label ng-repeat="language in languages" class="checkbox-inline"><input type="checkbox" ng-model="myFilter[language.Field]" > {{language.Field}}</label>
                          <input class="lang-checkbox" ng-init="myFilter.en=true" type="checkbox" ng-model="myFilter.en"/></<br>
                        </div>
                        <div id="lang-control-container" class="">
                            <form id="lang-control-form" class="form-horizontal jumbotron edit-lang-form">
                              <h3>Redaguoti kalbą</h3>
                                <div class="input-group">
                                      <span class="input-group-addon">Kalba:</span>
                                      <select id="lang-control-id" class="form-control" name="" ng-options="option.langNative for option in langCmb.langCombo track by option.languageId" ng-model="langDefault"> </select>
                                      <div class="input-group-btn">
                                         <a href="#" id="lang-del-button" class="btn btn-danger">Ištrinti</a>
                                      </div>
                                </div>
                                <div ng-repeat="item in langFields">
                                    <div ng-if='item.Type == "varchar(50)"' class="input-group">
                                          <span class="input-group-addon">{{item.Field}}</span>
                                          <input class="disabled-input-my form-control col-xs-9" type="text" name="{{item.Field}}" value="{{langDefault[item.Field]}}">
                                    </div>
                                    <div ng-if='item.Type == "int(8)" || item.Type == "int(10)" ' class="row">
                                        <input class="form-control" type="hidden" name="{{item.Field}}" value="{{langDefault[item.Field]}}">
                                    </div>
                                    <div ng-if='item.Type == "varchar(255)"' class="input-group">
                                        <span class="input-group-addon">{{item.Field}}</span>
                                        <img ng-src='{{langDefault[item.Field]}}' class="lang-prev-image">
                                        <input  type="file" name="fileToUpload[]" class="disabled-input-my form-control col-xs-9 image-path" id="{{item.Field}}"
                                        data-validation="mime size"
        		                            data-validation-allowing="jpg, png, gif"
        		                            data-validation-max-size="75kb"
                                        data-validation-error-msg-size="Maksimalus užkraunamų nuortraukų dydis 75kb..."
                                        data-validation-error-msg-mime="Užkrauti galima tik nuotraukas...">
                                        <input  type="hidden" name="{{item.Field}}" class="form-control col-xs-9" value="{{langDefault[item.Field]}}" id="{{item.Field}}-image">
                                        <img ng-src="" width="200" style="display:none;" id="example-{{item.Field}}" class="lang-image-example"/>
                                    </div>
                                </div>
                                <input type="button" value="Uždaryti" class="close-form-btn btn btn-default">
                                <!-- <button type="reset" class="close-form-btn btn btn-default"> Uždaryti</button> -->
                                <button type="submit" class="btn btn-primary"> Pateikti</button>
                            </form>
                        </div>
                          <div id="new-lang-container" class="jumbotron new-lang-form">
                            <h3>Nauja kalba</h3>
                            <form id="new-lang-form">
                              <div class="input-group">
                                      <span class="input-group-addon">Kalba:</span>
                                      <input name="name" class="form-control" type="text" data-validation="length" data-validation-length="min2" data-validation-error-msg-length="Laukas negali likti tuščias.">
                              </div>
                              <div class="input-group">
                                      <span class="input-group-addon">Nuoroda:</span>
                                      <input name="url" class="form-control" type="text" data-validation="length" data-validation-length="min2" data-validation-error-msg-length="Laukas negali likti tuščias.">
                              </div>
                              <div class="input-group">
                                      <span class="input-group-addon">Kalbos Kodas:</span>
                                      <input name="keyword" class="form-control"  type="text" data-validation="length" data-validation-length="min2" data-validation-error-msg-length="Laukas negali likti tuščias.">
                              </div>
                              <div class="input-group">
                                      <span class="input-group-addon">Gym. Kalba:</span>
                                      <input name="langNative" class="form-control"  type="text" data-validation="length" data-validation-length="min2" data-validation-error-msg-length="Laukas negali likti tuščias.">
                              </div>
                              <div class="input-group">
                                      <span class="input-group-addon">Paveiklėlis:</span>
                                      <input name="image" class="form-control"  type="file"
                                      data-validation="mime size"
      		                            data-validation-allowing="jpg, png, gif"
      		                            data-validation-max-size="75kb"
                                      data-validation-error-msg-size="Maksimalus užkraunamų nuortraukų dydis 75kb..."
                                      data-validation-error-msg-mime="Užkrauti galima tik nuotraukas...">
                              </div>
                              <button class="btn btn-primary" type="submit"> Išsaugoti </button>
                              <input type="button" value="Uždaryti" class="close-form-btn btn btn-default">
                              <!-- <button class="btn btn-default close-form-btn" type="reset"> Uždaryti </button> -->
                            </form>
                          </div>
                        <ul class="translations-forms-container">
                            <li class="translations-list">
                                <div class="lang-headers">
                                    <label ng-repeat="language in languages | langFilter: myFilter " class="form-group">{{language.Field}}</label>
                                    <label class="form-group">Valdymas</label>
                                </div>
                                    
                                <div class="new-translation-in-list">
                                  <input type="text" class="form-control" id="new-lt" value="" placeholder="Naujas">
                                  <input type="text" class="form-control" id="new-en" value="" placeholder="new">
                                  <input type="text" class="form-control" id="new-ru" value="" placeholder="Новый">
                                  <div class="form-group translations-control">
                                      <div class="form-group">
                                        <img alt="save" src="../images/save.png" id="new-translation" class="form-group translation-save list" title="save">
                                        <img alt="success" src="../images/success.png" id="save-success" class="form-group ok-msg list">
                                      </div>
                                  </div>
                                </div>
                            </li>
                            <li class="translation-row" ng-repeat="translation in translations | filter:query">
                              <form enctype="multipart/form-data" class="" id="tr-form-{{translation.translationid}}">
                                <div >
                                    <input type="hidden" name="trid" value="{{translation.translationid}}">
                                    <div ng-repeat="language in languages | langFilter: myFilter" class="form-group translations-list">
                                      <input type="text" class="form-control" name="{{language.Field}}" id="{{language.Field}}{{translation.translationid}}" value="{{translation[language.Field]}}">
                                    </div>
                                    <div class="form-group translations-control">
                                        <div class="form-group">
                                            <img alt="save" src="../images/save.png" id="{{translation.translationid}}" class="form-group translation-save list" title="save">
                                            <img alt="delete" src="../images/delete.png" id="del{{translation.translationid}}" class="form-group translation-delete list" title="delete">
                                            <img alt="success" src="../images/success.png" id="okimg{{translation.translationid}}" class="form-group ok-msg">
                                        </div>
                                    </div>
                                </div>
                              </form>
                            </li>
                        </ul>
                    </div>

                </div>
                
                <div id="menu-control" class="tab-pane fade">
                    <div ng-model="meniuControl">
                        <div class="row">
                            <div class="form-group col-xs-4">
                                <label>Skiltis</label>
                            </div>
                            <div class="form-group col-xs-3">
                                <label>Nauduoja duomenų lentelę</label>
                            </div>
                            <div class="form-group col-xs-1">
                                <label>Rodoma</label>
                            </div>
                            <div class="form-group col-xs-2">
                                <label>Eileškumas</label>
                            </div>
                            <div class="form-group col-xs-2">
                                <label>Veiksmai</label>
                            </div>
                        </div>
                        <div ng-repeat="menuItem in menuItems | orderBy:'sectionOrder'">
                            <div ng-if='menuItem.sectionname != "Contacts"' class="row">
                                <input id="secId{{menuItem.sectionid}}" type="hidden" class="form-control" value="{{menuItem.sectionid}}">
                                <div class="form-group col-xs-4">
                                    <input id="secName{{menuItem.sectionid}}" type="text" class="form-control" value="{{menuItem.sectionname}}">
                                </div>
                                <div class="form-group col-xs-3">
                                    <input id="secTable{{menuItem.sectionid}}" type="text" class="form-control" value="{{menuItem.usingTable}}">
                                </div>
                                <div class="form-group col-xs-1">
                                    <input ng-if="menuItem.shown == 1" id="secShow{{menuItem.sectionid}}" type="checkbox" value="{{menuItem.shown}}" class="form-control menu-checkbox" checked>
                                    <input ng-if="menuItem.shown != 1" id="secShow{{menuItem.sectionid}}" type="checkbox" value="{{menuItem.shown}}" class="form-control menu-checkbox">
                                    {{checked}}
                                </div>
                                <div class="form-group col-xs-2">
                                    <select class="form-control" id="secOrder{{menuItem.sectionid}}" name="" ng-options="option.item for option in secItems.combo track by option.item" ng-model="myDefaulForCombo[menuItem.sectionid -1]">
                                     </select>
                                </div>
                                <div class="form-group col-xs-1">
                                    <img id="secSave{{menuItem.sectionid}}" class="form-group meniu-control-save" ng-src="../images/save.png">
                                </div>
                                <div class="form-group col-xs-1">
                                    <img alt="success" src="../images/success.png" id="okimg{{menuItem.sectionid}}" class="form-group ok-msg">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<?php }
}
?>