<?php

$array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt"));
echo '<br>Таблица продуктов';
echo '<pre>';
print_r($array);
echo '</pre>';

echo '<br>Таблица компаний';
$array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/company.txt"));
echo '<pre>';
print_r($array);
echo '</pre>';

echo '<br>Таблица новостей';
$array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news.txt"));
echo '<pre>';
print_r($array);
echo '</pre>';

echo '<br>Новость дня';
$array = file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news_of_day.txt");
echo '<pre>';
print_r($array);
echo '</pre>';

?>