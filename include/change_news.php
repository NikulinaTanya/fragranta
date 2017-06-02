<?php
include($_SERVER['DOCUMENT_ROOT']."/generator/functions.php");
session_start();
if($_SESSION['admin_online'] == 1){
    $news = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news.txt"));
    $picture = LoadPicture($_FILES['image']) ? LoadPicture($_FILES['image']) : $_POST['last_pic'];

    $news[$_POST['id']] = array(
        "title" => $_POST['title'],
        "description" => $_POST['description'],
        "image" => $picture,
        "date" => date("m.d.Y")
    );


    file_put_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news.txt", serialize($news));

    if($_POST['newsday'] == 'y'){
        file_put_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news_of_day.txt", FindInArray($_POST['description'], $news, 'news'));
    }
}

header('location: '.$_SERVER['HTTP_REFERER']);
?>