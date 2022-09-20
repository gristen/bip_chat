<?php

if (isset($_COOKIE['user_id'])){
    unset($_COOKIE['user_id']);
    setcookie('user_id', null, -1);
    header('Location: login.php');
    exit();
    closeDB();
} else {
    header('Location: login.php');
    exit();
    closeDB();
        }

?>