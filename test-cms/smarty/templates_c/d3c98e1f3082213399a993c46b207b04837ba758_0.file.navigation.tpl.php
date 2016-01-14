<?php /* Smarty version 3.1.24, created on 2016-01-14 02:55:21
         compiled from "/var/www/html/test-cms/smarty/templates/navigation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16179725715696f1f9e5ece4_45588364%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3c98e1f3082213399a993c46b207b04837ba758' => 
    array (
      0 => '/var/www/html/test-cms/smarty/templates/navigation.tpl',
      1 => 1452732916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16179725715696f1f9e5ece4_45588364',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5696f1f9e85223_17595387',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5696f1f9e85223_17595387')) {
function content_5696f1f9e85223_17595387 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16179725715696f1f9e5ece4_45588364';
?>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/en" target="_blank">www.pgulbickij.lt Turinio valdymo sistema</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Atsijungti</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
           <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
<!--
                        <li ng-repeat="file in fileList.docs">
                            <a class="divlink" ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.doc}}</a>
                        </li>
-->

                        <li>
                            <a ng-click='' class="sections-list-a" href="#"><i class="fa fa-folder fa-fw"></i>Skiltys <span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level section-list hide-me"ng-repeat="folder in fileList.dir">
<!--
                                <li ng-if='folder.docs && folder.folderName == "main"' ng-repeat="file in folder.docs">
                                    <a ng-click='' class="main-controll" ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.doc}}</a>
                                </li>
                                <li ng-if='folder.dir && folder.folderName == "main"' ng-repeat="file in folder.dir">
                                    <a ng-click='' class="main-controll"  ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.docs}}</a>
                                </li>
-->
                                <li ng-if='folder.docs && folder.folderName != "main" && file.doc != "contacts.tpl"' ng-repeat="file in folder.docs">
                                    <a ng-click='go(file.doc, 0)' class="section-controll" ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.doc}}</a>
                                </li>
                                <li ng-if='folder.dir && folder.folderName != "main" && file.doc != "contacts.tpl"' ng-repeat="file in folder.dir">
                                    <a ng-click='go(file.docs, 0)' class="section-controll"  ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.docs}}</a>
                                </li>

                              </ul>
                              <button class="btn btn-primary section-add-btn hide-me">Nauja skiltis</button>
                              <button ng-click="sectionControl()" class="btn btn-primary section-controll-btn hide-me">Valdyti skiltis</button>
                            
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fa  fa-folder fa-fw"></i>Tuščios bylos, šablonai<span class="fa arrow"></span></a>

                        </li> -->
                        <li>
                            <a class="settings-nav" href="#"><i class="fa  fa-cog fa-fw"></i>Nustatymai<span class="fa arrow"></span></a>
                            
                            <ul class="nav nav-second-level">
                                <li ng-repeat="setting in settings.docs">
                                    <a ng-click='translation()' class="cms" ref="{{setting.href}}"><i class="fa fa-cog fa-fw"></i>Vertimų/kalbų valdymas</a>
                                </li>

                                <!-- <li ng-repeat="sfolder in settings.dir">
                                    <a href="#"><i class="fa fa-folder fa-fw"></i>{{sfolder.folderName}}<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li ng-if='sfolder.docs' ng-repeat="sfile in sfolder.docs">
                                            <a ng-click='translation()' class="cms" ref="{{sfile.href}}"><i class="fa fa-file fa-fw"></i>{{sfile.doc}}</a>
                                        </li>
                                        <li ng-if='sfolder.dir' ng-repeat="sfile in settings.dir">
                                            <a ng-click='translation()' class="cms"  ref="{{sfile.href}}"><i class="fa fa-file fa-fw"></i>{{sfile.docs}}</a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li>
                                    <a ng-click='meniuControl()' class="menu-control-link" href="#" id="h-f-control"><i class="fa fa-cog fa-fw"></i>Meniu valdymas</a>
                                </li>

                            </ul>
                            
                        </li>
                    </ul>
                </div>
<!--
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
-->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<?php }
}
?>