<?php
$i = $_GET['i'];
$array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt"));
$company = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/company.txt"));
$amount = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/amount.txt"));

?>
<table class="admin">
    <tr>
        <td colspan="2">
            <form class="login-form" method="post" action="/include/change_product.php" enctype="multipart/form-data">
                <h3 class="changeproduct"><span>Fragranta.</span>
                    Администрирование.</h3>
                <input type="hidden" name="id" value="<?=$i?>" />
                <label class="login-form__input">
                    <img src="<?=$array[$i]['image']?>" />
                    <input type="hidden" name="last_pic" value="<?=$array[$i]['image']?>" />
                    <input type="file" name="image" placeholder="Изображение" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="company" placeholder="Производитель" value="<?=$company[$array[$i]['company']]?>" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="name" placeholder="Название" value="<?=$array[$i]['name']?>" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="vendor" placeholder="Артикул" value="<?=$array[$i]['vendor']?>" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="price_now" placeholder="Цена для показа" value="<?=$array[$i]['price_now']?>" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="price_old" placeholder="Зачеркнутая цена" value="<?=$array[$i]['price_old']?>" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="family" placeholder="Семейство" value="<?=$array[$i]['family']?>" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="high" placeholder="Верхние ноты" value="<?=$array[$i]['high']?>" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="middle" placeholder="Средние ноты" value="<?=$array[$i]['middle']?>" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="low" placeholder="Нижние ноты" value="<?=$array[$i]['low']?>" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="year" placeholder="Год выпуска" value="<?=$array[$i]['year']?>" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="amount" placeholder="Объем" value="<?=$amount[$array[$i]['amount']]?>" />
                </label>
                <label class="login-form__input">
                    <select name="category" id="category">
                        <option value="Женские" <?=ChangeCategory($array[$i]['category'],'Женские')?>>Женские</option>
                        <option value="Мужские" <?=ChangeCategory($array[$i]['category'],'Мужские')?>>Мужские</option>
                        <option value="Подарки" <?=ChangeCategory($array[$i]['category'],'Подарки')?>>Подарки</option>
                        <option value="Эксклюзивные" <?=ChangeCategory($array[$i]['category'],'Эксклюзивные')?>>Эксклюзивные</option>
                        <option value="Популярно" <?=ChangeCategory($array[$i]['category'],'Популярно')?>>Популярно</option>
                    </select>
                </label>
                <label class="login-form__submit">
                    <input type="submit" value="Изменить" />
                </label>
            </form>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <form class="login-form" method="post" action="/include/delete_product.php" enctype="multipart/form-data">
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