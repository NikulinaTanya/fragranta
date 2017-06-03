<table class="admin">
    <?php if (isset($_GET['success']) && $_GET['success']) { ?>
        <tr>
            <td colspan="2">Товар был добвален</td>
        </tr>
    <?php } ?>
    <tr>
        <td colspan="2">
            <form class="login-form" method="post" action="/include/add_product.php" enctype="multipart/form-data">
                <h3><span>Fragranta.</span>
                    Администрирование.</h3>
                <label class="login-form__input">
                    <input type="file" name="image" placeholder="Изображение" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="company" placeholder="Производитель" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="name" placeholder="Название" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="vendor" placeholder="Артикул" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="price_now" placeholder="Цена для показа" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="price_old" placeholder="Зачеркнутая цена" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="family" placeholder="Семейство" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="high" placeholder="Верхние ноты" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="middle" placeholder="Средние ноты" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="low" placeholder="Нижние ноты" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="year" placeholder="Год выпуска" />
                </label>
                <label class="login-form__input">
                    <input type="text" name="amount" placeholder="Объем" />
                </label>
                <label class="login-form__input">
                    <select name="category" id="category">
                        <option selected="selected" value="Подарки">Категория</option>
                        <option value="Женские">Женские</option>
                        <option value="Мужские">Мужские</option>
                        <option value="Подарки">Подарки</option>
                        <option value="Эксклюзивные">Эксклюзивные</option>
                        <option value="Популярно">Популярно</option>
                    </select>
                </label>
                <label class="login-form__submit">
                    <input type="submit" value="Добавить" />
                </label>
                <a href="/" class="left-text-align full-width"><i class="fa fa-long-arrow-left"></i> Вернуться на сайт</a>
            </form>
        </td>
    </tr>
</table>

<?php
return false;
?>