<?php /* Smarty version 3.1.24, created on 2015-12-10 16:51:07
         compiled from "smarty/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17897649685669915ba9daf5_30267166%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cec86566193dc9e49a01dad0b732965532a19175' => 
    array (
      0 => 'smarty/templates/header.tpl',
      1 => 1449759049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17897649685669915ba9daf5_30267166',
  'variables' => 
  array (
    'lang' => 0,
    'showMenu' => 0,
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5669915bbc9cb3_88502316',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5669915bbc9cb3_88502316')) {
function content_5669915bbc9cb3_88502316 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17897649685669915ba9daf5_30267166';
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
">
  <head>
    <meta charset="utf-8">
    <title>Pavel Gulbickij <?php echo smarty_function_translation(array('langId'=>"52"),$_smarty_tpl);?>
</title>
    <meta name="description" content="<?php echo smarty_function_translation(array('langId'=>"51"),$_smarty_tpl);?>
 <?php echo smarty_function_translation(array('langId'=>"53"),$_smarty_tpl);?>
,<?php echo smarty_function_translation(array('langId'=>"54"),$_smarty_tpl);?>
">
    <meta name="author" content="Pavel Gulbickij">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="alternate" href="http://www.pgulbickij.lt/en" hreflang="en" />
    <link rel="alternate" href="http://www.pgulbickij.lt/lt" hreflang="lt" />
    <link rel="alternate" href="http://www.pgulbickij.lt/ru" hreflang="ru" />
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" media="screen">
    <link type="text/css" rel="stylesheet" href="/css/styles.min.css">
    <link type="text/css" rel="stylesheet" href="/css/jquery.bxslider.min.css">
  
    <?php echo '<script'; ?>
>
      (function(i,s,o,g,r,a,m) { i['GoogleAnalyticsObject']=r;i[r]=i[r]||function() {  
      (i[r].q=i[r].q||[]).push(arguments) } ,i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       } )(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-67989083-1', 'auto');
      ga('send', 'pageview');

    <?php echo '</script'; ?>
>
    </head>
    <body>
        <div class="cooke-notification"><p><?php echo smarty_function_translation(array('langId'=>"71"),$_smarty_tpl);?>
<br><a href="http://www.google.com/intl/<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
/policies/privacy/partners/" target="_blank"><?php echo smarty_function_translation(array('langId'=>"70"),$_smarty_tpl);?>
</a></p><a id="cooke-btn" href="#" class="btn btn-warning"><?php echo smarty_function_translation(array('langId'=>"72"),$_smarty_tpl);?>
</a></div>
        <?php if ($_smarty_tpl->tpl_vars['showMenu']->value == 'true') {?> 
            <?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php echo $_smarty_tpl->getSubTemplate ('sections/contacts/contacts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php }?>
        <div class="container">
            <?php if ($_smarty_tpl->tpl_vars['showMenu']->value == 'true') {?>
            <div id="floating" class="floating-contacts">
            </div>
            <?php }?>
            <div class="main" id="main">
                 <span class="cms"><?php echo $_smarty_tpl->tpl_vars['cms']->value;?>
</span>
    <?php }
}
?>