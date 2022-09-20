<?php

require_once "function/conectdb.php"; 
    ConnectDB();

$surname = $_POST["surname"];
$firstname = $_POST["firstname"];
$phone = $_POST["mobile"];
$pas = $_POST["pass"];
$repas = $_POST["mail"];
$Error;

$sql = "INSERT INTO Student (Id, Surname, Name, Phone, Password, Email) 
    VALUES (NULL, '$surname', '$firstname', '$phone', '$pas', '$repas')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

header ('Location: login.php');  // перенаправление на нужную страницу
   exit();    // прерываем работу скрипта, чтобы забыл о прошлом
CloseDB();
?>