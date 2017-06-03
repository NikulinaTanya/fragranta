<?php
    if (isset($_SESSION['post_fields'])) {
        $login = $_SESSION['post_fields']['login'];
        $password = $_SESSION['post_fields']['password'];
        $test_password = $_SESSION['post_fields']['password_test'];
        $name = $_SESSION['post_fields']['name'];
        $address = $_SESSION['post_fields']['adress'];

        unset($_SESSION['post_fields']);
    } else {
        $login = '';
        $password = '';
        $test_password = '';
        $name = '';
        $address = '';
    }
?>

<table class="admin">
    <tr>
        <td colspan="2">
            <form class="login-form" method="post" action="/include/user_registration.php">
                <h3><span>Fragranta.</span>
                    Регистрация.</h3>

                <?php if (isset($_SESSION['registration_errors']) && !empty($_SESSION['registration_errors'])) { ?>
                    <div class="login-form__errors">
                        <?php foreach ($_SESSION['registration_errors'] as $error) { ?>
                            <div class="login-form__error-item"><?=$error?></div>
                        <?php } ?>
                        <?php
                            unset($_SESSION['registration_errors']);
                        ?>
                    </div>
                <?php } ?>

                <label class="login-form__input">
                    <input type="text" name="login" placeholder="Логин" value="<?=$login?>" />
                </label>
                <label class="login-form__input">
                    <input type="password" name="password" placeholder="Пароль" value="<?=$password?>"/>
                </label>
                <label class="login-form__input">
                    <input type="password" name="password_test" placeholder="Повторите пароль" value="<?=$test_password?>"/>
                </label>
                <label class="login-form__input">
                    <input type="text" name="name" placeholder="Представьтесь" value="<?=$name?>"/>
                </label>
                <label class="login-form__input">
                    <input type="text" name="adress" placeholder="Адрес доставки" value="<?=$address?>"/>
                </label>
                <label class="login-form__submit">
                    <input type="submit" value="Зарегистрироваться" />
                </label>
                <a href="/" class="left-text-align full-width"><i class="fa fa-long-arrow-left"></i> Вернуться на сайт</a>
            </form>
        </td>
    </tr>
</table>

<?php
return false;
?>