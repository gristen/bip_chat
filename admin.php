
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
                <form method="POST" action="add_news.php" class="decor" enctype="multipart/form-data">
	 			<div class="title_text"><span>Название </span></div>
	 			<div class="prewiew_text"><span>Описание</span></div>
	 		
				  <textarea placeholder=""  name="title" class="name_state"></textarea><br>
				  <textarea placeholder=""  name="prewiew"></textarea><br>
                  
				  <input type="submit" value="Опубликовать" class="btn_a btn3"/>
			</form>

                <form action="remuv_user.php" method="POST" enctype="multipart/form-data">
                <br><label>Поиск по Фамилии<br>
                            <input type=text name="fio">                      
                     <input type="submit" value="Поиск">
                </form>

                <form action="drop_user.php" method="POST" enctype="multipart/form-data">
                <br><label>Удаление пользователя по телефону<br>
                            <input type=text name="phon">                      
                     <input type="submit" value="Удалить">
                </form>
                <form action="drop_post.php" method="POST" enctype="multipart/form-data">
                <br><label>Удаление новостей<br>                     
                     <input type="submit" value="Удалить">
                </form>
                </div>
            </div>
        </body>
    </main>
    <footer></footer>
</body>
<script>

</script>
</html>