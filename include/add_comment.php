<?php

$array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/comments.txt"));

if($array == ''){
    $array = array('');
}

$new_comment = array(
    "login" => $_POST['login'],
    "name" => $_POST['name'],
    "comment" => $_POST['comment'],
    "id" => $_POST['id']
);

array_push($array, $new_comment);
file_put_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/comments.txt", serialize($array));

header('location: '.$_SERVER['HTTP_REFERER']);

?>