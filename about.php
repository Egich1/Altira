<?php
    session_start();

    if (!isset($_SESSION["login"])) {
        header("Locattion: login.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altiral</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/style-ab.css">

</head>

<body>
    <div class="kontainer">
        <div class="container-pre-head flex-column flex-sm-row">
            <div class="number">
                <p>7(999)999 99-99</p>
            </div>
            <div class="polit text-center text-lg-start">
                <p>
                    ПОЛИТИКА СОГЛАШЕНИЯ | <a href="img/polzovatel.pdf" download>ЧИТАТЬ БОЛЬШЕ</a>
                </p>
            </div>
        </div>

        <header class="header">
            <nav class="navbar navbar-dark navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand me-5 me-0" href="index-log.php"><img src="./img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse py-2" id="navbarNav">
                        <ol class="navbar-nav w-100 me-5 me-0">
                            <ul class="ps-0 pe-0 pe-xl-5 d-flex align-items-center flex-column flex-lg-row text-center text-lg-start d-flex d-lg-none d-xxl-flex">
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">О нас</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#place">Где находимся</a>
                                </li>
                            </ul>

                            <ul class="ps-0 d-flex align-items-center flex-column flex-lg-row text-center text-lg-start">
                                <li class="nav-item">
                                    <a class="nav-link" href="index-log.php">Главная</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="service.php">Услуги</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="profile.php">Профиль</a>
                                </li>
                                <div class="dlina"></div>
								<li class="nav-item">
									<a class="nav-link">Добро пожаловать, <?php echo $_SESSION["login"]; ?>!</a>
								</li>
								<li class="nav-item">
									<a class="btn btn-white py-2 px-4" href="logout.php">Выйти</a>
								</li>
                            </ul>
                        </ol>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container-offer">
            <div class="part1">
                <h1>О нас</h1>
            </div>
            <div class="part2">
                <p>Кто-то может назвать это слоганом, но для нас это образ жизни. Это наша Мантра с понедельника по день. нефильтрованная философия, которая побуждает нас аоздавать сообщество и тренажерный зал для всех.<br />
                    Наша философия тренировок подразумевает наличие места для всех, независимо от формы, размера, возраста, расы, полы или уровная физической подготовки. независимо от того, какую тренирову вы выберете, мы хотим, чтобы вы чувствовали себя хорошо, достигая своих целей. Присоединяйтесь к нам</p>
            </div>
        </div>

        <div class="polka"></div>

        <div class="container-about" id="about">
            <div class="container">
                <div class="row gx-0 gx-xl-5 mb-5">
                    <div class="col-12 col-xl-6 d-flex align-items-center flex-column justify-content-evenly">
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            <img src="img/hr.png">
                            <img class="mx-3" src="img/book.png">
                            <img src="img/hr.png">
                        </div>
                        <h3 class="text-center">Добро пожаловать в нашу семью</h3>
                        <p class="fs-5">
                            Здесь нет никаких суждений - ни слишком много, ни недостаточно. Никаких взглядов неодобрения. Здесь мы стремимся только поощрять, расширять возможности и развлекать. Не существует какого-то одного типа. Нет ни одной причины. Нет Никакого единственного способа То, чем мы являемся - это разнообразное сообщество; это место для всех: самых разных людей с самыми различными целями, которые решили придти и достичь их вместе с нами
                        </p>
                    </div>
                    <div class="col-12 col-xl-6"><img class="img-fluid w-100" src="img/ab1.png" alt="about us 1"></div>
                </div>
                <div class="row gx-0 gx-xl-5 flex-row-reverse mb-5">
                    <div class="col-12 col-xl-6 d-flex align-items-center flex-column justify-content-evenly">
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            <img src="img/hr.png">
                            <img class="mx-3" src="img/book.png">
                            <img src="img/hr.png">
                        </div>
                        <h3 class="text-center">Добро пожаловать в нашу семью</h3>
                        <p class="fs-5">
                            Здесь нет никаких суждений - ни слишком много, ни недостаточно. Никаких взглядов неодобрения. Здесь мы стремимся только поощрять, расширять возможности и развлекать. Не существует какого-то одного типа. Нет ни одной причины. Нет Никакого единственного способа То, чем мы являемся - это разнообразное сообщество; это место для всех: самых разных людей с самыми различными целями, которые решили придти и достичь их вместе с нами
                        </p>
                    </div>
                    <div class="col-12 col-xl-6"><img class="img-fluid w-100" src="img/ab2.png" alt="about us 1"></div>
                </div>
                <div class="row gx-0 gx-xl-5 mb-5">
                    <div class="col-12 col-xl-6 d-flex align-items-center flex-column justify-content-evenly">
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            <img src="img/hr.png">
                            <img class="mx-3" src="img/book.png">
                            <img src="img/hr.png">
                        </div>
                        <h3 class="text-center">Добро пожаловать в нашу семью</h3>
                        <p class="fs-5">
                            Здесь нет никаких суждений - ни слишком много, ни недостаточно. Никаких взглядов неодобрения. Здесь мы стремимся только поощрять, расширять возможности и развлекать. Не существует какого-то одного типа. Нет ни одной причины. Нет Никакого единственного способа То, чем мы являемся - это разнообразное сообщество; это место для всех: самых разных людей с самыми различными целями, которые решили придти и достичь их вместе с нами
                        </p>
                    </div>
                    <div class="col-12 col-xl-6"><img class="img-fluid w-100" src="img/ab3.png" alt="about us 1"></div>
                </div>
            </div>
            <!-- <div class="blok1">
                <div class="odin">
                    <div class="heads">
                        <img src="img/hr.png">
                        <img src="img/book.png">
                        <img src="img/hr.png">
                    </div>
                    <div class="log">
                        <h3>Добро пожаловать в нашу семью</h3>
                    </div>
                    <div class="body">
                        <p>Здесь нет никаких суждений - ни слишком много, ни недостаточно. Никаких взглядов неодобрения. Здесь мы стремимся только поощрять, расширять возможности и развлекать. Не существует какого-то одного типа. Нет ни одной причины. Нет Никакого единственного способа
                            То, чем мы являемся - это разнообразное сообщество; это место для всех: самых разных людей с самыми различными целями, которые решили придти и достичь их вместе с нами</p>
                    </div>
                </div>
                <div class="dwa"></div>
            </div> -->

        </div>

        <div class="container-place" id="place">
            <div class="logo">
                <h1 class="text-center">Найдите нас рядом с собой</h1>
            </div>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <div class="col">
                        <div class="blok">
                            <h2>Вологда</h2>
                            <p>Улица Первомайская 42</p>
                            <p>+7(999)999 99-99</p>
                            <a href="profile.php"><button type="button" class="btn btn-light">ВЫБРАТЬ</button></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="blok">
                            <h2>Вологда</h2>
                            <p>Улица Первомайская 42</p>
                            <p>+7(999)999 99-99</p>
                            <a href="profile.php"><button type="button" class="btn btn-light">ВЫБРАТЬ</button></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="blok">
                            <h2>Вологда</h2>
                            <p>Улица Первомайская 42</p>
                            <p>+7(999)999 99-99</p>
                            <a href="profile.php"><button type="button" class="btn btn-light">ВЫБРАТЬ</button></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="blok">
                            <h2>Вологда</h2>
                            <p>Улица Первомайская 42</p>
                            <p>+7(999)999 99-99</p>
                            <a href="profile.php"><button type="button" class="btn btn-light">ВЫБРАТЬ</button></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="blok">
                            <h2>Вологда</h2>
                            <p>Улица Первомайская 42</p>
                            <p>+7(999)999 99-99</p>
                            <a href="profile.php"><button type="button" class="btn btn-light">ВЫБРАТЬ</button></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="blok">
                            <h2>Вологда</h2>
                            <p>Улица Первомайская 42</p>
                            <p>+7(999)999 99-99</p>
                            <a href="profile.php"><button type="button" class="btn btn-light">ВЫБРАТЬ</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-foot">
            <div class="blok1">
                <div class="soc">
					<a href="404.php"><img src="img/Facebook2.png"></a>
					<a href="404.php"><img src="img/Instagram.png"></a>
					<a href="404.php"><img src="img/vk2.png"></a>
					<a href="404.php"><img src="img/YouTube2.png"></a>
				</div>
                <div class="copyright text-center text-md-start">
                    <p class="odin">© 2023 Сделано Егором</p>
                    <p class="dwa">Все права защищены</p>
                </div>
            </div>
            <div class="blok2">
                <div class="reg">
					<a>Вы зашли под, <?php echo $_SESSION["login"]; ?></a>
					<span class="palka">/</span>
					<a href="logout.php">Выйти</a>
				</div>
                <div class="reg">
					<a href="#">Вернуться в начало</a>
				</div>
                <div class="document">
                    <p><a href="img/polzovatel.pdf" download>УСЛОВИЯ ИСПОЛЬЗОВАНИЯ * ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ * НАСТРОЙКИ ФАЙЛОВ COOKIE</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body>

</html>