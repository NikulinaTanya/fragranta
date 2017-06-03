<!-- Список товаров -->
<table class="catalog-list news-list">
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
            <h2>Список заказов</h2>
        </td>
        <td colspan="6" class="right-text-align">
            <?php
            if(!isset($_GET['i'])){
                echo AddNextPrevOrder($_GET['f'],10);
            }
            ?>
        </td>
    </tr>
    <tr class="inline-table">
        <td colspan="12">
            <?= MakeOrder($_GET['f'],10); ?>
        </td>
    </tr>
</table>
<hr>

<?php
return false;
?>