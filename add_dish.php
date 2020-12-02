<?php
require_once "connect.php";
if(!isset($_SESSION['user']))
header('Location: ../register.php');
else{

    $dish = mysqli_real_escape_string($mysql, trim($_POST['dish']));
    $price = mysqli_real_escape_string($mysql, trim($_POST['price']));
    $weight = mysqli_real_escape_string($mysql, trim($_POST['weight']));
    $calories = mysqli_real_escape_string($mysql, trim($_POST['calories']));
    $time = mysqli_real_escape_string($mysql, trim($_POST['time']));
    $user = $_SESSION['login'];




    $mysql->query("INSERT INTO `dish` (`dish`, `price`, `weight`, `calories`, `time`,`user`)VALUES('$dish', '$price', '$weight', '$calories', '$time', '$user')");


    header('Location: ../dish.php');
}
