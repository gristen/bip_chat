<?php

require_once "function/conectdb.php"; 
    ConnectDB();

$phon = $_POST['phon'];

  $sql = "DELETE FROM Student WHERE Phone = '$phon'";
  mysqli_query($conn, $sql)
    or die('Error querying database.');

  echo 'Customer removed: ' . $phon;
header("Location: admin.php");
exit();
  CloseDB();
?>
