<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."ktyf0301");

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass`='$pass'");

$check_if = mysqli_num_rows($result);
$user = $result->fetch_assoc();
if (!$check_if) {
    echo "Неверный логин или пароль";
    ?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    </br><a class="btn btn-secondary" href="registr.php">Вернуться назад</a>
<?php
    exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();

header('Location: ../registr.php');
?>
?>