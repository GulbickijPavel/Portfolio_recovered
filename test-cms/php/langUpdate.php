<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    require $path.'/php/dbConnect.php';
    $myTable = 'languages';
    $items = array();
    $values = '';
    foreach ($_POST as $key => $value){
        $items[] = array('name' => $key, 'value' => "'$value'");
    }
    $count = count($items);
    $comma = '';
    for($i=1; $i<= $count-1; $i++)
    {
        $comma = $comma.implode('=',$items[$i]).' , ';
    }
    $set = substr($comma, 0, -2);
    $id = implode('=',$items[0]);
    $query = "UPDATE $myTable set $set WHERE $id ";
    $q = mysqli_query($link, $query) or die(mysqli_error($link));
    if($q){
        echo "Lentelė $myTable sekmingai atnaujinta";
    }
    function reArrayFiles(&$file_post) {

        $file_ary = array();
        $file_count = count($file_post['name']);
        $file_keys = array_keys($file_post);

        for ($i=0; $i<$file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
        }

        return $file_ary;
    }
    if ($_FILES['fileToUpload']) {
        $file_ary = reArrayFiles($_FILES['fileToUpload']);
        $target_dir = $path.'/images'.'/';
        $fileArrayCount = count($file_ary);
        for($i=0; $i<=$fileArrayCount-1; $i++)
        {
            imageupload($file_ary[$i], $target_dir);
        }
    }
    function imageupload($file, $target_dir){
        $target_file = $target_dir . basename($file["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if(isset($_POST["submit"])) {
            $check = getimagesize($file["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($file["size"] > 6000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                echo " Nuotrauka ". basename($file["name"]). " sekmingai įkelta.";
            } else {
                echo " Įvyko klaida, nuotrauka neįkelta.";
            }
        }
    }
 ?>
