<?php
session_start();
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 50) {
    echo "Недопустимая длина логина";
    exit();
} else if(mb_strlen($name) < 2 || mb_strlen($name) > 50) {
    echo "Недопустимая длина имени";
    exit();
} else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 10) {
    echo "Недопустимая длина пароля (от 2 до 10 символов)";

    exit();
}
$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
$query = "SELECT * FROM `users` WHERE login = '$login'";

$data = mysqli_query($mysql, $query);

if(mysqli_num_rows($data) == 0) {
//регистрируешь
    $pass = md5($pass."ktyf0301");

    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");
    $mysql->close();
    $_SESSION['user']='';
    header('Location: ../register.php');
}else {
//занят
    echo "Логин занят";
}



