<?php

if(isset($_SESSION['user_online']) && isset($_SESSION['user_online']) == 1){
    $_SESSION['user_message'] = 0;
}
header('Location: '.$_SERVER['HTTP_REFERER']);


?>