<?php
$colspan = ($_SESSION['user_online'] == 1) ? 2 : 3;
?>
<!-- Каталог блок -->
<table class="navigation-elem">
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
    <tr class="catalog-block">
        <td colspan="<?=$colspan?>" class="catalog-block__elem <?=AddActive($page, 'Мужские')?>">
            <a href="/male">
                <i class="sgicon sgicon-ManFigure"></i>
                <span>Мужской парфюм</span>
            </a>
        </td>
        <td colspan="<?=$colspan?>" class="catalog-block__elem <?=AddActive($page, 'Женские')?>">
            <a href="/female">
                <i class="sgicon sgicon-FemaleFigure"></i>
                <span>Женский парфюм</span>
            </a>
        </td>
        <?php if($colspan == 2): ?>
        <td colspan="<?=$colspan?>" class="catalog-block__elem <?=AddActive($page, 'Подарки')?>">
            <a href="/present">
                <i class="sgicon sgicon-Crown"></i>
                <span>Спец. предложение</span>
            </a>
        </td>
        <?php endif; ?>
        <td colspan="<?=$colspan?>" class="catalog-block__elem <?=AddActive($page, 'Эксклюзивные')?>">
            <a href="/exclusive">
                <i class="sgicon sgicon-Compass"></i>
                <span>Эксклюзивный парфюм</span>
            </a>
        </td>
        <td colspan="<?=$colspan?>" class="catalog-block__elem <?=AddActive($page, 'Популярно')?>">
            <a href="/popular">
                <i class="sgicon sgicon-Like"></i>
                <span>Популярный парфюм</span>
            </a>
        </td>
        <?php if($colspan == 2): ?>
        <td colspan="<?=$colspan?>" class="catalog-block__elem <?=AddActive($page, 'all')?>">
            <a href="/all">
                <i class="sgicon sgicon-WorldGlobe"></i>
                <span>Каталог ароматов</span>
            </a>
        </td>
        <?php endif; ?>
    </tr>
</table>

<?php
return false;
?>