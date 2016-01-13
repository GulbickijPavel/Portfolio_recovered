<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
      require_once 'fileUpload.php';
      if(isset($_POST['name']))
      {
          $target_dir = $path."/images/";
          $name = $_POST['name'];
          $url = $_POST['url'];
          $keyword = $_POST['keyword'];
          $langNative = $_POST['langNative'];
          $image = $_FILES['image']['name'];
          require $path.'/php/dbConnect.php';
          $chekQuery = "SELECT name FROM languages WHERE keyword = '$keyword'";
          $chekQueryResult = mysqli_query($link, $chekQuery);
          $count = mysqli_num_rows($chekQueryResult);
          if($count != 1){
              imageupload($_FILES['image'], $target_dir);
              $insertQuery = "INSERT INTO languages(name, url, keyword, langNative, image) VALUES ('$name', '$url', '$keyword', '$langNative', '/images/$image' )";
              $insertResult = mysqli_query($link, $insertQuery) or die(mysqli_error($link));
              if($insertResult){
                  $query = "ALTER TABLE translations ADD COLUMN $keyword text";
                  $result = mysqli_query($link, $query) or die(mysqli_error($link));
                  $query2 = "ALTER TABLE textTranslations ADD COLUMN $keyword text";
                  $result2 = mysqli_query($link, $query2) or die(mysqli_error($link));
                  if ($result and $result2) {
                      echo "Kalba sekmingai įterpta";
                  }else {
                      echo "Klaida, įrašas ".$keyword." jau egzistuoja";
                  }
              }
          }
      }
      else {
        echo "nothing set";
      }
?>
