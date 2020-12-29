<?php
require_once "connect.php";
$id = mysqli_real_escape_string($mysql, trim($_GET['id']));
$sql = "SELECT * FROM `dishes` WHERE `id`='$id'";
$result = $mysql -> query($sql);
$result=$result -> fetch_all();
$result=$result[0];


?>
<div class="form" >
    <h1>РЕДАКТИРОВАТЬ БЛЮДО</h1>
    <form action="" method="post" id="dish_form" enctype="multipart/form-data">
        <div class="input-form">
            <input value="<?php echo $result[0]; ?>" name="id" type="hidden" id="did">
            <input value="<?php echo $result[8]; ?>" name="img_path" type="hidden" id="img_path">
            <input value="<?php echo $result[1]; ?>" type="text" name="dish" id="dname" placeholder="Введите название блюда">
        </div>
        <div class="input-form">
            <input value="<?php echo $result[2]; ?>" type="text" name="price" id="dprice" placeholder="Введите цену блюда(в руб.)">
        </div>
        <div class="input-form">
            <input value="<?php echo $result[3]; ?>" type="text" name="weight" id="dweight" placeholder="Введите вес блюда(в граммах)">
        </div>
        <div class="input-form">
            <input value="<?php echo $result[4]; ?>"  type="text" name="calories" id="dcalories" placeholder="Количество калорий">
        </div>
        <div class="input-form">
            <input value="<?php echo $result[5]; ?>" type="text" name="time" id="dtime" placeholder="Время приготовления(часы:минуты:секунды)">
        </div>
        <div class="example-1">
            <div class="form-group">
                <label class="label">

                    <span class="title">Добавить файл</span>
                    <input type="file" name="file">
                </label>
            </div>
        </div>

        <div class="input-form">
            <button type="button" onclick="updateDish()">ИЗМЕНИТЬ</button>
        </div>
    </form>
</div>
</body>
</html>
