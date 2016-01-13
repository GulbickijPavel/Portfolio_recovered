<?php
    $translationsTable = "textTranslations";
    $server = "localhost";
    $user = "Pasha";
    $password = "123";
    $databaseScheme = 'portfolio';
    $link = mysqli_connect($server, $user, $password) or die("Could not connect: " . mysql_error($link));
    mysqli_set_charset( $link,'utf8');
    mysqli_select_db( $link, $databaseScheme);
?>
