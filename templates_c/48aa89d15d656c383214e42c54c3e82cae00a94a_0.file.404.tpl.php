<?php /* Smarty version 3.1.24, created on 2016-01-07 15:01:25
         compiled from "/var/www/html/smarty/templates/main/404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:622314093568e61a58abf63_10354173%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48aa89d15d656c383214e42c54c3e82cae00a94a' => 
    array (
      0 => '/var/www/html/smarty/templates/main/404.tpl',
      1 => 1452168055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '622314093568e61a58abf63_10354173',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568e61a58d4408_95090356',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568e61a58d4408_95090356')) {
function content_568e61a58d4408_95090356 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '622314093568e61a58abf63_10354173';
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