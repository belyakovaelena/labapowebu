<?php
session_start();
$dish = filter_var(trim($_POST['dish']), FILTER_SANITIZE_STRING);
$price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);
$weight = filter_var(trim($_POST['weight']), FILTER_SANITIZE_STRING);
$calories = filter_var(trim($_POST['calories']), FILTER_SANITIZE_STRING);
$time = filter_var(trim($_POST['time']), FILTER_SANITIZE_STRING);




$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
$mysql->query("INSERT INTO `dish` (`dish`, `price`, `weight`, `calories`, `time`) VALUES('$dish', '$price', '$weight', '$calories', '$time')");
$mysql->close();

header('Location: ../dish.php');
?>
?>