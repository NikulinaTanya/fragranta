<table class="admin">
    <tr>
        <td colspan="2">
            <form class="login-form" method="post" action="/include/admin_auth.php">
                <i class="sgicon sgicon-Bulb"></i>
                <p class="error">Добро пожаловать!</p>
                <input type="hidden" name="action" value="logout" />
                <label class="login-form__submit">
                    <input type="submit" value="Выйти" />
                </label>
                <a href="/" class="left-text-align full-width"><i class="fa fa-long-arrow-left"></i> Вернуться на сайт</a>
            </form>
        </td>
    </tr>
</table>

<?php
return false;
?>