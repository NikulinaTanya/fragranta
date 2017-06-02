<?php
session_start();
?>
<!-- Баннер -->
<table class="banner">
    <tr>
        <td>
            <h1><span><?=$_SESSION['user_online']?> Fragranta.</span> Магазин ароматов.</h1>
            <?php if($_SESSION['user_online'] == 1): ?>
            <p>Здравствуй, <?=$_SESSION['user_login']?>!</p>
            <?php endif; ?>
            <p>Быть сегодня дерзкой или нежной выбирать тебе! Создавай настроение каждый день с нашими ароматами!</p>
            <a href="#">Новость дня!</a>
        </td>
        <td class="background">
            <img src="images/1_535a26d974f7d535a26d974fb8.jpg" />
        </td>
    </tr>
</table>
<?php
return false;
?>