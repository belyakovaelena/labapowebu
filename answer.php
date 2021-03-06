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
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style_search.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a href="index.php" class="navbar-brand waves-effect">Столовая "У деффчонок!"</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="
			#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="
			Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <ul class="navbar-nav  smooth-scroll">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link waves-effect waves-light">ПОИСК</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div id="intro" class="view">
        <div class="mask rgba-black-strong">
            <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                <div class="row">
                    <div class="col-xs-12">
                    <div class="block" style="background: white">
                        <p>ПО ВАШЕМУ ЗАПРОСУ НАЙДЕНО:</p>
                    <?php
                    if (isset($_SESSION['search_results'])) {

                        foreach ($_SESSION['search_results'] as $result) {
                            $link = $result['link'];
                            $title = $result['title'];
                            $content = $result['content'];
                            echo ("
                                  <a class='search-card' target='_blank' href='$link'>
                                    <div class='search-card__title'>$title</div>
                                    <p class='search-card__body'>$content</p>
                                  </a>
                                  ");
                        }
                    }
                    echo(" 
                      </div>
                    </div>
                    ");
                    unset($_SESSION['search_results']);
                    ?>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</header>
</body>
</html>