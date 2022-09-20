<?php
require_once "function/conectdb.php"; 
ConnectDB(); //подключение к бд

    // проверка на ввод
if (isset($_POST['log']) and isset($_POST['pass'])) {
    $log = $_POST['log'];
    $pas = $_POST['pass'];

    // проверка на админа
    if (($log == "Admin") and ($pas == "Belorabip@48")){
        setcookie("user_id", "admin", strtotime("+30 days"));
        header ('Location: admin.php');  
    } else {

        //поиск ползователя по логину и паролю
    $query = " SELECT * FROM Student WHERE Phone = '$log' and Password = '$pas' ";
    $result = mysqli_query($conn, $query) or die (mysqli_error($conn));
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

        // проверка на количество полученых записей и сравнение логинов
    if ($count == 1) {
        $_SESSION['log'] = $log;
        // перенаправление если не совпадают
    } else {
        $err = "Не верный логин или пароль";
        header ('Location: login.php');
        exit();
    }
        // создание Cookie и перанаправление на главную страницу
    if (isset( $_SESSION['log'])) {
        $log =  $_SESSION['log'];
        setcookie("user_id", $row['Id'], strtotime("+30 days"));
        header('Location: header.php');  
        exit(); }   // прерываем работу скрипта, чтобы забыл о прошлом   
}}
CloseDB();//разрыв соединения с бд