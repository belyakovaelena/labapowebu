<?php
session_start();
?>
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
    <?php include_once 'header_for_delivery_and_menu.php'; ?>

</header>

<main class="mt-5 pt-4">
<div class="container">
  <div class="row">
     <!-- Бесплатная доставка -->
    <div class="col-sm">
      <div class="view overlay zoom">
	  <img src="img/dostavka.jpg" alt="Бесплатная доставка" class="img- fluid" align="center">
	  <div class="mask flex-center"></div>
	  </div>
	  <h4 class="my-5 font-weight-bold">от 500 руб</h4>
	  <p > ПЛАТНАЯ ДОСТАВКА </p>
    </div>
	
	<!-- Подарок от 1000 -->
    <div class="col-sm">
      <div class="view overlay zoom">
	  <img src="img/dostavka.jpg" alt="Бесплатная доставка" class="img- fluid">
	  <div class="mask flex-center"></div>
	  </div>
	  
	  <h4 class="my-5 font-weight-bold" >от 1000 руб</h4>
	  <p > БЕСПЛАТНАЯ ДОСТАВКА </p>
	  <p class="grey-text"> морс в подарок </p>
    </div>
	
	<!-- Подарок от 1500 -->
    <div class="col-sm">
      <div class="view overlay zoom">
	  <img src="img/dostavka.jpg" alt="Бесплатная доставка" class="img- fluid">
	  <div class="mask flex-center"></div>
	  </div>
	  
	  <h4 class="my-5 font-weight-bold" >от 1500 руб</h4>
	  <p > БЕСПЛАТНАЯ ДОСТАВКА </p>
	  <p class="grey-text"> 2л колы в подарок  </p>
    </div>
  </div>
</div>

<h3 align="center">ПОЗВОНИТЕ НАМ И СДЕЛАЙТЕ ЗАКАЗ!</h3>
<p></p>
<p></p>


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

	
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->  <!-- Bootstrap tooltips -->

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
