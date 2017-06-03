<!-- Список товаров -->
<?php
    $i = isset($_GET['i']) ? $_GET['i'] : 0;
    $f = isset($_GET['f']) ? $_GET['f'] : 0;
    $adminOnline = isset($_SESSION['admin_online']) ? $_SESSION['admin_online'] : 0;
?>
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
            if(!isset($_GET['i'])){
                echo AddNextPrevNews($f, 5);
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
                MakeNews($f,5);
            }
            ?>
        </td>
    </tr>
    <tr class="catalog-list__header">
        <td colspan="12" class="center-text-align">
            <?=AddNews($adminOnline)?>
        </td>
    </tr>
</table>
<hr>

<?php
return false;
?>