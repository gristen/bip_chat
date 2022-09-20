<?php

require_once "function/conectdb.php"; 
    ConnectDB();
//print($_COOKIE["user_id"]);
$term = $_COOKIE["user_id"];

$sql = mysqli_query($conn, "SELECT * FROM Student WHERE Id='$term'");
$row = mysqli_fetch_assoc($sql);

    CloseDB();
?>