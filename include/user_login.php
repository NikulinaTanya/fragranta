<?php
include($_SERVER['DOCUMENT_ROOT']."/generator/functions.php");
$user = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/users.txt"));

if (isset($_POST['login']) && $_POST['login'] <> '') {
    if(LoginTest($_POST['login'], $user) == 0){
        header('Location: /admin/error?m=pass');
    } else {
        $id = LoginTest($_POST['login'], $user);

        $login = $user[$id]['login'];
        $password = $user[$id]['password'];

        if ($_POST['login'] == $login && $_POST['password'] == $password) {
            $_SESSION['user_online'] = 1;
            $_SESSION['user_login'] = $id;
            $_SESSION['user_message'] = 1;
            header('Location: '.$_SERVER['HTTP_REFERER']);
        } else {
            header('Location: /admin/error?m=pass');
        }
    }
} else {
    header('Location: /admin/error?m=login');
}

if (isset($_POST['action']) AND $_POST['action']=='logout') {
    session_destroy();
    header('Location: /');
}

?>