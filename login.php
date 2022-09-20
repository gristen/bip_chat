<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login/style-log.css">
    <link rel="stylesheet" href="css/main/main.css">
    <link rel="icon" href="image/icon/33.png">
    <title>Авторизация</title>
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
            <span>Авторизация</span>
        </div>
        <div class="main">
            <div class="login">

                <form action="connect_user.php" method="post">
                    <div class="group">
                        <input type="text" class="log" name="log" required>
                        <span class="bar"></span>
                        <label id="lab-log">Логин</label>
                    </div>
                    <div class="group">
                        <input type="text" class="log" name="pass" required>
                        <span class="bar"></span>
                        <label id="lab-log">Пароль</label>
                    </div>
                    <input type="checkbox" id="checkbox" name="cheak">
                    <label for="checkbox">Запомнить пароль</label><br>
                    <div class="container-btn">
                        <button class="shine-button">Войти</button>
                    </div>
                </form>

                <div class="pass">
                    <div class="reg">
                        <span>Нет аккаунта? | <a href="reg.php" class="reg_a">Регистрация</a></span>
                    </div>

                    <div class="forgot">
                        <span class="for_pass">Забили пароль? | <a href="reset.php" >Восстановить</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="contact">

        </div>
        <div class="social">
            <img src="image/footer/vk.png" alt="">
            <img src="image/footer/insta.png" alt="">
        </div>
        <div class="copy">

        </div>
    </footer>
</body>

</html>