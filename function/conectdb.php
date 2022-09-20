<?php 
    function ConnectDB(){
        global $conn;
$servername = "localhost";
$database = "blog";
$username = "mysql";
$password = "mysql";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
$conn-> query ("SET NAMES 'utf-8'");
// Проверяем соединение
if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
}
	// Разрываем соеденение
	function closeDB () {
		global $conn;
		$conn-> close();

	}