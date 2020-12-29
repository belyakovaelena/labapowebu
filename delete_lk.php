<?php
require_once "connect.php";

$name = $_SESSION['user'];
$mysql->query("DELETE FROM `users` WHERE `name` = '$name' ");
unset($_SESSION['user']);
unset($_SESSION['name']);
header('Location: /register.php');