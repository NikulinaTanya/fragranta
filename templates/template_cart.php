<?php
    $cart = isset($_COOKIE['cart']) ? $_COOKIE['cart'] : '';
?>

<!-- Список товаров -->
<table class="catalog-list">
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
    <tr class="catalog-list__header">
        <td colspan="6" class="left-text-align">
            <h3>Общая стоимость <span><?=ProductPriceAmount(unserialize($cart))?></span> руб.</h3>
        </td>
        <td colspan="6" class="right-text-align">
            <?= isset($_COOKIE['cart']) && count(unserialize($_COOKIE['cart'])) <> 0? '<a href="/checkout">Оформить заказ <i class="fa fa-long-arrow-right"></i></a>' : '';?>
        </td>
    </tr>
    <tr class="inline-table">
        <td colspan="12">
            <?=MakeProductCart(unserialize($cart))?>
        </td>
    </tr>
    <tr class="catalog-list__header">
        <td colspan="12" class="center-text-align">

        </td>
    </tr>
</table>
<hr>

<?php
return false;
?>