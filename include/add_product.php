<?php
include($_SERVER['DOCUMENT_ROOT']."/generator/functions.php");

$company = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/company.txt"));
$c_matches = FindInOneArray($_POST['company'], $company);
if($c_matches == 0){
    array_push($company, $_POST['company']);
    file_put_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/company.txt", serialize($company));
    $c_matches = FindInOneArray($_POST['company'], $company);
}

$amount = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/amount.txt"));
$a_matches = FindInOneArray($_POST['amount'], $amount);
if($a_matches == 0){
    array_push($amount, $_POST['amount']);
    file_put_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/amount.txt", serialize($amount));
    $a_matches = FindInOneArray($_POST['amount'], $amount);
}

$picture = LoadPicture($_FILES['image']);

$product = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt"));

if($product == ''){
    $product = array('');
}

$product_new = array(
    "company" => $c_matches,
    "name" => $_POST['name'],
    "vendor" => $_POST['vendor'],
    "price_now" => $_POST['price_now'],
    "price_old" => $_POST['price_old'],
    "family" => $_POST['family'],
    "high" => $_POST['high'],
    "middle" => $_POST['middle'],
    "low" => $_POST['low'],
    "year" => $_POST['year'],
    "category" => $_POST['category'],
    "amount" => $a_matches,
    "image" => $picture
);
array_unshift($product, $product_new);
file_put_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt", serialize($product));

header('location: '.$_SERVER['HTTP_REFERER']);
?>