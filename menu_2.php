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
                        <a href="#" class="nav-link">Первые и вторые блюда</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu_3.php" class="nav-link">Десерты и напитки</a>
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
                            <img class="card-img-top" src="img\12.jpg" alt="мясо с овощами">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Второе</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Мясо с овощами
                                        <span class="badge badge-pill danger-color">NEW</span>
                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>138 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\13.jpg" alt="ребрышки">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Второе</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Ребрышки
                                        <span class="badge badge-pill danger-color">NEW</span>
                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>225 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\14.jpg" alt="гуляш">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Второе</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Гуляш
                                        <span class="badge badge-pill danger-color">NEW</span>
                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>155 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\21.jpg" alt="свинина">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Второе</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Свинина
                                        <span class="badge badge-pill danger-color">NEW</span>
                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>175 руб.</strong>
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
                            <img class="card-img-top" src="img\22.jpeg" alt="суп из брокколи">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Первое</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">суп с брокколи и курицей

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>123 руб</strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\23.jpg" alt="запеченые овощи">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Второе</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Запеченые овощи с травами

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>87 руб</strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\25.jpg " alt="плов">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Второе</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Плов с курицей и овощами

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>95 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\26.jpg" alt="куриный суп">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Первое</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Куриный суп со сметаной

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>95 руб.</strong>
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
                            <img class="card-img-top" src="img\31.jpg" alt="шашлык">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Второе</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Шашлык

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>120 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\32.jpg" alt="суп из томатов">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Первое</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Томатный суп

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>105 руб.</strong>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 nb-4">
                    <div class="card">

                        <div class="view overlay">
                            <img class="card-img-top" src="img\33.jpg" alt="суп сырный ">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Первое</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Сырный суп

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
                            <img class="card-img-top" src="img\34.jpg" alt="котлета с пюре">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body text-center">
                            <a href="" class="grey-text">
                                <h5>Второе</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href="#" class="dark-grey-text">Котлета с пюре

                                    </a>
                                </strong>
                            </h5>
                            <h4 class="font-weight-bold blue-text">
                                <strong>114 руб.</strong>
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