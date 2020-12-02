
<?php
echo"<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>";

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
$sql = "SELECT * FROM `dish`";
$result = $mysql -> query($sql);
$result=$result -> fetch_all();


echo" 

<table class='table table-hover'>
  <thead class='thead-dark'>
    <tr>
      <th scope='col'>БЛЮДО</th>
      <th scope='col''>ЦЕНА</th>
      <th scope='col'>ВЕС</th>
      <th scope='col''>КАЛОРИИ</th>
      <th scope='col''>ВРЕМЯ ГОТОВКИ</th>
      <th scope='col''>ПОЛЬЗОВАТЕЛЬ</th>
    </tr>
  </thead>
  <tbody>
  ";
    foreach($result as $item){
    echo " 
    <tr>
      
      <td>$item[1] </td>
      <td>$item[2] </td>
      <td>$item[3]</td>
      <td>$item[4]</td>
      <td>$item[5]</td>
      <td>$item[6]</td>
    </tr>
    ";
    }
    echo"

</tbody>
    </table>
  <a class='btn btn-outline-primary' href='add_dish.php'>Вернуться назад</a>
  ";

?>