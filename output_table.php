
<?php
echo"<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>";

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
$sql = "SELECT * FROM `dish`";
$result = $mysql -> query($sql);
$result=$result -> fetch_all();


?>

<table class='table table-hover'>

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
    $img_path = $path . $item[7] . ".jpg";
    echo "
    
    <tr>
      <td>$item[1] </td> 
      <td><img src='$img_path' width='90' height='80'></td>
      
      
      <td>$item[2] </td>
      <td>$item[3]</td>
      <td>$item[4]</td>
      <td>$item[5]</td>
      <td>$item[6] <br><form action='profile.php' method='post' id='edit_form'>
        <input type='hidden' value='$item[6]' name='login' id='login'>
        
      <button class='btn btn-outline-primary' type='submit'>посмотреть инфу о пользователе</button>
      
      </form>
      <td> 
        <form action='dish_edit_view.php' method='post' id='edit_form'>
        <input type='hidden' value='$item[0]' name='id' id='id'>
        
      <button class='btn btn-outline-primary' type='submit'>редактировать</button>
      
      </form>
     
     <form action='delete_dish.php' method='post' id='edit_form' >
        <input type='hidden' value='$item[0]' name='id' id='id'>
        
      <button class='btn btn-outline-primary' type='submit'>удалить</button>
      </form> 
      
      </td>
    </tr>
   
   ";
    }
   ?>

</tbody>
    </table>
  <a class='btn btn-outline-primary' href='add_dish.php'  >Вернуться назад</a>
<a class='btn btn-outline-primary' href='outputusers_table.php'  >посмотреть всех пользователей</a>


