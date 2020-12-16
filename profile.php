<?php
session_start();
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
    <link rel="stylesheet" href="css/style_profile.css">
</head>
<body>
<header>
    <div class="text-center mb-4">
        <h1 align="center" class="text-uppercase font-weight-bold" >приветики-пистолетики</h1>
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

<main>
    <?php else: ?>
        <?php
        $mysql = new mysqli('localhost','root','root','register-bd');
        $login = $_POST['login'];
        $result= $mysql->query("SELECT `name` FROM `users` WHERE `login` = '$login'");
        $arr=$result->fetch_assoc();
        $name=$arr['name'];
        ?>
        <footer class="page-footer font-small pt-0">
            <div class="primary-color">
                <div class="container">
                    <div class="row py-4  align-items-center">
                        <div class="col-md-12 col-lg-12 text-center text-md-left ">
                            <h1>Это профиль пользователя, на чье блюдо вы нажали</h1><br>
                            <h2>Если хотите узнать как связаться с этим человеком, то позвоните на номер: 88005553535</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5 mb-4 text-center text-md-left">
                <div class="row mt-3">
                    <div class="col-md-2 col-lg-7 col-xl-8 mb-4">
                        <h3>Информация о пользователе</h3><br>
                        <p>Имя: <?= $name ?></p><br>
                        <p>login: <?=$login?></p>
                        <br><a class='btn btn-outline-primary' href='output_table.php'  >посмотреть таблицу блюд</a>
                        <a class='btn btn-outline-primary' href='outputusers_table.php'  >посмотреть таблицу пользователей</a>
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