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
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- <script src="/test-cms/js/script.js"></script> -->
        <script src="/test-cms/js/validator.js"></script>
    </body>

</html>
