<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   require_once "function/conectdb.php"; 
   ConnectDB();

   $result = mysqli_query( $conn,"SELECT * FROM News ");
                       while ($row = mysqli_fetch_array($result))
   { 
    printf(" 
   <form action='delet_post.php'>
   <input id='$row[Id]' type='text' name='num' value='$row[Id]'>
   <input id='$row[Id]' type='text' value='$row[Title]'>
   <input id='$row[Id]' type='text' value='$row[Text]'>   
   <input id='$row[Id]' type='submit' value='Удалить'>
   </form>");
   
    }
   
    CloseDB();
   
    ?>
  <a href="admin.php">Вернуться</a><br/><br/>
</body>
</html>