<?php

if (isset($array[$i]['price_old']) && $array[$i]['price_old'] <> '') {
    $price_old = '<span>'.$array[$i]['price_old'].' руб.</span>';
} else {
    $price_old = '';
}

?>

<div>
    <a href="/include/remove_from_cart.php?i=<?=$v?>" class="remove_from_cart"><i class="sgicon sgicon-Delete"></i></a>
    <a class="catalog-list__img" href="/product?i=<?=$i?>"><img src="<?=$array[$i]['image']?>"/></a>
    <a class="catalog-list__title" href="/product?i=<?=$i?>"><?=$company[$array[$i]['company']]?><?=$array[$i]['name']?></a>
    <a href="/product?i=<?=$i?>" class="catalog-list__category"><?=$array[$i]['category']?></a>
    <p class="catalog-list__price"><?=$array[$i]['price_now']?> руб. <?=$price_old?></p>
</div>

<?php
return false;
?>