<?php
include($_SERVER['DOCUMENT_ROOT']."/generator/functions.php");

$id = $_POST['id'];

$company = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/company.txt"));
$c_matches = FindInOneArray($_POST['company'], $company);
if($c_matches == 0){
    $company[FindInOneArray(max($company), $company)+1] = $_POST['company'];//Пришлось сделать костыль. Потерял, блин, час
    file_put_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/company.txt", serialize($company));
    $c_matches = FindInOneArray($_POST['company'], $company);
}

$amount = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/amount.txt"));
$a_matches = FindInOneArray($_POST['amount'], $amount);
if($a_matches == 0){
    $amount[FindInOneArray(max($amount), $amount)+1] = $_POST['amount'];//Пришлось сделать костыль. Потерял, блин, час
    file_put_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/amount.txt", serialize($amount));
    $a_matches = FindInOneArray($_POST['amount'], $amount);
}
if($_FILES['image']['name'] <> '') {
    $picture = LoadPicture($_FILES['image']);
} else {
    $picture = $_POST['last_pic'];
}

$product = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt"));
$product[$id] = array(
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
file_put_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt", serialize($product));

header('location: '.$_SERVER['HTTP_REFERER']);
?>