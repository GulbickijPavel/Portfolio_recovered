<?php /* Smarty version 3.1.24, created on 2015-09-23 11:57:32
         compiled from "smarty/templates/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:153385602697c44b645_25807980%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dd8f15e232b9ce22f9d359b70dea6fb025753ec' => 
    array (
      0 => 'smarty/templates/menu.tpl',
      1 => 1442936100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153385602697c44b645_25807980',
  'variables' => 
  array (
    'sections' => 0,
    'item' => 0,
    'is_admin' => 0,
    'loged_as' => 0,
    'date' => 0,
    'SID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5602697c5129f6_80280557',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5602697c5129f6_80280557')) {
function content_5602697c5129f6_80280557 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '153385602697c44b645_25807980';
?>

        <div class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#">Pavel Gulbickij</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar-main">
              <ul class="nav navbar-nav">
                    <?php
$_from = $_smarty_tpl->tpl_vars['sections']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['shown'] == 1) {?>
                    <li>
                        <a href="#<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="menu_item"><?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['sectionname'];
$_tmp3=ob_get_clean();
echo smarty_function_translation(array('langEn'=>$_tmp3),$_smarty_tpl);?>
</a>
                    </li>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo smarty_function_translation(array('langEn'=>"Language"),$_smarty_tpl);?>
<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">   
                     <?php if (($_smarty_tpl->tpl_vars['is_admin']->value)) {?>
                      <li><a><img alt="image" class="settings-img" src="images/settings.png"></a></li>
                      <li><a href="/portfolio.lt/logout.php" class="btn btn-danger log-out"><?php echo smarty_function_translation(array('langEn'=>"Log-out"),$_smarty_tpl);?>
</a></li>
                    <?php }?>
                    <li class="lang-img"><a href="/portfolio.lt/lt" data-toggle="tooltip" data-placement="bottom" title="Lt" data-original-title="Lt"><img alt="lt" src="images/lt.gif">Lietuvių</a></li>
                    <li class="lang-img"><a href="/portfolio.lt/en" id="lang-en" data-toggle="tooltip" data-placement="bottom" title="En" data-original-title="En"><img alt="en" src="images/en.png">English</a></li>
                    <li class="lang-img"><a href="/portfolio.lt/ru" id="lang-ru" class="lang-img" data-toggle="tooltip" data-placement="bottom" title="Ru" data-original-title="Ru"><img alt="ru" src="images/ru.png">Русский</a></li>
                    </ul>
                </li>
              </ul>  
            </div>
          </div>
        </div>
        <?php if ((!$_smarty_tpl->tpl_vars['is_admin']->value)) {?>

             <?php } else { ?>
<!--
            <table class="log-info">
                <tr>
                    <td> Loged as</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['loged_as']->value;?>
 </td>
                </tr> 
                <tr>
                    <td> Last Login</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 </td>
                </tr>
                <tr>
                    <td> Date </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 </td>
                </tr>
                <tr>
                    <td> Session ID </td>
                     <td>   <?php echo $_smarty_tpl->tpl_vars['SID']->value;?>
 </td>
                </tr>
            </table>
-->
        <?php }
}
}
?>