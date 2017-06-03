<?php
include($_SERVER['DOCUMENT_ROOT']."/generator/functions.php");

if(isset($_SESSION['admin_online']) && $_SESSION['admin_online'] == 1){
    $news = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news.txt"));
    $picture = LoadPicture($_FILES['image']);

    if($news == ''){
        $news = array('');
    }

    $news_new = array(
        "title" => $_POST['title'],
        "description" => $_POST['description'],
        "image" => $picture,
        "date" => date("m.d.Y")
    );


    array_unshift($news, $news_new);
    file_put_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news.txt", serialize($news));

    file_put_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news_of_day.txt", $_POST['last_news']);

}

header('location: '.$_SERVER['HTTP_REFERER']);
?>