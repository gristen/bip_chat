<?php include ("out_info.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header/main.css">
    <title>Главная</title>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/menu_script.js"></script>

</head>


<body>
    <header>

        <div class="logo">
            <a href="#" class="logo_img">
                <img src="image/icon/33.png" alt="" >
                <span id="">В БИПЕ</span>
            </a>
            <div class="menu">
                <a class="menu-triger" href="#"><img src="image/icon/menu.png" alt=""></a>
                <div class="menu-popup">
                    <a class="menu-close" href="#"><img src="image/icon/close.png" alt=""></a>
                    <ul><?php include('headerMenu.php') ?></ul>				
                </div>
            </div>
        </div>
        
    </header>
    <main>
       
        <body>

            <div class="container">

                
                <!-- menu start -->
                <div class="vertmenu">
                    <ul>
                        <li>
                            <a class="active" href="#">Меню</a>
                            <input type="checkbox" class="subCat" id="1">
                            <label class="chka" for="1"></label>
                            <ul style="display:none"><?php include('headerMenu.php') ?></ul>
                        </li>
                    </ul>
                </div>
                <!-- menu end -->
                <div class="centerblock" id="up">
                <form action="out_info.php" method="post">
                    <table class="tab">
                        <tr>
                            <td>Фамилия</td>
                            <td id="ferst"><?php print_r ($row['Surname'])  ?></td>
                        </tr>

                        <tr>
                            <td>Имя</td>
                            <td id="name"><?php print_r ($row['Name'])  ?></td>
                        </tr>
                        
                        <tr>
                            <td>Почта</td>
                            <td id="password"><?php print_r ($row['Email'])  ?></td>
                        </tr>

                        <tr>
                            <td>Телефон</td>
                            <td id="tel"><?php print_r ($row['Phone'])  ?></td>
                        </tr>

                        <tr>
                            <td>Пароль</td>
                            <td id="password"><?php print_r ($row['Password'])  ?></td>
                        </tr>

                    </table>
                </form>
                </div>
            </div>
        </body>
    </main>
    <footer></footer>
</body>

</html>