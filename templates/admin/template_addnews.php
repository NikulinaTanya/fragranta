<?php

$news = file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news_of_day.txt");
$news = (int)$news;
$news++;
if($news == ''){
    $news = 0;
}

?>

<table class="admin">
    <tr>
        <td colspan="2">
            <form class="login-form" method="post" action="/include/add_news.php" enctype="multipart/form-data">
                <h3><span>Fragranta.</span>
                    Добавить новость.</h3>
                <label class="login-form__input">
                    <input type="file" name="image" placeholder="Изображение" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="title" placeholder="Название" />
                </label>
                <label class="login-form__input">
                    <textarea name="description" rows="6" placeholder="Новость"></textarea>
                </label>
                <input type="hidden" name="last_news" value="<?=$news?>" />
                <label class="login-form__submit">
                    <input type="submit" value="Добавить" />
                </label>
                <a href="/" class="left-text-align full-width"><i class="fa fa-long-arrow-left"></i> Вернуться на сайт</a>
            </form>
        </td>
    </tr>
</table>

<?php
return false;
?>