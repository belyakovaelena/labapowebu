<?php
require_once "connect.php";
$id = mysqli_real_escape_string($mysql, trim($_POST['id']));
$sql = "SELECT * FROM `dishes` WHERE `id`='$id'";
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
    <h1>РЕДАКТИРОВАТЬ БЛЮДО</h1>
    <form action="edit_dish.php" method="post" id="dish_form" enctype="multipart/form-data">
        <div class="input-form">
            <input value="<?php echo $result[0]; ?>" name="id" type="hidden" id="id">
            <input value="<?php echo $result[8]; ?>" name="img_path" type="hidden" id="img_path">
            <input value="<?php echo $result[1]; ?>" type="text" name="dish" id="name" placeholder="Введите название блюда">
        </div>
        <div class="input-form">
            <input value="<?php echo $result[2]; ?>" type="text" name="price" id="price" placeholder="Введите цену блюда(в руб.)">
        </div>
        <div class="input-form">
            <input value="<?php echo $result[3]; ?>" type="text" name="weight" id="weight" placeholder="Введите вес блюда(в граммах)">
        </div>
        <div class="input-form">
            <input value="<?php echo $result[4]; ?>"  type="text" name="calories" id="calories" placeholder="Количество калорий">
        </div>
        <div class="input-form">
            <input value="<?php echo $result[5]; ?>" type="text" name="time" id="time" placeholder="Время приготовления(часы:минуты:секунды)">
        </div>
        <div class="example-1">
            <div class="form-group">
                <label class="label">

                    <span class="title">Добавить файл</span>
                    <input type="file" name="file">
                </label>
            </div>
        </div>

        <div class="input-form">
            <input type="submit" id="submit" value="ИЗМЕНИТЬ">
        </div>
    </form>
</div>
<div class="table" >
    <a class="button" href="output_table.php">ПОСМОТРЕТЬ ТАБЛИЦУ</a>
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
