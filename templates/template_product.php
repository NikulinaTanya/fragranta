<?php

$array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt"));
$company = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/company.txt"));
$amount = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/amount.txt"));

$id = $_GET['i'];

$title = ' <h2 class="product__title">'.$company[$array[$id]['company']].' '.$array[$id]['name'].'</h2>';
$price_now = $array[$id]['price_now'].' руб.';
if(isset($array[$id]['price_old']) && $array[$id]['price_old'] <> ''){
    $price_old = $array[$id]['price_old'].' руб.';
} else {
    $price_old = '';
}
$price = '<p class="product__price">'.$price_now.' <span>'.$price_old.'</span></p>';
if($array[$id]['family'] <> ''){
    $family = '<li><span>Семейство:</span> '.$array[$id]['family'].'</li>';
} else {
    $family = '';
}
if($array[$id]['high'] <> ''){
    $high = '<li><span>Верхние ноты:</span> '.$array[$id]['high'].'</li>';
} else {
    $high = '';
}
if($array[$id]['middle'] <> ''){
    $middle = '<li><span>Средние ноты:</span> '.$array[$id]['middle'].'</li>';
} else {
    $middle = '';
}
if($array[$id]['low'] <> ''){
    $low = '<li><span>Базовые ноты:</span> '.$array[$id]['low'].'</li>';
} else {
    $low = '';
}

$year = '<li><span>Год выпуска:</span> '.$array[$id]['year'].'</li>';
$amount = '<li><span>Объем:</span> '.$amount[$array[$id]['amount']].'мл</li>';
$image = '<img src="'.$array[$id]['image'].'" />';
switch($array[$id]['category']){
    case 'Женские': $category = '<a href="/female" class="product__category">'.$array[$id]['category'].'</a>'; break;
    case 'Мужские': $category = '<a href="/male" class="product__category">'.$array[$id]['category'].'</a>'; break;
    case 'Подарки': $category = '<a href="/present" class="product__category">'.$array[$id]['category'].'</a>'; break;
    case 'Эксклюзивные': $category = '<a href="/exclusive" class="product__category">'.$array[$id]['category'].'</a>'; break;
    case 'Популярно': $category = '<a href="/popular" class="product__category">'.$array[$id]['category'].'</a>'; break;
}

$cart = isset($_COOKIE['cart']) ? $_COOKIE['cart'] : '';

?>
<!-- Страница продукта -->
<table class="product">
    <tr class="table-grid">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="7">
            <?=$category?>
            <?=$title?>
            <?=$price?>
            <h3 class="product__description-title">Описание:</h3>
            <ul class="product__description">
                <?=$family?>
                <?=$high?>
                <?=$middle?>
                <?=$low?>
                <?=$year?>
                <?=$amount?>
            </ul>
            <?php if(FindInOneArrayCart($id, unserialize($cart)) <> 0): ?>
            <a class="product__shopcart gray_button" href="/cart">Добавлено в корзину!</a>
            <?php else: ?>
            <a class="product__shopcart" href="/include/add_to_shoping_cart.php?i=<?=$id?>">Добавить в корзину!</a>
            <?php endif; ?>
            <?=EditProduct($id)?>
        </td>
        <td class="product__image" colspan="5">
            <?=$image?>
        </td>
    </tr>
</table>

<?php
return false;
?>