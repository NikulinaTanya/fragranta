<?php

$login = 'admin';
$password = '1111';

session_start();

if (isset($_POST['login']) && $_POST['login'] <> '') {
    if ($_POST['login'] == $login && $_POST['password'] == $password) {
        $_SESSION['admin_online'] = 1;
        header('Location: '.$_SERVER['HTTP_REFERER']);
    } else {
        header('Location: /admin/error?m=pass');
    }
} else {
    header('Location: /admin/error?m=login');
}

if (isset($_POST['action']) AND $_POST['action']=='logout') {
    session_start();
    session_destroy();
    header('Location: /');
}

?>