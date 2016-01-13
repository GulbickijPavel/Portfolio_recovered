<?php
    if (isset($_POST['file'])) {
      $file = $_POST['file'];
      unlink($file);
    }
 ?>
