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
	<link rel="stylesheet" href="css/style.css">
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
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
						aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse py-2" id="navbarNav">
						<ol class="navbar-nav w-100 me-0 me-0">
							<ul class="ps-0 pe-0 pe-xl-5 d-flex align-items-center flex-column flex-lg-row text-center text-lg-start d-flex d-lg-none d-xxl-flex">
								<li class="nav-item">
									<a class="nav-link active" href="#rule1">Правило 1</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#rule2">Правило 2</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#rule3">Правило 3</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#rule4">Правило 4</a>
								</li>
							</ul>
							<div class="dlina"></div>
							<ul class="ps-0 d-flex align-items-center flex-column flex-lg-row text-center text-lg-start">
								<li class="nav-item">
									<a class="nav-link" href="about.php">О нас</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="service.php">Услуги</a>
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
			<div class="text">
				<div class="off">
					<h1 class="display-1 fw-bold text-white">Сделайте <span class="orange">себя</span> сильнее <br>
						своих <span class="orange">отговорок</span> </h1>
				</div>
				<a href="#">Присоединиться</a>
			</div>
			<div class="discount">
				<div class="img">
					<img src="img/discount.png">
				</div>
				<div class="textik">
					<div class="disc">
						<p><span class="orange">20%</span> Скидка</p>
					</div>
					<div class="nazhm">
						<a href="#">Нажми для получения</a>
					</div>
				</div>
			</div>
		</div>

		<div class="container-pod-offer">
			<div class="one">
				<p>Мое местоположения</p>
				<a href="profile.php"><button type="button" class="btn btn-light">ГДЕ НАХОДИТСЯ</button></a>
			</div>
			<div class="two">
				<a href="#"><img src="img/place.png">Вологда</a>
				<a href="service.php"><button type="button" class="btn btn-light">ВСТУПИТЬ СЕЙЧАС</button></a>
			</div>
		</div>

		<div class="container-rule1" id="rule1">
			<div class="start">
				<div class="hr">
					<img src="img/hr.png">
					<h2>Правило #1</h2>
					<img src="img/hr.png">
				</div>
				<h1 class="text-center"> Наш зал - твой зал</h1>
				<h3 class="text-center">Поднимите свои ноги вверх! Мы думаем, что вам здесь понравится, поскольку вокруг
					вас спроектирован тренажерный зал.</h3>
			</div>
			<div class="container">
				<div class="row">
					<div id="carouselExampleCaptions" class="carousel slide">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
								class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
								aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
								aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/fon-slider.png" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-sm-block">
									<h4>ГРУППОВЫЕ ЗАНЯТИЯ ФИТНЕСОМ</h4>
									<p class="fs-4 d-none d-lg-block">Мы разрабатываем наши клубы таким образом, чтобы обеспечить вам самые
										потрясающие
										тренировки из возможных. Вот почему наши специализированные групповые
										фитнес-студии
										- это четыре стены инноваций, тяжелой работы и веселья.</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="img/fon-slider.png" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-sm-block">
									<h4>ГРУППОВЫЕ ЗАНЯТИЯ ФИТНЕСОМ</h4>
									<p class="fs-4 d-none d-lg-block">Мы разрабатываем наши клубы таким образом, чтобы обеспечить вам самые
										потрясающие
										тренировки из возможных. Вот почему наши специализированные групповые
										фитнес-студии - это четыре стены инноваций, тяжелой работы и веселья.</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="img/fon-slider.png" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-sm-block">
									<h4>ГРУППОВЫЕ ЗАНЯТИЯ ФИТНЕСОМ</h4>
									<p class="fs-4 d-none d-lg-block">Мы разрабатываем наши клубы таким образом, чтобы обеспечить вам самые
										потрясающие
										тренировки из возможных. Вот почему наши специализированные групповые
										фитнес-студии - это четыре стены инноваций, тяжелой работы и веселья.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container-rule2" id="rule2">
			<div class="start">
				<div class="hr">
					<img src="img/hr.png">
					<h2>Правило #2</h2>
					<img src="img/hr.png">
				</div>
				<h1 class="text-center">Мы Здесь, Чтобы Помочь Вам</h1>
				<h3 class="text-center">Независимо от того, с чего вы начинаете, независимо от того, куда вы
					направляетесь.</h3>
			</div>
			<div class="container">
				<div class="row gx-0 gx-lg-4">
					<div class="kard col-12 col-lg-4">
						<img src="img/pom1.png">
						<h4>ПОЗИТИВНОСТЬ</h4>
						<p>Мы воспитатели: мы стремимся только поощрять, развлекать и наделять полномочиями.</p>
					</div>
					<div class="kard col-12 col-lg-4">
						<img src="img/pom2.png">
						<h4>ОБЩЕДОСТУПНОСТЬ</h4>
						<p>Здесь мы сохраняем непредубежденность. В нашем разнообразном сообществе нет единого типа или
							способа. Приходи таким, какой ты есть!</p>
					</div>
					<div class="kard col-12 col-lg-4">
						<img src="img/pom3.png">
						<h4>ВЕСЕЛЬЕ</h4>
						<p>Мы знаем, что заниматься серьезным фитнесом тяжело, но это не значит, что вы не можете сидеть
							на краешке стула, не можете насытиться, с нетерпением ждете вечеринки с тренировками.</p>
					</div>
				</div>

			</div>
		</div>

		<div class="container-rule3" id="rule3">
			<div class="start">
				<div class="hr">
					<img src="img/hr.png">
					<h2>Правило #3</h2>
					<img src="img/hr.png">
				</div>
				<h1 class="text-center">Цели созданы для того, чтобы их достигать</h1>
				<h3 class="text-center">Тренируйтесь с нашими экспертами, чтобы добиться желаемых результатов</h3>
			</div>

			<div class="container container-lg">

				<div class="row mb-4 gx-4 row-cols-sm-2 row-cols-1 row-cols-lg-3">
					<div class="col">
						<div class="kard-trainer kard1">
							<div class="text">
								<p>Иван Подольский</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="kard-trainer kard2">
							<div class="text">
								<p>Марина Сокольская</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="kard-trainer kard3">
							<div class="text">
								<p>Роман Орехов</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="kard-trainer kard4">
							<div class="text">
								<p>Сергей Орлов</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="kard-trainer kard5">
							<div class="text">
								<p>Кирилл Усанов</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="kard-trainer kard6">
							<div class="text">
								<p>Марина Усанова</p>
							</div>
						</div>
					</div>
				</div>



			</div>
		</div>

		<div class="container-rule4" id="rule4">
			<div class="start">
				<div class="hr">
					<img src="img/hr.png">
					<h2>Правило #4</h2>
					<img src="img/hr.png">
				</div>
				<h1 class="text-center">Энергия в каждом</h1>
				<h3 class="text-center">Верьте в силу мотивирующего группового фитнес-сообщества.</h3>
			</div>
			<div class="container">
				<video controls width="1000">
					<source src="img/video.mp4" type="video/mp4">
				</video>
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
					<p><a href="img/polzovatel.pdf" download>УСЛОВИЯ ИСПОЛЬЗОВАНИЯ * ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ * НАСТРОЙКИ ФАЙЛОВ
							COOKIE</a></p>
				</div>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body>

</html>