<?php /* Smarty version 3.1.24, created on 2015-10-20 13:24:00
         compiled from "/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18896329165626164077ea98_67835116%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7b896aba118e19eb316836556b35c8b1db0d059' => 
    array (
      0 => '/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/header.tpl',
      1 => 1444919583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18896329165626164077ea98_67835116',
  'variables' => 
  array (
    'lang' => 0,
    'showMenu' => 0,
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_562616407e91b5_26432434',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562616407e91b5_26432434')) {
function content_562616407e91b5_26432434 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18896329165626164077ea98_67835116';
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