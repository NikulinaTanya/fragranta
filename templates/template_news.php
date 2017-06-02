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
            <h2>Новости / Акции</h2>
        </td>
        <td colspan="6" class="right-text-align">
            <?php
            if(empty($_GET['i'])){
                AddNextPrevNews($_GET['f'],5);
            }
            ?>
        </td>
    </tr>
    <tr class="inline-table">
        <td colspan="12">
            <?php
            if(isset($_GET['i'])){
                MakeNews($_GET['i'],1);
            } else {
                MakeNews($_GET['f'],5);
            }
            ?>
        </td>
    </tr>
    <tr class="catalog-list__header">
        <td colspan="12" class="center-text-align">
            <?=AddNews($_SESSION['admin_online'])?>
        </td>
    </tr>
</table>
<hr>

<?php
return false;
?>