<?php /* Smarty version 3.1.24, created on 2015-11-23 16:29:35
         compiled from "/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1566091605565322cfcb2cc8_01040110%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7559d8512c98cb4d13569de914680818c7bb03b' => 
    array (
      0 => '/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/404.tpl',
      1 => 1448288908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1566091605565322cfcb2cc8_01040110',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565322cfd192b2_49294382',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565322cfd192b2_49294382')) {
function content_565322cfd192b2_49294382 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1566091605565322cfcb2cc8_01040110';
?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>404</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link type="text/css" rel="stylesheet" href="/css/styles.min.css">
  </head>
    <body class="not-found-main">
        <img class="not-found-image-container" src="/images/404.png" alt="404">
        <span class="main-text"><strong><?php echo smarty_function_translation(array('langId'=>"73"),$_smarty_tpl);?>
</strong></span>
        <span class="explanation"><?php echo smarty_function_translation(array('langId'=>"74"),$_smarty_tpl);?>
</span>
        <a href="/<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"><?php echo smarty_function_translation(array('langId'=>"75"),$_smarty_tpl);?>
</a>
    </body>
</html><?php }
}
?>