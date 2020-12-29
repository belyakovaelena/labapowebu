<?php
echo"<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>";

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
$sql = "SELECT * FROM `users`";
$result = $mysql -> query($sql);
$result=$result -> fetch_all();

?>
<table class='table table-hover' style="color: white;">

    <input type='hidden' value="<?php $result[0]?>" id="id">
    <thead class='thead-dark'>
    <tr>
        <th scope='col'>ЛОГИН</th>
        <th scope='col'>ИМЯ</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($result as $item){

        echo "
    
    <tr id='$item[0]'>
      <td>$item[1] </td> 
      
      <td>$item[3] <form action='profile.php' method='post' id='edit_form'>
        <input type='hidden' value='$item[0]' name='id' id='id'>
        
      <button class='btn btn-outline-primary' type='submit'>посмотреть инфу о пользователе</button>
      
      </form></td>
      
      </td>
    </tr>
   
   ";
    }
    ?>

    </tbody>
</table>

