<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    header('Content-Type: application/json');
    require $path.'/php/dbConnect.php';
    function getUsingTable($table, $link){
        $tableiNeed = str_replace(' ', '', $table);
        $query = "SELECT usingTable FROM sections WHERE name = '$tableiNeed'";
        $res = mysqli_query($link, $query) or die(mysqli_error($link));
        $usingTable = (mysqli_fetch_assoc($res));
        $comma = implode(",", (array)$usingTable);
        return $comma;
    }
    if (isset($_POST['page']))
    {
        $page = $_POST['page'];
    }
    if (isset($_GET['page'])){
        $lang = "en";
        $file = $_GET['page'];
        $page = getUsingTable($file, $link);
        $sql = "SELECT * FROM $page";
        $result = mysqli_query($link, $sql) or die(mysql_error());
        while($row = (mysqli_fetch_assoc($result)))
        {
            $list[] = $row;
            $allList['items'] = $list;
        }
       // print_r($list);
        echo json_encode($allList);
    }
    if(isset($_GET['item']))
    {
        $item = $_GET['item'];
        if($item == 'combo'){
            $file = $_GET['file'];
            $page = getUsingTable(substr($file, 0, -4), $link);
            function getItemsList($page, $link, $translationsTable){
                $list = array();
                $sql = "SELECT DISTINCT * FROM $page, $translationsTable where description = translationid ";
                $result = mysqli_query($link, $sql) or die(mysql_error($link));
                $i = 0;
                while($row = mysqli_fetch_array($result)){
                    $list[] = $row;
                }
                return $list;
            }
          echo json_encode(getItemsList($page, $link, $translationsTable));
        }
        else{
            function getRidOfColumns($table, $link, $translationsTable, $databaseScheme){
              //  $sql = "SHOW COLUMNS FROM $table, translations";
                $sql = "SELECT COLUMN_NAME, COLUMN_TYPE FROM `information_schema`.`columns` WHERE `table_schema` = '$databaseScheme' and `table_name` in ('$table', '$translationsTable')";
                $result = mysqli_query($link,$sql) or die(mysql_error());
                $list = array();
                while($row = mysqli_fetch_array($result)){
                    $list[] = array('Type' => $row['COLUMN_TYPE'], 'Field' => $row['COLUMN_NAME']);
                }
                echo json_encode($list);
            }
            $page = getUsingTable(substr($item, 0, -4), $link);
            getRidOfColumns($page, $link, $translationsTable, $databaseScheme);
         }
    }
?>
