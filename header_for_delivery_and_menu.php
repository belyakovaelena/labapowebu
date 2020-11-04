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

                    <?php
                    if(empty($_SESSION['user'])){
                        ?>

                        <li class="nav-item">
                            <a href="register.php" class="nav-link">ВОЙТИ/ЗАРЕГИСТРИРОВАТЬСЯ</a>
                        </li>
                        <?php
                    }
                    ?>
                    <li class="nav-item">
                        <a href="dish.php" class="nav-link">ДОБАВИТЬ БЛЮДО
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="#" class="nav-link waves-effect">
                            <span class="bage red z-depth-1 mr-1">12</span>
                            <i class="fa fa-shopping-cart"></i>
                            <span class="clearfix d-none d-sm-inline-block">Корзина</span>
                        </a>
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
    </nav>

</header>
