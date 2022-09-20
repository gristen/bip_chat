<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Вносим изменеиния</title>
</head>

<body>
<?php

require_once "function/conectdb.php"; 
    ConnectDB();

$fio = $_POST['fio'];
$result = mysqli_query($conn, "SELECT * FROM `Student` WHERE `Surname`='".$fio."'");


while ($row = mysqli_fetch_array($result)){
printf("<form action='update.php' method='post' name='forma'>
<fieldset>
 
<input type='hidden' name='id'  value=''><br/>

<label for='Id'>Id:</label><br/>
<input type='text' name='Id' size='30' value='$row[Id]'><br/>

<label for='Surname'>Фамилия:</label><br/>
<input type='text' name='Surname' size='30' value='$row[Surname]'><br/>

<label for='name'>Имя:</label><br/>
<input type='text' name='name1' size='30' value='$row[Name]'><br/>

<label for='email'>Email:</label><br/>
<input type='text' name='email' size='30' value='$row[Email]'><br/>

<label for='phone'>Телефон</label><br/>
<input name='phone' type='text'  size='30' value='$row[Phone]'><br/>

<label for='password'>Пароль</label><br/>
<input name='password' type='text'  size='30' value='$row[Password]'>

</fieldset>
<br/>
</form>",$row['Id'], $row['Surname'], $row['Name'], $row['Email'], $row['Phone'], $row['Password']);
}
closeDB();
?>

<a href="admin.php">Вернуться</a><br/><br/>

</body>
</html>