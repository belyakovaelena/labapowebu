<?php
session_start();
if(!isset($_SESSION['user']))
header('Location: ../register.php');
else{
    $dish = filter_var(trim($_POST['dish']), FILTER_SANITIZE_STRING);
    $price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);
    $weight = filter_var(trim($_POST['weight']), FILTER_SANITIZE_STRING);
    $calories = filter_var(trim($_POST['calories']), FILTER_SANITIZE_STRING);
    $time = filter_var(trim($_POST['time']), FILTER_SANITIZE_STRING);
    $user = $_SESSION['login'];



    require_once "connect.php";
    $mysql->query("INSERT INTO `dish` (`dish`, `price`, `weight`, `calories`, `time`,`user`)VALUES('$dish', '$price', '$weight', '$calories', '$time', '$user')");


    header('Location: ../dish.php');
}
