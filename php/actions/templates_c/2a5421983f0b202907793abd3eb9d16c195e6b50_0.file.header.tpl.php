<?php /* Smarty version 3.1.24, created on 2015-09-22 12:44:42
         compiled from "C:/wamp/www/portfolio/portfolio.lt/smarty/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:61325601311ae3c357_73038427%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a5421983f0b202907793abd3eb9d16c195e6b50' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/smarty/templates/header.tpl',
      1 => 1442918672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61325601311ae3c357_73038427',
  'variables' => 
  array (
    'showMenu' => 0,
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5601311aef7b86_95973843',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5601311aef7b86_95973843')) {
function content_5601311aef7b86_95973843 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '61325601311ae3c357_73038427';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="/portfolio/portfolio.lt/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="/portfolio/portfolio.lt/css/styles.css">
    <link rel="stylesheet" href="/portfolio/portfolio.lt/css/magicsuggest-min.css">
    <link rel="stylesheet" href="/portfolio/portfolio.lt/slider/jquery.bxslider.css">
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