<?php

$array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/orders.txt"));

if($array == ''){
    $array = array('');
}

$cart = unserialize($_COOKIE['cart']);

$new_order = array(
    "login" => $_POST['login'],
    "name" => $_POST['name'],
    "adress" => $_POST['adress'],
    "comment" => $_POST['comment'],
    "cart" => $cart,
    "date" => date("m.d.Y")
);

array_unshift($array, $new_order);
file_put_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/orders.txt", serialize($array));

setcookie('cart', '', time()-100, '/');

header('location: '.$_SERVER['HTTP_REFERER']);

?>