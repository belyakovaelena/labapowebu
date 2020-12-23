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
<main>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">
            <span class="navbar-brand">Меню:</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nextNav" aria-controls="nextNav" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nextNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Салаты и холодные закуски</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu_2.php" class="nav-link">Первые и вторые блюда</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu_3.php" class="nav-link">Десерты и напитки</a>
                    </li>

                </ul>

            </div>
        </nav>

        <section class="text-center mb-4">
            <div class="row wow fadeIn">
                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\oliv.jpg" alt="оливье">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Салат</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Оливье
                                    <span class="badge badge-pill danger-color">NEW</span>
                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>45 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\pitas.jpeg" alt="пита с ветчиной">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Закуска</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Пита с ветчиной
                                        <span class="badge badge-pill danger-color">NEW</span>
                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>125 руб.(2 шт)</strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\midii.jpg" alt="мидии">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Закуска</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Мидии
                                        <span class="badge badge-pill danger-color">NEW</span>
                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>85 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\zezar.png" alt="цезарь">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Салат</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Цезарь
                                        <span class="badge badge-pill danger-color">NEW</span>
                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>75 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="row wow fadeIn">
                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\baklan.jpg" alt="рулетики из баклажанов">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Закуска</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Рулеты из баклажанов

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>73 руб.(2 шт)</strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\vegetabl.jpg" alt="корзинки с овощами">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Закуска</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Овощная корина (помидор/перец)

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>35 руб (1 шт)</strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\ruleti.png" alt="рулеты">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Закуска</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Крабовые рулеты с зеленью

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>85 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\saladmakaron.jpg" alt="салат с макаронами">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Салат</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Макаронный рай (c помидорами)

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>55 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row wow fadeIn">
                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\venegret.jpg" alt="винегрет">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Салат</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Винегрет

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>37 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\kraboviy.jpg" alt="крабовый салат">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Салат</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Крабовые салат

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>45 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\salatik.jpg" alt="салат">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Салат</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Нежный

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>92 руб </strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\kruasani.jpg" alt="круасаны с рыбой">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Закуска</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Круасаны с рыбой

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>68 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <nav class="d-flex justify-content-center wow fadeIn">
            <ul class="pagination pg-blue">
                <li class="page-item disabled">
                    <a href="" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item active">
                    <a href="" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">1</span>
                    </a>
                </li>
                <li class="page-item ">
                    <a href="" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">2</span>
                    </a>
                </li>
                <li class="page-item ">
                    <a href="" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">3</span>
                    </a>
                </li>

                <li class="page-item ">
                    <a href="" class="page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</main>

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
