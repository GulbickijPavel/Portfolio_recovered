<?php /* Smarty version 3.1.24, created on 2016-01-05 12:20:26
         compiled from "/home/drabuziu/domains/pgulbickij.lt/public_html/test-cms/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1401845402568b98eae51b94_41920202%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eca79456d0549942c71c0c2687f734f9515b056f' => 
    array (
      0 => '/home/drabuziu/domains/pgulbickij.lt/public_html/test-cms/login.tpl',
      1 => 1451989220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1401845402568b98eae51b94_41920202',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568b98eaf21d80_97202840',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568b98eaf21d80_97202840')) {
function content_568b98eaf21d80_97202840 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1401845402568b98eae51b94_41920202';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="/css/styles.min.css">
        <link rel="stylesheet" href="/slider/jquery.bxslider.css">
    </head>
    <body class="login-body">
        <div class="login">
            <div class="login-form jumbotron">
                <form class="form-horizontal" action="login.php" method="post" enctype="multipart/form-data">
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