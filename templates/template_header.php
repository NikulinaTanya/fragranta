<!-- Шапка -->
<?php
session_start();
if($_SESSION['user_online'] == 1 && $_SESSION['user_message'] <> 0){
    include($_SERVER['DOCUMENT_ROOT'] . '/templates/elements/template_login.php');
}
?>
<table>
    <tr class="table-grid">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr class="header">
        <td colspan="4" class="left-text-align header__nav">
            <a class="open-nav">
                <i class="sgicon sgicon-Layers"></i>
                <span>Навигация</span>
            </a>
        </td>
        <td colspan="4" class="center-text-align header__logo">
            <a href="/"><span>.</span>Fragranta</a>
        </td>
        <td colspan="4" class="right-text-align header__search">
            <a href="/cart" class="shoppingcart">
                <span>Корзина</span>
                <i class="sgicon sgicon-FullShoppingCart"></i>
            </a>
        </td>
    </tr>
</table>
<!-- Навигация -->
<ul data-active="no" id="navigation" class="navigation-header navigation-links">
    <li><a href="/">Главная</a></li>
    <li><a href="/all">Каталог</a></li>
    <li><a href="/news">Новости / Акции</a></li>
    <li><a href="/contact">Контакты</a></li>
    <?php
    session_start();
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

    session_start();
    if($_SESSION['admin_online'] == 1){
        echo '<li class="active"><a href="/admin/addproduct.php">Добавить +</a></li>';
    }
    ?>
</ul>

<?php
return false;
?>