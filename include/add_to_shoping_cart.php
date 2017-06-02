<?php
if(isset($_COOKIE['cart']) && $_COOKIE['cart'] <> ''){
    $array = unserialize($_COOKIE['cart']);
    array_push($array, $_GET['i']);
    setcookie('cart', serialize($array), time()+604800, '/');
} else {
    $array = array($_GET['i']);
    setcookie('cart', serialize($array), time()+604800, '/');
}

header('location: /product?i='.$_GET['i']);

?>