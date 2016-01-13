<?php /* Smarty version 3.1.24, created on 2015-10-13 16:22:14
         compiled from "/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/login/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:654615623561d0586e76674_54814502%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b1175db29202457cb6eee98024f3b19143fda7f' => 
    array (
      0 => '/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/login/login.tpl',
      1 => 1442999283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '654615623561d0586e76674_54814502',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_561d0586ec7b91_46646301',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561d0586ec7b91_46646301')) {
function content_561d0586ec7b91_46646301 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '654615623561d0586e76674_54814502';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="slider/jquery.bxslider.css">
    </head>
    <body class="login-body">
        <div class="login">
            <div class="login-form jumbotron">
                <form class="form-horizontal" action="php/login.php" method="post">
                    <div class="form-group">
                      <label for="" class="col-lg-2 control-label">Username</label>
                      <div class="col-lg-10">
                        <input type="text" class="form-control" name="username" id="" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="" class="col-lg-2 control-label">Password</label>
                      <div class="col-lg-10">
                        <input type="password" class="form-control" name="password" id="" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2 right">
                        <button type="reset" class="btn btn-default">Atšaukti</button>
                        <button type="submit" class="btn btn-primary">Pateikti</button>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </body>

</html><?php }
}
?>