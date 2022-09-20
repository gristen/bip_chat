<?php

require_once "function/conectdb.php"; 
    ConnectDB();

    $title = $_POST['title'];
	$prewiew = $_POST['prewiew'];


	$sql = "INSERT INTO News (Id, Title, Text) 
    VALUES (NULL, '$title', '$prewiew')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	header('Location: admin.php');	
?>
