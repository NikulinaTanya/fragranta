<!-- Отзывы -->
<table class="review-elem">
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
        <td class="review" colspan="12">
            <h3 class="review__title">Отзывы о <span><?=$company[$array[$id]['company']]?> <?=$array[$id]['name']?></span></h3>
        </td>
    </tr>
    <?=AddComment($_GET['i'])?>
    <tr>
        <td colspan="12" class="add_new_review center-text-align">
            <a class="product__shopcart" href="/comment?i=<?=$_GET['i']?>">Оставить новый отзыв</a>
        </td>
    </tr>
</table>

<?php
return false;
?>