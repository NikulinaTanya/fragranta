<?php
$i = $_GET['i'];
$array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news.txt"));
$yorn = file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news_of_day.txt");

$checked = '';
if($_GET['i'] == $yorn){
    $checked = 'checked="checked"';
}
?>
    <table class="admin">
        <tr>
            <td colspan="2">
                <form class="login-form" method="post" action="/include/change_news.php" enctype="multipart/form-data">
                    <h3 class="changeproduct"><span>Fragranta.</span>
                        Администрирование.</h3>
                    <input type="hidden" name="id" value="<?=$i?>" />
                    <label class="login-form__input">
                        <img src="<?=$array[$i]['image']?>" />
                        <input type="hidden" name="last_pic" value="<?=$array[$i]['image']?>" />
                        <input type="file" name="image" placeholder="Изображение" />
                    </label>
                    <label class="login-form__input">
                        <input type="text" name="title" placeholder="Название" value="<?=$array[$i]['title']?>" />
                    </label>
                    <label class="login-form__input">
                        <textarea name="description" rows="6" placeholder="Новость"><?=$array[$i]['description']?></textarea>
                    </label>
                    <label class="login-form__input">
                        <input type="checkbox" <?=$checked?> name="newsday" value="y" />
                        <i class="sgicon sgicon-Tag"></i><span>Сделать новостью дня</span>
                    </label>
                    <label class="login-form__submit">
                        <input type="submit" value="Изменить" />
                    </label>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <form class="login-form" method="post" action="/include/delete_news.php" enctype="multipart/form-data">
                    <h3 class="deleteproduct">или</h3>
                    <input type="hidden" name="id" value="<?=$i?>" />
                    <label class="login-form__submit">
                        <input type="submit" value="Удалить" />
                    </label>
                    <a href="/" class="left-text-align full-width"><i class="fa fa-long-arrow-left"></i> Вернуться на сайт</a>
                </form>
            </td>
        </tr>
    </table>


<?php
return false;
?>