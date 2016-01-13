<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    require $path.'/php/dbConnect.php';
    if (isset($_GET['item'])) {
        if ($_GET['item'] == "combo") {

            $sql = "SELECT * FROM sections";
            $result = mysqli_query($link, $sql) or die(mysqli_error($link));
            while($row = (mysqli_fetch_assoc($result)))
            {
                $list[] = $row;
            }
            echo json_encode($list);
        }
        else {
          function getRidOfColumns($table, $link, $databaseScheme){
            //  $sql = "SHOW COLUMNS FROM $table, translations";
              $sql = "SELECT COLUMN_NAME, COLUMN_TYPE FROM `information_schema`.`columns` WHERE `table_schema` = '$databaseScheme' and `table_name` in ('$table')";
              $result = mysqli_query($link,$sql) or die(mysql_error());
              $list = array();
              while($row = mysqli_fetch_array($result)){
                  $list[] = array('Type' => $row['COLUMN_TYPE'], 'Field' => $row['COLUMN_NAME']);
              }
              echo json_encode($list);
          }
          getRidOfColumns('sections', $link, $databaseScheme);
        }
    }

 ?>
