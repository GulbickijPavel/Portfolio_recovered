<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    require  $path.'/php/dbConnect.php';
    require  $path.'/smarty/config.php';
    session_start();
//    session_destroy();
//    session_write_close();
//    setcookie(session_name(),'',0,'/');
//    session_regenerate_id(true);
    if(isset($_SESSION["username"]) and isset($_SESSION["password"]))
    {
        function smarty_function_translation($params, &$smarty)
        {
            require  $_SERVER['DOCUMENT_ROOT'].'/php/dbConnect.php';
            $sql = "SELECT * FROM translations";
            $result = mysqli_query($link, $sql) or die(mysql_error());
            while($row = (mysqli_fetch_assoc($result)))
            {
                $translations[] = $row;
            }
            if(isset($_SESSION['lang']))
            {
                $lang = $_SESSION['lang'];
            }
            else{
                $lang = "lt";
            }
            if(isset($params['langEn'])){
                $en = $params['langEn'];
                foreach ($translations as $b) {
                    if ($b['en'] == $en) {
                        $output = $b[$lang];
                        return $output;
                    }
                }
            }
            if(isset($params['langId'])){
                $id = $params['langId'];
                foreach ($translations as $b) {
                    if ($b['translationid'] == $id) {
                        $output = $b[$lang];
                        return $output;
                    }
                }
            }

        }
        $smarty->display('smarty/templates/index.tpl');
    }
    else{
        $smarty->display($path.'/test-cms/login.tpl');
    }
?>
