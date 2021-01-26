<?php
require_once "connect.php";
$id = mysqli_real_escape_string($mysql, trim($_POST['id']));

$sql = "SELECT * FROM `users` WHERE `id`='$id'";
$result = $mysql -> query($sql);
$result=$result -> fetch_all();
$result=$result[0];

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
    <link rel="stylesheet" href="css/style_dish.css">
</head>
<body>
<header id="menu">
    <div class="text-center mb-4">

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
                        <a href="register.php" class="nav-link">ВОЙТИ/ЗАРЕГИСТРИРОВАТЬСЯ
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

<div class="form" >
    <h1>РЕДАКТИРОВАТЬ ИНФУ О ПОЛЬЗОВАТЕЛЕ</h1>
    <form action="edit_user.php" method="post" id="user_form" >
                <div class="input-form">
                    <input value="<?php echo $result[0]; ?>" name="id" type="hidden" id="id">
                    <input value="<?php echo $result[3]; ?> " type="text" name="name" id="name" placeholder="Введите имя">
                </div>
                <div class="input-form">
                    <input value="<?php echo $result[1]; ?> " type="text" name="login" id="login" placeholder="ЛОГИН">
                </div>

        <div class="input-form">
            <input type="submit" id="submit" value="ИЗМЕНИТЬ">
        </div>

    </form>
</div>
<div class="table" >
    <a class="button" href="outputusers_table.php">ПОСМОТРЕТЬ ТАБЛИЦУ</a>
</div>

<main>
    <script src="js/edit_dish.js"></script>-->
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
