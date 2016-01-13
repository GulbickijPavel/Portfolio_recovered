<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    header('Content-Type: application/json');
    require $path.'/php/dbConnect.php';
    if (isset($_GET['item'])) {
        if ($_GET['item'] == 'combo') {
            $sql = "SELECT * from languages";
            $result = mysqli_query($link, $sql) or die(mysql_error());
            $list = array();
            while($row = mysqli_fetch_assoc($result)){
                $list[] = $row;//array('id' => $row['languageId'], 'keyword' => $row['keyword'], 'native' => $row['langNative']);
            }
            echo json_encode($list);
        }
        if ($_GET['item'] == 'languageForm') {
          $sql = "SELECT COLUMN_NAME, COLUMN_TYPE FROM `information_schema`.`columns` WHERE `table_schema` = '$databaseScheme' and `table_name` in ('languages')";
          $result = mysqli_query($link,$sql) or die(mysql_error());
          $list = array();
          while($row = mysqli_fetch_array($result)){
              $list[] = array('Type' => $row['COLUMN_TYPE'], 'Field' => $row['COLUMN_NAME']);
          }
          echo json_encode($list);
        }
    }
    else {
        $sql = "SHOW COLUMNS FROM translations";
        $result = mysqli_query($link, $sql) or die(mysql_error());
        $list = array();
        while($row = mysqli_fetch_array($result)){
            $list[] = array('Field' => $row['Field']);
        }
        echo json_encode(array_slice($list, 1));
    }


    //echo json_encode(array_shift($list));
?>
