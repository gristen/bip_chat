<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login/style-log.css">
    <link rel="stylesheet" href="css/main/main.css">
    <link rel="icon" href="image/icon/33.png">
    <title>Востановление</title>
</head>
<body>
<header>
        <div class="container">
            <!-- <div class="language">
                <form action="#">
                    <select>
                        <option>Русский</option>
                        <option>Английский</option>
                    </select>
                </form>
            </div> -->
            <div class="logo">
                <a href="#" class="logo_img">
                    <img src="image/login/33.png" alt="">
                    <span>В БИПЕ</span>
                </a>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="autho">
            <span>Восстановление</span>
        </div>
        <div class="main">
            <div class="login">

                <form action="reset_user.php" method="post">
                    <div class="group">
                        <input type="text" class="log" name="phone" required>
                        <span class="bar"></span>
                        <label id="lab-log">Телефон</label>
                        <div class="container-btn">
                        <button class="shine-button" onclick="document.location='login.php'">Назад</button>
                        <button class="shine-button">Восстановить</button>
                    </div>
                    </div>
                </form>
            </div>
            </div>
            </div>
</body>
</html>