<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Онлайн столовая "У деффчонок"</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header id="menu">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
<div class="container">

<a href="index.php" class="navbar-brand waves-effect">Столовая "У деффчонок!"</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle Navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="basicExampleNav">
<ul class="navbar-nav mr-auto smooth-scroll">
<li class="nav-item">
<a href="menu.php" class="nav-link waves-effect waves-light">МЕНЮ</a>
</li>
<li class="nav-item">
<a href="delivery.php" class="nav-link waves-effect waves-light">ДОСТАВКА</a>
</li>
<li class="nav-item">
<a href="index.php#yak1" class="nav-link waves-effect waves-light">АКЦИИ</a>
</li>
    <li class="nav-item">
        <a href="register.php" class="nav-link">ВОЙТИ/ЗАРЕГИСТРИРОВАТЬСЯ</a>
    </li>
</ul>

    <?php
    if (!empty($_COOKIE['user'])) :
        ?>
        <li class="nav-link" >Привет, <?= $_COOKIE['user'] ?>.<a href="register.php" > Личный кабинет </a><a href="exit.php" >Выйти</a></li>
    <?php
    endif;
    ?>
</div>
</nav>

<div class="text-center mb-4">
<h1 align="center" class="text-uppercase font-weight-bold" id="h1_for_menu">МЕНЮ</h1>
</div>

</header>

<main class="mt-5 pt-4">

<div class="container">
  <div class="row">
  
    <!-- first column -->
    <div class="col-sm">
	
    <div class="view overlay zoom">
	<img src="img/img_salad.jpg" alt="Салаты" class="img- fluid"> 
	<div class="mask flex-center"></div>
	</div>
	
	<h4 class="my-5 font-weight-bold" align="center"><a href="#yak_salad" class="text-dark">Салаты</a></h4>
	
    </div>
	
	
	<!-- second column -->
    <div class="col-sm">
	  <div class="view overlay zoom">
	  <img src="img/img_soup.jpg" alt="Супы" class="img- fluid">
	  <div class="mask flex-center"></div>
	  </div> 
	  
	  <h4 class="my-5 font-weight-bold" align="center"><a href="#yak_soup" class="text-dark">Первые блюда</a></h4>
	  
    </div>
	
	<!-- third column -->
    <div class="col-sm">
      <div class="view overlay zoom">
	  <img src="img/img_chicken.jpg" alt="Вторые блюда" class="img- fluid">
	  <div class="mask flex-center"></div>
	  </div>
	  
	  <h4 class="my-5 font-weight-bold" align="center"><a href="#yak_meal" class="text-dark">Вторые блюда</a></h4>
    </div>
	
	<!-- 4th column -->
	<div class="col-sm">
      <div class="view overlay zoom">
	  <img src="img/img_bakery.jpg" alt="Выпечка" class="img- fluid">
	  <div class="mask flex-center"></div>
	  </div>
	  
	  <h4 class="my-5 font-weight-bold" align="center"><a href="#yak_bakery" class="text-dark">Выпечка</a></h4>
    </div>

	<!-- 5th column -->
    <div class="col-sm">
      <div class="view overlay zoom">
	  <img src="img/img_teacoffee.jpg" alt="Напитки" class="img- fluid">
	  <div class="mask flex-center"></div>
	  </div>
	  
	  <h4 class="my-5 font-weight-bold" align="center"><a href="#yak_drinks" class="text-dark">Напитки</a></h4>
    </div>
  </div>
</div>

<section class="text-center mb-4">
<div class="container">
<div class="media-container-row">
 <div id="box">
 <div> <h1 align="center" id="yak_salad">Салаты и холодные закуски<h1></div>
</div>
</div>
</div>
</section>


<section class="section-table">
<div class="container container-table">
<div class="table-wrapper">
<div class="container scroll">
<table class="table">
<thead>
<tr class="table-heads">
<th class="head-item mbr-fonts-style display-7">ПОРЦИЯ</th>
<th class="head-item mbr-fonts-style display-7">НАЗВАНИЕ</th>
<th class="head-item mbr-fonts-style display-7">СТОИМОСТЬ</th></tr></thead>
<tbody>
<tr><td class="body-item mbr-fonts-style display-7">100</td><td class="body-item mbr-fonts-style display-7">Салат «Крабовый» </td><td class="body-item mbr-fonts-style display-7">45-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">100</td><td class="body-item mbr-fonts-style display-7">Салат «Оливье»</td><td class="body-item mbr-fonts-style display-7">45-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">100</td><td class="body-item mbr-fonts-style display-7">Салат из квашеной капусты с клюквой</td><td class="body-item mbr-fonts-style display-7">35-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">100</td><td class="body-item mbr-fonts-style display-7">Салат «Витаминный»</td><td class="body-item mbr-fonts-style display-7">36-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">100</td><td class="body-item mbr-fonts-style display-7">Салат «Морковь по-корейски»</td><td class="body-item mbr-fonts-style display-7">35-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">100</td><td class="body-item mbr-fonts-style display-7">Салат из свежих огурцов с помидорами</td><td class="body-item mbr-fonts-style display-7">45-00</td></tr>
</tbody>
</table>
</div>
</div>
</div>
</section>

<section class="text-center mb-4">
<div class="container">
<div class="media-container-row">
 <div id="box">
 <div> <h1 align="center" id="yak_soup">Первые блюда<h1></div>
</div>
</div>
</div>
</section>

<section class="section-table">
<div class="container container-table">
<div class="table-wrapper">
<div class="container scroll">
<table class="table">
<thead>
<tr class="table-heads ">
<th class="head-item mbr-fonts-style display-7">ПОРЦИЯ</th>
<th class="head-item mbr-fonts-style display-7">НАЗВАНИЕ</th>
<th class="head-item mbr-fonts-style display-7">СТОИМОСТЬ</th></tr></thead>
<tbody>
<tr><td class="body-item mbr-fonts-style display-7">300</td><td class="body-item mbr-fonts-style display-7">Щи из свежей капусты </td><td class="body-item mbr-fonts-style display-7">50-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">300</td><td class="body-item mbr-fonts-style display-7">Борщ со сметаной</td><td class="body-item mbr-fonts-style display-7">55-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">300</td><td class="body-item mbr-fonts-style display-7">Суп куриный с лапшой</td><td class="body-item mbr-fonts-style display-7">50-00</td></tr>
</tbody>
</table>
</div>
</div>
</div>
</section>

<section class="text-center mb-4">
<div class="container">
<div class="media-container-row">
 <div id="box">
 <div> <h1 align="center" id="yak_meal">Вторые блюда<h1></div>
</div>
</div>
</div>
</section>

<section class="section-table">
<div class="container container-table">
<div class="table-wrapper">
<div class="container scroll">
<table class="table">
<thead>
<tr class="table-heads ">
<th class="head-item mbr-fonts-style display-7">ПОРЦИЯ</th>
<th class="head-item mbr-fonts-style display-7">НАЗВАНИЕ</th>
<th class="head-item mbr-fonts-style display-7">СТОИМОСТЬ</th></tr></thead>
<tbody>
<tr><td class="body-item mbr-fonts-style display-7">100</td><td class="body-item mbr-fonts-style display-7">Котлета куриная </td><td class="body-item mbr-fonts-style display-7">55-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">2шт./100</td><td class="body-item mbr-fonts-style display-7">Сосиски отварные </td><td class="body-item mbr-fonts-style display-7">40-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">150</td><td class="body-item mbr-fonts-style display-7">Свинина  с помидорами под сырным соусом</td><td class="body-item mbr-fonts-style display-7">85-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">150</td><td class="body-item mbr-fonts-style display-7">Куриное филе с шампиньонами под сырным соусом</td><td class="body-item mbr-fonts-style display-7">75-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">140</td><td class="body-item mbr-fonts-style display-7">Бедро куриное жареное</td><td class="body-item mbr-fonts-style display-7">70-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">120</td><td class="body-item mbr-fonts-style display-7">Фрикадельки</td><td class="body-item mbr-fonts-style display-7">55-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">100</td><td class="body-item mbr-fonts-style display-7">Рулетик фаршированный сыром</td><td class="body-item mbr-fonts-style display-7">61-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">150</td><td class="body-item mbr-fonts-style display-7">Буженина</td><td class="body-item mbr-fonts-style display-7">80-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">100</td><td class="body-item mbr-fonts-style display-7">Пельмени русские</td><td class="body-item mbr-fonts-style display-7">45-00</td></tr>
</tbody>
</table>
</div>
</div>
</div>
</section>

<section class="text-center mb-4">
<div class="container">
<div class="media-container-row">
 <div id="box">
 <div> <h1 align="center">Гарниры<h1></div>
</div>
</div>
</div>
</section>

<section class="section-table">
<div class="container container-table">
<div class="table-wrapper">
<div class="container scroll">
<table class="table">
<thead>
<tr class="table-heads ">
<th class="head-item mbr-fonts-style display-7">ПОРЦИЯ</th>
<th class="head-item mbr-fonts-style display-7">НАЗВАНИЕ</th>
<th class="head-item mbr-fonts-style display-7">СТОИМОСТЬ</th></tr></thead>
<tbody>
<tr><td class="body-item mbr-fonts-style display-7">150</td><td class="body-item mbr-fonts-style display-7">Макароны с сыром </td><td class="body-item mbr-fonts-style display-7">25-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">200</td><td class="body-item mbr-fonts-style display-7">Каша гречневая</td><td class="body-item mbr-fonts-style display-7">25-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">200</td><td class="body-item mbr-fonts-style display-7">Картофельное пюре</td><td class="body-item mbr-fonts-style display-7">30-00</td></tr>
</tbody>
</table>
</div>
</div>
</div>
</section>


<section class="text-center mb-4">
<div class="container">
<div class="media-container-row">
 <div id="box">
 <div> <h1 align="center" id="yak_bakery">Выпечка<h1></div>
</div>
</div>
</div>
</section>

<section class="section-table">
<div class="container container-table">
<div class="table-wrapper">
<div class="container scroll">
<table class="table">
<thead>
<tr class="table-heads ">
<th class="head-item mbr-fonts-style display-7">ПОРЦИЯ</th>
<th class="head-item mbr-fonts-style display-7">НАЗВАНИЕ</th>
<th class="head-item mbr-fonts-style display-7">СТОИМОСТЬ</th></tr></thead>
<tbody>
<tr><td class="body-item mbr-fonts-style display-7">30</td><td class="body-item mbr-fonts-style display-7">Хлеб</td><td class="body-item mbr-fonts-style display-7">2-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">80</td><td class="body-item mbr-fonts-style display-7">Слойка с ветчиной и сыром </td><td class="body-item mbr-fonts-style display-7">25-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">90</td><td class="body-item mbr-fonts-style display-7">Сосиска в тесте</td><td class="body-item mbr-fonts-style display-7">19-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">80</td><td class="body-item mbr-fonts-style display-7">Беляш</td><td class="body-item mbr-fonts-style display-7">40-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">100</td><td class="body-item mbr-fonts-style display-7">Сочник</td><td class="body-item mbr-fonts-style display-7">22-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">100</td><td class="body-item mbr-fonts-style display-7">Корзиночка с творожной массой и ягодой</td><td class="body-item mbr-fonts-style display-7">55-00</td></tr>
</tbody>
</table>
</div>
</div>
</div>
</section>

<section class="text-center mb-4">
<div class="container">
<div class="media-container-row">
 <div id="box">
 <div> <h1 align="center" id="yak_drinks">Напитки<h1></div>
</div>
</div>
</div>
</section>

<section class="section-table">
<div class="container container-table">
<div class="table-wrapper">
<div class="container scroll">
<table class="table">
<thead>
<tr class="table-heads ">
<th class="head-item mbr-fonts-style display-7">ПОРЦИЯ</th>
<th class="head-item mbr-fonts-style display-7">НАЗВАНИЕ</th>
<th class="head-item mbr-fonts-style display-7">СТОИМОСТЬ</th></tr></thead>
<tbody>
<tr><td class="body-item mbr-fonts-style display-7">200</td><td class="body-item mbr-fonts-style display-7">Чай с лимоном</td><td class="body-item mbr-fonts-style display-7">20-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">90/150</td><td class="body-item mbr-fonts-style display-7">Кофе эспрессо ст./большой</td><td class="body-item mbr-fonts-style display-7">45-00/60-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">200</td><td class="body-item mbr-fonts-style display-7">Капучино</td><td class="body-item mbr-fonts-style display-7">65-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">200</td><td class="body-item mbr-fonts-style display-7">Американо</td><td class="body-item mbr-fonts-style display-7">60-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">200</td><td class="body-item mbr-fonts-style display-7">Горячий шоколад</td><td class="body-item mbr-fonts-style display-7">50-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">500</td><td class="body-item mbr-fonts-style display-7">Вода минеральная газ./негаз.</td><td class="body-item mbr-fonts-style display-7">25-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">330/500</td><td class="body-item mbr-fonts-style display-7">Пепси</td><td class="body-item mbr-fonts-style display-7">35-00/55-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">330/500</td><td class="body-item mbr-fonts-style display-7">Фанта</td><td class="body-item mbr-fonts-style display-7">35-00/55-00</td></tr>
<tr><td class="body-item mbr-fonts-style display-7">330/500</td><td class="body-item mbr-fonts-style display-7">Кола</td><td class="body-item mbr-fonts-style display-7">35-00/55-00</td></tr>
</tbody>
</table>
</div>
</div>
</div>
</section>

</main>

<footer class="page-footer font-small unique-color-dark pt-0">
<div class="primary-color">
<div class="container">
<div class="row py-4 d-flex align-items-center">
<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 md-md-0">
<h6 class="mb-0 white-text"> Адрес столовой</h6>
</div>

</div>
</div>
</div>


<div class="container mt-5 mb-4 text-center text-md-left">
<div class="row mt-3">
<div class="col-md-3 col-lg-4 col-xl-3 mb-4">
<h5 class="text-uppercase font-weight-bold">контакты</h5>
<hr class="deep-purple5 accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 110px;">
<p>номер телефона - 949693695397370 </p>
<p>почта - авртыщшарт@mail.ru </p>
<p>номер телефона - 949693695397370 </p>
</div>
</div>
</div>
</footer>

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
