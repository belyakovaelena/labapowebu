<?php
session_start();

require_once "connect.php";

?>
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
                        <a href="dish.php" class="nav-link">ДОБАВИТЬ БЛЮДО
                        </a>
                    </li>
                    <?php
                    if(empty($_SESSION['user'])){
                    ?>

                    <li class="nav-item">
                        <a href="register.php" class="nav-link">ВОЙТИ/ЗАРЕГИСТРИРОВАТЬСЯ

                        </a>
                    </li>
                    <?php
                    }
                    ?>
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
if($_SESSION['user'] == ''):
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
                    <input type="text" name="login" id="login" placeholder="ЛОГИН(почта ваша)">
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
                                <input type="text" name="login" id="login" placeholder="ЛОГИН(почта ваша)">
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
                $id = $_SESSION['id'];
                $result= $mysql->query("SELECT * FROM `users` WHERE `id` = '$id'");
                $arr=$result->fetch_assoc();
                $login=$arr['login'];
                $name=$arr['name'];

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

                    <section id="examples" class="text-center">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="container mt-5 mb-4 text-center text-md-left">
                                <h3>Информация о пользователе</h3><br>
                                <p>Имя: <?= $name ?></p><br>
                                <p>login: <?=$login?></p>
                                   <form action='edit_lk_user.php' method='post' id='edit_form'>
                                        <input type='hidden' value='<?=$arr['id']?>' name='id' id='id'>
                                        <button class='btn btn-outline-primary' type='submit'>редактировать информацию о пользователе</button>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <br>
                                <div class="card" style="width: 18rem;">
                                    <img src="img/img_328560.png" class="card-img-top" alt="user_photo">
                                    <div class="card-body">
                                        <p class="card-text">тут может быть ваша фотография</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <br><a class='btn btn-outline-primary' href='delete_lk.php'  >удалить аккаунт</a>
                                <br><a class='btn btn-outline-primary' href='output_table.php'  >посмотреть таблицу блюд</a>
                                <br><a class='btn btn-outline-primary' href='outputusers_table.php'  >посмотреть таблицу зарегистрированных пользователей</a>

                            </div>
                        </div>
                    </section>
                </footer>
                <?php
                $mysql->close();
                ?>
            <?php endif; ?>
            <script src="js/user_register.js"></script>
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