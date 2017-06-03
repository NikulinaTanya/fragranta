<?php

$id = $_GET['i'];

$array = unserialize($_COOKIE['cart']);
$new = array();
foreach ($array as $v => $i) {
    if($v <> $id){
        array_push($new, $i);
    }
}

setcookie('cart', serialize($new), time()+604800, '/');

header('location: '.$_SERVER['HTTP_REFERER']);

?>