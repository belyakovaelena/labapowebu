<?php
require_once "connect.php";
$id = $_POST['id'];
$mysql->query("DELETE FROM dish WHERE id ='$id'");
header('Location: ../output_table.php');