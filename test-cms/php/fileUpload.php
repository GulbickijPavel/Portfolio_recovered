<?php
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
            echo "Nuotrauka ". basename($file["name"]). " buvo užkrauta.";
        } else {
            echo "Iškilo problemų užkraunant nuotrauką, nuotraka ne užkaura.";
        }
    }
}
?>