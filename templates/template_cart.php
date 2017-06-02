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
            <h3>Общая стоимость <span><?=ProductPriceAmount(unserialize($_COOKIE['cart']))?></span> руб.</h3>
        </td>
        <td colspan="6" class="right-text-align">
            <a href="#">Оформить заказ <i class="fa fa-long-arrow-right"></i></a>
        </td>
    </tr>
    <tr class="inline-table">
        <td colspan="12">
            <?=MakeProductCart(unserialize($_COOKIE['cart']))?>
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