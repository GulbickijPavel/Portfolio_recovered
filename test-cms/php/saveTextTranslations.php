<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    require ($path.'/php/dbConnect.php');
    if (isset($_GET['meme'])) {
        $translationToSave = $_GET['meme'];
        $items = array();
        $sql = "SELECT * FROM textTranslations where translationid='$translationToSave' ";
        $result = mysqli_query($link, $sql) or die(mysqli_error($link));
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $values = '';
            foreach ($_POST as $key => $value){
                $items[] = array('name' => $key, 'value' => "'$value'");
            }
            $count = count($items);
            $comma = '';
            for($i=0; $i<= $count-1; $i++)
            {
                $comma = $comma.implode('=',$items[$i]).' , ';
            }
            $set = substr($comma, 0, -2);
            $query = "UPDATE textTranslations set $set WHERE translationid= '$translationToSave'";
            $q = mysqli_query($link, $query) or die(mysqli_error($link));
            if($q){
                echo "Lentelė textTranslations sekmingai atnaujinta.";
            }
        }
        else {
            $comma1 = '';
            foreach ($_POST as $key => $value){
                $items[] = array('value' => "'$value'");
                $keys[] = array('key' => $key );
            }
            $count = count($items);
            for($i=0; $i<= $count-1; $i++)
            {
                $comma1 = $comma1.implode('=', $items[$i]).' , ';
                $comma2 = $comma2.implode('=', $keys[$i]).',';
            }
            $fields = substr($comma2, 0, -1);
            $values = substr($comma1, 0, -2);
            $query = "INSERT into textTranslations ($fields) VALUES ($values)";
            $q = mysqli_query($link, $query) or die(mysqli_error($link));
            if($q){
                echo "Naujas įrašas sekmingai įterptas.";
            }
        }
    }
?>
