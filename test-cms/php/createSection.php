<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    require $path.'/php/dbConnect.php';
    require $path.'/smarty/config.php';

    if(isset($_POST['sectionType'])){
        if($_POST['sectionType'] == "simple")
        {
            $pagename = strtolower($_POST['sectionName']);
            $using = strtolower($_POST['usingTable']);
            $sectionname = ucwords($pagename);
            $table = str_replace(' ', '', $pagename);
            $sectionToCheck = (string)$pagename;
            $query = "SELECT * FROM sections where name = '$sectionToCheck'";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));
            $count = mysqli_num_rows($result);
            if($count == 0){
                $sql = "CREATE TABLE IF NOT EXISTS ".$using." ("
                    .$table."id int(8) NOT NULL auto_increment,"
                    .$table."name varchar(50) NOT NULL default '',
                    description int(11) NULL,
                    PRIMARY KEY(".$table."id)
                ) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";
                $result = mysqli_query($link, $sql) or die(mysqli_error($link));
                $query = "INSERT INTO translations (en) VALUES ('$sectionname')";
                $result = mysqli_query($link, $query) or die(mysqli_error($link));
                if ($result) {
                    $sql = "SELECT translationid FROM translations order by translationid DESC LIMIT 1";
                    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
                    $row = mysqli_fetch_assoc($result);
                    $translationid = $row['translationid'];
                }
                else {
                    echo "Nepavyko sukurti skilties";
                }

                $newFileName = '../../smarty/templates/sections/'.strtolower($table).'.tpl';

                $newFileContent = '<section class="jumbotron newItem" id="'.$table.'"> <h2>{translation langId="'.$translationid.'"}<h2> <hr> {foreach from=$'.$table.' item=item key=key} {$item.$lang} {/foreach}  </section>';

                if(file_put_contents($newFileName,$newFileContent)!=false){
                    $sql = "INSERT INTO sections(name, shown, sectionname, lang, usingTable) VALUES('$table', 1, '$sectionname', 'en', '$using')";
                    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
                    if($result){
                        echo "Šablonas  (".basename($newFileName).") sukurtas";
                    }

                }else{
                    echo "Neišejo sukurti šabloną (".basename($newFileName).")";
                }
            }
            else{
                echo "Skiltis su tokiu paavadinimu jau yra";
            }
        }

    }else{
        $smarty = new Smarty();
        $smarty->display('../smarty/templates/newSection.tpl');
    }
?>
