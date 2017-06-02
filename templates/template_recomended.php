<!-- Список товаров -->
<table class="catalog-list recomended-list">
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
            <h2>Похожие товары:</h2>
        </td>
    </tr>
    <?php
    $array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt"));
    ?>
    <tr class="inline-table">
        <td colspan="12">
            <?=MakeProduct(rand(0,count($array)-3),'',3)?>
        </td>
    </tr>
</table>

<?php
return false;
?>