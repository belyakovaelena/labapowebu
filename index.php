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
  <header>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
		<div class="container">
		
			<a href="#" class="navbar-brand waves-effect">Столовая "У деффчонок!"</a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="
			#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="
			Toggle Navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="basicExampleNav">
				<ul class="navbar-nav  smooth-scroll">
					<li class="nav-item">
						<a href="menu.php" class="nav-link waves-effect waves-light">МЕНЮ</a>
					</li>
					<li class="nav-item">
						<a href="delivery.php" class="nav-link waves-effect waves-light">ДОСТАВКА</a>
					</li>
					<li class="nav-item">
						<a href="#yak1" class="nav-link waves-effect waves-light">АКЦИИ</a>
					</li>
					<li class="nav-item">
						<a href="#yak2" class="nav-link waves-effect waves-light">КОНТАКТЫ</a>
					</li>
					<li class="nav-item">
						<a href="register.php" class="nav-link">Войти/Зарегистрироваться</a>
					</li>
				</ul>

                <?php
                if (!empty($_SESSION['user'])) :
                    ?>

                    <li class="nav-link" >Привет, <?= $_SESSION['user'] ?>.<a href="register.php" > Личный кабинет </a><a href="exit.php" >Выйти</a></li>
                <?php
                endif;
                ?>
	    	</div>
		</div>
	</nav>
	<div id="intro" class="view">
		<div class="mask rgba-black-strong">
			<div class="container-fluid d-flex align-items-center justify-content-center h-100">
				<div class="row d-flex justify-content-center text-center">
				
					<div class="text-center white-text mx-5 wow fadeIn">
						<h1 class="mb-4">
						<strong>Столовая<br>"у деффчонок"</br></strong></h1>
						<hr class="hr-light">
						<h4 class="white-text my-4">Адрес столовой</h4>
					</div>
				</div>
			</div>
		</div> 
	</div>
  </header>
<main class="mt-5">
	<div class="container">
		<section id="best-features" class="text-center">
			<h2 class="mb-5 font-weight-bold">У ДЕФФЧОНОК</h2>
			<div class="row d-flex justify-content-center mb-4">
			<div class="col-md-8">
			<div id="yak1"></div>
				<p class="blue-text">Вкусно, быстро и полезно
				</p>
			</div>
			</div>
		</section>
		
		<hr class="my-5">
		
		<section id="examples" class="text-center">
			<h2 class="mb-5 font-weight-bold">АКЦИИ</h2>
			
			<div id="yak1"></div>
			<div class="row">
				<div class="col-lg-4 col-md-12 mb-4">
					<div class="view overlay zoom">
					<img src="https://cozymoscow.me/wp-content/uploads/2011/08/IMG_0627.jpg" alt="" 
					class="img- fluid"> 
					<div class="mask flex-center"></div>
					</div>
					
					<h4 class="my-5 font-weight-bold">ЗАВТРАКИ</h4>
					<p class="grey-text"> чай+сэндвичи+каша на выбор за 150 руб</p>
				</div>
			<div class="col-lg-4 col-md-6 mb-4">
					<div class="view overlay zoom">
					<img src="https://cozymoscow.me/wp-content/uploads/2011/08/IMG_0617.jpg" alt=""
					class="img- fluid">
					<div class="mask flex-center"></div>
					</div>
					
					<h4 class="my-5 font-weight-bold">КОМПЛЕКСНЫЕ ОБЕДЫ</h4>
					<p class="grey-text"> суп+салат, суп+второе, второе+напиток</p>
				</div>
			<div class="col-lg-4 col-md-6 mb-4">
					<div class="view overlay zoom">
					<img src="https://cozymoscow.me/wp-content/uploads/2011/08/IMG_0658.jpg" alt=""
					class="img- fluid">
					<div class="mask flex-center"></div>
					</div>
					
					<h4 class="my-5 font-weight-bold"><a href="menu.html#yak_drinks"  class="text-dark">НАПИТКИ</a></h4>
					<p class="grey-text"> берешь два напитка а платишь за один </p>
				</div>	
			</div>
		</section>
		
		<hr class="my-5">
		
		<section id="gallery">
			<h2 class="mb-5 font-weight-bold text-center">Фотографии столовой</h2>
			<div class="row">
				<div class="col-md-6 mb-4">
					<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="
					carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-1z" data-slide-to="1" class=""></li>
							<li data-target="#carousel-example-1z" data-slide-to="2" class=""></li>
						</ol>
						
						<div class="carousel-inner z-depth-1-half" role="list box">
							<div class="carousel-item active">
								<img src="https://cdn.artcer.ru/files/pics/article/ev1b8670-hdr.jpg" alt="" class="d-block w-100">
								
							</div>
							<div class="carousel-item">
								<img src="https://cdn.artcer.ru/files/pics/article/img_9636_1.jpg" alt="" class="d-block w-100">
								
							</div>
							<div class="carousel-item">
								<img src="https://addawards.ru/upload/iblock/698/0C3A7354_web.jpg" alt="" class="d-block w-100">
								
							</div>
						</div>
						
						<a href="#carousel-example-1z" class="carousel-control-prev" role="button"
						data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						</a> 
						<a href="#carousel-example-1z" class="carousel-control-next" role="button"
						data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
						</a>
						
						
					</div>
				</div>
				
				<div class="col-md-6">
					<h4 class="mb-3">
						<strong>ТУТ МОЖНО ПОСМОТРЕТЬ НАШУ СТОЛОВУЮ</strong>
					</h4>
					<p>тут есть красивые фотографии</p>
					<p>в столовой вкусно, полезно и главное бюджетно</p>
					<p>мы делали этот сайт с любовью</p>
					<p>надеемся, что вам понравится</p>
					<p>by <a><strong>студентки группы пмиб-181</strong></a>,09/2020 </p>
				</div>					
			</div>
		</section>
	</div>
</main>

	<footer class="page-footer font-small unique-color-dark pt-0">
		<div class="primary-color">
			<div class="container">
				<div class="row py-4 d-flex align-items-center">
					<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 md-md-0">
						<h6 class="mb-0 white-text"> ТУТ МОГЛА БЫТЬ ВАША РЕКЛАМА</h6>
					</div>
					
				</div>
			</div>
		</div>
		<div id="yak2"></div>
		<div class="container mt-5 mb-4 text-center text-md-left">
			<div class="row mt-3">
				<div class="col-md-3 col-lg-4 col-xl-3 mb-4">
					<h5 class="text-uppercase font-weight-bold">контакты</h5>
						<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 110px;">
							<p>номер телефона  - 88005553535 </p>
							<p>номер телефона  - 88005553232 </p>
							<p>почта - deffchonki@mail.ru </p>
				</div>
			</div>
		</div>
	</footer>
  <!-- End your project here-->

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
