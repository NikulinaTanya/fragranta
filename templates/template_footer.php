<table class="footer">
    <tr>
        <td>
            <ul class="navigation-links">
                <li><a href="/news">Акции</a></li>
                <li><a href="#">Доставка</a></li>
                <li><a href="#">Метод оплаты</a></li>
                <li><a href="#">Самовывоз</a></li>
                <?php
                
                if($_SESSION['user_online'] == 1){
                    echo '<li><a href="/user/edit">Профиль</a></li>';
                } else {
                    echo '<li><a href="/user/registration">Регистрация</a></li>';
                }
                if($_SESSION['user_online'] == 1){
                    echo '<li><a href="/user/">Выйти</a></li>';
                } else {
                    echo '<li><a href="/user/">Вход</a></li>';
                }
                ?>
                <?php
                
                if($_SESSION['admin_online'] == 1){
                    echo '<li class="active"><a href="/admin/addproduct.php">Добавить +</a></li>';
                }
                ?>
            </ul>
        </td>
    </tr>
    <tr>
        <td>
            <p><a href="/">Fragranta</a> интернет-магазин парфюмерии</p>
        </td>
    </tr>
</table>
<?php
return false;
?>