
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main/main.css">
    <link rel="stylesheet" href="css/register/style-reg.css">
    <link rel="icon" href="image/icon/33.png">
    <title>Регистрация</title>
    <script src="./js/jquery-3.6.0.min.js"></script>
</head>

<body>
    <header>
        <div class="container">

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
            <span>Регистрация</span>
        </div>

        <div class="main">

            <div class="login">

                <form action="add_user.php" method="post" id="log_form">
                    <div class="group">
                        <input type="text" class="log" name="surname" required>
                        <span class="bar"></span>
                        <label id="lab-log">Фамилия</label>
                    </div>

                    <div class="group">
                        <input type="text" class="log" name="firstname" required>
                        <span class="bar"></span>
                        <label id="lab-log">Имя</label>
                    </div>

                    <div class="group">
                        <input type="text" class="log" name="mobile" required>
                        <span class="bar"></span>
                        <label id="lab-log">Телефон</label>
                    </div>
                    
                    <div class="group">
                        <input type="text" id="email" class="log" name="mail" required>
                        <span class="bar"></span>
                        <label id="lab-log" >Электронная почта</label>
                    </div>
                    
                    <div class="group">
                        <input type="text" id="first_pass" class="log" name="pass" required>
                        <span class="bar"></span>
                        <label id="lab-log">Пароль</label>
                    </div>

                   

                    <div class="group">
        
                    </div>

                    <button class="shine-button" onclick="document.location='login.php'">Назад</button>
                       
                    <input type="submit" value="Регистрация" name="submit_reg"  id="regis" class="shine-button">
                </form>
               
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