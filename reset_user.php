<?php
require_once "function/conectdb.php"; 
ConnectDB();

$phone = $_POST['phone'];


$result = mysqli_query( $conn,"SELECT * FROM Student WHERE Phone='$phone' ");
$row = $result -> fetch_assoc();
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "Greysatklif@gmail.com";
    $to = $row['Email'];
   
    $subject = "Пароль пользователя";
    $message = "Пароль для входа" . $row['Password'];
    $headers = "Отправитель: BIP";
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
    header("Location: login.php");
    exit();
CloseDB();