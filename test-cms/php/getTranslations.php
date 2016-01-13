<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    header('Content-Type: application/json');
    require $path.'/php/dbConnect.php';

    $sql="SELECT * FROM translations ORDER BY translationid ASC";


    $result = mysqli_query($link, $sql) or die(mysql_error());
    $rows = array();
    while($row = (mysqli_fetch_assoc($result))) {
        $rows[] = $row;
    }
    echo json_encode($rows);
?>
