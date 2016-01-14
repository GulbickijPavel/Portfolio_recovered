<?php /* Smarty version 3.1.24, created on 2016-01-14 02:44:13
         compiled from "/var/www/html/test-cms/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21317434615696ef5d1f2f43_69533223%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b8cc94a07663b49f5a7f8750132d145e729532c' => 
    array (
      0 => '/var/www/html/test-cms/login.tpl',
      1 => 1452732249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21317434615696ef5d1f2f43_69533223',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5696ef5d206b50_73172804',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5696ef5d206b50_73172804')) {
function content_5696ef5d206b50_73172804 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21317434615696ef5d1f2f43_69533223';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="css/styles.min.css">
    </head>
    <body class="login-body">
        <div class="login">
            <div class="login-form jumbotron">
                <form class="form-horizontal" id="login-form-my" action="login.php" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                      <span class="input-group-addon"> Prisijungimo vardas:</span>
                      <input type="text" class="form-control" name="username" data-validation="custom" data-validation-regexp="^([a-zA-Z0-9]+)$" data-validation-error-msg="Naudokite tik lotiniškas raides/skaičius" data-validation-optional="true">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">Slaptažodis:</span>
                      <input type="password" class="form-control" name="password" data-validation="custom" data-validation-regexp="^([a-zA-Z0-9]+)$" data-validation-error-msg="Naudokite tik lotiniškas raides/skaičius" data-validation-optional="true">
                    </div>
                    <button type="submit" class="btn btn-primary">Pateikti</button>
                    <button type="reset" class="btn btn-default">Atšaukti</button>
                </form>
            </div>
        </div>
        <?php echo '<script'; ?>
 src="bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
        <!-- <?php echo '<script'; ?>
 src="/test-cms/js/script.js"><?php echo '</script'; ?>
> -->
        <?php echo '<script'; ?>
 src="/test-cms/js/validator.js"><?php echo '</script'; ?>
>
    </body>

</html>
<?php }
}
?>