<?php
$user = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/users.txt"));
$i = $_SESSION['user_login'];
?>

<table class="admin">
    <tr>
        <td colspan="2">
            <form class="login-form" method="post" action="/include/user_edit.php">
                <h3><span>Fragranta.</span>
                    Профиль.</h3>
                <input type="hidden" name="id" value="<?=$i?>" />
                <label class="login-form__input">
                    <input type="text" name="login" placeholder="Логин" value="<?=$user[$i]['login']?>" readonly autocomplete="off" />
                </label>
                <label class="login-form__input">
                    <input type="password" name="password" placeholder="Пароль" value="<?=$user[$i]['password']?>" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="name" placeholder="Представьтесь" value="<?=$user[$i]['name']?>" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="adress" placeholder="Адрес доставки" value="<?=$user[$i]['adress']?>" />
                </label>
                <label class="login-form__submit">
                    <input type="submit" value="Изменить" />
                </label>
                <a href="/" class="left-text-align full-width"><i class="fa fa-long-arrow-left"></i> Вернуться на сайт</a>
            </form>
        </td>
    </tr>
</table>

<?php
return false;
?>