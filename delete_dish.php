<?php
require_once "connect.php";

$id = mysqli_real_escape_string($mysql, trim($_POST['id']));
$mysql->query("DELETE FROM dishes WHERE id ='$id'");
//header('Location: ../output_table.php');