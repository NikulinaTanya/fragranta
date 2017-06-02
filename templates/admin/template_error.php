<?php
switch($_GET['m']){
    case 'pass': $m = 'Не правильно введен пароль или логин!'; break;
    case 'login': $m = 'Не введен пароль или логин!'; break;
}
?>

<table class="admin">
    <tr>
        <td>
            <i class="sgicon sgicon-Ringer"></i>
            <p class="error"><?=$m?></p>
            <a href="<?=$_SERVER['HTTP_REFERER']?>"><i class="fa fa-long-arrow-left"></i> Вернуться</a>
        </td>
    </tr>
</table>

<?php
return false;
?>