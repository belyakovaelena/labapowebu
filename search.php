<?php
session_start();

function clearQuery($query)
{
  $query = strtolower($query);
  $query = trim($query);
  return $query;
}

function searchOnPage($link, $query, $page_name)//ссылка,выражение(что ищем), ключ
{
  $text = file_get_contents($link);//скачивает информацию со страницы в переменную $text

  //preg_replace ищет теги и убирает
  preg_match("/<body.*\/body>/s", $text, $html_body);//ищет в строке совпадения

  $text = strip_tags($html_body[0]); // оставляет только текст, убирает теги
  $text = mb_strtolower(preg_replace('/\s+/', ' ', $text));
  $pos = strpos($text, $query);//находит позиции 1 появления в строке, $text-чистый текст

  if ($pos === false) {
    return false;
  }
  $searched_query = "";

  if ($pos > 36)
    $searched_query = substr($text, ($pos - 36));
  else
    $searched_query = substr($text, $pos);

  $searched_query = mb_strimwidth($searched_query, 1, 80, "...", mb_internal_encoding());
  $searched_query = str_replace($query, "<b>$query</b>", $searched_query);//$query-что ищем

  $result['content'] = $searched_query;
  $result['link'] = $link;
  $result['title'] = $page_name;
  return $result;
}

$search_query = clearQuery($_POST['search']);

$indexed_pages = [ //ключи
    "menu" => "http://labapowebu//html/menu.html",
    "delivery" => "http://labapowebu//html/delivery.html",
    "Главная страница" => "http://labapowebu/index.php#",
    "Меню" => "http://labapowebu/menu.php",
    "доставка" => "http://labapowebu/delivery.php",
    "Кабинет" => "http://labapowebu/register.php",
];
$indexed_pages = array_slice(scandir('./html/'), 2);
$results = [];

foreach ($indexed_pages as $item) {
  $result = searchOnPage("./html/" . $item, $search_query, ' ');
  if ($result !== false) {
    $results[] = $result;
  }
}

$_SESSION['search_results'] = $results;
$_SESSION['debug'] = $_SERVER['HTTP_REFERER'];
$return_link = $_SERVER['HTTP_REFERER'];

header("Location: answer.php");
