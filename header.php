<?php include('./function/checkAuth.php') ?>
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
                        
                        <?php
                        require_once "function/conectdb.php"; 
                        ConnectDB();

                        $result = mysqli_query( $conn,"SELECT * FROM news ");
                        while ($row = mysqli_fetch_array($result))
                            {
                                
                                    print_r ('<h2> '.$row['Title'].'</h2>');
                                    print_r ('<p> '.$row['Text'].'</p>');
                                
                            }
                            CloseDB();
                        ?>

                </div>
            </div>
        </body>
    </main>
    <footer></footer>
</body>

</html>