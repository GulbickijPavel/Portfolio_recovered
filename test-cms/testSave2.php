<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    require $path.'/php/dbConnect.php';
    $fields = array();
    $items = array();
    $values = array();
    foreach ($_POST as $key => $value){
        $items[] = array('name' => $key, 'value' => "'$value'");
        $fields[] = array('name' => $key);
        $values[] = array('value' => "'$value'");
    }
    $countFileds = count($fields);
    $countValues = count($values);
    if($countFileds == $countValues){
        $flieldList = '';
        $valueList = '';
        for($i=2; $i<= $countFileds-1; $i++)
        {
            $flieldList = $flieldList.implode(',',$fields[$i]).' , ';
        }
        for($i=2; $i<= $countValues-1; $i++)
        {
            $valueList = $valueList.implode(',',$values[$i]).' , ';
        }
        $sql = "SELECT translationid FROM textTranslations order by translationid DESC LIMIT 1";
        $result = mysqli_query($link, $sql) or die(mysqli_error($link));
        $row = mysqli_fetch_assoc($result);
        $description = $row['translationid'] + 1;
      //  echo $description;
        //print_r($result);
     //   echo $comma;
      $table = substr(substr(implode('=',$items[0]), 0, -5), 7);
       $sql = "SELECT usingTable FROM sections WHERE name='$table'";
       $result = mysqli_query($link, $sql) or die(mysqli_error($sql));
       $getTable = mysqli_fetch_assoc($result);
       $myTable = $getTable['usingTable'];
       echo $myTable;

        $fields = substr($flieldList, 0, -2);
        $values = substr($valueList, 0, -2);
        $trQuery = "INSERT INTO textTranslations (en) VALUES ('')";
        $res = mysqli_query($link, $trQuery) or die(mysqli_error($link));
        $query = "INSERT INTO $myTable ($fields, description) VALUES ($values, $description)";
      //  echo $query;
       // echo $query;
        $q = mysqli_query($link, $query) or die(mysqli_error($link));
        if($q){
            echo "Lentelė $table sekmingai atnaujinta";
        }
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
        $target_dir = $path."/images/$table/";
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
        // Check if image file is a actual image or fake image
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
         //Check if file already exists
        if (file_exists($target_file)) {
          //  echo "Sorry, file ".basename($file["name"])." already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($file["size"] > 5000000) {
         //   echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
          //  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
         //   echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                echo "Nuotrauka ". basename($file["name"]). " sekmingai įkelta.";
            } else {
                echo "Įvyko kalida, nuotrauka neįkelta.";
            }
        }
    }
?>
