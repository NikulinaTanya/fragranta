<?php
    $v = isset($_GET['v']) ? $_GET['v'] : '';
    $p = isset($_GET['p']) ? $_GET['p'] : '';
?>
<table class="admin">
    <tr>
        <td colspan="2">
            <form class="login-form" method="post" action="/include/user_login.php">
                <h3><span>Fragranta.</span>
                    Вход.</h3>
                <label class="login-form__input">
                    <input type="text" name="login" placeholder="Логин" value="<?=$v?>" />
                </label>
                <label class="login-form__input">
                    <input type="password" name="password" placeholder="Пароль" value="<?=$p?>" />
                </label>
                <label class="login-form__submit">
                    <input type="submit" value="Войти" />
                </label>
                <a href="/" class="left-text-align full-width"><i class="fa fa-long-arrow-left"></i> Вернуться на сайт</a>
            </form>
        </td>
    </tr>
</table>

<?php
return false;
?>