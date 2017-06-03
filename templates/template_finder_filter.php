<!-- Фильтр поисковый -->\
<?php
    $price = isset($_GET['price']) ? $_GET['price'] : 500;
?>
<form method="get" class="form">
    <table class="filter-elem">
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
        <tr class="filter-block">
            <td colspan="2" class="filter-block__elem filter-block__amount">
                <select name="amount" id="amount">
                    <?=MakeAmount()?>
                </select>
            </td>
            <td colspan="3" class="filter-block__elem filter-block__manufacturer">
                <select name="manufacturer" id="manufacturer">
                    <?=MakeCompany()?>
                </select>
            </td>
            <td colspan="5" class="filter-block__elem">
                <p>Цена до:</p>
                <div id="price-filter" data-start="<?=StartPrice($price)?>" data-min="500" data-max="10000"></div>
                <input type="text" id="price" name="price" />
            </td>
            <td colspan="2" class="filter-block__find">
                <label>
                    <span>Найти</span>
                    <input type="submit" />
                </label>
            </td>
        </tr>
    </table>
</form>
<hr>

<?php
return false;
?>