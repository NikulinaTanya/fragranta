<?php
include($_SERVER['DOCUMENT_ROOT']."/generator/functions.php");
$user = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/users.txt"));
if($user == ''){
    $user = array('');
}
if(isset($_POST['password']) && $_POST['password'] == $_POST['password_test']){
    if(LoginTest($_POST['login'], $user) == 0){
        $user_new = array(
            "login" => $_POST['login'],
            "password" => $_POST['password'],
            "name" => $_POST['name'],
            "adress" => $_POST['adress']
        );

        array_push($user, $user_new);
        file_put_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/users.txt", serialize($user));

        header('location: /user/');
    } else {
        header('location: '.$_SERVER['HTTP_REFERER']);
    }
} else {
    header('location: '.$_SERVER['HTTP_REFERER']);
}

?>