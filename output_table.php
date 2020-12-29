
<?php
echo"<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>";
//echo"<link rel='stylesheet' href='css/style_search.css'>";
$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
$sql = "SELECT * FROM `dishes`";
$result = $mysql -> query($sql);
$result=$result -> fetch_all();


?>
<div class="form add_dish_form d-none" >
    <h1>ДОБАВИТЬ БЛЮДО</h1>
    <form action="" method="post" id="dish_form" enctype="multipart/form-data">
        <div class="input-form">
            <input type="text" name="dish" id="name" placeholder="Введите название блюда">
        </div>
        <div class="input-form">
            <input type="text" name="price" id="price" placeholder="Введите цену блюда(в руб.)">
        </div>
        <div class="input-form">
            <input type="text" name="weight" id="weight" placeholder="Введите вес блюда(в граммах)">
        </div>
        <div class="input-form">
            <input type="text" name="calories" id="calories" placeholder="Количество калорий">
        </div>
        <div class="input-form">
            <input type="text" name="time" id="time" placeholder="Время приготовления(часы:минуты:секунды)">
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
            <button type="button" onclick="addDish()">ДОБАВИТЬ</button>
        </div>
    </form>
</div>
<div class="d-none" id="editDishPopup"></div>
<table class='table' style="color: white;">

<input type='hidden' value="<?php $result[0]?>" id="id">
  <thead class='thead-dark'>
    <tr>
      <th scope='col'>БЛЮДО</th>
        <th scope='col''>ИЗОБРАЖЕНИЕ</th>
      <th scope='col''>ЦЕНА</th>
      <th scope='col'>ВЕС</th>
      <th scope='col''>КАЛОРИИ</th>
      <th scope='col''>ВРЕМЯ ГОТОВКИ</th>
      <th scope='col''>ПОЛЬЗОВАТЕЛЬ</th>

      <th scope='col''></th>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach($result as $item){
    $path="http://labapowebu/downloads/";
    $img_path = $path . $item[8] . ".jpg";
    echo "
    
    <tr id='$item[0]'>
      <td>$item[1] </td> 
      <td><img src='$img_path' width='90' height='80'></td>
      
      
      <td>$item[2] </td>
      <td>$item[3]</td>
      <td>$item[4]</td>
      <td>$item[5]</td>
      <td>$item[6] <br><form action='profile.php' method='post' id='edit_form'>
        <input type='hidden' value='$item[7]' name='id' id='id'>
        
      <button class='btn btn-outline-primary' type='submit'>посмотреть инфу о пользователе</button>
      
      </form>
      <td> 
        <button class='btn btn-outline-primary edit_dish' onclick='editDish($item[0])'>редактировать</button>
        <button class='btn btn-outline-primary edit_dish' onclick='delDish($item[0])'>удалить</button>
      
      </td>
    </tr>
   
   ";
    }
   ?>

</tbody>
    </table>
<button class='btn btn-outline-primary add_dish'>Добавить блюдо</button>
<script type="text/javascript">
    $('.edit_dish').click(function(){
        $('#editDishPopup').toggleClass('d-none');
    });
    $('.add_dish').click(function(){
        $('.add_dish_form').toggleClass('d-none');
    });
    function editDish(id)
    {
        $("#editDishPopup").load("/dish_edit_view.php?id="+id);
    }
</script>


