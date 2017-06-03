<?php

$array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt"));
$user = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/users.txt"));
$i = isset($_GET['i']) ? $_GET['i'] : 0;
$ui = isset($_SESSION['user_login']) ? $_SESSION['user_login'] : '';

$user_name = isset($user[$ui]['name']) ? $user[$ui]['name'] : '';
$user_address = isset($user[$ui]['adress']) ? $user[$ui]['adress'] : '';

?>

<table class="admin">
    <tr>
        <td colspan="2">
            <form class="login-form" method="post" action="/include/checkout.php">
                <h3><span>Fragranta.</span>
                    Оформить заказ.</h3>
                <input type="hidden" name="login" value="<?=$ui?>"  />
                <label class="login-form__input">
                    <input type="text" name="name" placeholder="Представьтесь" value="<?=$user_name?>" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="adress" placeholder="Адрес доставки" value="<?=$user_address?>"  />
                </label>
                <label class="login-form__input">
                    <textarea rows="5" placeholder="Комментарии к заказу" name="comment"></textarea>
                </label>
                <label class="login-form__submit">
                    <input type="submit" value="Оформить заказ" />
                </label>
                <a href="/" class="left-text-align full-width"><i class="fa fa-long-arrow-left"></i> Вернуться на сайт</a>
            </form>
        </td>
    </tr>
</table>

<?php
return false;
?>