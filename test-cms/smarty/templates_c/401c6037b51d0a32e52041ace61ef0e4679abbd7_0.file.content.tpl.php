<?php /* Smarty version 3.1.24, created on 2016-01-05 01:07:24
         compiled from "/home/drabuziu/domains/pgulbickij.lt/public_html/test-cms/smarty/templates/content.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2017397147568afb2ce7ce69_67840021%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '401c6037b51d0a32e52041ace61ef0e4679abbd7' => 
    array (
      0 => '/home/drabuziu/domains/pgulbickij.lt/public_html/test-cms/smarty/templates/content.tpl',
      1 => 1451948837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2017397147568afb2ce7ce69_67840021',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568afb2cf393a2_86965961',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568afb2cf393a2_86965961')) {
function content_568afb2cf393a2_86965961 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2017397147568afb2ce7ce69_67840021';
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
                <li id="header-control-tab" class="main-web-page-control"><a data-toggle="tab" href="#header-control">Antraštė</a></li>
                <li id="footer-control-tab" class="main-web-page-control"><a data-toggle="tab" href="#footer-control">Paraštė</a></li>
                <li id="meniu-control-tab" class="main-web-page-control"><a data-toggle="tab" href="#menu-control">Meniu</a></li>
            </ul>
           <h2 id="fileName"></h2>
           <?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/newSection.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

           <div class="language-select input-group hide-me">
              <span class="input-group-addon">Pasirinkite kalbą: </span>
              <select id="langDropDown" class="form-control"  ng-options="value as option.native for option in langCmb.langCombo track by option.keyword" ng-model="data.selectedOption"></select>
              <button class="btn btn-primary wiev-rr-button-my"><span class="glyphicon glyphicon-refresh"></span></button>
          </div>
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
                        <button class="btn btn-primary lang-control-btn"> Kalbų valdymas</button>
                        <div id="lang-control-container" class="jumbotron new-lang-form">
                            <h3>Redaguoti kalbą</h3>
                            <form>
                                <div class="input-group">
                                      <span class="input-group-addon">Kalba:</span>
                                      <select class="form-control" name="" ng-options="value as option.native for option in langCmb.langCombo track by option.keyword" ng-model="data.selectedOption"> </select>
                                </div>
                                <!-- <div ng-repeat="language in languages" class="">
                                    {{language.Field}}
                                </div> -->
                                <div class="input-group">
                                      <span class="input-group-addon">Kalba:</span>
                                      <input name="name" class="form-control" type="text">
                                </div>
                                <div class="input-group">
                                      <span class="input-group-addon">Nuoroda:</span>
                                      <input name="url" class="form-control" type="text">
                                </div>
                                <div class="input-group">
                                      <span class="input-group-addon">Kalbos Kodas:</span>
                                      <input name="keyword" class="form-control"  type="text">
                                </div>
                                <div class="input-group">
                                      <span class="input-group-addon">Gym. Kalba:</span>
                                      <input name="langNative" class="form-control"  type="text">
                                </div>
                                <div class="input-group">
                                      <span class="input-group-addon">Paveiklėlis:</span>
                                      <input name="image" class="form-control"  type="file">
                                </div>
                                <span style="width: 80%; margin-left:40%"> Kalbų valdymas laikinai neveikia!</span>
                            </form>
                        </div>
                          <div id="new-lang-container" class="jumbotron new-lang-form">
                            <h3>Nauja kalba</h3>
                            <form id="new-lang-form">
                              <div class="input-group">
                                      <span class="input-group-addon">Kalba:</span>
                                      <input name="name" class="form-control" type="text">
                              </div>
                              <div class="input-group">
                                      <span class="input-group-addon">Nuoroda:</span>
                                      <input name="url" class="form-control" type="text">
                              </div>
                              <div class="input-group">
                                      <span class="input-group-addon">Kalbos Kodas:</span>
                                      <input name="keyword" class="form-control"  type="text">
                              </div>
                              <div class="input-group">
                                      <span class="input-group-addon">Gym. Kalba:</span>
                                      <input name="langNative" class="form-control"  type="text">
                              </div>
                              <div class="input-group">
                                      <span class="input-group-addon">Paveiklėlis:</span>
                                      <input name="image" class="form-control"  type="file">
                              </div>
                              <button class="btn btn-primary" type="submit"> Išsaugoti </button>
                              <button class="btn btn-default" type="reset"> Anulioti </button>
                            </form>
                          </div>
                        <ul>
                          <div  class="selected-languages">

                            <div ng-repeat="language in languages" class="">
                              <input type="checkbox" ng-model="myFilter[language.Field]" > {{language.Field}} </br>
                            </div>
                            <input class="lang-checkbox" type="checkbox" ng-model="myFilter.en"/></<br>
                              <!-- <input class="lang-checkbox" type="checkbox" ng-model="myFilter.lt" /> lt  </br>
                              <input class="lang-checkbox" type="checkbox" ng-model="myFilter.ru" /> ru  </br>
                              <input class="lang-checkbox" type="checkbox" ng-model="myFilter.de" /> de </br> -->
                          </div>
                          <div class="translation-filter">
                            <div class="form-group">
                              <label class="form-group">Paieška</label>
                            </div>
                            <div class="form-group">
                              <input ng-model="query" type="text" class="form-control" id="searchfield" value="" placeholder="Įveskite ieškomą žodį">
                            </div>
                          </div>
                            <li class="translations-list">
                              <div>
                                <div class="lang-headers">
                                    <label ng-repeat="language in languages | langFilter: myFilter " class="form-group">{{language.Field}}</label>
                                    <label class="form-group">Valdymas</label>
                                </div>
                                    
                                    <div class="new-translation-in-list">
                                      <div class="form-group col-xs-3">
                                        <input type="text" class="form-control" id="new-lt" value="" placeholder="Naujas">
                                      </div>
                                      <div class="form-group col-xs-3">
                                        <input type="text" class="form-control" id="new-en" value="" placeholder="new">
                                      </div>
                                      <div class="form-group col-xs-3">
                                        <input type="text" class="form-control" id="new-ru" value="" placeholder="Новый">
                                      </div>
                                      <div class="form-group col-xs-3">
                                          <div class="form-group row">
                                          <img alt="save" src="../images/save.png" id="new-translation" class="form-group translation-save col-xs-4" title="save">
                                          <img alt="success" src="../images/success.png" id="save-success" class="form-group ok-msg col-xs-4">
                                          </div>
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
                                    <!-- <div class="form-group col-xs-3">
                                      <input type="text" class="form-control list" id="en{{translation.translationid}}" value="{{translation.en}}">
                                    </div>
                                    <div class="form-group col-xs-3">
                                      <input type="text" class="form-control list" id="ru{{translation.translationid}}" value="{{translation.ru}}">
                                    </div> -->
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
                    <div ng-controller="mainMenu">
                        <div class="row">
                            <div class="form-group col-xs-4">
                                <label>Section</label>
                            </div>
                            <div class="form-group col-xs-3">
                                <label>UsingTable</label>
                            </div>
                            <div class="form-group col-xs-1">
                                <label>Shown</label>
                            </div>
                            <div class="form-group col-xs-1">
                                <label>Order</label>
                            </div>
                            <div class="form-group col-xs-2">
                                <label>Action</label>
                            </div>
                        </div>
                        <div ng-repeat="menuItem in menuItems | orderBy:'sectionOrder'">
                            <div class="row">
                                <input id="secId{{menuItem.sectionid}}" type="hidden" class="form-control" value="{{menuItem.sectionid}}">
                                <div class="form-group col-xs-4">
                                    <input id="secName{{menuItem.sectionid}}" type="text" class="form-control" value="{{menuItem.sectionname}}">
                                </div>
                                <div class="form-group col-xs-3">
                                    <input id="secTable{{menuItem.sectionid}}" type="text" class="form-control" value="{{menuItem.usingTable}}">
                                </div>
                                <div class="form-group col-xs-1">
                                    <input id="secShow{{menuItem.sectionid}}" type="text" class="form-control" value="{{menuItem.shown}}">
                                </div>
                                <div class="form-group col-xs-1">
                                    <input id="secOrder{{menuItem.sectionid}}" type="text" class="form-control" value="{{menuItem.sectionOrder}}">
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
                
                <div id="header-control" class="tab-pane fade">
                     <h3>Header</h3>
                    
                    <form role="form" action='test.php' method="post">
<!--                        <div ng-controller="metaTags">

                            <div class="form-group" ng-repeat="tag in meta">
                                <label>Description</label>
                                <input class="form-control" name="description"  value="{{tag.description}}">
                            </div>
                            <div class="form-group" ng-repeat="tag in meta">
                                <label>Viewport</label>
                                <input class="form-control" name="viewport" value="{{tag.viewport}}">
                            </div>

                        </div>-->
                        <div ng-controller="links">
                            <label>Meta</label>
                            <div ng-repeat="link in links" >
                                <input ng-if="link.meta" type="text" class="form-control col-md-3" value="{{link.meta}}" name="{{link.meta}}">
                            </div>
                            <label>Links</label>
                            <div ng-repeat="link in links" >
                                <input ng-if="link.item" type="text" class="form-control col-md-3" value="{{link.item}}" name="{{link.item}}">
                            </div>
<!--
                            <div ng-repeat="link in links" >
                            <div class="form-group col-xs-3">
                                <input class="input-to-cut" type="text" class="form-control col-md-3" value="{{link.info[1]}}">
                            </div>
                            <div class="form-group col-xs-3">
                                <input class="input-to-cut" type="text" class="form-control col-md-3" value="{{link.info[2]}}">
                            </div>
                            <div class="form-group col-xs-6">
                                <input class="input-to-cut" type="text" class="form-control col-md-6" value="{{link.info[3]}}">
                            </div>
                                <input type="text" name="link{{link.id}}" value="{{link.info[0]}} {{link.info[1]}}{{link.info[2]}} {{link.info[3]}}">
                            </div>
-->
                        </div>
                        <button type="submit" class="btn btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>
                    </form>
                          
                </div>
                 <div id="footer-control" class="tab-pane fade">
                     <h3>Footer</h3>
                 </div>
            </div>
            
<!--
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Header</h1>
                </div>
            </div>
            <div class="row">
                <div id="loaded-page"class="panel panel-default pages" >
                <form role="form" action='test.php' method="post">
                    <div ng-controller="metaTags">
                        <div class="form-group" ng-repeat="tag in meta">
                            <label>Description</label>
                            <input class="form-control" name="description"  value="{{tag.description}}">
                        </div>
                        <div class="form-group" ng-repeat="tag in meta">
                            <label>Viewport</label>
                            <input class="form-control" name="viewport" value="{{tag.viewport}}">
                        </div>
                    </div>
                    <div ng-controller="links">
                        <label>Links</label>
                        <div ng-repeat="link in links" >
                            <div class="form-group col-xs-3">
                                <input class="input-to-cut" type="text" class="form-control col-md-3" value="{{link.info[1]}}">
                            </div>
                            <div class="form-group col-xs-3">
                                <input class="input-to-cut" type="text" class="form-control col-md-3" value="{{link.info[2]}}">
                            </div>
                            <div class="form-group col-xs-6">
                                <input class="input-to-cut" type="text" class="form-control col-md-6" value="{{link.info[3]}}">
                            </div>
                            <input type="text" name="link{{link.id}}" value="{{link.info[0]}} {{link.info[1]}}{{link.info[2]}} {{link.info[3]}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Submit Button</button>
                    <button type="reset" class="btn btn-default">Reset Button</button>
                </form>
                </div>
            </div>
-->
            
        </div>
    </div>
<?php }
}
?>