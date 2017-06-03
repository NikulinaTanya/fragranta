<?php
    $f = isset($_GET['f']) ? $_GET['f'] : '';
    $page = isset($page) ? $page : '';
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
            <h2>Каталог ароматов<span>:</span></h2>
        </td>
        <td colspan="6" class="right-text-align">
            <?=AddNextPrev($f,$page,12)?>
        </td>
    </tr>
    <tr class="inline-table">
        <td colspan="12">
            <?=MakeProduct($f,$page,12)?>
        </td>
    </tr>
    <tr class="catalog-list__header">
        <td colspan="12" class="center-text-align">
            <?=AddNextPrev($f,$page,12)?>
        </td>
    </tr>
</table>
<hr>

<?php
return false;
?>