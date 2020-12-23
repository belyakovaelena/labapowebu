<?php
require_once "connect.php";
require_once "functions.php";
if(!isset($_SESSION['user']))
    header('Location: ../register.php');
else{
    $id = mysqli_real_escape_string($mysql, trim($_POST['id']));
    $dish = mysqli_real_escape_string($mysql, trim($_POST['dish']));
    $price = mysqli_real_escape_string($mysql, trim($_POST['price']));
    $weight = mysqli_real_escape_string($mysql, trim($_POST['weight']));
    $calories = mysqli_real_escape_string($mysql, trim($_POST['calories']));
    $time = mysqli_real_escape_string($mysql, trim($_POST['time']));
    $user = $_SESSION['login'];
    $user_id = mysqli_real_escape_string($mysql, trim($_SESSION['id']));
    $uuid = mysqli_real_escape_string($mysql, trim($_POST['img_path']));
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

    $mysql->query("UPDATE dishes SET dish='$dish' , price='$price', weight='$weight', calories='$calories', time='$time', user='$user',
    user_id='$user_id',img='$uuid' WHERE id ='$id'");

    header('Location: ../dish_edit_view.php');
}