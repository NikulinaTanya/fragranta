<?php
$array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/users.txt"));
?>
<table class="welcome">
    <tr>
        <td>
            <i class="fa fa-envelope-o"></i>
            <h3>
                Добро пожаловать, <?=$array[$_SESSION['user_login']]['name']?>!
                <a href="/present">Смотреть специальное предложение <i class="fa fa-long-arrow-right"></i></a>
            </h3>
            <a href="/include/close_message" class="close-message">Закрыть</a>
        </td>
    </tr>
</table>