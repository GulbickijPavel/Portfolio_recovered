<?php

    require 'smarty/libs/Smarty.class.php';
    require 'php/dbConnect.php';
    require 'php/translations.php';
    $smarty = new Smarty();
	$smarty->assign('lang', $_SESSION['lang']);
    $smarty->display('smarty/templates/main/404.tpl');
?>