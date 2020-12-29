<?php
require_once "connect.php";
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$pass = md5($pass."ktyf0301");


$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass`='$pass'");

$check_if = mysqli_num_rows($result);
$user = $result->fetch_assoc();

if (!$check_if) {
    echo "Неверный логин или пароль или такого пользователя нет
    ";
    ?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    </br><a class="btn btn-secondary" href="register.php">Вернуться назад</a>
    <?php
    //exit();
}
$_SESSION["user"] = $user['name'];
$_SESSION["id"] = $user['id'];
$_SESSION["login"] = $user['login'];
$mysql->close();
header('Location: /register.php');
?>
?>