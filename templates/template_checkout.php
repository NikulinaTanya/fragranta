<?php

$array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt"));
$user = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/users.txt"));
$i = $_GET['i'];
$ui = $_SESSION['user_login'];
?>

<table class="admin">
    <tr>
        <td colspan="2">
            <form class="login-form" method="post" action="/include/checkout.php">
                <h3><span>Fragranta.</span>
                    Оформить заказ.</h3>
                <input type="hidden" name="login" value="<?=$ui?>"  />
                <label class="login-form__input">
                    <input type="text" name="name" placeholder="Представьтесь" value="<?=$user[$ui]['name']?>" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="adress" placeholder="Адрес доставки" value="<?=$user[$ui]['adress']?>"  />
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