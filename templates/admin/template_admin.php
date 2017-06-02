<table class="admin">
    <tr>
        <td colspan="2">
            <form class="login-form" method="post" action="/include/admin_auth.php">
                <h3><span>Fragranta.</span>
                    Администрирование.</h3>
                <label class="login-form__input">
                    <input type="text" name="login" placeholder="Логин" />
                </label>
                <label class="login-form__input">
                    <input type="password" name="password" placeholder="Пароль" />
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