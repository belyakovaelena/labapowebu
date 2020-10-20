<?php
session_start();


function clearQuery($query)
{
  $query = strtolower($query);
  $query = trim($query);
  return $query;
}

function searchOnPage($link, $query, $page_name)
{
  $text = file_get_contents($link);
  $text = preg_replace('/(<(style)\b[^>]*>).*?(<\/\2>)/is', "$1$3", $text);
  preg_match("/<body.*\/body>/s", $text, $html_body);

  $text = strip_tags($html_body[0]); // pure text from page
  $text = mb_strtolower(preg_replace('/\s+/', ' ', $text));

  $pos = strpos($text, $query);

  if ($pos === false) {
    return false; // query doesn't exist
  }

  $searched_query = "";

  if ($pos > 16)
    $searched_query = substr($text, ($pos - 16));
  else
    $searched_query = substr($text, $pos);

  // $searched_query = implode(" ", $searched_query);
  $searched_query = mb_strimwidth($searched_query, 1, 120, "...", mb_internal_encoding());
  $searched_query = str_replace($query, "<b>$query</b>", $searched_query);

  $result['content'] = $searched_query;
  $result['link'] = $link;
  $result['title'] = $page_name;
  return $result;
}

$search_query = clearQuery($_POST['search']);
$indexed_pages = [
  "Главная страница" => "http://labapowebu/index.php#",
  "Меню" => "http://labapowebu/menu.php",
  "доставка" => "http://labapowebu/delivery.php",
  "Кабинет" => "http://labapowebu/register.php",

];
$results = [];

foreach (array_keys($indexed_pages) as $item) {
  $result = searchOnPage($indexed_pages[$item], $search_query, $item);
  if ($result !== false) {
    $results[] = $result;
  }
}

$_SESSION['search_results'] = $results;
$_SESSION['debug'] = $_SERVER['HTTP_REFERER'];

$return_link = $_SERVER['HTTP_REFERER'];

header("Location: answer.php");
