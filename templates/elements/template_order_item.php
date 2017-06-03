<div class="order">
    <?php
    if($_SESSION['admin_online'] == 1){
        //echo '<a href="/include/remove_from_news.php?i='.$i.'" class="remove_from_cart news"><i class="sgicon sgicon-Delete"></i></a>';
        echo '<a href="/include/delete_order.php?i='.$i.'" class="remove_from_cart news"><i class="sgicon sgicon-Delete"></i></a>'; //You can add class "edit"
    }
    ?>
    <a class="catalog-list__title news__title">
        <?=$array[$i]['name']?>
        <span class="catalog-list__price news__description"><?=$array[$i]['date']?> </span>
    </a>
    <p class="catalog-list__price news__description"><?=$array[$i]['comment']?> </p>
</div>

<?php
return false;
?>