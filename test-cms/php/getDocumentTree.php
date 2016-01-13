<?php
$path = $_SERVER['DOCUMENT_ROOT'];
header('Content-Type: application/json');
function ReadFolderDirectory($dir,$listDir= array())
{
    $listDir = array();
    $finalListDir = array();
    if($handler = opendir($dir))
    {
        while (($sub = readdir($handler)) !== FALSE)
        {
            if ($sub != "." && $sub != "..")
            {
                if(is_file($dir."/".$sub))
                {
                    $href = $dir."/".$sub;
                    $listDir[] = array('doc' => $sub, 'href' => $href);
                    $finalListDir['docs'] = $listDir;
                }
                    elseif(is_dir($dir."/".$sub))
                {
                    $folderObj[] = array('folderName' => $sub) + ReadFolderDirectory($dir."/".$sub);
                   // $floder['folder'] = $folderObj;
                  //  $arrayIneed['item'] = array($floder);
                    $finalListDir['dir'] = $folderObj;
                //    $listDir[$sub] = array('type' => 'dir', $subFolderName, ReadFolderDirectory($dir."/".$sub));
                    //$finalListDir['dir'] = $getSubArray ;
                }
            }
        }
        closedir($handler);
    }
    return $finalListDir;

}
if(isset($_GET['tree']))
{
    $tree = $_GET['tree'];
    if($tree == 'main'){
        $rootpath = $path.'/smarty/templates';
        $array = ReadFolderDirectory($rootpath);
        echo json_encode($array);
    }
    if($tree == 'settings'){
        $rootpath = $path.'/test-cms/settings';
        $array = ReadFolderDirectory($rootpath);
        echo json_encode($array);
    }
}
?>
