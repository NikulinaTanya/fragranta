<?php
session_start();

if($_SESSION['admin_online'] == 1){
    $id = $_GET['i'];

    $array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news.txt"));
    $new = array();
    foreach ($array as $v => $i) {
        if($v <> $id){
            array_push($new, $i);
        }
    }

    file_put_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news.txt", serialize($new));
}

header('location: '.$_SERVER['HTTP_REFERER']);

?>