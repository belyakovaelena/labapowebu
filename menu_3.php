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
                        <a href="menu.php" class="nav-link">Салаты и холодные закуски</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu_2.php" class="nav-link">Первые и вторые блюда</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Десерты и напитки</a>
                    </li>

                </ul>
                <form class="form-inline">
                    <div class="md-form my-0">
                        <input type="text" class="form-control mr-sm-2" placeholder="найти блюдо" aria-label="Search">
                    </div>
                </form>
            </div>
        </nav>

        <section class="text-center mb-4">
            <div class="row wow fadeIn">
                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\18.jpg" alt="шоколадный мусс">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Десерты</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Шоколадный мусс
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

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\74.jpg" alt="мороженное">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Десерты</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">мороженное в ассортименте

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>125 руб.(4 шарика)</strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\56.jpg" alt="смузи">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Напитки</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">смузи в ассортименте
                                        <span class="badge badge-pill danger-color">NEW</span>
                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>65 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\66.jpg" alt="панкейк">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Десерты</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Панкейк cо взбитыми сливками

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>55 руб. (2 шт.)</strong>
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
                            <img class="card-img-top" src="img\46.jpg" alt="компот">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Напитки</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Компот из ягод и фруктов

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>33 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\00.jpg" alt="сангрия">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Напитки</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Сангрия на основе фруктов

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>53 руб </strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\20.jpg" alt="кекс с ягодами">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Десерты</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Горячий шоколадный кекс

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>125 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\777.jpg" alt="глинтвейн">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Напитки</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Глинтвейн с корицей и апельсином-

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>65 руб.</strong>
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
