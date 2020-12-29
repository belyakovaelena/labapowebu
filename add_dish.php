<?php
require_once "connect.php";
require_once "functions.php";
if(!isset($_SESSION['user']))
header('Location: ../register.php');
else{

    $dish = mysqli_real_escape_string($mysql, trim($_POST['dish']));
    $price = mysqli_real_escape_string($mysql, trim($_POST['price']));
    $weight = mysqli_real_escape_string($mysql, trim($_POST['weight']));
    $calories = mysqli_real_escape_string($mysql, trim($_POST['calories']));
    $time = mysqli_real_escape_string($mysql, trim($_POST['time']));
    $user_id = mysqli_real_escape_string($mysql, trim($_SESSION['id']));
    $user = $_SESSION['login'];


    // если была произведена отправка формы
    if (isset($_FILES['file'])) {
        // проверяем, можно ли загружать изображение
        $check = can_upload($_FILES['file']);

        if ($check === true) {
        $uuid=uuid4();
        $file=$_FILES['file'];
        copy($file['tmp_name'], 'downloads/' . $uuid . '.jpg');
        }
    }


    $mysql->query("INSERT INTO `dishes` (`dish`, `price`, `weight`, `calories`, `time`,`user`,`user_id`,`img`)
    VALUES('$dish', '$price', '$weight', '$calories', '$time', '$user','$user_id','$uuid')");

    //header('Location: ../dish.php');
}
