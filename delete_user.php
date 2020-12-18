<?php
require_once "connect.php";
$id = $_POST['id'];
$mysql->query("DELETE FROM users WHERE id ='$id'");
header('Location: ../outputusers_table.php');