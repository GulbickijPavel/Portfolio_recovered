<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    header('Content-Type: application/json');
    require $path.'/php/dbConnect.php';
    if (isset($_GET['translationid'])) {
      $id = $_GET['translationid'];
      $sql="SELECT * FROM translations WHERE translationid ='$id'";
      $result = mysqli_query($link, $sql) or die(mysql_error());
      $rows = array();
      while($row = (mysqli_fetch_assoc($result))) {
          $rows['item'] = $row;
      }
      echo json_encode($rows);
    }
    if (isset($_GET['getfields'])) {
        if ($_GET['getfields'] == 'true') {
            getRidOfColumns($link);
        }
    }
    function getRidOfColumns($link){
        $sql = "SHOW COLUMNS FROM translations";
        $result = mysqli_query($link,$sql) or die(mysql_error());
        $list = array();
        while($row = mysqli_fetch_array($result)){
            $list[] = array('Type' => $row['Type'], 'Field' => $row['Field']);
        }
        echo json_encode($list);
    }
?>
