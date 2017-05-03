<?php
$filenameArray = [];
$dir = './../admin/uploads';
$handle = opendir($dir);
while($file = readdir($handle)){
    if($file !== '.' && $file !== '..'){
        array_push($filenameArray, "../admin/uploads/" . $file);
    }
}

echo json_encode($filenameArray);