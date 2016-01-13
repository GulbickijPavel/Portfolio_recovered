<?php /* Smarty version 3.1.24, created on 2015-09-23 11:57:32
         compiled from "smarty/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:61015602697c3fd437_56907617%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e58376d5eeb67fe07e3d9d83647d88869034ae79' => 
    array (
      0 => 'smarty/templates/header.tpl',
      1 => 1442935129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61015602697c3fd437_56907617',
  'variables' => 
  array (
    'showMenu' => 0,
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5602697c4300c3_78774464',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5602697c4300c3_78774464')) {
function content_5602697c4300c3_78774464 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '61015602697c3fd437_56907617';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link type="text/css" rel="stylesheet" href="/portfolio.lt/css/bootstrap.css" media="screen">
    <link type="text/css" rel="stylesheet" href="/portfolio.lt/css/styles.css">
    <link type="text/css" rel="stylesheet" href="/portfolio.lt/css/magicsuggest-min.css">
    <link type="text/css" rel="stylesheet" href="/portfolio.lt/slider/jquery.bxslider.css">
  </head>
    <body>
        <?php if ($_smarty_tpl->tpl_vars['showMenu']->value == 'true') {?> 
            <?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php }?>
        <div class="container">
            <div class="main" id="main">
                 <span class="cms"><?php echo $_smarty_tpl->tpl_vars['cms']->value;?>
</span>
    <?php }
}
?>