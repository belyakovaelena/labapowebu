<?php
session_start();
require_once "connect.php";
function clear_query($query)
{
    $query = strtolower($query);
    $query = trim($query);
    return $query;
}


$search_query=trim(strip_tags(stripcslashes(htmlspecialchars($_POST["search"]))));

if(strlen($search_query)>0){

    $results = [];
    $products = [];

    $us = $mysql->query("SELECT * FROM `users` WHERE `login` LIKE '%$search_query%' OR `name` LIKE '%$search_query%';");
    $us=$us -> fetch_all();

    foreach($us as $product) {
        $result = [];
        $result[0]=$product[0];
        $result['content'] = "login ". $product['1'];
        $result['title'] = $product[3];
        $results[] = $result;
    }

    $_SESSION['search_results'] = $results;

}

header('Location: answer_users.php');
