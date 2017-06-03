<?php
include($_SERVER['DOCUMENT_ROOT']."/generator/functions.php");
$user = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/users.txt"));
if($user == ''){
    $user = array('');
}

// post пришел
if (isset($_POST['login'])) {
    $error_messages = '';
    if (empty($_POST['login'])) {
        $error_messages['login'] = 'Логин введен неверно';
    }
    if (empty($_POST['password'])) {
        $error_messages['password'] = 'Пароль введен неверно';
    }
    if ($_POST['password'] != $_POST['password_test']) {
        $error_messages['password_test'] = 'Поля пароль и повторить пароль не совпадают';
    }
    if (empty($_POST['name'])) {
        $error_messages['name'] = 'Имя введено неверно';
    }

    if (empty($error_messages)) {
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
            $error_messages['user_exits'] = 'Пользователь с таким логином уже существует';
        }
    }

    if (!empty($error_messages)) {
        $_SESSION['registration_errors'] = $error_messages;
    }

    $_SESSION['post_fields'] = $_POST;

    header('location: '.$_SERVER['HTTP_REFERER']);
}

?>