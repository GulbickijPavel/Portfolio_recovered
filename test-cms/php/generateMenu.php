<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    header('Content-Type: application/json');
    require $path.'/php/dbConnect.php';

    $sql="SELECT * FROM sections";

    $result = mysqli_query($link, $sql) or die(mysql_error());
    $rows = array();
    while($row = (mysqli_fetch_assoc($result))) {
        $rows[] = $row;
    }
    if (isset($_GET['item'])) {
        if ($_GET['item'] == 'combo') {
            //echo count($rows);
            $items = array();
            $i = 1;
            while ($i <= count($rows) -1) {
                $items[] = array('item' => $i);
                $i ++;
            }
            echo json_encode($items);
        }
    }else {
        echo json_encode($rows);
    }
?>
