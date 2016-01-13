<?php /* Smarty version 3.1.24, created on 2016-01-05 00:08:49
         compiled from "/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/main/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1122253971568aed71df9da5_58313956%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bea44a96921daeaa194f0d32da164e54ad47eab3' => 
    array (
      0 => '/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/main/header.tpl',
      1 => 1451945324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1122253971568aed71df9da5_58313956',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568aed71e3ac42_29784564',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568aed71e3ac42_29784564')) {
function content_568aed71e3ac42_29784564 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1122253971568aed71df9da5_58313956';
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
        <div class="cooke-notification">
          <p><?php echo smarty_function_translation(array('langId'=>"71"),$_smarty_tpl);?>
<br>
            <a href="http://www.google.com/intl/<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
/policies/privacy/partners/" target="_blank">
              <?php echo smarty_function_translation(array('langId'=>"70"),$_smarty_tpl);?>

            </a>
          </p>
          <a id="cooke-btn" href="#" class="btn btn-warning">
            <?php echo smarty_function_translation(array('langId'=>"72"),$_smarty_tpl);?>

          </a>
        </div>
            <?php echo $_smarty_tpl->getSubTemplate ('main/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php echo $_smarty_tpl->getSubTemplate ('sections/contacts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="container">

            <div class="main" id="main">
<?php }
}
?>