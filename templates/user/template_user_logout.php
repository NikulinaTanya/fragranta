<?php
$user = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/users.txt"));
?>
<table class="admin">
    <tr>
        <td colspan="2">
            <form class="login-form" method="post" action="/include/user_login.php">
                <i class="sgicon sgicon-Bulb"></i>
                <p class="error">Добро пожаловать, <?=$user[$_SESSION['user_login']]['name']?>!</p>
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