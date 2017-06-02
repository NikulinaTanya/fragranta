<?php
include($_SERVER['DOCUMENT_ROOT']."/generator/functions.php");
$user = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/users.txt"));

$user[$_POST['id']] = array(
    "login" => $user[$_POST['id']]['login'],
    "password" => $_POST['password'],
    "name" => $_POST['name'],
    "adress" => $_POST['adress']
);

file_put_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/users.txt", serialize($user));

header('location: /user/');

?>