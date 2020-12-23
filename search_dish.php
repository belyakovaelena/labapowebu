<?php
session_start();
require_once "connect.php";
function clear_query($query)
{
    $query = strtolower($query);
    $query = trim($query);
    return $query;
}


$search_query = clear_query($_POST['search']);
if(strlen($search_query)>0){

    $results = [];
    $products = [];

    $dishes = $mysql->query("SELECT * FROM `dishes` WHERE  `dish`= '$search_query' OR `weight`= '$search_query' OR `calories` = '$search_query' OR `price` = '$search_query';");

    $dishes=$dishes -> fetch_all();


    foreach($dishes as $product) {
        $result = [];
        $result[0]=$product[0];
        $result['content'] = "Price ". $product['2'];
        $result['title'] = $product[1];
        $results[] = $result;
    }

    $_SESSION['search_results'] = $results;

}

header('Location: answer_dish.php');
