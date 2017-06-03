<?php
$user = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/users.txt"));
$day = file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news_of_day.txt");
$news = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news.txt"));
?>
<!-- Баннер -->
<table class="full-banner" style="background-image: url(<?=$news[$day]['image']?>)">
    <tr>
        <td class="full-banner_text banner">
            <div class="full-banner__text-elem">
                <?php if($_SESSION['user_online'] == 1): ?>
                    <h1>Здравствуй, <span><?=$user[$_SESSION['user_login']]['name']?>!</span></h1>
                <?php else: ?>
                    <h1><span>Fragranta.</span> Магазин ароматов.</h1>
                <?php endif; ?>
                <p>Быть сегодня дерзкой или нежной выбирать тебе! Создавай настроение каждый день с нашими ароматами!</p>
                <a href="/news?i=<?=$day?>">Новость дня!</a>
            </div>
        </td>
    </tr>
</table>
<?php
return false;
?>