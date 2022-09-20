<?php
require_once "function/conectdb.php"; 
   ConnectDB();
   
$id = $_GET["num"];

   $sql = "DELETE FROM News WHERE Id = '$id'";
  mysqli_query($conn, $sql)
    or die('Error querying database.');

  echo 'Customer removed: ' . $sql;

header("Location: admin.php");
exit();
  CloseDB();
   ?>