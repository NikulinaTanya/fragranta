<div>
    <?php
    if($_SESSION['admin_online'] == 1){
        //echo '<a href="/include/remove_from_news.php?i='.$i.'" class="remove_from_cart news"><i class="sgicon sgicon-Delete"></i></a>';
        echo '<a href="/admin/edit_news.php?i='.$i.'" class="remove_from_cart news"><i class="sgicon sgicon-Edit"></i></a>'; //You can add class "edit"
    }
    ?>
    <a class="catalog-list__img" href="/news?i=<?=$i?>"><img src="<?=$array[$i]['image']?>" /></a>
    <a class="catalog-list__title news__title" href="/news?i=<?=$i?>">
        <?=$array[$i]['title']?>
        <span class="catalog-list__price news__description"><?=$array[$i]['date']?> </span>
    </a>
    <p class="catalog-list__price news__description"><?=$array[$i]['description']?> </p>
</div>

<?php
return false;
?>