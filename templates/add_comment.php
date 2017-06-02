<?php

$array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt"));
$user = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/users.txt"));
$i = $_GET['i'];
$ui = $_SESSION['user_login'];
?>
<table class="admin">
    <tr>
        <td colspan="2">
            <form class="login-form" method="post" action="/include/add_comment.php">
                <h3><span>Fragranta.</span>
                    Отзыв о <?=$array[$i]['name']?>.</h3>
                <input type="hidden" name="id" value="<?=$i?>" />
                <label class="login-form__input">
                    <input type="text" name="name" placeholder="Представьтесь" value="<?=$user[$ui]['name']?>" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="login" placeholder="Логин" value="<?=$user[$ui]['login']?>" />
                </label>
                <label class="login-form__input">
                    <textarea name="comment" rows="5" placeholder="Отзыв о <?=$array[$i]['name']?>"></textarea>
                </label>
                <label class="login-form__submit">
                    <input type="submit" value="Оставить отзыв" />
                </label>
                <a href="/product?i=<?=$i?>" class="left-text-align full-width"><i class="fa fa-long-arrow-left"></i> Вернуться</a>
            </form>
        </td>
    </tr>
</table>

<?php
return false;
?>