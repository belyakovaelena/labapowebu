<?php
require_once "connect.php";
require_once "functions.php";
if(!isset($_SESSION['user']))
    header('Location: ../register.php');
else{
    $id = mysqli_real_escape_string($mysql, trim($_POST['id']));
    $login = mysqli_real_escape_string($mysql, trim($_POST['login']));
    $name = mysqli_real_escape_string($mysql, trim($_POST['name']));

  // $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);




    $mysql->query("UPDATE users SET login='$login' , name='$name' WHERE id ='$id'");

    header('Location: ../user_edit_view.php');
}