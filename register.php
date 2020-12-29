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
<header id="menu">

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
                    <li class="nav-link" style="color: white">Привет, <?= $_SESSION['user'] ?>.<a href="register.php" > Личный кабинет </a><a href="exit.php" >Выйти</a></li>
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
            <form action="/check.php" method="post">
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
                        <form action="/authorization.php" method="post">
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

                    <div class="form edit_user_form d-none" style="position: absolute; z-index: 1; background-color: black;">

                        <form action="" method="post" id="user_form" ><h1>РЕДАКТИРОВАТЬ ИНФУ О ПОЛЬЗОВАТЕЛЕ</h1>
                            <div class="input-form">
                                <input value="<?php echo $arr['id']; ?>" name="id" type="hidden" id="uid">
                                <input value="<?php echo $name; ?> " type="text" name="name" id="uname" placeholder="Введите имя">
                            </div>
                            <div class="input-form">
                                <input value="<?php echo $login; ?> " type="text" name="login" id="ulogin" placeholder="ЛОГИН">
                            </div>

                            <div class="input-form">
                                <button type="button" onclick="updateUser()">ИЗМЕНИТЬ</button>
                            </div>

                        </form>
                    </div>
                    <section id="examples" class="text-center">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="container mt-5 mb-4 text-center text-md-left">
                                <h3>Информация о пользователе</h3><br>
                                <p>Имя: <?= $name ?></p><br>
                                <p>login: <?=$login?></p>
                                <button class='btn btn-outline-primary edit_user'>редактировать информацию о пользователе</button>
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
                                <br><button class='btn btn-outline-primary' onclick="harakiri() ">удалить аккаунт</button>
                                <br><button class='btn btn-outline-primary dish_list' onclick="showDishList()">посмотреть таблицу блюд</button>
                                <br><button class='btn btn-outline-primary user_list' onclick="showUsersList()" >посмотреть таблицу зарегистрированных пользователей</button>

                            </div>
                        </div>
                    </section>
                    <div class="d-none" id="dishes"></div>
                    <div class="d-none" id="users"></div>
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
            <script type="text/javascript">
                $('.edit_user').click(function(){
                    $('.edit_user_form').toggleClass('d-none');
                });
                $('.dish_list').click(function(){
                    $('#dishes').toggleClass('d-none');
                });
                $('.user_list').click(function(){
                    $('#users').toggleClass('d-none');
                });
                function harakiri()
                {
                    $("#dishes").load("/delete_lk.php");
                };
                function showDishList()
                {
                    $("#dishes").load("/output_table.php");
                };
                function showUsersList()
                {
                    $("#users").load("/outputusers_table.php");
                };
                function updateUser()
                {
                    var id = document.getElementById("uid").value;
                    var login = document.getElementById("ulogin").value;
                    var name = document.getElementById("uname").value;
                    $.ajax({
                        type: "POST",
                        url: "/edit_lk.php",
                        dataType: "json",
                        data: {id: id, name: name, login: login},
                    }).done(function()
                    {
                    });
                    $('.edit_user_form').toggleClass('d-none');
                };
                function updateDish()
                {
                    var id = document.getElementById("did").value;
                    var weight = document.getElementById("dweight").value;
                    var calories = document.getElementById("dcalories").value;
                    var time = document.getElementById("dtime").value;
                    var name = document.getElementById("dname").value;
                    var price = document.getElementById("dprice").value;
                    var img = document.getElementById("img_path").value;
                    $.ajax({
                        type: "POST",
                        url: "/edit_dish.php",
                        dataType: "json",

                        data: {id: id, dish: name, time: time, weight: weight, calories: calories, price: price, img_path: img},
                        success: function(){
                            showDishList();
                        }
                    });
                    $('#editDishPopup').toggleClass('d-none');
                    //showDishList();
                };
                function delDish(id)
                {
                    $.ajax({
                        type: "POST",
                        url: "/delete_dish.php",
                        dataType: "json",
                        data: {id: id},
                    });
                    showDishList();
                }
                function addDish()
                {
                    var $that = $('#dish_form'),
                    formData = new FormData($that.get(0));
                    $.ajax({
                        type: "POST",
                        url: "/add_dish.php",
                        contentType: false,
                        processData: false,
                        data: formData,
                        success: function(){
                            showDishList();
                        }
                    })
                    $('.add_dish_form').toggleClass('d-none');
                };
            </script>
        </main>
</body>
</html>