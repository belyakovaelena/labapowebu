<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Онлайн столовая "У деффчонок"</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style_regist.css">
</head>
<body>
<header>
    <div class="text-center mb-4">

        <h1 align="center" class="text-uppercase font-weight-bold" >ДОБРО ПОЖАЛОВАТЬ</h1>

    </div>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">

            <a href="index.php" class="navbar-brand waves-effect">Столовая "У деффчонок!"</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="
			#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="
			Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <ul class="navbar-nav mr-auto smooth-scroll">
                    <li class="nav-item">
                        <a href="menu.php" class="nav-link waves-effect waves-light">МЕНЮ</a>
                    </li>
                    <li class="nav-item">
                        <a href="delivery.php" class="nav-link waves-effect waves-light">ДОСТАВКА</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="register.php" class="nav-link">Войти/Зарегистрироваться</a>
                    </li>
                </ul>

                <?php
                if (!empty($_SESSION['user'])) :
                    ?>

                    <li class="nav-link" >Привет, <?= $_SESSION['user'] ?>.<a href="register.php" > Личный кабинет </a><a href="exit.php" >Выйти</a></li>
                <?php
                endif;
                ?>
            </div>
        </div>
    </nav>
</header>

    <?php

    ?>
    <div class="row">
        <div class="col">
            <div class="form">
                <h1>ДЛЯ РЕГИСТРАЦИИ</h1>
                <form action="check.php" method="post">
                    <div class="input-form">
                        <input type="text" name="name" id="name" placeholder="Введите имя">
                    </div>
                    <div class="input-form">
                        <input type="text" name="login" id="login" placeholder="ЛОГИН">
                    </div>
                    <div class="input-form">
                        <input type="password" name="pass" id="pass" placeholder="ПАРОЛЬ">
                    </div>
                    <div class="input-form">
                        <input type="submit" value="ЗАРЕГИСТРИРОВАТЬСЯ">
                    </div>
                    <a href="#" class="forget">ЗАБЫЛИ ПАРОЛЬ?</a>
                </form>
            </div>
        </div>
        <div class="col">
            <div class="form">
                <h1>ДЛЯ АВТОРИЗАЦИИ</h1>
                <form action="authorization.php" method="post">

                    <div class="input-form">
                        <input type="text" name="login" id="login" placeholder="ЛОГИН">
                    </div>
                    <div class="input-form">
                        <input type="password" name="pass" id="pass" placeholder="ПАРОЛЬ">
                    </div>
                    <div class="input-form">
                        <input type="submit" value="Войти">
                    </div>
                    <a href="#" class="forget">ЗАБЫЛИ ПАРОЛЬ?</a>
                </form>
            </div>
        </div>
    </div>
<main>

<?php else: ?>
    <?php

    $mysql = new mysqli('localhost','root','root','register-bd');
    $name = $_SESSION['user'];
    $result= $mysql->query("SELECT `login` FROM `users` WHERE `name` = '$name'");
    $arr=$result->fetch_assoc();
    $login=$arr['login'];
    ?>
    <footer class="page-footer font-small unique-color-dark pt-0">
        <div class="primary-color">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-5 col-lg-7 text-center text-md-left ">
                        <h1>Это ваш личный кабинет</h1><br>
                        <h2>СПАСИБО ЗА ТО ЧТО ВЫБИРАЕТЕ НАС</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">
                <div class="col-md-2 col-lg-7 col-xl-8 mb-4">

                    <h3>Информация о пользователе</h3><br>

                    <p>Имя: <?= $_SESSION['user'] ?></p><br>

                    <p>login: <?=$login?></p>
                </div>
            </div>
        </div>
    </footer>

    <?php
    $mysql->close();
    ?>
    <?php endif; ?>

<script type="text/javascript" src="js/jquery.min.js"></script>
<!— Bootstrap tooltips —>
<script type="text/javascript" src="js/popper.min.js"></script>
<!— Bootstrap core JavaScript —>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!— MDB core JavaScript —>
<script type="text/javascript" src="js/mdb.min.js"></script>
<!— Your custom scripts (optional) —>
<script type="text/javascript"></script>
</main>
</body>
</html>